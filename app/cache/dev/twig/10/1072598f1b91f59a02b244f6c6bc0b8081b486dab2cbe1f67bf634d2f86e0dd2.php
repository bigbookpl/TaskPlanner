<?php

/* AppBundle:Task:panel.html.twig */
class __TwigTemplate_45087e0b357e8f0a9cf909eefb58a6636cdbd81852f0d78c2928c1ff54fbe92d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c215869303955da25a47f51b8008fde4f8721f1a1714545ff74e35bfdfe0af39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c215869303955da25a47f51b8008fde4f8721f1a1714545ff74e35bfdfe0af39->enter($__internal_c215869303955da25a47f51b8008fde4f8721f1a1714545ff74e35bfdfe0af39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:panel.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 10
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>
<body>
";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "
</body>
</html>
";
        
        $__internal_c215869303955da25a47f51b8008fde4f8721f1a1714545ff74e35bfdfe0af39->leave($__internal_c215869303955da25a47f51b8008fde4f8721f1a1714545ff74e35bfdfe0af39_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_57c3d49e2ff2c025dbe80fc000b8a09c85ccc25fad6643a187aa594d3bdb2a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57c3d49e2ff2c025dbe80fc000b8a09c85ccc25fad6643a187aa594d3bdb2a42->enter($__internal_57c3d49e2ff2c025dbe80fc000b8a09c85ccc25fad6643a187aa594d3bdb2a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Task Planner";
        
        $__internal_57c3d49e2ff2c025dbe80fc000b8a09c85ccc25fad6643a187aa594d3bdb2a42->leave($__internal_57c3d49e2ff2c025dbe80fc000b8a09c85ccc25fad6643a187aa594d3bdb2a42_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d4c1ceb8ac3a751f2245bcbc64ac57f17ee58b85995b5b3c3e4941fcea6e5f4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4c1ceb8ac3a751f2245bcbc64ac57f17ee58b85995b5b3c3e4941fcea6e5f4c->enter($__internal_d4c1ceb8ac3a751f2245bcbc64ac57f17ee58b85995b5b3c3e4941fcea6e5f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d4c1ceb8ac3a751f2245bcbc64ac57f17ee58b85995b5b3c3e4941fcea6e5f4c->leave($__internal_d4c1ceb8ac3a751f2245bcbc64ac57f17ee58b85995b5b3c3e4941fcea6e5f4c_prof);

    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7292ea1fed45541b4d30e7e4810c6497366a28a60feda59fdd08a9db270a7b57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7292ea1fed45541b4d30e7e4810c6497366a28a60feda59fdd08a9db270a7b57->enter($__internal_7292ea1fed45541b4d30e7e4810c6497366a28a60feda59fdd08a9db270a7b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 8
        echo "        ";
        $this->loadTemplate("base.html.twig", "AppBundle:Task:panel.html.twig", 8)->display($context);
        // line 9
        echo "    ";
        
        $__internal_7292ea1fed45541b4d30e7e4810c6497366a28a60feda59fdd08a9db270a7b57->leave($__internal_7292ea1fed45541b4d30e7e4810c6497366a28a60feda59fdd08a9db270a7b57_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_496b21af4b447a27c6d318245efd57e403b442ab7ab540ffbbef16a1af1d72cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_496b21af4b447a27c6d318245efd57e403b442ab7ab540ffbbef16a1af1d72cc->enter($__internal_496b21af4b447a27c6d318245efd57e403b442ab7ab540ffbbef16a1af1d72cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <br><br><br>
            <div class=\"col-md-4\"></div>
            <div class=\"col-md-4\">
            <label>Add new category: </label>
                ";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'widget');
        echo " <br>
                ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'errors');
        echo "<br>
                ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                <p>";
        // line 24
        echo twig_escape_filter($this->env, ($context["alert"] ?? $this->getContext($context, "alert")), "html", null, true);
        echo "</p>
            </div>


        </div>
        <br><br>


    </div>
    </div>
";
        
        $__internal_496b21af4b447a27c6d318245efd57e403b442ab7ab540ffbbef16a1af1d72cc->leave($__internal_496b21af4b447a27c6d318245efd57e403b442ab7ab540ffbbef16a1af1d72cc_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Task:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 24,  125 => 23,  121 => 22,  117 => 21,  113 => 20,  105 => 14,  99 => 13,  92 => 9,  89 => 8,  83 => 7,  72 => 6,  60 => 5,  50 => 35,  48 => 13,  41 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}Task Planner{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    {% block javascripts %}
        {% include 'base.html.twig' %}
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>
<body>
{% block body %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <br><br><br>
            <div class=\"col-md-4\"></div>
            <div class=\"col-md-4\">
            <label>Add new category: </label>
                {{ form_start(form) }}
                {{ form_widget(form.name) }} <br>
                {{ form_errors(form.name) }}<br>
                {{ form_end(form) }}
                <p>{{ alert }}</p>
            </div>


        </div>
        <br><br>


    </div>
    </div>
{% endblock %}

</body>
</html>
", "AppBundle:Task:panel.html.twig", "/home/neelam/Workspace/TaskPlanner/project/src/AppBundle/Resources/views/Task/panel.html.twig");
    }
}
