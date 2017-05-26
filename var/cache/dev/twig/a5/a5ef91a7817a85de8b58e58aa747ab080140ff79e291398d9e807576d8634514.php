<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_069a79443c2923a6261bcba861d6216dc35da849c0636bd7da9b69825d78f5ac extends Twig_Template
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
        $__internal_4b1badd640127227dfc3655ba1e4234ba3a838db2941796061e64de78e975053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b1badd640127227dfc3655ba1e4234ba3a838db2941796061e64de78e975053->enter($__internal_4b1badd640127227dfc3655ba1e4234ba3a838db2941796061e64de78e975053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_eccf38e0d2935dfb67381d91cd4fe6ebd043f3c88d508e9a71ad08ac042ae583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eccf38e0d2935dfb67381d91cd4fe6ebd043f3c88d508e9a71ad08ac042ae583->enter($__internal_eccf38e0d2935dfb67381d91cd4fe6ebd043f3c88d508e9a71ad08ac042ae583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_4b1badd640127227dfc3655ba1e4234ba3a838db2941796061e64de78e975053->leave($__internal_4b1badd640127227dfc3655ba1e4234ba3a838db2941796061e64de78e975053_prof);

        
        $__internal_eccf38e0d2935dfb67381d91cd4fe6ebd043f3c88d508e9a71ad08ac042ae583->leave($__internal_eccf38e0d2935dfb67381d91cd4fe6ebd043f3c88d508e9a71ad08ac042ae583_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
