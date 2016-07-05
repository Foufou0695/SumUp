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
        $__internal_fe5fd1c161f9a010ba61dd56e5d1f3ef55a15b165d29adebb2710ba283010eeb = $this->env->getExtension("native_profiler");
        $__internal_fe5fd1c161f9a010ba61dd56e5d1f3ef55a15b165d29adebb2710ba283010eeb->enter($__internal_fe5fd1c161f9a010ba61dd56e5d1f3ef55a15b165d29adebb2710ba283010eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe5fd1c161f9a010ba61dd56e5d1f3ef55a15b165d29adebb2710ba283010eeb->leave($__internal_fe5fd1c161f9a010ba61dd56e5d1f3ef55a15b165d29adebb2710ba283010eeb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5765511c67464032a27b36d2165f4051fbe7737fdbcf7c66e37e6f29e5857c06 = $this->env->getExtension("native_profiler");
        $__internal_5765511c67464032a27b36d2165f4051fbe7737fdbcf7c66e37e6f29e5857c06->enter($__internal_5765511c67464032a27b36d2165f4051fbe7737fdbcf7c66e37e6f29e5857c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5765511c67464032a27b36d2165f4051fbe7737fdbcf7c66e37e6f29e5857c06->leave($__internal_5765511c67464032a27b36d2165f4051fbe7737fdbcf7c66e37e6f29e5857c06_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a208b0210a16460cf4aae3d813c047440b919da2e6b2d756f6d4a822e4dbaeaf = $this->env->getExtension("native_profiler");
        $__internal_a208b0210a16460cf4aae3d813c047440b919da2e6b2d756f6d4a822e4dbaeaf->enter($__internal_a208b0210a16460cf4aae3d813c047440b919da2e6b2d756f6d4a822e4dbaeaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a208b0210a16460cf4aae3d813c047440b919da2e6b2d756f6d4a822e4dbaeaf->leave($__internal_a208b0210a16460cf4aae3d813c047440b919da2e6b2d756f6d4a822e4dbaeaf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fc64fcec9dcf14704d4d7a3351de065a69e96f4d2ff4a582c4e8d8ca1f40c5be = $this->env->getExtension("native_profiler");
        $__internal_fc64fcec9dcf14704d4d7a3351de065a69e96f4d2ff4a582c4e8d8ca1f40c5be->enter($__internal_fc64fcec9dcf14704d4d7a3351de065a69e96f4d2ff4a582c4e8d8ca1f40c5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fc64fcec9dcf14704d4d7a3351de065a69e96f4d2ff4a582c4e8d8ca1f40c5be->leave($__internal_fc64fcec9dcf14704d4d7a3351de065a69e96f4d2ff4a582c4e8d8ca1f40c5be_prof);

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
