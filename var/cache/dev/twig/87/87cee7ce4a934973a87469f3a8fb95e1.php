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

/* boye/autres.html.twig */
class __TwigTemplate_18040e02f2353fcfa950aa45fa62deea extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "boye/autres.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "boye/autres.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "boye/autres.html.twig", 1);
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

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"mycontainer6\">
        <div class=\"imagesautres\">
            <img src=\"../img/autres.jpg\" width=\"100%\" height=\"100%\" style=\"border-radius: 140px;\">
        </div>
        <div class=\"item2_2\">
            <p style=\"color: white; padding: 15px; font-size:large; margin: bottom 40px;\"> Sur cette page je vous laisse découvrir mes passions pour 
                mieux me connaitre et ainsi confirmer l'idée que vous vous êtes fait de moi. C'est souvent lorsque je m'ennui ou que j'ai du temps libre que
                j'apprécie découvrir de nouvelles activités, raison pourlaquelle vous ne verez ici que quelques une de mes plus grandes passions pour lesquelles il est impossible
                de m'en lasser.
            ?</p>
        </div>      
    </div>
    <div class=\"boxautres\">
        <div class=\"itemautres\">
            <img src=\"../img/chess.jpg\"  width=\"100%\" height=\"60%\" style=\"border-radius: 10px;\">
            <h6 >
              <p style=\"color:rgb(204, 207, 206);\">
             Les jeux de stratégie et de réflexion ont toujours été pour moi un trés bon moyen de passer le temps, les échecs les jeux de carte
             à la sauce rpg (type yu-gi-oh), les batailles navales etc.., sont des moments que j'aime savourer entre deux lignes de bus ou durant une salle d'attente
              </p>
        </div>
        <div class=\"itemautres\">
            <img src=\"../img/telescop.jpg\"  width=\"100%\" height=\"60%\" style=\"border-radius: 10px;\">
            <h6 >
              <p style=\"color:rgb(204, 207, 206);\">
              L'espace, l'une des choses les plus fascinantes sur terre, le jour où j'ai découvert à quel point la terre n'est qu'un
              atome perdu dans un océan d'étoiles fut le debut des mes grand moments de réflexion contemplant le ciel, espérant trouver une réponse dans cette brume
              épaisse d'ombre que je risque fort malheureusement de ne jamais trouver.
              </p>
        </div>

        <div class=\"itemautres\">
            <img src=\"../img/sport.jpg\"  width=\"100%\" height=\"60%\" style=\"border-radius: 10px;\">
            <h6 >
              <p style=\"color:rgb(204, 207, 206);\">
             La gymnastique, s'essoufler aprés avoir bougé dans tous les sens pour ensuite boire un verre d'eau frais, rien de plus
             ressaisissant que le sport. Malheureusement j'ai tendace délaisser cette activité lorsque la vie m'impose son rythme de vie.
             Il n'est jamais trop tard pour se défouler un matin, avant de plonger l'esprit dans une activité plus réflexif.
              </p>
        </div>
        <div class=\"itemautres\">
            <img src=\"../img/gamemaking.jpg\"  width=\"100%\" height=\"60%\" style=\"border-radius: 10px;\">
            <h6 >
              <p style=\"color:rgb(204, 207, 206);\">
             Jouer aux jeux-vidéo c'est quelque chose, en créer s'en est une autre, tel est la leçon que j'ai appris lorsque j'ai décidé par curiosité
             de me lancer dans le monde du gamemaking. Détenir le fil du scénario, inventer de nouvelles mécanismes de gameplay, designer une palette de personnage et de 
             game design, il n'y rien de plus stimulant pour mon imagination aussi farfelue que le gamemaking
              </p>
        </div>

        <div class=\"itemautres\">
            <img src=\"../img/science.jpg\"  width=\"100%\" height=\"60%\" style=\"border-radius: 10px;\">
            <h6 >
              <p style=\"color:rgb(204, 207, 206);\">
              Ma relation avec la science à toujours été une relation trés compliqué, du fait de la complexité de cette derniére 
              mais au fil des ans j'ai fini par comprendre qu'aussi complexe qu'elle est, elle finit par nous apprendre tout un tas choses tous plus étonnantes les unes que les autres
              ( préférence pour la physique et la biologie), même si ça lui arrive parfois qu'elle dérive dans des exubérations au caractére douteux elle n'en reste pas moins très plaisante
              à suivre.
              </p>
        </div>
        <div class=\"itemautres\">
            <img src=\"../img/voyage.jpg\"  width=\"100%\" height=\"60%\" style=\"border-radius: 10px;\">
            <h6 >
              <p style=\"color:rgb(204, 207, 206);\">
             Le monde est magnifique et ce serait vraiment dommage de ne pas en profiter, faire le tour du monde découvrir tous les paysages
             que la terre recéle, il n'y a trés clairement rien de plus beau pour les yeux.
              </p>
        </div>


        <div class=\"itemautres\">
            <img src=\"../img/prog.webp\"  width=\"100%\" height=\"60%\" style=\"border-radius: 10px;\">
            <h6 >
              <p style=\"color:rgb(204, 207, 206);\">
              Les nouvelles technologies ont longtemps suscité un grand intérêt pour moi. Ainsi j'ai longtemps apprécié plusieur branches liés à ce domaine tel que 
              l'informatique, la mécanique, l'électronique etc.
              </p>
        </div>
        <div class=\"itemautres\">
            <img src=\"../img/read.jpg\"  width=\"100%\" height=\"60%\" style=\"border-radius: 10px;\">
            <h6 >
              <p style=\"color:rgb(204, 207, 206);\">
            Lire c'est un bon moyen pour se changer les idées ou rêvasser. Etre plongé dans un scénario imaginaire où on se sent à la place des personnages, comprendre les enjeux de l'intrigue ou la philosophie de vie qui se
            cache dérrière, tel est le début d'un grand récit fantastique.
              </p>
        </div>
    </div>       
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "boye/autres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello BoyeController!{% endblock %}

{% block body %}
    <div class=\"mycontainer6\">
        <div class=\"imagesautres\">
            <img src=\"../img/autres.jpg\" width=\"100%\" height=\"100%\" style=\"border-radius: 140px;\">
        </div>
        <div class=\"item2_2\">
            <p style=\"color: white; padding: 15px; font-size:large; margin: bottom 40px;\"> Sur cette page je vous laisse découvrir mes passions pour 
                mieux me connaitre et ainsi confirmer l'idée que vous vous êtes fait de moi. C'est souvent lorsque je m'ennui ou que j'ai du temps libre que
                j'apprécie découvrir de nouvelles activités, raison pourlaquelle vous ne verez ici que quelques une de mes plus grandes passions pour lesquelles il est impossible
                de m'en lasser.
            ?</p>
        </div>      
    </div>
    <div class=\"boxautres\">
        <div class=\"itemautres\">
            <img src=\"../img/chess.jpg\"  width=\"100%\" height=\"60%\" style=\"border-radius: 10px;\">
            <h6 >
              <p style=\"color:rgb(204, 207, 206);\">
             Les jeux de stratégie et de réflexion ont toujours été pour moi un trés bon moyen de passer le temps, les échecs les jeux de carte
             à la sauce rpg (type yu-gi-oh), les batailles navales etc.., sont des moments que j'aime savourer entre deux lignes de bus ou durant une salle d'attente
              </p>
        </div>
        <div class=\"itemautres\">
            <img src=\"../img/telescop.jpg\"  width=\"100%\" height=\"60%\" style=\"border-radius: 10px;\">
            <h6 >
              <p style=\"color:rgb(204, 207, 206);\">
              L'espace, l'une des choses les plus fascinantes sur terre, le jour où j'ai découvert à quel point la terre n'est qu'un
              atome perdu dans un océan d'étoiles fut le debut des mes grand moments de réflexion contemplant le ciel, espérant trouver une réponse dans cette brume
              épaisse d'ombre que je risque fort malheureusement de ne jamais trouver.
              </p>
        </div>

        <div class=\"itemautres\">
            <img src=\"../img/sport.jpg\"  width=\"100%\" height=\"60%\" style=\"border-radius: 10px;\">
            <h6 >
              <p style=\"color:rgb(204, 207, 206);\">
             La gymnastique, s'essoufler aprés avoir bougé dans tous les sens pour ensuite boire un verre d'eau frais, rien de plus
             ressaisissant que le sport. Malheureusement j'ai tendace délaisser cette activité lorsque la vie m'impose son rythme de vie.
             Il n'est jamais trop tard pour se défouler un matin, avant de plonger l'esprit dans une activité plus réflexif.
              </p>
        </div>
        <div class=\"itemautres\">
            <img src=\"../img/gamemaking.jpg\"  width=\"100%\" height=\"60%\" style=\"border-radius: 10px;\">
            <h6 >
              <p style=\"color:rgb(204, 207, 206);\">
             Jouer aux jeux-vidéo c'est quelque chose, en créer s'en est une autre, tel est la leçon que j'ai appris lorsque j'ai décidé par curiosité
             de me lancer dans le monde du gamemaking. Détenir le fil du scénario, inventer de nouvelles mécanismes de gameplay, designer une palette de personnage et de 
             game design, il n'y rien de plus stimulant pour mon imagination aussi farfelue que le gamemaking
              </p>
        </div>

        <div class=\"itemautres\">
            <img src=\"../img/science.jpg\"  width=\"100%\" height=\"60%\" style=\"border-radius: 10px;\">
            <h6 >
              <p style=\"color:rgb(204, 207, 206);\">
              Ma relation avec la science à toujours été une relation trés compliqué, du fait de la complexité de cette derniére 
              mais au fil des ans j'ai fini par comprendre qu'aussi complexe qu'elle est, elle finit par nous apprendre tout un tas choses tous plus étonnantes les unes que les autres
              ( préférence pour la physique et la biologie), même si ça lui arrive parfois qu'elle dérive dans des exubérations au caractére douteux elle n'en reste pas moins très plaisante
              à suivre.
              </p>
        </div>
        <div class=\"itemautres\">
            <img src=\"../img/voyage.jpg\"  width=\"100%\" height=\"60%\" style=\"border-radius: 10px;\">
            <h6 >
              <p style=\"color:rgb(204, 207, 206);\">
             Le monde est magnifique et ce serait vraiment dommage de ne pas en profiter, faire le tour du monde découvrir tous les paysages
             que la terre recéle, il n'y a trés clairement rien de plus beau pour les yeux.
              </p>
        </div>


        <div class=\"itemautres\">
            <img src=\"../img/prog.webp\"  width=\"100%\" height=\"60%\" style=\"border-radius: 10px;\">
            <h6 >
              <p style=\"color:rgb(204, 207, 206);\">
              Les nouvelles technologies ont longtemps suscité un grand intérêt pour moi. Ainsi j'ai longtemps apprécié plusieur branches liés à ce domaine tel que 
              l'informatique, la mécanique, l'électronique etc.
              </p>
        </div>
        <div class=\"itemautres\">
            <img src=\"../img/read.jpg\"  width=\"100%\" height=\"60%\" style=\"border-radius: 10px;\">
            <h6 >
              <p style=\"color:rgb(204, 207, 206);\">
            Lire c'est un bon moyen pour se changer les idées ou rêvasser. Etre plongé dans un scénario imaginaire où on se sent à la place des personnages, comprendre les enjeux de l'intrigue ou la philosophie de vie qui se
            cache dérrière, tel est le début d'un grand récit fantastique.
              </p>
        </div>
    </div>       
{% endblock %}
", "boye/autres.html.twig", "C:\\Users\\boyem\\OneDrive\\Documents\\GitHub\\ProjetSAE104\\templates\\boye\\autres.html.twig");
    }
}
