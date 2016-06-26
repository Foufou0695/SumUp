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
        $__internal_ff98b0e7d816dccb4f424c5d90bc07138143f0a13823135880de436dd071e249 = $this->env->getExtension("native_profiler");
        $__internal_ff98b0e7d816dccb4f424c5d90bc07138143f0a13823135880de436dd071e249->enter($__internal_ff98b0e7d816dccb4f424c5d90bc07138143f0a13823135880de436dd071e249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ff98b0e7d816dccb4f424c5d90bc07138143f0a13823135880de436dd071e249->leave($__internal_ff98b0e7d816dccb4f424c5d90bc07138143f0a13823135880de436dd071e249_prof);

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
