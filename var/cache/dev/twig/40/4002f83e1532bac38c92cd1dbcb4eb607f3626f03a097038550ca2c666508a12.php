<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_c0a3f8638ae0c85834c2aba59eb68a6e712da772bd1119807e6df0d78d1307d1 extends Twig_Template
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
        $__internal_61d0bef9e8fe8312248adc7688f4b15c95f1aaaa58f5642c868b38b842be1253 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61d0bef9e8fe8312248adc7688f4b15c95f1aaaa58f5642c868b38b842be1253->enter($__internal_61d0bef9e8fe8312248adc7688f4b15c95f1aaaa58f5642c868b38b842be1253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_273135c2b33eeb4eb530c22f99e8d58ac27bdad1a37d7fcdbf84f5f20f21f419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_273135c2b33eeb4eb530c22f99e8d58ac27bdad1a37d7fcdbf84f5f20f21f419->enter($__internal_273135c2b33eeb4eb530c22f99e8d58ac27bdad1a37d7fcdbf84f5f20f21f419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_61d0bef9e8fe8312248adc7688f4b15c95f1aaaa58f5642c868b38b842be1253->leave($__internal_61d0bef9e8fe8312248adc7688f4b15c95f1aaaa58f5642c868b38b842be1253_prof);

        
        $__internal_273135c2b33eeb4eb530c22f99e8d58ac27bdad1a37d7fcdbf84f5f20f21f419->leave($__internal_273135c2b33eeb4eb530c22f99e8d58ac27bdad1a37d7fcdbf84f5f20f21f419_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
