<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_27e34b1657ed707f44f48370440b928dd65222b9d7aeb764ee77b7d24ec901f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40a56f1b382c50abf12e7a76cdae6927c7a1fc68a81fef1a960942ba630433f9 = $this->env->getExtension("native_profiler");
        $__internal_40a56f1b382c50abf12e7a76cdae6927c7a1fc68a81fef1a960942ba630433f9->enter($__internal_40a56f1b382c50abf12e7a76cdae6927c7a1fc68a81fef1a960942ba630433f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_40a56f1b382c50abf12e7a76cdae6927c7a1fc68a81fef1a960942ba630433f9->leave($__internal_40a56f1b382c50abf12e7a76cdae6927c7a1fc68a81fef1a960942ba630433f9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
