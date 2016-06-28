<?php

/* SUMainBundle:Default:index.html.twig */
class __TwigTemplate_8d259180e691af4939c5a406696630c768eb123019c1f7d4de64f82363d2250f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUMainBundle::layout.html.twig", "SUMainBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SUMainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2989d0e2a1d359b0544838bf4a194566c7bc06b10f951e1ecd3867200b8ba681 = $this->env->getExtension("native_profiler");
        $__internal_2989d0e2a1d359b0544838bf4a194566c7bc06b10f951e1ecd3867200b8ba681->enter($__internal_2989d0e2a1d359b0544838bf4a194566c7bc06b10f951e1ecd3867200b8ba681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SUMainBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2989d0e2a1d359b0544838bf4a194566c7bc06b10f951e1ecd3867200b8ba681->leave($__internal_2989d0e2a1d359b0544838bf4a194566c7bc06b10f951e1ecd3867200b8ba681_prof);

    }

    public function getTemplateName()
    {
        return "SUMainBundle:Default:index.html.twig";
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
