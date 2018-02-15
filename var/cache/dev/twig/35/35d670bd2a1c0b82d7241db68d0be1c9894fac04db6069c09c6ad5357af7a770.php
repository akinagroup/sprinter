<?php

/* ::layout.html.twig */
class __TwigTemplate_fed6d35fbb555f92431983ac745e7c6e6cab05de6f6eecced11833ebfa169054 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::layout.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'list' => array($this, 'block_list'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c057ec0fc9a67a031e75d24cdd2dc5ca308096dafc3c0d17f46ad260a518c6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c057ec0fc9a67a031e75d24cdd2dc5ca308096dafc3c0d17f46ad260a518c6c->enter($__internal_4c057ec0fc9a67a031e75d24cdd2dc5ca308096dafc3c0d17f46ad260a518c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_7861195436dc9061b1c9bba9d3ee89853ab9fa4764a239f7fb4dc1c64619b649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7861195436dc9061b1c9bba9d3ee89853ab9fa4764a239f7fb4dc1c64619b649->enter($__internal_7861195436dc9061b1c9bba9d3ee89853ab9fa4764a239f7fb4dc1c64619b649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c057ec0fc9a67a031e75d24cdd2dc5ca308096dafc3c0d17f46ad260a518c6c->leave($__internal_4c057ec0fc9a67a031e75d24cdd2dc5ca308096dafc3c0d17f46ad260a518c6c_prof);

        
        $__internal_7861195436dc9061b1c9bba9d3ee89853ab9fa4764a239f7fb4dc1c64619b649->leave($__internal_7861195436dc9061b1c9bba9d3ee89853ab9fa4764a239f7fb4dc1c64619b649_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c4504082509bbb5af07c88910efe780c02b0791b65e31162eeb9994ca0c29b09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4504082509bbb5af07c88910efe780c02b0791b65e31162eeb9994ca0c29b09->enter($__internal_c4504082509bbb5af07c88910efe780c02b0791b65e31162eeb9994ca0c29b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3742247a6bc2655970de028dc323cad72ee3e56ffae374326474d03812788dda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3742247a6bc2655970de028dc323cad72ee3e56ffae374326474d03812788dda->enter($__internal_3742247a6bc2655970de028dc323cad72ee3e56ffae374326474d03812788dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3742247a6bc2655970de028dc323cad72ee3e56ffae374326474d03812788dda->leave($__internal_3742247a6bc2655970de028dc323cad72ee3e56ffae374326474d03812788dda_prof);

        
        $__internal_c4504082509bbb5af07c88910efe780c02b0791b65e31162eeb9994ca0c29b09->leave($__internal_c4504082509bbb5af07c88910efe780c02b0791b65e31162eeb9994ca0c29b09_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b02b0863fcf6a1c97dd79dd2792c0985f56acc829286a0b122af0b498343b9a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b02b0863fcf6a1c97dd79dd2792c0985f56acc829286a0b122af0b498343b9a6->enter($__internal_b02b0863fcf6a1c97dd79dd2792c0985f56acc829286a0b122af0b498343b9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7274014cdd89ead64174857ed6b48a5a8264b44c8af0d7a6cff1748541a9abab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7274014cdd89ead64174857ed6b48a5a8264b44c8af0d7a6cff1748541a9abab->enter($__internal_7274014cdd89ead64174857ed6b48a5a8264b44c8af0d7a6cff1748541a9abab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <body>
";
        // line 7
        $this->displayBlock('list', $context, $blocks);
        // line 9
        echo "    <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
      <div class=\"container\">
        <a class=\"navbar-brand\" href=\"#\">Start Bootstrap</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item active\">
              <a class=\"nav-link\" href=\"#\">Home
                <span class=\"sr-only\">(current)</span>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">About</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Services</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class=\"container\">

      <div class=\"row\">

        <div class=\"col-lg-3\">

          <h1 class=\"my-4\">Shop Name</h1>
          <div class=\"list-group\">
            <a href=\"#\" class=\"list-group-item\">Category 1</a>
            <a href=\"#\" class=\"list-group-item\">Category 2</a>
            <a href=\"#\" class=\"list-group-item\">Category 3</a>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class=\"col-lg-9\">

          <div id=\"carouselExampleIndicators\" class=\"carousel slide my-4\" data-ride=\"carousel\">
            <ol class=\"carousel-indicators\">
              <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
              <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
              <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\" role=\"listbox\">
              <div class=\"carousel-item active\">
                <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"First slide\">
              </div>
              <div class=\"carousel-item\">
                <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"Second slide\">
              </div>
              <div class=\"carousel-item\">
                <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"Third slide\">
              </div>
            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
              <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
              <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
              <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
              <span class=\"sr-only\">Next</span>
            </a>
          </div>

          <div class=\"row\">

            <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                    <a href=\"#\">Item One</a>
                  </h4>
                  <h5>\$24.99</h5>
                  <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                    <a href=\"#\">Item Two</a>
                  </h4>
                  <h5>\$24.99</h5>
                  <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                    <a href=\"#\">Item Three</a>
                  </h4>
                  <h5>\$24.99</h5>
                  <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                    <a href=\"#\">Item Four</a>
                  </h4>
                  <h5>\$24.99</h5>
                  <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                    <a href=\"#\">Item Five</a>
                  </h4>
                  <h5>\$24.99</h5>
                  <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                    <a href=\"#\">Item Six</a>
                  </h4>
                  <h5>\$24.99</h5>
                  <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class=\"py-5 bg-dark\">
      <div class=\"container\">
        <p class=\"m-0 text-center text-white\">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src=\"vendor/jquery/jquery.min.js\"></script>
    <script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

  </body>

";
        
        $__internal_7274014cdd89ead64174857ed6b48a5a8264b44c8af0d7a6cff1748541a9abab->leave($__internal_7274014cdd89ead64174857ed6b48a5a8264b44c8af0d7a6cff1748541a9abab_prof);

        
        $__internal_b02b0863fcf6a1c97dd79dd2792c0985f56acc829286a0b122af0b498343b9a6->leave($__internal_b02b0863fcf6a1c97dd79dd2792c0985f56acc829286a0b122af0b498343b9a6_prof);

    }

    // line 7
    public function block_list($context, array $blocks = array())
    {
        $__internal_43a62bc9646af3d27d463f304f9766c0422141d26eb3ff6bff9c76a0cb5df477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43a62bc9646af3d27d463f304f9766c0422141d26eb3ff6bff9c76a0cb5df477->enter($__internal_43a62bc9646af3d27d463f304f9766c0422141d26eb3ff6bff9c76a0cb5df477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_044eca198ce2483289a9a936064b2645ce864f723aa43424292f212158388315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_044eca198ce2483289a9a936064b2645ce864f723aa43424292f212158388315->enter($__internal_044eca198ce2483289a9a936064b2645ce864f723aa43424292f212158388315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_044eca198ce2483289a9a936064b2645ce864f723aa43424292f212158388315->leave($__internal_044eca198ce2483289a9a936064b2645ce864f723aa43424292f212158388315_prof);

        
        $__internal_43a62bc9646af3d27d463f304f9766c0422141d26eb3ff6bff9c76a0cb5df477->leave($__internal_43a62bc9646af3d27d463f304f9766c0422141d26eb3ff6bff9c76a0cb5df477_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 7,  73 => 9,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
       
        {% block javascripts %}{% endblock %}
 
{% block body %}
  <body>
{% block list %}
{% endblock %}
    <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
      <div class=\"container\">
        <a class=\"navbar-brand\" href=\"#\">Start Bootstrap</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item active\">
              <a class=\"nav-link\" href=\"#\">Home
                <span class=\"sr-only\">(current)</span>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">About</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Services</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class=\"container\">

      <div class=\"row\">

        <div class=\"col-lg-3\">

          <h1 class=\"my-4\">Shop Name</h1>
          <div class=\"list-group\">
            <a href=\"#\" class=\"list-group-item\">Category 1</a>
            <a href=\"#\" class=\"list-group-item\">Category 2</a>
            <a href=\"#\" class=\"list-group-item\">Category 3</a>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class=\"col-lg-9\">

          <div id=\"carouselExampleIndicators\" class=\"carousel slide my-4\" data-ride=\"carousel\">
            <ol class=\"carousel-indicators\">
              <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
              <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
              <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\" role=\"listbox\">
              <div class=\"carousel-item active\">
                <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"First slide\">
              </div>
              <div class=\"carousel-item\">
                <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"Second slide\">
              </div>
              <div class=\"carousel-item\">
                <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"Third slide\">
              </div>
            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
              <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
              <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
              <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
              <span class=\"sr-only\">Next</span>
            </a>
          </div>

          <div class=\"row\">

            <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                    <a href=\"#\">Item One</a>
                  </h4>
                  <h5>\$24.99</h5>
                  <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                    <a href=\"#\">Item Two</a>
                  </h4>
                  <h5>\$24.99</h5>
                  <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                    <a href=\"#\">Item Three</a>
                  </h4>
                  <h5>\$24.99</h5>
                  <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                    <a href=\"#\">Item Four</a>
                  </h4>
                  <h5>\$24.99</h5>
                  <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                    <a href=\"#\">Item Five</a>
                  </h4>
                  <h5>\$24.99</h5>
                  <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                    <a href=\"#\">Item Six</a>
                  </h4>
                  <h5>\$24.99</h5>
                  <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class=\"py-5 bg-dark\">
      <div class=\"container\">
        <p class=\"m-0 text-center text-white\">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src=\"vendor/jquery/jquery.min.js\"></script>
    <script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

  </body>

{% endblock %}
", "::layout.html.twig", "/var/www/html/GestionImmobiliére/app/Resources/views/layout.html.twig");
    }
}
