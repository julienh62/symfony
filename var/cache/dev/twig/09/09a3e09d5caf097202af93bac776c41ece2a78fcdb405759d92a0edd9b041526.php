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

/* _partials/_navaccueil.html.twig */
class __TwigTemplate_e4266271f28f4d0d56beb3204a2979e9e6127a5472366fdaccdcf5993203ff16 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_navaccueil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_navaccueil.html.twig"));

        // line 1
        echo "

<header id=\"navbar\" class=\"nav\">
    <a class=\"navbar-brand\" href=\"/\">
\t\t\t<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/logoeolia170px.png"), "html", null, true);
        echo "\" alt=\"char à voile Baie de Somme\"></a>
     
    <div class=\"dropdown-1\">
        <button>Nos activités</button> 
            <div class=\"content\">
               <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar_index");
        echo "\">Toutes les séances</a>
               <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar_all_char");
        echo "\">Char à voile</a>
\t\t\t\t<a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cataAll_show");
        echo "\">Catamaran</a>
\t\t\t\t<a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("charkidAll_show");
        echo "\">Char à voile kid</a>
            </div>
    </div>
     <div class=\"dropdown-1\">
        <button>Consulter le planning</button> 
            <div class=\"content\">
              <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar_main");
        echo " \"> Toutes les activités</a>
              <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar_main_char");
        echo " \"> Char à voile</a>
\t\t\t\t<a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar_main_cata");
        echo " \"> Catamaran</a>
\t\t\t\t<a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar_main_kid");
        echo " \"> Char à voile Kid</a>
            </div>
    </div>



 \t\t\t
\t
\t\t\t<a href=\"#\">Contact</a>
\t\t

\t\t





\t\t";
        // line 39
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39)) {
            // line 40
            echo "
\t\t\t
\t\t\t\t<a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_purchase");
            echo "\">Commandes</a>
\t\t\t
\t\t\t\t<a class=\"aderoulant\" href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
\t\t\t
\t\t\t\t";
            // line 47
            echo "\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
            echo " \">🛒
\t\t\t\t(";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, (isset($context["cartService"]) || array_key_exists("cartService", $context) ? $context["cartService"] : (function () { throw new RuntimeError('Variable "cartService" does not exist.', 48, $this->source); })()), "total", [], "any", false, false, false, 48)), "html", null, true);
            echo ")
\t\t\t\t</a>
\t\t\t
\t\t\t";
        } else {
            // line 52
            echo "\t\t\t
\t\t\t\t<a href=\" ";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registration");
            echo "\">Inscription</a>
\t\t\t
\t\t\t\t<a href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
\t\t\t
\t\t\t";
        }
        // line 58
        echo "
       <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
        echo "\">Admin</a>




  </div>
   
</nav>


     <a class=\"icon\" onclick = \"myFunction()\">&#9776;</a>

</header>


<div id=\"slider\">
                <img class =\"imgslider\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/slide/char-accueiltitregros1500.webp"), "html", null, true);
        echo "\" alt = \"char à voile\" id=\"slide\">
           
                <div id=\"precedent\" onclick=\"ChangeSlide(-1)\">&lt;</div>
                <div id=\"suivant\" onclick=\"ChangeSlide(1)\">&gt;</div>
</div>
<div id=\"slidermobil\">
            \t<a class=\"slidera\" href=\" ";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar_main");
        echo "\">  <img class =\"imgslider\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/slide/accueil-mobil-char.webp"), "html", null, true);
        echo "\" alt = \"char à voile\" id=\"slidemobil\">
              </a> 

                <div id=\"precedentmob\" onclick=\"ChangeSlideMob(-1)\">&lt;</div>
                <div id=\"suivantmob\" onclick=\"ChangeSlideMob(1)\">&gt;</div>
</div>
 <button class=\"consultplaning\" type=\"button\">
   <a class=\"aderoulant\" href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_presentation");
        echo "\">Réserver et Consulter le planing</a>
  </button>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "_partials/_navaccueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 88,  183 => 81,  174 => 75,  155 => 59,  152 => 58,  146 => 55,  141 => 53,  138 => 52,  131 => 48,  126 => 47,  121 => 44,  116 => 42,  112 => 40,  110 => 39,  90 => 22,  86 => 21,  82 => 20,  78 => 19,  69 => 13,  65 => 12,  61 => 11,  57 => 10,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<header id=\"navbar\" class=\"nav\">
    <a class=\"navbar-brand\" href=\"/\">
\t\t\t<img src=\"{{ asset('assets/uploads/logoeolia170px.png')}}\" alt=\"char à voile Baie de Somme\"></a>
     
    <div class=\"dropdown-1\">
        <button>Nos activités</button> 
            <div class=\"content\">
               <a href=\"{{ path('app_calendar_index') }}\">Toutes les séances</a>
               <a href=\"{{ path('calendar_all_char') }}\">Char à voile</a>
\t\t\t\t<a href=\"{{ path('cataAll_show') }}\">Catamaran</a>
\t\t\t\t<a href=\"{{ path('charkidAll_show') }}\">Char à voile kid</a>
            </div>
    </div>
     <div class=\"dropdown-1\">
        <button>Consulter le planning</button> 
            <div class=\"content\">
              <a href=\"{{ path('app_calendar_main') }} \"> Toutes les activités</a>
              <a href=\"{{ path('app_calendar_main_char') }} \"> Char à voile</a>
\t\t\t\t<a href=\"{{ path('app_calendar_main_cata') }} \"> Catamaran</a>
\t\t\t\t<a href=\"{{ path('app_calendar_main_kid') }} \"> Char à voile Kid</a>
            </div>
    </div>



 \t\t\t
\t
\t\t\t<a href=\"#\">Contact</a>
\t\t

\t\t





\t\t{% if app.user %}

\t\t\t
\t\t\t\t<a href=\"{{ path('app_purchase') }}\">Commandes</a>
\t\t\t
\t\t\t\t<a class=\"aderoulant\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
\t\t\t
\t\t\t\t{# CartService enregistré dans twig.yaml#}
\t\t\t\t<a href=\"{{ path('cart_index') }} \">🛒
\t\t\t\t({{ cartService.total | amount }})
\t\t\t\t</a>
\t\t\t
\t\t\t{% else %}
\t\t\t
\t\t\t\t<a href=\" {{ path('app_registration')  }}\">Inscription</a>
\t\t\t
\t\t\t\t<a href=\"{{ path('app_login') }}\">Connexion</a>
\t\t\t
\t\t\t{% endif %}

       <a href=\"{{ path('admin_user_index') }}\">Admin</a>




  </div>
   
</nav>


     <a class=\"icon\" onclick = \"myFunction()\">&#9776;</a>

</header>


<div id=\"slider\">
                <img class =\"imgslider\" src=\"{{ asset('assets/uploads/slide/char-accueiltitregros1500.webp')}}\" alt = \"char à voile\" id=\"slide\">
           
                <div id=\"precedent\" onclick=\"ChangeSlide(-1)\">&lt;</div>
                <div id=\"suivant\" onclick=\"ChangeSlide(1)\">&gt;</div>
</div>
<div id=\"slidermobil\">
            \t<a class=\"slidera\" href=\" {{ path('app_calendar_main')  }}\">  <img class =\"imgslider\" src=\"{{ asset('assets/uploads/slide/accueil-mobil-char.webp')}}\" alt = \"char à voile\" id=\"slidemobil\">
              </a> 

                <div id=\"precedentmob\" onclick=\"ChangeSlideMob(-1)\">&lt;</div>
                <div id=\"suivantmob\" onclick=\"ChangeSlideMob(1)\">&gt;</div>
</div>
 <button class=\"consultplaning\" type=\"button\">
   <a class=\"aderoulant\" href=\"{{ path('app_presentation') }}\">Réserver et Consulter le planing</a>
  </button>
", "_partials/_navaccueil.html.twig", "D:\\wamp64\\www\\symfony\\eolia-symfo-calendar\\templates\\_partials\\_navaccueil.html.twig");
    }
}
