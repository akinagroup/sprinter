<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_adefa7c1f18b184655717e87b357c60a725ca98ca2124c84f0e3abf30fd1ed55 extends Twig_Template
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
        $__internal_b165250911ece058ff9efbad4dd44e3835be78cbed7ff808a27f20bb1fa9fa3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b165250911ece058ff9efbad4dd44e3835be78cbed7ff808a27f20bb1fa9fa3b->enter($__internal_b165250911ece058ff9efbad4dd44e3835be78cbed7ff808a27f20bb1fa9fa3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_85daa759c39bfacc8c40bafa5acde43aeaa7d37e36a203701d822805098c0d5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85daa759c39bfacc8c40bafa5acde43aeaa7d37e36a203701d822805098c0d5e->enter($__internal_85daa759c39bfacc8c40bafa5acde43aeaa7d37e36a203701d822805098c0d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_b165250911ece058ff9efbad4dd44e3835be78cbed7ff808a27f20bb1fa9fa3b->leave($__internal_b165250911ece058ff9efbad4dd44e3835be78cbed7ff808a27f20bb1fa9fa3b_prof);

        
        $__internal_85daa759c39bfacc8c40bafa5acde43aeaa7d37e36a203701d822805098c0d5e->leave($__internal_85daa759c39bfacc8c40bafa5acde43aeaa7d37e36a203701d822805098c0d5e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
