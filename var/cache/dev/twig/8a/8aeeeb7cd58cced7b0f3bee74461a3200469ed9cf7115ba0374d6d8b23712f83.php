<?php

/* AkinaImmobilierBundle:Front:search.html.twig */
class __TwigTemplate_11e1f624089ae860a92e16b5e62ca64392ff779a57bcebd2ce7e6f4432398407 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AkinaImmobilierBundle:Front:search.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'list' => array($this, 'block_list'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9aa0d1c21865b0baf924b2de801a3217d23f84dda0d4addb1443825fb2f901dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aa0d1c21865b0baf924b2de801a3217d23f84dda0d4addb1443825fb2f901dc->enter($__internal_9aa0d1c21865b0baf924b2de801a3217d23f84dda0d4addb1443825fb2f901dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Front:search.html.twig"));

        $__internal_ab96df4c1e6a6654930484070f94cd722138baa577e142df1128499fad3d14e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab96df4c1e6a6654930484070f94cd722138baa577e142df1128499fad3d14e4->enter($__internal_ab96df4c1e6a6654930484070f94cd722138baa577e142df1128499fad3d14e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Front:search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9aa0d1c21865b0baf924b2de801a3217d23f84dda0d4addb1443825fb2f901dc->leave($__internal_9aa0d1c21865b0baf924b2de801a3217d23f84dda0d4addb1443825fb2f901dc_prof);

        
        $__internal_ab96df4c1e6a6654930484070f94cd722138baa577e142df1128499fad3d14e4->leave($__internal_ab96df4c1e6a6654930484070f94cd722138baa577e142df1128499fad3d14e4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c0a3986d9782df1ff946326b32a3e1788674d93294844d1820055037fd662a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c0a3986d9782df1ff946326b32a3e1788674d93294844d1820055037fd662a0->enter($__internal_7c0a3986d9782df1ff946326b32a3e1788674d93294844d1820055037fd662a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c99a71a76c23913c6c238518965f20b12d85f7de59635efa13658d28c0fddde8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c99a71a76c23913c6c238518965f20b12d85f7de59635efa13658d28c0fddde8->enter($__internal_c99a71a76c23913c6c238518965f20b12d85f7de59635efa13658d28c0fddde8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AkinaImmobilierBundle:Front:search";
        
        $__internal_c99a71a76c23913c6c238518965f20b12d85f7de59635efa13658d28c0fddde8->leave($__internal_c99a71a76c23913c6c238518965f20b12d85f7de59635efa13658d28c0fddde8_prof);

        
        $__internal_7c0a3986d9782df1ff946326b32a3e1788674d93294844d1820055037fd662a0->leave($__internal_7c0a3986d9782df1ff946326b32a3e1788674d93294844d1820055037fd662a0_prof);

    }

    // line 5
    public function block_list($context, array $blocks = array())
    {
        $__internal_0763096461ab0308f41a8fdd26574aca0ef36cc8be0bd3efcb882fe7e0034877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0763096461ab0308f41a8fdd26574aca0ef36cc8be0bd3efcb882fe7e0034877->enter($__internal_0763096461ab0308f41a8fdd26574aca0ef36cc8be0bd3efcb882fe7e0034877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_01bd06850c638adf5186147066bab917d4b3867152b050aac1ff4b647f696c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01bd06850c638adf5186147066bab917d4b3867152b050aac1ff4b647f696c6f->enter($__internal_01bd06850c638adf5186147066bab917d4b3867152b050aac1ff4b647f696c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 6
        echo "<h1>Welcome to the Front:search page</h1>
";
        
        $__internal_01bd06850c638adf5186147066bab917d4b3867152b050aac1ff4b647f696c6f->leave($__internal_01bd06850c638adf5186147066bab917d4b3867152b050aac1ff4b647f696c6f_prof);

        
        $__internal_0763096461ab0308f41a8fdd26574aca0ef36cc8be0bd3efcb882fe7e0034877->leave($__internal_0763096461ab0308f41a8fdd26574aca0ef36cc8be0bd3efcb882fe7e0034877_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Front:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}

{% block title %}AkinaImmobilierBundle:Front:search{% endblock %}

{% block list %}
<h1>Welcome to the Front:search page</h1>
{% endblock %}
", "AkinaImmobilierBundle:Front:search.html.twig", "/var/www/html/GestionImmobiliére/src/Akina/ImmobilierBundle/Resources/views/Front/search.html.twig");
    }
}
