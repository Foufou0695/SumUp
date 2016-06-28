<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_d360c5726154e93b59d502949249d56dbcf8b0883a1b719f5b5814233e4d3b7a extends Twig_Template
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
        $__internal_5e878b779942a709b8e19e81a3c3aaf01a8c93c7d73e1d6a4ecef56eeced64ea = $this->env->getExtension("native_profiler");
        $__internal_5e878b779942a709b8e19e81a3c3aaf01a8c93c7d73e1d6a4ecef56eeced64ea->enter($__internal_5e878b779942a709b8e19e81a3c3aaf01a8c93c7d73e1d6a4ecef56eeced64ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_5e878b779942a709b8e19e81a3c3aaf01a8c93c7d73e1d6a4ecef56eeced64ea->leave($__internal_5e878b779942a709b8e19e81a3c3aaf01a8c93c7d73e1d6a4ecef56eeced64ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
