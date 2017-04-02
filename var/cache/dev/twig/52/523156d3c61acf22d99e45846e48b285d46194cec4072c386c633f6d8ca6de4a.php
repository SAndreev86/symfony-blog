<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_cc62a191ce5b0b66830c64a41769b65057fd927fe5614e06397a52c15df909c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d73192fefc0be30ba0b808568a2813feaa9c440449200c1af4fb58a0fb0c0f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d73192fefc0be30ba0b808568a2813feaa9c440449200c1af4fb58a0fb0c0f56->enter($__internal_d73192fefc0be30ba0b808568a2813feaa9c440449200c1af4fb58a0fb0c0f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f84053f7a5950762a68957ba5b7c667fa94d4e6181827631334c9898c8155e93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84053f7a5950762a68957ba5b7c667fa94d4e6181827631334c9898c8155e93->enter($__internal_f84053f7a5950762a68957ba5b7c667fa94d4e6181827631334c9898c8155e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d73192fefc0be30ba0b808568a2813feaa9c440449200c1af4fb58a0fb0c0f56->leave($__internal_d73192fefc0be30ba0b808568a2813feaa9c440449200c1af4fb58a0fb0c0f56_prof);

        
        $__internal_f84053f7a5950762a68957ba5b7c667fa94d4e6181827631334c9898c8155e93->leave($__internal_f84053f7a5950762a68957ba5b7c667fa94d4e6181827631334c9898c8155e93_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ae7f585dd16006cddc6b71da3744b6811d8585697ca0e525891e4a1b3e7f148e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae7f585dd16006cddc6b71da3744b6811d8585697ca0e525891e4a1b3e7f148e->enter($__internal_ae7f585dd16006cddc6b71da3744b6811d8585697ca0e525891e4a1b3e7f148e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f9c84c0e09f79fd7683875d08de5703d362ced784b2a69185153fd268e5f8497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9c84c0e09f79fd7683875d08de5703d362ced784b2a69185153fd268e5f8497->enter($__internal_f9c84c0e09f79fd7683875d08de5703d362ced784b2a69185153fd268e5f8497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_f9c84c0e09f79fd7683875d08de5703d362ced784b2a69185153fd268e5f8497->leave($__internal_f9c84c0e09f79fd7683875d08de5703d362ced784b2a69185153fd268e5f8497_prof);

        
        $__internal_ae7f585dd16006cddc6b71da3744b6811d8585697ca0e525891e4a1b3e7f148e->leave($__internal_ae7f585dd16006cddc6b71da3744b6811d8585697ca0e525891e4a1b3e7f148e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\site\\OpenServer\\domains\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
