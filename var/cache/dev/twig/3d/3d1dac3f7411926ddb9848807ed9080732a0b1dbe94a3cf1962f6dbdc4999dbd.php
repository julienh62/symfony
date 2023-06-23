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

/* home/index.html.twig */
class __TwigTemplate_181641ad59307e3221081e4b13eeaed0ce19edf9b5c0c1e3ff3a6208de82956d extends Template
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
        return "baseaccueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("baseaccueil.html.twig", "home/index.html.twig", 1);
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

        echo "Éolia!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "


    <div class=\"titremobil\">
           

          <!--    <picture>
               <source srcset=\"";
        // line 16
        echo " -->


      
    </div> 

   <section class=\"titre-accueil\">

      <h1 class=\"titreh1\"> Char à Voile Baie de Somme</h1>
     <h2 class = \"titreh2\"> Fort Mahon et Quend-Plage</h2>
 

    <div class=\"activite\">
           <div class=\"activiteaccueil\">
        
              <div class=\"activitecata\">
                     <div class=\"btnactiviteaccueil\">
                          <a class=\"lienaccueil\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar_main_cata");
        echo "\"> Catamaran </a>
                    </div>
              </div>

              <div class=\"activitechar\">   
                          <a class=\"lienaccueil\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar_main_char");
        echo "\" class=\"btn btn-secondary btn-sm\"> Char </a>       
              </div>
          
             <div class=\"activitekid\">
                          <a class=\"lienaccueilkid\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar_main_kid");
        echo "\" class=\"btn btn-secondary btn-sm\"> Char à voile kid </a>
             </div>
      </div>
   </section>




           
           
      

             <div class=\"description\">
                <div class=\"paragraphe\">
                    <p>Éolia vous propose la pratique du char à voile en baie de Somme à Fort Mahon et à Quend-plage. Sport typique en Picardie, le char à voile, sorte de « kart aéro propulsé », extrêmement maniable, léger et confortable est un loisir accessible à tous. Enfants, familles, séniors, personnes à mobilité réduite, groupes scolaires.</p>
                    <p>Au cours de votre première séance d’initiation de char à voile à Fort Mahon, après environ 1 heure d’apprentissage, selon les conditions météos, une randonnée ou balade en char à voile commence sous la conduite d’un moniteur Breveté d’État. Les coquillages craquent sous vos roues, le vent fait légèrement chasser les roues arrières dans une fine gerbe de sable…</p>
                    <p>Devant vous l’espace infini de la Baie de Somme en Picardie, EOLIA vous convie à des « Escapades Aér’O Plage », sorties inoubliables aux accents d’Air d’Eau et de Sable.</p>
                </div>
                
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d162960.58094757705!2d1.578692!3d50.343073!3m2!1i1024!2i768!4f13.1!2m1!1sEolia%20Fort%20mMahon%20et%20Quend%20Plage!5e0!3m2!1sfr!2sus!4v1639571521156!5m2!1sfr!2sus\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>  
                
    </div>

    <div class=\"p-version-tablette\">
                    <p>Devant vous l’espace infini de la Baie de Somme en Picardie, EOLIA vous convie à des « Escapades Aér’O Plage », sorties inoubliables aux accents d’Air d’Eau et de Sable.</p>
     </div>




   <script src=\"/assets/js/slider.js\" defer></script> 

\t
       <script src=\"/assets/js/menu.js\"> </script> 

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 42,  124 => 38,  116 => 33,  97 => 16,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseaccueil.html.twig' %}

{% block title %}Éolia!{% endblock %}


{% block body %}



    <div class=\"titremobil\">
           

          <!--    <picture>
               <source srcset=\"{#}{{ asset('assets/uploads/char-accueil.jpg')}}\" alt =\"char à voile Baie de Somme\" media=\"(orientation: portrait)\">
               <img src=\"{{ asset('assets/uploads/chardepart-tab.webp')}}\"alt =\"char à voile Baie de Somme\">
               </picture> #} -->


      
    </div> 

   <section class=\"titre-accueil\">

      <h1 class=\"titreh1\"> Char à Voile Baie de Somme</h1>
     <h2 class = \"titreh2\"> Fort Mahon et Quend-Plage</h2>
 

    <div class=\"activite\">
           <div class=\"activiteaccueil\">
        
              <div class=\"activitecata\">
                     <div class=\"btnactiviteaccueil\">
                          <a class=\"lienaccueil\" href=\"{{ path('app_calendar_main_cata') }}\"> Catamaran </a>
                    </div>
              </div>

              <div class=\"activitechar\">   
                          <a class=\"lienaccueil\" href=\"{{ path('app_calendar_main_char') }}\" class=\"btn btn-secondary btn-sm\"> Char </a>       
              </div>
          
             <div class=\"activitekid\">
                          <a class=\"lienaccueilkid\" href=\"{{ path('app_calendar_main_kid') }}\" class=\"btn btn-secondary btn-sm\"> Char à voile kid </a>
             </div>
      </div>
   </section>




           
           
      

             <div class=\"description\">
                <div class=\"paragraphe\">
                    <p>Éolia vous propose la pratique du char à voile en baie de Somme à Fort Mahon et à Quend-plage. Sport typique en Picardie, le char à voile, sorte de « kart aéro propulsé », extrêmement maniable, léger et confortable est un loisir accessible à tous. Enfants, familles, séniors, personnes à mobilité réduite, groupes scolaires.</p>
                    <p>Au cours de votre première séance d’initiation de char à voile à Fort Mahon, après environ 1 heure d’apprentissage, selon les conditions météos, une randonnée ou balade en char à voile commence sous la conduite d’un moniteur Breveté d’État. Les coquillages craquent sous vos roues, le vent fait légèrement chasser les roues arrières dans une fine gerbe de sable…</p>
                    <p>Devant vous l’espace infini de la Baie de Somme en Picardie, EOLIA vous convie à des « Escapades Aér’O Plage », sorties inoubliables aux accents d’Air d’Eau et de Sable.</p>
                </div>
                
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d162960.58094757705!2d1.578692!3d50.343073!3m2!1i1024!2i768!4f13.1!2m1!1sEolia%20Fort%20mMahon%20et%20Quend%20Plage!5e0!3m2!1sfr!2sus!4v1639571521156!5m2!1sfr!2sus\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>  
                
    </div>

    <div class=\"p-version-tablette\">
                    <p>Devant vous l’espace infini de la Baie de Somme en Picardie, EOLIA vous convie à des « Escapades Aér’O Plage », sorties inoubliables aux accents d’Air d’Eau et de Sable.</p>
     </div>




   <script src=\"/assets/js/slider.js\" defer></script> 

\t
       <script src=\"/assets/js/menu.js\"> </script> 

{% endblock %}
 ", "home/index.html.twig", "D:\\wamp64\\www\\symfony\\eolia-symfo-calendar\\templates\\home\\index.html.twig");
    }
}
