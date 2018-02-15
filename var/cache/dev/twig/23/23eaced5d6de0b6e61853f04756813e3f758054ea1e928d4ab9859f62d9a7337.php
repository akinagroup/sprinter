<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_7599ec444288326aacd127304cbc144204c8d7a20c3481af34eb033b4be54a85 extends Twig_Template
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
        $__internal_a1e3c2b4b1553c1996d3da9aa65b2c8538d0cf671e120aefd09e41f003bac070 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1e3c2b4b1553c1996d3da9aa65b2c8538d0cf671e120aefd09e41f003bac070->enter($__internal_a1e3c2b4b1553c1996d3da9aa65b2c8538d0cf671e120aefd09e41f003bac070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_853c1d0c951ee4844ad59a99bf007e9c5d5ba9e8272e8fdd523bac9e9985935c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_853c1d0c951ee4844ad59a99bf007e9c5d5ba9e8272e8fdd523bac9e9985935c->enter($__internal_853c1d0c951ee4844ad59a99bf007e9c5d5ba9e8272e8fdd523bac9e9985935c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a1e3c2b4b1553c1996d3da9aa65b2c8538d0cf671e120aefd09e41f003bac070->leave($__internal_a1e3c2b4b1553c1996d3da9aa65b2c8538d0cf671e120aefd09e41f003bac070_prof);

        
        $__internal_853c1d0c951ee4844ad59a99bf007e9c5d5ba9e8272e8fdd523bac9e9985935c->leave($__internal_853c1d0c951ee4844ad59a99bf007e9c5d5ba9e8272e8fdd523bac9e9985935c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
