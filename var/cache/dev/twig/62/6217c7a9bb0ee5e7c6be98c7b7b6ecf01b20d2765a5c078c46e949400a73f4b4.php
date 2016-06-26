<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3399864ac726ffa59a0cdfc4f69778d97ca7a33fd8799b2231eca3c92ada71df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48765fc43892874936ed6a5ee944bc518403e1a1305d9bf26b229b4724384c27 = $this->env->getExtension("native_profiler");
        $__internal_48765fc43892874936ed6a5ee944bc518403e1a1305d9bf26b229b4724384c27->enter($__internal_48765fc43892874936ed6a5ee944bc518403e1a1305d9bf26b229b4724384c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48765fc43892874936ed6a5ee944bc518403e1a1305d9bf26b229b4724384c27->leave($__internal_48765fc43892874936ed6a5ee944bc518403e1a1305d9bf26b229b4724384c27_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ccc4c10ef56cdc2d4ab03601fc43f29a8e2a6328b9cea972475e8bb95ebe4f0a = $this->env->getExtension("native_profiler");
        $__internal_ccc4c10ef56cdc2d4ab03601fc43f29a8e2a6328b9cea972475e8bb95ebe4f0a->enter($__internal_ccc4c10ef56cdc2d4ab03601fc43f29a8e2a6328b9cea972475e8bb95ebe4f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ccc4c10ef56cdc2d4ab03601fc43f29a8e2a6328b9cea972475e8bb95ebe4f0a->leave($__internal_ccc4c10ef56cdc2d4ab03601fc43f29a8e2a6328b9cea972475e8bb95ebe4f0a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d7e7ea579a9ea2f1641599cd1e91219808c95e844b788479c5383dfb9af99036 = $this->env->getExtension("native_profiler");
        $__internal_d7e7ea579a9ea2f1641599cd1e91219808c95e844b788479c5383dfb9af99036->enter($__internal_d7e7ea579a9ea2f1641599cd1e91219808c95e844b788479c5383dfb9af99036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d7e7ea579a9ea2f1641599cd1e91219808c95e844b788479c5383dfb9af99036->leave($__internal_d7e7ea579a9ea2f1641599cd1e91219808c95e844b788479c5383dfb9af99036_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d203fd26a255e29e3230a5da5fc09212ad314c419fa079926e5e5b8d5d0533b5 = $this->env->getExtension("native_profiler");
        $__internal_d203fd26a255e29e3230a5da5fc09212ad314c419fa079926e5e5b8d5d0533b5->enter($__internal_d203fd26a255e29e3230a5da5fc09212ad314c419fa079926e5e5b8d5d0533b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d203fd26a255e29e3230a5da5fc09212ad314c419fa079926e5e5b8d5d0533b5->leave($__internal_d203fd26a255e29e3230a5da5fc09212ad314c419fa079926e5e5b8d5d0533b5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
