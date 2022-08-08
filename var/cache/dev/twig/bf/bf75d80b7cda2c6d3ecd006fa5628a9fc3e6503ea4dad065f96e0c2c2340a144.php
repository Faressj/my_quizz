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
class __TwigTemplate_0e7a2cde05aedf008ec7eb911d9261bb96c5528119edba54771c93be272e4f55 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/index.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>
    <body>

        <div id=\"content\">
<ul>


  ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 14, $this->source); })()), 0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 15
            echo "
        <li> =>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "question", [], "any", false, false, false, 16), "html", null, true);
            echo "
    <input type=\"hidden\" value=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 17), "html", null, true);
            echo "\"
    </li>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "  
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 22, $this->source); })()), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 23
            echo "    
  ";
            // line 24
            if ((-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["reponse"], "idQuestion", [], "any", false, false, false, 24), twig_length_filter($this->env, (isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 24, $this->source); })()))))) {
                // line 25
                echo "     <div>
     <form method=\"link\" action=\"/question/";
                // line 26
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["reponse"], "idQuestion", [], "any", false, false, false, 26) + 1), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "idCategorie", [], "any", false, false, false, 26), "html", null, true);
                echo "\"> 
      <input type=\"radio\" id=\"reponse\" name=\"reponse\" value=";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponses", [], "any", false, false, false, 27), "html", null, true);
                echo "
             checked>
      <label for=\"huey\">";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 29), "html", null, true);
                echo "</label>
      <input type= hidden value = ";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "questions", [], "any", false, false, false, 30), "html", null, true);
                echo ">
    </div>

";
            } else {
                // line 34
                echo " <div>
     <form method=\"link\" action=\"/reponse/";
                // line 35
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["reponse"], "idQuestion", [], "any", false, false, false, 35) + 1), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "idCategorie", [], "any", false, false, false, 35), "html", null, true);
                echo "\"> 
      <input type=\"radio\" id=\"reponse\" name=\"reponse\" value=";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponses", [], "any", false, false, false, 36), "html", null, true);
                echo "
             checked>
      <label for=\"reponse\">";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 38), "html", null, true);
                echo "</label>
      <input type= hidden value = ";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "questions", [], "any", false, false, false, 39), "html", null, true);
                echo ">
    </div>
";
            }
            // line 42
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "

    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 45, $this->source); })()), 0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 46
            echo "      ";
            if ((-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["reponse"], "idQuestion", [], "any", false, false, false, 46), twig_length_filter($this->env, (isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 46, $this->source); })()))))) {
                // line 47
                echo "
<input type= \"submit\" value =\"suivant\">
<button> <a href=\"/question/";
                // line 49
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["reponse"], "idQuestion", [], "any", false, false, false, 49) - 1), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "idCategorie", [], "any", false, false, false, 49), "html", null, true);
                echo "\"> precedent </a> </button>

";
            } elseif (twig_last($this->env,             // line 51
(isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 51, $this->source); })()))) {
                // line 52
                echo "
<button> <a href=\"/reponse/";
                // line 53
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["reponse"], "idQuestion", [], "any", false, false, false, 53) + 1), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "idCategorie", [], "any", false, false, false, 53), "html", null, true);
                echo "\"> Valider </a> </button>


";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "</from>


            ";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "        </div>
    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Test Application";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  228 => 61,  209 => 6,  197 => 62,  195 => 61,  190 => 58,  177 => 53,  174 => 52,  172 => 51,  165 => 49,  161 => 47,  158 => 46,  154 => 45,  150 => 43,  144 => 42,  138 => 39,  134 => 38,  129 => 36,  123 => 35,  120 => 34,  113 => 30,  109 => 29,  104 => 27,  98 => 26,  95 => 25,  93 => 24,  90 => 23,  86 => 22,  83 => 21,  73 => 17,  69 => 16,  66 => 15,  62 => 14,  51 => 6,  45 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/base.html.twig #}
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Test Application{% endblock %}</title>
    </head>
    <body>

        <div id=\"content\">
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
      <input type=\"radio\" id=\"reponse\" name=\"reponse\" value={{reponse.reponses}}
             checked>
      <label for=\"huey\">{{reponse.reponse}}</label>
      <input type= hidden value = {{reponse.questions}}>
    </div>

{% else %}
 <div>
     <form method=\"link\" action=\"/reponse/{{reponse.idQuestion + 1}}/{{reponse.idCategorie}}\"> 
      <input type=\"radio\" id=\"reponse\" name=\"reponse\" value={{reponse.reponses}}
             checked>
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
</from>


            {% block body %}{% endblock %}
        </div>
    </body>
</html>", "question/index.html.twig", "/home/tenimba/delivery/W-PHP-502-LYN-2-1-Quiz-tenimba.sangare/W-PHP-502-LYN-2-1-Quiz-tenimba.sangare/mon-super-projet/templates/question/index.html.twig");
    }
}
