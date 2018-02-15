<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_41c09ee683db5336ce90335f0753beaf15bcea5b281c3d4037002cfd435f9ffe extends Twig_Template
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
        $__internal_23bbb0235e175367acc58b250e952889aa73af6ff90bde84fdf5f9954f4d7893 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23bbb0235e175367acc58b250e952889aa73af6ff90bde84fdf5f9954f4d7893->enter($__internal_23bbb0235e175367acc58b250e952889aa73af6ff90bde84fdf5f9954f4d7893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_f98ee5cd7d474c1c6f5a759deb6e9aebdc132050ea241653dce8636928f44984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f98ee5cd7d474c1c6f5a759deb6e9aebdc132050ea241653dce8636928f44984->enter($__internal_f98ee5cd7d474c1c6f5a759deb6e9aebdc132050ea241653dce8636928f44984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_23bbb0235e175367acc58b250e952889aa73af6ff90bde84fdf5f9954f4d7893->leave($__internal_23bbb0235e175367acc58b250e952889aa73af6ff90bde84fdf5f9954f4d7893_prof);

        
        $__internal_f98ee5cd7d474c1c6f5a759deb6e9aebdc132050ea241653dce8636928f44984->leave($__internal_f98ee5cd7d474c1c6f5a759deb6e9aebdc132050ea241653dce8636928f44984_prof);

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
", "@Framework/Form/url_widget.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
