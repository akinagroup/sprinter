<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_114a9d024c5d089ccb08179cb35399f6360a602c9f36916e7e1ff5cb2be8a9c1 extends Twig_Template
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
        $__internal_35b2d8a14715cced7d29ca7c0d314965551897f37e3048ea6be1908dc1559725 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35b2d8a14715cced7d29ca7c0d314965551897f37e3048ea6be1908dc1559725->enter($__internal_35b2d8a14715cced7d29ca7c0d314965551897f37e3048ea6be1908dc1559725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_7cd7cdf766d415c70ff8c49bd4931794a640bed7237607c9434ead6d0d71e5f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cd7cdf766d415c70ff8c49bd4931794a640bed7237607c9434ead6d0d71e5f2->enter($__internal_7cd7cdf766d415c70ff8c49bd4931794a640bed7237607c9434ead6d0d71e5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_35b2d8a14715cced7d29ca7c0d314965551897f37e3048ea6be1908dc1559725->leave($__internal_35b2d8a14715cced7d29ca7c0d314965551897f37e3048ea6be1908dc1559725_prof);

        
        $__internal_7cd7cdf766d415c70ff8c49bd4931794a640bed7237607c9434ead6d0d71e5f2->leave($__internal_7cd7cdf766d415c70ff8c49bd4931794a640bed7237607c9434ead6d0d71e5f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
