<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_c208781ce81c5b3ce722a37f14fdb1c180edc01958d4415b2b6fbb903075d2ec extends Twig_Template
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
        $__internal_2dcdd5084145194d0a8a793bd497b0e0ddd207b96860e11c81bffa7aaf2f3d29 = $this->env->getExtension("native_profiler");
        $__internal_2dcdd5084145194d0a8a793bd497b0e0ddd207b96860e11c81bffa7aaf2f3d29->enter($__internal_2dcdd5084145194d0a8a793bd497b0e0ddd207b96860e11c81bffa7aaf2f3d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_2dcdd5084145194d0a8a793bd497b0e0ddd207b96860e11c81bffa7aaf2f3d29->leave($__internal_2dcdd5084145194d0a8a793bd497b0e0ddd207b96860e11c81bffa7aaf2f3d29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
