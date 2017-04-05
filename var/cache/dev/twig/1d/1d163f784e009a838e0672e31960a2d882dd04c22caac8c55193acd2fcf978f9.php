<?php

/* BloggerBlogBundle::layout.html.twig */
class __TwigTemplate_754b9d373a4910a28d475df2ec7994e1d11c0deec1c8d1e593f77b7b239ce443 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "BloggerBlogBundle::layout.html.twig", 2);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06a90303493666ef5b5190d6705c85497d85d5ac78550f2e245fa55bb9518d95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06a90303493666ef5b5190d6705c85497d85d5ac78550f2e245fa55bb9518d95->enter($__internal_06a90303493666ef5b5190d6705c85497d85d5ac78550f2e245fa55bb9518d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layout.html.twig"));

        $__internal_ea2d4ae13d8a3c4564d860387ae88fb2fa1ff465fccf6dcc1b9daffc937dca1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea2d4ae13d8a3c4564d860387ae88fb2fa1ff465fccf6dcc1b9daffc937dca1a->enter($__internal_ea2d4ae13d8a3c4564d860387ae88fb2fa1ff465fccf6dcc1b9daffc937dca1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06a90303493666ef5b5190d6705c85497d85d5ac78550f2e245fa55bb9518d95->leave($__internal_06a90303493666ef5b5190d6705c85497d85d5ac78550f2e245fa55bb9518d95_prof);

        
        $__internal_ea2d4ae13d8a3c4564d860387ae88fb2fa1ff465fccf6dcc1b9daffc937dca1a->leave($__internal_ea2d4ae13d8a3c4564d860387ae88fb2fa1ff465fccf6dcc1b9daffc937dca1a_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3782b341ac145143d45e741623c7829da9ce402ea09159c0ac620b1204d6ae9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3782b341ac145143d45e741623c7829da9ce402ea09159c0ac620b1204d6ae9d->enter($__internal_3782b341ac145143d45e741623c7829da9ce402ea09159c0ac620b1204d6ae9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e5a6cfb1c676a7692fbf85cdbdb2537b3768d28da8894ada1bd6eedb32823c60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5a6cfb1c676a7692fbf85cdbdb2537b3768d28da8894ada1bd6eedb32823c60->enter($__internal_e5a6cfb1c676a7692fbf85cdbdb2537b3768d28da8894ada1bd6eedb32823c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bloggerblog/css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_e5a6cfb1c676a7692fbf85cdbdb2537b3768d28da8894ada1bd6eedb32823c60->leave($__internal_e5a6cfb1c676a7692fbf85cdbdb2537b3768d28da8894ada1bd6eedb32823c60_prof);

        
        $__internal_3782b341ac145143d45e741623c7829da9ce402ea09159c0ac620b1204d6ae9d->leave($__internal_3782b341ac145143d45e741623c7829da9ce402ea09159c0ac620b1204d6ae9d_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_a31c0dc96f8775f328a819c9ea42194841e1f074a05b490e95cd68c4b5cb2070 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a31c0dc96f8775f328a819c9ea42194841e1f074a05b490e95cd68c4b5cb2070->enter($__internal_a31c0dc96f8775f328a819c9ea42194841e1f074a05b490e95cd68c4b5cb2070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_bb7212f3f1162d91478c6db90d83f02417bc06ce68220854831378bca9334d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7212f3f1162d91478c6db90d83f02417bc06ce68220854831378bca9334d2c->enter($__internal_bb7212f3f1162d91478c6db90d83f02417bc06ce68220854831378bca9334d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 10
        echo "    Sidebar content
";
        
        $__internal_bb7212f3f1162d91478c6db90d83f02417bc06ce68220854831378bca9334d2c->leave($__internal_bb7212f3f1162d91478c6db90d83f02417bc06ce68220854831378bca9334d2c_prof);

        
        $__internal_a31c0dc96f8775f328a819c9ea42194841e1f074a05b490e95cd68c4b5cb2070->leave($__internal_a31c0dc96f8775f328a819c9ea42194841e1f074a05b490e95cd68c4b5cb2070_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 10,  67 => 9,  55 => 6,  50 => 5,  41 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/layout.html.twig #}
{% extends '::base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('bundles/bloggerblog/css/blog.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
{% endblock %}

{% block sidebar %}
    Sidebar content
{% endblock %}
", "BloggerBlogBundle::layout.html.twig", "C:\\OpenServer\\domains\\symfony-blog\\src\\Blogger\\BlogBundle/Resources/views/layout.html.twig");
    }
}
