<?php

/* @SUAccount/Account/index.html.twig */
class __TwigTemplate_b850670167512f9eb4160eeec4152c3447c7e5db27de405fcc9adcf27622c1e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUMainBundle::layout.html.twig", "@SUAccount/Account/index.html.twig", 1);
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
        $__internal_e50146d0d7b677c37d423d861c930e9e41267932f07606f86298bfa70d0572e2 = $this->env->getExtension("native_profiler");
        $__internal_e50146d0d7b677c37d423d861c930e9e41267932f07606f86298bfa70d0572e2->enter($__internal_e50146d0d7b677c37d423d861c930e9e41267932f07606f86298bfa70d0572e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SUAccount/Account/index.html.twig"));

        // line 3
        $context["menu_selected"] = "";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e50146d0d7b677c37d423d861c930e9e41267932f07606f86298bfa70d0572e2->leave($__internal_e50146d0d7b677c37d423d861c930e9e41267932f07606f86298bfa70d0572e2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_207eeffbfc925251ec4a6bec85084455a1d326069ff8b36c41b7dbfd03257e4b = $this->env->getExtension("native_profiler");
        $__internal_207eeffbfc925251ec4a6bec85084455a1d326069ff8b36c41b7dbfd03257e4b->enter($__internal_207eeffbfc925251ec4a6bec85084455a1d326069ff8b36c41b7dbfd03257e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t\t\t\t\t\t\t<td class=\"edition_option\" style=\"color: #be5f6e;\"><span class=\"edition\"><big><big><i class=\"fa fa-pencil link-hover edit-hover\"></i><i class=\"fa fa-times link-hover delete-hover\" style=\"margin-left: 15px;\"></i></big></big></span></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr class=\"ligne\">
\t\t\t\t\t\t\t\t\t<td class=\"type_option\">Chèque</td>
\t\t\t\t\t\t\t\t\t<td class=\"category_option\"><span>Course</span> <i class=\"fa fa-info-circle tooltipped link-hover\" data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"Plein chez Carrefour\"></i></td>
\t\t\t\t\t\t\t\t\t<td class=\"date_option\">07/06/16</td>
\t\t\t\t\t\t\t\t\t<td class=\"montant_option\"><span>-140</span><span> €</span></td>
\t\t\t\t\t\t\t\t\t<td class=\"edition_option\" style=\"color: #be5f6e;\"><span class=\"edition\"><big><big><i class=\"fa fa-pencil link-hover edit-hover\"></i><i class=\"fa fa-times link-hover delete-hover\" style=\"margin-left: 15px;\"></i></big></big></span></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr class=\"ligne\">
\t\t\t\t\t\t\t\t\t<td class=\"type_option\">Virement</td>
\t\t\t\t\t\t\t\t\t<td class=\"category_option\"><span>Loyer</span> <i class=\"fa fa-info-circle tooltipped link-hover\" data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"Plein chez Carrefour\"></i></td>
\t\t\t\t\t\t\t\t\t<td class=\"date_option\">07/06/16</td>
\t\t\t\t\t\t\t\t\t<td class=\"montant_option\"><span>-140</span><span> €</span></td>
\t\t\t\t\t\t\t\t\t<td class=\"edition_option\" style=\"color: #be5f6e;\"><span class=\"edition\"><big><big><i class=\"fa fa-pencil link-hover edit-hover\"></i><i class=\"fa fa-times link-hover delete-hover\" style=\"margin-left: 15px;\"></i></big></big></span></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr class=\"ligne\">
\t\t\t\t\t\t\t\t\t<td class=\"type_option\">Carte banquaire</td>
\t\t\t\t\t\t\t\t\t<td class=\"category_option\"><span>Vêtements</span> <i class=\"fa fa-info-circle tooltipped link-hover\" data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"Plein chez Carrefour\"></i></td>
\t\t\t\t\t\t\t\t\t<td class=\"date_option\">07/06/16</td>
\t\t\t\t\t\t\t\t\t<td class=\"montant_option\"><span>-140</span><span> €</span></td>
\t\t\t\t\t\t\t\t\t<td class=\"edition_option\" style=\"color: #be5f6e;\"><span class=\"edition\"><big><big><i class=\"fa fa-pencil link-hover edit-hover\"></i><i class=\"fa fa-times link-hover delete-hover\" style=\"margin-left: 15px;\"></i></big></big></span></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr class=\"monthly-operation ligne\">
\t\t\t\t\t\t\t\t\t<td class=\"type_option\">Carte banquaire</td>
\t\t\t\t\t\t\t\t\t<td class=\"category_option\"><span>Course</span> <i class=\"fa fa-info-circle tooltipped link-hover\" data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"Plein chez Carrefour\"></i></td>
\t\t\t\t\t\t\t\t\t<td class=\"date_option\">07/06/16</td>
\t\t\t\t\t\t\t\t\t<td class=\"montant_option\"><span>-140</span><span> €</span></td>
\t\t\t\t\t\t\t\t\t<td class=\"edition_option\" style=\"color: #be5f6e;\"><span class=\"edition\"><big><big><i class=\"fa fa-pencil link-hover edit-hover\"></i><i class=\"fa fa-times link-hover delete-hover\" style=\"margin-left: 15px;\"></i></big></big></span></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr class=\"ligne\">
\t\t\t\t\t\t\t\t\t<td class=\"type_option\">Carte banquaire</td>
\t\t\t\t\t\t\t\t\t<td class=\"category_option\"><span>Course</span> <i class=\"fa fa-info-circle tooltipped link-hover\" data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"Plein chez Carrefour\"></i></td>
\t\t\t\t\t\t\t\t\t<td class=\"date_option\">07/06/16</td>
\t\t\t\t\t\t\t\t\t<td class=\"montant_option\"><span>-140</span><span> €</span></td>
\t\t\t\t\t\t\t\t\t<td class=\"edition_option\" style=\"color: #be5f6e;\"><span class=\"edition\"><big><big><i class=\"fa fa-pencil link-hover edit-hover\"></i><i class=\"fa fa-times link-hover delete-hover\" style=\"margin-left: 15px;\"></i></big></big></span></td>
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
\t\t\t\t\t\t\t\t\t<td class=\"edition_option\" style=\"color: #be5f6e;\"><span class=\"edition\"><big><big><i class=\"fa fa-pencil link-hover edit-hover\"></i><i class=\"fa fa-times link-hover delete-hover\" style=\"margin-left: 15px;\"></i></big></big></span></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr class=\"ligne\">
\t\t\t\t\t\t\t\t\t<td class=\"type_option\">Carte banquaire</td>
\t\t\t\t\t\t\t\t\t<td class=\"category_option\"><span>Course</span> <i class=\"fa fa-info-circle tooltipped link-hover\" data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"Plein chez Carrefour\"></i></td>
\t\t\t\t\t\t\t\t\t<td class=\"date_option\">07/06/16</td>
\t\t\t\t\t\t\t\t\t<td class=\"montant_option\"><span>-140</span><span> €</span></td>
\t\t\t\t\t\t\t\t\t<td class=\"edition_option\" style=\"color: #be5f6e;\"><span class=\"edition\"><big><big><i class=\"fa fa-pencil link-hover edit-hover\"></i><i class=\"fa fa-times link-hover delete-hover\" style=\"margin-left: 15px;\"></i></big></big></span></td>
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
\t\t\t\t\t\t<a class=\"btn-large btn-body waves-effect waves-light animated fadeIn cardinal-button\" style=\"animation-delay: 0.2s;\"><i class=\"fa fa-refresh left\"></i>Opération immédiate</a>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<a class=\"btn-large btn-body waves-effect waves-light animated fadeIn cardinal-button\" style=\"animation-delay: 0.4s;\"><i class=\"fa fa-hourglass-2 left\"></i>Opération différée</a>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<a class=\"btn-large btn-body waves-effect waves-light animated fadeIn cardinal-button\" style=\"animation-delay: 0.6s;\"><i class=\"fa fa-calendar left\"></i>Opération mensuelle</a>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div style=\"background-color: #f0f0f0; border-radius: 5px; padding: 5px; color: black;\"><big><i class=\"fa fa-warning\"></i> Aide :</big> <em>Les trois boutons vous permettent d'ajouter une nouvelle entrée à vos comptes (entrée ou sortie d'argent).<br>La seule différence entre les 3 boutons est l'effet qu'aura la nouvelle entrée sur le compte (immédiat, différé ou mensuel).</em></div>
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

";
        
        $__internal_207eeffbfc925251ec4a6bec85084455a1d326069ff8b36c41b7dbfd03257e4b->leave($__internal_207eeffbfc925251ec4a6bec85084455a1d326069ff8b36c41b7dbfd03257e4b_prof);

    }

    // line 271
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_e9a0ddd2537dbe9f29855217bdeaf888e8e2488ab241ab8ff2675e0d325ca14a = $this->env->getExtension("native_profiler");
        $__internal_e9a0ddd2537dbe9f29855217bdeaf888e8e2488ab241ab8ff2675e0d325ca14a->enter($__internal_e9a0ddd2537dbe9f29855217bdeaf888e8e2488ab241ab8ff2675e0d325ca14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 272
        echo "\t";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t<script src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.flot.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 274
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
\t\tvar edition_option = '<span class=\"edition\"><big><big><i class=\"fa fa-check link-hover green-edition-text\"></i><i class=\"fa fa-times link-hover delete-hover\" style=\"margin-left: 15px;\"></i></big></big></span>';
\t\t
\t\tvar type = ligne.find('.type_option').html();
\t\tvar category = ligne.find('.category_option').children().first().html();
\t\tvar category_sav = ligne.find('.category_option').html();
\t\tvar datepicker_val = ligne.find('.date_option').html();
\t\tvar montant = ligne.find('.montant_option').children().first().html();
\t\tvar montant_sav = ligne.find('.montant_option').html();
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
\t\t\tligne.find('.edition_option').html('<span class=\"edition\"><big><big><i class=\"fa fa-pencil link-hover edit-hover\"></i><i class=\"fa fa-times link-hover delete-hover\" style=\"margin-left: 15px;\"></i></big></big></span>');
\t\t\t
\t\t\t\$('.tooltipped').tooltip({delay: 50});
\t\t\t
\t\t\tligne.removeClass('edited-ligne');
\t\t\t
\t\t\tset_lignes();
\t\t});
\t}
\t
\t\$(document).ready(function () {
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
\t\t
\t});
\t</script>
";
        
        $__internal_e9a0ddd2537dbe9f29855217bdeaf888e8e2488ab241ab8ff2675e0d325ca14a->leave($__internal_e9a0ddd2537dbe9f29855217bdeaf888e8e2488ab241ab8ff2675e0d325ca14a_prof);

    }

    public function getTemplateName()
    {
        return "@SUAccount/Account/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 274,  325 => 273,  320 => 272,  314 => 271,  44 => 6,  38 => 5,  31 => 1,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'SUMainBundle::layout.html.twig' %}*/
/* */
/* {% set menu_selected = '' %}*/
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
/* 									<td class="edition_option" style="color: #be5f6e;"><span class="edition"><big><big><i class="fa fa-pencil link-hover edit-hover"></i><i class="fa fa-times link-hover delete-hover" style="margin-left: 15px;"></i></big></big></span></td>*/
/* 								</tr>*/
/* 								<tr class="ligne">*/
/* 									<td class="type_option">Chèque</td>*/
/* 									<td class="category_option"><span>Course</span> <i class="fa fa-info-circle tooltipped link-hover" data-position="bottom" data-delay="50" data-tooltip="Plein chez Carrefour"></i></td>*/
/* 									<td class="date_option">07/06/16</td>*/
/* 									<td class="montant_option"><span>-140</span><span> €</span></td>*/
/* 									<td class="edition_option" style="color: #be5f6e;"><span class="edition"><big><big><i class="fa fa-pencil link-hover edit-hover"></i><i class="fa fa-times link-hover delete-hover" style="margin-left: 15px;"></i></big></big></span></td>*/
/* 								</tr>*/
/* 								<tr class="ligne">*/
/* 									<td class="type_option">Virement</td>*/
/* 									<td class="category_option"><span>Loyer</span> <i class="fa fa-info-circle tooltipped link-hover" data-position="bottom" data-delay="50" data-tooltip="Plein chez Carrefour"></i></td>*/
/* 									<td class="date_option">07/06/16</td>*/
/* 									<td class="montant_option"><span>-140</span><span> €</span></td>*/
/* 									<td class="edition_option" style="color: #be5f6e;"><span class="edition"><big><big><i class="fa fa-pencil link-hover edit-hover"></i><i class="fa fa-times link-hover delete-hover" style="margin-left: 15px;"></i></big></big></span></td>*/
/* 								</tr>*/
/* 								<tr class="ligne">*/
/* 									<td class="type_option">Carte banquaire</td>*/
/* 									<td class="category_option"><span>Vêtements</span> <i class="fa fa-info-circle tooltipped link-hover" data-position="bottom" data-delay="50" data-tooltip="Plein chez Carrefour"></i></td>*/
/* 									<td class="date_option">07/06/16</td>*/
/* 									<td class="montant_option"><span>-140</span><span> €</span></td>*/
/* 									<td class="edition_option" style="color: #be5f6e;"><span class="edition"><big><big><i class="fa fa-pencil link-hover edit-hover"></i><i class="fa fa-times link-hover delete-hover" style="margin-left: 15px;"></i></big></big></span></td>*/
/* 								</tr>*/
/* 								<tr class="monthly-operation ligne">*/
/* 									<td class="type_option">Carte banquaire</td>*/
/* 									<td class="category_option"><span>Course</span> <i class="fa fa-info-circle tooltipped link-hover" data-position="bottom" data-delay="50" data-tooltip="Plein chez Carrefour"></i></td>*/
/* 									<td class="date_option">07/06/16</td>*/
/* 									<td class="montant_option"><span>-140</span><span> €</span></td>*/
/* 									<td class="edition_option" style="color: #be5f6e;"><span class="edition"><big><big><i class="fa fa-pencil link-hover edit-hover"></i><i class="fa fa-times link-hover delete-hover" style="margin-left: 15px;"></i></big></big></span></td>*/
/* 								</tr>*/
/* 								<tr class="ligne">*/
/* 									<td class="type_option">Carte banquaire</td>*/
/* 									<td class="category_option"><span>Course</span> <i class="fa fa-info-circle tooltipped link-hover" data-position="bottom" data-delay="50" data-tooltip="Plein chez Carrefour"></i></td>*/
/* 									<td class="date_option">07/06/16</td>*/
/* 									<td class="montant_option"><span>-140</span><span> €</span></td>*/
/* 									<td class="edition_option" style="color: #be5f6e;"><span class="edition"><big><big><i class="fa fa-pencil link-hover edit-hover"></i><i class="fa fa-times link-hover delete-hover" style="margin-left: 15px;"></i></big></big></span></td>*/
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
/* 									<td class="edition_option" style="color: #be5f6e;"><span class="edition"><big><big><i class="fa fa-pencil link-hover edit-hover"></i><i class="fa fa-times link-hover delete-hover" style="margin-left: 15px;"></i></big></big></span></td>*/
/* 								</tr>*/
/* 								<tr class="ligne">*/
/* 									<td class="type_option">Carte banquaire</td>*/
/* 									<td class="category_option"><span>Course</span> <i class="fa fa-info-circle tooltipped link-hover" data-position="bottom" data-delay="50" data-tooltip="Plein chez Carrefour"></i></td>*/
/* 									<td class="date_option">07/06/16</td>*/
/* 									<td class="montant_option"><span>-140</span><span> €</span></td>*/
/* 									<td class="edition_option" style="color: #be5f6e;"><span class="edition"><big><big><i class="fa fa-pencil link-hover edit-hover"></i><i class="fa fa-times link-hover delete-hover" style="margin-left: 15px;"></i></big></big></span></td>*/
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
/* 						<a class="btn-large btn-body waves-effect waves-light animated fadeIn cardinal-button" style="animation-delay: 0.2s;"><i class="fa fa-refresh left"></i>Opération immédiate</a>*/
/* 						<br>*/
/* 						<a class="btn-large btn-body waves-effect waves-light animated fadeIn cardinal-button" style="animation-delay: 0.4s;"><i class="fa fa-hourglass-2 left"></i>Opération différée</a>*/
/* 						<br>*/
/* 						<a class="btn-large btn-body waves-effect waves-light animated fadeIn cardinal-button" style="animation-delay: 0.6s;"><i class="fa fa-calendar left"></i>Opération mensuelle</a>*/
/* 						<br>*/
/* 						<br>*/
/* 						<br>*/
/* 						<div style="background-color: #f0f0f0; border-radius: 5px; padding: 5px; color: black;"><big><i class="fa fa-warning"></i> Aide :</big> <em>Les trois boutons vous permettent d'ajouter une nouvelle entrée à vos comptes (entrée ou sortie d'argent).<br>La seule différence entre les 3 boutons est l'effet qu'aura la nouvelle entrée sur le compte (immédiat, différé ou mensuel).</em></div>*/
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
/* 		var edition_option = '<span class="edition"><big><big><i class="fa fa-check link-hover green-edition-text"></i><i class="fa fa-times link-hover delete-hover" style="margin-left: 15px;"></i></big></big></span>';*/
/* 		*/
/* 		var type = ligne.find('.type_option').html();*/
/* 		var category = ligne.find('.category_option').children().first().html();*/
/* 		var category_sav = ligne.find('.category_option').html();*/
/* 		var datepicker_val = ligne.find('.date_option').html();*/
/* 		var montant = ligne.find('.montant_option').children().first().html();*/
/* 		var montant_sav = ligne.find('.montant_option').html();*/
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
/* 			ligne.find('.edition_option').html('<span class="edition"><big><big><i class="fa fa-pencil link-hover edit-hover"></i><i class="fa fa-times link-hover delete-hover" style="margin-left: 15px;"></i></big></big></span>');*/
/* 			*/
/* 			$('.tooltipped').tooltip({delay: 50});*/
/* 			*/
/* 			ligne.removeClass('edited-ligne');*/
/* 			*/
/* 			set_lignes();*/
/* 		});*/
/* 	}*/
/* 	*/
/* 	$(document).ready(function () {*/
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
/* 		*/
/* 	});*/
/* 	</script>*/
/* {% endblock %}*/
