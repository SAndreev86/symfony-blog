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
        $__internal_76662913e58f48fbf96dc3f91d8feeef73d2e0c0b9212943046ac25eabcfd913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76662913e58f48fbf96dc3f91d8feeef73d2e0c0b9212943046ac25eabcfd913->enter($__internal_76662913e58f48fbf96dc3f91d8feeef73d2e0c0b9212943046ac25eabcfd913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1449b7901dcb00909dadc6074ea689941fc97110d3691ac6fa6c6f18f4e22b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1449b7901dcb00909dadc6074ea689941fc97110d3691ac6fa6c6f18f4e22b93->enter($__internal_1449b7901dcb00909dadc6074ea689941fc97110d3691ac6fa6c6f18f4e22b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76662913e58f48fbf96dc3f91d8feeef73d2e0c0b9212943046ac25eabcfd913->leave($__internal_76662913e58f48fbf96dc3f91d8feeef73d2e0c0b9212943046ac25eabcfd913_prof);

        
        $__internal_1449b7901dcb00909dadc6074ea689941fc97110d3691ac6fa6c6f18f4e22b93->leave($__internal_1449b7901dcb00909dadc6074ea689941fc97110d3691ac6fa6c6f18f4e22b93_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_187d48c8a086ed857b65574c7f9bca2cd674356e2fe09faa6edc6e13b9deaf91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_187d48c8a086ed857b65574c7f9bca2cd674356e2fe09faa6edc6e13b9deaf91->enter($__internal_187d48c8a086ed857b65574c7f9bca2cd674356e2fe09faa6edc6e13b9deaf91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_21c737059ea99aa22be575a8dab5e5c67ea0add84eb522901e64f753c344772d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c737059ea99aa22be575a8dab5e5c67ea0add84eb522901e64f753c344772d->enter($__internal_21c737059ea99aa22be575a8dab5e5c67ea0add84eb522901e64f753c344772d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_21c737059ea99aa22be575a8dab5e5c67ea0add84eb522901e64f753c344772d->leave($__internal_21c737059ea99aa22be575a8dab5e5c67ea0add84eb522901e64f753c344772d_prof);

        
        $__internal_187d48c8a086ed857b65574c7f9bca2cd674356e2fe09faa6edc6e13b9deaf91->leave($__internal_187d48c8a086ed857b65574c7f9bca2cd674356e2fe09faa6edc6e13b9deaf91_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f267dfae3a1b7b2f0717bab6fd8413e907d5dbbbd1c29ffd9a2bede5a5ce8371 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f267dfae3a1b7b2f0717bab6fd8413e907d5dbbbd1c29ffd9a2bede5a5ce8371->enter($__internal_f267dfae3a1b7b2f0717bab6fd8413e907d5dbbbd1c29ffd9a2bede5a5ce8371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ce550e54562a964e4c9c994fdbbeabc518f975e1932f256b1aa9fbb63cee63ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce550e54562a964e4c9c994fdbbeabc518f975e1932f256b1aa9fbb63cee63ac->enter($__internal_ce550e54562a964e4c9c994fdbbeabc518f975e1932f256b1aa9fbb63cee63ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ce550e54562a964e4c9c994fdbbeabc518f975e1932f256b1aa9fbb63cee63ac->leave($__internal_ce550e54562a964e4c9c994fdbbeabc518f975e1932f256b1aa9fbb63cee63ac_prof);

        
        $__internal_f267dfae3a1b7b2f0717bab6fd8413e907d5dbbbd1c29ffd9a2bede5a5ce8371->leave($__internal_f267dfae3a1b7b2f0717bab6fd8413e907d5dbbbd1c29ffd9a2bede5a5ce8371_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7e767b5ff04b4e02e9aa09ea25920e8eb09d4415af5b2318919969af45004eb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e767b5ff04b4e02e9aa09ea25920e8eb09d4415af5b2318919969af45004eb3->enter($__internal_7e767b5ff04b4e02e9aa09ea25920e8eb09d4415af5b2318919969af45004eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f96b5252a5c2b1c23b972e2bf6d1242fcd0c51c911ae9d33e90ceceb7bff50b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f96b5252a5c2b1c23b972e2bf6d1242fcd0c51c911ae9d33e90ceceb7bff50b3->enter($__internal_f96b5252a5c2b1c23b972e2bf6d1242fcd0c51c911ae9d33e90ceceb7bff50b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f96b5252a5c2b1c23b972e2bf6d1242fcd0c51c911ae9d33e90ceceb7bff50b3->leave($__internal_f96b5252a5c2b1c23b972e2bf6d1242fcd0c51c911ae9d33e90ceceb7bff50b3_prof);

        
        $__internal_7e767b5ff04b4e02e9aa09ea25920e8eb09d4415af5b2318919969af45004eb3->leave($__internal_7e767b5ff04b4e02e9aa09ea25920e8eb09d4415af5b2318919969af45004eb3_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\site\\OpenServer\\domains\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
