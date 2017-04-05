<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_57455bc33aecfac6544ea92ce7609362e910188355485e171a00baa0113b4cdc extends Twig_Template
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
        $__internal_2fec2386c9eafbaa7a002a97406a6118f076f1dd4f8b100a79c8fde704b12951 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fec2386c9eafbaa7a002a97406a6118f076f1dd4f8b100a79c8fde704b12951->enter($__internal_2fec2386c9eafbaa7a002a97406a6118f076f1dd4f8b100a79c8fde704b12951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5871a75a61acbd43e420a952d30c14baa95f4cd8f5a4f01466ab55c1b335e70a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5871a75a61acbd43e420a952d30c14baa95f4cd8f5a4f01466ab55c1b335e70a->enter($__internal_5871a75a61acbd43e420a952d30c14baa95f4cd8f5a4f01466ab55c1b335e70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fec2386c9eafbaa7a002a97406a6118f076f1dd4f8b100a79c8fde704b12951->leave($__internal_2fec2386c9eafbaa7a002a97406a6118f076f1dd4f8b100a79c8fde704b12951_prof);

        
        $__internal_5871a75a61acbd43e420a952d30c14baa95f4cd8f5a4f01466ab55c1b335e70a->leave($__internal_5871a75a61acbd43e420a952d30c14baa95f4cd8f5a4f01466ab55c1b335e70a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_978a1fafc329237574dd6a3ab5ec45fc1c5efd4b40469ad20d424562cdf8e1f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_978a1fafc329237574dd6a3ab5ec45fc1c5efd4b40469ad20d424562cdf8e1f0->enter($__internal_978a1fafc329237574dd6a3ab5ec45fc1c5efd4b40469ad20d424562cdf8e1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8e287ab5621455a731d2e80915465fe68222495024250f4d528e4ea82e8507b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e287ab5621455a731d2e80915465fe68222495024250f4d528e4ea82e8507b0->enter($__internal_8e287ab5621455a731d2e80915465fe68222495024250f4d528e4ea82e8507b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8e287ab5621455a731d2e80915465fe68222495024250f4d528e4ea82e8507b0->leave($__internal_8e287ab5621455a731d2e80915465fe68222495024250f4d528e4ea82e8507b0_prof);

        
        $__internal_978a1fafc329237574dd6a3ab5ec45fc1c5efd4b40469ad20d424562cdf8e1f0->leave($__internal_978a1fafc329237574dd6a3ab5ec45fc1c5efd4b40469ad20d424562cdf8e1f0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5cf544cb9597407587b5b8b9d7c220297cab6234dd881a5754fe7477226812fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cf544cb9597407587b5b8b9d7c220297cab6234dd881a5754fe7477226812fd->enter($__internal_5cf544cb9597407587b5b8b9d7c220297cab6234dd881a5754fe7477226812fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5264bb00de2b395435fe0fd1ad6bc746abf56d9df7473d198882dfe471be9df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5264bb00de2b395435fe0fd1ad6bc746abf56d9df7473d198882dfe471be9df7->enter($__internal_5264bb00de2b395435fe0fd1ad6bc746abf56d9df7473d198882dfe471be9df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5264bb00de2b395435fe0fd1ad6bc746abf56d9df7473d198882dfe471be9df7->leave($__internal_5264bb00de2b395435fe0fd1ad6bc746abf56d9df7473d198882dfe471be9df7_prof);

        
        $__internal_5cf544cb9597407587b5b8b9d7c220297cab6234dd881a5754fe7477226812fd->leave($__internal_5cf544cb9597407587b5b8b9d7c220297cab6234dd881a5754fe7477226812fd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_84373c67cb168862717ed29ec904d0fe9c25d38598d9ceab9736bbfcad3b6a09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84373c67cb168862717ed29ec904d0fe9c25d38598d9ceab9736bbfcad3b6a09->enter($__internal_84373c67cb168862717ed29ec904d0fe9c25d38598d9ceab9736bbfcad3b6a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e89aed155e20e9f103b4c420e0a2f50511980bf5c2a8f95bd33714993e6b527c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e89aed155e20e9f103b4c420e0a2f50511980bf5c2a8f95bd33714993e6b527c->enter($__internal_e89aed155e20e9f103b4c420e0a2f50511980bf5c2a8f95bd33714993e6b527c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e89aed155e20e9f103b4c420e0a2f50511980bf5c2a8f95bd33714993e6b527c->leave($__internal_e89aed155e20e9f103b4c420e0a2f50511980bf5c2a8f95bd33714993e6b527c_prof);

        
        $__internal_84373c67cb168862717ed29ec904d0fe9c25d38598d9ceab9736bbfcad3b6a09->leave($__internal_84373c67cb168862717ed29ec904d0fe9c25d38598d9ceab9736bbfcad3b6a09_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\OpenServer\\domains\\symfony-blog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
