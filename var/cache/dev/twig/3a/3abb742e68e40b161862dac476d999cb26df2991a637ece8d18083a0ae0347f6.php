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

/* purchase/index.html.twig */
class __TwigTemplate_7915c5540938e27642285b70ff1a86bbe3c5fce1d1872a5c1055404bbc357176 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "purchase/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "purchase/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "purchase/index.html.twig", 1);
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

        echo "Mes commandes";
        
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
        echo "<main class=\"container\">
  <div class =\"purchasedesktop\">
   <h1>Mes commandes</h1>
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
        // line 24
        echo "
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["purchases"]) || array_key_exists("purchases", $context) ? $context["purchases"] : (function () { throw new RuntimeError('Variable "purchases" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 26
            echo "          <tr>
              <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
              <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "address", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
              <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "postalCode", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
              <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "city", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
              <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "createdAt", [], "any", false, false, false, 31), "Y-m-d H:i:s"), "html", null, true);
            echo " </td>
               <td> ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["p"], "purchaseItems", [], "any", false, false, false, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo "  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 32), "html", null, true);
                echo " x ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "calendarName", [], "any", false, false, false, 32), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["item"], "calendarPrice", [], "any", false, false, false, 32) / 100), "html", null, true);
                echo "€ )  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </td>
                <td></td>
              <td> ";
            // line 34
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["p"], "total", [], "any", false, false, false, 34) / 100), "html", null, true);
            echo "€ total de la commande </td>
              
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </tbody>
    </table>
  </div>  

 
";
        // line 43
        echo "
   <div class =\"purchasemobil\">
   <h1>Mes commandes</h1>
 
        

        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["purchases"]) || array_key_exists("purchases", $context) ? $context["purchases"] : (function () { throw new RuntimeError('Variable "purchases" does not exist.', 49, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 50
            echo "        <p  class=\"item-mobile\">Numéro de commande<p>
        <p class=\"datatitem\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 51), "html", null, true);
            echo "</p>
        <p class=\"item-mobil\">Adresse </p> 
        <p class=\"datatitem\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "address", [], "any", false, false, false, 53), "html", null, true);
            echo "</p>
        <p class=\"item-mobil\">Code Postal<p>
        <p class=\"datatitem\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "postalCode", [], "any", false, false, false, 55), "html", null, true);
            echo "</p>
        <p class=\"item-mobil\">Ville<p>
        <p class=\"datatitem\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "city", [], "any", false, false, false, 57), "html", null, true);
            echo "</p>
        <p class=\"item-mobil\">Date de la commande </p> 
        <p class=\"datatiteme\">";
            // line 59
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "createdAt", [], "any", false, false, false, 59), "Y-m-d H:i:s"), "html", null, true);
            echo "</p>
      
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
         
       
        
  </div>  
</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "purchase/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 62,  206 => 59,  201 => 57,  196 => 55,  191 => 53,  186 => 51,  183 => 50,  179 => 49,  171 => 43,  164 => 37,  155 => 34,  137 => 32,  133 => 31,  129 => 30,  125 => 29,  121 => 28,  117 => 27,  114 => 26,  110 => 25,  107 => 24,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes commandes{% endblock %}

{% block body %}
<main class=\"container\">
  <div class =\"purchasedesktop\">
   <h1>Mes commandes</h1>
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
   <h1>Mes commandes</h1>
 
        

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
{% endblock %}
", "purchase/index.html.twig", "D:\\wamp64\\www\\symfony\\eolia-symfo-calendar\\templates\\purchase\\index.html.twig");
    }
}
