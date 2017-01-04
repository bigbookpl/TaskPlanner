<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_84a27bbc729e64902dacf11a27dd877dfa23ffeaf2cf53a4cf03563d221468e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc50e8ef56847d2cb810e68e5b90c9c7fa8d236223d9ec4e4d6d7c5aeb5d2ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc50e8ef56847d2cb810e68e5b90c9c7fa8d236223d9ec4e4d6d7c5aeb5d2ad0->enter($__internal_cc50e8ef56847d2cb810e68e5b90c9c7fa8d236223d9ec4e4d6d7c5aeb5d2ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc50e8ef56847d2cb810e68e5b90c9c7fa8d236223d9ec4e4d6d7c5aeb5d2ad0->leave($__internal_cc50e8ef56847d2cb810e68e5b90c9c7fa8d236223d9ec4e4d6d7c5aeb5d2ad0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_525a8777586c4e14a7c7e07811017fdb8721670007cb2d88c5a1c02a57385d57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_525a8777586c4e14a7c7e07811017fdb8721670007cb2d88c5a1c02a57385d57->enter($__internal_525a8777586c4e14a7c7e07811017fdb8721670007cb2d88c5a1c02a57385d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_525a8777586c4e14a7c7e07811017fdb8721670007cb2d88c5a1c02a57385d57->leave($__internal_525a8777586c4e14a7c7e07811017fdb8721670007cb2d88c5a1c02a57385d57_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_47cab813cde43e2a229e535107f149dca1eb478662aa3f2a5e87d5d47e9f0202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47cab813cde43e2a229e535107f149dca1eb478662aa3f2a5e87d5d47e9f0202->enter($__internal_47cab813cde43e2a229e535107f149dca1eb478662aa3f2a5e87d5d47e9f0202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_47cab813cde43e2a229e535107f149dca1eb478662aa3f2a5e87d5d47e9f0202->leave($__internal_47cab813cde43e2a229e535107f149dca1eb478662aa3f2a5e87d5d47e9f0202_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_be9907a65d219be3346ce1088cddba7769ff671df629d5b3e61dc485d089ba34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be9907a65d219be3346ce1088cddba7769ff671df629d5b3e61dc485d089ba34->enter($__internal_be9907a65d219be3346ce1088cddba7769ff671df629d5b3e61dc485d089ba34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_be9907a65d219be3346ce1088cddba7769ff671df629d5b3e61dc485d089ba34->leave($__internal_be9907a65d219be3346ce1088cddba7769ff671df629d5b3e61dc485d089ba34_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/neelam/Workspace/TaskPlanner/project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
