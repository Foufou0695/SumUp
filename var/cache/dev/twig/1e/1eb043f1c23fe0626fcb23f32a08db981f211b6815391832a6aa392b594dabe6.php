<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1f55e689c20ed8bf457abef7f6c6b71c95436b226a8e5e069c382d0e04b6f297 extends Twig_Template
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
        $__internal_c988bf6042ae8661a30546f2c14f7a9ec04c1d97cbc5e64264db27ee51de695c = $this->env->getExtension("native_profiler");
        $__internal_c988bf6042ae8661a30546f2c14f7a9ec04c1d97cbc5e64264db27ee51de695c->enter($__internal_c988bf6042ae8661a30546f2c14f7a9ec04c1d97cbc5e64264db27ee51de695c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c988bf6042ae8661a30546f2c14f7a9ec04c1d97cbc5e64264db27ee51de695c->leave($__internal_c988bf6042ae8661a30546f2c14f7a9ec04c1d97cbc5e64264db27ee51de695c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
