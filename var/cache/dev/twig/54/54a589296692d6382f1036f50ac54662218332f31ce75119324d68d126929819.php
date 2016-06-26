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
        $__internal_a0ae188297279c996702093876ae742f265436a4edd2948b645f38b82ac7da97 = $this->env->getExtension("native_profiler");
        $__internal_a0ae188297279c996702093876ae742f265436a4edd2948b645f38b82ac7da97->enter($__internal_a0ae188297279c996702093876ae742f265436a4edd2948b645f38b82ac7da97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0ae188297279c996702093876ae742f265436a4edd2948b645f38b82ac7da97->leave($__internal_a0ae188297279c996702093876ae742f265436a4edd2948b645f38b82ac7da97_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1233b0d56e1e24bf2eadcd648f80aff02ddeaab71775fd2a49cef0d73801a44e = $this->env->getExtension("native_profiler");
        $__internal_1233b0d56e1e24bf2eadcd648f80aff02ddeaab71775fd2a49cef0d73801a44e->enter($__internal_1233b0d56e1e24bf2eadcd648f80aff02ddeaab71775fd2a49cef0d73801a44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1233b0d56e1e24bf2eadcd648f80aff02ddeaab71775fd2a49cef0d73801a44e->leave($__internal_1233b0d56e1e24bf2eadcd648f80aff02ddeaab71775fd2a49cef0d73801a44e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ea06cf9cabb013af4ddb8cff367ee74cb2656fa8fa87a8014273b5518b49cbc = $this->env->getExtension("native_profiler");
        $__internal_3ea06cf9cabb013af4ddb8cff367ee74cb2656fa8fa87a8014273b5518b49cbc->enter($__internal_3ea06cf9cabb013af4ddb8cff367ee74cb2656fa8fa87a8014273b5518b49cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3ea06cf9cabb013af4ddb8cff367ee74cb2656fa8fa87a8014273b5518b49cbc->leave($__internal_3ea06cf9cabb013af4ddb8cff367ee74cb2656fa8fa87a8014273b5518b49cbc_prof);

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
