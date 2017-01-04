<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_79b80d0215afe3809f03a4c416b90a3b745a4b7498cf80ccfd247e8d40ea1ba5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_784b8ee9bfe775439eaf6f4c7cea35db8302991a703ecd1655df55c047ec6868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_784b8ee9bfe775439eaf6f4c7cea35db8302991a703ecd1655df55c047ec6868->enter($__internal_784b8ee9bfe775439eaf6f4c7cea35db8302991a703ecd1655df55c047ec6868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_784b8ee9bfe775439eaf6f4c7cea35db8302991a703ecd1655df55c047ec6868->leave($__internal_784b8ee9bfe775439eaf6f4c7cea35db8302991a703ecd1655df55c047ec6868_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_943b3a204560a248e7aa4b64cc7d83ebf4e30f3c48e595367921612c48d719ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_943b3a204560a248e7aa4b64cc7d83ebf4e30f3c48e595367921612c48d719ab->enter($__internal_943b3a204560a248e7aa4b64cc7d83ebf4e30f3c48e595367921612c48d719ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_943b3a204560a248e7aa4b64cc7d83ebf4e30f3c48e595367921612c48d719ab->leave($__internal_943b3a204560a248e7aa4b64cc7d83ebf4e30f3c48e595367921612c48d719ab_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/home/neelam/Workspace/TaskPlanner/project/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
