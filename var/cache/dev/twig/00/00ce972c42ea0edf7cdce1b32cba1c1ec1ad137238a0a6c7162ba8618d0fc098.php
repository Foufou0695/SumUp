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
        $__internal_41f946a261fec47a4c01f1c31fc7e640f156351e4225663315d3a8d402ce2aa3 = $this->env->getExtension("native_profiler");
        $__internal_41f946a261fec47a4c01f1c31fc7e640f156351e4225663315d3a8d402ce2aa3->enter($__internal_41f946a261fec47a4c01f1c31fc7e640f156351e4225663315d3a8d402ce2aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41f946a261fec47a4c01f1c31fc7e640f156351e4225663315d3a8d402ce2aa3->leave($__internal_41f946a261fec47a4c01f1c31fc7e640f156351e4225663315d3a8d402ce2aa3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5dd8ffc656107cb5d2688b00f06d9a24b9bdd02fdae7c0ca3d49da25fbf9d512 = $this->env->getExtension("native_profiler");
        $__internal_5dd8ffc656107cb5d2688b00f06d9a24b9bdd02fdae7c0ca3d49da25fbf9d512->enter($__internal_5dd8ffc656107cb5d2688b00f06d9a24b9bdd02fdae7c0ca3d49da25fbf9d512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5dd8ffc656107cb5d2688b00f06d9a24b9bdd02fdae7c0ca3d49da25fbf9d512->leave($__internal_5dd8ffc656107cb5d2688b00f06d9a24b9bdd02fdae7c0ca3d49da25fbf9d512_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f15821ee64307ab2e689153599820a0c45e94ed2fbe163a71aeff9a61b17aa1b = $this->env->getExtension("native_profiler");
        $__internal_f15821ee64307ab2e689153599820a0c45e94ed2fbe163a71aeff9a61b17aa1b->enter($__internal_f15821ee64307ab2e689153599820a0c45e94ed2fbe163a71aeff9a61b17aa1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f15821ee64307ab2e689153599820a0c45e94ed2fbe163a71aeff9a61b17aa1b->leave($__internal_f15821ee64307ab2e689153599820a0c45e94ed2fbe163a71aeff9a61b17aa1b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c67218467b096b08e4ac8b28bf361f03dc5b2cfd9191cb81ef78a3e026e9e522 = $this->env->getExtension("native_profiler");
        $__internal_c67218467b096b08e4ac8b28bf361f03dc5b2cfd9191cb81ef78a3e026e9e522->enter($__internal_c67218467b096b08e4ac8b28bf361f03dc5b2cfd9191cb81ef78a3e026e9e522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c67218467b096b08e4ac8b28bf361f03dc5b2cfd9191cb81ef78a3e026e9e522->leave($__internal_c67218467b096b08e4ac8b28bf361f03dc5b2cfd9191cb81ef78a3e026e9e522_prof);

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
