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
        $__internal_f719c2713763cb2549ef7338aae9ac7759db69b62d1d31522ed1adaf16f97a7b = $this->env->getExtension("native_profiler");
        $__internal_f719c2713763cb2549ef7338aae9ac7759db69b62d1d31522ed1adaf16f97a7b->enter($__internal_f719c2713763cb2549ef7338aae9ac7759db69b62d1d31522ed1adaf16f97a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f719c2713763cb2549ef7338aae9ac7759db69b62d1d31522ed1adaf16f97a7b->leave($__internal_f719c2713763cb2549ef7338aae9ac7759db69b62d1d31522ed1adaf16f97a7b_prof);

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
