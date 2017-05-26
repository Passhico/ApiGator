<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_e8911f5b5e1362458ab1775d560687d35d595cdb8c2d35c7f8779fb60c5e6c97 extends Twig_Template
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
        $__internal_79960843e86f2703222153594c8b2b3a9a967afd914d57b7eb7b20f4a5d7d303 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79960843e86f2703222153594c8b2b3a9a967afd914d57b7eb7b20f4a5d7d303->enter($__internal_79960843e86f2703222153594c8b2b3a9a967afd914d57b7eb7b20f4a5d7d303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_10cebb660e6414795f3014575cdca1bfa207b0944db1ee023987019924aac486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10cebb660e6414795f3014575cdca1bfa207b0944db1ee023987019924aac486->enter($__internal_10cebb660e6414795f3014575cdca1bfa207b0944db1ee023987019924aac486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_79960843e86f2703222153594c8b2b3a9a967afd914d57b7eb7b20f4a5d7d303->leave($__internal_79960843e86f2703222153594c8b2b3a9a967afd914d57b7eb7b20f4a5d7d303_prof);

        
        $__internal_10cebb660e6414795f3014575cdca1bfa207b0944db1ee023987019924aac486->leave($__internal_10cebb660e6414795f3014575cdca1bfa207b0944db1ee023987019924aac486_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
