<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_d17d9f74bb44414a8016e89eaee98a747aee1e0a180bfc21c56513057fc5606d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7aaa75e48317e2a49220c033b92e7e7101ea84a150c0a420e54a885a9588875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7aaa75e48317e2a49220c033b92e7e7101ea84a150c0a420e54a885a9588875->enter($__internal_b7aaa75e48317e2a49220c033b92e7e7101ea84a150c0a420e54a885a9588875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_3c800fe9f33e3753a2234b9328bb68f694c5cb8349ad3625cf484ff6747998cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c800fe9f33e3753a2234b9328bb68f694c5cb8349ad3625cf484ff6747998cd->enter($__internal_3c800fe9f33e3753a2234b9328bb68f694c5cb8349ad3625cf484ff6747998cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7aaa75e48317e2a49220c033b92e7e7101ea84a150c0a420e54a885a9588875->leave($__internal_b7aaa75e48317e2a49220c033b92e7e7101ea84a150c0a420e54a885a9588875_prof);

        
        $__internal_3c800fe9f33e3753a2234b9328bb68f694c5cb8349ad3625cf484ff6747998cd->leave($__internal_3c800fe9f33e3753a2234b9328bb68f694c5cb8349ad3625cf484ff6747998cd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e2bfbfb035fdab053c98037fd570833a8a2208315fdc96564d0cd8e35028e5df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2bfbfb035fdab053c98037fd570833a8a2208315fdc96564d0cd8e35028e5df->enter($__internal_e2bfbfb035fdab053c98037fd570833a8a2208315fdc96564d0cd8e35028e5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a51fa06418a049cbc74b7bb4978ca57ab019036881f4f9137e4f8a9cacca84a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a51fa06418a049cbc74b7bb4978ca57ab019036881f4f9137e4f8a9cacca84a7->enter($__internal_a51fa06418a049cbc74b7bb4978ca57ab019036881f4f9137e4f8a9cacca84a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a51fa06418a049cbc74b7bb4978ca57ab019036881f4f9137e4f8a9cacca84a7->leave($__internal_a51fa06418a049cbc74b7bb4978ca57ab019036881f4f9137e4f8a9cacca84a7_prof);

        
        $__internal_e2bfbfb035fdab053c98037fd570833a8a2208315fdc96564d0cd8e35028e5df->leave($__internal_e2bfbfb035fdab053c98037fd570833a8a2208315fdc96564d0cd8e35028e5df_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7b8a14dafe6f475cea4249d3e3d271e3b9ea70c1f60660dd9751af9b4ddd0a36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b8a14dafe6f475cea4249d3e3d271e3b9ea70c1f60660dd9751af9b4ddd0a36->enter($__internal_7b8a14dafe6f475cea4249d3e3d271e3b9ea70c1f60660dd9751af9b4ddd0a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0c7310ed650b718182b39c27dbf603387b823f54e7ae39ff4180b15b032f8ed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c7310ed650b718182b39c27dbf603387b823f54e7ae39ff4180b15b032f8ed2->enter($__internal_0c7310ed650b718182b39c27dbf603387b823f54e7ae39ff4180b15b032f8ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0c7310ed650b718182b39c27dbf603387b823f54e7ae39ff4180b15b032f8ed2->leave($__internal_0c7310ed650b718182b39c27dbf603387b823f54e7ae39ff4180b15b032f8ed2_prof);

        
        $__internal_7b8a14dafe6f475cea4249d3e3d271e3b9ea70c1f60660dd9751af9b4ddd0a36->leave($__internal_7b8a14dafe6f475cea4249d3e3d271e3b9ea70c1f60660dd9751af9b4ddd0a36_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_590146413aa3fef6f125c10ad3e5fa0a72c13962763279c8e745352ac1f1fe17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_590146413aa3fef6f125c10ad3e5fa0a72c13962763279c8e745352ac1f1fe17->enter($__internal_590146413aa3fef6f125c10ad3e5fa0a72c13962763279c8e745352ac1f1fe17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f2dbeadccbaac50519082d7587610e768df5ff539378805c2e9a4e45b376df4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2dbeadccbaac50519082d7587610e768df5ff539378805c2e9a4e45b376df4a->enter($__internal_f2dbeadccbaac50519082d7587610e768df5ff539378805c2e9a4e45b376df4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f2dbeadccbaac50519082d7587610e768df5ff539378805c2e9a4e45b376df4a->leave($__internal_f2dbeadccbaac50519082d7587610e768df5ff539378805c2e9a4e45b376df4a_prof);

        
        $__internal_590146413aa3fef6f125c10ad3e5fa0a72c13962763279c8e745352ac1f1fe17->leave($__internal_590146413aa3fef6f125c10ad3e5fa0a72c13962763279c8e745352ac1f1fe17_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
