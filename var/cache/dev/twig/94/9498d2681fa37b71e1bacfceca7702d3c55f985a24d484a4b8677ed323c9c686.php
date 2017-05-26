<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_05a564eec39c35c5c48be23859762d1e5b5bee636f116dbb6ff9246c4e41e0b8 extends Twig_Template
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
        $__internal_c77ef5e03133148738ec9099b6544a8cfe25f47ec8bb4120043426068ed99e6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c77ef5e03133148738ec9099b6544a8cfe25f47ec8bb4120043426068ed99e6b->enter($__internal_c77ef5e03133148738ec9099b6544a8cfe25f47ec8bb4120043426068ed99e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_aadc84c32054dc52eb527086a256133fb9e93da9202e87907b0868c01298f06b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aadc84c32054dc52eb527086a256133fb9e93da9202e87907b0868c01298f06b->enter($__internal_aadc84c32054dc52eb527086a256133fb9e93da9202e87907b0868c01298f06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c77ef5e03133148738ec9099b6544a8cfe25f47ec8bb4120043426068ed99e6b->leave($__internal_c77ef5e03133148738ec9099b6544a8cfe25f47ec8bb4120043426068ed99e6b_prof);

        
        $__internal_aadc84c32054dc52eb527086a256133fb9e93da9202e87907b0868c01298f06b->leave($__internal_aadc84c32054dc52eb527086a256133fb9e93da9202e87907b0868c01298f06b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c7e4c9f4611504844b3f224cb7b1cef8aaa70a232761cf7958fda4baa7539428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7e4c9f4611504844b3f224cb7b1cef8aaa70a232761cf7958fda4baa7539428->enter($__internal_c7e4c9f4611504844b3f224cb7b1cef8aaa70a232761cf7958fda4baa7539428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d783c293f562817937f6715db61252a9633336cfcf2c1dbc5ae13bc0790c3375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d783c293f562817937f6715db61252a9633336cfcf2c1dbc5ae13bc0790c3375->enter($__internal_d783c293f562817937f6715db61252a9633336cfcf2c1dbc5ae13bc0790c3375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d783c293f562817937f6715db61252a9633336cfcf2c1dbc5ae13bc0790c3375->leave($__internal_d783c293f562817937f6715db61252a9633336cfcf2c1dbc5ae13bc0790c3375_prof);

        
        $__internal_c7e4c9f4611504844b3f224cb7b1cef8aaa70a232761cf7958fda4baa7539428->leave($__internal_c7e4c9f4611504844b3f224cb7b1cef8aaa70a232761cf7958fda4baa7539428_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
