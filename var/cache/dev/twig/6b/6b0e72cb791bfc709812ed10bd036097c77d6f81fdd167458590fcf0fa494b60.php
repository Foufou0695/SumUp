<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_d42cfad7e0a9b5e9509eee3798c7d980dbacb44ca5909635663decd40804762f extends Twig_Template
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
        $__internal_418cbce7448c1cd0e858482db7d8ebcc13860f9a158155f312e07388a6ab530e = $this->env->getExtension("native_profiler");
        $__internal_418cbce7448c1cd0e858482db7d8ebcc13860f9a158155f312e07388a6ab530e->enter($__internal_418cbce7448c1cd0e858482db7d8ebcc13860f9a158155f312e07388a6ab530e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_418cbce7448c1cd0e858482db7d8ebcc13860f9a158155f312e07388a6ab530e->leave($__internal_418cbce7448c1cd0e858482db7d8ebcc13860f9a158155f312e07388a6ab530e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
