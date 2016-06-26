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
        $__internal_3f20257f34e0627d036b750063765f0bd24ecd175f6d4161294ed3c989a4833e = $this->env->getExtension("native_profiler");
        $__internal_3f20257f34e0627d036b750063765f0bd24ecd175f6d4161294ed3c989a4833e->enter($__internal_3f20257f34e0627d036b750063765f0bd24ecd175f6d4161294ed3c989a4833e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f20257f34e0627d036b750063765f0bd24ecd175f6d4161294ed3c989a4833e->leave($__internal_3f20257f34e0627d036b750063765f0bd24ecd175f6d4161294ed3c989a4833e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_11a3ff5840c3796c2f54f4da9530ac830e354c5a894fcbeff8ccd44b6702ab28 = $this->env->getExtension("native_profiler");
        $__internal_11a3ff5840c3796c2f54f4da9530ac830e354c5a894fcbeff8ccd44b6702ab28->enter($__internal_11a3ff5840c3796c2f54f4da9530ac830e354c5a894fcbeff8ccd44b6702ab28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_11a3ff5840c3796c2f54f4da9530ac830e354c5a894fcbeff8ccd44b6702ab28->leave($__internal_11a3ff5840c3796c2f54f4da9530ac830e354c5a894fcbeff8ccd44b6702ab28_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_34324781d0625a29cca6cacdc885ff495dd792af7c55f2026a7846cc0cdba620 = $this->env->getExtension("native_profiler");
        $__internal_34324781d0625a29cca6cacdc885ff495dd792af7c55f2026a7846cc0cdba620->enter($__internal_34324781d0625a29cca6cacdc885ff495dd792af7c55f2026a7846cc0cdba620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_34324781d0625a29cca6cacdc885ff495dd792af7c55f2026a7846cc0cdba620->leave($__internal_34324781d0625a29cca6cacdc885ff495dd792af7c55f2026a7846cc0cdba620_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9ebe14d188fa6ede34016f22c5c020bc53d396c3ff90807502d793dd25d6ef9 = $this->env->getExtension("native_profiler");
        $__internal_d9ebe14d188fa6ede34016f22c5c020bc53d396c3ff90807502d793dd25d6ef9->enter($__internal_d9ebe14d188fa6ede34016f22c5c020bc53d396c3ff90807502d793dd25d6ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d9ebe14d188fa6ede34016f22c5c020bc53d396c3ff90807502d793dd25d6ef9->leave($__internal_d9ebe14d188fa6ede34016f22c5c020bc53d396c3ff90807502d793dd25d6ef9_prof);

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
