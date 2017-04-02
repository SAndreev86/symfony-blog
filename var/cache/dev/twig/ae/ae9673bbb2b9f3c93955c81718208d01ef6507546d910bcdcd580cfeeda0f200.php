<?php

/* BlogBundle:Blog:view.html.twig */
class __TwigTemplate_4c372d533045047e7f242ec5aa0084fa95a7d34a29a47b1d93a9b22eb3beff2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BlogBundle:Blog:view.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3917d12e60c859bc81d6cbb3cb9af232bb94c4903e16e5465255c3250ba81d28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3917d12e60c859bc81d6cbb3cb9af232bb94c4903e16e5465255c3250ba81d28->enter($__internal_3917d12e60c859bc81d6cbb3cb9af232bb94c4903e16e5465255c3250ba81d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:view.html.twig"));

        $__internal_d7f2505017a6c48e8dbfc9c389ee69588b8355a1049dfe94dcf7c90c918fc5ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f2505017a6c48e8dbfc9c389ee69588b8355a1049dfe94dcf7c90c918fc5ce->enter($__internal_d7f2505017a6c48e8dbfc9c389ee69588b8355a1049dfe94dcf7c90c918fc5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3917d12e60c859bc81d6cbb3cb9af232bb94c4903e16e5465255c3250ba81d28->leave($__internal_3917d12e60c859bc81d6cbb3cb9af232bb94c4903e16e5465255c3250ba81d28_prof);

        
        $__internal_d7f2505017a6c48e8dbfc9c389ee69588b8355a1049dfe94dcf7c90c918fc5ce->leave($__internal_d7f2505017a6c48e8dbfc9c389ee69588b8355a1049dfe94dcf7c90c918fc5ce_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5b831561a4c1cbd8e8799ef4372f2ad9847b784ef02738b1d8399383a55cb10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5b831561a4c1cbd8e8799ef4372f2ad9847b784ef02738b1d8399383a55cb10->enter($__internal_b5b831561a4c1cbd8e8799ef4372f2ad9847b784ef02738b1d8399383a55cb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a2ae1b5586198ad3d6aa2ffb2bcb37b2e607293e45346573a2b3ea8254a4a3dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2ae1b5586198ad3d6aa2ffb2bcb37b2e607293e45346573a2b3ea8254a4a3dd->enter($__internal_a2ae1b5586198ad3d6aa2ffb2bcb37b2e607293e45346573a2b3ea8254a4a3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"page_title\" id=\"page_title\">
    <h1>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        echo "</h1>
</div>
    <article>
        <div class=\"container blog-container\">
            <div class=\"field field-body\">
                ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "body", array()), "html", null, true);
        echo "
            </div>
            <div class=\"field field-created\">
                ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created", array()), "d-m-Y"), "html", null, true);
        echo "
            </div>
        </div>
    </article>
";
        
        $__internal_a2ae1b5586198ad3d6aa2ffb2bcb37b2e607293e45346573a2b3ea8254a4a3dd->leave($__internal_a2ae1b5586198ad3d6aa2ffb2bcb37b2e607293e45346573a2b3ea8254a4a3dd_prof);

        
        $__internal_b5b831561a4c1cbd8e8799ef4372f2ad9847b784ef02738b1d8399383a55cb10->leave($__internal_b5b831561a4c1cbd8e8799ef4372f2ad9847b784ef02738b1d8399383a55cb10_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Blog:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  60 => 9,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block body %}
<div class=\"page_title\" id=\"page_title\">
    <h1>{{ blog.title }}</h1>
</div>
    <article>
        <div class=\"container blog-container\">
            <div class=\"field field-body\">
                {{ blog.body }}
            </div>
            <div class=\"field field-created\">
                {{ blog.created|date(\"d-m-Y\") }}
            </div>
        </div>
    </article>
{% endblock %}
", "BlogBundle:Blog:view.html.twig", "C:\\site\\OpenServer\\domains\\symfony\\src\\BlogBundle/Resources/views/Blog/view.html.twig");
    }
}
