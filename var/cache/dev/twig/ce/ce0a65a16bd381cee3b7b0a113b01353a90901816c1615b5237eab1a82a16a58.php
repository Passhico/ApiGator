<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_bd9e01a15ca4c67c3670a852cd56782813ebcdc6d5b9817287c71386bcab37e1 extends Twig_Template
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
        $__internal_c788503a0c780e652866622f7c09e4b2a4ff72f9121c9ea37c8c5a293a5379b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c788503a0c780e652866622f7c09e4b2a4ff72f9121c9ea37c8c5a293a5379b9->enter($__internal_c788503a0c780e652866622f7c09e4b2a4ff72f9121c9ea37c8c5a293a5379b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_daceb3add728771424da212ec7f8d0ff9bde6fed9a58dedb9f9220c739f0106c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daceb3add728771424da212ec7f8d0ff9bde6fed9a58dedb9f9220c739f0106c->enter($__internal_daceb3add728771424da212ec7f8d0ff9bde6fed9a58dedb9f9220c739f0106c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_c788503a0c780e652866622f7c09e4b2a4ff72f9121c9ea37c8c5a293a5379b9->leave($__internal_c788503a0c780e652866622f7c09e4b2a4ff72f9121c9ea37c8c5a293a5379b9_prof);

        
        $__internal_daceb3add728771424da212ec7f8d0ff9bde6fed9a58dedb9f9220c739f0106c->leave($__internal_daceb3add728771424da212ec7f8d0ff9bde6fed9a58dedb9f9220c739f0106c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
