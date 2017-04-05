<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_480e38016fd026d2ec6707f4ec2c252e8e78f923c3be8381de07c74124c926ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0867586da57105879387efb6f32fb506daadaa26152bf262b0635b87a372e36c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0867586da57105879387efb6f32fb506daadaa26152bf262b0635b87a372e36c->enter($__internal_0867586da57105879387efb6f32fb506daadaa26152bf262b0635b87a372e36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_7497e4f580eb101bedb7656e5de0da4e82d87d54448fc6f140e119ae21e370d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7497e4f580eb101bedb7656e5de0da4e82d87d54448fc6f140e119ae21e370d7->enter($__internal_7497e4f580eb101bedb7656e5de0da4e82d87d54448fc6f140e119ae21e370d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0867586da57105879387efb6f32fb506daadaa26152bf262b0635b87a372e36c->leave($__internal_0867586da57105879387efb6f32fb506daadaa26152bf262b0635b87a372e36c_prof);

        
        $__internal_7497e4f580eb101bedb7656e5de0da4e82d87d54448fc6f140e119ae21e370d7->leave($__internal_7497e4f580eb101bedb7656e5de0da4e82d87d54448fc6f140e119ae21e370d7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f413000aae1dc2796081aa37e0eeb9ca589e060a4e126954b6e5a2d0684774a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f413000aae1dc2796081aa37e0eeb9ca589e060a4e126954b6e5a2d0684774a5->enter($__internal_f413000aae1dc2796081aa37e0eeb9ca589e060a4e126954b6e5a2d0684774a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5dbe7195fec99f6f3c02987c917dd9e3399f84f9971b56552896a5dd06339cb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dbe7195fec99f6f3c02987c917dd9e3399f84f9971b56552896a5dd06339cb5->enter($__internal_5dbe7195fec99f6f3c02987c917dd9e3399f84f9971b56552896a5dd06339cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_5dbe7195fec99f6f3c02987c917dd9e3399f84f9971b56552896a5dd06339cb5->leave($__internal_5dbe7195fec99f6f3c02987c917dd9e3399f84f9971b56552896a5dd06339cb5_prof);

        
        $__internal_f413000aae1dc2796081aa37e0eeb9ca589e060a4e126954b6e5a2d0684774a5->leave($__internal_f413000aae1dc2796081aa37e0eeb9ca589e060a4e126954b6e5a2d0684774a5_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_8317161efac9a9e647546a84c1b1083cd0107f7120d218c7dc9dc87e5e84b539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8317161efac9a9e647546a84c1b1083cd0107f7120d218c7dc9dc87e5e84b539->enter($__internal_8317161efac9a9e647546a84c1b1083cd0107f7120d218c7dc9dc87e5e84b539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_af1e3379694afe28d488a8b6f2531e7bb461171705691d78c9ad7fc550860f23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af1e3379694afe28d488a8b6f2531e7bb461171705691d78c9ad7fc550860f23->enter($__internal_af1e3379694afe28d488a8b6f2531e7bb461171705691d78c9ad7fc550860f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_af1e3379694afe28d488a8b6f2531e7bb461171705691d78c9ad7fc550860f23->leave($__internal_af1e3379694afe28d488a8b6f2531e7bb461171705691d78c9ad7fc550860f23_prof);

        
        $__internal_8317161efac9a9e647546a84c1b1083cd0107f7120d218c7dc9dc87e5e84b539->leave($__internal_8317161efac9a9e647546a84c1b1083cd0107f7120d218c7dc9dc87e5e84b539_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_483ad2eb78296714d33e6a595c8c21fda54f43475a70a95af1bbd5df81cab3d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_483ad2eb78296714d33e6a595c8c21fda54f43475a70a95af1bbd5df81cab3d6->enter($__internal_483ad2eb78296714d33e6a595c8c21fda54f43475a70a95af1bbd5df81cab3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4dafbdde936a76393d60b35e96781eb25a3c9134a529171936c164823a646d4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dafbdde936a76393d60b35e96781eb25a3c9134a529171936c164823a646d4b->enter($__internal_4dafbdde936a76393d60b35e96781eb25a3c9134a529171936c164823a646d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_4dafbdde936a76393d60b35e96781eb25a3c9134a529171936c164823a646d4b->leave($__internal_4dafbdde936a76393d60b35e96781eb25a3c9134a529171936c164823a646d4b_prof);

        
        $__internal_483ad2eb78296714d33e6a595c8c21fda54f43475a70a95af1bbd5df81cab3d6->leave($__internal_483ad2eb78296714d33e6a595c8c21fda54f43475a70a95af1bbd5df81cab3d6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\OpenServer\\domains\\symfony-blog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
