<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_d93b471c3bb8143139f0ff6e0726e405f65fa64de2b70a5c1b25315dbd050aa9 extends Twig_Template
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
        $__internal_e32ae34f8a9138df3daceb033582e71bb9a6ffdd571fa3bdaefd1726983be36f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e32ae34f8a9138df3daceb033582e71bb9a6ffdd571fa3bdaefd1726983be36f->enter($__internal_e32ae34f8a9138df3daceb033582e71bb9a6ffdd571fa3bdaefd1726983be36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_10b27b1f7742e09df014b89146ead7bea6073b1144cf6646b4d5cc987512ef9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10b27b1f7742e09df014b89146ead7bea6073b1144cf6646b4d5cc987512ef9d->enter($__internal_10b27b1f7742e09df014b89146ead7bea6073b1144cf6646b4d5cc987512ef9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_e32ae34f8a9138df3daceb033582e71bb9a6ffdd571fa3bdaefd1726983be36f->leave($__internal_e32ae34f8a9138df3daceb033582e71bb9a6ffdd571fa3bdaefd1726983be36f_prof);

        
        $__internal_10b27b1f7742e09df014b89146ead7bea6073b1144cf6646b4d5cc987512ef9d->leave($__internal_10b27b1f7742e09df014b89146ead7bea6073b1144cf6646b4d5cc987512ef9d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/passh/src/curso_symfony/cursoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
