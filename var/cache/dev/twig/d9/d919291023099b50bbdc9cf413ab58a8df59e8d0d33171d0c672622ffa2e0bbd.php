<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_ed17a5715f06cfddc2fc805927411922049488647288f6becfbbb4076a22d3d4 extends Twig_Template
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
        $__internal_4c38077a66ed01bf8b098b5524bf7d074189b289431ca430f94aca4849e5c2aa = $this->env->getExtension("native_profiler");
        $__internal_4c38077a66ed01bf8b098b5524bf7d074189b289431ca430f94aca4849e5c2aa->enter($__internal_4c38077a66ed01bf8b098b5524bf7d074189b289431ca430f94aca4849e5c2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_4c38077a66ed01bf8b098b5524bf7d074189b289431ca430f94aca4849e5c2aa->leave($__internal_4c38077a66ed01bf8b098b5524bf7d074189b289431ca430f94aca4849e5c2aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
