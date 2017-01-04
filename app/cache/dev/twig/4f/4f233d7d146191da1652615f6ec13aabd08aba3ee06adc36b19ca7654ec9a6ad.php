<?php

/* AppBundle:Task:main.html.twig */
class __TwigTemplate_c5b254071f390540eedba00476d6cd5c7a50cc4e8516bd970b072e2a91591be9 extends Twig_Template
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
        $__internal_ba2d160ba7d2790bf6fec112ffe0502a299c1378d1c2072f041db979490e3caf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba2d160ba7d2790bf6fec112ffe0502a299c1378d1c2072f041db979490e3caf->enter($__internal_ba2d160ba7d2790bf6fec112ffe0502a299c1378d1c2072f041db979490e3caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Task:main.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/html\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->loadTemplate("base.html.twig", "AppBundle:Task:main.html.twig", 7)->display($context);
        // line 8
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/scdatetimepicker/js/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\"></script>
    <link rel='stylesheet' href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/scdatetimepicker/css/datetimepicker.css"), "html", null, true);
        echo "\" />
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>
<body>
";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 127
        echo "
</div>
</body>
</html>
";
        
        $__internal_ba2d160ba7d2790bf6fec112ffe0502a299c1378d1c2072f041db979490e3caf->leave($__internal_ba2d160ba7d2790bf6fec112ffe0502a299c1378d1c2072f041db979490e3caf_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbbdfc34b12ebd6b725d03b842c9189872aa670c869d261ed586b1ec15d98031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbbdfc34b12ebd6b725d03b842c9189872aa670c869d261ed586b1ec15d98031->enter($__internal_dbbdfc34b12ebd6b725d03b842c9189872aa670c869d261ed586b1ec15d98031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Task Planner";
        
        $__internal_dbbdfc34b12ebd6b725d03b842c9189872aa670c869d261ed586b1ec15d98031->leave($__internal_dbbdfc34b12ebd6b725d03b842c9189872aa670c869d261ed586b1ec15d98031_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_17891a94266e679b145326024a951f6b888301913aa2ef1cb54f745ccadfff7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17891a94266e679b145326024a951f6b888301913aa2ef1cb54f745ccadfff7b->enter($__internal_17891a94266e679b145326024a951f6b888301913aa2ef1cb54f745ccadfff7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    ";
        
        $__internal_17891a94266e679b145326024a951f6b888301913aa2ef1cb54f745ccadfff7b->leave($__internal_17891a94266e679b145326024a951f6b888301913aa2ef1cb54f745ccadfff7b_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_58a7f6247f398c5f9b9f0ad9857e917da36b545f9ea7f6c55bea32fc85d7a804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58a7f6247f398c5f9b9f0ad9857e917da36b545f9ea7f6c55bea32fc85d7a804->enter($__internal_58a7f6247f398c5f9b9f0ad9857e917da36b545f9ea7f6c55bea32fc85d7a804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        echo "    ";
        
        $__internal_58a7f6247f398c5f9b9f0ad9857e917da36b545f9ea7f6c55bea32fc85d7a804->leave($__internal_58a7f6247f398c5f9b9f0ad9857e917da36b545f9ea7f6c55bea32fc85d7a804_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_a81f13778d78d5d1edd194f8cb75e0356685990a9112be51ad0ebcaa1fd33e48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a81f13778d78d5d1edd194f8cb75e0356685990a9112be51ad0ebcaa1fd33e48->enter($__internal_a81f13778d78d5d1edd194f8cb75e0356685990a9112be51ad0ebcaa1fd33e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "

    <div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-md-12\"><h2>Task Planner</h2></div>
    </div>
        <hr><br><br>
    <div class=\"row\">

        <div class=\"col-md-3 fixed\">
            ";
        // line 28
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'label');
        echo " <br>
            ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'widget');
        echo " <br>
            ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'label');
        echo " <br>
            ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'widget');
        echo " <br>
            ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "term", array()), 'label');
        echo "
            <div class='input-group date datetimepicker'>
            ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "term", array()), 'widget', array("attr" => array("class" => "form-control input-inline", "type" => "datetime")));
        echo "
                <span class=\"input-group-addon\">
                                    <span class=\"glyphicon glyphicon-calendar\"></span>
                                </span>
            </div>
            ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "priority", array()), 'label');
        echo "<br>
            ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "priority", array()), 'widget');
        echo "<br>
            ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "category", array()), 'label');
        echo " <br>
            ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "category", array()), 'widget');
        echo "<br>
            ";
        // line 44
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        <div class=\"col-md-1\"></div>
        <div class=\"col-md-3\">

            ";
        // line 50
        echo "            <h4>Today: </h4>
            <ol>
            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["todayTasks"] ?? $this->getContext($context, "todayTasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 53
            echo "                <li> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "name", array()), "html", null, true);
            echo " </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            </ol>
            <form method=\"post\" action=\"#\">
                <label>Choose date: </label>
                <div class='input-group date datepicker'><input class=\"form-control input-inline\" type=\"date\" name=\"chosenDay\">
                    <span class=\"input-group-addon\">
                                    <span class=\"glyphicon glyphicon-calendar\"></span>
                    </span>
                </div>
                <button type=\"submit\">Show</button>
            </form></div>
        <div class=\"col-md-2\"></div>
        <div class=\"col-lg-3\">
            <h4>Categories:</h4>
            <br>
            <div class=\"list-group\">
                    <a href=\"/\" class=\"list-group-item\">Show All</a>
                ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 72
            echo "                    <a href=\"/?cat=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "\" class=\"list-group-item\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "            </div>
        </div>
    </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-3\"></div>
        <div class=\"col-md-1\"></div>
        <div class=\"col-md-5\">
            <h3>Task List:</h3>
            <fieldset class=\"form-group\">
            <div class=\"input-group\">     <form method=\"post\" id=\"doneFilter\"><label><input type=\"checkbox\" name=\"doneFilterChecked\"
                            ";
        // line 85
        if (($context["doneFilter"] ?? $this->getContext($context, "doneFilter"))) {
            // line 86
            echo "                                checked=\"checked\"
                            ";
        }
        // line 88
        echo "                        >Show only undone</label></form></div>
        </div></fieldset>
        <div class=\"col-lg-3\">

    </div>
    ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? $this->getContext($context, "tasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 94
            echo "        ";
            if (($this->getAttribute($context["task"], "isDone", array()) && ($context["doneFilter"] ?? $this->getContext($context, "doneFilter")))) {
                // line 95
                echo "        ";
            } else {
                // line 96
                echo "            <div class=\"row\">
            <div class=\"col-md-4\"></div>
        <div class=\"tasks\" id=\"";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
                echo "\">
            <div class=\"col-md-4\">
            ";
                // line 100
                if (($this->getAttribute($context["task"], "id", array()) == ($context["edit"] ?? $this->getContext($context, "edit")))) {
                    // line 101
                    echo "                ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Default:editTask", array("taskId" => $this->getAttribute(                    // line 103
$context["task"], "id", array()))));
                    // line 104
                    echo "
            ";
                } else {
                    // line 106
                    echo "                ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Default:task", array("task" =>                     // line 108
$context["task"])));
                    // line 109
                    echo "
            ";
                }
                // line 111
                echo "            </div>


            <div class=\"col-md-1 buttonsTP ";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
                echo "\" data-content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
                echo "\"><a
                        href=\"/setDone/";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
                echo "\"><img class=\"doneBtn\" src=\"/doneS.png\"></a><img
                        class=\"delBtn\" src=\"/trashS.png\"><a href=\"/?edit=";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
                echo "#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
                echo "\"><img
                            class=\"editBtn\" src=\"/editS.png\"></a>
            </div>
            </div>
            </div>
        ";
            }
            // line 122
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "


";
        
        $__internal_a81f13778d78d5d1edd194f8cb75e0356685990a9112be51ad0ebcaa1fd33e48->leave($__internal_a81f13778d78d5d1edd194f8cb75e0356685990a9112be51ad0ebcaa1fd33e48_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Task:main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 123,  325 => 122,  314 => 116,  310 => 115,  304 => 114,  299 => 111,  295 => 109,  293 => 108,  291 => 106,  287 => 104,  285 => 103,  283 => 101,  281 => 100,  276 => 98,  272 => 96,  269 => 95,  266 => 94,  262 => 93,  255 => 88,  251 => 86,  249 => 85,  236 => 74,  225 => 72,  221 => 71,  203 => 55,  194 => 53,  190 => 52,  186 => 50,  178 => 44,  174 => 43,  170 => 42,  166 => 41,  162 => 40,  154 => 35,  149 => 33,  145 => 32,  141 => 31,  137 => 30,  133 => 29,  129 => 28,  117 => 18,  111 => 17,  104 => 11,  98 => 10,  91 => 9,  85 => 8,  73 => 6,  62 => 127,  60 => 17,  54 => 14,  50 => 13,  45 => 12,  42 => 10,  39 => 8,  37 => 7,  33 => 6,  26 => 1,);
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
<html xmlns=\"http://www.w3.org/1999/html\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}Task Planner{% endblock %}</title>
    {% include 'base.html.twig' %}
    {% block stylesheets %}
    {% endblock %}
    {% block javascripts %}
    {% endblock %}
    <script src=\"{{ asset('bundles/scdatetimepicker/js/bootstrap-datetimepicker.js') }}\"></script>
    <link rel='stylesheet' href=\"{{ asset('bundles/scdatetimepicker/css/datetimepicker.css') }}\" />
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>
<body>
{% block body %}


    <div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-md-12\"><h2>Task Planner</h2></div>
    </div>
        <hr><br><br>
    <div class=\"row\">

        <div class=\"col-md-3 fixed\">
            {{ form_start(form) }}
            {{ form_label(form.name) }} <br>
            {{ form_widget(form.name) }} <br>
            {{ form_label(form.description) }} <br>
            {{ form_widget(form.description) }} <br>
            {{ form_label(form.term) }}
            <div class='input-group date datetimepicker'>
            {{ form_widget(form.term, {'attr': {'class': 'form-control input-inline', 'type': 'datetime'}}) }}
                <span class=\"input-group-addon\">
                                    <span class=\"glyphicon glyphicon-calendar\"></span>
                                </span>
            </div>
            {{ form_label(form.priority) }}<br>
            {{ form_widget(form.priority) }}<br>
            {{ form_label(form.category) }} <br>
            {{ form_widget(form.category) }}<br>
            {{ form_end(form) }}
            </div>
        <div class=\"col-md-1\"></div>
        <div class=\"col-md-3\">

            {#kalendarz/kółka#}
            <h4>Today: </h4>
            <ol>
            {% for task in todayTasks %}
                <li> {{ task.name }} </li>
            {% endfor %}
            </ol>
            <form method=\"post\" action=\"#\">
                <label>Choose date: </label>
                <div class='input-group date datepicker'><input class=\"form-control input-inline\" type=\"date\" name=\"chosenDay\">
                    <span class=\"input-group-addon\">
                                    <span class=\"glyphicon glyphicon-calendar\"></span>
                    </span>
                </div>
                <button type=\"submit\">Show</button>
            </form></div>
        <div class=\"col-md-2\"></div>
        <div class=\"col-lg-3\">
            <h4>Categories:</h4>
            <br>
            <div class=\"list-group\">
                    <a href=\"/\" class=\"list-group-item\">Show All</a>
                {% for category in categories %}
                    <a href=\"/?cat={{ category.name }}\" class=\"list-group-item\">{{ category.name }}</a>
                {% endfor %}
            </div>
        </div>
    </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-3\"></div>
        <div class=\"col-md-1\"></div>
        <div class=\"col-md-5\">
            <h3>Task List:</h3>
            <fieldset class=\"form-group\">
            <div class=\"input-group\">     <form method=\"post\" id=\"doneFilter\"><label><input type=\"checkbox\" name=\"doneFilterChecked\"
                            {% if doneFilter %}
                                checked=\"checked\"
                            {% endif %}
                        >Show only undone</label></form></div>
        </div></fieldset>
        <div class=\"col-lg-3\">

    </div>
    {% for task in tasks %}
        {% if task.isDone and doneFilter %}
        {% else %}
            <div class=\"row\">
            <div class=\"col-md-4\"></div>
        <div class=\"tasks\" id=\"{{ task.id }}\">
            <div class=\"col-md-4\">
            {% if task.id == edit %}
                {{ render(controller(
                'AppBundle:Default:editTask',
                { 'taskId': task.id }
                )) }}
            {% else %}
                {{ render(controller(
                'AppBundle:Default:task',
                { 'task': task }
                )) }}
            {% endif %}
            </div>


            <div class=\"col-md-1 buttonsTP {{ task.id }}\" data-content=\"{{ task.id }}\"><a
                        href=\"/setDone/{{ task.id }}\"><img class=\"doneBtn\" src=\"/doneS.png\"></a><img
                        class=\"delBtn\" src=\"/trashS.png\"><a href=\"/?edit={{ task.id }}#{{ task.id }}\"><img
                            class=\"editBtn\" src=\"/editS.png\"></a>
            </div>
            </div>
            </div>
        {% endif %}
    {% endfor %}



{% endblock %}

</div>
</body>
</html>
", "AppBundle:Task:main.html.twig", "/home/neelam/Workspace/TaskPlanner/project/src/AppBundle/Resources/views/Task/main.html.twig");
    }
}
