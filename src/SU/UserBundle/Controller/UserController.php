<?php

namespace SU\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use SU\UserBundle\Entity\User;

class UserController extends Controller
{
    public function loginPageAction() {
		
		if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
		  return $this->redirectToRoute('su_account_homepage');
		}
		
		$authenticationUtils = $this->get('security.authentication_utils');
		
		$csrfToken = $this->get('security.csrf.token_manager')->getToken('authenticate')->getValue();
		
        return $this->render('SUUserBundle:User:login.html.twig',
			array("csrf_token" => $csrfToken,
				  "error" => $authenticationUtils->getLastAuthenticationError()
		));
    }
	
	public function paramAction() {
		return $this->render('SUUserBundle:User:param.html.twig');
	}
	
	public function registerAction() {
		return $this->render('SUUserBundle:User:register.html.twig');
	}
	
	public function sendRegistrationAction(Request $request) {
		
		if ($request->isXmlHttpRequest() and $request->isMethod("POST")) {
			
			$em = $this->getDoctrine()->getManager();
			
			$userManager = $this->get('fos_user.user_manager');
			$user = $userManager->createUser();
			
			$user->setFirstName($request->request->get("firstName"));
			$user->setLastName($request->request->get("lastName"));
			$user->setPlainPassword($request->request->get("pass"));
			$user->setEmail($request->request->get("email"));
			$user->setUsername($request->request->get("email"));
			$user->setEnabled(true);
			$user->setRoles(array("ROLE_USER"));
			
			$em->persist($user);
			
			$em->flush();
			
			return new JsonResponse(array("message" => "user_added"));
		} else {
			throw $this->createNotFoundException();
		}
	}
}
