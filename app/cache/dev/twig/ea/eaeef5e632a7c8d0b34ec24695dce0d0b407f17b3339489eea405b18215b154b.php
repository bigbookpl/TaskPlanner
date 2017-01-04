<?php

/* AppBundle:Task:editTask.html.twig */
class __TwigTemplate_5768d4ab3d135dc0a1a4981bc804b6f8dafeefa642235fe9db0fc02e9c184cbc extends Twig_Template
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
        $__internal_05349b818c8813115c79d3014a698bfec5c8f5e243300987b606b336a8a497f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05349b818c8813115c79d3014a698bfec5c8f5e243300987b606b336a8a497f0->enter($__internal_05349b818c8813115c79d3014a698bfec5c8f5e243300987b606b336a8a497f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:editTask.html.twig"));

        // line 1
        if (array_key_exists("editForm", $context)) {
            // line 2
            echo "
    ";
            // line 3
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["editForm"] ?? $this->getContext($context, "editForm")), 'form_start');
            echo "
    ";
            // line 4
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "name", array()), 'label');
            echo " <br>
    ";
            // line 5
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "name", array()), 'widget');
            echo " <br>
    ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "description", array()), 'label');
            echo " <br>
    ";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "description", array()), 'widget');
            echo " <br>
    ";
            // line 8
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "term", array()), 'label');
            echo "
    <div class='input-group date datetimepicker'>
        ";
            // line 10
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "term", array()), 'widget', array("attr" => array("class" => "form-control input-inline")));
            echo "
        <span class=\"input-group-addon\">
                                    <span class=\"glyphicon glyphicon-calendar\"></span>
                                </span>
    </div>
    ";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "priority", array()), 'label');
            echo "<br>
    ";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "priority", array()), 'widget');
            echo "<br>
    ";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "category", array()), 'label');
            echo " <br>
    ";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "category", array()), 'widget');
            echo "<br>
    ";
            // line 19
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["editForm"] ?? $this->getContext($context, "editForm")), 'form_end');
            echo "

";
        } else {
            // line 22
            echo "
    <h5 class=\"customError\">You cannot edit done task!</h5>
    ";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Default:task", array("task" =>             // line 26
($context["task"] ?? $this->getContext($context, "task")))));
            // line 27
            echo "

";
        }
        
        $__internal_05349b818c8813115c79d3014a698bfec5c8f5e243300987b606b336a8a497f0->leave($__internal_05349b818c8813115c79d3014a698bfec5c8f5e243300987b606b336a8a497f0_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Task:editTask.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 27,  87 => 26,  86 => 24,  82 => 22,  76 => 19,  72 => 18,  68 => 17,  64 => 16,  60 => 15,  52 => 10,  47 => 8,  43 => 7,  39 => 6,  35 => 5,  31 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if editForm is defined %}

    {{ form_start(editForm) }}
    {{ form_label(editForm.name) }} <br>
    {{ form_widget(editForm.name) }} <br>
    {{ form_label(editForm.description) }} <br>
    {{ form_widget(editForm.description) }} <br>
    {{ form_label(editForm.term) }}
    <div class='input-group date datetimepicker'>
        {{ form_widget(editForm.term, {'attr': {'class': 'form-control input-inline'}}) }}
        <span class=\"input-group-addon\">
                                    <span class=\"glyphicon glyphicon-calendar\"></span>
                                </span>
    </div>
    {{ form_label(editForm.priority) }}<br>
    {{ form_widget(editForm.priority) }}<br>
    {{ form_label(editForm.category) }} <br>
    {{ form_widget(editForm.category) }}<br>
    {{ form_end(editForm) }}

{% else %}

    <h5 class=\"customError\">You cannot edit done task!</h5>
    {{ render(controller(
    'AppBundle:Default:task',
    { 'task': task }
    )) }}

{% endif %}", "AppBundle:Task:editTask.html.twig", "/home/neelam/Workspace/TaskPlanner/project/src/AppBundle/Resources/views/Task/editTask.html.twig");
    }
}
