<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b587731a82fa1e2a9442bec2a9e1c3f0902ff01ccf9312478ac026d0fe404f7b extends Twig_Template
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
        $__internal_d4ac3e0d5d7d6359192f6012e9e18e5b4166ffe839b0b87c3e70475e34572ad8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4ac3e0d5d7d6359192f6012e9e18e5b4166ffe839b0b87c3e70475e34572ad8->enter($__internal_d4ac3e0d5d7d6359192f6012e9e18e5b4166ffe839b0b87c3e70475e34572ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8bf65a555ca820fb887f6b9bb57fef775e8626bcec7a4f43251e60bece57025e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bf65a555ca820fb887f6b9bb57fef775e8626bcec7a4f43251e60bece57025e->enter($__internal_8bf65a555ca820fb887f6b9bb57fef775e8626bcec7a4f43251e60bece57025e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4ac3e0d5d7d6359192f6012e9e18e5b4166ffe839b0b87c3e70475e34572ad8->leave($__internal_d4ac3e0d5d7d6359192f6012e9e18e5b4166ffe839b0b87c3e70475e34572ad8_prof);

        
        $__internal_8bf65a555ca820fb887f6b9bb57fef775e8626bcec7a4f43251e60bece57025e->leave($__internal_8bf65a555ca820fb887f6b9bb57fef775e8626bcec7a4f43251e60bece57025e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0c17d2f74e274a19f8c4820505f6e3f79f1712ada86e608401ffe3e11f7a14a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c17d2f74e274a19f8c4820505f6e3f79f1712ada86e608401ffe3e11f7a14a3->enter($__internal_0c17d2f74e274a19f8c4820505f6e3f79f1712ada86e608401ffe3e11f7a14a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_543068eb3ed54dd2af24f6ae6998b12413bacdd8baa6964219ad3842ce77e5ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_543068eb3ed54dd2af24f6ae6998b12413bacdd8baa6964219ad3842ce77e5ed->enter($__internal_543068eb3ed54dd2af24f6ae6998b12413bacdd8baa6964219ad3842ce77e5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_543068eb3ed54dd2af24f6ae6998b12413bacdd8baa6964219ad3842ce77e5ed->leave($__internal_543068eb3ed54dd2af24f6ae6998b12413bacdd8baa6964219ad3842ce77e5ed_prof);

        
        $__internal_0c17d2f74e274a19f8c4820505f6e3f79f1712ada86e608401ffe3e11f7a14a3->leave($__internal_0c17d2f74e274a19f8c4820505f6e3f79f1712ada86e608401ffe3e11f7a14a3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_16da96592f8e3e06311a8894e9424b737dcd2eba50fc4ec241a75222707d6e9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16da96592f8e3e06311a8894e9424b737dcd2eba50fc4ec241a75222707d6e9a->enter($__internal_16da96592f8e3e06311a8894e9424b737dcd2eba50fc4ec241a75222707d6e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_44ad77d97a5ba50ff071f7f50f0b095409ed9713069de2060ec25102f3f9010c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44ad77d97a5ba50ff071f7f50f0b095409ed9713069de2060ec25102f3f9010c->enter($__internal_44ad77d97a5ba50ff071f7f50f0b095409ed9713069de2060ec25102f3f9010c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_44ad77d97a5ba50ff071f7f50f0b095409ed9713069de2060ec25102f3f9010c->leave($__internal_44ad77d97a5ba50ff071f7f50f0b095409ed9713069de2060ec25102f3f9010c_prof);

        
        $__internal_16da96592f8e3e06311a8894e9424b737dcd2eba50fc4ec241a75222707d6e9a->leave($__internal_16da96592f8e3e06311a8894e9424b737dcd2eba50fc4ec241a75222707d6e9a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_668711d703e265691fa54314d6adfec0d9ac524552bd6313a924f3d7f03ae513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_668711d703e265691fa54314d6adfec0d9ac524552bd6313a924f3d7f03ae513->enter($__internal_668711d703e265691fa54314d6adfec0d9ac524552bd6313a924f3d7f03ae513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_03e5a8fc17ebb50a98708bad75d1613050d46a6503e319d444a2fef3985a1eee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03e5a8fc17ebb50a98708bad75d1613050d46a6503e319d444a2fef3985a1eee->enter($__internal_03e5a8fc17ebb50a98708bad75d1613050d46a6503e319d444a2fef3985a1eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_03e5a8fc17ebb50a98708bad75d1613050d46a6503e319d444a2fef3985a1eee->leave($__internal_03e5a8fc17ebb50a98708bad75d1613050d46a6503e319d444a2fef3985a1eee_prof);

        
        $__internal_668711d703e265691fa54314d6adfec0d9ac524552bd6313a924f3d7f03ae513->leave($__internal_668711d703e265691fa54314d6adfec0d9ac524552bd6313a924f3d7f03ae513_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\site\\OpenServer\\domains\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
