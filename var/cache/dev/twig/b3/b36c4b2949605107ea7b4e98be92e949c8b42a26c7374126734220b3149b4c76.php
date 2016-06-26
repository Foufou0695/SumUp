<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_5f755ed6d02dd278a76d24b95df244b35baf30e60266c8067db7c0c07471d86a extends Twig_Template
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
        $__internal_110b525e15ac3509e9963ecfda3cfda1dc0c9245778fd730b6ee80b9d8637301 = $this->env->getExtension("native_profiler");
        $__internal_110b525e15ac3509e9963ecfda3cfda1dc0c9245778fd730b6ee80b9d8637301->enter($__internal_110b525e15ac3509e9963ecfda3cfda1dc0c9245778fd730b6ee80b9d8637301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_110b525e15ac3509e9963ecfda3cfda1dc0c9245778fd730b6ee80b9d8637301->leave($__internal_110b525e15ac3509e9963ecfda3cfda1dc0c9245778fd730b6ee80b9d8637301_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
