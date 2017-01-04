<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_26313e714a6f097d031b7a4d8d29d2841a4a66b2676d3d2d46cd96d0cb8d9144 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_b36ab0867f59a494143cec5d6509e5474306c747fc45bd2b5ad842fa74fa46e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b36ab0867f59a494143cec5d6509e5474306c747fc45bd2b5ad842fa74fa46e8->enter($__internal_b36ab0867f59a494143cec5d6509e5474306c747fc45bd2b5ad842fa74fa46e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b36ab0867f59a494143cec5d6509e5474306c747fc45bd2b5ad842fa74fa46e8->leave($__internal_b36ab0867f59a494143cec5d6509e5474306c747fc45bd2b5ad842fa74fa46e8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_710d699fdda146367b0300283a51a7cdeec87350fd9619c9478a00bc0818d544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_710d699fdda146367b0300283a51a7cdeec87350fd9619c9478a00bc0818d544->enter($__internal_710d699fdda146367b0300283a51a7cdeec87350fd9619c9478a00bc0818d544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_710d699fdda146367b0300283a51a7cdeec87350fd9619c9478a00bc0818d544->leave($__internal_710d699fdda146367b0300283a51a7cdeec87350fd9619c9478a00bc0818d544_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/neelam/Workspace/TaskPlanner/project/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
