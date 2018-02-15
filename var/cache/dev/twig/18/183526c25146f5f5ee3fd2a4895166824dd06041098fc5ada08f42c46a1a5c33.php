<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_25f02db85ee1edbfb192ea17f687c5b861cdc5258e1cf67c52a9a61cbbbb10fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6def33eabb6d0f51ef1e1d8712ff9ff75cb3a5ce828bf3818f9a802fcc3d2d4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6def33eabb6d0f51ef1e1d8712ff9ff75cb3a5ce828bf3818f9a802fcc3d2d4f->enter($__internal_6def33eabb6d0f51ef1e1d8712ff9ff75cb3a5ce828bf3818f9a802fcc3d2d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_c62589d9e50f82066b07129e8c008f0b5eb8dccc265c2a8ddc656b642b53ff10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c62589d9e50f82066b07129e8c008f0b5eb8dccc265c2a8ddc656b642b53ff10->enter($__internal_c62589d9e50f82066b07129e8c008f0b5eb8dccc265c2a8ddc656b642b53ff10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6def33eabb6d0f51ef1e1d8712ff9ff75cb3a5ce828bf3818f9a802fcc3d2d4f->leave($__internal_6def33eabb6d0f51ef1e1d8712ff9ff75cb3a5ce828bf3818f9a802fcc3d2d4f_prof);

        
        $__internal_c62589d9e50f82066b07129e8c008f0b5eb8dccc265c2a8ddc656b642b53ff10->leave($__internal_c62589d9e50f82066b07129e8c008f0b5eb8dccc265c2a8ddc656b642b53ff10_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4527454dc44f363612068dcba26b8fd17ef22a839686116734a603425c43131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4527454dc44f363612068dcba26b8fd17ef22a839686116734a603425c43131->enter($__internal_b4527454dc44f363612068dcba26b8fd17ef22a839686116734a603425c43131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2b93e815d3066455415a88f8ad6cc99f3e1f974587d36ead5314c69203fbf569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b93e815d3066455415a88f8ad6cc99f3e1f974587d36ead5314c69203fbf569->enter($__internal_2b93e815d3066455415a88f8ad6cc99f3e1f974587d36ead5314c69203fbf569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2b93e815d3066455415a88f8ad6cc99f3e1f974587d36ead5314c69203fbf569->leave($__internal_2b93e815d3066455415a88f8ad6cc99f3e1f974587d36ead5314c69203fbf569_prof);

        
        $__internal_b4527454dc44f363612068dcba26b8fd17ef22a839686116734a603425c43131->leave($__internal_b4527454dc44f363612068dcba26b8fd17ef22a839686116734a603425c43131_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a00ce0f558c8705c2abcc399e3668577ef84facda17287165546218fc4142bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a00ce0f558c8705c2abcc399e3668577ef84facda17287165546218fc4142bb->enter($__internal_6a00ce0f558c8705c2abcc399e3668577ef84facda17287165546218fc4142bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2552d5d7f67ab5ae83d591ed1b6d09d08d281471187c5b8b2d166602d5e4fc7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2552d5d7f67ab5ae83d591ed1b6d09d08d281471187c5b8b2d166602d5e4fc7a->enter($__internal_2552d5d7f67ab5ae83d591ed1b6d09d08d281471187c5b8b2d166602d5e4fc7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_2552d5d7f67ab5ae83d591ed1b6d09d08d281471187c5b8b2d166602d5e4fc7a->leave($__internal_2552d5d7f67ab5ae83d591ed1b6d09d08d281471187c5b8b2d166602d5e4fc7a_prof);

        
        $__internal_6a00ce0f558c8705c2abcc399e3668577ef84facda17287165546218fc4142bb->leave($__internal_6a00ce0f558c8705c2abcc399e3668577ef84facda17287165546218fc4142bb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
