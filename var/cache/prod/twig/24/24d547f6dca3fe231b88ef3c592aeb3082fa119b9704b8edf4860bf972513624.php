<?php

/* SUMainBundle::layout.html.twig */
class __TwigTemplate_705c549858cd0dbe1b87ac0950d67916644c7360aa4e912df16033c47f6b5a1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'accounts' => array($this, 'block_accounts'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1.0\"/>
\t<title>SumUp</title>
\t<meta name=\"theme-color\" content=\"#711d2a\">
\t<link rel=\"icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/design/logo-icon-min.png"), "html", null, true);
        echo "\">

\t<!-- CSS  -->
\t";
        // line 11
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 20
        echo "</head>
<body>

\t<!-- Navigation -->
\t<div class=\"navbar-fixed\" id=\"navbar_wrapper\">
\t\t<nav class=\"cardinal\">
\t\t\t<div class=\"nav-wrapper\">
\t\t\t\t<a href=\"#\" class=\"brand-logo center\"><img id=\"logo_navbar\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/design/logo-icon-min.png"), "html", null, true);
        echo "\" class=\"responsive-img\" style=\"height: 64px;\"></img></a>
\t\t\t\t<ul id=\"drop_accounts\" class=\"dropdown-content z-depth-3\" style=\"border: 1px solid #711d2a;\">
\t\t\t\t\t";
        // line 29
        $this->displayBlock('accounts', $context, $blocks);
        // line 33
        echo "\t\t\t\t</ul>
\t\t\t\t<ul class=\"left small-only\">
\t\t\t\t\t<li id=\"param_link\" class=\"active\"><a class=\"waves-effect waves-light link-hover\"><span class=\"hide-on-small-only\">Paramètres <i class=\"fa fa-edit left\"></i></span><span class=\"hide-on-med-and-up\"><i class=\"fa fa-edit fa-2x\" style=\"padding-top: 10px;\"></i></span></a></li>
\t\t\t\t\t<li><a class=\"dropdown-button\" data-activates=\"drop_accounts\"><span class=\"hide-on-small-only\">Mes comptes <i class=\"fa fa-chevron-down left\"></i></span><span class=\"hide-on-med-and-up\"><i class=\"fa fa-chevron-down fa-2x\" style=\"padding-top: 10px;\"></i></span></a></a></li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"right\" id=\"navbar_right\">
\t\t\t\t\t<li id=\"disconnect_link\"><a class=\"waves-effect waves-light\"><span class=\"hide-on-small-only\">Se déconnecter <i class=\"fa fa-sign-out right\"></i></span><span class=\"hide-on-med-and-up\"><i class=\"fa fa-sign-out fa-2x\" style=\"padding-top: 10px;\"></i></span></a></a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</nav>
\t</div>
\t<!-- /.Navigation -->
\t
\t";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "
\t<!-- Footer -->
\t<footer class=\"page-footer z-depth-2\" id=\"footer_wrapper\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col l6 m6 s12 center-align\">
\t\t\t\t<h5 id=\"titre_footer\" class=\"white-text animated fadeIn\" style=\"animation-delay: 0s; animation-duration: 2s; opacity: 0;\">Contactez-nous sur les réseaux sociaux :</h5>
\t\t\t\t</br>
\t\t\t\t<a href=\"https://www.facebook.com/\" class=\"btn-large btn-footer waves-effect waves-light animated fadeIn\" id=\"facebook\" target=\"_blank\" style=\"background-color: #4264aa;\"><i class=\"fa fa-facebook left\"></i>Facebook</a>
\t\t\t\t<a href=\"https://www.linkedin.com/\" class=\"btn-large btn-footer waves-effect waves-light animated fadeIn\" id=\"linkedin\" target=\"_blank\" style=\"background-color: #d96f15;\"><i class=\"fa fa-envelope left\"></i>Mail</a>
\t\t\t\t</br></br>
\t\t\t</div>
\t\t\t<div class=\"col l6 m6 s12 center-align\">
\t\t\t\t<h5 id=\"titre_footer\" class=\"white-text animated fadeIn\" style=\"animation-delay: 0s; animation-duration: 2s; opacity: 0;\">Dépôt GitHub & Documentation :</h5>
\t\t\t\t</br>
\t\t\t\t
\t\t\t\t<a href=\"https://github.com/Foufou0695/SumUp\" class=\"btn-large btn-footer waves-effect waves-light animated fadeIn grey\" id=\"github\" target=\"_blank\"><i class=\"fa fa-github left white-text\"></i>GitHub</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"footer-copyright\">
\t\t\t<div class=\"container\">
\t\t\t\t<div id=\"copyright_footer\" class=\"center-align animated fadeIn\">
\t\t\t\t\t© 2016 Copyright <a class=\"white-text\" href=\"http://\"> SumUp </a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>
\t<!-- /.Footer -->


\t";
        // line 77
        $this->displayBlock('javascript', $context, $blocks);
        // line 107
        echo "  </body>
</html>";
    }

    // line 11
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 12
        echo "\t<link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css\">
\t
\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/materialize.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
\t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
\t<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/loader.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
\t";
    }

    // line 29
    public function block_accounts($context, array $blocks = array())
    {
        // line 30
        echo "\t\t\t\t\t<li><a class=\"waves-effect waves-light link-hover\">Livret A <i class=\"fa fa-gears left hide-on-small-only\"></i></a></li>
\t\t\t\t\t<li><a class=\"waves-effect waves-light link-hover active-account\">Compte Courant <i class=\"fa fa-gears left hide-on-small-only\"></i></a></li>
\t\t\t\t\t";
    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        // line 47
        echo "\t";
    }

    // line 77
    public function block_javascript($context, array $blocks = array())
    {
        // line 78
        echo "\t<!--  Scripts-->
\t<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.2.2.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/materialize.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/scroll-to.js"), "html", null, true);
        echo "\"></script>
\t<script>
\t\tfunction logo_resize () {
\t\t\tif (\$(window).width() <= 600) {
\t\t\t\t\$('#logo_navbar').height('56px')
\t\t\t} else {
\t\t\t\t\$('#logo_navbar').height('64px')
\t\t\t}
\t\t}
\t\t\$(document).ready(function () {
\t\t\t\$('.dropdown-button').dropdown({
\t\t\t  inDuration: 300,
\t\t\t  outDuration: 225,
\t\t\t  constrain_width: true,
\t\t\t  hover: true,
\t\t\t  belowOrigin: true
\t\t\t});
\t\t\t
\t\t\tlogo_resize();
\t\t\t
\t\t\t\$(window).resize(function () {
\t\t\t\tlogo_resize();
\t\t\t});
\t\t});
\t</script>
\t";
    }

    public function getTemplateName()
    {
        return "SUMainBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 81,  163 => 80,  159 => 79,  156 => 78,  153 => 77,  149 => 47,  146 => 46,  140 => 30,  137 => 29,  131 => 18,  127 => 17,  123 => 16,  119 => 15,  114 => 12,  111 => 11,  106 => 107,  104 => 77,  73 => 48,  71 => 46,  56 => 33,  54 => 29,  49 => 27,  40 => 20,  38 => 11,  32 => 8,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/* <head>*/
/* 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>*/
/* 	<title>SumUp</title>*/
/* 	<meta name="theme-color" content="#711d2a">*/
/* 	<link rel="icon" href="{{ asset('img/design/logo-icon-min.png') }}">*/
/* */
/* 	<!-- CSS  -->*/
/* 	{% block stylesheet %}*/
/* 	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">*/
/* 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">*/
/* 	*/
/* 	<link href="{{ asset('css/materialize.css') }}" type="text/css" rel="stylesheet"/>*/
/* 	<link href="{{ asset('css/animate.css') }}" type="text/css" rel="stylesheet"/>*/
/* 	<link href="{{ asset('css/loader.css') }}" type="text/css" rel="stylesheet"/>*/
/* 	<link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet"/>*/
/* 	{% endblock %}*/
/* </head>*/
/* <body>*/
/* */
/* 	<!-- Navigation -->*/
/* 	<div class="navbar-fixed" id="navbar_wrapper">*/
/* 		<nav class="cardinal">*/
/* 			<div class="nav-wrapper">*/
/* 				<a href="#" class="brand-logo center"><img id="logo_navbar" src="{{ asset('img/design/logo-icon-min.png') }}" class="responsive-img" style="height: 64px;"></img></a>*/
/* 				<ul id="drop_accounts" class="dropdown-content z-depth-3" style="border: 1px solid #711d2a;">*/
/* 					{% block accounts %}*/
/* 					<li><a class="waves-effect waves-light link-hover">Livret A <i class="fa fa-gears left hide-on-small-only"></i></a></li>*/
/* 					<li><a class="waves-effect waves-light link-hover active-account">Compte Courant <i class="fa fa-gears left hide-on-small-only"></i></a></li>*/
/* 					{% endblock %}*/
/* 				</ul>*/
/* 				<ul class="left small-only">*/
/* 					<li id="param_link" class="active"><a class="waves-effect waves-light link-hover"><span class="hide-on-small-only">Paramètres <i class="fa fa-edit left"></i></span><span class="hide-on-med-and-up"><i class="fa fa-edit fa-2x" style="padding-top: 10px;"></i></span></a></li>*/
/* 					<li><a class="dropdown-button" data-activates="drop_accounts"><span class="hide-on-small-only">Mes comptes <i class="fa fa-chevron-down left"></i></span><span class="hide-on-med-and-up"><i class="fa fa-chevron-down fa-2x" style="padding-top: 10px;"></i></span></a></a></li>*/
/* 				</ul>*/
/* 				<ul class="right" id="navbar_right">*/
/* 					<li id="disconnect_link"><a class="waves-effect waves-light"><span class="hide-on-small-only">Se déconnecter <i class="fa fa-sign-out right"></i></span><span class="hide-on-med-and-up"><i class="fa fa-sign-out fa-2x" style="padding-top: 10px;"></i></span></a></a></li>*/
/* 				</ul>*/
/* 			</div>*/
/* 		</nav>*/
/* 	</div>*/
/* 	<!-- /.Navigation -->*/
/* 	*/
/* 	{% block body %}*/
/* 	{% endblock %}*/
/* */
/* 	<!-- Footer -->*/
/* 	<footer class="page-footer z-depth-2" id="footer_wrapper">*/
/* 		<div class="row">*/
/* 			<div class="col l6 m6 s12 center-align">*/
/* 				<h5 id="titre_footer" class="white-text animated fadeIn" style="animation-delay: 0s; animation-duration: 2s; opacity: 0;">Contactez-nous sur les réseaux sociaux :</h5>*/
/* 				</br>*/
/* 				<a href="https://www.facebook.com/" class="btn-large btn-footer waves-effect waves-light animated fadeIn" id="facebook" target="_blank" style="background-color: #4264aa;"><i class="fa fa-facebook left"></i>Facebook</a>*/
/* 				<a href="https://www.linkedin.com/" class="btn-large btn-footer waves-effect waves-light animated fadeIn" id="linkedin" target="_blank" style="background-color: #d96f15;"><i class="fa fa-envelope left"></i>Mail</a>*/
/* 				</br></br>*/
/* 			</div>*/
/* 			<div class="col l6 m6 s12 center-align">*/
/* 				<h5 id="titre_footer" class="white-text animated fadeIn" style="animation-delay: 0s; animation-duration: 2s; opacity: 0;">Dépôt GitHub & Documentation :</h5>*/
/* 				</br>*/
/* 				*/
/* 				<a href="https://github.com/Foufou0695/SumUp" class="btn-large btn-footer waves-effect waves-light animated fadeIn grey" id="github" target="_blank"><i class="fa fa-github left white-text"></i>GitHub</a>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="footer-copyright">*/
/* 			<div class="container">*/
/* 				<div id="copyright_footer" class="center-align animated fadeIn">*/
/* 					© 2016 Copyright <a class="white-text" href="http://"> SumUp </a>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</footer>*/
/* 	<!-- /.Footer -->*/
/* */
/* */
/* 	{% block javascript %}*/
/* 	<!--  Scripts-->*/
/* 	<script src="{{ asset('js/jquery-2.2.2.js') }}"></script>*/
/* 	<script src="{{ asset('js/materialize.js') }}"></script>*/
/* 	<script src="{{ asset('js/scroll-to.js') }}"></script>*/
/* 	<script>*/
/* 		function logo_resize () {*/
/* 			if ($(window).width() <= 600) {*/
/* 				$('#logo_navbar').height('56px')*/
/* 			} else {*/
/* 				$('#logo_navbar').height('64px')*/
/* 			}*/
/* 		}*/
/* 		$(document).ready(function () {*/
/* 			$('.dropdown-button').dropdown({*/
/* 			  inDuration: 300,*/
/* 			  outDuration: 225,*/
/* 			  constrain_width: true,*/
/* 			  hover: true,*/
/* 			  belowOrigin: true*/
/* 			});*/
/* 			*/
/* 			logo_resize();*/
/* 			*/
/* 			$(window).resize(function () {*/
/* 				logo_resize();*/
/* 			});*/
/* 		});*/
/* 	</script>*/
/* 	{% endblock %}*/
/*   </body>*/
/* </html>*/
