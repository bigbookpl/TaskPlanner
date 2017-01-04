<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b010418bd8145e5660cf8fc4b1524b2c847147165b4534dcc2b011d0a0835d06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb655492b097a3d93f3435ea4b2888c780fedc3cf2bd0330faf528019659ea91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb655492b097a3d93f3435ea4b2888c780fedc3cf2bd0330faf528019659ea91->enter($__internal_eb655492b097a3d93f3435ea4b2888c780fedc3cf2bd0330faf528019659ea91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb655492b097a3d93f3435ea4b2888c780fedc3cf2bd0330faf528019659ea91->leave($__internal_eb655492b097a3d93f3435ea4b2888c780fedc3cf2bd0330faf528019659ea91_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b8cde72e860df6e00f34d3284df028f09b9822e5fde6f96fee9fb952e4e25622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8cde72e860df6e00f34d3284df028f09b9822e5fde6f96fee9fb952e4e25622->enter($__internal_b8cde72e860df6e00f34d3284df028f09b9822e5fde6f96fee9fb952e4e25622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b8cde72e860df6e00f34d3284df028f09b9822e5fde6f96fee9fb952e4e25622->leave($__internal_b8cde72e860df6e00f34d3284df028f09b9822e5fde6f96fee9fb952e4e25622_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f8779528d3f999eae92560e2141d4225e0036dd8523efe56a75d54f366b2effa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8779528d3f999eae92560e2141d4225e0036dd8523efe56a75d54f366b2effa->enter($__internal_f8779528d3f999eae92560e2141d4225e0036dd8523efe56a75d54f366b2effa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f8779528d3f999eae92560e2141d4225e0036dd8523efe56a75d54f366b2effa->leave($__internal_f8779528d3f999eae92560e2141d4225e0036dd8523efe56a75d54f366b2effa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8ed7127b25a9a149ec8a9d187737e2d75c9414a2786a371a01bd07fb0f0066e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed7127b25a9a149ec8a9d187737e2d75c9414a2786a371a01bd07fb0f0066e1->enter($__internal_8ed7127b25a9a149ec8a9d187737e2d75c9414a2786a371a01bd07fb0f0066e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8ed7127b25a9a149ec8a9d187737e2d75c9414a2786a371a01bd07fb0f0066e1->leave($__internal_8ed7127b25a9a149ec8a9d187737e2d75c9414a2786a371a01bd07fb0f0066e1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/neelam/Workspace/TaskPlanner/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
