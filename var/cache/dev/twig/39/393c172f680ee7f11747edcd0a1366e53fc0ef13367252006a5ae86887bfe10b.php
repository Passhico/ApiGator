<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_3f84cd0397d73147f2a22e59581c3415957b2464bb0516d89645fb729d63be5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29245d0e93158df4deda97feb28237b2adf3600f31a781aa74235aff99811064 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29245d0e93158df4deda97feb28237b2adf3600f31a781aa74235aff99811064->enter($__internal_29245d0e93158df4deda97feb28237b2adf3600f31a781aa74235aff99811064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_101cac146e6d10b8f56c5a6bee9d350a77e5662d0c3497dbcf12181c73f6d9d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_101cac146e6d10b8f56c5a6bee9d350a77e5662d0c3497dbcf12181c73f6d9d7->enter($__internal_101cac146e6d10b8f56c5a6bee9d350a77e5662d0c3497dbcf12181c73f6d9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_29245d0e93158df4deda97feb28237b2adf3600f31a781aa74235aff99811064->leave($__internal_29245d0e93158df4deda97feb28237b2adf3600f31a781aa74235aff99811064_prof);

        
        $__internal_101cac146e6d10b8f56c5a6bee9d350a77e5662d0c3497dbcf12181c73f6d9d7->leave($__internal_101cac146e6d10b8f56c5a6bee9d350a77e5662d0c3497dbcf12181c73f6d9d7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
