<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ec4ba7b767728792344a723ea8de8d3d72ebae7a11a1495ed772792908cb5a8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_a96acfbba57d6bce5477f2e1586cf988efd2a5264d7da246911e3130fe942b33 = $this->env->getExtension("native_profiler");
        $__internal_a96acfbba57d6bce5477f2e1586cf988efd2a5264d7da246911e3130fe942b33->enter($__internal_a96acfbba57d6bce5477f2e1586cf988efd2a5264d7da246911e3130fe942b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a96acfbba57d6bce5477f2e1586cf988efd2a5264d7da246911e3130fe942b33->leave($__internal_a96acfbba57d6bce5477f2e1586cf988efd2a5264d7da246911e3130fe942b33_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_05ae76529eb0448a204448990825790b5e83ac5c635ac7c7903e9909d6537f32 = $this->env->getExtension("native_profiler");
        $__internal_05ae76529eb0448a204448990825790b5e83ac5c635ac7c7903e9909d6537f32->enter($__internal_05ae76529eb0448a204448990825790b5e83ac5c635ac7c7903e9909d6537f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_05ae76529eb0448a204448990825790b5e83ac5c635ac7c7903e9909d6537f32->leave($__internal_05ae76529eb0448a204448990825790b5e83ac5c635ac7c7903e9909d6537f32_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_da376ef99805b6f0e1a33d36064fa4506ed07270f11f51539b691eddccf4409a = $this->env->getExtension("native_profiler");
        $__internal_da376ef99805b6f0e1a33d36064fa4506ed07270f11f51539b691eddccf4409a->enter($__internal_da376ef99805b6f0e1a33d36064fa4506ed07270f11f51539b691eddccf4409a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_da376ef99805b6f0e1a33d36064fa4506ed07270f11f51539b691eddccf4409a->leave($__internal_da376ef99805b6f0e1a33d36064fa4506ed07270f11f51539b691eddccf4409a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
