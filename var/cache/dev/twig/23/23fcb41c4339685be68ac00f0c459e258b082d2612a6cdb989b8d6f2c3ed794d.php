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

/* project/show.html.twig */
class __TwigTemplate_738675396768b69ca6656fb9c059ea2863fefbe94e135facb5ac49774f3d9d35 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/show.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "project/show.html.twig", 1);
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

        echo "Project";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "
<div class=\"card mb-3 bg-light animate__animated animate__bounceInLeft\">
    <h3 class=\"card-header indieFlower d-flex justify-content-center\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "html", null, true);
        echo "</h3>
    <div class=\"card-body\">
        <h5 class=\"card-title d-flex justify-content-center\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 10, $this->source); })()), "description", [], "any", false, false, false, 10), "html", null, true);
        echo "</h5>
    </div>
        <h3 class=\"indieFlower card-header d-flex justify-content-center\">A faire</h3>
    <ul class=\"list-group list-group-flush\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 15
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\" style=\"text-decoration:none\">
            ";
            // line 16
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["task"], "getStatus", [], "method", false, false, false, 16), "done"))) {
                // line 17
                echo "                <li class=\"list-group-item bg-success text-white\">
                ";
            } else {
                // line 19
                echo "                    <li class=\"list-group-item\">
            ";
            }
            // line 21
            echo "            <h4 class=\"d-flex justify-content-center\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "title", [], "any", false, false, false, 21), "html", null, true);
            echo "</h4>
            <span class=\"d-flex justify-content-end\">Deadline: ";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "deadline", [], "any", false, false, false, 22), "Y-m-d"), "html", null, true);
            echo "</span>
            <p class=\"d-flex justify-content-end\">";
            // line 23
            $context["difference"] = twig_get_attribute($this->env, $this->source, twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "deadline", [], "any", false, false, false, 23)), "diff", [0 => twig_date_converter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 23, $this->source); })()))], "method", false, false, false, 23);
            // line 24
            echo "            ";
            $context["leftDays"] = twig_get_attribute($this->env, $this->source, (isset($context["difference"]) || array_key_exists("difference", $context) ? $context["difference"] : (function () { throw new RuntimeError('Variable "difference" does not exist.', 24, $this->source); })()), "days", [], "any", false, false, false, 24);
            // line 25
            echo "                ";
            if ((0 === twig_compare((isset($context["leftDays"]) || array_key_exists("leftDays", $context) ? $context["leftDays"] : (function () { throw new RuntimeError('Variable "leftDays" does not exist.', 25, $this->source); })()), 1))) {
                // line 26
                echo "                1 day
                ";
            } else {
                // line 28
                echo "                ";
                echo twig_escape_filter($this->env, (isset($context["leftDays"]) || array_key_exists("leftDays", $context) ? $context["leftDays"] : (function () { throw new RuntimeError('Variable "leftDays" does not exist.', 28, $this->source); })()), "html", null, true);
                echo " jours restants
            ";
            }
            // line 30
            echo "        </p>
            </li>
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </ul>
    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\" class=\"card-link card-body bg-primary\">
        <h4 class=\"d-flex justify-content-center my-2 text-white\">Ajouter une tâche</h4>
    </a>
    <div class=\"card-footer text-muted\">
        Deadline du projet : ";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 39, $this->source); })()), "deadline", [], "any", false, false, false, 39), "Y-m-d"), "html", null, true);
        echo "
        <p>";
        // line 40
        $context["difference"] = twig_get_attribute($this->env, $this->source, twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 40, $this->source); })()), "deadline", [], "any", false, false, false, 40)), "diff", [0 => twig_date_converter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 40, $this->source); })()))], "method", false, false, false, 40);
        // line 41
        echo "            ";
        $context["leftDays"] = twig_get_attribute($this->env, $this->source, (isset($context["difference"]) || array_key_exists("difference", $context) ? $context["difference"] : (function () { throw new RuntimeError('Variable "difference" does not exist.', 41, $this->source); })()), "days", [], "any", false, false, false, 41);
        // line 42
        echo "                ";
        if ((0 === twig_compare((isset($context["leftDays"]) || array_key_exists("leftDays", $context) ? $context["leftDays"] : (function () { throw new RuntimeError('Variable "leftDays" does not exist.', 42, $this->source); })()), 1))) {
            // line 43
            echo "                1 day
                ";
        } else {
            // line 45
            echo "                ";
            echo twig_escape_filter($this->env, (isset($context["leftDays"]) || array_key_exists("leftDays", $context) ? $context["leftDays"] : (function () { throw new RuntimeError('Variable "leftDays" does not exist.', 45, $this->source); })()), "html", null, true);
            echo " jours restants
            ";
        }
        // line 47
        echo "        </p>
    </div>
    
</div>
<a class=\"btn btn-outline-primary mr-2\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_index");
        echo "\">Retour</a>

<a class=\"btn btn-outline-success\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)]), "html", null, true);
        echo "\">Modifier</a>

    ";
        // line 55
        echo twig_include($this->env, $context, "project/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "project/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 55,  202 => 53,  197 => 51,  191 => 47,  185 => 45,  181 => 43,  178 => 42,  175 => 41,  173 => 40,  169 => 39,  162 => 35,  159 => 34,  150 => 30,  144 => 28,  140 => 26,  137 => 25,  134 => 24,  132 => 23,  128 => 22,  123 => 21,  119 => 19,  115 => 17,  113 => 16,  108 => 15,  104 => 14,  97 => 10,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}

{% block title %}Project{% endblock %}

{% block main %}

<div class=\"card mb-3 bg-light animate__animated animate__bounceInLeft\">
    <h3 class=\"card-header indieFlower d-flex justify-content-center\">{{ project.title }}</h3>
    <div class=\"card-body\">
        <h5 class=\"card-title d-flex justify-content-center\">{{ project.description }}</h5>
    </div>
        <h3 class=\"indieFlower card-header d-flex justify-content-center\">A faire</h3>
    <ul class=\"list-group list-group-flush\">
        {% for task in tasks %}
            <a href=\"{{ path('task_edit', {'id': task.id}) }}\" style=\"text-decoration:none\">
            {% if task.getStatus() == 'done' %}
                <li class=\"list-group-item bg-success text-white\">
                {% else %}
                    <li class=\"list-group-item\">
            {% endif %}
            <h4 class=\"d-flex justify-content-center\">{{ task.title }}</h4>
            <span class=\"d-flex justify-content-end\">Deadline: {{ task.deadline|date('Y-m-d')  }}</span>
            <p class=\"d-flex justify-content-end\">{% set difference = date(task.deadline).diff(date(date)) %}
            {% set leftDays = difference.days %}
                {% if leftDays == 1 %}
                1 day
                {% else %}
                {{ leftDays }} jours restants
            {% endif %}
        </p>
            </li>
            </a>
        {% endfor %}
    </ul>
    <a href=\"{{ path('task_new', {id: project.id}) }}\" class=\"card-link card-body bg-primary\">
        <h4 class=\"d-flex justify-content-center my-2 text-white\">Ajouter une tâche</h4>
    </a>
    <div class=\"card-footer text-muted\">
        Deadline du projet : {{ project.deadline|date('Y-m-d') }}
        <p>{% set difference = date(project.deadline).diff(date(date)) %}
            {% set leftDays = difference.days %}
                {% if leftDays == 1 %}
                1 day
                {% else %}
                {{ leftDays }} jours restants
            {% endif %}
        </p>
    </div>
    
</div>
<a class=\"btn btn-outline-primary mr-2\" href=\"{{ path('project_index') }}\">Retour</a>

<a class=\"btn btn-outline-success\" href=\"{{ path('project_edit', {'id': project.id}) }}\">Modifier</a>

    {{ include('project/_delete_form.html.twig') }}
{% endblock %}
", "project/show.html.twig", "C:\\Users\\marwen.abbes\\Desktop\\ProjectManager-master\\templates\\project\\show.html.twig");
    }
}
