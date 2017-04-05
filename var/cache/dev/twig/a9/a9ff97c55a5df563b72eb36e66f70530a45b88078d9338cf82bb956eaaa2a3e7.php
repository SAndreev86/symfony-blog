<?php

/* BloggerBlogBundle:Page:index.html.twig */
class __TwigTemplate_d630bb19ac9316c79de33b35213330ad1eadb152c6d602c59127032261e498df extends Twig_Template
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
        $__internal_2c0734a12d63ad7f77fcc4a9d636f7ec2f30f8aadb6f5aa264e32d8537ab8272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c0734a12d63ad7f77fcc4a9d636f7ec2f30f8aadb6f5aa264e32d8537ab8272->enter($__internal_2c0734a12d63ad7f77fcc4a9d636f7ec2f30f8aadb6f5aa264e32d8537ab8272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:index.html.twig"));

        $__internal_6b8060399522441fa7c97d9366b973343ee05ec2a46c6985639962a67578248f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b8060399522441fa7c97d9366b973343ee05ec2a46c6985639962a67578248f->enter($__internal_6b8060399522441fa7c97d9366b973343ee05ec2a46c6985639962a67578248f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c0734a12d63ad7f77fcc4a9d636f7ec2f30f8aadb6f5aa264e32d8537ab8272->leave($__internal_2c0734a12d63ad7f77fcc4a9d636f7ec2f30f8aadb6f5aa264e32d8537ab8272_prof);

        
        $__internal_6b8060399522441fa7c97d9366b973343ee05ec2a46c6985639962a67578248f->leave($__internal_6b8060399522441fa7c97d9366b973343ee05ec2a46c6985639962a67578248f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4b83d36c7041f2361886498a202dde0f671b067abdb25321e55019f409b4a27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4b83d36c7041f2361886498a202dde0f671b067abdb25321e55019f409b4a27->enter($__internal_f4b83d36c7041f2361886498a202dde0f671b067abdb25321e55019f409b4a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c952862bdd70501e312e913dd7d889ba408c2dd5ed1d29962e946dac899069e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c952862bdd70501e312e913dd7d889ba408c2dd5ed1d29962e946dac899069e2->enter($__internal_c952862bdd70501e312e913dd7d889ba408c2dd5ed1d29962e946dac899069e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    Blog homepage
";
        
        $__internal_c952862bdd70501e312e913dd7d889ba408c2dd5ed1d29962e946dac899069e2->leave($__internal_c952862bdd70501e312e913dd7d889ba408c2dd5ed1d29962e946dac899069e2_prof);

        
        $__internal_f4b83d36c7041f2361886498a202dde0f671b067abdb25321e55019f409b4a27->leave($__internal_f4b83d36c7041f2361886498a202dde0f671b067abdb25321e55019f409b4a27_prof);

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
        return array (  49 => 5,  40 => 4,  11 => 2,);
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
    Blog homepage
{% endblock %}
", "BloggerBlogBundle:Page:index.html.twig", "C:\\OpenServer\\domains\\symfony-blog\\src\\Blogger\\BlogBundle/Resources/views/Page/index.html.twig");
    }
}
