<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_bd4dea5cb6024d6fdea6e2e1b63ad7ffce49502c72b8ce20828d9ede64084fa7 extends Twig_Template
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
        $__internal_1e5a65e4904a4f88bb2394801ff4e75d137ddb53241cce937ecfac9bee966829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e5a65e4904a4f88bb2394801ff4e75d137ddb53241cce937ecfac9bee966829->enter($__internal_1e5a65e4904a4f88bb2394801ff4e75d137ddb53241cce937ecfac9bee966829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_cd9e4e36d6500023a62050ed1ff3a146aa799ff8aec76cfba5a7816e4b10449f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd9e4e36d6500023a62050ed1ff3a146aa799ff8aec76cfba5a7816e4b10449f->enter($__internal_cd9e4e36d6500023a62050ed1ff3a146aa799ff8aec76cfba5a7816e4b10449f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_1e5a65e4904a4f88bb2394801ff4e75d137ddb53241cce937ecfac9bee966829->leave($__internal_1e5a65e4904a4f88bb2394801ff4e75d137ddb53241cce937ecfac9bee966829_prof);

        
        $__internal_cd9e4e36d6500023a62050ed1ff3a146aa799ff8aec76cfba5a7816e4b10449f->leave($__internal_cd9e4e36d6500023a62050ed1ff3a146aa799ff8aec76cfba5a7816e4b10449f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
