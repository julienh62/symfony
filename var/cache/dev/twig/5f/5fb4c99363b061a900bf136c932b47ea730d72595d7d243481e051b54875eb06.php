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

/* calendarmain/cataAll.html.twig */
class __TwigTemplate_266fbadfd6b5a2b8bd6492fef60d7ea63a66f4c42c5982ca97d0e40ab941ad98 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendarmain/cataAll.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendarmain/cataAll.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "calendarmain/cataAll.html.twig", 1);
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

        echo "eoliacalendarcata!";
        
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
        echo "<h1> Calendrier des séances catamaran</h1>
<div class=\"calendaraccueil\"> 
<img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/miniature-cata-accueil1.jpg"), "html", null, true);
        echo "\" alt=\"char à voile Baie de Somme\">
<div class=\"milieu\">
<p class=\"milieu\" >Prix par personne/ 60€ </p>
<p class=\"milieu\" > 48€ pour les moins de 25 ans</p>
<p class=\"milieu\" > A partir de 11 ans et 1,40 m</p>
</div>
</div>
<p class=\"milieu\" >Cliquez sur la séance où vous souhaitez réserver. </p>
<div id=\"calendrier\"> </div>
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
        initialView: 'timeGridFourDay',
        views: {
            timeGridFourDay: {
                type: 'timeGrid',
                duration: { days: 4 }
            }
        },       locale: 'fr',
        timeZone: 'Europe/Paris',
        headerToolbar: {
            start: 'prev, next today',
            center: 'title',
            end: 'dayGridMonth, timeGridFourDay',
        },
        buttonText: {
            today: 'Aujourd\\'hui',
            month: 'Mois',
            timeGridFourDay: '4jours',
        },





        //probleme secu avec raw?
         events: ";
        // line 52
        echo (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 52, $this->source); })());
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
        return "calendarmain/cataAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 52,  128 => 24,  123 => 22,  113 => 21,  93 => 10,  89 => 8,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}eoliacalendarcata!{% endblock %}

{% block body %}
{#me donne kle json de data#}
{#{{dump(data)}}  #}
<h1> Calendrier des séances catamaran</h1>
<div class=\"calendaraccueil\"> 
<img src=\"{{ asset('assets/uploads/miniature-cata-accueil1.jpg')}}\" alt=\"char à voile Baie de Somme\">
<div class=\"milieu\">
<p class=\"milieu\" >Prix par personne/ 60€ </p>
<p class=\"milieu\" > 48€ pour les moins de 25 ans</p>
<p class=\"milieu\" > A partir de 11 ans et 1,40 m</p>
</div>
</div>
<p class=\"milieu\" >Cliquez sur la séance où vous souhaitez réserver. </p>
<div id=\"calendrier\"> </div>
{% endblock %}

{% block javascripts %}
\t{{ parent() }}
  <script {# src=\"/assets/js/calendar.js\">  #}
window.onload = () => {
    let calendarElt = document.querySelector(\"#calendrier\")

    let calendar = new FullCalendar.Calendar(calendarElt, {
        initialView: 'timeGridFourDay',
        views: {
            timeGridFourDay: {
                type: 'timeGrid',
                duration: { days: 4 }
            }
        },       locale: 'fr',
        timeZone: 'Europe/Paris',
        headerToolbar: {
            start: 'prev, next today',
            center: 'title',
            end: 'dayGridMonth, timeGridFourDay',
        },
        buttonText: {
            today: 'Aujourd\\'hui',
            month: 'Mois',
            timeGridFourDay: '4jours',
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

", "calendarmain/cataAll.html.twig", "D:\\wamp64\\www\\symfony\\eolia-symfo-calendar\\templates\\calendarmain\\cataAll.html.twig");
    }
}
