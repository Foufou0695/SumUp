<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_cb490816b28424133e8aed5fe97342f0cfdce5023c3b37094bdc763c0e214663 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_c4c4e281a316a52cf5756b284cec2d15cf57a52a1bfa414bf1b4d4b8ec8b57d5 = $this->env->getExtension("native_profiler");
        $__internal_c4c4e281a316a52cf5756b284cec2d15cf57a52a1bfa414bf1b4d4b8ec8b57d5->enter($__internal_c4c4e281a316a52cf5756b284cec2d15cf57a52a1bfa414bf1b4d4b8ec8b57d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4c4e281a316a52cf5756b284cec2d15cf57a52a1bfa414bf1b4d4b8ec8b57d5->leave($__internal_c4c4e281a316a52cf5756b284cec2d15cf57a52a1bfa414bf1b4d4b8ec8b57d5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a90e7db7093a471c97251852c7cb2f2d7332f73dddc1535bca90d7134c7d0cbd = $this->env->getExtension("native_profiler");
        $__internal_a90e7db7093a471c97251852c7cb2f2d7332f73dddc1535bca90d7134c7d0cbd->enter($__internal_a90e7db7093a471c97251852c7cb2f2d7332f73dddc1535bca90d7134c7d0cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a90e7db7093a471c97251852c7cb2f2d7332f73dddc1535bca90d7134c7d0cbd->leave($__internal_a90e7db7093a471c97251852c7cb2f2d7332f73dddc1535bca90d7134c7d0cbd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_660742b0009d8b573f61c23d54e5d1b2851ea37276b0fe91678d181781902772 = $this->env->getExtension("native_profiler");
        $__internal_660742b0009d8b573f61c23d54e5d1b2851ea37276b0fe91678d181781902772->enter($__internal_660742b0009d8b573f61c23d54e5d1b2851ea37276b0fe91678d181781902772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_660742b0009d8b573f61c23d54e5d1b2851ea37276b0fe91678d181781902772->leave($__internal_660742b0009d8b573f61c23d54e5d1b2851ea37276b0fe91678d181781902772_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
