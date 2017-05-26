<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_d36e56bd968475ee1dab93383b0fcfe5ea2485d556cfca72a57e677f44f92f05 extends Twig_Template
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
        $__internal_fba4291902a9dcf55fc5c4d295b4c85cc21bc1fd1e366b8ee94ccce03f489b5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fba4291902a9dcf55fc5c4d295b4c85cc21bc1fd1e366b8ee94ccce03f489b5a->enter($__internal_fba4291902a9dcf55fc5c4d295b4c85cc21bc1fd1e366b8ee94ccce03f489b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_29af8d72048b13e82a6341601fd1b2e4650ff1fda3ebe3e79d1398d7ff330c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29af8d72048b13e82a6341601fd1b2e4650ff1fda3ebe3e79d1398d7ff330c86->enter($__internal_29af8d72048b13e82a6341601fd1b2e4650ff1fda3ebe3e79d1398d7ff330c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_fba4291902a9dcf55fc5c4d295b4c85cc21bc1fd1e366b8ee94ccce03f489b5a->leave($__internal_fba4291902a9dcf55fc5c4d295b4c85cc21bc1fd1e366b8ee94ccce03f489b5a_prof);

        
        $__internal_29af8d72048b13e82a6341601fd1b2e4650ff1fda3ebe3e79d1398d7ff330c86->leave($__internal_29af8d72048b13e82a6341601fd1b2e4650ff1fda3ebe3e79d1398d7ff330c86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
