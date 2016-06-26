<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_88848b5da37e56fc65ae104784cdd040aad2456ef7cd46f84ad63a4fa0139dd3 extends Twig_Template
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
        $__internal_ae504f1bc49117e3756c7870a0c8052c7124c43658cdbc7c3b913eb631c1d0a8 = $this->env->getExtension("native_profiler");
        $__internal_ae504f1bc49117e3756c7870a0c8052c7124c43658cdbc7c3b913eb631c1d0a8->enter($__internal_ae504f1bc49117e3756c7870a0c8052c7124c43658cdbc7c3b913eb631c1d0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_ae504f1bc49117e3756c7870a0c8052c7124c43658cdbc7c3b913eb631c1d0a8->leave($__internal_ae504f1bc49117e3756c7870a0c8052c7124c43658cdbc7c3b913eb631c1d0a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
