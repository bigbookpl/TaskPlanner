<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_bed0ec4a58e28542eb5da2bc5c4cec1179b95787a75f3ecf0cb12218d4dfc9fc extends Twig_Template
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
        $__internal_b364776ae70a26d7a5e46ab3e363bbdec0a2cb0276ce6c33b4e44c4e268dede2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b364776ae70a26d7a5e46ab3e363bbdec0a2cb0276ce6c33b4e44c4e268dede2->enter($__internal_b364776ae70a26d7a5e46ab3e363bbdec0a2cb0276ce6c33b4e44c4e268dede2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 1
        echo "<div class=\"hidden\"> ";
        // line 2
        echo "</div>

<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-md-3\"></div>
        <div class=\"col-md-1\"></div>
        <div class=\"col-md-4\">
            ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
            <label>Username:
                ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
                ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
            </label>
            <label>E-mail:
                ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
            </label>
            <label>Password:
                ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
            </label>
            <label>Confirm password:
                ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget');
        echo "
            </label>
            ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
            <div>
                <button type=\"submit\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Register", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                Register</button>
            </div>
            ";
        // line 30
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
</div>";
        
        $__internal_b364776ae70a26d7a5e46ab3e363bbdec0a2cb0276ce6c33b4e44c4e268dede2->leave($__internal_b364776ae70a26d7a5e46ab3e363bbdec0a2cb0276ce6c33b4e44c4e268dede2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 30,  78 => 27,  73 => 25,  68 => 23,  62 => 20,  58 => 19,  52 => 16,  48 => 15,  42 => 12,  38 => 11,  33 => 9,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"hidden\"> {% trans_default_domain 'FOSUserBundle' %}
</div>

<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-md-3\"></div>
        <div class=\"col-md-1\"></div>
        <div class=\"col-md-4\">
            {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
            <label>Username:
                {{ form_widget(form.username) }}
                {{ form_errors(form.username) }}
            </label>
            <label>E-mail:
                {{ form_widget(form.email) }}
                {{ form_errors(form.email) }}
            </label>
            <label>Password:
                {{ form_widget(form.plainPassword.first) }}
                {{ form_errors(form.plainPassword.first) }}
            </label>
            <label>Confirm password:
                {{ form_widget(form.plainPassword.second) }}
            </label>
            {{ form_rest(form) }}
            <div>
                <button type=\"submit\" value=\"{{ 'Register'|trans }}\"/>
                Register</button>
            </div>
            {{ form_end(form) }}
        </div>
    </div>
</div>", "@FOSUser/Registration/register_content.html.twig", "/home/neelam/Workspace/TaskPlanner/project/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register_content.html.twig");
    }
}
