<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_86323fdc4af2d5a5733362709ed6d09ad138b444ecdca28d9b7b6f12d26fbe4e extends Twig_Template
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
        $__internal_82b59da2f1be243a593883bf01e964d9d7c3a4241578af588aab416e174776a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82b59da2f1be243a593883bf01e964d9d7c3a4241578af588aab416e174776a9->enter($__internal_82b59da2f1be243a593883bf01e964d9d7c3a4241578af588aab416e174776a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_877464cd6d4f852bfe5fefd1d86c56335da77fa7efdba56283113cd4f3c2c658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_877464cd6d4f852bfe5fefd1d86c56335da77fa7efdba56283113cd4f3c2c658->enter($__internal_877464cd6d4f852bfe5fefd1d86c56335da77fa7efdba56283113cd4f3c2c658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_82b59da2f1be243a593883bf01e964d9d7c3a4241578af588aab416e174776a9->leave($__internal_82b59da2f1be243a593883bf01e964d9d7c3a4241578af588aab416e174776a9_prof);

        
        $__internal_877464cd6d4f852bfe5fefd1d86c56335da77fa7efdba56283113cd4f3c2c658->leave($__internal_877464cd6d4f852bfe5fefd1d86c56335da77fa7efdba56283113cd4f3c2c658_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
