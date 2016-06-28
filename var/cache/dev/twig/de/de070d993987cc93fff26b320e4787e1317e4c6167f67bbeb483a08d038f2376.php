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
        $__internal_a680b5589db8d5fd3300a7b9fb1e2480e17192b1bf8c0355319b695fe668b3a1 = $this->env->getExtension("native_profiler");
        $__internal_a680b5589db8d5fd3300a7b9fb1e2480e17192b1bf8c0355319b695fe668b3a1->enter($__internal_a680b5589db8d5fd3300a7b9fb1e2480e17192b1bf8c0355319b695fe668b3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_a680b5589db8d5fd3300a7b9fb1e2480e17192b1bf8c0355319b695fe668b3a1->leave($__internal_a680b5589db8d5fd3300a7b9fb1e2480e17192b1bf8c0355319b695fe668b3a1_prof);

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
