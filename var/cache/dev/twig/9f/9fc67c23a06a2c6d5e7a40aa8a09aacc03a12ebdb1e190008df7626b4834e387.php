<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_250034710072d27a619bfed5b68e8870554473d532cea8290e213a0320536d78 extends Twig_Template
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
        $__internal_f5be13d3cc0e6be239e1f06071ac553bc0a0e76692d0a105fb4ed3c25602754c = $this->env->getExtension("native_profiler");
        $__internal_f5be13d3cc0e6be239e1f06071ac553bc0a0e76692d0a105fb4ed3c25602754c->enter($__internal_f5be13d3cc0e6be239e1f06071ac553bc0a0e76692d0a105fb4ed3c25602754c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_f5be13d3cc0e6be239e1f06071ac553bc0a0e76692d0a105fb4ed3c25602754c->leave($__internal_f5be13d3cc0e6be239e1f06071ac553bc0a0e76692d0a105fb4ed3c25602754c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
