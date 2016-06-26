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
        $__internal_362834262ca14bd6a2374a9f4611bfeb923417cfdb35aa2c0f29b1bc271da98f = $this->env->getExtension("native_profiler");
        $__internal_362834262ca14bd6a2374a9f4611bfeb923417cfdb35aa2c0f29b1bc271da98f->enter($__internal_362834262ca14bd6a2374a9f4611bfeb923417cfdb35aa2c0f29b1bc271da98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SUMainBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_362834262ca14bd6a2374a9f4611bfeb923417cfdb35aa2c0f29b1bc271da98f->leave($__internal_362834262ca14bd6a2374a9f4611bfeb923417cfdb35aa2c0f29b1bc271da98f_prof);

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
