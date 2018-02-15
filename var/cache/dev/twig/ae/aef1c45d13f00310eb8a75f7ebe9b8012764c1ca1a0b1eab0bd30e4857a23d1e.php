<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_4e93f634185f53674520b7cd6676722c1cf28e2b3d62c78feb0267ab70c9595a extends Twig_Template
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
        $__internal_82680f3b77dab2d0d856c9bf073da64e9571ff88452c76200266f293a70aadfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82680f3b77dab2d0d856c9bf073da64e9571ff88452c76200266f293a70aadfb->enter($__internal_82680f3b77dab2d0d856c9bf073da64e9571ff88452c76200266f293a70aadfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_fc7993249ab16771f4239bf11ad18fb37f980be7f764823ff33a21bb5562d161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc7993249ab16771f4239bf11ad18fb37f980be7f764823ff33a21bb5562d161->enter($__internal_fc7993249ab16771f4239bf11ad18fb37f980be7f764823ff33a21bb5562d161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_82680f3b77dab2d0d856c9bf073da64e9571ff88452c76200266f293a70aadfb->leave($__internal_82680f3b77dab2d0d856c9bf073da64e9571ff88452c76200266f293a70aadfb_prof);

        
        $__internal_fc7993249ab16771f4239bf11ad18fb37f980be7f764823ff33a21bb5562d161->leave($__internal_fc7993249ab16771f4239bf11ad18fb37f980be7f764823ff33a21bb5562d161_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
