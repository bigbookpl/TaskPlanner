<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_04bba716fc2fc3e9abac7ca9ea03355cd209c43f9e66716705b740ca563be305 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e0deab264f6561841fd39503ade5c1481530210cb25d457c27b58747f0d5eed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e0deab264f6561841fd39503ade5c1481530210cb25d457c27b58747f0d5eed->enter($__internal_5e0deab264f6561841fd39503ade5c1481530210cb25d457c27b58747f0d5eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        ";
        // line 5
        $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 5)->display($context);
        // line 6
        echo "    </head>
    <body>
        <div>
            ";
        // line 10
        echo "                ";
        // line 11
        echo "                ";
        // line 12
        echo "                    ";
        // line 13
        echo "                ";
        // line 14
        echo "            ";
        // line 15
        echo "                ";
        // line 16
        echo "            ";
        // line 17
        echo "        </div>

        ";
        // line 19
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 20
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 21
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 22
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 23
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        ";
        }
        // line 28
        echo "
        <div>
            ";
        // line 30
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 32
        echo "        </div>
    </body>
</html>
";
        
        $__internal_5e0deab264f6561841fd39503ade5c1481530210cb25d457c27b58747f0d5eed->leave($__internal_5e0deab264f6561841fd39503ade5c1481530210cb25d457c27b58747f0d5eed_prof);

    }

    // line 30
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4c439a7b9b4e44cf320fb2227b5832d24d88c485321ab60d798b3a0f381f027d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c439a7b9b4e44cf320fb2227b5832d24d88c485321ab60d798b3a0f381f027d->enter($__internal_4c439a7b9b4e44cf320fb2227b5832d24d88c485321ab60d798b3a0f381f027d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 31
        echo "            ";
        
        $__internal_4c439a7b9b4e44cf320fb2227b5832d24d88c485321ab60d798b3a0f381f027d->leave($__internal_4c439a7b9b4e44cf320fb2227b5832d24d88c485321ab60d798b3a0f381f027d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 31,  105 => 30,  95 => 32,  93 => 30,  89 => 28,  86 => 27,  80 => 26,  71 => 23,  66 => 22,  61 => 21,  56 => 20,  54 => 19,  50 => 17,  48 => 16,  46 => 15,  44 => 14,  42 => 13,  40 => 12,  38 => 11,  36 => 10,  31 => 6,  29 => 5,  23 => 1,);
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
        <meta charset=\"UTF-8\" />
        {% include 'base.html.twig' %}
    </head>
    <body>
        <div>
            {#{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}#}
                {#{{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |#}
                {#<a href=\"{{ path('fos_user_security_logout') }}\">#}
                    {#{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}#}
                {#</a>#}
            {#{% else %}#}
                {#<a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>#}
            {#{% endif %}#}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    </body>
</html>
", "@FOSUser/layout.html.twig", "/home/neelam/Workspace/TaskPlanner/project/vendor/friendsofsymfony/user-bundle/Resources/views/layout.html.twig");
    }
}
