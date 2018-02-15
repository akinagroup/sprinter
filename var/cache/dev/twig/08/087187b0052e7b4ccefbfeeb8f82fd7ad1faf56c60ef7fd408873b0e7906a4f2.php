<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_fac4a1e1a431ab16379c350c2c467850e42dab2eef1e49e62d80e9284b067e91 extends Twig_Template
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
        $__internal_12565ee14684fc5e4987fab6845a2ffb3214c3912213bfbed773c9db2ff169a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12565ee14684fc5e4987fab6845a2ffb3214c3912213bfbed773c9db2ff169a6->enter($__internal_12565ee14684fc5e4987fab6845a2ffb3214c3912213bfbed773c9db2ff169a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_82086e2fe56d9e8d525905f05a9efa116716b29e12e0f1abfba0508e1fd86410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82086e2fe56d9e8d525905f05a9efa116716b29e12e0f1abfba0508e1fd86410->enter($__internal_82086e2fe56d9e8d525905f05a9efa116716b29e12e0f1abfba0508e1fd86410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_12565ee14684fc5e4987fab6845a2ffb3214c3912213bfbed773c9db2ff169a6->leave($__internal_12565ee14684fc5e4987fab6845a2ffb3214c3912213bfbed773c9db2ff169a6_prof);

        
        $__internal_82086e2fe56d9e8d525905f05a9efa116716b29e12e0f1abfba0508e1fd86410->leave($__internal_82086e2fe56d9e8d525905f05a9efa116716b29e12e0f1abfba0508e1fd86410_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
