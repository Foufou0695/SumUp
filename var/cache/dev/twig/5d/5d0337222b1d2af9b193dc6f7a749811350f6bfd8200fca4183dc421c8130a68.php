<?php

/* SUAccountBundle:Account:maccount.html.twig */
class __TwigTemplate_9d09e8055374cbe384e0bc70af81966926a69d003ed53f102598d43b31a440ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUMainBundle::layout.html.twig", "SUAccountBundle:Account:maccount.html.twig", 1);
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
        $__internal_a2ff166519556c2257b7e59ab1c3f3f682be0e66e7adadde56adff38660db5d5 = $this->env->getExtension("native_profiler");
        $__internal_a2ff166519556c2257b7e59ab1c3f3f682be0e66e7adadde56adff38660db5d5->enter($__internal_a2ff166519556c2257b7e59ab1c3f3f682be0e66e7adadde56adff38660db5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SUAccountBundle:Account:maccount.html.twig"));

        // line 3
        $context["menu_selected"] = "";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2ff166519556c2257b7e59ab1c3f3f682be0e66e7adadde56adff38660db5d5->leave($__internal_a2ff166519556c2257b7e59ab1c3f3f682be0e66e7adadde56adff38660db5d5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_006ddc14efd7685422eae59fcaa52b0ac08b6860a71c9f6e384cc2d013d88bb0 = $this->env->getExtension("native_profiler");
        $__internal_006ddc14efd7685422eae59fcaa52b0ac08b6860a71c9f6e384cc2d013d88bb0->enter($__internal_006ddc14efd7685422eae59fcaa52b0ac08b6860a71c9f6e384cc2d013d88bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div style=\"background-color: white; padding:20px; margin-top: 21px;\">
\t<div class=\"modal-content\" style=\"overflow: hidden;\">
\t\t<section id=\"new_account_top\">
\t\t\t<div class=\"col s12\" style=\"border-bottom: 1px solid #ddd; padding: 0px;\">
\t\t\t\t<h5 style=\"margin-top: 0;\"><i class=\"fa fa-book left\"></i>Ajouter un compte</h5>
\t\t\t</div>
\t\t</section>
\t\t<section id=\"new_account_content\" style=\"height: 100%; margin-bottom: 0px; overflow-x: hidden; overflow-y: auto;padding-top: 10px; padding-bottom: 20px;\">
\t\t\t<div class=\"row\" style=\"margin-bottom: 0px;\">
\t\t\t\tPour commencer remplisser les informations nécessaires à la création d'un nouveau compte bancaire. Votre compte utilisateur peut être lié à autant de comptes bancaires que vous le souhaitez.
\t\t\t\t<br>
\t\t\t\t<b><big><i class=\"fa fa-warning\"></i> Attention:</big></b> le montant de départ donné doit être celui du niveau de votre compte avant la première opération que vous allez enregistrer sur le site. C'est à partir de ce premier montant que tout sera calculé.
\t\t\t\t<br><br>
\t\t\t\t<form class=\"col s12\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"input-field col s12 m10 l6 offset-m1 offset-l3\">
\t\t\t\t\t\t\t<i class=\"material-icons prefix\">mode_edit</i>
\t\t\t\t\t\t\t<input placeholder=\"Livret A\" id=\"6\" class=\"description_field validate\" type=\"text\">
\t\t\t\t\t\t\t<label for=\"6\">Nom du compte</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"input-field col s12 m10 l6 offset-m1 offset-l3\">
\t\t\t\t\t\t\t<i class=\"material-icons prefix\">euro_symbol</i>
\t\t\t\t\t\t\t<input placeholder=\"0\" id=\"4\" type=\"number\" class=\"validate montant_field\">
\t\t\t\t\t\t\t<label for=\"4\">Montant de départ du compte</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col s12 m10 l6 offset-m1 offset-l3\">
\t\t\t\t\t\t\t<label>Type de compte</label>
\t\t\t\t\t\t\t<select class=\"browser-default\">
\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Type de compte</option>
\t\t\t\t\t\t\t\t<option value=\"credit-card\">Principal (compte par défaut)</option>
\t\t\t\t\t\t\t\t<option value=\"credit-card\">Secondaire</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t
\t\t\t<a id=\"add_new_account\" class=\"btn modal-action waves-effect waves-light green animated disabled right\" style=\"margin-right: 20px;\"><i class=\"fa fa-check left\"></i>OK</a>
\t\t\t<a id=\"return_from_new_account\" href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("su_user_param");
        echo "\" class=\"btn waves-effect waves-light left modal-close cardinal-button left\" style=\"margin-left: 20px;\"><i class=\"fa fa-angle-left left\"></i>Retour</a>
\t\t
\t\t</section>
\t</div>
</div>

";
        
        $__internal_006ddc14efd7685422eae59fcaa52b0ac08b6860a71c9f6e384cc2d013d88bb0->leave($__internal_006ddc14efd7685422eae59fcaa52b0ac08b6860a71c9f6e384cc2d013d88bb0_prof);

    }

    // line 56
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_ec2900b7ad5d2f77c5c09466592d0676dcdf001f98e119ce9104fe0710fd147e = $this->env->getExtension("native_profiler");
        $__internal_ec2900b7ad5d2f77c5c09466592d0676dcdf001f98e119ce9104fe0710fd147e->enter($__internal_ec2900b7ad5d2f77c5c09466592d0676dcdf001f98e119ce9104fe0710fd147e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 57
        echo "\t";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t
\t<script>
\t\$(document).ready(function() {
\t\t
\t\t\$('#ok').click(function() {
\t\t\t\$(location).attr('href', \"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("su_account_homepage");
        echo "\" );
\t\t});
\t\t
\t\t\$('#return').click(function() {
\t\t\t\$(location).attr('href', \"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("su_account_homepage");
        echo "\" );
\t\t});
\t});
\t</script>
";
        
        $__internal_ec2900b7ad5d2f77c5c09466592d0676dcdf001f98e119ce9104fe0710fd147e->leave($__internal_ec2900b7ad5d2f77c5c09466592d0676dcdf001f98e119ce9104fe0710fd147e_prof);

    }

    public function getTemplateName()
    {
        return "SUAccountBundle:Account:maccount.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 67,  118 => 63,  108 => 57,  102 => 56,  88 => 48,  44 => 6,  38 => 5,  31 => 1,  29 => 3,  11 => 1,);
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
/* 		<section id="new_account_top">*/
/* 			<div class="col s12" style="border-bottom: 1px solid #ddd; padding: 0px;">*/
/* 				<h5 style="margin-top: 0;"><i class="fa fa-book left"></i>Ajouter un compte</h5>*/
/* 			</div>*/
/* 		</section>*/
/* 		<section id="new_account_content" style="height: 100%; margin-bottom: 0px; overflow-x: hidden; overflow-y: auto;padding-top: 10px; padding-bottom: 20px;">*/
/* 			<div class="row" style="margin-bottom: 0px;">*/
/* 				Pour commencer remplisser les informations nécessaires à la création d'un nouveau compte bancaire. Votre compte utilisateur peut être lié à autant de comptes bancaires que vous le souhaitez.*/
/* 				<br>*/
/* 				<b><big><i class="fa fa-warning"></i> Attention:</big></b> le montant de départ donné doit être celui du niveau de votre compte avant la première opération que vous allez enregistrer sur le site. C'est à partir de ce premier montant que tout sera calculé.*/
/* 				<br><br>*/
/* 				<form class="col s12">*/
/* 					<div class="row">*/
/* 						<div class="input-field col s12 m10 l6 offset-m1 offset-l3">*/
/* 							<i class="material-icons prefix">mode_edit</i>*/
/* 							<input placeholder="Livret A" id="6" class="description_field validate" type="text">*/
/* 							<label for="6">Nom du compte</label>*/
/* 						</div>*/
/* 						<div class="input-field col s12 m10 l6 offset-m1 offset-l3">*/
/* 							<i class="material-icons prefix">euro_symbol</i>*/
/* 							<input placeholder="0" id="4" type="number" class="validate montant_field">*/
/* 							<label for="4">Montant de départ du compte</label>*/
/* 						</div>*/
/* 					<div class="row">*/
/* 						<div class="col s12 m10 l6 offset-m1 offset-l3">*/
/* 							<label>Type de compte</label>*/
/* 							<select class="browser-default">*/
/* 								<option value="" disabled selected>Type de compte</option>*/
/* 								<option value="credit-card">Principal (compte par défaut)</option>*/
/* 								<option value="credit-card">Secondaire</option>*/
/* 							</select>*/
/* 						</div>*/
/* 					</div>*/
/* 					*/
/* 					</div>*/
/* 				</form>*/
/* 			</div>*/
/* 			*/
/* 			<a id="add_new_account" class="btn modal-action waves-effect waves-light green animated disabled right" style="margin-right: 20px;"><i class="fa fa-check left"></i>OK</a>*/
/* 			<a id="return_from_new_account" href="{{ path('su_user_param') }}" class="btn waves-effect waves-light left modal-close cardinal-button left" style="margin-left: 20px;"><i class="fa fa-angle-left left"></i>Retour</a>*/
/* 		*/
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
