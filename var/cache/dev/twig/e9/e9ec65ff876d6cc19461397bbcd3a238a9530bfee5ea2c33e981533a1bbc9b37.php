<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_aa3a10c4c433b2dc4b324b08dbc92e7daea5c29f4588cfb29243447b5e332c03 extends Twig_Template
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
        $__internal_a5ea209416e6c30b5c45696e98b732ff0ab261213f069cd47201a8f44c982bf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5ea209416e6c30b5c45696e98b732ff0ab261213f069cd47201a8f44c982bf4->enter($__internal_a5ea209416e6c30b5c45696e98b732ff0ab261213f069cd47201a8f44c982bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_ded41522d4454f585f4bbe2d829b68b9e0355dabac709e2ebfb29754cddad2f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ded41522d4454f585f4bbe2d829b68b9e0355dabac709e2ebfb29754cddad2f6->enter($__internal_ded41522d4454f585f4bbe2d829b68b9e0355dabac709e2ebfb29754cddad2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a5ea209416e6c30b5c45696e98b732ff0ab261213f069cd47201a8f44c982bf4->leave($__internal_a5ea209416e6c30b5c45696e98b732ff0ab261213f069cd47201a8f44c982bf4_prof);

        
        $__internal_ded41522d4454f585f4bbe2d829b68b9e0355dabac709e2ebfb29754cddad2f6->leave($__internal_ded41522d4454f585f4bbe2d829b68b9e0355dabac709e2ebfb29754cddad2f6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
