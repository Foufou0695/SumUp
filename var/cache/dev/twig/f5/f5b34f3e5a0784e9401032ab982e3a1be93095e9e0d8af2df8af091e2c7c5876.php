<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_ecba1006dd8c185be84e1b11eaad42e10f7e5ca4877f61910036210482c8707d extends Twig_Template
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
        $__internal_40c98c11d7e1ec3bb764b1f777caa4e9f22b2f6055abf0c83865b3464787321a = $this->env->getExtension("native_profiler");
        $__internal_40c98c11d7e1ec3bb764b1f777caa4e9f22b2f6055abf0c83865b3464787321a->enter($__internal_40c98c11d7e1ec3bb764b1f777caa4e9f22b2f6055abf0c83865b3464787321a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_40c98c11d7e1ec3bb764b1f777caa4e9f22b2f6055abf0c83865b3464787321a->leave($__internal_40c98c11d7e1ec3bb764b1f777caa4e9f22b2f6055abf0c83865b3464787321a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
