<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_6113a8bb79bfcca3bcb4d035a449b838ed85e54cfa7b87c92b0eaa8a032e1d75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c5295084b8e39bbc1b7325c60ce9ead655f735d7825380781336637dcab254ba = $this->env->getExtension("native_profiler");
        $__internal_c5295084b8e39bbc1b7325c60ce9ead655f735d7825380781336637dcab254ba->enter($__internal_c5295084b8e39bbc1b7325c60ce9ead655f735d7825380781336637dcab254ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5295084b8e39bbc1b7325c60ce9ead655f735d7825380781336637dcab254ba->leave($__internal_c5295084b8e39bbc1b7325c60ce9ead655f735d7825380781336637dcab254ba_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eff644bf0294651745bf8f30fb1fb0f886e5cff7a1a2e267d1ae4f8c68f3beb6 = $this->env->getExtension("native_profiler");
        $__internal_eff644bf0294651745bf8f30fb1fb0f886e5cff7a1a2e267d1ae4f8c68f3beb6->enter($__internal_eff644bf0294651745bf8f30fb1fb0f886e5cff7a1a2e267d1ae4f8c68f3beb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_eff644bf0294651745bf8f30fb1fb0f886e5cff7a1a2e267d1ae4f8c68f3beb6->leave($__internal_eff644bf0294651745bf8f30fb1fb0f886e5cff7a1a2e267d1ae4f8c68f3beb6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_634adf77dc3492a28df24ea9945203c63f4deae105031ba2fc9965e44dfdb99d = $this->env->getExtension("native_profiler");
        $__internal_634adf77dc3492a28df24ea9945203c63f4deae105031ba2fc9965e44dfdb99d->enter($__internal_634adf77dc3492a28df24ea9945203c63f4deae105031ba2fc9965e44dfdb99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_634adf77dc3492a28df24ea9945203c63f4deae105031ba2fc9965e44dfdb99d->leave($__internal_634adf77dc3492a28df24ea9945203c63f4deae105031ba2fc9965e44dfdb99d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c570abe448a05f77409080a93ce0a85d25402ca2835ad35be875a8dd3b8188bb = $this->env->getExtension("native_profiler");
        $__internal_c570abe448a05f77409080a93ce0a85d25402ca2835ad35be875a8dd3b8188bb->enter($__internal_c570abe448a05f77409080a93ce0a85d25402ca2835ad35be875a8dd3b8188bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c570abe448a05f77409080a93ce0a85d25402ca2835ad35be875a8dd3b8188bb->leave($__internal_c570abe448a05f77409080a93ce0a85d25402ca2835ad35be875a8dd3b8188bb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
