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

/* admin/calendar/index.html.twig */
class __TwigTemplate_d1c4af71af650ba558ebc1c9b3f7227f72a51c1af3f06eb007c3fe0e981ec7eb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/calendar/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/calendar/index.html.twig"));

        $this->parent = $this->loadTemplate("base.admin.html.twig", "admin/calendar/index.html.twig", 1);
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

        echo "Calendar index";
        
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
        echo "    <h1>Calendar index Back-office</h1>

    <div class=\"onlydesktop\">
     <table class=\"tableau\">
        <thead class=\"tableau\">
            <tr>
              
                <th>Catégorie</th>
                <th>Start</th>
                <th>End</th>
                <th>Prix</th>
                <th>Stock</th>
                <th>action</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calendars"]) || array_key_exists("calendars", $context) ? $context["calendars"] : (function () { throw new RuntimeError('Variable "calendars" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["calendar"]) {
            // line 24
            echo "            <tr>
               
                <td class=\"tableau\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "category", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <td class=\"tableau\">";
            // line 27
            ((twig_get_attribute($this->env, $this->source, $context["calendar"], "start", [], "any", false, false, false, 27)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "start", [], "any", false, false, false, 27), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td class=\"tableau\">";
            // line 28
            ((twig_get_attribute($this->env, $this->source, $context["calendar"], "end", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "end", [], "any", false, false, false, 28), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                 <td class=\"tableau\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "price", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td class=\"tableau\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "stock", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
               
                <td class=\"tableau\">
                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_calendar_show", ["id" => twig_get_attribute($this->env, $this->source, $context["calendar"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">show</a>
                 
                </td>
                  <td class=\"tableau\">
               
                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_calendar_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["calendar"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">modifier ou supprimer</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "            <tr>
                <td class=\"tableau\">Aucune correspondance trouvée</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calendar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>
   </div>
   

    <div class=\"onlymobil\">
     ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calendars"]) || array_key_exists("calendars", $context) ? $context["calendars"] : (function () { throw new RuntimeError('Variable "calendars" does not exist.', 52, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["calendar"]) {
            // line 53
            echo "           
           
                <h3>Catégorie</h3>
                  <p>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "category", [], "any", false, false, false, 56), "html", null, true);
            echo "</p>
          
                <h3>Start</h3>
                <p>";
            // line 59
            ((twig_get_attribute($this->env, $this->source, $context["calendar"], "start", [], "any", false, false, false, 59)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "start", [], "any", false, false, false, 59), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</p>
          
                <h3>End</h3>
                 <p>";
            // line 62
            ((twig_get_attribute($this->env, $this->source, $context["calendar"], "end", [], "any", false, false, false, 62)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "end", [], "any", false, false, false, 62), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</p>
           
                <h3>Prix</h3>
                 <p>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "price", [], "any", false, false, false, 65), "html", null, true);
            echo "</p>
            
                <h3>Stock</h3>
                 <p>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "stock", [], "any", false, false, false, 68), "html", null, true);
            echo "</p>
           
              <h3>Bcg</h3>
              <p>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "backgroundColor", [], "any", false, false, false, 71), "html", null, true);
            echo "</p>
            
                <h3>Border</h3>
                <p>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "borderColor", [], "any", false, false, false, 74), "html", null, true);
            echo "</p>
           
                <h3>Text</h3>
                <p>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "textColor", [], "any", false, false, false, 77), "html", null, true);
            echo "</p>
          
                <h3>action</h3>
                   <p>
                    <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_calendar_show", ["id" => twig_get_attribute($this->env, $this->source, $context["calendar"], "id", [], "any", false, false, false, 81)]), "html", null, true);
            echo "\">show</a>
                </p>
            
                <h3>action</h3>
                <p> 
                    <a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_calendar_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["calendar"], "id", [], "any", false, false, false, 86)]), "html", null, true);
            echo "\">modifier ou supprimer</a>
                </p>
          
         <hr>
        
       
    
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 94
            echo "           
                <p>Aucune correspondance trouvée</p>
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calendar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "    
   </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/calendar/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 98,  252 => 94,  239 => 86,  231 => 81,  224 => 77,  218 => 74,  212 => 71,  206 => 68,  200 => 65,  194 => 62,  188 => 59,  182 => 56,  177 => 53,  172 => 52,  164 => 46,  155 => 42,  146 => 38,  138 => 33,  132 => 30,  128 => 29,  124 => 28,  120 => 27,  116 => 26,  112 => 24,  107 => 23,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.admin.html.twig' %}

{% block title %}Calendar index{% endblock %}

{% block body %}
    <h1>Calendar index Back-office</h1>

    <div class=\"onlydesktop\">
     <table class=\"tableau\">
        <thead class=\"tableau\">
            <tr>
              
                <th>Catégorie</th>
                <th>Start</th>
                <th>End</th>
                <th>Prix</th>
                <th>Stock</th>
                <th>action</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
        {% for calendar in calendars %}
            <tr>
               
                <td class=\"tableau\">{{ calendar.category }}</td>
                <td class=\"tableau\">{{ calendar.start ? calendar.start|date('Y-m-d H:i:s') : '' }}</td>
                <td class=\"tableau\">{{ calendar.end ? calendar.end|date('Y-m-d H:i:s') : '' }}</td>
                 <td class=\"tableau\">{{ calendar.price }}</td>
                <td class=\"tableau\">{{ calendar.stock }}</td>
               
                <td class=\"tableau\">
                    <a href=\"{{ path('admin_calendar_show', {'id': calendar.id}) }}\">show</a>
                 
                </td>
                  <td class=\"tableau\">
               
                    <a href=\"{{ path('admin_calendar_edit', {'id': calendar.id}) }}\">modifier ou supprimer</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td class=\"tableau\">Aucune correspondance trouvée</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
   </div>
   

    <div class=\"onlymobil\">
     {% for calendar in calendars %}
           
           
                <h3>Catégorie</h3>
                  <p>{{ calendar.category }}</p>
          
                <h3>Start</h3>
                <p>{{ calendar.start ? calendar.start|date('Y-m-d H:i:s') : '' }}</p>
          
                <h3>End</h3>
                 <p>{{ calendar.end ? calendar.end|date('Y-m-d H:i:s') : '' }}</p>
           
                <h3>Prix</h3>
                 <p>{{ calendar.price }}</p>
            
                <h3>Stock</h3>
                 <p>{{ calendar.stock }}</p>
           
              <h3>Bcg</h3>
              <p>{{ calendar.backgroundColor }}</p>
            
                <h3>Border</h3>
                <p>{{ calendar.borderColor }}</p>
           
                <h3>Text</h3>
                <p>{{ calendar.textColor }}</p>
          
                <h3>action</h3>
                   <p>
                    <a href=\"{{ path('admin_calendar_show', {'id': calendar.id}) }}\">show</a>
                </p>
            
                <h3>action</h3>
                <p> 
                    <a href=\"{{ path('admin_calendar_edit', {'id': calendar.id}) }}\">modifier ou supprimer</a>
                </p>
          
         <hr>
        
       
    
        {% else %}
           
                <p>Aucune correspondance trouvée</p>
            
        {% endfor %}
    
   </div>
{% endblock %}

", "admin/calendar/index.html.twig", "D:\\wamp64\\www\\symfony\\eolia-symfo-calendar\\templates\\admin\\calendar\\index.html.twig");
    }
}
