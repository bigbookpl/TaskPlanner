<?php

/* AppBundle:Task:addComment.html.twig */
class __TwigTemplate_3803412638ff5350dc8e49a73def1aa341e922d7c1f6c91cc733e2f420474296 extends Twig_Template
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
        $__internal_8a9b924f3399d8431a3271d5dec09d52cc953efddab9159224e8a5214f4f5014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a9b924f3399d8431a3271d5dec09d52cc953efddab9159224e8a5214f4f5014->enter($__internal_8a9b924f3399d8431a3271d5dec09d52cc953efddab9159224e8a5214f4f5014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:addComment.html.twig"));

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
        
        $__internal_8a9b924f3399d8431a3271d5dec09d52cc953efddab9159224e8a5214f4f5014->leave($__internal_8a9b924f3399d8431a3271d5dec09d52cc953efddab9159224e8a5214f4f5014_prof);

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
                {{ form_end(commForm) }}", "AppBundle:Task:addComment.html.twig", "/home/neelam/Workspace/TaskPlanner/project/src/AppBundle/Resources/views/Task/addComment.html.twig");
    }
}
