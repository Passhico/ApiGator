<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_819997dfe6709317b6c3f398a4a8277aa81e117c354f25d76324f6c8cf34a171 extends Twig_Template
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
        $__internal_38a00059d87388fd66f7c09e27054bdf5b3df9f0a33f0e2c3892cf6b66ac65f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38a00059d87388fd66f7c09e27054bdf5b3df9f0a33f0e2c3892cf6b66ac65f7->enter($__internal_38a00059d87388fd66f7c09e27054bdf5b3df9f0a33f0e2c3892cf6b66ac65f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_1f3b395be32f3be4d41dc9b1e4a51e224c6c95ce15d2cdc7730fd8b5b8f9b80a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f3b395be32f3be4d41dc9b1e4a51e224c6c95ce15d2cdc7730fd8b5b8f9b80a->enter($__internal_1f3b395be32f3be4d41dc9b1e4a51e224c6c95ce15d2cdc7730fd8b5b8f9b80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_38a00059d87388fd66f7c09e27054bdf5b3df9f0a33f0e2c3892cf6b66ac65f7->leave($__internal_38a00059d87388fd66f7c09e27054bdf5b3df9f0a33f0e2c3892cf6b66ac65f7_prof);

        
        $__internal_1f3b395be32f3be4d41dc9b1e4a51e224c6c95ce15d2cdc7730fd8b5b8f9b80a->leave($__internal_1f3b395be32f3be4d41dc9b1e4a51e224c6c95ce15d2cdc7730fd8b5b8f9b80a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
