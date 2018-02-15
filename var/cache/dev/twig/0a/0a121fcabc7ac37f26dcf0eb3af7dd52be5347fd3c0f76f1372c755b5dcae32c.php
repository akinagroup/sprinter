<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_7406b778802a9766194ad0ca9bc66b75ff3f4959d3ab80fdce96785e7f67a3a9 extends Twig_Template
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
        $__internal_894efa8d82d2d32c4d5270f6b4c697e93fa18cdd00550e2eb6f51f1068c54a50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_894efa8d82d2d32c4d5270f6b4c697e93fa18cdd00550e2eb6f51f1068c54a50->enter($__internal_894efa8d82d2d32c4d5270f6b4c697e93fa18cdd00550e2eb6f51f1068c54a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_fe3b0bd386df02f8591bc6179bfdd264c3312107fd3bd2fa86b6c61695a60c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe3b0bd386df02f8591bc6179bfdd264c3312107fd3bd2fa86b6c61695a60c15->enter($__internal_fe3b0bd386df02f8591bc6179bfdd264c3312107fd3bd2fa86b6c61695a60c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_894efa8d82d2d32c4d5270f6b4c697e93fa18cdd00550e2eb6f51f1068c54a50->leave($__internal_894efa8d82d2d32c4d5270f6b4c697e93fa18cdd00550e2eb6f51f1068c54a50_prof);

        
        $__internal_fe3b0bd386df02f8591bc6179bfdd264c3312107fd3bd2fa86b6c61695a60c15->leave($__internal_fe3b0bd386df02f8591bc6179bfdd264c3312107fd3bd2fa86b6c61695a60c15_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
