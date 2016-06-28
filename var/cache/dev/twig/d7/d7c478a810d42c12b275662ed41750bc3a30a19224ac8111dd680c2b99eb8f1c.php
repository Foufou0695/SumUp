<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_830c877c1a2f9c13697a220ec081a507af1b010d15a9d49b6cbe8ecd32151e69 extends Twig_Template
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
        $__internal_ac98c4dc8a4c7205ac667cfa9cd0938e981052725784cfb90db68bec24e324f0 = $this->env->getExtension("native_profiler");
        $__internal_ac98c4dc8a4c7205ac667cfa9cd0938e981052725784cfb90db68bec24e324f0->enter($__internal_ac98c4dc8a4c7205ac667cfa9cd0938e981052725784cfb90db68bec24e324f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ac98c4dc8a4c7205ac667cfa9cd0938e981052725784cfb90db68bec24e324f0->leave($__internal_ac98c4dc8a4c7205ac667cfa9cd0938e981052725784cfb90db68bec24e324f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
