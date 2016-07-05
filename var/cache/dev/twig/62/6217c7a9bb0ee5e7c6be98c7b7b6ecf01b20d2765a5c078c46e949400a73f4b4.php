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
        $__internal_22f2a6b07ee811612a74c03852c3be21b0c10a204edcec20107d7cf3f0298699 = $this->env->getExtension("native_profiler");
        $__internal_22f2a6b07ee811612a74c03852c3be21b0c10a204edcec20107d7cf3f0298699->enter($__internal_22f2a6b07ee811612a74c03852c3be21b0c10a204edcec20107d7cf3f0298699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22f2a6b07ee811612a74c03852c3be21b0c10a204edcec20107d7cf3f0298699->leave($__internal_22f2a6b07ee811612a74c03852c3be21b0c10a204edcec20107d7cf3f0298699_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_76890ff905a6754aae5c8b9f42d48ec19394a82f1386f33c6e9c870b058af913 = $this->env->getExtension("native_profiler");
        $__internal_76890ff905a6754aae5c8b9f42d48ec19394a82f1386f33c6e9c870b058af913->enter($__internal_76890ff905a6754aae5c8b9f42d48ec19394a82f1386f33c6e9c870b058af913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_76890ff905a6754aae5c8b9f42d48ec19394a82f1386f33c6e9c870b058af913->leave($__internal_76890ff905a6754aae5c8b9f42d48ec19394a82f1386f33c6e9c870b058af913_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6c45312b860eac8bdadb5cbd6f3c6118ce6883cf49f68696262dec12169a8b45 = $this->env->getExtension("native_profiler");
        $__internal_6c45312b860eac8bdadb5cbd6f3c6118ce6883cf49f68696262dec12169a8b45->enter($__internal_6c45312b860eac8bdadb5cbd6f3c6118ce6883cf49f68696262dec12169a8b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6c45312b860eac8bdadb5cbd6f3c6118ce6883cf49f68696262dec12169a8b45->leave($__internal_6c45312b860eac8bdadb5cbd6f3c6118ce6883cf49f68696262dec12169a8b45_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5d2754661bfe74345e271f79666fb1a70d6206239293c46693c750adc377832e = $this->env->getExtension("native_profiler");
        $__internal_5d2754661bfe74345e271f79666fb1a70d6206239293c46693c750adc377832e->enter($__internal_5d2754661bfe74345e271f79666fb1a70d6206239293c46693c750adc377832e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5d2754661bfe74345e271f79666fb1a70d6206239293c46693c750adc377832e->leave($__internal_5d2754661bfe74345e271f79666fb1a70d6206239293c46693c750adc377832e_prof);

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
