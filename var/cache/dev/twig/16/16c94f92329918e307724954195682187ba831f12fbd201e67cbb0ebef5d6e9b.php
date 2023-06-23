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

/* emails/purchase_success.html.twig */
class __TwigTemplate_d052c987779ca2a910cca47961f583cc5968102bfd706b48cae154bf4b92fe96 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/purchase_success.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/purchase_success.html.twig"));

        // line 1
        echo "<h1> Votre commande n° ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1), "html", null, true);
        echo " est bien enregistrée et payée </h1>

 <p> Merci à vous ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "fullName", [], "any", false, false, false, 3), "html", null, true);
        echo " </p>
<table>
  <thead>
    <th> Activité </th>
    <th> Quantité  </th>
    <th> Prix.Unitaire  </th>
    <th>  Total </th>
  </thead>

  <tbody>
     ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 13, $this->source); })()), "purchaseItems", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "       <tr>
         <td> ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "CalendarName", [], "any", false, false, false, 15), "html", null, true);
            echo "  </td>
         <td> ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 16), "html", null, true);
            echo "  </td>
         <td> ";
            // line 17
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["item"], "calendarPrice", [], "any", false, false, false, 17) / 100), "html", null, true);
            echo " € </td>
         <td> ";
            // line 18
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 18) / 100), "html", null, true);
            echo "  € </td>
       </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "  </tbody>

  <tfoot>  
    <tr>
      <td> Total </td>
      <td>";
        // line 26
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 26, $this->source); })()), "total", [], "any", false, false, false, 26) / 100), "html", null, true);
        echo " € </td>
    </tr>
  </tfoot>
</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/purchase_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 26,  90 => 21,  81 => 18,  77 => 17,  73 => 16,  69 => 15,  66 => 14,  62 => 13,  49 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1> Votre commande n° {{ purchase.id  }} est bien enregistrée et payée </h1>

 <p> Merci à vous {{ user.fullName }} </p>
<table>
  <thead>
    <th> Activité </th>
    <th> Quantité  </th>
    <th> Prix.Unitaire  </th>
    <th>  Total </th>
  </thead>

  <tbody>
     {% for item in purchase.purchaseItems %}
       <tr>
         <td> {{ item.CalendarName }}  </td>
         <td> {{ item.quantity }}  </td>
         <td> {{ item.calendarPrice / 100 }} € </td>
         <td> {{ item.total / 100  }}  € </td>
       </tr>
      {% endfor %}
  </tbody>

  <tfoot>  
    <tr>
      <td> Total </td>
      <td>{{ purchase.total / 100 }} € </td>
    </tr>
  </tfoot>
</table>", "emails/purchase_success.html.twig", "D:\\wamp64\\www\\symfony\\eolia-symfo-calendar\\templates\\emails\\purchase_success.html.twig");
    }
}
