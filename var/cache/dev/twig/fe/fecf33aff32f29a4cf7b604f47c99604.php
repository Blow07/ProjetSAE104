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

/* boye/cv.html.twig */
class __TwigTemplate_93a895c6e3a1cb25f81e82a8fa455443 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "boye/cv.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "boye/cv.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "boye/cv.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        echo "    <div class=\"mycontainer5\">
        <div class=\"competences\">
            <h1>
              <p style=\"text-align: center; font-family:cursive;color:black;font-size:larger\" ><u>CURRICULUM VITAE:<br><p style=\"font-size:medium; text-align:center\">Poste: Directeur Informatique</p></u></p>
            </h1>
          </div>
                
            
    </div>
    <div class=\"cv\">

        <div class=\"entetecv\">
        <p>
            <br><br><br>
            <h1>
            <strong>MOUHAMED BOYE :</strong>
            </h1><h5>
            Etudiant Premi??re Ann??e RT, Email:boyemouhamed43@gmail.com 06 65 31 78 00</h5>
        </p>
        </div>
        <br>
        <div class=\"profilcv\">
            <div>
                <br>
                <h1><strong>
                Profile :
                </strong></h1> 
            </div>
            <div class=\"boxcv\">
                <p>Etudiant de premi??re ann??e sur la formation r??seaux et t??l??coms, et passion?? d'informatique
                depuis tr??s jeune, diplom?? d'un baccalaur??at scientifique au S??n??gal, chef de projets ind??pendants,j'aspire ?? obtenir un poster de directeur R&D afin de mettre mon exp??rience 
                au service de l'entreprise.
                    i
                    </p>
            </div>
           
        </div>
        <div class=\"profilcv\">
            <div>
                <br>
                <h1><strong>Skills : </strong></h1>
            </div>
            <div class=\"boxskills\">
                Administrer<br>
                Capacit?? ?? comprendre l'architecture d'un r??seau pour diagnostiquer les erreurs d'adressage, faciliter le travail des colloborateurs en mettant en place
                de nouvelles architectures cpovant faire transiter les donn??es avec une meilleure gestion et une meilleure s??curit??
            </div>
            <div class=\"boxskills\">
                Connecter<br>
                Faciliter la communication entre usagers de l'entreprise pour permettre une meilleure coordination et d??ploiement des taches a r??aliser et 
                acc??lerer la productivit?? par l'engagement continu ?? maintenir le syst??me
            </div>
            <div class=\"boxskills\">
                Programmer<br>
                Afin de faciliter mon travail, je developpe des outils visant ?? automatiser des taches, analyser des paquets d'informations
                pour investir du temps suppl??mentaire dans la production.
            </div>


        </div>
        <h1><br><p style=\"text-align: center;\">Experience</p></h1>
        <div class=\"exp\">
            <div class=\"boxexp\">
                Chef de projet de classe au coll??ge<br>
                J'ai ??t?? plusieurs fois amen?? ?? diriger un groupe d'??l??ves pour la pr??sentation d'un projet. Ainsi confier des missions aux 
                profils correspondants analyser la situation pour g??nerer le meilleur planning de travail, g??rer les divergences entre partenaires du groupe
                sont des atouts indispensable ?? la gestion d'une soci??t?? voulant mettre ?? profit le travail colloboratif

            </div>
            <div class=\"boxexp\">
                D??l??gu?? de classe au lyc??e<br>
                Responsable de l'ordre et de la maintenance sont aussi des qualit??s acquises par ces exp??riences qui m'ont permit
                de m'assurer de la bonne ex??cution des missions confi??s, savoir g??rer le stress pour mieux s'en servir, utiliser les 
                moyens du bord pour r??pondre aux charges demand??s sans pour autant r??duire la qualit?? du travail ou proposer un rendu 
                m??diocre

            </div>
            <div class=\"boxexp\">
                Exp??rience par tatonnement<br>
                Cel?? peut sembler ??trange au premier abord, mais toute mon exp??reince en informatique je la dois ?? une curiosit??
                qui ne se limite pas ?? ce domaine. En effet chercher comment fonctionne un concept et tenter de l'apr??hender seul sans
                aucune connaisance solide sur le sujet m'ont apport??s des moyens de travail capabale de me pousser ?? atteindre les objectifs
                dans le but de satisfaire cette curiosit?? ou d'enrichir mes connaissances. 
            </div>

        </div>
        <div class=\"profilcv\">
            <div>
                <br>
                <h1><strong>
                Education :
                </strong></h1> 
            </div>
            <div class=\"boxcv\">
                <p>Diplome obtenus:
                    <ul>
                        <li>CFEE ?? l'??cole SAINT Joseph de Rufisque obtenu en 2015</li>
                        <li>BFEMM ?? l'??cole  CABIS SCHOOL de Mbao obtenu en 2019</li>
                        <li>BAC Scientifique sp??cialit?? Physique Chimie Biologie et Math??matiques obtenu en 2022</li>
                    </p>
            </div>
           
        </div>


    </div>
    <br><br>
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
            <label for=\"exampleSelect1\" class=\"form-label mt-4\">You are ?</label>
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
            <option>1 ??????</option>
            <option>2 ??????</option>
            <option>3 ?????????</option>
            <option>4 ????????????</option>
            <option>5 ???????????????</option>
            </select>
        </div>
        <div class=\"form-group\">
            <label for=\"exampleTextarea\" class=\"form-label mt-4\">You can write a comment down:</label>
            <textarea class=\"form-control\" id=\"exampleTextarea\" rows=\"3\"></textarea>
        </div>
        <div class=\"form-group\">
            <label for=\"formFile\" class=\"form-label mt-4\">you want to transmit a document ?</label>
            <input class=\"form-control\" type=\"file\" id=\"formFile\">
        </div>
        <fieldset class=\"form-group\">
            <legend class=\"mt-4\">Gender</legend>
            <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
            <label class=\"form-check-label\" for=\"optionsRadios1\">
                Man
            </label>
            </div>
            <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option2\">
            <label class=\"form-check-label\" for=\"optionsRadios2\">
                Woman
            </label>
            </div>
        </fieldset>
        <button type=\"submit\"><a href=\"../CV.docx\" target=\"_blank\" download>Submit</a></button>
    </form>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "boye/cv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



    {% block body %}
    <div class=\"mycontainer5\">
        <div class=\"competences\">
            <h1>
              <p style=\"text-align: center; font-family:cursive;color:black;font-size:larger\" ><u>CURRICULUM VITAE:<br><p style=\"font-size:medium; text-align:center\">Poste: Directeur Informatique</p></u></p>
            </h1>
          </div>
                
            
    </div>
    <div class=\"cv\">

        <div class=\"entetecv\">
        <p>
            <br><br><br>
            <h1>
            <strong>MOUHAMED BOYE :</strong>
            </h1><h5>
            Etudiant Premi??re Ann??e RT, Email:boyemouhamed43@gmail.com 06 65 31 78 00</h5>
        </p>
        </div>
        <br>
        <div class=\"profilcv\">
            <div>
                <br>
                <h1><strong>
                Profile :
                </strong></h1> 
            </div>
            <div class=\"boxcv\">
                <p>Etudiant de premi??re ann??e sur la formation r??seaux et t??l??coms, et passion?? d'informatique
                depuis tr??s jeune, diplom?? d'un baccalaur??at scientifique au S??n??gal, chef de projets ind??pendants,j'aspire ?? obtenir un poster de directeur R&D afin de mettre mon exp??rience 
                au service de l'entreprise.
                    i
                    </p>
            </div>
           
        </div>
        <div class=\"profilcv\">
            <div>
                <br>
                <h1><strong>Skills : </strong></h1>
            </div>
            <div class=\"boxskills\">
                Administrer<br>
                Capacit?? ?? comprendre l'architecture d'un r??seau pour diagnostiquer les erreurs d'adressage, faciliter le travail des colloborateurs en mettant en place
                de nouvelles architectures cpovant faire transiter les donn??es avec une meilleure gestion et une meilleure s??curit??
            </div>
            <div class=\"boxskills\">
                Connecter<br>
                Faciliter la communication entre usagers de l'entreprise pour permettre une meilleure coordination et d??ploiement des taches a r??aliser et 
                acc??lerer la productivit?? par l'engagement continu ?? maintenir le syst??me
            </div>
            <div class=\"boxskills\">
                Programmer<br>
                Afin de faciliter mon travail, je developpe des outils visant ?? automatiser des taches, analyser des paquets d'informations
                pour investir du temps suppl??mentaire dans la production.
            </div>


        </div>
        <h1><br><p style=\"text-align: center;\">Experience</p></h1>
        <div class=\"exp\">
            <div class=\"boxexp\">
                Chef de projet de classe au coll??ge<br>
                J'ai ??t?? plusieurs fois amen?? ?? diriger un groupe d'??l??ves pour la pr??sentation d'un projet. Ainsi confier des missions aux 
                profils correspondants analyser la situation pour g??nerer le meilleur planning de travail, g??rer les divergences entre partenaires du groupe
                sont des atouts indispensable ?? la gestion d'une soci??t?? voulant mettre ?? profit le travail colloboratif

            </div>
            <div class=\"boxexp\">
                D??l??gu?? de classe au lyc??e<br>
                Responsable de l'ordre et de la maintenance sont aussi des qualit??s acquises par ces exp??riences qui m'ont permit
                de m'assurer de la bonne ex??cution des missions confi??s, savoir g??rer le stress pour mieux s'en servir, utiliser les 
                moyens du bord pour r??pondre aux charges demand??s sans pour autant r??duire la qualit?? du travail ou proposer un rendu 
                m??diocre

            </div>
            <div class=\"boxexp\">
                Exp??rience par tatonnement<br>
                Cel?? peut sembler ??trange au premier abord, mais toute mon exp??reince en informatique je la dois ?? une curiosit??
                qui ne se limite pas ?? ce domaine. En effet chercher comment fonctionne un concept et tenter de l'apr??hender seul sans
                aucune connaisance solide sur le sujet m'ont apport??s des moyens de travail capabale de me pousser ?? atteindre les objectifs
                dans le but de satisfaire cette curiosit?? ou d'enrichir mes connaissances. 
            </div>

        </div>
        <div class=\"profilcv\">
            <div>
                <br>
                <h1><strong>
                Education :
                </strong></h1> 
            </div>
            <div class=\"boxcv\">
                <p>Diplome obtenus:
                    <ul>
                        <li>CFEE ?? l'??cole SAINT Joseph de Rufisque obtenu en 2015</li>
                        <li>BFEMM ?? l'??cole  CABIS SCHOOL de Mbao obtenu en 2019</li>
                        <li>BAC Scientifique sp??cialit?? Physique Chimie Biologie et Math??matiques obtenu en 2022</li>
                    </p>
            </div>
           
        </div>


    </div>
    <br><br>
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
            <label for=\"exampleSelect1\" class=\"form-label mt-4\">You are ?</label>
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
            <option>1 ??????</option>
            <option>2 ??????</option>
            <option>3 ?????????</option>
            <option>4 ????????????</option>
            <option>5 ???????????????</option>
            </select>
        </div>
        <div class=\"form-group\">
            <label for=\"exampleTextarea\" class=\"form-label mt-4\">You can write a comment down:</label>
            <textarea class=\"form-control\" id=\"exampleTextarea\" rows=\"3\"></textarea>
        </div>
        <div class=\"form-group\">
            <label for=\"formFile\" class=\"form-label mt-4\">you want to transmit a document ?</label>
            <input class=\"form-control\" type=\"file\" id=\"formFile\">
        </div>
        <fieldset class=\"form-group\">
            <legend class=\"mt-4\">Gender</legend>
            <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
            <label class=\"form-check-label\" for=\"optionsRadios1\">
                Man
            </label>
            </div>
            <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option2\">
            <label class=\"form-check-label\" for=\"optionsRadios2\">
                Woman
            </label>
            </div>
        </fieldset>
        <button type=\"submit\"><a href=\"../CV.docx\" target=\"_blank\" download>Submit</a></button>
    </form>
    {% endblock %}
", "boye/cv.html.twig", "C:\\Users\\boyem\\OneDrive\\Documents\\GitHub\\ProjetSAE104\\templates\\boye\\cv.html.twig");
    }
}
