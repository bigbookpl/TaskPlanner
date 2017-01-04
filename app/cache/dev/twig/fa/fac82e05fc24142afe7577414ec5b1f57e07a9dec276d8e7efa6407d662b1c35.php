<?php

/* SCDatetimepickerBundle:Form:div_layout.html.twig */
class __TwigTemplate_7df9bf9140794b7fbad9e108b947368976d879919be4760f5105345d059a0719 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'collot_datetime_widget' => array($this, 'block_collot_datetime_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_530b6e1be1230aee98f0368622519d4a3f6b79d9e505aa832fff9bd6ec54da41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_530b6e1be1230aee98f0368622519d4a3f6b79d9e505aa832fff9bd6ec54da41->enter($__internal_530b6e1be1230aee98f0368622519d4a3f6b79d9e505aa832fff9bd6ec54da41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SCDatetimepickerBundle:Form:div_layout.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('collot_datetime_widget', $context, $blocks);
        // line 24
        echo "

";
        
        $__internal_530b6e1be1230aee98f0368622519d4a3f6b79d9e505aa832fff9bd6ec54da41->leave($__internal_530b6e1be1230aee98f0368622519d4a3f6b79d9e505aa832fff9bd6ec54da41_prof);

    }

    // line 3
    public function block_collot_datetime_widget($context, array $blocks = array())
    {
        $__internal_5780dd7a8c17363be1a2ba523aa5b606f1e4a96f632efb1d54f1ba403379eb74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5780dd7a8c17363be1a2ba523aa5b606f1e4a96f632efb1d54f1ba403379eb74->enter($__internal_5780dd7a8c17363be1a2ba523aa5b606f1e4a96f632efb1d54f1ba403379eb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collot_datetime_widget"));

        // line 4
        ob_start();
        // line 5
        echo "    ";
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 6
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 8
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 9
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 10
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 11
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 12
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 13
            echo "

            ";
            // line 15
            $context["attr"] = twig_array_merge(array("size" => 10), ($context["attr"] ?? $this->getContext($context, "attr")));
            // line 16
            echo "            ";
            $context["id"] = ("datepicker_" . ($context["id"] ?? $this->getContext($context, "id")));
            // line 17
            echo "            ";
            $context["value"] = "";
            // line 18
            echo "            ";
            $context["full_name"] = ("datepicker_" . ($context["full_name"] ?? $this->getContext($context, "full_name")));
            // line 19
            echo "            ";
            $this->displayBlock("hidden_widget", $context, $blocks);
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5780dd7a8c17363be1a2ba523aa5b606f1e4a96f632efb1d54f1ba403379eb74->leave($__internal_5780dd7a8c17363be1a2ba523aa5b606f1e4a96f632efb1d54f1ba403379eb74_prof);

    }

    public function getTemplateName()
    {
        return "SCDatetimepickerBundle:Form:div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  80 => 19,  77 => 18,  74 => 17,  71 => 16,  69 => 15,  65 => 13,  63 => 12,  62 => 11,  61 => 10,  60 => 9,  55 => 8,  49 => 6,  46 => 5,  44 => 4,  38 => 3,  29 => 24,  27 => 3,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% block collot_datetime_widget %}
{% spaceless %}
    {% if widget == \"single_text\" %}
        {{ block(\"form_widget_simple\") }}
    {% else %}
        <div {{ block(\"widget_container_attributes\") }}>
            {{ date_pattern|replace({
                \"{{ year }}\":  form_widget(form.year),
                \"{{ month }}\": form_widget(form.month),
                \"{{ day }}\":   form_widget(form.day),
            })|raw }}

            {% set attr = {\"size\": 10}|merge(attr) %}
            {% set id = \"datepicker_\" ~ id %}
            {% set value = '' %}
            {% set full_name = \"datepicker_\" ~ full_name %}
            {{ block(\"hidden_widget\") }}
        </div>
    {% endif %}
{% endspaceless %}
{% endblock collot_datetime_widget %}


", "SCDatetimepickerBundle:Form:div_layout.html.twig", "/home/neelam/Workspace/TaskPlanner/vendor/stephanecollot/datetimepicker-bundle/SC/DatetimepickerBundle/Resources/views/Form/div_layout.html.twig");
    }
}
