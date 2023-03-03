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

/* base-front.html.twig */
class __TwigTemplate_0031ea8c70d92fdda5e9c3dc586fb01b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>"), "html", null, true);
        echo "\">
        ";
        // line 8
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "
        ";
        // line 12
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </head>
    <body>
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "    </body>
</html>
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <title>Animaland- Free Bootstrap 4 Template by Colorlib</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
 
    <link rel=\"stylesheet\" href=\"css/animate.css\">
    
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.theme.default.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">


    <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-datepicker.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.timepicker.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/flaticon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 42
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
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-md-6 d-flex justify-content-md-end\">
\t\t\t\t\t<div style=\"margin-right:10px\">
\t\t\t\t\t <button style=\"border: 3px\" class=\"btn btn-primary \" >  <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\"   class=\"nav-link\" style=\"color:white;\"> login    </a>   </button>
\t\t\t\t\t</div>
\t\t\t\t\t <div>
\t\t\t\t\t <button style=\"border: 3px\" class=\"btn btn-primary \">  <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "\" class=\"nav-link\" style=\"color:white;\" >  register </a>    </button>
 \t\t\t\t\t\t</div>


 \t\t\t\t\t


\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"social-media\">

\t\t\t    \t\t<p class=\"mb-0 d-flex\">
\t\t\t    \t\t\t<a href=\"#\"class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-facebook\"><i class=\"sr-only\">Facebook</i></span></a>
\t\t\t    \t\t\t<a href=\"#\"class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-twitter\"><i class=\"sr-only\">Twitter</i></span></a>
\t\t\t    \t\t\t<a href=\"#\"class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-instagram\"><i class=\"sr-only\">Instagram</i></span></a>
\t\t\t    \t\t\t<a href=\"#\"class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-dribbble\"><i class=\"sr-only\">Dribbble</i></span></a>
\t\t\t    \t\t</p>
\t\t\t\t\t\t
\t\t        </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
\t    <div class=\"container\">
\t    \t<div style=\"margin-right: 50px;\"> <a class=\"navbar-brand\" href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        echo "\"><span><img src=\"images/logo-01.png\" alt=\"Bootstrap\" class=\"img-responsive\" style=\"max-width: 20%\"> </span>AnimaLand</a></div>
\t      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t        <span class=\"fa fa-bars\"></span> Menu
\t      </button>
\t      <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
\t        <ul class=\"navbar-nav ml-auto\">
\t        \t<li class=\"nav-item active\"><a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        echo "\" class=\"nav-link\">Accueil</a></li> 
                <li class=\"nav-item\"><a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        echo "\" class=\"nav-link\">About</a></li>\t      
                <li class=\"nav-item\"><a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vet");
        echo "\" class=\"nav-link\">Services Vetrinaires</a></li>
\t        \t<li class=\"nav-item\"><a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        echo "\" class=\"nav-link\">Services Soins</a></li>
                 <li class=\"nav-item\"><a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accoup");
        echo "\" class=\"nav-link\">Chercher Accouplement</a></li>
                <li class=\"nav-item\"><a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits");
        echo "\" class=\"nav-link\">Produits</a></li>
\t            <li class=\"nav-item\"><a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_adop");
        echo "\" class=\"nav-link\">Adoption</a></li>
\t          <li class=\"nav-item\"><a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rec");
        echo "\" class=\"nav-link\">reclamations</a></li>
\t        </ul>
\t      </div>
\t    </div>
\t  </nav>
    <!-- END nav -->
    <div class=\"hero-wrap js-fullheight\" style=\"background-image: url('images/bg_1.jpg');\" data-stellar-background-ratio=\"0.5\">
      <div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row no-gutters slider-text js-fullheight align-items-center justify-content-center\" data-scrollax-parent=\"true\">
          <div class=\"col-md-11 ftco-animate text-center\">
          \t<h1 class=\"mb-4\">Highest Quality Care For Pets You'll Love </h1>
            <p><a href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"btn btn-primary mr-md-4 py-3 px-4\">Learn more <span class=\"ion-ios-arrow-forward\"></span></a></p>
          </div>
        </div>
      </div>
    </div>

    <section class=\"ftco-section bg-light ftco-no-pt ftco-intro\">
    \t<div class=\"container\">
    \t\t<div class=\"row\">
          <div class=\"col-md-4 d-flex align-self-stretch px-4 ftco-animate\">
            <div class=\"d-block services active text-center\">
              <div class=\"icon d-flex align-items-center justify-content-center\">
            \t\t<span class=\"flaticon-blind\"></span>
              </div>
              <div class=\"media-body\">
                <h3 class=\"heading\">Dog Walking</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right.</p>
                <a href=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"btn-custom d-flex align-items-center justify-content-center\"><span class=\"fa fa-chevron-right\"></span><i class=\"sr-only\">Read more</i></a>
              </div>
            </div>      
          </div>
          <div class=\"col-md-4 d-flex align-self-stretch px-4 ftco-animate\">
            <div class=\"d-block services text-center\">
              <div class=\"icon d-flex align-items-center justify-content-center\">
            \t\t<span class=\"flaticon-dog-eating\"></span>
              </div>
              <div class=\"media-body\">
                <h3 class=\"heading\">Pet Daycare</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right.</p>
                <a href=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"btn-custom d-flex align-items-center justify-content-center\"><span class=\"fa fa-chevron-right\"></span><i class=\"sr-only\">Read more</i></a>
              </div>
            </div>    
          </div>
          <div class=\"col-md-4 d-flex align-self-stretch px-4 ftco-animate\">
            <div class=\"d-block services text-center\">
              <div class=\"icon d-flex align-items-center justify-content-center\">
            \t\t<span class=\"flaticon-grooming\"></span>
              </div>
              <div class=\"media-body\">
                <h3 class=\"heading\">Pet Grooming</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right.</p>
                <a href=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"btn-custom d-flex align-items-center justify-content-center\"><span class=\"fa fa-chevron-right\"></span><i class=\"sr-only\">Read more</i></a>
              </div>
            </div>      
          </div>
        </div>
    \t</div>
    </section>

    <section class=\"ftco-section ftco-no-pt ftco-no-pb\">
    \t<div class=\"container\">
    \t\t<div class=\"row d-flex no-gutters\">
    \t\t\t<div class=\"col-md-5 d-flex\">
    \t\t\t\t<div class=\"img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0\" style=\"background-image:url(images/about-1.jpg);\">
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-7 pl-md-5 py-md-5\">
    \t\t\t\t<div class=\"heading-section pt-md-5\">
\t            <h2 class=\"mb-4\">Why Choose Us?</h2>
    \t\t\t\t</div>
    \t\t\t\t<div class=\"row\">
\t    \t\t\t\t<div class=\"col-md-6 services-2 w-100 d-flex\">
\t    \t\t\t\t\t<div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"flaticon-stethoscope\"></span></div>
\t    \t\t\t\t\t<div class=\"text pl-3\">
\t    \t\t\t\t\t\t<h4>Care Advices</h4>
\t    \t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries.</p>
\t    \t\t\t\t\t</div>
\t    \t\t\t\t</div>
\t    \t\t\t\t<div class=\"col-md-6 services-2 w-100 d-flex\">
\t    \t\t\t\t\t<div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"flaticon-customer-service\"></span></div>
\t    \t\t\t\t\t<div class=\"text pl-3\">
\t    \t\t\t\t\t\t<h4>Customer Supports</h4>
\t    \t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries.</p>
\t    \t\t\t\t\t</div>
\t    \t\t\t\t</div>
\t    \t\t\t\t<div class=\"col-md-6 services-2 w-100 d-flex\">
\t    \t\t\t\t\t<div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"flaticon-emergency-call\"></span></div>
\t    \t\t\t\t\t<div class=\"text pl-3\">
\t    \t\t\t\t\t\t<h4>Emergency Services</h4>
\t    \t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries.</p>
\t    \t\t\t\t\t</div>
\t    \t\t\t\t</div>
\t    \t\t\t\t<div class=\"col-md-6 services-2 w-100 d-flex\">
\t    \t\t\t\t\t<div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"flaticon-veterinarian\"></span></div>
\t    \t\t\t\t\t<div class=\"text pl-3\">
\t    \t\t\t\t\t\t<h4>Veterinary Help</h4>
\t    \t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries.</p>
\t    \t\t\t\t\t</div>
\t    \t\t\t\t</div>
\t    \t\t\t</div>
\t        </div>
        </div>
    \t</div>
    </section>

    <section class=\"ftco-counter\" id=\"section-counter\">
    \t<div class=\"container\">
\t\t\t\t<div class=\"row\">
          <div class=\"col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate\">
            <div class=\"block-18 text-center\">
              <div class=\"text\">
                <strong class=\"number\" data-number=\"50\">0</strong>
              </div>
              <div class=\"text\">
              \t<span>Customer</span>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate\">
            <div class=\"block-18 text-center\">
              <div class=\"text\">
                <strong class=\"number\" data-number=\"8500\">0</strong>
              </div>
              <div class=\"text\">
              \t<span>Professionals</span>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate\">
            <div class=\"block-18 text-center\">
              <div class=\"text\">
                <strong class=\"number\" data-number=\"20\">0</strong>
              </div>
              <div class=\"text\">
              \t<span>Products</span>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate\">
            <div class=\"block-18 text-center\">
              <div class=\"text\">
                <strong class=\"number\" data-number=\"50\">0</strong>
              </div>
              <div class=\"text\">
              \t<span>Pets Hosted</span>
              </div>
            </div>
          </div>
        </div>
    \t</div>
    </section>

    <section class=\"ftco-section bg-light ftco-faqs\">
    \t<div class=\"container\">
    \t\t<div class=\"row\">
    \t\t\t<div class=\"col-lg-6 order-md-last\">
    \t\t\t\t<div class=\"img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0\" style=\"background-image:url(images/about.jpg);\">
    \t\t\t\t\t<a href=\"https://vimeo.com/45830194\" class=\"icon-video popup-vimeo d-flex justify-content-center align-items-center\">
    \t\t\t\t\t\t<span class=\"fa fa-play\"></span>
    \t\t\t\t\t</a>
    \t\t\t\t</div>
    \t\t\t\t<div class=\"d-flex mt-3\">
    \t\t\t\t\t<div class=\"img img-2 mr-md-2\" style=\"background-image:url(images/about-2.jpg);\"></div>
    \t\t\t\t\t<div class=\"img img-2 ml-md-2\" style=\"background-image:url(images/about-3.jpg);\"></div>
    \t\t\t\t</div>
    \t\t\t</div>

    \t\t\t<div class=\"col-lg-6\">
    \t\t\t\t<div class=\"heading-section mb-5 mt-5 mt-lg-0\">
\t            <h2 class=\"mb-3\">Frequently Asks Questions</h2>
\t            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
    \t\t\t\t</div>
    \t\t\t\t<div id=\"accordion\" class=\"myaccordion w-100\" aria-multiselectable=\"true\">
\t\t\t\t\t\t  <div class=\"card\">
\t\t\t\t\t\t    <div class=\"card-header p-0\" id=\"headingOne\">
\t\t\t\t\t\t      <h2 class=\"mb-0\">
\t\t\t\t\t\t        <button href=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#collapseOne"), "html", null, true);
        echo "\" class=\"d-flex py-3 px-4 align-items-center justify-content-between btn btn-link\" data-parent=\"#accordion\" data-toggle=\"collapse\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
\t\t\t\t\t\t        \t<p class=\"mb-0\">How to train your pet dog?</p>
\t\t\t\t\t\t          <i class=\"fa\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t        </button>
\t\t\t\t\t\t      </h2>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"collapse show\" id=\"collapseOne\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
\t\t\t\t\t\t      <div class=\"card-body py-3 px-0\">
\t\t\t\t\t\t      \t<ol>
\t\t\t\t\t\t      \t\t<li>Far far away, behind the word mountains</li>
\t\t\t\t\t\t      \t\t<li>Consonantia, there live the blind texts</li>
\t\t\t\t\t\t      \t\t<li>When she reached the first hills of the Italic Mountains</li>
\t\t\t\t\t\t      \t\t<li>Bookmarksgrove, the headline of Alphabet Village</li>
\t\t\t\t\t\t      \t\t<li>Separated they live in Bookmarksgrove right</li>
\t\t\t\t\t\t      \t</ol>
\t\t\t\t\t\t      </div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t  </div>

\t\t\t\t\t\t  <div class=\"card\">
\t\t\t\t\t\t    <div class=\"card-header p-0\" id=\"headingTwo\" role=\"tab\">
\t\t\t\t\t\t      <h2 class=\"mb-0\">
\t\t\t\t\t\t        <button href=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#collapseTwo"), "html", null, true);
        echo "\" class=\"d-flex py-3 px-4 align-items-center justify-content-between btn btn-link\" data-parent=\"#accordion\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
\t\t\t\t\t\t        \t<p class=\"mb-0\">How to manage your pets?</p>
\t\t\t\t\t\t          <i class=\"fa\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t        </button>
\t\t\t\t\t\t      </h2>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"collapse\" id=\"collapseTwo\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
\t\t\t\t\t\t      <div class=\"card-body py-3 px-0\">
\t\t\t\t\t\t      \t<ol>
\t\t\t\t\t\t      \t\t<li>Far far away, behind the word mountains</li>
\t\t\t\t\t\t      \t\t<li>Consonantia, there live the blind texts</li>
\t\t\t\t\t\t      \t\t<li>When she reached the first hills of the Italic Mountains</li>
\t\t\t\t\t\t      \t\t<li>Bookmarksgrove, the headline of Alphabet Village</li>
\t\t\t\t\t\t      \t\t<li>Separated they live in Bookmarksgrove right</li>
\t\t\t\t\t\t      \t</ol>
\t\t\t\t\t\t      </div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t  </div>

\t\t\t\t\t\t  <div class=\"card\">
\t\t\t\t\t\t    <div class=\"card-header p-0\" id=\"headingThree\" role=\"tab\">
\t\t\t\t\t\t      <h2 class=\"mb-0\">
\t\t\t\t\t\t        <button href=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#collapseThree"), "html", null, true);
        echo "\" class=\"d-flex py-3 px-4 align-items-center justify-content-between btn btn-link\" data-parent=\"#accordion\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
\t\t\t\t\t\t        \t<p class=\"mb-0\">What is the best grooming for your pets?</p>
\t\t\t\t\t\t          <i class=\"fa\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t        </button>
\t\t\t\t\t\t      </h2>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"collapse\" id=\"collapseThree\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
\t\t\t\t\t\t      <div class=\"card-body py-3 px-0\">
\t\t\t\t\t\t      \t<ol>
\t\t\t\t\t\t      \t\t<li>Far far away, behind the word mountains</li>
\t\t\t\t\t\t      \t\t<li>Consonantia, there live the blind texts</li>
\t\t\t\t\t\t      \t\t<li>When she reached the first hills of the Italic Mountains</li>
\t\t\t\t\t\t      \t\t<li>Bookmarksgrove, the headline of Alphabet Village</li>
\t\t\t\t\t\t      \t\t<li>Separated they live in Bookmarksgrove right</li>
\t\t\t\t\t\t      \t</ol>
\t\t\t\t\t\t      </div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t  </div>

\t\t\t\t\t\t  <div class=\"card\">
\t\t\t\t\t\t    <div class=\"card-header p-0\" id=\"headingFour\" role=\"tab\">
\t\t\t\t\t\t      <h2 class=\"mb-0\">
\t\t\t\t\t\t        <button href=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#collapseFour"), "html", null, true);
        echo "\" class=\"d-flex py-3 px-4 align-items-center justify-content-between btn btn-link\" data-parent=\"#accordion\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapseFour\">
\t\t\t\t\t\t        \t<p class=\"mb-0\">What are those requirements for sitting pets?</p>
\t\t\t\t\t\t          <i class=\"fa\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t        </button>
\t\t\t\t\t\t      </h2>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"collapse\" id=\"collapseFour\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
\t\t\t\t\t\t      <div class=\"card-body py-3 px-0\">
\t\t\t\t\t\t      \t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
\t\t\t\t\t\t      </div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t        </div>
        </div>
    \t</div>
    </section>

    <section class=\"ftco-section testimony-section\" style=\"background-image: url('images/bg_2.jpg');\">
    \t<div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row justify-content-center pb-5 mb-3\">
          <div class=\"col-md-7 heading-section text-center ftco-animate\">
            <h2>Happy Clients &amp; Feedbacks</h2>
          </div>
        </div>
        <div class=\"row ftco-animate\">
          <div class=\"col-md-12\">
            <div class=\"carousel-testimony owl-carousel ftco-owl\">
              <div class=\"item\">
                <div class=\"testimony-wrap py-4\">
                \t<div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"fa fa-quote-left\"></span></div>
                  <div class=\"text\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class=\"d-flex align-items-center\">
                    \t<div class=\"user-img\" style=\"background-image: url(images/person_1.jpg)\"></div>
                    \t<div class=\"pl-3\">
\t\t                    <p class=\"name\">Roger Scott</p>
\t\t                    <span class=\"position\">Marketing Manager</span>
\t\t                  </div>
\t                  </div>
                  </div>
                </div>
              </div>
              <div class=\"item\">
                <div class=\"testimony-wrap py-4\">
                \t<div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"fa fa-quote-left\"></span></div>
                  <div class=\"text\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class=\"d-flex align-items-center\">
                    \t<div class=\"user-img\" style=\"background-image: url(images/person_2.jpg)\"></div>
                    \t<div class=\"pl-3\">
\t\t                    <p class=\"name\">Roger Scott</p>
\t\t                    <span class=\"position\">Marketing Manager</span>
\t\t                  </div>
\t                  </div>
                  </div>
                </div>
              </div>
              <div class=\"item\">
                <div class=\"testimony-wrap py-4\">
                \t<div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"fa fa-quote-left\"></span></div>
                  <div class=\"text\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class=\"d-flex align-items-center\">
                    \t<div class=\"user-img\" style=\"background-image: url(images/person_3.jpg)\"></div>
                    \t<div class=\"pl-3\">
\t\t                    <p class=\"name\">Roger Scott</p>
\t\t                    <span class=\"position\">Marketing Manager</span>
\t\t                  </div>
\t                  </div>
                  </div>
                </div>
              </div>
              <div class=\"item\">
                <div class=\"testimony-wrap py-4\">
                \t<div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"fa fa-quote-left\"></span></div>
                  <div class=\"text\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class=\"d-flex align-items-center\">
                    \t<div class=\"user-img\" style=\"background-image: url(images/person_1.jpg)\"></div>
                    \t<div class=\"pl-3\">
\t\t                    <p class=\"name\">Roger Scott</p>
\t\t                    <span class=\"position\">Marketing Manager</span>
\t\t                  </div>
\t                  </div>
                  </div>
                </div>
              </div>
              <div class=\"item\">
                <div class=\"testimony-wrap py-4\">
                \t<div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"fa fa-quote-left\"></span></div>
                  <div class=\"text\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class=\"d-flex align-items-center\">
                    \t<div class=\"user-img\" style=\"background-image: url(images/person_2.jpg)\"></div>
                    \t<div class=\"pl-3\">
\t\t                    <p class=\"name\">Roger Scott</p>
\t\t                    <span class=\"position\">Marketing Manager</span>
\t\t                  </div>
\t                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class=\"ftco-section bg-light\">
    \t<div class=\"container\">
    \t\t<div class=\"row justify-content-center pb-5 mb-3\">
          <div class=\"col-md-7 heading-section text-center ftco-animate\">
            <h2>Affordable Packages</h2>
          </div>
        </div>
    \t\t<div class=\"row\">
    \t\t\t<div class=\"col-md-4 ftco-animate\">
\t          <div class=\"block-7\">
\t          \t<div class=\"img\" style=\"background-image: url(images/pricing-1.jpg);\"></div>
\t            <div class=\"text-center p-4\">
\t            \t<span class=\"excerpt d-block\">Personal</span>
\t            \t<span class=\"price\"><sup>\$</sup> <span class=\"number\">49</span> <sub>/mos</sub></span>
\t            
\t\t            <ul class=\"pricing-text mb-5\">
\t\t              <li><span class=\"fa fa-check mr-2\"></span>5 Dog Walk</li>
\t\t              <li><span class=\"fa fa-check mr-2\"></span>3 Vet Visit</li>
\t\t              <li><span class=\"fa fa-check mr-2\"></span>3 Pet Spa</li>
\t\t              <li><span class=\"fa fa-check mr-2\"></span>Free Supports</li>
\t\t            </ul>

\t            \t<a href=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"btn btn-primary d-block px-2 py-3\">Get Started</a>
\t            </div>
\t          </div>
\t        </div>
\t        <div class=\"col-md-4 ftco-animate\">
\t          <div class=\"block-7\">
\t          \t<div class=\"img\" style=\"background-image: url(images/pricing-2.jpg);\"></div>
\t            <div class=\"text-center p-4\">
\t            \t<span class=\"excerpt d-block\">Business</span>
\t\t            <span class=\"price\"><sup>\$</sup> <span class=\"number\">79</span> <sub>/mos</sub></span>
\t\t            
\t\t            <ul class=\"pricing-text mb-5\">
\t\t              <li><span class=\"fa fa-check mr-2\"></span>5 Dog Walk</li>
\t\t              <li><span class=\"fa fa-check mr-2\"></span>3 Vet Visit</li>
\t\t              <li><span class=\"fa fa-check mr-2\"></span>3 Pet Spa</li>
\t\t              <li><span class=\"fa fa-check mr-2\"></span>Free Supports</li>
\t\t            </ul>

\t\t            <a href=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"btn btn-primary d-block px-2 py-3\">Get Started</a>
\t            </div>
\t          </div>
\t        </div>
\t        <div class=\"col-md-4 ftco-animate\">
\t          <div class=\"block-7\">
\t          \t<div class=\"img\" style=\"background-image: url(images/pricing-3.jpg);\"></div>
\t            <div class=\"text-center p-4\">
\t            \t<span class=\"excerpt d-block\">Ultimate</span>
\t\t            <span class=\"price\"><sup>\$</sup> <span class=\"number\">109</span> <sub>/mos</sub></span>
\t\t            
\t\t            <ul class=\"pricing-text mb-5\">
\t\t              <li><span class=\"fa fa-check mr-2\"></span>5 Dog Walk</li>
\t\t              <li><span class=\"fa fa-check mr-2\"></span>3 Vet Visit</li>
\t\t              <li><span class=\"fa fa-check mr-2\"></span>3 Pet Spa</li>
\t\t              <li><span class=\"fa fa-check mr-2\"></span>Free Supports</li>
\t\t            </ul>

\t\t            <a href=\"";
        // line 509
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"btn btn-primary d-block px-2 py-3\">Get Started</a>
\t            </div>
\t          </div>
\t        </div>
\t      </div>
    \t</div>
    </section>
\t\t
\t\t<section class=\"ftco-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center pb-5 mb-3\">
          <div class=\"col-md-7 heading-section text-center ftco-animate\">
            <h2>Pets Gallery</h2>
          </div>
        </div>
\t\t\t\t<div class=\"row\">
          <div class=\"col-md-4 ftco-animate\">
            <div class=\"work mb-4 img d-flex align-items-end\" style=\"background-image: url(images/gallery-1.jpg);\">
            \t<a href=\"";
        // line 527
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/gallery-1.jpg"), "html", null, true);
        echo "\" class=\"icon image-popup d-flex justify-content-center align-items-center\">
\t    \t\t\t\t\t<span class=\"fa fa-expand\"></span>
\t    \t\t\t\t</a>
            \t<div class=\"desc w-100 px-4\">
\t              <div class=\"text w-100 mb-3\">
\t              \t<span>Cat</span>
\t              \t<h2><a href=\"";
        // line 533
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("work-single.html"), "html", null, true);
        echo "\">Persian Cat</a></h2>
\t              </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 ftco-animate\">
            <div class=\"work mb-4 img d-flex align-items-end\" style=\"background-image: url(images/gallery-2.jpg);\">
            \t<a href=\"";
        // line 540
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/gallery-2.jpg\" class="), "html", null, true);
        echo "\"icon image-popup d-flex justify-content-center align-items-center>
\t    \t\t\t\t\t<span class=\"fa fa-expand\"></span>
\t    \t\t\t\t</a>
            \t<div class=\"desc w-100 px-4\">
\t              <div class=\"text w-100 mb-3\">
\t              \t<span>Dog</span>
\t              \t<h2><a href=\"";
        // line 546
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("work-single.html"), "html", null, true);
        echo "\">Pomeranian</a></h2>
\t              </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 ftco-animate\">
            <div class=\"work mb-4 img d-flex align-items-end\" style=\"background-image: url(images/gallery-3.jpg);\">
            \t<a href=\"";
        // line 553
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/gallery-3.jpg"), "html", null, true);
        echo "\" class=\"icon image-popup d-flex justify-content-center align-items-center\">
\t    \t\t\t\t\t<span class=\"fa fa-expand\"></span>
\t    \t\t\t\t</a>
            \t<div class=\"desc w-100 px-4\">
\t              <div class=\"text w-100 mb-3\">
\t              \t<span>Cat</span>
\t              \t<h2><a href=\"";
        // line 559
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("work-single.html"), "html", null, true);
        echo "\">Sphynx Cat</a></h2>
\t              </div>
              </div>
            </div>
          </div>

          <div class=\"col-md-4 ftco-animate\">
            <div class=\"work mb-4 img d-flex align-items-end\" style=\"background-image: url(images/gallery-4.jpg);\">
            \t<a href=\"";
        // line 567
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/gallery-4.jpg"), "html", null, true);
        echo "\" class=\"icon image-popup d-flex justify-content-center align-items-center\">
\t    \t\t\t\t\t<span class=\"fa fa-expand\"></span>
\t    \t\t\t\t</a>
            \t<div class=\"desc w-100 px-4\">
\t              <div class=\"text w-100 mb-3\">
\t              \t<span>Cat</span>
\t              \t<h2><a href=\"";
        // line 573
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("work-single.html"), "html", null, true);
        echo "\">British Shorthair</a></h2>
\t              </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 ftco-animate\">
            <div class=\"work mb-4 img d-flex align-items-end\" style=\"background-image: url(images/gallery-5.jpg);\">
            \t<a href=\"";
        // line 580
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/gallery-5.jpg"), "html", null, true);
        echo "\" class=\"icon image-popup d-flex justify-content-center align-items-center\">
\t    \t\t\t\t\t<span class=\"fa fa-expand\"></span>
\t    \t\t\t\t</a>
            \t<div class=\"desc w-100 px-4\">
\t              <div class=\"text w-100 mb-3\">
\t              \t<span>Dog</span>
\t              \t<h2><a href=\"";
        // line 586
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("work-single.html"), "html", null, true);
        echo "\">Beagle</a></h2>
\t              </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 ftco-animate\">
            <div class=\"work mb-4 img d-flex align-items-end\" style=\"background-image: url(images/gallery-6.jpg);\">
            \t<a href=\"";
        // line 593
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/gallery-6.jpg"), "html", null, true);
        echo "\" class=\"icon image-popup d-flex justify-content-center align-items-center\">
\t    \t\t\t\t\t<span class=\"fa fa-expand\"></span>
\t    \t\t\t\t</a>
            \t<div class=\"desc w-100 px-4\">
\t              <div class=\"text w-100 mb-3\">
\t              \t<span>Dog</span>
\t              \t<h2><a href=\"";
        // line 599
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("work-single.html"), "html", null, true);
        echo "\">Pug</a></h2>
\t              </div>
              </div>
            </div>
          </div>
        </div>
\t\t\t</div>
\t\t</section>

    <section class=\"ftco-section bg-light\">
      <div class=\"container\">
        <div class=\"row justify-content-center pb-5 mb-3\">
          <div class=\"col-md-7 heading-section text-center ftco-animate\">
            <h2>Latest news from our blog</h2>
          </div>
        </div>
        <div class=\"row d-flex\">
          <div class=\"col-md-4 d-flex ftco-animate\">
            <div class=\"blog-entry align-self-stretch\">
              <a href=\"";
        // line 618
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("blog-single.html"), "html", null, true);
        echo "\" class=\"block-20 rounded\" style=\"background-image: url('images/image_1.jpg');\">
              </a>
              <div class=\"text p-4\">
              \t<div class=\"meta mb-2\">
                  <div><a href=\"";
        // line 622
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">April 07, 2020</a></div>
                  <div><a href=\"";
        // line 623
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Admin</a></div>
                  <div><a href=\"";
        // line 624
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"meta-chat\"><span class=\"fa fa-comment\"></span> 3</a></div>
                </div>
                <h3 class=\"heading\"><a href=\"";
        // line 626
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 d-flex ftco-animate\">
            <div class=\"blog-entry align-self-stretch\">
              <a href=\"";
        // line 632
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("blog-single.html"), "html", null, true);
        echo "\" class=\"block-20 rounded\" style=\"background-image: url('images/image_2.jpg');\">
              </a>
              <div class=\"text p-4\">
              \t<div class=\"meta mb-2\">
                  <div><a href=\"";
        // line 636
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">April 07, 2020</a></div>
                  <div><a href=\"";
        // line 637
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Admin</a></div>
                  <div><a href=\"";
        // line 638
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"meta-chat\"><span class=\"fa fa-comment\"></span> 3</a></div>
                </div>
                <h3 class=\"heading\"><a href=\"";
        // line 640
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 d-flex ftco-animate\">
            <div class=\"blog-entry align-self-stretch\">
              <a href=\"";
        // line 646
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("blog-single.html"), "html", null, true);
        echo "\" class=\"block-20 rounded\" style=\"background-image: url('images/image_3.jpg');\">
              </a>
              <div class=\"text p-4\">
              \t<div class=\"meta mb-2\">
                  <div><a href=\"";
        // line 650
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">April 07, 2020</a></div>
                  <div><a href=\"";
        // line 651
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Admin</a></div>
                  <div><a href=\"";
        // line 652
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" class=\"meta-chat\"><span class=\"fa fa-comment\"></span> 3</a></div>
                </div>
                <h3 class=\"heading\"><a href=\"";
        // line 654
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class=\"ftco-appointment ftco-section ftco-no-pt ftco-no-pb img\" style=\"background-image: url(images/bg_3.jpg);\">
\t\t\t<div class=\"overlay\"></div>
    \t<div class=\"container\">
    \t\t<div class=\"row d-md-flex justify-content-end\">
    \t\t\t<div class=\"col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate\">
    \t\t\t\t<h2 class=\"mb-4\">Free Consultation</h2>
    \t\t\t\t<form action=\"#\" class=\"appointment\">
    \t\t\t\t\t<div class=\"row\">
    \t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t    \t\t\t\t\t<div class=\"form-field\">
\t          \t\t\t\t\t<div class=\"select-wrap\">
\t                      <div class=\"icon\"><span class=\"fa fa-chevron-down\"></span></div>
\t                      <select name=\"\" id=\"\" class=\"form-control\">
\t                      \t<option value=\"\">Select services</option>
\t                        <option value=\"\">Cat Sitting</option>
\t                        <option value=\"\">Dog Walk</option>
\t                        <option value=\"\">Pet Spa</option>
\t                        <option value=\"\">Pet Grooming</option>
\t                        <option value=\"\">Pet Daycare</option>
\t                      </select>
\t                    </div>
\t\t\t              </div>
\t\t\t    \t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t              <input type=\"text\" class=\"form-control\" placeholder=\"Your Name\">
\t\t\t            </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t              <input type=\"text\" class=\"form-control\" placeholder=\"Vehicle number\">
\t\t\t            </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t    \t\t\t\t\t<div class=\"input-wrap\">
\t\t\t            \t\t<div class=\"icon\"><span class=\"fa fa-calendar\"></span></div>
\t\t\t            \t\t<input type=\"text\" class=\"form-control appointment_date\" placeholder=\"Date\">
\t\t            \t\t</div>
\t\t\t    \t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t    \t\t\t\t\t<div class=\"input-wrap\">
\t\t\t            \t\t<div class=\"icon\"><span class=\"fa fa-clock-o\"></span></div>
\t\t\t            \t\t<input type=\"text\" class=\"form-control appointment_time\" placeholder=\"Time\">
\t\t            \t\t</div>
\t\t\t    \t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t              <textarea name=\"\" id=\"\" cols=\"30\" rows=\"7\" class=\"form-control\" placeholder=\"Message\"></textarea>
\t\t\t            </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t              <input type=\"submit\" value=\"Send message\" class=\"btn btn-primary py-3 px-4\">
\t\t\t            </div>
\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
\t          </form>
    \t\t\t</div>
    \t\t</div>
    \t</div>
    </section>

    <footer class=\"footer\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 col-lg-3 mb-4 mb-md-0\">
\t\t\t\t\t\t<h2 class=\"footer-heading\">Petsitting</h2>
\t\t\t\t\t\t<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
\t\t\t\t\t\t<ul class=\"ftco-footer-social p-0\">
              <li class=\"ftco-animate\"><a href=\"";
        // line 737
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Twitter\"><span class=\"fa fa-twitter\"></span></a></li>
              <li class=\"ftco-animate\"><a href=\"";
        // line 738
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Facebook\"><span class=\"fa fa-facebook\"></span></a></li>
              <li class=\"ftco-animate\"><a href=\"";
        // line 739
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Instagram\"><span class=\"fa fa-instagram\"></span></a></li>
            </ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 col-lg-3 mb-4 mb-md-0\">
\t\t\t\t\t\t<h2 class=\"footer-heading\">Latest News</h2>
\t\t\t\t\t\t<div class=\"block-21 mb-4 d-flex\">
              <a class=\"img mr-4 rounded\" style=\"background-image: url(images/image_1.jpg);\"></a>
              <div class=\"text\">
                <h3 class=\"heading\"><a href=\"";
        // line 747
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Even the all-powerful Pointing has no control about</a></h3>
                <div class=\"meta\">
                  <div><a href=\"";
        // line 749
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span class=\"icon-calendar\"></span> April 7, 2020</a></div>
                  <div><a href=\"";
        // line 750
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span class=\"icon-person\"></span> Admin</a></div>
                  <div><a href=\"";
        // line 751
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span class=\"icon-chat\"></span> 19</a></div>
                </div>
              </div>
            </div>
            <div class=\"block-21 mb-4 d-flex\">
              <a class=\"img mr-4 rounded\" style=\"background-image: url(images/image_2.jpg);\"></a>
              <div class=\"text\">
                <h3 class=\"heading\"><a href=\"";
        // line 758
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\">Even the all-powerful Pointing has no control about</a></h3>
                <div class=\"meta\">
                  <div><a href=\"";
        // line 760
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span class=\"icon-calendar\"></span> April 7, 2020</a></div>
                  <div><a href=\"";
        // line 761
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span class=\"icon-person\"></span> Admin</a></div>
                  <div><a href=\"";
        // line 762
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span class=\"icon-chat\"></span> 19</a></div>
                </div>
              </div>
            </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0\">
\t\t\t\t\t\t<h2 class=\"footer-heading\">Quick Links</h2>
\t\t\t\t\t\t<ul class=\"list-unstyled\">
              <li><a href=\"";
        // line 770
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#\" class=\"py-2 d-block"), "html", null, true);
        echo "\">hhhhhhhhhhhhhhh</a></li>
              <li><a href=\"";
        // line 771
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#\" class=\"py-2 d-block"), "html", null, true);
        echo "\">About</a></li>
              <li><a href=\"";
        // line 772
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#\" class=\"py-2 d-block"), "html", null, true);
        echo "\">Services</a></li>
              <li><a href=\"";
        // line 773
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#\" class=\"py-2 d-block"), "html", null, true);
        echo "\">Works</a></li>
              <li><a href=\"";
        // line 774
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#\" class=\"py-2 d-block"), "html", null, true);
        echo "\">Blog</a></li>
              <li><a href=\"";
        // line 775
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#\" class=\"py-2 d-block"), "html", null, true);
        echo "\">Contact</a></li>
            </ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 col-lg-3 mb-4 mb-md-0\">
\t\t\t\t\t\t<h2 class=\"footer-heading\">Have a Questions?</h2>
\t\t\t\t\t\t<div class=\"block-23 mb-3\">
              <ul>
                <li><span class=\"icon fa fa-map\"></span><span class=\"text\">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                <li><a href=\"";
        // line 783
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span class=\"icon fa fa-phone\"></span><span class=\"text\">+2 392 3929 210</span></a></li>
                <li><a href=\"";
        // line 784
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><span class=\"icon fa fa-paper-plane\"></span><span class=\"text\">info@yourdomain.com</span></a></li>
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
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base-front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1185 => 17,  1172 => 13,  1162 => 12,  1149 => 9,  1139 => 8,  1120 => 5,  1065 => 784,  1061 => 783,  1050 => 775,  1046 => 774,  1042 => 773,  1038 => 772,  1034 => 771,  1030 => 770,  1019 => 762,  1015 => 761,  1011 => 760,  1006 => 758,  996 => 751,  992 => 750,  988 => 749,  983 => 747,  972 => 739,  968 => 738,  964 => 737,  878 => 654,  873 => 652,  869 => 651,  865 => 650,  858 => 646,  849 => 640,  844 => 638,  840 => 637,  836 => 636,  829 => 632,  820 => 626,  815 => 624,  811 => 623,  807 => 622,  800 => 618,  778 => 599,  769 => 593,  759 => 586,  750 => 580,  740 => 573,  731 => 567,  720 => 559,  711 => 553,  701 => 546,  692 => 540,  682 => 533,  673 => 527,  652 => 509,  631 => 491,  610 => 473,  475 => 341,  450 => 319,  425 => 297,  400 => 275,  272 => 150,  257 => 138,  242 => 126,  222 => 109,  207 => 97,  203 => 96,  199 => 95,  195 => 94,  191 => 93,  187 => 92,  183 => 91,  179 => 90,  170 => 84,  143 => 60,  137 => 57,  119 => 42,  115 => 41,  110 => 39,  106 => 38,  100 => 35,  96 => 34,  92 => 33,  75 => 18,  73 => 17,  69 => 15,  67 => 12,  64 => 11,  61 => 8,  57 => 6,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"{{asset('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>')}}\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
    </body>
</html>
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <title>Animaland- Free Bootstrap 4 Template by Colorlib</title>
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
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-md-6 d-flex justify-content-md-end\">
\t\t\t\t\t<div style=\"margin-right:10px\">
\t\t\t\t\t <button style=\"border: 3px\" class=\"btn btn-primary \" >  <a href=\"{{ path ('login') }}\"   class=\"nav-link\" style=\"color:white;\"> login    </a>   </button>
\t\t\t\t\t</div>
\t\t\t\t\t <div>
\t\t\t\t\t <button style=\"border: 3px\" class=\"btn btn-primary \">  <a href=\"{{ path ('register') }}\" class=\"nav-link\" style=\"color:white;\" >  register </a>    </button>
 \t\t\t\t\t\t</div>


 \t\t\t\t\t


\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"social-media\">

\t\t\t    \t\t<p class=\"mb-0 d-flex\">
\t\t\t    \t\t\t<a href=\"#\"class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-facebook\"><i class=\"sr-only\">Facebook</i></span></a>
\t\t\t    \t\t\t<a href=\"#\"class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-twitter\"><i class=\"sr-only\">Twitter</i></span></a>
\t\t\t    \t\t\t<a href=\"#\"class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-instagram\"><i class=\"sr-only\">Instagram</i></span></a>
\t\t\t    \t\t\t<a href=\"#\"class=\"d-flex align-items-center justify-content-center\"><span class=\"fa fa-dribbble\"><i class=\"sr-only\">Dribbble</i></span></a>
\t\t\t    \t\t</p>
\t\t\t\t\t\t
\t\t        </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
\t    <div class=\"container\">
\t    \t<div style=\"margin-right: 50px;\"> <a class=\"navbar-brand\" href=\"{{path ('app_front')}}\"><span><img src=\"images/logo-01.png\" alt=\"Bootstrap\" class=\"img-responsive\" style=\"max-width: 20%\"> </span>AnimaLand</a></div>
\t      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t        <span class=\"fa fa-bars\"></span> Menu
\t      </button>
\t      <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
\t        <ul class=\"navbar-nav ml-auto\">
\t        \t<li class=\"nav-item active\"><a href=\"{{path ('app_front')}}\" class=\"nav-link\">Accueil</a></li> 
                <li class=\"nav-item\"><a href=\"{{path ('app_about')}}\" class=\"nav-link\">About</a></li>\t      
                <li class=\"nav-item\"><a href=\"{{path ('app_vet')}}\" class=\"nav-link\">Services Vetrinaires</a></li>
\t        \t<li class=\"nav-item\"><a href=\"{{path ('app_services')}}\" class=\"nav-link\">Services Soins</a></li>
                 <li class=\"nav-item\"><a href=\"{{path ('app_accoup')}}\" class=\"nav-link\">Chercher Accouplement</a></li>
                <li class=\"nav-item\"><a href=\"{{path ('app_produits')}}\" class=\"nav-link\">Produits</a></li>
\t            <li class=\"nav-item\"><a href=\"{{path ('app_adop')}}\" class=\"nav-link\">Adoption</a></li>
\t          <li class=\"nav-item\"><a href=\"{{path ('app_rec')}}\" class=\"nav-link\">reclamations</a></li>
\t        </ul>
\t      </div>
\t    </div>
\t  </nav>
    <!-- END nav -->
    <div class=\"hero-wrap js-fullheight\" style=\"background-image: url('images/bg_1.jpg');\" data-stellar-background-ratio=\"0.5\">
      <div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row no-gutters slider-text js-fullheight align-items-center justify-content-center\" data-scrollax-parent=\"true\">
          <div class=\"col-md-11 ftco-animate text-center\">
          \t<h1 class=\"mb-4\">Highest Quality Care For Pets You'll Love </h1>
            <p><a href=\"{{asset('#')}}\" class=\"btn btn-primary mr-md-4 py-3 px-4\">Learn more <span class=\"ion-ios-arrow-forward\"></span></a></p>
          </div>
        </div>
      </div>
    </div>

    <section class=\"ftco-section bg-light ftco-no-pt ftco-intro\">
    \t<div class=\"container\">
    \t\t<div class=\"row\">
          <div class=\"col-md-4 d-flex align-self-stretch px-4 ftco-animate\">
            <div class=\"d-block services active text-center\">
              <div class=\"icon d-flex align-items-center justify-content-center\">
            \t\t<span class=\"flaticon-blind\"></span>
              </div>
              <div class=\"media-body\">
                <h3 class=\"heading\">Dog Walking</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right.</p>
                <a href=\"{{asset('#')}}\" class=\"btn-custom d-flex align-items-center justify-content-center\"><span class=\"fa fa-chevron-right\"></span><i class=\"sr-only\">Read more</i></a>
              </div>
            </div>      
          </div>
          <div class=\"col-md-4 d-flex align-self-stretch px-4 ftco-animate\">
            <div class=\"d-block services text-center\">
              <div class=\"icon d-flex align-items-center justify-content-center\">
            \t\t<span class=\"flaticon-dog-eating\"></span>
              </div>
              <div class=\"media-body\">
                <h3 class=\"heading\">Pet Daycare</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right.</p>
                <a href=\"{{asset('#')}}\" class=\"btn-custom d-flex align-items-center justify-content-center\"><span class=\"fa fa-chevron-right\"></span><i class=\"sr-only\">Read more</i></a>
              </div>
            </div>    
          </div>
          <div class=\"col-md-4 d-flex align-self-stretch px-4 ftco-animate\">
            <div class=\"d-block services text-center\">
              <div class=\"icon d-flex align-items-center justify-content-center\">
            \t\t<span class=\"flaticon-grooming\"></span>
              </div>
              <div class=\"media-body\">
                <h3 class=\"heading\">Pet Grooming</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right.</p>
                <a href=\"{{asset('#')}}\" class=\"btn-custom d-flex align-items-center justify-content-center\"><span class=\"fa fa-chevron-right\"></span><i class=\"sr-only\">Read more</i></a>
              </div>
            </div>      
          </div>
        </div>
    \t</div>
    </section>

    <section class=\"ftco-section ftco-no-pt ftco-no-pb\">
    \t<div class=\"container\">
    \t\t<div class=\"row d-flex no-gutters\">
    \t\t\t<div class=\"col-md-5 d-flex\">
    \t\t\t\t<div class=\"img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0\" style=\"background-image:url(images/about-1.jpg);\">
    \t\t\t\t</div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-7 pl-md-5 py-md-5\">
    \t\t\t\t<div class=\"heading-section pt-md-5\">
\t            <h2 class=\"mb-4\">Why Choose Us?</h2>
    \t\t\t\t</div>
    \t\t\t\t<div class=\"row\">
\t    \t\t\t\t<div class=\"col-md-6 services-2 w-100 d-flex\">
\t    \t\t\t\t\t<div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"flaticon-stethoscope\"></span></div>
\t    \t\t\t\t\t<div class=\"text pl-3\">
\t    \t\t\t\t\t\t<h4>Care Advices</h4>
\t    \t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries.</p>
\t    \t\t\t\t\t</div>
\t    \t\t\t\t</div>
\t    \t\t\t\t<div class=\"col-md-6 services-2 w-100 d-flex\">
\t    \t\t\t\t\t<div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"flaticon-customer-service\"></span></div>
\t    \t\t\t\t\t<div class=\"text pl-3\">
\t    \t\t\t\t\t\t<h4>Customer Supports</h4>
\t    \t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries.</p>
\t    \t\t\t\t\t</div>
\t    \t\t\t\t</div>
\t    \t\t\t\t<div class=\"col-md-6 services-2 w-100 d-flex\">
\t    \t\t\t\t\t<div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"flaticon-emergency-call\"></span></div>
\t    \t\t\t\t\t<div class=\"text pl-3\">
\t    \t\t\t\t\t\t<h4>Emergency Services</h4>
\t    \t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries.</p>
\t    \t\t\t\t\t</div>
\t    \t\t\t\t</div>
\t    \t\t\t\t<div class=\"col-md-6 services-2 w-100 d-flex\">
\t    \t\t\t\t\t<div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"flaticon-veterinarian\"></span></div>
\t    \t\t\t\t\t<div class=\"text pl-3\">
\t    \t\t\t\t\t\t<h4>Veterinary Help</h4>
\t    \t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries.</p>
\t    \t\t\t\t\t</div>
\t    \t\t\t\t</div>
\t    \t\t\t</div>
\t        </div>
        </div>
    \t</div>
    </section>

    <section class=\"ftco-counter\" id=\"section-counter\">
    \t<div class=\"container\">
\t\t\t\t<div class=\"row\">
          <div class=\"col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate\">
            <div class=\"block-18 text-center\">
              <div class=\"text\">
                <strong class=\"number\" data-number=\"50\">0</strong>
              </div>
              <div class=\"text\">
              \t<span>Customer</span>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate\">
            <div class=\"block-18 text-center\">
              <div class=\"text\">
                <strong class=\"number\" data-number=\"8500\">0</strong>
              </div>
              <div class=\"text\">
              \t<span>Professionals</span>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate\">
            <div class=\"block-18 text-center\">
              <div class=\"text\">
                <strong class=\"number\" data-number=\"20\">0</strong>
              </div>
              <div class=\"text\">
              \t<span>Products</span>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate\">
            <div class=\"block-18 text-center\">
              <div class=\"text\">
                <strong class=\"number\" data-number=\"50\">0</strong>
              </div>
              <div class=\"text\">
              \t<span>Pets Hosted</span>
              </div>
            </div>
          </div>
        </div>
    \t</div>
    </section>

    <section class=\"ftco-section bg-light ftco-faqs\">
    \t<div class=\"container\">
    \t\t<div class=\"row\">
    \t\t\t<div class=\"col-lg-6 order-md-last\">
    \t\t\t\t<div class=\"img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0\" style=\"background-image:url(images/about.jpg);\">
    \t\t\t\t\t<a href=\"https://vimeo.com/45830194\" class=\"icon-video popup-vimeo d-flex justify-content-center align-items-center\">
    \t\t\t\t\t\t<span class=\"fa fa-play\"></span>
    \t\t\t\t\t</a>
    \t\t\t\t</div>
    \t\t\t\t<div class=\"d-flex mt-3\">
    \t\t\t\t\t<div class=\"img img-2 mr-md-2\" style=\"background-image:url(images/about-2.jpg);\"></div>
    \t\t\t\t\t<div class=\"img img-2 ml-md-2\" style=\"background-image:url(images/about-3.jpg);\"></div>
    \t\t\t\t</div>
    \t\t\t</div>

    \t\t\t<div class=\"col-lg-6\">
    \t\t\t\t<div class=\"heading-section mb-5 mt-5 mt-lg-0\">
\t            <h2 class=\"mb-3\">Frequently Asks Questions</h2>
\t            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
    \t\t\t\t</div>
    \t\t\t\t<div id=\"accordion\" class=\"myaccordion w-100\" aria-multiselectable=\"true\">
\t\t\t\t\t\t  <div class=\"card\">
\t\t\t\t\t\t    <div class=\"card-header p-0\" id=\"headingOne\">
\t\t\t\t\t\t      <h2 class=\"mb-0\">
\t\t\t\t\t\t        <button href=\"{{asset('#collapseOne')}}\" class=\"d-flex py-3 px-4 align-items-center justify-content-between btn btn-link\" data-parent=\"#accordion\" data-toggle=\"collapse\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
\t\t\t\t\t\t        \t<p class=\"mb-0\">How to train your pet dog?</p>
\t\t\t\t\t\t          <i class=\"fa\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t        </button>
\t\t\t\t\t\t      </h2>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"collapse show\" id=\"collapseOne\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
\t\t\t\t\t\t      <div class=\"card-body py-3 px-0\">
\t\t\t\t\t\t      \t<ol>
\t\t\t\t\t\t      \t\t<li>Far far away, behind the word mountains</li>
\t\t\t\t\t\t      \t\t<li>Consonantia, there live the blind texts</li>
\t\t\t\t\t\t      \t\t<li>When she reached the first hills of the Italic Mountains</li>
\t\t\t\t\t\t      \t\t<li>Bookmarksgrove, the headline of Alphabet Village</li>
\t\t\t\t\t\t      \t\t<li>Separated they live in Bookmarksgrove right</li>
\t\t\t\t\t\t      \t</ol>
\t\t\t\t\t\t      </div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t  </div>

\t\t\t\t\t\t  <div class=\"card\">
\t\t\t\t\t\t    <div class=\"card-header p-0\" id=\"headingTwo\" role=\"tab\">
\t\t\t\t\t\t      <h2 class=\"mb-0\">
\t\t\t\t\t\t        <button href=\"{{asset('#collapseTwo')}}\" class=\"d-flex py-3 px-4 align-items-center justify-content-between btn btn-link\" data-parent=\"#accordion\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
\t\t\t\t\t\t        \t<p class=\"mb-0\">How to manage your pets?</p>
\t\t\t\t\t\t          <i class=\"fa\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t        </button>
\t\t\t\t\t\t      </h2>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"collapse\" id=\"collapseTwo\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
\t\t\t\t\t\t      <div class=\"card-body py-3 px-0\">
\t\t\t\t\t\t      \t<ol>
\t\t\t\t\t\t      \t\t<li>Far far away, behind the word mountains</li>
\t\t\t\t\t\t      \t\t<li>Consonantia, there live the blind texts</li>
\t\t\t\t\t\t      \t\t<li>When she reached the first hills of the Italic Mountains</li>
\t\t\t\t\t\t      \t\t<li>Bookmarksgrove, the headline of Alphabet Village</li>
\t\t\t\t\t\t      \t\t<li>Separated they live in Bookmarksgrove right</li>
\t\t\t\t\t\t      \t</ol>
\t\t\t\t\t\t      </div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t  </div>

\t\t\t\t\t\t  <div class=\"card\">
\t\t\t\t\t\t    <div class=\"card-header p-0\" id=\"headingThree\" role=\"tab\">
\t\t\t\t\t\t      <h2 class=\"mb-0\">
\t\t\t\t\t\t        <button href=\"{{asset('#collapseThree')}}\" class=\"d-flex py-3 px-4 align-items-center justify-content-between btn btn-link\" data-parent=\"#accordion\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
\t\t\t\t\t\t        \t<p class=\"mb-0\">What is the best grooming for your pets?</p>
\t\t\t\t\t\t          <i class=\"fa\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t        </button>
\t\t\t\t\t\t      </h2>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"collapse\" id=\"collapseThree\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
\t\t\t\t\t\t      <div class=\"card-body py-3 px-0\">
\t\t\t\t\t\t      \t<ol>
\t\t\t\t\t\t      \t\t<li>Far far away, behind the word mountains</li>
\t\t\t\t\t\t      \t\t<li>Consonantia, there live the blind texts</li>
\t\t\t\t\t\t      \t\t<li>When she reached the first hills of the Italic Mountains</li>
\t\t\t\t\t\t      \t\t<li>Bookmarksgrove, the headline of Alphabet Village</li>
\t\t\t\t\t\t      \t\t<li>Separated they live in Bookmarksgrove right</li>
\t\t\t\t\t\t      \t</ol>
\t\t\t\t\t\t      </div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t  </div>

\t\t\t\t\t\t  <div class=\"card\">
\t\t\t\t\t\t    <div class=\"card-header p-0\" id=\"headingFour\" role=\"tab\">
\t\t\t\t\t\t      <h2 class=\"mb-0\">
\t\t\t\t\t\t        <button href=\"{{asset('#collapseFour')}}\" class=\"d-flex py-3 px-4 align-items-center justify-content-between btn btn-link\" data-parent=\"#accordion\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapseFour\">
\t\t\t\t\t\t        \t<p class=\"mb-0\">What are those requirements for sitting pets?</p>
\t\t\t\t\t\t          <i class=\"fa\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t        </button>
\t\t\t\t\t\t      </h2>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"collapse\" id=\"collapseFour\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
\t\t\t\t\t\t      <div class=\"card-body py-3 px-0\">
\t\t\t\t\t\t      \t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
\t\t\t\t\t\t      </div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t        </div>
        </div>
    \t</div>
    </section>

    <section class=\"ftco-section testimony-section\" style=\"background-image: url('images/bg_2.jpg');\">
    \t<div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row justify-content-center pb-5 mb-3\">
          <div class=\"col-md-7 heading-section text-center ftco-animate\">
            <h2>Happy Clients &amp; Feedbacks</h2>
          </div>
        </div>
        <div class=\"row ftco-animate\">
          <div class=\"col-md-12\">
            <div class=\"carousel-testimony owl-carousel ftco-owl\">
              <div class=\"item\">
                <div class=\"testimony-wrap py-4\">
                \t<div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"fa fa-quote-left\"></span></div>
                  <div class=\"text\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class=\"d-flex align-items-center\">
                    \t<div class=\"user-img\" style=\"background-image: url(images/person_1.jpg)\"></div>
                    \t<div class=\"pl-3\">
\t\t                    <p class=\"name\">Roger Scott</p>
\t\t                    <span class=\"position\">Marketing Manager</span>
\t\t                  </div>
\t                  </div>
                  </div>
                </div>
              </div>
              <div class=\"item\">
                <div class=\"testimony-wrap py-4\">
                \t<div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"fa fa-quote-left\"></span></div>
                  <div class=\"text\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class=\"d-flex align-items-center\">
                    \t<div class=\"user-img\" style=\"background-image: url(images/person_2.jpg)\"></div>
                    \t<div class=\"pl-3\">
\t\t                    <p class=\"name\">Roger Scott</p>
\t\t                    <span class=\"position\">Marketing Manager</span>
\t\t                  </div>
\t                  </div>
                  </div>
                </div>
              </div>
              <div class=\"item\">
                <div class=\"testimony-wrap py-4\">
                \t<div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"fa fa-quote-left\"></span></div>
                  <div class=\"text\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class=\"d-flex align-items-center\">
                    \t<div class=\"user-img\" style=\"background-image: url(images/person_3.jpg)\"></div>
                    \t<div class=\"pl-3\">
\t\t                    <p class=\"name\">Roger Scott</p>
\t\t                    <span class=\"position\">Marketing Manager</span>
\t\t                  </div>
\t                  </div>
                  </div>
                </div>
              </div>
              <div class=\"item\">
                <div class=\"testimony-wrap py-4\">
                \t<div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"fa fa-quote-left\"></span></div>
                  <div class=\"text\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class=\"d-flex align-items-center\">
                    \t<div class=\"user-img\" style=\"background-image: url(images/person_1.jpg)\"></div>
                    \t<div class=\"pl-3\">
\t\t                    <p class=\"name\">Roger Scott</p>
\t\t                    <span class=\"position\">Marketing Manager</span>
\t\t                  </div>
\t                  </div>
                  </div>
                </div>
              </div>
              <div class=\"item\">
                <div class=\"testimony-wrap py-4\">
                \t<div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"fa fa-quote-left\"></span></div>
                  <div class=\"text\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class=\"d-flex align-items-center\">
                    \t<div class=\"user-img\" style=\"background-image: url(images/person_2.jpg)\"></div>
                    \t<div class=\"pl-3\">
\t\t                    <p class=\"name\">Roger Scott</p>
\t\t                    <span class=\"position\">Marketing Manager</span>
\t\t                  </div>
\t                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class=\"ftco-section bg-light\">
    \t<div class=\"container\">
    \t\t<div class=\"row justify-content-center pb-5 mb-3\">
          <div class=\"col-md-7 heading-section text-center ftco-animate\">
            <h2>Affordable Packages</h2>
          </div>
        </div>
    \t\t<div class=\"row\">
    \t\t\t<div class=\"col-md-4 ftco-animate\">
\t          <div class=\"block-7\">
\t          \t<div class=\"img\" style=\"background-image: url(images/pricing-1.jpg);\"></div>
\t            <div class=\"text-center p-4\">
\t            \t<span class=\"excerpt d-block\">Personal</span>
\t            \t<span class=\"price\"><sup>\$</sup> <span class=\"number\">49</span> <sub>/mos</sub></span>
\t            
\t\t            <ul class=\"pricing-text mb-5\">
\t\t              <li><span class=\"fa fa-check mr-2\"></span>5 Dog Walk</li>
\t\t              <li><span class=\"fa fa-check mr-2\"></span>3 Vet Visit</li>
\t\t              <li><span class=\"fa fa-check mr-2\"></span>3 Pet Spa</li>
\t\t              <li><span class=\"fa fa-check mr-2\"></span>Free Supports</li>
\t\t            </ul>

\t            \t<a href=\"{{asset('#')}}\" class=\"btn btn-primary d-block px-2 py-3\">Get Started</a>
\t            </div>
\t          </div>
\t        </div>
\t        <div class=\"col-md-4 ftco-animate\">
\t          <div class=\"block-7\">
\t          \t<div class=\"img\" style=\"background-image: url(images/pricing-2.jpg);\"></div>
\t            <div class=\"text-center p-4\">
\t            \t<span class=\"excerpt d-block\">Business</span>
\t\t            <span class=\"price\"><sup>\$</sup> <span class=\"number\">79</span> <sub>/mos</sub></span>
\t\t            
\t\t            <ul class=\"pricing-text mb-5\">
\t\t              <li><span class=\"fa fa-check mr-2\"></span>5 Dog Walk</li>
\t\t              <li><span class=\"fa fa-check mr-2\"></span>3 Vet Visit</li>
\t\t              <li><span class=\"fa fa-check mr-2\"></span>3 Pet Spa</li>
\t\t              <li><span class=\"fa fa-check mr-2\"></span>Free Supports</li>
\t\t            </ul>

\t\t            <a href=\"{{asset('#')}}\" class=\"btn btn-primary d-block px-2 py-3\">Get Started</a>
\t            </div>
\t          </div>
\t        </div>
\t        <div class=\"col-md-4 ftco-animate\">
\t          <div class=\"block-7\">
\t          \t<div class=\"img\" style=\"background-image: url(images/pricing-3.jpg);\"></div>
\t            <div class=\"text-center p-4\">
\t            \t<span class=\"excerpt d-block\">Ultimate</span>
\t\t            <span class=\"price\"><sup>\$</sup> <span class=\"number\">109</span> <sub>/mos</sub></span>
\t\t            
\t\t            <ul class=\"pricing-text mb-5\">
\t\t              <li><span class=\"fa fa-check mr-2\"></span>5 Dog Walk</li>
\t\t              <li><span class=\"fa fa-check mr-2\"></span>3 Vet Visit</li>
\t\t              <li><span class=\"fa fa-check mr-2\"></span>3 Pet Spa</li>
\t\t              <li><span class=\"fa fa-check mr-2\"></span>Free Supports</li>
\t\t            </ul>

\t\t            <a href=\"{{asset('#')}}\" class=\"btn btn-primary d-block px-2 py-3\">Get Started</a>
\t            </div>
\t          </div>
\t        </div>
\t      </div>
    \t</div>
    </section>
\t\t
\t\t<section class=\"ftco-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center pb-5 mb-3\">
          <div class=\"col-md-7 heading-section text-center ftco-animate\">
            <h2>Pets Gallery</h2>
          </div>
        </div>
\t\t\t\t<div class=\"row\">
          <div class=\"col-md-4 ftco-animate\">
            <div class=\"work mb-4 img d-flex align-items-end\" style=\"background-image: url(images/gallery-1.jpg);\">
            \t<a href=\"{{asset('images/gallery-1.jpg')}}\" class=\"icon image-popup d-flex justify-content-center align-items-center\">
\t    \t\t\t\t\t<span class=\"fa fa-expand\"></span>
\t    \t\t\t\t</a>
            \t<div class=\"desc w-100 px-4\">
\t              <div class=\"text w-100 mb-3\">
\t              \t<span>Cat</span>
\t              \t<h2><a href=\"{{asset('work-single.html')}}\">Persian Cat</a></h2>
\t              </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 ftco-animate\">
            <div class=\"work mb-4 img d-flex align-items-end\" style=\"background-image: url(images/gallery-2.jpg);\">
            \t<a href=\"{{asset('images/gallery-2.jpg\" class=')}}\"icon image-popup d-flex justify-content-center align-items-center>
\t    \t\t\t\t\t<span class=\"fa fa-expand\"></span>
\t    \t\t\t\t</a>
            \t<div class=\"desc w-100 px-4\">
\t              <div class=\"text w-100 mb-3\">
\t              \t<span>Dog</span>
\t              \t<h2><a href=\"{{asset('work-single.html')}}\">Pomeranian</a></h2>
\t              </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 ftco-animate\">
            <div class=\"work mb-4 img d-flex align-items-end\" style=\"background-image: url(images/gallery-3.jpg);\">
            \t<a href=\"{{asset('images/gallery-3.jpg')}}\" class=\"icon image-popup d-flex justify-content-center align-items-center\">
\t    \t\t\t\t\t<span class=\"fa fa-expand\"></span>
\t    \t\t\t\t</a>
            \t<div class=\"desc w-100 px-4\">
\t              <div class=\"text w-100 mb-3\">
\t              \t<span>Cat</span>
\t              \t<h2><a href=\"{{asset('work-single.html')}}\">Sphynx Cat</a></h2>
\t              </div>
              </div>
            </div>
          </div>

          <div class=\"col-md-4 ftco-animate\">
            <div class=\"work mb-4 img d-flex align-items-end\" style=\"background-image: url(images/gallery-4.jpg);\">
            \t<a href=\"{{asset('images/gallery-4.jpg')}}\" class=\"icon image-popup d-flex justify-content-center align-items-center\">
\t    \t\t\t\t\t<span class=\"fa fa-expand\"></span>
\t    \t\t\t\t</a>
            \t<div class=\"desc w-100 px-4\">
\t              <div class=\"text w-100 mb-3\">
\t              \t<span>Cat</span>
\t              \t<h2><a href=\"{{asset('work-single.html')}}\">British Shorthair</a></h2>
\t              </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 ftco-animate\">
            <div class=\"work mb-4 img d-flex align-items-end\" style=\"background-image: url(images/gallery-5.jpg);\">
            \t<a href=\"{{asset('images/gallery-5.jpg')}}\" class=\"icon image-popup d-flex justify-content-center align-items-center\">
\t    \t\t\t\t\t<span class=\"fa fa-expand\"></span>
\t    \t\t\t\t</a>
            \t<div class=\"desc w-100 px-4\">
\t              <div class=\"text w-100 mb-3\">
\t              \t<span>Dog</span>
\t              \t<h2><a href=\"{{asset('work-single.html')}}\">Beagle</a></h2>
\t              </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 ftco-animate\">
            <div class=\"work mb-4 img d-flex align-items-end\" style=\"background-image: url(images/gallery-6.jpg);\">
            \t<a href=\"{{asset('images/gallery-6.jpg')}}\" class=\"icon image-popup d-flex justify-content-center align-items-center\">
\t    \t\t\t\t\t<span class=\"fa fa-expand\"></span>
\t    \t\t\t\t</a>
            \t<div class=\"desc w-100 px-4\">
\t              <div class=\"text w-100 mb-3\">
\t              \t<span>Dog</span>
\t              \t<h2><a href=\"{{asset('work-single.html')}}\">Pug</a></h2>
\t              </div>
              </div>
            </div>
          </div>
        </div>
\t\t\t</div>
\t\t</section>

    <section class=\"ftco-section bg-light\">
      <div class=\"container\">
        <div class=\"row justify-content-center pb-5 mb-3\">
          <div class=\"col-md-7 heading-section text-center ftco-animate\">
            <h2>Latest news from our blog</h2>
          </div>
        </div>
        <div class=\"row d-flex\">
          <div class=\"col-md-4 d-flex ftco-animate\">
            <div class=\"blog-entry align-self-stretch\">
              <a href=\"{{asset('blog-single.html')}}\" class=\"block-20 rounded\" style=\"background-image: url('images/image_1.jpg');\">
              </a>
              <div class=\"text p-4\">
              \t<div class=\"meta mb-2\">
                  <div><a href=\"{{asset('#')}}\">April 07, 2020</a></div>
                  <div><a href=\"{{asset('#')}}\">Admin</a></div>
                  <div><a href=\"{{asset('#')}}\" class=\"meta-chat\"><span class=\"fa fa-comment\"></span> 3</a></div>
                </div>
                <h3 class=\"heading\"><a href=\"{{asset('#')}}\">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 d-flex ftco-animate\">
            <div class=\"blog-entry align-self-stretch\">
              <a href=\"{{asset('blog-single.html')}}\" class=\"block-20 rounded\" style=\"background-image: url('images/image_2.jpg');\">
              </a>
              <div class=\"text p-4\">
              \t<div class=\"meta mb-2\">
                  <div><a href=\"{{asset('#')}}\">April 07, 2020</a></div>
                  <div><a href=\"{{asset('#')}}\">Admin</a></div>
                  <div><a href=\"{{asset('#')}}\" class=\"meta-chat\"><span class=\"fa fa-comment\"></span> 3</a></div>
                </div>
                <h3 class=\"heading\"><a href=\"{{asset('#')}}\">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 d-flex ftco-animate\">
            <div class=\"blog-entry align-self-stretch\">
              <a href=\"{{asset('blog-single.html')}}\" class=\"block-20 rounded\" style=\"background-image: url('images/image_3.jpg');\">
              </a>
              <div class=\"text p-4\">
              \t<div class=\"meta mb-2\">
                  <div><a href=\"{{asset('#')}}\">April 07, 2020</a></div>
                  <div><a href=\"{{asset('#')}}\">Admin</a></div>
                  <div><a href=\"{{asset('#')}}\" class=\"meta-chat\"><span class=\"fa fa-comment\"></span> 3</a></div>
                </div>
                <h3 class=\"heading\"><a href=\"{{asset('#')}}\">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class=\"ftco-appointment ftco-section ftco-no-pt ftco-no-pb img\" style=\"background-image: url(images/bg_3.jpg);\">
\t\t\t<div class=\"overlay\"></div>
    \t<div class=\"container\">
    \t\t<div class=\"row d-md-flex justify-content-end\">
    \t\t\t<div class=\"col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate\">
    \t\t\t\t<h2 class=\"mb-4\">Free Consultation</h2>
    \t\t\t\t<form action=\"#\" class=\"appointment\">
    \t\t\t\t\t<div class=\"row\">
    \t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t    \t\t\t\t\t<div class=\"form-field\">
\t          \t\t\t\t\t<div class=\"select-wrap\">
\t                      <div class=\"icon\"><span class=\"fa fa-chevron-down\"></span></div>
\t                      <select name=\"\" id=\"\" class=\"form-control\">
\t                      \t<option value=\"\">Select services</option>
\t                        <option value=\"\">Cat Sitting</option>
\t                        <option value=\"\">Dog Walk</option>
\t                        <option value=\"\">Pet Spa</option>
\t                        <option value=\"\">Pet Grooming</option>
\t                        <option value=\"\">Pet Daycare</option>
\t                      </select>
\t                    </div>
\t\t\t              </div>
\t\t\t    \t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t              <input type=\"text\" class=\"form-control\" placeholder=\"Your Name\">
\t\t\t            </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t              <input type=\"text\" class=\"form-control\" placeholder=\"Vehicle number\">
\t\t\t            </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t    \t\t\t\t\t<div class=\"input-wrap\">
\t\t\t            \t\t<div class=\"icon\"><span class=\"fa fa-calendar\"></span></div>
\t\t\t            \t\t<input type=\"text\" class=\"form-control appointment_date\" placeholder=\"Date\">
\t\t            \t\t</div>
\t\t\t    \t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t    \t\t\t\t\t<div class=\"input-wrap\">
\t\t\t            \t\t<div class=\"icon\"><span class=\"fa fa-clock-o\"></span></div>
\t\t\t            \t\t<input type=\"text\" class=\"form-control appointment_time\" placeholder=\"Time\">
\t\t            \t\t</div>
\t\t\t    \t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t              <textarea name=\"\" id=\"\" cols=\"30\" rows=\"7\" class=\"form-control\" placeholder=\"Message\"></textarea>
\t\t\t            </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t              <input type=\"submit\" value=\"Send message\" class=\"btn btn-primary py-3 px-4\">
\t\t\t            </div>
\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
\t          </form>
    \t\t\t</div>
    \t\t</div>
    \t</div>
    </section>

    <footer class=\"footer\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 col-lg-3 mb-4 mb-md-0\">
\t\t\t\t\t\t<h2 class=\"footer-heading\">Petsitting</h2>
\t\t\t\t\t\t<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
\t\t\t\t\t\t<ul class=\"ftco-footer-social p-0\">
              <li class=\"ftco-animate\"><a href=\"{{asset('#')}}\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Twitter\"><span class=\"fa fa-twitter\"></span></a></li>
              <li class=\"ftco-animate\"><a href=\"{{asset('#')}}\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Facebook\"><span class=\"fa fa-facebook\"></span></a></li>
              <li class=\"ftco-animate\"><a href=\"{{asset('#')}}\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Instagram\"><span class=\"fa fa-instagram\"></span></a></li>
            </ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 col-lg-3 mb-4 mb-md-0\">
\t\t\t\t\t\t<h2 class=\"footer-heading\">Latest News</h2>
\t\t\t\t\t\t<div class=\"block-21 mb-4 d-flex\">
              <a class=\"img mr-4 rounded\" style=\"background-image: url(images/image_1.jpg);\"></a>
              <div class=\"text\">
                <h3 class=\"heading\"><a href=\"{{asset('#')}}\">Even the all-powerful Pointing has no control about</a></h3>
                <div class=\"meta\">
                  <div><a href=\"{{asset('#')}}\"><span class=\"icon-calendar\"></span> April 7, 2020</a></div>
                  <div><a href=\"{{asset('#')}}\"><span class=\"icon-person\"></span> Admin</a></div>
                  <div><a href=\"{{asset('#')}}\"><span class=\"icon-chat\"></span> 19</a></div>
                </div>
              </div>
            </div>
            <div class=\"block-21 mb-4 d-flex\">
              <a class=\"img mr-4 rounded\" style=\"background-image: url(images/image_2.jpg);\"></a>
              <div class=\"text\">
                <h3 class=\"heading\"><a href=\"{{asset('#')}}\">Even the all-powerful Pointing has no control about</a></h3>
                <div class=\"meta\">
                  <div><a href=\"{{asset('#')}}\"><span class=\"icon-calendar\"></span> April 7, 2020</a></div>
                  <div><a href=\"{{asset('#')}}\"><span class=\"icon-person\"></span> Admin</a></div>
                  <div><a href=\"{{asset('#')}}\"><span class=\"icon-chat\"></span> 19</a></div>
                </div>
              </div>
            </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0\">
\t\t\t\t\t\t<h2 class=\"footer-heading\">Quick Links</h2>
\t\t\t\t\t\t<ul class=\"list-unstyled\">
              <li><a href=\"{{asset('#\" class=\"py-2 d-block')}}\">hhhhhhhhhhhhhhh</a></li>
              <li><a href=\"{{asset('#\" class=\"py-2 d-block')}}\">About</a></li>
              <li><a href=\"{{asset('#\" class=\"py-2 d-block')}}\">Services</a></li>
              <li><a href=\"{{asset('#\" class=\"py-2 d-block')}}\">Works</a></li>
              <li><a href=\"{{asset('#\" class=\"py-2 d-block')}}\">Blog</a></li>
              <li><a href=\"{{asset('#\" class=\"py-2 d-block')}}\">Contact</a></li>
            </ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 col-lg-3 mb-4 mb-md-0\">
\t\t\t\t\t\t<h2 class=\"footer-heading\">Have a Questions?</h2>
\t\t\t\t\t\t<div class=\"block-23 mb-3\">
              <ul>
                <li><span class=\"icon fa fa-map\"></span><span class=\"text\">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                <li><a href=\"{{asset('#')}}\"><span class=\"icon fa fa-phone\"></span><span class=\"text\">+2 392 3929 210</span></a></li>
                <li><a href=\"{{asset('#')}}\"><span class=\"icon fa fa-paper-plane\"></span><span class=\"text\">info@yourdomain.com</span></a></li>
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
</html>
", "base-front.html.twig", "C:\\Users\\Malik\\Desktop\\Nour3\\Animaland (2) (1)\\Animaland\\templates\\base-front.html.twig");
    }
}
