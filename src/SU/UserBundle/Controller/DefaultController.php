<?php

namespace SU\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function loginPageAction()
    {
        return $this->render('SUUserBundle:Default:login.html.twig');
    }
}
