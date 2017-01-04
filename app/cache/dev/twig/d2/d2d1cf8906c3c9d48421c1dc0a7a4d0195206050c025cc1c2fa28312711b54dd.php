<?php

/* SCDatetimepickerBundle:Form:div_layout.html.twig */
class __TwigTemplate_ddea61862a58e31f45f02998151981334fd0877a0e58ce5e227d563d1a22c314 extends Twig_Template
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
        $__internal_b479ae51c524721c13f006956050d9b1a9635b5ccd37dc471d02815bbff07a0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b479ae51c524721c13f006956050d9b1a9635b5ccd37dc471d02815bbff07a0e->enter($__internal_b479ae51c524721c13f006956050d9b1a9635b5ccd37dc471d02815bbff07a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SCDatetimepickerBundle:Form:div_layout.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('collot_datetime_widget', $context, $blocks);
        // line 24
        echo "

";
        
        $__internal_b479ae51c524721c13f006956050d9b1a9635b5ccd37dc471d02815bbff07a0e->leave($__internal_b479ae51c524721c13f006956050d9b1a9635b5ccd37dc471d02815bbff07a0e_prof);

    }

    // line 3
    public function block_collot_datetime_widget($context, array $blocks = array())
    {
        $__internal_c60f851efc87b43ed619d9fbef391345bbd9d2b436bdfc442cc0239532ce3a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c60f851efc87b43ed619d9fbef391345bbd9d2b436bdfc442cc0239532ce3a63->enter($__internal_c60f851efc87b43ed619d9fbef391345bbd9d2b436bdfc442cc0239532ce3a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collot_datetime_widget"));

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
        
        $__internal_c60f851efc87b43ed619d9fbef391345bbd9d2b436bdfc442cc0239532ce3a63->leave($__internal_c60f851efc87b43ed619d9fbef391345bbd9d2b436bdfc442cc0239532ce3a63_prof);

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


", "SCDatetimepickerBundle:Form:div_layout.html.twig", "/home/neelam/Workspace/TaskPlanner/project/vendor/stephanecollot/datetimepicker-bundle/SC/DatetimepickerBundle/Resources/views/Form/div_layout.html.twig");
    }
}
