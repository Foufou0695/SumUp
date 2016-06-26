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
        $__internal_114111627faa4a2c87944acb3ef57b262ed5264428bff3374e44a61857750f5a = $this->env->getExtension("native_profiler");
        $__internal_114111627faa4a2c87944acb3ef57b262ed5264428bff3374e44a61857750f5a->enter($__internal_114111627faa4a2c87944acb3ef57b262ed5264428bff3374e44a61857750f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_114111627faa4a2c87944acb3ef57b262ed5264428bff3374e44a61857750f5a->leave($__internal_114111627faa4a2c87944acb3ef57b262ed5264428bff3374e44a61857750f5a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7a9fb7dc0021a4513f1c5bae7aae722a3061f76cca9e9b98287f9bbb25fec20 = $this->env->getExtension("native_profiler");
        $__internal_d7a9fb7dc0021a4513f1c5bae7aae722a3061f76cca9e9b98287f9bbb25fec20->enter($__internal_d7a9fb7dc0021a4513f1c5bae7aae722a3061f76cca9e9b98287f9bbb25fec20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d7a9fb7dc0021a4513f1c5bae7aae722a3061f76cca9e9b98287f9bbb25fec20->leave($__internal_d7a9fb7dc0021a4513f1c5bae7aae722a3061f76cca9e9b98287f9bbb25fec20_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2e2132a4d7b5c24f92cee425c53fe06988c8a783fbba0cbf691ceb0527291d8e = $this->env->getExtension("native_profiler");
        $__internal_2e2132a4d7b5c24f92cee425c53fe06988c8a783fbba0cbf691ceb0527291d8e->enter($__internal_2e2132a4d7b5c24f92cee425c53fe06988c8a783fbba0cbf691ceb0527291d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2e2132a4d7b5c24f92cee425c53fe06988c8a783fbba0cbf691ceb0527291d8e->leave($__internal_2e2132a4d7b5c24f92cee425c53fe06988c8a783fbba0cbf691ceb0527291d8e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a77d26203af94fd4987a42f7b03c17d6785216977d7bc9bd3787e2ef6191496e = $this->env->getExtension("native_profiler");
        $__internal_a77d26203af94fd4987a42f7b03c17d6785216977d7bc9bd3787e2ef6191496e->enter($__internal_a77d26203af94fd4987a42f7b03c17d6785216977d7bc9bd3787e2ef6191496e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a77d26203af94fd4987a42f7b03c17d6785216977d7bc9bd3787e2ef6191496e->leave($__internal_a77d26203af94fd4987a42f7b03c17d6785216977d7bc9bd3787e2ef6191496e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c0cbb7989985b9651a9357979fabdf6a61a0e894c0935adf64bc23a6e8c8b01c = $this->env->getExtension("native_profiler");
        $__internal_c0cbb7989985b9651a9357979fabdf6a61a0e894c0935adf64bc23a6e8c8b01c->enter($__internal_c0cbb7989985b9651a9357979fabdf6a61a0e894c0935adf64bc23a6e8c8b01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c0cbb7989985b9651a9357979fabdf6a61a0e894c0935adf64bc23a6e8c8b01c->leave($__internal_c0cbb7989985b9651a9357979fabdf6a61a0e894c0935adf64bc23a6e8c8b01c_prof);

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
