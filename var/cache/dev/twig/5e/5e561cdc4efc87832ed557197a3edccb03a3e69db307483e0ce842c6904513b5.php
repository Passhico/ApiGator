<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_623188481916750bd9b5def730a7ddc895fddb0b861dd21f82fc73ab7535520e extends Twig_Template
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
        $__internal_080371493e361ebe187f0b6a342040250f96986b603040d923e5a7b7b4fc9cf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_080371493e361ebe187f0b6a342040250f96986b603040d923e5a7b7b4fc9cf5->enter($__internal_080371493e361ebe187f0b6a342040250f96986b603040d923e5a7b7b4fc9cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_7a4d21cadb212e169f2e08323623ae83a7ebadb1005d9bb9c8a8127b4d5a9277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a4d21cadb212e169f2e08323623ae83a7ebadb1005d9bb9c8a8127b4d5a9277->enter($__internal_7a4d21cadb212e169f2e08323623ae83a7ebadb1005d9bb9c8a8127b4d5a9277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_080371493e361ebe187f0b6a342040250f96986b603040d923e5a7b7b4fc9cf5->leave($__internal_080371493e361ebe187f0b6a342040250f96986b603040d923e5a7b7b4fc9cf5_prof);

        
        $__internal_7a4d21cadb212e169f2e08323623ae83a7ebadb1005d9bb9c8a8127b4d5a9277->leave($__internal_7a4d21cadb212e169f2e08323623ae83a7ebadb1005d9bb9c8a8127b4d5a9277_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
