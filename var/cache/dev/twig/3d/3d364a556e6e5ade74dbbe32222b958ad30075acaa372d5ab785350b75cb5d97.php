<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_3e7477d1a6cd6277762bcab7871dfd3ba8372cd88b958e00b110d53652724c3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6d15cbf1ac754af863bb8eb029781e9a403079c972d4d5ffe714ceca8895012 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6d15cbf1ac754af863bb8eb029781e9a403079c972d4d5ffe714ceca8895012->enter($__internal_e6d15cbf1ac754af863bb8eb029781e9a403079c972d4d5ffe714ceca8895012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_8e38b76585f118212e110f3b6c2dc2839a60e272dcf4a5733b4369e7ba148ac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e38b76585f118212e110f3b6c2dc2839a60e272dcf4a5733b4369e7ba148ac1->enter($__internal_8e38b76585f118212e110f3b6c2dc2839a60e272dcf4a5733b4369e7ba148ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_e6d15cbf1ac754af863bb8eb029781e9a403079c972d4d5ffe714ceca8895012->leave($__internal_e6d15cbf1ac754af863bb8eb029781e9a403079c972d4d5ffe714ceca8895012_prof);

        
        $__internal_8e38b76585f118212e110f3b6c2dc2839a60e272dcf4a5733b4369e7ba148ac1->leave($__internal_8e38b76585f118212e110f3b6c2dc2839a60e272dcf4a5733b4369e7ba148ac1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
