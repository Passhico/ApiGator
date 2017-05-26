<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_730dbfe53a02068545921d83c1b086de2aee6e3e4ec4ea75c450cfad06f0f3e2 extends Twig_Template
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
        $__internal_b1afeaa03cd74ce0d7b0c7048ced468ad4759b3367d00f2c053ac87820c2ccbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1afeaa03cd74ce0d7b0c7048ced468ad4759b3367d00f2c053ac87820c2ccbf->enter($__internal_b1afeaa03cd74ce0d7b0c7048ced468ad4759b3367d00f2c053ac87820c2ccbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_aed05630ed61172d2c09e4327b598ee1ec74857ea94968b47f6a86a57010d1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed05630ed61172d2c09e4327b598ee1ec74857ea94968b47f6a86a57010d1b0->enter($__internal_aed05630ed61172d2c09e4327b598ee1ec74857ea94968b47f6a86a57010d1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b1afeaa03cd74ce0d7b0c7048ced468ad4759b3367d00f2c053ac87820c2ccbf->leave($__internal_b1afeaa03cd74ce0d7b0c7048ced468ad4759b3367d00f2c053ac87820c2ccbf_prof);

        
        $__internal_aed05630ed61172d2c09e4327b598ee1ec74857ea94968b47f6a86a57010d1b0->leave($__internal_aed05630ed61172d2c09e4327b598ee1ec74857ea94968b47f6a86a57010d1b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
