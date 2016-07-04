<?php

namespace SU\AccountBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccountController extends Controller
{
    public function indexAction() {
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
}
