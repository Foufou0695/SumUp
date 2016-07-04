<?php

/* SUAccountBundle:Account:mimmediate.html.twig */
class __TwigTemplate_87ac2c858cfea2236a6a57f18d59ededa75bd84125b87a9d963f45aa1f003d08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUMainBundle::layout.html.twig", "SUAccountBundle:Account:mimmediate.html.twig", 1);
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
        $__internal_9cb8fc971333c41ab8a78113c5917f7022c25386a6fcfbedf5ed565551deeaf9 = $this->env->getExtension("native_profiler");
        $__internal_9cb8fc971333c41ab8a78113c5917f7022c25386a6fcfbedf5ed565551deeaf9->enter($__internal_9cb8fc971333c41ab8a78113c5917f7022c25386a6fcfbedf5ed565551deeaf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SUAccountBundle:Account:mimmediate.html.twig"));

        // line 3
        $context["menu_selected"] = "";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cb8fc971333c41ab8a78113c5917f7022c25386a6fcfbedf5ed565551deeaf9->leave($__internal_9cb8fc971333c41ab8a78113c5917f7022c25386a6fcfbedf5ed565551deeaf9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b717ca01ae635801778d08c663fac060490a1b20cf568e393d2740997b5339f = $this->env->getExtension("native_profiler");
        $__internal_9b717ca01ae635801778d08c663fac060490a1b20cf568e393d2740997b5339f->enter($__internal_9b717ca01ae635801778d08c663fac060490a1b20cf568e393d2740997b5339f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div style=\"background-color: white; padding:20px; margin-top: 21px;\">
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
\t\t\t\t\t\t<input placeholder=\"Date de l'opération\" id=\"2\" class=\"datepicker\" type=\"date\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-field col s12 m10 l6 offset-m1 offset-l3\">
\t\t\t\t\t\t<i class=\"material-icons prefix\">mode_edit</i>
\t\t\t\t\t\t<input placeholder=\"Détails de l'opération (facultatif)\" id=\"3\" type=\"text\" class=\"validate\">
\t\t\t\t\t\t<label for=\"3\">Description</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t</div>
\t\t<a id=\"ok\" href=\"#\" class=\"btn modal-action waves-effect waves-light right green animated disabled\"><i class=\"fa fa-check left\"></i>OK</a>
\t\t<a id=\"return\" href=\"#\" class=\"btn waves-effect waves-light left modal-close cardinal-button\" style=\"margin-right: 5px;\"><i class=\"fa fa-angle-left left\"></i>Retour</a>
\t\t</section>
\t</div>
</div>

";
        
        $__internal_9b717ca01ae635801778d08c663fac060490a1b20cf568e393d2740997b5339f->leave($__internal_9b717ca01ae635801778d08c663fac060490a1b20cf568e393d2740997b5339f_prof);

    }

    // line 66
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_c44253109ddc2c913c089935721ab2009d5617ef0b213b54b1314be329aa2945 = $this->env->getExtension("native_profiler");
        $__internal_c44253109ddc2c913c089935721ab2009d5617ef0b213b54b1314be329aa2945->enter($__internal_c44253109ddc2c913c089935721ab2009d5617ef0b213b54b1314be329aa2945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 67
        echo "\t";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t
\t<script>
\t\$(document).ready(function() {
\t\t
\t\t\$('#ok').click(function() {
\t\t\t\$(location).attr('href', \"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("su_account_homepage");
        echo "\" );
\t\t});
\t\t
\t\t\$('#return').click(function() {
\t\t\t\$(location).attr('href', \"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("su_account_homepage");
        echo "\" );
\t\t});
\t});
\t</script>
";
        
        $__internal_c44253109ddc2c913c089935721ab2009d5617ef0b213b54b1314be329aa2945->leave($__internal_c44253109ddc2c913c089935721ab2009d5617ef0b213b54b1314be329aa2945_prof);

    }

    public function getTemplateName()
    {
        return "SUAccountBundle:Account:mimmediate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 77,  125 => 73,  115 => 67,  109 => 66,  44 => 6,  38 => 5,  31 => 1,  29 => 3,  11 => 1,);
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
/* 						<input placeholder="Date de l'opération" id="2" class="datepicker" type="date">*/
/* 					</div>*/
/* 					<div class="input-field col s12 m10 l6 offset-m1 offset-l3">*/
/* 						<i class="material-icons prefix">mode_edit</i>*/
/* 						<input placeholder="Détails de l'opération (facultatif)" id="3" type="text" class="validate">*/
/* 						<label for="3">Description</label>*/
/* 					</div>*/
/* 				</div>*/
/* 			</form>*/
/* 			</div>*/
/* 		<a id="ok" href="#" class="btn modal-action waves-effect waves-light right green animated disabled"><i class="fa fa-check left"></i>OK</a>*/
/* 		<a id="return" href="#" class="btn waves-effect waves-light left modal-close cardinal-button" style="margin-right: 5px;"><i class="fa fa-angle-left left"></i>Retour</a>*/
/* 		</section>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascript %}*/
/* 	{{ parent() }}*/
/* 	*/
/* 	<script>*/
/* 	$(document).ready(function() {*/
/* 		*/
/* 		$('#ok').click(function() {*/
/* 			$(location).attr('href', "{{ path('su_account_homepage') }}" );*/
/* 		});*/
/* 		*/
/* 		$('#return').click(function() {*/
/* 			$(location).attr('href', "{{ path('su_account_homepage') }}" );*/
/* 		});*/
/* 	});*/
/* 	</script>*/
/* {% endblock %}*/
