<?php

/* BloggerBlogBundle:Page:index.html.twig */
class __TwigTemplate_5a6a7f94e1211c66edfe1e0e5d2c6470670b44499b958bd21b78a90c152f29a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Page:index.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4b13d5ad29cc243c4406041da01e6ba1b3e5ab84dfb3d7e25ecf1cad7877924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4b13d5ad29cc243c4406041da01e6ba1b3e5ab84dfb3d7e25ecf1cad7877924->enter($__internal_d4b13d5ad29cc243c4406041da01e6ba1b3e5ab84dfb3d7e25ecf1cad7877924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:index.html.twig"));

        $__internal_f883c8cb367386bc39de68b4cbf8b9e53edd6038d5b22368ec590545163f88a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f883c8cb367386bc39de68b4cbf8b9e53edd6038d5b22368ec590545163f88a5->enter($__internal_f883c8cb367386bc39de68b4cbf8b9e53edd6038d5b22368ec590545163f88a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4b13d5ad29cc243c4406041da01e6ba1b3e5ab84dfb3d7e25ecf1cad7877924->leave($__internal_d4b13d5ad29cc243c4406041da01e6ba1b3e5ab84dfb3d7e25ecf1cad7877924_prof);

        
        $__internal_f883c8cb367386bc39de68b4cbf8b9e53edd6038d5b22368ec590545163f88a5->leave($__internal_f883c8cb367386bc39de68b4cbf8b9e53edd6038d5b22368ec590545163f88a5_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_70a2bc14942ee9ca56ee8db5b454e8046105a7483386e252785161ac001e17df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70a2bc14942ee9ca56ee8db5b454e8046105a7483386e252785161ac001e17df->enter($__internal_70a2bc14942ee9ca56ee8db5b454e8046105a7483386e252785161ac001e17df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_43107c68f6676fbcf1d2514b36c2b7df54a9504f8c84a08ef5580cc72dee9296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43107c68f6676fbcf1d2514b36c2b7df54a9504f8c84a08ef5580cc72dee9296->enter($__internal_43107c68f6676fbcf1d2514b36c2b7df54a9504f8c84a08ef5580cc72dee9296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogs"]) ? $context["blogs"] : $this->getContext($context, "blogs")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 6
            echo "        <article class=\"blog\">
            <div class=\"date\">
                <time datetime=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blog"], "created", array()), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blog"], "created", array()), "l, F j, Y"), "html", null, true);
            echo "</time>
            </div>
            <header>
                <h2><a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_show", array("id" => $this->getAttribute($context["blog"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "title", array()), "html", null, true);
            echo "</a></h2>
            </header>

            <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_join_filter(array(0 => "images/", 1 => $this->getAttribute($context["blog"], "image", array())))), "html", null, true);
            echo "\"/>
            <div class=\"snippet\">
                <p>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "blog", array(0 => 500), "method"), "html", null, true);
            echo "</p>
                <p class=\"continue\"><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_show", array("id" => $this->getAttribute($context["blog"], "id", array()))), "html", null, true);
            echo "\">Continue
                        reading...</a></p>
            </div>

            <footer class=\"meta\">
                <p>Comments: -</p>
                <p>Posted by <span class=\"highlight\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "author", array()), "html", null, true);
            echo "</span> at ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blog"], "created", array()), "h:iA"), "html", null, true);
            echo "</p>
                <p>Tags: <span class=\"highlight\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "tags", array()), "html", null, true);
            echo "</span></p>
            </footer>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 28
            echo "        <p>There are no blog entries for symblog</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_43107c68f6676fbcf1d2514b36c2b7df54a9504f8c84a08ef5580cc72dee9296->leave($__internal_43107c68f6676fbcf1d2514b36c2b7df54a9504f8c84a08ef5580cc72dee9296_prof);

        
        $__internal_70a2bc14942ee9ca56ee8db5b454e8046105a7483386e252785161ac001e17df->leave($__internal_70a2bc14942ee9ca56ee8db5b454e8046105a7483386e252785161ac001e17df_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 28,  99 => 24,  93 => 23,  84 => 17,  80 => 16,  75 => 14,  67 => 11,  59 => 8,  55 => 6,  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Page/index.html.twig #}
{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block body %}
    {% for blog in blogs %}
        <article class=\"blog\">
            <div class=\"date\">
                <time datetime=\"{{ blog.created|date('c') }}\">{{ blog.created|date('l, F j, Y') }}</time>
            </div>
            <header>
                <h2><a href=\"{{ path('blogger_blog_show', { 'id': blog.id }) }}\">{{ blog.title }}</a></h2>
            </header>

            <img src=\"{{ asset(['images/', blog.image]|join) }}\"/>
            <div class=\"snippet\">
                <p>{{ blog.blog(500) }}</p>
                <p class=\"continue\"><a href=\"{{ path('blogger_blog_show', { 'id': blog.id }) }}\">Continue
                        reading...</a></p>
            </div>

            <footer class=\"meta\">
                <p>Comments: -</p>
                <p>Posted by <span class=\"highlight\">{{ blog.author }}</span> at {{ blog.created|date('h:iA') }}</p>
                <p>Tags: <span class=\"highlight\">{{ blog.tags }}</span></p>
            </footer>
        </article>
    {% else %}
        <p>There are no blog entries for symblog</p>
    {% endfor %}
{% endblock %}
", "BloggerBlogBundle:Page:index.html.twig", "C:\\site\\OpenServer\\domains\\symfony-blog\\src\\Blogger\\BlogBundle/Resources/views/Page/index.html.twig");
    }
}
