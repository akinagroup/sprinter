<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_8646a4dce2a085edcf89c98f83ac65892ca19ded6d60e06a3400c2ce83f69769 extends Twig_Template
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
        $__internal_6b057d8971175f7bb36a26d92ba96e25d2c40440880a6227616da7ac96ade9dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b057d8971175f7bb36a26d92ba96e25d2c40440880a6227616da7ac96ade9dd->enter($__internal_6b057d8971175f7bb36a26d92ba96e25d2c40440880a6227616da7ac96ade9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_943eee0b754f83e53f175a28d305c2d1f29591c119d28cd398cdfa677f1b15ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_943eee0b754f83e53f175a28d305c2d1f29591c119d28cd398cdfa677f1b15ca->enter($__internal_943eee0b754f83e53f175a28d305c2d1f29591c119d28cd398cdfa677f1b15ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_6b057d8971175f7bb36a26d92ba96e25d2c40440880a6227616da7ac96ade9dd->leave($__internal_6b057d8971175f7bb36a26d92ba96e25d2c40440880a6227616da7ac96ade9dd_prof);

        
        $__internal_943eee0b754f83e53f175a28d305c2d1f29591c119d28cd398cdfa677f1b15ca->leave($__internal_943eee0b754f83e53f175a28d305c2d1f29591c119d28cd398cdfa677f1b15ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
