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
        $__internal_e287266b51e247528055ada7eefcc2dcb7360cf865f31c9dc59ef629de81a72f = $this->env->getExtension("native_profiler");
        $__internal_e287266b51e247528055ada7eefcc2dcb7360cf865f31c9dc59ef629de81a72f->enter($__internal_e287266b51e247528055ada7eefcc2dcb7360cf865f31c9dc59ef629de81a72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e287266b51e247528055ada7eefcc2dcb7360cf865f31c9dc59ef629de81a72f->leave($__internal_e287266b51e247528055ada7eefcc2dcb7360cf865f31c9dc59ef629de81a72f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6fa253ceb433e1937313e344315f2c7d3c2ddc850c6a6df2a53318a182b244ac = $this->env->getExtension("native_profiler");
        $__internal_6fa253ceb433e1937313e344315f2c7d3c2ddc850c6a6df2a53318a182b244ac->enter($__internal_6fa253ceb433e1937313e344315f2c7d3c2ddc850c6a6df2a53318a182b244ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6fa253ceb433e1937313e344315f2c7d3c2ddc850c6a6df2a53318a182b244ac->leave($__internal_6fa253ceb433e1937313e344315f2c7d3c2ddc850c6a6df2a53318a182b244ac_prof);

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
