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

/* boye/index.html.twig */
class __TwigTemplate_081928bfddf7a59be52d295c5db204b0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "boye/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "boye/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "boye/index.html.twig", 1);
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
        echo "
<div class=\"mycontainer2\">
    <div class=\"item1\">
        <img class=\"mypicture\" src=\"../img/me.png\" width=\"70%\" height=\"60%\">
        <p style=\"text-align: center;\"><u>Mr.Mouhamed-Boye</u></p>
        <details>
          <summary>Details</summary>
            boyemouhamed43@gmail.com 06 65 31 78 00
        </details>
    <br>
    </div>
    <div class=\"item2\">
        <p style=\"color: #ffffff; padding: 15px; font-size:large; margin: bottom 40px;\">Hello, welcome to my 
          personal website, my name is Boye Mouhamed and I am in my first year of network and telecommunication. I am a 
          student from Senegal and I chose to continue my studies by leaving my comfort zone to discover new 
          horizons and France was my choice for this trip. This journey will allow me to gain in maturity and 
          experience in order to showcase my acquired skills to my country. On this page you will find all 
          the information about me namely my resume my portfolio and much more,I hope that you will know through 
          this discovery, the person I want to show you 
       </p>
    </div>

</div><br><br><br>

<div class=\"grandblock\">
  <div class=\"container2\">
    <div class=\"item\">
      <img src=\"../img/tchn.webp\" width=\"90%\" height=\"70%\" style=\"border-radius: 20px; position:relative; top:20px\">
      <h6 >
      <p style=\"color: black; font-size: medium;\">
      </p>
      </h6>
      <br><br><br>
    </div>


    <div class=\"item\">
      <img src=\"../img/tchn2.png\" alt=\"blue lock\" width=\"90%\" height=\"70%\" style=\"border-radius: 20px; position:relative; bottom: 60px;\">
      <h6>
      </h6><br><br> 
    </div>
  </div>
  <div class=\"containerdroit\">
      <p style=\"color:black; font-size: large; position:relative; top:40px;\">
         Through my training and experience, I have come to understand that setting goals is the best way to find 
         the path you want to follow. Knowing how to focus on the essential by investing time on the acquisition of
         skills and on the application of these in real situations is my method of working to achieve the goals 
         set. Planning, organizing, communicating are key words to facilitate tasks and improve productivity and 
         thus facilitate the growth of earnings but it is not enough to know all this to ensure success, because 
         there will always be obstacles to slow down our race
      
      
      </p>
     <br><br>
      <p style=\"color:black; font-size: large; position:relative; top:180px;\">
        Productivity, the biggest problem for young people, it is often difficult to find the motivation to move 
        forward with one's projects even when the objectives have been identified. Being productive does not 
        consist in doing a lot of tasks in a row, but it s to do the important tasks necessary to achieve the 
        objectives. Each person has peaks of productivity at different times. The expressions \"being in the 
        morning\" for example are part of the common language. In order to be efficient, we must be able to 
        organize our work time in such a way as to optimize our ability to concentrate and achieve our tasks 
        more easily.
        </p>

  </div>
</div>
<br><br>
<div class=\"avant-foot\">
  <img src=\"../img/tchn3.webp\" width=\"40%\" height=\"80%\" class=\"last-for-home\">
  <p style=\"color:black; font-size: large; margin-top:10px; position:relative; top:30px;\">
      So,we could think that with precise objectives and motivations capable of overcoming any procrastination,
      no obstacle can prevent us from reaching our objectives and yet the number of cancelled or delayed projects 
      keeps growing on the pile of documents on a desk covered with dust. So the question to ask is why? To tell
      the truth, nobody knows and there is no real answer to this question, it is often difficult to follow the
      thread at the end of the adventure, knowing if we will succeed remains the biggest question, but it is 
      this feeling that pushes us to try and thus discover how far we can go.
        </p>
  
        
</div>
          
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "boye/index.html.twig";
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

<div class=\"mycontainer2\">
    <div class=\"item1\">
        <img class=\"mypicture\" src=\"../img/me.png\" width=\"70%\" height=\"60%\">
        <p style=\"text-align: center;\"><u>Mr.Mouhamed-Boye</u></p>
        <details>
          <summary>Details</summary>
            boyemouhamed43@gmail.com 06 65 31 78 00
        </details>
    <br>
    </div>
    <div class=\"item2\">
        <p style=\"color: #ffffff; padding: 15px; font-size:large; margin: bottom 40px;\">Hello, welcome to my 
          personal website, my name is Boye Mouhamed and I am in my first year of network and telecommunication. I am a 
          student from Senegal and I chose to continue my studies by leaving my comfort zone to discover new 
          horizons and France was my choice for this trip. This journey will allow me to gain in maturity and 
          experience in order to showcase my acquired skills to my country. On this page you will find all 
          the information about me namely my resume my portfolio and much more,I hope that you will know through 
          this discovery, the person I want to show you 
       </p>
    </div>

</div><br><br><br>

<div class=\"grandblock\">
  <div class=\"container2\">
    <div class=\"item\">
      <img src=\"../img/tchn.webp\" width=\"90%\" height=\"70%\" style=\"border-radius: 20px; position:relative; top:20px\">
      <h6 >
      <p style=\"color: black; font-size: medium;\">
      </p>
      </h6>
      <br><br><br>
    </div>


    <div class=\"item\">
      <img src=\"../img/tchn2.png\" alt=\"blue lock\" width=\"90%\" height=\"70%\" style=\"border-radius: 20px; position:relative; bottom: 60px;\">
      <h6>
      </h6><br><br> 
    </div>
  </div>
  <div class=\"containerdroit\">
      <p style=\"color:black; font-size: large; position:relative; top:40px;\">
         Through my training and experience, I have come to understand that setting goals is the best way to find 
         the path you want to follow. Knowing how to focus on the essential by investing time on the acquisition of
         skills and on the application of these in real situations is my method of working to achieve the goals 
         set. Planning, organizing, communicating are key words to facilitate tasks and improve productivity and 
         thus facilitate the growth of earnings but it is not enough to know all this to ensure success, because 
         there will always be obstacles to slow down our race
      
      
      </p>
     <br><br>
      <p style=\"color:black; font-size: large; position:relative; top:180px;\">
        Productivity, the biggest problem for young people, it is often difficult to find the motivation to move 
        forward with one's projects even when the objectives have been identified. Being productive does not 
        consist in doing a lot of tasks in a row, but it s to do the important tasks necessary to achieve the 
        objectives. Each person has peaks of productivity at different times. The expressions \"being in the 
        morning\" for example are part of the common language. In order to be efficient, we must be able to 
        organize our work time in such a way as to optimize our ability to concentrate and achieve our tasks 
        more easily.
        </p>

  </div>
</div>
<br><br>
<div class=\"avant-foot\">
  <img src=\"../img/tchn3.webp\" width=\"40%\" height=\"80%\" class=\"last-for-home\">
  <p style=\"color:black; font-size: large; margin-top:10px; position:relative; top:30px;\">
      So,we could think that with precise objectives and motivations capable of overcoming any procrastination,
      no obstacle can prevent us from reaching our objectives and yet the number of cancelled or delayed projects 
      keeps growing on the pile of documents on a desk covered with dust. So the question to ask is why? To tell
      the truth, nobody knows and there is no real answer to this question, it is often difficult to follow the
      thread at the end of the adventure, knowing if we will succeed remains the biggest question, but it is 
      this feeling that pushes us to try and thus discover how far we can go.
        </p>
  
        
</div>
          
{% endblock %}
", "boye/index.html.twig", "C:\\Users\\boyem\\OneDrive\\Documents\\GitHub\\ProjetSAE104\\templates\\boye\\index.html.twig");
    }
}
