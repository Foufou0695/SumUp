<?php

namespace SU\AccountBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\Common\Collections\ArrayCollection;

use SU\AccountBundle\Entity\Account;
use SU\AccountBundle\Entity\Category;
use SU\AccountBundle\Entity\Entry;
use SU\AccountBundle\Entity\History;

class AccountController extends Controller
{
    public function homeAction(Request $request) {
		
		$user = $this->getUser();
		$session = $request->getSession();
		
		if (count($user->getAccounts()) == 0) {
			return $this->redirectToRoute('su_account_new_account');
		} else {
			if ($session->get("currentAccount") == "") {
				$accountService = $this->container->get("su_account.accountService");
				$session->set("currentAccount", $accountService->getPrincipalAccount($user));
			}
		}
		
		if ($request->isMethod("POST")) {
			$accountName = $request->request->get("accountName");
			$accountService = $this->container->get("su_account.accountService");
			$account = $accountService->getAccountByName($user, $accountName);
			if ($account) {
				$session->set("currentAccount", $account);
				$session->save();
				return new JsonResponse(array("notif" => "account_changed"));
			} else {
				return new JsonResponse(array("notif" => "account_unchanged", "message" => "Ce compte n'existe pas ou ne vous appartient pas ...."));
			}
		}
		
        return $this->render('SUAccountBundle:Account:index.html.twig');
    }
	
	public function mimmediateAction() {
		return $this->render('SUAccountBundle:Account:mimmediate.html.twig');
	}
	
	public function mdifferedAction() {
		return $this->render('SUAccountBundle:Account:mdiffered.html.twig');
	}
	
	public function msystematicAction() {
		return $this->render('SUAccountBundle:Account:msystematic.html.twig');
	}
	
	public function maccountAction() {
		return $this->render('SUAccountBundle:Account:maccount.html.twig');
	}
	
	public function newAccountAction() {
		$user = $this->getUser();
		if(count($user->getAccounts()) > 0) {
			return $this->redirectToRoute("su_account_mobile_account");
		} else {
			return $this->render('SUAccountBundle:Account:newAccount.html.twig');
		}
	}
	
	public function sendNewAccountAction(Request $request) {
		if ($request->isMethod("POST")) {
			
			$em = $this->getDoctrine()->getManager();
			$user = $this->getUser();
			
			$account = new Account();
			$account->setName($request->request->get('name'));
			$account->setFirstAmount($request->request->get('first_amount'));
			$account->setFirstAmountDate(new \DateTime());
			$account->setAcPriority($request->request->get('ac_priority'));
			$account->setUser($user);
				
			foreach($user->getAccounts() as $userAccount) {
				if($account->getName() == $userAccount->getName()) {
					if ($request->isXmlHttpRequest()) {
						return new JsonResponse(array("notif" => "account_not_added", "message" => "name_already_exists"));
					} else {
						return new Response("Erreur - compte déjà existant ...");
					}
				}
				if($account->getAcPriority() == "Principal" && $userAccount->getAcPriority() == "Principal") {
					$userAccount->setAcPriority("Secondaire");
				}
			}
			
			$em->persist($account);
			$em->flush();
			
			if($request->isXmlHttpRequest()) {
				$tableHtml = '<tr class="ligne">
								<td>'.$account->getName().'</td>
								<td class="ac_priority">'.$account->getAcPriority().'</td>
								<td>
									<a data-id="'.$account->getId().'" class="btn waves-effect waves-light link-hover cardinal-button delete-ac"><i class="fa fa-times left hide-on-small-only"></i>Supprimer</a>
								</td>
							</tr>';
				if ($account->getAcPriority() == "Principal") {
					$selectHtml = '<option value="'.$account->getName().'" selected>'.$account->getName().'</option>';
				} else {
					$selectHtml = '<option value="'.$account->getName().'">'.$account->getName().'</option>';
				}
				$menuHtml = '<li data="'.$account->getName().'" class="account-li"><a class="waves-effect waves-light link-hover"><span>'.$account->getName().'</span> <i class="fa fa-book left hide-on-small-only"></i></a></li>';
				return new JsonResponse(array("notif" => "account_added", "tableHtml" => $tableHtml, "selectHtml" => $selectHtml, "menuHtml" => $menuHtml));
			} else {
				return $this->redirectToRoute('su_account_homepage');
			}
		} else {
			throw $this->createNotFoundException();
		}
	}
	
	public function sendCategoryAction(Request $request) {
		if ($request->isMethod("POST")) {
			$em = $this->getDoctrine()->getManager();
			$user = $this->getUser();
			$newCatName = $request->request->get("new_category");
			$categoryService = $this->container->get("su_account.categoryService");
			
			$verifCategory = $categoryService->getCategoryByName($user, $newCatName);
			
			if ($verifCategory) {
				return new JsonResponse(array("notif" => "nothing_added", "error" => "category", "message" => "Une catégorie de ce nom existe déjà ..."));
			} else {
				$category = new Category();
				$category->setName($newCatName);
				
				$user->addCategory($category);
				$em->flush();
				return new JsonResponse(array("notif" => "category_added", "html" => '<tr class="ligne ligne-category"><td class="category-name">'.$category->getName().'</td><td><a data-id="'.$category->getId().'" class="btn waves-effect waves-light link-hover cardinal-button edit-category truncate"><i class="fa fa-edit left hide-on-small-only"></i>Renommer</a></td><td><a data-id="'.$category->getId().'" class="btn waves-effect waves-light link-hover cardinal-button delete-category"><i class="fa fa-times left hide-on-small-only"></i>Supprimer</a></td></tr>'));
			}
		} else {
			throw $this->createNotFoundException();
		}
	}
	
	public function deleteCategoryAction(Request $request) {
		if ($request->isMethod("POST") && $request->isXmlHttpRequest()) {
			$em = $this->getDoctrine()->getManager();
			$categoryRepository = $em->getRepository("SUAccountBundle:Category");
			$entryRepository = $em->getRepository("SUAccountBundle:Entry");
			$session = $request->getSession();
			
			$id = $request->request->get("category_id");
			$category = $categoryRepository->find($id);
			
			if ($category) {
				$user = $this->getUser();
				
				if ($category->getUser()->getId() == $user->getId()) {
					
					foreach($user->getAccounts() as $account) {
						$entries = $entryRepository->findBy(array("account" => $account, "category" => $category));
						foreach($entries as $entry) {
							$account->removeEntry($entry);
							$em->remove($entry);
						}
					}
					
					$user->removeCategory($category);
					$em->remove($category);
					$em->flush();
					return new JsonResponse(array("notif" => "category_deleted"));
				} else {
					return new JsonResponse(array("notif" => "category_not_deleted", "message" => "Cette catégorie ne vous appartient pas!"));
				}
			} else {
				return new JsonResponse(array("notif" => "category_not_deleted", "message" => "Aucune catégorie trouvée ..."));
			}
		} else {
			throw $this->createNotFoundException();
		}
	}
	
	public function updateAcPriorityAction(Request $request) {
		if ($request->isMethod("POST") && $request->isXmlHttpRequest()) {
			$em = $this->getDoctrine()->getManager();
			$user = $this->getUser();
			$principal_ac = $request->request->get("principal_ac");
			
			if ($principal_ac != "") {
				foreach($user->getAccounts() as $account) {
					if ($account->getName() == $principal_ac) {
						$account->setAcPriority("Principal");
					} else {
						$account->setAcPriority("Secondaire");
					}
				}
				$em->flush();
				return new JsonResponse(array("notif" => "principal_ac_updated"));
			} else {
				return new JsonResponse(array("notif" => "principal_ac_not_updated", "message" => "Le compte indiqué n'existe pas."));
			}
		}
	}
	
	public function deleteAccountAction(Request $request) {
		if ($request->isMethod("POST") && $request->isXmlHttpRequest()) {
			$em = $this->getDoctrine()->getManager();
			$user = $this->getUser();
			$accountRepository = $em->getRepository("SUAccountBundle:Account");
			
			$account = $accountRepository->find($request->request->get("account_id"));
			
			if (($account) && ($account->getUser()->getId() == $user->getId())) {
				$user->removeAccount($account);
				$em->remove($account);
				$em->flush();
				return new JsonResponse(array("notif" => "account_deleted"));
			} else {
				return new JsonResponse(array("notif" => "no_account_deleted", "message" => "Le compte demandé n'existe pas ou n'est pas le votre."));
			}
		} else {
			throw $this->createNotFoundException();
		}
	}
	
	public function sendOperationAction(Request $request) {
		if ($request->isMethod("POST") && $request->isXmlHttpRequest()) {
			$em = $this->getDoctrine()->getManager();
			$user = $this->getUser();
			$session = $request->getSession();
			$currentAccount = $session->get("currentAccount");
			$categoryService = $this->container->get("su_account.categoryService");
			$accountService = $this->container->get("su_account.accountService");
			
			$category = $categoryService->getCategoryByName($user, $request->request->get("category"));
			
			if ($category) {
				$entry = new Entry();
				$entry->setAmount($request->request->get("amount"));
				$entry->setPaimentKind($request->request->get("paimentKind"));
				$entry->setEffective($request->request->get("effective"));
				$entry->setPaimentDate(new \DateTime ($request->request->get("date")));
				
				if (($entry->getEffective() == "immediate") and ($entry->getPaimentDate()->getTimestamp() > (new \Datetime())->getTimestamp())) {
					$entry->setEffective("differed");
				}
				
				$entry->setDescription($request->request->get("description"));
				$entry->setCategory($category);
				
				$accountService->getAccountByName($user, $currentAccount->getName())->addEntry($entry);
				$em->flush();
				
				return new JsonResponse(array("notif" => "operation_added"));
			} else {
				return new JsonResponse(array("notif" => "nothing_added", "error" => "category", "message" => "La catégorie demandée n'existe pas -> ".$request->request->get("name")));
			}
			
			
		} else {
			throw $this->createNotFoundException();
		}
	}
	
	public function updateFirstAmountAction(Request $request) {
		if ($request->isMethod("POST") and $request->isXmlHttpRequest()) {
			$em = $this->getDoctrine()->getManager();
			$user = $this->getUser();
			$session = $request->getSession();
			$firstAmount = $request->request->get("firstAmount");
			$accountService = $this->container->get("su_account.accountService");
			
			if ($firstAmount) {
				$account = $accountService->getAccountByName($user, $session->get("currentAccount")->getName());
				$account->setFirstAmount($firstAmount);
				$session->set("currentAccount", $account);
				$em->flush();
				return new JsonResponse(array("notif" => "first_amount_updated"));
			} else {
				return new JsonResponse(array("notif" => "nothing_updated", "message" => "Le montant indiqué est vide ..."));
			}
		} else {
			throw $this->createNotFoundException();
		}
	}
	
	public function getMonthOperationsAction($pdf, $date, Request $request) {
		$em = $this->getDoctrine()->getManager();
		$user = $this->getUser();
		$session = $request->getSession();
		$entryRepository = $em->getRepository("SUAccountBundle:Entry");
		$accountService = $this->container->get("su_account.accountService");
		$currentAccount = $session->get("currentAccount");
		
		if (($date == "-1") or ($date == (new \DateTime())->format("Ym"))) {
			$monthOperations = $entryRepository->findThisMonthOperations($currentAccount);
			
			$totalMonthOperations = $accountService->sumEntries($monthOperations);
			$totalInBank = $currentAccount->getFirstAmount() - $totalMonthOperations;
			
			return $this->render("SUAccountBundle:Account:currentOperations.html.twig",
								array("monthOperations" => $monthOperations,
									"totalMonthOperations" => $totalMonthOperations,
									"totalInBank" => $totalInBank,
									"pdf" => $pdf,
									"date" => "-1"
								));
		} else {
			$dateObject = new \DateTime(substr($date, 0, 4)."-".substr($date, 4, 2)."-01");
			$monthOperations = $entryRepository->getOperationsByMonth($dateObject, $currentAccount);
			
			$totalMonthOperations = $accountService->sumEntries($monthOperations);
			$totalInBank = $accountService->getHistoryByDate($dateObject, $accountService->getAccountByName($user, $currentAccount->getName()))->getAmount() - $totalMonthOperations;
			
			$dateObject->modify("+1 Month");
			$dateObject->modify("-1 Day");
			return $this->render("SUAccountBundle:Account:currentOperations.html.twig",
								array("monthOperations" => $monthOperations,
									"totalMonthOperations" => $totalMonthOperations,
									"totalInBank" => $totalInBank,
									"pdf" => $pdf,
									"date" => $dateObject
								));
		}
	}
	
	public function getFutureOperationsAction($pdf, $date, Request $request) {
		$em = $this->getDoctrine()->getManager();
		$session = $request->getSession();
		$currentAccount = $session->get("currentAccount");
		$entryRepository = $em->getRepository("SUAccountBundle:Entry");
		$accountService = $this->container->get("su_account.accountService");
		
		if (($date == "-1") or ($date == (new \DateTime())->format("Ym"))) {
			$firstAmountCurrentAccount = $currentAccount->getFirstAmount();
			$futureOperations = $entryRepository->findFutureOperations($currentAccount);
			$monthOperations = $entryRepository->findThisMonthOperations($currentAccount);
			
			$totalMonthOperations = $accountService->sumEntries($monthOperations);
			$totalInBank = $firstAmountCurrentAccount - $totalMonthOperations;
			
			$totalFutureOperations = $accountService->sumEntries($futureOperations);
			$totalInFuture = $totalInBank - $totalFutureOperations;
			
			return $this->render("SUAccountBundle:Account:futureOperations.html.twig",
								array("futureOperations" => $futureOperations,
									"totalFutureOperations" => $totalFutureOperations,
									"totalInFuture" => $totalInFuture,
									"pdf" => $pdf
								));
		} else {
			return new Response("");
		}
	}
	
	public function getGraphDataAction(Request $request) {
		if ($request->isMethod("GET") and $request->isXmlHttpRequest()) {
			$em = $this->getDoctrine()->getManager();
			$session = $request->getSession();
			$user = $this->getUser();
			$currentAccount = $session->get("currentAccount");
			$accountService = $this->container->get("su_account.accountService");
			$entryRepository = $em->getRepository("SUAccountBundle:Entry");
			
			$dataOut = [];
			$dataIn = [];
			$totalOut = 0;
			$totalIn = 0;
			$accountLevelGraph = array(1 => -intval($currentAccount->getFirstAmount()));
			//$trace = "";
			
			foreach($user->getCategories() as $category) {
				$allOutOperationsInCategory = $entryRepository->getOutOperationsByCategory($category, $currentAccount, new \DateTime());
				$totalCategory = $accountService->sumEntries($allOutOperationsInCategory);
				if ($totalCategory > 0) {
					$html = $this->renderView("SUAccountBundle:Account:categoryDetailsOperations.html.twig", array("categoryOperations" => $allOutOperationsInCategory, "totalCategoryOperations" => $totalCategory));
				} else {
					$html = '';
				}
				$tempOut = array("name" => $category->getName(), "html" => $html, "totalCategory" => $totalCategory, "percent" => 0);
				$totalOut = $totalOut + $tempOut["totalCategory"];
				$dataOut[] = $tempOut;
				
				$allInOperationsInCategory = $entryRepository->getInOperationsByCategory($category, $currentAccount, new \DateTime());
				$totalCategory = $accountService->sumEntries($allInOperationsInCategory);
				if ($totalCategory < 0) {
					$html = $this->renderView("SUAccountBundle:Account:categoryDetailsOperations.html.twig", array("categoryOperations" => $allInOperationsInCategory, "totalCategoryOperations" => $totalCategory));
				} else {
					$html = '';
				}
				$tempIn = array("name" => $category->getName(), "html" => $html, "totalCategory" => $totalCategory, "percent" => 0);
				$totalIn = $totalIn + abs($tempIn["totalCategory"]);
				$dataIn[] = $tempIn;
				
				foreach($allInOperationsInCategory as $operation) {
					if ($operation->getPaimentDate()->format("y-m") == (new \DateTime())->format("y-m")) {
						$day = $operation->getPaimentDate()->format("d");
						if (array_key_exists(intval($day), $accountLevelGraph)) {
							$accountLevelGraph[intval($day)] = $accountLevelGraph[intval($day)] + $operation->getAmount();
						} else {
							$accountLevelGraph[intval($day)] = $operation->getAmount();
						}
						//$trace = $trace . "\n" . $operation->getAmount() . " - " . $operation->getPaimentDate()->format("y-m-d") . " category " . $operation->getCategory()->getName() . " ----->>>> " . $day;
					}
				}
				
				foreach($allOutOperationsInCategory as $operation) {
					if ($operation->getPaimentDate()->format("y-m") == (new \DateTime())->format("y-m")) {
						$day = $operation->getPaimentDate()->format("d");
						if (array_key_exists(intval($day), $accountLevelGraph)) {
							$accountLevelGraph[intval($day)] = $accountLevelGraph[intval($day)] + $operation->getAmount();
						} else {
							$accountLevelGraph[intval($day)] = $operation->getAmount();
						}
						//$trace = $trace . "\n" . $operation->getAmount() . " - " . $operation->getPaimentDate()->format("y-m-d") . " category " . $operation->getCategory()->getName() . " ----->>>> " . $day;
					}
				}
				$lastKey = key( array_slice( $accountLevelGraph, -1, 1, TRUE ) );
			}
			
			ksort($accountLevelGraph);
			$amountTemp = 0;
			//$trace2 = "";
			foreach($accountLevelGraph as $key => $amount) {
				//$trace2 = $trace2 . "lastKey " . $key . " / " . $accountLevelGraph[$key] . " -> ";
				$accountLevelGraph[$key] = $amountTemp - $amount;
				$amountTemp = $accountLevelGraph[$key];
				//$trace2 = $trace2 . $accountLevelGraph[$key] . "\n";
			}
			
			if ($totalOut > 0) {
				foreach($dataOut as $key => $category) {
					$dataOut[$key]["percent"] = abs($category["totalCategory"]/$totalOut);
				}
			}
			
			if ($totalIn > 0) {
				foreach($dataIn as $key => $category) {
					$dataIn[$key]["percent"] = abs($category["totalCategory"]/$totalIn);
				}
			}
			
			return new JsonResponse(array("dataOut" => $dataOut, "dataIn" => $dataIn, "accountLevelGraph" => $accountLevelGraph, "totalIn" => $totalIn, "totalOut" => $totalOut));
			
		} else {
			return new $this->createNotFoundException();
		}
	}
		
	public function updateOperationAction(Request $request) {
		if ($request->isMethod("POST") and $request->isXmlHttpRequest()) {
			$em = $this->getDoctrine()->getManager();
			$session = $request->getSession();
			$user = $this->getUser();
			
			$currentAccount = $session->get("currentAccount");
			$operationId = $request->request->get("operationId");
			$newType = $request->request->get("newType");
			$newCategory = $request->request->get("newCategory");
			$newDate = $request->request->get("newDate");
			$newAmount = $request->request->get("newAmount");
			
			$entryRepository = $em->getRepository("SUAccountBundle:Entry");
			$entry = $entryRepository->find($operationId);
			
			$categoryService = $this->container->get("su_account.categoryService");
			$category = $categoryService->getCategoryByName($user, $newCategory);
			
			if ($entry) {
				if ($entry->getAccount()->getId() == $currentAccount->getId()) {
					if ($category) {
						$entry->setAmount($newAmount);
						$entry->setPaimentKind($newType);
						$entry->setPaimentDate(new \DateTime ($newDate));
						$entry->setCategory($category);
						$em->flush();
						return new JsonResponse(array("notif" => "operation_updated", "message" => $entry->getAmount()));
					} else {
						return new JsonResponse(array("notif" => "nothing_updated", "message" => "La catégorie demandée n'est pas dans votre liste de catégories ..."));
					}
				} else {
					return new JsonResponse(array("notif" => "nothing_updated", "message" => "L'opération modifée ne correspond pas au compte en cours ..."));
				}
			} else {
				return new JsonResponse(array("notif" => "nothing_updated", "message" => "L'opération indiquée n'existe pas ..."));
			}
		} else {
			throw $this->createNotFoundException();
		}
	}
	
	public function deleteOperationAction(Request $request) {
		if ($request->isMethod("POST") && $request->isXmlHttpRequest()) {
			$em = $this->getDoctrine()->getManager();
			$session = $request->getSession();
			$user = $this->getUser();
			$entryRepository = $em->getRepository("SUAccountBundle:Entry");
			$currentAccount = $session->get("currentAccount");
			$accountService = $this->container->get("su_account.accountService");
			
			$operationId = $request->request->get("operationId");
			$operation = $entryRepository->find($operationId);
			
			if ($operation) {
				if ($operation->getAccount()->getId() == $currentAccount->getId()) {
					$account = $accountService->getAccountByName($user, $currentAccount->getName());
					$account->removeEntry($operation);
					$em->remove($operation);
					$em->flush();
					return new JsonResponse(array("notif" => "operation_deleted"));
				} else {
					return new JsonResponse(array("notif" => "nothing_deleted", "message" => "L'opération ne correspond au compte en cours ..."));
				}
			} else {
				return new JsonResponse(array("notif" => "nothing_deleted", "message" => "L'opération indiquée n'existe pas ..."));
			}
		} else {
			throw $this->createNotFoundException();
		}
	}
	
	public function categoryDetailsAction(Request $request) {
		$session = $request->getSession();
		if ($request->isMethod("POST") && $request->isXmlHttpRequest()) {
			$em = $this->getDoctrine()->getManager();
			$user = $this->getUser();
			$categoryDetails = $request->request->get("categoryDetails");
			$categoryService = $this->container->get("su_account.categoryService");
			
			$category = $categoryService->getCategoryByName($user, $categoryDetails);
			
			if ($category) {
				$session->set("categoryDetails", $category);
				return new JsonResponse(array("notif" => "category_details_changed"));
			} else {
				return new JsonResponse(array("notif" => "nothing_changed", "message" => "Aucun catégorie trouvée associée à votre compte ..."));
			}
		} else if ($session->get("categoryDetails") != "") {
			$em = $this->getDoctrine()->getManager();
			$session = $request->getSession();
			$currentAccount = $session->get("currentAccount");
			$entryRepository = $em->getRepository("SUAccountBundle:Entry");
			$accountService = $this->container->get("su_account.accountService");
			
			$allOperationsInCategory = $entryRepository->getOperationsByCategory($session->get("categoryDetails"), $currentAccount, new \DateTime());
			$totalCategory = $accountService->sumEntries($allOperationsInCategory);
			
			return $this->render("SUAccountBundle:Account:mcategoryDetails.html.twig", array("categoryOperations" => $allOperationsInCategory, "totalCategoryOperations" => $totalCategory));
		} else {
			throw $this->createNotFoundException();
		}
	}
	
	public function pdfAction($year, $month, Request $request) {
		$user = $this->getUser();
		$session = $request->getSession();
		$generate = $request->query->get("generate");
		$currentAccount = $session->get('currentAccount');
		$filepath = 'pdf/'.$user->getId().'/';
		$filename = 'SumUp - '.$currentAccount->getName().' - Comptes du '.$month.'-'.$year.'.pdf';
		
		if ($request->isMethod("GET") && $request->isXmlHttpRequest()) {
			switch ($request->query->get("status")) {
				case "request":
					if (is_file($filepath.$filename) and ((new \DateTime())->format('m-Y') != $month.'-'.$year)) {
						if ($generate == "0") {
							return new JsonResponse(array("notif" => "ready"));
						} else {
							return new JsonResponse(array("notif" => "request_generation_process"));
						}
					} else {
						return new JsonResponse(array("notif" => "request_generation_process"));
					}
					break;
				case "generate":
					if (!is_file($filepath.$filename) or ((new \DateTime())->format('m-Y') == $month.'-'.$year) or ($generate == "1")) {
						if (is_file($filepath.$filename)) {
							unlink($filepath.$filename);
						}
						$accountService = $this->container->get("su_account.accountService");
						$dateTemp = new \DateTime($year.'-'.$month.'-01');
						$html = $accountService->createMonthPdf($this->getRawData($request, $dateTemp), $dateTemp);
						$this->get('knp_snappy.pdf')->generateFromHtml($html, $filepath.$filename, array("footer-left" => $currentAccount->getName() . " - ".$month.'-'.$year));
					}
					return new JsonResponse(array("notif" => "ready"));
					break;
				default:
					return new JsonResponse(array("notif" => "unknown_request"));
					break;
			}
		}
		
		if (is_file($filepath.$filename)) {
			return new Response(
				file_get_contents($filepath.$filename),
				200,
				[
					'Content-Type' => 'application/pdf',
					'Content-Disposition' => sprintf('attachment; filename="%s"', $filename),
				]
			);
		} else {
			if (is_file($filepath.$filename)) {
				unlink($filepath.$filename);
			}
			$accountService = $this->container->get("su_account.accountService");
			$dateTemp = new \DateTime($year.'-'.$month.'-01');
			$html = $accountService->createMonthPdf($this->getRawData($request, $dateTemp), $dateTemp);
			$this->get('knp_snappy.pdf')->generateFromHtml($html, $filepath.$filename, array("footer-left" => $currentAccount->getName() . " - ".$month.'-'.$year));
			
			return new Response(
				file_get_contents($filepath.$filename),
				200,
				[
					'Content-Type' => 'application/pdf',
					'Content-Disposition' => sprintf('attachment; filename="%s"', $filename),
				]
			);
		}
    }
	
	public function getRawData(Request $request, $date) {
		$em = $this->getDoctrine()->getManager();
		$session = $request->getSession();
		$user = $this->getUser();
		$currentAccount = $session->get("currentAccount");
		$accountService = $this->container->get("su_account.accountService");
		$entryRepository = $em->getRepository("SUAccountBundle:Entry");
		$storyRepository = $em->getRepository("SUAccountBundle:History");
		
		if ($date->format('Y-m') == (new \DateTime())->format('Y-m')) {
			$firstAmount = $currentAccount->getFirstAmount();
		} else {
			$firstAmount = $accountService->getHistoryByDate($date, $accountService->getAccountByName($user, $currentAccount->getName()))->getAmount();
		}
		
		$dataOut = [];
		$dataIn = [];
		$totalOut = 0;
		$totalIn = 0;
		$accountLevelGraph = array(1 => -$firstAmount);
		//$trace = "";
		
		foreach($user->getCategories() as $category) {
			$allOutOperationsInCategory = $entryRepository->getOutOperationsByCategory($category, $currentAccount, $date);
			$totalCategory = $accountService->sumEntries($allOutOperationsInCategory);
			if ($totalCategory > 0) {
				$html = $this->renderView("SUAccountBundle:Account:categoryDetailsOperations.html.twig", array("categoryOperations" => $allOutOperationsInCategory, "totalCategoryOperations" => $totalCategory));
			} else {
				$html = '';
			}
			$tempOut = array("name" => $category->getName(), "html" => $html, "totalCategory" => $totalCategory, "percent" => 0);
			$totalOut = $totalOut + $tempOut["totalCategory"];
			$dataOut[] = $tempOut;
			
			$allInOperationsInCategory = $entryRepository->getInOperationsByCategory($category, $currentAccount, $date);
			$totalCategory = $accountService->sumEntries($allInOperationsInCategory);
			if ($totalCategory < 0) {
				$html = $this->renderView("SUAccountBundle:Account:categoryDetailsOperations.html.twig", array("categoryOperations" => $allInOperationsInCategory, "totalCategoryOperations" => $totalCategory));
			} else {
				$html = '';
			}
			$tempIn = array("name" => $category->getName(), "html" => $html, "totalCategory" => $totalCategory, "percent" => 0);
			$totalIn = $totalIn + abs($tempIn["totalCategory"]);
			$dataIn[] = $tempIn;
			
			foreach($allInOperationsInCategory as $operation) {
				if ($operation->getPaimentDate()->format("y-m") == $date->format("y-m")) {
					$day = $operation->getPaimentDate()->format("d");
					if (array_key_exists(intval($day), $accountLevelGraph)) {
						$accountLevelGraph[intval($day)] = $accountLevelGraph[intval($day)] + $operation->getAmount();
					} else {
						$accountLevelGraph[intval($day)] = $operation->getAmount();
					}
					//$trace = $trace . "\n" . $operation->getAmount() . " - " . $operation->getPaimentDate()->format("y-m-d") . " category " . $operation->getCategory()->getName() . " ----->>>> " . $day;
				}
			}
			
			foreach($allOutOperationsInCategory as $operation) {
				if ($operation->getPaimentDate()->format("y-m") == $date->format("y-m")) {
					$day = $operation->getPaimentDate()->format("d");
					if (array_key_exists(intval($day), $accountLevelGraph)) {
						$accountLevelGraph[intval($day)] = $accountLevelGraph[intval($day)] + $operation->getAmount();
					} else {
						$accountLevelGraph[intval($day)] = $operation->getAmount();
					}
					//$trace = $trace . "\n" . $operation->getAmount() . " - " . $operation->getPaimentDate()->format("y-m-d") . " category " . $operation->getCategory()->getName() . " ----->>>> " . $day;
				}
			}
			//$lastKey = key( array_slice( $accountLevelGraph, -1, 1, TRUE ) );
		}
		
		ksort($accountLevelGraph);
		$amountTemp = 0;
		//$trace2 = "";
		foreach($accountLevelGraph as $key => $amount) {
			//$trace2 = $trace2 . "lastKey " . $key . " / " . $accountLevelGraph[$key] . " -> ";
			$accountLevelGraph[$key] = $amountTemp - $amount;
			$amountTemp = $accountLevelGraph[$key];
			//$trace2 = $trace2 . $accountLevelGraph[$key] . "\n";
		}
		
		if ($totalOut > 0) {
			foreach($dataOut as $key => $category) {
				$dataOut[$key]["percent"] = abs($category["totalCategory"]/$totalOut);
			}
		}
		
		if ($totalIn > 0) {
			foreach($dataIn as $key => $category) {
				$dataIn[$key]["percent"] = abs($category["totalCategory"]/$totalIn);
			}
		}
		
		$monthStartingAmount = 0;
		if ((new \DateTime($date->format("Y-m")."-01"))->format("y-m") == (new \DateTime())->format("y-m")) {
			$monthStartingAmount = $currentAccount->getFirstAmount();
		} else {
			$storyTemp = $storyRepository->getStoryByDate($date, $currentAccount);
			if ($storyTemp != null) {
				$monthStartingAmount = $storyTemp[0]->getAmount();
			} else {
				$monthStartingAmount = 999;
			}
		}
		
		$rawData = array("dataOut" => $dataOut, "dataIn" => $dataIn, "accountLevelGraph" => $accountLevelGraph, "totalIn" => $totalIn, "totalOut" => $totalOut, "monthStartingAmount" => $monthStartingAmount);
		return $rawData;
	}
		
	public function accountTemplateAction(Request $request) {
		$rawData = $this->getRawData($request, new \DateTime());
		return $this->render("SUAccountBundle:Account:accountTemplate.html.twig", array("rawData" => $rawData, "dateTemp" => new \DateTime()));
	}
	
	public function graphTemplateAction(Request $request) {
		$rawData = $this->getRawData($request, new \DateTime());
		return $this->render("SUAccountBundle:Account:graphTemplate.html.twig", array("rawData" => $rawData, "dateTemp" => new \DateTime()));
	}
	
	public function coverAction(Request $request) {
		return $this->render("SUAccountBundle:Account:cover.html.twig");
	}
	
	public function refreshAccountAction(Request $request) {
		$user = $this->getUser();
		$session = $request->getSession();
		$currentAccount = $session->get('currentAccount');
		$em = $this->getDoctrine()->getManager();
		$accountService = $this->container->get("su_account.accountService");
		$entryRepository = $em->getRepository("SUAccountBundle:Entry");
		$now = (new \DateTime())->format('m-Y');
		
		if ($now != $currentAccount->getFirstAmountDate()->format('m-Y')) {
			$datetime = $currentAccount->getFirstAmountDate();
			$newAccount = 0;
			$trace = "";
			
			while ($datetime->format('m-Y') != $now) {
				$currentDate = new \DateTime($currentAccount->getFirstAmountDate()->format("Y-m")."-01");
				$history = new History();
				$history->setAmount($currentAccount->getFirstAmount());
				$history->setAmountDate(new \DateTime($currentAccount->getFirstAmountDate()->format('Y-m-d')));
				
				$systematicOperations = $entryRepository->getSystematicOperationsByMonth($currentAccount, $currentDate);
				$emAccount = $accountService->getAccountByName($user, $currentAccount->getName());
				$accountService->addSystematicOperations($emAccount, $systematicOperations);
				
				$emAccount->addStory($history);
				$em->flush();
				
				//Calcul du nouveau montant
				$entriesToCount = $entryRepository->getOperationsByMonth($currentAccount->getFirstAmountDate(), $currentAccount);
				$newAccount = $currentAccount->getFirstAmount();
				foreach($entriesToCount as $entry) {
					$newAccount = $newAccount - $entry->getAmount();
				}
				
				//Création du pdf du mois
				$filepath = 'pdf/'.$user->getId().'/';
				$filename = 'SumUp - '.$currentAccount->getName().' - Comptes du '.$currentAccount->getFirstAmountDate()->format('m-Y').'.pdf';
				$dateTemp = new \DateTime($currentAccount->getFirstAmountDate()->format('Y-m').'-01');
				$html = $accountService->createMonthPdf($this->getRawData($request, $dateTemp), $dateTemp);
				$this->get('knp_snappy.pdf')->generateFromHtml($html, $filepath.$filename, array("footer-left" => $currentAccount->getName() . " - ".$dateTemp->format("m-Y")));
				
				$currentAccount->setFirstAmount($newAccount);
				$datetime->modify("+1 Month");
				$currentAccount->setFirstAmountDate($datetime);
				$trace = $trace . $history->getAmountDate()->format('y-m-d').' Two\n';
				
			}
			$emAccount->setFirstAmount($newAccount);
			$emAccount->setFirstAmountDate(new \DateTime((new \DateTime())->format('Y-m')."-01"));
			$em->flush();
			
			$session->set("currentAccount", $emAccount);
			
			return new JsonResponse(array("notif" => "account_refreshed", "message" => "all good :)"));
			
		} else {
			return new JsonResponse(array("notif" => "nothing_to_do", "message" => $this->getRawData($request, new \DateTime('2016-07-01'))));
		}
	}
	
	public function previousMonthsAction(Request $request) {
		if ($request->isMethod("GET") && $request->isXmlHttpRequest()) {
			$accountService = $this->get('su_account.accountService');
			$user = $this->getUser();
			$account = $accountService->getAccountByName($user, $request->getSession()->get("currentAccount")->getName());
			return new JsonResponse(array("notif" => "ready", "html" => $this->renderView("SUAccountBundle:Account:previousMonths.html.twig", array("stories" => $account->getStories()))));
		} else {
			throw $this->createNotFoundException();
		}
	}
	
	public function renameCategoryAction(Request $request) {
		if ($request->isMethod("POST") && $request->isXmlHttpRequest()) {
			$em = $this->getDoctrine()->getManager();
			$user = $this->getUser();
			$categoryRepository = $em->getRepository("SUAccountBundle:Category");
			$categoryService = $this->get("su_account.categoryService");
			$categoryId = $request->request->get("categoryId");
			$newName = $request->request->get("newName");
			
			$category = $categoryRepository->find($categoryId);
			
			if ($category) {
				if (($newName != "") && ($category->getUser()->getId() == $user->getId())) {
					$verifCat = $categoryService->getCategoryByName($user, $newName);
					if ($verifCat) {
						return new JsonResponse(array("notif" => "name_in_use", "message" => "Une catégorie présente déjà ce nom."));
					} else {
						$category->setName($newName);
						$em->flush();
						return new JsonResponse(array("notif" => "category_updated"));
					}
				} else {
					return new JsonResponse(array("notif" => "nothing_changed", "message" => "Cette catégorie ne vous appartient pas, ou le nouveau nom n'est pas correct."));
				}
			} else {
				return new JsonResponse(array("notif" => "nothing_changed", "message" => "Catégorie non trouvée."));
			}
		} else {
			throw $this->createNotFoundException();
		}
	}
}