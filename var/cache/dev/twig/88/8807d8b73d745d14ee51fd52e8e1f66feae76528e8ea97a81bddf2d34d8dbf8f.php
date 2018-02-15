<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_167117401f4beca1ab7780dd7fa09cec12453f5ae2b7210ed9a5b640b98df74d extends Twig_Template
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
        $__internal_11a2eb7f047c82a2d9b27bb6a440dd5060ec2c80d3deee20dfdabdd295dd6861 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11a2eb7f047c82a2d9b27bb6a440dd5060ec2c80d3deee20dfdabdd295dd6861->enter($__internal_11a2eb7f047c82a2d9b27bb6a440dd5060ec2c80d3deee20dfdabdd295dd6861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_a9806f46f544db36878cf8d96fb81adbfb6fb2f7922f9b47797a520616e66114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9806f46f544db36878cf8d96fb81adbfb6fb2f7922f9b47797a520616e66114->enter($__internal_a9806f46f544db36878cf8d96fb81adbfb6fb2f7922f9b47797a520616e66114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_11a2eb7f047c82a2d9b27bb6a440dd5060ec2c80d3deee20dfdabdd295dd6861->leave($__internal_11a2eb7f047c82a2d9b27bb6a440dd5060ec2c80d3deee20dfdabdd295dd6861_prof);

        
        $__internal_a9806f46f544db36878cf8d96fb81adbfb6fb2f7922f9b47797a520616e66114->leave($__internal_a9806f46f544db36878cf8d96fb81adbfb6fb2f7922f9b47797a520616e66114_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
