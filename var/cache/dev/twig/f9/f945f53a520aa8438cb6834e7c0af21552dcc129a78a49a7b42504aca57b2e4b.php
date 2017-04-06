<?php

/* BloggerBlogBundle::layout.html.twig */
class __TwigTemplate_8034663b3fc436b5ae80c99a411d5fff074ea9d0d8c6cce8af730e6ac6e4369d extends Twig_Template
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
        $__internal_c91664788951f4958d589b0a0b0312086792437e43fb9037dea742967c2336e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c91664788951f4958d589b0a0b0312086792437e43fb9037dea742967c2336e2->enter($__internal_c91664788951f4958d589b0a0b0312086792437e43fb9037dea742967c2336e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layout.html.twig"));

        $__internal_bee997838327b1ef8658a3285a9c10becb65d40bf8981164c47a210d6b9a4227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bee997838327b1ef8658a3285a9c10becb65d40bf8981164c47a210d6b9a4227->enter($__internal_bee997838327b1ef8658a3285a9c10becb65d40bf8981164c47a210d6b9a4227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c91664788951f4958d589b0a0b0312086792437e43fb9037dea742967c2336e2->leave($__internal_c91664788951f4958d589b0a0b0312086792437e43fb9037dea742967c2336e2_prof);

        
        $__internal_bee997838327b1ef8658a3285a9c10becb65d40bf8981164c47a210d6b9a4227->leave($__internal_bee997838327b1ef8658a3285a9c10becb65d40bf8981164c47a210d6b9a4227_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5d080ae9921d9b29f4b9f9ab54db568a3ff4e23a8e488b7d8fa841bee92178b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d080ae9921d9b29f4b9f9ab54db568a3ff4e23a8e488b7d8fa841bee92178b5->enter($__internal_5d080ae9921d9b29f4b9f9ab54db568a3ff4e23a8e488b7d8fa841bee92178b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_06ecaa6f14987d766c730f6cb16394b44bbd7ff6e91f0f30fa04e9ee99e7ce32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06ecaa6f14987d766c730f6cb16394b44bbd7ff6e91f0f30fa04e9ee99e7ce32->enter($__internal_06ecaa6f14987d766c730f6cb16394b44bbd7ff6e91f0f30fa04e9ee99e7ce32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_06ecaa6f14987d766c730f6cb16394b44bbd7ff6e91f0f30fa04e9ee99e7ce32->leave($__internal_06ecaa6f14987d766c730f6cb16394b44bbd7ff6e91f0f30fa04e9ee99e7ce32_prof);

        
        $__internal_5d080ae9921d9b29f4b9f9ab54db568a3ff4e23a8e488b7d8fa841bee92178b5->leave($__internal_5d080ae9921d9b29f4b9f9ab54db568a3ff4e23a8e488b7d8fa841bee92178b5_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_f7fad8d83259d662bb202c691b6f7109221f9096bba9a90e4ba66230e7d60922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7fad8d83259d662bb202c691b6f7109221f9096bba9a90e4ba66230e7d60922->enter($__internal_f7fad8d83259d662bb202c691b6f7109221f9096bba9a90e4ba66230e7d60922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_4c46319f963331ad78e9c73f0d7e60f08b402ceeeba213a503f8694b571fe787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c46319f963331ad78e9c73f0d7e60f08b402ceeeba213a503f8694b571fe787->enter($__internal_4c46319f963331ad78e9c73f0d7e60f08b402ceeeba213a503f8694b571fe787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 10
        echo "    Sidebar content
";
        
        $__internal_4c46319f963331ad78e9c73f0d7e60f08b402ceeeba213a503f8694b571fe787->leave($__internal_4c46319f963331ad78e9c73f0d7e60f08b402ceeeba213a503f8694b571fe787_prof);

        
        $__internal_f7fad8d83259d662bb202c691b6f7109221f9096bba9a90e4ba66230e7d60922->leave($__internal_f7fad8d83259d662bb202c691b6f7109221f9096bba9a90e4ba66230e7d60922_prof);

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
    <link href=\"{{ asset('css/blog.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
{% endblock %}

{% block sidebar %}
    Sidebar content
{% endblock %}
", "BloggerBlogBundle::layout.html.twig", "C:\\site\\OpenServer\\domains\\symfony-blog\\src\\Blogger\\BlogBundle/Resources/views/layout.html.twig");
    }
}
