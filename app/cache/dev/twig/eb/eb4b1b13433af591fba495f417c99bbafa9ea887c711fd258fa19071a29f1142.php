<?php

/* AppBundle:Task:comments.html.twig */
class __TwigTemplate_7d53097c2322bca1f6f03539fb20e67065cb93f8cfd83647b9f2e02a1e802a42 extends Twig_Template
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
        $__internal_8f3ac2b5e26a9b0b6cc134e64884bb7a532644979b32a07b2d20091747d0d89b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f3ac2b5e26a9b0b6cc134e64884bb7a532644979b32a07b2d20091747d0d89b->enter($__internal_8f3ac2b5e26a9b0b6cc134e64884bb7a532644979b32a07b2d20091747d0d89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:comments.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 2
            echo "    ";
            if (($this->getAttribute($this->getAttribute($context["comment"], "task", array()), "id", array()) == ($context["taskId"] ?? $this->getContext($context, "taskId")))) {
                // line 3
                echo "        <table>
            <tr>
                <th> ";
                // line 5
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "date", array())), "html", null, true);
                echo "</th>
            </tr>
            <tr>
                <td>";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "text", array()), "html", null, true);
                echo "</td>
            </tr>
        </table>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_8f3ac2b5e26a9b0b6cc134e64884bb7a532644979b32a07b2d20091747d0d89b->leave($__internal_8f3ac2b5e26a9b0b6cc134e64884bb7a532644979b32a07b2d20091747d0d89b_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Task:comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  33 => 5,  29 => 3,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for comment in comments %}
    {% if comment.task.id == taskId %}
        <table>
            <tr>
                <th> {{ comment.date | date }}</th>
            </tr>
            <tr>
                <td>{{ comment.text }}</td>
            </tr>
        </table>
    {% endif %}
{% endfor %}
", "AppBundle:Task:comments.html.twig", "/home/neelam/Workspace/TaskPlanner/project/src/AppBundle/Resources/views/Task/comments.html.twig");
    }
}
