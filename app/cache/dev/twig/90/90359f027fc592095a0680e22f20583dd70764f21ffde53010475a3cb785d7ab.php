<?php

/* SCDatetimepickerBundle:Form:jquery_layout.html.twig */
class __TwigTemplate_ac9f860bab3accaa2a09cbdc5d09205d05a19fc9806dff82c11de17f439dd82c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_javascript' => array($this, 'block_form_javascript'),
            'field_javascript' => array($this, 'block_field_javascript'),
            'button_javascript' => array($this, 'block_button_javascript'),
            'collot_datetime_javascript' => array($this, 'block_collot_datetime_javascript'),
            'collot_datetime_javascript_prototype' => array($this, 'block_collot_datetime_javascript_prototype'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77c8240e48ce370c48b69769356d081fd56fb5b410e23ac7fead8e476d26a256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77c8240e48ce370c48b69769356d081fd56fb5b410e23ac7fead8e476d26a256->enter($__internal_77c8240e48ce370c48b69769356d081fd56fb5b410e23ac7fead8e476d26a256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SCDatetimepickerBundle:Form:jquery_layout.html.twig"));

        // line 1
        $this->displayBlock('form_javascript', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field_javascript', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('button_javascript', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('collot_datetime_javascript', $context, $blocks);
        
        $__internal_77c8240e48ce370c48b69769356d081fd56fb5b410e23ac7fead8e476d26a256->leave($__internal_77c8240e48ce370c48b69769356d081fd56fb5b410e23ac7fead8e476d26a256_prof);

    }

    // line 1
    public function block_form_javascript($context, array $blocks = array())
    {
        $__internal_415d30e9e96d5cca084e8c4764ef4d92b60f7032aac8fd72915c331b269175cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_415d30e9e96d5cca084e8c4764ef4d92b60f7032aac8fd72915c331b269175cc->enter($__internal_415d30e9e96d5cca084e8c4764ef4d92b60f7032aac8fd72915c331b269175cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_javascript"));

        // line 2
        ob_start();
        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 4
            echo "        ";
            echo $this->env->getExtension('SC\DatetimepickerBundle\Twig\Extension\FormExtension')->renderJavascript($context["child"]);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_415d30e9e96d5cca084e8c4764ef4d92b60f7032aac8fd72915c331b269175cc->leave($__internal_415d30e9e96d5cca084e8c4764ef4d92b60f7032aac8fd72915c331b269175cc_prof);

    }

    // line 9
    public function block_field_javascript($context, array $blocks = array())
    {
        $__internal_4fb2b48519b7743f444c2601537c6780b6dae18526bc5e1bf49c1aafd6a42ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb2b48519b7743f444c2601537c6780b6dae18526bc5e1bf49c1aafd6a42ad0->enter($__internal_4fb2b48519b7743f444c2601537c6780b6dae18526bc5e1bf49c1aafd6a42ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_javascript"));

        echo "";
        
        $__internal_4fb2b48519b7743f444c2601537c6780b6dae18526bc5e1bf49c1aafd6a42ad0->leave($__internal_4fb2b48519b7743f444c2601537c6780b6dae18526bc5e1bf49c1aafd6a42ad0_prof);

    }

    // line 11
    public function block_button_javascript($context, array $blocks = array())
    {
        $__internal_7e5b8bd06334b89870e8e1ed18bfa2afe14feb4aac8c1cd86a7f24a91e4f765e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e5b8bd06334b89870e8e1ed18bfa2afe14feb4aac8c1cd86a7f24a91e4f765e->enter($__internal_7e5b8bd06334b89870e8e1ed18bfa2afe14feb4aac8c1cd86a7f24a91e4f765e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_javascript"));

        echo "";
        
        $__internal_7e5b8bd06334b89870e8e1ed18bfa2afe14feb4aac8c1cd86a7f24a91e4f765e->leave($__internal_7e5b8bd06334b89870e8e1ed18bfa2afe14feb4aac8c1cd86a7f24a91e4f765e_prof);

    }

    // line 13
    public function block_collot_datetime_javascript($context, array $blocks = array())
    {
        $__internal_dce087d3839655993c610ccd7b1c23812f4afcc10d38952aae6baec55ab9de9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce087d3839655993c610ccd7b1c23812f4afcc10d38952aae6baec55ab9de9c->enter($__internal_dce087d3839655993c610ccd7b1c23812f4afcc10d38952aae6baec55ab9de9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collot_datetime_javascript"));

        // line 14
        ob_start();
        // line 15
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/scdatetimepicker/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\" charset=\"UTF-8\"></script>
    ";
        // line 17
        if ($this->getAttribute(($context["pickerOptions"] ?? null), "language", array(), "any", true, true)) {
            // line 18
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/scdatetimepicker/js/locales/bootstrap-datetimepicker." . $this->getAttribute(($context["pickerOptions"] ?? $this->getContext($context, "pickerOptions")), "language", array())) . ".js")), "html", null, true);
            echo "\" charset=\"UTF-8\"></script>
    ";
        }
        // line 20
        echo "    
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#";
        // line 23
        if ((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text")) {
            echo "datepicker_";
        }
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "');
        
            ";
        // line 25
        $this->displayBlock('collot_datetime_javascript_prototype', $context, $blocks);
        // line 42
        echo "        });
    </script>
    
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_dce087d3839655993c610ccd7b1c23812f4afcc10d38952aae6baec55ab9de9c->leave($__internal_dce087d3839655993c610ccd7b1c23812f4afcc10d38952aae6baec55ab9de9c_prof);

    }

    // line 25
    public function block_collot_datetime_javascript_prototype($context, array $blocks = array())
    {
        $__internal_d03ec462f0e939f223b86cf4a74155fc329fbec817acf344315e29ed8d9fb59b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d03ec462f0e939f223b86cf4a74155fc329fbec817acf344315e29ed8d9fb59b->enter($__internal_d03ec462f0e939f223b86cf4a74155fc329fbec817acf344315e29ed8d9fb59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collot_datetime_javascript_prototype"));

        // line 26
        echo "
                ";
        // line 27
        if ((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text")) {
            // line 28
            echo "                    var \$year = \$('#";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), "vars", array()), "id", array()), "html", null, true);
            echo "');
                    var \$month = \$('#";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), "vars", array()), "id", array()), "html", null, true);
            echo "');
                    var \$day = \$('#";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), "vars", array()), "id", array()), "html", null, true);
            echo "');

                    \$configs.onSelect = function(date) {
                        \$year.val(parseInt(date.substring(0, 4), 10));
                        \$month.val(parseInt(date.substring(5, 7), 10));
                        \$day.val(parseInt(date.substring(8), 10));
                    }
                ";
        }
        // line 38
        echo "
                \$field.datetimepicker(";
        // line 39
        echo twig_jsonencode_filter(($context["pickerOptions"] ?? $this->getContext($context, "pickerOptions")));
        echo ");  

            ";
        
        $__internal_d03ec462f0e939f223b86cf4a74155fc329fbec817acf344315e29ed8d9fb59b->leave($__internal_d03ec462f0e939f223b86cf4a74155fc329fbec817acf344315e29ed8d9fb59b_prof);

    }

    public function getTemplateName()
    {
        return "SCDatetimepickerBundle:Form:jquery_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  184 => 39,  181 => 38,  170 => 30,  166 => 29,  161 => 28,  159 => 27,  156 => 26,  150 => 25,  139 => 42,  137 => 25,  129 => 23,  124 => 20,  118 => 18,  116 => 17,  112 => 16,  109 => 15,  107 => 14,  101 => 13,  89 => 11,  77 => 9,  62 => 4,  57 => 3,  55 => 2,  49 => 1,  42 => 13,  39 => 12,  37 => 11,  34 => 10,  32 => 9,  29 => 8,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block form_javascript %}
{% spaceless %}
    {% for child in form %}
        {{ form_javascript(child) }}
    {% endfor %}
{% endspaceless %}
{% endblock form_javascript %}

{% block field_javascript \"\" %}

{% block button_javascript \"\" %}

{% block collot_datetime_javascript %}
{% spaceless %}

    <script type=\"text/javascript\" src=\"{{ asset('bundles/scdatetimepicker/js/bootstrap-datetimepicker.min.js') }}\" charset=\"UTF-8\"></script>
    {% if pickerOptions.language is defined %}
        <script type=\"text/javascript\" src=\"{{ asset('bundles/scdatetimepicker/js/locales/bootstrap-datetimepicker.'~ pickerOptions.language ~'.js') }}\" charset=\"UTF-8\"></script>
    {% endif %}
    
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#{% if widget != \"single_text\" %}datepicker_{% endif %}{{ id }}');
        
            {% block collot_datetime_javascript_prototype %}

                {% if widget != \"single_text\" %}
                    var \$year = \$('#{{ form.year.vars.id }}');
                    var \$month = \$('#{{ form.month.vars.id }}');
                    var \$day = \$('#{{ form.day.vars.id }}');

                    \$configs.onSelect = function(date) {
                        \$year.val(parseInt(date.substring(0, 4), 10));
                        \$month.val(parseInt(date.substring(5, 7), 10));
                        \$day.val(parseInt(date.substring(8), 10));
                    }
                {% endif %}

                \$field.datetimepicker({{ pickerOptions|json_encode|raw }});  

            {% endblock %}
        });
    </script>
    
{% endspaceless %}
{% endblock %}
", "SCDatetimepickerBundle:Form:jquery_layout.html.twig", "/home/neelam/Workspace/TaskPlanner/project/vendor/stephanecollot/datetimepicker-bundle/SC/DatetimepickerBundle/Resources/views/Form/jquery_layout.html.twig");
    }
}
