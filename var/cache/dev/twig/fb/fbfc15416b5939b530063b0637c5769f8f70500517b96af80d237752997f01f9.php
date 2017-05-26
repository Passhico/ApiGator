<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_694d42c64971483a8a1f9f9abb9b9751b7d351694b4687af013aa11c9e81203b extends Twig_Template
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
        $__internal_6921cd608c295ce689fe7f2b4d928b277ad45ea42fdc7b834f3767acf096a355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6921cd608c295ce689fe7f2b4d928b277ad45ea42fdc7b834f3767acf096a355->enter($__internal_6921cd608c295ce689fe7f2b4d928b277ad45ea42fdc7b834f3767acf096a355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_e62f9545f90df2e21dfd199df839652ad239d3e8d1cb75200b35510a4ca0d97c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e62f9545f90df2e21dfd199df839652ad239d3e8d1cb75200b35510a4ca0d97c->enter($__internal_e62f9545f90df2e21dfd199df839652ad239d3e8d1cb75200b35510a4ca0d97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_6921cd608c295ce689fe7f2b4d928b277ad45ea42fdc7b834f3767acf096a355->leave($__internal_6921cd608c295ce689fe7f2b4d928b277ad45ea42fdc7b834f3767acf096a355_prof);

        
        $__internal_e62f9545f90df2e21dfd199df839652ad239d3e8d1cb75200b35510a4ca0d97c->leave($__internal_e62f9545f90df2e21dfd199df839652ad239d3e8d1cb75200b35510a4ca0d97c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
