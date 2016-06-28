<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_111cd17241ceff695b7018b1b74414d2baef539689a64fd12d4f091d5fdf569a extends Twig_Template
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
        $__internal_dcc840dff54c252f88c29db9f28035b072b3b302716b2e2fd3f623bf1fa25140 = $this->env->getExtension("native_profiler");
        $__internal_dcc840dff54c252f88c29db9f28035b072b3b302716b2e2fd3f623bf1fa25140->enter($__internal_dcc840dff54c252f88c29db9f28035b072b3b302716b2e2fd3f623bf1fa25140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_dcc840dff54c252f88c29db9f28035b072b3b302716b2e2fd3f623bf1fa25140->leave($__internal_dcc840dff54c252f88c29db9f28035b072b3b302716b2e2fd3f623bf1fa25140_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
