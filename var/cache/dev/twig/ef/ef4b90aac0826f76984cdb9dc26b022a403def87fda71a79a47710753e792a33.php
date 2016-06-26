<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_5c999173ccfcb8252760247b8065fac7986d324dc11056f7d6aefdd15dbc052d extends Twig_Template
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
        $__internal_7e6c108eee558f6faca8fe678d6dca784fd6ce2f2afc68cfce322393940eada0 = $this->env->getExtension("native_profiler");
        $__internal_7e6c108eee558f6faca8fe678d6dca784fd6ce2f2afc68cfce322393940eada0->enter($__internal_7e6c108eee558f6faca8fe678d6dca784fd6ce2f2afc68cfce322393940eada0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_7e6c108eee558f6faca8fe678d6dca784fd6ce2f2afc68cfce322393940eada0->leave($__internal_7e6c108eee558f6faca8fe678d6dca784fd6ce2f2afc68cfce322393940eada0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
