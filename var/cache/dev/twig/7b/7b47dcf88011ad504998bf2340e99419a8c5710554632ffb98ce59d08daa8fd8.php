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

/* admin/calendar/show_user.html.twig */
class __TwigTemplate_d6277db1890dbf52e8e1f0530b5bdb1ae86db6ebba97eea4f98d533623882eb6 extends Template
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
        return "base.admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/calendar/show_user.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/calendar/show_user.html.twig"));

        $this->parent = $this->loadTemplate("base.admin.html.twig", "admin/calendar/show_user.html.twig", 1);
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

        echo "Calendar";
        
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
        echo "
    <h1> Détail de la séance ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), "html", null, true);
        echo " </h1>
   <h2>Date: ";
        // line 8
        ((twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 8, $this->source); })()), "start", [], "any", false, false, false, 8)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 8, $this->source); })()), "start", [], "any", false, false, false, 8), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</h2>
    <img class=\"imgsite\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 9, $this->source); })()), "picture", [], "any", false, false, false, 9), "html", null, true);
        echo "\" alt=\"Image de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9), "html", null, true);
        echo "\">




    <table class=\"table\">
        <tbody>


        <tr>
            <th>Quantité-disponible</th>
            <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 20, $this->source); })()), "stock", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
        </tr>

        <tr>
            <th>Quantité-commandée</th>
         ";
        // line 26
        echo "         
           <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendarQuantityClient"]) || array_key_exists("calendarQuantityClient", $context) ? $context["calendarQuantityClient"] : (function () { throw new RuntimeError('Variable "calendarQuantityClient" does not exist.', 27, $this->source); })()), "quantity", [], "any", false, false, false, 27), "html", null, true);
        echo "</td> 
        </tr>

        <th>Quantité-commandée-somme </th>


        <td> ";
        // line 33
        echo "</td>
        </tr>
        <tr>
            <th>client</th>
            <td>";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["calendarName"]) || array_key_exists("calendarName", $context) ? $context["calendarName"] : (function () { throw new RuntimeError('Variable "calendarName" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
            <th>Titre</th>
            <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 42, $this->source); })()), "title", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
        </tr>

        <tr>
            <th>Date de début</th>
            <td>";
        // line 47
        ((twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 47, $this->source); })()), "start", [], "any", false, false, false, 47)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 47, $this->source); })()), "start", [], "any", false, false, false, 47), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
        </tr>
        <tr>
            <th>Date de fin</th>
            <td>";
        // line 51
        ((twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 51, $this->source); })()), "end", [], "any", false, false, false, 51)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 51, $this->source); })()), "end", [], "any", false, false, false, 51), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
        </tr>
        <tr>
            <th>Prix</th>
            <td>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 55, $this->source); })()), "price", [], "any", false, false, false, 55), "html", null, true);
        echo "</td>
        </tr>

        <tr>
            <th>Id activité</th>
            <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60), "html", null, true);
        echo "</td>
        </tr>



        </tbody>
    </table>
    <div class=\"action\">
    <h2>Ajout client</h2>
    ";
        // line 78
        echo "
   <a href=\"#\">ajout client</a>


        <a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_calendar_index");
        echo "\">Retours à la liste</a>

        <a href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_calendar_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 84, $this->source); })()), "id", [], "any", false, false, false, 84)]), "html", null, true);
        echo "\">edit</a>
        ";
        // line 85
        echo twig_include($this->env, $context, "admin/calendar/_delete_form.html.twig");
        echo "
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/calendar/show_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 85,  202 => 84,  197 => 82,  191 => 78,  179 => 60,  171 => 55,  164 => 51,  157 => 47,  149 => 42,  141 => 37,  135 => 33,  126 => 27,  123 => 26,  115 => 20,  99 => 9,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.admin.html.twig' %}

{% block title %}Calendar{% endblock %}

{% block body %}

    <h1> Détail de la séance {{ calendar.title }} </h1>
   <h2>Date: {{ calendar.start ? calendar.start|date('Y-m-d H:i:s') : '' }}</h2>
    <img class=\"imgsite\" src=\"{{ calendar.picture }}\" alt=\"Image de {{ calendar.title }}\">




    <table class=\"table\">
        <tbody>


        <tr>
            <th>Quantité-disponible</th>
            <td>{{ calendar.stock }}</td>
        </tr>

        <tr>
            <th>Quantité-commandée</th>
         {#}  {{ dump(calendarQuantityClient.quantity) }} #}
         
           <td>{{ calendarQuantityClient.quantity }}</td> 
        </tr>

        <th>Quantité-commandée-somme </th>


        <td> {#}  {{ dump(resultquery) }} #}</td>
        </tr>
        <tr>
            <th>client</th>
            <td>{{ calendarName }}</td>
        </tr>

        <tr>
            <th>Titre</th>
            <td>{{ calendar.title }}</td>
        </tr>

        <tr>
            <th>Date de début</th>
            <td>{{ calendar.start ? calendar.start|date('Y-m-d H:i:s') : '' }}</td>
        </tr>
        <tr>
            <th>Date de fin</th>
            <td>{{ calendar.end ? calendar.end|date('Y-m-d H:i:s') : '' }}</td>
        </tr>
        <tr>
            <th>Prix</th>
            <td>{{ calendar.price }}</td>
        </tr>

        <tr>
            <th>Id activité</th>
            <td>{{ calendar.id }}</td>
        </tr>



        </tbody>
    </table>
    <div class=\"action\">
    <h2>Ajout client</h2>
    {#} {{ form_start(form, {'action': path('admin_customer_new')}) }}



     {{ form_widget(form) }}

     <button type=\"submit\" class=\"success\">Valider</button>

     {{ form_end(form) }} #}

   <a href=\"#\">ajout client</a>


        <a href=\"{{ path('admin_calendar_index') }}\">Retours à la liste</a>

        <a href=\"{{ path('admin_calendar_edit', {'id': calendar.id}) }}\">edit</a>
        {{ include('admin/calendar/_delete_form.html.twig') }}
    </div>


{% endblock %}
", "admin/calendar/show_user.html.twig", "D:\\wamp64\\www\\symfony\\eolia-symfo-calendar\\templates\\admin\\calendar\\show_user.html.twig");
    }
}
