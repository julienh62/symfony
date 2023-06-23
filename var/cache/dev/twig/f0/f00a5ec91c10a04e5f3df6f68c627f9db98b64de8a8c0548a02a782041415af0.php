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

/* calendarmain/charAll.html.twig */
class __TwigTemplate_a60be7a6bfc782a575fe0454f1d0d8adcd276e57bbc4b8f71e290bfa5098681e extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendarmain/charAll.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendarmain/charAll.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "calendarmain/charAll.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "eoliacalendarchar!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1> Calendrier des séances char à voile</h1>
<div class=\"calendaraccueil\"> 
<img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/groupe-cha-mini-1.jpg"), "html", null, true);
        echo "\" alt=\"char à voile Baie de Somme\">
<div class=\"milieu\">
<p class=\"milieu\" >Prix par personne/ 60€ </p>
<p class=\"milieu\" > 48€ pour les moins de 25 ans</p>
<p class=\"milieu\" > A partir de 11 ans et 1,40 m</p>
</div>
</div>
<p class=\"milieu\" >Cliquez sur la séance où vous souhaitez réserver. </p>
";
        // line 18
        echo "<div id=\"calendrier\">  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script ";
        // line 24
        echo "window.onload = () => {
    let calendarElt = document.querySelector(\"#calendrier\")

    let calendar = new FullCalendar.Calendar(calendarElt, {
        initialView: 'timeGridWeek',
        locale: 'fr',
        timeZone: 'Europe/Paris',
        headerToolbar: {
           start: 'prev, next today',
           center: 'title',
           end: 'dayGridMonth, timeGridWeek' ,
        },
       buttonText: {
        today: 'Aujourd\\'hui',
        month: 'Mois',
        week: 'Semaine'
       },


        //probleme secu avec raw?
         events: ";
        // line 44
        echo (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 44, $this->source); })());
        echo ",
         //editable pour glisser deposer et agrandir
      //   editable: true,
         //agrandir depuis le haut de la cellule
      //   eventResizableFromStart: true
})

//crée un objet (event et oldevent(date d'origine)) à chaque fois que je clique un rdv
  calendar.on('eventClick', (e) => {
    //on crée une url
  //  let url = `/admin/api/\${e.event.id}/edit`
    let donnees = {
      \"id\": e.event.id,
      
            }
            let id = donnees.id;
            let url = \"https://127.0.0.1:8000/calendar/\" + id ;
window.open(url, '_blank');
 

})

  

calendar.render()
}
</script> 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "calendarmain/charAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 44,  130 => 24,  125 => 22,  115 => 21,  104 => 18,  93 => 8,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}eoliacalendarchar!{% endblock %}

{% block body %}
<h1> Calendrier des séances char à voile</h1>
<div class=\"calendaraccueil\"> 
<img src=\"{{ asset('assets/uploads/groupe-cha-mini-1.jpg')}}\" alt=\"char à voile Baie de Somme\">
<div class=\"milieu\">
<p class=\"milieu\" >Prix par personne/ 60€ </p>
<p class=\"milieu\" > 48€ pour les moins de 25 ans</p>
<p class=\"milieu\" > A partir de 11 ans et 1,40 m</p>
</div>
</div>
<p class=\"milieu\" >Cliquez sur la séance où vous souhaitez réserver. </p>
{#me donne kle json de data#}
{#{{dump(data)}}  #}
<div id=\"calendrier\">  </div>
{% endblock %}

{% block javascripts %}
\t{{ parent() }}
  <script {# src=\"/assets/js/calendar.js\">  #}
window.onload = () => {
    let calendarElt = document.querySelector(\"#calendrier\")

    let calendar = new FullCalendar.Calendar(calendarElt, {
        initialView: 'timeGridWeek',
        locale: 'fr',
        timeZone: 'Europe/Paris',
        headerToolbar: {
           start: 'prev, next today',
           center: 'title',
           end: 'dayGridMonth, timeGridWeek' ,
        },
       buttonText: {
        today: 'Aujourd\\'hui',
        month: 'Mois',
        week: 'Semaine'
       },


        //probleme secu avec raw?
         events: {{ data|raw }},
         //editable pour glisser deposer et agrandir
      //   editable: true,
         //agrandir depuis le haut de la cellule
      //   eventResizableFromStart: true
})

//crée un objet (event et oldevent(date d'origine)) à chaque fois que je clique un rdv
  calendar.on('eventClick', (e) => {
    //on crée une url
  //  let url = `/admin/api/\${e.event.id}/edit`
    let donnees = {
      \"id\": e.event.id,
      
            }
            let id = donnees.id;
            let url = \"https://127.0.0.1:8000/calendar/\" + id ;
window.open(url, '_blank');
 

})

  

calendar.render()
}
</script> 
{% endblock %}

", "calendarmain/charAll.html.twig", "D:\\wamp64\\www\\symfony\\eolia-symfo-calendar\\templates\\calendarmain\\charAll.html.twig");
    }
}
