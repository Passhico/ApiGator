<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_039c8408be8f0a15f54c0f91b8d66001d6cc5f6517f2b91423e7d1f54dd19276 extends Twig_Template
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
        $__internal_c4d2c71079eaf0ff48d0e03ae4fa5d80b3fca00aa9069f7e1450a0dab9428746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4d2c71079eaf0ff48d0e03ae4fa5d80b3fca00aa9069f7e1450a0dab9428746->enter($__internal_c4d2c71079eaf0ff48d0e03ae4fa5d80b3fca00aa9069f7e1450a0dab9428746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_bcfe13d5c7155469c148072ad84076fcfe069f9902529e2fc4aa7a5743936459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcfe13d5c7155469c148072ad84076fcfe069f9902529e2fc4aa7a5743936459->enter($__internal_bcfe13d5c7155469c148072ad84076fcfe069f9902529e2fc4aa7a5743936459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c4d2c71079eaf0ff48d0e03ae4fa5d80b3fca00aa9069f7e1450a0dab9428746->leave($__internal_c4d2c71079eaf0ff48d0e03ae4fa5d80b3fca00aa9069f7e1450a0dab9428746_prof);

        
        $__internal_bcfe13d5c7155469c148072ad84076fcfe069f9902529e2fc4aa7a5743936459->leave($__internal_bcfe13d5c7155469c148072ad84076fcfe069f9902529e2fc4aa7a5743936459_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
