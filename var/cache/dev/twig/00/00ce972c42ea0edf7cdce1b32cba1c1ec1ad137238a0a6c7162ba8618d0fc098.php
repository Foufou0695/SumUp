<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_29255a3113930fd5ec9626d67e17b3192c9f726b221c99214c1992b4b6fa6927 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cdaebd6021ee443e7b4e5afecfa6239f6c746f2bf53d35b437a4c539c48aee6e = $this->env->getExtension("native_profiler");
        $__internal_cdaebd6021ee443e7b4e5afecfa6239f6c746f2bf53d35b437a4c539c48aee6e->enter($__internal_cdaebd6021ee443e7b4e5afecfa6239f6c746f2bf53d35b437a4c539c48aee6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdaebd6021ee443e7b4e5afecfa6239f6c746f2bf53d35b437a4c539c48aee6e->leave($__internal_cdaebd6021ee443e7b4e5afecfa6239f6c746f2bf53d35b437a4c539c48aee6e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_195a63d16bba738ee1fda6412877201c4eb9116282d40101ac0d08714b84c558 = $this->env->getExtension("native_profiler");
        $__internal_195a63d16bba738ee1fda6412877201c4eb9116282d40101ac0d08714b84c558->enter($__internal_195a63d16bba738ee1fda6412877201c4eb9116282d40101ac0d08714b84c558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_195a63d16bba738ee1fda6412877201c4eb9116282d40101ac0d08714b84c558->leave($__internal_195a63d16bba738ee1fda6412877201c4eb9116282d40101ac0d08714b84c558_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e317826daed35f2a58f5b177f20cc132162dec9c89ab7f3a06711d355cbe2d6 = $this->env->getExtension("native_profiler");
        $__internal_2e317826daed35f2a58f5b177f20cc132162dec9c89ab7f3a06711d355cbe2d6->enter($__internal_2e317826daed35f2a58f5b177f20cc132162dec9c89ab7f3a06711d355cbe2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2e317826daed35f2a58f5b177f20cc132162dec9c89ab7f3a06711d355cbe2d6->leave($__internal_2e317826daed35f2a58f5b177f20cc132162dec9c89ab7f3a06711d355cbe2d6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0b59d8b31bcdd6bf4bbe6d5082790ea2fcc9307d79374c74d524b1eaeba648f = $this->env->getExtension("native_profiler");
        $__internal_e0b59d8b31bcdd6bf4bbe6d5082790ea2fcc9307d79374c74d524b1eaeba648f->enter($__internal_e0b59d8b31bcdd6bf4bbe6d5082790ea2fcc9307d79374c74d524b1eaeba648f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e0b59d8b31bcdd6bf4bbe6d5082790ea2fcc9307d79374c74d524b1eaeba648f->leave($__internal_e0b59d8b31bcdd6bf4bbe6d5082790ea2fcc9307d79374c74d524b1eaeba648f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
