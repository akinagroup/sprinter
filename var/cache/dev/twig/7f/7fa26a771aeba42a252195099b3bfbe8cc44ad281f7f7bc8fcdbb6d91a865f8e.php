<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_fc2c074f5e44e1bacfdefb69fac1fb74e09f62f1a6aa3820dabf32b3033ff7f1 extends Twig_Template
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
        $__internal_de3003bd724cc1e694f129e16de9b84135dba5b6c661b1a13a3e85f7d81de8a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de3003bd724cc1e694f129e16de9b84135dba5b6c661b1a13a3e85f7d81de8a0->enter($__internal_de3003bd724cc1e694f129e16de9b84135dba5b6c661b1a13a3e85f7d81de8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_597f65e78855bafe56b1658d12902414484f6e74d9dfb8d68b2b3952cd1d3734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_597f65e78855bafe56b1658d12902414484f6e74d9dfb8d68b2b3952cd1d3734->enter($__internal_597f65e78855bafe56b1658d12902414484f6e74d9dfb8d68b2b3952cd1d3734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_de3003bd724cc1e694f129e16de9b84135dba5b6c661b1a13a3e85f7d81de8a0->leave($__internal_de3003bd724cc1e694f129e16de9b84135dba5b6c661b1a13a3e85f7d81de8a0_prof);

        
        $__internal_597f65e78855bafe56b1658d12902414484f6e74d9dfb8d68b2b3952cd1d3734->leave($__internal_597f65e78855bafe56b1658d12902414484f6e74d9dfb8d68b2b3952cd1d3734_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
