<?php

/* base.html.twig */
class __TwigTemplate_cbb5a185e616afdbf086fe8f2204789303c0c9adde3893709e4780cc6e240d4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a5c26f541d893007f7fb064c16bcd3d8c2472466afe779e003e8fb44fd668c7 = $this->env->getExtension("native_profiler");
        $__internal_7a5c26f541d893007f7fb064c16bcd3d8c2472466afe779e003e8fb44fd668c7->enter($__internal_7a5c26f541d893007f7fb064c16bcd3d8c2472466afe779e003e8fb44fd668c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7a5c26f541d893007f7fb064c16bcd3d8c2472466afe779e003e8fb44fd668c7->leave($__internal_7a5c26f541d893007f7fb064c16bcd3d8c2472466afe779e003e8fb44fd668c7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7c9461be57f523d16d38a882adc321db70d1932d6587703977169d5dd641f3a = $this->env->getExtension("native_profiler");
        $__internal_a7c9461be57f523d16d38a882adc321db70d1932d6587703977169d5dd641f3a->enter($__internal_a7c9461be57f523d16d38a882adc321db70d1932d6587703977169d5dd641f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a7c9461be57f523d16d38a882adc321db70d1932d6587703977169d5dd641f3a->leave($__internal_a7c9461be57f523d16d38a882adc321db70d1932d6587703977169d5dd641f3a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c0442d4d7c2f61859557c5d7e9f86af66ce6c41eddd1cb292f24a07fe1fe90f6 = $this->env->getExtension("native_profiler");
        $__internal_c0442d4d7c2f61859557c5d7e9f86af66ce6c41eddd1cb292f24a07fe1fe90f6->enter($__internal_c0442d4d7c2f61859557c5d7e9f86af66ce6c41eddd1cb292f24a07fe1fe90f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c0442d4d7c2f61859557c5d7e9f86af66ce6c41eddd1cb292f24a07fe1fe90f6->leave($__internal_c0442d4d7c2f61859557c5d7e9f86af66ce6c41eddd1cb292f24a07fe1fe90f6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec7495867d162b0c31897b37e873ffef2037946a1fe77f1dafbb92c52e8a5da9 = $this->env->getExtension("native_profiler");
        $__internal_ec7495867d162b0c31897b37e873ffef2037946a1fe77f1dafbb92c52e8a5da9->enter($__internal_ec7495867d162b0c31897b37e873ffef2037946a1fe77f1dafbb92c52e8a5da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ec7495867d162b0c31897b37e873ffef2037946a1fe77f1dafbb92c52e8a5da9->leave($__internal_ec7495867d162b0c31897b37e873ffef2037946a1fe77f1dafbb92c52e8a5da9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_86e9aed5ba2ee6290a44af7abbe664cdb1cdb05ae298860c07bbc61c3ae26582 = $this->env->getExtension("native_profiler");
        $__internal_86e9aed5ba2ee6290a44af7abbe664cdb1cdb05ae298860c07bbc61c3ae26582->enter($__internal_86e9aed5ba2ee6290a44af7abbe664cdb1cdb05ae298860c07bbc61c3ae26582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_86e9aed5ba2ee6290a44af7abbe664cdb1cdb05ae298860c07bbc61c3ae26582->leave($__internal_86e9aed5ba2ee6290a44af7abbe664cdb1cdb05ae298860c07bbc61c3ae26582_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
