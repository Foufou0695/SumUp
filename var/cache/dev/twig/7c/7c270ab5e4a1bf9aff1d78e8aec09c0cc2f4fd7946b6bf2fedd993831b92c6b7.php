<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_ce0748c2099f6c96d7a8920bf651debbb89663910af11b9d9794fc23b48a1076 extends Twig_Template
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
        $__internal_3576fd1e194ae4dbfbd2aa6dd1403f74e46e5c3bce400461c965709be483b312 = $this->env->getExtension("native_profiler");
        $__internal_3576fd1e194ae4dbfbd2aa6dd1403f74e46e5c3bce400461c965709be483b312->enter($__internal_3576fd1e194ae4dbfbd2aa6dd1403f74e46e5c3bce400461c965709be483b312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3576fd1e194ae4dbfbd2aa6dd1403f74e46e5c3bce400461c965709be483b312->leave($__internal_3576fd1e194ae4dbfbd2aa6dd1403f74e46e5c3bce400461c965709be483b312_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
