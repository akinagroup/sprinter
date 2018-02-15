<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b91547aa5c4156bdae77773ac6e410dc70127b1f9c7dafd98759b782c68b9651 extends Twig_Template
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
        $__internal_fc5f49ef8fc1b6c1759db5440953ddae7e55bbba093eaf2eae574af8480ea121 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc5f49ef8fc1b6c1759db5440953ddae7e55bbba093eaf2eae574af8480ea121->enter($__internal_fc5f49ef8fc1b6c1759db5440953ddae7e55bbba093eaf2eae574af8480ea121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_c9ec1a8e59203e096d27672e497d7827062d862808e01cb9887e506a1d799ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9ec1a8e59203e096d27672e497d7827062d862808e01cb9887e506a1d799ec7->enter($__internal_c9ec1a8e59203e096d27672e497d7827062d862808e01cb9887e506a1d799ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_fc5f49ef8fc1b6c1759db5440953ddae7e55bbba093eaf2eae574af8480ea121->leave($__internal_fc5f49ef8fc1b6c1759db5440953ddae7e55bbba093eaf2eae574af8480ea121_prof);

        
        $__internal_c9ec1a8e59203e096d27672e497d7827062d862808e01cb9887e506a1d799ec7->leave($__internal_c9ec1a8e59203e096d27672e497d7827062d862808e01cb9887e506a1d799ec7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
