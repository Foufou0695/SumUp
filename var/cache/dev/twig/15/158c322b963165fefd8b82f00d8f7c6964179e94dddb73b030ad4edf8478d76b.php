<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_304f9ad76de5c60d983a65453e7142c09366a2019f3b772fd2542d2c3cbb0fef extends Twig_Template
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
        $__internal_be1f411a63a51d664a5fe8cc434b5bea0af318f6c4eebddf8f866c1e1dc87ed1 = $this->env->getExtension("native_profiler");
        $__internal_be1f411a63a51d664a5fe8cc434b5bea0af318f6c4eebddf8f866c1e1dc87ed1->enter($__internal_be1f411a63a51d664a5fe8cc434b5bea0af318f6c4eebddf8f866c1e1dc87ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_be1f411a63a51d664a5fe8cc434b5bea0af318f6c4eebddf8f866c1e1dc87ed1->leave($__internal_be1f411a63a51d664a5fe8cc434b5bea0af318f6c4eebddf8f866c1e1dc87ed1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
