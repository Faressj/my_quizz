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

/* question/index.html.twig */
class __TwigTemplate_ada32e7e553b9449c421efaa50daddad extends Template
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
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/index.html.twig"));

        // line 3
        echo "
<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\">
      <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
      <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/axentix@0.5.3/dist/css/axentix.min.css\">
      ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "  </head>
  <body>
    <div id=\"sidebar\">
      ";
        // line 16
        $this->displayBlock('sidebar', $context, $blocks);
        // line 23
        echo "    <div class=\"alls\">
      <div id=\"pub\"></div>
      <div id=\"content\">
        <p class=\"categorietitle\">Categories :</p>
          <ul class=\"categories\">
          ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["production"]) || array_key_exists("production", $context) ? $context["production"] : (function () { throw new RuntimeError('Variable "production" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 29
            echo "            <li><a class = \"categorie\" href=\"/question/1/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 29), "html", null, true);
            echo "</a></li> <hr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "          </ul>
      </div>
      <div class=\"contentss\">
        <div id=\"contentss\">
        <ul>
          ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 36, $this->source); })()), 0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 37
            echo "            <li> =>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "question", [], "any", false, false, false, 37), "html", null, true);
            echo "
              <input type=\"hidden\" value=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "\"
            </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
          ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 42, $this->source); })()), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 43
            echo "          
          ";
            // line 44
            if ((twig_get_attribute($this->env, $this->source, $context["reponse"], "idQuestion", [], "any", false, false, false, 44) < twig_length_filter($this->env, (isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 44, $this->source); })())))) {
                // line 45
                echo "            <div>
              <form method=\"link\" action=\"/question/";
                // line 46
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["reponse"], "idQuestion", [], "any", false, false, false, 46) + 1), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "idCategorie", [], "any", false, false, false, 46), "html", null, true);
                echo "\"> 
                <input type=\"radio\" id=\"reponse\" name=\"reponse\" value=";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponses", [], "any", false, false, false, 47), "html", null, true);
                echo " checked>
                <label for=\"huey\">";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 48), "html", null, true);
                echo "</label>
                <input type= hidden value = ";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "questions", [], "any", false, false, false, 49), "html", null, true);
                echo ">
            </div>
          ";
            } else {
                // line 52
                echo "          <div>
            <form method=\"link\" action=\"/reponse/";
                // line 53
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["reponse"], "idQuestion", [], "any", false, false, false, 53) + 1), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "idCategorie", [], "any", false, false, false, 53), "html", null, true);
                echo "\"> 
              <input type=\"radio\" id=\"reponse\" name=\"reponse\" value=";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponses", [], "any", false, false, false, 54), "html", null, true);
                echo " checked>
              <label for=\"reponse\">";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 55), "html", null, true);
                echo "</label>
              <input type= hidden value = ";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "questions", [], "any", false, false, false, 56), "html", null, true);
                echo ">
            </div>
          ";
            }
            // line 59
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "          
          ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 61, $this->source); })()), 0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 62
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["reponse"], "idQuestion", [], "any", false, false, false, 62) < twig_length_filter($this->env, (isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 62, $this->source); })())))) {
                // line 63
                echo "              <input type= \"submit\" value =\"suivant\">
              <button> <a href=\"/question/";
                // line 64
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["reponse"], "idQuestion", [], "any", false, false, false, 64) - 1), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "idCategorie", [], "any", false, false, false, 64), "html", null, true);
                echo "\"> precedent </a> </button>
            ";
            } elseif (twig_last($this->env,             // line 65
(isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 65, $this->source); })()))) {
                // line 66
                echo "
        <button> <a href=\"/reponse/";
                // line 67
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["reponse"], "idQuestion", [], "any", false, false, false, 67) + 1), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "idCategorie", [], "any", false, false, false, 67), "html", null, true);
                echo "\"> Valider </a> </button>
            ";
            }
            // line 69
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "          </form>
        </div>
      </div>
    </div>
  </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 17
        echo "        <ul class=\"\"container\">
          <li><a class=\"accueil\" href=\"/quizz\"></a></li>
          <li><a href=\"/categorie\">Categorie</a></li>
          <li><a class=\"questions\" href=\"questions\">Questions</a></li>
        </ul>
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "question/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 17,  272 => 16,  259 => 11,  249 => 10,  230 => 8,  215 => 70,  209 => 69,  202 => 67,  199 => 66,  197 => 65,  191 => 64,  188 => 63,  185 => 62,  181 => 61,  178 => 60,  172 => 59,  166 => 56,  162 => 55,  158 => 54,  152 => 53,  149 => 52,  143 => 49,  139 => 48,  135 => 47,  129 => 46,  126 => 45,  124 => 44,  121 => 43,  117 => 42,  114 => 41,  105 => 38,  100 => 37,  96 => 36,  89 => 31,  78 => 29,  74 => 28,  67 => 23,  65 => 16,  60 => 13,  58 => 10,  53 => 8,  46 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/base.html.twig #}
{# templates/base.html.twig #}

<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\">
      <title>{% block title %}Accueil{% endblock %}</title>
      <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/axentix@0.5.3/dist/css/axentix.min.css\">
      {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">
      {% endblock %}
  </head>
  <body>
    <div id=\"sidebar\">
      {% block sidebar %}
        <ul class=\"\"container\">
          <li><a class=\"accueil\" href=\"/quizz\"></a></li>
          <li><a href=\"/categorie\">Categorie</a></li>
          <li><a class=\"questions\" href=\"questions\">Questions</a></li>
        </ul>
      {% endblock %}
    <div class=\"alls\">
      <div id=\"pub\"></div>
      <div id=\"content\">
        <p class=\"categorietitle\">Categories :</p>
          <ul class=\"categories\">
          {% for product in production %}
            <li><a class = \"categorie\" href=\"/question/1/{{product.id}}\">{{product.name}}</a></li> <hr>
          {% endfor %}
          </ul>
      </div>
      <div class=\"contentss\">
        <div id=\"contentss\">
        <ul>
          {% for reponse in product |slice(0, 1) %}
            <li> =>{{reponse.question}}
              <input type=\"hidden\" value=\"{{reponse.id}}\"
            </li>
          {% endfor %}

          {% for reponse in product |slice(0,3) %}
          
          {% if reponse.idQuestion < prod|length  %}
            <div>
              <form method=\"link\" action=\"/question/{{reponse.idQuestion + 1}}/{{reponse.idCategorie}}\"> 
                <input type=\"radio\" id=\"reponse\" name=\"reponse\" value={{reponse.reponses}} checked>
                <label for=\"huey\">{{reponse.reponse}}</label>
                <input type= hidden value = {{reponse.questions}}>
            </div>
          {% else %}
          <div>
            <form method=\"link\" action=\"/reponse/{{reponse.idQuestion + 1}}/{{reponse.idCategorie}}\"> 
              <input type=\"radio\" id=\"reponse\" name=\"reponse\" value={{reponse.reponses}} checked>
              <label for=\"reponse\">{{reponse.reponse}}</label>
              <input type= hidden value = {{reponse.questions}}>
            </div>
          {%endif%}
          {% endfor %}
          
          {% for reponse in product |slice(0,1) %}
            {% if reponse.idQuestion < prod|length  %}
              <input type= \"submit\" value =\"suivant\">
              <button> <a href=\"/question/{{reponse.idQuestion - 1}}/{{reponse.idCategorie}}\"> precedent </a> </button>
            {% elseif prod|last %}

        <button> <a href=\"/reponse/{{reponse.idQuestion + 1}}/{{reponse.idCategorie}}\"> Valider </a> </button>
            {%endif%}
          {%endfor%}
          </form>
        </div>
      </div>
    </div>
  </body>
</html>", "question/index.html.twig", "/Users/fares/Documents/Projets/W@CSemestre2/Framework_MVC_PHP/a/templates/question/index.html.twig");
    }
}
