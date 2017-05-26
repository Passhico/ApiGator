<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_93d2fbdaf769d7f276525b2a6f6322a6e5302efe8523c28f97cfdcfa6a471800 extends Twig_Template
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
        $__internal_a056d654c0606f67cd095458b0134c928e23a5d54f8c1ea96199844c3cb67a15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a056d654c0606f67cd095458b0134c928e23a5d54f8c1ea96199844c3cb67a15->enter($__internal_a056d654c0606f67cd095458b0134c928e23a5d54f8c1ea96199844c3cb67a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_38ceb9266783e58afa7847769951d6493f01ab3a923d4cb819e7df2090cd610d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38ceb9266783e58afa7847769951d6493f01ab3a923d4cb819e7df2090cd610d->enter($__internal_38ceb9266783e58afa7847769951d6493f01ab3a923d4cb819e7df2090cd610d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a056d654c0606f67cd095458b0134c928e23a5d54f8c1ea96199844c3cb67a15->leave($__internal_a056d654c0606f67cd095458b0134c928e23a5d54f8c1ea96199844c3cb67a15_prof);

        
        $__internal_38ceb9266783e58afa7847769951d6493f01ab3a923d4cb819e7df2090cd610d->leave($__internal_38ceb9266783e58afa7847769951d6493f01ab3a923d4cb819e7df2090cd610d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
