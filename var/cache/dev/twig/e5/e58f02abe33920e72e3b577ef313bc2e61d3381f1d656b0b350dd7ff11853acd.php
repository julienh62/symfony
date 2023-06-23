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

/* _partials/_footer.html.twig */
class __TwigTemplate_da6f2a0613c2ea7714159262f63132009136dfca2eff4cd492e564baca3bd9f6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_footer.html.twig"));

        // line 1
        echo "<div id=\"footer\">
            
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
            </nav>           
        </div>
\t
\t\t
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "_partials/_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"footer\">
            
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
            </nav>           
        </div>
\t
\t\t
", "_partials/_footer.html.twig", "D:\\wamp64\\www\\symfony\\eolia-symfo-calendar\\templates\\_partials\\_footer.html.twig");
    }
}
