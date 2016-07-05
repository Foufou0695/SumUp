<?php

/* SUMainBundle::layout.html.twig */
class __TwigTemplate_275f49117c953e4e5f6935ff957d0c4ea79731109b2f235d44f1afcb1287ab06 extends Twig_Template
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
        $__internal_62f1e260ad97f61ed4580e850f38d7a1d063ceca81db8556c665f444bb1ed26c = $this->env->getExtension("native_profiler");
        $__internal_62f1e260ad97f61ed4580e850f38d7a1d063ceca81db8556c665f444bb1ed26c->enter($__internal_62f1e260ad97f61ed4580e850f38d7a1d063ceca81db8556c665f444bb1ed26c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SUMainBundle::layout.html.twig"));

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
\t\t\t\t<a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("su_account_homepage");
        echo "\" class=\"brand-logo center\"><img id=\"logo_navbar\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/design/logo-icon-min.png"), "html", null, true);
        echo "\" class=\"responsive-img\" style=\"height: 50px;\"></img></a>
\t\t\t\t<ul id=\"drop_accounts\" class=\"dropdown-content z-depth-3\" style=\"border: 1px solid #711d2a;\">
\t\t\t\t\t";
        // line 29
        $this->displayBlock('accounts', $context, $blocks);
        // line 33
        echo "\t\t\t\t\t<li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("su_user_param");
        echo "\" class=\"waves-effect waves-light link-hover\">Nouveau <i class=\"fa fa-plus left\"></i></a></li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"left small-only\">
\t\t\t\t\t<li id=\"home_link\" ";
        // line 36
        if (((isset($context["menu_selected"]) ? $context["menu_selected"] : $this->getContext($context, "menu_selected")) == "home")) {
            echo "class=\"active\" ";
        }
        echo " ><a href=\"";
        echo $this->env->getExtension('routing')->getPath("su_account_homepage");
        echo "\" class=\"waves-effect waves-light link-hover\"><span class=\"hide-on-small-only\">Accueil <i class=\"fa fa-home left\"></i></span><span class=\"hide-on-med-and-up\"><i class=\"fa fa-home fa-2x\" style=\"padding-top: 10px;\"></i></span></a></li>
\t\t\t\t\t<li id=\"param_link\" ";
        // line 37
        if (((isset($context["menu_selected"]) ? $context["menu_selected"] : $this->getContext($context, "menu_selected")) == "param")) {
            echo "class=\"active\" ";
        }
        echo " ><a href=\"";
        echo $this->env->getExtension('routing')->getPath("su_user_param");
        echo "\" class=\"waves-effect waves-light link-hover\"><span class=\"hide-on-small-only\">Paramètres <i class=\"fa fa-edit left\"></i></span><span class=\"hide-on-med-and-up\"><i class=\"fa fa-edit fa-2x\" style=\"padding-top: 10px;\"></i></span></a></li>\t\t\t\t\t
\t\t\t\t</ul>
\t\t\t\t<ul class=\"right\" id=\"navbar_right\">
\t\t\t\t\t<li ";
        // line 40
        if (((isset($context["menu_selected"]) ? $context["menu_selected"] : $this->getContext($context, "menu_selected")) == "my_accounts")) {
            echo " class=\"active\" ";
        }
        echo " ><a class=\"dropdown-button\" data-activates=\"drop_accounts\"><span class=\"hide-on-small-only\">Mes comptes <i class=\"fa fa-chevron-down right\"></i></span><span class=\"hide-on-med-and-up\"><i class=\"fa fa-chevron-down fa-2x\" style=\"padding-top: 10px;\"></i></span></a></a></li>
\t\t\t\t\t<li id=\"disconnect_link\"><a class=\"waves-effect waves-light\"><span class=\"hide-on-small-only\">Se déconnecter <i class=\"fa fa-sign-out right\"></i></span><span class=\"hide-on-med-and-up\"><i class=\"fa fa-sign-out fa-2x\" style=\"padding-top: 10px;\"></i></span></a></a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</nav>
\t</div>
\t<!-- /.Navigation -->
\t
\t<div id=\"main_wrapper\">
\t\t";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 51
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
\t
\t<!-- Modal New Account -->
\t<div id=\"new_account_modal\" class=\"modal modal-fixed-footer\">
\t\t<div class=\"modal-content\" style=\"overflow: hidden;\">
\t\t\t<section id=\"new_account_top\">
\t\t\t\t<div class=\"col s12\" style=\"border-bottom: 1px solid #ddd; padding: 0px;\">
\t\t\t\t\t<h5 style=\"margin-top: 0;\"><i class=\"fa fa-book left\"></i>Ajouter un compte</h5>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<section id=\"new_account_content\" style=\"height: 100%; margin-bottom: 0px; overflow-x: hidden; overflow-y: auto;padding-top: 10px; padding-bottom: 20px;\">
\t\t\t\t<div class=\"row\" style=\"margin-bottom: 0px;\">
\t\t\t\t\tPour commencer remplisser les informations nécessaires à la création d'un nouveau compte bancaire. Votre compte utilisateur peut être lié à autant de comptes bancaires que vous le souhaitez.
\t\t\t\t\t<br>
\t\t\t\t\t<b><big><i class=\"fa fa-warning\"></i> Attention:</big></b> le montant de départ donné doit être celui du niveau de votre compte avant la première opération que vous allez enregistrer sur le site. C'est à partir de ce premier montant que tout sera calculé.
\t\t\t\t\t<br><br>
\t\t\t\t\t<form class=\"col s12\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"input-field col s12 m10 l6 offset-m1 offset-l3\">
\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">mode_edit</i>
\t\t\t\t\t\t\t\t<input placeholder=\"Livret A\" id=\"6\" class=\"description_field validate\" type=\"text\">
\t\t\t\t\t\t\t\t<label for=\"6\">Nom du compte</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-field col s12 m10 l6 offset-m1 offset-l3\">
\t\t\t\t\t\t\t\t<i class=\"material-icons prefix\">euro_symbol</i>
\t\t\t\t\t\t\t\t<input placeholder=\"0\" id=\"4\" type=\"number\" class=\"validate montant_field\">
\t\t\t\t\t\t\t\t<label for=\"4\">Montant de départ du compte</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col s12 m10 l6 offset-m1 offset-l3\">
\t\t\t\t\t\t\t\t<label>Type de compte</label>
\t\t\t\t\t\t\t\t<select class=\"browser-default\">
\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Type de compte</option>
\t\t\t\t\t\t\t\t\t<option value=\"credit-card\">Principal (compte par défaut)</option>
\t\t\t\t\t\t\t\t\t<option value=\"credit-card\">Secondaire</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</section>
\t\t</div>
\t\t<div id=\"new_account_footer\" class=\"modal-footer\">
\t\t\t<a id=\"add_new_account\" href=\"#\" class=\"btn modal-action waves-effect waves-light green animated disabled\" style=\"margin-right: 20px;\"><i class=\"fa fa-check left\"></i>Ajouter</a>
\t\t\t<a id=\"return_from_new_account\" href=\"#\" class=\"btn waves-effect waves-light left modal-close cardinal-button\" style=\"margin-left: 20px;\"><i class=\"fa fa-angle-left left\"></i>Retour</a>
\t\t</div>
\t</div>
\t<!-- /.Modal New Account -->


\t";
        // line 130
        $this->displayBlock('javascript', $context, $blocks);
        // line 136
        echo "\t<script>
\t\tfunction logo_resize () {
\t\t\tif (\$(window).width() <= 600) {
\t\t\t\t\$('#logo_navbar').height('50px')
\t\t\t} else {
\t\t\t\t\$('#logo_navbar').height('50px')
\t\t\t}
\t\t}
\t\tfunction body_min_size() {
\t\t\t\$('#main_wrapper').css({'min-height': \$(window).height() - \$('#footer_wrapper').height() - 91});
\t\t}
\t\t//Fonction pour supprimer le fond grisé si quelqu'un clic 2 fois rapidement sur un bouton de modal
\t\tfunction clean_overlay() {
\t\t\t//La fonction est lancée tout de suite après le click donc, on compte le nombre de lean-overlay; s'il y en a plus qu'un
\t\t\t//ceux en trop ne seront pas supprimés donc on intervient, sinon on laisse les choses se faire.
\t\t\twhile (\$('.lean-overlay').length >= 2) {
\t\t\t\t\$('.lean-overlay').first().remove();
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
        
        $__internal_62f1e260ad97f61ed4580e850f38d7a1d063ceca81db8556c665f444bb1ed26c->leave($__internal_62f1e260ad97f61ed4580e850f38d7a1d063ceca81db8556c665f444bb1ed26c_prof);

    }

    // line 11
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_88a8515ec9f85dab193284600311f7125703973fd2d7de1204262f2792033b01 = $this->env->getExtension("native_profiler");
        $__internal_88a8515ec9f85dab193284600311f7125703973fd2d7de1204262f2792033b01->enter($__internal_88a8515ec9f85dab193284600311f7125703973fd2d7de1204262f2792033b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_88a8515ec9f85dab193284600311f7125703973fd2d7de1204262f2792033b01->leave($__internal_88a8515ec9f85dab193284600311f7125703973fd2d7de1204262f2792033b01_prof);

    }

    // line 29
    public function block_accounts($context, array $blocks = array())
    {
        $__internal_7b2c4a1e7faed069c434cc6ef0e73ae73202d2c591eb6bc5591c0610ee0ce358 = $this->env->getExtension("native_profiler");
        $__internal_7b2c4a1e7faed069c434cc6ef0e73ae73202d2c591eb6bc5591c0610ee0ce358->enter($__internal_7b2c4a1e7faed069c434cc6ef0e73ae73202d2c591eb6bc5591c0610ee0ce358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accounts"));

        // line 30
        echo "\t\t\t\t\t<li><a class=\"waves-effect waves-light link-hover\">Livret A <i class=\"fa fa-book left hide-on-small-only\"></i></a></li>
\t\t\t\t\t<li><a class=\"waves-effect waves-light link-hover active-account\">Compte Courant <i class=\"fa fa-book left hide-on-small-only\"></i></a></li>
\t\t\t\t\t";
        
        $__internal_7b2c4a1e7faed069c434cc6ef0e73ae73202d2c591eb6bc5591c0610ee0ce358->leave($__internal_7b2c4a1e7faed069c434cc6ef0e73ae73202d2c591eb6bc5591c0610ee0ce358_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_58df18881e6c33e4a5efeb70c073c5f0ef795197acba17426182a419e2475d1a = $this->env->getExtension("native_profiler");
        $__internal_58df18881e6c33e4a5efeb70c073c5f0ef795197acba17426182a419e2475d1a->enter($__internal_58df18881e6c33e4a5efeb70c073c5f0ef795197acba17426182a419e2475d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 50
        echo "\t\t";
        
        $__internal_58df18881e6c33e4a5efeb70c073c5f0ef795197acba17426182a419e2475d1a->leave($__internal_58df18881e6c33e4a5efeb70c073c5f0ef795197acba17426182a419e2475d1a_prof);

    }

    // line 130
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_00d5727ce8ee9f38f3026657ad743989044e3d4200c715d24b75bb40fcac258e = $this->env->getExtension("native_profiler");
        $__internal_00d5727ce8ee9f38f3026657ad743989044e3d4200c715d24b75bb40fcac258e->enter($__internal_00d5727ce8ee9f38f3026657ad743989044e3d4200c715d24b75bb40fcac258e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 131
        echo "\t<!--  Scripts-->
\t<script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.2.2.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/materialize.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/scroll-to.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_00d5727ce8ee9f38f3026657ad743989044e3d4200c715d24b75bb40fcac258e->leave($__internal_00d5727ce8ee9f38f3026657ad743989044e3d4200c715d24b75bb40fcac258e_prof);

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
        return array (  307 => 134,  303 => 133,  299 => 132,  296 => 131,  290 => 130,  283 => 50,  277 => 49,  268 => 30,  262 => 29,  253 => 18,  249 => 17,  245 => 16,  241 => 15,  236 => 12,  230 => 11,  185 => 136,  183 => 130,  102 => 51,  100 => 49,  86 => 40,  76 => 37,  68 => 36,  61 => 33,  59 => 29,  52 => 27,  43 => 20,  41 => 11,  35 => 8,  26 => 1,);
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
/* 				<a href="{{ path('su_account_homepage') }}" class="brand-logo center"><img id="logo_navbar" src="{{ asset('img/design/logo-icon-min.png') }}" class="responsive-img" style="height: 50px;"></img></a>*/
/* 				<ul id="drop_accounts" class="dropdown-content z-depth-3" style="border: 1px solid #711d2a;">*/
/* 					{% block accounts %}*/
/* 					<li><a class="waves-effect waves-light link-hover">Livret A <i class="fa fa-book left hide-on-small-only"></i></a></li>*/
/* 					<li><a class="waves-effect waves-light link-hover active-account">Compte Courant <i class="fa fa-book left hide-on-small-only"></i></a></li>*/
/* 					{% endblock %}*/
/* 					<li><a href="{{ path('su_user_param') }}" class="waves-effect waves-light link-hover">Nouveau <i class="fa fa-plus left"></i></a></li>*/
/* 				</ul>*/
/* 				<ul class="left small-only">*/
/* 					<li id="home_link" {% if menu_selected == 'home' %}class="active" {% endif %} ><a href="{{ path('su_account_homepage') }}" class="waves-effect waves-light link-hover"><span class="hide-on-small-only">Accueil <i class="fa fa-home left"></i></span><span class="hide-on-med-and-up"><i class="fa fa-home fa-2x" style="padding-top: 10px;"></i></span></a></li>*/
/* 					<li id="param_link" {% if menu_selected == 'param' %}class="active" {% endif %} ><a href="{{ path('su_user_param') }}" class="waves-effect waves-light link-hover"><span class="hide-on-small-only">Paramètres <i class="fa fa-edit left"></i></span><span class="hide-on-med-and-up"><i class="fa fa-edit fa-2x" style="padding-top: 10px;"></i></span></a></li>					*/
/* 				</ul>*/
/* 				<ul class="right" id="navbar_right">*/
/* 					<li {% if menu_selected == 'my_accounts' %} class="active" {% endif %} ><a class="dropdown-button" data-activates="drop_accounts"><span class="hide-on-small-only">Mes comptes <i class="fa fa-chevron-down right"></i></span><span class="hide-on-med-and-up"><i class="fa fa-chevron-down fa-2x" style="padding-top: 10px;"></i></span></a></a></li>*/
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
/* 	*/
/* 	<!-- Modal New Account -->*/
/* 	<div id="new_account_modal" class="modal modal-fixed-footer">*/
/* 		<div class="modal-content" style="overflow: hidden;">*/
/* 			<section id="new_account_top">*/
/* 				<div class="col s12" style="border-bottom: 1px solid #ddd; padding: 0px;">*/
/* 					<h5 style="margin-top: 0;"><i class="fa fa-book left"></i>Ajouter un compte</h5>*/
/* 				</div>*/
/* 			</section>*/
/* 			<section id="new_account_content" style="height: 100%; margin-bottom: 0px; overflow-x: hidden; overflow-y: auto;padding-top: 10px; padding-bottom: 20px;">*/
/* 				<div class="row" style="margin-bottom: 0px;">*/
/* 					Pour commencer remplisser les informations nécessaires à la création d'un nouveau compte bancaire. Votre compte utilisateur peut être lié à autant de comptes bancaires que vous le souhaitez.*/
/* 					<br>*/
/* 					<b><big><i class="fa fa-warning"></i> Attention:</big></b> le montant de départ donné doit être celui du niveau de votre compte avant la première opération que vous allez enregistrer sur le site. C'est à partir de ce premier montant que tout sera calculé.*/
/* 					<br><br>*/
/* 					<form class="col s12">*/
/* 						<div class="row">*/
/* 							<div class="input-field col s12 m10 l6 offset-m1 offset-l3">*/
/* 								<i class="material-icons prefix">mode_edit</i>*/
/* 								<input placeholder="Livret A" id="6" class="description_field validate" type="text">*/
/* 								<label for="6">Nom du compte</label>*/
/* 							</div>*/
/* 							<div class="input-field col s12 m10 l6 offset-m1 offset-l3">*/
/* 								<i class="material-icons prefix">euro_symbol</i>*/
/* 								<input placeholder="0" id="4" type="number" class="validate montant_field">*/
/* 								<label for="4">Montant de départ du compte</label>*/
/* 							</div>*/
/* 						<div class="row">*/
/* 							<div class="col s12 m10 l6 offset-m1 offset-l3">*/
/* 								<label>Type de compte</label>*/
/* 								<select class="browser-default">*/
/* 									<option value="" disabled selected>Type de compte</option>*/
/* 									<option value="credit-card">Principal (compte par défaut)</option>*/
/* 									<option value="credit-card">Secondaire</option>*/
/* 								</select>*/
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						</div>*/
/* 					</form>*/
/* 				</div>*/
/* 			</section>*/
/* 		</div>*/
/* 		<div id="new_account_footer" class="modal-footer">*/
/* 			<a id="add_new_account" href="#" class="btn modal-action waves-effect waves-light green animated disabled" style="margin-right: 20px;"><i class="fa fa-check left"></i>Ajouter</a>*/
/* 			<a id="return_from_new_account" href="#" class="btn waves-effect waves-light left modal-close cardinal-button" style="margin-left: 20px;"><i class="fa fa-angle-left left"></i>Retour</a>*/
/* 		</div>*/
/* 	</div>*/
/* 	<!-- /.Modal New Account -->*/
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
/* 				$('#logo_navbar').height('50px')*/
/* 			} else {*/
/* 				$('#logo_navbar').height('50px')*/
/* 			}*/
/* 		}*/
/* 		function body_min_size() {*/
/* 			$('#main_wrapper').css({'min-height': $(window).height() - $('#footer_wrapper').height() - 91});*/
/* 		}*/
/* 		//Fonction pour supprimer le fond grisé si quelqu'un clic 2 fois rapidement sur un bouton de modal*/
/* 		function clean_overlay() {*/
/* 			//La fonction est lancée tout de suite après le click donc, on compte le nombre de lean-overlay; s'il y en a plus qu'un*/
/* 			//ceux en trop ne seront pas supprimés donc on intervient, sinon on laisse les choses se faire.*/
/* 			while ($('.lean-overlay').length >= 2) {*/
/* 				$('.lean-overlay').first().remove();*/
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
