<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_8d45ee91a9185f6a8edaa2897c71e896fd8cdc1fdb3aef7045ae1075f770ddaf extends Twig_Template
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
        $__internal_48e11af11496a24688a712b3dcca1c2910f4e75fe51ace058a25d25f83e24cf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48e11af11496a24688a712b3dcca1c2910f4e75fe51ace058a25d25f83e24cf9->enter($__internal_48e11af11496a24688a712b3dcca1c2910f4e75fe51ace058a25d25f83e24cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_7316713fd8f29554a2df6b0a852e8db95a8ec7a48319066bd657de081e12939f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7316713fd8f29554a2df6b0a852e8db95a8ec7a48319066bd657de081e12939f->enter($__internal_7316713fd8f29554a2df6b0a852e8db95a8ec7a48319066bd657de081e12939f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_48e11af11496a24688a712b3dcca1c2910f4e75fe51ace058a25d25f83e24cf9->leave($__internal_48e11af11496a24688a712b3dcca1c2910f4e75fe51ace058a25d25f83e24cf9_prof);

        
        $__internal_7316713fd8f29554a2df6b0a852e8db95a8ec7a48319066bd657de081e12939f->leave($__internal_7316713fd8f29554a2df6b0a852e8db95a8ec7a48319066bd657de081e12939f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
