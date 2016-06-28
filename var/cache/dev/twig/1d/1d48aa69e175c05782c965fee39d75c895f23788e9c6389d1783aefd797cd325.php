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
        $__internal_4bddd07596459f020d3f86a617faec3d2ab16aca5efe701b850ba374a79fb97a = $this->env->getExtension("native_profiler");
        $__internal_4bddd07596459f020d3f86a617faec3d2ab16aca5efe701b850ba374a79fb97a->enter($__internal_4bddd07596459f020d3f86a617faec3d2ab16aca5efe701b850ba374a79fb97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bddd07596459f020d3f86a617faec3d2ab16aca5efe701b850ba374a79fb97a->leave($__internal_4bddd07596459f020d3f86a617faec3d2ab16aca5efe701b850ba374a79fb97a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_023a7550e9ec8bb16504831724ecebbfc5177c295847160b0d7987060316182e = $this->env->getExtension("native_profiler");
        $__internal_023a7550e9ec8bb16504831724ecebbfc5177c295847160b0d7987060316182e->enter($__internal_023a7550e9ec8bb16504831724ecebbfc5177c295847160b0d7987060316182e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_023a7550e9ec8bb16504831724ecebbfc5177c295847160b0d7987060316182e->leave($__internal_023a7550e9ec8bb16504831724ecebbfc5177c295847160b0d7987060316182e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4431a4950209ad76e0107537a706d58641e2fe3d4c394eb6cddc466814355c64 = $this->env->getExtension("native_profiler");
        $__internal_4431a4950209ad76e0107537a706d58641e2fe3d4c394eb6cddc466814355c64->enter($__internal_4431a4950209ad76e0107537a706d58641e2fe3d4c394eb6cddc466814355c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4431a4950209ad76e0107537a706d58641e2fe3d4c394eb6cddc466814355c64->leave($__internal_4431a4950209ad76e0107537a706d58641e2fe3d4c394eb6cddc466814355c64_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_273c68a791494bc07f13eccdb349451cf8c7baead9fb049250233184a73a0875 = $this->env->getExtension("native_profiler");
        $__internal_273c68a791494bc07f13eccdb349451cf8c7baead9fb049250233184a73a0875->enter($__internal_273c68a791494bc07f13eccdb349451cf8c7baead9fb049250233184a73a0875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_273c68a791494bc07f13eccdb349451cf8c7baead9fb049250233184a73a0875->leave($__internal_273c68a791494bc07f13eccdb349451cf8c7baead9fb049250233184a73a0875_prof);

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
