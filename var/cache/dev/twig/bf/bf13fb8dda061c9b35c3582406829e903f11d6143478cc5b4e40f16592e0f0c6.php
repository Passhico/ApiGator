<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_4421835139e5eba09de54934e5e4cfcafbe80b8751090c2364b1b26cf7ef41bd extends Twig_Template
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
        $__internal_08e7e4b9f518021c68ad40f44a1cc3ca703020e7bf31f519a1e444c64aebd797 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08e7e4b9f518021c68ad40f44a1cc3ca703020e7bf31f519a1e444c64aebd797->enter($__internal_08e7e4b9f518021c68ad40f44a1cc3ca703020e7bf31f519a1e444c64aebd797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_1c3504bdb669a3764dd6843d84399c209a0945aa6506a50e8705f67a47ae8489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c3504bdb669a3764dd6843d84399c209a0945aa6506a50e8705f67a47ae8489->enter($__internal_1c3504bdb669a3764dd6843d84399c209a0945aa6506a50e8705f67a47ae8489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_08e7e4b9f518021c68ad40f44a1cc3ca703020e7bf31f519a1e444c64aebd797->leave($__internal_08e7e4b9f518021c68ad40f44a1cc3ca703020e7bf31f519a1e444c64aebd797_prof);

        
        $__internal_1c3504bdb669a3764dd6843d84399c209a0945aa6506a50e8705f67a47ae8489->leave($__internal_1c3504bdb669a3764dd6843d84399c209a0945aa6506a50e8705f67a47ae8489_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
