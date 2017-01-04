<?php

/* base.html.twig */
class __TwigTemplate_a07f21b810eea507f8bf36a6406f85fd7938d97bceedc5d76ec8f63b7386d3dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f27fbc62082a005174e3165de443107e8f69018630a91757c2ee8216588d544d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f27fbc62082a005174e3165de443107e8f69018630a91757c2ee8216588d544d->enter($__internal_f27fbc62082a005174e3165de443107e8f69018630a91757c2ee8216588d544d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        $this->displayBlock('javascripts', $context, $blocks);
        // line 9
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>
<body>
";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "
";
        // line 55
        $this->displayBlock('sidebar', $context, $blocks);
        // line 56
        echo "</body>
</html>
";
        
        $__internal_f27fbc62082a005174e3165de443107e8f69018630a91757c2ee8216588d544d->leave($__internal_f27fbc62082a005174e3165de443107e8f69018630a91757c2ee8216588d544d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2670d3a731ab1753f7deb3fcd99f478329d3f7e6016a88f4341e6ea22e06ae21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2670d3a731ab1753f7deb3fcd99f478329d3f7e6016a88f4341e6ea22e06ae21->enter($__internal_2670d3a731ab1753f7deb3fcd99f478329d3f7e6016a88f4341e6ea22e06ae21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2670d3a731ab1753f7deb3fcd99f478329d3f7e6016a88f4341e6ea22e06ae21->leave($__internal_2670d3a731ab1753f7deb3fcd99f478329d3f7e6016a88f4341e6ea22e06ae21_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c957d27aedc1fec166555d12a137cbead008caea9bbf142fa1e1748f0cbdbf46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c957d27aedc1fec166555d12a137cbead008caea9bbf142fa1e1748f0cbdbf46->enter($__internal_c957d27aedc1fec166555d12a137cbead008caea9bbf142fa1e1748f0cbdbf46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>";
        
        $__internal_c957d27aedc1fec166555d12a137cbead008caea9bbf142fa1e1748f0cbdbf46->leave($__internal_c957d27aedc1fec166555d12a137cbead008caea9bbf142fa1e1748f0cbdbf46_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_556e196981ce17a9ed88d001000b416d2031d04f16e0884024c8850dbe52f0d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_556e196981ce17a9ed88d001000b416d2031d04f16e0884024c8850dbe52f0d9->enter($__internal_556e196981ce17a9ed88d001000b416d2031d04f16e0884024c8850dbe52f0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/style_mdb.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/mdb.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/main.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
        <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/style.css"), "html", null, true);
        echo "\">";
        
        $__internal_556e196981ce17a9ed88d001000b416d2031d04f16e0884024c8850dbe52f0d9->leave($__internal_556e196981ce17a9ed88d001000b416d2031d04f16e0884024c8850dbe52f0d9_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_db13551530e33575ea44c0704cdebaa52017326b21dd510d66e47104a292c48c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db13551530e33575ea44c0704cdebaa52017326b21dd510d66e47104a292c48c->enter($__internal_db13551530e33575ea44c0704cdebaa52017326b21dd510d66e47104a292c48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "

    <nav class=\"navbar navbar-dark primary-color-dark\">

        <div class=\"container\">

            <!--Collapse content-->
            <div class=\"navbar-toggleable-xs\" id=\"collapseEx\">
                <!--Navbar Brand-->
                <a class=\"navbar navbar-brand\" href=\"#\">Task Planner</a>
                <!--Links-->
                <ul class=\"nav navbar-nav\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"/\">Home <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/admin\">Edit Categories </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/register\">Register </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/logout\">Logout </a>
                    </li>
                </ul>

            </div>
            <!--/.Collapse content-->

        </div>

    </nav>
";
        
        $__internal_db13551530e33575ea44c0704cdebaa52017326b21dd510d66e47104a292c48c->leave($__internal_db13551530e33575ea44c0704cdebaa52017326b21dd510d66e47104a292c48c_prof);

    }

    // line 55
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6a1de006f76e287c4f0646fb4cac3f2c3625e337aca235a2211df4b5d8810189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a1de006f76e287c4f0646fb4cac3f2c3625e337aca235a2211df4b5d8810189->enter($__internal_6a1de006f76e287c4f0646fb4cac3f2c3625e337aca235a2211df4b5d8810189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_6a1de006f76e287c4f0646fb4cac3f2c3625e337aca235a2211df4b5d8810189->leave($__internal_6a1de006f76e287c4f0646fb4cac3f2c3625e337aca235a2211df4b5d8810189_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 55,  135 => 21,  129 => 20,  121 => 16,  115 => 13,  111 => 12,  107 => 11,  102 => 10,  96 => 9,  88 => 8,  83 => 7,  77 => 6,  65 => 5,  56 => 56,  54 => 55,  51 => 54,  49 => 20,  42 => 17,  39 => 9,  37 => 6,  33 => 5,  27 => 1,);
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
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block javascripts %}
        <script src=\"{{ asset('bundles/framework/js/jquery-3.1.1.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('bundles/framework/js/bootstrap.min.js') }}\" type=\"text/javascript\"></script>{% endblock %}
    {% block stylesheets %}
        <link href=\"{{ asset('bundles/framework/css/bootstrap.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('bundles/framework/css/style_mdb.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('bundles/framework/css/mdb.min.css') }}\" rel=\"stylesheet\">
        <script src=\"{{ asset('bundles/framework/js/main.js') }}\" type=\"text/javascript\"></script>
        <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
        <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset (\"bundles/framework/css/style.css\") }}\">{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>
<body>
{% block body %}


    <nav class=\"navbar navbar-dark primary-color-dark\">

        <div class=\"container\">

            <!--Collapse content-->
            <div class=\"navbar-toggleable-xs\" id=\"collapseEx\">
                <!--Navbar Brand-->
                <a class=\"navbar navbar-brand\" href=\"#\">Task Planner</a>
                <!--Links-->
                <ul class=\"nav navbar-nav\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"/\">Home <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/admin\">Edit Categories </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/register\">Register </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/logout\">Logout </a>
                    </li>
                </ul>

            </div>
            <!--/.Collapse content-->

        </div>

    </nav>
{% endblock %}

{% block sidebar %}{% endblock %}
</body>
</html>
", "base.html.twig", "/home/neelam/Workspace/TaskPlanner/app/Resources/views/base.html.twig");
    }
}
