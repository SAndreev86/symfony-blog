<?php

/* BloggerBlogBundle:Page:about.html.twig */
class __TwigTemplate_671dbd230e159344c0dc72cf24780cbe7f62b1e076caa13cd4b54c6df1dc2696 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Page:about.html.twig", 2);
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
        $__internal_f02afd3005b567a9aa91e5b4329078799b3b344a28c5b70a0c579d38e2f98893 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f02afd3005b567a9aa91e5b4329078799b3b344a28c5b70a0c579d38e2f98893->enter($__internal_f02afd3005b567a9aa91e5b4329078799b3b344a28c5b70a0c579d38e2f98893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:about.html.twig"));

        $__internal_502c7d5a554f7a47b89b067bbc8ed6b95627aba708a1c4752f92ae5e2e02cdfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_502c7d5a554f7a47b89b067bbc8ed6b95627aba708a1c4752f92ae5e2e02cdfa->enter($__internal_502c7d5a554f7a47b89b067bbc8ed6b95627aba708a1c4752f92ae5e2e02cdfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f02afd3005b567a9aa91e5b4329078799b3b344a28c5b70a0c579d38e2f98893->leave($__internal_f02afd3005b567a9aa91e5b4329078799b3b344a28c5b70a0c579d38e2f98893_prof);

        
        $__internal_502c7d5a554f7a47b89b067bbc8ed6b95627aba708a1c4752f92ae5e2e02cdfa->leave($__internal_502c7d5a554f7a47b89b067bbc8ed6b95627aba708a1c4752f92ae5e2e02cdfa_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_967bd454a4bff188bba6b5d0f1032aa161a64554c202a63791327daa87908a3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_967bd454a4bff188bba6b5d0f1032aa161a64554c202a63791327daa87908a3c->enter($__internal_967bd454a4bff188bba6b5d0f1032aa161a64554c202a63791327daa87908a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ec057cc473ecdd65a0ac3bba1108f7b624c1a6917e6eb9e4fdcc8de286b63ffd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec057cc473ecdd65a0ac3bba1108f7b624c1a6917e6eb9e4fdcc8de286b63ffd->enter($__internal_ec057cc473ecdd65a0ac3bba1108f7b624c1a6917e6eb9e4fdcc8de286b63ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "About";
        
        $__internal_ec057cc473ecdd65a0ac3bba1108f7b624c1a6917e6eb9e4fdcc8de286b63ffd->leave($__internal_ec057cc473ecdd65a0ac3bba1108f7b624c1a6917e6eb9e4fdcc8de286b63ffd_prof);

        
        $__internal_967bd454a4bff188bba6b5d0f1032aa161a64554c202a63791327daa87908a3c->leave($__internal_967bd454a4bff188bba6b5d0f1032aa161a64554c202a63791327daa87908a3c_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e932076af9be3fcd840fe3e31e6194fa5e1ebdc31a86649fe049ae396cee77c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e932076af9be3fcd840fe3e31e6194fa5e1ebdc31a86649fe049ae396cee77c->enter($__internal_4e932076af9be3fcd840fe3e31e6194fa5e1ebdc31a86649fe049ae396cee77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d9c547f1ee57de51d092847630a602e5de379ffd4fd86ed6a2c27e6f7901c8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d9c547f1ee57de51d092847630a602e5de379ffd4fd86ed6a2c27e6f7901c8a->enter($__internal_1d9c547f1ee57de51d092847630a602e5de379ffd4fd86ed6a2c27e6f7901c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>About symblog</h1>
    </header>
    <article>
        <p>Donec imperdiet ante sed diam consequat et dictum erat faucibus. Aliquam sit
            amet vehicula leo. Morbi urna dui, tempor ac posuere et, rutrum at dui.
            Curabitur neque quam, ultricies ut imperdiet id, ornare varius arcu. Ut congue
            urna sit amet tellus malesuada nec elementum risus molestie. Donec gravida
            tellus sed tortor adipiscing fringilla. Donec nulla mauris, mollis egestas
            condimentum laoreet, lacinia vel lorem. Morbi vitae justo sit amet felis
            vehicula commodo a placerat lacus. Mauris at est elit, nec vehicula urna. Duis a
            lacus nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
            posuere cubilia Curae.</p>
    </article>
";
        
        $__internal_1d9c547f1ee57de51d092847630a602e5de379ffd4fd86ed6a2c27e6f7901c8a->leave($__internal_1d9c547f1ee57de51d092847630a602e5de379ffd4fd86ed6a2c27e6f7901c8a_prof);

        
        $__internal_4e932076af9be3fcd840fe3e31e6194fa5e1ebdc31a86649fe049ae396cee77c->leave($__internal_4e932076af9be3fcd840fe3e31e6194fa5e1ebdc31a86649fe049ae396cee77c_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 7,  59 => 6,  41 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Page/about.html.twig #}
{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block title %}About{% endblock%}

{% block body %}
    <header>
        <h1>About symblog</h1>
    </header>
    <article>
        <p>Donec imperdiet ante sed diam consequat et dictum erat faucibus. Aliquam sit
            amet vehicula leo. Morbi urna dui, tempor ac posuere et, rutrum at dui.
            Curabitur neque quam, ultricies ut imperdiet id, ornare varius arcu. Ut congue
            urna sit amet tellus malesuada nec elementum risus molestie. Donec gravida
            tellus sed tortor adipiscing fringilla. Donec nulla mauris, mollis egestas
            condimentum laoreet, lacinia vel lorem. Morbi vitae justo sit amet felis
            vehicula commodo a placerat lacus. Mauris at est elit, nec vehicula urna. Duis a
            lacus nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
            posuere cubilia Curae.</p>
    </article>
{% endblock %}", "BloggerBlogBundle:Page:about.html.twig", "C:\\site\\OpenServer\\domains\\symfony-blog\\src\\Blogger\\BlogBundle/Resources/views/Page/about.html.twig");
    }
}
