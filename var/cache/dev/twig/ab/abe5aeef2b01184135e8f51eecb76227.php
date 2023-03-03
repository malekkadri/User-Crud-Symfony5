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

/* admin/partials/topbar.html.twig */
class __TwigTemplate_14a87f904a0c2f50e2be253a3b87b726 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/partials/topbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/partials/topbar.html.twig"));

        // line 1
        echo "<!-- Topbar -->
<nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow topbar\">

    <!-- Sidebar Toggle (Topbar) -->
    <button class=\"btn btn-link d-md-none rounded-circle mr-3\" id=\"sidebarToggleTop\">
        <i class=\"fa fa-bars\"></i>
    </button>

    ";
        // line 10
        echo "                                                            ";
        // line 11
        echo "    ";
        // line 12
        echo "
        ";
        // line 23
        echo "
    ";
        // line 25
        echo "
    <ul class=\"navbar-nav ml-auto\">

        ";
        // line 29
        echo "                                                        ";
        // line 30
        echo "        ";
        // line 31
        echo "
        ";
        // line 50
        echo "
        ";
        // line 52
        echo "
        ";
        // line 54
        echo "                                                        ";
        // line 55
        echo "        ";
        // line 56
        echo "         
            ";
        // line 103
        echo "
        ";
        // line 105
        echo "
        ";
        // line 107
        echo "                                                        ";
        // line 108
        echo "        ";
        // line 109
        echo "        
            ";
        // line 163
        echo "
        ";
        // line 165
        echo "
        <div class=\"topbar-divider d-none d-sm-block\"></div>

        <!-- Nav Item - User Information -->
        <li class=\"nav-item dropdown no-arrow\">
            <a aria-expanded=\"false\" aria-haspopup=\"true\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"userDropdown\" role=\"button\">
                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\"><i class=\"far fa-user text-primary mr-2 fa-2x \"></i>";
        // line 171
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 171, $this->source); })()), "user", [], "any", false, false, false, 171), "fullName", [], "any", false, false, false, 171), "html", null, true);
        echo "</span>
                ";
        // line 173
        echo "            </a>
            <!-- Dropdown - User Information -->
            <div aria-labelledby=\"userDropdown\" class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\">
                <a class=\"dropdown-item\" href=\"";
        // line 176
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_account_index");
        echo "\">
                    <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Profil
                </a>
                <a class=\"dropdown-item\" href=\"";
        // line 180
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_parameter_index");
        echo "\">
                    <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Paramètres
                </a>
                ";
        // line 188
        echo "                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" data-target=\"#logoutModal\" data-toggle=\"modal\" href=\"#\">
                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Déconnexion
                </a>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/partials/topbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 188,  128 => 180,  121 => 176,  116 => 173,  112 => 171,  104 => 165,  101 => 163,  98 => 109,  96 => 108,  94 => 107,  91 => 105,  88 => 103,  85 => 56,  83 => 55,  81 => 54,  78 => 52,  75 => 50,  72 => 31,  70 => 30,  68 => 29,  63 => 25,  60 => 23,  57 => 12,  55 => 11,  53 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Topbar -->
<nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow topbar\">

    <!-- Sidebar Toggle (Topbar) -->
    <button class=\"btn btn-link d-md-none rounded-circle mr-3\" id=\"sidebarToggleTop\">
        <i class=\"fa fa-bars\"></i>
    </button>

    {# ------------------------------------------------------------------------------------------------------------------------------------------- #}
                                                            {# SEARCH BAR #}
    {# ------------------------------------------------------------------------------------------------------------------------------------------- #}

        {# <form class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
            <div class=\"input-group\">
                <input aria-describedby=\"basic-addon2\" aria-label=\"Search\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" type=\"text\">
                <div class=\"input-group-append\">
                    <button class=\"btn btn-primary\" type=\"button\">
                        <i class=\"fas fa-search fa-sm\"></i>
                    </button>
                </div>
            </div>
        </form> #}

    {# ------------------------------------------------------------------------------------------------------------------------------------------- #}

    <ul class=\"navbar-nav ml-auto\">

        {# ------------------------------------------------------------------------------------------------------------------------------------------- #}
                                                        {# SEARCH BAR FOR MOBILE #}
        {# ------------------------------------------------------------------------------------------------------------------------------------------- #}

        {# <li class=\"nav-item dropdown no-arrow d-sm-none\">
            <a aria-expanded=\"false\" aria-haspopup=\"true\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"searchDropdown\" role=\"button\">
                <i class=\"fas fa-search fa-fw\"></i>
            </a>

            <div aria-labelledby=\"searchDropdown\" class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\">
                <form class=\"form-inline mr-auto w-100 navbar-search\">
                    <div class=\"input-group\">
                        <input aria-describedby=\"basic-addon2\" aria-label=\"Search\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" type=\"text\">
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-primary\" type=\"button\">
                                <i class=\"fas fa-search fa-sm\"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li> #}

        {# ------------------------------------------------------------------------------------------------------------------------------------------- #}

        {# ------------------------------------------------------------------------------------------------------------------------------------------- #}
                                                        {# NOTIFICATIONS #}
        {# ------------------------------------------------------------------------------------------------------------------------------------------- #}
         
            {# <li class=\"nav-item dropdown no-arrow mx-1\">
                <a aria-expanded=\"false\" aria-haspopup=\"true\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"alertsDropdown\" role=\"button\">
                    <i class=\"fas fa-bell fa-fw\"></i>
                    <span class=\"badge badge-danger badge-counter\">3+</span>
                </a>

                <div aria-labelledby=\"alertsDropdown\" class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\">
                    <h6 class=\"dropdown-header\">
                        Alerts Center
                    </h6>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                        <div class=\"mr-3\">
                            <div class=\"icon-circle bg-primary\">
                                <i class=\"fas fa-file-alt text-white\"></i>
                            </div>
                        </div>
                        <div>
                            <div class=\"small text-gray-500\">December 12, 2019</div>
                            <span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
                        </div>
                    </a>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                        <div class=\"mr-3\">
                            <div class=\"icon-circle bg-success\">
                                <i class=\"fas fa-donate text-white\"></i>
                            </div>
                        </div>
                        <div>
                            <div class=\"small text-gray-500\">December 7, 2019</div>
                            \$290.29 has been deposited into your account!
                        </div>
                    </a>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                        <div class=\"mr-3\">
                            <div class=\"icon-circle bg-warning\">
                                <i class=\"fas fa-exclamation-triangle text-white\"></i>
                            </div>
                        </div>
                        <div>
                            <div class=\"small text-gray-500\">December 2, 2019</div>
                            Spending Alert: We've noticed unusually high spending for your account.
                        </div>
                    </a>
                    <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
                </div>
            </li> #}

        {# ------------------------------------------------------------------------------------------------------------------------------------------- #}

        {# ------------------------------------------------------------------------------------------------------------------------------------------- #}
                                                        {# MESSAGES #}
        {# ------------------------------------------------------------------------------------------------------------------------------------------- #}
        
            {# <li class=\"nav-item dropdown no-arrow mx-1\">
                <a aria-expanded=\"false\" aria-haspopup=\"true\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"messagesDropdown\" role=\"button\">
                    <i class=\"fas fa-envelope fa-fw\"></i>
                    <span class=\"badge badge-danger badge-counter\">7</span>
                </a>
                
                <div aria-labelledby=\"messagesDropdown\" class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\">
                    <h6 class=\"dropdown-header\">
                        Message Center
                    </h6>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                        <div class=\"dropdown-list-image mr-3\">
                            <img alt=\"\" class=\"rounded-circle\" src=\"https://source.unsplash.com/fn_BT9fwg_E/60x60\">
                            <div class=\"status-indicator bg-success\"></div>
                        </div>
                        <div class=\"font-weight-bold\">
                            <div class=\"text-truncate\">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                            <div class=\"small text-gray-500\">Emily Fowler · 58m</div>
                        </div>
                    </a>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                        <div class=\"dropdown-list-image mr-3\">
                            <img alt=\"\" class=\"rounded-circle\" src=\"https://source.unsplash.com/AU4VPcFN4LE/60x60\">
                            <div class=\"status-indicator\"></div>
                        </div>
                        <div>
                            <div class=\"text-truncate\">I have the photos that you ordered last month, how would you like them sent to you?</div>
                            <div class=\"small text-gray-500\">Jae Chun · 1d</div>
                        </div>
                    </a>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                        <div class=\"dropdown-list-image mr-3\">
                            <img alt=\"\" class=\"rounded-circle\" src=\"https://source.unsplash.com/CS2uCrpNzJY/60x60\">
                            <div class=\"status-indicator bg-warning\"></div>
                        </div>
                        <div>
                            <div class=\"text-truncate\">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                            <div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
                        </div>
                    </a>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                        <div class=\"dropdown-list-image mr-3\">
                            <img alt=\"\" class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\">
                            <div class=\"status-indicator bg-success\"></div>
                        </div>
                        <div>
                            <div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                            <div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
                        </div>
                    </a>
                    <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
                </div>
            </li> #}

        {# ------------------------------------------------------------------------------------------------------------------------------------------- #}

        <div class=\"topbar-divider d-none d-sm-block\"></div>

        <!-- Nav Item - User Information -->
        <li class=\"nav-item dropdown no-arrow\">
            <a aria-expanded=\"false\" aria-haspopup=\"true\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"userDropdown\" role=\"button\">
                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\"><i class=\"far fa-user text-primary mr-2 fa-2x \"></i>{{ app.user.fullName }}</span>
                {# <img class=\"img-profile rounded-circle\" src=\"https://source.unsplash.com/QAB-WJcbgJk/60x60\"> #}
            </a>
            <!-- Dropdown - User Information -->
            <div aria-labelledby=\"userDropdown\" class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\">
                <a class=\"dropdown-item\" href=\"{{ path('admin_account_index') }}\">
                    <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Profil
                </a>
                <a class=\"dropdown-item\" href=\"{{ path('admin_parameter_index') }}\">
                    <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Paramètres
                </a>
                {# <a class=\"dropdown-item\" href=\"#\">
                    <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Activity Log
                </a> #}
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" data-target=\"#logoutModal\" data-toggle=\"modal\" href=\"#\">
                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Déconnexion
                </a>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->
", "admin/partials/topbar.html.twig", "C:\\Users\\Malik\\Desktop\\Nour3\\Animaland (2) (1)\\Animaland\\templates\\admin\\partials\\topbar.html.twig");
    }
}
