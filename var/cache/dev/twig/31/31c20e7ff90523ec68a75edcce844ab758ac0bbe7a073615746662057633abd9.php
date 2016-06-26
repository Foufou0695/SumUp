<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_4fe532ecc749eb94134cb21cd0333d2da2aa453f325bbaca5b27bd91946472b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1390f32500be02495f9b2b7e68e13ab48e4f29a6485449c687d1aa1154feab55 = $this->env->getExtension("native_profiler");
        $__internal_1390f32500be02495f9b2b7e68e13ab48e4f29a6485449c687d1aa1154feab55->enter($__internal_1390f32500be02495f9b2b7e68e13ab48e4f29a6485449c687d1aa1154feab55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1390f32500be02495f9b2b7e68e13ab48e4f29a6485449c687d1aa1154feab55->leave($__internal_1390f32500be02495f9b2b7e68e13ab48e4f29a6485449c687d1aa1154feab55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
