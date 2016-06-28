<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_be671e1fafa7c506077ac63c4670e9b08e82f0287c34def55a2e8267a6cd698a extends Twig_Template
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
        $__internal_e772cfc0137f115016f64a13175fcc183b9ef3230d4515a89c1eff009b1196e7 = $this->env->getExtension("native_profiler");
        $__internal_e772cfc0137f115016f64a13175fcc183b9ef3230d4515a89c1eff009b1196e7->enter($__internal_e772cfc0137f115016f64a13175fcc183b9ef3230d4515a89c1eff009b1196e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_e772cfc0137f115016f64a13175fcc183b9ef3230d4515a89c1eff009b1196e7->leave($__internal_e772cfc0137f115016f64a13175fcc183b9ef3230d4515a89c1eff009b1196e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
