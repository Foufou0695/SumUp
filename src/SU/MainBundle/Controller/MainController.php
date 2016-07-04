<?php

namespace SU\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
		if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
			return $this->redirectToRoute('su_account_homepage');
		} else {
			return $this->redirectToRoute('su_user_login');
		}
    }
}
