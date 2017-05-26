<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_336c2837a5624c4e2d392443c8369b98ebf81aafb1db9c1be3ab38d23e4084fc extends Twig_Template
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
        $__internal_d9a0da56c689468130e65d79b2ad85f47cb0763f3e90e2e953d3fabf96f1af7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9a0da56c689468130e65d79b2ad85f47cb0763f3e90e2e953d3fabf96f1af7b->enter($__internal_d9a0da56c689468130e65d79b2ad85f47cb0763f3e90e2e953d3fabf96f1af7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_535695cd73cf6799807f0e91be422807266deed90cee575436e256d90cc1fdf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_535695cd73cf6799807f0e91be422807266deed90cee575436e256d90cc1fdf4->enter($__internal_535695cd73cf6799807f0e91be422807266deed90cee575436e256d90cc1fdf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_d9a0da56c689468130e65d79b2ad85f47cb0763f3e90e2e953d3fabf96f1af7b->leave($__internal_d9a0da56c689468130e65d79b2ad85f47cb0763f3e90e2e953d3fabf96f1af7b_prof);

        
        $__internal_535695cd73cf6799807f0e91be422807266deed90cee575436e256d90cc1fdf4->leave($__internal_535695cd73cf6799807f0e91be422807266deed90cee575436e256d90cc1fdf4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
