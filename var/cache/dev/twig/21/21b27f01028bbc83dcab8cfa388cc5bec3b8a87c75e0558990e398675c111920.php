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

/* admin/calendarmain/main.html.twig */
class __TwigTemplate_7a34e01801840543a25a3ea8378a22188d70b08d9eed1e7418fd719e2fc78ea4 extends Template
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
        return "base.admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/calendarmain/main.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/calendarmain/main.html.twig"));

        $this->parent = $this->loadTemplate("base.admin.html.twig", "admin/calendarmain/main.html.twig", 1);
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

        echo "eoliacalendar!";
        
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

        // line 8
        echo "<div id=\"calendrier\"> mon calendrier</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script ";
        // line 13
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
        // line 33
        echo (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 33, $this->source); })());
        echo ",
         //editable pour glisser deposer et agrandir
         editable: true,
         //agrandir depuis le haut de la cellule
         eventResizableFromStart: true
})

//crée un objet (event et oldevent(date d'origine)) à chaque fois que je déplace un rdv
/*  calendar.on('eventChange', (e) => {
    //on crée une url  
    let url = `/admin/api/\${e.event.id}/edit`
    let donnees = {
      \"title\": e.event.title,
      \"start\": e.event.start,
      \"end\": e.event.end,
      \"backgroundColor\": e.event.backgroundColor,
      \"borderColor\": e.event.borderColor,
      \"textColor\": e.event.textColor,
                
            }
/
  
   // console.log(donnees);
        //CREER 
      let xhr = new XMLHttpRequest
            xhr.open(\"PUT\", url)
            xhr.send(JSON.stringify(donnees))


})

  //crée un objet (event et oldevent(date d'origine)) à chaque fois que je clique un rdv
  calendar.on('eventClick', (e) => {
  
    let donnees = {
      \"id\": e.event.id,
      
            }
            let id = donnees.id;
            let url = \"https://127.0.0.1:8000/admin/calendar/\" + id + \"/edit\";
window.open(url, '_blank', 'width=500,height=500');
 

})   */




//crée un objet (event et oldevent(date d'origine)) à chaque fois que je clique un rdv
  calendar.on('eventClick', (e) => {
    //on crée une url
  //  let url = `/admin/api/\${e.event.id}/edit`
    let donnees = {
      \"id\": e.event.id,
      
            }
            let id = donnees.id;
            let url = \"https://127.0.0.1:8000/admin/calendarshowuser/\" + id ;
window.open(url, '_blank');
 

}) 
/*
//crée un objet (event et oldevent(date d'origine)) à chaque fois que je clique un rdv
  calendar.on('onmousedown', (e) => {
    //on crée une url
  //  let url = `/admin/api/\${e.event.id}/edit`
    let donnees = {
      \"id\": e.event.id,
      
            }
            let id = donnees.id;
            let url = \"https://127.0.0.1:8000/admin/calendarshowuser/\" + id ;
window.open(url, '_blank');
 

})*/



calendar.render()
}
</script> 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/calendarmain/main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  115 => 13,  110 => 11,  100 => 10,  89 => 8,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.admin.html.twig' %}

{% block title %}eoliacalendar!{% endblock %}

{% block body %}
{#me donne kle json de data#}
{#{{dump(data)}}  #}
<div id=\"calendrier\"> mon calendrier</div>
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
         editable: true,
         //agrandir depuis le haut de la cellule
         eventResizableFromStart: true
})

//crée un objet (event et oldevent(date d'origine)) à chaque fois que je déplace un rdv
/*  calendar.on('eventChange', (e) => {
    //on crée une url  
    let url = `/admin/api/\${e.event.id}/edit`
    let donnees = {
      \"title\": e.event.title,
      \"start\": e.event.start,
      \"end\": e.event.end,
      \"backgroundColor\": e.event.backgroundColor,
      \"borderColor\": e.event.borderColor,
      \"textColor\": e.event.textColor,
                
            }
/
  
   // console.log(donnees);
        //CREER 
      let xhr = new XMLHttpRequest
            xhr.open(\"PUT\", url)
            xhr.send(JSON.stringify(donnees))


})

  //crée un objet (event et oldevent(date d'origine)) à chaque fois que je clique un rdv
  calendar.on('eventClick', (e) => {
  
    let donnees = {
      \"id\": e.event.id,
      
            }
            let id = donnees.id;
            let url = \"https://127.0.0.1:8000/admin/calendar/\" + id + \"/edit\";
window.open(url, '_blank', 'width=500,height=500');
 

})   */




//crée un objet (event et oldevent(date d'origine)) à chaque fois que je clique un rdv
  calendar.on('eventClick', (e) => {
    //on crée une url
  //  let url = `/admin/api/\${e.event.id}/edit`
    let donnees = {
      \"id\": e.event.id,
      
            }
            let id = donnees.id;
            let url = \"https://127.0.0.1:8000/admin/calendarshowuser/\" + id ;
window.open(url, '_blank');
 

}) 
/*
//crée un objet (event et oldevent(date d'origine)) à chaque fois que je clique un rdv
  calendar.on('onmousedown', (e) => {
    //on crée une url
  //  let url = `/admin/api/\${e.event.id}/edit`
    let donnees = {
      \"id\": e.event.id,
      
            }
            let id = donnees.id;
            let url = \"https://127.0.0.1:8000/admin/calendarshowuser/\" + id ;
window.open(url, '_blank');
 

})*/



calendar.render()
}
</script> 
{% endblock %}

", "admin/calendarmain/main.html.twig", "D:\\wamp64\\www\\symfony\\eolia-symfo-calendar\\templates\\admin\\calendarmain\\main.html.twig");
    }
}
