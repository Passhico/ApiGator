<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_edcb3c4f4b4aa23a7bf7338479013cf07f85d9eb10ae5e2337649869eb8994f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1a6e3c1748eada29f7a269ffb800e0c17fe4752b15be3b8835ee0d8ef35bebf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a6e3c1748eada29f7a269ffb800e0c17fe4752b15be3b8835ee0d8ef35bebf8->enter($__internal_1a6e3c1748eada29f7a269ffb800e0c17fe4752b15be3b8835ee0d8ef35bebf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_a7b046dfb69b3c9df7a2b43a4e3afff8fe4476347c5f4119e8c88b770f604972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b046dfb69b3c9df7a2b43a4e3afff8fe4476347c5f4119e8c88b770f604972->enter($__internal_a7b046dfb69b3c9df7a2b43a4e3afff8fe4476347c5f4119e8c88b770f604972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a6e3c1748eada29f7a269ffb800e0c17fe4752b15be3b8835ee0d8ef35bebf8->leave($__internal_1a6e3c1748eada29f7a269ffb800e0c17fe4752b15be3b8835ee0d8ef35bebf8_prof);

        
        $__internal_a7b046dfb69b3c9df7a2b43a4e3afff8fe4476347c5f4119e8c88b770f604972->leave($__internal_a7b046dfb69b3c9df7a2b43a4e3afff8fe4476347c5f4119e8c88b770f604972_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_470031822008b9750948fb58fa9e0bb3a0b709e88b9b29e6854c87b655603cfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_470031822008b9750948fb58fa9e0bb3a0b709e88b9b29e6854c87b655603cfc->enter($__internal_470031822008b9750948fb58fa9e0bb3a0b709e88b9b29e6854c87b655603cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a2a80c56e661c65d9e9096986ff26e02035e702eac4ff9e750fb85d7ac7b53f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2a80c56e661c65d9e9096986ff26e02035e702eac4ff9e750fb85d7ac7b53f8->enter($__internal_a2a80c56e661c65d9e9096986ff26e02035e702eac4ff9e750fb85d7ac7b53f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_a2a80c56e661c65d9e9096986ff26e02035e702eac4ff9e750fb85d7ac7b53f8->leave($__internal_a2a80c56e661c65d9e9096986ff26e02035e702eac4ff9e750fb85d7ac7b53f8_prof);

        
        $__internal_470031822008b9750948fb58fa9e0bb3a0b709e88b9b29e6854c87b655603cfc->leave($__internal_470031822008b9750948fb58fa9e0bb3a0b709e88b9b29e6854c87b655603cfc_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_deb622d6c4035b8efd0144d9b4b43186687f7818abf9f9b073bbe1b78778e060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deb622d6c4035b8efd0144d9b4b43186687f7818abf9f9b073bbe1b78778e060->enter($__internal_deb622d6c4035b8efd0144d9b4b43186687f7818abf9f9b073bbe1b78778e060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_13eec30de267d54f0e9b35a9390be36ed1edf241f2c5de9d6e2f6fa384d7f0d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13eec30de267d54f0e9b35a9390be36ed1edf241f2c5de9d6e2f6fa384d7f0d5->enter($__internal_13eec30de267d54f0e9b35a9390be36ed1edf241f2c5de9d6e2f6fa384d7f0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_13eec30de267d54f0e9b35a9390be36ed1edf241f2c5de9d6e2f6fa384d7f0d5->leave($__internal_13eec30de267d54f0e9b35a9390be36ed1edf241f2c5de9d6e2f6fa384d7f0d5_prof);

        
        $__internal_deb622d6c4035b8efd0144d9b4b43186687f7818abf9f9b073bbe1b78778e060->leave($__internal_deb622d6c4035b8efd0144d9b4b43186687f7818abf9f9b073bbe1b78778e060_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d690c5b26fe2cbe7a77d05a64988b95ee0ad83f8f5725104979b88f5596dc073 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d690c5b26fe2cbe7a77d05a64988b95ee0ad83f8f5725104979b88f5596dc073->enter($__internal_d690c5b26fe2cbe7a77d05a64988b95ee0ad83f8f5725104979b88f5596dc073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9a2d931f0cebd8fe825f98769df9193d1601c8fbc5d301ece4c4d64b6ff4724f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a2d931f0cebd8fe825f98769df9193d1601c8fbc5d301ece4c4d64b6ff4724f->enter($__internal_9a2d931f0cebd8fe825f98769df9193d1601c8fbc5d301ece4c4d64b6ff4724f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_9a2d931f0cebd8fe825f98769df9193d1601c8fbc5d301ece4c4d64b6ff4724f->leave($__internal_9a2d931f0cebd8fe825f98769df9193d1601c8fbc5d301ece4c4d64b6ff4724f_prof);

        
        $__internal_d690c5b26fe2cbe7a77d05a64988b95ee0ad83f8f5725104979b88f5596dc073->leave($__internal_d690c5b26fe2cbe7a77d05a64988b95ee0ad83f8f5725104979b88f5596dc073_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
