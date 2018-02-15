<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_dc3189dbccb1e153c4004c4d605e07ab747caefc3f7dd4e065877c50d4c70a30 extends Twig_Template
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
        $__internal_6d86b20db0066954b15292ef9b2b3bf630f7f86307f8e94b2e1037b62d38b7cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d86b20db0066954b15292ef9b2b3bf630f7f86307f8e94b2e1037b62d38b7cf->enter($__internal_6d86b20db0066954b15292ef9b2b3bf630f7f86307f8e94b2e1037b62d38b7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_467fc02567ab4906b88098480e6d536f29034e91a8cb95c4683618964fe7caee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_467fc02567ab4906b88098480e6d536f29034e91a8cb95c4683618964fe7caee->enter($__internal_467fc02567ab4906b88098480e6d536f29034e91a8cb95c4683618964fe7caee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_6d86b20db0066954b15292ef9b2b3bf630f7f86307f8e94b2e1037b62d38b7cf->leave($__internal_6d86b20db0066954b15292ef9b2b3bf630f7f86307f8e94b2e1037b62d38b7cf_prof);

        
        $__internal_467fc02567ab4906b88098480e6d536f29034e91a8cb95c4683618964fe7caee->leave($__internal_467fc02567ab4906b88098480e6d536f29034e91a8cb95c4683618964fe7caee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
