<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_1d2425e4b4a2f3fbd5ad159f79f5b41213bdc98ef6ea9f66d30973a022000d7b extends Twig_Template
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
        $__internal_f03080a8cb24656688484dc2303e6a7964edc67eba67b9fcf7a2afb4bec42494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f03080a8cb24656688484dc2303e6a7964edc67eba67b9fcf7a2afb4bec42494->enter($__internal_f03080a8cb24656688484dc2303e6a7964edc67eba67b9fcf7a2afb4bec42494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_22c237a5246bd809bc803ee134c1c7fff0942ff84a21929b42fcb6096a142a12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c237a5246bd809bc803ee134c1c7fff0942ff84a21929b42fcb6096a142a12->enter($__internal_22c237a5246bd809bc803ee134c1c7fff0942ff84a21929b42fcb6096a142a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f03080a8cb24656688484dc2303e6a7964edc67eba67b9fcf7a2afb4bec42494->leave($__internal_f03080a8cb24656688484dc2303e6a7964edc67eba67b9fcf7a2afb4bec42494_prof);

        
        $__internal_22c237a5246bd809bc803ee134c1c7fff0942ff84a21929b42fcb6096a142a12->leave($__internal_22c237a5246bd809bc803ee134c1c7fff0942ff84a21929b42fcb6096a142a12_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
