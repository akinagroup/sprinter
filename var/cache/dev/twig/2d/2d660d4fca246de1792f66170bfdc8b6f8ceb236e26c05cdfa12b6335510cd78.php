<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_9757122ff1969eb8c87d26653debc20fa01fbcccea64666d15519a790113b89f extends Twig_Template
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
        $__internal_5b47b6e47f1d9b754e4308553e36641f375df642fc5194ccdd5bb64ea3bb5319 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b47b6e47f1d9b754e4308553e36641f375df642fc5194ccdd5bb64ea3bb5319->enter($__internal_5b47b6e47f1d9b754e4308553e36641f375df642fc5194ccdd5bb64ea3bb5319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_6df751157de110b66f3e9105657bd897c57738e85c4e6547bd7f3cb9199ec6fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6df751157de110b66f3e9105657bd897c57738e85c4e6547bd7f3cb9199ec6fe->enter($__internal_6df751157de110b66f3e9105657bd897c57738e85c4e6547bd7f3cb9199ec6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_5b47b6e47f1d9b754e4308553e36641f375df642fc5194ccdd5bb64ea3bb5319->leave($__internal_5b47b6e47f1d9b754e4308553e36641f375df642fc5194ccdd5bb64ea3bb5319_prof);

        
        $__internal_6df751157de110b66f3e9105657bd897c57738e85c4e6547bd7f3cb9199ec6fe->leave($__internal_6df751157de110b66f3e9105657bd897c57738e85c4e6547bd7f3cb9199ec6fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
