<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_1f5036529df473a31aa91c04e68b5f899639af275e5405edbe662bfdc3ecda89 extends Twig_Template
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
        $__internal_c5efcbc9cee7c825782728a3d16cf067a81c538db2ef1b11e6bd89c5d1a6cbac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5efcbc9cee7c825782728a3d16cf067a81c538db2ef1b11e6bd89c5d1a6cbac->enter($__internal_c5efcbc9cee7c825782728a3d16cf067a81c538db2ef1b11e6bd89c5d1a6cbac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_32ef04668c8f3dc73615fe88389f952abddc89a8e572e1f5c4344280bd015609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ef04668c8f3dc73615fe88389f952abddc89a8e572e1f5c4344280bd015609->enter($__internal_32ef04668c8f3dc73615fe88389f952abddc89a8e572e1f5c4344280bd015609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_c5efcbc9cee7c825782728a3d16cf067a81c538db2ef1b11e6bd89c5d1a6cbac->leave($__internal_c5efcbc9cee7c825782728a3d16cf067a81c538db2ef1b11e6bd89c5d1a6cbac_prof);

        
        $__internal_32ef04668c8f3dc73615fe88389f952abddc89a8e572e1f5c4344280bd015609->leave($__internal_32ef04668c8f3dc73615fe88389f952abddc89a8e572e1f5c4344280bd015609_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
