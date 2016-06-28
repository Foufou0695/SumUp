<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_98623ce9e7ec7e1be9bfe49e4dafaf2f7d2cece8b9edf3785b0f25ead229a0fe extends Twig_Template
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
        $__internal_adbe2247f8508fb95497b4ac810159f3ad15042edd5799d9fca2f93be508c45f = $this->env->getExtension("native_profiler");
        $__internal_adbe2247f8508fb95497b4ac810159f3ad15042edd5799d9fca2f93be508c45f->enter($__internal_adbe2247f8508fb95497b4ac810159f3ad15042edd5799d9fca2f93be508c45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_adbe2247f8508fb95497b4ac810159f3ad15042edd5799d9fca2f93be508c45f->leave($__internal_adbe2247f8508fb95497b4ac810159f3ad15042edd5799d9fca2f93be508c45f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
