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

/* _partials/_nav_admin.html.twig */
class __TwigTemplate_5566b19c9d8c204d43914bd324021705d2cd2517ddc9c9b2beb40a7f891e7f9e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_nav_admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_nav_admin.html.twig"));

        // line 1
        echo "

<header id=\"navbar\" class=\"nav\">
    <a class=\"navbar-brand\" href=\"/\">
\t\t\t<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/logoeolia170px.png"), "html", null, true);
        echo "\" alt=\"char à voile Baie de Somme\"></a>
      
\t\t\t\t\t\t\t <a class=\"dropdown-item\" href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_main_calendar");
        echo " \">Calendrier</a>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_calendar_new");
        echo " \"> Créer une séance (rdv)</a>
\t\t\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_calendar_index");
        echo "\"> Liste des séances </a>
\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customer_index");
        echo " \"> Liste des clients</a>\t
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customer_new");
        echo " \"> Créer un client</a>\t\t\t\t\t
  </div>
   
</nav>


     <a class=\"icon\" onclick = \"myFunction()\">&#9776;</a>

</header>
 


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "_partials/_nav_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 14,  69 => 13,  64 => 11,  59 => 9,  54 => 7,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<header id=\"navbar\" class=\"nav\">
    <a class=\"navbar-brand\" href=\"/\">
\t\t\t<img src=\"{{ asset('assets/uploads/logoeolia170px.png')}}\" alt=\"char à voile Baie de Somme\"></a>
      
\t\t\t\t\t\t\t <a class=\"dropdown-item\" href=\"{{ path('admin_main_calendar')  }} \">Calendrier</a>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('admin_calendar_new') }} \"> Créer une séance (rdv)</a>
\t\t\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('admin_calendar_index') }}\"> Liste des séances </a>
\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('admin_customer_index') }} \"> Liste des clients</a>\t
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('admin_customer_new') }} \"> Créer un client</a>\t\t\t\t\t
  </div>
   
</nav>


     <a class=\"icon\" onclick = \"myFunction()\">&#9776;</a>

</header>
 


", "_partials/_nav_admin.html.twig", "D:\\wamp64\\www\\symfony\\eolia-symfo-calendar\\templates\\_partials\\_nav_admin.html.twig");
    }
}
