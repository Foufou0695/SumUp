<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_710209a896ebe35bd31ae13694942d323b5d7e793162ef456e2fea63121c48ee extends Twig_Template
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
        $__internal_4ba88809d2ee8f87bd99c29e53d4591e7481bd58728f242f1651d4f4ce364dea = $this->env->getExtension("native_profiler");
        $__internal_4ba88809d2ee8f87bd99c29e53d4591e7481bd58728f242f1651d4f4ce364dea->enter($__internal_4ba88809d2ee8f87bd99c29e53d4591e7481bd58728f242f1651d4f4ce364dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_4ba88809d2ee8f87bd99c29e53d4591e7481bd58728f242f1651d4f4ce364dea->leave($__internal_4ba88809d2ee8f87bd99c29e53d4591e7481bd58728f242f1651d4f4ce364dea_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
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
