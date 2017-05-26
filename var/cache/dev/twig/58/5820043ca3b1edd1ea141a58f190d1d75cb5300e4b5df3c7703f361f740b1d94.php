<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_6d2162cbfb3e154675985e734fccab795eea00ab8b1ab994a4c850c58cc79137 extends Twig_Template
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
        $__internal_0501f02c1013004b432e00d167853dee91775e38dd89b6f706fcd6ca496b2dac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0501f02c1013004b432e00d167853dee91775e38dd89b6f706fcd6ca496b2dac->enter($__internal_0501f02c1013004b432e00d167853dee91775e38dd89b6f706fcd6ca496b2dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_a42f9aebd532c427301e997b16ee336a2d0093ff2bff42180818d0be48c16f7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a42f9aebd532c427301e997b16ee336a2d0093ff2bff42180818d0be48c16f7d->enter($__internal_a42f9aebd532c427301e997b16ee336a2d0093ff2bff42180818d0be48c16f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_0501f02c1013004b432e00d167853dee91775e38dd89b6f706fcd6ca496b2dac->leave($__internal_0501f02c1013004b432e00d167853dee91775e38dd89b6f706fcd6ca496b2dac_prof);

        
        $__internal_a42f9aebd532c427301e997b16ee336a2d0093ff2bff42180818d0be48c16f7d->leave($__internal_a42f9aebd532c427301e997b16ee336a2d0093ff2bff42180818d0be48c16f7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
