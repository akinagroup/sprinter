<?php

/* AkinaImmobilierBundle:Front:list.html.twig */
class __TwigTemplate_484dcba0041e7c6f788b4be59f37271ab324ae5574798c7ac073e39a7a823d50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AkinaImmobilierBundle:Front:list.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e4312f25842268b086254626ebb67cbbb2225b0325238f0e37856ea0d729061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e4312f25842268b086254626ebb67cbbb2225b0325238f0e37856ea0d729061->enter($__internal_1e4312f25842268b086254626ebb67cbbb2225b0325238f0e37856ea0d729061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Front:list.html.twig"));

        $__internal_df7f0cdb824aabc3656ea4694c5302afb36d0cfa78cbdea839f9ab027f3e857c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df7f0cdb824aabc3656ea4694c5302afb36d0cfa78cbdea839f9ab027f3e857c->enter($__internal_df7f0cdb824aabc3656ea4694c5302afb36d0cfa78cbdea839f9ab027f3e857c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Front:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e4312f25842268b086254626ebb67cbbb2225b0325238f0e37856ea0d729061->leave($__internal_1e4312f25842268b086254626ebb67cbbb2225b0325238f0e37856ea0d729061_prof);

        
        $__internal_df7f0cdb824aabc3656ea4694c5302afb36d0cfa78cbdea839f9ab027f3e857c->leave($__internal_df7f0cdb824aabc3656ea4694c5302afb36d0cfa78cbdea839f9ab027f3e857c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_75a8ef390df969eb778e1544804fe9434ec7f64846331aa5d00dc71e6bf1c874 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75a8ef390df969eb778e1544804fe9434ec7f64846331aa5d00dc71e6bf1c874->enter($__internal_75a8ef390df969eb778e1544804fe9434ec7f64846331aa5d00dc71e6bf1c874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bacb1eada1710549e90a3fb8e459453a1fe54b205c9bbf1bd4433df0b26e7f60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bacb1eada1710549e90a3fb8e459453a1fe54b205c9bbf1bd4433df0b26e7f60->enter($__internal_bacb1eada1710549e90a3fb8e459453a1fe54b205c9bbf1bd4433df0b26e7f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<h3>
Portail Utilisateur
</h3>

";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "



";
        
        $__internal_bacb1eada1710549e90a3fb8e459453a1fe54b205c9bbf1bd4433df0b26e7f60->leave($__internal_bacb1eada1710549e90a3fb8e459453a1fe54b205c9bbf1bd4433df0b26e7f60_prof);

        
        $__internal_75a8ef390df969eb778e1544804fe9434ec7f64846331aa5d00dc71e6bf1c874->leave($__internal_75a8ef390df969eb778e1544804fe9434ec7f64846331aa5d00dc71e6bf1c874_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Front:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 12,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block body %}

<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
<script src=\"{{ asset('dist/js/jquery.min.js') }}\"></script>
<script src=\"{{ asset('dist/js/bootstrap.min.js') }}\"></script>
<h3>
Portail Utilisateur
</h3>

{{form(form)}}



{% endblock %}
", "AkinaImmobilierBundle:Front:list.html.twig", "/var/www/html/GestionImmobiliére/src/Akina/ImmobilierBundle/Resources/views/Front/list.html.twig");
    }
}
