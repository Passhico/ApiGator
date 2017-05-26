<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_6a5bffbcdda92a00aaa6b788fdc8833925e9b9efb0e8624db7f286739b46f269 extends Twig_Template
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
        $__internal_ee5e40b8f4b860a3e29bd72c9dc44a98c6d320fc6f412e51f2fcf92a98c685a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee5e40b8f4b860a3e29bd72c9dc44a98c6d320fc6f412e51f2fcf92a98c685a5->enter($__internal_ee5e40b8f4b860a3e29bd72c9dc44a98c6d320fc6f412e51f2fcf92a98c685a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_2a77cc00f2a705da95e695164ce247ed99b89a1b00e35497eae69a740078aa47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a77cc00f2a705da95e695164ce247ed99b89a1b00e35497eae69a740078aa47->enter($__internal_2a77cc00f2a705da95e695164ce247ed99b89a1b00e35497eae69a740078aa47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ee5e40b8f4b860a3e29bd72c9dc44a98c6d320fc6f412e51f2fcf92a98c685a5->leave($__internal_ee5e40b8f4b860a3e29bd72c9dc44a98c6d320fc6f412e51f2fcf92a98c685a5_prof);

        
        $__internal_2a77cc00f2a705da95e695164ce247ed99b89a1b00e35497eae69a740078aa47->leave($__internal_2a77cc00f2a705da95e695164ce247ed99b89a1b00e35497eae69a740078aa47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
