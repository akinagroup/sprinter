<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_751833a05b19aadf4bc9ebb6c53b61944a2071e880469c6b72badaeb9aa73d48 extends Twig_Template
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
        $__internal_f3c84d6da86e53afb330f5c9bf65a559290013eff309786071851d6dbb1c7c06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3c84d6da86e53afb330f5c9bf65a559290013eff309786071851d6dbb1c7c06->enter($__internal_f3c84d6da86e53afb330f5c9bf65a559290013eff309786071851d6dbb1c7c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_caff0d9dc974a897f63cecf4760656c23c99afda3d22edddb4782c0b1f9524bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caff0d9dc974a897f63cecf4760656c23c99afda3d22edddb4782c0b1f9524bb->enter($__internal_caff0d9dc974a897f63cecf4760656c23c99afda3d22edddb4782c0b1f9524bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_f3c84d6da86e53afb330f5c9bf65a559290013eff309786071851d6dbb1c7c06->leave($__internal_f3c84d6da86e53afb330f5c9bf65a559290013eff309786071851d6dbb1c7c06_prof);

        
        $__internal_caff0d9dc974a897f63cecf4760656c23c99afda3d22edddb4782c0b1f9524bb->leave($__internal_caff0d9dc974a897f63cecf4760656c23c99afda3d22edddb4782c0b1f9524bb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
