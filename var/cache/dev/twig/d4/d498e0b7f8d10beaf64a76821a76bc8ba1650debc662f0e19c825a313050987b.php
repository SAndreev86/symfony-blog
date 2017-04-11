<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a66f7feeccc64ec58a7671d7832396430d88f2e27434edb21459be8430e2f116 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_d1dbde1f53b603120e6ea9c6c6efba00abf587dc9e44859b4cd9058736da35a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1dbde1f53b603120e6ea9c6c6efba00abf587dc9e44859b4cd9058736da35a4->enter($__internal_d1dbde1f53b603120e6ea9c6c6efba00abf587dc9e44859b4cd9058736da35a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0021cb9a9f31fb951254b0350d43e11119b952aea5b6c674dcb3c81aaca1a77d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0021cb9a9f31fb951254b0350d43e11119b952aea5b6c674dcb3c81aaca1a77d->enter($__internal_0021cb9a9f31fb951254b0350d43e11119b952aea5b6c674dcb3c81aaca1a77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1dbde1f53b603120e6ea9c6c6efba00abf587dc9e44859b4cd9058736da35a4->leave($__internal_d1dbde1f53b603120e6ea9c6c6efba00abf587dc9e44859b4cd9058736da35a4_prof);

        
        $__internal_0021cb9a9f31fb951254b0350d43e11119b952aea5b6c674dcb3c81aaca1a77d->leave($__internal_0021cb9a9f31fb951254b0350d43e11119b952aea5b6c674dcb3c81aaca1a77d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c210d209cfe04c73fd1edfcd716cff53cfae51c3a63733ef97f1d13a203450ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c210d209cfe04c73fd1edfcd716cff53cfae51c3a63733ef97f1d13a203450ea->enter($__internal_c210d209cfe04c73fd1edfcd716cff53cfae51c3a63733ef97f1d13a203450ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fcc7bc9f26f2fdc89a68d4a06d2ad4a36caa615d9242ff9575d1a2ed2594ed9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc7bc9f26f2fdc89a68d4a06d2ad4a36caa615d9242ff9575d1a2ed2594ed9e->enter($__internal_fcc7bc9f26f2fdc89a68d4a06d2ad4a36caa615d9242ff9575d1a2ed2594ed9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fcc7bc9f26f2fdc89a68d4a06d2ad4a36caa615d9242ff9575d1a2ed2594ed9e->leave($__internal_fcc7bc9f26f2fdc89a68d4a06d2ad4a36caa615d9242ff9575d1a2ed2594ed9e_prof);

        
        $__internal_c210d209cfe04c73fd1edfcd716cff53cfae51c3a63733ef97f1d13a203450ea->leave($__internal_c210d209cfe04c73fd1edfcd716cff53cfae51c3a63733ef97f1d13a203450ea_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_41c8a57e065d6fd402c1f8cd32d9b66c7c4014ec8218313b211979e4a19891de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41c8a57e065d6fd402c1f8cd32d9b66c7c4014ec8218313b211979e4a19891de->enter($__internal_41c8a57e065d6fd402c1f8cd32d9b66c7c4014ec8218313b211979e4a19891de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2302ad55fc1d220defb77915cc2af85a36d1d2705f1464f3f28cf19832e92056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2302ad55fc1d220defb77915cc2af85a36d1d2705f1464f3f28cf19832e92056->enter($__internal_2302ad55fc1d220defb77915cc2af85a36d1d2705f1464f3f28cf19832e92056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2302ad55fc1d220defb77915cc2af85a36d1d2705f1464f3f28cf19832e92056->leave($__internal_2302ad55fc1d220defb77915cc2af85a36d1d2705f1464f3f28cf19832e92056_prof);

        
        $__internal_41c8a57e065d6fd402c1f8cd32d9b66c7c4014ec8218313b211979e4a19891de->leave($__internal_41c8a57e065d6fd402c1f8cd32d9b66c7c4014ec8218313b211979e4a19891de_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_48b4da70319670de4e8bc4f99335d14c2ca2159381aa1d4fb69ea21a4fa48312 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48b4da70319670de4e8bc4f99335d14c2ca2159381aa1d4fb69ea21a4fa48312->enter($__internal_48b4da70319670de4e8bc4f99335d14c2ca2159381aa1d4fb69ea21a4fa48312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b67b1aad6ed5aae3cb7fa2be4272b6f4c70251474bd7edd548d01d7afe00155c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b67b1aad6ed5aae3cb7fa2be4272b6f4c70251474bd7edd548d01d7afe00155c->enter($__internal_b67b1aad6ed5aae3cb7fa2be4272b6f4c70251474bd7edd548d01d7afe00155c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b67b1aad6ed5aae3cb7fa2be4272b6f4c70251474bd7edd548d01d7afe00155c->leave($__internal_b67b1aad6ed5aae3cb7fa2be4272b6f4c70251474bd7edd548d01d7afe00155c_prof);

        
        $__internal_48b4da70319670de4e8bc4f99335d14c2ca2159381aa1d4fb69ea21a4fa48312->leave($__internal_48b4da70319670de4e8bc4f99335d14c2ca2159381aa1d4fb69ea21a4fa48312_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\site\\OpenServer\\domains\\symfony-blog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
