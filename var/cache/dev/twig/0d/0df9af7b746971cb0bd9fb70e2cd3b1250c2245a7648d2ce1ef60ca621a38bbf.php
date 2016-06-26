<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_6113a8bb79bfcca3bcb4d035a449b838ed85e54cfa7b87c92b0eaa8a032e1d75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_f84abbe9503a75409de1855e57c757bb1482f2a404980a19c4e81e86c38c410b = $this->env->getExtension("native_profiler");
        $__internal_f84abbe9503a75409de1855e57c757bb1482f2a404980a19c4e81e86c38c410b->enter($__internal_f84abbe9503a75409de1855e57c757bb1482f2a404980a19c4e81e86c38c410b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f84abbe9503a75409de1855e57c757bb1482f2a404980a19c4e81e86c38c410b->leave($__internal_f84abbe9503a75409de1855e57c757bb1482f2a404980a19c4e81e86c38c410b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_182d14ac668f84cb102873f828eb7d9a63741f52a0b035caceaf55b1cb6590e6 = $this->env->getExtension("native_profiler");
        $__internal_182d14ac668f84cb102873f828eb7d9a63741f52a0b035caceaf55b1cb6590e6->enter($__internal_182d14ac668f84cb102873f828eb7d9a63741f52a0b035caceaf55b1cb6590e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_182d14ac668f84cb102873f828eb7d9a63741f52a0b035caceaf55b1cb6590e6->leave($__internal_182d14ac668f84cb102873f828eb7d9a63741f52a0b035caceaf55b1cb6590e6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6393d8416950ce20f98997017fd1d2d3089cdcdd154efaecde08df376f92c43c = $this->env->getExtension("native_profiler");
        $__internal_6393d8416950ce20f98997017fd1d2d3089cdcdd154efaecde08df376f92c43c->enter($__internal_6393d8416950ce20f98997017fd1d2d3089cdcdd154efaecde08df376f92c43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6393d8416950ce20f98997017fd1d2d3089cdcdd154efaecde08df376f92c43c->leave($__internal_6393d8416950ce20f98997017fd1d2d3089cdcdd154efaecde08df376f92c43c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e59c45d1e165a1e01aab43f7915ded9e16ea6464bdeed579d63a738e4c3208fa = $this->env->getExtension("native_profiler");
        $__internal_e59c45d1e165a1e01aab43f7915ded9e16ea6464bdeed579d63a738e4c3208fa->enter($__internal_e59c45d1e165a1e01aab43f7915ded9e16ea6464bdeed579d63a738e4c3208fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e59c45d1e165a1e01aab43f7915ded9e16ea6464bdeed579d63a738e4c3208fa->leave($__internal_e59c45d1e165a1e01aab43f7915ded9e16ea6464bdeed579d63a738e4c3208fa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
