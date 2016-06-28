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
        $__internal_13546655767bee362b9c31354f7d17490138760cfa8ad088d560f7ae1a233e9c = $this->env->getExtension("native_profiler");
        $__internal_13546655767bee362b9c31354f7d17490138760cfa8ad088d560f7ae1a233e9c->enter($__internal_13546655767bee362b9c31354f7d17490138760cfa8ad088d560f7ae1a233e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13546655767bee362b9c31354f7d17490138760cfa8ad088d560f7ae1a233e9c->leave($__internal_13546655767bee362b9c31354f7d17490138760cfa8ad088d560f7ae1a233e9c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4d3d49dfead64a0244836d5a0542e46878008beda2f28641a1beec26b30303a9 = $this->env->getExtension("native_profiler");
        $__internal_4d3d49dfead64a0244836d5a0542e46878008beda2f28641a1beec26b30303a9->enter($__internal_4d3d49dfead64a0244836d5a0542e46878008beda2f28641a1beec26b30303a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4d3d49dfead64a0244836d5a0542e46878008beda2f28641a1beec26b30303a9->leave($__internal_4d3d49dfead64a0244836d5a0542e46878008beda2f28641a1beec26b30303a9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9aee26934ee3b06bffb7d20d9c19e1ab96b614d593640316e67b5a34a4c73beb = $this->env->getExtension("native_profiler");
        $__internal_9aee26934ee3b06bffb7d20d9c19e1ab96b614d593640316e67b5a34a4c73beb->enter($__internal_9aee26934ee3b06bffb7d20d9c19e1ab96b614d593640316e67b5a34a4c73beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9aee26934ee3b06bffb7d20d9c19e1ab96b614d593640316e67b5a34a4c73beb->leave($__internal_9aee26934ee3b06bffb7d20d9c19e1ab96b614d593640316e67b5a34a4c73beb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bc938c46e779e9749f9d20c16198a047ef5ced988328858b2eb12db5b9862910 = $this->env->getExtension("native_profiler");
        $__internal_bc938c46e779e9749f9d20c16198a047ef5ced988328858b2eb12db5b9862910->enter($__internal_bc938c46e779e9749f9d20c16198a047ef5ced988328858b2eb12db5b9862910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bc938c46e779e9749f9d20c16198a047ef5ced988328858b2eb12db5b9862910->leave($__internal_bc938c46e779e9749f9d20c16198a047ef5ced988328858b2eb12db5b9862910_prof);

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
