<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_1efc062d6659cf7238f9d7fd782d0b4813d15699ab48f16b3d64ad421f209ba9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3de959b8ec4d9d9faa3d146e8020a34450ff382121c79cceb5f82653828d745e = $this->env->getExtension("native_profiler");
        $__internal_3de959b8ec4d9d9faa3d146e8020a34450ff382121c79cceb5f82653828d745e->enter($__internal_3de959b8ec4d9d9faa3d146e8020a34450ff382121c79cceb5f82653828d745e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3de959b8ec4d9d9faa3d146e8020a34450ff382121c79cceb5f82653828d745e->leave($__internal_3de959b8ec4d9d9faa3d146e8020a34450ff382121c79cceb5f82653828d745e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a90f0e605e283585f57b16ad4d21e9411e556cbabc6443c2c7257900f12cc422 = $this->env->getExtension("native_profiler");
        $__internal_a90f0e605e283585f57b16ad4d21e9411e556cbabc6443c2c7257900f12cc422->enter($__internal_a90f0e605e283585f57b16ad4d21e9411e556cbabc6443c2c7257900f12cc422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a90f0e605e283585f57b16ad4d21e9411e556cbabc6443c2c7257900f12cc422->leave($__internal_a90f0e605e283585f57b16ad4d21e9411e556cbabc6443c2c7257900f12cc422_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
