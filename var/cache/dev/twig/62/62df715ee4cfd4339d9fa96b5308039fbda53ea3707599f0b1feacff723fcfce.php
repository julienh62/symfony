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

/* baseaccueil.html.twig */
class __TwigTemplate_27ead558543c039ba0cea4dd33f158f67ba30950d6f7914cd755ea6acdfcb6fc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseaccueil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseaccueil.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\"> 





       ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">";
        // line 15
        echo "      
\t\t
\t    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css'>";
        // line 18
        echo "\t\t";
        // line 19
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/menu.js"), "html", null, true);
        echo "\">
 
    </head>


\t<body>

\t\t";
        // line 26
        $this->loadTemplate("_partials/_navaccueil.html.twig", "baseaccueil.html.twig", 26)->display($context);
        echo " 
\t\t  
\t\t
\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "flashes", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["rubrique"] => $context["messages"]) {
            // line 30
            echo "\t\t\t<main class=\"container\">
\t\t\t\t<div class=\"alert alert-";
            // line 31
            echo twig_escape_filter($this->env, $context["rubrique"], "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 33
                echo "\t\t\t\t\t\t<p>";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</p>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t\t\t</div>
     
          </main>

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rubrique'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t
\t\t
\t<main class=\"container\">  
\t\t
\t\t";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "</main> 
\t\t  <div id=\"footer\">
            ";
        // line 47
        $this->displayBlock('footer', $context, $blocks);
        // line 60
        echo "        </div>
\t
\t\t";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
        echo "
\t</body>

\t<!--<script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/slider.js"), "html", null, true);
        echo "\" defer> </script> -->
</html>




";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Éolia";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 48
        echo " <div class=\"reseaux\">
                <a href=\"https://www.facebook.com/charavoilepicardie\" target=\"_blank\" class=\"fab fa-facebook-square\"></a>
                <a href=\"https://www.youtube.com/watch?v=suYScmKY7os\" target=\"_blank\" class=\"fab fa-youtube-square\"></a>
                <a href=\"https://www.instagram.com/eoliapicardie/?hl=fr\" target=\"_blank\" class=\"fab fa-instagram-square\"></a>
            </div>
            <nav class=\"navfooter\">
                <ul class=\"légales\">
                    <li><a href=\"politique-confidentialite.php\">POLITIQUE DE CONFIDENTIALITÉ</a></li>
                    <li><a href=\"mentions-legales.php\">MENTIONS LÉGALES</a></li>
                    <li><a href=\"cgv.php\">CGV</a></li>
                </ul>
            </nav>            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseaccueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 62,  236 => 48,  226 => 47,  207 => 44,  189 => 13,  170 => 5,  153 => 66,  148 => 63,  146 => 62,  142 => 60,  140 => 47,  136 => 45,  134 => 44,  128 => 40,  118 => 35,  109 => 33,  105 => 32,  101 => 31,  98 => 30,  94 => 29,  88 => 26,  77 => 19,  75 => 18,  71 => 15,  67 => 14,  65 => 13,  54 => 5,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Éolia{% endblock %}</title>

    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\"> 





       {% block stylesheets %}{% endblock %}
\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">{# fichiers js #}
      
\t\t
\t    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css'>{# pour charger icone facebook #}
\t\t{# feuille de style #}
        <link rel=\"stylesheet\" href=\"{{ asset('assets/js/menu.js') }}\">
 
    </head>


\t<body>

\t\t{% include \"_partials/_navaccueil.html.twig\" %} 
\t\t  
\t\t
\t\t\t{% for rubrique, messages in app.flashes  %}
\t\t\t<main class=\"container\">
\t\t\t\t<div class=\"alert alert-{{ rubrique }}\">
\t\t\t\t\t{% for message in messages %}
\t\t\t\t\t\t<p>{{ message }}</p>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
     
          </main>

\t\t\t{% endfor %}
\t\t
\t\t
\t<main class=\"container\">  
\t\t
\t\t{% block body %}    {% endblock %}
</main> 
\t\t  <div id=\"footer\">
            {% block footer %}
 <div class=\"reseaux\">
                <a href=\"https://www.facebook.com/charavoilepicardie\" target=\"_blank\" class=\"fab fa-facebook-square\"></a>
                <a href=\"https://www.youtube.com/watch?v=suYScmKY7os\" target=\"_blank\" class=\"fab fa-youtube-square\"></a>
                <a href=\"https://www.instagram.com/eoliapicardie/?hl=fr\" target=\"_blank\" class=\"fab fa-instagram-square\"></a>
            </div>
            <nav class=\"navfooter\">
                <ul class=\"légales\">
                    <li><a href=\"politique-confidentialite.php\">POLITIQUE DE CONFIDENTIALITÉ</a></li>
                    <li><a href=\"mentions-legales.php\">MENTIONS LÉGALES</a></li>
                    <li><a href=\"cgv.php\">CGV</a></li>
                </ul>
            </nav>            {% endblock %}
        </div>
\t
\t\t{% block javascripts %}{% endblock %}

\t</body>

\t<!--<script src=\"{{ asset('assets/js/slider.js') }}\" defer> </script> -->
</html>




", "baseaccueil.html.twig", "D:\\wamp64\\www\\symfony\\eolia-symfo-calendar\\templates\\baseaccueil.html.twig");
    }
}
