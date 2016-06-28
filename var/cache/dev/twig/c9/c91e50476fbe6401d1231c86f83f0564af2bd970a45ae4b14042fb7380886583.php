<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_979048206eb60b8a013b52589c5c49d3cd7833a61300c91833b737bece67ab36 extends Twig_Template
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
        $__internal_adb62dd7781c8a3fb102505375291a308d3afbe9fb609513111de317e760b83f = $this->env->getExtension("native_profiler");
        $__internal_adb62dd7781c8a3fb102505375291a308d3afbe9fb609513111de317e760b83f->enter($__internal_adb62dd7781c8a3fb102505375291a308d3afbe9fb609513111de317e760b83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_adb62dd7781c8a3fb102505375291a308d3afbe9fb609513111de317e760b83f->leave($__internal_adb62dd7781c8a3fb102505375291a308d3afbe9fb609513111de317e760b83f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
