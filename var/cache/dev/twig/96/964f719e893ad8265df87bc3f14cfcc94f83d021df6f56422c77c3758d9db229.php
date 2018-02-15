<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_b09cda79bbf0e3def340fbc9a985b177239d71b165c34c606934d919042103cc extends Twig_Template
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
        $__internal_d2eaa7d344e8554b1bc6025cce95d09f247773fa6f33b9b337fefc09aac4e677 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2eaa7d344e8554b1bc6025cce95d09f247773fa6f33b9b337fefc09aac4e677->enter($__internal_d2eaa7d344e8554b1bc6025cce95d09f247773fa6f33b9b337fefc09aac4e677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_c351e3e65a02ba95c81583f23daa994da54dbee48ef0e528941c5b09bd65f63b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c351e3e65a02ba95c81583f23daa994da54dbee48ef0e528941c5b09bd65f63b->enter($__internal_c351e3e65a02ba95c81583f23daa994da54dbee48ef0e528941c5b09bd65f63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_d2eaa7d344e8554b1bc6025cce95d09f247773fa6f33b9b337fefc09aac4e677->leave($__internal_d2eaa7d344e8554b1bc6025cce95d09f247773fa6f33b9b337fefc09aac4e677_prof);

        
        $__internal_c351e3e65a02ba95c81583f23daa994da54dbee48ef0e528941c5b09bd65f63b->leave($__internal_c351e3e65a02ba95c81583f23daa994da54dbee48ef0e528941c5b09bd65f63b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
