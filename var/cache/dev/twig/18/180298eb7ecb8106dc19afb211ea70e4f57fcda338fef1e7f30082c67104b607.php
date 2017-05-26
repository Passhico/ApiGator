<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_bf4a1baafe86227e2e11895f6b9d97ec03a4284ab04915ec4a33c3ad1df9f176 extends Twig_Template
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
        $__internal_4799d726a8eaa91142059ebebbf5a0224933809e1bb10ef27724e305bf2f4da1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4799d726a8eaa91142059ebebbf5a0224933809e1bb10ef27724e305bf2f4da1->enter($__internal_4799d726a8eaa91142059ebebbf5a0224933809e1bb10ef27724e305bf2f4da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_be5d4a5194cb557f95e8c6ccad613fb74415f62a1c63fb5d243a9a4cb18bc545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be5d4a5194cb557f95e8c6ccad613fb74415f62a1c63fb5d243a9a4cb18bc545->enter($__internal_be5d4a5194cb557f95e8c6ccad613fb74415f62a1c63fb5d243a9a4cb18bc545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4799d726a8eaa91142059ebebbf5a0224933809e1bb10ef27724e305bf2f4da1->leave($__internal_4799d726a8eaa91142059ebebbf5a0224933809e1bb10ef27724e305bf2f4da1_prof);

        
        $__internal_be5d4a5194cb557f95e8c6ccad613fb74415f62a1c63fb5d243a9a4cb18bc545->leave($__internal_be5d4a5194cb557f95e8c6ccad613fb74415f62a1c63fb5d243a9a4cb18bc545_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
