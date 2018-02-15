<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_5d7d870dc3f27b576930b93ddb075e94dd5f01401b03b4242c3887396f295687 extends Twig_Template
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
        $__internal_6751fcd9b7ef93981210eaf2ab8b4e929aa3ba23464f57ecded1922310a2a7d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6751fcd9b7ef93981210eaf2ab8b4e929aa3ba23464f57ecded1922310a2a7d5->enter($__internal_6751fcd9b7ef93981210eaf2ab8b4e929aa3ba23464f57ecded1922310a2a7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_e5c94a49effbc62b960a37895c78a4b4c32c5c73d84b22efa6b3be6ef4c17ff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5c94a49effbc62b960a37895c78a4b4c32c5c73d84b22efa6b3be6ef4c17ff0->enter($__internal_e5c94a49effbc62b960a37895c78a4b4c32c5c73d84b22efa6b3be6ef4c17ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_6751fcd9b7ef93981210eaf2ab8b4e929aa3ba23464f57ecded1922310a2a7d5->leave($__internal_6751fcd9b7ef93981210eaf2ab8b4e929aa3ba23464f57ecded1922310a2a7d5_prof);

        
        $__internal_e5c94a49effbc62b960a37895c78a4b4c32c5c73d84b22efa6b3be6ef4c17ff0->leave($__internal_e5c94a49effbc62b960a37895c78a4b4c32c5c73d84b22efa6b3be6ef4c17ff0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
