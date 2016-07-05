<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d24f087bb6029f66318c078ea04ce9d7a60f3bf6a1e28f2a3e3bde5cad59e773 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_334e13850d9630a8070a7cdd19d1c9f4b48f9aacb4f8d8ae7e0e49ed25f90d63 = $this->env->getExtension("native_profiler");
        $__internal_334e13850d9630a8070a7cdd19d1c9f4b48f9aacb4f8d8ae7e0e49ed25f90d63->enter($__internal_334e13850d9630a8070a7cdd19d1c9f4b48f9aacb4f8d8ae7e0e49ed25f90d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_334e13850d9630a8070a7cdd19d1c9f4b48f9aacb4f8d8ae7e0e49ed25f90d63->leave($__internal_334e13850d9630a8070a7cdd19d1c9f4b48f9aacb4f8d8ae7e0e49ed25f90d63_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6be707af214e4b65270c2251bd71090f8a0f6a45d021f6c9d9db5ca68e81e598 = $this->env->getExtension("native_profiler");
        $__internal_6be707af214e4b65270c2251bd71090f8a0f6a45d021f6c9d9db5ca68e81e598->enter($__internal_6be707af214e4b65270c2251bd71090f8a0f6a45d021f6c9d9db5ca68e81e598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6be707af214e4b65270c2251bd71090f8a0f6a45d021f6c9d9db5ca68e81e598->leave($__internal_6be707af214e4b65270c2251bd71090f8a0f6a45d021f6c9d9db5ca68e81e598_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a97d767cd016c9e9ed7db6f8ff1d2c72fffe78ed1b10c89d0c84ea32a9b2a3b8 = $this->env->getExtension("native_profiler");
        $__internal_a97d767cd016c9e9ed7db6f8ff1d2c72fffe78ed1b10c89d0c84ea32a9b2a3b8->enter($__internal_a97d767cd016c9e9ed7db6f8ff1d2c72fffe78ed1b10c89d0c84ea32a9b2a3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a97d767cd016c9e9ed7db6f8ff1d2c72fffe78ed1b10c89d0c84ea32a9b2a3b8->leave($__internal_a97d767cd016c9e9ed7db6f8ff1d2c72fffe78ed1b10c89d0c84ea32a9b2a3b8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3cb15b3414214fc90e6190848fd9db0a5f4b68b3df1f6bafa3467b8411854a44 = $this->env->getExtension("native_profiler");
        $__internal_3cb15b3414214fc90e6190848fd9db0a5f4b68b3df1f6bafa3467b8411854a44->enter($__internal_3cb15b3414214fc90e6190848fd9db0a5f4b68b3df1f6bafa3467b8411854a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_3cb15b3414214fc90e6190848fd9db0a5f4b68b3df1f6bafa3467b8411854a44->leave($__internal_3cb15b3414214fc90e6190848fd9db0a5f4b68b3df1f6bafa3467b8411854a44_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
