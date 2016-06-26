<?php

/* @SUMain/Default/index.html.twig */
class __TwigTemplate_54d011741c83aa6a4a09ec71df823cdeeb20bf64fd57de7d53f69cd52e938123 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUMainBundle::layout.html.twig", "@SUMain/Default/index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SUMainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3c31a17a5d55b9107ef395f603931a2e6517a741ffc3efad7a42d847616bdb3 = $this->env->getExtension("native_profiler");
        $__internal_f3c31a17a5d55b9107ef395f603931a2e6517a741ffc3efad7a42d847616bdb3->enter($__internal_f3c31a17a5d55b9107ef395f603931a2e6517a741ffc3efad7a42d847616bdb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SUMain/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3c31a17a5d55b9107ef395f603931a2e6517a741ffc3efad7a42d847616bdb3->leave($__internal_f3c31a17a5d55b9107ef395f603931a2e6517a741ffc3efad7a42d847616bdb3_prof);

    }

    public function getTemplateName()
    {
        return "@SUMain/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends 'SUMainBundle::layout.html.twig' %}*/
