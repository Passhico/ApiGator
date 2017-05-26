<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_d1451a6b41781b5c9ee3090c82c7e7d5ce5c92e8f5614c0c3476f41a4f976281 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fa78e438f0db7df9ea380c9fe9f1a32ef42016cab7b4a803cb27d53e293f1c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fa78e438f0db7df9ea380c9fe9f1a32ef42016cab7b4a803cb27d53e293f1c8->enter($__internal_9fa78e438f0db7df9ea380c9fe9f1a32ef42016cab7b4a803cb27d53e293f1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8260d95fcc391ca07f3b7c0be8cd38dd9b51bcb48f84d9739299e6a6111e51dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8260d95fcc391ca07f3b7c0be8cd38dd9b51bcb48f84d9739299e6a6111e51dd->enter($__internal_8260d95fcc391ca07f3b7c0be8cd38dd9b51bcb48f84d9739299e6a6111e51dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fa78e438f0db7df9ea380c9fe9f1a32ef42016cab7b4a803cb27d53e293f1c8->leave($__internal_9fa78e438f0db7df9ea380c9fe9f1a32ef42016cab7b4a803cb27d53e293f1c8_prof);

        
        $__internal_8260d95fcc391ca07f3b7c0be8cd38dd9b51bcb48f84d9739299e6a6111e51dd->leave($__internal_8260d95fcc391ca07f3b7c0be8cd38dd9b51bcb48f84d9739299e6a6111e51dd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_08f96153e81085a16fc346e8630642242d2a3389ef0f64a5e1a95d30090db9b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08f96153e81085a16fc346e8630642242d2a3389ef0f64a5e1a95d30090db9b7->enter($__internal_08f96153e81085a16fc346e8630642242d2a3389ef0f64a5e1a95d30090db9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c5b1d7805245a89e191cb6d5061f93b435744f9720795443624227ee655c703e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5b1d7805245a89e191cb6d5061f93b435744f9720795443624227ee655c703e->enter($__internal_c5b1d7805245a89e191cb6d5061f93b435744f9720795443624227ee655c703e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_c5b1d7805245a89e191cb6d5061f93b435744f9720795443624227ee655c703e->leave($__internal_c5b1d7805245a89e191cb6d5061f93b435744f9720795443624227ee655c703e_prof);

        
        $__internal_08f96153e81085a16fc346e8630642242d2a3389ef0f64a5e1a95d30090db9b7->leave($__internal_08f96153e81085a16fc346e8630642242d2a3389ef0f64a5e1a95d30090db9b7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
