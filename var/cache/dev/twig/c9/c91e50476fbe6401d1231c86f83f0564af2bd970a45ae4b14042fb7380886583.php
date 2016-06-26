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
        $__internal_462c2e6e12ee526fc875a0a597041517abe814aebfe31b892121a712ce088f65 = $this->env->getExtension("native_profiler");
        $__internal_462c2e6e12ee526fc875a0a597041517abe814aebfe31b892121a712ce088f65->enter($__internal_462c2e6e12ee526fc875a0a597041517abe814aebfe31b892121a712ce088f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_462c2e6e12ee526fc875a0a597041517abe814aebfe31b892121a712ce088f65->leave($__internal_462c2e6e12ee526fc875a0a597041517abe814aebfe31b892121a712ce088f65_prof);

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
