<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_a7ed9fef17e5ec61d0be3db67a7b660e51868cf2322616090de0bc67abb6af41 extends Twig_Template
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
        $__internal_ee4b2929f446af94ed6f911d1e4e3e95fafa018d3519278f0757c8a9b867d2c6 = $this->env->getExtension("native_profiler");
        $__internal_ee4b2929f446af94ed6f911d1e4e3e95fafa018d3519278f0757c8a9b867d2c6->enter($__internal_ee4b2929f446af94ed6f911d1e4e3e95fafa018d3519278f0757c8a9b867d2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ee4b2929f446af94ed6f911d1e4e3e95fafa018d3519278f0757c8a9b867d2c6->leave($__internal_ee4b2929f446af94ed6f911d1e4e3e95fafa018d3519278f0757c8a9b867d2c6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */