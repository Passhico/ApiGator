<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_739896b9a2e2ce20bbe4cbaa75835e148a1848b502de8d2835bee674e2c5b435 extends Twig_Template
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
        $__internal_164661d23fcd82f548a46ba87ea8043d2f96db85e199241020940e4eff784c18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_164661d23fcd82f548a46ba87ea8043d2f96db85e199241020940e4eff784c18->enter($__internal_164661d23fcd82f548a46ba87ea8043d2f96db85e199241020940e4eff784c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_7351bfae2ec79e8653ad8a5b00590260792da5318d0e16ad27b20bafa6f90f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7351bfae2ec79e8653ad8a5b00590260792da5318d0e16ad27b20bafa6f90f53->enter($__internal_7351bfae2ec79e8653ad8a5b00590260792da5318d0e16ad27b20bafa6f90f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_164661d23fcd82f548a46ba87ea8043d2f96db85e199241020940e4eff784c18->leave($__internal_164661d23fcd82f548a46ba87ea8043d2f96db85e199241020940e4eff784c18_prof);

        
        $__internal_7351bfae2ec79e8653ad8a5b00590260792da5318d0e16ad27b20bafa6f90f53->leave($__internal_7351bfae2ec79e8653ad8a5b00590260792da5318d0e16ad27b20bafa6f90f53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
