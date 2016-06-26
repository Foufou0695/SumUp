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
        $__internal_5ab340cf1f0af1d2f2340f6007e34c6c1161a0083847fda508bdf493dfb13d5e = $this->env->getExtension("native_profiler");
        $__internal_5ab340cf1f0af1d2f2340f6007e34c6c1161a0083847fda508bdf493dfb13d5e->enter($__internal_5ab340cf1f0af1d2f2340f6007e34c6c1161a0083847fda508bdf493dfb13d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ab340cf1f0af1d2f2340f6007e34c6c1161a0083847fda508bdf493dfb13d5e->leave($__internal_5ab340cf1f0af1d2f2340f6007e34c6c1161a0083847fda508bdf493dfb13d5e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6bb80b43d0b1bef0807e17b685f039a5a52485354f60c6a57f60ef2b1769da7 = $this->env->getExtension("native_profiler");
        $__internal_f6bb80b43d0b1bef0807e17b685f039a5a52485354f60c6a57f60ef2b1769da7->enter($__internal_f6bb80b43d0b1bef0807e17b685f039a5a52485354f60c6a57f60ef2b1769da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f6bb80b43d0b1bef0807e17b685f039a5a52485354f60c6a57f60ef2b1769da7->leave($__internal_f6bb80b43d0b1bef0807e17b685f039a5a52485354f60c6a57f60ef2b1769da7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b5cde59bc916966354d2989e5933fd1963afb760ecfc8e0e553192c05f1b874 = $this->env->getExtension("native_profiler");
        $__internal_1b5cde59bc916966354d2989e5933fd1963afb760ecfc8e0e553192c05f1b874->enter($__internal_1b5cde59bc916966354d2989e5933fd1963afb760ecfc8e0e553192c05f1b874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1b5cde59bc916966354d2989e5933fd1963afb760ecfc8e0e553192c05f1b874->leave($__internal_1b5cde59bc916966354d2989e5933fd1963afb760ecfc8e0e553192c05f1b874_prof);

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
