<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_44f0e60540e169f8ae102f63fc206bcea773127bc2dba286b53608d8e89eb559 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62ecad7e1db10060b96e161bc809d33ca51ddc95c636606812d2489dcbace579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62ecad7e1db10060b96e161bc809d33ca51ddc95c636606812d2489dcbace579->enter($__internal_62ecad7e1db10060b96e161bc809d33ca51ddc95c636606812d2489dcbace579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_259d45ce1f6d1531cf4058ba84d1f22e436c02695aad4c1fc1595ff262dfab08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_259d45ce1f6d1531cf4058ba84d1f22e436c02695aad4c1fc1595ff262dfab08->enter($__internal_259d45ce1f6d1531cf4058ba84d1f22e436c02695aad4c1fc1595ff262dfab08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62ecad7e1db10060b96e161bc809d33ca51ddc95c636606812d2489dcbace579->leave($__internal_62ecad7e1db10060b96e161bc809d33ca51ddc95c636606812d2489dcbace579_prof);

        
        $__internal_259d45ce1f6d1531cf4058ba84d1f22e436c02695aad4c1fc1595ff262dfab08->leave($__internal_259d45ce1f6d1531cf4058ba84d1f22e436c02695aad4c1fc1595ff262dfab08_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_f6143e1095855c3b9ece46bf615e3e48a42e8cc166dc64c56487b20b51b659f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6143e1095855c3b9ece46bf615e3e48a42e8cc166dc64c56487b20b51b659f3->enter($__internal_f6143e1095855c3b9ece46bf615e3e48a42e8cc166dc64c56487b20b51b659f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_640811eb7c5adada2b39054d9ad3fe12ad7acd9cdabb24d4dad9d0afef1c2b95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_640811eb7c5adada2b39054d9ad3fe12ad7acd9cdabb24d4dad9d0afef1c2b95->enter($__internal_640811eb7c5adada2b39054d9ad3fe12ad7acd9cdabb24d4dad9d0afef1c2b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_640811eb7c5adada2b39054d9ad3fe12ad7acd9cdabb24d4dad9d0afef1c2b95->leave($__internal_640811eb7c5adada2b39054d9ad3fe12ad7acd9cdabb24d4dad9d0afef1c2b95_prof);

        
        $__internal_f6143e1095855c3b9ece46bf615e3e48a42e8cc166dc64c56487b20b51b659f3->leave($__internal_f6143e1095855c3b9ece46bf615e3e48a42e8cc166dc64c56487b20b51b659f3_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0a5bd15381405d23baa4a69a7776761a301c2e8776831bce8404756e45f46b2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a5bd15381405d23baa4a69a7776761a301c2e8776831bce8404756e45f46b2b->enter($__internal_0a5bd15381405d23baa4a69a7776761a301c2e8776831bce8404756e45f46b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b94d594854a31dd83683673fe6577c372b256b48fe1937ea84f405ba4aae26a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b94d594854a31dd83683673fe6577c372b256b48fe1937ea84f405ba4aae26a7->enter($__internal_b94d594854a31dd83683673fe6577c372b256b48fe1937ea84f405ba4aae26a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_b94d594854a31dd83683673fe6577c372b256b48fe1937ea84f405ba4aae26a7->leave($__internal_b94d594854a31dd83683673fe6577c372b256b48fe1937ea84f405ba4aae26a7_prof);

        
        $__internal_0a5bd15381405d23baa4a69a7776761a301c2e8776831bce8404756e45f46b2b->leave($__internal_0a5bd15381405d23baa4a69a7776761a301c2e8776831bce8404756e45f46b2b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
