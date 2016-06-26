<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_f5ddcf666fe79c600ead3fe168fc3f735c28eef925a49d0572cec3d48da85732 extends Twig_Template
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
        $__internal_733eb1ff5c0f05b1a900edfd38d71d1ff0a0f6d7060e7a20a1d034ecdfb0936c = $this->env->getExtension("native_profiler");
        $__internal_733eb1ff5c0f05b1a900edfd38d71d1ff0a0f6d7060e7a20a1d034ecdfb0936c->enter($__internal_733eb1ff5c0f05b1a900edfd38d71d1ff0a0f6d7060e7a20a1d034ecdfb0936c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_733eb1ff5c0f05b1a900edfd38d71d1ff0a0f6d7060e7a20a1d034ecdfb0936c->leave($__internal_733eb1ff5c0f05b1a900edfd38d71d1ff0a0f6d7060e7a20a1d034ecdfb0936c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
