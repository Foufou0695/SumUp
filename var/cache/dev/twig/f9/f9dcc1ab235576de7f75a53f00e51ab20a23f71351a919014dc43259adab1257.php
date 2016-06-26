<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_6b42a1a163f797d4d22820d18fc4f6ef61b1ec66fda4a4c769e9027daef74a01 extends Twig_Template
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
        $__internal_d7655b159c0e2f295d1cc28be7f991633f6ac1db0ccf68bb36191929f4e51a3f = $this->env->getExtension("native_profiler");
        $__internal_d7655b159c0e2f295d1cc28be7f991633f6ac1db0ccf68bb36191929f4e51a3f->enter($__internal_d7655b159c0e2f295d1cc28be7f991633f6ac1db0ccf68bb36191929f4e51a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d7655b159c0e2f295d1cc28be7f991633f6ac1db0ccf68bb36191929f4e51a3f->leave($__internal_d7655b159c0e2f295d1cc28be7f991633f6ac1db0ccf68bb36191929f4e51a3f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
