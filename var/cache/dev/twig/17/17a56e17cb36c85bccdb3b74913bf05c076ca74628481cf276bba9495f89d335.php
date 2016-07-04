<?php

/* SUUserBundle:User:param.html.twig */
class __TwigTemplate_6e372fb33adaa0d11aafab94db451ae0cfe10f29c553a614692f0594c10cf8f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUMainBundle::layout.html.twig", "SUUserBundle:User:param.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SUMainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f541908a4722ef906e88b4183ca69dbc1c04c402b8d851d92df3ae46ec923adc = $this->env->getExtension("native_profiler");
        $__internal_f541908a4722ef906e88b4183ca69dbc1c04c402b8d851d92df3ae46ec923adc->enter($__internal_f541908a4722ef906e88b4183ca69dbc1c04c402b8d851d92df3ae46ec923adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SUUserBundle:User:param.html.twig"));

        // line 3
        $context["menu_selected"] = "param";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f541908a4722ef906e88b4183ca69dbc1c04c402b8d851d92df3ae46ec923adc->leave($__internal_f541908a4722ef906e88b4183ca69dbc1c04c402b8d851d92df3ae46ec923adc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_069022f366797a43f416ee8ac461b342685a8a41776002647c2e61175d96d510 = $this->env->getExtension("native_profiler");
        $__internal_069022f366797a43f416ee8ac461b342685a8a41776002647c2e61175d96d510->enter($__internal_069022f366797a43f416ee8ac461b342685a8a41776002647c2e61175d96d510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"row\">
\t<div class=\"col l8 offset-l2 m10 offset-m1 s12\" style=\"margin-top: 10px;\">
\t\t<div class=\"col s12 card\" style=\"padding: 0px; border: 1px solid #75828E;\">
\t\t\t<section id=\"history_header\" class=\"kj-grey\" style=\"border-radius: 2px;\">
\t\t\t\t<div class=\"row\" style=\"margin-bottom: 0px;\">
\t\t\t\t\t<div class=\"col s12 white-text\">
\t\t\t\t\t\t<h5 class=\"col s12\"><i class=\"fa fa-gears left\"></i>Paramètres</span>
\t\t\t\t\t\t</h5>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<section class=\"col s12\" style=\"padding: 30px;\">
\t\t\t\t<div id=\"param_info\" class=\"row\">
\t\t\t\t\t<div class=\"col s12 m8 verticalcenter\">
\t\t\t\t\t\t<h5 style=\"border-bottom: 1px solid #75828E;\"><small><i class=\"fa fa-info-circle\"></i> Informations</small></h5>
\t\t\t\t\t\t<p class=\"saisie center-align\">
\t\t\t\t\t\t\t<span><b><big>Guillaume Fournier</big></b></span>
\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\tNombre de comptes : <span></span>
\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i> Dernière connexion : <span></span>
\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i> Email : <span></span>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col s8 offset-s2 m3 offset-m1 l3 offset-l1\">
\t\t\t\t\t\t<img id=\"param_img\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/design/logo-min.png"), "html", null, true);
        echo "\" class=\"responsive-img\"></img>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col s12\">
\t\t\t\t\t<h5 style=\"border-bottom: 1px solid #75828E;\"><small><i class=\"fa fa-book\"></i> Vos comptes</small></h5>
\t\t\t\t\t<p class=\"saisie\">
\t\t\t\t\t\tDans cette section vous pouvez gérer vos comptes, en ajouter de nouveaux ou en supprimer.
\t\t\t\t\t\t</br>
\t\t\t\t\t</p>
\t\t\t\t\t<table class=\"striped highlight centered\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>Nom du compte</th>
\t\t\t\t\t\t\t\t<th>Type</th>
\t\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr class=\"ligne\">
\t\t\t\t\t\t\t\t<td>Livret A</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<select class=\"browser-default\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled>Type de compte</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Principal\">Principal</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Secondaire\" selected>Secondaire</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a class=\"btn waves-effect waves-light link-hover cardinal-button\"><i class=\"fa fa-times left hide-on-small-only\"></i>Supprimer</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr class=\"ligne\">
\t\t\t\t\t\t\t\t<td>Compte courant</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<select class=\"browser-default\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled>Type de compte</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Principal\" selected>Principal</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"Secondaire\" class=\"active\">Secondaire</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a class=\"btn waves-effect waves-light link-hover cardinal-button\"><i class=\"fa fa-times left hide-on-small-only\"></i>Supprimer</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"center-align\">
\t\t\t\t\t\t<a id=\"new_account_button\" class=\"btn waves-effect waves-light link-hover cardinal-button\"><i class=\"fa fa-plus left\"></i>Nouveau compte</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col s12\">
\t\t\t\t\t<h5 style=\"border-bottom: 1px solid #75828E;\"><small><i class=\"fa fa-list-ul\"></i> Catégories</small></h5>
\t\t\t\t\t<p class=\"saisie\">
\t\t\t\t\t\tLes catégories vous permettent de grouper vos dépenses ou vos sources de revenues pour les ajouter plus facilement et avoir des graphes de synthèse plus clairs. Vous pouvez ajouter autant de catégories que vous le voulez. Les catégories peuvent être utilisées avec tous vos comptes.
\t\t\t\t\t\t</br>
\t\t\t\t\t</p>
\t\t\t\t\t<table class=\"striped highlight centered\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>Catégorie</th>
\t\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr class=\"ligne\">
\t\t\t\t\t\t\t\t<td>Courses</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a class=\"btn waves-effect waves-light link-hover cardinal-button\"><i class=\"fa fa-times left hide-on-small-only\"></i>Supprimer</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr class=\"ligne\">
\t\t\t\t\t\t\t\t<td>Loyer</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a class=\"btn waves-effect waves-light link-hover cardinal-button\"><i class=\"fa fa-times left hide-on-small-only\"></i>Supprimer</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr class=\"ligne\">
\t\t\t\t\t\t\t\t<td>Vêtements</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a class=\"btn waves-effect waves-light link-hover cardinal-button\"><i class=\"fa fa-times left hide-on-small-only\"></i>Supprimer</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr class=\"ligne\">
\t\t\t\t\t\t\t\t<td>Transports</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a class=\"btn waves-effect waves-light link-hover cardinal-button\"><i class=\"fa fa-times left hide-on-small-only\"></i>Supprimer</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"center-align\">
\t\t\t\t\t\t<a id=\"add_new_category\" class=\"btn waves-effect waves-light link-hover cardinal-button\"><i class=\"fa fa-plus left\"></i>Nouvelle catégorie</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col s12\">
\t\t\t\t\t<h5 style=\"border-bottom: 1px solid #75828E;\"><small><i class=\"fa fa-gears\"></i> Paramètres utilisateur</small></h5>
\t\t\t\t\t<p class=\"saisie\">
\t\t\t\t\t\t<form id=\"user_update_form\">
\t\t\t\t\t\t\t<div class=\"input-field col s12 l6 offset-l3\">
\t\t\t\t\t\t\t\t<input placeholder=\"Thomas\" id=\"first_name\" type=\"text\" class=\"\">
\t\t\t\t\t\t\t\t<label for=\"first_name\">Prénom</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-field col s12 l6 offset-l3\">
\t\t\t\t\t\t\t\t<input placeholder=\"Dupont\" id=\"last_name\" type=\"text\" class=\"\">
\t\t\t\t\t\t\t\t<label for=\"last_name\">Nom</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-field col s12 l6 offset-l3\">
\t\t\t\t\t\t\t\t<input placeholder=\"****\" id=\"pass1\" type=\"password\" class=\"\">
\t\t\t\t\t\t\t\t<label for=\"pass1\">Mot de passe</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-field col s12 l6 offset-l3\">
\t\t\t\t\t\t\t\t<input placeholder=\"****\" id=\"pass2\" type=\"password\" class=\"\">
\t\t\t\t\t\t\t\t<label for=\"pass2\">Mot de passe (confirmation)</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-field col s12 l6 offset-l3\">
\t\t\t\t\t\t\t\t<input placeholder=\"thomas@dupont.fr\" id=\"mail1\" type=\"email\" class=\"\">
\t\t\t\t\t\t\t\t<label for=\"mail1\">Adresse mail:</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input-field col s12 l6 offset-l3\">
\t\t\t\t\t\t\t\t<input placeholder=\"thomas@dupont.fr\" id=\"mail2\" type=\"email\" class=\"\">
\t\t\t\t\t\t\t\t<label for=\"mail2\">Adresse mail (confirmation):</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col s12 center-align\">
\t\t\t\t\t\t\t\t<button id=\"send_user_update\" type=\"submit\" class=\"btn-large btn-body waves-effect waves-light link-hover cardinal-button\"><i class=\"fa fa-send left\"></i>Envoyer</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</section>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_069022f366797a43f416ee8ac461b342685a8a41776002647c2e61175d96d510->leave($__internal_069022f366797a43f416ee8ac461b342685a8a41776002647c2e61175d96d510_prof);

    }

    // line 170
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_068caf03b7274a96d187fdb6188e68f6acd848faedbf391b88319deed31dae75 = $this->env->getExtension("native_profiler");
        $__internal_068caf03b7274a96d187fdb6188e68f6acd848faedbf391b88319deed31dae75->enter($__internal_068caf03b7274a96d187fdb6188e68f6acd848faedbf391b88319deed31dae75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 171
        echo "\t";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t<script>
\t\tfunction param_init() {
\t\t\tif (\$(window).width() >= 960) {
\t\t\t\tif (!\$('#param_info').children().hasClass('verticalcenter')) {
\t\t\t\t\t\$('#param_info').children().addClass('verticalcenter');
\t\t\t\t}
\t\t\t\t\$('#param_info').height(\$('#param_img').height());
\t\t\t} else {
\t\t\t\t\$('#param_info').children().removeClass('verticalcenter');
\t\t\t}
\t\t}
\t\tfunction becomesValid(elem) {
\t\t\tif (!elem.hasClass(\"valid\")) {
\t\t\t\telem.removeClass(\"invalid\").addClass(\"valid\");
\t\t\t} else {
\t\t\t\telem.removeClass(\"invalid\");
\t\t\t}
\t\t}
\t\tfunction becomesInvalid(elem) {
\t\t\tif (!elem.hasClass(\"invalid\")) {
\t\t\t\telem.removeClass(\"valid\").addClass(\"invalid\");
\t\t\t} else {
\t\t\t\telem.removeClass(\"valid\");
\t\t\t}
\t\t}
\t\t\$(document).ready(function() {
\t\t\tparam_init();
\t\t\t
\t\t\t//Vérification & envoie du formulaire utilisateur ------------------------------------------
\t\t\t\$('#first_name, #last_name, #mail1').keyup(function () {
\t\t\t\tvar valeur = \$(this).val();
\t\t\t\tif ((valeur != \"\") && (valeur.length >= 3)) {
\t\t\t\t\tbecomesValid(\$(this));
\t\t\t\t} else {
\t\t\t\t\tbecomesInvalid(\$(this));
\t\t\t\t}
\t\t\t});
\t\t\t
\t\t\t\$('#pass1').keyup(function () {
\t\t\t\tvar valeur = \$(this).val();
\t\t\t\tif ((valeur != \"\") && (valeur.length >= 6)) {
\t\t\t\t\tbecomesValid(\$(this));
\t\t\t\t} else {
\t\t\t\t\tbecomesInvalid(\$(this));
\t\t\t\t}
\t\t\t});
\t\t\t
\t\t\t\$('#pass2').keyup(function () {
\t\t\t\tvar pass1 = \$('#pass1').val();
\t\t\t\tvar pass2 = \$(this).val();
\t\t\t\tif ((pass1 == pass2) && (pass1.length >= 6)) {
\t\t\t\t\tbecomesValid(\$(this));
\t\t\t\t} else {
\t\t\t\t\tbecomesInvalid(\$(this));
\t\t\t\t}
\t\t\t});
\t\t\t
\t\t\t\$('#mail2').keyup(function () {
\t\t\t\tvar mail1 = \$('#mail1').val();
\t\t\t\tvar mail2 = \$(this).val();
\t\t\t\tif (mail1 == mail2) {
\t\t\t\t\tbecomesValid(\$(this));
\t\t\t\t} else {
\t\t\t\t\tbecomesInvalid(\$(this));
\t\t\t\t}
\t\t\t});
\t\t\t
\t\t\t\$('#user_update_form').submit(function (e) {
\t\t\t\te.preventDefault();
\t\t\t\tvar firstName = \$('#first_name').val();
\t\t\t\tvar lastName = \$('#last_name').val();
\t\t\t\tvar pass1 = \$('#pass1').val();
\t\t\t\tvar pass2 = \$('#pass2').val();
\t\t\t\tvar mail1 = \$('#mail1').val();
\t\t\t\tvar mail2 = \$('#mail2').val();
\t\t\t\tif ((firstName != \"\") && (lastName != \"\") && (pass1 == pass2) && (pass1 != \"\") && (mail1 == mail2) && (mail1 != \"\")) {
\t\t\t\t\t\$('#send_user_update').addClass('disabled');
\t\t\t\t\t\$.post(
\t\t\t\t\t\t'php.php',
\t\t\t\t\t\t{
\t\t\t\t\t\t\tfirstName: firstName,
\t\t\t\t\t\t\tlastName: lastName,
\t\t\t\t\t\t\tpass: pass1,
\t\t\t\t\t\t\tmail: mail1
\t\t\t\t\t\t},
\t\t\t\t\t\tfunction (rep) {
\t\t\t\t\t\t\t\$('#send_user_update').removeClass('disabled');
\t\t\t\t\t\t\tif (rep.message == \"user_updated\") {
\t\t\t\t\t\t\t\tMaterialize.toast(\"Votre compte a été mis à jour\", 5000);
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tMaterialize.toast(\"Ooops, le formulaire n'a pas été accepté ... êtes vous sûr(e) de l'adresse mail?\", 6000);
\t\t\t\t\t\t\t\tconsole.log(rep);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t);
\t\t\t\t} else {
\t\t\t\t\tMaterialize.toast(\"Formulaire non valide\", 5000);
\t\t\t\t}
\t\t\t});
\t\t\t//------------------------------------------------------------------------------
\t\t\t
\t\t\t\$('#new_account_button').click(function() {
\t\t\t\tif (\$(window).width() >= 992) {
\t\t\t\t\t\$('#new_account_modal').openModal({
\t\t\t\t\t\tdismissible: true,
\t\t\t\t\t\topacity: 0.5,
\t\t\t\t\t\tin_duration: 250,
\t\t\t\t\t\tout_duration: 250,
\t\t\t\t\t\tcomplete: clean_overlay
\t\t\t\t\t});
\t\t\t\t} else {
\t\t\t\t\t\$(location).attr('href',\"";
        // line 283
        echo $this->env->getExtension('routing')->getPath("su_account_mobile_account");
        echo "\");
\t\t\t\t}
\t\t\t});
\t\t\t
\t\t\t\$(window).resize(function () {
\t\t\t\tparam_init();
\t\t\t});
\t\t});
\t</script>
";
        
        $__internal_068caf03b7274a96d187fdb6188e68f6acd848faedbf391b88319deed31dae75->leave($__internal_068caf03b7274a96d187fdb6188e68f6acd848faedbf391b88319deed31dae75_prof);

    }

    public function getTemplateName()
    {
        return "SUUserBundle:User:param.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 283,  222 => 171,  216 => 170,  72 => 32,  44 => 6,  38 => 5,  31 => 1,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'SUMainBundle::layout.html.twig' %}*/
/* */
/* {% set menu_selected = 'param' %}*/
/* */
/* {% block body %}*/
/* <div class="row">*/
/* 	<div class="col l8 offset-l2 m10 offset-m1 s12" style="margin-top: 10px;">*/
/* 		<div class="col s12 card" style="padding: 0px; border: 1px solid #75828E;">*/
/* 			<section id="history_header" class="kj-grey" style="border-radius: 2px;">*/
/* 				<div class="row" style="margin-bottom: 0px;">*/
/* 					<div class="col s12 white-text">*/
/* 						<h5 class="col s12"><i class="fa fa-gears left"></i>Paramètres</span>*/
/* 						</h5>*/
/* 					</div>*/
/* 				</div>*/
/* 			</section>*/
/* 			<section class="col s12" style="padding: 30px;">*/
/* 				<div id="param_info" class="row">*/
/* 					<div class="col s12 m8 verticalcenter">*/
/* 						<h5 style="border-bottom: 1px solid #75828E;"><small><i class="fa fa-info-circle"></i> Informations</small></h5>*/
/* 						<p class="saisie center-align">*/
/* 							<span><b><big>Guillaume Fournier</big></b></span>*/
/* 							</br>*/
/* 							Nombre de comptes : <span></span>*/
/* 							</br>*/
/* 							<i class="fa fa-calendar"></i> Dernière connexion : <span></span>*/
/* 							</br>*/
/* 							<i class="fa fa-envelope"></i> Email : <span></span>*/
/* 						</p>*/
/* 					</div>*/
/* 					<div class="col s8 offset-s2 m3 offset-m1 l3 offset-l1">*/
/* 						<img id="param_img" src="{{ asset('img/design/logo-min.png') }}" class="responsive-img"></img>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col s12">*/
/* 					<h5 style="border-bottom: 1px solid #75828E;"><small><i class="fa fa-book"></i> Vos comptes</small></h5>*/
/* 					<p class="saisie">*/
/* 						Dans cette section vous pouvez gérer vos comptes, en ajouter de nouveaux ou en supprimer.*/
/* 						</br>*/
/* 					</p>*/
/* 					<table class="striped highlight centered">*/
/* 						<thead>*/
/* 							<tr>*/
/* 								<th>Nom du compte</th>*/
/* 								<th>Type</th>*/
/* 								<th>Action</th>*/
/* 							</tr>*/
/* 						</thead>*/
/* 						*/
/* 						<tbody>*/
/* 							<tr class="ligne">*/
/* 								<td>Livret A</td>*/
/* 								<td>*/
/* 									<select class="browser-default">*/
/* 										<option value="" disabled>Type de compte</option>*/
/* 										<option value="Principal">Principal</option>*/
/* 										<option value="Secondaire" selected>Secondaire</option>*/
/* 									</select>*/
/* 								</td>*/
/* 								<td>*/
/* 									<a class="btn waves-effect waves-light link-hover cardinal-button"><i class="fa fa-times left hide-on-small-only"></i>Supprimer</a>*/
/* 								</td>*/
/* 							</tr>*/
/* 							<tr class="ligne">*/
/* 								<td>Compte courant</td>*/
/* 								<td>*/
/* 									<select class="browser-default">*/
/* 										<option value="" disabled>Type de compte</option>*/
/* 										<option value="Principal" selected>Principal</option>*/
/* 										<option value="Secondaire" class="active">Secondaire</option>*/
/* 									</select>*/
/* 								</td>*/
/* 								<td>*/
/* 									<a class="btn waves-effect waves-light link-hover cardinal-button"><i class="fa fa-times left hide-on-small-only"></i>Supprimer</a>*/
/* 								</td>*/
/* 							</tr>*/
/* 						</tbody>*/
/* 					</table>*/
/* 					<br>*/
/* 					<div class="center-align">*/
/* 						<a id="new_account_button" class="btn waves-effect waves-light link-hover cardinal-button"><i class="fa fa-plus left"></i>Nouveau compte</a>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col s12">*/
/* 					<h5 style="border-bottom: 1px solid #75828E;"><small><i class="fa fa-list-ul"></i> Catégories</small></h5>*/
/* 					<p class="saisie">*/
/* 						Les catégories vous permettent de grouper vos dépenses ou vos sources de revenues pour les ajouter plus facilement et avoir des graphes de synthèse plus clairs. Vous pouvez ajouter autant de catégories que vous le voulez. Les catégories peuvent être utilisées avec tous vos comptes.*/
/* 						</br>*/
/* 					</p>*/
/* 					<table class="striped highlight centered">*/
/* 						<thead>*/
/* 							<tr>*/
/* 								<th>Catégorie</th>*/
/* 								<th>Action</th>*/
/* 							</tr>*/
/* 						</thead>*/
/* 						*/
/* 						<tbody>*/
/* 							<tr class="ligne">*/
/* 								<td>Courses</td>*/
/* 								<td>*/
/* 									<a class="btn waves-effect waves-light link-hover cardinal-button"><i class="fa fa-times left hide-on-small-only"></i>Supprimer</a>*/
/* 								</td>*/
/* 							</tr>*/
/* 							<tr class="ligne">*/
/* 								<td>Loyer</td>*/
/* 								<td>*/
/* 									<a class="btn waves-effect waves-light link-hover cardinal-button"><i class="fa fa-times left hide-on-small-only"></i>Supprimer</a>*/
/* 								</td>*/
/* 							</tr>*/
/* 							<tr class="ligne">*/
/* 								<td>Vêtements</td>*/
/* 								<td>*/
/* 									<a class="btn waves-effect waves-light link-hover cardinal-button"><i class="fa fa-times left hide-on-small-only"></i>Supprimer</a>*/
/* 								</td>*/
/* 							</tr>*/
/* 							<tr class="ligne">*/
/* 								<td>Transports</td>*/
/* 								<td>*/
/* 									<a class="btn waves-effect waves-light link-hover cardinal-button"><i class="fa fa-times left hide-on-small-only"></i>Supprimer</a>*/
/* 								</td>*/
/* 							</tr>*/
/* 						</tbody>*/
/* 					</table>*/
/* 					<br>*/
/* 					<div class="center-align">*/
/* 						<a id="add_new_category" class="btn waves-effect waves-light link-hover cardinal-button"><i class="fa fa-plus left"></i>Nouvelle catégorie</a>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col s12">*/
/* 					<h5 style="border-bottom: 1px solid #75828E;"><small><i class="fa fa-gears"></i> Paramètres utilisateur</small></h5>*/
/* 					<p class="saisie">*/
/* 						<form id="user_update_form">*/
/* 							<div class="input-field col s12 l6 offset-l3">*/
/* 								<input placeholder="Thomas" id="first_name" type="text" class="">*/
/* 								<label for="first_name">Prénom</label>*/
/* 							</div>*/
/* 							<div class="input-field col s12 l6 offset-l3">*/
/* 								<input placeholder="Dupont" id="last_name" type="text" class="">*/
/* 								<label for="last_name">Nom</label>*/
/* 							</div>*/
/* 							<div class="input-field col s12 l6 offset-l3">*/
/* 								<input placeholder="****" id="pass1" type="password" class="">*/
/* 								<label for="pass1">Mot de passe</label>*/
/* 							</div>*/
/* 							<div class="input-field col s12 l6 offset-l3">*/
/* 								<input placeholder="****" id="pass2" type="password" class="">*/
/* 								<label for="pass2">Mot de passe (confirmation)</label>*/
/* 							</div>*/
/* 							<div class="input-field col s12 l6 offset-l3">*/
/* 								<input placeholder="thomas@dupont.fr" id="mail1" type="email" class="">*/
/* 								<label for="mail1">Adresse mail:</label>*/
/* 							</div>*/
/* 							<div class="input-field col s12 l6 offset-l3">*/
/* 								<input placeholder="thomas@dupont.fr" id="mail2" type="email" class="">*/
/* 								<label for="mail2">Adresse mail (confirmation):</label>*/
/* 							</div>*/
/* 							<div class="col s12 center-align">*/
/* 								<button id="send_user_update" type="submit" class="btn-large btn-body waves-effect waves-light link-hover cardinal-button"><i class="fa fa-send left"></i>Envoyer</button>*/
/* 							</div>*/
/* 						</form>*/
/* 					</p>*/
/* 				</div>*/
/* 			</section>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascript %}*/
/* 	{{ parent() }}*/
/* 	<script>*/
/* 		function param_init() {*/
/* 			if ($(window).width() >= 960) {*/
/* 				if (!$('#param_info').children().hasClass('verticalcenter')) {*/
/* 					$('#param_info').children().addClass('verticalcenter');*/
/* 				}*/
/* 				$('#param_info').height($('#param_img').height());*/
/* 			} else {*/
/* 				$('#param_info').children().removeClass('verticalcenter');*/
/* 			}*/
/* 		}*/
/* 		function becomesValid(elem) {*/
/* 			if (!elem.hasClass("valid")) {*/
/* 				elem.removeClass("invalid").addClass("valid");*/
/* 			} else {*/
/* 				elem.removeClass("invalid");*/
/* 			}*/
/* 		}*/
/* 		function becomesInvalid(elem) {*/
/* 			if (!elem.hasClass("invalid")) {*/
/* 				elem.removeClass("valid").addClass("invalid");*/
/* 			} else {*/
/* 				elem.removeClass("valid");*/
/* 			}*/
/* 		}*/
/* 		$(document).ready(function() {*/
/* 			param_init();*/
/* 			*/
/* 			//Vérification & envoie du formulaire utilisateur ------------------------------------------*/
/* 			$('#first_name, #last_name, #mail1').keyup(function () {*/
/* 				var valeur = $(this).val();*/
/* 				if ((valeur != "") && (valeur.length >= 3)) {*/
/* 					becomesValid($(this));*/
/* 				} else {*/
/* 					becomesInvalid($(this));*/
/* 				}*/
/* 			});*/
/* 			*/
/* 			$('#pass1').keyup(function () {*/
/* 				var valeur = $(this).val();*/
/* 				if ((valeur != "") && (valeur.length >= 6)) {*/
/* 					becomesValid($(this));*/
/* 				} else {*/
/* 					becomesInvalid($(this));*/
/* 				}*/
/* 			});*/
/* 			*/
/* 			$('#pass2').keyup(function () {*/
/* 				var pass1 = $('#pass1').val();*/
/* 				var pass2 = $(this).val();*/
/* 				if ((pass1 == pass2) && (pass1.length >= 6)) {*/
/* 					becomesValid($(this));*/
/* 				} else {*/
/* 					becomesInvalid($(this));*/
/* 				}*/
/* 			});*/
/* 			*/
/* 			$('#mail2').keyup(function () {*/
/* 				var mail1 = $('#mail1').val();*/
/* 				var mail2 = $(this).val();*/
/* 				if (mail1 == mail2) {*/
/* 					becomesValid($(this));*/
/* 				} else {*/
/* 					becomesInvalid($(this));*/
/* 				}*/
/* 			});*/
/* 			*/
/* 			$('#user_update_form').submit(function (e) {*/
/* 				e.preventDefault();*/
/* 				var firstName = $('#first_name').val();*/
/* 				var lastName = $('#last_name').val();*/
/* 				var pass1 = $('#pass1').val();*/
/* 				var pass2 = $('#pass2').val();*/
/* 				var mail1 = $('#mail1').val();*/
/* 				var mail2 = $('#mail2').val();*/
/* 				if ((firstName != "") && (lastName != "") && (pass1 == pass2) && (pass1 != "") && (mail1 == mail2) && (mail1 != "")) {*/
/* 					$('#send_user_update').addClass('disabled');*/
/* 					$.post(*/
/* 						'php.php',*/
/* 						{*/
/* 							firstName: firstName,*/
/* 							lastName: lastName,*/
/* 							pass: pass1,*/
/* 							mail: mail1*/
/* 						},*/
/* 						function (rep) {*/
/* 							$('#send_user_update').removeClass('disabled');*/
/* 							if (rep.message == "user_updated") {*/
/* 								Materialize.toast("Votre compte a été mis à jour", 5000);*/
/* 							} else {*/
/* 								Materialize.toast("Ooops, le formulaire n'a pas été accepté ... êtes vous sûr(e) de l'adresse mail?", 6000);*/
/* 								console.log(rep);*/
/* 							}*/
/* 						}*/
/* 					);*/
/* 				} else {*/
/* 					Materialize.toast("Formulaire non valide", 5000);*/
/* 				}*/
/* 			});*/
/* 			//------------------------------------------------------------------------------*/
/* 			*/
/* 			$('#new_account_button').click(function() {*/
/* 				if ($(window).width() >= 992) {*/
/* 					$('#new_account_modal').openModal({*/
/* 						dismissible: true,*/
/* 						opacity: 0.5,*/
/* 						in_duration: 250,*/
/* 						out_duration: 250,*/
/* 						complete: clean_overlay*/
/* 					});*/
/* 				} else {*/
/* 					$(location).attr('href',"{{ path('su_account_mobile_account') }}");*/
/* 				}*/
/* 			});*/
/* 			*/
/* 			$(window).resize(function () {*/
/* 				param_init();*/
/* 			});*/
/* 		});*/
/* 	</script>*/
/* {% endblock %}*/
