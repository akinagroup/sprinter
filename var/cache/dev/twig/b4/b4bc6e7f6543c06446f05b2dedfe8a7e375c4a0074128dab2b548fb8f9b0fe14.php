<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_10c655f3109ad76fadc16109c8d51996220afd5b182e8327ed819e323ad88e49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2cf4f06ead20617eecf60fc7c5bb391dd89443736e6775282176996217b2ed4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cf4f06ead20617eecf60fc7c5bb391dd89443736e6775282176996217b2ed4e->enter($__internal_2cf4f06ead20617eecf60fc7c5bb391dd89443736e6775282176996217b2ed4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_e7f4be4b25cf3b696b9a792a3a795da5ae70a5e809f477f6e90c737d1eed30bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f4be4b25cf3b696b9a792a3a795da5ae70a5e809f477f6e90c737d1eed30bf->enter($__internal_e7f4be4b25cf3b696b9a792a3a795da5ae70a5e809f477f6e90c737d1eed30bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cf4f06ead20617eecf60fc7c5bb391dd89443736e6775282176996217b2ed4e->leave($__internal_2cf4f06ead20617eecf60fc7c5bb391dd89443736e6775282176996217b2ed4e_prof);

        
        $__internal_e7f4be4b25cf3b696b9a792a3a795da5ae70a5e809f477f6e90c737d1eed30bf->leave($__internal_e7f4be4b25cf3b696b9a792a3a795da5ae70a5e809f477f6e90c737d1eed30bf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_26d984679e93bd153bce4d4d96f72a182349c758aa7d46c5ee3ffef5a7c52d22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26d984679e93bd153bce4d4d96f72a182349c758aa7d46c5ee3ffef5a7c52d22->enter($__internal_26d984679e93bd153bce4d4d96f72a182349c758aa7d46c5ee3ffef5a7c52d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0d30711fc7321b898af98278691161ccf3d1387f8ac8bafae113cc91ba21e032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d30711fc7321b898af98278691161ccf3d1387f8ac8bafae113cc91ba21e032->enter($__internal_0d30711fc7321b898af98278691161ccf3d1387f8ac8bafae113cc91ba21e032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_0d30711fc7321b898af98278691161ccf3d1387f8ac8bafae113cc91ba21e032->leave($__internal_0d30711fc7321b898af98278691161ccf3d1387f8ac8bafae113cc91ba21e032_prof);

        
        $__internal_26d984679e93bd153bce4d4d96f72a182349c758aa7d46c5ee3ffef5a7c52d22->leave($__internal_26d984679e93bd153bce4d4d96f72a182349c758aa7d46c5ee3ffef5a7c52d22_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
