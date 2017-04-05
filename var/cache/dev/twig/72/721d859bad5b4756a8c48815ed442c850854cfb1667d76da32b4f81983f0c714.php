<?php

/* BloggerBlogBundle:Page:contact.html.twig */
class __TwigTemplate_54ff74c6a5e9ac5d3b358b216adcbf4310cc8ff8cc021a21be1ad6181bc5e0f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Page:contact.html.twig", 2);
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
        $__internal_51630a6d239c91f7920e8f633714f6406b815ab03929b01932ad7ce846316698 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51630a6d239c91f7920e8f633714f6406b815ab03929b01932ad7ce846316698->enter($__internal_51630a6d239c91f7920e8f633714f6406b815ab03929b01932ad7ce846316698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:contact.html.twig"));

        $__internal_37af9729684b438223dec3683a643da0fb3641e784bba82a43119a44ad07ee0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37af9729684b438223dec3683a643da0fb3641e784bba82a43119a44ad07ee0a->enter($__internal_37af9729684b438223dec3683a643da0fb3641e784bba82a43119a44ad07ee0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51630a6d239c91f7920e8f633714f6406b815ab03929b01932ad7ce846316698->leave($__internal_51630a6d239c91f7920e8f633714f6406b815ab03929b01932ad7ce846316698_prof);

        
        $__internal_37af9729684b438223dec3683a643da0fb3641e784bba82a43119a44ad07ee0a->leave($__internal_37af9729684b438223dec3683a643da0fb3641e784bba82a43119a44ad07ee0a_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_03575921fd9149c9e3513451793b35277569780d2ac19b37568ea3c945cf3a1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03575921fd9149c9e3513451793b35277569780d2ac19b37568ea3c945cf3a1c->enter($__internal_03575921fd9149c9e3513451793b35277569780d2ac19b37568ea3c945cf3a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_18b3a42f779de54cdebff513514c8f59777cae5590109066d4d61c9c637a0bb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18b3a42f779de54cdebff513514c8f59777cae5590109066d4d61c9c637a0bb8->enter($__internal_18b3a42f779de54cdebff513514c8f59777cae5590109066d4d61c9c637a0bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_18b3a42f779de54cdebff513514c8f59777cae5590109066d4d61c9c637a0bb8->leave($__internal_18b3a42f779de54cdebff513514c8f59777cae5590109066d4d61c9c637a0bb8_prof);

        
        $__internal_03575921fd9149c9e3513451793b35277569780d2ac19b37568ea3c945cf3a1c->leave($__internal_03575921fd9149c9e3513451793b35277569780d2ac19b37568ea3c945cf3a1c_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_034332a16460aeba562fc01cbf260f20b3b7f9b1eaaa25c5fe94d00f09b47c2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_034332a16460aeba562fc01cbf260f20b3b7f9b1eaaa25c5fe94d00f09b47c2c->enter($__internal_034332a16460aeba562fc01cbf260f20b3b7f9b1eaaa25c5fe94d00f09b47c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_43c8c805c0f6cdae031ecbd792f855d44be638f13b07534b7bd7e2db53d9ad16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43c8c805c0f6cdae031ecbd792f855d44be638f13b07534b7bd7e2db53d9ad16->enter($__internal_43c8c805c0f6cdae031ecbd792f855d44be638f13b07534b7bd7e2db53d9ad16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>Contact symblog</h1>
    </header>

    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "blogger-notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"blogger-notice\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    <p>Want to contact symblog?</p>

    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_contact"), "method" => "POST", "attr" => array("class" => "blogger")));
        echo "
    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'row');
        echo "
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row');
        echo "
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "subject", array()), 'row');
        echo "
    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "body", array()), 'row');
        echo "

    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "

    <input type=\"submit\" value=\"Submit\" />

";
        
        $__internal_43c8c805c0f6cdae031ecbd792f855d44be638f13b07534b7bd7e2db53d9ad16->leave($__internal_43c8c805c0f6cdae031ecbd792f855d44be638f13b07534b7bd7e2db53d9ad16_prof);

        
        $__internal_034332a16460aeba562fc01cbf260f20b3b7f9b1eaaa25c5fe94d00f09b47c2c->leave($__internal_034332a16460aeba562fc01cbf260f20b3b7f9b1eaaa25c5fe94d00f09b47c2c_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 27,  116 => 25,  112 => 24,  108 => 23,  104 => 22,  99 => 20,  95 => 19,  90 => 16,  81 => 13,  78 => 12,  74 => 11,  68 => 7,  59 => 6,  41 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Page/contact.html.twig #}
{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block title %}Contact{% endblock%}

{% block body %}
    <header>
        <h1>Contact symblog</h1>
    </header>

    {% for flashMessage in app.session.flashbag.get('blogger-notice') %}
        <div class=\"blogger-notice\">
            {{ flashMessage }}
        </div>
    {% endfor %}

    <p>Want to contact symblog?</p>

    {{ form_start(form, { 'action': path('blogger_blog_contact'), 'method': 'POST', 'attr': {'class': 'blogger'} }) }}
    {{ form_errors(form) }}

    {{ form_row(form.name) }}
    {{ form_row(form.email) }}
    {{ form_row(form.subject) }}
    {{ form_row(form.body) }}

    {{ form_rest(form) }}

    <input type=\"submit\" value=\"Submit\" />

{% endblock %}", "BloggerBlogBundle:Page:contact.html.twig", "C:\\OpenServer\\domains\\symfony-blog\\src\\Blogger\\BlogBundle/Resources/views/Page/contact.html.twig");
    }
}
