<?php

/* AkinaImmobilierBundle:Front:accueil.html.twig */
class __TwigTemplate_4aa896ce2d1120691d932d421d766180e38b2152981e701859ed261e2a315694 extends Twig_Template
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
        $__internal_ba6f54428958d2d93270d540a4776b1e886ff758f7222e4593280868723f1951 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba6f54428958d2d93270d540a4776b1e886ff758f7222e4593280868723f1951->enter($__internal_ba6f54428958d2d93270d540a4776b1e886ff758f7222e4593280868723f1951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Front:accueil.html.twig"));

        $__internal_d50ac9813cc2ff29d6215891186be7c62cd80ff45371a5a39674ebb62fe093ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d50ac9813cc2ff29d6215891186be7c62cd80ff45371a5a39674ebb62fe093ab->enter($__internal_d50ac9813cc2ff29d6215891186be7c62cd80ff45371a5a39674ebb62fe093ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Front:accueil.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Biens"] ?? $this->getContext($context, "Biens")));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            // line 2
            echo twig_escape_filter($this->env, $this->getAttribute($context["b"], "id", array()), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_ba6f54428958d2d93270d540a4776b1e886ff758f7222e4593280868723f1951->leave($__internal_ba6f54428958d2d93270d540a4776b1e886ff758f7222e4593280868723f1951_prof);

        
        $__internal_d50ac9813cc2ff29d6215891186be7c62cd80ff45371a5a39674ebb62fe093ab->leave($__internal_d50ac9813cc2ff29d6215891186be7c62cd80ff45371a5a39674ebb62fe093ab_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Front:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for b in Biens%}
{{b.id}}
{%endfor%}", "AkinaImmobilierBundle:Front:accueil.html.twig", "/var/www/html/GestionImmobiliére/src/Akina/ImmobilierBundle/Resources/views/Front/accueil.html.twig");
    }
}
