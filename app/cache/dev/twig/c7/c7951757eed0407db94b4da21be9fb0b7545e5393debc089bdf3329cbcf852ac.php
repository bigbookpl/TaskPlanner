<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f5f35682ecdb64ec11ab2bab1e0fa81c38357f0b394b3cc542ac1fa4c4f87b11 extends Twig_Template
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
        $__internal_c70e7eba19cf0288f5339ea02069c6e1ded323dae8b80709db163be0dced06ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c70e7eba19cf0288f5339ea02069c6e1ded323dae8b80709db163be0dced06ee->enter($__internal_c70e7eba19cf0288f5339ea02069c6e1ded323dae8b80709db163be0dced06ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c70e7eba19cf0288f5339ea02069c6e1ded323dae8b80709db163be0dced06ee->leave($__internal_c70e7eba19cf0288f5339ea02069c6e1ded323dae8b80709db163be0dced06ee_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_52e15e9e7c91c8a385a9bac13311d26b6995c3b6c488dfecb3c9f55c5952495e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52e15e9e7c91c8a385a9bac13311d26b6995c3b6c488dfecb3c9f55c5952495e->enter($__internal_52e15e9e7c91c8a385a9bac13311d26b6995c3b6c488dfecb3c9f55c5952495e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_52e15e9e7c91c8a385a9bac13311d26b6995c3b6c488dfecb3c9f55c5952495e->leave($__internal_52e15e9e7c91c8a385a9bac13311d26b6995c3b6c488dfecb3c9f55c5952495e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6f9a045a3aeafe46088ba94de463a77f3ab9d10f940b3d2b3636dd98b0688a96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f9a045a3aeafe46088ba94de463a77f3ab9d10f940b3d2b3636dd98b0688a96->enter($__internal_6f9a045a3aeafe46088ba94de463a77f3ab9d10f940b3d2b3636dd98b0688a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6f9a045a3aeafe46088ba94de463a77f3ab9d10f940b3d2b3636dd98b0688a96->leave($__internal_6f9a045a3aeafe46088ba94de463a77f3ab9d10f940b3d2b3636dd98b0688a96_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ee35edcd78db795d96f10ed10a5a361d64498c83d5eb60a562542567caa595ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee35edcd78db795d96f10ed10a5a361d64498c83d5eb60a562542567caa595ff->enter($__internal_ee35edcd78db795d96f10ed10a5a361d64498c83d5eb60a562542567caa595ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ee35edcd78db795d96f10ed10a5a361d64498c83d5eb60a562542567caa595ff->leave($__internal_ee35edcd78db795d96f10ed10a5a361d64498c83d5eb60a562542567caa595ff_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/neelam/Workspace/TaskPlanner/project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
