<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_a56d57cbf0d7048e7277f1ff77eea5310ce01205609855732854ff991e16f05c extends Twig_Template
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
        $__internal_470073533627432804509185511f9edbe796bf78c43e811ccf6326712da7c92c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_470073533627432804509185511f9edbe796bf78c43e811ccf6326712da7c92c->enter($__internal_470073533627432804509185511f9edbe796bf78c43e811ccf6326712da7c92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_00612d0e174b49aab8791ac7f6432b792022b93285107a3c0870a5bdd21049cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00612d0e174b49aab8791ac7f6432b792022b93285107a3c0870a5bdd21049cc->enter($__internal_00612d0e174b49aab8791ac7f6432b792022b93285107a3c0870a5bdd21049cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_470073533627432804509185511f9edbe796bf78c43e811ccf6326712da7c92c->leave($__internal_470073533627432804509185511f9edbe796bf78c43e811ccf6326712da7c92c_prof);

        
        $__internal_00612d0e174b49aab8791ac7f6432b792022b93285107a3c0870a5bdd21049cc->leave($__internal_00612d0e174b49aab8791ac7f6432b792022b93285107a3c0870a5bdd21049cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
