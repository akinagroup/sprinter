<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_eaa6be072a4bc25b115b0d05e1f4fda591aae943f4b374c5c446f085ff8011e5 extends Twig_Template
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
        $__internal_48a462b305b4c9a314cc944764bf712d561d517289ccaf520e0c1c196e9115f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48a462b305b4c9a314cc944764bf712d561d517289ccaf520e0c1c196e9115f5->enter($__internal_48a462b305b4c9a314cc944764bf712d561d517289ccaf520e0c1c196e9115f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_d98653774a58fcc6c2b6933a9ef6b0a1982f0bc4807c6ca73c2d14bdc0e8d0c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98653774a58fcc6c2b6933a9ef6b0a1982f0bc4807c6ca73c2d14bdc0e8d0c0->enter($__internal_d98653774a58fcc6c2b6933a9ef6b0a1982f0bc4807c6ca73c2d14bdc0e8d0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_48a462b305b4c9a314cc944764bf712d561d517289ccaf520e0c1c196e9115f5->leave($__internal_48a462b305b4c9a314cc944764bf712d561d517289ccaf520e0c1c196e9115f5_prof);

        
        $__internal_d98653774a58fcc6c2b6933a9ef6b0a1982f0bc4807c6ca73c2d14bdc0e8d0c0->leave($__internal_d98653774a58fcc6c2b6933a9ef6b0a1982f0bc4807c6ca73c2d14bdc0e8d0c0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
