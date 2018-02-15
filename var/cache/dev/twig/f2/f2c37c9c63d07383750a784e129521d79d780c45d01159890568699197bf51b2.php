<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_650fedcf4ce545413cc7315b3ff89393155d9bb002ac7ac70df21c9fb3d99c5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_ad6312bdd2bd53055a41891592693b6c48792a0e8cf75a5a86dfc6cc8f090dbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad6312bdd2bd53055a41891592693b6c48792a0e8cf75a5a86dfc6cc8f090dbf->enter($__internal_ad6312bdd2bd53055a41891592693b6c48792a0e8cf75a5a86dfc6cc8f090dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_82aae0481b785044fcb96347251318f59f5cba8c7b9e390bd0b8039cd39296aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82aae0481b785044fcb96347251318f59f5cba8c7b9e390bd0b8039cd39296aa->enter($__internal_82aae0481b785044fcb96347251318f59f5cba8c7b9e390bd0b8039cd39296aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad6312bdd2bd53055a41891592693b6c48792a0e8cf75a5a86dfc6cc8f090dbf->leave($__internal_ad6312bdd2bd53055a41891592693b6c48792a0e8cf75a5a86dfc6cc8f090dbf_prof);

        
        $__internal_82aae0481b785044fcb96347251318f59f5cba8c7b9e390bd0b8039cd39296aa->leave($__internal_82aae0481b785044fcb96347251318f59f5cba8c7b9e390bd0b8039cd39296aa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2a2cf01f6acf79bc405b251aabae75946ef743884ffb7cff24cfee7217577c84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a2cf01f6acf79bc405b251aabae75946ef743884ffb7cff24cfee7217577c84->enter($__internal_2a2cf01f6acf79bc405b251aabae75946ef743884ffb7cff24cfee7217577c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f16137981e65cc3a7db063a5e9abe0a27b67135a6d94d409caf187020da4de43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f16137981e65cc3a7db063a5e9abe0a27b67135a6d94d409caf187020da4de43->enter($__internal_f16137981e65cc3a7db063a5e9abe0a27b67135a6d94d409caf187020da4de43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f16137981e65cc3a7db063a5e9abe0a27b67135a6d94d409caf187020da4de43->leave($__internal_f16137981e65cc3a7db063a5e9abe0a27b67135a6d94d409caf187020da4de43_prof);

        
        $__internal_2a2cf01f6acf79bc405b251aabae75946ef743884ffb7cff24cfee7217577c84->leave($__internal_2a2cf01f6acf79bc405b251aabae75946ef743884ffb7cff24cfee7217577c84_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_70a424eda68e4c795ef777229b6b62a5e549bb3705235432820911c36853e9d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70a424eda68e4c795ef777229b6b62a5e549bb3705235432820911c36853e9d7->enter($__internal_70a424eda68e4c795ef777229b6b62a5e549bb3705235432820911c36853e9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a6a72d767ac660b2c7b4ae90709cf4e1a1aa444e1f545d523ce51bfef9f9a1c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6a72d767ac660b2c7b4ae90709cf4e1a1aa444e1f545d523ce51bfef9f9a1c4->enter($__internal_a6a72d767ac660b2c7b4ae90709cf4e1a1aa444e1f545d523ce51bfef9f9a1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a6a72d767ac660b2c7b4ae90709cf4e1a1aa444e1f545d523ce51bfef9f9a1c4->leave($__internal_a6a72d767ac660b2c7b4ae90709cf4e1a1aa444e1f545d523ce51bfef9f9a1c4_prof);

        
        $__internal_70a424eda68e4c795ef777229b6b62a5e549bb3705235432820911c36853e9d7->leave($__internal_70a424eda68e4c795ef777229b6b62a5e549bb3705235432820911c36853e9d7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8a908ede05356e6e4c307ea87c63dd2bdb8b3493c10074addf75ab8fa63c3a2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a908ede05356e6e4c307ea87c63dd2bdb8b3493c10074addf75ab8fa63c3a2c->enter($__internal_8a908ede05356e6e4c307ea87c63dd2bdb8b3493c10074addf75ab8fa63c3a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d72d99a7f4a2368b1a3a8cd4be1826531fe37c2b730bda76f872435e6455a596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d72d99a7f4a2368b1a3a8cd4be1826531fe37c2b730bda76f872435e6455a596->enter($__internal_d72d99a7f4a2368b1a3a8cd4be1826531fe37c2b730bda76f872435e6455a596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d72d99a7f4a2368b1a3a8cd4be1826531fe37c2b730bda76f872435e6455a596->leave($__internal_d72d99a7f4a2368b1a3a8cd4be1826531fe37c2b730bda76f872435e6455a596_prof);

        
        $__internal_8a908ede05356e6e4c307ea87c63dd2bdb8b3493c10074addf75ab8fa63c3a2c->leave($__internal_8a908ede05356e6e4c307ea87c63dd2bdb8b3493c10074addf75ab8fa63c3a2c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
