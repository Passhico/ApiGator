<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_3c922d4fc4070161e1e46c87f986c27812b1f4e6366f9c541b389c21e21883af extends Twig_Template
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
        $__internal_211c7cb7dca4aec6092e9b4b8b9393fd3f816538ac5985be3841678e83450607 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_211c7cb7dca4aec6092e9b4b8b9393fd3f816538ac5985be3841678e83450607->enter($__internal_211c7cb7dca4aec6092e9b4b8b9393fd3f816538ac5985be3841678e83450607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_9c78666eb8238768f02e18e29d63d4bfa541e7620ed6fc66affbc90ca73295e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c78666eb8238768f02e18e29d63d4bfa541e7620ed6fc66affbc90ca73295e1->enter($__internal_9c78666eb8238768f02e18e29d63d4bfa541e7620ed6fc66affbc90ca73295e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_211c7cb7dca4aec6092e9b4b8b9393fd3f816538ac5985be3841678e83450607->leave($__internal_211c7cb7dca4aec6092e9b4b8b9393fd3f816538ac5985be3841678e83450607_prof);

        
        $__internal_9c78666eb8238768f02e18e29d63d4bfa541e7620ed6fc66affbc90ca73295e1->leave($__internal_9c78666eb8238768f02e18e29d63d4bfa541e7620ed6fc66affbc90ca73295e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
