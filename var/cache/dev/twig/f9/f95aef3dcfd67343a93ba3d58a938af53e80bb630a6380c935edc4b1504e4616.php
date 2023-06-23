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

/* admin/user/show.html.twig */
class __TwigTemplate_b3e87b61b05de41a061ce5d5d3e3594c789783247d3261b1b7676566a28cdc40 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/user/show.html.twig", 1);
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

        echo "mon compte
";
        
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
   <main class=\"container\">
      <h1> Compte du client
      </h1>
   
";
        // line 13
        echo "

                <h3>Nom</h3>
                     <h3>
                  ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "fullName", [], "any", false, false, false, 17), "html", null, true);
        echo "  
                     </h3>
                     <h3> Email </h3>
                     <h3>
                  ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "email", [], "any", false, false, false, 21), "html", null, true);
        echo "  
                     </h3>
            
           <div class =\"purchasedesktop\">
   <h1> Commandes du client</h1>
    <table class=\"tableau\">
    <thead>
    <tr>
        <th>Numéro de commande</th>
        <th>Adresse</th>
        <th>Code Postal</th>
        <th>Ville</th>
        <th>Date de la commande</th>
        <th>Détail <th/>
        <th>Total de la commande</th>
       
    </tr>
    </thead>
    <tbody>
";
        // line 41
        echo "
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["purchases"]) || array_key_exists("purchases", $context) ? $context["purchases"] : (function () { throw new RuntimeError('Variable "purchases" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 43
            echo "          <tr>
              <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
              <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "address", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
              <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "postalCode", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
              <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "city", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
              <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "createdAt", [], "any", false, false, false, 48), "Y-m-d H:i:s"), "html", null, true);
            echo " </td>
               <td> ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["p"], "purchaseItems", [], "any", false, false, false, 49));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo "  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 49), "html", null, true);
                echo " x ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "calendarName", [], "any", false, false, false, 49), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["item"], "calendarPrice", [], "any", false, false, false, 49) / 100), "html", null, true);
                echo "€ )  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </td>
                <td></td>
              <td> ";
            // line 51
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["p"], "total", [], "any", false, false, false, 51) / 100), "html", null, true);
            echo "€ total de la commande </td>
              
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "    </tbody>
    </table>
  </div>  

 
";
        // line 60
        echo "
   <div class =\"purchasemobil\">
   <h1>Commandes du client</h1>
 
        

        ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["purchases"]) || array_key_exists("purchases", $context) ? $context["purchases"] : (function () { throw new RuntimeError('Variable "purchases" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 67
            echo "        <p  class=\"item-mobile\">Numéro de commande<p>
        <p class=\"datatitem\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 68), "html", null, true);
            echo "</p>
        <p class=\"item-mobil\">Adresse </p> 
        <p class=\"datatitem\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "address", [], "any", false, false, false, 70), "html", null, true);
            echo "</p>
        <p class=\"item-mobil\">Code Postal<p>
        <p class=\"datatitem\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "postalCode", [], "any", false, false, false, 72), "html", null, true);
            echo "</p>
        <p class=\"item-mobil\">Ville<p>
        <p class=\"datatitem\">";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "city", [], "any", false, false, false, 74), "html", null, true);
            echo "</p>
        <p class=\"item-mobil\">Date de la commande </p> 
        <p class=\"datatiteme\">";
            // line 76
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "createdAt", [], "any", false, false, false, 76), "Y-m-d H:i:s"), "html", null, true);
            echo "</p>
      
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "
      
       
        
  </div>  
    
   </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 79,  230 => 76,  225 => 74,  220 => 72,  215 => 70,  210 => 68,  207 => 67,  203 => 66,  195 => 60,  188 => 54,  179 => 51,  161 => 49,  157 => 48,  153 => 47,  149 => 46,  145 => 45,  141 => 44,  138 => 43,  134 => 42,  131 => 41,  109 => 21,  102 => 17,  96 => 13,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}mon compte
{% endblock %}

{% block body %}

   <main class=\"container\">
      <h1> Compte du client
      </h1>
   
{#}<p>   {{ dump (user) }}</p> #}


                <h3>Nom</h3>
                     <h3>
                  {{ user.fullName }}  
                     </h3>
                     <h3> Email </h3>
                     <h3>
                  {{ user.email }}  
                     </h3>
            
           <div class =\"purchasedesktop\">
   <h1> Commandes du client</h1>
    <table class=\"tableau\">
    <thead>
    <tr>
        <th>Numéro de commande</th>
        <th>Adresse</th>
        <th>Code Postal</th>
        <th>Ville</th>
        <th>Date de la commande</th>
        <th>Détail <th/>
        <th>Total de la commande</th>
       
    </tr>
    </thead>
    <tbody>
{#    {{ dump(purchases) }}#}

        {% for p in purchases %}
          <tr>
              <td>{{ p.id  }}</td>
              <td>{{ p.address }}</td>
              <td>{{ p.postalCode }}</td>
              <td>{{ p.city }}</td>
              <td>{{ p.createdAt| date('Y-m-d H:i:s') }} </td>
               <td> {% for item in p.purchaseItems  %}  {{ item.quantity }} x {{ item.calendarName }} ({{ item.calendarPrice /100 }}€ )  {%  endfor %} </td>
                <td></td>
              <td> {{ p.total / 100 }}€ total de la commande </td>
              
    {%  endfor %}
    </tbody>
    </table>
  </div>  

 
{#    {{ dump(purchases) }}#}

   <div class =\"purchasemobil\">
   <h1>Commandes du client</h1>
 
        

        {% for p in purchases %}
        <p  class=\"item-mobile\">Numéro de commande<p>
        <p class=\"datatitem\">{{ p.id  }}</p>
        <p class=\"item-mobil\">Adresse </p> 
        <p class=\"datatitem\">{{ p.address }}</p>
        <p class=\"item-mobil\">Code Postal<p>
        <p class=\"datatitem\">{{ p.postalCode }}</p>
        <p class=\"item-mobil\">Ville<p>
        <p class=\"datatitem\">{{ p.city }}</p>
        <p class=\"item-mobil\">Date de la commande </p> 
        <p class=\"datatiteme\">{{ p.createdAt| date('Y-m-d H:i:s') }}</p>
      
         {%  endfor %}

      
       
        
  </div>  
    
   </main>
{% endblock %}", "admin/user/show.html.twig", "D:\\wamp64\\www\\symfony\\eolia-symfo-calendar\\templates\\admin\\user\\show.html.twig");
    }
}
