<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_6e0c1d0e875e6f55b22576c3411a8c274c4ff9e6b180d04e89e3371ee70b9a98 extends Twig_Template
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
        $__internal_23e569bdfffbc7af0e571602817d9cfcb2979404145eda9a4fe9aeac7ea7735d = $this->env->getExtension("native_profiler");
        $__internal_23e569bdfffbc7af0e571602817d9cfcb2979404145eda9a4fe9aeac7ea7735d->enter($__internal_23e569bdfffbc7af0e571602817d9cfcb2979404145eda9a4fe9aeac7ea7735d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_23e569bdfffbc7af0e571602817d9cfcb2979404145eda9a4fe9aeac7ea7735d->leave($__internal_23e569bdfffbc7af0e571602817d9cfcb2979404145eda9a4fe9aeac7ea7735d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
