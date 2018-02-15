<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_47e9787cf79737ff0dc5e95934a359f4659f8e23154424b4d84e775d4635d823 extends Twig_Template
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
        $__internal_c65e8fe2c56fd4537081c01523f7b7a559b3f9adc783f99fd45d886cc019f229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c65e8fe2c56fd4537081c01523f7b7a559b3f9adc783f99fd45d886cc019f229->enter($__internal_c65e8fe2c56fd4537081c01523f7b7a559b3f9adc783f99fd45d886cc019f229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_e373e4bee09d5e43ad7b130c44219e2573fa62a36f79da603da91bc9df870c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e373e4bee09d5e43ad7b130c44219e2573fa62a36f79da603da91bc9df870c26->enter($__internal_e373e4bee09d5e43ad7b130c44219e2573fa62a36f79da603da91bc9df870c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c65e8fe2c56fd4537081c01523f7b7a559b3f9adc783f99fd45d886cc019f229->leave($__internal_c65e8fe2c56fd4537081c01523f7b7a559b3f9adc783f99fd45d886cc019f229_prof);

        
        $__internal_e373e4bee09d5e43ad7b130c44219e2573fa62a36f79da603da91bc9df870c26->leave($__internal_e373e4bee09d5e43ad7b130c44219e2573fa62a36f79da603da91bc9df870c26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
