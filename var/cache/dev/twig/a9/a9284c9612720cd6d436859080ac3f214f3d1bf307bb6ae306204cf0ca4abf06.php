<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_c33b83b00ca2a313c9b38feecf7c612279abe1d7d4523ff98d6c079f1bbbb82c extends Twig_Template
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
        $__internal_2a5944f09215fe383b03c525f6c92b2d69e790f84d3d8c316953f2f0aca4a711 = $this->env->getExtension("native_profiler");
        $__internal_2a5944f09215fe383b03c525f6c92b2d69e790f84d3d8c316953f2f0aca4a711->enter($__internal_2a5944f09215fe383b03c525f6c92b2d69e790f84d3d8c316953f2f0aca4a711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2a5944f09215fe383b03c525f6c92b2d69e790f84d3d8c316953f2f0aca4a711->leave($__internal_2a5944f09215fe383b03c525f6c92b2d69e790f84d3d8c316953f2f0aca4a711_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
