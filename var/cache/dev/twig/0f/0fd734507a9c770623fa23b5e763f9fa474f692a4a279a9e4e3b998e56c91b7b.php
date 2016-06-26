<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_54feb115ec46865549a6fbf43d71418b10beab9a31a0add6a4a858c5dcb08b3a extends Twig_Template
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
        $__internal_5469ed852a5badc6e98d96f232ca92c9a5ea90732bed9a51781896c2d24007ca = $this->env->getExtension("native_profiler");
        $__internal_5469ed852a5badc6e98d96f232ca92c9a5ea90732bed9a51781896c2d24007ca->enter($__internal_5469ed852a5badc6e98d96f232ca92c9a5ea90732bed9a51781896c2d24007ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_5469ed852a5badc6e98d96f232ca92c9a5ea90732bed9a51781896c2d24007ca->leave($__internal_5469ed852a5badc6e98d96f232ca92c9a5ea90732bed9a51781896c2d24007ca_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
