<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_b20bb2b1529daacf1ed0c7d6690adad683eef7785aac06dba0a7ce03de265434 extends Twig_Template
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
        $__internal_075fa3591492b58857da29ce8569e3f9a0ec531ca07f2c67a2eee5446cf170ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_075fa3591492b58857da29ce8569e3f9a0ec531ca07f2c67a2eee5446cf170ec->enter($__internal_075fa3591492b58857da29ce8569e3f9a0ec531ca07f2c67a2eee5446cf170ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_6e3ec1c8bc6ef0f835714a610a9421ff8d739d0f5485ef8201851e04b47acb2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e3ec1c8bc6ef0f835714a610a9421ff8d739d0f5485ef8201851e04b47acb2e->enter($__internal_6e3ec1c8bc6ef0f835714a610a9421ff8d739d0f5485ef8201851e04b47acb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_075fa3591492b58857da29ce8569e3f9a0ec531ca07f2c67a2eee5446cf170ec->leave($__internal_075fa3591492b58857da29ce8569e3f9a0ec531ca07f2c67a2eee5446cf170ec_prof);

        
        $__internal_6e3ec1c8bc6ef0f835714a610a9421ff8d739d0f5485ef8201851e04b47acb2e->leave($__internal_6e3ec1c8bc6ef0f835714a610a9421ff8d739d0f5485ef8201851e04b47acb2e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
