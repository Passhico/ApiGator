<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_e1e3069d29ebcce5c2ac15a18f0346032a8ce9f056b8cb1afb599511a106d7d2 extends Twig_Template
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
        $__internal_4aa0a2bf6df1c125bab55dc4e5b81ae8425680fcaa1e3eeccf6ea8f43e12f8df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aa0a2bf6df1c125bab55dc4e5b81ae8425680fcaa1e3eeccf6ea8f43e12f8df->enter($__internal_4aa0a2bf6df1c125bab55dc4e5b81ae8425680fcaa1e3eeccf6ea8f43e12f8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_6165eb2b45b2020f89b83f3eb39dbca37273731258d081a1afb783c9421e0a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6165eb2b45b2020f89b83f3eb39dbca37273731258d081a1afb783c9421e0a4e->enter($__internal_6165eb2b45b2020f89b83f3eb39dbca37273731258d081a1afb783c9421e0a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4aa0a2bf6df1c125bab55dc4e5b81ae8425680fcaa1e3eeccf6ea8f43e12f8df->leave($__internal_4aa0a2bf6df1c125bab55dc4e5b81ae8425680fcaa1e3eeccf6ea8f43e12f8df_prof);

        
        $__internal_6165eb2b45b2020f89b83f3eb39dbca37273731258d081a1afb783c9421e0a4e->leave($__internal_6165eb2b45b2020f89b83f3eb39dbca37273731258d081a1afb783c9421e0a4e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
