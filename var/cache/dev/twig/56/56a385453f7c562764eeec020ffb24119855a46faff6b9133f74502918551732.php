<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_1f94b72332381d4bd23dd8e623b1e95e5f6e70748daecedd237e1a4bf6966d9c extends Twig_Template
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
        $__internal_73a0bcdbe46f1dfdf7dab2c6dc73db01fcf0d9aaabdef387f8170582a79d064d = $this->env->getExtension("native_profiler");
        $__internal_73a0bcdbe46f1dfdf7dab2c6dc73db01fcf0d9aaabdef387f8170582a79d064d->enter($__internal_73a0bcdbe46f1dfdf7dab2c6dc73db01fcf0d9aaabdef387f8170582a79d064d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_73a0bcdbe46f1dfdf7dab2c6dc73db01fcf0d9aaabdef387f8170582a79d064d->leave($__internal_73a0bcdbe46f1dfdf7dab2c6dc73db01fcf0d9aaabdef387f8170582a79d064d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
