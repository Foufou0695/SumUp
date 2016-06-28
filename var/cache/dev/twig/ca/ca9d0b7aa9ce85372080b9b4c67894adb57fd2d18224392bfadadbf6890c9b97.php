<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_7a421cda1de883efed70f0f75d57e9b16c1be1433025f7edb0b7629801bb11ef extends Twig_Template
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
        $__internal_de488aba945f4eeb9efffa66a9766fd4435fac3115093073d764b93f6f40bf14 = $this->env->getExtension("native_profiler");
        $__internal_de488aba945f4eeb9efffa66a9766fd4435fac3115093073d764b93f6f40bf14->enter($__internal_de488aba945f4eeb9efffa66a9766fd4435fac3115093073d764b93f6f40bf14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_de488aba945f4eeb9efffa66a9766fd4435fac3115093073d764b93f6f40bf14->leave($__internal_de488aba945f4eeb9efffa66a9766fd4435fac3115093073d764b93f6f40bf14_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
