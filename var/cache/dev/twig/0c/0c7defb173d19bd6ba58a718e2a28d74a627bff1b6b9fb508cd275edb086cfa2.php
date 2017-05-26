<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_e69a6833b51f576512bedaf60e908ff2091af2ca88f84092b92fdfbb9c65f522 extends Twig_Template
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
        $__internal_1d194631487c12d427b3fd7fcf5b5dd0ee24d323061ab2ac33a1034d12006875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d194631487c12d427b3fd7fcf5b5dd0ee24d323061ab2ac33a1034d12006875->enter($__internal_1d194631487c12d427b3fd7fcf5b5dd0ee24d323061ab2ac33a1034d12006875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_e2c42e107639c05d06c7175349aefa9ee3b21f36f3492bd34b96c3874ed4d12e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2c42e107639c05d06c7175349aefa9ee3b21f36f3492bd34b96c3874ed4d12e->enter($__internal_e2c42e107639c05d06c7175349aefa9ee3b21f36f3492bd34b96c3874ed4d12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1d194631487c12d427b3fd7fcf5b5dd0ee24d323061ab2ac33a1034d12006875->leave($__internal_1d194631487c12d427b3fd7fcf5b5dd0ee24d323061ab2ac33a1034d12006875_prof);

        
        $__internal_e2c42e107639c05d06c7175349aefa9ee3b21f36f3492bd34b96c3874ed4d12e->leave($__internal_e2c42e107639c05d06c7175349aefa9ee3b21f36f3492bd34b96c3874ed4d12e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
