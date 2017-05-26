<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_f800af8883bfc2f6d4b9f2df494c0f8f02b38057134e983f2a09c8e8383449d9 extends Twig_Template
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
        $__internal_7333dbb5175142f309841de6dde657de199dda866d3783b8e407369db17d941e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7333dbb5175142f309841de6dde657de199dda866d3783b8e407369db17d941e->enter($__internal_7333dbb5175142f309841de6dde657de199dda866d3783b8e407369db17d941e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_bf92b842bc75ddba4c747971c540a6f08a311375fcf24857b49e90b75a06c492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf92b842bc75ddba4c747971c540a6f08a311375fcf24857b49e90b75a06c492->enter($__internal_bf92b842bc75ddba4c747971c540a6f08a311375fcf24857b49e90b75a06c492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_7333dbb5175142f309841de6dde657de199dda866d3783b8e407369db17d941e->leave($__internal_7333dbb5175142f309841de6dde657de199dda866d3783b8e407369db17d941e_prof);

        
        $__internal_bf92b842bc75ddba4c747971c540a6f08a311375fcf24857b49e90b75a06c492->leave($__internal_bf92b842bc75ddba4c747971c540a6f08a311375fcf24857b49e90b75a06c492_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
