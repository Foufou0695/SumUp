<?php

namespace SU\AccountBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\Common\Collections\ArrayCollection;

use SU\AccountBundle\Entity\Account;
use SU\AccountBundle\Entity\Category;
use SU\AccountBundle\Entity\Categories;
use SU\AccountBundle\Entity\Entry;

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
				$menuHtml = '<li><a class="waves-effect waves-light link-hover"><span>'.$account->getName().'</span> <i class="fa fa-book left hide-on-small-only"></i></a></li>';
				return new JsonResponse(array("notif" => "account_added", "tableHtml" => $tableHtml, "selectHtml" => $selectHtml, "menuHtml" => $menuHtml));
			} else {
				return $this->redirectToRoute('su_account_homepage');
			}
		} else {
			return $this->createNotFoundException();
		}
	}
	
	public function sendImmediateAction(Request $request) {
		if ($request->isMethod("POST")) {
			
			$em = $this->getDoctrine()->getManager();
			$user = $this->getUser();
			
			return new Response('En attente de création des catégories ...');
		} else {
			return $this->createNotFoundException();
		}
	}
	
	public function sendCategoryAction(Request $request) {
		if ($request->isMethod("POST")) {
			$em = $this->getDoctrine()->getManager();
			$user = $this->getUser();
			
			$category = new Category();
			$category->setName($request->request->get("new_category"));
			
			$user->addCategory($category);
			$em->flush();
			return new JsonResponse(array("notif" => "category_added", "html" => '<tr><td>'.$category->getName().'</td><td><a data-id="'.$category->getId().'" class="btn waves-effect waves-light link-hover cardinal-button delete-category"><i class="fa fa-times left hide-on-small-only"></i>Supprimer</a></td></tr>'));
		} else {
			return $this->createNotFoundException();
		}
	}
	
	public function deleteCategoryAction(Request $request) {
		if ($request->isMethod("POST") && $request->isXmlHttpRequest()) {
			$em = $this->getDoctrine()->getManager();
			$categoryRepository = $em->getRepository("SUAccountBundle:Category");
			
			$id = $request->request->get("category_id");
			$category = $categoryRepository->find($id);
			
			if ($category) {
				$user = $this->getUser();
				
				if ($category->getUser()->getId() == $user->getId()) {
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
			return $this->createNotFoundException();
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
			return $this->createNotFoundException();
		}
	}
	
	public function sendOperationAction(Request $request) {
		if ($request->isMethod("POST") && $request->isXmlHttpRequest()) {
			$em = $this->getDoctrine()->getManager();
			$user = $this->getUser();
			$session = $request->getSession();
			$categoryService = $this->container->get("su_account.categoryService");
			$accountService = $this->container->get("su_account.accountService");
			
			$category = $categoryService->getCategoryByName($user, $request->request->get("category"));
			
			if ($category) {
				$entry = new Entry();
				$entry->setAmount($request->request->get("amount"));
				$entry->setPaimentKind($request->request->get("paimentKind"));
				$entry->setEffective($request->request->get("effective"));
				$entry->setPaimentDate(new \DateTime ($request->request->get("date")));
				$entry->setDescription($request->request->get("description"));
				$entry->setCategory($category);
				
				$accountService->getPrincipalAccount($user)->addEntry($entry);
				$em->flush();
				
				return new JsonResponse(array("notif" => "operation_added"));
			} else {
				return new JsonResponse(array("notif" => "nothing_added", "error" => "category", "message" => "La catégorie demandée n'existe pas -> ".$request->request->get("name")));
			}
			
			
		} else {
			return $this->createNotFoundException();
		}
	}
}