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
        $__internal_d80b06bcfb6dc2429493bf53a626eea5d65dddc276d5435efc9ec48eee3b1465 = $this->env->getExtension("native_profiler");
        $__internal_d80b06bcfb6dc2429493bf53a626eea5d65dddc276d5435efc9ec48eee3b1465->enter($__internal_d80b06bcfb6dc2429493bf53a626eea5d65dddc276d5435efc9ec48eee3b1465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d80b06bcfb6dc2429493bf53a626eea5d65dddc276d5435efc9ec48eee3b1465->leave($__internal_d80b06bcfb6dc2429493bf53a626eea5d65dddc276d5435efc9ec48eee3b1465_prof);

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
