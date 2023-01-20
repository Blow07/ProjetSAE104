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

/* boye/contact.html.twig */
class __TwigTemplate_f3ae21bc4d01005b6716b3f0ad9eb75a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "boye/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "boye/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "boye/contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "        
    ";
        
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
        echo "    <div class=\"mycontainer4\">
            
        
    </div>
        <form>
            <fieldset>
            <legend>Inscription</legend>
            <div class=\"form-group row\">
                <label for=\"staticEmail\" class=\"col-sm-2 col-form-label\">Email</label>
                <div class=\"col-sm-10\">
                <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticEmail\" value=\"email@example.com\">
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\" class=\"form-label mt-4\">Email address</label>
                <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\">
                <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputPassword1\" class=\"form-label mt-4\">Password</label>
                <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\">
            </div>
            <div class=\"form-group\">
                <label for=\"exampleSelect1\" class=\"form-label mt-4\">Vous êtes ?</label>
                <select class=\"form-select\" id=\"exampleSelect1\">
                <option>Recruteur</option>
                <option>Chef d'entreprise</option>
                <option>Client</option>
                <option>Autres</option>
                </select>
            </div>
            <div class=\"form-group\">
                <label for=\"exampleSelect2\" class=\"form-label mt-4\">Do you want to rate the website ?</label>
                <select multiple=\"\" class=\"form-select\" id=\"exampleSelect2\">
                <option>1 ☠️</option>
                <option>2 😨</option>
                <option>3 😊</option>
                <option>4 ✨</option>
                <option>5 😍</option>
                </select>
            </div>
            <div class=\"form-group\">
                <label for=\"exampleTextarea\" class=\"form-label mt-4\">You can write a comment down:</label>
                <textarea class=\"form-control\" id=\"exampleTextarea\" rows=\"3\"></textarea>
            </div>
            <div class=\"form-group\">
                <label for=\"formFile\" class=\"form-label mt-4\">Default file input example</label>
                <input class=\"form-control\" type=\"file\" id=\"formFile\">
            </div>
            <fieldset class=\"form-group\">
                <legend class=\"mt-4\">Gender</legend>
                <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                <label class=\"form-check-label\" for=\"optionsRadios1\">
                    Alpha male
                </label>
                </div>
                <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option2\">
                <label class=\"form-check-label\" for=\"optionsRadios2\">
                    Lady female
                </label>
                </div>
            </fieldset>
            <a href=\"../img/bg1.jpg\" download=\"bg1.jpg\"><button type=\"submit\" class=\"btn btn-primary\">Submit</button></a>
            </fieldset>
        </form>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "boye/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 8,  80 => 7,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
    {% block stylesheets %}
        
    {% endblock %}

    
{% block body %}
    <div class=\"mycontainer4\">
            
        
    </div>
        <form>
            <fieldset>
            <legend>Inscription</legend>
            <div class=\"form-group row\">
                <label for=\"staticEmail\" class=\"col-sm-2 col-form-label\">Email</label>
                <div class=\"col-sm-10\">
                <input type=\"text\" readonly=\"\" class=\"form-control-plaintext\" id=\"staticEmail\" value=\"email@example.com\">
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\" class=\"form-label mt-4\">Email address</label>
                <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\">
                <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputPassword1\" class=\"form-label mt-4\">Password</label>
                <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\">
            </div>
            <div class=\"form-group\">
                <label for=\"exampleSelect1\" class=\"form-label mt-4\">Vous êtes ?</label>
                <select class=\"form-select\" id=\"exampleSelect1\">
                <option>Recruteur</option>
                <option>Chef d'entreprise</option>
                <option>Client</option>
                <option>Autres</option>
                </select>
            </div>
            <div class=\"form-group\">
                <label for=\"exampleSelect2\" class=\"form-label mt-4\">Do you want to rate the website ?</label>
                <select multiple=\"\" class=\"form-select\" id=\"exampleSelect2\">
                <option>1 ☠️</option>
                <option>2 😨</option>
                <option>3 😊</option>
                <option>4 ✨</option>
                <option>5 😍</option>
                </select>
            </div>
            <div class=\"form-group\">
                <label for=\"exampleTextarea\" class=\"form-label mt-4\">You can write a comment down:</label>
                <textarea class=\"form-control\" id=\"exampleTextarea\" rows=\"3\"></textarea>
            </div>
            <div class=\"form-group\">
                <label for=\"formFile\" class=\"form-label mt-4\">Default file input example</label>
                <input class=\"form-control\" type=\"file\" id=\"formFile\">
            </div>
            <fieldset class=\"form-group\">
                <legend class=\"mt-4\">Gender</legend>
                <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                <label class=\"form-check-label\" for=\"optionsRadios1\">
                    Alpha male
                </label>
                </div>
                <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option2\">
                <label class=\"form-check-label\" for=\"optionsRadios2\">
                    Lady female
                </label>
                </div>
            </fieldset>
            <a href=\"../img/bg1.jpg\" download=\"bg1.jpg\"><button type=\"submit\" class=\"btn btn-primary\">Submit</button></a>
            </fieldset>
        </form>



{% endblock %}
", "boye/contact.html.twig", "C:\\Users\\boyem\\OneDrive\\Documents\\GitHub\\ProjetSAE104\\templates\\boye\\contact.html.twig");
    }
}
