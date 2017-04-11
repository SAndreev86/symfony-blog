<?php

/* BloggerBlogBundle:Page:contact.html.twig */
class __TwigTemplate_36bbc432a4934cf20a601c95f0c249d52c4c11b8cc51dec42c8c394ef7dc62c2 extends Twig_Template
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
        $__internal_a3e27bd38f63259fa91631e96fdb8ba38dd38a6e9225aa79821484b293a7b2c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3e27bd38f63259fa91631e96fdb8ba38dd38a6e9225aa79821484b293a7b2c9->enter($__internal_a3e27bd38f63259fa91631e96fdb8ba38dd38a6e9225aa79821484b293a7b2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:contact.html.twig"));

        $__internal_48ab95c69c17566bd5c55146967bf0f970a6d6cd93b1dc4890b169fa398feed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48ab95c69c17566bd5c55146967bf0f970a6d6cd93b1dc4890b169fa398feed7->enter($__internal_48ab95c69c17566bd5c55146967bf0f970a6d6cd93b1dc4890b169fa398feed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3e27bd38f63259fa91631e96fdb8ba38dd38a6e9225aa79821484b293a7b2c9->leave($__internal_a3e27bd38f63259fa91631e96fdb8ba38dd38a6e9225aa79821484b293a7b2c9_prof);

        
        $__internal_48ab95c69c17566bd5c55146967bf0f970a6d6cd93b1dc4890b169fa398feed7->leave($__internal_48ab95c69c17566bd5c55146967bf0f970a6d6cd93b1dc4890b169fa398feed7_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_56ff30208d9e5ed6c4cfe0a2f2ad11f6a8f18da1fef7a0808b12731efec21309 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56ff30208d9e5ed6c4cfe0a2f2ad11f6a8f18da1fef7a0808b12731efec21309->enter($__internal_56ff30208d9e5ed6c4cfe0a2f2ad11f6a8f18da1fef7a0808b12731efec21309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b25ab8f2e4a98087425f1dc4909c4325c9a8404196b61bdd3e9459b1794a736b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b25ab8f2e4a98087425f1dc4909c4325c9a8404196b61bdd3e9459b1794a736b->enter($__internal_b25ab8f2e4a98087425f1dc4909c4325c9a8404196b61bdd3e9459b1794a736b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_b25ab8f2e4a98087425f1dc4909c4325c9a8404196b61bdd3e9459b1794a736b->leave($__internal_b25ab8f2e4a98087425f1dc4909c4325c9a8404196b61bdd3e9459b1794a736b_prof);

        
        $__internal_56ff30208d9e5ed6c4cfe0a2f2ad11f6a8f18da1fef7a0808b12731efec21309->leave($__internal_56ff30208d9e5ed6c4cfe0a2f2ad11f6a8f18da1fef7a0808b12731efec21309_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_47ed710772c52080dda33fdcb1a46a405432eeaf129dd946e63f676ae9fdafa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47ed710772c52080dda33fdcb1a46a405432eeaf129dd946e63f676ae9fdafa9->enter($__internal_47ed710772c52080dda33fdcb1a46a405432eeaf129dd946e63f676ae9fdafa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_35e8f3f1165df837a5cb66621a19118855fced4be64000730244b2f1203efe18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35e8f3f1165df837a5cb66621a19118855fced4be64000730244b2f1203efe18->enter($__internal_35e8f3f1165df837a5cb66621a19118855fced4be64000730244b2f1203efe18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>Contact symblog</h1>
    </header>

    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "blogger-notice"), "method"));
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_contact"), "method" => "POST", "attr" => array("class" => "blogger")));
        echo "
    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", array()), 'row');
        echo "
    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'row');
        echo "

    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    <input type=\"submit\" value=\"Submit\" />

";
        
        $__internal_35e8f3f1165df837a5cb66621a19118855fced4be64000730244b2f1203efe18->leave($__internal_35e8f3f1165df837a5cb66621a19118855fced4be64000730244b2f1203efe18_prof);

        
        $__internal_47ed710772c52080dda33fdcb1a46a405432eeaf129dd946e63f676ae9fdafa9->leave($__internal_47ed710772c52080dda33fdcb1a46a405432eeaf129dd946e63f676ae9fdafa9_prof);

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

{% endblock %}", "BloggerBlogBundle:Page:contact.html.twig", "C:\\site\\OpenServer\\domains\\symfony-blog\\src\\Blogger\\BlogBundle/Resources/views/Page/contact.html.twig");
    }
}
