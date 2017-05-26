<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_e29f34023a116d40266ce2e22a58c83f21ff83dfdb95269a26773974988f4875 extends Twig_Template
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
        $__internal_a942190ce00a0524a8810b5bc96103de48f71e030b581cb0c8aba9b4ed3c9bb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a942190ce00a0524a8810b5bc96103de48f71e030b581cb0c8aba9b4ed3c9bb5->enter($__internal_a942190ce00a0524a8810b5bc96103de48f71e030b581cb0c8aba9b4ed3c9bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_e5b6f00098a9f488e4e8f0dcc312f9b7f338aa6f6e2054800a42552a4a09cc73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5b6f00098a9f488e4e8f0dcc312f9b7f338aa6f6e2054800a42552a4a09cc73->enter($__internal_e5b6f00098a9f488e4e8f0dcc312f9b7f338aa6f6e2054800a42552a4a09cc73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_a942190ce00a0524a8810b5bc96103de48f71e030b581cb0c8aba9b4ed3c9bb5->leave($__internal_a942190ce00a0524a8810b5bc96103de48f71e030b581cb0c8aba9b4ed3c9bb5_prof);

        
        $__internal_e5b6f00098a9f488e4e8f0dcc312f9b7f338aa6f6e2054800a42552a4a09cc73->leave($__internal_e5b6f00098a9f488e4e8f0dcc312f9b7f338aa6f6e2054800a42552a4a09cc73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
