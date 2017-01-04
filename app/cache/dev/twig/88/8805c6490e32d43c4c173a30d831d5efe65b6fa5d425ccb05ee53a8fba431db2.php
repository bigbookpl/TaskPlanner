<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_417a0672268dd938038e41179f9e1d79bce47056dda4ea22284fa285e9f1f37e extends Twig_Template
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
        $__internal_609e92ce44cf760a6ce3ddcddefd6b19e7d60e7bfa01778ea80ce272a6fdaa1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_609e92ce44cf760a6ce3ddcddefd6b19e7d60e7bfa01778ea80ce272a6fdaa1e->enter($__internal_609e92ce44cf760a6ce3ddcddefd6b19e7d60e7bfa01778ea80ce272a6fdaa1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_609e92ce44cf760a6ce3ddcddefd6b19e7d60e7bfa01778ea80ce272a6fdaa1e->leave($__internal_609e92ce44cf760a6ce3ddcddefd6b19e7d60e7bfa01778ea80ce272a6fdaa1e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_366213dd2536a6abe2fcb6599c22d4aaf0b473ce439734b462f2781e1b9aa585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_366213dd2536a6abe2fcb6599c22d4aaf0b473ce439734b462f2781e1b9aa585->enter($__internal_366213dd2536a6abe2fcb6599c22d4aaf0b473ce439734b462f2781e1b9aa585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_366213dd2536a6abe2fcb6599c22d4aaf0b473ce439734b462f2781e1b9aa585->leave($__internal_366213dd2536a6abe2fcb6599c22d4aaf0b473ce439734b462f2781e1b9aa585_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d2f6f85321365b70954de7d43fb92af517904d129366436be1503a6d7a4b062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d2f6f85321365b70954de7d43fb92af517904d129366436be1503a6d7a4b062->enter($__internal_7d2f6f85321365b70954de7d43fb92af517904d129366436be1503a6d7a4b062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7d2f6f85321365b70954de7d43fb92af517904d129366436be1503a6d7a4b062->leave($__internal_7d2f6f85321365b70954de7d43fb92af517904d129366436be1503a6d7a4b062_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_aeb16bd95aee38a6f2695b2ee08b03aa5bd10e75cd25ba51c2554ae3e81d5082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeb16bd95aee38a6f2695b2ee08b03aa5bd10e75cd25ba51c2554ae3e81d5082->enter($__internal_aeb16bd95aee38a6f2695b2ee08b03aa5bd10e75cd25ba51c2554ae3e81d5082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_aeb16bd95aee38a6f2695b2ee08b03aa5bd10e75cd25ba51c2554ae3e81d5082->leave($__internal_aeb16bd95aee38a6f2695b2ee08b03aa5bd10e75cd25ba51c2554ae3e81d5082_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/neelam/Workspace/TaskPlanner/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
