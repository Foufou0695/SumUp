<?php

namespace SU\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SUMainBundle:Default:index.html.twig');
    }
}
