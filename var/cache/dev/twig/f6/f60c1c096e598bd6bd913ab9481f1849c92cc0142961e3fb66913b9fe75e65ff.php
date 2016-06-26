<?php

/* @SUMain/layout.html.twig */
class __TwigTemplate_9486b4f59cb5dbafb4138aeaf1330051adc4ec7b8a75eb7c250b5653a1c20f7d extends Twig_Template
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
        $__internal_d6fe3f4bb22b8d8e220643d959bd03daa77f8e8745b42d9ab44cb9c39f3c9c86 = $this->env->getExtension("native_profiler");
        $__internal_d6fe3f4bb22b8d8e220643d959bd03daa77f8e8745b42d9ab44cb9c39f3c9c86->enter($__internal_d6fe3f4bb22b8d8e220643d959bd03daa77f8e8745b42d9ab44cb9c39f3c9c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SUMain/layout.html.twig"));

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
\t\t\t\t\t<li id=\"param_link\" ";
        // line 35
        if (((isset($context["menu_selected"]) ? $context["menu_selected"] : $this->getContext($context, "menu_selected")) == "param")) {
            echo "class=\"active\" ";
        }
        echo " ><a class=\"waves-effect waves-light link-hover\"><span class=\"hide-on-small-only\">Paramètres <i class=\"fa fa-edit left\"></i></span><span class=\"hide-on-med-and-up\"><i class=\"fa fa-edit fa-2x\" style=\"padding-top: 10px;\"></i></span></a></li>
\t\t\t\t\t<li ";
        // line 36
        if (((isset($context["menu_selected"]) ? $context["menu_selected"] : $this->getContext($context, "menu_selected")) == "my_accounts")) {
            echo " class=\"active\" ";
        }
        echo " ><a class=\"dropdown-button\" data-activates=\"drop_accounts\"><span class=\"hide-on-small-only\">Mes comptes <i class=\"fa fa-chevron-down left\"></i></span><span class=\"hide-on-med-and-up\"><i class=\"fa fa-chevron-down fa-2x\" style=\"padding-top: 10px;\"></i></span></a></a></li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"right\" id=\"navbar_right\">
\t\t\t\t\t<li id=\"disconnect_link\"><a class=\"waves-effect waves-light\"><span class=\"hide-on-small-only\">Se déconnecter <i class=\"fa fa-sign-out right\"></i></span><span class=\"hide-on-med-and-up\"><i class=\"fa fa-sign-out fa-2x\" style=\"padding-top: 10px;\"></i></span></a></a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</nav>
\t</div>
\t<!-- /.Navigation -->
\t
\t<div id=\"main_wrapper\">
\t\t";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "\t</div>

\t<!-- Footer -->
\t<footer class=\"page-footer z-depth-2\" id=\"footer_wrapper\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col l6 m6 s12 center-align\">
\t\t\t\t<h5 id=\"titre_footer\" class=\"white-text animated fadeIn\" style=\"animation-delay: 0s; animation-duration: 2s; opacity: 0;\">Contactez-nous sur les réseaux sociaux :</h5>
\t\t\t\t</br>
\t\t\t\t<a href=\"https://www.facebook.com/guillaume.fournier.3760\" class=\"btn-large btn-footer waves-effect waves-light animated fadeIn\" id=\"facebook\" target=\"_blank\" style=\"background-color: #4264aa;\"><i class=\"fa fa-facebook left\"></i>Facebook</a>
\t\t\t\t<a href=\"mailto: guillaumefournier0695@orange.fr\" class=\"btn-large btn-footer waves-effect waves-light animated fadeIn\" id=\"linkedin\" target=\"_blank\" style=\"background-color: #d96f15;\"><i class=\"fa fa-envelope left\"></i>Mail</a>
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
        // line 79
        $this->displayBlock('javascript', $context, $blocks);
        // line 85
        echo "\t<script>
\t\tfunction logo_resize () {
\t\t\tif (\$(window).width() <= 600) {
\t\t\t\t\$('#logo_navbar').height('56px')
\t\t\t} else {
\t\t\t\t\$('#logo_navbar').height('64px')
\t\t\t}
\t\t}
\t\tfunction body_min_size() {
\t\t\t\$('#main_wrapper').css({'min-height': \$(window).height() - \$('#footer_wrapper').height() - 105});
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
\t\t\tbody_min_size();
\t\t\t
\t\t\t\$(window).resize(function () {
\t\t\t\tlogo_resize();
\t\t\t\tbody_min_size();
\t\t\t});
\t\t});
\t</script>
  </body>
</html>";
        
        $__internal_d6fe3f4bb22b8d8e220643d959bd03daa77f8e8745b42d9ab44cb9c39f3c9c86->leave($__internal_d6fe3f4bb22b8d8e220643d959bd03daa77f8e8745b42d9ab44cb9c39f3c9c86_prof);

    }

    // line 11
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_c328280e8c27e05b3cbdc343614220496d276705fea7003336ae9a81ec06094c = $this->env->getExtension("native_profiler");
        $__internal_c328280e8c27e05b3cbdc343614220496d276705fea7003336ae9a81ec06094c->enter($__internal_c328280e8c27e05b3cbdc343614220496d276705fea7003336ae9a81ec06094c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_c328280e8c27e05b3cbdc343614220496d276705fea7003336ae9a81ec06094c->leave($__internal_c328280e8c27e05b3cbdc343614220496d276705fea7003336ae9a81ec06094c_prof);

    }

    // line 29
    public function block_accounts($context, array $blocks = array())
    {
        $__internal_bf7cf3627af161eff752d2be316da53e5456bf98ce9259691a169208a209b164 = $this->env->getExtension("native_profiler");
        $__internal_bf7cf3627af161eff752d2be316da53e5456bf98ce9259691a169208a209b164->enter($__internal_bf7cf3627af161eff752d2be316da53e5456bf98ce9259691a169208a209b164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accounts"));

        // line 30
        echo "\t\t\t\t\t<li><a class=\"waves-effect waves-light link-hover\">Livret A <i class=\"fa fa-book left hide-on-small-only\"></i></a></li>
\t\t\t\t\t<li><a class=\"waves-effect waves-light link-hover active-account\">Compte Courant <i class=\"fa fa-book left hide-on-small-only\"></i></a></li>
\t\t\t\t\t";
        
        $__internal_bf7cf3627af161eff752d2be316da53e5456bf98ce9259691a169208a209b164->leave($__internal_bf7cf3627af161eff752d2be316da53e5456bf98ce9259691a169208a209b164_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd04b15ef90715529b751afa3bfc43a7527e5e9540135474099230d9e9e64bc7 = $this->env->getExtension("native_profiler");
        $__internal_bd04b15ef90715529b751afa3bfc43a7527e5e9540135474099230d9e9e64bc7->enter($__internal_bd04b15ef90715529b751afa3bfc43a7527e5e9540135474099230d9e9e64bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 48
        echo "\t\t";
        
        $__internal_bd04b15ef90715529b751afa3bfc43a7527e5e9540135474099230d9e9e64bc7->leave($__internal_bd04b15ef90715529b751afa3bfc43a7527e5e9540135474099230d9e9e64bc7_prof);

    }

    // line 79
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_dd63de3b881c7b67af4785b64f63ce67c937234e3b5970f2f6cc74129b77237e = $this->env->getExtension("native_profiler");
        $__internal_dd63de3b881c7b67af4785b64f63ce67c937234e3b5970f2f6cc74129b77237e->enter($__internal_dd63de3b881c7b67af4785b64f63ce67c937234e3b5970f2f6cc74129b77237e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 80
        echo "\t<!--  Scripts-->
\t<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.2.2.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/materialize.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/scroll-to.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_dd63de3b881c7b67af4785b64f63ce67c937234e3b5970f2f6cc74129b77237e->leave($__internal_dd63de3b881c7b67af4785b64f63ce67c937234e3b5970f2f6cc74129b77237e_prof);

    }

    public function getTemplateName()
    {
        return "@SUMain/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 83,  231 => 82,  227 => 81,  224 => 80,  218 => 79,  211 => 48,  205 => 47,  196 => 30,  190 => 29,  181 => 18,  177 => 17,  173 => 16,  169 => 15,  164 => 12,  158 => 11,  121 => 85,  119 => 79,  87 => 49,  85 => 47,  69 => 36,  63 => 35,  59 => 33,  57 => 29,  52 => 27,  43 => 20,  41 => 11,  35 => 8,  26 => 1,);
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
/* 					<li><a class="waves-effect waves-light link-hover">Livret A <i class="fa fa-book left hide-on-small-only"></i></a></li>*/
/* 					<li><a class="waves-effect waves-light link-hover active-account">Compte Courant <i class="fa fa-book left hide-on-small-only"></i></a></li>*/
/* 					{% endblock %}*/
/* 				</ul>*/
/* 				<ul class="left small-only">*/
/* 					<li id="param_link" {% if menu_selected == 'param' %}class="active" {% endif %} ><a class="waves-effect waves-light link-hover"><span class="hide-on-small-only">Paramètres <i class="fa fa-edit left"></i></span><span class="hide-on-med-and-up"><i class="fa fa-edit fa-2x" style="padding-top: 10px;"></i></span></a></li>*/
/* 					<li {% if menu_selected == 'my_accounts' %} class="active" {% endif %} ><a class="dropdown-button" data-activates="drop_accounts"><span class="hide-on-small-only">Mes comptes <i class="fa fa-chevron-down left"></i></span><span class="hide-on-med-and-up"><i class="fa fa-chevron-down fa-2x" style="padding-top: 10px;"></i></span></a></a></li>*/
/* 				</ul>*/
/* 				<ul class="right" id="navbar_right">*/
/* 					<li id="disconnect_link"><a class="waves-effect waves-light"><span class="hide-on-small-only">Se déconnecter <i class="fa fa-sign-out right"></i></span><span class="hide-on-med-and-up"><i class="fa fa-sign-out fa-2x" style="padding-top: 10px;"></i></span></a></a></li>*/
/* 				</ul>*/
/* 			</div>*/
/* 		</nav>*/
/* 	</div>*/
/* 	<!-- /.Navigation -->*/
/* 	*/
/* 	<div id="main_wrapper">*/
/* 		{% block body %}*/
/* 		{% endblock %}*/
/* 	</div>*/
/* */
/* 	<!-- Footer -->*/
/* 	<footer class="page-footer z-depth-2" id="footer_wrapper">*/
/* 		<div class="row">*/
/* 			<div class="col l6 m6 s12 center-align">*/
/* 				<h5 id="titre_footer" class="white-text animated fadeIn" style="animation-delay: 0s; animation-duration: 2s; opacity: 0;">Contactez-nous sur les réseaux sociaux :</h5>*/
/* 				</br>*/
/* 				<a href="https://www.facebook.com/guillaume.fournier.3760" class="btn-large btn-footer waves-effect waves-light animated fadeIn" id="facebook" target="_blank" style="background-color: #4264aa;"><i class="fa fa-facebook left"></i>Facebook</a>*/
/* 				<a href="mailto: guillaumefournier0695@orange.fr" class="btn-large btn-footer waves-effect waves-light animated fadeIn" id="linkedin" target="_blank" style="background-color: #d96f15;"><i class="fa fa-envelope left"></i>Mail</a>*/
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
/* 	{% endblock %}*/
/* 	<script>*/
/* 		function logo_resize () {*/
/* 			if ($(window).width() <= 600) {*/
/* 				$('#logo_navbar').height('56px')*/
/* 			} else {*/
/* 				$('#logo_navbar').height('64px')*/
/* 			}*/
/* 		}*/
/* 		function body_min_size() {*/
/* 			$('#main_wrapper').css({'min-height': $(window).height() - $('#footer_wrapper').height() - 105});*/
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
/* 			body_min_size();*/
/* 			*/
/* 			$(window).resize(function () {*/
/* 				logo_resize();*/
/* 				body_min_size();*/
/* 			});*/
/* 		});*/
/* 	</script>*/
/*   </body>*/
/* </html>*/
