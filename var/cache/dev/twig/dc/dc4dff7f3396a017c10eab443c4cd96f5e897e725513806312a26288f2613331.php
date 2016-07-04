<?php

/* SUUserBundle:User:register.html.twig */
class __TwigTemplate_6d03d7912696ec36af10196d6e5c83079a2abd7c44eeaa923367d97f22e1b239 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e886dca31551b6d43056f0351ab6911e6b4c92a0d21f2f8b1f53a8b3510e7954 = $this->env->getExtension("native_profiler");
        $__internal_e886dca31551b6d43056f0351ab6911e6b4c92a0d21f2f8b1f53a8b3510e7954->enter($__internal_e886dca31551b6d43056f0351ab6911e6b4c92a0d21f2f8b1f53a8b3510e7954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SUUserBundle:User:register.html.twig"));

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

\t<div class=\"container animated fadeIn\">
\t
\t\t<div class=\"row\" style=\"margin-bottom: 0px;\">
\t\t
\t\t\t<div id=\"picture\" class=\"col s6 m2 l2 offset-s3 offset-m5 offset-l5\" style=\"z-index: 999; position: relative;\">
\t\t\t\t<img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/design/logo-m-min.png"), "html", null, true);
        echo "\" class=\"responsive-img\"></img>
\t\t\t</div>
\t\t\t
\t\t\t<div id=\"main\" class=\"card col s12 m8 l6 offset-m2 offset-l3\" style=\"border: 1px solid #711d2a; z-index: 9; padding-bottom: 10px;\">
\t\t\t\t<form id=\"register_form\">
\t\t\t\t\t<h4 id=\"title_connexion_form\" class=\"center-align col s10 offset-s1 animated divider-new\" style=\"height: 3rem; animation-delay: 0s;\">Nouvel utilisateur</h4>
\t\t\t\t\t<div class=\"input-field col s12 l6 offset-l3\">
\t\t\t\t\t\t<input placeholder=\"Thomas\" id=\"first_name\" type=\"text\" class=\"\">
\t\t\t\t\t\t<label for=\"first_name\">Prénom</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-field col s12 l6 offset-l3\">
\t\t\t\t\t\t<input placeholder=\"Dupont\" id=\"last_name\" type=\"text\" class=\"\">
\t\t\t\t\t\t<label for=\"last_name\">Nom</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-field col s12 l6 offset-l3\">
\t\t\t\t\t\t<input placeholder=\"****\" id=\"pass1\" type=\"password\" class=\"\">
\t\t\t\t\t\t<label for=\"pass1\">Mot de passe</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-field col s12 l6 offset-l3\">
\t\t\t\t\t\t<input placeholder=\"****\" id=\"pass2\" type=\"password\" class=\"\">
\t\t\t\t\t\t<label for=\"pass2\">Mot de passe (confirmation)</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-field col s12 l6 offset-l3\">
\t\t\t\t\t\t<input placeholder=\"thomas@dupont.fr\" id=\"mail1\" type=\"email\" class=\"\">
\t\t\t\t\t\t<label for=\"mail1\">Adresse mail:</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-field col s12 l6 offset-l3\">
\t\t\t\t\t\t<input placeholder=\"thomas@dupont.fr\" id=\"mail2\" type=\"email\" class=\"\">
\t\t\t\t\t\t<label for=\"mail2\">Adresse mail (confirmation):</label>
\t\t\t\t\t</div>
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"col s12 center-align\">
\t\t\t\t\t\t<a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("su_user_login");
        echo "\" class=\"btn waves-effect waves-light cardinal-button\"><i class=\"fa fa-angle-left left\"></i>Retour</a>
\t\t\t\t\t\t<button id=\"send_user_update\" type=\"submit\" class=\"btn waves-effect waves-light link-hover\"><i class=\"fa fa-send left\"></i>Ok</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>

\t\t</div>
\t
\t</div>

\t";
        // line 70
        $this->displayBlock('javascript', $context, $blocks);
        // line 109
        echo "  </body>
</html>";
        
        $__internal_e886dca31551b6d43056f0351ab6911e6b4c92a0d21f2f8b1f53a8b3510e7954->leave($__internal_e886dca31551b6d43056f0351ab6911e6b4c92a0d21f2f8b1f53a8b3510e7954_prof);

    }

    // line 11
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_fbe65618bdb0fd5692805c3fb16855b41fa0d493ccc9043729cd23f4ba07cb1b = $this->env->getExtension("native_profiler");
        $__internal_fbe65618bdb0fd5692805c3fb16855b41fa0d493ccc9043729cd23f4ba07cb1b->enter($__internal_fbe65618bdb0fd5692805c3fb16855b41fa0d493ccc9043729cd23f4ba07cb1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_fbe65618bdb0fd5692805c3fb16855b41fa0d493ccc9043729cd23f4ba07cb1b->leave($__internal_fbe65618bdb0fd5692805c3fb16855b41fa0d493ccc9043729cd23f4ba07cb1b_prof);

    }

    // line 70
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_363566c589b8928a8e9c8057fe677859526b65a2bfb0f1c12c92d0fb46030b29 = $this->env->getExtension("native_profiler");
        $__internal_363566c589b8928a8e9c8057fe677859526b65a2bfb0f1c12c92d0fb46030b29->enter($__internal_363566c589b8928a8e9c8057fe677859526b65a2bfb0f1c12c92d0fb46030b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 71
        echo "\t<!--  Scripts-->
\t<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.2.2.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/materialize.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 74
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
\t\t
\t\tfunction replace_main() {
\t\t\tvar picture_height = \$('#picture').height();
\t\t\t\$('#picture').css({'margin-bottom': - picture_height/2});
\t\t\t\$('#main').css({'padding-top': picture_height/2 - 20});
\t\t}
\t\t
\t\t\$(document).ready(function () {
\t\t\t\$('.dropdown-button').dropdown({
\t\t\t  inDuration: 300,
\t\t\t  outDuration: 225,
\t\t\t  constrain_width: true,
\t\t\t  hover: true,
\t\t\t  belowOrigin: true
\t\t\t});
\t\t\t
\t\t\treplace_main();
\t\t\tlogo_resize();
\t\t\t
\t\t\t\$(window).resize(function () {
\t\t\t\treplace_main();
\t\t\t\tlogo_resize();
\t\t\t});
\t\t});
\t</script>
\t";
        
        $__internal_363566c589b8928a8e9c8057fe677859526b65a2bfb0f1c12c92d0fb46030b29->leave($__internal_363566c589b8928a8e9c8057fe677859526b65a2bfb0f1c12c92d0fb46030b29_prof);

    }

    public function getTemplateName()
    {
        return "SUUserBundle:User:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 74,  154 => 73,  150 => 72,  147 => 71,  141 => 70,  132 => 18,  128 => 17,  124 => 16,  120 => 15,  115 => 12,  109 => 11,  101 => 109,  99 => 70,  86 => 60,  51 => 28,  41 => 20,  39 => 11,  33 => 8,  24 => 1,);
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
/* 	<div class="container animated fadeIn">*/
/* 	*/
/* 		<div class="row" style="margin-bottom: 0px;">*/
/* 		*/
/* 			<div id="picture" class="col s6 m2 l2 offset-s3 offset-m5 offset-l5" style="z-index: 999; position: relative;">*/
/* 				<img src="{{ asset('img/design/logo-m-min.png') }}" class="responsive-img"></img>*/
/* 			</div>*/
/* 			*/
/* 			<div id="main" class="card col s12 m8 l6 offset-m2 offset-l3" style="border: 1px solid #711d2a; z-index: 9; padding-bottom: 10px;">*/
/* 				<form id="register_form">*/
/* 					<h4 id="title_connexion_form" class="center-align col s10 offset-s1 animated divider-new" style="height: 3rem; animation-delay: 0s;">Nouvel utilisateur</h4>*/
/* 					<div class="input-field col s12 l6 offset-l3">*/
/* 						<input placeholder="Thomas" id="first_name" type="text" class="">*/
/* 						<label for="first_name">Prénom</label>*/
/* 					</div>*/
/* 					<div class="input-field col s12 l6 offset-l3">*/
/* 						<input placeholder="Dupont" id="last_name" type="text" class="">*/
/* 						<label for="last_name">Nom</label>*/
/* 					</div>*/
/* 					<div class="input-field col s12 l6 offset-l3">*/
/* 						<input placeholder="****" id="pass1" type="password" class="">*/
/* 						<label for="pass1">Mot de passe</label>*/
/* 					</div>*/
/* 					<div class="input-field col s12 l6 offset-l3">*/
/* 						<input placeholder="****" id="pass2" type="password" class="">*/
/* 						<label for="pass2">Mot de passe (confirmation)</label>*/
/* 					</div>*/
/* 					<div class="input-field col s12 l6 offset-l3">*/
/* 						<input placeholder="thomas@dupont.fr" id="mail1" type="email" class="">*/
/* 						<label for="mail1">Adresse mail:</label>*/
/* 					</div>*/
/* 					<div class="input-field col s12 l6 offset-l3">*/
/* 						<input placeholder="thomas@dupont.fr" id="mail2" type="email" class="">*/
/* 						<label for="mail2">Adresse mail (confirmation):</label>*/
/* 					</div>*/
/* 					<br>*/
/* 					<div class="col s12 center-align">*/
/* 						<a href="{{ path('su_user_login') }}" class="btn waves-effect waves-light cardinal-button"><i class="fa fa-angle-left left"></i>Retour</a>*/
/* 						<button id="send_user_update" type="submit" class="btn waves-effect waves-light link-hover"><i class="fa fa-send left"></i>Ok</button>*/
/* 					</div>*/
/* 				</form>*/
/* 			</div>*/
/* */
/* 		</div>*/
/* 	*/
/* 	</div>*/
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
/* 		*/
/* 		function replace_main() {*/
/* 			var picture_height = $('#picture').height();*/
/* 			$('#picture').css({'margin-bottom': - picture_height/2});*/
/* 			$('#main').css({'padding-top': picture_height/2 - 20});*/
/* 		}*/
/* 		*/
/* 		$(document).ready(function () {*/
/* 			$('.dropdown-button').dropdown({*/
/* 			  inDuration: 300,*/
/* 			  outDuration: 225,*/
/* 			  constrain_width: true,*/
/* 			  hover: true,*/
/* 			  belowOrigin: true*/
/* 			});*/
/* 			*/
/* 			replace_main();*/
/* 			logo_resize();*/
/* 			*/
/* 			$(window).resize(function () {*/
/* 				replace_main();*/
/* 				logo_resize();*/
/* 			});*/
/* 		});*/
/* 	</script>*/
/* 	{% endblock %}*/
/*   </body>*/
/* </html>*/
