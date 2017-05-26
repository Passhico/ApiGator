<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_fcd982eb7387a59cb963929feb26864d75843ff9de9d3e268f62fd79720150f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4960536b78be3a7ed464e0b60d47d703af652b04fc6298ce22b01ff562624a36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4960536b78be3a7ed464e0b60d47d703af652b04fc6298ce22b01ff562624a36->enter($__internal_4960536b78be3a7ed464e0b60d47d703af652b04fc6298ce22b01ff562624a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_1c256cc1fba1b30288e68400aeddd96eeede76f95263477485651ce02ee021d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c256cc1fba1b30288e68400aeddd96eeede76f95263477485651ce02ee021d7->enter($__internal_1c256cc1fba1b30288e68400aeddd96eeede76f95263477485651ce02ee021d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4960536b78be3a7ed464e0b60d47d703af652b04fc6298ce22b01ff562624a36->leave($__internal_4960536b78be3a7ed464e0b60d47d703af652b04fc6298ce22b01ff562624a36_prof);

        
        $__internal_1c256cc1fba1b30288e68400aeddd96eeede76f95263477485651ce02ee021d7->leave($__internal_1c256cc1fba1b30288e68400aeddd96eeede76f95263477485651ce02ee021d7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_97cd3c81bfbb5640f2abb77d43189d5528071b0d48832d620e56f0fc01c193ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97cd3c81bfbb5640f2abb77d43189d5528071b0d48832d620e56f0fc01c193ae->enter($__internal_97cd3c81bfbb5640f2abb77d43189d5528071b0d48832d620e56f0fc01c193ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7f60c7324e512d7173e58a3ec5c161de9bded286951e55458e08b483544dbe1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f60c7324e512d7173e58a3ec5c161de9bded286951e55458e08b483544dbe1d->enter($__internal_7f60c7324e512d7173e58a3ec5c161de9bded286951e55458e08b483544dbe1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_7f60c7324e512d7173e58a3ec5c161de9bded286951e55458e08b483544dbe1d->leave($__internal_7f60c7324e512d7173e58a3ec5c161de9bded286951e55458e08b483544dbe1d_prof);

        
        $__internal_97cd3c81bfbb5640f2abb77d43189d5528071b0d48832d620e56f0fc01c193ae->leave($__internal_97cd3c81bfbb5640f2abb77d43189d5528071b0d48832d620e56f0fc01c193ae_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff95730f54c7c31da244b2bf8a2bc9263e56b5829d26eeacb6e5e5b03518e5fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff95730f54c7c31da244b2bf8a2bc9263e56b5829d26eeacb6e5e5b03518e5fc->enter($__internal_ff95730f54c7c31da244b2bf8a2bc9263e56b5829d26eeacb6e5e5b03518e5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0459ef1d846d446c723399e89ca35ebe2b9dae115ef9a87405c6b706c9232e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0459ef1d846d446c723399e89ca35ebe2b9dae115ef9a87405c6b706c9232e1e->enter($__internal_0459ef1d846d446c723399e89ca35ebe2b9dae115ef9a87405c6b706c9232e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_0459ef1d846d446c723399e89ca35ebe2b9dae115ef9a87405c6b706c9232e1e->leave($__internal_0459ef1d846d446c723399e89ca35ebe2b9dae115ef9a87405c6b706c9232e1e_prof);

        
        $__internal_ff95730f54c7c31da244b2bf8a2bc9263e56b5829d26eeacb6e5e5b03518e5fc->leave($__internal_ff95730f54c7c31da244b2bf8a2bc9263e56b5829d26eeacb6e5e5b03518e5fc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
