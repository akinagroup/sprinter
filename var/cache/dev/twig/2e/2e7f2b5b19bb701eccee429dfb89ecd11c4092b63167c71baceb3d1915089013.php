<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_1269657fcff97ca1b9c789636baa1343e3415e63b29e8354df936061356e1dff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68bc8386b1099ec1f6d3c3ed7143a40d7daf4b8c48e47549fb6c94a77ed1ef17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68bc8386b1099ec1f6d3c3ed7143a40d7daf4b8c48e47549fb6c94a77ed1ef17->enter($__internal_68bc8386b1099ec1f6d3c3ed7143a40d7daf4b8c48e47549fb6c94a77ed1ef17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_557c3f56fbc21b3f86c2becb59bd72d2fb76686a65097a55bde364e369c91b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_557c3f56fbc21b3f86c2becb59bd72d2fb76686a65097a55bde364e369c91b90->enter($__internal_557c3f56fbc21b3f86c2becb59bd72d2fb76686a65097a55bde364e369c91b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_68bc8386b1099ec1f6d3c3ed7143a40d7daf4b8c48e47549fb6c94a77ed1ef17->leave($__internal_68bc8386b1099ec1f6d3c3ed7143a40d7daf4b8c48e47549fb6c94a77ed1ef17_prof);

        
        $__internal_557c3f56fbc21b3f86c2becb59bd72d2fb76686a65097a55bde364e369c91b90->leave($__internal_557c3f56fbc21b3f86c2becb59bd72d2fb76686a65097a55bde364e369c91b90_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d46a2115986d071b10cd07cf2144a9b13eb445b6f15f24ab2b9885856736461 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d46a2115986d071b10cd07cf2144a9b13eb445b6f15f24ab2b9885856736461->enter($__internal_8d46a2115986d071b10cd07cf2144a9b13eb445b6f15f24ab2b9885856736461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5d096f10438f6b26f949f303c78ad17395194721afed25aeb36ec18dda3823e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d096f10438f6b26f949f303c78ad17395194721afed25aeb36ec18dda3823e6->enter($__internal_5d096f10438f6b26f949f303c78ad17395194721afed25aeb36ec18dda3823e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5d096f10438f6b26f949f303c78ad17395194721afed25aeb36ec18dda3823e6->leave($__internal_5d096f10438f6b26f949f303c78ad17395194721afed25aeb36ec18dda3823e6_prof);

        
        $__internal_8d46a2115986d071b10cd07cf2144a9b13eb445b6f15f24ab2b9885856736461->leave($__internal_8d46a2115986d071b10cd07cf2144a9b13eb445b6f15f24ab2b9885856736461_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
