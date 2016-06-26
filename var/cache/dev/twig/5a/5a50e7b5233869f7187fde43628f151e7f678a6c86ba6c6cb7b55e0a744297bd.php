<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_5c493f809f7def7cd14cd04d3b8d5177c0770c11d4357aa531f47dbd9e6c9fc8 extends Twig_Template
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
        $__internal_c0c4cc22502b0d2e03638f92807efb0c552e9bdb805a315ef919af981a740982 = $this->env->getExtension("native_profiler");
        $__internal_c0c4cc22502b0d2e03638f92807efb0c552e9bdb805a315ef919af981a740982->enter($__internal_c0c4cc22502b0d2e03638f92807efb0c552e9bdb805a315ef919af981a740982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_c0c4cc22502b0d2e03638f92807efb0c552e9bdb805a315ef919af981a740982->leave($__internal_c0c4cc22502b0d2e03638f92807efb0c552e9bdb805a315ef919af981a740982_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
