<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_4d9812275ecf02b2766322da5601471912f5d784b586c60d9d38ac969c80a8d1 extends Twig_Template
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
        $__internal_1b8ad63e3c3d323ce5c8e32a2044645256bbea4aab00bc0e166b118db183414f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b8ad63e3c3d323ce5c8e32a2044645256bbea4aab00bc0e166b118db183414f->enter($__internal_1b8ad63e3c3d323ce5c8e32a2044645256bbea4aab00bc0e166b118db183414f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_66e19dbfd01ba244caefcc1a8f3ff007118abba472d5db04a0a8bd4d36bab06b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e19dbfd01ba244caefcc1a8f3ff007118abba472d5db04a0a8bd4d36bab06b->enter($__internal_66e19dbfd01ba244caefcc1a8f3ff007118abba472d5db04a0a8bd4d36bab06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1b8ad63e3c3d323ce5c8e32a2044645256bbea4aab00bc0e166b118db183414f->leave($__internal_1b8ad63e3c3d323ce5c8e32a2044645256bbea4aab00bc0e166b118db183414f_prof);

        
        $__internal_66e19dbfd01ba244caefcc1a8f3ff007118abba472d5db04a0a8bd4d36bab06b->leave($__internal_66e19dbfd01ba244caefcc1a8f3ff007118abba472d5db04a0a8bd4d36bab06b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
