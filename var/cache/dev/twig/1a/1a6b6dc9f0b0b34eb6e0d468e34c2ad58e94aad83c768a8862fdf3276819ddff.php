<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_563fbbb72106f899faf59bcbab5ac5b450cb6df5c377e4498f5f316b1ba1100e extends Twig_Template
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
        $__internal_6c73f2c55747e8b850a60cf1f2907fa0d11a8f34b58ecb0648e95c6653161e89 = $this->env->getExtension("native_profiler");
        $__internal_6c73f2c55747e8b850a60cf1f2907fa0d11a8f34b58ecb0648e95c6653161e89->enter($__internal_6c73f2c55747e8b850a60cf1f2907fa0d11a8f34b58ecb0648e95c6653161e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_6c73f2c55747e8b850a60cf1f2907fa0d11a8f34b58ecb0648e95c6653161e89->leave($__internal_6c73f2c55747e8b850a60cf1f2907fa0d11a8f34b58ecb0648e95c6653161e89_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
