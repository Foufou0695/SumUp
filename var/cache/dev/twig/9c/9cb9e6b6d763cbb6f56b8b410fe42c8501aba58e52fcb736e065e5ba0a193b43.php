<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_547fd49179d099e97cb78eccde8af1057ef50e30352c9b86151cbf6f9486dbb5 extends Twig_Template
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
        $__internal_3f0e6edb9338eb2475542cd88f63c47f8bf0b177d81737ad7c808d33f51e4577 = $this->env->getExtension("native_profiler");
        $__internal_3f0e6edb9338eb2475542cd88f63c47f8bf0b177d81737ad7c808d33f51e4577->enter($__internal_3f0e6edb9338eb2475542cd88f63c47f8bf0b177d81737ad7c808d33f51e4577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_3f0e6edb9338eb2475542cd88f63c47f8bf0b177d81737ad7c808d33f51e4577->leave($__internal_3f0e6edb9338eb2475542cd88f63c47f8bf0b177d81737ad7c808d33f51e4577_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
