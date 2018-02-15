<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_f3a4e4fefc781fea7b79e6a42c3ccf2a163350a707e86246afcf514c71a36b79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8aace1ec656c8a7d8a13686df4c6b33dbf43d9f7c0790a4c031e243b8124ce05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aace1ec656c8a7d8a13686df4c6b33dbf43d9f7c0790a4c031e243b8124ce05->enter($__internal_8aace1ec656c8a7d8a13686df4c6b33dbf43d9f7c0790a4c031e243b8124ce05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_9a5b33bf630305e4a695f0f8228f92e40abba135b4801f153613c9c128fa311b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a5b33bf630305e4a695f0f8228f92e40abba135b4801f153613c9c128fa311b->enter($__internal_9a5b33bf630305e4a695f0f8228f92e40abba135b4801f153613c9c128fa311b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_8aace1ec656c8a7d8a13686df4c6b33dbf43d9f7c0790a4c031e243b8124ce05->leave($__internal_8aace1ec656c8a7d8a13686df4c6b33dbf43d9f7c0790a4c031e243b8124ce05_prof);

        
        $__internal_9a5b33bf630305e4a695f0f8228f92e40abba135b4801f153613c9c128fa311b->leave($__internal_9a5b33bf630305e4a695f0f8228f92e40abba135b4801f153613c9c128fa311b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_df58948677528b8fea9bbd971f54922fe89b4bb3914c19ba5b889b2181e564be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df58948677528b8fea9bbd971f54922fe89b4bb3914c19ba5b889b2181e564be->enter($__internal_df58948677528b8fea9bbd971f54922fe89b4bb3914c19ba5b889b2181e564be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f37b2064f180b20af0abff48c79b27e6d1eadb3264c49bd2ee679e142a3792fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f37b2064f180b20af0abff48c79b27e6d1eadb3264c49bd2ee679e142a3792fe->enter($__internal_f37b2064f180b20af0abff48c79b27e6d1eadb3264c49bd2ee679e142a3792fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f37b2064f180b20af0abff48c79b27e6d1eadb3264c49bd2ee679e142a3792fe->leave($__internal_f37b2064f180b20af0abff48c79b27e6d1eadb3264c49bd2ee679e142a3792fe_prof);

        
        $__internal_df58948677528b8fea9bbd971f54922fe89b4bb3914c19ba5b889b2181e564be->leave($__internal_df58948677528b8fea9bbd971f54922fe89b4bb3914c19ba5b889b2181e564be_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e418b74ea5f5197ae293ce0adfab9873f2abe163051c9aae2924e70e1a241d94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e418b74ea5f5197ae293ce0adfab9873f2abe163051c9aae2924e70e1a241d94->enter($__internal_e418b74ea5f5197ae293ce0adfab9873f2abe163051c9aae2924e70e1a241d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2ee98e5852a560266d37f8c1a20c0ec14c6f2bda861f64d36e1ff52a519b22df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee98e5852a560266d37f8c1a20c0ec14c6f2bda861f64d36e1ff52a519b22df->enter($__internal_2ee98e5852a560266d37f8c1a20c0ec14c6f2bda861f64d36e1ff52a519b22df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_2ee98e5852a560266d37f8c1a20c0ec14c6f2bda861f64d36e1ff52a519b22df->leave($__internal_2ee98e5852a560266d37f8c1a20c0ec14c6f2bda861f64d36e1ff52a519b22df_prof);

        
        $__internal_e418b74ea5f5197ae293ce0adfab9873f2abe163051c9aae2924e70e1a241d94->leave($__internal_e418b74ea5f5197ae293ce0adfab9873f2abe163051c9aae2924e70e1a241d94_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_89702404d10392b538aa867c5a56bb54e807a83498c1ba1ecb0f492af97de882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89702404d10392b538aa867c5a56bb54e807a83498c1ba1ecb0f492af97de882->enter($__internal_89702404d10392b538aa867c5a56bb54e807a83498c1ba1ecb0f492af97de882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b98b2ec7f2cd8833eab33131527bf0fdd6967149524514ad2b4719c14d4781e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b98b2ec7f2cd8833eab33131527bf0fdd6967149524514ad2b4719c14d4781e->enter($__internal_0b98b2ec7f2cd8833eab33131527bf0fdd6967149524514ad2b4719c14d4781e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0b98b2ec7f2cd8833eab33131527bf0fdd6967149524514ad2b4719c14d4781e->leave($__internal_0b98b2ec7f2cd8833eab33131527bf0fdd6967149524514ad2b4719c14d4781e_prof);

        
        $__internal_89702404d10392b538aa867c5a56bb54e807a83498c1ba1ecb0f492af97de882->leave($__internal_89702404d10392b538aa867c5a56bb54e807a83498c1ba1ecb0f492af97de882_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
