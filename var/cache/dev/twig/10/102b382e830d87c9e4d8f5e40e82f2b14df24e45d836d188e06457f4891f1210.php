<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_9f5e357e14c4f22dc6b272c06e5c105bdb60db71a1e5d54d8b07fc890fa1e9ca extends Twig_Template
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
        $__internal_7f99a325ba98902b38a26216462e1e8fd9210c402376a3933ba770d32623a366 = $this->env->getExtension("native_profiler");
        $__internal_7f99a325ba98902b38a26216462e1e8fd9210c402376a3933ba770d32623a366->enter($__internal_7f99a325ba98902b38a26216462e1e8fd9210c402376a3933ba770d32623a366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_7f99a325ba98902b38a26216462e1e8fd9210c402376a3933ba770d32623a366->leave($__internal_7f99a325ba98902b38a26216462e1e8fd9210c402376a3933ba770d32623a366_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
