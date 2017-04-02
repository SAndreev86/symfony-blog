<?php

/* BlogBundle:Blog:teaser.html.twig */
class __TwigTemplate_d6733a2a35ba4bfc7fc3d7a98dceb4aaea2d95126b17242c1a047843a280da91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BlogBundle:Blog:teaser.html.twig", 1);
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
        $__internal_24f8814b17329cc3c7322d97f3596d381302bd7fd20d0237e7a4e5caf79ac2c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24f8814b17329cc3c7322d97f3596d381302bd7fd20d0237e7a4e5caf79ac2c2->enter($__internal_24f8814b17329cc3c7322d97f3596d381302bd7fd20d0237e7a4e5caf79ac2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:teaser.html.twig"));

        $__internal_a973a7cec18d70d2fecbb09d8bc6d92751af61dd49f583f5b5e3b9b6d771ea5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a973a7cec18d70d2fecbb09d8bc6d92751af61dd49f583f5b5e3b9b6d771ea5b->enter($__internal_a973a7cec18d70d2fecbb09d8bc6d92751af61dd49f583f5b5e3b9b6d771ea5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:teaser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24f8814b17329cc3c7322d97f3596d381302bd7fd20d0237e7a4e5caf79ac2c2->leave($__internal_24f8814b17329cc3c7322d97f3596d381302bd7fd20d0237e7a4e5caf79ac2c2_prof);

        
        $__internal_a973a7cec18d70d2fecbb09d8bc6d92751af61dd49f583f5b5e3b9b6d771ea5b->leave($__internal_a973a7cec18d70d2fecbb09d8bc6d92751af61dd49f583f5b5e3b9b6d771ea5b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_417c2fbcbc2a8d2e6d522cc016f09fa818c0a2edb79153fddfc48cb4037e708d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_417c2fbcbc2a8d2e6d522cc016f09fa818c0a2edb79153fddfc48cb4037e708d->enter($__internal_417c2fbcbc2a8d2e6d522cc016f09fa818c0a2edb79153fddfc48cb4037e708d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_05d27aca2e7cb65b361bc663a3fc2c85c167ae82b8cb08c1ab1fc1ddb317531b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d27aca2e7cb65b361bc663a3fc2c85c167ae82b8cb08c1ab1fc1ddb317531b->enter($__internal_05d27aca2e7cb65b361bc663a3fc2c85c167ae82b8cb08c1ab1fc1ddb317531b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"page_title\" id=\"page_title\">
        <h1>Блог</h1>
    </div>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogs"]) ? $context["blogs"] : $this->getContext($context, "blogs")));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 7
            echo "        <article>
            <h2>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "title", array()), "html", null, true);
            echo "</h2>
            <div class=\"container blog-container\">
                <div class=\"field field-body\">
                    ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "body", array()), "html", null, true);
            echo "
                </div>
                <div class=\"field field-created\">
                    ";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blog"], "created", array()), "d-m-Y"), "html", null, true);
            echo "
                </div>
            </div>
        </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_05d27aca2e7cb65b361bc663a3fc2c85c167ae82b8cb08c1ab1fc1ddb317531b->leave($__internal_05d27aca2e7cb65b361bc663a3fc2c85c167ae82b8cb08c1ab1fc1ddb317531b_prof);

        
        $__internal_417c2fbcbc2a8d2e6d522cc016f09fa818c0a2edb79153fddfc48cb4037e708d->leave($__internal_417c2fbcbc2a8d2e6d522cc016f09fa818c0a2edb79153fddfc48cb4037e708d_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Blog:teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 14,  67 => 11,  61 => 8,  58 => 7,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
        <h1>Блог</h1>
    </div>
    {% for blog in blogs %}
        <article>
            <h2>{{ blog.title }}</h2>
            <div class=\"container blog-container\">
                <div class=\"field field-body\">
                    {{ blog.body }}
                </div>
                <div class=\"field field-created\">
                    {{ blog.created|date(\"d-m-Y\") }}
                </div>
            </div>
        </article>
    {% endfor %}
{% endblock %}
", "BlogBundle:Blog:teaser.html.twig", "C:\\site\\OpenServer\\domains\\symfony\\src\\BlogBundle/Resources/views/Blog/teaser.html.twig");
    }
}
