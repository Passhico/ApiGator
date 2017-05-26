<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_e2665dc160f7b8ab6de39a8abb8fa05f7ce0c177d2e73c73d3f6bd00be7be24d extends Twig_Template
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
        $__internal_934dcef800bf882f5eaf7248c5bf85c83669d66540bc81ea16d3d82d0ebcc09a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_934dcef800bf882f5eaf7248c5bf85c83669d66540bc81ea16d3d82d0ebcc09a->enter($__internal_934dcef800bf882f5eaf7248c5bf85c83669d66540bc81ea16d3d82d0ebcc09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_5fdc8b995527608a2a97c50ac575a6e871e2fe2e0bd29c44186965a6c0282857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fdc8b995527608a2a97c50ac575a6e871e2fe2e0bd29c44186965a6c0282857->enter($__internal_5fdc8b995527608a2a97c50ac575a6e871e2fe2e0bd29c44186965a6c0282857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_934dcef800bf882f5eaf7248c5bf85c83669d66540bc81ea16d3d82d0ebcc09a->leave($__internal_934dcef800bf882f5eaf7248c5bf85c83669d66540bc81ea16d3d82d0ebcc09a_prof);

        
        $__internal_5fdc8b995527608a2a97c50ac575a6e871e2fe2e0bd29c44186965a6c0282857->leave($__internal_5fdc8b995527608a2a97c50ac575a6e871e2fe2e0bd29c44186965a6c0282857_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
