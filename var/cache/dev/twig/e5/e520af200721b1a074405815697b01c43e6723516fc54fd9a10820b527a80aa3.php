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
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9ea3cba664d3cd59d76cf61a31ce5e7a9057289a23a591cd8926849589790ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9ea3cba664d3cd59d76cf61a31ce5e7a9057289a23a591cd8926849589790ab->enter($__internal_b9ea3cba664d3cd59d76cf61a31ce5e7a9057289a23a591cd8926849589790ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_b7a41cb42671cf583910c5cb34bb9a727c082c3293a038121d82a1aec4293ba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7a41cb42671cf583910c5cb34bb9a727c082c3293a038121d82a1aec4293ba8->enter($__internal_b7a41cb42671cf583910c5cb34bb9a727c082c3293a038121d82a1aec4293ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - Symblog</title>
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>

<section id=\"wrapper\">
    <header id=\"header\">
        <div class=\"top\">
            ";
        // line 22
        $this->displayBlock('navigation', $context, $blocks);
        // line 31
        echo "        </div>

        <hgroup>
            <h2>";
        // line 34
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
            <h3>";
        // line 35
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
        </hgroup>
    </header>

    <section class=\"main-col\">
        ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "    </section>
    <aside class=\"sidebar\">
        ";
        // line 43
        $this->displayBlock('sidebar', $context, $blocks);
        // line 44
        echo "    </aside>

    <div id=\"footer\">
        ";
        // line 47
        $this->displayBlock('footer', $context, $blocks);
        // line 50
        echo "    </div>
</section>

";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
        echo "</body>
</html>
";
        
        $__internal_b9ea3cba664d3cd59d76cf61a31ce5e7a9057289a23a591cd8926849589790ab->leave($__internal_b9ea3cba664d3cd59d76cf61a31ce5e7a9057289a23a591cd8926849589790ab_prof);

        
        $__internal_b7a41cb42671cf583910c5cb34bb9a727c082c3293a038121d82a1aec4293ba8->leave($__internal_b7a41cb42671cf583910c5cb34bb9a727c082c3293a038121d82a1aec4293ba8_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f33055ebb860de654903f6c31b81872b749846a079b28ee207acfa1bbd827c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f33055ebb860de654903f6c31b81872b749846a079b28ee207acfa1bbd827c6->enter($__internal_4f33055ebb860de654903f6c31b81872b749846a079b28ee207acfa1bbd827c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_635693262d0480b41aa65658c47a572543e6ef05f829c8347fc3c817248dfe41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_635693262d0480b41aa65658c47a572543e6ef05f829c8347fc3c817248dfe41->enter($__internal_635693262d0480b41aa65658c47a572543e6ef05f829c8347fc3c817248dfe41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symblog";
        
        $__internal_635693262d0480b41aa65658c47a572543e6ef05f829c8347fc3c817248dfe41->leave($__internal_635693262d0480b41aa65658c47a572543e6ef05f829c8347fc3c817248dfe41_prof);

        
        $__internal_4f33055ebb860de654903f6c31b81872b749846a079b28ee207acfa1bbd827c6->leave($__internal_4f33055ebb860de654903f6c31b81872b749846a079b28ee207acfa1bbd827c6_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a90f6e824128c6feeaba8817275eaafe63dd69cd3db4c87f6f519a96a574d48e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a90f6e824128c6feeaba8817275eaafe63dd69cd3db4c87f6f519a96a574d48e->enter($__internal_a90f6e824128c6feeaba8817275eaafe63dd69cd3db4c87f6f519a96a574d48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fd42be5e3b3b674f2fb14712287ac4db3013e06cf99efd5f0d258366deedeb05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd42be5e3b3b674f2fb14712287ac4db3013e06cf99efd5f0d258366deedeb05->enter($__internal_fd42be5e3b3b674f2fb14712287ac4db3013e06cf99efd5f0d258366deedeb05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        
        $__internal_fd42be5e3b3b674f2fb14712287ac4db3013e06cf99efd5f0d258366deedeb05->leave($__internal_fd42be5e3b3b674f2fb14712287ac4db3013e06cf99efd5f0d258366deedeb05_prof);

        
        $__internal_a90f6e824128c6feeaba8817275eaafe63dd69cd3db4c87f6f519a96a574d48e->leave($__internal_a90f6e824128c6feeaba8817275eaafe63dd69cd3db4c87f6f519a96a574d48e_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_ae11795156586132bb19575f3a361a07b25a39ce3221c64911d80991d7dda79f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae11795156586132bb19575f3a361a07b25a39ce3221c64911d80991d7dda79f->enter($__internal_ae11795156586132bb19575f3a361a07b25a39ce3221c64911d80991d7dda79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_89ef8acf898bfde557a40b4eb3998d3a24aeab540e1764151b8bc05b19bab685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ef8acf898bfde557a40b4eb3998d3a24aeab540e1764151b8bc05b19bab685->enter($__internal_89ef8acf898bfde557a40b4eb3998d3a24aeab540e1764151b8bc05b19bab685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                <nav>
                    <ul class=\"navigation\">
                        <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_homepage");
        echo "\">Главная</a></li>
                        <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_about");
        echo "\">Обо мне</a></li>
                        <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_contact");
        echo "\">Контакты</a></li>
                    </ul>
                </nav>
            ";
        
        $__internal_89ef8acf898bfde557a40b4eb3998d3a24aeab540e1764151b8bc05b19bab685->leave($__internal_89ef8acf898bfde557a40b4eb3998d3a24aeab540e1764151b8bc05b19bab685_prof);

        
        $__internal_ae11795156586132bb19575f3a361a07b25a39ce3221c64911d80991d7dda79f->leave($__internal_ae11795156586132bb19575f3a361a07b25a39ce3221c64911d80991d7dda79f_prof);

    }

    // line 34
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_654f26e67f5b08eb4714db21d89d86d3b7e50ebcc831dd358ba39404c877cd0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_654f26e67f5b08eb4714db21d89d86d3b7e50ebcc831dd358ba39404c877cd0a->enter($__internal_654f26e67f5b08eb4714db21d89d86d3b7e50ebcc831dd358ba39404c877cd0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        $__internal_23ccc580d8f105ab5fd24f95ad2a399f1475982844b0b78640c38a8ebd5e5b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23ccc580d8f105ab5fd24f95ad2a399f1475982844b0b78640c38a8ebd5e5b71->enter($__internal_23ccc580d8f105ab5fd24f95ad2a399f1475982844b0b78640c38a8ebd5e5b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">Symblog</a>";
        
        $__internal_23ccc580d8f105ab5fd24f95ad2a399f1475982844b0b78640c38a8ebd5e5b71->leave($__internal_23ccc580d8f105ab5fd24f95ad2a399f1475982844b0b78640c38a8ebd5e5b71_prof);

        
        $__internal_654f26e67f5b08eb4714db21d89d86d3b7e50ebcc831dd358ba39404c877cd0a->leave($__internal_654f26e67f5b08eb4714db21d89d86d3b7e50ebcc831dd358ba39404c877cd0a_prof);

    }

    // line 35
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_37e5d6a653e642cf78ebeefb4153395db9cc30b7e7fb832779ec9e9dcdaa0e62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37e5d6a653e642cf78ebeefb4153395db9cc30b7e7fb832779ec9e9dcdaa0e62->enter($__internal_37e5d6a653e642cf78ebeefb4153395db9cc30b7e7fb832779ec9e9dcdaa0e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        $__internal_1d58ebeffe95ece2fb48f6cc59c01fca643f4b23c8bb975e8249f7f86a61e779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d58ebeffe95ece2fb48f6cc59c01fca643f4b23c8bb975e8249f7f86a61e779->enter($__internal_1d58ebeffe95ece2fb48f6cc59c01fca643f4b23c8bb975e8249f7f86a61e779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creating a blog in Symfony2</a>";
        
        $__internal_1d58ebeffe95ece2fb48f6cc59c01fca643f4b23c8bb975e8249f7f86a61e779->leave($__internal_1d58ebeffe95ece2fb48f6cc59c01fca643f4b23c8bb975e8249f7f86a61e779_prof);

        
        $__internal_37e5d6a653e642cf78ebeefb4153395db9cc30b7e7fb832779ec9e9dcdaa0e62->leave($__internal_37e5d6a653e642cf78ebeefb4153395db9cc30b7e7fb832779ec9e9dcdaa0e62_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_282d6f36a0ec54bb88bf674669c68840c8bd613130e5781ed703ca9f073b3b74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_282d6f36a0ec54bb88bf674669c68840c8bd613130e5781ed703ca9f073b3b74->enter($__internal_282d6f36a0ec54bb88bf674669c68840c8bd613130e5781ed703ca9f073b3b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8fc20722c13e498654a96aa69c2a4995d903ab50da4fc952e9a018da90fce40e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fc20722c13e498654a96aa69c2a4995d903ab50da4fc952e9a018da90fce40e->enter($__internal_8fc20722c13e498654a96aa69c2a4995d903ab50da4fc952e9a018da90fce40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8fc20722c13e498654a96aa69c2a4995d903ab50da4fc952e9a018da90fce40e->leave($__internal_8fc20722c13e498654a96aa69c2a4995d903ab50da4fc952e9a018da90fce40e_prof);

        
        $__internal_282d6f36a0ec54bb88bf674669c68840c8bd613130e5781ed703ca9f073b3b74->leave($__internal_282d6f36a0ec54bb88bf674669c68840c8bd613130e5781ed703ca9f073b3b74_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6d438e572a15b1b95cf585e953d1682deda8fc2c88640bcd509798295a1a2d1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d438e572a15b1b95cf585e953d1682deda8fc2c88640bcd509798295a1a2d1b->enter($__internal_6d438e572a15b1b95cf585e953d1682deda8fc2c88640bcd509798295a1a2d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_a6c7062119ce0fa7db034476b4914774f11275504948c0d0308c47ba987f74df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6c7062119ce0fa7db034476b4914774f11275504948c0d0308c47ba987f74df->enter($__internal_a6c7062119ce0fa7db034476b4914774f11275504948c0d0308c47ba987f74df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_a6c7062119ce0fa7db034476b4914774f11275504948c0d0308c47ba987f74df->leave($__internal_a6c7062119ce0fa7db034476b4914774f11275504948c0d0308c47ba987f74df_prof);

        
        $__internal_6d438e572a15b1b95cf585e953d1682deda8fc2c88640bcd509798295a1a2d1b->leave($__internal_6d438e572a15b1b95cf585e953d1682deda8fc2c88640bcd509798295a1a2d1b_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        $__internal_5f06fd7e3ff502f349a6e41c8d9f332483d74210ea3a4382d461ab76bfbabd6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f06fd7e3ff502f349a6e41c8d9f332483d74210ea3a4382d461ab76bfbabd6d->enter($__internal_5f06fd7e3ff502f349a6e41c8d9f332483d74210ea3a4382d461ab76bfbabd6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_108eda3048193329d85099321a667bcec000db36813bb3e678ad96c9677a12bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_108eda3048193329d85099321a667bcec000db36813bb3e678ad96c9677a12bb->enter($__internal_108eda3048193329d85099321a667bcec000db36813bb3e678ad96c9677a12bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 48
        echo "            Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
        ";
        
        $__internal_108eda3048193329d85099321a667bcec000db36813bb3e678ad96c9677a12bb->leave($__internal_108eda3048193329d85099321a667bcec000db36813bb3e678ad96c9677a12bb_prof);

        
        $__internal_5f06fd7e3ff502f349a6e41c8d9f332483d74210ea3a4382d461ab76bfbabd6d->leave($__internal_5f06fd7e3ff502f349a6e41c8d9f332483d74210ea3a4382d461ab76bfbabd6d_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dd1aa5b680287fef347725271a8e303848802a2674d9020dcaad6261a3583b2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd1aa5b680287fef347725271a8e303848802a2674d9020dcaad6261a3583b2a->enter($__internal_dd1aa5b680287fef347725271a8e303848802a2674d9020dcaad6261a3583b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_29afe434da5c6d7ab53d11dfcdfe4eb57119b123075b9dd76d266580875418e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29afe434da5c6d7ab53d11dfcdfe4eb57119b123075b9dd76d266580875418e9->enter($__internal_29afe434da5c6d7ab53d11dfcdfe4eb57119b123075b9dd76d266580875418e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_29afe434da5c6d7ab53d11dfcdfe4eb57119b123075b9dd76d266580875418e9->leave($__internal_29afe434da5c6d7ab53d11dfcdfe4eb57119b123075b9dd76d266580875418e9_prof);

        
        $__internal_dd1aa5b680287fef347725271a8e303848802a2674d9020dcaad6261a3583b2a->leave($__internal_dd1aa5b680287fef347725271a8e303848802a2674d9020dcaad6261a3583b2a_prof);

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
        return array (  282 => 53,  271 => 48,  262 => 47,  245 => 43,  228 => 40,  210 => 35,  192 => 34,  178 => 27,  174 => 26,  170 => 25,  166 => 23,  157 => 22,  145 => 13,  141 => 11,  132 => 10,  114 => 6,  102 => 54,  100 => 53,  95 => 50,  93 => 47,  88 => 44,  86 => 43,  82 => 41,  80 => 40,  72 => 35,  68 => 34,  63 => 31,  61 => 22,  50 => 15,  48 => 10,  41 => 6,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>{% block title %}Symblog{% endblock %} - Symblog</title>
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    {% block stylesheets %}
        <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
        <link href=\"{{ asset('css/screen.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
    {% endblock %}
    <link rel=\"shortcut icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>

<section id=\"wrapper\">
    <header id=\"header\">
        <div class=\"top\">
            {% block navigation %}
                <nav>
                    <ul class=\"navigation\">
                        <li><a href=\"{{ path('blogger_blog_homepage') }}\">Главная</a></li>
                        <li><a href=\"{{ path('blogger_blog_about') }}\">Обо мне</a></li>
                        <li><a href=\"{{ path('blogger_blog_contact') }}\">Контакты</a></li>
                    </ul>
                </nav>
            {% endblock %}
        </div>

        <hgroup>
            <h2>{% block blog_title %}<a href=\"#\">Symblog</a>{% endblock %}</h2>
            <h3>{% block blog_tagline %}<a href=\"#\">creating a blog in Symfony2</a>{% endblock %}</h3>
        </hgroup>
    </header>

    <section class=\"main-col\">
        {% block body %}{% endblock %}
    </section>
    <aside class=\"sidebar\">
        {% block sidebar %}{% endblock %}
    </aside>

    <div id=\"footer\">
        {% block footer %}
            Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
        {% endblock %}
    </div>
</section>

{% block javascripts %}{% endblock %}
</body>
</html>
", "::base.html.twig", "C:\\site\\OpenServer\\domains\\symfony-blog\\app/Resources\\views/base.html.twig");
    }
}
