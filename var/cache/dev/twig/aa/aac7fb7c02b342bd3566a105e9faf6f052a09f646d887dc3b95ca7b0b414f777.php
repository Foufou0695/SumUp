<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_44585524d48ea6e9b74008c1373bae225b743bf5df9734d5cec305829d2eba53 extends Twig_Template
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
        $__internal_cf71a72ae3da99f1d5624aa24f2ec3c7541e1f4bb0c45be9d24b50ea712f26de = $this->env->getExtension("native_profiler");
        $__internal_cf71a72ae3da99f1d5624aa24f2ec3c7541e1f4bb0c45be9d24b50ea712f26de->enter($__internal_cf71a72ae3da99f1d5624aa24f2ec3c7541e1f4bb0c45be9d24b50ea712f26de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_cf71a72ae3da99f1d5624aa24f2ec3c7541e1f4bb0c45be9d24b50ea712f26de->leave($__internal_cf71a72ae3da99f1d5624aa24f2ec3c7541e1f4bb0c45be9d24b50ea712f26de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
