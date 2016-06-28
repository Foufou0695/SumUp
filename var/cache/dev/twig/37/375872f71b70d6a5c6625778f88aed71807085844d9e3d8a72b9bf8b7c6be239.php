<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_fe4b2fa9d639f8b4a0f92b90068edd58274a4bb1e00d0f9d5ba7e9149461e490 extends Twig_Template
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
        $__internal_e4bdf29e2d1876ac7276817a82b8588d54b0f2dc7a257f0e49ce721b6f1c86a0 = $this->env->getExtension("native_profiler");
        $__internal_e4bdf29e2d1876ac7276817a82b8588d54b0f2dc7a257f0e49ce721b6f1c86a0->enter($__internal_e4bdf29e2d1876ac7276817a82b8588d54b0f2dc7a257f0e49ce721b6f1c86a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e4bdf29e2d1876ac7276817a82b8588d54b0f2dc7a257f0e49ce721b6f1c86a0->leave($__internal_e4bdf29e2d1876ac7276817a82b8588d54b0f2dc7a257f0e49ce721b6f1c86a0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
