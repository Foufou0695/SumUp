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

class AccountController extends Controller
{
    public function homeAction() {
		
		$user = $this->getUser();
		
		if (count($user->getAccounts()) == 0) {
			return $this->redirectToRoute('su_account_new_account');
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
				return new JsonResponse(array("notif" => "account_added"));
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
			$categories = $user->getCategories();
			
			$category = new Category();
			$category->setName($request->request->get("new_category"));
			
			$categories->addCategoryList($category);
			$em->flush();
			return new JsonResponse(array("notif" => "category_added", "html" => '<tr><td>'.$category->getName().'</td><td><a data-id="'.$category->getId().'" class="btn waves-effect waves-light link-hover cardinal-button delete-category"><i class="fa fa-times left hide-on-small-only"></i>Supprimer</a></td></tr>'));
		} else {
			return $this->createNotFoundException();
		}
	}
	
	public function deleteCategoryAction(Request $request) {
		if($request->isMethod("POST") && $request->isXmlHttpRequest()) {
			$em = $this->getDoctrine()->getManager();
			$categoryRepository = $em->getRepository("SUAccountBundle:Category");
			
			$id = $request->request->get("category_id");
			$category = $categoryRepository->find($id);
			
			if($category) {
				$user = $this->getUser();
				$categories = $user->getCategories();
				
				if ($category->getCategories()->getUser()->getId() == $user->getId()) {
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
}
