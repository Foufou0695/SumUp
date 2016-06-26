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
        $__internal_084886127371cc2baae9fc8d6357ca6bd2f57aaf0c169ed3ecb5901c11c906af = $this->env->getExtension("native_profiler");
        $__internal_084886127371cc2baae9fc8d6357ca6bd2f57aaf0c169ed3ecb5901c11c906af->enter($__internal_084886127371cc2baae9fc8d6357ca6bd2f57aaf0c169ed3ecb5901c11c906af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_084886127371cc2baae9fc8d6357ca6bd2f57aaf0c169ed3ecb5901c11c906af->leave($__internal_084886127371cc2baae9fc8d6357ca6bd2f57aaf0c169ed3ecb5901c11c906af_prof);

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
