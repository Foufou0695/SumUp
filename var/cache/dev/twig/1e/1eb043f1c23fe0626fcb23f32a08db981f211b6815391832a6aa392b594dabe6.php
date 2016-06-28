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
        $__internal_768fa9dad8d2001ff3d0594b5105460b347ce1ce19a83006a8b05bc03dcf28fa = $this->env->getExtension("native_profiler");
        $__internal_768fa9dad8d2001ff3d0594b5105460b347ce1ce19a83006a8b05bc03dcf28fa->enter($__internal_768fa9dad8d2001ff3d0594b5105460b347ce1ce19a83006a8b05bc03dcf28fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_768fa9dad8d2001ff3d0594b5105460b347ce1ce19a83006a8b05bc03dcf28fa->leave($__internal_768fa9dad8d2001ff3d0594b5105460b347ce1ce19a83006a8b05bc03dcf28fa_prof);

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
