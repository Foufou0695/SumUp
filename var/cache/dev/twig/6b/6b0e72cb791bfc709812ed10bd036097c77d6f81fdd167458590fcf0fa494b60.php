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
        $__internal_12cd7e58ff832e60fe6183d44f7202bd7220e26ffe94a981819937a8805cfe2f = $this->env->getExtension("native_profiler");
        $__internal_12cd7e58ff832e60fe6183d44f7202bd7220e26ffe94a981819937a8805cfe2f->enter($__internal_12cd7e58ff832e60fe6183d44f7202bd7220e26ffe94a981819937a8805cfe2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_12cd7e58ff832e60fe6183d44f7202bd7220e26ffe94a981819937a8805cfe2f->leave($__internal_12cd7e58ff832e60fe6183d44f7202bd7220e26ffe94a981819937a8805cfe2f_prof);

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
