<?php

/* AppBundle:Task:addComment.html.twig */
class __TwigTemplate_e3a297a59cef4c610ab70351069d103c16d205276416624b81d36ea420036b3b extends Twig_Template
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
        $__internal_2c2f6df65770c97052e3e8409fbd562ed6639131a404a4e55d032a65fb420422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c2f6df65770c97052e3e8409fbd562ed6639131a404a4e55d032a65fb420422->enter($__internal_2c2f6df65770c97052e3e8409fbd562ed6639131a404a4e55d032a65fb420422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:addComment.html.twig"));

        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["commForm"] ?? $this->getContext($context, "commForm")), 'form_start');
        echo "
                ";
        // line 3
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["commForm"] ?? $this->getContext($context, "commForm")), "text", array()), 'widget');
        echo "
                ";
        // line 5
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["commForm"] ?? $this->getContext($context, "commForm")), 'errors');
        echo "
                ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["commForm"] ?? $this->getContext($context, "commForm")), 'form_end');
        
        $__internal_2c2f6df65770c97052e3e8409fbd562ed6639131a404a4e55d032a65fb420422->leave($__internal_2c2f6df65770c97052e3e8409fbd562ed6639131a404a4e55d032a65fb420422_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Task:addComment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  31 => 5,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(commForm) }}
                {#{{ form_label(commForm.text, null, {'label_attr' : {'class': task.id}}) }}#}
                {{ form_widget(commForm.text) }}
                {#{{ form_widget(commForm.task, {value : task}) }}#}
                {{ form_errors(commForm) }}
                {{ form_end(commForm) }}", "AppBundle:Task:addComment.html.twig", "/home/neelam/Workspace/TaskPlanner/src/AppBundle/Resources/views/Task/addComment.html.twig");
    }
}
