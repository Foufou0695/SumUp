<?php

namespace SU\AccountBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use SU\AccountBundle\Entity\Account;

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
		return $this->render('SUAccountBundle:Account:newAccount.html.twig');
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
			
			$em->persist($account);
			$em->flush();
			
			return $this->redirectToRoute('su_account_homepage');
		} else {
			return $this->createNotFoundException();
		}
	}
}
