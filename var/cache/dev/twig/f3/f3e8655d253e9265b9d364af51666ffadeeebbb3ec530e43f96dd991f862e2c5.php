<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_a43931e9740d3c914b42d076635d63e79ba52f0bcd2b813be3687d4c0f88957f extends Twig_Template
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
        $__internal_aaa8cf5e8ed49c7e538ccc5f88da7091fea19cf12dd3e0ae72582dbe3f8d134d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaa8cf5e8ed49c7e538ccc5f88da7091fea19cf12dd3e0ae72582dbe3f8d134d->enter($__internal_aaa8cf5e8ed49c7e538ccc5f88da7091fea19cf12dd3e0ae72582dbe3f8d134d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_6a64eecd8302e2a0ba7119ba8c3ef843fea36201c0a6c12fd74690090c1d7e66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a64eecd8302e2a0ba7119ba8c3ef843fea36201c0a6c12fd74690090c1d7e66->enter($__internal_6a64eecd8302e2a0ba7119ba8c3ef843fea36201c0a6c12fd74690090c1d7e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_aaa8cf5e8ed49c7e538ccc5f88da7091fea19cf12dd3e0ae72582dbe3f8d134d->leave($__internal_aaa8cf5e8ed49c7e538ccc5f88da7091fea19cf12dd3e0ae72582dbe3f8d134d_prof);

        
        $__internal_6a64eecd8302e2a0ba7119ba8c3ef843fea36201c0a6c12fd74690090c1d7e66->leave($__internal_6a64eecd8302e2a0ba7119ba8c3ef843fea36201c0a6c12fd74690090c1d7e66_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
