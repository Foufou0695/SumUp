<?php

/* SUAccountBundle:Account:mdiffered.html.twig */
class __TwigTemplate_f67a701d32561bceda7d751349a0e155e09777495069f978b7ffbf58bb940c1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUMainBundle::layout.html.twig", "SUAccountBundle:Account:mdiffered.html.twig", 1);
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
        $__internal_c1077d2097091a5e311edba4ef48849bd473fe353dea10b704c500885a677af2 = $this->env->getExtension("native_profiler");
        $__internal_c1077d2097091a5e311edba4ef48849bd473fe353dea10b704c500885a677af2->enter($__internal_c1077d2097091a5e311edba4ef48849bd473fe353dea10b704c500885a677af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SUAccountBundle:Account:mdiffered.html.twig"));

        // line 3
        $context["menu_selected"] = "";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1077d2097091a5e311edba4ef48849bd473fe353dea10b704c500885a677af2->leave($__internal_c1077d2097091a5e311edba4ef48849bd473fe353dea10b704c500885a677af2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a91642ebd4c3e1675f54861ea44454e764170ac54f334c1f7c8c09809388c80f = $this->env->getExtension("native_profiler");
        $__internal_a91642ebd4c3e1675f54861ea44454e764170ac54f334c1f7c8c09809388c80f->enter($__internal_a91642ebd4c3e1675f54861ea44454e764170ac54f334c1f7c8c09809388c80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div style=\"background-color: white; padding:20px; margin-top: 21px;\">
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
\t\t\t\t\t\t<input placeholder=\"Date de l'opération\" id=\"2\" class=\"datepicker\" type=\"date\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-field col s12 m10 l6 offset-m1 offset-l3\">
\t\t\t\t\t\t<i class=\"material-icons prefix\">mode_edit</i>
\t\t\t\t\t\t<input placeholder=\"Détails de l'opération (facultatif)\" id=\"6\" class=\"description_field validate\" type=\"text\">
\t\t\t\t\t\t<label for=\"6\">Description</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t</div>
\t\t\t<a id=\"ok\" href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("su_account_homepage");
        echo "\" class=\"btn modal-action waves-effect waves-light right green animated disabled\"><i class=\"fa fa-check left\"></i>OK</a>
\t\t\t<a id=\"return\" href=\"#\" class=\"btn waves-effect waves-light left modal-close cardinal-button\" style=\"margin-right: 5px;\"><i class=\"fa fa-angle-left left\"></i>Retour</a>
\t\t</section>
\t</div>
</div>

";
        
        $__internal_a91642ebd4c3e1675f54861ea44454e764170ac54f334c1f7c8c09809388c80f->leave($__internal_a91642ebd4c3e1675f54861ea44454e764170ac54f334c1f7c8c09809388c80f_prof);

    }

    // line 66
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_dbf0284807a6495e86c8149ef1f3dd5ef432a28dedbd3b523864a074c56f1fd7 = $this->env->getExtension("native_profiler");
        $__internal_dbf0284807a6495e86c8149ef1f3dd5ef432a28dedbd3b523864a074c56f1fd7->enter($__internal_dbf0284807a6495e86c8149ef1f3dd5ef432a28dedbd3b523864a074c56f1fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 67
        echo "\t";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
";
        
        $__internal_dbf0284807a6495e86c8149ef1f3dd5ef432a28dedbd3b523864a074c56f1fd7->leave($__internal_dbf0284807a6495e86c8149ef1f3dd5ef432a28dedbd3b523864a074c56f1fd7_prof);

    }

    public function getTemplateName()
    {
        return "SUAccountBundle:Account:mdiffered.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 67,  112 => 66,  98 => 58,  44 => 6,  38 => 5,  31 => 1,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'SUMainBundle::layout.html.twig' %}*/
/* */
/* {% set menu_selected = '' %}*/
/* */
/* {% block body %}*/
/* */
/* <div style="background-color: white; padding:20px; margin-top: 21px;">*/
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
/* 						<input placeholder="Date de l'opération" id="2" class="datepicker" type="date">*/
/* 					</div>*/
/* 					<div class="input-field col s12 m10 l6 offset-m1 offset-l3">*/
/* 						<i class="material-icons prefix">mode_edit</i>*/
/* 						<input placeholder="Détails de l'opération (facultatif)" id="6" class="description_field validate" type="text">*/
/* 						<label for="6">Description</label>*/
/* 					</div>*/
/* 				</div>*/
/* 			</form>*/
/* 			</div>*/
/* 			<a id="ok" href="{{ path('su_account_homepage') }}" class="btn modal-action waves-effect waves-light right green animated disabled"><i class="fa fa-check left"></i>OK</a>*/
/* 			<a id="return" href="#" class="btn waves-effect waves-light left modal-close cardinal-button" style="margin-right: 5px;"><i class="fa fa-angle-left left"></i>Retour</a>*/
/* 		</section>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascript %}*/
/* 	{{ parent() }}*/
/* {% endblock %}*/
