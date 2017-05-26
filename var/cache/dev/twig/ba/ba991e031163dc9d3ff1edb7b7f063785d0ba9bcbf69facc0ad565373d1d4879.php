<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_be9417845efc318467fd110e691678cd6a10741b9bf4ddbdce0b3a1d27275056 extends Twig_Template
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
        $__internal_b7c6763ba2851aaa1b4f4390363b22ffbd4ac1a888135a2b966ed71d8515ef81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7c6763ba2851aaa1b4f4390363b22ffbd4ac1a888135a2b966ed71d8515ef81->enter($__internal_b7c6763ba2851aaa1b4f4390363b22ffbd4ac1a888135a2b966ed71d8515ef81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_9bbd3858b3aaac85c4f48575167e2a7ecde7bb3b8c9b3ba8a3f4ee53625b1fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bbd3858b3aaac85c4f48575167e2a7ecde7bb3b8c9b3ba8a3f4ee53625b1fa9->enter($__internal_9bbd3858b3aaac85c4f48575167e2a7ecde7bb3b8c9b3ba8a3f4ee53625b1fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_b7c6763ba2851aaa1b4f4390363b22ffbd4ac1a888135a2b966ed71d8515ef81->leave($__internal_b7c6763ba2851aaa1b4f4390363b22ffbd4ac1a888135a2b966ed71d8515ef81_prof);

        
        $__internal_9bbd3858b3aaac85c4f48575167e2a7ecde7bb3b8c9b3ba8a3f4ee53625b1fa9->leave($__internal_9bbd3858b3aaac85c4f48575167e2a7ecde7bb3b8c9b3ba8a3f4ee53625b1fa9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
