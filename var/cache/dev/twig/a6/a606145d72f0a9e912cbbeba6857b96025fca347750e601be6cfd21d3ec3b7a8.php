<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_2005e07cd187ca75d82dd03999e0638b43c4f5e189396640ac57a09a0b1be72d extends Twig_Template
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
        $__internal_108e0f72bb05e151c35d035a453e5d8580212bf54ec1ad7fd02872566b909815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_108e0f72bb05e151c35d035a453e5d8580212bf54ec1ad7fd02872566b909815->enter($__internal_108e0f72bb05e151c35d035a453e5d8580212bf54ec1ad7fd02872566b909815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_df9783c6134b55072b7a5f415617b37e9cb1f09ba8ee7d6bd78e222076e82ae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df9783c6134b55072b7a5f415617b37e9cb1f09ba8ee7d6bd78e222076e82ae3->enter($__internal_df9783c6134b55072b7a5f415617b37e9cb1f09ba8ee7d6bd78e222076e82ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_108e0f72bb05e151c35d035a453e5d8580212bf54ec1ad7fd02872566b909815->leave($__internal_108e0f72bb05e151c35d035a453e5d8580212bf54ec1ad7fd02872566b909815_prof);

        
        $__internal_df9783c6134b55072b7a5f415617b37e9cb1f09ba8ee7d6bd78e222076e82ae3->leave($__internal_df9783c6134b55072b7a5f415617b37e9cb1f09ba8ee7d6bd78e222076e82ae3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
