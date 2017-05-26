<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_7cb4d6419e78bb3d18cfbd196a8d81ac8f42b63b6b3987ffde3533331db8cb68 extends Twig_Template
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
        $__internal_af786bf5bfc18ad994e0e37bf03ae62b6440d2ce7c2464e4c5eeebea9d80935f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af786bf5bfc18ad994e0e37bf03ae62b6440d2ce7c2464e4c5eeebea9d80935f->enter($__internal_af786bf5bfc18ad994e0e37bf03ae62b6440d2ce7c2464e4c5eeebea9d80935f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_bcf56c3dd4a8e66d64ae03fa83811ce5d88cb1f224ab8e01d60429162fc1c142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcf56c3dd4a8e66d64ae03fa83811ce5d88cb1f224ab8e01d60429162fc1c142->enter($__internal_bcf56c3dd4a8e66d64ae03fa83811ce5d88cb1f224ab8e01d60429162fc1c142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_af786bf5bfc18ad994e0e37bf03ae62b6440d2ce7c2464e4c5eeebea9d80935f->leave($__internal_af786bf5bfc18ad994e0e37bf03ae62b6440d2ce7c2464e4c5eeebea9d80935f_prof);

        
        $__internal_bcf56c3dd4a8e66d64ae03fa83811ce5d88cb1f224ab8e01d60429162fc1c142->leave($__internal_bcf56c3dd4a8e66d64ae03fa83811ce5d88cb1f224ab8e01d60429162fc1c142_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
