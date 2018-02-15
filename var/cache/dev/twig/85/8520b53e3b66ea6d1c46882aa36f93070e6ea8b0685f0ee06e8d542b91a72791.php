<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_85857eb555a4f1150b17467b070cfa88152b002c8e7921b23cfebd16b7449e1d extends Twig_Template
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
        $__internal_fbbadc3b1e480513f84790a3d51cbc2498562541021cf3d1b04ac50cbbc24341 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbbadc3b1e480513f84790a3d51cbc2498562541021cf3d1b04ac50cbbc24341->enter($__internal_fbbadc3b1e480513f84790a3d51cbc2498562541021cf3d1b04ac50cbbc24341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_0e72d189d2a9bdd048cc0daebbaa49b07fa0bd723a3105b708719dfff3ab0de4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e72d189d2a9bdd048cc0daebbaa49b07fa0bd723a3105b708719dfff3ab0de4->enter($__internal_0e72d189d2a9bdd048cc0daebbaa49b07fa0bd723a3105b708719dfff3ab0de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_fbbadc3b1e480513f84790a3d51cbc2498562541021cf3d1b04ac50cbbc24341->leave($__internal_fbbadc3b1e480513f84790a3d51cbc2498562541021cf3d1b04ac50cbbc24341_prof);

        
        $__internal_0e72d189d2a9bdd048cc0daebbaa49b07fa0bd723a3105b708719dfff3ab0de4->leave($__internal_0e72d189d2a9bdd048cc0daebbaa49b07fa0bd723a3105b708719dfff3ab0de4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
