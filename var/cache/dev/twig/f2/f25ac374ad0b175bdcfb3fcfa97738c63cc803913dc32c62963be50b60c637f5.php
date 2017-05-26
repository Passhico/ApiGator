<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_608b7067ca320635b1df2e4d26596516db3cfcf835e22ec73d5d48137ba1495c extends Twig_Template
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
        $__internal_9dceb0ad793a5df3fffe33c0b5aa2718ac45dc5796d17d7c6322802acdd9cb32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dceb0ad793a5df3fffe33c0b5aa2718ac45dc5796d17d7c6322802acdd9cb32->enter($__internal_9dceb0ad793a5df3fffe33c0b5aa2718ac45dc5796d17d7c6322802acdd9cb32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_0a577a12434e35e2e1a40123cd4ea4fff924f298597c417c102e792bea9607a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a577a12434e35e2e1a40123cd4ea4fff924f298597c417c102e792bea9607a0->enter($__internal_0a577a12434e35e2e1a40123cd4ea4fff924f298597c417c102e792bea9607a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_9dceb0ad793a5df3fffe33c0b5aa2718ac45dc5796d17d7c6322802acdd9cb32->leave($__internal_9dceb0ad793a5df3fffe33c0b5aa2718ac45dc5796d17d7c6322802acdd9cb32_prof);

        
        $__internal_0a577a12434e35e2e1a40123cd4ea4fff924f298597c417c102e792bea9607a0->leave($__internal_0a577a12434e35e2e1a40123cd4ea4fff924f298597c417c102e792bea9607a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
