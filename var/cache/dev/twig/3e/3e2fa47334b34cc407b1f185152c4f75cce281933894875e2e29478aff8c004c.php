<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_0c2fd7a9a583b54cbb09d9981e9b1e40dc1144c94308235ceb338bd193fc6131 extends Twig_Template
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
        $__internal_f48be23efb19f5c2ab7e9a9486f9693a3568937fde35da34fcf1fbf0186e02c4 = $this->env->getExtension("native_profiler");
        $__internal_f48be23efb19f5c2ab7e9a9486f9693a3568937fde35da34fcf1fbf0186e02c4->enter($__internal_f48be23efb19f5c2ab7e9a9486f9693a3568937fde35da34fcf1fbf0186e02c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_f48be23efb19f5c2ab7e9a9486f9693a3568937fde35da34fcf1fbf0186e02c4->leave($__internal_f48be23efb19f5c2ab7e9a9486f9693a3568937fde35da34fcf1fbf0186e02c4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
