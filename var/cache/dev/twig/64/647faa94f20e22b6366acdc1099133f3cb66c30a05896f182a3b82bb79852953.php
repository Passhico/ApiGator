<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_24679741872e31ce8ff3713714289e9f01b6a4501cf6f025a914fa13ec95b5f0 extends Twig_Template
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
        $__internal_84d173b70ebe389e3542e6653614ee7b0438adc122cb69fda31201680fec9be9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84d173b70ebe389e3542e6653614ee7b0438adc122cb69fda31201680fec9be9->enter($__internal_84d173b70ebe389e3542e6653614ee7b0438adc122cb69fda31201680fec9be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_433a01d388ca3b58e70c98cfd402eecb7f28e91d5e6d8f891df2a56b0eb98ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_433a01d388ca3b58e70c98cfd402eecb7f28e91d5e6d8f891df2a56b0eb98ce0->enter($__internal_433a01d388ca3b58e70c98cfd402eecb7f28e91d5e6d8f891df2a56b0eb98ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_84d173b70ebe389e3542e6653614ee7b0438adc122cb69fda31201680fec9be9->leave($__internal_84d173b70ebe389e3542e6653614ee7b0438adc122cb69fda31201680fec9be9_prof);

        
        $__internal_433a01d388ca3b58e70c98cfd402eecb7f28e91d5e6d8f891df2a56b0eb98ce0->leave($__internal_433a01d388ca3b58e70c98cfd402eecb7f28e91d5e6d8f891df2a56b0eb98ce0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
