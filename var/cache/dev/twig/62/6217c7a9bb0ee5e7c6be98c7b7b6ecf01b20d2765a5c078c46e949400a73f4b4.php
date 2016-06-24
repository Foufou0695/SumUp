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
        $__internal_f26dbe20491c2ba1559121f69ba8a38d9c3d67547448ebe5ba2424df9290a7ab = $this->env->getExtension("native_profiler");
        $__internal_f26dbe20491c2ba1559121f69ba8a38d9c3d67547448ebe5ba2424df9290a7ab->enter($__internal_f26dbe20491c2ba1559121f69ba8a38d9c3d67547448ebe5ba2424df9290a7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f26dbe20491c2ba1559121f69ba8a38d9c3d67547448ebe5ba2424df9290a7ab->leave($__internal_f26dbe20491c2ba1559121f69ba8a38d9c3d67547448ebe5ba2424df9290a7ab_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b595b55a4de15b68525886ed0e035353f25a4b65d45b43ece375fe6149cd140 = $this->env->getExtension("native_profiler");
        $__internal_3b595b55a4de15b68525886ed0e035353f25a4b65d45b43ece375fe6149cd140->enter($__internal_3b595b55a4de15b68525886ed0e035353f25a4b65d45b43ece375fe6149cd140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3b595b55a4de15b68525886ed0e035353f25a4b65d45b43ece375fe6149cd140->leave($__internal_3b595b55a4de15b68525886ed0e035353f25a4b65d45b43ece375fe6149cd140_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0d8141e4e5889136df54a5b2c5c1a85527fd45536808aa3e876d0202354c6e4e = $this->env->getExtension("native_profiler");
        $__internal_0d8141e4e5889136df54a5b2c5c1a85527fd45536808aa3e876d0202354c6e4e->enter($__internal_0d8141e4e5889136df54a5b2c5c1a85527fd45536808aa3e876d0202354c6e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0d8141e4e5889136df54a5b2c5c1a85527fd45536808aa3e876d0202354c6e4e->leave($__internal_0d8141e4e5889136df54a5b2c5c1a85527fd45536808aa3e876d0202354c6e4e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_10207f9513ed7db68bd7f3bd30fad1c49cf262328f077dd523c041ec77749974 = $this->env->getExtension("native_profiler");
        $__internal_10207f9513ed7db68bd7f3bd30fad1c49cf262328f077dd523c041ec77749974->enter($__internal_10207f9513ed7db68bd7f3bd30fad1c49cf262328f077dd523c041ec77749974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_10207f9513ed7db68bd7f3bd30fad1c49cf262328f077dd523c041ec77749974->leave($__internal_10207f9513ed7db68bd7f3bd30fad1c49cf262328f077dd523c041ec77749974_prof);

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
