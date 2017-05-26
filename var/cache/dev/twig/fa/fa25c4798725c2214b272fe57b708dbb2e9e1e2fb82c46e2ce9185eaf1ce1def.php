<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_f732f6f18ac5aa45de847aeb8023bb1d780b21a1ee8b56d3719304fefcd2628a extends Twig_Template
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
        $__internal_53b91118b67e15c02f4b7888c48cc9aba9844d1936433ac7f19f4d8600a60f3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53b91118b67e15c02f4b7888c48cc9aba9844d1936433ac7f19f4d8600a60f3d->enter($__internal_53b91118b67e15c02f4b7888c48cc9aba9844d1936433ac7f19f4d8600a60f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_75c5259af9854ba70bb60c3aaa2bf5997f210da091b545ca9de62bf8444fcacc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c5259af9854ba70bb60c3aaa2bf5997f210da091b545ca9de62bf8444fcacc->enter($__internal_75c5259af9854ba70bb60c3aaa2bf5997f210da091b545ca9de62bf8444fcacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_53b91118b67e15c02f4b7888c48cc9aba9844d1936433ac7f19f4d8600a60f3d->leave($__internal_53b91118b67e15c02f4b7888c48cc9aba9844d1936433ac7f19f4d8600a60f3d_prof);

        
        $__internal_75c5259af9854ba70bb60c3aaa2bf5997f210da091b545ca9de62bf8444fcacc->leave($__internal_75c5259af9854ba70bb60c3aaa2bf5997f210da091b545ca9de62bf8444fcacc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
