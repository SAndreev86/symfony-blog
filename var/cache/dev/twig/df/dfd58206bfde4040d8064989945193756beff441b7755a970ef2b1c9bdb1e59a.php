<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3e0bfdb580122853f0c093e0ea8c0588d47a395d8407bf38e328e615b90ae81f extends Twig_Template
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
        $__internal_2261808017f51b42c2f1cd89bf08ff09d9464d2c639650368db8c7157cb1600a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2261808017f51b42c2f1cd89bf08ff09d9464d2c639650368db8c7157cb1600a->enter($__internal_2261808017f51b42c2f1cd89bf08ff09d9464d2c639650368db8c7157cb1600a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_bc06160b396f94daacf56d18d2f302df20340389993ee99583df5c388e7dd292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc06160b396f94daacf56d18d2f302df20340389993ee99583df5c388e7dd292->enter($__internal_bc06160b396f94daacf56d18d2f302df20340389993ee99583df5c388e7dd292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2261808017f51b42c2f1cd89bf08ff09d9464d2c639650368db8c7157cb1600a->leave($__internal_2261808017f51b42c2f1cd89bf08ff09d9464d2c639650368db8c7157cb1600a_prof);

        
        $__internal_bc06160b396f94daacf56d18d2f302df20340389993ee99583df5c388e7dd292->leave($__internal_bc06160b396f94daacf56d18d2f302df20340389993ee99583df5c388e7dd292_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a40ee211867da7be6697154bd26384fa108acb6fdda1e78d5ef353fea91caf2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a40ee211867da7be6697154bd26384fa108acb6fdda1e78d5ef353fea91caf2e->enter($__internal_a40ee211867da7be6697154bd26384fa108acb6fdda1e78d5ef353fea91caf2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_219d404a8835ae7088956be0953c57fbc231e3cecea85b5cb9e2a75eb1d71ef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_219d404a8835ae7088956be0953c57fbc231e3cecea85b5cb9e2a75eb1d71ef5->enter($__internal_219d404a8835ae7088956be0953c57fbc231e3cecea85b5cb9e2a75eb1d71ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_219d404a8835ae7088956be0953c57fbc231e3cecea85b5cb9e2a75eb1d71ef5->leave($__internal_219d404a8835ae7088956be0953c57fbc231e3cecea85b5cb9e2a75eb1d71ef5_prof);

        
        $__internal_a40ee211867da7be6697154bd26384fa108acb6fdda1e78d5ef353fea91caf2e->leave($__internal_a40ee211867da7be6697154bd26384fa108acb6fdda1e78d5ef353fea91caf2e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c89b4041e3fba66d9b20d038403f96616a23a92a801286471aca94ffb9405ddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c89b4041e3fba66d9b20d038403f96616a23a92a801286471aca94ffb9405ddc->enter($__internal_c89b4041e3fba66d9b20d038403f96616a23a92a801286471aca94ffb9405ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e166c96db9f8ee8a499a83ea1b76f514f75578eb0245499a1fa5f42d1cf4bf4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e166c96db9f8ee8a499a83ea1b76f514f75578eb0245499a1fa5f42d1cf4bf4f->enter($__internal_e166c96db9f8ee8a499a83ea1b76f514f75578eb0245499a1fa5f42d1cf4bf4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e166c96db9f8ee8a499a83ea1b76f514f75578eb0245499a1fa5f42d1cf4bf4f->leave($__internal_e166c96db9f8ee8a499a83ea1b76f514f75578eb0245499a1fa5f42d1cf4bf4f_prof);

        
        $__internal_c89b4041e3fba66d9b20d038403f96616a23a92a801286471aca94ffb9405ddc->leave($__internal_c89b4041e3fba66d9b20d038403f96616a23a92a801286471aca94ffb9405ddc_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e13ddf021a247a74bbc4812e5df356c756aa00fff4a1554626a7aa9da7c7654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e13ddf021a247a74bbc4812e5df356c756aa00fff4a1554626a7aa9da7c7654->enter($__internal_8e13ddf021a247a74bbc4812e5df356c756aa00fff4a1554626a7aa9da7c7654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8a1781ef6231c347861ce70d623f37a557f6ec48d12f55e492ed19855327ee74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a1781ef6231c347861ce70d623f37a557f6ec48d12f55e492ed19855327ee74->enter($__internal_8a1781ef6231c347861ce70d623f37a557f6ec48d12f55e492ed19855327ee74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_8a1781ef6231c347861ce70d623f37a557f6ec48d12f55e492ed19855327ee74->leave($__internal_8a1781ef6231c347861ce70d623f37a557f6ec48d12f55e492ed19855327ee74_prof);

        
        $__internal_8e13ddf021a247a74bbc4812e5df356c756aa00fff4a1554626a7aa9da7c7654->leave($__internal_8e13ddf021a247a74bbc4812e5df356c756aa00fff4a1554626a7aa9da7c7654_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\site\\OpenServer\\domains\\symfony-blog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
