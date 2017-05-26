<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_52c71b2e271b3b9a9ed322bfaed267278bdcbd97fcf904cac00d39280672a6ad extends Twig_Template
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
        $__internal_64271d9614e85dc18f08e943d8ad6a7464646ef877d7d78a57d7e84313e89396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64271d9614e85dc18f08e943d8ad6a7464646ef877d7d78a57d7e84313e89396->enter($__internal_64271d9614e85dc18f08e943d8ad6a7464646ef877d7d78a57d7e84313e89396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_b81ad2cb2a2d3c99a92fa8b8ba858a41f01e86de14c8de747f6fb992a41a615b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b81ad2cb2a2d3c99a92fa8b8ba858a41f01e86de14c8de747f6fb992a41a615b->enter($__internal_b81ad2cb2a2d3c99a92fa8b8ba858a41f01e86de14c8de747f6fb992a41a615b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_64271d9614e85dc18f08e943d8ad6a7464646ef877d7d78a57d7e84313e89396->leave($__internal_64271d9614e85dc18f08e943d8ad6a7464646ef877d7d78a57d7e84313e89396_prof);

        
        $__internal_b81ad2cb2a2d3c99a92fa8b8ba858a41f01e86de14c8de747f6fb992a41a615b->leave($__internal_b81ad2cb2a2d3c99a92fa8b8ba858a41f01e86de14c8de747f6fb992a41a615b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
