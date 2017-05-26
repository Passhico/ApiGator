<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_88658287e4a2c20e3212415622a454b22c6355b3ae1d876904f128994de442c8 extends Twig_Template
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
        $__internal_7c356eb30aa95197209977aa8fbf16e93b83eb8609a801cc0f1a739d9dfff0f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c356eb30aa95197209977aa8fbf16e93b83eb8609a801cc0f1a739d9dfff0f8->enter($__internal_7c356eb30aa95197209977aa8fbf16e93b83eb8609a801cc0f1a739d9dfff0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_701c23f4632cd91f98c4ff0933d5d1164c39ed7765e63aca18ae160bc9c625ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_701c23f4632cd91f98c4ff0933d5d1164c39ed7765e63aca18ae160bc9c625ee->enter($__internal_701c23f4632cd91f98c4ff0933d5d1164c39ed7765e63aca18ae160bc9c625ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_7c356eb30aa95197209977aa8fbf16e93b83eb8609a801cc0f1a739d9dfff0f8->leave($__internal_7c356eb30aa95197209977aa8fbf16e93b83eb8609a801cc0f1a739d9dfff0f8_prof);

        
        $__internal_701c23f4632cd91f98c4ff0933d5d1164c39ed7765e63aca18ae160bc9c625ee->leave($__internal_701c23f4632cd91f98c4ff0933d5d1164c39ed7765e63aca18ae160bc9c625ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
