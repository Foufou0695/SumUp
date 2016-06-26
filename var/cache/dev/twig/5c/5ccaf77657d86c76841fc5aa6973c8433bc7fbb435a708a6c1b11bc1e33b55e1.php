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
        $__internal_c8179e5473d8fd65e3fb26af7dbff4459f38cd9336c95fa343f48695b3a5a6f6 = $this->env->getExtension("native_profiler");
        $__internal_c8179e5473d8fd65e3fb26af7dbff4459f38cd9336c95fa343f48695b3a5a6f6->enter($__internal_c8179e5473d8fd65e3fb26af7dbff4459f38cd9336c95fa343f48695b3a5a6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c8179e5473d8fd65e3fb26af7dbff4459f38cd9336c95fa343f48695b3a5a6f6->leave($__internal_c8179e5473d8fd65e3fb26af7dbff4459f38cd9336c95fa343f48695b3a5a6f6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_949d430a0c14fff9673df7afa50fcbefe0cbdaa8ae14bd5af5c202c8905e20d3 = $this->env->getExtension("native_profiler");
        $__internal_949d430a0c14fff9673df7afa50fcbefe0cbdaa8ae14bd5af5c202c8905e20d3->enter($__internal_949d430a0c14fff9673df7afa50fcbefe0cbdaa8ae14bd5af5c202c8905e20d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_949d430a0c14fff9673df7afa50fcbefe0cbdaa8ae14bd5af5c202c8905e20d3->leave($__internal_949d430a0c14fff9673df7afa50fcbefe0cbdaa8ae14bd5af5c202c8905e20d3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a9fcd004834da03fbedd7f92637cfc6572aea57f658126f6d39c849c3724ad50 = $this->env->getExtension("native_profiler");
        $__internal_a9fcd004834da03fbedd7f92637cfc6572aea57f658126f6d39c849c3724ad50->enter($__internal_a9fcd004834da03fbedd7f92637cfc6572aea57f658126f6d39c849c3724ad50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a9fcd004834da03fbedd7f92637cfc6572aea57f658126f6d39c849c3724ad50->leave($__internal_a9fcd004834da03fbedd7f92637cfc6572aea57f658126f6d39c849c3724ad50_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_68a16f79ee71c86779dde1309f7fb0c5ccd53d159fa3f001dd2c575c2bf4f830 = $this->env->getExtension("native_profiler");
        $__internal_68a16f79ee71c86779dde1309f7fb0c5ccd53d159fa3f001dd2c575c2bf4f830->enter($__internal_68a16f79ee71c86779dde1309f7fb0c5ccd53d159fa3f001dd2c575c2bf4f830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_68a16f79ee71c86779dde1309f7fb0c5ccd53d159fa3f001dd2c575c2bf4f830->leave($__internal_68a16f79ee71c86779dde1309f7fb0c5ccd53d159fa3f001dd2c575c2bf4f830_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_51bd1aeda6ecf198bf6a1d3759b2df50305db628170a46ce27ab40fb90a630f6 = $this->env->getExtension("native_profiler");
        $__internal_51bd1aeda6ecf198bf6a1d3759b2df50305db628170a46ce27ab40fb90a630f6->enter($__internal_51bd1aeda6ecf198bf6a1d3759b2df50305db628170a46ce27ab40fb90a630f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_51bd1aeda6ecf198bf6a1d3759b2df50305db628170a46ce27ab40fb90a630f6->leave($__internal_51bd1aeda6ecf198bf6a1d3759b2df50305db628170a46ce27ab40fb90a630f6_prof);

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
