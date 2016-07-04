<?php

/* SUAccountBundle:Account:index.html.twig */
class __TwigTemplate_a1ec5834d62bcd74e0c9d7f6477ff6ea20d2b17da84ad2ccee1241b95d81e8b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUMainBundle::layout.html.twig", "SUAccountBundle:Account:index.html.twig", 1);
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
        $__internal_5c9f9df4b6256e0abd42669b36afa04844e0e2aa438bf7f9b885bb43d35228d2 = $this->env->getExtension("native_profiler");
        $__internal_5c9f9df4b6256e0abd42669b36afa04844e0e2aa438bf7f9b885bb43d35228d2->enter($__internal_5c9f9df4b6256e0abd42669b36afa04844e0e2aa438bf7f9b885bb43d35228d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SUAccountBundle:Account:index.html.twig"));

        // line 3
        $context["menu_selected"] = "home";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c9f9df4b6256e0abd42669b36afa04844e0e2aa438bf7f9b885bb43d35228d2->leave($__internal_5c9f9df4b6256e0abd42669b36afa04844e0e2aa438bf7f9b885bb43d35228d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_120e51c7af47411429bccaa0a00ff74c0a80a41acf70c41492e7a28217277832 = $this->env->getExtension("native_profiler");
        $__internal_120e51c7af47411429bccaa0a00ff74c0a80a41acf70c41492e7a28217277832->enter($__internal_120e51c7af47411429bccaa0a00ff74c0a80a41acf70c41492e7a28217277832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<ul class=\"tabs\" style=\"overflow: hidden;\">
\t<li id=\"recap_tab_button\" class=\"tab col s3\"><a class=\"truncate\" href=\"#recap\"><i class=\"fa fa-table\"></i><span class=\"hide-on-small-only\"> Récapitulatif</span></a></li>
\t<li id=\"operation_tab_button\" class=\"tab col s3\"><a class=\"truncate active\" href=\"#operation\"><i class=\"fa fa-terminal\"></i><span class=\"hide-on-small-only\"> Opérations</span></a></li>
\t<li id=\"export_tab_button\" class=\"tab col s3\"><a class=\"truncate\" href=\"#export\"><i class=\"fa fa-upload\"></i><span class=\"hide-on-small-only\"> Exporter</span></a></li>
</ul>

<div class=\"container\" style=\"margin-top: 20px;\">
\t<div class=\"row\" style=\"display: block;\">
\t
\t\t<div id=\"recap\" class=\"col s12\">
\t\t\t
\t\t\t<div class=\"col l10 offset-l1 m12 s12 card\" style=\"padding: 0px; border: 1px solid #75828E; min-height: 60%;\">
\t\t\t\t<section id=\"export_header\" class=\"kj-grey\" style=\"border-radius: 2px;\">
\t\t\t\t\t<div class=\"row\" style=\"margin-bottom: 0px;\">
\t\t\t\t\t\t<div class=\"col s12 white-text\">
\t\t\t\t\t\t\t<h5 class=\"col s12\"><i class=\"fa fa-table left hide-on-small-only\"></i>Récapitulatif</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<section id=\"export_body\" class=\"col s12\">
\t\t\t\t\t<div class=\"col s12 center-align\" style=\"padding-bottom: 20px;\">
\t\t\t\t\t\t<div class=\"row center-align\">
\t\t\t\t\t\t\t<h2 style=\"font-size: 3rem;\"><i class=\"fa fa-book hide-on-small-only\"></i> Compte courant</h2>
\t\t\t\t\t\t\t<span class=\"col s8 offset-s2\"><h5 class=\"col s12 m4 l4 offset-m4 offset-l4 hide-on-med-and-down\"><i class=\"fa fa-chevron-left left link-hover\"></i>06/16<i class=\"fa fa-chevron-right right link-hover\"></i></h5></span>
\t\t\t\t\t\t\t<h5 class=\"col s12 m4 l4 offset-m4 offset-l4 hide-on-large-only\"><i class=\"fa fa-chevron-left left link-hover\"></i>06/16<i class=\"fa fa-chevron-right right link-hover\"></i></h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<h2 class=\"divider-new-right\"><i class=\"fa fa-history left hide-on-small-only\"></i>Etat du compte le 01/06/16</h2>
\t\t\t\t\t\t<table class=\"striped highlight centered\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><b>Total</b></td>
\t\t\t\t\t\t\t\t\t<td><b>4 000 923 €</b></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<h2 class=\"divider-new-right\"><i class=\"fa fa-list-ul left hide-on-small-only\"></i>Opérations depuis le 01/06/16</h2>
\t\t\t\t\t\t<table class=\"striped highlight centered responsive-table\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Type</th>
\t\t\t\t\t\t\t\t\t<th>Catégorie</th>
\t\t\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t\t\t<th>Montant</th>
\t\t\t\t\t\t\t\t\t<th>Edition</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr class=\"ligne\">
\t\t\t\t\t\t\t\t\t<td class=\"type_option\">Carte banquaire</td>
\t\t\t\t\t\t\t\t\t<td class=\"category_option\"><span>Course</span> <i class=\"fa fa-info-circle tooltipped link-hover\" data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"Plein chez Carrefour\"></i></td>
\t\t\t\t\t\t\t\t\t<td class=\"date_option\">07/06/16</td>
\t\t\t\t\t\t\t\t\t<td class=\"montant_option\"><span>-140</span><span> €</span></td>
\t\t\t\t\t\t\t\t\t<td class=\"edition_option\" style=\"color: #be5f6e;\"><span class=\"edition\"><big><big><i class=\"fa fa-pencil link-hover edit-hover\"></i><i class=\"fa fa-times link-hover delete-hover suppression-icon\" style=\"margin-left: 15px;\"></i></big></big></span></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr class=\"ligne\">
\t\t\t\t\t\t\t\t\t<td class=\"type_option\">Chèque</td>
\t\t\t\t\t\t\t\t\t<td class=\"category_option\"><span>Course</span> <i class=\"fa fa-info-circle tooltipped link-hover\" data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"Plein chez Carrefour\"></i></td>
\t\t\t\t\t\t\t\t\t<td class=\"date_option\">07/06/16</td>
\t\t\t\t\t\t\t\t\t<td class=\"montant_option\"><span>-140</span><span> €</span></td>
\t\t\t\t\t\t\t\t\t<td class=\"edition_option\" style=\"color: #be5f6e;\"><span class=\"edition\"><big><big><i class=\"fa fa-pencil link-hover edit-hover\"></i><i class=\"fa fa-times link-hover delete-hover suppression-icon\" style=\"margin-left: 15px;\"></i></big></big></span></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr class=\"ligne\">
\t\t\t\t\t\t\t\t\t<td class=\"type_option\">Virement</td>
\t\t\t\t\t\t\t\t\t<td class=\"category_option\"><span>Loyer</span> <i class=\"fa fa-info-circle tooltipped link-hover\" data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"Plein chez Carrefour\"></i></td>
\t\t\t\t\t\t\t\t\t<td class=\"date_option\">07/06/16</td>
\t\t\t\t\t\t\t\t\t<td class=\"montant_option\"><span>-140</span><span> €</span></td>
\t\t\t\t\t\t\t\t\t<td class=\"edition_option\" style=\"color: #be5f6e;\"><span class=\"edition\"><big><big><i class=\"fa fa-pencil link-hover edit-hover\"></i><i class=\"fa fa-times link-hover delete-hover suppression-icon\" style=\"margin-left: 15px;\"></i></big></big></span></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr class=\"ligne\">
\t\t\t\t\t\t\t\t\t<td class=\"type_option\">Carte banquaire</td>
\t\t\t\t\t\t\t\t\t<td class=\"category_option\"><span>Vêtements</span> <i class=\"fa fa-info-circle tooltipped link-hover\" data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"Plein chez Carrefour\"></i></td>
\t\t\t\t\t\t\t\t\t<td class=\"date_option\">07/06/16</td>
\t\t\t\t\t\t\t\t\t<td class=\"montant_option\"><span>-140</span><span> €</span></td>
\t\t\t\t\t\t\t\t\t<td class=\"edition_option\" style=\"color: #be5f6e;\"><span class=\"edition\"><big><big><i class=\"fa fa-pencil link-hover edit-hover\"></i><i class=\"fa fa-times link-hover delete-hover suppression-icon\" style=\"margin-left: 15px;\"></i></big></big></span></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr class=\"ligne monthly-operation\">
\t\t\t\t\t\t\t\t\t<td class=\"type_option\">Carte banquaire</td>
\t\t\t\t\t\t\t\t\t<td class=\"category_option\"><span>Course</span> <i class=\"fa fa-info-circle tooltipped link-hover\" data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"Plein chez Carrefour\"></i></td>
\t\t\t\t\t\t\t\t\t<td class=\"date_option\">07/06/16</td>
\t\t\t\t\t\t\t\t\t<td class=\"montant_option\"><span>-140</span><span> €</span></td>
\t\t\t\t\t\t\t\t\t<td class=\"edition_option\" style=\"color: #be5f6e;\"><span class=\"edition\"><big><big><i class=\"fa fa-pencil link-hover edit-hover\"></i><i class=\"fa fa-times link-hover delete-hover suppression-icon\" style=\"margin-left: 15px;\"></i></big></big></span></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr class=\"ligne\">
\t\t\t\t\t\t\t\t\t<td class=\"type_option\">Carte banquaire</td>
\t\t\t\t\t\t\t\t\t<td class=\"category_option\"><span>Course</span> <i class=\"fa fa-info-circle tooltipped link-hover\" data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"Plein chez Carrefour\"></i></td>
\t\t\t\t\t\t\t\t\t<td class=\"date_option\">07/06/16</td>
\t\t\t\t\t\t\t\t\t<td class=\"montant_option\"><span>-140</span><span> €</span></td>
\t\t\t\t\t\t\t\t\t<td class=\"edition_option\" style=\"color: #be5f6e;\"><span class=\"edition\"><big><big><i class=\"fa fa-pencil link-hover edit-hover\"></i><i class=\"fa fa-times link-hover delete-hover suppression-icon\" style=\"margin-left: 15px;\"></i></big></big></span></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td><b>Total des opérations</b></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td><b>400 000 €</b></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td><b>Total en banque (au 26/06/16)</b></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td><b>3 609 223 €</b></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<h2 class=\"divider-new-right\"><i class=\"fa fa-hourglass-2 left hide-on-small-only\"></i>Opérations en attente</h2>
\t\t\t\t\t\t<table class=\"striped highlight centered responsive-table\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Type</th>
\t\t\t\t\t\t\t\t\t<th>Catégorie</th>
\t\t\t\t\t\t\t\t\t<th>Aura lieu le</th>
\t\t\t\t\t\t\t\t\t<th>Montant</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr class=\"ligne\">
\t\t\t\t\t\t\t\t\t<td class=\"type_option\">Carte banquaire</td>
\t\t\t\t\t\t\t\t\t<td class=\"category_option\"><span>Course</span> <i class=\"fa fa-info-circle tooltipped link-hover\" data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"Plein chez Carrefour\"></i></td>
\t\t\t\t\t\t\t\t\t<td class=\"date_option\">07/06/16</td>
\t\t\t\t\t\t\t\t\t<td class=\"montant_option\"><span>-140</span><span> €</span></td>
\t\t\t\t\t\t\t\t\t<td class=\"edition_option\" style=\"color: #be5f6e;\"><span class=\"edition\"><big><big><i class=\"fa fa-pencil link-hover edit-hover\"></i><i class=\"fa fa-times link-hover delete-hover suppression-icon\" style=\"margin-left: 15px;\"></i></big></big></span></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr class=\"ligne\">
\t\t\t\t\t\t\t\t\t<td class=\"type_option\">Carte banquaire</td>
\t\t\t\t\t\t\t\t\t<td class=\"category_option\"><span>Course</span> <i class=\"fa fa-info-circle tooltipped link-hover\" data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"Plein chez Carrefour\"></i></td>
\t\t\t\t\t\t\t\t\t<td class=\"date_option\">07/06/16</td>
\t\t\t\t\t\t\t\t\t<td class=\"montant_option\"><span>-140</span><span> €</span></td>
\t\t\t\t\t\t\t\t\t<td class=\"edition_option\" style=\"color: #be5f6e;\"><span class=\"edition\"><big><big><i class=\"fa fa-pencil link-hover edit-hover\"></i><i class=\"fa fa-times link-hover delete-hover suppression-icon\" style=\"margin-left: 15px;\"></i></big></big></span></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td><b>Total des opérations</b></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td><b>100 000 €</b></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td><b>Total après opérations en attente</b></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td><b>3 500 223 €</b></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<h2 class=\"divider-new-right\"><i class=\"fa fa-area-chart left hide-on-small-only\"></i>Synthèse</h2>
\t\t\t\t\t\t<div class=\"col s12 l6\">
\t\t\t\t\t\t\t<p>Synthèse des dépenses</p>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<div id=\"placeholder_wrapper_depenses\" class=\"row\">
\t\t\t\t\t\t\t\t<div id=\"placeholder_depenses\" style=\"height: 300px; width: 300px;\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col s12 l6\">
\t\t\t\t\t\t\t<p>Synthèse des entrées d'argent</p>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<div id=\"placeholder_wrapper_entrees\" class=\"row\">
\t\t\t\t\t\t\t\t<div id=\"placeholder_entrees\" style=\"height: 300px; width: 300px;\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col s12\">
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<p>Evolution de votre compte banquaire pendant le mois.</p>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<div id=\"placeholder_wrapper_account\" class=\"row\">
\t\t\t\t\t\t\t\t<div id=\"placeholder_account\" style=\"height: 300px; width: 300px;\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t
\t\t<div id=\"operation\" class=\"col s12\">
\t\t
\t\t\t<div class=\"col l10 offset-l1 m12 s12 card\" style=\"padding: 0px; border: 1px solid #75828E; min-height: 60%;\">
\t\t\t\t<section id=\"operation_header\" class=\"kj-grey\" style=\"border-radius: 2px;\">
\t\t\t\t\t<div class=\"row\" style=\"margin-bottom: 0px;\">
\t\t\t\t\t\t<div class=\"col s12 white-text\">
\t\t\t\t\t\t\t<h5 class=\"col s12\"><i class=\"fa fa-terminal left hide-on-small-only\"></i>Opérations</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<section id=\"operation_body\" class=\"col s12\">
\t\t\t\t\t<div class=\"col s12 center-align\" style=\"padding-bottom: 20px;\">
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<span><em>Que voulez-vous faire ?</em></span>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<a id=\"immediate_operation_button\" class=\"btn-large btn-body waves-effect waves-light animated fadeIn cardinal-button\" style=\"animation-delay: 0.2s;\"><i class=\"fa fa-refresh left\"></i>Opération immédiate</a>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<a id=\"differed_operation_button\" class=\"btn-large btn-body waves-effect waves-light animated fadeIn cardinal-button\" style=\"animation-delay: 0.4s;\"><i class=\"fa fa-hourglass-2 left\"></i>Opération différée</a>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<a id=\"systematic_operation_button\" class=\"btn-large btn-body waves-effect waves-light animated fadeIn cardinal-button\" style=\"animation-delay: 0.6s;\"><i class=\"fa fa-calendar left\"></i>Opération mensuelle</a>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div style=\"background-color: #f0f0f0; border-radius: 5px; padding: 5px; color: black; border: 1px solid #d0d0d0\"><b><big><i class=\"fa fa-warning\"></i> Aide :</big></b> Les trois boutons vous permettent d'ajouter une nouvelle entrée à vos comptes (entrée ou sortie d'argent).<br>La seule différence entre les 3 boutons est l'effet qu'aura la nouvelle entrée sur le compte (immédiat, différé ou mensuel).</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t
\t\t<div id=\"export\" class=\"col s12\">
\t\t
\t\t\t<div class=\"col l10 offset-l1 m12 s12 card\" style=\"padding: 0px; border: 1px solid #75828E; min-height: 60%;\">
\t\t\t\t<section id=\"export_header\" class=\"kj-grey\" style=\"border-radius: 2px;\">
\t\t\t\t\t<div class=\"row\" style=\"margin-bottom: 0px;\">
\t\t\t\t\t\t<div class=\"col s12 white-text\">
\t\t\t\t\t\t\t<h5 class=\"col s12\"><i class=\"fa fa-upload left hide-on-small-only\"></i>Exporter</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<section id=\"export_body\" class=\"col s12\">
\t\t\t\t\t<div class=\"col s12 center-align\" style=\"padding-bottom: 20px;\">
\t\t\t\t\t\t<h2 class=\"divider-new-right\"><i class=\"fa fa-file-pdf-o left hide-on-small-only\"></i>Exporter les opérations en cours</h2>
\t\t\t\t\t\t<p class=\"left-align\">Vous pouvez exporter les tableaux et graphes de l'onglet \"Récapitulatif\" au format pdf. A la fin de chaque mois, tous les tableaux sont automatiquement sauvegardés sous ce format (voir l'historique ci-dessous).</p>
\t\t\t\t\t\t<a class=\"btn-large btn-body waves-effect waves-light animated fadeIn cardinal-button\" style=\"animation-delay: 0.2s;\"><i class=\"fa fa-file-pdf-o left\"></i>SumUp - Livret A - Comptes de 06/16.pdf</a>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<h2 class=\"divider-new-right\"><i class=\"fa fa-history left hide-on-small-only\"></i>Historique de votre comtpe</h2>
\t\t\t\t\t\t<p class=\"left-align\">Voici le récapitulatif de vos comptes depuis votre inscription sur le site.</p>
\t\t\t\t\t\t<div class=\"col s12 m10 l8 offset-m1 offset-l2\">
\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th data-field=\"id\">Nom</th>
\t\t\t\t\t\t\t\t\t\t<th data-field=\"name\">Lien de téléchargement</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>

\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>SumUp - Livret A - Comptes de 05/16</td>
\t\t\t\t\t\t\t\t\t\t<td><a class=\"btn-large btn-body waves-effect waves-light animated fadeIn cardinal-button truncate\" style=\"animation-delay: 0.2s;\"><i class=\"fa fa-download hide-on-med-and-up\"></i><span class=\"hide-on-small-only\"><i class=\"fa fa-download left\"></i>Télécharger</span></a></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>SumUp - Livret A - Comptes de 04/16</td>
\t\t\t\t\t\t\t\t\t\t<td><a class=\"btn-large btn-body waves-effect waves-light animated fadeIn cardinal-button truncate\" style=\"animation-delay: 0.4s;\"><i class=\"fa fa-download hide-on-med-and-up\"></i><span class=\"hide-on-small-only\"><i class=\"fa fa-download left\"></i>Télécharger</span></a></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t
\t</div>
</div>

<!-- Modal Immediate operation -->
<div id=\"immediate_operation_modal\" class=\"modal modal-fixed-footer\">
\t<div class=\"modal-content\" style=\"overflow: hidden;\">
\t\t<section id=\"immediate_operation_top\">
\t\t\t<div class=\"col s12\" style=\"border-bottom: 1px solid #ddd; padding: 0px;\">
\t\t\t\t<h5 style=\"margin-top: 0;\"><i class=\"fa fa-refresh left\"></i>Ajouter une opération immédiate</h5>
\t\t\t</div>
\t\t</section>
\t\t<section id=\"immediate_operation_content\" style=\"height: 100%; margin-bottom: 0px; overflow-x: hidden; overflow-y: auto;padding-top: 10px; padding-bottom: 20px;\">
\t\t\t<div class=\"row\" style=\"margin-bottom: 0px;\">
\t\t\t\tUne opération immédiate est une opération qui aura un effet immédiat sur l'état de votre compte: la somme d'argent est ajoutée / retirée dès la validation de la transaction, votre compte est directement mis à jour. En cas d'erreur, vous pourrez modifier l'opération dans l'onglet récapitulatif.
\t\t\t<br><br>
\t\t\t<form class=\"col s12\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col s12 m10 l6 offset-m1 offset-l3\">
\t\t\t\t\t\t<label>Type d'opération</label>
\t\t\t\t\t\t<select class=\"browser-default\">
\t\t\t\t\t\t\t<option value=\"\" disabled selected>Choisissez le moyen de paiement</option>
\t\t\t\t\t\t\t<option value=\"credit-card\">Carte banquaire</option>
\t\t\t\t\t\t\t<option value=\"check\">Chèque</option>
\t\t\t\t\t\t\t<option value=\"transfert\">Virement</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col s12 m10 l6 offset-m1 offset-l3\">
\t\t\t\t\t\t<label>Catégorie</label>
\t\t\t\t\t\t<select class=\"browser-default\">
\t\t\t\t\t\t\t<option value=\"\" disabled selected>Choisissez la catégorie de l'opération</option>
\t\t\t\t\t\t\t<option value=\"Courses\">Courses</option>
\t\t\t\t\t\t\t<option value=\"Loyer\">Loyer</option>
\t\t\t\t\t\t\t<option value=\"Vêtements\">Vêtements</option>
\t\t\t\t\t\t\t<option value=\"Transports\">Transports</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"input-field col s12 m10 l6 offset-m1 offset-l3\">
\t\t\t\t\t\t<i class=\"material-icons prefix\">euro_symbol</i>
\t\t\t\t\t\t<input placeholder=\"0\" id=\"1\" type=\"number\" class=\"validate\">
\t\t\t\t\t\t<label for=\"1\">Montant de l'opération</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-field col s12 m10 l6 offset-m1 offset-l3\">
\t\t\t\t\t\t<i class=\"material-icons prefix\">date_range</i>
\t\t\t\t\t\t<input placeholder=\"cliquer pour choisir\" id=\"2\" class=\"datepicker\" type=\"number\">
\t\t\t\t\t\t<label for=\"2\">Date de l'opération</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-field col s12 m10 l6 offset-m1 offset-l3\">
\t\t\t\t\t\t<i class=\"material-icons prefix\">mode_edit</i>
\t\t\t\t\t\t<input placeholder=\"Détails de l'opération (facultatif)\" id=\"3\" type=\"text\" class=\"validate\">
\t\t\t\t\t\t<label for=\"3\">Description</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t</div>
\t\t</section>
\t</div>
\t<div id=\"immediate_operation_modal_footer\" class=\"modal-footer\">
\t\t<a id=\"add_immediate_operation\" href=\"#\" class=\"btn modal-action waves-effect waves-light green animated disabled\" style=\"margin-right: 20px;\"><i class=\"fa fa-check left\"></i>Ajouter</a>
\t\t<a id=\"return_from_immediate_operation\" href=\"#\" class=\"btn waves-effect waves-light left modal-close cardinal-button\" style=\"margin-left: 20px;\"><i class=\"fa fa-angle-left left\"></i>Retour</a>
\t</div>
</div>
<!-- /.Modal Immediate operation -->

<!-- Modal Differed operation -->
<div id=\"differed_operation_modal\" class=\"modal modal-fixed-footer\">
\t<div class=\"modal-content\" style=\"overflow: hidden;\">
\t\t<section id=\"differed_operation_top\">
\t\t\t<div class=\"col s12\" style=\"border-bottom: 1px solid #ddd; padding: 0px;\">
\t\t\t\t<h5 style=\"margin-top: 0;\"><i class=\"fa fa-hourglass-2 left\"></i>Ajouter une opération différée</h5>
\t\t\t</div>
\t\t</section>
\t\t<section id=\"differed_operation_content\" style=\"height: 100%; margin-bottom: 0px; overflow-x: hidden; overflow-y: auto; padding-top: 10px; padding-bottom: 20px;\">
\t\t\t<div class=\"row\" style=\"margin-bottom: 0px;\">
\t\t\t\tUne opération différée est une opération dont l'effet sur le compte n'aura lieu qu'à la date demandée. Avant cette date, l'opération sera rangée dans les opérations en attente.
\t\t\t<br><br>
\t\t\t<form class=\"col s12\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col s12 m10 l6 offset-m1 offset-l3\">
\t\t\t\t\t\t<label>Type d'opération</label>
\t\t\t\t\t\t<select class=\"browser-default\">
\t\t\t\t\t\t\t<option value=\"\" disabled selected>Choisissez le moyen de paiement</option>
\t\t\t\t\t\t\t<option value=\"credit-card\">Carte banquaire</option>
\t\t\t\t\t\t\t<option value=\"check\">Chèque</option>
\t\t\t\t\t\t\t<option value=\"transfert\">Virement</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col s12 m10 l6 offset-m1 offset-l3\">
\t\t\t\t\t\t<label>Catégorie</label>
\t\t\t\t\t\t<select class=\"browser-default\">
\t\t\t\t\t\t\t<option value=\"\" disabled selected>Choisissez la catégorie de l'opération</option>
\t\t\t\t\t\t\t<option value=\"Courses\">Courses</option>
\t\t\t\t\t\t\t<option value=\"Loyer\">Loyer</option>
\t\t\t\t\t\t\t<option value=\"Vêtements\">Vêtements</option>
\t\t\t\t\t\t\t<option value=\"Transports\">Transports</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"input-field col s12 m10 l6 offset-m1 offset-l3\">
\t\t\t\t\t\t<i class=\"material-icons prefix\">euro_symbol</i>
\t\t\t\t\t\t<input placeholder=\"0\" id=\"4\" type=\"number\" class=\"validate montant_field\">
\t\t\t\t\t\t<label for=\"4\">Montant de l'opération</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-field col s12 m10 l6 offset-m1 offset-l3\">
\t\t\t\t\t\t<i class=\"material-icons prefix\">date_range</i>
\t\t\t\t\t\t<input placeholder=\"cliquer pour choisir\" id=\"5\" class=\"datepicker\" type=\"number\">
\t\t\t\t\t\t<label for=\"5\">Date de l'opération</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-field col s12 m10 l6 offset-m1 offset-l3\">
\t\t\t\t\t\t<i class=\"material-icons prefix\">mode_edit</i>
\t\t\t\t\t\t<input placeholder=\"Détails de l'opération (facultatif)\" id=\"6\" class=\"description_field validate\" type=\"text\">
\t\t\t\t\t\t<label for=\"6\">Description</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t</div>
\t\t</section>
\t</div>
\t<div id=\"differed_operation_modal_footer\" class=\"modal-footer\">
\t\t<a id=\"add_differed_operation\" href=\"#\" class=\"btn modal-action waves-effect waves-light green animated disabled\" style=\"margin-right: 20px;\"><i class=\"fa fa-check left\"></i>Ajouter</a>
\t\t<a id=\"return_from_differed_operation\" href=\"#\" class=\"btn waves-effect waves-light left modal-close cardinal-button\" style=\"margin-left: 20px;\"><i class=\"fa fa-angle-left left\"></i>Retour</a>
\t</div>
</div>
<!-- /.Modal Differed operation -->

<!-- Modal Systematic operation -->
<div id=\"systematic_operation_modal\" class=\"modal modal-fixed-footer\">
\t<div class=\"modal-content\" style=\"overflow: hidden;\">
\t\t<section id=\"systematic_operation_top\">
\t\t\t<div class=\"col s12\" style=\"border-bottom: 1px solid #ddd; padding: 0px;\">
\t\t\t\t<h5 style=\"margin-top: 0;\"><i class=\"fa fa-calendar left\"></i>Ajouter une opération mensuelle</h5>
\t\t\t</div>
\t\t</section>
\t\t<section id=\"systematic_operation_content\" style=\"height: 100%; margin-bottom: 0px; overflow-x: hidden; overflow-y: auto; padding-top: 10px; padding-bottom: 20px;\">
\t\t\t<div class=\"row\" style=\"margin-bottom: 0px;\">
\t\t\t\tUne opération mensuel vous permet d'automatiser la sortie ou l'entrée de montants fixes sur votre compte (ex: loyer, ... ). L'opération sera effectuée tous les mois à partir de la date donnée.
\t\t\t<br><br>
\t\t\t<form class=\"col s12\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col s12 m10 l6 offset-m1 offset-l3\">
\t\t\t\t\t\t<label>Type d'opération</label>
\t\t\t\t\t\t<select class=\"browser-default\">
\t\t\t\t\t\t\t<option value=\"\" disabled selected>Choisissez le moyen de paiement</option>
\t\t\t\t\t\t\t<option value=\"credit-card\">Carte banquaire</option>
\t\t\t\t\t\t\t<option value=\"check\">Chèque</option>
\t\t\t\t\t\t\t<option value=\"transfert\">Virement</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col s12 m10 l6 offset-m1 offset-l3\">
\t\t\t\t\t\t<label>Catégorie</label>
\t\t\t\t\t\t<select class=\"browser-default\">
\t\t\t\t\t\t\t<option value=\"\" disabled selected>Choisissez la catégorie de l'opération</option>
\t\t\t\t\t\t\t<option value=\"Courses\">Courses</option>
\t\t\t\t\t\t\t<option value=\"Loyer\">Loyer</option>
\t\t\t\t\t\t\t<option value=\"Vêtements\">Vêtements</option>
\t\t\t\t\t\t\t<option value=\"Transports\">Transports</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"input-field col s12 m10 l6 offset-m1 offset-l3\">
\t\t\t\t\t\t<i class=\"material-icons prefix\">euro_symbol</i>
\t\t\t\t\t\t<input placeholder=\"0\" id=\"7\" type=\"number\" class=\"validate montant_field\">
\t\t\t\t\t\t<label for=\"7\">Montant de l'opération</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-field col s12 m10 l6 offset-m1 offset-l3\">
\t\t\t\t\t\t<i class=\"material-icons prefix\">date_range</i>
\t\t\t\t\t\t<input placeholder=\"cliquer pour choisir\" id=\"8\" class=\"datepicker\" type=\"number\">
\t\t\t\t\t\t<label for=\"8\">Date de l'opération</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-field col s12 m10 l6 offset-m1 offset-l3\">
\t\t\t\t\t\t<i class=\"material-icons prefix\">mode_edit</i>
\t\t\t\t\t\t<input placeholder=\"Détails de l'opération (facultatif)\" id=\"9\" class=\"description_field validate\" type=\"text\">
\t\t\t\t\t\t<label for=\"9\">Description</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t</div>
\t\t</section>
\t</div>
\t<div id=\"systematic_operation_modal_footer\" class=\"modal-footer\">
\t\t<a id=\"add_systematic_operation\" href=\"#\" class=\"btn modal-action waves-effect waves-light green animated disabled\" style=\"margin-right: 20px;\"><i class=\"fa fa-check left\"></i>Ajouter</a>
\t\t<a id=\"return_from_systematic_operation\" href=\"#\" class=\"btn waves-effect waves-light left modal-close cardinal-button\" style=\"margin-left: 20px;\"><i class=\"fa fa-angle-left left\"></i>Retour</a>
\t</div>
</div>
<!-- /.Modal Systematic operation -->

<!-- Modal Confirmation -->
<div id=\"suppression_modal\" class=\"modal modal-fixed-footer\" style=\"height: 250px; width: 400px;\">
\t<div class=\"modal-content\" style=\"overflow-x: hidden;\">
\t\t<section id=\"suppression_modal_top\">
\t\t\t<div class=\"col s12\" style=\"border-bottom: 1px solid #ddd; padding: 0px;\">
\t\t\t\t<h5 style=\"margin-top: 0;\"><i class=\"fa fa-times\"></i> Suppression</h5>
\t\t\t</div>
\t\t</section>
\t\t<section id=\"suppression_modal_content\" class=\"row center-align animated\" style=\"margin-bottom: 0px; overflow-x: hidden; margin-top: 20px;\">Êtes-vous sûr(e) ?</section>
\t\t
\t</div>
\t<div id=\"suppression_modal_footer\" class=\"modal-footer\">
\t\t<a id=\"suppression_modal_cancel\" href=\"#\" class=\"btn modal-action modal-close waves-effect waves-light grey\" style=\"margin-right: 20px;\"><i class=\"fa fa-times left\"></i>Annuler</a>
\t\t<a id=\"suppression_modal_confirm\" href=\"#\" class=\"btn modal-action modal-close waves-effect waves-light green\" style=\"margin-right: 20px;\"><i class=\"fa fa-check left\"></i>OK</a>
\t</div>
</div>
<!-- /.Modal Confirmation -->

";
        
        $__internal_120e51c7af47411429bccaa0a00ff74c0a80a41acf70c41492e7a28217277832->leave($__internal_120e51c7af47411429bccaa0a00ff74c0a80a41acf70c41492e7a28217277832_prof);

    }

    // line 475
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_2b7a3eb8d9ae0f5dc6f33ccc46273b76bedb86e7720d29cbcae4f882e2f77e25 = $this->env->getExtension("native_profiler");
        $__internal_2b7a3eb8d9ae0f5dc6f33ccc46273b76bedb86e7720d29cbcae4f882e2f77e25->enter($__internal_2b7a3eb8d9ae0f5dc6f33ccc46273b76bedb86e7720d29cbcae4f882e2f77e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 476
        echo "\t";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t<script src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.flot.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 478
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
\t<script>
\tvar data = [],
\t\tseries = Math.floor(Math.random() * 6) + 3;

\tfor (var i = 0; i < series; i++) {
\t\tdata[i] = {
\t\t\tlabel: \"Series\" + (i + 1),
\t\t\tdata: Math.floor(Math.random() * 100) + 1
\t\t}
\t}
\t
\tvar sin = [],
\t\tcos = [];

\tfor (var i = 0; i < 14; i += 0.5) {
\t\tcos.push([i+1, Math.cos(i)]);
\t}
\t
\tfunction labelFormatter(label, series) {
\t\treturn \"<div style='font-size:1rem; text-align:center; padding:2px; color: black;'>\" + label + \"<br/>\" + Math.round(series.percent) + \"%</div>\";
\t}
\t
\tfunction plot_graph() {
\t\tvar available_width = \$('#placeholder_wrapper_depenses').width();
\t\t\$('#placeholder_depenses').width(available_width);
\t\t\$.plot('#placeholder_depenses', data, {
\t\t\tseries: {
\t\t\t\tpie: {
\t\t\t\t\tshow: true,
\t\t\t\t\tradius: 1,
\t\t\t\t\tinnerRadius: 0.5,
\t\t\t\t\tlabel: {
\t\t\t\t\t\tshow: true,
\t\t\t\t\t\tradius: 3/4,
\t\t\t\t\t\tformatter: labelFormatter,
\t\t\t\t\t\tbackground: {
\t\t\t\t\t\t\topacity: 0.5,
\t\t\t\t\t\t\tcolor: '#FFF'
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t},
\t\t\tlegend: {
\t\t\t\tshow: false
\t\t\t}
\t\t});
\t\t
\t\tvar available_width = \$('#placeholder_wrapper_entrees').width();
\t\t\$('#placeholder_entrees').width(available_width);
\t\t\$.plot('#placeholder_entrees', data, {
\t\t\tseries: {
\t\t\t\tpie: {
\t\t\t\t\tshow: true,
\t\t\t\t\tradius: 1,
\t\t\t\t\tinnerRadius: 0.5,
\t\t\t\t\tlabel: {
\t\t\t\t\t\tshow: true,
\t\t\t\t\t\tradius: 3/4,
\t\t\t\t\t\tformatter: labelFormatter,
\t\t\t\t\t\tbackground: {
\t\t\t\t\t\t\topacity: 0.5,
\t\t\t\t\t\t\tcolor: '#FFF'
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t},
\t\t\tlegend: {
\t\t\t\tshow: false
\t\t\t}
\t\t});

\t\tvar available_width = \$('#placeholder_wrapper_account').width();
\t\t\$('#placeholder_account').width(available_width);
\t\tvar plot = \$.plot(\"#placeholder_account\", [
\t\t\t{ data: cos, label: \"cos(x)\"}
\t\t], {
\t\t\tseries: {
\t\t\t\tlines: {
\t\t\t\t\tshow: true
\t\t\t\t},
\t\t\t\tpoints: {
\t\t\t\t\tshow: true
\t\t\t\t}
\t\t\t},
\t\t\tgrid: {
\t\t\t\thoverable: true,
\t\t\t\tclickable: true
\t\t\t},
\t\t\tyaxis: {
\t\t\t\tmin: -1.2,
\t\t\t\tmax: 1.2
\t\t\t},
\t\t\tlegend: {
\t\t\t\tshow: false
\t\t\t}
\t\t});
\t\t
\t\t\$(\"<div id='tooltip'></div>\").css({
\t\t\tposition: \"absolute\",
\t\t\tdisplay: \"none\",
\t\t\tborder: \"1px solid #fdd\",
\t\t\tpadding: \"2px\",
\t\t\t\"background-color\": \"#fee\",
\t\t\topacity: 0.80
\t\t}).appendTo(\"body\");
\t\t
\t\t\$(\"#placeholder_account\").bind(\"plothover\", function (event, pos, item) {
\t\t\tif (item) {
\t\t\t\tvar x = item.datapoint[0].toFixed(2),
\t\t\t\t\ty = item.datapoint[1].toFixed(2);

\t\t\t\t\$(\"#tooltip\").html(y + \" €\")
\t\t\t\t\t.css({top: item.pageY+5, left: item.pageX+5})
\t\t\t\t\t.fadeIn(200);
\t\t\t} else {
\t\t\t\t\$(\"#tooltip\").hide();
\t\t\t}
\t\t});
\t}
\t
\tfunction set_lignes() {
\t\t\$('.fa-pencil').off('click');
\t\t\$('.fa-pencil').click(function() {
\t\t\tset_lignes_aux(\$(this).parent().parent().parent().parent().parent());
\t\t});
\t\t
\t\t\$('.ligne').off('dblclick');
\t\t\$('.ligne').dblclick(function() {
\t\t\tset_lignes_aux(\$(this));
\t\t});
\t\t
\t\t\$('.suppression-icon').click(function() {
\t\t\t\$('#suppression_modal').openModal({
\t\t\t\tdismissible: true,
\t\t\t\topacity: 0.5,
\t\t\t\tin_duration: 250,
\t\t\t\tout_duration: 250,
\t\t\t\tcomplete: clean_overlay
\t\t\t});
\t\t\t
\t\t\t\$('#suppression_modal_confirm').off('click');
\t\t\t\$('#suppression_modal_confirm').click(function() {
\t\t\t\t\$('#suppression_modal_cancel').trigger('click');
\t\t\t\tMaterialize.toast('Opération supprimée', 4000);
\t\t\t\tsetTimeout(function() {
\t\t\t\t\tMaterialize.toast('Mise à jour ...', 4000);
\t\t\t\t}, 500);
\t\t\t})
\t\t});
\t}
\t
\tfunction set_lignes_aux(ligne) {
\t\t
\t\tif (\$('.green-edition-text').size() >= 1) {
\t\t\t\$('.green-edition-text').parent().find('.delete-hover').trigger('click');
\t\t}
\t\t
\t\tvar type_option = '<select class=\"browser-default\"><option value=\"\" disabled selected>Type de paiement</option><option value=\"Carte banquaire\">Carte banquaire</option><option value=\"Chèque\">Chèque</option><option value=\"Virement\">Virement</option></select>';
\t\tvar category_option = '<select class=\"browser-default\"><option value=\"\" disabled selected>Catégorie</option><option value=\"Course\">Course</option><option value=\"Loyer\">Loyer</option><option value=\"Vêtements\">Vêtements</option><option value=\"Transports\">Transports</option></select>';
\t\tvar date_option = '<input type=\"date\" class=\"datepicker center-align\">';
\t\tvar montant_option = '<input type=\"number\" class=\"center-align\">';
\t\tvar edition_option = '<span class=\"edition\"><big><big><i class=\"fa fa-check link-hover green-edition-text modification-validation\"></i><i class=\"fa fa-times link-hover delete-hover\" style=\"margin-left: 15px;\"></i></big></big></span>';
\t\t
\t\tvar type = ligne.find('.type_option').html();
\t\tvar category = ligne.find('.category_option').children().first().html();
\t\tvar category_sav = ligne.find('.category_option').html();
\t\tvar datepicker_val = ligne.find('.date_option').html();
\t\tvar montant = ligne.find('.montant_option').children().first().html();
\t\tvar montant_sav = ligne.find('.montant_option').html();
\t\tvar edition_sav = ligne.find('.edition_option').html();
\t\t
\t\tligne.find('.type_option').html(type_option);
\t\tligne.find('.type_option select').val(type);
\t\t
\t\tligne.find('.category_option').html(category_option);
\t\tligne.find('.category_option select').val(category);
\t\t
\t\tligne.find('.date_option').html(date_option);
\t\t
\t\tligne.find('.montant_option').html(montant_option);
\t\tligne.find('.montant_option input').val(montant);
\t\t
\t\tligne.find('.edition_option').html(edition_option);
\t\t
\t\t
\t\tvar input = \$('.datepicker').pickadate({
\t\t\tlabelMonthNext: 'Mois suivant',
\t\t\tlabelMonthPrev: 'Mois précédent',
\t\t\tlabelMonthSelect: 'Choisissez un mois',
\t\t\tlabelYearSelect: 'Choisissez une année',
\t\t\tmonthsFull: [ 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Decembre' ],
\t\t\tmonthsShort: [ 'Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec' ],
\t\t\tweekdaysFull: [ 'Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi' ],
\t\t\tweekdaysShort: [ 'Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam' ],
\t\t\tweekdaysLetter: [ 'D', 'L', 'M', 'M', 'J', 'V', 'S' ],
\t\t\ttoday: 'Ajd',
\t\t\tclear: 'Effacer',
\t\t\tclose: 'Fermer'
\t\t});
\t\tpicker = input.pickadate('picker');
\t\t
\t\tpicker.set('select', new Date( datepicker_val.replace( /(\\d{1})\\/(\\d{2})\\/(\\d{2})/, \"\$2/\$1/\$3\") ));
\t\t
\t\tligne.addClass('edited-ligne');
\t\t
\t\tligne.find('.delete-hover').click(function() {
\t\t\tligne.find('.type_option').html(type);
\t\t\tligne.find('.category_option').html(category_sav);
\t\t\tligne.find('.date_option').html(datepicker_val);
\t\t\tligne.find('.montant_option').html(montant_sav);
\t\t\tligne.find('.edition_option').html(edition_sav);
\t\t\t
\t\t\t\$('.tooltipped').tooltip({delay: 50});
\t\t\t
\t\t\tligne.removeClass('edited-ligne');
\t\t\t
\t\t\tset_lignes();
\t\t});
\t\t
\t\tligne.find('.modification-validation').click(function() {
\t\t\tligne.find('.delete-hover').trigger('click');
\t\t\tMaterialize.toast('Opération modifiée', 4000);
\t\t\tsetTimeout(function() {
\t\t\t\tMaterialize.toast('Mise à jour ...', 4000);
\t\t\t}, 500);
\t\t});
\t}
\t
\t\$(document).ready(function () {
\t\t
\t\t//Boutons ajout opération ----------------------------------------------------------
\t\t\$('#immediate_operation_button').click(function() {
\t\t\tif (\$(window).width() >= 992) {
\t\t\t\t\$('#immediate_operation_modal').openModal({
\t\t\t\t\tdismissible: true,
\t\t\t\t\topacity: 0.5,
\t\t\t\t\tin_duration: 250,
\t\t\t\t\tout_duration: 250,
\t\t\t\t\tcomplete: clean_overlay
\t\t\t\t});
\t\t\t\t
\t\t\t\tvar input = \$('.datepicker').pickadate({
\t\t\t\t\tlabelMonthNext: 'Mois suivant',
\t\t\t\t\tlabelMonthPrev: 'Mois précédent',
\t\t\t\t\tlabelMonthSelect: 'Choisissez un mois',
\t\t\t\t\tlabelYearSelect: 'Choisissez une année',
\t\t\t\t\tmonthsFull: [ 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Decembre' ],
\t\t\t\t\tmonthsShort: [ 'Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec' ],
\t\t\t\t\tweekdaysFull: [ 'Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi' ],
\t\t\t\t\tweekdaysShort: [ 'Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam' ],
\t\t\t\t\tweekdaysLetter: [ 'D', 'L', 'M', 'M', 'J', 'V', 'S' ],
\t\t\t\t\ttoday: 'Ajd',
\t\t\t\t\tclear: 'Effacer',
\t\t\t\t\tclose: 'Fermer'
\t\t\t\t});
\t\t\t\tpicker = input.pickadate('picker');
\t\t\t\t
\t\t\t\tpicker.set('select', new Date());
\t\t\t} else {
\t\t\t\t\$(location).attr('href',\"";
        // line 738
        echo $this->env->getExtension('routing')->getPath("su_account_mobile_immediate");
        echo "\");
\t\t\t}
\t\t});
\t\t
\t\t\$('#differed_operation_button').click(function() {
\t\t\tif (\$(window).width() >= 992) {
\t\t\t\t\$('#differed_operation_modal').openModal({
\t\t\t\t\tdismissible: true,
\t\t\t\t\topacity: 0.5,
\t\t\t\t\tin_duration: 250,
\t\t\t\t\tout_duration: 250,
\t\t\t\t\tcomplete: clean_overlay
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\tvar input = \$('.datepicker').pickadate({
\t\t\t\t\tlabelMonthNext: 'Mois suivant',
\t\t\t\t\tlabelMonthPrev: 'Mois précédent',
\t\t\t\t\tlabelMonthSelect: 'Choisissez un mois',
\t\t\t\t\tlabelYearSelect: 'Choisissez une année',
\t\t\t\t\tmonthsFull: [ 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Decembre' ],
\t\t\t\t\tmonthsShort: [ 'Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec' ],
\t\t\t\t\tweekdaysFull: [ 'Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi' ],
\t\t\t\t\tweekdaysShort: [ 'Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam' ],
\t\t\t\t\tweekdaysLetter: [ 'D', 'L', 'M', 'M', 'J', 'V', 'S' ],
\t\t\t\t\ttoday: 'Ajd',
\t\t\t\t\tclear: 'Effacer',
\t\t\t\t\tclose: 'Fermer'
\t\t\t\t});
\t\t\t\tpicker = input.pickadate('picker');
\t\t\t} else {
\t\t\t\t\$(location).attr('href',\"";
        // line 769
        echo $this->env->getExtension('routing')->getPath("su_account_mobile_differed");
        echo "\");
\t\t\t}
\t\t});
\t\t
\t\t\$('#systematic_operation_button').click(function() {
\t\t\tif (\$(window).width() >= 992) {
\t\t\t\t\$('#systematic_operation_modal').openModal({
\t\t\t\t\tdismissible: true,
\t\t\t\t\topacity: 0.5,
\t\t\t\t\tin_duration: 250,
\t\t\t\t\tout_duration: 250,
\t\t\t\t\tcomplete: clean_overlay
\t\t\t\t});
\t\t\t\t
\t\t\t\tvar input = \$('.datepicker').pickadate({
\t\t\t\t\tlabelMonthNext: 'Mois suivant',
\t\t\t\t\tlabelMonthPrev: 'Mois précédent',
\t\t\t\t\tlabelMonthSelect: 'Choisissez un mois',
\t\t\t\t\tlabelYearSelect: 'Choisissez une année',
\t\t\t\t\tmonthsFull: [ 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Decembre' ],
\t\t\t\t\tmonthsShort: [ 'Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec' ],
\t\t\t\t\tweekdaysFull: [ 'Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi' ],
\t\t\t\t\tweekdaysShort: [ 'Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam' ],
\t\t\t\t\tweekdaysLetter: [ 'D', 'L', 'M', 'M', 'J', 'V', 'S' ],
\t\t\t\t\ttoday: 'Ajd',
\t\t\t\t\tclear: 'Effacer',
\t\t\t\t\tclose: 'Fermer'
\t\t\t\t});
\t\t\t\tpicker = input.pickadate('picker');
\t\t\t} else {
\t\t\t\t\$(location).attr('href',\"";
        // line 799
        echo $this->env->getExtension('routing')->getPath("su_account_mobile_systematic");
        echo "\");
\t\t\t}
\t\t});
\t\t//----------------------------------------------------------------------------------
\t\t
\t\t\$('#recap_tab_button').click(function () {
\t\t\tsetTimeout(function () {
\t\t\t\tplot_graph()
\t\t\t\t
\t\t\t\t\$(window).resize(function () {
\t\t\t\t\tplot_graph();
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$('.ligne').on({
\t\t\t\t\tmouseenter: function() {
\t\t\t\t\t\t\$(this).children().last().children().addClass('edition-active');
\t\t\t\t\t},
\t\t\t\t\tmouseover: function() {
\t\t\t\t\t\t\$(this).children().last().children().addClass('edition-active');
\t\t\t\t\t},
\t\t\t\t\tmouseleave: function() {
\t\t\t\t\t\t\$(this).children().last().children().removeClass('edition-active');
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}, 500);
\t\t});
\t\t
\t\tset_lignes();
\t});
\t</script>
";
        
        $__internal_2b7a3eb8d9ae0f5dc6f33ccc46273b76bedb86e7720d29cbcae4f882e2f77e25->leave($__internal_2b7a3eb8d9ae0f5dc6f33ccc46273b76bedb86e7720d29cbcae4f882e2f77e25_prof);

    }

    public function getTemplateName()
    {
        return "SUAccountBundle:Account:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  863 => 799,  830 => 769,  796 => 738,  533 => 478,  529 => 477,  524 => 476,  518 => 475,  44 => 6,  38 => 5,  31 => 1,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'SUMainBundle::layout.html.twig' %}*/
/* */
/* {% set menu_selected = 'home' %}*/
/* */
/* {% block body %}*/
/* */
/* <ul class="tabs" style="overflow: hidden;">*/
/* 	<li id="recap_tab_button" class="tab col s3"><a class="truncate" href="#recap"><i class="fa fa-table"></i><span class="hide-on-small-only"> Récapitulatif</span></a></li>*/
/* 	<li id="operation_tab_button" class="tab col s3"><a class="truncate active" href="#operation"><i class="fa fa-terminal"></i><span class="hide-on-small-only"> Opérations</span></a></li>*/
/* 	<li id="export_tab_button" class="tab col s3"><a class="truncate" href="#export"><i class="fa fa-upload"></i><span class="hide-on-small-only"> Exporter</span></a></li>*/
/* </ul>*/
/* */
/* <div class="container" style="margin-top: 20px;">*/
/* 	<div class="row" style="display: block;">*/
/* 	*/
/* 		<div id="recap" class="col s12">*/
/* 			*/
/* 			<div class="col l10 offset-l1 m12 s12 card" style="padding: 0px; border: 1px solid #75828E; min-height: 60%;">*/
/* 				<section id="export_header" class="kj-grey" style="border-radius: 2px;">*/
/* 					<div class="row" style="margin-bottom: 0px;">*/
/* 						<div class="col s12 white-text">*/
/* 							<h5 class="col s12"><i class="fa fa-table left hide-on-small-only"></i>Récapitulatif</h5>*/
/* 						</div>*/
/* 					</div>*/
/* 				</section>*/
/* 				<section id="export_body" class="col s12">*/
/* 					<div class="col s12 center-align" style="padding-bottom: 20px;">*/
/* 						<div class="row center-align">*/
/* 							<h2 style="font-size: 3rem;"><i class="fa fa-book hide-on-small-only"></i> Compte courant</h2>*/
/* 							<span class="col s8 offset-s2"><h5 class="col s12 m4 l4 offset-m4 offset-l4 hide-on-med-and-down"><i class="fa fa-chevron-left left link-hover"></i>06/16<i class="fa fa-chevron-right right link-hover"></i></h5></span>*/
/* 							<h5 class="col s12 m4 l4 offset-m4 offset-l4 hide-on-large-only"><i class="fa fa-chevron-left left link-hover"></i>06/16<i class="fa fa-chevron-right right link-hover"></i></h5>*/
/* 						</div>*/
/* 						<br>*/
/* 						<h2 class="divider-new-right"><i class="fa fa-history left hide-on-small-only"></i>Etat du compte le 01/06/16</h2>*/
/* 						<table class="striped highlight centered">*/
/* 							<tbody>*/
/* 								<tr>*/
/* 									<td><b>Total</b></td>*/
/* 									<td><b>4 000 923 €</b></td>*/
/* 								</tr>*/
/* 							</tbody>*/
/* 						</table>*/
/* 						<br>*/
/* 						<h2 class="divider-new-right"><i class="fa fa-list-ul left hide-on-small-only"></i>Opérations depuis le 01/06/16</h2>*/
/* 						<table class="striped highlight centered responsive-table">*/
/* 							<thead>*/
/* 								<tr>*/
/* 									<th>Type</th>*/
/* 									<th>Catégorie</th>*/
/* 									<th>Date</th>*/
/* 									<th>Montant</th>*/
/* 									<th>Edition</th>*/
/* 								</tr>*/
/* 							</thead>*/
/* 							*/
/* 							<tbody>*/
/* 								<tr class="ligne">*/
/* 									<td class="type_option">Carte banquaire</td>*/
/* 									<td class="category_option"><span>Course</span> <i class="fa fa-info-circle tooltipped link-hover" data-position="bottom" data-delay="50" data-tooltip="Plein chez Carrefour"></i></td>*/
/* 									<td class="date_option">07/06/16</td>*/
/* 									<td class="montant_option"><span>-140</span><span> €</span></td>*/
/* 									<td class="edition_option" style="color: #be5f6e;"><span class="edition"><big><big><i class="fa fa-pencil link-hover edit-hover"></i><i class="fa fa-times link-hover delete-hover suppression-icon" style="margin-left: 15px;"></i></big></big></span></td>*/
/* 								</tr>*/
/* 								<tr class="ligne">*/
/* 									<td class="type_option">Chèque</td>*/
/* 									<td class="category_option"><span>Course</span> <i class="fa fa-info-circle tooltipped link-hover" data-position="bottom" data-delay="50" data-tooltip="Plein chez Carrefour"></i></td>*/
/* 									<td class="date_option">07/06/16</td>*/
/* 									<td class="montant_option"><span>-140</span><span> €</span></td>*/
/* 									<td class="edition_option" style="color: #be5f6e;"><span class="edition"><big><big><i class="fa fa-pencil link-hover edit-hover"></i><i class="fa fa-times link-hover delete-hover suppression-icon" style="margin-left: 15px;"></i></big></big></span></td>*/
/* 								</tr>*/
/* 								<tr class="ligne">*/
/* 									<td class="type_option">Virement</td>*/
/* 									<td class="category_option"><span>Loyer</span> <i class="fa fa-info-circle tooltipped link-hover" data-position="bottom" data-delay="50" data-tooltip="Plein chez Carrefour"></i></td>*/
/* 									<td class="date_option">07/06/16</td>*/
/* 									<td class="montant_option"><span>-140</span><span> €</span></td>*/
/* 									<td class="edition_option" style="color: #be5f6e;"><span class="edition"><big><big><i class="fa fa-pencil link-hover edit-hover"></i><i class="fa fa-times link-hover delete-hover suppression-icon" style="margin-left: 15px;"></i></big></big></span></td>*/
/* 								</tr>*/
/* 								<tr class="ligne">*/
/* 									<td class="type_option">Carte banquaire</td>*/
/* 									<td class="category_option"><span>Vêtements</span> <i class="fa fa-info-circle tooltipped link-hover" data-position="bottom" data-delay="50" data-tooltip="Plein chez Carrefour"></i></td>*/
/* 									<td class="date_option">07/06/16</td>*/
/* 									<td class="montant_option"><span>-140</span><span> €</span></td>*/
/* 									<td class="edition_option" style="color: #be5f6e;"><span class="edition"><big><big><i class="fa fa-pencil link-hover edit-hover"></i><i class="fa fa-times link-hover delete-hover suppression-icon" style="margin-left: 15px;"></i></big></big></span></td>*/
/* 								</tr>*/
/* 								<tr class="ligne monthly-operation">*/
/* 									<td class="type_option">Carte banquaire</td>*/
/* 									<td class="category_option"><span>Course</span> <i class="fa fa-info-circle tooltipped link-hover" data-position="bottom" data-delay="50" data-tooltip="Plein chez Carrefour"></i></td>*/
/* 									<td class="date_option">07/06/16</td>*/
/* 									<td class="montant_option"><span>-140</span><span> €</span></td>*/
/* 									<td class="edition_option" style="color: #be5f6e;"><span class="edition"><big><big><i class="fa fa-pencil link-hover edit-hover"></i><i class="fa fa-times link-hover delete-hover suppression-icon" style="margin-left: 15px;"></i></big></big></span></td>*/
/* 								</tr>*/
/* 								<tr class="ligne">*/
/* 									<td class="type_option">Carte banquaire</td>*/
/* 									<td class="category_option"><span>Course</span> <i class="fa fa-info-circle tooltipped link-hover" data-position="bottom" data-delay="50" data-tooltip="Plein chez Carrefour"></i></td>*/
/* 									<td class="date_option">07/06/16</td>*/
/* 									<td class="montant_option"><span>-140</span><span> €</span></td>*/
/* 									<td class="edition_option" style="color: #be5f6e;"><span class="edition"><big><big><i class="fa fa-pencil link-hover edit-hover"></i><i class="fa fa-times link-hover delete-hover suppression-icon" style="margin-left: 15px;"></i></big></big></span></td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td></td>*/
/* 									<td><b>Total des opérations</b></td>*/
/* 									<td></td>*/
/* 									<td><b>400 000 €</b></td>*/
/* 									<td></td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td></td>*/
/* 									<td><b>Total en banque (au 26/06/16)</b></td>*/
/* 									<td></td>*/
/* 									<td><b>3 609 223 €</b></td>*/
/* 									<td></td>*/
/* 								</tr>*/
/* 							</tbody>*/
/* 						</table>*/
/* 						<br>*/
/* 						<h2 class="divider-new-right"><i class="fa fa-hourglass-2 left hide-on-small-only"></i>Opérations en attente</h2>*/
/* 						<table class="striped highlight centered responsive-table">*/
/* 							<thead>*/
/* 								<tr>*/
/* 									<th>Type</th>*/
/* 									<th>Catégorie</th>*/
/* 									<th>Aura lieu le</th>*/
/* 									<th>Montant</th>*/
/* 								</tr>*/
/* 							</thead>*/
/* 							*/
/* 							<tbody>*/
/* 								<tr class="ligne">*/
/* 									<td class="type_option">Carte banquaire</td>*/
/* 									<td class="category_option"><span>Course</span> <i class="fa fa-info-circle tooltipped link-hover" data-position="bottom" data-delay="50" data-tooltip="Plein chez Carrefour"></i></td>*/
/* 									<td class="date_option">07/06/16</td>*/
/* 									<td class="montant_option"><span>-140</span><span> €</span></td>*/
/* 									<td class="edition_option" style="color: #be5f6e;"><span class="edition"><big><big><i class="fa fa-pencil link-hover edit-hover"></i><i class="fa fa-times link-hover delete-hover suppression-icon" style="margin-left: 15px;"></i></big></big></span></td>*/
/* 								</tr>*/
/* 								<tr class="ligne">*/
/* 									<td class="type_option">Carte banquaire</td>*/
/* 									<td class="category_option"><span>Course</span> <i class="fa fa-info-circle tooltipped link-hover" data-position="bottom" data-delay="50" data-tooltip="Plein chez Carrefour"></i></td>*/
/* 									<td class="date_option">07/06/16</td>*/
/* 									<td class="montant_option"><span>-140</span><span> €</span></td>*/
/* 									<td class="edition_option" style="color: #be5f6e;"><span class="edition"><big><big><i class="fa fa-pencil link-hover edit-hover"></i><i class="fa fa-times link-hover delete-hover suppression-icon" style="margin-left: 15px;"></i></big></big></span></td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td></td>*/
/* 									<td><b>Total des opérations</b></td>*/
/* 									<td></td>*/
/* 									<td><b>100 000 €</b></td>*/
/* 									<td></td>*/
/* 								</tr>*/
/* 								<tr>*/
/* 									<td></td>*/
/* 									<td><b>Total après opérations en attente</b></td>*/
/* 									<td></td>*/
/* 									<td><b>3 500 223 €</b></td>*/
/* 									<td></td>*/
/* 								</tr>*/
/* 							</tbody>*/
/* 						</table>*/
/* 						<br>*/
/* 						<h2 class="divider-new-right"><i class="fa fa-area-chart left hide-on-small-only"></i>Synthèse</h2>*/
/* 						<div class="col s12 l6">*/
/* 							<p>Synthèse des dépenses</p>*/
/* 							<br>*/
/* 							<div id="placeholder_wrapper_depenses" class="row">*/
/* 								<div id="placeholder_depenses" style="height: 300px; width: 300px;"></div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col s12 l6">*/
/* 							<p>Synthèse des entrées d'argent</p>*/
/* 							<br>*/
/* 							<div id="placeholder_wrapper_entrees" class="row">*/
/* 								<div id="placeholder_entrees" style="height: 300px; width: 300px;"></div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col s12">*/
/* 							<br>*/
/* 							<br>*/
/* 							<p>Evolution de votre compte banquaire pendant le mois.</p>*/
/* 							<br>*/
/* 							<div id="placeholder_wrapper_account" class="row">*/
/* 								<div id="placeholder_account" style="height: 300px; width: 300px;"></div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</section>*/
/* 			</div>*/
/* 			*/
/* 		</div>*/
/* 		*/
/* 		<div id="operation" class="col s12">*/
/* 		*/
/* 			<div class="col l10 offset-l1 m12 s12 card" style="padding: 0px; border: 1px solid #75828E; min-height: 60%;">*/
/* 				<section id="operation_header" class="kj-grey" style="border-radius: 2px;">*/
/* 					<div class="row" style="margin-bottom: 0px;">*/
/* 						<div class="col s12 white-text">*/
/* 							<h5 class="col s12"><i class="fa fa-terminal left hide-on-small-only"></i>Opérations</h5>*/
/* 						</div>*/
/* 					</div>*/
/* 				</section>*/
/* 				<section id="operation_body" class="col s12">*/
/* 					<div class="col s12 center-align" style="padding-bottom: 20px;">*/
/* 						<br>*/
/* 						<span><em>Que voulez-vous faire ?</em></span>*/
/* 						<br>*/
/* 						<a id="immediate_operation_button" class="btn-large btn-body waves-effect waves-light animated fadeIn cardinal-button" style="animation-delay: 0.2s;"><i class="fa fa-refresh left"></i>Opération immédiate</a>*/
/* 						<br>*/
/* 						<a id="differed_operation_button" class="btn-large btn-body waves-effect waves-light animated fadeIn cardinal-button" style="animation-delay: 0.4s;"><i class="fa fa-hourglass-2 left"></i>Opération différée</a>*/
/* 						<br>*/
/* 						<a id="systematic_operation_button" class="btn-large btn-body waves-effect waves-light animated fadeIn cardinal-button" style="animation-delay: 0.6s;"><i class="fa fa-calendar left"></i>Opération mensuelle</a>*/
/* 						<br>*/
/* 						<br>*/
/* 						<br>*/
/* 						<div style="background-color: #f0f0f0; border-radius: 5px; padding: 5px; color: black; border: 1px solid #d0d0d0"><b><big><i class="fa fa-warning"></i> Aide :</big></b> Les trois boutons vous permettent d'ajouter une nouvelle entrée à vos comptes (entrée ou sortie d'argent).<br>La seule différence entre les 3 boutons est l'effet qu'aura la nouvelle entrée sur le compte (immédiat, différé ou mensuel).</div>*/
/* 					</div>*/
/* 				</section>*/
/* 			</div>*/
/* 			*/
/* 		</div>*/
/* 		*/
/* 		<div id="export" class="col s12">*/
/* 		*/
/* 			<div class="col l10 offset-l1 m12 s12 card" style="padding: 0px; border: 1px solid #75828E; min-height: 60%;">*/
/* 				<section id="export_header" class="kj-grey" style="border-radius: 2px;">*/
/* 					<div class="row" style="margin-bottom: 0px;">*/
/* 						<div class="col s12 white-text">*/
/* 							<h5 class="col s12"><i class="fa fa-upload left hide-on-small-only"></i>Exporter</h5>*/
/* 						</div>*/
/* 					</div>*/
/* 				</section>*/
/* 				<section id="export_body" class="col s12">*/
/* 					<div class="col s12 center-align" style="padding-bottom: 20px;">*/
/* 						<h2 class="divider-new-right"><i class="fa fa-file-pdf-o left hide-on-small-only"></i>Exporter les opérations en cours</h2>*/
/* 						<p class="left-align">Vous pouvez exporter les tableaux et graphes de l'onglet "Récapitulatif" au format pdf. A la fin de chaque mois, tous les tableaux sont automatiquement sauvegardés sous ce format (voir l'historique ci-dessous).</p>*/
/* 						<a class="btn-large btn-body waves-effect waves-light animated fadeIn cardinal-button" style="animation-delay: 0.2s;"><i class="fa fa-file-pdf-o left"></i>SumUp - Livret A - Comptes de 06/16.pdf</a>*/
/* 						<br>*/
/* 						<br>*/
/* 						<h2 class="divider-new-right"><i class="fa fa-history left hide-on-small-only"></i>Historique de votre comtpe</h2>*/
/* 						<p class="left-align">Voici le récapitulatif de vos comptes depuis votre inscription sur le site.</p>*/
/* 						<div class="col s12 m10 l8 offset-m1 offset-l2">*/
/* 							<table>*/
/* 								<thead>*/
/* 									<tr>*/
/* 										<th data-field="id">Nom</th>*/
/* 										<th data-field="name">Lien de téléchargement</th>*/
/* 									</tr>*/
/* 								</thead>*/
/* */
/* 								<tbody>*/
/* 									<tr>*/
/* 										<td>SumUp - Livret A - Comptes de 05/16</td>*/
/* 										<td><a class="btn-large btn-body waves-effect waves-light animated fadeIn cardinal-button truncate" style="animation-delay: 0.2s;"><i class="fa fa-download hide-on-med-and-up"></i><span class="hide-on-small-only"><i class="fa fa-download left"></i>Télécharger</span></a></td>*/
/* 									</tr>*/
/* 									<tr>*/
/* 										<td>SumUp - Livret A - Comptes de 04/16</td>*/
/* 										<td><a class="btn-large btn-body waves-effect waves-light animated fadeIn cardinal-button truncate" style="animation-delay: 0.4s;"><i class="fa fa-download hide-on-med-and-up"></i><span class="hide-on-small-only"><i class="fa fa-download left"></i>Télécharger</span></a></td>*/
/* 									</tr>*/
/* 								</tbody>*/
/* 							</table>*/
/* 						</div>*/
/* 						<br>*/
/* 					</div>*/
/* 				</section>*/
/* 			</div>*/
/* 			*/
/* 		</div>*/
/* 		*/
/* 	</div>*/
/* </div>*/
/* */
/* <!-- Modal Immediate operation -->*/
/* <div id="immediate_operation_modal" class="modal modal-fixed-footer">*/
/* 	<div class="modal-content" style="overflow: hidden;">*/
/* 		<section id="immediate_operation_top">*/
/* 			<div class="col s12" style="border-bottom: 1px solid #ddd; padding: 0px;">*/
/* 				<h5 style="margin-top: 0;"><i class="fa fa-refresh left"></i>Ajouter une opération immédiate</h5>*/
/* 			</div>*/
/* 		</section>*/
/* 		<section id="immediate_operation_content" style="height: 100%; margin-bottom: 0px; overflow-x: hidden; overflow-y: auto;padding-top: 10px; padding-bottom: 20px;">*/
/* 			<div class="row" style="margin-bottom: 0px;">*/
/* 				Une opération immédiate est une opération qui aura un effet immédiat sur l'état de votre compte: la somme d'argent est ajoutée / retirée dès la validation de la transaction, votre compte est directement mis à jour. En cas d'erreur, vous pourrez modifier l'opération dans l'onglet récapitulatif.*/
/* 			<br><br>*/
/* 			<form class="col s12">*/
/* 				<div class="row">*/
/* 					<div class="col s12 m10 l6 offset-m1 offset-l3">*/
/* 						<label>Type d'opération</label>*/
/* 						<select class="browser-default">*/
/* 							<option value="" disabled selected>Choisissez le moyen de paiement</option>*/
/* 							<option value="credit-card">Carte banquaire</option>*/
/* 							<option value="check">Chèque</option>*/
/* 							<option value="transfert">Virement</option>*/
/* 						</select>*/
/* 					</div>*/
/* 					<div class="col s12 m10 l6 offset-m1 offset-l3">*/
/* 						<label>Catégorie</label>*/
/* 						<select class="browser-default">*/
/* 							<option value="" disabled selected>Choisissez la catégorie de l'opération</option>*/
/* 							<option value="Courses">Courses</option>*/
/* 							<option value="Loyer">Loyer</option>*/
/* 							<option value="Vêtements">Vêtements</option>*/
/* 							<option value="Transports">Transports</option>*/
/* 						</select>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="row">*/
/* 					<div class="input-field col s12 m10 l6 offset-m1 offset-l3">*/
/* 						<i class="material-icons prefix">euro_symbol</i>*/
/* 						<input placeholder="0" id="1" type="number" class="validate">*/
/* 						<label for="1">Montant de l'opération</label>*/
/* 					</div>*/
/* 					<div class="input-field col s12 m10 l6 offset-m1 offset-l3">*/
/* 						<i class="material-icons prefix">date_range</i>*/
/* 						<input placeholder="cliquer pour choisir" id="2" class="datepicker" type="number">*/
/* 						<label for="2">Date de l'opération</label>*/
/* 					</div>*/
/* 					<div class="input-field col s12 m10 l6 offset-m1 offset-l3">*/
/* 						<i class="material-icons prefix">mode_edit</i>*/
/* 						<input placeholder="Détails de l'opération (facultatif)" id="3" type="text" class="validate">*/
/* 						<label for="3">Description</label>*/
/* 					</div>*/
/* 				</div>*/
/* 			</form>*/
/* 			</div>*/
/* 		</section>*/
/* 	</div>*/
/* 	<div id="immediate_operation_modal_footer" class="modal-footer">*/
/* 		<a id="add_immediate_operation" href="#" class="btn modal-action waves-effect waves-light green animated disabled" style="margin-right: 20px;"><i class="fa fa-check left"></i>Ajouter</a>*/
/* 		<a id="return_from_immediate_operation" href="#" class="btn waves-effect waves-light left modal-close cardinal-button" style="margin-left: 20px;"><i class="fa fa-angle-left left"></i>Retour</a>*/
/* 	</div>*/
/* </div>*/
/* <!-- /.Modal Immediate operation -->*/
/* */
/* <!-- Modal Differed operation -->*/
/* <div id="differed_operation_modal" class="modal modal-fixed-footer">*/
/* 	<div class="modal-content" style="overflow: hidden;">*/
/* 		<section id="differed_operation_top">*/
/* 			<div class="col s12" style="border-bottom: 1px solid #ddd; padding: 0px;">*/
/* 				<h5 style="margin-top: 0;"><i class="fa fa-hourglass-2 left"></i>Ajouter une opération différée</h5>*/
/* 			</div>*/
/* 		</section>*/
/* 		<section id="differed_operation_content" style="height: 100%; margin-bottom: 0px; overflow-x: hidden; overflow-y: auto; padding-top: 10px; padding-bottom: 20px;">*/
/* 			<div class="row" style="margin-bottom: 0px;">*/
/* 				Une opération différée est une opération dont l'effet sur le compte n'aura lieu qu'à la date demandée. Avant cette date, l'opération sera rangée dans les opérations en attente.*/
/* 			<br><br>*/
/* 			<form class="col s12">*/
/* 				<div class="row">*/
/* 					<div class="col s12 m10 l6 offset-m1 offset-l3">*/
/* 						<label>Type d'opération</label>*/
/* 						<select class="browser-default">*/
/* 							<option value="" disabled selected>Choisissez le moyen de paiement</option>*/
/* 							<option value="credit-card">Carte banquaire</option>*/
/* 							<option value="check">Chèque</option>*/
/* 							<option value="transfert">Virement</option>*/
/* 						</select>*/
/* 					</div>*/
/* 					<div class="col s12 m10 l6 offset-m1 offset-l3">*/
/* 						<label>Catégorie</label>*/
/* 						<select class="browser-default">*/
/* 							<option value="" disabled selected>Choisissez la catégorie de l'opération</option>*/
/* 							<option value="Courses">Courses</option>*/
/* 							<option value="Loyer">Loyer</option>*/
/* 							<option value="Vêtements">Vêtements</option>*/
/* 							<option value="Transports">Transports</option>*/
/* 						</select>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="row">*/
/* 					<div class="input-field col s12 m10 l6 offset-m1 offset-l3">*/
/* 						<i class="material-icons prefix">euro_symbol</i>*/
/* 						<input placeholder="0" id="4" type="number" class="validate montant_field">*/
/* 						<label for="4">Montant de l'opération</label>*/
/* 					</div>*/
/* 					<div class="input-field col s12 m10 l6 offset-m1 offset-l3">*/
/* 						<i class="material-icons prefix">date_range</i>*/
/* 						<input placeholder="cliquer pour choisir" id="5" class="datepicker" type="number">*/
/* 						<label for="5">Date de l'opération</label>*/
/* 					</div>*/
/* 					<div class="input-field col s12 m10 l6 offset-m1 offset-l3">*/
/* 						<i class="material-icons prefix">mode_edit</i>*/
/* 						<input placeholder="Détails de l'opération (facultatif)" id="6" class="description_field validate" type="text">*/
/* 						<label for="6">Description</label>*/
/* 					</div>*/
/* 				</div>*/
/* 			</form>*/
/* 			</div>*/
/* 		</section>*/
/* 	</div>*/
/* 	<div id="differed_operation_modal_footer" class="modal-footer">*/
/* 		<a id="add_differed_operation" href="#" class="btn modal-action waves-effect waves-light green animated disabled" style="margin-right: 20px;"><i class="fa fa-check left"></i>Ajouter</a>*/
/* 		<a id="return_from_differed_operation" href="#" class="btn waves-effect waves-light left modal-close cardinal-button" style="margin-left: 20px;"><i class="fa fa-angle-left left"></i>Retour</a>*/
/* 	</div>*/
/* </div>*/
/* <!-- /.Modal Differed operation -->*/
/* */
/* <!-- Modal Systematic operation -->*/
/* <div id="systematic_operation_modal" class="modal modal-fixed-footer">*/
/* 	<div class="modal-content" style="overflow: hidden;">*/
/* 		<section id="systematic_operation_top">*/
/* 			<div class="col s12" style="border-bottom: 1px solid #ddd; padding: 0px;">*/
/* 				<h5 style="margin-top: 0;"><i class="fa fa-calendar left"></i>Ajouter une opération mensuelle</h5>*/
/* 			</div>*/
/* 		</section>*/
/* 		<section id="systematic_operation_content" style="height: 100%; margin-bottom: 0px; overflow-x: hidden; overflow-y: auto; padding-top: 10px; padding-bottom: 20px;">*/
/* 			<div class="row" style="margin-bottom: 0px;">*/
/* 				Une opération mensuel vous permet d'automatiser la sortie ou l'entrée de montants fixes sur votre compte (ex: loyer, ... ). L'opération sera effectuée tous les mois à partir de la date donnée.*/
/* 			<br><br>*/
/* 			<form class="col s12">*/
/* 				<div class="row">*/
/* 					<div class="col s12 m10 l6 offset-m1 offset-l3">*/
/* 						<label>Type d'opération</label>*/
/* 						<select class="browser-default">*/
/* 							<option value="" disabled selected>Choisissez le moyen de paiement</option>*/
/* 							<option value="credit-card">Carte banquaire</option>*/
/* 							<option value="check">Chèque</option>*/
/* 							<option value="transfert">Virement</option>*/
/* 						</select>*/
/* 					</div>*/
/* 					<div class="col s12 m10 l6 offset-m1 offset-l3">*/
/* 						<label>Catégorie</label>*/
/* 						<select class="browser-default">*/
/* 							<option value="" disabled selected>Choisissez la catégorie de l'opération</option>*/
/* 							<option value="Courses">Courses</option>*/
/* 							<option value="Loyer">Loyer</option>*/
/* 							<option value="Vêtements">Vêtements</option>*/
/* 							<option value="Transports">Transports</option>*/
/* 						</select>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="row">*/
/* 					<div class="input-field col s12 m10 l6 offset-m1 offset-l3">*/
/* 						<i class="material-icons prefix">euro_symbol</i>*/
/* 						<input placeholder="0" id="7" type="number" class="validate montant_field">*/
/* 						<label for="7">Montant de l'opération</label>*/
/* 					</div>*/
/* 					<div class="input-field col s12 m10 l6 offset-m1 offset-l3">*/
/* 						<i class="material-icons prefix">date_range</i>*/
/* 						<input placeholder="cliquer pour choisir" id="8" class="datepicker" type="number">*/
/* 						<label for="8">Date de l'opération</label>*/
/* 					</div>*/
/* 					<div class="input-field col s12 m10 l6 offset-m1 offset-l3">*/
/* 						<i class="material-icons prefix">mode_edit</i>*/
/* 						<input placeholder="Détails de l'opération (facultatif)" id="9" class="description_field validate" type="text">*/
/* 						<label for="9">Description</label>*/
/* 					</div>*/
/* 				</div>*/
/* 			</form>*/
/* 			</div>*/
/* 		</section>*/
/* 	</div>*/
/* 	<div id="systematic_operation_modal_footer" class="modal-footer">*/
/* 		<a id="add_systematic_operation" href="#" class="btn modal-action waves-effect waves-light green animated disabled" style="margin-right: 20px;"><i class="fa fa-check left"></i>Ajouter</a>*/
/* 		<a id="return_from_systematic_operation" href="#" class="btn waves-effect waves-light left modal-close cardinal-button" style="margin-left: 20px;"><i class="fa fa-angle-left left"></i>Retour</a>*/
/* 	</div>*/
/* </div>*/
/* <!-- /.Modal Systematic operation -->*/
/* */
/* <!-- Modal Confirmation -->*/
/* <div id="suppression_modal" class="modal modal-fixed-footer" style="height: 250px; width: 400px;">*/
/* 	<div class="modal-content" style="overflow-x: hidden;">*/
/* 		<section id="suppression_modal_top">*/
/* 			<div class="col s12" style="border-bottom: 1px solid #ddd; padding: 0px;">*/
/* 				<h5 style="margin-top: 0;"><i class="fa fa-times"></i> Suppression</h5>*/
/* 			</div>*/
/* 		</section>*/
/* 		<section id="suppression_modal_content" class="row center-align animated" style="margin-bottom: 0px; overflow-x: hidden; margin-top: 20px;">Êtes-vous sûr(e) ?</section>*/
/* 		*/
/* 	</div>*/
/* 	<div id="suppression_modal_footer" class="modal-footer">*/
/* 		<a id="suppression_modal_cancel" href="#" class="btn modal-action modal-close waves-effect waves-light grey" style="margin-right: 20px;"><i class="fa fa-times left"></i>Annuler</a>*/
/* 		<a id="suppression_modal_confirm" href="#" class="btn modal-action modal-close waves-effect waves-light green" style="margin-right: 20px;"><i class="fa fa-check left"></i>OK</a>*/
/* 	</div>*/
/* </div>*/
/* <!-- /.Modal Confirmation -->*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascript %}*/
/* 	{{ parent() }}*/
/* 	<script src="{{ asset('js/jquery.flot.js') }}"></script>*/
/* 	<script src="{{ asset('js/jquery.flot.pie.js') }}"></script>*/
/* 	<script>*/
/* 	var data = [],*/
/* 		series = Math.floor(Math.random() * 6) + 3;*/
/* */
/* 	for (var i = 0; i < series; i++) {*/
/* 		data[i] = {*/
/* 			label: "Series" + (i + 1),*/
/* 			data: Math.floor(Math.random() * 100) + 1*/
/* 		}*/
/* 	}*/
/* 	*/
/* 	var sin = [],*/
/* 		cos = [];*/
/* */
/* 	for (var i = 0; i < 14; i += 0.5) {*/
/* 		cos.push([i+1, Math.cos(i)]);*/
/* 	}*/
/* 	*/
/* 	function labelFormatter(label, series) {*/
/* 		return "<div style='font-size:1rem; text-align:center; padding:2px; color: black;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";*/
/* 	}*/
/* 	*/
/* 	function plot_graph() {*/
/* 		var available_width = $('#placeholder_wrapper_depenses').width();*/
/* 		$('#placeholder_depenses').width(available_width);*/
/* 		$.plot('#placeholder_depenses', data, {*/
/* 			series: {*/
/* 				pie: {*/
/* 					show: true,*/
/* 					radius: 1,*/
/* 					innerRadius: 0.5,*/
/* 					label: {*/
/* 						show: true,*/
/* 						radius: 3/4,*/
/* 						formatter: labelFormatter,*/
/* 						background: {*/
/* 							opacity: 0.5,*/
/* 							color: '#FFF'*/
/* 						}*/
/* 					}*/
/* 				}*/
/* 			},*/
/* 			legend: {*/
/* 				show: false*/
/* 			}*/
/* 		});*/
/* 		*/
/* 		var available_width = $('#placeholder_wrapper_entrees').width();*/
/* 		$('#placeholder_entrees').width(available_width);*/
/* 		$.plot('#placeholder_entrees', data, {*/
/* 			series: {*/
/* 				pie: {*/
/* 					show: true,*/
/* 					radius: 1,*/
/* 					innerRadius: 0.5,*/
/* 					label: {*/
/* 						show: true,*/
/* 						radius: 3/4,*/
/* 						formatter: labelFormatter,*/
/* 						background: {*/
/* 							opacity: 0.5,*/
/* 							color: '#FFF'*/
/* 						}*/
/* 					}*/
/* 				}*/
/* 			},*/
/* 			legend: {*/
/* 				show: false*/
/* 			}*/
/* 		});*/
/* */
/* 		var available_width = $('#placeholder_wrapper_account').width();*/
/* 		$('#placeholder_account').width(available_width);*/
/* 		var plot = $.plot("#placeholder_account", [*/
/* 			{ data: cos, label: "cos(x)"}*/
/* 		], {*/
/* 			series: {*/
/* 				lines: {*/
/* 					show: true*/
/* 				},*/
/* 				points: {*/
/* 					show: true*/
/* 				}*/
/* 			},*/
/* 			grid: {*/
/* 				hoverable: true,*/
/* 				clickable: true*/
/* 			},*/
/* 			yaxis: {*/
/* 				min: -1.2,*/
/* 				max: 1.2*/
/* 			},*/
/* 			legend: {*/
/* 				show: false*/
/* 			}*/
/* 		});*/
/* 		*/
/* 		$("<div id='tooltip'></div>").css({*/
/* 			position: "absolute",*/
/* 			display: "none",*/
/* 			border: "1px solid #fdd",*/
/* 			padding: "2px",*/
/* 			"background-color": "#fee",*/
/* 			opacity: 0.80*/
/* 		}).appendTo("body");*/
/* 		*/
/* 		$("#placeholder_account").bind("plothover", function (event, pos, item) {*/
/* 			if (item) {*/
/* 				var x = item.datapoint[0].toFixed(2),*/
/* 					y = item.datapoint[1].toFixed(2);*/
/* */
/* 				$("#tooltip").html(y + " €")*/
/* 					.css({top: item.pageY+5, left: item.pageX+5})*/
/* 					.fadeIn(200);*/
/* 			} else {*/
/* 				$("#tooltip").hide();*/
/* 			}*/
/* 		});*/
/* 	}*/
/* 	*/
/* 	function set_lignes() {*/
/* 		$('.fa-pencil').off('click');*/
/* 		$('.fa-pencil').click(function() {*/
/* 			set_lignes_aux($(this).parent().parent().parent().parent().parent());*/
/* 		});*/
/* 		*/
/* 		$('.ligne').off('dblclick');*/
/* 		$('.ligne').dblclick(function() {*/
/* 			set_lignes_aux($(this));*/
/* 		});*/
/* 		*/
/* 		$('.suppression-icon').click(function() {*/
/* 			$('#suppression_modal').openModal({*/
/* 				dismissible: true,*/
/* 				opacity: 0.5,*/
/* 				in_duration: 250,*/
/* 				out_duration: 250,*/
/* 				complete: clean_overlay*/
/* 			});*/
/* 			*/
/* 			$('#suppression_modal_confirm').off('click');*/
/* 			$('#suppression_modal_confirm').click(function() {*/
/* 				$('#suppression_modal_cancel').trigger('click');*/
/* 				Materialize.toast('Opération supprimée', 4000);*/
/* 				setTimeout(function() {*/
/* 					Materialize.toast('Mise à jour ...', 4000);*/
/* 				}, 500);*/
/* 			})*/
/* 		});*/
/* 	}*/
/* 	*/
/* 	function set_lignes_aux(ligne) {*/
/* 		*/
/* 		if ($('.green-edition-text').size() >= 1) {*/
/* 			$('.green-edition-text').parent().find('.delete-hover').trigger('click');*/
/* 		}*/
/* 		*/
/* 		var type_option = '<select class="browser-default"><option value="" disabled selected>Type de paiement</option><option value="Carte banquaire">Carte banquaire</option><option value="Chèque">Chèque</option><option value="Virement">Virement</option></select>';*/
/* 		var category_option = '<select class="browser-default"><option value="" disabled selected>Catégorie</option><option value="Course">Course</option><option value="Loyer">Loyer</option><option value="Vêtements">Vêtements</option><option value="Transports">Transports</option></select>';*/
/* 		var date_option = '<input type="date" class="datepicker center-align">';*/
/* 		var montant_option = '<input type="number" class="center-align">';*/
/* 		var edition_option = '<span class="edition"><big><big><i class="fa fa-check link-hover green-edition-text modification-validation"></i><i class="fa fa-times link-hover delete-hover" style="margin-left: 15px;"></i></big></big></span>';*/
/* 		*/
/* 		var type = ligne.find('.type_option').html();*/
/* 		var category = ligne.find('.category_option').children().first().html();*/
/* 		var category_sav = ligne.find('.category_option').html();*/
/* 		var datepicker_val = ligne.find('.date_option').html();*/
/* 		var montant = ligne.find('.montant_option').children().first().html();*/
/* 		var montant_sav = ligne.find('.montant_option').html();*/
/* 		var edition_sav = ligne.find('.edition_option').html();*/
/* 		*/
/* 		ligne.find('.type_option').html(type_option);*/
/* 		ligne.find('.type_option select').val(type);*/
/* 		*/
/* 		ligne.find('.category_option').html(category_option);*/
/* 		ligne.find('.category_option select').val(category);*/
/* 		*/
/* 		ligne.find('.date_option').html(date_option);*/
/* 		*/
/* 		ligne.find('.montant_option').html(montant_option);*/
/* 		ligne.find('.montant_option input').val(montant);*/
/* 		*/
/* 		ligne.find('.edition_option').html(edition_option);*/
/* 		*/
/* 		*/
/* 		var input = $('.datepicker').pickadate({*/
/* 			labelMonthNext: 'Mois suivant',*/
/* 			labelMonthPrev: 'Mois précédent',*/
/* 			labelMonthSelect: 'Choisissez un mois',*/
/* 			labelYearSelect: 'Choisissez une année',*/
/* 			monthsFull: [ 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Decembre' ],*/
/* 			monthsShort: [ 'Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec' ],*/
/* 			weekdaysFull: [ 'Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi' ],*/
/* 			weekdaysShort: [ 'Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam' ],*/
/* 			weekdaysLetter: [ 'D', 'L', 'M', 'M', 'J', 'V', 'S' ],*/
/* 			today: 'Ajd',*/
/* 			clear: 'Effacer',*/
/* 			close: 'Fermer'*/
/* 		});*/
/* 		picker = input.pickadate('picker');*/
/* 		*/
/* 		picker.set('select', new Date( datepicker_val.replace( /(\d{1})\/(\d{2})\/(\d{2})/, "$2/$1/$3") ));*/
/* 		*/
/* 		ligne.addClass('edited-ligne');*/
/* 		*/
/* 		ligne.find('.delete-hover').click(function() {*/
/* 			ligne.find('.type_option').html(type);*/
/* 			ligne.find('.category_option').html(category_sav);*/
/* 			ligne.find('.date_option').html(datepicker_val);*/
/* 			ligne.find('.montant_option').html(montant_sav);*/
/* 			ligne.find('.edition_option').html(edition_sav);*/
/* 			*/
/* 			$('.tooltipped').tooltip({delay: 50});*/
/* 			*/
/* 			ligne.removeClass('edited-ligne');*/
/* 			*/
/* 			set_lignes();*/
/* 		});*/
/* 		*/
/* 		ligne.find('.modification-validation').click(function() {*/
/* 			ligne.find('.delete-hover').trigger('click');*/
/* 			Materialize.toast('Opération modifiée', 4000);*/
/* 			setTimeout(function() {*/
/* 				Materialize.toast('Mise à jour ...', 4000);*/
/* 			}, 500);*/
/* 		});*/
/* 	}*/
/* 	*/
/* 	$(document).ready(function () {*/
/* 		*/
/* 		//Boutons ajout opération ----------------------------------------------------------*/
/* 		$('#immediate_operation_button').click(function() {*/
/* 			if ($(window).width() >= 992) {*/
/* 				$('#immediate_operation_modal').openModal({*/
/* 					dismissible: true,*/
/* 					opacity: 0.5,*/
/* 					in_duration: 250,*/
/* 					out_duration: 250,*/
/* 					complete: clean_overlay*/
/* 				});*/
/* 				*/
/* 				var input = $('.datepicker').pickadate({*/
/* 					labelMonthNext: 'Mois suivant',*/
/* 					labelMonthPrev: 'Mois précédent',*/
/* 					labelMonthSelect: 'Choisissez un mois',*/
/* 					labelYearSelect: 'Choisissez une année',*/
/* 					monthsFull: [ 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Decembre' ],*/
/* 					monthsShort: [ 'Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec' ],*/
/* 					weekdaysFull: [ 'Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi' ],*/
/* 					weekdaysShort: [ 'Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam' ],*/
/* 					weekdaysLetter: [ 'D', 'L', 'M', 'M', 'J', 'V', 'S' ],*/
/* 					today: 'Ajd',*/
/* 					clear: 'Effacer',*/
/* 					close: 'Fermer'*/
/* 				});*/
/* 				picker = input.pickadate('picker');*/
/* 				*/
/* 				picker.set('select', new Date());*/
/* 			} else {*/
/* 				$(location).attr('href',"{{ path('su_account_mobile_immediate') }}");*/
/* 			}*/
/* 		});*/
/* 		*/
/* 		$('#differed_operation_button').click(function() {*/
/* 			if ($(window).width() >= 992) {*/
/* 				$('#differed_operation_modal').openModal({*/
/* 					dismissible: true,*/
/* 					opacity: 0.5,*/
/* 					in_duration: 250,*/
/* 					out_duration: 250,*/
/* 					complete: clean_overlay*/
/* 				});*/
/* 				*/
/* 				*/
/* 				var input = $('.datepicker').pickadate({*/
/* 					labelMonthNext: 'Mois suivant',*/
/* 					labelMonthPrev: 'Mois précédent',*/
/* 					labelMonthSelect: 'Choisissez un mois',*/
/* 					labelYearSelect: 'Choisissez une année',*/
/* 					monthsFull: [ 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Decembre' ],*/
/* 					monthsShort: [ 'Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec' ],*/
/* 					weekdaysFull: [ 'Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi' ],*/
/* 					weekdaysShort: [ 'Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam' ],*/
/* 					weekdaysLetter: [ 'D', 'L', 'M', 'M', 'J', 'V', 'S' ],*/
/* 					today: 'Ajd',*/
/* 					clear: 'Effacer',*/
/* 					close: 'Fermer'*/
/* 				});*/
/* 				picker = input.pickadate('picker');*/
/* 			} else {*/
/* 				$(location).attr('href',"{{ path('su_account_mobile_differed') }}");*/
/* 			}*/
/* 		});*/
/* 		*/
/* 		$('#systematic_operation_button').click(function() {*/
/* 			if ($(window).width() >= 992) {*/
/* 				$('#systematic_operation_modal').openModal({*/
/* 					dismissible: true,*/
/* 					opacity: 0.5,*/
/* 					in_duration: 250,*/
/* 					out_duration: 250,*/
/* 					complete: clean_overlay*/
/* 				});*/
/* 				*/
/* 				var input = $('.datepicker').pickadate({*/
/* 					labelMonthNext: 'Mois suivant',*/
/* 					labelMonthPrev: 'Mois précédent',*/
/* 					labelMonthSelect: 'Choisissez un mois',*/
/* 					labelYearSelect: 'Choisissez une année',*/
/* 					monthsFull: [ 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Decembre' ],*/
/* 					monthsShort: [ 'Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec' ],*/
/* 					weekdaysFull: [ 'Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi' ],*/
/* 					weekdaysShort: [ 'Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam' ],*/
/* 					weekdaysLetter: [ 'D', 'L', 'M', 'M', 'J', 'V', 'S' ],*/
/* 					today: 'Ajd',*/
/* 					clear: 'Effacer',*/
/* 					close: 'Fermer'*/
/* 				});*/
/* 				picker = input.pickadate('picker');*/
/* 			} else {*/
/* 				$(location).attr('href',"{{ path('su_account_mobile_systematic') }}");*/
/* 			}*/
/* 		});*/
/* 		//----------------------------------------------------------------------------------*/
/* 		*/
/* 		$('#recap_tab_button').click(function () {*/
/* 			setTimeout(function () {*/
/* 				plot_graph()*/
/* 				*/
/* 				$(window).resize(function () {*/
/* 					plot_graph();*/
/* 				});*/
/* 				*/
/* 				$('.ligne').on({*/
/* 					mouseenter: function() {*/
/* 						$(this).children().last().children().addClass('edition-active');*/
/* 					},*/
/* 					mouseover: function() {*/
/* 						$(this).children().last().children().addClass('edition-active');*/
/* 					},*/
/* 					mouseleave: function() {*/
/* 						$(this).children().last().children().removeClass('edition-active');*/
/* 					}*/
/* 				});*/
/* 			}, 500);*/
/* 		});*/
/* 		*/
/* 		set_lignes();*/
/* 	});*/
/* 	</script>*/
/* {% endblock %}*/
