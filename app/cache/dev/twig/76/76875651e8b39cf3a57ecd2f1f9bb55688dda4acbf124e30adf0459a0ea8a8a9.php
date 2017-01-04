<?php

/* AppBundle:Task:task.html.twig */
class __TwigTemplate_b0e04ddfe69d4ea36ff88220ccf1edf2751a59649b7aeb85608e522c318a9890 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18adaf7d7408388e64379d79f091c197783335e6981c974497037175dfca6a4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18adaf7d7408388e64379d79f091c197783335e6981c974497037175dfca6a4b->enter($__internal_18adaf7d7408388e64379d79f091c197783335e6981c974497037175dfca6a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:task.html.twig"));

        // line 1
        echo "<table>

    <a name=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "id", array()), "html", null, true);
        echo "\"></a>
    <tr>
        <th><label> Name:</label></th>
        <td>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "name", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th><label> Description:</label></th>
        <td> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "description", array()), "html", null, true);
        echo "</td>
    </tr>
    <br>
    <tr>
        <th><label> Priority:</label></th>
        <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "priority", array()), "html", null, true);
        echo "</td>
    </tr>
    <br>
    <tr>
        <th><label> Category:</label></th>
        <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "category", array()), "html", null, true);
        echo "</td>
    </tr>
    <br>
    <tr>
        <th><label> Term:</label></th>
        <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "term", array())), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th><label> Done:</label></th>
        <td>";
        // line 29
        if ($this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "isDone", array())) {
            // line 30
            echo "                Yes
            ";
        } else {
            // line 32
            echo "                No
            ";
        }
        // line 33
        echo "</td>
    </tr>
    <tr>
        <td><a class=\"showComm\">Show comments (
                ";
        // line 37
        if ($this->getAttribute(($context["counters"] ?? null), $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "id", array()), array(), "array", true, true)) {
            // line 38
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["counters"] ?? $this->getContext($context, "counters")), $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "id", array()), array(), "array"), "html", null, true);
            echo "
            ";
        } else {
            // line 40
            echo "                0
                ";
        }
        // line 41
        echo ")</a></td>
    </tr>
</table>
<div class=\"comments\">
    ";
        // line 45
        $this->loadTemplate("AppBundle:Task:comments.html.twig", "AppBundle:Task:task.html.twig", 45)->display(array_merge($context, array("comments" => ($context["comments"] ?? $this->getContext($context, "comments")), "taskId" => $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "id", array()))));
        // line 46
        echo "</div>
";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Default:addComment", array("taskId" => $this->getAttribute(        // line 49
($context["task"] ?? $this->getContext($context, "task")), "id", array()))));
        
        $__internal_18adaf7d7408388e64379d79f091c197783335e6981c974497037175dfca6a4b->leave($__internal_18adaf7d7408388e64379d79f091c197783335e6981c974497037175dfca6a4b_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Task:task.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 49,  109 => 47,  106 => 46,  104 => 45,  98 => 41,  94 => 40,  88 => 38,  86 => 37,  80 => 33,  76 => 32,  72 => 30,  70 => 29,  63 => 25,  55 => 20,  47 => 15,  39 => 10,  32 => 6,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table>

    <a name=\"{{ task.id }}\"></a>
    <tr>
        <th><label> Name:</label></th>
        <td>{{ task.name }}</td>
    </tr>
    <tr>
        <th><label> Description:</label></th>
        <td> {{ task.description }}</td>
    </tr>
    <br>
    <tr>
        <th><label> Priority:</label></th>
        <td>{{ task.priority }}</td>
    </tr>
    <br>
    <tr>
        <th><label> Category:</label></th>
        <td>{{ task.category }}</td>
    </tr>
    <br>
    <tr>
        <th><label> Term:</label></th>
        <td>{{ task.term | date }}</td>
    </tr>
    <tr>
        <th><label> Done:</label></th>
        <td>{% if task.isDone %}
                Yes
            {% else %}
                No
            {% endif %}</td>
    </tr>
    <tr>
        <td><a class=\"showComm\">Show comments (
                {% if counters[task.id] is defined %}
                {{ counters [task.id] }}
            {% else %}
                0
                {% endif %})</a></td>
    </tr>
</table>
<div class=\"comments\">
    {% include 'AppBundle:Task:comments.html.twig' with {'comments': comments, 'taskId': task.id} %}
</div>
{{ render(controller(
'AppBundle:Default:addComment',
{ 'taskId': task.id }
)) }}", "AppBundle:Task:task.html.twig", "/home/neelam/Workspace/TaskPlanner/src/AppBundle/Resources/views/Task/task.html.twig");
    }
}
