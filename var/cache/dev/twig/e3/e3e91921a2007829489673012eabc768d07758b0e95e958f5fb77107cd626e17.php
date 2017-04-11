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
        $__internal_38587a38e960a962e90f82ce63cb8a6b7a25acfc170bb4acc025913de3143e47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38587a38e960a962e90f82ce63cb8a6b7a25acfc170bb4acc025913de3143e47->enter($__internal_38587a38e960a962e90f82ce63cb8a6b7a25acfc170bb4acc025913de3143e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f6b93300ed420f005c944462355610311d5758276250ad59b899e6555b5bbd06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6b93300ed420f005c944462355610311d5758276250ad59b899e6555b5bbd06->enter($__internal_f6b93300ed420f005c944462355610311d5758276250ad59b899e6555b5bbd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38587a38e960a962e90f82ce63cb8a6b7a25acfc170bb4acc025913de3143e47->leave($__internal_38587a38e960a962e90f82ce63cb8a6b7a25acfc170bb4acc025913de3143e47_prof);

        
        $__internal_f6b93300ed420f005c944462355610311d5758276250ad59b899e6555b5bbd06->leave($__internal_f6b93300ed420f005c944462355610311d5758276250ad59b899e6555b5bbd06_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_241787400066d360727700f8d5420206a57130dbfe9dc07a1a0b937de9a41756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_241787400066d360727700f8d5420206a57130dbfe9dc07a1a0b937de9a41756->enter($__internal_241787400066d360727700f8d5420206a57130dbfe9dc07a1a0b937de9a41756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0b808fcdc872cf0e3c7c946313c92927834753a455dd80a3845b18e75f3df320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b808fcdc872cf0e3c7c946313c92927834753a455dd80a3845b18e75f3df320->enter($__internal_0b808fcdc872cf0e3c7c946313c92927834753a455dd80a3845b18e75f3df320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0b808fcdc872cf0e3c7c946313c92927834753a455dd80a3845b18e75f3df320->leave($__internal_0b808fcdc872cf0e3c7c946313c92927834753a455dd80a3845b18e75f3df320_prof);

        
        $__internal_241787400066d360727700f8d5420206a57130dbfe9dc07a1a0b937de9a41756->leave($__internal_241787400066d360727700f8d5420206a57130dbfe9dc07a1a0b937de9a41756_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cef49b02f7aa6dfbb595e147fb3e7eff0071485fb8959d9593fa3992647bd4ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cef49b02f7aa6dfbb595e147fb3e7eff0071485fb8959d9593fa3992647bd4ee->enter($__internal_cef49b02f7aa6dfbb595e147fb3e7eff0071485fb8959d9593fa3992647bd4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f82b3bc291c99059dd649f4a98a53bd011022e5c7507efd1e03cbaa0988f8fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f82b3bc291c99059dd649f4a98a53bd011022e5c7507efd1e03cbaa0988f8fc1->enter($__internal_f82b3bc291c99059dd649f4a98a53bd011022e5c7507efd1e03cbaa0988f8fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f82b3bc291c99059dd649f4a98a53bd011022e5c7507efd1e03cbaa0988f8fc1->leave($__internal_f82b3bc291c99059dd649f4a98a53bd011022e5c7507efd1e03cbaa0988f8fc1_prof);

        
        $__internal_cef49b02f7aa6dfbb595e147fb3e7eff0071485fb8959d9593fa3992647bd4ee->leave($__internal_cef49b02f7aa6dfbb595e147fb3e7eff0071485fb8959d9593fa3992647bd4ee_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d69f09232f8ad326c8c013abd58799f48d0091e2693a5d23eea6ea39ba46d4e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d69f09232f8ad326c8c013abd58799f48d0091e2693a5d23eea6ea39ba46d4e0->enter($__internal_d69f09232f8ad326c8c013abd58799f48d0091e2693a5d23eea6ea39ba46d4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5ba26b2ddb9858e2d8775802eb5865de4050c52fae957105c3575de0c6f0c374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba26b2ddb9858e2d8775802eb5865de4050c52fae957105c3575de0c6f0c374->enter($__internal_5ba26b2ddb9858e2d8775802eb5865de4050c52fae957105c3575de0c6f0c374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_5ba26b2ddb9858e2d8775802eb5865de4050c52fae957105c3575de0c6f0c374->leave($__internal_5ba26b2ddb9858e2d8775802eb5865de4050c52fae957105c3575de0c6f0c374_prof);

        
        $__internal_d69f09232f8ad326c8c013abd58799f48d0091e2693a5d23eea6ea39ba46d4e0->leave($__internal_d69f09232f8ad326c8c013abd58799f48d0091e2693a5d23eea6ea39ba46d4e0_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\site\\OpenServer\\domains\\symfony-blog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
