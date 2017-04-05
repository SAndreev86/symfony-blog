<?php

/* BloggerBlogBundle:Default:index.html.twig */
class __TwigTemplate_c103b7b3d95a16c8a1e12ef181abb6786541a016036c8412a8b0fc6ac52736ca extends Twig_Template
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
        $__internal_0293ed9df770cc3681eab2987d18f87418fa2b2d78e2992d19f485dd6fffdd7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0293ed9df770cc3681eab2987d18f87418fa2b2d78e2992d19f485dd6fffdd7e->enter($__internal_0293ed9df770cc3681eab2987d18f87418fa2b2d78e2992d19f485dd6fffdd7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Default:index.html.twig"));

        $__internal_3d008e3117f275340f7d8555037f32ca9b0224c9b3b34178fe6f1b02adaa213d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d008e3117f275340f7d8555037f32ca9b0224c9b3b34178fe6f1b02adaa213d->enter($__internal_3d008e3117f275340f7d8555037f32ca9b0224c9b3b34178fe6f1b02adaa213d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_0293ed9df770cc3681eab2987d18f87418fa2b2d78e2992d19f485dd6fffdd7e->leave($__internal_0293ed9df770cc3681eab2987d18f87418fa2b2d78e2992d19f485dd6fffdd7e_prof);

        
        $__internal_3d008e3117f275340f7d8555037f32ca9b0224c9b3b34178fe6f1b02adaa213d->leave($__internal_3d008e3117f275340f7d8555037f32ca9b0224c9b3b34178fe6f1b02adaa213d_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "BloggerBlogBundle:Default:index.html.twig", "C:\\OpenServer\\domains\\symfony-blog\\src\\Blogger\\BlogBundle/Resources/views/Default/index.html.twig");
    }
}
