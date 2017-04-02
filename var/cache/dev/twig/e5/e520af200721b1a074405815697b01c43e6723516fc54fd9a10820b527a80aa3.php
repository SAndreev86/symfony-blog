<?php

/* ::base.html.twig */
class __TwigTemplate_ed670b1aee3e66b8ce31e5932f55a332c35f0ac82419849f8f18b38bb46e527f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf801a72a62fc9958f95118a795667061f8a17409efb271e8acad2ed8643e7d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf801a72a62fc9958f95118a795667061f8a17409efb271e8acad2ed8643e7d5->enter($__internal_cf801a72a62fc9958f95118a795667061f8a17409efb271e8acad2ed8643e7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_9769c601d328a5196d7aa726a700a15f20e29d378d94d2353fc2545e3d8a0ac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9769c601d328a5196d7aa726a700a15f20e29d378d94d2353fc2545e3d8a0ac4->enter($__internal_9769c601d328a5196d7aa726a700a15f20e29d378d94d2353fc2545e3d8a0ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_cf801a72a62fc9958f95118a795667061f8a17409efb271e8acad2ed8643e7d5->leave($__internal_cf801a72a62fc9958f95118a795667061f8a17409efb271e8acad2ed8643e7d5_prof);

        
        $__internal_9769c601d328a5196d7aa726a700a15f20e29d378d94d2353fc2545e3d8a0ac4->leave($__internal_9769c601d328a5196d7aa726a700a15f20e29d378d94d2353fc2545e3d8a0ac4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_389cd0116b0935dd76e166cf2d794535bc595bdf8a6be58fb0b60d9302833226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_389cd0116b0935dd76e166cf2d794535bc595bdf8a6be58fb0b60d9302833226->enter($__internal_389cd0116b0935dd76e166cf2d794535bc595bdf8a6be58fb0b60d9302833226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cc4c8e62c7a503a141cd91e19c324a497d9197d2dde83ed1ba28614b572b7a82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc4c8e62c7a503a141cd91e19c324a497d9197d2dde83ed1ba28614b572b7a82->enter($__internal_cc4c8e62c7a503a141cd91e19c324a497d9197d2dde83ed1ba28614b572b7a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cc4c8e62c7a503a141cd91e19c324a497d9197d2dde83ed1ba28614b572b7a82->leave($__internal_cc4c8e62c7a503a141cd91e19c324a497d9197d2dde83ed1ba28614b572b7a82_prof);

        
        $__internal_389cd0116b0935dd76e166cf2d794535bc595bdf8a6be58fb0b60d9302833226->leave($__internal_389cd0116b0935dd76e166cf2d794535bc595bdf8a6be58fb0b60d9302833226_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7d45fbf465f971d08e4de7d2954206ab206a6aaaa66f8db1cdc7df0f0d2d7c0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d45fbf465f971d08e4de7d2954206ab206a6aaaa66f8db1cdc7df0f0d2d7c0d->enter($__internal_7d45fbf465f971d08e4de7d2954206ab206a6aaaa66f8db1cdc7df0f0d2d7c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f1fec6accfb8c882029534f0862bce3b177a8dd078e892d0071eedc461396d3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1fec6accfb8c882029534f0862bce3b177a8dd078e892d0071eedc461396d3e->enter($__internal_f1fec6accfb8c882029534f0862bce3b177a8dd078e892d0071eedc461396d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f1fec6accfb8c882029534f0862bce3b177a8dd078e892d0071eedc461396d3e->leave($__internal_f1fec6accfb8c882029534f0862bce3b177a8dd078e892d0071eedc461396d3e_prof);

        
        $__internal_7d45fbf465f971d08e4de7d2954206ab206a6aaaa66f8db1cdc7df0f0d2d7c0d->leave($__internal_7d45fbf465f971d08e4de7d2954206ab206a6aaaa66f8db1cdc7df0f0d2d7c0d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ca6135abbf486684a22809eca5a0ba8bcc104816d51ce14ad64c7b4c3572e94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ca6135abbf486684a22809eca5a0ba8bcc104816d51ce14ad64c7b4c3572e94->enter($__internal_7ca6135abbf486684a22809eca5a0ba8bcc104816d51ce14ad64c7b4c3572e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a72bab4c31278bb5068b2e1a58d6bedd2bf8c05f06da6346af452b4ecd4e1f72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a72bab4c31278bb5068b2e1a58d6bedd2bf8c05f06da6346af452b4ecd4e1f72->enter($__internal_a72bab4c31278bb5068b2e1a58d6bedd2bf8c05f06da6346af452b4ecd4e1f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a72bab4c31278bb5068b2e1a58d6bedd2bf8c05f06da6346af452b4ecd4e1f72->leave($__internal_a72bab4c31278bb5068b2e1a58d6bedd2bf8c05f06da6346af452b4ecd4e1f72_prof);

        
        $__internal_7ca6135abbf486684a22809eca5a0ba8bcc104816d51ce14ad64c7b4c3572e94->leave($__internal_7ca6135abbf486684a22809eca5a0ba8bcc104816d51ce14ad64c7b4c3572e94_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_52b5b622bf14ac0304b92d761a96fa2920e5b69356a96d28f56a6af788c2b3c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52b5b622bf14ac0304b92d761a96fa2920e5b69356a96d28f56a6af788c2b3c2->enter($__internal_52b5b622bf14ac0304b92d761a96fa2920e5b69356a96d28f56a6af788c2b3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_20848ed2ec9f009b589e7796f678ad4432adfa9010335c737e30c57932576cf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20848ed2ec9f009b589e7796f678ad4432adfa9010335c737e30c57932576cf5->enter($__internal_20848ed2ec9f009b589e7796f678ad4432adfa9010335c737e30c57932576cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_20848ed2ec9f009b589e7796f678ad4432adfa9010335c737e30c57932576cf5->leave($__internal_20848ed2ec9f009b589e7796f678ad4432adfa9010335c737e30c57932576cf5_prof);

        
        $__internal_52b5b622bf14ac0304b92d761a96fa2920e5b69356a96d28f56a6af788c2b3c2->leave($__internal_52b5b622bf14ac0304b92d761a96fa2920e5b69356a96d28f56a6af788c2b3c2_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\site\\OpenServer\\domains\\symfony\\app/Resources\\views/base.html.twig");
    }
}
