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
        $__internal_d6e46ae5c73dd1c0351c3bedb44021e41a32f5739b6e7d08054457c069d6529f = $this->env->getExtension("native_profiler");
        $__internal_d6e46ae5c73dd1c0351c3bedb44021e41a32f5739b6e7d08054457c069d6529f->enter($__internal_d6e46ae5c73dd1c0351c3bedb44021e41a32f5739b6e7d08054457c069d6529f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d6e46ae5c73dd1c0351c3bedb44021e41a32f5739b6e7d08054457c069d6529f->leave($__internal_d6e46ae5c73dd1c0351c3bedb44021e41a32f5739b6e7d08054457c069d6529f_prof);

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
