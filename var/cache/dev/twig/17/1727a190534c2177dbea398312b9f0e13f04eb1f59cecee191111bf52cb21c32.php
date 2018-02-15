<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_72926d18a2432bf617650aa0ad0a6bffb14a3f8cc17c7d96124eff1de0db9d32 extends Twig_Template
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
        $__internal_9a59a40553ac3cc98292365ef68296b48d25586fff68ae0b3a1824fd89dadb6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a59a40553ac3cc98292365ef68296b48d25586fff68ae0b3a1824fd89dadb6f->enter($__internal_9a59a40553ac3cc98292365ef68296b48d25586fff68ae0b3a1824fd89dadb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_a4465b2f0d3a33ee6ea9f3ed026de533bc08d6fea8f610bd169a8f71887af54d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4465b2f0d3a33ee6ea9f3ed026de533bc08d6fea8f610bd169a8f71887af54d->enter($__internal_a4465b2f0d3a33ee6ea9f3ed026de533bc08d6fea8f610bd169a8f71887af54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_9a59a40553ac3cc98292365ef68296b48d25586fff68ae0b3a1824fd89dadb6f->leave($__internal_9a59a40553ac3cc98292365ef68296b48d25586fff68ae0b3a1824fd89dadb6f_prof);

        
        $__internal_a4465b2f0d3a33ee6ea9f3ed026de533bc08d6fea8f610bd169a8f71887af54d->leave($__internal_a4465b2f0d3a33ee6ea9f3ed026de533bc08d6fea8f610bd169a8f71887af54d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
