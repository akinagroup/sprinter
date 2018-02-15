<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_4f49b7ae5bf024e529fcf1277ec78d2d9db80d2c8333ef4f7541f946b3224c8c extends Twig_Template
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
        $__internal_78a18a8d273c3947f88f0473e3b697ac21eca4a0736725a35cfc124087749b38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78a18a8d273c3947f88f0473e3b697ac21eca4a0736725a35cfc124087749b38->enter($__internal_78a18a8d273c3947f88f0473e3b697ac21eca4a0736725a35cfc124087749b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_c7b275b8970f2e303ac6b9d0baee100493c4f0ead9ff477651cea0aba664e2c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7b275b8970f2e303ac6b9d0baee100493c4f0ead9ff477651cea0aba664e2c2->enter($__internal_c7b275b8970f2e303ac6b9d0baee100493c4f0ead9ff477651cea0aba664e2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_78a18a8d273c3947f88f0473e3b697ac21eca4a0736725a35cfc124087749b38->leave($__internal_78a18a8d273c3947f88f0473e3b697ac21eca4a0736725a35cfc124087749b38_prof);

        
        $__internal_c7b275b8970f2e303ac6b9d0baee100493c4f0ead9ff477651cea0aba664e2c2->leave($__internal_c7b275b8970f2e303ac6b9d0baee100493c4f0ead9ff477651cea0aba664e2c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
