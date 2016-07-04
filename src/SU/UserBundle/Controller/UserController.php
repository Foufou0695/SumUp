<?php

namespace SU\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function loginPageAction() {
        return $this->render('SUUserBundle:User:login.html.twig');
    }
	
	public function paramAction() {
		return $this->render('SUUserBundle:User:param.html.twig');
	}
	
	public function registerAction() {
		return $this->render('SUUserBundle:User:register.html.twig');
	}
}
