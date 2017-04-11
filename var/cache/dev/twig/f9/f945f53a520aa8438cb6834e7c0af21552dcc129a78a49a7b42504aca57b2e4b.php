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
        $__internal_3033816d555b9bb89942766ba31ebf06085de194f8cc6791ae109619c93e733a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3033816d555b9bb89942766ba31ebf06085de194f8cc6791ae109619c93e733a->enter($__internal_3033816d555b9bb89942766ba31ebf06085de194f8cc6791ae109619c93e733a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layout.html.twig"));

        $__internal_18dcfe8dbff6215ac7158725bc9d91f660dea04efbdc525be79171643a83eb74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18dcfe8dbff6215ac7158725bc9d91f660dea04efbdc525be79171643a83eb74->enter($__internal_18dcfe8dbff6215ac7158725bc9d91f660dea04efbdc525be79171643a83eb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3033816d555b9bb89942766ba31ebf06085de194f8cc6791ae109619c93e733a->leave($__internal_3033816d555b9bb89942766ba31ebf06085de194f8cc6791ae109619c93e733a_prof);

        
        $__internal_18dcfe8dbff6215ac7158725bc9d91f660dea04efbdc525be79171643a83eb74->leave($__internal_18dcfe8dbff6215ac7158725bc9d91f660dea04efbdc525be79171643a83eb74_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_be9a7f4d624fda660816c75a3580ecd9f8c904dc622901ea7c6b3c5ad1936aa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be9a7f4d624fda660816c75a3580ecd9f8c904dc622901ea7c6b3c5ad1936aa4->enter($__internal_be9a7f4d624fda660816c75a3580ecd9f8c904dc622901ea7c6b3c5ad1936aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_15726c6e48463837ad9b71e2dc71a1199d1028a39033309071d0d4718d29d842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15726c6e48463837ad9b71e2dc71a1199d1028a39033309071d0d4718d29d842->enter($__internal_15726c6e48463837ad9b71e2dc71a1199d1028a39033309071d0d4718d29d842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_15726c6e48463837ad9b71e2dc71a1199d1028a39033309071d0d4718d29d842->leave($__internal_15726c6e48463837ad9b71e2dc71a1199d1028a39033309071d0d4718d29d842_prof);

        
        $__internal_be9a7f4d624fda660816c75a3580ecd9f8c904dc622901ea7c6b3c5ad1936aa4->leave($__internal_be9a7f4d624fda660816c75a3580ecd9f8c904dc622901ea7c6b3c5ad1936aa4_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_36262a32b069510bd8b639cc704b5741fc04de9c74aa96ae95a2853d6238cc9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36262a32b069510bd8b639cc704b5741fc04de9c74aa96ae95a2853d6238cc9d->enter($__internal_36262a32b069510bd8b639cc704b5741fc04de9c74aa96ae95a2853d6238cc9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_8f3b27d3d1fdbff95a76d72cb53598a1ac79b858441318d7699b261c7a3b36eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f3b27d3d1fdbff95a76d72cb53598a1ac79b858441318d7699b261c7a3b36eb->enter($__internal_8f3b27d3d1fdbff95a76d72cb53598a1ac79b858441318d7699b261c7a3b36eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 10
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("BloggerBlogBundle:Page:sidebar"));
        echo "
";
        
        $__internal_8f3b27d3d1fdbff95a76d72cb53598a1ac79b858441318d7699b261c7a3b36eb->leave($__internal_8f3b27d3d1fdbff95a76d72cb53598a1ac79b858441318d7699b261c7a3b36eb_prof);

        
        $__internal_36262a32b069510bd8b639cc704b5741fc04de9c74aa96ae95a2853d6238cc9d->leave($__internal_36262a32b069510bd8b639cc704b5741fc04de9c74aa96ae95a2853d6238cc9d_prof);

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
    {{ render(controller('BloggerBlogBundle:Page:sidebar' ))}}
{% endblock %}
", "BloggerBlogBundle::layout.html.twig", "C:\\site\\OpenServer\\domains\\symfony-blog\\src\\Blogger\\BlogBundle/Resources/views/layout.html.twig");
    }
}
