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
        $__internal_52bd4b248db73244dce9515d506673a33f27a049b3ef308745d0c8af1c403ce2 = $this->env->getExtension("native_profiler");
        $__internal_52bd4b248db73244dce9515d506673a33f27a049b3ef308745d0c8af1c403ce2->enter($__internal_52bd4b248db73244dce9515d506673a33f27a049b3ef308745d0c8af1c403ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_52bd4b248db73244dce9515d506673a33f27a049b3ef308745d0c8af1c403ce2->leave($__internal_52bd4b248db73244dce9515d506673a33f27a049b3ef308745d0c8af1c403ce2_prof);

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
