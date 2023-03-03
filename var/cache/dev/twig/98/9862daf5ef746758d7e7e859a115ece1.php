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

/* admin/account/index.html.twig */
class __TwigTemplate_98c4dcaf5dff0dbc83d37c432880fbe7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'title_h1' => [$this, 'block_title_h1'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/account/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/account/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/account/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Profil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_title_h1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title_h1"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title_h1"));

        echo "Mon profil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <div class=\"card border-left-info shadow h-100 py-2 my-4\">
        <div class=\"card-body\">
            <div class=\"d-flex align-items-center\">
                <h2 class=\"card-title text-uppercase text-info mb-0\"><i class=\"fas fa-user fa-x2 text-gray-500 mr-3\"></i>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()), "fullName", [], "any", false, false, false, 12), "html", null, true);
        echo "</h2>
                <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_account_edit");
        echo "\" class=\"btn btn-primary btn-icon-split ml-auto\">
                    <span class=\"icon text-white-50\">
                        <i class=\"far fa-edit\"></i>
                    </span>
                    <span class=\"text\">Modifier</span>
                </a>
            </div>
            <div class=\"row no-gutters align-items-center\">
                <div class=\"text-gray-400 mb-2\">
                    <small>Utilisateur inscrit depuis le ";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "createdAt", [], "any", false, false, false, 22), "d-m-Y"), "html", null, true);
        echo "</small>
                </div>
            </div>
            <hr class=\"sidebar-divider my-1\">
            <div class=\"py-3\">
                <div class=\"row no-gutters\">
                    <div class=\"d-flex flex-row align-items-center\">
                        <h5 class=\"text-secondary\">Email :</h5>
                        <p class=\"text-gray-500 mb-1 ml-3\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"row no-gutters\">
                    <div class=\"d-flex flex-row align-items-center\">
                        <h5 class=\"text-secondary\">Nom d'utilisateur :</h5>
                        <p class=\"text-gray-500 mb-1 ml-3\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "username", [], "any", false, false, false, 36), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"row no-gutters\">
                    <div class=\"d-flex flex-row align-items-center\">
                        <h5 class=\"text-secondary\">Rôle : </h5>
                        <p class=\"text-gray-500 mb-1 ml-3\">";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "roleTitle", [], "any", false, false, false, 42), "html", null, true);
        echo "</p>
                    </div>
                </div>
            </div>
            <hr class=\"sidebar-divider my-1\">
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/account/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 42,  150 => 36,  141 => 30,  130 => 22,  118 => 13,  114 => 12,  108 => 8,  98 => 7,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/layout.html.twig\" %}

{% block title \"Profil\" %}

{% block title_h1 \"Mon profil\" %}

{% block body %}

    <div class=\"card border-left-info shadow h-100 py-2 my-4\">
        <div class=\"card-body\">
            <div class=\"d-flex align-items-center\">
                <h2 class=\"card-title text-uppercase text-info mb-0\"><i class=\"fas fa-user fa-x2 text-gray-500 mr-3\"></i>{{ user.fullName }}</h2>
                <a href=\"{{ path(\"admin_account_edit\") }}\" class=\"btn btn-primary btn-icon-split ml-auto\">
                    <span class=\"icon text-white-50\">
                        <i class=\"far fa-edit\"></i>
                    </span>
                    <span class=\"text\">Modifier</span>
                </a>
            </div>
            <div class=\"row no-gutters align-items-center\">
                <div class=\"text-gray-400 mb-2\">
                    <small>Utilisateur inscrit depuis le {{ user.createdAt | date('d-m-Y') }}</small>
                </div>
            </div>
            <hr class=\"sidebar-divider my-1\">
            <div class=\"py-3\">
                <div class=\"row no-gutters\">
                    <div class=\"d-flex flex-row align-items-center\">
                        <h5 class=\"text-secondary\">Email :</h5>
                        <p class=\"text-gray-500 mb-1 ml-3\">{{ user.email }}</p>
                    </div>
                </div>
                <div class=\"row no-gutters\">
                    <div class=\"d-flex flex-row align-items-center\">
                        <h5 class=\"text-secondary\">Nom d'utilisateur :</h5>
                        <p class=\"text-gray-500 mb-1 ml-3\">{{ user.username }}</p>
                    </div>
                </div>
                <div class=\"row no-gutters\">
                    <div class=\"d-flex flex-row align-items-center\">
                        <h5 class=\"text-secondary\">Rôle : </h5>
                        <p class=\"text-gray-500 mb-1 ml-3\">{{ user.roleTitle }}</p>
                    </div>
                </div>
            </div>
            <hr class=\"sidebar-divider my-1\">
        </div>
    </div>

{% endblock %}
", "admin/account/index.html.twig", "C:\\Users\\Malik\\Desktop\\Nour3\\Animaland (2) (1)\\Animaland\\templates\\admin\\account\\index.html.twig");
    }
}
