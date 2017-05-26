<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_a35dc619c2247651efab67f9253ed37b2e4445abaafed77dfc5bd880e4c14d18 extends Twig_Template
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
        $__internal_38203ded688456f0bfff0a0ef58ea2a274faab3fd4df7f494e218a476d36a0b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38203ded688456f0bfff0a0ef58ea2a274faab3fd4df7f494e218a476d36a0b2->enter($__internal_38203ded688456f0bfff0a0ef58ea2a274faab3fd4df7f494e218a476d36a0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_55eec51be60088bb0dbee8bd54cd86005d48882d8180bbc0d36a0c26dbd4a94d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55eec51be60088bb0dbee8bd54cd86005d48882d8180bbc0d36a0c26dbd4a94d->enter($__internal_55eec51be60088bb0dbee8bd54cd86005d48882d8180bbc0d36a0c26dbd4a94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_38203ded688456f0bfff0a0ef58ea2a274faab3fd4df7f494e218a476d36a0b2->leave($__internal_38203ded688456f0bfff0a0ef58ea2a274faab3fd4df7f494e218a476d36a0b2_prof);

        
        $__internal_55eec51be60088bb0dbee8bd54cd86005d48882d8180bbc0d36a0c26dbd4a94d->leave($__internal_55eec51be60088bb0dbee8bd54cd86005d48882d8180bbc0d36a0c26dbd4a94d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
