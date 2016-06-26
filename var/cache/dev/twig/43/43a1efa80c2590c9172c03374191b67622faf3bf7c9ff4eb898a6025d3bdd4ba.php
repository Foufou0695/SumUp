<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_044bdf40d48de9823ec356e0ef22b3f593f76b97a5776e971f78a16907cc7d4b extends Twig_Template
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
        $__internal_e6aa6c538746906bc938399b5c0347ef5cc155764a7c909b78674ed651888e98 = $this->env->getExtension("native_profiler");
        $__internal_e6aa6c538746906bc938399b5c0347ef5cc155764a7c909b78674ed651888e98->enter($__internal_e6aa6c538746906bc938399b5c0347ef5cc155764a7c909b78674ed651888e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e6aa6c538746906bc938399b5c0347ef5cc155764a7c909b78674ed651888e98->leave($__internal_e6aa6c538746906bc938399b5c0347ef5cc155764a7c909b78674ed651888e98_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
