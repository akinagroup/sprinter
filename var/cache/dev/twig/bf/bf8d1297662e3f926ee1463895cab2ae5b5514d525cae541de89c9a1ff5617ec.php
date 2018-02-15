<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_7294a567d6641c78105a26933dbf3cba6bc82e8bf9d0f5181c843fb0d5cf0e20 extends Twig_Template
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
        $__internal_ae98d01e296a5bfc5901cb7a0e99315d4780edadc474cf4f6408897fd177515f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae98d01e296a5bfc5901cb7a0e99315d4780edadc474cf4f6408897fd177515f->enter($__internal_ae98d01e296a5bfc5901cb7a0e99315d4780edadc474cf4f6408897fd177515f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_d771c53fcb720d631fc88401082020345a06ea8aa747656f48b54830435e7120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d771c53fcb720d631fc88401082020345a06ea8aa747656f48b54830435e7120->enter($__internal_d771c53fcb720d631fc88401082020345a06ea8aa747656f48b54830435e7120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ae98d01e296a5bfc5901cb7a0e99315d4780edadc474cf4f6408897fd177515f->leave($__internal_ae98d01e296a5bfc5901cb7a0e99315d4780edadc474cf4f6408897fd177515f_prof);

        
        $__internal_d771c53fcb720d631fc88401082020345a06ea8aa747656f48b54830435e7120->leave($__internal_d771c53fcb720d631fc88401082020345a06ea8aa747656f48b54830435e7120_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
