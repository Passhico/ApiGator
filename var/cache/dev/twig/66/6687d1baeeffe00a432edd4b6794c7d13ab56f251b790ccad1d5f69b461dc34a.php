<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_309034e8ccf6f2fcfc5416a8d7d1abaa05480d59389beb3e7a8e5f79b54b00dc extends Twig_Template
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
        $__internal_a5050dc59cd83a62c0ee7e0274d3d4b81af3908fbc84e88a8ac39b3a7a292887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5050dc59cd83a62c0ee7e0274d3d4b81af3908fbc84e88a8ac39b3a7a292887->enter($__internal_a5050dc59cd83a62c0ee7e0274d3d4b81af3908fbc84e88a8ac39b3a7a292887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_5e0dfe783e62a49663ddbf9afc7051a8a92a9469a555a58d4f9fc922fa317133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e0dfe783e62a49663ddbf9afc7051a8a92a9469a555a58d4f9fc922fa317133->enter($__internal_5e0dfe783e62a49663ddbf9afc7051a8a92a9469a555a58d4f9fc922fa317133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_a5050dc59cd83a62c0ee7e0274d3d4b81af3908fbc84e88a8ac39b3a7a292887->leave($__internal_a5050dc59cd83a62c0ee7e0274d3d4b81af3908fbc84e88a8ac39b3a7a292887_prof);

        
        $__internal_5e0dfe783e62a49663ddbf9afc7051a8a92a9469a555a58d4f9fc922fa317133->leave($__internal_5e0dfe783e62a49663ddbf9afc7051a8a92a9469a555a58d4f9fc922fa317133_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
