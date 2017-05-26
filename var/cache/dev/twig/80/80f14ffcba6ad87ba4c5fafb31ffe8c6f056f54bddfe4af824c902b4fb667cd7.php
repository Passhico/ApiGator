<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b5e736d757c8fe495010042fe0db4b63d9b031bdad1820e2220eba29a82e105c extends Twig_Template
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
        $__internal_8dc712134af1c458856898c7d584cb36dfe8aab86aabb944af21cf07f66326c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dc712134af1c458856898c7d584cb36dfe8aab86aabb944af21cf07f66326c3->enter($__internal_8dc712134af1c458856898c7d584cb36dfe8aab86aabb944af21cf07f66326c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_aa7f6014558efde1129bd0bff80424994639e24b07eac572a0ec13a16621c833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa7f6014558efde1129bd0bff80424994639e24b07eac572a0ec13a16621c833->enter($__internal_aa7f6014558efde1129bd0bff80424994639e24b07eac572a0ec13a16621c833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_8dc712134af1c458856898c7d584cb36dfe8aab86aabb944af21cf07f66326c3->leave($__internal_8dc712134af1c458856898c7d584cb36dfe8aab86aabb944af21cf07f66326c3_prof);

        
        $__internal_aa7f6014558efde1129bd0bff80424994639e24b07eac572a0ec13a16621c833->leave($__internal_aa7f6014558efde1129bd0bff80424994639e24b07eac572a0ec13a16621c833_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
