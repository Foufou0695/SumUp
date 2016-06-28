<?php

/* ::base.html.twig */
class __TwigTemplate_d7abdbae201f447966cddbb950f71e57e6991866c0f5e441bc6d83ce566fb0e9 extends Twig_Template
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
        $__internal_2ea70f637af907d2d2c33a5b19d11f9a830f4ed1ff9f881d7097a9010554ff43 = $this->env->getExtension("native_profiler");
        $__internal_2ea70f637af907d2d2c33a5b19d11f9a830f4ed1ff9f881d7097a9010554ff43->enter($__internal_2ea70f637af907d2d2c33a5b19d11f9a830f4ed1ff9f881d7097a9010554ff43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_2ea70f637af907d2d2c33a5b19d11f9a830f4ed1ff9f881d7097a9010554ff43->leave($__internal_2ea70f637af907d2d2c33a5b19d11f9a830f4ed1ff9f881d7097a9010554ff43_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbdd118683b19b7427724f68d4feec6a3f711ad126f508edd65028392feaafed = $this->env->getExtension("native_profiler");
        $__internal_dbdd118683b19b7427724f68d4feec6a3f711ad126f508edd65028392feaafed->enter($__internal_dbdd118683b19b7427724f68d4feec6a3f711ad126f508edd65028392feaafed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_dbdd118683b19b7427724f68d4feec6a3f711ad126f508edd65028392feaafed->leave($__internal_dbdd118683b19b7427724f68d4feec6a3f711ad126f508edd65028392feaafed_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eadc822060a1570902dc8ca448a8d67f82cc9e1b6087350af9a2fa55470aad20 = $this->env->getExtension("native_profiler");
        $__internal_eadc822060a1570902dc8ca448a8d67f82cc9e1b6087350af9a2fa55470aad20->enter($__internal_eadc822060a1570902dc8ca448a8d67f82cc9e1b6087350af9a2fa55470aad20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_eadc822060a1570902dc8ca448a8d67f82cc9e1b6087350af9a2fa55470aad20->leave($__internal_eadc822060a1570902dc8ca448a8d67f82cc9e1b6087350af9a2fa55470aad20_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca926c485823b81a8935993cc46ccebe5b3d78bd4da4c8d7cdef4995a5127920 = $this->env->getExtension("native_profiler");
        $__internal_ca926c485823b81a8935993cc46ccebe5b3d78bd4da4c8d7cdef4995a5127920->enter($__internal_ca926c485823b81a8935993cc46ccebe5b3d78bd4da4c8d7cdef4995a5127920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ca926c485823b81a8935993cc46ccebe5b3d78bd4da4c8d7cdef4995a5127920->leave($__internal_ca926c485823b81a8935993cc46ccebe5b3d78bd4da4c8d7cdef4995a5127920_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0f50980cfd48196d52f316ecc642aaca2d4c676fa0f9f498e3d8dfd8447b412e = $this->env->getExtension("native_profiler");
        $__internal_0f50980cfd48196d52f316ecc642aaca2d4c676fa0f9f498e3d8dfd8447b412e->enter($__internal_0f50980cfd48196d52f316ecc642aaca2d4c676fa0f9f498e3d8dfd8447b412e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0f50980cfd48196d52f316ecc642aaca2d4c676fa0f9f498e3d8dfd8447b412e->leave($__internal_0f50980cfd48196d52f316ecc642aaca2d4c676fa0f9f498e3d8dfd8447b412e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
