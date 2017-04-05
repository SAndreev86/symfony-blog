<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_71001b70e3e97040e1807b9f9e7701680cb7a243ecef61cf944e913337471340 extends Twig_Template
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
        $__internal_e1e42c1d80c9b04b1506f8b068c64570c42ee5b3292a95a8352a8535f1354b30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1e42c1d80c9b04b1506f8b068c64570c42ee5b3292a95a8352a8535f1354b30->enter($__internal_e1e42c1d80c9b04b1506f8b068c64570c42ee5b3292a95a8352a8535f1354b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b7fbf3e3cf1e6a3ee40ff16d2afa4a14ebd93ab1423890d06fff1374b15f6db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7fbf3e3cf1e6a3ee40ff16d2afa4a14ebd93ab1423890d06fff1374b15f6db4->enter($__internal_b7fbf3e3cf1e6a3ee40ff16d2afa4a14ebd93ab1423890d06fff1374b15f6db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1e42c1d80c9b04b1506f8b068c64570c42ee5b3292a95a8352a8535f1354b30->leave($__internal_e1e42c1d80c9b04b1506f8b068c64570c42ee5b3292a95a8352a8535f1354b30_prof);

        
        $__internal_b7fbf3e3cf1e6a3ee40ff16d2afa4a14ebd93ab1423890d06fff1374b15f6db4->leave($__internal_b7fbf3e3cf1e6a3ee40ff16d2afa4a14ebd93ab1423890d06fff1374b15f6db4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_efe6778a7239c41825cf3bc8dc524fa69925251abfd3b194d1e5c7b36e7e97dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efe6778a7239c41825cf3bc8dc524fa69925251abfd3b194d1e5c7b36e7e97dd->enter($__internal_efe6778a7239c41825cf3bc8dc524fa69925251abfd3b194d1e5c7b36e7e97dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8d7be2b1a9d0d989a443f2676d37ad52de2adc584f89ff7fb557d4a9d6f0564a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d7be2b1a9d0d989a443f2676d37ad52de2adc584f89ff7fb557d4a9d6f0564a->enter($__internal_8d7be2b1a9d0d989a443f2676d37ad52de2adc584f89ff7fb557d4a9d6f0564a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_8d7be2b1a9d0d989a443f2676d37ad52de2adc584f89ff7fb557d4a9d6f0564a->leave($__internal_8d7be2b1a9d0d989a443f2676d37ad52de2adc584f89ff7fb557d4a9d6f0564a_prof);

        
        $__internal_efe6778a7239c41825cf3bc8dc524fa69925251abfd3b194d1e5c7b36e7e97dd->leave($__internal_efe6778a7239c41825cf3bc8dc524fa69925251abfd3b194d1e5c7b36e7e97dd_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\OpenServer\\domains\\symfony-blog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
