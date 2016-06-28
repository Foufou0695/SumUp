<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e43b3c9dbd3059f415a57c27426cce47ead4f54853a930c2ab6966e0a2987548 extends Twig_Template
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
        $__internal_d712b4481070a4eb3834e91d5a673b8d9bbd9876acf57f8293144e2c11544bc6 = $this->env->getExtension("native_profiler");
        $__internal_d712b4481070a4eb3834e91d5a673b8d9bbd9876acf57f8293144e2c11544bc6->enter($__internal_d712b4481070a4eb3834e91d5a673b8d9bbd9876acf57f8293144e2c11544bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d712b4481070a4eb3834e91d5a673b8d9bbd9876acf57f8293144e2c11544bc6->leave($__internal_d712b4481070a4eb3834e91d5a673b8d9bbd9876acf57f8293144e2c11544bc6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
