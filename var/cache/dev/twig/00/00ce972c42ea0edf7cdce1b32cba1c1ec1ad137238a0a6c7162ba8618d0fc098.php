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
        $__internal_099ef96f77a61c61d35e3ef3f69f2c0d4c1124bf75bba9bc38db25a00657994f = $this->env->getExtension("native_profiler");
        $__internal_099ef96f77a61c61d35e3ef3f69f2c0d4c1124bf75bba9bc38db25a00657994f->enter($__internal_099ef96f77a61c61d35e3ef3f69f2c0d4c1124bf75bba9bc38db25a00657994f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_099ef96f77a61c61d35e3ef3f69f2c0d4c1124bf75bba9bc38db25a00657994f->leave($__internal_099ef96f77a61c61d35e3ef3f69f2c0d4c1124bf75bba9bc38db25a00657994f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_88423250f7ee500131c2de3cf0c23fc5b57d625a78e3afd601518884353eb72b = $this->env->getExtension("native_profiler");
        $__internal_88423250f7ee500131c2de3cf0c23fc5b57d625a78e3afd601518884353eb72b->enter($__internal_88423250f7ee500131c2de3cf0c23fc5b57d625a78e3afd601518884353eb72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_88423250f7ee500131c2de3cf0c23fc5b57d625a78e3afd601518884353eb72b->leave($__internal_88423250f7ee500131c2de3cf0c23fc5b57d625a78e3afd601518884353eb72b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_586450f282611031eae08ef807a0f44bf8c65ee01d21dccc637a8c515e6553cb = $this->env->getExtension("native_profiler");
        $__internal_586450f282611031eae08ef807a0f44bf8c65ee01d21dccc637a8c515e6553cb->enter($__internal_586450f282611031eae08ef807a0f44bf8c65ee01d21dccc637a8c515e6553cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_586450f282611031eae08ef807a0f44bf8c65ee01d21dccc637a8c515e6553cb->leave($__internal_586450f282611031eae08ef807a0f44bf8c65ee01d21dccc637a8c515e6553cb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb18eba0557a45c6c6b7be7b8acc064f0246c94a091d3f911097a3eb52c7c420 = $this->env->getExtension("native_profiler");
        $__internal_eb18eba0557a45c6c6b7be7b8acc064f0246c94a091d3f911097a3eb52c7c420->enter($__internal_eb18eba0557a45c6c6b7be7b8acc064f0246c94a091d3f911097a3eb52c7c420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_eb18eba0557a45c6c6b7be7b8acc064f0246c94a091d3f911097a3eb52c7c420->leave($__internal_eb18eba0557a45c6c6b7be7b8acc064f0246c94a091d3f911097a3eb52c7c420_prof);

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
