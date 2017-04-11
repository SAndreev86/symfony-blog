<?php

/* BloggerBlogBundle:Comment:index.html.twig */
class __TwigTemplate_0ca0677c4fb09571dff94375395f880d6402471a5f2dbd50334704007253e2fd extends Twig_Template
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
        $__internal_f03c0103be3afe3544946944cc69c0062b1afb25340bd82018e47fea90788c62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f03c0103be3afe3544946944cc69c0062b1afb25340bd82018e47fea90788c62->enter($__internal_f03c0103be3afe3544946944cc69c0062b1afb25340bd82018e47fea90788c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Comment:index.html.twig"));

        $__internal_159eebc067dcd2194d2ce41a9eb6e8bf0edee8cd8dd09a47460ace8964772413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_159eebc067dcd2194d2ce41a9eb6e8bf0edee8cd8dd09a47460ace8964772413->enter($__internal_159eebc067dcd2194d2ce41a9eb6e8bf0edee8cd8dd09a47460ace8964772413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Comment:index.html.twig"));

        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 4
            echo "    <article class=\"comment ";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($context["loop"], "index0", array())), "html", null, true);
            echo "\" id=\"comment-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
            echo "\">
        <header>
            <p><span class=\"highlight\">";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "user", array()), "html", null, true);
            echo "</span> commented <time datetime=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "created", array()), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "created", array()), "l, F j, Y"), "html", null, true);
            echo "</time></p>
        </header>
        <p>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "comment", array()), "html", null, true);
            echo "</p>
    </article>
";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 11
            echo "    <p>There are no comments for this post. Be the first to comment...</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f03c0103be3afe3544946944cc69c0062b1afb25340bd82018e47fea90788c62->leave($__internal_f03c0103be3afe3544946944cc69c0062b1afb25340bd82018e47fea90788c62_prof);

        
        $__internal_159eebc067dcd2194d2ce41a9eb6e8bf0edee8cd8dd09a47460ace8964772413->leave($__internal_159eebc067dcd2194d2ce41a9eb6e8bf0edee8cd8dd09a47460ace8964772413_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Comment:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 11,  63 => 8,  54 => 6,  46 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Comment/index.html.twig #}

{% for comment in comments %}
    <article class=\"comment {{ cycle(['odd', 'even'], loop.index0) }}\" id=\"comment-{{ comment.id }}\">
        <header>
            <p><span class=\"highlight\">{{ comment.user }}</span> commented <time datetime=\"{{ comment.created|date('c') }}\">{{ comment.created|date('l, F j, Y') }}</time></p>
        </header>
        <p>{{ comment.comment }}</p>
    </article>
{% else %}
    <p>There are no comments for this post. Be the first to comment...</p>
{% endfor %}", "BloggerBlogBundle:Comment:index.html.twig", "C:\\site\\OpenServer\\domains\\symfony-blog\\src\\Blogger\\BlogBundle/Resources/views/Comment/index.html.twig");
    }
}
