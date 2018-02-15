<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_41fc3c39230f91c3e64cb4e46b0197aefccc43a1aaf96730266f8c68fe61643c extends Twig_Template
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
        $__internal_f0525ef70fae117c9b2c759a8746037f31b991f558f0024de3d62d75c8c39c7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0525ef70fae117c9b2c759a8746037f31b991f558f0024de3d62d75c8c39c7a->enter($__internal_f0525ef70fae117c9b2c759a8746037f31b991f558f0024de3d62d75c8c39c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_8bb731abb71018d7d234ea1b7193f353a6561392c59ad74320e2c1a46f73a301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb731abb71018d7d234ea1b7193f353a6561392c59ad74320e2c1a46f73a301->enter($__internal_8bb731abb71018d7d234ea1b7193f353a6561392c59ad74320e2c1a46f73a301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f0525ef70fae117c9b2c759a8746037f31b991f558f0024de3d62d75c8c39c7a->leave($__internal_f0525ef70fae117c9b2c759a8746037f31b991f558f0024de3d62d75c8c39c7a_prof);

        
        $__internal_8bb731abb71018d7d234ea1b7193f353a6561392c59ad74320e2c1a46f73a301->leave($__internal_8bb731abb71018d7d234ea1b7193f353a6561392c59ad74320e2c1a46f73a301_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
