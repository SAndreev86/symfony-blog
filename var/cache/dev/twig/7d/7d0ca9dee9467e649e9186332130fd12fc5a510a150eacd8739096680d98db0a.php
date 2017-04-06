<?php

/* BloggerBlogBundle:Comment:form.html.twig */
class __TwigTemplate_21d62f404c003bbd72f63b94f87a9dd3b7e2cb8592d6fbfdeb0b9d7c0766473c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7bde325b847478588b8d4413bdfc183effeac22d6d364ba95f63d03dd132a2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7bde325b847478588b8d4413bdfc183effeac22d6d364ba95f63d03dd132a2e->enter($__internal_a7bde325b847478588b8d4413bdfc183effeac22d6d364ba95f63d03dd132a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Comment:form.html.twig"));

        $__internal_3418f22e3f17f66c954be34ee7ac861ada55f58590f49334b0c84779c146e09a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3418f22e3f17f66c954be34ee7ac861ada55f58590f49334b0c84779c146e09a->enter($__internal_3418f22e3f17f66c954be34ee7ac861ada55f58590f49334b0c84779c146e09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Comment:form.html.twig"));

        // line 2
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_comment_create", array("blog_id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "blog", array()), "id", array()))), "method" => "POST", "attr" => array("class" => "blogger")));
        echo "

    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
<p>
    <input type=\"submit\" value=\"Submit\">
</p>
";
        
        $__internal_a7bde325b847478588b8d4413bdfc183effeac22d6d364ba95f63d03dd132a2e->leave($__internal_a7bde325b847478588b8d4413bdfc183effeac22d6d364ba95f63d03dd132a2e_prof);

        
        $__internal_3418f22e3f17f66c954be34ee7ac861ada55f58590f49334b0c84779c146e09a->leave($__internal_3418f22e3f17f66c954be34ee7ac861ada55f58590f49334b0c84779c146e09a_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Comment:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Comment/form.html.twig #}
{{ form_start(form, { 'action': path('blogger_blog_comment_create' , { 'blog_id' : comment.blog.id }), 'method': 'POST', 'attr': {'class': 'blogger'} }) }}

    {{ form_widget(form) }}
<p>
    <input type=\"submit\" value=\"Submit\">
</p>
", "BloggerBlogBundle:Comment:form.html.twig", "C:\\site\\OpenServer\\domains\\symfony-blog\\src\\Blogger\\BlogBundle/Resources/views/Comment/form.html.twig");
    }
}
