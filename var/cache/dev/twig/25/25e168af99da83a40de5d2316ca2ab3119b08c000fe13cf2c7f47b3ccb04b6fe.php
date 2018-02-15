<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_3d6e4829ea420291adf87603b96e2cafb78a3c240138584548dc8ddb77c126ac extends Twig_Template
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
        $__internal_6a39765f516dc7701cdf7e4ba2a890051e9108d856b0f1c8822e8c966c775877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a39765f516dc7701cdf7e4ba2a890051e9108d856b0f1c8822e8c966c775877->enter($__internal_6a39765f516dc7701cdf7e4ba2a890051e9108d856b0f1c8822e8c966c775877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_4f3ecd748fdc363218931354097313681dd0e5146477356bb9143d35ed7c1947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f3ecd748fdc363218931354097313681dd0e5146477356bb9143d35ed7c1947->enter($__internal_4f3ecd748fdc363218931354097313681dd0e5146477356bb9143d35ed7c1947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_6a39765f516dc7701cdf7e4ba2a890051e9108d856b0f1c8822e8c966c775877->leave($__internal_6a39765f516dc7701cdf7e4ba2a890051e9108d856b0f1c8822e8c966c775877_prof);

        
        $__internal_4f3ecd748fdc363218931354097313681dd0e5146477356bb9143d35ed7c1947->leave($__internal_4f3ecd748fdc363218931354097313681dd0e5146477356bb9143d35ed7c1947_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
