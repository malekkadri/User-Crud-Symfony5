<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* accouplement.html.twig */
class __TwigTemplate_fd0d9374ccad904285ae3e171cdb7f15 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accouplement.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accouplement.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <title>Animaland - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
 
    <link rel=\"stylesheet\" href=\"css/animate.css\">
    
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.theme.default.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">


    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-datepicker.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.timepicker.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/flaticon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
  </head>
  <body>

    <div class=\"wrap\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 d-flex align-items-center\">
\t\t\t\t\t\t<p class=\"mb-0 phone pl-md-2\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"mr-2\"><span class=\"fa fa-phone mr-1\"></span> +216 55 555 555</a> 
\t\t\t\t\t\t\t<a href=\"#\"><span class=\"fa fa-paper-plane mr-1\"></span> AnimaLand@esprit.tn</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 d-flex justify-content-md-end\">
\t\t\t\t\t\t<div class=\"social-media\">
\t\t\t    \t\t<p class=\"mb-0 d-flex\">
\t\t\t    \t\t\t<a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-facebook\"><i class=\"sr-only\">Facebook</i></span></a>
\t\t\t    \t\t\t<a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-twitter\"><i class=\"sr-only\">Twitter</i></span></a>
\t\t\t    \t\t\t<a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-instagram\"><i class=\"sr-only\">Instagram</i></span></a>
\t\t\t    \t\t\t<a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-dribbble\"><i class=\"sr-only\">Dribbble</i></span></a>
\t\t\t    \t\t</p>
\t\t        </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
\t    <div class=\"container\">

\t\t\t

\t\t\t<div style=\"margin-right: 50px;\"> <a class=\"navbar-brand\" href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        echo "\"><span><img src=\"images/logo-01.png\" alt=\"Bootstrap\" class=\"img-responsive\" style=\"max-width: 20%\"> </span>AnimaLand</a></div>\t      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t        <span class=\"fa fa-bars\"></span> Menu
\t      </button>
\t      <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
\t        <ul class=\"navbar-nav ml-auto\">
\t        \t<li class=\"nav-item\"><a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        echo "\" class=\"nav-link\">Accueil</a></li> 
                <li class=\"nav-item\"><a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        echo "\" class=\"nav-link\">About</a></li>\t      
                <li class=\"nav-item\"><a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vet");
        echo "\" class=\"nav-link\">Services Vetrinaires</a></li>
\t        \t<li class=\"nav-item\"><a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        echo "\" class=\"nav-link\">Services Soins</a></li>
                 <li class=\"nav-item active\"><a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accoup");
        echo "\" class=\"nav-link\">Chercher Accouplement</a></li>
                <li class=\"nav-item\"><a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits");
        echo "\" class=\"nav-link\">Produits</a></li>
\t            <li class=\"nav-item\"><a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adop");
        echo "\" class=\"nav-link\">Adoption</a></li>
\t          <li class=\"nav-item\"><a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rec");
        echo "\" class=\"nav-link\">reclamations</a></li>
\t        </ul>
\t      </div>
\t    </div>
\t  </nav>
    <!-- END nav -->
    <section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('images/bg_2.jpg');\" data-stellar-background-ratio=\"0.5\">
      <div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-end\">
          <div class=\"col-md-9 ftco-animate pb-5\">
          \t<p class=\"breadcrumbs mb-2\"><span class=\"mr-2\"><a href=\"index.html\">Home <i class=\"ion-ios-arrow-forward\"></i></a></span> <span>Gallery <i class=\"ion-ios-arrow-forward\"></i></span></p>
            <h1 class=\"mb-0 bread\">Chercher Accouplement</h1>
          </div>
        </div>
      </div>
    </section>

    <button href=\"#collapseOne\" class=\"d-flex py-3 px-4 align-items-center justify-content-between btn btn-link\" data-parent=\"#accordion\" data-toggle=\"collapse\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
      <p class=\"mb-0\">Ajouter Votre Animal</p>
      <i class=\"fa\" aria-hidden=\"true\"></i>
    </button>

    <section class=\"ftco-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
          <div class=\"col-md-4 ftco-animate\">
            <div class=\"work mb-4 img d-flex align-items-end\" style=\"background-image: url(images/gallery-1.jpg);\">
            \t<a href=\"images/gallery-1.jpg\" class=\"icon image-popup d-flex justify-content-center align-items-center\">
\t    \t\t\t\t\t<span class=\"fa fa-expand\"></span>
\t    \t\t\t\t</a>
            \t<div class=\"desc w-100 px-4\">
\t              <div class=\"text w-100 mb-3\">
\t              \t<span>Cat</span>
\t              \t<h2>Persian Cat</h2>
                  <h2>Contact :+216 22 301 201</h2>
                  <h2>Age: 3ans    Region : Ariana</h2>
\t              </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 ftco-animate\">
            <div class=\"work mb-4 img d-flex align-items-end\" style=\"background-image: url(images/gallery-2.jpg);\">
            \t<a href=\"images/gallery-2.jpg\" class=\"icon image-popup d-flex justify-content-center align-items-center\">
\t    \t\t\t\t\t<span class=\"fa fa-expand\"></span>
\t    \t\t\t\t</a>
            \t<div class=\"desc w-100 px-4\">
\t              <div class=\"text w-100 mb-3\">
\t              \t<span>Dog</span>
\t              \t<h2><a href=\"work-single.html\">Pomeranian</a></h2>
                  <h2>Contact :+216 22 301 201</h2>
                  <h2>Age: 3ans    Region : Ariana</h2>
\t              </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 ftco-animate\">
            <div class=\"work mb-4 img d-flex align-items-end\" style=\"background-image: url(images/gallery-3.jpg);\">
            \t<a href=\"images/gallery-3.jpg\" class=\"icon image-popup d-flex justify-content-center align-items-center\">
\t    \t\t\t\t\t<span class=\"fa fa-expand\"></span>
\t    \t\t\t\t</a>
            \t<div class=\"desc w-100 px-4\">
\t              <div class=\"text w-100 mb-3\">
\t              \t<span>Cat</span>
\t              \t<h2><a href=\"work-single.html\">Sphynx Cat</a></h2>
                  <h2>Contact :+216 22 301 201</h2>
                  <h2>Age: 3ans    Region : Ariana</h2>
\t              </div>
              </div>
            </div>
          </div>

          <div class=\"col-md-4 ftco-animate\">
            <div class=\"work mb-4 img d-flex align-items-end\" style=\"background-image: url(images/gallery-4.jpg);\">
            \t<a href=\"images/gallery-4.jpg\" class=\"icon image-popup d-flex justify-content-center align-items-center\">
\t    \t\t\t\t\t<span class=\"fa fa-expand\"></span>
\t    \t\t\t\t</a>
            \t<div class=\"desc w-100 px-4\">
\t              <div class=\"text w-100 mb-3\">
\t              \t<span>Cat</span>
\t              \t<h2><a href=\"work-single.html\">British Shorthair</a></h2>
                  <h2>Contact :+216 22 301 201</h2>
                  <h2>Age: 3ans    Region : Ariana</h2>
\t              </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 ftco-animate\">
            <div class=\"work mb-4 img d-flex align-items-end\" style=\"background-image: url(images/gallery-5.jpg);\">
            \t<a href=\"images/gallery-5.jpg\" class=\"icon image-popup d-flex justify-content-center align-items-center\">
\t    \t\t\t\t\t<span class=\"fa fa-expand\"></span>
\t    \t\t\t\t</a>
            \t<div class=\"desc w-100 px-4\">
\t              <div class=\"text w-100 mb-3\">
\t              \t<span>Dog</span>
\t              \t<h2><a href=\"work-single.html\">Beagle</a></h2>
                  <h2>Contact :+216 22 301 201</h2>
                  <h2>Age: 3ans    Region : Ariana</h2>
\t              </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 ftco-animate\">
            <div class=\"work mb-4 img d-flex align-items-end\" style=\"background-image: url(images/gallery-6.jpg);\">
            \t<a href=\"images/gallery-6.jpg\" class=\"icon image-popup d-flex justify-content-center align-items-center\">
\t    \t\t\t\t\t<span class=\"fa fa-expand\"></span>
\t    \t\t\t\t</a>
            \t<div class=\"desc w-100 px-4\">
\t              <div class=\"text w-100 mb-3\">
\t              \t<span>Dog</span>
\t              \t<h2><a href=\"work-single.html\">Pug</a></h2>
                  <h2>Contact :+216 22 301 201</h2>
                  <h2>Age: 3ans    Region : Ariana</h2>
\t              </div>
              </div>
            </div>
          </div>

          <div class=\"col-md-4 ftco-animate\">
            <div class=\"work mb-4 img d-flex align-items-end\" style=\"background-image: url(images/gallery-7.jpg);\">
            \t<a href=\"images/gallery-7.jpg\" class=\"icon image-popup d-flex justify-content-center align-items-center\">
\t    \t\t\t\t\t<span class=\"fa fa-expand\"></span>
\t    \t\t\t\t</a>
            \t<div class=\"desc w-100 px-4\">
\t              <div class=\"text w-100 mb-3\">
\t              \t<span>Cat</span>
\t              \t<h2><a href=\"work-single.html\">British Shorthair</a></h2>
                  <h2>Contact :+216 22 301 201</h2>
                  <h2>Age: 3ans    Region : Ariana</h2>
\t              </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 ftco-animate\">
            <div class=\"work mb-4 img d-flex align-items-end\" style=\"background-image: url(images/gallery-8.jpg);\">
            \t<a href=\"images/gallery-8.jpg\" class=\"icon image-popup d-flex justify-content-center align-items-center\">
\t    \t\t\t\t\t<span class=\"fa fa-expand\"></span>
\t    \t\t\t\t</a>
            \t<div class=\"desc w-100 px-4\">
\t              <div class=\"text w-100 mb-3\">
\t              \t<span>Dog</span>
\t              \t<h2><a href=\"work-single.html\">Beagle</a></h2>
                  <h2>Contact :+216 22 301 201</h2>
                  <h2>Age: 3ans    Region : Ariana</h2>
\t              </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 ftco-animate\">
            <div class=\"work mb-4 img d-flex align-items-end\" style=\"background-image: url(images/gallery-9.jpg);\">
            \t<a href=\"images/gallery-9.jpg\" class=\"icon image-popup d-flex justify-content-center align-items-center\">
\t    \t\t\t\t\t<span class=\"fa fa-expand\"></span>
\t    \t\t\t\t</a>
            \t<div class=\"desc w-100 px-4\">
\t              <div class=\"text w-100 mb-3\">
\t              \t<span>Dog</span>
\t              \t<h2><a href=\"work-single.html\">Pug</a></h2>
                  <h2>Contact :+216 22 301 201</h2>
                  <h2>Age: 3ans    Region : Ariana</h2>
\t              </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"row mt-5\">
          <div class=\"col text-center\">
            <div class=\"block-27\">
              <ul>
                <li><a href=\"#\">&lt;</a></li>
                <li class=\"active\"><span>1</span></li>
                <li><a href=\"#\">2</a></li>
                <li><a href=\"#\">3</a></li>
                <li><a href=\"#\">4</a></li>
                <li><a href=\"#\">5</a></li>
                <li><a href=\"#\">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
\t\t\t</div>
\t\t</section>

    <footer class=\"footer\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 col-lg-3 mb-4 mb-md-0\">
\t\t\t\t\t\t<h2 class=\"footer-heading\">Petsitting</h2>
\t\t\t\t\t\t<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
\t\t\t\t\t\t<ul class=\"ftco-footer-social p-0\">
              <li class=\"ftco-animate\"><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Twitter\"><span class=\"fa fa-twitter\"></span></a></li>
              <li class=\"ftco-animate\"><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Facebook\"><span class=\"fa fa-facebook\"></span></a></li>
              <li class=\"ftco-animate\"><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Instagram\"><span class=\"fa fa-instagram\"></span></a></li>
            </ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 col-lg-3 mb-4 mb-md-0\">
\t\t\t\t\t\t<h2 class=\"footer-heading\">Latest News</h2>
\t\t\t\t\t\t<div class=\"block-21 mb-4 d-flex\">
              <a class=\"img mr-4 rounded\" style=\"background-image: url(images/image_1.jpg);\"></a>
              <div class=\"text\">
                <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about</a></h3>
                <div class=\"meta\">
                  <div><a href=\"#\"><span class=\"icon-calendar\"></span> April 7, 2020</a></div>
                  <div><a href=\"#\"><span class=\"icon-person\"></span> Admin</a></div>
                  <div><a href=\"#\"><span class=\"icon-chat\"></span> 19</a></div>
                </div>
              </div>
            </div>
            <div class=\"block-21 mb-4 d-flex\">
              <a class=\"img mr-4 rounded\" style=\"background-image: url(images/image_2.jpg);\"></a>
              <div class=\"text\">
                <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about</a></h3>
                <div class=\"meta\">
                  <div><a href=\"#\"><span class=\"icon-calendar\"></span> April 7, 2020</a></div>
                  <div><a href=\"#\"><span class=\"icon-person\"></span> Admin</a></div>
                  <div><a href=\"#\"><span class=\"icon-chat\"></span> 19</a></div>
                </div>
              </div>
            </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0\">
\t\t\t\t\t\t<h2 class=\"footer-heading\">Quick Links</h2>
\t\t\t\t\t\t<ul class=\"list-unstyled\">
              <li><a href=\"#\" class=\"py-2 d-block\">Home</a></li>
              <li><a href=\"#\" class=\"py-2 d-block\">About</a></li>
              <li><a href=\"#\" class=\"py-2 d-block\">Services</a></li>
              <li><a href=\"#\" class=\"py-2 d-block\">Works</a></li>
              <li><a href=\"#\" class=\"py-2 d-block\">Blog</a></li>
              <li><a href=\"#\" class=\"py-2 d-block\">Contact</a></li>
            </ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 col-lg-3 mb-4 mb-md-0\">
\t\t\t\t\t\t<h2 class=\"footer-heading\">Have a Questions?</h2>
\t\t\t\t\t\t<div class=\"block-23 mb-3\">
              <ul>
                <li><span class=\"icon fa fa-map\"></span><span class=\"text\">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                <li><a href=\"#\"><span class=\"icon fa fa-phone\"></span><span class=\"text\">+2 392 3929 210</span></a></li>
                <li><a href=\"#\"><span class=\"icon fa fa-paper-plane\"></span><span class=\"text\">info@yourdomain.com</span></a></li>
              </ul>
            </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row mt-5\">
          <div class=\"col-md-12 text-center\">

            <p class=\"copyright\"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib.com</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
\t\t\t</div>
\t\t</footer>

    
  

  <!-- loader -->
  <div id=\"ftco-loader\" class=\"show fullscreen\"><svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"/></svg></div>


  <script src=\"js/jquery.min.js\"></script>
  <script src=\"js/jquery-migrate-3.0.1.min.js\"></script>
  <script src=\"js/popper.min.js\"></script>
  <script src=\"js/bootstrap.min.js\"></script>
  <script src=\"js/jquery.easing.1.3.js\"></script>
  <script src=\"js/jquery.waypoints.min.js\"></script>
  <script src=\"js/jquery.stellar.min.js\"></script>
  <script src=\"js/jquery.animateNumber.min.js\"></script>
  <script src=\"js/bootstrap-datepicker.js\"></script>
  <script src=\"js/jquery.timepicker.min.js\"></script>
  <script src=\"js/owl.carousel.min.js\"></script>
  <script src=\"js/jquery.magnific-popup.min.js\"></script>
  <script src=\"js/scrollax.min.js\"></script>
  <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false\"></script>
  <script src=\"js/google-map.js\"></script>
  <script src=\"js/main.js\"></script>


    
  </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "accouplement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 66,  151 => 65,  147 => 64,  143 => 63,  139 => 62,  135 => 61,  131 => 60,  127 => 59,  119 => 54,  85 => 23,  81 => 22,  76 => 20,  72 => 19,  66 => 16,  62 => 15,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <title>Animaland - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
 
    <link rel=\"stylesheet\" href=\"css/animate.css\">
    
    <link rel=\"stylesheet\" href=\"{{asset('css/owl.carousel.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/owl.theme.default.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/magnific-popup.css')}}\">


    <link rel=\"stylesheet\" href=\"{{asset('css/bootstrap-datepicker.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/jquery.timepicker.css')}}\">

    <link rel=\"stylesheet\" href=\"{{asset('css/flaticon.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\">
  </head>
  <body>

    <div class=\"wrap\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 d-flex align-items-center\">
\t\t\t\t\t\t<p class=\"mb-0 phone pl-md-2\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"mr-2\"><span class=\"fa fa-phone mr-1\"></span> +216 55 555 555</a> 
\t\t\t\t\t\t\t<a href=\"#\"><span class=\"fa fa-paper-plane mr-1\"></span> AnimaLand@esprit.tn</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 d-flex justify-content-md-end\">
\t\t\t\t\t\t<div class=\"social-media\">
\t\t\t    \t\t<p class=\"mb-0 d-flex\">
\t\t\t    \t\t\t<a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-facebook\"><i class=\"sr-only\">Facebook</i></span></a>
\t\t\t    \t\t\t<a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-twitter\"><i class=\"sr-only\">Twitter</i></span></a>
\t\t\t    \t\t\t<a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-instagram\"><i class=\"sr-only\">Instagram</i></span></a>
\t\t\t    \t\t\t<a href=\"#\" class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-dribbble\"><i class=\"sr-only\">Dribbble</i></span></a>
\t\t\t    \t\t</p>
\t\t        </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
\t    <div class=\"container\">

\t\t\t

\t\t\t<div style=\"margin-right: 50px;\"> <a class=\"navbar-brand\" href=\"{{path ('app_front')}}\"><span><img src=\"images/logo-01.png\" alt=\"Bootstrap\" class=\"img-responsive\" style=\"max-width: 20%\"> </span>AnimaLand</a></div>\t      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t        <span class=\"fa fa-bars\"></span> Menu
\t      </button>
\t      <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
\t        <ul class=\"navbar-nav ml-auto\">
\t        \t<li class=\"nav-item\"><a href=\"{{path ('app_front')}}\" class=\"nav-link\">Accueil</a></li> 
                <li class=\"nav-item\"><a href=\"{{path ('app_about')}}\" class=\"nav-link\">About</a></li>\t      
                <li class=\"nav-item\"><a href=\"{{path ('app_vet')}}\" class=\"nav-link\">Services Vetrinaires</a></li>
\t        \t<li class=\"nav-item\"><a href=\"{{path ('app_services')}}\" class=\"nav-link\">Services Soins</a></li>
                 <li class=\"nav-item active\"><a href=\"{{path ('app_accoup')}}\" class=\"nav-link\">Chercher Accouplement</a></li>
                <li class=\"nav-item\"><a href=\"{{path ('app_produits')}}\" class=\"nav-link\">Produits</a></li>
\t            <li class=\"nav-item\"><a href=\"{{path ('app_adop')}}\" class=\"nav-link\">Adoption</a></li>
\t          <li class=\"nav-item\"><a href=\"{{path ('app_rec')}}\" class=\"nav-link\">reclamations</a></li>
\t        </ul>
\t      </div>
\t    </div>
\t  </nav>
    <!-- END nav -->
    <section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('images/bg_2.jpg');\" data-stellar-background-ratio=\"0.5\">
      <div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-end\">
          <div class=\"col-md-9 ftco-animate pb-5\">
          \t<p class=\"breadcrumbs mb-2\"><span class=\"mr-2\"><a href=\"index.html\">Home <i class=\"ion-ios-arrow-forward\"></i></a></span> <span>Gallery <i class=\"ion-ios-arrow-forward\"></i></span></p>
            <h1 class=\"mb-0 bread\">Chercher Accouplement</h1>
          </div>
        </div>
      </div>
    </section>

    <button href=\"#collapseOne\" class=\"d-flex py-3 px-4 align-items-center justify-content-between btn btn-link\" data-parent=\"#accordion\" data-toggle=\"collapse\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
      <p class=\"mb-0\">Ajouter Votre Animal</p>
      <i class=\"fa\" aria-hidden=\"true\"></i>
    </button>

    <section class=\"ftco-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
          <div class=\"col-md-4 ftco-animate\">
            <div class=\"work mb-4 img d-flex align-items-end\" style=\"background-image: url(images/gallery-1.jpg);\">
            \t<a href=\"images/gallery-1.jpg\" class=\"icon image-popup d-flex justify-content-center align-items-center\">
\t    \t\t\t\t\t<span class=\"fa fa-expand\"></span>
\t    \t\t\t\t</a>
            \t<div class=\"desc w-100 px-4\">
\t              <div class=\"text w-100 mb-3\">
\t              \t<span>Cat</span>
\t              \t<h2>Persian Cat</h2>
                  <h2>Contact :+216 22 301 201</h2>
                  <h2>Age: 3ans    Region : Ariana</h2>
\t              </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 ftco-animate\">
            <div class=\"work mb-4 img d-flex align-items-end\" style=\"background-image: url(images/gallery-2.jpg);\">
            \t<a href=\"images/gallery-2.jpg\" class=\"icon image-popup d-flex justify-content-center align-items-center\">
\t    \t\t\t\t\t<span class=\"fa fa-expand\"></span>
\t    \t\t\t\t</a>
            \t<div class=\"desc w-100 px-4\">
\t              <div class=\"text w-100 mb-3\">
\t              \t<span>Dog</span>
\t              \t<h2><a href=\"work-single.html\">Pomeranian</a></h2>
                  <h2>Contact :+216 22 301 201</h2>
                  <h2>Age: 3ans    Region : Ariana</h2>
\t              </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 ftco-animate\">
            <div class=\"work mb-4 img d-flex align-items-end\" style=\"background-image: url(images/gallery-3.jpg);\">
            \t<a href=\"images/gallery-3.jpg\" class=\"icon image-popup d-flex justify-content-center align-items-center\">
\t    \t\t\t\t\t<span class=\"fa fa-expand\"></span>
\t    \t\t\t\t</a>
            \t<div class=\"desc w-100 px-4\">
\t              <div class=\"text w-100 mb-3\">
\t              \t<span>Cat</span>
\t              \t<h2><a href=\"work-single.html\">Sphynx Cat</a></h2>
                  <h2>Contact :+216 22 301 201</h2>
                  <h2>Age: 3ans    Region : Ariana</h2>
\t              </div>
              </div>
            </div>
          </div>

          <div class=\"col-md-4 ftco-animate\">
            <div class=\"work mb-4 img d-flex align-items-end\" style=\"background-image: url(images/gallery-4.jpg);\">
            \t<a href=\"images/gallery-4.jpg\" class=\"icon image-popup d-flex justify-content-center align-items-center\">
\t    \t\t\t\t\t<span class=\"fa fa-expand\"></span>
\t    \t\t\t\t</a>
            \t<div class=\"desc w-100 px-4\">
\t              <div class=\"text w-100 mb-3\">
\t              \t<span>Cat</span>
\t              \t<h2><a href=\"work-single.html\">British Shorthair</a></h2>
                  <h2>Contact :+216 22 301 201</h2>
                  <h2>Age: 3ans    Region : Ariana</h2>
\t              </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 ftco-animate\">
            <div class=\"work mb-4 img d-flex align-items-end\" style=\"background-image: url(images/gallery-5.jpg);\">
            \t<a href=\"images/gallery-5.jpg\" class=\"icon image-popup d-flex justify-content-center align-items-center\">
\t    \t\t\t\t\t<span class=\"fa fa-expand\"></span>
\t    \t\t\t\t</a>
            \t<div class=\"desc w-100 px-4\">
\t              <div class=\"text w-100 mb-3\">
\t              \t<span>Dog</span>
\t              \t<h2><a href=\"work-single.html\">Beagle</a></h2>
                  <h2>Contact :+216 22 301 201</h2>
                  <h2>Age: 3ans    Region : Ariana</h2>
\t              </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 ftco-animate\">
            <div class=\"work mb-4 img d-flex align-items-end\" style=\"background-image: url(images/gallery-6.jpg);\">
            \t<a href=\"images/gallery-6.jpg\" class=\"icon image-popup d-flex justify-content-center align-items-center\">
\t    \t\t\t\t\t<span class=\"fa fa-expand\"></span>
\t    \t\t\t\t</a>
            \t<div class=\"desc w-100 px-4\">
\t              <div class=\"text w-100 mb-3\">
\t              \t<span>Dog</span>
\t              \t<h2><a href=\"work-single.html\">Pug</a></h2>
                  <h2>Contact :+216 22 301 201</h2>
                  <h2>Age: 3ans    Region : Ariana</h2>
\t              </div>
              </div>
            </div>
          </div>

          <div class=\"col-md-4 ftco-animate\">
            <div class=\"work mb-4 img d-flex align-items-end\" style=\"background-image: url(images/gallery-7.jpg);\">
            \t<a href=\"images/gallery-7.jpg\" class=\"icon image-popup d-flex justify-content-center align-items-center\">
\t    \t\t\t\t\t<span class=\"fa fa-expand\"></span>
\t    \t\t\t\t</a>
            \t<div class=\"desc w-100 px-4\">
\t              <div class=\"text w-100 mb-3\">
\t              \t<span>Cat</span>
\t              \t<h2><a href=\"work-single.html\">British Shorthair</a></h2>
                  <h2>Contact :+216 22 301 201</h2>
                  <h2>Age: 3ans    Region : Ariana</h2>
\t              </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 ftco-animate\">
            <div class=\"work mb-4 img d-flex align-items-end\" style=\"background-image: url(images/gallery-8.jpg);\">
            \t<a href=\"images/gallery-8.jpg\" class=\"icon image-popup d-flex justify-content-center align-items-center\">
\t    \t\t\t\t\t<span class=\"fa fa-expand\"></span>
\t    \t\t\t\t</a>
            \t<div class=\"desc w-100 px-4\">
\t              <div class=\"text w-100 mb-3\">
\t              \t<span>Dog</span>
\t              \t<h2><a href=\"work-single.html\">Beagle</a></h2>
                  <h2>Contact :+216 22 301 201</h2>
                  <h2>Age: 3ans    Region : Ariana</h2>
\t              </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 ftco-animate\">
            <div class=\"work mb-4 img d-flex align-items-end\" style=\"background-image: url(images/gallery-9.jpg);\">
            \t<a href=\"images/gallery-9.jpg\" class=\"icon image-popup d-flex justify-content-center align-items-center\">
\t    \t\t\t\t\t<span class=\"fa fa-expand\"></span>
\t    \t\t\t\t</a>
            \t<div class=\"desc w-100 px-4\">
\t              <div class=\"text w-100 mb-3\">
\t              \t<span>Dog</span>
\t              \t<h2><a href=\"work-single.html\">Pug</a></h2>
                  <h2>Contact :+216 22 301 201</h2>
                  <h2>Age: 3ans    Region : Ariana</h2>
\t              </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"row mt-5\">
          <div class=\"col text-center\">
            <div class=\"block-27\">
              <ul>
                <li><a href=\"#\">&lt;</a></li>
                <li class=\"active\"><span>1</span></li>
                <li><a href=\"#\">2</a></li>
                <li><a href=\"#\">3</a></li>
                <li><a href=\"#\">4</a></li>
                <li><a href=\"#\">5</a></li>
                <li><a href=\"#\">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
\t\t\t</div>
\t\t</section>

    <footer class=\"footer\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 col-lg-3 mb-4 mb-md-0\">
\t\t\t\t\t\t<h2 class=\"footer-heading\">Petsitting</h2>
\t\t\t\t\t\t<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
\t\t\t\t\t\t<ul class=\"ftco-footer-social p-0\">
              <li class=\"ftco-animate\"><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Twitter\"><span class=\"fa fa-twitter\"></span></a></li>
              <li class=\"ftco-animate\"><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Facebook\"><span class=\"fa fa-facebook\"></span></a></li>
              <li class=\"ftco-animate\"><a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Instagram\"><span class=\"fa fa-instagram\"></span></a></li>
            </ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 col-lg-3 mb-4 mb-md-0\">
\t\t\t\t\t\t<h2 class=\"footer-heading\">Latest News</h2>
\t\t\t\t\t\t<div class=\"block-21 mb-4 d-flex\">
              <a class=\"img mr-4 rounded\" style=\"background-image: url(images/image_1.jpg);\"></a>
              <div class=\"text\">
                <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about</a></h3>
                <div class=\"meta\">
                  <div><a href=\"#\"><span class=\"icon-calendar\"></span> April 7, 2020</a></div>
                  <div><a href=\"#\"><span class=\"icon-person\"></span> Admin</a></div>
                  <div><a href=\"#\"><span class=\"icon-chat\"></span> 19</a></div>
                </div>
              </div>
            </div>
            <div class=\"block-21 mb-4 d-flex\">
              <a class=\"img mr-4 rounded\" style=\"background-image: url(images/image_2.jpg);\"></a>
              <div class=\"text\">
                <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about</a></h3>
                <div class=\"meta\">
                  <div><a href=\"#\"><span class=\"icon-calendar\"></span> April 7, 2020</a></div>
                  <div><a href=\"#\"><span class=\"icon-person\"></span> Admin</a></div>
                  <div><a href=\"#\"><span class=\"icon-chat\"></span> 19</a></div>
                </div>
              </div>
            </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0\">
\t\t\t\t\t\t<h2 class=\"footer-heading\">Quick Links</h2>
\t\t\t\t\t\t<ul class=\"list-unstyled\">
              <li><a href=\"#\" class=\"py-2 d-block\">Home</a></li>
              <li><a href=\"#\" class=\"py-2 d-block\">About</a></li>
              <li><a href=\"#\" class=\"py-2 d-block\">Services</a></li>
              <li><a href=\"#\" class=\"py-2 d-block\">Works</a></li>
              <li><a href=\"#\" class=\"py-2 d-block\">Blog</a></li>
              <li><a href=\"#\" class=\"py-2 d-block\">Contact</a></li>
            </ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 col-lg-3 mb-4 mb-md-0\">
\t\t\t\t\t\t<h2 class=\"footer-heading\">Have a Questions?</h2>
\t\t\t\t\t\t<div class=\"block-23 mb-3\">
              <ul>
                <li><span class=\"icon fa fa-map\"></span><span class=\"text\">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                <li><a href=\"#\"><span class=\"icon fa fa-phone\"></span><span class=\"text\">+2 392 3929 210</span></a></li>
                <li><a href=\"#\"><span class=\"icon fa fa-paper-plane\"></span><span class=\"text\">info@yourdomain.com</span></a></li>
              </ul>
            </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row mt-5\">
          <div class=\"col-md-12 text-center\">

            <p class=\"copyright\"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib.com</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
\t\t\t</div>
\t\t</footer>

    
  

  <!-- loader -->
  <div id=\"ftco-loader\" class=\"show fullscreen\"><svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"/></svg></div>


  <script src=\"js/jquery.min.js\"></script>
  <script src=\"js/jquery-migrate-3.0.1.min.js\"></script>
  <script src=\"js/popper.min.js\"></script>
  <script src=\"js/bootstrap.min.js\"></script>
  <script src=\"js/jquery.easing.1.3.js\"></script>
  <script src=\"js/jquery.waypoints.min.js\"></script>
  <script src=\"js/jquery.stellar.min.js\"></script>
  <script src=\"js/jquery.animateNumber.min.js\"></script>
  <script src=\"js/bootstrap-datepicker.js\"></script>
  <script src=\"js/jquery.timepicker.min.js\"></script>
  <script src=\"js/owl.carousel.min.js\"></script>
  <script src=\"js/jquery.magnific-popup.min.js\"></script>
  <script src=\"js/scrollax.min.js\"></script>
  <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false\"></script>
  <script src=\"js/google-map.js\"></script>
  <script src=\"js/main.js\"></script>


    
  </body>
</html>", "accouplement.html.twig", "C:\\Users\\Malik\\Desktop\\Nour3\\Animaland (2) (1)\\Animaland\\templates\\accouplement.html.twig");
    }
}
