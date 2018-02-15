<?php

/* AkinaImmobilierBundle:Admin:add.html.twig */
class __TwigTemplate_4f052f1a7eff08290613a54e137b1e9acf871f1648eedf861fb298c2a343abbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AkinaImmobilierBundle:Admin:add.html.twig", 1);
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
        $__internal_cd4f0b9756244782b2e9b974c143d4592c0cf007e08db7c9db406176c8d7703d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd4f0b9756244782b2e9b974c143d4592c0cf007e08db7c9db406176c8d7703d->enter($__internal_cd4f0b9756244782b2e9b974c143d4592c0cf007e08db7c9db406176c8d7703d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:add.html.twig"));

        $__internal_9016ade58ded4c9fe3f866a2d383e7321f794eef5bede25182e66ae95b9db59f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9016ade58ded4c9fe3f866a2d383e7321f794eef5bede25182e66ae95b9db59f->enter($__internal_9016ade58ded4c9fe3f866a2d383e7321f794eef5bede25182e66ae95b9db59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd4f0b9756244782b2e9b974c143d4592c0cf007e08db7c9db406176c8d7703d->leave($__internal_cd4f0b9756244782b2e9b974c143d4592c0cf007e08db7c9db406176c8d7703d_prof);

        
        $__internal_9016ade58ded4c9fe3f866a2d383e7321f794eef5bede25182e66ae95b9db59f->leave($__internal_9016ade58ded4c9fe3f866a2d383e7321f794eef5bede25182e66ae95b9db59f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd1e6d27ce43dfcb020c9bb257594861852ca463c688037b34f7419364d2cd3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd1e6d27ce43dfcb020c9bb257594861852ca463c688037b34f7419364d2cd3f->enter($__internal_bd1e6d27ce43dfcb020c9bb257594861852ca463c688037b34f7419364d2cd3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d2319766ee8349c9e50acc47481574dbdfea14d43dd3ad730ade2c37f033fc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d2319766ee8349c9e50acc47481574dbdfea14d43dd3ad730ade2c37f033fc0->enter($__internal_1d2319766ee8349c9e50acc47481574dbdfea14d43dd3ad730ade2c37f033fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
 <div class=\"container\">



      <nav class=\"navbar navbar-inverse\">

        <div class=\"container-fluid\">

          <ul class=\"nav navbar-nav\">

            <li class=\"active\"> <a href=\"#\">Accueil</a> </li>

            <li> <a href=\"#\">Liens</a> </li>

            <li> <a href=\"#\">Témoignages</a> </li>

            <li> <a href=\"#\">Références</a> </li>

          </ul>

          <form class=\"navbar-form navbar-right inline-form\" action=\"\">

            <div class=\"form-group\">

              <input type=\"search\" class=\"input-sm form-control\" name=\"valeur\" placeholder=\"Recherche\">

              <button type=\"submit\" class=\"btn btn-primary btn-sm\"><span class=\"glyphicon glyphicon-eye-open\"></span> Chercher</button>

            </div>

          </form>

        </div>

      </nav>

      



      

  
 <div class=\"table-responsive \"> 
<table class=\"table table-bordred table-striped table-inverse\">
<tr>

<th>Nom Bien</th>
<th>Etat</th>

<th>Description</th>
<th>Localite</th>
<th>Type</th>
<th>Proprietaire</th>
</tr>
";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 67
            echo "<tr>


<td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nomBien", array()), "html", null, true);
            echo "</td>
<td><a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("disponibilite", array("id" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
            echo "\">
";
            // line 72
            if (($this->getAttribute($context["bien"], "etat", array()) == 1)) {
                // line 73
                echo "Disponible
";
            } else {
                // line 75
                echo "Occupé
";
            }
            // line 77
            echo "</a></td>
<td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "description", array()), "html", null, true);
            echo "</td>


<td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "IdLocalite", array()), "Nom", array()), "html", null, true);
            echo "</td>
<td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "IdType", array()), "nomType", array()), "html", null, true);
            echo "</td>

<td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "IdProprietaire", array()), "numeroPiece", array()), "html", null, true);
            echo "</td>
<td></td>
<td></td>
</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 89
            echo "<td colspan=\"6\">Aucun utilisateur</td>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "</table>
</div>

</div>

";
        
        $__internal_1d2319766ee8349c9e50acc47481574dbdfea14d43dd3ad730ade2c37f033fc0->leave($__internal_1d2319766ee8349c9e50acc47481574dbdfea14d43dd3ad730ade2c37f033fc0_prof);

        
        $__internal_bd1e6d27ce43dfcb020c9bb257594861852ca463c688037b34f7419364d2cd3f->leave($__internal_bd1e6d27ce43dfcb020c9bb257594861852ca463c688037b34f7419364d2cd3f_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Admin:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 92,  175 => 89,  165 => 84,  160 => 82,  156 => 81,  150 => 78,  147 => 77,  143 => 75,  139 => 73,  137 => 72,  133 => 71,  129 => 70,  124 => 67,  119 => 66,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
 <div class=\"container\">



      <nav class=\"navbar navbar-inverse\">

        <div class=\"container-fluid\">

          <ul class=\"nav navbar-nav\">

            <li class=\"active\"> <a href=\"#\">Accueil</a> </li>

            <li> <a href=\"#\">Liens</a> </li>

            <li> <a href=\"#\">Témoignages</a> </li>

            <li> <a href=\"#\">Références</a> </li>

          </ul>

          <form class=\"navbar-form navbar-right inline-form\" action=\"\">

            <div class=\"form-group\">

              <input type=\"search\" class=\"input-sm form-control\" name=\"valeur\" placeholder=\"Recherche\">

              <button type=\"submit\" class=\"btn btn-primary btn-sm\"><span class=\"glyphicon glyphicon-eye-open\"></span> Chercher</button>

            </div>

          </form>

        </div>

      </nav>

      



      

  
 <div class=\"table-responsive \"> 
<table class=\"table table-bordred table-striped table-inverse\">
<tr>

<th>Nom Bien</th>
<th>Etat</th>

<th>Description</th>
<th>Localite</th>
<th>Type</th>
<th>Proprietaire</th>
</tr>
{%for bien in biens%}
<tr>


<td>{{bien.nomBien}}</td>
<td><a href=\"{{path('disponibilite',{'id':bien.id})}}\">
{%if bien.etat == 1%}
Disponible
{% else %}
Occupé
{% endif%}
</a></td>
<td>{{bien.description}}</td>


<td>{{bien.IdLocalite.Nom}}</td>
<td>{{bien.IdType.nomType}}</td>

<td>{{bien.IdProprietaire.numeroPiece}}</td>
<td></td>
<td></td>
</tr>
{%else%}
<td colspan=\"6\">Aucun utilisateur</td>

{%endfor%}
</table>
</div>

</div>

{% endblock %}
", "AkinaImmobilierBundle:Admin:add.html.twig", "/var/www/html/GestionImmobiliére/src/Akina/ImmobilierBundle/Resources/views/Admin/add.html.twig");
    }
}
