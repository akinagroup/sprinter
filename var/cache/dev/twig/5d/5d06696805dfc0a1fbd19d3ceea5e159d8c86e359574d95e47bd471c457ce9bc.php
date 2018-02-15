<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_7c5ba2c885b6e53c5cb1984b0defb6bc334f14f8cc11af17b152b79a8db25ae8 extends Twig_Template
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
        $__internal_488c2a696b7b90dfc54be755491eb9ff6f5859ea07420d4ce8d7ef91ff3a563c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_488c2a696b7b90dfc54be755491eb9ff6f5859ea07420d4ce8d7ef91ff3a563c->enter($__internal_488c2a696b7b90dfc54be755491eb9ff6f5859ea07420d4ce8d7ef91ff3a563c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_782f85b57e2ae6f3cb92035f32a8af03166f54bdfe98ea8c53b44e6f0b4ef70e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_782f85b57e2ae6f3cb92035f32a8af03166f54bdfe98ea8c53b44e6f0b4ef70e->enter($__internal_782f85b57e2ae6f3cb92035f32a8af03166f54bdfe98ea8c53b44e6f0b4ef70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_488c2a696b7b90dfc54be755491eb9ff6f5859ea07420d4ce8d7ef91ff3a563c->leave($__internal_488c2a696b7b90dfc54be755491eb9ff6f5859ea07420d4ce8d7ef91ff3a563c_prof);

        
        $__internal_782f85b57e2ae6f3cb92035f32a8af03166f54bdfe98ea8c53b44e6f0b4ef70e->leave($__internal_782f85b57e2ae6f3cb92035f32a8af03166f54bdfe98ea8c53b44e6f0b4ef70e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
