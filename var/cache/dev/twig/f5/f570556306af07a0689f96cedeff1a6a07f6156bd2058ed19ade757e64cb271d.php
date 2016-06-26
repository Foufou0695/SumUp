<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_7171f7eb9dac9d1f92ac3096fc20b1d1e4ab5472d8e69e166dcd3af679b71aee extends Twig_Template
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
        $__internal_3100c9b8c3e0a6c7fa168a3a1b6109c7ddbb3fb862df3012b9a83c2f78812097 = $this->env->getExtension("native_profiler");
        $__internal_3100c9b8c3e0a6c7fa168a3a1b6109c7ddbb3fb862df3012b9a83c2f78812097->enter($__internal_3100c9b8c3e0a6c7fa168a3a1b6109c7ddbb3fb862df3012b9a83c2f78812097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_3100c9b8c3e0a6c7fa168a3a1b6109c7ddbb3fb862df3012b9a83c2f78812097->leave($__internal_3100c9b8c3e0a6c7fa168a3a1b6109c7ddbb3fb862df3012b9a83c2f78812097_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
