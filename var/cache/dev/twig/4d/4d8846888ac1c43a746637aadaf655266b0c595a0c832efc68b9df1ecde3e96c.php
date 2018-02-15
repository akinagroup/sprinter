<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_c2ba992e3a338cd22adccddf129683a983bae5b49330685e4fda702b7f0aee9f extends Twig_Template
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
        $__internal_2da36f44d589add5903d555aa6daeb161b4db96d86c27b063f99d1c131b0e698 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2da36f44d589add5903d555aa6daeb161b4db96d86c27b063f99d1c131b0e698->enter($__internal_2da36f44d589add5903d555aa6daeb161b4db96d86c27b063f99d1c131b0e698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_ee4ccfdd7a9d28688fe200b0f7818f6253e65639abdcf88378dc763dd8f0eb69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee4ccfdd7a9d28688fe200b0f7818f6253e65639abdcf88378dc763dd8f0eb69->enter($__internal_ee4ccfdd7a9d28688fe200b0f7818f6253e65639abdcf88378dc763dd8f0eb69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_2da36f44d589add5903d555aa6daeb161b4db96d86c27b063f99d1c131b0e698->leave($__internal_2da36f44d589add5903d555aa6daeb161b4db96d86c27b063f99d1c131b0e698_prof);

        
        $__internal_ee4ccfdd7a9d28688fe200b0f7818f6253e65639abdcf88378dc763dd8f0eb69->leave($__internal_ee4ccfdd7a9d28688fe200b0f7818f6253e65639abdcf88378dc763dd8f0eb69_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
