<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_2c98e2e3c8fbc7744910bff8fccb3bd0f6929d6229ee9f949eecf0dd8f177a14 extends Twig_Template
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
        $__internal_01de86f3c11c3eb6dcfb96302483d1b598b4a5a6b4c202abeb01289d3fd910d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01de86f3c11c3eb6dcfb96302483d1b598b4a5a6b4c202abeb01289d3fd910d0->enter($__internal_01de86f3c11c3eb6dcfb96302483d1b598b4a5a6b4c202abeb01289d3fd910d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_dfe9545c282377c37230add6cefed6ebefcdc4cb404bf15e392380b43959fe2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfe9545c282377c37230add6cefed6ebefcdc4cb404bf15e392380b43959fe2c->enter($__internal_dfe9545c282377c37230add6cefed6ebefcdc4cb404bf15e392380b43959fe2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_01de86f3c11c3eb6dcfb96302483d1b598b4a5a6b4c202abeb01289d3fd910d0->leave($__internal_01de86f3c11c3eb6dcfb96302483d1b598b4a5a6b4c202abeb01289d3fd910d0_prof);

        
        $__internal_dfe9545c282377c37230add6cefed6ebefcdc4cb404bf15e392380b43959fe2c->leave($__internal_dfe9545c282377c37230add6cefed6ebefcdc4cb404bf15e392380b43959fe2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
