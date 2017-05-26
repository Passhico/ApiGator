<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_0939285363114b8f90a7772a05fea5752a21c1bf8e13007a86ba91a7de776292 extends Twig_Template
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
        $__internal_78c83f18a08b05d523fb4da8a2a59dc6e136166c06b11a17e271add10f4f4098 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78c83f18a08b05d523fb4da8a2a59dc6e136166c06b11a17e271add10f4f4098->enter($__internal_78c83f18a08b05d523fb4da8a2a59dc6e136166c06b11a17e271add10f4f4098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_d7004e2eee4a17cda9acec46f2886fd7343ed133af8036fbd33b17bef44c2f4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7004e2eee4a17cda9acec46f2886fd7343ed133af8036fbd33b17bef44c2f4f->enter($__internal_d7004e2eee4a17cda9acec46f2886fd7343ed133af8036fbd33b17bef44c2f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_78c83f18a08b05d523fb4da8a2a59dc6e136166c06b11a17e271add10f4f4098->leave($__internal_78c83f18a08b05d523fb4da8a2a59dc6e136166c06b11a17e271add10f4f4098_prof);

        
        $__internal_d7004e2eee4a17cda9acec46f2886fd7343ed133af8036fbd33b17bef44c2f4f->leave($__internal_d7004e2eee4a17cda9acec46f2886fd7343ed133af8036fbd33b17bef44c2f4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
