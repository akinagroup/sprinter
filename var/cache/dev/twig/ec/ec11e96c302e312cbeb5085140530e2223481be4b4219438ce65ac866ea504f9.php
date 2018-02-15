<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_5148216c72613cea60d46e35ac93bd69dec825ec5a58c09b3e28196c103bd311 extends Twig_Template
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
        $__internal_ed8a8f290a2de2a51215364f604c305c57fa318b461690946aef94d0d1a1e212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed8a8f290a2de2a51215364f604c305c57fa318b461690946aef94d0d1a1e212->enter($__internal_ed8a8f290a2de2a51215364f604c305c57fa318b461690946aef94d0d1a1e212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_fb01b6c36db7d9c8b38497ae9cec4a11c09ad33b940d2732f623bf655136c1fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb01b6c36db7d9c8b38497ae9cec4a11c09ad33b940d2732f623bf655136c1fc->enter($__internal_fb01b6c36db7d9c8b38497ae9cec4a11c09ad33b940d2732f623bf655136c1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_ed8a8f290a2de2a51215364f604c305c57fa318b461690946aef94d0d1a1e212->leave($__internal_ed8a8f290a2de2a51215364f604c305c57fa318b461690946aef94d0d1a1e212_prof);

        
        $__internal_fb01b6c36db7d9c8b38497ae9cec4a11c09ad33b940d2732f623bf655136c1fc->leave($__internal_fb01b6c36db7d9c8b38497ae9cec4a11c09ad33b940d2732f623bf655136c1fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
