<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_cd91f0c0bb88adddc0337d0c7c8c479cc29dc1c8b65d2a75a1ee5718be1f055e extends Twig_Template
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
        $__internal_bc6600aed1fb1767f9f78df0c7d0cb0ab5d9299aa48580ddf0b730366effffa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc6600aed1fb1767f9f78df0c7d0cb0ab5d9299aa48580ddf0b730366effffa6->enter($__internal_bc6600aed1fb1767f9f78df0c7d0cb0ab5d9299aa48580ddf0b730366effffa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_c517a32872eaa6880b5ee9ecfc37e11d934327268a6234f03175d6d5ebf06dc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c517a32872eaa6880b5ee9ecfc37e11d934327268a6234f03175d6d5ebf06dc2->enter($__internal_c517a32872eaa6880b5ee9ecfc37e11d934327268a6234f03175d6d5ebf06dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_bc6600aed1fb1767f9f78df0c7d0cb0ab5d9299aa48580ddf0b730366effffa6->leave($__internal_bc6600aed1fb1767f9f78df0c7d0cb0ab5d9299aa48580ddf0b730366effffa6_prof);

        
        $__internal_c517a32872eaa6880b5ee9ecfc37e11d934327268a6234f03175d6d5ebf06dc2->leave($__internal_c517a32872eaa6880b5ee9ecfc37e11d934327268a6234f03175d6d5ebf06dc2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
