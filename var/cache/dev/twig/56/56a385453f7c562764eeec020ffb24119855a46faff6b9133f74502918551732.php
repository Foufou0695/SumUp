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
        $__internal_2c76131eddbecb13b590f0ac25abd59dae2a578059015aaad366b9551ce33aa7 = $this->env->getExtension("native_profiler");
        $__internal_2c76131eddbecb13b590f0ac25abd59dae2a578059015aaad366b9551ce33aa7->enter($__internal_2c76131eddbecb13b590f0ac25abd59dae2a578059015aaad366b9551ce33aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_2c76131eddbecb13b590f0ac25abd59dae2a578059015aaad366b9551ce33aa7->leave($__internal_2c76131eddbecb13b590f0ac25abd59dae2a578059015aaad366b9551ce33aa7_prof);

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
