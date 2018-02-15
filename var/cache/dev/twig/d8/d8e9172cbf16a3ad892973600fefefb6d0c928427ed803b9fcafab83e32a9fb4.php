<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b1759df4a1a7be986b390edfe0d30f82e74479146a9fc426e3181eb3e3d895ae extends Twig_Template
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
        $__internal_c652f34a324ec9786c9097c66c2990c2f6a1df5cdfd3bb8923cfba502e15bf31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c652f34a324ec9786c9097c66c2990c2f6a1df5cdfd3bb8923cfba502e15bf31->enter($__internal_c652f34a324ec9786c9097c66c2990c2f6a1df5cdfd3bb8923cfba502e15bf31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_39deba7add8a917214bcd267cc63b5807d5812546e22d465643b4f3c3e6d91dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39deba7add8a917214bcd267cc63b5807d5812546e22d465643b4f3c3e6d91dc->enter($__internal_39deba7add8a917214bcd267cc63b5807d5812546e22d465643b4f3c3e6d91dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_c652f34a324ec9786c9097c66c2990c2f6a1df5cdfd3bb8923cfba502e15bf31->leave($__internal_c652f34a324ec9786c9097c66c2990c2f6a1df5cdfd3bb8923cfba502e15bf31_prof);

        
        $__internal_39deba7add8a917214bcd267cc63b5807d5812546e22d465643b4f3c3e6d91dc->leave($__internal_39deba7add8a917214bcd267cc63b5807d5812546e22d465643b4f3c3e6d91dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
