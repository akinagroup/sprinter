<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_de757927adf4de6514e0e3163a212187edd9afe68336aeb110af66670c9adeab extends Twig_Template
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
        $__internal_dfa71f68d32ddbad9520715bbac038f638ced2adb8b5148a6c168ea70196571a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfa71f68d32ddbad9520715bbac038f638ced2adb8b5148a6c168ea70196571a->enter($__internal_dfa71f68d32ddbad9520715bbac038f638ced2adb8b5148a6c168ea70196571a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_12ec70f012d5790f21c252c3affe1b4659fdfc1293f4594a06dc62856c7471ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12ec70f012d5790f21c252c3affe1b4659fdfc1293f4594a06dc62856c7471ea->enter($__internal_12ec70f012d5790f21c252c3affe1b4659fdfc1293f4594a06dc62856c7471ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_dfa71f68d32ddbad9520715bbac038f638ced2adb8b5148a6c168ea70196571a->leave($__internal_dfa71f68d32ddbad9520715bbac038f638ced2adb8b5148a6c168ea70196571a_prof);

        
        $__internal_12ec70f012d5790f21c252c3affe1b4659fdfc1293f4594a06dc62856c7471ea->leave($__internal_12ec70f012d5790f21c252c3affe1b4659fdfc1293f4594a06dc62856c7471ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
