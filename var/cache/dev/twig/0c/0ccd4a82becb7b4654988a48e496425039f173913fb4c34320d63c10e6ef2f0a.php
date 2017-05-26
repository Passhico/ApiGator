<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_c93c390fae30e62625aa7d0f9177c041a27c7bb0956f2150a507e05b293db25a extends Twig_Template
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
        $__internal_3be8c34d47a28c6b51845fcffbc43fb590183f40dae13da3727f918b11882cc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3be8c34d47a28c6b51845fcffbc43fb590183f40dae13da3727f918b11882cc0->enter($__internal_3be8c34d47a28c6b51845fcffbc43fb590183f40dae13da3727f918b11882cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_083bb1e70571a83617a0cd8ccd4794d43e2b2a680f54be18db7f637af5b07d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_083bb1e70571a83617a0cd8ccd4794d43e2b2a680f54be18db7f637af5b07d16->enter($__internal_083bb1e70571a83617a0cd8ccd4794d43e2b2a680f54be18db7f637af5b07d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_3be8c34d47a28c6b51845fcffbc43fb590183f40dae13da3727f918b11882cc0->leave($__internal_3be8c34d47a28c6b51845fcffbc43fb590183f40dae13da3727f918b11882cc0_prof);

        
        $__internal_083bb1e70571a83617a0cd8ccd4794d43e2b2a680f54be18db7f637af5b07d16->leave($__internal_083bb1e70571a83617a0cd8ccd4794d43e2b2a680f54be18db7f637af5b07d16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
