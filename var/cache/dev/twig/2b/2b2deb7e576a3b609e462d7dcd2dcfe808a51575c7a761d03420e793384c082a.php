<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_55d93e2896641743c6c407412a740b5f126ff4e55691abf303423d7b4ab4c278 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d1d5b3949634e85379a0f7deeb22884c36d4501d832c95af5f20bc439010100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d1d5b3949634e85379a0f7deeb22884c36d4501d832c95af5f20bc439010100->enter($__internal_3d1d5b3949634e85379a0f7deeb22884c36d4501d832c95af5f20bc439010100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d54d17417cac6b478b54a01ee9af19cfaf9771001b972df6ff31df3d31a6f3fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d54d17417cac6b478b54a01ee9af19cfaf9771001b972df6ff31df3d31a6f3fd->enter($__internal_d54d17417cac6b478b54a01ee9af19cfaf9771001b972df6ff31df3d31a6f3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d1d5b3949634e85379a0f7deeb22884c36d4501d832c95af5f20bc439010100->leave($__internal_3d1d5b3949634e85379a0f7deeb22884c36d4501d832c95af5f20bc439010100_prof);

        
        $__internal_d54d17417cac6b478b54a01ee9af19cfaf9771001b972df6ff31df3d31a6f3fd->leave($__internal_d54d17417cac6b478b54a01ee9af19cfaf9771001b972df6ff31df3d31a6f3fd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_10a12901b57a94c37b333b6ed350219025237aa47d035a9c8066a86f35e1621b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10a12901b57a94c37b333b6ed350219025237aa47d035a9c8066a86f35e1621b->enter($__internal_10a12901b57a94c37b333b6ed350219025237aa47d035a9c8066a86f35e1621b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4b4933341e083758043093a751f34f5db8c6a1ebb0549e8c747c5f953af328c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4933341e083758043093a751f34f5db8c6a1ebb0549e8c747c5f953af328c8->enter($__internal_4b4933341e083758043093a751f34f5db8c6a1ebb0549e8c747c5f953af328c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4b4933341e083758043093a751f34f5db8c6a1ebb0549e8c747c5f953af328c8->leave($__internal_4b4933341e083758043093a751f34f5db8c6a1ebb0549e8c747c5f953af328c8_prof);

        
        $__internal_10a12901b57a94c37b333b6ed350219025237aa47d035a9c8066a86f35e1621b->leave($__internal_10a12901b57a94c37b333b6ed350219025237aa47d035a9c8066a86f35e1621b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f603252e22bbce30f4f285a963767a7e7d7eb2f8156eae5c42080f99e8da3746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f603252e22bbce30f4f285a963767a7e7d7eb2f8156eae5c42080f99e8da3746->enter($__internal_f603252e22bbce30f4f285a963767a7e7d7eb2f8156eae5c42080f99e8da3746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_542553ef9a3f10f2d7723698352db191a68bdb026ead0b0537eef99e679024a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_542553ef9a3f10f2d7723698352db191a68bdb026ead0b0537eef99e679024a0->enter($__internal_542553ef9a3f10f2d7723698352db191a68bdb026ead0b0537eef99e679024a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_542553ef9a3f10f2d7723698352db191a68bdb026ead0b0537eef99e679024a0->leave($__internal_542553ef9a3f10f2d7723698352db191a68bdb026ead0b0537eef99e679024a0_prof);

        
        $__internal_f603252e22bbce30f4f285a963767a7e7d7eb2f8156eae5c42080f99e8da3746->leave($__internal_f603252e22bbce30f4f285a963767a7e7d7eb2f8156eae5c42080f99e8da3746_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_91adfd7a5062463177aed9d43923fcc654167632d36ed259586446c75cef80d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91adfd7a5062463177aed9d43923fcc654167632d36ed259586446c75cef80d3->enter($__internal_91adfd7a5062463177aed9d43923fcc654167632d36ed259586446c75cef80d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_437a50ccc78c1dba3500df7794d7b6c0a1a4aed943baafeccbec2765bad9b59a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_437a50ccc78c1dba3500df7794d7b6c0a1a4aed943baafeccbec2765bad9b59a->enter($__internal_437a50ccc78c1dba3500df7794d7b6c0a1a4aed943baafeccbec2765bad9b59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_437a50ccc78c1dba3500df7794d7b6c0a1a4aed943baafeccbec2765bad9b59a->leave($__internal_437a50ccc78c1dba3500df7794d7b6c0a1a4aed943baafeccbec2765bad9b59a_prof);

        
        $__internal_91adfd7a5062463177aed9d43923fcc654167632d36ed259586446c75cef80d3->leave($__internal_91adfd7a5062463177aed9d43923fcc654167632d36ed259586446c75cef80d3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
