<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_6f45bdbbd8c83e65553e41b26e75dad777a0ca8b38d88944d6153fbfeaa0658b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fb41f63c385d6dfaf5d5eec997e67c8b88f67e0e23242f57ddead5901c3016f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fb41f63c385d6dfaf5d5eec997e67c8b88f67e0e23242f57ddead5901c3016f->enter($__internal_9fb41f63c385d6dfaf5d5eec997e67c8b88f67e0e23242f57ddead5901c3016f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_1bce561409a4e6ae81e5692234e780d53bb8b847005cc533f66933865756878d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bce561409a4e6ae81e5692234e780d53bb8b847005cc533f66933865756878d->enter($__internal_1bce561409a4e6ae81e5692234e780d53bb8b847005cc533f66933865756878d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fb41f63c385d6dfaf5d5eec997e67c8b88f67e0e23242f57ddead5901c3016f->leave($__internal_9fb41f63c385d6dfaf5d5eec997e67c8b88f67e0e23242f57ddead5901c3016f_prof);

        
        $__internal_1bce561409a4e6ae81e5692234e780d53bb8b847005cc533f66933865756878d->leave($__internal_1bce561409a4e6ae81e5692234e780d53bb8b847005cc533f66933865756878d_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_39558013e04c3e67d5b045d0824f894cd711ba69232b08c479cec576e10510d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39558013e04c3e67d5b045d0824f894cd711ba69232b08c479cec576e10510d7->enter($__internal_39558013e04c3e67d5b045d0824f894cd711ba69232b08c479cec576e10510d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_f6a0c9c42de04f01e1b5911bce9fb884d0080c1ef760df4bd62fdaad1825e889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a0c9c42de04f01e1b5911bce9fb884d0080c1ef760df4bd62fdaad1825e889->enter($__internal_f6a0c9c42de04f01e1b5911bce9fb884d0080c1ef760df4bd62fdaad1825e889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_f6a0c9c42de04f01e1b5911bce9fb884d0080c1ef760df4bd62fdaad1825e889->leave($__internal_f6a0c9c42de04f01e1b5911bce9fb884d0080c1ef760df4bd62fdaad1825e889_prof);

        
        $__internal_39558013e04c3e67d5b045d0824f894cd711ba69232b08c479cec576e10510d7->leave($__internal_39558013e04c3e67d5b045d0824f894cd711ba69232b08c479cec576e10510d7_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_56c95614d9389a7484662230d65681808f2a8598f659a8b48baf3d66cf4886f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56c95614d9389a7484662230d65681808f2a8598f659a8b48baf3d66cf4886f0->enter($__internal_56c95614d9389a7484662230d65681808f2a8598f659a8b48baf3d66cf4886f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_237393af3b4a6a3af396588500cc6701b3d8d6097c63b0d73282c8e6ea5cc93d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_237393af3b4a6a3af396588500cc6701b3d8d6097c63b0d73282c8e6ea5cc93d->enter($__internal_237393af3b4a6a3af396588500cc6701b3d8d6097c63b0d73282c8e6ea5cc93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_237393af3b4a6a3af396588500cc6701b3d8d6097c63b0d73282c8e6ea5cc93d->leave($__internal_237393af3b4a6a3af396588500cc6701b3d8d6097c63b0d73282c8e6ea5cc93d_prof);

        
        $__internal_56c95614d9389a7484662230d65681808f2a8598f659a8b48baf3d66cf4886f0->leave($__internal_56c95614d9389a7484662230d65681808f2a8598f659a8b48baf3d66cf4886f0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
