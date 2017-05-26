<?php

/* ::base.html.twig */
class __TwigTemplate_800f016a509a651c87e7a376a40b2261c57ba78cdaf77ab1a4537ad4f7850fe4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4ca901e2c1f9cebc57cccb9455542917e645e3d693906c2880a876e97c22230 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4ca901e2c1f9cebc57cccb9455542917e645e3d693906c2880a876e97c22230->enter($__internal_b4ca901e2c1f9cebc57cccb9455542917e645e3d693906c2880a876e97c22230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_7a7b5dae44c37b14a529bd36863b0053c07ca195c9e5baa20a053209f54ca68a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a7b5dae44c37b14a529bd36863b0053c07ca195c9e5baa20a053209f54ca68a->enter($__internal_7a7b5dae44c37b14a529bd36863b0053c07ca195c9e5baa20a053209f54ca68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b4ca901e2c1f9cebc57cccb9455542917e645e3d693906c2880a876e97c22230->leave($__internal_b4ca901e2c1f9cebc57cccb9455542917e645e3d693906c2880a876e97c22230_prof);

        
        $__internal_7a7b5dae44c37b14a529bd36863b0053c07ca195c9e5baa20a053209f54ca68a->leave($__internal_7a7b5dae44c37b14a529bd36863b0053c07ca195c9e5baa20a053209f54ca68a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5eafe2f4ec97ca46fbe3947fc848c2a376b12aace1c0e732ede3f32c697eadb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eafe2f4ec97ca46fbe3947fc848c2a376b12aace1c0e732ede3f32c697eadb6->enter($__internal_5eafe2f4ec97ca46fbe3947fc848c2a376b12aace1c0e732ede3f32c697eadb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8ea9749c3fd6bf2a220b3e6ff4d8171ff5702b403e942505c037120cfebcf782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ea9749c3fd6bf2a220b3e6ff4d8171ff5702b403e942505c037120cfebcf782->enter($__internal_8ea9749c3fd6bf2a220b3e6ff4d8171ff5702b403e942505c037120cfebcf782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8ea9749c3fd6bf2a220b3e6ff4d8171ff5702b403e942505c037120cfebcf782->leave($__internal_8ea9749c3fd6bf2a220b3e6ff4d8171ff5702b403e942505c037120cfebcf782_prof);

        
        $__internal_5eafe2f4ec97ca46fbe3947fc848c2a376b12aace1c0e732ede3f32c697eadb6->leave($__internal_5eafe2f4ec97ca46fbe3947fc848c2a376b12aace1c0e732ede3f32c697eadb6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fd87b4e0b47d9db2b3da2462c896ad16688e9c1c744a2d1945026ea6fadbf8bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd87b4e0b47d9db2b3da2462c896ad16688e9c1c744a2d1945026ea6fadbf8bf->enter($__internal_fd87b4e0b47d9db2b3da2462c896ad16688e9c1c744a2d1945026ea6fadbf8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7cfa3e44be70be5429e706ab9151630db55bdcf1186950ec714b73d10b0e368d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cfa3e44be70be5429e706ab9151630db55bdcf1186950ec714b73d10b0e368d->enter($__internal_7cfa3e44be70be5429e706ab9151630db55bdcf1186950ec714b73d10b0e368d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7cfa3e44be70be5429e706ab9151630db55bdcf1186950ec714b73d10b0e368d->leave($__internal_7cfa3e44be70be5429e706ab9151630db55bdcf1186950ec714b73d10b0e368d_prof);

        
        $__internal_fd87b4e0b47d9db2b3da2462c896ad16688e9c1c744a2d1945026ea6fadbf8bf->leave($__internal_fd87b4e0b47d9db2b3da2462c896ad16688e9c1c744a2d1945026ea6fadbf8bf_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_64da92c794704ff8919e2652dc0ff8a1d9fa69915cde5c9df6d6c79f6cb8068f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64da92c794704ff8919e2652dc0ff8a1d9fa69915cde5c9df6d6c79f6cb8068f->enter($__internal_64da92c794704ff8919e2652dc0ff8a1d9fa69915cde5c9df6d6c79f6cb8068f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2af6d90f741c9831671b9d5649e8e075b74fb1b06b8e2a8bf1318476a68a531b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2af6d90f741c9831671b9d5649e8e075b74fb1b06b8e2a8bf1318476a68a531b->enter($__internal_2af6d90f741c9831671b9d5649e8e075b74fb1b06b8e2a8bf1318476a68a531b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2af6d90f741c9831671b9d5649e8e075b74fb1b06b8e2a8bf1318476a68a531b->leave($__internal_2af6d90f741c9831671b9d5649e8e075b74fb1b06b8e2a8bf1318476a68a531b_prof);

        
        $__internal_64da92c794704ff8919e2652dc0ff8a1d9fa69915cde5c9df6d6c79f6cb8068f->leave($__internal_64da92c794704ff8919e2652dc0ff8a1d9fa69915cde5c9df6d6c79f6cb8068f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_835c4eb8ee872539288cbde374a64eca77f60935e1fa85624d6e00a60db8b77b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_835c4eb8ee872539288cbde374a64eca77f60935e1fa85624d6e00a60db8b77b->enter($__internal_835c4eb8ee872539288cbde374a64eca77f60935e1fa85624d6e00a60db8b77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9ac7f1d51bd44be2a194132b17e85cfd9e92225b2f59c7e097a825ae6e6777df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ac7f1d51bd44be2a194132b17e85cfd9e92225b2f59c7e097a825ae6e6777df->enter($__internal_9ac7f1d51bd44be2a194132b17e85cfd9e92225b2f59c7e097a825ae6e6777df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9ac7f1d51bd44be2a194132b17e85cfd9e92225b2f59c7e097a825ae6e6777df->leave($__internal_9ac7f1d51bd44be2a194132b17e85cfd9e92225b2f59c7e097a825ae6e6777df_prof);

        
        $__internal_835c4eb8ee872539288cbde374a64eca77f60935e1fa85624d6e00a60db8b77b->leave($__internal_835c4eb8ee872539288cbde374a64eca77f60935e1fa85624d6e00a60db8b77b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/Users/passh/src/curso_symfony/cursoSymfony/app/Resources/views/base.html.twig");
    }
}
