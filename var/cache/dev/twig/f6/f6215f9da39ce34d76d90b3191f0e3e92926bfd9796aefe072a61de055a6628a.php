<?php

/* BloggerBlogBundle:Page:about.html.twig */
class __TwigTemplate_7acd86f1732ee8faa9a5f55a6161d835e9c6c6ff336b74ef80b668058e222dd7 extends Twig_Template
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
        $__internal_fd1f8db0defe80ca7fed52660b2e4247f4b179186f4ab53eeabc0265d16b2c94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd1f8db0defe80ca7fed52660b2e4247f4b179186f4ab53eeabc0265d16b2c94->enter($__internal_fd1f8db0defe80ca7fed52660b2e4247f4b179186f4ab53eeabc0265d16b2c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:about.html.twig"));

        $__internal_f79a7209ce2c93d1c2204d391c077ce6290342aa1995b72c9740c6e642d7acf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f79a7209ce2c93d1c2204d391c077ce6290342aa1995b72c9740c6e642d7acf5->enter($__internal_f79a7209ce2c93d1c2204d391c077ce6290342aa1995b72c9740c6e642d7acf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd1f8db0defe80ca7fed52660b2e4247f4b179186f4ab53eeabc0265d16b2c94->leave($__internal_fd1f8db0defe80ca7fed52660b2e4247f4b179186f4ab53eeabc0265d16b2c94_prof);

        
        $__internal_f79a7209ce2c93d1c2204d391c077ce6290342aa1995b72c9740c6e642d7acf5->leave($__internal_f79a7209ce2c93d1c2204d391c077ce6290342aa1995b72c9740c6e642d7acf5_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_4704e8dc1461846774abd2607d6d80dd3079fef10906999e264a0b0c8c8f6867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4704e8dc1461846774abd2607d6d80dd3079fef10906999e264a0b0c8c8f6867->enter($__internal_4704e8dc1461846774abd2607d6d80dd3079fef10906999e264a0b0c8c8f6867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c5dd96e75944aa1e347b35e69ee8f52c1ba8bb412b9c768a3c45811a9cf723db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5dd96e75944aa1e347b35e69ee8f52c1ba8bb412b9c768a3c45811a9cf723db->enter($__internal_c5dd96e75944aa1e347b35e69ee8f52c1ba8bb412b9c768a3c45811a9cf723db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "About";
        
        $__internal_c5dd96e75944aa1e347b35e69ee8f52c1ba8bb412b9c768a3c45811a9cf723db->leave($__internal_c5dd96e75944aa1e347b35e69ee8f52c1ba8bb412b9c768a3c45811a9cf723db_prof);

        
        $__internal_4704e8dc1461846774abd2607d6d80dd3079fef10906999e264a0b0c8c8f6867->leave($__internal_4704e8dc1461846774abd2607d6d80dd3079fef10906999e264a0b0c8c8f6867_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_81ac7a7da0785a9ec7059576a7a33580439bfe9eac423e1ae2b3b1b133073a7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81ac7a7da0785a9ec7059576a7a33580439bfe9eac423e1ae2b3b1b133073a7e->enter($__internal_81ac7a7da0785a9ec7059576a7a33580439bfe9eac423e1ae2b3b1b133073a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c3a974016ad494233014168c2f6734e1d7ec25e65f5f54428d68b864a4f9c33f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a974016ad494233014168c2f6734e1d7ec25e65f5f54428d68b864a4f9c33f->enter($__internal_c3a974016ad494233014168c2f6734e1d7ec25e65f5f54428d68b864a4f9c33f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c3a974016ad494233014168c2f6734e1d7ec25e65f5f54428d68b864a4f9c33f->leave($__internal_c3a974016ad494233014168c2f6734e1d7ec25e65f5f54428d68b864a4f9c33f_prof);

        
        $__internal_81ac7a7da0785a9ec7059576a7a33580439bfe9eac423e1ae2b3b1b133073a7e->leave($__internal_81ac7a7da0785a9ec7059576a7a33580439bfe9eac423e1ae2b3b1b133073a7e_prof);

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
{% endblock %}", "BloggerBlogBundle:Page:about.html.twig", "C:\\OpenServer\\domains\\symfony-blog\\src\\Blogger\\BlogBundle/Resources/views/Page/about.html.twig");
    }
}
