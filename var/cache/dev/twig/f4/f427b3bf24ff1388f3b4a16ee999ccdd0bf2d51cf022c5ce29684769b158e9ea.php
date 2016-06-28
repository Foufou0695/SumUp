<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_337a90d11df453a20bd95fc74089cc3bee3d99e1312a92890dfe9c3df049a2ac extends Twig_Template
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
        $__internal_8637ca8a8845137c2ebdbe499ffb4e7ee8215b67c14323277a452966436a0dbb = $this->env->getExtension("native_profiler");
        $__internal_8637ca8a8845137c2ebdbe499ffb4e7ee8215b67c14323277a452966436a0dbb->enter($__internal_8637ca8a8845137c2ebdbe499ffb4e7ee8215b67c14323277a452966436a0dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_8637ca8a8845137c2ebdbe499ffb4e7ee8215b67c14323277a452966436a0dbb->leave($__internal_8637ca8a8845137c2ebdbe499ffb4e7ee8215b67c14323277a452966436a0dbb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
