<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_75f0124835710ed546031e0aba8023c6b3cf54a2925fee1ebcfbda441f8314aa extends Twig_Template
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
        $__internal_fc99087bcecbc4f9a8dc8dc572ba571486d01338f90c564a8d0c94137046e993 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc99087bcecbc4f9a8dc8dc572ba571486d01338f90c564a8d0c94137046e993->enter($__internal_fc99087bcecbc4f9a8dc8dc572ba571486d01338f90c564a8d0c94137046e993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_e57823030515aa310f69c069f1835cfe9abd8d8144b4d045e700e57c191cfed9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e57823030515aa310f69c069f1835cfe9abd8d8144b4d045e700e57c191cfed9->enter($__internal_e57823030515aa310f69c069f1835cfe9abd8d8144b4d045e700e57c191cfed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_fc99087bcecbc4f9a8dc8dc572ba571486d01338f90c564a8d0c94137046e993->leave($__internal_fc99087bcecbc4f9a8dc8dc572ba571486d01338f90c564a8d0c94137046e993_prof);

        
        $__internal_e57823030515aa310f69c069f1835cfe9abd8d8144b4d045e700e57c191cfed9->leave($__internal_e57823030515aa310f69c069f1835cfe9abd8d8144b4d045e700e57c191cfed9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
