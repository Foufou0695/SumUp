<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_8181d7d4d34d4c1a4f24c722a3c8add31eec7f23a239309eb63599c963719963 extends Twig_Template
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
        $__internal_2868741c5c79d4de520acd057a625f2a60545944585f60b971be1f0582e1d47f = $this->env->getExtension("native_profiler");
        $__internal_2868741c5c79d4de520acd057a625f2a60545944585f60b971be1f0582e1d47f->enter($__internal_2868741c5c79d4de520acd057a625f2a60545944585f60b971be1f0582e1d47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2868741c5c79d4de520acd057a625f2a60545944585f60b971be1f0582e1d47f->leave($__internal_2868741c5c79d4de520acd057a625f2a60545944585f60b971be1f0582e1d47f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
