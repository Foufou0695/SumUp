<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f2bf9978813289c8cffef67471d25e7c30d4af0c728eec999d6d960d6f2353f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee9b75fdea262f5e71fee88152f6d346352e6511fdca5f82f6cff099afc8a9af = $this->env->getExtension("native_profiler");
        $__internal_ee9b75fdea262f5e71fee88152f6d346352e6511fdca5f82f6cff099afc8a9af->enter($__internal_ee9b75fdea262f5e71fee88152f6d346352e6511fdca5f82f6cff099afc8a9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ee9b75fdea262f5e71fee88152f6d346352e6511fdca5f82f6cff099afc8a9af->leave($__internal_ee9b75fdea262f5e71fee88152f6d346352e6511fdca5f82f6cff099afc8a9af_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1f0f8b88d0f25e89f1fedb47f450371767bf421be904bb65b084db4a8f3d50bf = $this->env->getExtension("native_profiler");
        $__internal_1f0f8b88d0f25e89f1fedb47f450371767bf421be904bb65b084db4a8f3d50bf->enter($__internal_1f0f8b88d0f25e89f1fedb47f450371767bf421be904bb65b084db4a8f3d50bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1f0f8b88d0f25e89f1fedb47f450371767bf421be904bb65b084db4a8f3d50bf->leave($__internal_1f0f8b88d0f25e89f1fedb47f450371767bf421be904bb65b084db4a8f3d50bf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
