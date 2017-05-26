<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_cc7395b6542a33605cd8efa31a071b66250f928869b1db4364b2cc5113aa9c4c extends Twig_Template
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
        $__internal_ee9134bf3e0baaf83628d6126206058f38aac1213df8e0100e31e86fc59ce787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee9134bf3e0baaf83628d6126206058f38aac1213df8e0100e31e86fc59ce787->enter($__internal_ee9134bf3e0baaf83628d6126206058f38aac1213df8e0100e31e86fc59ce787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_d0149dcdde3caf338991c75e49988b0a60673ffa5fc5b251351cca22779a6343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0149dcdde3caf338991c75e49988b0a60673ffa5fc5b251351cca22779a6343->enter($__internal_d0149dcdde3caf338991c75e49988b0a60673ffa5fc5b251351cca22779a6343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_ee9134bf3e0baaf83628d6126206058f38aac1213df8e0100e31e86fc59ce787->leave($__internal_ee9134bf3e0baaf83628d6126206058f38aac1213df8e0100e31e86fc59ce787_prof);

        
        $__internal_d0149dcdde3caf338991c75e49988b0a60673ffa5fc5b251351cca22779a6343->leave($__internal_d0149dcdde3caf338991c75e49988b0a60673ffa5fc5b251351cca22779a6343_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
