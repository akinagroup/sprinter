<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_1571c1262d50b569df1b9eb018693e76eedffa9ea67bca3c698a20f985bc24a7 extends Twig_Template
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
        $__internal_f4a7e1f2aaab7b433e326c8869675f60234fe24ba1b53a7d1ec3ff0681335f26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4a7e1f2aaab7b433e326c8869675f60234fe24ba1b53a7d1ec3ff0681335f26->enter($__internal_f4a7e1f2aaab7b433e326c8869675f60234fe24ba1b53a7d1ec3ff0681335f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_e505e0d6e980f0c3f483e5659b4b68b508d00ff3751fff68701fa8bbf01c0731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e505e0d6e980f0c3f483e5659b4b68b508d00ff3751fff68701fa8bbf01c0731->enter($__internal_e505e0d6e980f0c3f483e5659b4b68b508d00ff3751fff68701fa8bbf01c0731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f4a7e1f2aaab7b433e326c8869675f60234fe24ba1b53a7d1ec3ff0681335f26->leave($__internal_f4a7e1f2aaab7b433e326c8869675f60234fe24ba1b53a7d1ec3ff0681335f26_prof);

        
        $__internal_e505e0d6e980f0c3f483e5659b4b68b508d00ff3751fff68701fa8bbf01c0731->leave($__internal_e505e0d6e980f0c3f483e5659b4b68b508d00ff3751fff68701fa8bbf01c0731_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
