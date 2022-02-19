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

/* project/index.html.twig */
class __TwigTemplate_969ae5d859d18cb0496690d919310e72a393468074d0cd091edb15c4778bf4da extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/index.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "project/index.html.twig", 1);
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
        echo "    <h1 class=\"row justify-content-center my-3 mx-0 indieFlower\">Vos projets</h1>
    <div class=\"row justify-content-md-center p-0\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 9
            echo "            ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["project"], "getStatus", [], "method", false, false, false, 9), "in progress"))) {
                // line 10
                echo "                <a class=\"col- col-sm-6 col-lg-3 justify-content-center\" style=\"text-decoration:none\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_show", ["id" => twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 10)]), "html", null, true);
                echo "\">
                    <div class=\"project card text-white bg-secondary mb-5 animate__animated animate__bounceInLeft\" style=\"max-width: 20rem;\">
                        <div class=\"card-header\">";
                // line 12
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "registered", [], "any", false, false, false, 12), "Y-m-d"), "html", null, true);
                echo "</div>
                        <div class=\"card-body\">
                            <h4 class=\"card-title indieFlower\">";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "title", [], "any", false, false, false, 14), "html", null, true);
                echo "</h4>
                            <p class=\"card-text\">";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "description", [], "any", false, false, false, 15), "html", null, true);
                echo "</p>
                            <p class=\"card-title\">Deadline : ";
                // line 16
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "deadline", [], "any", false, false, false, 16), "Y-m-d"), "html", null, true);
                echo "</p>
                            <p>";
                // line 17
                $context["difference"] = twig_get_attribute($this->env, $this->source, twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "deadline", [], "any", false, false, false, 17)), "diff", [0 => twig_date_converter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 17, $this->source); })()))], "method", false, false, false, 17);
                // line 18
                echo "                                ";
                $context["leftDays"] = twig_get_attribute($this->env, $this->source, (isset($context["difference"]) || array_key_exists("difference", $context) ? $context["difference"] : (function () { throw new RuntimeError('Variable "difference" does not exist.', 18, $this->source); })()), "days", [], "any", false, false, false, 18);
                // line 19
                echo "                                    ";
                if ((0 === twig_compare((isset($context["leftDays"]) || array_key_exists("leftDays", $context) ? $context["leftDays"] : (function () { throw new RuntimeError('Variable "leftDays" does not exist.', 19, $this->source); })()), 1))) {
                    // line 20
                    echo "                                    1 day
                                    ";
                } else {
                    // line 22
                    echo "                                    ";
                    echo twig_escape_filter($this->env, (isset($context["leftDays"]) || array_key_exists("leftDays", $context) ? $context["leftDays"] : (function () { throw new RuntimeError('Variable "leftDays" does not exist.', 22, $this->source); })()), "html", null, true);
                    echo " jours restants
                                ";
                }
                // line 24
                echo "                            </p>
                        </div>
                    </div>
                </a>
            ";
            }
            // line 28
            echo "            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </div>    
        
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "project/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 36,  167 => 35,  155 => 30,  148 => 28,  141 => 24,  135 => 22,  131 => 20,  128 => 19,  125 => 18,  123 => 17,  119 => 16,  115 => 15,  111 => 14,  106 => 12,  100 => 10,  97 => 9,  93 => 8,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}

{% block title %}Project{% endblock %}

{% block main %}
    <h1 class=\"row justify-content-center my-3 mx-0 indieFlower\">Vos projets</h1>
    <div class=\"row justify-content-md-center p-0\">
        {% for project in projects %}
            {% if project.getStatus() == 'in progress' %}
                <a class=\"col- col-sm-6 col-lg-3 justify-content-center\" style=\"text-decoration:none\" href=\"{{ path('project_show', {'id': project.id}) }}\">
                    <div class=\"project card text-white bg-secondary mb-5 animate__animated animate__bounceInLeft\" style=\"max-width: 20rem;\">
                        <div class=\"card-header\">{{ project.registered|date('Y-m-d') }}</div>
                        <div class=\"card-body\">
                            <h4 class=\"card-title indieFlower\">{{ project.title }}</h4>
                            <p class=\"card-text\">{{ project.description }}</p>
                            <p class=\"card-title\">Deadline : {{ project.deadline|date('Y-m-d') }}</p>
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
                </a>
            {% endif %}            
        {% endfor %}
    </div>    
        
{% endblock %}


{% block javascripts %}
    <script src=\"{{ asset('js/script.js') }}\"></script>
{% endblock %}", "project/index.html.twig", "C:\\Users\\marwen.abbes\\Desktop\\ProjectManager-master\\templates\\project\\index.html.twig");
    }
}
