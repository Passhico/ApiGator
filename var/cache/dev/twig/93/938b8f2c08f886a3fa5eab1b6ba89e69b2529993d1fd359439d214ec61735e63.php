<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_9ef3f031098a4bc3a0dda5fed5ad43a7e11bd199df823b74def20655c78bcf97 extends Twig_Template
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
        $__internal_946cb8b9b3f1fa330777789b1e35514a687b6666d7e98e89dc50b9a7d6ec6e1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_946cb8b9b3f1fa330777789b1e35514a687b6666d7e98e89dc50b9a7d6ec6e1a->enter($__internal_946cb8b9b3f1fa330777789b1e35514a687b6666d7e98e89dc50b9a7d6ec6e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_4fd3de9bbb03ac8655a527b979f9e49f4cc33ba68d8f5c8475c58398f56f41fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd3de9bbb03ac8655a527b979f9e49f4cc33ba68d8f5c8475c58398f56f41fc->enter($__internal_4fd3de9bbb03ac8655a527b979f9e49f4cc33ba68d8f5c8475c58398f56f41fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_946cb8b9b3f1fa330777789b1e35514a687b6666d7e98e89dc50b9a7d6ec6e1a->leave($__internal_946cb8b9b3f1fa330777789b1e35514a687b6666d7e98e89dc50b9a7d6ec6e1a_prof);

        
        $__internal_4fd3de9bbb03ac8655a527b979f9e49f4cc33ba68d8f5c8475c58398f56f41fc->leave($__internal_4fd3de9bbb03ac8655a527b979f9e49f4cc33ba68d8f5c8475c58398f56f41fc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
