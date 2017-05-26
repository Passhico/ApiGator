<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_a943e3b02812186fcae4b87fb099d8262a03497eb77f2e6d6cbcce7eb4bcb1cc extends Twig_Template
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
        $__internal_ae62953d0f3d1874202f8e95f196640a78ae69bc2f4d13d3beb0aa74e5930960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae62953d0f3d1874202f8e95f196640a78ae69bc2f4d13d3beb0aa74e5930960->enter($__internal_ae62953d0f3d1874202f8e95f196640a78ae69bc2f4d13d3beb0aa74e5930960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_abac864667275aadac9ba83e2bb74b98cff89bcf5c485ceec9d6033d3fd7e996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abac864667275aadac9ba83e2bb74b98cff89bcf5c485ceec9d6033d3fd7e996->enter($__internal_abac864667275aadac9ba83e2bb74b98cff89bcf5c485ceec9d6033d3fd7e996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_ae62953d0f3d1874202f8e95f196640a78ae69bc2f4d13d3beb0aa74e5930960->leave($__internal_ae62953d0f3d1874202f8e95f196640a78ae69bc2f4d13d3beb0aa74e5930960_prof);

        
        $__internal_abac864667275aadac9ba83e2bb74b98cff89bcf5c485ceec9d6033d3fd7e996->leave($__internal_abac864667275aadac9ba83e2bb74b98cff89bcf5c485ceec9d6033d3fd7e996_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
