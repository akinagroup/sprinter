<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_e55c720fe8fe55acbb205cb962e530152749f22c87a60739a7679e86ed5d8643 extends Twig_Template
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
        $__internal_8185dc94bbb2a2f63c2889997601b1f9b96417a74dcf61bbc58c7414c240179b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8185dc94bbb2a2f63c2889997601b1f9b96417a74dcf61bbc58c7414c240179b->enter($__internal_8185dc94bbb2a2f63c2889997601b1f9b96417a74dcf61bbc58c7414c240179b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_7d33d02c295c4e85b51392e83a90fc36729c96f1f090c82446463f5e270f2756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d33d02c295c4e85b51392e83a90fc36729c96f1f090c82446463f5e270f2756->enter($__internal_7d33d02c295c4e85b51392e83a90fc36729c96f1f090c82446463f5e270f2756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_8185dc94bbb2a2f63c2889997601b1f9b96417a74dcf61bbc58c7414c240179b->leave($__internal_8185dc94bbb2a2f63c2889997601b1f9b96417a74dcf61bbc58c7414c240179b_prof);

        
        $__internal_7d33d02c295c4e85b51392e83a90fc36729c96f1f090c82446463f5e270f2756->leave($__internal_7d33d02c295c4e85b51392e83a90fc36729c96f1f090c82446463f5e270f2756_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
