<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_b1c5d9d17911b5bf7a20ef655eab9efc56a9a946cc751f80dd5b6855bcd3e6a0 extends Twig_Template
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
        $__internal_72ab4a94774f6395733d0646fe351fb5610b12dc920dddeb6d59059d82661fea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72ab4a94774f6395733d0646fe351fb5610b12dc920dddeb6d59059d82661fea->enter($__internal_72ab4a94774f6395733d0646fe351fb5610b12dc920dddeb6d59059d82661fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_17ffe895c495c355f47b3ff2859de31477eaf802991712568efa0ccf3b02cfa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17ffe895c495c355f47b3ff2859de31477eaf802991712568efa0ccf3b02cfa5->enter($__internal_17ffe895c495c355f47b3ff2859de31477eaf802991712568efa0ccf3b02cfa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_72ab4a94774f6395733d0646fe351fb5610b12dc920dddeb6d59059d82661fea->leave($__internal_72ab4a94774f6395733d0646fe351fb5610b12dc920dddeb6d59059d82661fea_prof);

        
        $__internal_17ffe895c495c355f47b3ff2859de31477eaf802991712568efa0ccf3b02cfa5->leave($__internal_17ffe895c495c355f47b3ff2859de31477eaf802991712568efa0ccf3b02cfa5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
