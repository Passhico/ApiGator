<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_9d18fb22649df8dbca9911179a1c9172fe3c31be9311ba7a2446a1b832a652ad extends Twig_Template
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
        $__internal_42f0b43b4e41b83a02513e775ba91d94032a192c4993fe49dc60d4810a3769d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42f0b43b4e41b83a02513e775ba91d94032a192c4993fe49dc60d4810a3769d0->enter($__internal_42f0b43b4e41b83a02513e775ba91d94032a192c4993fe49dc60d4810a3769d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_9317424b7f9e17014579833428c4a31d17aba84d307ad647e4b4c0fabfb25590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9317424b7f9e17014579833428c4a31d17aba84d307ad647e4b4c0fabfb25590->enter($__internal_9317424b7f9e17014579833428c4a31d17aba84d307ad647e4b4c0fabfb25590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_42f0b43b4e41b83a02513e775ba91d94032a192c4993fe49dc60d4810a3769d0->leave($__internal_42f0b43b4e41b83a02513e775ba91d94032a192c4993fe49dc60d4810a3769d0_prof);

        
        $__internal_9317424b7f9e17014579833428c4a31d17aba84d307ad647e4b4c0fabfb25590->leave($__internal_9317424b7f9e17014579833428c4a31d17aba84d307ad647e4b4c0fabfb25590_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
