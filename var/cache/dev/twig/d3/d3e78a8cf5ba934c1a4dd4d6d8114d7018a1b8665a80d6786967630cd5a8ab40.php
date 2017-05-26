<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_4850f2c0dcfb2e57cb4cc55b3887fa32108fced01f5dac7dc55d88a271c5ea9a extends Twig_Template
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
        $__internal_e44c23e649b945878ff2672dbcf228b0b64e443d2079b8f1a2188996737580ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e44c23e649b945878ff2672dbcf228b0b64e443d2079b8f1a2188996737580ca->enter($__internal_e44c23e649b945878ff2672dbcf228b0b64e443d2079b8f1a2188996737580ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_651ddad3d339450133df039db49d53fbf05afd361109e60dab551e653373d95c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651ddad3d339450133df039db49d53fbf05afd361109e60dab551e653373d95c->enter($__internal_651ddad3d339450133df039db49d53fbf05afd361109e60dab551e653373d95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_e44c23e649b945878ff2672dbcf228b0b64e443d2079b8f1a2188996737580ca->leave($__internal_e44c23e649b945878ff2672dbcf228b0b64e443d2079b8f1a2188996737580ca_prof);

        
        $__internal_651ddad3d339450133df039db49d53fbf05afd361109e60dab551e653373d95c->leave($__internal_651ddad3d339450133df039db49d53fbf05afd361109e60dab551e653373d95c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
