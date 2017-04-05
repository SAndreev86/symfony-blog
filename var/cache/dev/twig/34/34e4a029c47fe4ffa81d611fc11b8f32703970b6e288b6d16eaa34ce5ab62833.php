<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d69a53e4b74858860d7271b8fa047330c508ff6e71f4164011ebb8ff6714ac3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17cc67d35fc8ec95edc90b5442f6e86b2f247764bde345067af984427ecf4ea1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17cc67d35fc8ec95edc90b5442f6e86b2f247764bde345067af984427ecf4ea1->enter($__internal_17cc67d35fc8ec95edc90b5442f6e86b2f247764bde345067af984427ecf4ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b6b60d1a90740f8e8df5326f238f71cf32013a5436c9d8adf6ae6cc4d4992201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6b60d1a90740f8e8df5326f238f71cf32013a5436c9d8adf6ae6cc4d4992201->enter($__internal_b6b60d1a90740f8e8df5326f238f71cf32013a5436c9d8adf6ae6cc4d4992201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17cc67d35fc8ec95edc90b5442f6e86b2f247764bde345067af984427ecf4ea1->leave($__internal_17cc67d35fc8ec95edc90b5442f6e86b2f247764bde345067af984427ecf4ea1_prof);

        
        $__internal_b6b60d1a90740f8e8df5326f238f71cf32013a5436c9d8adf6ae6cc4d4992201->leave($__internal_b6b60d1a90740f8e8df5326f238f71cf32013a5436c9d8adf6ae6cc4d4992201_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fb5d4592a8255cec2c04aeac8e506f7bccafa8cabaabb6a34d59a0c75399badc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb5d4592a8255cec2c04aeac8e506f7bccafa8cabaabb6a34d59a0c75399badc->enter($__internal_fb5d4592a8255cec2c04aeac8e506f7bccafa8cabaabb6a34d59a0c75399badc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c8c0bbee7954e1160765aa679d65c86fdc840498c09aca8167c8ade4b847ae91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8c0bbee7954e1160765aa679d65c86fdc840498c09aca8167c8ade4b847ae91->enter($__internal_c8c0bbee7954e1160765aa679d65c86fdc840498c09aca8167c8ade4b847ae91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c8c0bbee7954e1160765aa679d65c86fdc840498c09aca8167c8ade4b847ae91->leave($__internal_c8c0bbee7954e1160765aa679d65c86fdc840498c09aca8167c8ade4b847ae91_prof);

        
        $__internal_fb5d4592a8255cec2c04aeac8e506f7bccafa8cabaabb6a34d59a0c75399badc->leave($__internal_fb5d4592a8255cec2c04aeac8e506f7bccafa8cabaabb6a34d59a0c75399badc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e4e5ada63f9c221960940bd26dfab2cdc4f4480001211d6a1787cbe0dcb7c56d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4e5ada63f9c221960940bd26dfab2cdc4f4480001211d6a1787cbe0dcb7c56d->enter($__internal_e4e5ada63f9c221960940bd26dfab2cdc4f4480001211d6a1787cbe0dcb7c56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_75c216be8908e5b692b453a3097db77f085e6e3b0d46316fb073ae485bfc593f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c216be8908e5b692b453a3097db77f085e6e3b0d46316fb073ae485bfc593f->enter($__internal_75c216be8908e5b692b453a3097db77f085e6e3b0d46316fb073ae485bfc593f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_75c216be8908e5b692b453a3097db77f085e6e3b0d46316fb073ae485bfc593f->leave($__internal_75c216be8908e5b692b453a3097db77f085e6e3b0d46316fb073ae485bfc593f_prof);

        
        $__internal_e4e5ada63f9c221960940bd26dfab2cdc4f4480001211d6a1787cbe0dcb7c56d->leave($__internal_e4e5ada63f9c221960940bd26dfab2cdc4f4480001211d6a1787cbe0dcb7c56d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ef6b45c9f8ce8626238166ecc4b1af0455bf24a9ba13a022e9545e5a000709a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef6b45c9f8ce8626238166ecc4b1af0455bf24a9ba13a022e9545e5a000709a3->enter($__internal_ef6b45c9f8ce8626238166ecc4b1af0455bf24a9ba13a022e9545e5a000709a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ea84062b88f12fd8041c357e80b5ce2f1c596333261c3d72f470819e02f25aaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea84062b88f12fd8041c357e80b5ce2f1c596333261c3d72f470819e02f25aaa->enter($__internal_ea84062b88f12fd8041c357e80b5ce2f1c596333261c3d72f470819e02f25aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ea84062b88f12fd8041c357e80b5ce2f1c596333261c3d72f470819e02f25aaa->leave($__internal_ea84062b88f12fd8041c357e80b5ce2f1c596333261c3d72f470819e02f25aaa_prof);

        
        $__internal_ef6b45c9f8ce8626238166ecc4b1af0455bf24a9ba13a022e9545e5a000709a3->leave($__internal_ef6b45c9f8ce8626238166ecc4b1af0455bf24a9ba13a022e9545e5a000709a3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\OpenServer\\domains\\symfony-blog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
