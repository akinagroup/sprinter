<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_f68effcc271a793b1d2ba25f1c25505ff92ed40b0ffec01f8b262ebd82ab5228 extends Twig_Template
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
        $__internal_694f83e5853b6d51472506a6a231a158dfdcad1795099f8356c65ef58b64d665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_694f83e5853b6d51472506a6a231a158dfdcad1795099f8356c65ef58b64d665->enter($__internal_694f83e5853b6d51472506a6a231a158dfdcad1795099f8356c65ef58b64d665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_167136516fb117c658107ac6961cec65dadc11d4e082fbc16c0f45af920263ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_167136516fb117c658107ac6961cec65dadc11d4e082fbc16c0f45af920263ca->enter($__internal_167136516fb117c658107ac6961cec65dadc11d4e082fbc16c0f45af920263ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_694f83e5853b6d51472506a6a231a158dfdcad1795099f8356c65ef58b64d665->leave($__internal_694f83e5853b6d51472506a6a231a158dfdcad1795099f8356c65ef58b64d665_prof);

        
        $__internal_167136516fb117c658107ac6961cec65dadc11d4e082fbc16c0f45af920263ca->leave($__internal_167136516fb117c658107ac6961cec65dadc11d4e082fbc16c0f45af920263ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
