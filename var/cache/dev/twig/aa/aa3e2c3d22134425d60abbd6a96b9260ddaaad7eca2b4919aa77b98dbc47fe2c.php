<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d9dbf006d850d8e8810bfb6b45a80f95f7d0a5538f95a51086adbeda52c7da5d extends Twig_Template
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
        $__internal_2e123cc3fb5bd99018733a743f9114df6722516d68f4751b6b4f4b1c86599355 = $this->env->getExtension("native_profiler");
        $__internal_2e123cc3fb5bd99018733a743f9114df6722516d68f4751b6b4f4b1c86599355->enter($__internal_2e123cc3fb5bd99018733a743f9114df6722516d68f4751b6b4f4b1c86599355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_2e123cc3fb5bd99018733a743f9114df6722516d68f4751b6b4f4b1c86599355->leave($__internal_2e123cc3fb5bd99018733a743f9114df6722516d68f4751b6b4f4b1c86599355_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
