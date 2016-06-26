<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_01e961504d23f92082dab6b2da6fe007438a08698bf953c68edfab7a799bb564 extends Twig_Template
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
        $__internal_330a1f63bb8b6a99d0e61d2638f65b57519f5f5a42aa36eed41ec5fedc56cdf3 = $this->env->getExtension("native_profiler");
        $__internal_330a1f63bb8b6a99d0e61d2638f65b57519f5f5a42aa36eed41ec5fedc56cdf3->enter($__internal_330a1f63bb8b6a99d0e61d2638f65b57519f5f5a42aa36eed41ec5fedc56cdf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_330a1f63bb8b6a99d0e61d2638f65b57519f5f5a42aa36eed41ec5fedc56cdf3->leave($__internal_330a1f63bb8b6a99d0e61d2638f65b57519f5f5a42aa36eed41ec5fedc56cdf3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
