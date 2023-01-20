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

/* boye/portfolio.html.twig */
class __TwigTemplate_fa2d29aa2a30f53c807adabc8370a5fe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "boye/portfolio.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "boye/portfolio.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "boye/portfolio.html.twig", 1);
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

        echo "Hello BoyeController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <style>
      body{ background: url(../img/18146.jpg);
      background-size: cover;}
    </style>
        
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "        <div class=\"mycontainer3\">
          <div class=\"competences\">
            <h1>
              <p style=\"text-align: center; font-family:cursive;color:black;font-size:larger\" ><u>COMPETENCES:</u></p>
            </h1>
          </div>
        
            
        
        </div><br><br>
        <div class=\"container1_uno\">
            <div class=\"itempt\">
              <img src=\"../img/img1.jpg\"  width=\"90%\" height=\"50%\" style=\"border-radius: 20px;\">
              <h6 >
              <p style=\"color:black;\">
                <p style=\"text-align: center;\"><u>Administrer</u></p>
                A l’ère du numérique, la gestion des réseaux informatiques ou de télécommunications, essentielle au 
                bon fonctionnement de l’entreprise, suppose de concevoir le réseau, le déployer, l’administrer et 
                le superviser. Le gestionnaire doit être réactif en cas d’incident et savoir communiquer avec les
                employés/clients pour comprendre et résoudre leurs problématiques.
              </p>
            </h6><br><br>
            </div>
            
            <div class=\"itempt\">
              <img src=\"../img/img2.jpg\" width=\"90%\" height=\"50%\" style=\"border-radius: 20px; margin-top:10px\">
              <h6 >
                <p style=\"color:black;\">
                <p style=\"text-align: center;\"><u>Programmer</u></p>
                L’administrateur de réseaux informatiques ou de télécommunications à un besoin grandissant de compétences en développement informatique. Il
                peut être amené à développer des applications spécifiques pour son réseau (par exemple, pour remonter et analyser des informations sur ses
                équipements, 
                            
              </p>
            </h6><br><br>
            </div>
        
            <div class=\"itempt\">
              <img src=\"../img/img3.jpg\" width=\"90%\" height=\"50%\" style=\"border-radius: 20px; margin-top:10px\">
              <h6 >
                <p style=\"color:black;\">
                <p style=\"text-align: center;\"><u>Connecter</u></p>
                Les réseaux informatiques ou de télécommunications s’appuient sur des infrastructures de transmission pour l’acheminement des données entre les
                différents équipements du réseau. L’installation et l’administration de ces infrastructures demandent de bonnes connaissances dans certains
                domaines de la physique, du traitement du signal et des communications numériques. 
             
              </p>
              </h6>
            </div>
          </div><br><br>
          <div class=\"myyrow\">
            <img src=\"../img/img1.jpg\" width=\"400px\" height=\"285px\" style=\"border-radius: 20px;float:left\">
            <p class=\"classfortext\">
        Après une dite désastreuse à la Coupe du monde 2018, l'équipe de foot du Japon peine à se ressaisir. Que leur 
        a-t-il manqué ? Peut-être un attaquant hors pair pouvant les guider vers la victoire. L'union japonaise de 
        football s'acharne à trouver quelqu’un ayant faim de buts et soif de victoire, une personne à l’individualisme 
        assumé capable de faire basculer un match qui a mal démarré. Pour cela, elle a rassemblé 300 des plus brillants 
        jeunes joueurs du Japon. Qui émergera pour diriger l'équipe ? Sera-t-il capable de surpasser en force et en 
        caractère tous ceux qui se dressent sur son chemin ?Après une dite désastreuse à la Coupe du monde 2018, l'équipe de foot du Japon peine à se ressaisir. Que leur 
        a-t-il manqué ? Peut-être un attaquant hors pair pouvant les guider vers la victoire. L'union japonaise de 
        football s'acharne à trouver quelqu’un ayant faim de buts et soif de victoire, une personne à l’individualisme 
        assumé capable de faire basculer un match qui a mal démarré. Pour cela, elle a rassemblé 300 des plus brillants 
        jeunes joueurs du Japon. Qui émergera pour diriger l'équipe ? Sera-t-il capable de surpasser en force et en 
        caractère tous ceux qui se dressent sur
        </p>
          </div>
          <div class=\"myyrow\" style=\"position:relative; bottom:00px;\">
            <img src=\"../img/img2.jpg\" width=\"400px\" height=\"285px\" style=\"border-radius: 20px;float:left\">
            <p class=\"classfortext\">
        Après une dite désastreuse à la Coupe du monde 2018, l'équipe de foot du Japon peine à se ressaisir. Que leur 
        a-t-il manqué ? Peut-être un attaquant hors pair pouvant les guider vers la victoire. L'union japonaise de 
        football s'acharne à trouver quelqu’un ayant faim de buts et soif de victoire, une personne à l’individualisme 
        assumé capable de faire basculer un match qui a mal démarré. Pour cela, elle a rassemblé 300 des plus brillants 
        jeunes joueurs du Japon. Qui émergera pour diriger l'équipe ? Sera-t-il capable de surpasser en force et en 
        caractère tous ceux qui se dressent sur son chemin ?Après une dite désastreuse à la Coupe du monde 2018, l'équipe de foot du Japon peine à se ressaisir. Que leur 
        a-t-il manqué ? Peut-être un attaquant hors pair pouvant les guider vers la victoire. L'union japonaise de 
        football s'acharne à trouver quelqu’un ayant faim de buts et soif de victoire, une personne à l’individualisme 
        assumé capable de faire basculer un match qui a mal démarré. Pour cela, elle a rassemblé 300 des plus brillants 
        jeunes joueurs du Japon. Qui émergera pour diriger l'équipe ? Sera-t-il capable de surpasser en force et en 
        caractère tous ceux qui se dressent sur
        </p>
          </div>
          <div class=\"myyrow\" style=\"position:relative; bottom:00px;\">
            <img src=\"../img/img3.jpg\" width=\"400px\" height=\"285px\" style=\"border-radius: 20px;float:left\">
            <p class=\"classfortext\">
        Après une dite désastreuse à la Coupe du monde 2018, l'équipe de foot du Japon peine à se ressaisir. Que leur 
        a-t-il manqué ? Peut-être un attaquant hors pair pouvant les guider vers la victoire. L'union japonaise de 
        football s'acharne à trouver quelqu’un ayant faim de buts et soif de victoire, une personne à l’individualisme 
        assumé capable de faire basculer un match qui a mal démarré. Pour cela, elle a rassemblé 300 des plus brillants 
        jeunes joueurs du Japon. Qui émergera pour diriger l'équipe ? Sera-t-il capable de surpasser en force et en 
        caractère tous ceux qui se dressent sur son chemin ?Après une dite désastreuse à la Coupe du monde 2018, l'équipe de foot du Japon peine à se ressaisir. Que leur 
        a-t-il manqué ? Peut-être un attaquant hors pair pouvant les guider vers la victoire. L'union japonaise de 
        football s'acharne à trouver quelqu’un ayant faim de buts et soif de victoire, une personne à l’individualisme 
        assumé capable de faire basculer un match qui a mal démarré. Pour cela, elle a rassemblé 300 des plus brillants 
        jeunes joueurs du Japon. Qui émergera pour diriger l'équipe ? Sera-t-il capable de surpasser en force et en 
        caractère tous ceux qui se dressent sur
        </p>
          </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "boye/portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 14,  104 => 13,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello BoyeController!{% endblock %}
  {% block stylesheets %}
    <style>
      body{ background: url(../img/18146.jpg);
      background-size: cover;}
    </style>
        
  {% endblock %}
  

    {% block body %}
        <div class=\"mycontainer3\">
          <div class=\"competences\">
            <h1>
              <p style=\"text-align: center; font-family:cursive;color:black;font-size:larger\" ><u>COMPETENCES:</u></p>
            </h1>
          </div>
        
            
        
        </div><br><br>
        <div class=\"container1_uno\">
            <div class=\"itempt\">
              <img src=\"../img/img1.jpg\"  width=\"90%\" height=\"50%\" style=\"border-radius: 20px;\">
              <h6 >
              <p style=\"color:black;\">
                <p style=\"text-align: center;\"><u>Administrer</u></p>
                A l’ère du numérique, la gestion des réseaux informatiques ou de télécommunications, essentielle au 
                bon fonctionnement de l’entreprise, suppose de concevoir le réseau, le déployer, l’administrer et 
                le superviser. Le gestionnaire doit être réactif en cas d’incident et savoir communiquer avec les
                employés/clients pour comprendre et résoudre leurs problématiques.
              </p>
            </h6><br><br>
            </div>
            
            <div class=\"itempt\">
              <img src=\"../img/img2.jpg\" width=\"90%\" height=\"50%\" style=\"border-radius: 20px; margin-top:10px\">
              <h6 >
                <p style=\"color:black;\">
                <p style=\"text-align: center;\"><u>Programmer</u></p>
                L’administrateur de réseaux informatiques ou de télécommunications à un besoin grandissant de compétences en développement informatique. Il
                peut être amené à développer des applications spécifiques pour son réseau (par exemple, pour remonter et analyser des informations sur ses
                équipements, 
                            
              </p>
            </h6><br><br>
            </div>
        
            <div class=\"itempt\">
              <img src=\"../img/img3.jpg\" width=\"90%\" height=\"50%\" style=\"border-radius: 20px; margin-top:10px\">
              <h6 >
                <p style=\"color:black;\">
                <p style=\"text-align: center;\"><u>Connecter</u></p>
                Les réseaux informatiques ou de télécommunications s’appuient sur des infrastructures de transmission pour l’acheminement des données entre les
                différents équipements du réseau. L’installation et l’administration de ces infrastructures demandent de bonnes connaissances dans certains
                domaines de la physique, du traitement du signal et des communications numériques. 
             
              </p>
              </h6>
            </div>
          </div><br><br>
          <div class=\"myyrow\">
            <img src=\"../img/img1.jpg\" width=\"400px\" height=\"285px\" style=\"border-radius: 20px;float:left\">
            <p class=\"classfortext\">
        Après une dite désastreuse à la Coupe du monde 2018, l'équipe de foot du Japon peine à se ressaisir. Que leur 
        a-t-il manqué ? Peut-être un attaquant hors pair pouvant les guider vers la victoire. L'union japonaise de 
        football s'acharne à trouver quelqu’un ayant faim de buts et soif de victoire, une personne à l’individualisme 
        assumé capable de faire basculer un match qui a mal démarré. Pour cela, elle a rassemblé 300 des plus brillants 
        jeunes joueurs du Japon. Qui émergera pour diriger l'équipe ? Sera-t-il capable de surpasser en force et en 
        caractère tous ceux qui se dressent sur son chemin ?Après une dite désastreuse à la Coupe du monde 2018, l'équipe de foot du Japon peine à se ressaisir. Que leur 
        a-t-il manqué ? Peut-être un attaquant hors pair pouvant les guider vers la victoire. L'union japonaise de 
        football s'acharne à trouver quelqu’un ayant faim de buts et soif de victoire, une personne à l’individualisme 
        assumé capable de faire basculer un match qui a mal démarré. Pour cela, elle a rassemblé 300 des plus brillants 
        jeunes joueurs du Japon. Qui émergera pour diriger l'équipe ? Sera-t-il capable de surpasser en force et en 
        caractère tous ceux qui se dressent sur
        </p>
          </div>
          <div class=\"myyrow\" style=\"position:relative; bottom:00px;\">
            <img src=\"../img/img2.jpg\" width=\"400px\" height=\"285px\" style=\"border-radius: 20px;float:left\">
            <p class=\"classfortext\">
        Après une dite désastreuse à la Coupe du monde 2018, l'équipe de foot du Japon peine à se ressaisir. Que leur 
        a-t-il manqué ? Peut-être un attaquant hors pair pouvant les guider vers la victoire. L'union japonaise de 
        football s'acharne à trouver quelqu’un ayant faim de buts et soif de victoire, une personne à l’individualisme 
        assumé capable de faire basculer un match qui a mal démarré. Pour cela, elle a rassemblé 300 des plus brillants 
        jeunes joueurs du Japon. Qui émergera pour diriger l'équipe ? Sera-t-il capable de surpasser en force et en 
        caractère tous ceux qui se dressent sur son chemin ?Après une dite désastreuse à la Coupe du monde 2018, l'équipe de foot du Japon peine à se ressaisir. Que leur 
        a-t-il manqué ? Peut-être un attaquant hors pair pouvant les guider vers la victoire. L'union japonaise de 
        football s'acharne à trouver quelqu’un ayant faim de buts et soif de victoire, une personne à l’individualisme 
        assumé capable de faire basculer un match qui a mal démarré. Pour cela, elle a rassemblé 300 des plus brillants 
        jeunes joueurs du Japon. Qui émergera pour diriger l'équipe ? Sera-t-il capable de surpasser en force et en 
        caractère tous ceux qui se dressent sur
        </p>
          </div>
          <div class=\"myyrow\" style=\"position:relative; bottom:00px;\">
            <img src=\"../img/img3.jpg\" width=\"400px\" height=\"285px\" style=\"border-radius: 20px;float:left\">
            <p class=\"classfortext\">
        Après une dite désastreuse à la Coupe du monde 2018, l'équipe de foot du Japon peine à se ressaisir. Que leur 
        a-t-il manqué ? Peut-être un attaquant hors pair pouvant les guider vers la victoire. L'union japonaise de 
        football s'acharne à trouver quelqu’un ayant faim de buts et soif de victoire, une personne à l’individualisme 
        assumé capable de faire basculer un match qui a mal démarré. Pour cela, elle a rassemblé 300 des plus brillants 
        jeunes joueurs du Japon. Qui émergera pour diriger l'équipe ? Sera-t-il capable de surpasser en force et en 
        caractère tous ceux qui se dressent sur son chemin ?Après une dite désastreuse à la Coupe du monde 2018, l'équipe de foot du Japon peine à se ressaisir. Que leur 
        a-t-il manqué ? Peut-être un attaquant hors pair pouvant les guider vers la victoire. L'union japonaise de 
        football s'acharne à trouver quelqu’un ayant faim de buts et soif de victoire, une personne à l’individualisme 
        assumé capable de faire basculer un match qui a mal démarré. Pour cela, elle a rassemblé 300 des plus brillants 
        jeunes joueurs du Japon. Qui émergera pour diriger l'équipe ? Sera-t-il capable de surpasser en force et en 
        caractère tous ceux qui se dressent sur
        </p>
          </div>
    {% endblock %}", "boye/portfolio.html.twig", "C:\\Users\\boyem\\OneDrive\\Documents\\GitHub\\ProjetSAE104\\templates\\boye\\portfolio.html.twig");
    }
}
