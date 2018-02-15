<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_10689e0cdd1fcee4f7595264419789c12ec04601f854bccc395b491dae6e276c extends Twig_Template
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
        $__internal_56bc19f58a9316f3ac8bd551d19ddae24b254ff99bd7f2ad0c29c285df6ac02d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56bc19f58a9316f3ac8bd551d19ddae24b254ff99bd7f2ad0c29c285df6ac02d->enter($__internal_56bc19f58a9316f3ac8bd551d19ddae24b254ff99bd7f2ad0c29c285df6ac02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_afc3f069276077c19018bdf7e416dab145f08f31d78fb73ffb51d6f07d0ac2d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afc3f069276077c19018bdf7e416dab145f08f31d78fb73ffb51d6f07d0ac2d6->enter($__internal_afc3f069276077c19018bdf7e416dab145f08f31d78fb73ffb51d6f07d0ac2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_56bc19f58a9316f3ac8bd551d19ddae24b254ff99bd7f2ad0c29c285df6ac02d->leave($__internal_56bc19f58a9316f3ac8bd551d19ddae24b254ff99bd7f2ad0c29c285df6ac02d_prof);

        
        $__internal_afc3f069276077c19018bdf7e416dab145f08f31d78fb73ffb51d6f07d0ac2d6->leave($__internal_afc3f069276077c19018bdf7e416dab145f08f31d78fb73ffb51d6f07d0ac2d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
