<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_a2138652fe6a17ecf50dcfc82a71c0b4dbfff6e07def26e3e2163a5ffbc5c488 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad533eb49752d7f353f3bdc927f7aa9fc765f2d4cfa942405b6def13902efe1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad533eb49752d7f353f3bdc927f7aa9fc765f2d4cfa942405b6def13902efe1f->enter($__internal_ad533eb49752d7f353f3bdc927f7aa9fc765f2d4cfa942405b6def13902efe1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 4
            echo "    <div xmlns=\"http://www.w3.org/1999/html\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
<form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 8
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 9
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\"/>
    ";
        }
        // line 11
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <br><br><br>
            <div class=\"col-md-4\"></div>
            <div class=\"col-md-4\">
                <label for=\"username\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"/>

                <label for=\"password\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\"/>

                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                <label for=\"remember_me\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Remember me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
<br>
                <button type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>Log in</button
</form>
</div>
</div>
</div>";
        
        $__internal_ad533eb49752d7f353f3bdc927f7aa9fc765f2d4cfa942405b6def13902efe1f->leave($__internal_ad533eb49752d7f353f3bdc927f7aa9fc765f2d4cfa942405b6def13902efe1f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 25,  71 => 23,  64 => 19,  59 => 17,  55 => 16,  48 => 11,  42 => 9,  40 => 8,  36 => 7,  33 => 6,  27 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div xmlns=\"http://www.w3.org/1999/html\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>
    {% endif %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <br><br><br>
            <div class=\"col-md-4\"></div>
            <div class=\"col-md-4\">
                <label for=\"username\">{{ 'Username'|trans }}</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\"/>

                <label for=\"password\">{{ 'Password'|trans }}</label>
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\"/>

                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                <label for=\"remember_me\">{{ 'Remember me'|trans }}</label>
<br>
                <button type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ ''|trans }}\"/>Log in</button
</form>
</div>
</div>
</div>", "@FOSUser/Security/login_content.html.twig", "/home/neelam/Workspace/TaskPlanner/project/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login_content.html.twig");
    }
}
