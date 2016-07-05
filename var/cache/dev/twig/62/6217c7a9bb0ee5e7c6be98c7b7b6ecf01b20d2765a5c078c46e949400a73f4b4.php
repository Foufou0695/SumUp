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
        $__internal_1b3bc30584791abf6c71f00ed35d01476a4f1031e7e5f80e942cfb5887445e5e = $this->env->getExtension("native_profiler");
        $__internal_1b3bc30584791abf6c71f00ed35d01476a4f1031e7e5f80e942cfb5887445e5e->enter($__internal_1b3bc30584791abf6c71f00ed35d01476a4f1031e7e5f80e942cfb5887445e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b3bc30584791abf6c71f00ed35d01476a4f1031e7e5f80e942cfb5887445e5e->leave($__internal_1b3bc30584791abf6c71f00ed35d01476a4f1031e7e5f80e942cfb5887445e5e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7b2e11a1e2a5055e6f8ac981ed26b582a6fb943cb14403f69006be5e6d2e0a0f = $this->env->getExtension("native_profiler");
        $__internal_7b2e11a1e2a5055e6f8ac981ed26b582a6fb943cb14403f69006be5e6d2e0a0f->enter($__internal_7b2e11a1e2a5055e6f8ac981ed26b582a6fb943cb14403f69006be5e6d2e0a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7b2e11a1e2a5055e6f8ac981ed26b582a6fb943cb14403f69006be5e6d2e0a0f->leave($__internal_7b2e11a1e2a5055e6f8ac981ed26b582a6fb943cb14403f69006be5e6d2e0a0f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_93e25db3ae0396ade3538be9ce31b8834a13813832b02f7f5776313ae6b8bdff = $this->env->getExtension("native_profiler");
        $__internal_93e25db3ae0396ade3538be9ce31b8834a13813832b02f7f5776313ae6b8bdff->enter($__internal_93e25db3ae0396ade3538be9ce31b8834a13813832b02f7f5776313ae6b8bdff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_93e25db3ae0396ade3538be9ce31b8834a13813832b02f7f5776313ae6b8bdff->leave($__internal_93e25db3ae0396ade3538be9ce31b8834a13813832b02f7f5776313ae6b8bdff_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ff31634984ba602f9c4980d5cd4f76f1307069e543909c6f1269fe7bc881f25d = $this->env->getExtension("native_profiler");
        $__internal_ff31634984ba602f9c4980d5cd4f76f1307069e543909c6f1269fe7bc881f25d->enter($__internal_ff31634984ba602f9c4980d5cd4f76f1307069e543909c6f1269fe7bc881f25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ff31634984ba602f9c4980d5cd4f76f1307069e543909c6f1269fe7bc881f25d->leave($__internal_ff31634984ba602f9c4980d5cd4f76f1307069e543909c6f1269fe7bc881f25d_prof);

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
