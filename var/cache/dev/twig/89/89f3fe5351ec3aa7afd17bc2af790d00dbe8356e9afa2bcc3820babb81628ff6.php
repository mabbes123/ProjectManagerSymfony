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

/* project/archive.html.twig */
class __TwigTemplate_0c8635ecef47e7beeb4ce436d40a6cf75502499bd4e214b78c259e3ff4318dd5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/archive.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/archive.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "project/archive.html.twig", 1);
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

        echo "Archive";
        
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


    <h1 class=\"row justify-content-md-center my-3 mx-0 indieFlower\">Vos projets archivés</h1>
    <div class=\"row justify-content-md-center p-0\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 12
            echo "            ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["project"], "getStatus", [], "method", false, false, false, 12), "done"))) {
                // line 13
                echo "                <a class=\"col- col-sm-6 col-lg-3 justify-content-md-center\" style=\"text-decoration:none\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_show", ["id" => twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 13)]), "html", null, true);
                echo "\">
                    <div class=\"card text-white bg-secondary mb-5 animate__animated animate__bounceInLeft\" style=\"max-width: 20rem;\">
                        <div class=\"card-header\">";
                // line 15
                ((twig_get_attribute($this->env, $this->source, $context["project"], "registered", [], "any", false, false, false, 15)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "registered", [], "any", false, false, false, 15), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</div>
                        <div class=\"card-body\">
                            <h4 class=\"card-title indieFlower\">";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "title", [], "any", false, false, false, 17), "html", null, true);
                echo "</h4>
                            <p class=\"card-text\">";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "description", [], "any", false, false, false, 18), "html", null, true);
                echo "</p>
                            <p class=\"card-title\">Deadline : ";
                // line 19
                ((twig_get_attribute($this->env, $this->source, $context["project"], "deadline", [], "any", false, false, false, 19)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "deadline", [], "any", false, false, false, 19), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</p>
                        </div>
                    </div>
                </a>
            ";
            }
            // line 23
            echo "            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>    
        
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "project/archive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 25,  129 => 23,  121 => 19,  117 => 18,  113 => 17,  108 => 15,  102 => 13,  99 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}

{% block title %}Archive{% endblock %}

{% block main %}



    <h1 class=\"row justify-content-md-center my-3 mx-0 indieFlower\">Vos projets archivés</h1>
    <div class=\"row justify-content-md-center p-0\">
        {% for project in projects %}
            {% if project.getStatus() == 'done' %}
                <a class=\"col- col-sm-6 col-lg-3 justify-content-md-center\" style=\"text-decoration:none\" href=\"{{ path('project_show', {'id': project.id}) }}\">
                    <div class=\"card text-white bg-secondary mb-5 animate__animated animate__bounceInLeft\" style=\"max-width: 20rem;\">
                        <div class=\"card-header\">{{ project.registered ? project.registered|date('Y-m-d') : '' }}</div>
                        <div class=\"card-body\">
                            <h4 class=\"card-title indieFlower\">{{ project.title }}</h4>
                            <p class=\"card-text\">{{ project.description }}</p>
                            <p class=\"card-title\">Deadline : {{ project.deadline ? project.deadline|date('Y-m-d') : '' }}</p>
                        </div>
                    </div>
                </a>
            {% endif %}            
        {% endfor %}
    </div>    
        
{% endblock %}
", "project/archive.html.twig", "C:\\Users\\marwen.abbes\\Desktop\\ProjectManager-master\\templates\\project\\archive.html.twig");
    }
}
