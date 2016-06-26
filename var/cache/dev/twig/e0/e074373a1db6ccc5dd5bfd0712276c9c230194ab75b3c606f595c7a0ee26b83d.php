<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_40c73b2946c0879915283a881e8042b27bd175bceac59c9ce7e7db090e105ef7 extends Twig_Template
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
        $__internal_0c4e6b146a8334f1f30e89f84b7228a8e9f728feac7d8d4ce6ae0a24820836f6 = $this->env->getExtension("native_profiler");
        $__internal_0c4e6b146a8334f1f30e89f84b7228a8e9f728feac7d8d4ce6ae0a24820836f6->enter($__internal_0c4e6b146a8334f1f30e89f84b7228a8e9f728feac7d8d4ce6ae0a24820836f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_0c4e6b146a8334f1f30e89f84b7228a8e9f728feac7d8d4ce6ae0a24820836f6->leave($__internal_0c4e6b146a8334f1f30e89f84b7228a8e9f728feac7d8d4ce6ae0a24820836f6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
