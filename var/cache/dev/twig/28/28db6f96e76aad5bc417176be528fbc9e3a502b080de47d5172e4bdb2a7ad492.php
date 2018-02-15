<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_0ffb46d0ba61d4fd5977667af8f02092219f4b1b6319905e85b72ee7f4ae613a extends Twig_Template
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
        $__internal_bc726436db1ed6a60f6460938def12df1842632287fc4e54b3c48aba040f3662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc726436db1ed6a60f6460938def12df1842632287fc4e54b3c48aba040f3662->enter($__internal_bc726436db1ed6a60f6460938def12df1842632287fc4e54b3c48aba040f3662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_690ac7ffc3a334f55145c7b50f3f5543e2c0cf029f51a7be8b65f5db7d707093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_690ac7ffc3a334f55145c7b50f3f5543e2c0cf029f51a7be8b65f5db7d707093->enter($__internal_690ac7ffc3a334f55145c7b50f3f5543e2c0cf029f51a7be8b65f5db7d707093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_bc726436db1ed6a60f6460938def12df1842632287fc4e54b3c48aba040f3662->leave($__internal_bc726436db1ed6a60f6460938def12df1842632287fc4e54b3c48aba040f3662_prof);

        
        $__internal_690ac7ffc3a334f55145c7b50f3f5543e2c0cf029f51a7be8b65f5db7d707093->leave($__internal_690ac7ffc3a334f55145c7b50f3f5543e2c0cf029f51a7be8b65f5db7d707093_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
