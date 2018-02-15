<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_a090519f9a2d863545f52e9a518d5d14320ae6e658c74c9a1cbc0778f2d8cd5b extends Twig_Template
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
        $__internal_badde0458f1560288211a5ab6df115e18f15f884617b23bec60918e25a64d826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_badde0458f1560288211a5ab6df115e18f15f884617b23bec60918e25a64d826->enter($__internal_badde0458f1560288211a5ab6df115e18f15f884617b23bec60918e25a64d826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_918cdc0ab0b3ffc05683a14974b54b4b59408b4a242f35598845b7a68b045fe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_918cdc0ab0b3ffc05683a14974b54b4b59408b4a242f35598845b7a68b045fe4->enter($__internal_918cdc0ab0b3ffc05683a14974b54b4b59408b4a242f35598845b7a68b045fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_badde0458f1560288211a5ab6df115e18f15f884617b23bec60918e25a64d826->leave($__internal_badde0458f1560288211a5ab6df115e18f15f884617b23bec60918e25a64d826_prof);

        
        $__internal_918cdc0ab0b3ffc05683a14974b54b4b59408b4a242f35598845b7a68b045fe4->leave($__internal_918cdc0ab0b3ffc05683a14974b54b4b59408b4a242f35598845b7a68b045fe4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
