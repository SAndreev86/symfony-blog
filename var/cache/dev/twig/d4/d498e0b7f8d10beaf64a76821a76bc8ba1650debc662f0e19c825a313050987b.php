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
        $__internal_ad5e3b96d1deb9580b6f88fe3b9c9f15e74e362d7531b056bd2a2092def0783b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad5e3b96d1deb9580b6f88fe3b9c9f15e74e362d7531b056bd2a2092def0783b->enter($__internal_ad5e3b96d1deb9580b6f88fe3b9c9f15e74e362d7531b056bd2a2092def0783b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_fc03e89dce8293217bfb6754a73ba7dc3a77b9e12fff85f9ec4792f3e50bfad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc03e89dce8293217bfb6754a73ba7dc3a77b9e12fff85f9ec4792f3e50bfad4->enter($__internal_fc03e89dce8293217bfb6754a73ba7dc3a77b9e12fff85f9ec4792f3e50bfad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad5e3b96d1deb9580b6f88fe3b9c9f15e74e362d7531b056bd2a2092def0783b->leave($__internal_ad5e3b96d1deb9580b6f88fe3b9c9f15e74e362d7531b056bd2a2092def0783b_prof);

        
        $__internal_fc03e89dce8293217bfb6754a73ba7dc3a77b9e12fff85f9ec4792f3e50bfad4->leave($__internal_fc03e89dce8293217bfb6754a73ba7dc3a77b9e12fff85f9ec4792f3e50bfad4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_af486931ccd771019e12e0d7b92f4755b85fe76e8d078e0e98326012dcf1082f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af486931ccd771019e12e0d7b92f4755b85fe76e8d078e0e98326012dcf1082f->enter($__internal_af486931ccd771019e12e0d7b92f4755b85fe76e8d078e0e98326012dcf1082f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_df5f7576ecffacb0f22d06b4f5d9883d35ff1da5ddff3a354a4ab4a5f2efeb74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df5f7576ecffacb0f22d06b4f5d9883d35ff1da5ddff3a354a4ab4a5f2efeb74->enter($__internal_df5f7576ecffacb0f22d06b4f5d9883d35ff1da5ddff3a354a4ab4a5f2efeb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_df5f7576ecffacb0f22d06b4f5d9883d35ff1da5ddff3a354a4ab4a5f2efeb74->leave($__internal_df5f7576ecffacb0f22d06b4f5d9883d35ff1da5ddff3a354a4ab4a5f2efeb74_prof);

        
        $__internal_af486931ccd771019e12e0d7b92f4755b85fe76e8d078e0e98326012dcf1082f->leave($__internal_af486931ccd771019e12e0d7b92f4755b85fe76e8d078e0e98326012dcf1082f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_485e30a53a15255ffad2d0da0af5a2ce42dedbc3c01b89019f76164d3e0b7c95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_485e30a53a15255ffad2d0da0af5a2ce42dedbc3c01b89019f76164d3e0b7c95->enter($__internal_485e30a53a15255ffad2d0da0af5a2ce42dedbc3c01b89019f76164d3e0b7c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_091f456cf0ea17daddac57d36b66604f24a082fbe14cfd4d75f18349e98ae223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_091f456cf0ea17daddac57d36b66604f24a082fbe14cfd4d75f18349e98ae223->enter($__internal_091f456cf0ea17daddac57d36b66604f24a082fbe14cfd4d75f18349e98ae223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_091f456cf0ea17daddac57d36b66604f24a082fbe14cfd4d75f18349e98ae223->leave($__internal_091f456cf0ea17daddac57d36b66604f24a082fbe14cfd4d75f18349e98ae223_prof);

        
        $__internal_485e30a53a15255ffad2d0da0af5a2ce42dedbc3c01b89019f76164d3e0b7c95->leave($__internal_485e30a53a15255ffad2d0da0af5a2ce42dedbc3c01b89019f76164d3e0b7c95_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d287f664ddb41e41c60c44140787d169ebe83caf64a9c8a9c99bcb6534469a46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d287f664ddb41e41c60c44140787d169ebe83caf64a9c8a9c99bcb6534469a46->enter($__internal_d287f664ddb41e41c60c44140787d169ebe83caf64a9c8a9c99bcb6534469a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2f72bbb5881f8949f5511fb5211e65435181ec1f811e86d96099f69592384bcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f72bbb5881f8949f5511fb5211e65435181ec1f811e86d96099f69592384bcc->enter($__internal_2f72bbb5881f8949f5511fb5211e65435181ec1f811e86d96099f69592384bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2f72bbb5881f8949f5511fb5211e65435181ec1f811e86d96099f69592384bcc->leave($__internal_2f72bbb5881f8949f5511fb5211e65435181ec1f811e86d96099f69592384bcc_prof);

        
        $__internal_d287f664ddb41e41c60c44140787d169ebe83caf64a9c8a9c99bcb6534469a46->leave($__internal_d287f664ddb41e41c60c44140787d169ebe83caf64a9c8a9c99bcb6534469a46_prof);

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
