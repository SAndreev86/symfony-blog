<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b587731a82fa1e2a9442bec2a9e1c3f0902ff01ccf9312478ac026d0fe404f7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2991d85f9205f01fa9913b0f61dbc52b8a8b46d927da1e9112ecf4eaa7ba8f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2991d85f9205f01fa9913b0f61dbc52b8a8b46d927da1e9112ecf4eaa7ba8f5->enter($__internal_e2991d85f9205f01fa9913b0f61dbc52b8a8b46d927da1e9112ecf4eaa7ba8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5b34fbb3392bab8d1ae4f58708e62f7a3eb4eb2386232bfb7a5209dbf03d41fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b34fbb3392bab8d1ae4f58708e62f7a3eb4eb2386232bfb7a5209dbf03d41fd->enter($__internal_5b34fbb3392bab8d1ae4f58708e62f7a3eb4eb2386232bfb7a5209dbf03d41fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2991d85f9205f01fa9913b0f61dbc52b8a8b46d927da1e9112ecf4eaa7ba8f5->leave($__internal_e2991d85f9205f01fa9913b0f61dbc52b8a8b46d927da1e9112ecf4eaa7ba8f5_prof);

        
        $__internal_5b34fbb3392bab8d1ae4f58708e62f7a3eb4eb2386232bfb7a5209dbf03d41fd->leave($__internal_5b34fbb3392bab8d1ae4f58708e62f7a3eb4eb2386232bfb7a5209dbf03d41fd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6ca8ecb8c276d6fc308c35ddbe1f284efd07f0f402d202db12bb9d888849addd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ca8ecb8c276d6fc308c35ddbe1f284efd07f0f402d202db12bb9d888849addd->enter($__internal_6ca8ecb8c276d6fc308c35ddbe1f284efd07f0f402d202db12bb9d888849addd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e68efd902dbe9b0127c945a72190485cf20f14bf2c43845964f485fa0fe0eb73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e68efd902dbe9b0127c945a72190485cf20f14bf2c43845964f485fa0fe0eb73->enter($__internal_e68efd902dbe9b0127c945a72190485cf20f14bf2c43845964f485fa0fe0eb73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e68efd902dbe9b0127c945a72190485cf20f14bf2c43845964f485fa0fe0eb73->leave($__internal_e68efd902dbe9b0127c945a72190485cf20f14bf2c43845964f485fa0fe0eb73_prof);

        
        $__internal_6ca8ecb8c276d6fc308c35ddbe1f284efd07f0f402d202db12bb9d888849addd->leave($__internal_6ca8ecb8c276d6fc308c35ddbe1f284efd07f0f402d202db12bb9d888849addd_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b857797db52aa5ddf0798a8aeb6c7a273524d9822002c853c72cab0c7769f568 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b857797db52aa5ddf0798a8aeb6c7a273524d9822002c853c72cab0c7769f568->enter($__internal_b857797db52aa5ddf0798a8aeb6c7a273524d9822002c853c72cab0c7769f568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cc83f369c13db7b8085d8a8fcc28177eba4f1c68de67023fa6690fc51590269c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc83f369c13db7b8085d8a8fcc28177eba4f1c68de67023fa6690fc51590269c->enter($__internal_cc83f369c13db7b8085d8a8fcc28177eba4f1c68de67023fa6690fc51590269c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_cc83f369c13db7b8085d8a8fcc28177eba4f1c68de67023fa6690fc51590269c->leave($__internal_cc83f369c13db7b8085d8a8fcc28177eba4f1c68de67023fa6690fc51590269c_prof);

        
        $__internal_b857797db52aa5ddf0798a8aeb6c7a273524d9822002c853c72cab0c7769f568->leave($__internal_b857797db52aa5ddf0798a8aeb6c7a273524d9822002c853c72cab0c7769f568_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2ae4bcd9b2b33ff3b4b43150cdc1e98883bbffaa18ad9750b35f2ac26abcaf37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ae4bcd9b2b33ff3b4b43150cdc1e98883bbffaa18ad9750b35f2ac26abcaf37->enter($__internal_2ae4bcd9b2b33ff3b4b43150cdc1e98883bbffaa18ad9750b35f2ac26abcaf37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_06db0852c068e76031a81602ca0ba4b5aeb8e62b775662e37c12779eda5f8d1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06db0852c068e76031a81602ca0ba4b5aeb8e62b775662e37c12779eda5f8d1d->enter($__internal_06db0852c068e76031a81602ca0ba4b5aeb8e62b775662e37c12779eda5f8d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_06db0852c068e76031a81602ca0ba4b5aeb8e62b775662e37c12779eda5f8d1d->leave($__internal_06db0852c068e76031a81602ca0ba4b5aeb8e62b775662e37c12779eda5f8d1d_prof);

        
        $__internal_2ae4bcd9b2b33ff3b4b43150cdc1e98883bbffaa18ad9750b35f2ac26abcaf37->leave($__internal_2ae4bcd9b2b33ff3b4b43150cdc1e98883bbffaa18ad9750b35f2ac26abcaf37_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\site\\OpenServer\\domains\\symfony-blog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
