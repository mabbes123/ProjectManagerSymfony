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

/* task/index.html.twig */
class __TwigTemplate_6b52494b25fec171791468e5fafb41fdea2cc1d776b18b7c6342a7a2fb87b27c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        // line 41
        echo " 
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "task/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'base.html.twig' %}

{% block title %}Task index{% endblock %}

{% block body %}
    <h1>Task index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Registered</th>
                <th>Deadline</th>
                <th>Status</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for task in tasks %}
            <tr>
                <td>{{ task.id }}</td>
                <td>{{ task.title }}</td>
                <td>{{ task.registered ? task.registered|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ task.deadline ? task.deadline|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ task.status }}</td>
                <td>
                    <a href=\"{{ path('task_show', {'id': task.id}) }}\">show</a>
                    <a href=\"{{ path('task_edit', {'id': task.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    {# <a href=\"{{ path('task_new') }}\">Create new</a> #}
{# {% endblock %} #} 
", "task/index.html.twig", "C:\\Users\\marwen.abbes\\Desktop\\ProjectManager-master\\templates\\task\\index.html.twig");
    }
}
