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
class __TwigTemplate_7ca8629ec0503e7c4c85c04e621e99a6 extends Template
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

        <div class=\"demo\">
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
            </div>
            <div class=\"demo2\">
  <p> 1zcgjLWUO9VpIO2hMOdB4GrREoz06rGfQVB40JpLBZiM 1zcgjLWUO9VpIO2hMOdB4GrREoz06rGfQVB40JpLBZiM 1zcgjLWUO9VpIO2hMOdB4GrREoz06rGfQVB40JpLBZiM
            </div>

            
          </div><br><br>
          <div class=\"myyrow\">
            <img src=\"../img/img1.jpg\" width=\"400px\" height=\"285px\" style=\"border-radius: 20px;float:left\">
            <p class=\"classfortext\">
               ♠️Maitrise des lois fondamentales de l'électricité<br>
                <a href=\"https://docs.google.com/document/d/1y2RZ8yZWK9fb60Am3_QNAXMy9ipH-o-hRsC0v89CssQ/edit?usp=sharing\t\t
                \">Link</a><br>
                ♠️Connaissance sur l'architecture des réseaux<br>
                <a href=\"https://docs.google.com/document/d/1MyL-yEZJfNQ5KApFMrUmZe03_PTNgXBrXcqOnp252C4/edit?usp=sharing\">Link<br></a>
                ♠️Maitrise des équipements actifs et réseaux locaux<br>
                <a href=\"https://docs.google.com/document/d/1y2RZ8yZWK9fb60Am3_QNAXMy9ipH-o-hRsC0v89CssQ/edit?usp=sharing\t\t
                \">Link<br></a>
                ♠️Maitrise du shell linux<br>
                <a href=\"https://docs.google.com/document/d/1zcgjLWUO9VpIO2hMOdB4GrREoz06rGfQVB40JpLBZiM/edit?usp=sharing\">Link<br></a>
                ♠️Bases de la cybersécurité<br>
                <a href=\"https://docs.google.com/document/d/12Ow8PWFEYa93-also0WP6FzBbhWcNE6PbZvk04s2V5Q/edit?usp=sharing\">Link<br></a>
               </ul>

              
        </p>
          </div>
          <div class=\"myyrow\" style=\"position:relative; bottom:00px;\">
            <img src=\"../img/img2.jpg\" width=\"400px\" height=\"285px\" style=\"border-radius: 20px;float:left\">
            <p class=\"classfortext\">
                ♠️Utiliser un systéme informatique et ses outils<br>
                <a href=\"https://docs.google.com/document/d/1j0i96nnbllPQ3ZIsUrhieM2VWG8O_YYinuoqWAyvQb0/edit?usp=sharing
                \">Link<br></a>
                ♠️Lire exécuter corriger et modifier un programme<br>
                <a href=\"https://docs.google.com/document/d/1FENjp9Z6Y0tlp77njlSnPV1qNhGMT3krobbMqcrXe7k/edit?usp=sharing
                \">Link<br></a>
                ♠️Traduire un algo dans un langage<br>
                <a href=\"https://docs.google.com/document/d/1PqCn5Kk2M7v_uzazzglqR4Wsp0TeDw-S9qBV_DkE1bc/edit?usp=sharing
                \">Link<br></a>
                ♠️Connaitre l'architecture et les structures d'un site web<br>
                <a href=\"https://docs.google.com/document/d/16CyNknszFKr18MOzmpzdMQZHoUoXEQ5Q0qyX-iv675c/edit?usp=sharing
                \">Link<br></a>
                

           </p>
          </div>
          <div class=\"myyrow\" style=\"position:relative; bottom:00px;\">
            <img src=\"../img/img3.jpg\" width=\"400px\" height=\"285px\" style=\"border-radius: 20px;float:left\">
            <p class=\"classfortext\">
              ♠️Mesures et analyses des signaux<br>
              <a href=\"https://docs.google.com/document/d/1y2RZ8yZWK9fb60Am3_QNAXMy9ipH-o-hRsC0v89CssQ/edit?usp=sharing\t
              \">Link<br></a>
              ♠️Modélisation mathématiques des signaux<br>
              <a href=\"https://docs.google.com/document/d/1EIWsgFqq4S8Jc9Pl4Ak6_qfbL_41l6U_J8UVDMLgAes/edit?usp=sharing\t
              \">Link<br></a>
              ♠️Déploiment des supports de transmission<br>
              <a href=\"https://docs.google.com/presentation/d/14UsMctdRiNm6lVGsiEYXUoj52O-Wu21n/edit?usp=sharing&ouid=100120394796123226328&rtpof=true&sd=true\t\t
              \">Link<br></a>
              ♠️Communiquer avec un client ou un colloborateur<br>
              

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

        <div class=\"demo\">
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
            </div>
            <div class=\"demo2\">
  <p> 1zcgjLWUO9VpIO2hMOdB4GrREoz06rGfQVB40JpLBZiM 1zcgjLWUO9VpIO2hMOdB4GrREoz06rGfQVB40JpLBZiM 1zcgjLWUO9VpIO2hMOdB4GrREoz06rGfQVB40JpLBZiM
            </div>

            
          </div><br><br>
          <div class=\"myyrow\">
            <img src=\"../img/img1.jpg\" width=\"400px\" height=\"285px\" style=\"border-radius: 20px;float:left\">
            <p class=\"classfortext\">
               ♠️Maitrise des lois fondamentales de l'électricité<br>
                <a href=\"https://docs.google.com/document/d/1y2RZ8yZWK9fb60Am3_QNAXMy9ipH-o-hRsC0v89CssQ/edit?usp=sharing\t\t
                \">Link</a><br>
                ♠️Connaissance sur l'architecture des réseaux<br>
                <a href=\"https://docs.google.com/document/d/1MyL-yEZJfNQ5KApFMrUmZe03_PTNgXBrXcqOnp252C4/edit?usp=sharing\">Link<br></a>
                ♠️Maitrise des équipements actifs et réseaux locaux<br>
                <a href=\"https://docs.google.com/document/d/1y2RZ8yZWK9fb60Am3_QNAXMy9ipH-o-hRsC0v89CssQ/edit?usp=sharing\t\t
                \">Link<br></a>
                ♠️Maitrise du shell linux<br>
                <a href=\"https://docs.google.com/document/d/1zcgjLWUO9VpIO2hMOdB4GrREoz06rGfQVB40JpLBZiM/edit?usp=sharing\">Link<br></a>
                ♠️Bases de la cybersécurité<br>
                <a href=\"https://docs.google.com/document/d/12Ow8PWFEYa93-also0WP6FzBbhWcNE6PbZvk04s2V5Q/edit?usp=sharing\">Link<br></a>
               </ul>

              
        </p>
          </div>
          <div class=\"myyrow\" style=\"position:relative; bottom:00px;\">
            <img src=\"../img/img2.jpg\" width=\"400px\" height=\"285px\" style=\"border-radius: 20px;float:left\">
            <p class=\"classfortext\">
                ♠️Utiliser un systéme informatique et ses outils<br>
                <a href=\"https://docs.google.com/document/d/1j0i96nnbllPQ3ZIsUrhieM2VWG8O_YYinuoqWAyvQb0/edit?usp=sharing
                \">Link<br></a>
                ♠️Lire exécuter corriger et modifier un programme<br>
                <a href=\"https://docs.google.com/document/d/1FENjp9Z6Y0tlp77njlSnPV1qNhGMT3krobbMqcrXe7k/edit?usp=sharing
                \">Link<br></a>
                ♠️Traduire un algo dans un langage<br>
                <a href=\"https://docs.google.com/document/d/1PqCn5Kk2M7v_uzazzglqR4Wsp0TeDw-S9qBV_DkE1bc/edit?usp=sharing
                \">Link<br></a>
                ♠️Connaitre l'architecture et les structures d'un site web<br>
                <a href=\"https://docs.google.com/document/d/16CyNknszFKr18MOzmpzdMQZHoUoXEQ5Q0qyX-iv675c/edit?usp=sharing
                \">Link<br></a>
                

           </p>
          </div>
          <div class=\"myyrow\" style=\"position:relative; bottom:00px;\">
            <img src=\"../img/img3.jpg\" width=\"400px\" height=\"285px\" style=\"border-radius: 20px;float:left\">
            <p class=\"classfortext\">
              ♠️Mesures et analyses des signaux<br>
              <a href=\"https://docs.google.com/document/d/1y2RZ8yZWK9fb60Am3_QNAXMy9ipH-o-hRsC0v89CssQ/edit?usp=sharing\t
              \">Link<br></a>
              ♠️Modélisation mathématiques des signaux<br>
              <a href=\"https://docs.google.com/document/d/1EIWsgFqq4S8Jc9Pl4Ak6_qfbL_41l6U_J8UVDMLgAes/edit?usp=sharing\t
              \">Link<br></a>
              ♠️Déploiment des supports de transmission<br>
              <a href=\"https://docs.google.com/presentation/d/14UsMctdRiNm6lVGsiEYXUoj52O-Wu21n/edit?usp=sharing&ouid=100120394796123226328&rtpof=true&sd=true\t\t
              \">Link<br></a>
              ♠️Communiquer avec un client ou un colloborateur<br>
              

        </p>
          </div>
    {% endblock %}", "boye/portfolio.html.twig", "C:\\Users\\admin\\ProjetSAE104\\templates\\boye\\portfolio.html.twig");
    }
}
