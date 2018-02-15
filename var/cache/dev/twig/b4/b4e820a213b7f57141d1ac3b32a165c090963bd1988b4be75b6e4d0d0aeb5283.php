<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_141c051c76e39d114f5e5cd4ddcbc4cc74a77723937255f8eb96782096bcf6db extends Twig_Template
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
        $__internal_a9b829b07b9b690719add4a92c660c301180dbb4bd202e79482d85db6cec4197 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9b829b07b9b690719add4a92c660c301180dbb4bd202e79482d85db6cec4197->enter($__internal_a9b829b07b9b690719add4a92c660c301180dbb4bd202e79482d85db6cec4197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_4d0de409637154cd4796dc773a64a2d597a4d26f93dfe3fb2fcefb5bfcc6808e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0de409637154cd4796dc773a64a2d597a4d26f93dfe3fb2fcefb5bfcc6808e->enter($__internal_4d0de409637154cd4796dc773a64a2d597a4d26f93dfe3fb2fcefb5bfcc6808e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_a9b829b07b9b690719add4a92c660c301180dbb4bd202e79482d85db6cec4197->leave($__internal_a9b829b07b9b690719add4a92c660c301180dbb4bd202e79482d85db6cec4197_prof);

        
        $__internal_4d0de409637154cd4796dc773a64a2d597a4d26f93dfe3fb2fcefb5bfcc6808e->leave($__internal_4d0de409637154cd4796dc773a64a2d597a4d26f93dfe3fb2fcefb5bfcc6808e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
