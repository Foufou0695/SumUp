<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_bcbe45580cef78de219025f4e8d946bfd01e58e86a9687e361db2087f170bbf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_50b91b263361835d858207c9639bffc29daa4853655271279408d173ac2f0e0e = $this->env->getExtension("native_profiler");
        $__internal_50b91b263361835d858207c9639bffc29daa4853655271279408d173ac2f0e0e->enter($__internal_50b91b263361835d858207c9639bffc29daa4853655271279408d173ac2f0e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50b91b263361835d858207c9639bffc29daa4853655271279408d173ac2f0e0e->leave($__internal_50b91b263361835d858207c9639bffc29daa4853655271279408d173ac2f0e0e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3d85fab3a7029137bb23a28ab098b236c6dbdf1b783cd171bcd8cf7d3d205571 = $this->env->getExtension("native_profiler");
        $__internal_3d85fab3a7029137bb23a28ab098b236c6dbdf1b783cd171bcd8cf7d3d205571->enter($__internal_3d85fab3a7029137bb23a28ab098b236c6dbdf1b783cd171bcd8cf7d3d205571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3d85fab3a7029137bb23a28ab098b236c6dbdf1b783cd171bcd8cf7d3d205571->leave($__internal_3d85fab3a7029137bb23a28ab098b236c6dbdf1b783cd171bcd8cf7d3d205571_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9054c440ac872d5525148b69a63ac2e58d10c7311db1736c3e0d086ab13080e8 = $this->env->getExtension("native_profiler");
        $__internal_9054c440ac872d5525148b69a63ac2e58d10c7311db1736c3e0d086ab13080e8->enter($__internal_9054c440ac872d5525148b69a63ac2e58d10c7311db1736c3e0d086ab13080e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9054c440ac872d5525148b69a63ac2e58d10c7311db1736c3e0d086ab13080e8->leave($__internal_9054c440ac872d5525148b69a63ac2e58d10c7311db1736c3e0d086ab13080e8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_474d4b127a923034a62294039f5ecf14e94f60508656ea607c4ba41be843b0ec = $this->env->getExtension("native_profiler");
        $__internal_474d4b127a923034a62294039f5ecf14e94f60508656ea607c4ba41be843b0ec->enter($__internal_474d4b127a923034a62294039f5ecf14e94f60508656ea607c4ba41be843b0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_474d4b127a923034a62294039f5ecf14e94f60508656ea607c4ba41be843b0ec->leave($__internal_474d4b127a923034a62294039f5ecf14e94f60508656ea607c4ba41be843b0ec_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
