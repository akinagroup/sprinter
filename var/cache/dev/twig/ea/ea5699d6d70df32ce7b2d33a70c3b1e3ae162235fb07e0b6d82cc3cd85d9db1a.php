<?php

/* ::base.html.twig */
class __TwigTemplate_ce3c23e395dbedf98b3aba1c3f0ba6197b95b820c3d6153f7951333addcf13d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_230f5bd6a82d0b677057749cda9232ec48cd0f461eda2c6a3a6aff83ba0eee9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_230f5bd6a82d0b677057749cda9232ec48cd0f461eda2c6a3a6aff83ba0eee9c->enter($__internal_230f5bd6a82d0b677057749cda9232ec48cd0f461eda2c6a3a6aff83ba0eee9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_d43ffeafad9d424c8a3e49ece811733dd6106c0368e95e7fbe498deda32b02bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d43ffeafad9d424c8a3e49ece811733dd6106c0368e95e7fbe498deda32b02bb->enter($__internal_d43ffeafad9d424c8a3e49ece811733dd6106c0368e95e7fbe498deda32b02bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_230f5bd6a82d0b677057749cda9232ec48cd0f461eda2c6a3a6aff83ba0eee9c->leave($__internal_230f5bd6a82d0b677057749cda9232ec48cd0f461eda2c6a3a6aff83ba0eee9c_prof);

        
        $__internal_d43ffeafad9d424c8a3e49ece811733dd6106c0368e95e7fbe498deda32b02bb->leave($__internal_d43ffeafad9d424c8a3e49ece811733dd6106c0368e95e7fbe498deda32b02bb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_81cac267c5e7600a22886cb30e01b9613f341fb7e0bc2492f6a497b575615986 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81cac267c5e7600a22886cb30e01b9613f341fb7e0bc2492f6a497b575615986->enter($__internal_81cac267c5e7600a22886cb30e01b9613f341fb7e0bc2492f6a497b575615986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3cf819ee9fa1da0e12638f4c692134bc8c968079763d50d5ea76200435c60474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cf819ee9fa1da0e12638f4c692134bc8c968079763d50d5ea76200435c60474->enter($__internal_3cf819ee9fa1da0e12638f4c692134bc8c968079763d50d5ea76200435c60474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3cf819ee9fa1da0e12638f4c692134bc8c968079763d50d5ea76200435c60474->leave($__internal_3cf819ee9fa1da0e12638f4c692134bc8c968079763d50d5ea76200435c60474_prof);

        
        $__internal_81cac267c5e7600a22886cb30e01b9613f341fb7e0bc2492f6a497b575615986->leave($__internal_81cac267c5e7600a22886cb30e01b9613f341fb7e0bc2492f6a497b575615986_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_139dd54f139aa56551d5228886520d6f5d0cc260192aa5589881ed7767c912de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_139dd54f139aa56551d5228886520d6f5d0cc260192aa5589881ed7767c912de->enter($__internal_139dd54f139aa56551d5228886520d6f5d0cc260192aa5589881ed7767c912de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8b02b473a5c2bc6150135f1312cd4144704d3102b5a0dc899af48b1b94eed8f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b02b473a5c2bc6150135f1312cd4144704d3102b5a0dc899af48b1b94eed8f0->enter($__internal_8b02b473a5c2bc6150135f1312cd4144704d3102b5a0dc899af48b1b94eed8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8b02b473a5c2bc6150135f1312cd4144704d3102b5a0dc899af48b1b94eed8f0->leave($__internal_8b02b473a5c2bc6150135f1312cd4144704d3102b5a0dc899af48b1b94eed8f0_prof);

        
        $__internal_139dd54f139aa56551d5228886520d6f5d0cc260192aa5589881ed7767c912de->leave($__internal_139dd54f139aa56551d5228886520d6f5d0cc260192aa5589881ed7767c912de_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_321a1bb9194d3b0fed04b1d389e8a35c988c435113e3e67acf4776bc1d661361 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_321a1bb9194d3b0fed04b1d389e8a35c988c435113e3e67acf4776bc1d661361->enter($__internal_321a1bb9194d3b0fed04b1d389e8a35c988c435113e3e67acf4776bc1d661361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_066f442f98f2168408620bb563140342a1225cad7e8f9f90a7a1f82de00ad1c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_066f442f98f2168408620bb563140342a1225cad7e8f9f90a7a1f82de00ad1c2->enter($__internal_066f442f98f2168408620bb563140342a1225cad7e8f9f90a7a1f82de00ad1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_066f442f98f2168408620bb563140342a1225cad7e8f9f90a7a1f82de00ad1c2->leave($__internal_066f442f98f2168408620bb563140342a1225cad7e8f9f90a7a1f82de00ad1c2_prof);

        
        $__internal_321a1bb9194d3b0fed04b1d389e8a35c988c435113e3e67acf4776bc1d661361->leave($__internal_321a1bb9194d3b0fed04b1d389e8a35c988c435113e3e67acf4776bc1d661361_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_479fbcba82dad4eba0347cfaec0922a3fb381180853adb0d7957981ffd8e9a7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_479fbcba82dad4eba0347cfaec0922a3fb381180853adb0d7957981ffd8e9a7f->enter($__internal_479fbcba82dad4eba0347cfaec0922a3fb381180853adb0d7957981ffd8e9a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_924655c1cbc9db5d93d1028a14542bd92dd28bac630b365fca18182b1d6a39b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_924655c1cbc9db5d93d1028a14542bd92dd28bac630b365fca18182b1d6a39b5->enter($__internal_924655c1cbc9db5d93d1028a14542bd92dd28bac630b365fca18182b1d6a39b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_924655c1cbc9db5d93d1028a14542bd92dd28bac630b365fca18182b1d6a39b5->leave($__internal_924655c1cbc9db5d93d1028a14542bd92dd28bac630b365fca18182b1d6a39b5_prof);

        
        $__internal_479fbcba82dad4eba0347cfaec0922a3fb381180853adb0d7957981ffd8e9a7f->leave($__internal_479fbcba82dad4eba0347cfaec0922a3fb381180853adb0d7957981ffd8e9a7f_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/GestionImmobiliére/app/Resources/views/base.html.twig");
    }
}
