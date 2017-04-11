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
        $__internal_31771c7501bd9d08652c9a7639db053869596d0674d2e7a25b2b78f911e3018d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31771c7501bd9d08652c9a7639db053869596d0674d2e7a25b2b78f911e3018d->enter($__internal_31771c7501bd9d08652c9a7639db053869596d0674d2e7a25b2b78f911e3018d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Blog:show.html.twig"));

        $__internal_f2632db2acfb6ace029e1ea5fce5786c306f5daab06a3b0d3d2fcfde3d2f3d3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2632db2acfb6ace029e1ea5fce5786c306f5daab06a3b0d3d2fcfde3d2f3d3d->enter($__internal_f2632db2acfb6ace029e1ea5fce5786c306f5daab06a3b0d3d2fcfde3d2f3d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Blog:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31771c7501bd9d08652c9a7639db053869596d0674d2e7a25b2b78f911e3018d->leave($__internal_31771c7501bd9d08652c9a7639db053869596d0674d2e7a25b2b78f911e3018d_prof);

        
        $__internal_f2632db2acfb6ace029e1ea5fce5786c306f5daab06a3b0d3d2fcfde3d2f3d3d->leave($__internal_f2632db2acfb6ace029e1ea5fce5786c306f5daab06a3b0d3d2fcfde3d2f3d3d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_a00ae3c0531382445a5c6a1f461420265eaa6004f23815f5cdcbe45eaab65983 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a00ae3c0531382445a5c6a1f461420265eaa6004f23815f5cdcbe45eaab65983->enter($__internal_a00ae3c0531382445a5c6a1f461420265eaa6004f23815f5cdcbe45eaab65983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e747abaf4597c5435e2df68e37abd79b0beb5f133b1bc6e662d76fbed2566dae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e747abaf4597c5435e2df68e37abd79b0beb5f133b1bc6e662d76fbed2566dae->enter($__internal_e747abaf4597c5435e2df68e37abd79b0beb5f133b1bc6e662d76fbed2566dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        
        $__internal_e747abaf4597c5435e2df68e37abd79b0beb5f133b1bc6e662d76fbed2566dae->leave($__internal_e747abaf4597c5435e2df68e37abd79b0beb5f133b1bc6e662d76fbed2566dae_prof);

        
        $__internal_a00ae3c0531382445a5c6a1f461420265eaa6004f23815f5cdcbe45eaab65983->leave($__internal_a00ae3c0531382445a5c6a1f461420265eaa6004f23815f5cdcbe45eaab65983_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_1df6cebf7f54ed8ea32fc7de096b77e4ced7baa50d798fd08170d5b9c4e84394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1df6cebf7f54ed8ea32fc7de096b77e4ced7baa50d798fd08170d5b9c4e84394->enter($__internal_1df6cebf7f54ed8ea32fc7de096b77e4ced7baa50d798fd08170d5b9c4e84394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2deb960e04c95258ca62288b6a79f739825e968845fd92d11666ce153d8ec8d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2deb960e04c95258ca62288b6a79f739825e968845fd92d11666ce153d8ec8d2->enter($__internal_2deb960e04c95258ca62288b6a79f739825e968845fd92d11666ce153d8ec8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2deb960e04c95258ca62288b6a79f739825e968845fd92d11666ce153d8ec8d2->leave($__internal_2deb960e04c95258ca62288b6a79f739825e968845fd92d11666ce153d8ec8d2_prof);

        
        $__internal_1df6cebf7f54ed8ea32fc7de096b77e4ced7baa50d798fd08170d5b9c4e84394->leave($__internal_1df6cebf7f54ed8ea32fc7de096b77e4ced7baa50d798fd08170d5b9c4e84394_prof);

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
