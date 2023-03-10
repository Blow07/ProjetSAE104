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
            <p style=\"color: white; padding: 15px; font-size:large; margin: bottom 40px;\"> Sur cette page je vous laisse d??couvrir mes passions pour 
                mieux me connaitre et ainsi confirmer l'id??e que vous vous ??tes fait de moi. C'est souvent lorsque je m'ennui ou que j'ai du temps libre que
                j'appr??cie d??couvrir de nouvelles activit??s, raison pourlaquelle vous ne verez ici que quelques une de mes plus grandes passions pour lesquelles il est impossible
                de m'en lasser.
            ?</p>
        </div>      
    </div>
    <div class=\"boxautres\">
        <div class=\"itemautres\">
            <img src=\"../img/chess.jpg\"  width=\"100%\" height=\"60%\" style=\"border-radius: 10px;\">
            <h6 >
              <p style=\"color:rgb(204, 207, 206);\">
             Les jeux de strat??gie et de r??flexion ont toujours ??t?? pour moi un tr??s bon moyen de passer le temps, les ??checs les jeux de carte
             ?? la sauce rpg (type yu-gi-oh), les batailles navales etc.., sont des moments que j'aime savourer entre deux lignes de bus ou durant une salle d'attente
              </p>
        </div>
        <div class=\"itemautres\">
            <img src=\"../img/telescop.jpg\"  width=\"100%\" height=\"60%\" style=\"border-radius: 10px;\">
            <h6 >
              <p style=\"color:rgb(204, 207, 206);\">
              L'espace, l'une des choses les plus fascinantes sur terre, le jour o?? j'ai d??couvert ?? quel point la terre n'est qu'un
              atome perdu dans un oc??an d'??toiles fut le debut des mes grand moments de r??flexion contemplant le ciel, esp??rant trouver une r??ponse dans cette brume
              ??paisse d'ombre que je risque fort malheureusement de ne jamais trouver.
              </p>
        </div>

        <div class=\"itemautres\">
            <img src=\"../img/sport.jpg\"  width=\"100%\" height=\"60%\" style=\"border-radius: 10px;\">
            <h6 >
              <p style=\"color:rgb(204, 207, 206);\">
             La gymnastique, s'essoufler apr??s avoir boug?? dans tous les sens pour ensuite boire un verre d'eau frais, rien de plus
             ressaisissant que le sport. Malheureusement j'ai tendace d??laisser cette activit?? lorsque la vie m'impose son rythme de vie.
             Il n'est jamais trop tard pour se d??fouler un matin, avant de plonger l'esprit dans une activit?? plus r??flexif.
              </p>
        </div>
        <div class=\"itemautres\">
            <img src=\"../img/gamemaking.jpg\"  width=\"100%\" height=\"60%\" style=\"border-radius: 10px;\">
            <h6 >
              <p style=\"color:rgb(204, 207, 206);\">
             Jouer aux jeux-vid??o c'est quelque chose, en cr??er s'en est une autre, tel est la le??on que j'ai appris lorsque j'ai d??cid?? par curiosit??
             de me lancer dans le monde du gamemaking. D??tenir le fil du sc??nario, inventer de nouvelles m??canismes de gameplay, designer une palette de personnage et de 
             game design, il n'y rien de plus stimulant pour mon imagination aussi farfelue que le gamemaking
              </p>
        </div>

        <div class=\"itemautres\">
            <img src=\"../img/science.jpg\"  width=\"100%\" height=\"60%\" style=\"border-radius: 10px;\">
            <h6 >
              <p style=\"color:rgb(204, 207, 206);\">
              Ma relation avec la science ?? toujours ??t?? une relation tr??s compliqu??, du fait de la complexit?? de cette derni??re 
              mais au fil des ans j'ai fini par comprendre qu'aussi complexe qu'elle est, elle finit par nous apprendre tout un tas choses tous plus ??tonnantes les unes que les autres
              ( pr??f??rence pour la physique et la biologie), m??me si ??a lui arrive parfois qu'elle d??rive dans des exub??rations au caract??re douteux elle n'en reste pas moins tr??s plaisante
              ?? suivre.
              </p>
        </div>
        <div class=\"itemautres\">
            <img src=\"../img/voyage.jpg\"  width=\"100%\" height=\"60%\" style=\"border-radius: 10px;\">
            <h6 >
              <p style=\"color:rgb(204, 207, 206);\">
             Le monde est magnifique et ce serait vraiment dommage de ne pas en profiter, faire le tour du monde d??couvrir tous les paysages
             que la terre rec??le, il n'y a tr??s clairement rien de plus beau pour les yeux.
              </p>
        </div>


        <div class=\"itemautres\">
            <img src=\"../img/prog.webp\"  width=\"100%\" height=\"60%\" style=\"border-radius: 10px;\">
            <h6 >
              <p style=\"color:rgb(204, 207, 206);\">
              Les nouvelles technologies ont longtemps suscit?? un grand int??r??t pour moi. Ainsi j'ai longtemps appr??ci?? plusieur branches li??s ?? ce domaine tel que 
              l'informatique, la m??canique, l'??lectronique etc.
              </p>
        </div>
        <div class=\"itemautres\">
            <img src=\"../img/read.jpg\"  width=\"100%\" height=\"60%\" style=\"border-radius: 10px;\">
            <h6 >
              <p style=\"color:rgb(204, 207, 206);\">
            Lire c'est un bon moyen pour se changer les id??es ou r??vasser. Etre plong?? dans un sc??nario imaginaire o?? on se sent ?? la place des personnages, comprendre les enjeux de l'intrigue ou la philosophie de vie qui se
            cache d??rri??re, tel est le d??but d'un grand r??cit fantastique.
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
            <p style=\"color: white; padding: 15px; font-size:large; margin: bottom 40px;\"> Sur cette page je vous laisse d??couvrir mes passions pour 
                mieux me connaitre et ainsi confirmer l'id??e que vous vous ??tes fait de moi. C'est souvent lorsque je m'ennui ou que j'ai du temps libre que
                j'appr??cie d??couvrir de nouvelles activit??s, raison pourlaquelle vous ne verez ici que quelques une de mes plus grandes passions pour lesquelles il est impossible
                de m'en lasser.
            ?</p>
        </div>      
    </div>
    <div class=\"boxautres\">
        <div class=\"itemautres\">
            <img src=\"../img/chess.jpg\"  width=\"100%\" height=\"60%\" style=\"border-radius: 10px;\">
            <h6 >
              <p style=\"color:rgb(204, 207, 206);\">
             Les jeux de strat??gie et de r??flexion ont toujours ??t?? pour moi un tr??s bon moyen de passer le temps, les ??checs les jeux de carte
             ?? la sauce rpg (type yu-gi-oh), les batailles navales etc.., sont des moments que j'aime savourer entre deux lignes de bus ou durant une salle d'attente
              </p>
        </div>
        <div class=\"itemautres\">
            <img src=\"../img/telescop.jpg\"  width=\"100%\" height=\"60%\" style=\"border-radius: 10px;\">
            <h6 >
              <p style=\"color:rgb(204, 207, 206);\">
              L'espace, l'une des choses les plus fascinantes sur terre, le jour o?? j'ai d??couvert ?? quel point la terre n'est qu'un
              atome perdu dans un oc??an d'??toiles fut le debut des mes grand moments de r??flexion contemplant le ciel, esp??rant trouver une r??ponse dans cette brume
              ??paisse d'ombre que je risque fort malheureusement de ne jamais trouver.
              </p>
        </div>

        <div class=\"itemautres\">
            <img src=\"../img/sport.jpg\"  width=\"100%\" height=\"60%\" style=\"border-radius: 10px;\">
            <h6 >
              <p style=\"color:rgb(204, 207, 206);\">
             La gymnastique, s'essoufler apr??s avoir boug?? dans tous les sens pour ensuite boire un verre d'eau frais, rien de plus
             ressaisissant que le sport. Malheureusement j'ai tendace d??laisser cette activit?? lorsque la vie m'impose son rythme de vie.
             Il n'est jamais trop tard pour se d??fouler un matin, avant de plonger l'esprit dans une activit?? plus r??flexif.
              </p>
        </div>
        <div class=\"itemautres\">
            <img src=\"../img/gamemaking.jpg\"  width=\"100%\" height=\"60%\" style=\"border-radius: 10px;\">
            <h6 >
              <p style=\"color:rgb(204, 207, 206);\">
             Jouer aux jeux-vid??o c'est quelque chose, en cr??er s'en est une autre, tel est la le??on que j'ai appris lorsque j'ai d??cid?? par curiosit??
             de me lancer dans le monde du gamemaking. D??tenir le fil du sc??nario, inventer de nouvelles m??canismes de gameplay, designer une palette de personnage et de 
             game design, il n'y rien de plus stimulant pour mon imagination aussi farfelue que le gamemaking
              </p>
        </div>

        <div class=\"itemautres\">
            <img src=\"../img/science.jpg\"  width=\"100%\" height=\"60%\" style=\"border-radius: 10px;\">
            <h6 >
              <p style=\"color:rgb(204, 207, 206);\">
              Ma relation avec la science ?? toujours ??t?? une relation tr??s compliqu??, du fait de la complexit?? de cette derni??re 
              mais au fil des ans j'ai fini par comprendre qu'aussi complexe qu'elle est, elle finit par nous apprendre tout un tas choses tous plus ??tonnantes les unes que les autres
              ( pr??f??rence pour la physique et la biologie), m??me si ??a lui arrive parfois qu'elle d??rive dans des exub??rations au caract??re douteux elle n'en reste pas moins tr??s plaisante
              ?? suivre.
              </p>
        </div>
        <div class=\"itemautres\">
            <img src=\"../img/voyage.jpg\"  width=\"100%\" height=\"60%\" style=\"border-radius: 10px;\">
            <h6 >
              <p style=\"color:rgb(204, 207, 206);\">
             Le monde est magnifique et ce serait vraiment dommage de ne pas en profiter, faire le tour du monde d??couvrir tous les paysages
             que la terre rec??le, il n'y a tr??s clairement rien de plus beau pour les yeux.
              </p>
        </div>


        <div class=\"itemautres\">
            <img src=\"../img/prog.webp\"  width=\"100%\" height=\"60%\" style=\"border-radius: 10px;\">
            <h6 >
              <p style=\"color:rgb(204, 207, 206);\">
              Les nouvelles technologies ont longtemps suscit?? un grand int??r??t pour moi. Ainsi j'ai longtemps appr??ci?? plusieur branches li??s ?? ce domaine tel que 
              l'informatique, la m??canique, l'??lectronique etc.
              </p>
        </div>
        <div class=\"itemautres\">
            <img src=\"../img/read.jpg\"  width=\"100%\" height=\"60%\" style=\"border-radius: 10px;\">
            <h6 >
              <p style=\"color:rgb(204, 207, 206);\">
            Lire c'est un bon moyen pour se changer les id??es ou r??vasser. Etre plong?? dans un sc??nario imaginaire o?? on se sent ?? la place des personnages, comprendre les enjeux de l'intrigue ou la philosophie de vie qui se
            cache d??rri??re, tel est le d??but d'un grand r??cit fantastique.
              </p>
        </div>
    </div>       
{% endblock %}
", "boye/autres.html.twig", "C:\\Users\\boyem\\OneDrive\\Documents\\GitHub\\ProjetSAE104\\templates\\boye\\autres.html.twig");
    }
}
