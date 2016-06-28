<?php

/* SUUserBundle:Default:login.html.twig */
class __TwigTemplate_d6dc66872de242a94f3c604a053cf9c62abe1451d2672fb862631869d4ec44ff extends Twig_Template
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
        $__internal_370ba585f2194de610f40dd0dc845e522017ffbfaf3e477b89cc080724d68bc3 = $this->env->getExtension("native_profiler");
        $__internal_370ba585f2194de610f40dd0dc845e522017ffbfaf3e477b89cc080724d68bc3->enter($__internal_370ba585f2194de610f40dd0dc845e522017ffbfaf3e477b89cc080724d68bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SUUserBundle:Default:login.html.twig"));

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
\t\t\t\t<form id=\"login_form\">
\t\t\t\t\t<h4 id=\"title_connexion_form\" class=\"center-align col s10 offset-s1 animated divider-new\" style=\"height: 3rem; animation-delay: 0s;\">Connexion</h4>
\t\t\t\t\t<div class=\"input-field col l6 offset-l3 s12 animated\" style=\"animation-delay: 0.2s;\">
\t\t\t\t\t\t<i class=\"material-icons prefix\">account_circle</i>
\t\t\t\t\t\t<input id=\"username\" placeholder=\"Thomas887\" type=\"text\" class=\"validate\" name=\"username\">
\t\t\t\t\t\t<label for=\"username\">Login</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-field col l6 offset-l3 s12 animated\" style=\"animation-delay: 0.4s;\">
\t\t\t\t\t\t<i class=\"material-icons prefix\">lock_outline</i>
\t\t\t\t\t\t<input id=\"password\" placeholder=\"*******\" type=\"password\" class=\"validate\">
\t\t\t\t\t\t<label for=\"password\">Mot de passe</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col s12 center-align animated\" style=\"margin-bottom: 20px; animation-delay: 0.6s;\">
\t\t\t\t\t\t<button id=\"send_credentials\" class=\"btn btn-large btn-footer waves-effect waves-light link-hover cardinal-button\" type=\"submit\"><i class=\"fa fa-sign-in left\"></i>Se connecter</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col s12 center-align\">
\t\t\t\t\t\t<em>Pas encore de compte ? <a class=\"deep-red-text link-hover\">C'est par ici</a><em>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>

\t\t</div>
\t\t
\t\t<div class=\"row center-align\">
\t\t\t<h4><em>Faites vos comptes simplement!</em></h4>
\t\t</div>
\t
\t</div>

\t";
        // line 61
        $this->displayBlock('javascript', $context, $blocks);
        // line 100
        echo "  </body>
</html>";
        
        $__internal_370ba585f2194de610f40dd0dc845e522017ffbfaf3e477b89cc080724d68bc3->leave($__internal_370ba585f2194de610f40dd0dc845e522017ffbfaf3e477b89cc080724d68bc3_prof);

    }

    // line 11
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_bcbf1e8235845c0835a547883c068d365017451ed1c14a2c4b193fd25f58ed9a = $this->env->getExtension("native_profiler");
        $__internal_bcbf1e8235845c0835a547883c068d365017451ed1c14a2c4b193fd25f58ed9a->enter($__internal_bcbf1e8235845c0835a547883c068d365017451ed1c14a2c4b193fd25f58ed9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_bcbf1e8235845c0835a547883c068d365017451ed1c14a2c4b193fd25f58ed9a->leave($__internal_bcbf1e8235845c0835a547883c068d365017451ed1c14a2c4b193fd25f58ed9a_prof);

    }

    // line 61
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_1b8c557fa508095d912bdfabfce671646bd5ac6cd50290b6282496b015c35898 = $this->env->getExtension("native_profiler");
        $__internal_1b8c557fa508095d912bdfabfce671646bd5ac6cd50290b6282496b015c35898->enter($__internal_1b8c557fa508095d912bdfabfce671646bd5ac6cd50290b6282496b015c35898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 62
        echo "\t<!--  Scripts-->
\t<script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.2.2.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/materialize.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 65
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
        
        $__internal_1b8c557fa508095d912bdfabfce671646bd5ac6cd50290b6282496b015c35898->leave($__internal_1b8c557fa508095d912bdfabfce671646bd5ac6cd50290b6282496b015c35898_prof);

    }

    public function getTemplateName()
    {
        return "SUUserBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 65,  142 => 64,  138 => 63,  135 => 62,  129 => 61,  120 => 18,  116 => 17,  112 => 16,  108 => 15,  103 => 12,  97 => 11,  89 => 100,  87 => 61,  51 => 28,  41 => 20,  39 => 11,  33 => 8,  24 => 1,);
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
/* 				<form id="login_form">*/
/* 					<h4 id="title_connexion_form" class="center-align col s10 offset-s1 animated divider-new" style="height: 3rem; animation-delay: 0s;">Connexion</h4>*/
/* 					<div class="input-field col l6 offset-l3 s12 animated" style="animation-delay: 0.2s;">*/
/* 						<i class="material-icons prefix">account_circle</i>*/
/* 						<input id="username" placeholder="Thomas887" type="text" class="validate" name="username">*/
/* 						<label for="username">Login</label>*/
/* 					</div>*/
/* 					<div class="input-field col l6 offset-l3 s12 animated" style="animation-delay: 0.4s;">*/
/* 						<i class="material-icons prefix">lock_outline</i>*/
/* 						<input id="password" placeholder="*******" type="password" class="validate">*/
/* 						<label for="password">Mot de passe</label>*/
/* 					</div>*/
/* 					<div class="col s12 center-align animated" style="margin-bottom: 20px; animation-delay: 0.6s;">*/
/* 						<button id="send_credentials" class="btn btn-large btn-footer waves-effect waves-light link-hover cardinal-button" type="submit"><i class="fa fa-sign-in left"></i>Se connecter</button>*/
/* 					</div>*/
/* 					<div class="col s12 center-align">*/
/* 						<em>Pas encore de compte ? <a class="deep-red-text link-hover">C'est par ici</a><em>*/
/* 					</div>*/
/* 				</form>*/
/* 			</div>*/
/* */
/* 		</div>*/
/* 		*/
/* 		<div class="row center-align">*/
/* 			<h4><em>Faites vos comptes simplement!</em></h4>*/
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
