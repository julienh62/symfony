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

/* cart/index.html.twig */
class __TwigTemplate_85dafc8c8dddd12b5be8cb01f53401670ed296e921829fc77de2e8e3d04dc760 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        echo "panier";
        
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
    <h1>Mon panier</h1>

";
        // line 9
        if ((twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 9, $this->source); })())) > 0)) {
            // line 10
            echo "
<div class=\"onlydesktop\">
    <table class=\"tableau\">
        <thead class=\"tableau\">
            <tr>
                <th>Titre</th> 
                <th>Date de début</th>
                <th>Date de fin</th>
                <th>Prix</th>
                <th>Unité</th>
                <th>Total</th>
                <th> Ajouter </th>
                <th> Enlever </th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 28
                echo "         
            <tr>
                <td class=\"tableau\">";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "calendar", [], "any", false, false, false, 30), "title", [], "any", false, false, false, 30), "html", null, true);
                echo "</td>
            
                <td class=\"tableau\">";
                // line 32
                ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "calendar", [], "any", false, false, false, 32), "start", [], "any", false, false, false, 32)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "calendar", [], "any", false, false, false, 32), "start", [], "any", false, false, false, 32), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
                echo "</td>
           
                <td class=\"tableau\">";
                // line 34
                ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "calendar", [], "any", false, false, false, 34), "end", [], "any", false, false, false, 34)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "calendar", [], "any", false, false, false, 34), "end", [], "any", false, false, false, 34), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
                echo "</td>
           
                <td class=\"tableau\">";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "calendar", [], "any", false, false, false, 36), "price", [], "any", false, false, false, 36)), "html", null, true);
                echo "</td>
           
                <td class=\"tableau\">";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
           
                <td class=\"tableau\">";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 40)), "html", null, true);
                echo "</td>

                   <td>
                        <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "calendar", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43)]), "html", null, true);
                echo "\" class=\"success\">
                            🛒+
                        </a>
                    </td>
                          <td>
                        <a href=\" ";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_decrement", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "calendar", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\" class=\"warning\">
                          🛒-
                        </a>
                    </td>
                       <td>
                       
                        <a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "calendar", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54)]), "html", null, true);
                echo "\" class=\"danger\">
                            <i class=\"fas fa-trash-alt\">Supprimer</i>
                        </a>
                    </td>
            </tr>
            
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "      
        </tbody>


           <tfoot>
            <tr>
                <td>Total </td>
                <td class=\"text-start\">";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 68, $this->source); })())), "html", null, true);
            echo " </td>
                <td>
                    <a href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete_all");
            echo "\" class=\"danger\">
                           Vider le panier
                    </a>
                   
                </td>
            </tr>
        </tfoot>
    </table>
</div>
<div class=\"onlymobil\">
  ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 80, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 81
                echo "       
                <h3>Titre</h3>
                <p>";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "calendar", [], "any", false, false, false, 83), "title", [], "any", false, false, false, 83), "html", null, true);
                echo "</p>
           
                <h3>Date de début</h3>
                <p>";
                // line 86
                ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "calendar", [], "any", false, false, false, 86), "start", [], "any", false, false, false, 86)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "calendar", [], "any", false, false, false, 86), "start", [], "any", false, false, false, 86), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
                echo "</p>
           
                <h3>Date de fin</h3>
                <p>";
                // line 89
                ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "calendar", [], "any", false, false, false, 89), "end", [], "any", false, false, false, 89)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "calendar", [], "any", false, false, false, 89), "end", [], "any", false, false, false, 89), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
                echo "</p>
        
                <h3>Prix</h3>
                <p class=\"tableau\">";
                // line 92
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "calendar", [], "any", false, false, false, 92), "price", [], "any", false, false, false, 92)), "html", null, true);
                echo "</p>
          
                  <h3>Unité</h3>
                <p class=\"tableau\">";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 95), "html", null, true);
                echo "</p>
         
                <h3>Total</h3>
                <p class=\"tableau\">";
                // line 98
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 98)), "html", null, true);
                echo "</p>
          
                <h3>Ajouter</h3>
                   <p> <a href=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "calendar", [], "any", false, false, false, 101), "id", [], "any", false, false, false, 101)]), "html", null, true);
                echo "\" class=\"success\">
                            🛒 + 1
                        </a>
                        </p>
        
                <h3>Soustraire</h3>
                   <p>  <a href=\" ";
                // line 107
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_decrement", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "calendar", [], "any", false, false, false, 107), "id", [], "any", false, false, false, 107)]), "html", null, true);
                echo "\" class=\"warning\">
                          🛒 - 1
                        </a>
                        </p>
         
                <h3>Supprimer</h3>
                   <p>  <a href=\"";
                // line 113
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "calendar", [], "any", false, false, false, 113), "id", [], "any", false, false, false, 113)]), "html", null, true);
                echo "\" class=\"danger\">
                            <i class=\"fas fa-trash-alt\">Supprimer</i>
                        </a>
                        </p>
          
                <p>
                    <a class=\"milieu\" href=\"";
                // line 119
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete_all");
                echo "\" class=\"danger\">
                           Vider le panier
                    </a>
                </p>

        <p class=\"milieu\">
                Total ";
                // line 125
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 125, $this->source); })())), "html", null, true);
                echo " 
            </p>

   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "

</div>
<div class=\"milieu\">
    <a class=\"success\" href=\"";
            // line 133
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar_index");
            echo "\">
           Compléter votre panier
       </a>
 </div>      
    
       <hr>
           ";
            // line 139
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 139, $this->source); })()), "user", [], "any", false, false, false, 139)) {
                // line 140
                echo "     <h2>Confirmez votre commande en remplissant ce formulaire</h2>
     ";
                // line 141
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["confirmationForm"]) || array_key_exists("confirmationForm", $context) ? $context["confirmationForm"] : (function () { throw new RuntimeError('Variable "confirmationForm" does not exist.', 141, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_purchase_confirm")]);
                echo "



     ";
                // line 145
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["confirmationForm"]) || array_key_exists("confirmationForm", $context) ? $context["confirmationForm"] : (function () { throw new RuntimeError('Variable "confirmationForm" does not exist.', 145, $this->source); })()), 'widget');
                echo "

     <button type=\"submit\" class=\"success\">Valider</button>

     ";
                // line 149
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["confirmationForm"]) || array_key_exists("confirmationForm", $context) ? $context["confirmationForm"] : (function () { throw new RuntimeError('Variable "confirmationForm" does not exist.', 149, $this->source); })()), 'form_end');
                echo "


       ";
            } else {
                // line 153
                echo "           <div class=\"d-flex align-items-center\">
               <h2>Vous devez être connecté pour confirmer cette commande</h2>
                <a href=\"";
                // line 155
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                echo "\" class=\"success\">Connexion</a>
           </div>
           <div class=\"d-flex align-items-center\">
           <h2>Vous devez vous inscrire si vous n'avez pas encore de compte</h2>
                <a href=\"";
                // line 159
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registration");
                echo "\" class=\"secondary\">Inscription</a>
           </div>
       ";
            }
            // line 162
            echo "      ";
        } else {
            // line 163
            echo "

            <h2>Aucune séance dans votre panier</h2>


           <a  class=\"btn btn-primary\" href=\"";
            // line 168
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar_index");
            echo "\">
               Retour aux séances
           </a>
 ";
        }
        // line 172
        echo "  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 172,  368 => 168,  361 => 163,  358 => 162,  352 => 159,  345 => 155,  341 => 153,  334 => 149,  327 => 145,  320 => 141,  317 => 140,  315 => 139,  306 => 133,  300 => 129,  290 => 125,  281 => 119,  272 => 113,  263 => 107,  254 => 101,  248 => 98,  242 => 95,  236 => 92,  230 => 89,  224 => 86,  218 => 83,  214 => 81,  210 => 80,  197 => 70,  192 => 68,  183 => 61,  170 => 54,  161 => 48,  153 => 43,  147 => 40,  142 => 38,  137 => 36,  132 => 34,  127 => 32,  122 => 30,  118 => 28,  114 => 27,  95 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}panier{% endblock %}

{% block body %}

    <h1>Mon panier</h1>

{% if items | length > 0 %}

<div class=\"onlydesktop\">
    <table class=\"tableau\">
        <thead class=\"tableau\">
            <tr>
                <th>Titre</th> 
                <th>Date de début</th>
                <th>Date de fin</th>
                <th>Prix</th>
                <th>Unité</th>
                <th>Total</th>
                <th> Ajouter </th>
                <th> Enlever </th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
        {% for item in items %}
         
            <tr>
                <td class=\"tableau\">{{ item.calendar.title }}</td>
            
                <td class=\"tableau\">{{ item.calendar.start ? item.calendar.start|date('Y-m-d H:i:s') : '' }}</td>
           
                <td class=\"tableau\">{{ item.calendar.end ? item.calendar.end|date('Y-m-d H:i:s') : '' }}</td>
           
                <td class=\"tableau\">{{  item.calendar.price | amount }}</td>
           
                <td class=\"tableau\">{{ item.quantity }}</td>
           
                <td class=\"tableau\">{{ item.total | amount }}</td>

                   <td>
                        <a href=\"{{path(\"cart_add\", {'id': item.calendar.id})}}\" class=\"success\">
                            🛒+
                        </a>
                    </td>
                          <td>
                        <a href=\" {{path(\"cart_decrement\", {'id': item.calendar.id})}}\" class=\"warning\">
                          🛒-
                        </a>
                    </td>
                       <td>
                       
                        <a href=\"{{path(\"cart_delete\", {'id': item.calendar.id})}}\" class=\"danger\">
                            <i class=\"fas fa-trash-alt\">Supprimer</i>
                        </a>
                    </td>
            </tr>
            
          {% endfor %}
      
        </tbody>


           <tfoot>
            <tr>
                <td>Total </td>
                <td class=\"text-start\">{{ total | amount }} </td>
                <td>
                    <a href=\"{{path(\"cart_delete_all\")}}\" class=\"danger\">
                           Vider le panier
                    </a>
                   
                </td>
            </tr>
        </tfoot>
    </table>
</div>
<div class=\"onlymobil\">
  {% for item in items %}
       
                <h3>Titre</h3>
                <p>{{ item.calendar.title }}</p>
           
                <h3>Date de début</h3>
                <p>{{ item.calendar.start ? item.calendar.start|date('Y-m-d H:i:s') : '' }}</p>
           
                <h3>Date de fin</h3>
                <p>{{ item.calendar.end ? item.calendar.end|date('Y-m-d H:i:s') : '' }}</p>
        
                <h3>Prix</h3>
                <p class=\"tableau\">{{  item.calendar.price | amount }}</p>
          
                  <h3>Unité</h3>
                <p class=\"tableau\">{{ item.quantity }}</p>
         
                <h3>Total</h3>
                <p class=\"tableau\">{{ item.total | amount }}</p>
          
                <h3>Ajouter</h3>
                   <p> <a href=\"{{path(\"cart_add\", {'id': item.calendar.id})}}\" class=\"success\">
                            🛒 + 1
                        </a>
                        </p>
        
                <h3>Soustraire</h3>
                   <p>  <a href=\" {{path(\"cart_decrement\", {'id': item.calendar.id})}}\" class=\"warning\">
                          🛒 - 1
                        </a>
                        </p>
         
                <h3>Supprimer</h3>
                   <p>  <a href=\"{{path(\"cart_delete\", {'id': item.calendar.id})}}\" class=\"danger\">
                            <i class=\"fas fa-trash-alt\">Supprimer</i>
                        </a>
                        </p>
          
                <p>
                    <a class=\"milieu\" href=\"{{path(\"cart_delete_all\")}}\" class=\"danger\">
                           Vider le panier
                    </a>
                </p>

        <p class=\"milieu\">
                Total {{ total | amount }} 
            </p>

   {% endfor %}


</div>
<div class=\"milieu\">
    <a class=\"success\" href=\"{{path(\"app_calendar_index\")}}\">
           Compléter votre panier
       </a>
 </div>      
    
       <hr>
           {% if app.user %}
     <h2>Confirmez votre commande en remplissant ce formulaire</h2>
     {{ form_start(confirmationForm, {'action': path('app_purchase_confirm')}) }}



     {{ form_widget(confirmationForm) }}

     <button type=\"submit\" class=\"success\">Valider</button>

     {{ form_end(confirmationForm) }}


       {% else %}
           <div class=\"d-flex align-items-center\">
               <h2>Vous devez être connecté pour confirmer cette commande</h2>
                <a href=\"{{ path('app_login') }}\" class=\"success\">Connexion</a>
           </div>
           <div class=\"d-flex align-items-center\">
           <h2>Vous devez vous inscrire si vous n'avez pas encore de compte</h2>
                <a href=\"{{ path('app_registration') }}\" class=\"secondary\">Inscription</a>
           </div>
       {% endif %}
      {% else %}


            <h2>Aucune séance dans votre panier</h2>


           <a  class=\"btn btn-primary\" href=\"{{path(\"app_calendar_index\")}}\">
               Retour aux séances
           </a>
 {% endif %}
  
{% endblock %}
", "cart/index.html.twig", "D:\\wamp64\\www\\symfony\\eolia-symfo-calendar\\templates\\cart\\index.html.twig");
    }
}
