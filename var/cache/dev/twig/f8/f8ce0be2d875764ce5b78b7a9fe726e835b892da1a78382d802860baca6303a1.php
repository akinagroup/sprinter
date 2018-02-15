<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_956eee215e41ba6dc0e2c057059963f7e302dc63dbfe8df164497b8fc96d39b4 extends Twig_Template
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
        $__internal_dce0f61529293733d15fe41717e331a8ab33216a6e9076b5550214410e8ce52b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dce0f61529293733d15fe41717e331a8ab33216a6e9076b5550214410e8ce52b->enter($__internal_dce0f61529293733d15fe41717e331a8ab33216a6e9076b5550214410e8ce52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_e9954d9a6047f0cd5fb7ea4a0d1c8cbba208664838812d70f481973071a7f337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9954d9a6047f0cd5fb7ea4a0d1c8cbba208664838812d70f481973071a7f337->enter($__internal_e9954d9a6047f0cd5fb7ea4a0d1c8cbba208664838812d70f481973071a7f337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_dce0f61529293733d15fe41717e331a8ab33216a6e9076b5550214410e8ce52b->leave($__internal_dce0f61529293733d15fe41717e331a8ab33216a6e9076b5550214410e8ce52b_prof);

        
        $__internal_e9954d9a6047f0cd5fb7ea4a0d1c8cbba208664838812d70f481973071a7f337->leave($__internal_e9954d9a6047f0cd5fb7ea4a0d1c8cbba208664838812d70f481973071a7f337_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
