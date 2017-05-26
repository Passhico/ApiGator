<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5b712adbfe12e7c866a4c67439b6a3980ee5996e786786a1cda6ad79515c8c98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_e4d798a77651c3a632193893556e18706a1de612f6cd33b68c4aef030b113971 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4d798a77651c3a632193893556e18706a1de612f6cd33b68c4aef030b113971->enter($__internal_e4d798a77651c3a632193893556e18706a1de612f6cd33b68c4aef030b113971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b750eadf1998d16ce4522e1c68e6f4e4658da9552da985eff1cc4400a5f57f2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b750eadf1998d16ce4522e1c68e6f4e4658da9552da985eff1cc4400a5f57f2e->enter($__internal_b750eadf1998d16ce4522e1c68e6f4e4658da9552da985eff1cc4400a5f57f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4d798a77651c3a632193893556e18706a1de612f6cd33b68c4aef030b113971->leave($__internal_e4d798a77651c3a632193893556e18706a1de612f6cd33b68c4aef030b113971_prof);

        
        $__internal_b750eadf1998d16ce4522e1c68e6f4e4658da9552da985eff1cc4400a5f57f2e->leave($__internal_b750eadf1998d16ce4522e1c68e6f4e4658da9552da985eff1cc4400a5f57f2e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9812b9eba5a58e3be7baac2c746af9d7cde0e012d08ed4e22cc629a10a9cbb95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9812b9eba5a58e3be7baac2c746af9d7cde0e012d08ed4e22cc629a10a9cbb95->enter($__internal_9812b9eba5a58e3be7baac2c746af9d7cde0e012d08ed4e22cc629a10a9cbb95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e4b2728ac8383f76b02a87021ecfd05d5a556a9a4e1ac2e9ce1256bd2716fc7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4b2728ac8383f76b02a87021ecfd05d5a556a9a4e1ac2e9ce1256bd2716fc7f->enter($__internal_e4b2728ac8383f76b02a87021ecfd05d5a556a9a4e1ac2e9ce1256bd2716fc7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e4b2728ac8383f76b02a87021ecfd05d5a556a9a4e1ac2e9ce1256bd2716fc7f->leave($__internal_e4b2728ac8383f76b02a87021ecfd05d5a556a9a4e1ac2e9ce1256bd2716fc7f_prof);

        
        $__internal_9812b9eba5a58e3be7baac2c746af9d7cde0e012d08ed4e22cc629a10a9cbb95->leave($__internal_9812b9eba5a58e3be7baac2c746af9d7cde0e012d08ed4e22cc629a10a9cbb95_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_93d9d96338edc444f54b1fdfeb9943faef80c4ad7cdbb5de7a9ab2c5c2d0771e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93d9d96338edc444f54b1fdfeb9943faef80c4ad7cdbb5de7a9ab2c5c2d0771e->enter($__internal_93d9d96338edc444f54b1fdfeb9943faef80c4ad7cdbb5de7a9ab2c5c2d0771e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ddb71f32906d35a2303a3f6f53ed82ffd69f9dc02507f66fcf9e9d64276a067e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddb71f32906d35a2303a3f6f53ed82ffd69f9dc02507f66fcf9e9d64276a067e->enter($__internal_ddb71f32906d35a2303a3f6f53ed82ffd69f9dc02507f66fcf9e9d64276a067e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ddb71f32906d35a2303a3f6f53ed82ffd69f9dc02507f66fcf9e9d64276a067e->leave($__internal_ddb71f32906d35a2303a3f6f53ed82ffd69f9dc02507f66fcf9e9d64276a067e_prof);

        
        $__internal_93d9d96338edc444f54b1fdfeb9943faef80c4ad7cdbb5de7a9ab2c5c2d0771e->leave($__internal_93d9d96338edc444f54b1fdfeb9943faef80c4ad7cdbb5de7a9ab2c5c2d0771e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d25e935778f4d6e0caa11812d053b52a0366ccb37b0ff9d9c5cce3ba0b69bc55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d25e935778f4d6e0caa11812d053b52a0366ccb37b0ff9d9c5cce3ba0b69bc55->enter($__internal_d25e935778f4d6e0caa11812d053b52a0366ccb37b0ff9d9c5cce3ba0b69bc55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dcc925cdd4495fba574ef839dcf74c73c79a8473e3a2d5a9889aa2d8f9da35e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcc925cdd4495fba574ef839dcf74c73c79a8473e3a2d5a9889aa2d8f9da35e6->enter($__internal_dcc925cdd4495fba574ef839dcf74c73c79a8473e3a2d5a9889aa2d8f9da35e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dcc925cdd4495fba574ef839dcf74c73c79a8473e3a2d5a9889aa2d8f9da35e6->leave($__internal_dcc925cdd4495fba574ef839dcf74c73c79a8473e3a2d5a9889aa2d8f9da35e6_prof);

        
        $__internal_d25e935778f4d6e0caa11812d053b52a0366ccb37b0ff9d9c5cce3ba0b69bc55->leave($__internal_d25e935778f4d6e0caa11812d053b52a0366ccb37b0ff9d9c5cce3ba0b69bc55_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
