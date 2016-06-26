<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_108ac39d336c3dc72db7fbc7274ed73f52784c782784cbae39193f16d4f66f7a extends Twig_Template
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
        $__internal_a198a70315bd9147a5ed1a78fb5e6d139d44bb6506843f00100da4a8f9726e73 = $this->env->getExtension("native_profiler");
        $__internal_a198a70315bd9147a5ed1a78fb5e6d139d44bb6506843f00100da4a8f9726e73->enter($__internal_a198a70315bd9147a5ed1a78fb5e6d139d44bb6506843f00100da4a8f9726e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_a198a70315bd9147a5ed1a78fb5e6d139d44bb6506843f00100da4a8f9726e73->leave($__internal_a198a70315bd9147a5ed1a78fb5e6d139d44bb6506843f00100da4a8f9726e73_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
