<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_1c40f366e8fe493ed418bdbcd45d46fe27399bf29da0eadfb98fdedb65034883 extends Twig_Template
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
        $__internal_1fdb5afae4f12453912e8a21f630df5711d43e6bfa577efc51ffd3fbebc679cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fdb5afae4f12453912e8a21f630df5711d43e6bfa577efc51ffd3fbebc679cd->enter($__internal_1fdb5afae4f12453912e8a21f630df5711d43e6bfa577efc51ffd3fbebc679cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_56ff4538fd6313bdb1a51422e9660ee9ffbc4e22c8f3ca0a1824aedc98bcb25c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ff4538fd6313bdb1a51422e9660ee9ffbc4e22c8f3ca0a1824aedc98bcb25c->enter($__internal_56ff4538fd6313bdb1a51422e9660ee9ffbc4e22c8f3ca0a1824aedc98bcb25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_1fdb5afae4f12453912e8a21f630df5711d43e6bfa577efc51ffd3fbebc679cd->leave($__internal_1fdb5afae4f12453912e8a21f630df5711d43e6bfa577efc51ffd3fbebc679cd_prof);

        
        $__internal_56ff4538fd6313bdb1a51422e9660ee9ffbc4e22c8f3ca0a1824aedc98bcb25c->leave($__internal_56ff4538fd6313bdb1a51422e9660ee9ffbc4e22c8f3ca0a1824aedc98bcb25c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
