<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_29443e5266a46dea002b8dbb33e18f505f757fdefaaed9348974252164b86d3c extends Twig_Template
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
        $__internal_ae03db2e91aed48e398d7b2f100880ef1792d0b49134213cdb86ec6971f106f2 = $this->env->getExtension("native_profiler");
        $__internal_ae03db2e91aed48e398d7b2f100880ef1792d0b49134213cdb86ec6971f106f2->enter($__internal_ae03db2e91aed48e398d7b2f100880ef1792d0b49134213cdb86ec6971f106f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ae03db2e91aed48e398d7b2f100880ef1792d0b49134213cdb86ec6971f106f2->leave($__internal_ae03db2e91aed48e398d7b2f100880ef1792d0b49134213cdb86ec6971f106f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
