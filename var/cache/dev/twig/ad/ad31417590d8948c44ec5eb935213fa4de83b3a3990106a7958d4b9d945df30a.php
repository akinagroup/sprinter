<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_0771b53ae4d1613a6cbed121d95ae565e39d7a3c72a68785abd3fc1d8c11e725 extends Twig_Template
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
        $__internal_7463c239cec54bad1a032c86908a78f58d3226c019c9986ec43a0e8d6ba328b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7463c239cec54bad1a032c86908a78f58d3226c019c9986ec43a0e8d6ba328b2->enter($__internal_7463c239cec54bad1a032c86908a78f58d3226c019c9986ec43a0e8d6ba328b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_bd16c08d291499c038cee2a7123f311c02027c4335c1de6fb0360c55a03fe310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd16c08d291499c038cee2a7123f311c02027c4335c1de6fb0360c55a03fe310->enter($__internal_bd16c08d291499c038cee2a7123f311c02027c4335c1de6fb0360c55a03fe310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_7463c239cec54bad1a032c86908a78f58d3226c019c9986ec43a0e8d6ba328b2->leave($__internal_7463c239cec54bad1a032c86908a78f58d3226c019c9986ec43a0e8d6ba328b2_prof);

        
        $__internal_bd16c08d291499c038cee2a7123f311c02027c4335c1de6fb0360c55a03fe310->leave($__internal_bd16c08d291499c038cee2a7123f311c02027c4335c1de6fb0360c55a03fe310_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/GestionImmobiliére/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
