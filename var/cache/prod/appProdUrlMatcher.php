<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // su_account_homepage
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'SU\\AccountBundle\\Controller\\AccountController::indexAction',  '_route' => 'su_account_homepage',);
        }

        // su_user_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'SU\\UserBundle\\Controller\\DefaultController::loginPageAction',  '_route' => 'su_user_login',);
        }

        // su_main_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'su_main_homepage');
            }

            return array (  '_controller' => 'SU\\MainBundle\\Controller\\DefaultController::indexAction',  '_route' => 'su_main_homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
