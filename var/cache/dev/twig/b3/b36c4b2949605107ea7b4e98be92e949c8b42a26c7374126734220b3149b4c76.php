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
        $__internal_19d1304231c3ff8f3a8dfa698f603841a9817082b76b73ea479f4d841df8c16a = $this->env->getExtension("native_profiler");
        $__internal_19d1304231c3ff8f3a8dfa698f603841a9817082b76b73ea479f4d841df8c16a->enter($__internal_19d1304231c3ff8f3a8dfa698f603841a9817082b76b73ea479f4d841df8c16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_19d1304231c3ff8f3a8dfa698f603841a9817082b76b73ea479f4d841df8c16a->leave($__internal_19d1304231c3ff8f3a8dfa698f603841a9817082b76b73ea479f4d841df8c16a_prof);

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
