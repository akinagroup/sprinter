<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_d12358f08f3ab26fed83b68a6e05339f9639a67909ada08df02dd3cb40b7ea59 extends Twig_Template
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
        $__internal_3b5d93f395f5a7bc304c30b7dcfac02d537b4c35794ad4cef38ba0a9943ad0b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b5d93f395f5a7bc304c30b7dcfac02d537b4c35794ad4cef38ba0a9943ad0b5->enter($__internal_3b5d93f395f5a7bc304c30b7dcfac02d537b4c35794ad4cef38ba0a9943ad0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_cd3971e84bb05dcf323d5c7f94c26776a4fb86b941b248c04539925a2d645bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd3971e84bb05dcf323d5c7f94c26776a4fb86b941b248c04539925a2d645bef->enter($__internal_cd3971e84bb05dcf323d5c7f94c26776a4fb86b941b248c04539925a2d645bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_3b5d93f395f5a7bc304c30b7dcfac02d537b4c35794ad4cef38ba0a9943ad0b5->leave($__internal_3b5d93f395f5a7bc304c30b7dcfac02d537b4c35794ad4cef38ba0a9943ad0b5_prof);

        
        $__internal_cd3971e84bb05dcf323d5c7f94c26776a4fb86b941b248c04539925a2d645bef->leave($__internal_cd3971e84bb05dcf323d5c7f94c26776a4fb86b941b248c04539925a2d645bef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
