<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_dcdceb948a0533cef4db330b2c9c582ee2557cf0600a0a6d5424e2954ae69a69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_569561a36a519217f90d78b4ff07ad68511066d4154398f074018c151272e09c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_569561a36a519217f90d78b4ff07ad68511066d4154398f074018c151272e09c->enter($__internal_569561a36a519217f90d78b4ff07ad68511066d4154398f074018c151272e09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_c8421767b39bc24efcd6ef8a9a657af2fef6bd8cacdc9c84c64e507d3bf581d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8421767b39bc24efcd6ef8a9a657af2fef6bd8cacdc9c84c64e507d3bf581d9->enter($__internal_c8421767b39bc24efcd6ef8a9a657af2fef6bd8cacdc9c84c64e507d3bf581d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_569561a36a519217f90d78b4ff07ad68511066d4154398f074018c151272e09c->leave($__internal_569561a36a519217f90d78b4ff07ad68511066d4154398f074018c151272e09c_prof);

        
        $__internal_c8421767b39bc24efcd6ef8a9a657af2fef6bd8cacdc9c84c64e507d3bf581d9->leave($__internal_c8421767b39bc24efcd6ef8a9a657af2fef6bd8cacdc9c84c64e507d3bf581d9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_13a9fee657928529ac9b8de3f1eb87f9c9c989751de0f7f1fe0f30ac05a895c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13a9fee657928529ac9b8de3f1eb87f9c9c989751de0f7f1fe0f30ac05a895c8->enter($__internal_13a9fee657928529ac9b8de3f1eb87f9c9c989751de0f7f1fe0f30ac05a895c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c1ffe4c7fa2fa5ec47089480b6e3ebc9abac2bd654c8e10fede131a9385d3df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1ffe4c7fa2fa5ec47089480b6e3ebc9abac2bd654c8e10fede131a9385d3df1->enter($__internal_c1ffe4c7fa2fa5ec47089480b6e3ebc9abac2bd654c8e10fede131a9385d3df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c1ffe4c7fa2fa5ec47089480b6e3ebc9abac2bd654c8e10fede131a9385d3df1->leave($__internal_c1ffe4c7fa2fa5ec47089480b6e3ebc9abac2bd654c8e10fede131a9385d3df1_prof);

        
        $__internal_13a9fee657928529ac9b8de3f1eb87f9c9c989751de0f7f1fe0f30ac05a895c8->leave($__internal_13a9fee657928529ac9b8de3f1eb87f9c9c989751de0f7f1fe0f30ac05a895c8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9cda12b551b675b4a8c735c082a5ae52e0d6366d7e2dfe702188681f2d3e7fe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cda12b551b675b4a8c735c082a5ae52e0d6366d7e2dfe702188681f2d3e7fe5->enter($__internal_9cda12b551b675b4a8c735c082a5ae52e0d6366d7e2dfe702188681f2d3e7fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8c9fdf8f6385b2e76c5464fad847025882eb2aabe3aa16aaec8c0e459cfa0be0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c9fdf8f6385b2e76c5464fad847025882eb2aabe3aa16aaec8c0e459cfa0be0->enter($__internal_8c9fdf8f6385b2e76c5464fad847025882eb2aabe3aa16aaec8c0e459cfa0be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_8c9fdf8f6385b2e76c5464fad847025882eb2aabe3aa16aaec8c0e459cfa0be0->leave($__internal_8c9fdf8f6385b2e76c5464fad847025882eb2aabe3aa16aaec8c0e459cfa0be0_prof);

        
        $__internal_9cda12b551b675b4a8c735c082a5ae52e0d6366d7e2dfe702188681f2d3e7fe5->leave($__internal_9cda12b551b675b4a8c735c082a5ae52e0d6366d7e2dfe702188681f2d3e7fe5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
