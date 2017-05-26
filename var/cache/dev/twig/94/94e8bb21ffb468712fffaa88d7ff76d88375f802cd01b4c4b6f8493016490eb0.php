<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_217a6c6b9fa4c8f9a56b9c89ebc6bbf6a280f3473018de6a3416905e0a38efd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_4bcba2e0abe8e1e832ef3b10d5b37f30895d9da658078696f81dd58b0f5009bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bcba2e0abe8e1e832ef3b10d5b37f30895d9da658078696f81dd58b0f5009bc->enter($__internal_4bcba2e0abe8e1e832ef3b10d5b37f30895d9da658078696f81dd58b0f5009bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_8c93474fe0bd7de5cc905c052ed6d1774cf891ebf0427ba83a2c16ceda145e92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c93474fe0bd7de5cc905c052ed6d1774cf891ebf0427ba83a2c16ceda145e92->enter($__internal_8c93474fe0bd7de5cc905c052ed6d1774cf891ebf0427ba83a2c16ceda145e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bcba2e0abe8e1e832ef3b10d5b37f30895d9da658078696f81dd58b0f5009bc->leave($__internal_4bcba2e0abe8e1e832ef3b10d5b37f30895d9da658078696f81dd58b0f5009bc_prof);

        
        $__internal_8c93474fe0bd7de5cc905c052ed6d1774cf891ebf0427ba83a2c16ceda145e92->leave($__internal_8c93474fe0bd7de5cc905c052ed6d1774cf891ebf0427ba83a2c16ceda145e92_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6c4312f337cfa5e310eef2924545cf2957621b46739c87bc870e3b3cd70e407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6c4312f337cfa5e310eef2924545cf2957621b46739c87bc870e3b3cd70e407->enter($__internal_c6c4312f337cfa5e310eef2924545cf2957621b46739c87bc870e3b3cd70e407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_60db85ea04fb465a859c2cbcab71388e5c25d491703bb76a8dbd9a050d445155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60db85ea04fb465a859c2cbcab71388e5c25d491703bb76a8dbd9a050d445155->enter($__internal_60db85ea04fb465a859c2cbcab71388e5c25d491703bb76a8dbd9a050d445155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_60db85ea04fb465a859c2cbcab71388e5c25d491703bb76a8dbd9a050d445155->leave($__internal_60db85ea04fb465a859c2cbcab71388e5c25d491703bb76a8dbd9a050d445155_prof);

        
        $__internal_c6c4312f337cfa5e310eef2924545cf2957621b46739c87bc870e3b3cd70e407->leave($__internal_c6c4312f337cfa5e310eef2924545cf2957621b46739c87bc870e3b3cd70e407_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_439299f0fdba06195dc2c13d9b239bbf14882976a8294b5f5344c169dd93fd93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_439299f0fdba06195dc2c13d9b239bbf14882976a8294b5f5344c169dd93fd93->enter($__internal_439299f0fdba06195dc2c13d9b239bbf14882976a8294b5f5344c169dd93fd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ccd598960b54f42c08427abdf02a1549b6e2acab2837054fc5803fa4b989dda8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccd598960b54f42c08427abdf02a1549b6e2acab2837054fc5803fa4b989dda8->enter($__internal_ccd598960b54f42c08427abdf02a1549b6e2acab2837054fc5803fa4b989dda8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ccd598960b54f42c08427abdf02a1549b6e2acab2837054fc5803fa4b989dda8->leave($__internal_ccd598960b54f42c08427abdf02a1549b6e2acab2837054fc5803fa4b989dda8_prof);

        
        $__internal_439299f0fdba06195dc2c13d9b239bbf14882976a8294b5f5344c169dd93fd93->leave($__internal_439299f0fdba06195dc2c13d9b239bbf14882976a8294b5f5344c169dd93fd93_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
