<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_830a90b5a651ec43b8d6ddb1dd040adb0d0b134cbe8f9930344b076e963b470e extends Twig_Template
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
        $__internal_bca14131413d246a01fd733c814cfaba9ac21c5b0c5c1487f976d0424cbb7d82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bca14131413d246a01fd733c814cfaba9ac21c5b0c5c1487f976d0424cbb7d82->enter($__internal_bca14131413d246a01fd733c814cfaba9ac21c5b0c5c1487f976d0424cbb7d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_561de6e079755377c781628287d2711030c3ed435951a6ee2d39cd9342d498c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_561de6e079755377c781628287d2711030c3ed435951a6ee2d39cd9342d498c3->enter($__internal_561de6e079755377c781628287d2711030c3ed435951a6ee2d39cd9342d498c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_bca14131413d246a01fd733c814cfaba9ac21c5b0c5c1487f976d0424cbb7d82->leave($__internal_bca14131413d246a01fd733c814cfaba9ac21c5b0c5c1487f976d0424cbb7d82_prof);

        
        $__internal_561de6e079755377c781628287d2711030c3ed435951a6ee2d39cd9342d498c3->leave($__internal_561de6e079755377c781628287d2711030c3ed435951a6ee2d39cd9342d498c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
