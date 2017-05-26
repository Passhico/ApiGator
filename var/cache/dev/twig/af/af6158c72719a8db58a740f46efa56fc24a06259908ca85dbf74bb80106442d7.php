<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_8fbd2432db0ea56cb15227b0cce95354397aa279288316a62028b64cc0714155 extends Twig_Template
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
        $__internal_94bf510bcce593694317a30ad304553e468c74254b8f7794f086adfe7fbd4766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94bf510bcce593694317a30ad304553e468c74254b8f7794f086adfe7fbd4766->enter($__internal_94bf510bcce593694317a30ad304553e468c74254b8f7794f086adfe7fbd4766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_4102ec6c50bab0448b06260fc8aae1ae7ba6e7bf17ec18b274271b64b9dec68a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4102ec6c50bab0448b06260fc8aae1ae7ba6e7bf17ec18b274271b64b9dec68a->enter($__internal_4102ec6c50bab0448b06260fc8aae1ae7ba6e7bf17ec18b274271b64b9dec68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_94bf510bcce593694317a30ad304553e468c74254b8f7794f086adfe7fbd4766->leave($__internal_94bf510bcce593694317a30ad304553e468c74254b8f7794f086adfe7fbd4766_prof);

        
        $__internal_4102ec6c50bab0448b06260fc8aae1ae7ba6e7bf17ec18b274271b64b9dec68a->leave($__internal_4102ec6c50bab0448b06260fc8aae1ae7ba6e7bf17ec18b274271b64b9dec68a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
