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
        $__internal_4e885e63be8753bd2d7420ec6fa6cac1fb9072b0db6a68d7abfae6e599cd399c = $this->env->getExtension("native_profiler");
        $__internal_4e885e63be8753bd2d7420ec6fa6cac1fb9072b0db6a68d7abfae6e599cd399c->enter($__internal_4e885e63be8753bd2d7420ec6fa6cac1fb9072b0db6a68d7abfae6e599cd399c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4e885e63be8753bd2d7420ec6fa6cac1fb9072b0db6a68d7abfae6e599cd399c->leave($__internal_4e885e63be8753bd2d7420ec6fa6cac1fb9072b0db6a68d7abfae6e599cd399c_prof);

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
