<?php

/* BloggerBlogBundle:Blog:show.html.twig */
class __TwigTemplate_740e14ccbdef8c164522cf443ebe079026ac9eeba5a3a0a70e16ea05c61e1b45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Blog:show.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59f63f437ee2773c15ff5f2cad7daed9ecddcec50d088a53448e646704cc9784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59f63f437ee2773c15ff5f2cad7daed9ecddcec50d088a53448e646704cc9784->enter($__internal_59f63f437ee2773c15ff5f2cad7daed9ecddcec50d088a53448e646704cc9784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Blog:show.html.twig"));

        $__internal_20f49071d53c84d71d1c64742ff273d054f59fe324d5f8034e18f5f8c55ca0c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f49071d53c84d71d1c64742ff273d054f59fe324d5f8034e18f5f8c55ca0c7->enter($__internal_20f49071d53c84d71d1c64742ff273d054f59fe324d5f8034e18f5f8c55ca0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Blog:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59f63f437ee2773c15ff5f2cad7daed9ecddcec50d088a53448e646704cc9784->leave($__internal_59f63f437ee2773c15ff5f2cad7daed9ecddcec50d088a53448e646704cc9784_prof);

        
        $__internal_20f49071d53c84d71d1c64742ff273d054f59fe324d5f8034e18f5f8c55ca0c7->leave($__internal_20f49071d53c84d71d1c64742ff273d054f59fe324d5f8034e18f5f8c55ca0c7_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_4952498c76d735dfa43c380244d2f6d1ac45a5ec4e66b6bfd00f02e08b420998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4952498c76d735dfa43c380244d2f6d1ac45a5ec4e66b6bfd00f02e08b420998->enter($__internal_4952498c76d735dfa43c380244d2f6d1ac45a5ec4e66b6bfd00f02e08b420998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_324883a42a037d7c2dae3ebc85bd5ad360ec04b8c6214483bb1795f22199b1f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_324883a42a037d7c2dae3ebc85bd5ad360ec04b8c6214483bb1795f22199b1f4->enter($__internal_324883a42a037d7c2dae3ebc85bd5ad360ec04b8c6214483bb1795f22199b1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        
        $__internal_324883a42a037d7c2dae3ebc85bd5ad360ec04b8c6214483bb1795f22199b1f4->leave($__internal_324883a42a037d7c2dae3ebc85bd5ad360ec04b8c6214483bb1795f22199b1f4_prof);

        
        $__internal_4952498c76d735dfa43c380244d2f6d1ac45a5ec4e66b6bfd00f02e08b420998->leave($__internal_4952498c76d735dfa43c380244d2f6d1ac45a5ec4e66b6bfd00f02e08b420998_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_56ff6deaa19988d534105b4f1ec2db5d6a954c7af56ec1f42c1456cc58b5d56c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56ff6deaa19988d534105b4f1ec2db5d6a954c7af56ec1f42c1456cc58b5d56c->enter($__internal_56ff6deaa19988d534105b4f1ec2db5d6a954c7af56ec1f42c1456cc58b5d56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b1a085133c606f899418398d8604758bdbeee93324b7c2eeca20d096f12db6c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1a085133c606f899418398d8604758bdbeee93324b7c2eeca20d096f12db6c2->enter($__internal_b1a085133c606f899418398d8604758bdbeee93324b7c2eeca20d096f12db6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <article class=\"blog\">
        <header>
            <div class=\"date\"><time datetime=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created", array()), "c"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created", array()), "l, F j, Y"), "html", null, true);
        echo "</time></div>
            <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        echo "</h2>
        </header>
        <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_join_filter(array(0 => "images/", 1 => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "image", array())))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        echo " image not found\" class=\"large\" />
        <div>
            <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "blog", array()), "html", null, true);
        echo "</p>
        </div>
    </article>
    <section class=\"comments\" id=\"comments\">
        <section class=\"previous-comments\">
            <h3>Comments</h3>
            ";
        // line 20
        $this->loadTemplate("BloggerBlogBundle:Comment:index.html.twig", "BloggerBlogBundle:Blog:show.html.twig", 20)->display(array_merge($context, array("comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))));
        // line 21
        echo "        </section>
        <h3>Add Comment</h3>
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("BloggerBlogBundle:Comment:new", array("blog_id" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "id", array()))));
        echo "
    </section>
";
        
        $__internal_b1a085133c606f899418398d8604758bdbeee93324b7c2eeca20d096f12db6c2->leave($__internal_b1a085133c606f899418398d8604758bdbeee93324b7c2eeca20d096f12db6c2_prof);

        
        $__internal_56ff6deaa19988d534105b4f1ec2db5d6a954c7af56ec1f42c1456cc58b5d56c->leave($__internal_56ff6deaa19988d534105b4f1ec2db5d6a954c7af56ec1f42c1456cc58b5d56c_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Blog:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 23,  101 => 21,  99 => 20,  90 => 14,  83 => 12,  78 => 10,  72 => 9,  68 => 7,  59 => 6,  41 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resouces/views/Blog/show.html.twig #}
{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block title %}{{ blog.title }}{% endblock %}

{% block body %}
    <article class=\"blog\">
        <header>
            <div class=\"date\"><time datetime=\"{{ blog.created|date('c') }}\">{{ blog.created|date('l, F j, Y') }}</time></div>
            <h2>{{ blog.title }}</h2>
        </header>
        <img src=\"{{ asset(['images/', blog.image]|join) }}\" alt=\"{{ blog.title }} image not found\" class=\"large\" />
        <div>
            <p>{{ blog.blog }}</p>
        </div>
    </article>
    <section class=\"comments\" id=\"comments\">
        <section class=\"previous-comments\">
            <h3>Comments</h3>
            {% include 'BloggerBlogBundle:Comment:index.html.twig' with { 'comments': comments } %}
        </section>
        <h3>Add Comment</h3>
        {{ render(controller('BloggerBlogBundle:Comment:new',{ 'blog_id': blog.id })) }}
    </section>
{% endblock %}", "BloggerBlogBundle:Blog:show.html.twig", "C:\\site\\OpenServer\\domains\\symfony-blog\\src\\Blogger\\BlogBundle/Resources/views/Blog/show.html.twig");
    }
}
