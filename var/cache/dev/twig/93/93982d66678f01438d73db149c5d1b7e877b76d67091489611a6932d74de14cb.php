<?php

/* ::base.html.twig */
class __TwigTemplate_8e27827c311db4b019cc888585330cb226bc237fae847cac333b3d91c15cfb47 extends Twig_Template
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
        $__internal_c150c32faa28f79d18fd48d8583bd2f59c85a4fc202719bb58e24f0811490e26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c150c32faa28f79d18fd48d8583bd2f59c85a4fc202719bb58e24f0811490e26->enter($__internal_c150c32faa28f79d18fd48d8583bd2f59c85a4fc202719bb58e24f0811490e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_93807571a2659afc049a5bad40e8a90edf0c9dda5e7d9ed4792696e65c72fa69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93807571a2659afc049a5bad40e8a90edf0c9dda5e7d9ed4792696e65c72fa69->enter($__internal_93807571a2659afc049a5bad40e8a90edf0c9dda5e7d9ed4792696e65c72fa69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c150c32faa28f79d18fd48d8583bd2f59c85a4fc202719bb58e24f0811490e26->leave($__internal_c150c32faa28f79d18fd48d8583bd2f59c85a4fc202719bb58e24f0811490e26_prof);

        
        $__internal_93807571a2659afc049a5bad40e8a90edf0c9dda5e7d9ed4792696e65c72fa69->leave($__internal_93807571a2659afc049a5bad40e8a90edf0c9dda5e7d9ed4792696e65c72fa69_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce5ab27e411761d474e807b61379d15f20c3c196fd4c1aa9ab3a5122f862a8eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce5ab27e411761d474e807b61379d15f20c3c196fd4c1aa9ab3a5122f862a8eb->enter($__internal_ce5ab27e411761d474e807b61379d15f20c3c196fd4c1aa9ab3a5122f862a8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_85cb8d32fb30d8d55283c843cc7fed3aa31b631e26fca5b6e3c4c5bd1f90c5fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85cb8d32fb30d8d55283c843cc7fed3aa31b631e26fca5b6e3c4c5bd1f90c5fb->enter($__internal_85cb8d32fb30d8d55283c843cc7fed3aa31b631e26fca5b6e3c4c5bd1f90c5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symblog";
        
        $__internal_85cb8d32fb30d8d55283c843cc7fed3aa31b631e26fca5b6e3c4c5bd1f90c5fb->leave($__internal_85cb8d32fb30d8d55283c843cc7fed3aa31b631e26fca5b6e3c4c5bd1f90c5fb_prof);

        
        $__internal_ce5ab27e411761d474e807b61379d15f20c3c196fd4c1aa9ab3a5122f862a8eb->leave($__internal_ce5ab27e411761d474e807b61379d15f20c3c196fd4c1aa9ab3a5122f862a8eb_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e4244ce89db574621a4e2269469bf7998f4708c10c84c383471b38b30c67e024 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4244ce89db574621a4e2269469bf7998f4708c10c84c383471b38b30c67e024->enter($__internal_e4244ce89db574621a4e2269469bf7998f4708c10c84c383471b38b30c67e024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2908d48f5957df420c9131eae2f8b1bb081f7aafe1cf502d148b4497335fb2fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2908d48f5957df420c9131eae2f8b1bb081f7aafe1cf502d148b4497335fb2fb->enter($__internal_2908d48f5957df420c9131eae2f8b1bb081f7aafe1cf502d148b4497335fb2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        
        $__internal_2908d48f5957df420c9131eae2f8b1bb081f7aafe1cf502d148b4497335fb2fb->leave($__internal_2908d48f5957df420c9131eae2f8b1bb081f7aafe1cf502d148b4497335fb2fb_prof);

        
        $__internal_e4244ce89db574621a4e2269469bf7998f4708c10c84c383471b38b30c67e024->leave($__internal_e4244ce89db574621a4e2269469bf7998f4708c10c84c383471b38b30c67e024_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_d99a97f60d12f7ae3c50f4bcd23622bc25f2c2e69c18fdb1f0e20a1b7d19a346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d99a97f60d12f7ae3c50f4bcd23622bc25f2c2e69c18fdb1f0e20a1b7d19a346->enter($__internal_d99a97f60d12f7ae3c50f4bcd23622bc25f2c2e69c18fdb1f0e20a1b7d19a346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_4f34ba464fcc247d89b2fdd28a725f0462ab804d41c78a527edb16c3939386ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f34ba464fcc247d89b2fdd28a725f0462ab804d41c78a527edb16c3939386ea->enter($__internal_4f34ba464fcc247d89b2fdd28a725f0462ab804d41c78a527edb16c3939386ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_4f34ba464fcc247d89b2fdd28a725f0462ab804d41c78a527edb16c3939386ea->leave($__internal_4f34ba464fcc247d89b2fdd28a725f0462ab804d41c78a527edb16c3939386ea_prof);

        
        $__internal_d99a97f60d12f7ae3c50f4bcd23622bc25f2c2e69c18fdb1f0e20a1b7d19a346->leave($__internal_d99a97f60d12f7ae3c50f4bcd23622bc25f2c2e69c18fdb1f0e20a1b7d19a346_prof);

    }

    // line 34
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_a102821fb2c13d5e14edd3c9e2d7d15db3baab83d5c8c314dbd78da248270970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a102821fb2c13d5e14edd3c9e2d7d15db3baab83d5c8c314dbd78da248270970->enter($__internal_a102821fb2c13d5e14edd3c9e2d7d15db3baab83d5c8c314dbd78da248270970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        $__internal_d9096ab1b1a43b67adc1d2f43167610339e80ff3caac763db0d4bee42b414357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9096ab1b1a43b67adc1d2f43167610339e80ff3caac763db0d4bee42b414357->enter($__internal_d9096ab1b1a43b67adc1d2f43167610339e80ff3caac763db0d4bee42b414357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">Symblog</a>";
        
        $__internal_d9096ab1b1a43b67adc1d2f43167610339e80ff3caac763db0d4bee42b414357->leave($__internal_d9096ab1b1a43b67adc1d2f43167610339e80ff3caac763db0d4bee42b414357_prof);

        
        $__internal_a102821fb2c13d5e14edd3c9e2d7d15db3baab83d5c8c314dbd78da248270970->leave($__internal_a102821fb2c13d5e14edd3c9e2d7d15db3baab83d5c8c314dbd78da248270970_prof);

    }

    // line 35
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_dae950f19674d7554670a4923b1a7b56b7b525f2ad3c11e05d659abceaba2959 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dae950f19674d7554670a4923b1a7b56b7b525f2ad3c11e05d659abceaba2959->enter($__internal_dae950f19674d7554670a4923b1a7b56b7b525f2ad3c11e05d659abceaba2959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        $__internal_c57b5877d651f7f95e75d166c50f8e63785622de8468d5b2f1a0f47a19d11f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c57b5877d651f7f95e75d166c50f8e63785622de8468d5b2f1a0f47a19d11f66->enter($__internal_c57b5877d651f7f95e75d166c50f8e63785622de8468d5b2f1a0f47a19d11f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creating a blog in Symfony2</a>";
        
        $__internal_c57b5877d651f7f95e75d166c50f8e63785622de8468d5b2f1a0f47a19d11f66->leave($__internal_c57b5877d651f7f95e75d166c50f8e63785622de8468d5b2f1a0f47a19d11f66_prof);

        
        $__internal_dae950f19674d7554670a4923b1a7b56b7b525f2ad3c11e05d659abceaba2959->leave($__internal_dae950f19674d7554670a4923b1a7b56b7b525f2ad3c11e05d659abceaba2959_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_85503924a98fb642882f7d883579eb5ced4a103566bbe6bee156f1cdc5c831a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85503924a98fb642882f7d883579eb5ced4a103566bbe6bee156f1cdc5c831a1->enter($__internal_85503924a98fb642882f7d883579eb5ced4a103566bbe6bee156f1cdc5c831a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4000b7ede5958d6fda432abebc6a83f39dff4835b1e9bf90f7455c9519432c4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4000b7ede5958d6fda432abebc6a83f39dff4835b1e9bf90f7455c9519432c4a->enter($__internal_4000b7ede5958d6fda432abebc6a83f39dff4835b1e9bf90f7455c9519432c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4000b7ede5958d6fda432abebc6a83f39dff4835b1e9bf90f7455c9519432c4a->leave($__internal_4000b7ede5958d6fda432abebc6a83f39dff4835b1e9bf90f7455c9519432c4a_prof);

        
        $__internal_85503924a98fb642882f7d883579eb5ced4a103566bbe6bee156f1cdc5c831a1->leave($__internal_85503924a98fb642882f7d883579eb5ced4a103566bbe6bee156f1cdc5c831a1_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_1804fe9a485616c0fa8e6191a9ae76c23de5fcf8fd57f89349dd14c78849ccfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1804fe9a485616c0fa8e6191a9ae76c23de5fcf8fd57f89349dd14c78849ccfa->enter($__internal_1804fe9a485616c0fa8e6191a9ae76c23de5fcf8fd57f89349dd14c78849ccfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_bc653121646af2ab2e771d7e0391fa1117f36ad25ba39c450904708f5fe5f14d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc653121646af2ab2e771d7e0391fa1117f36ad25ba39c450904708f5fe5f14d->enter($__internal_bc653121646af2ab2e771d7e0391fa1117f36ad25ba39c450904708f5fe5f14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_bc653121646af2ab2e771d7e0391fa1117f36ad25ba39c450904708f5fe5f14d->leave($__internal_bc653121646af2ab2e771d7e0391fa1117f36ad25ba39c450904708f5fe5f14d_prof);

        
        $__internal_1804fe9a485616c0fa8e6191a9ae76c23de5fcf8fd57f89349dd14c78849ccfa->leave($__internal_1804fe9a485616c0fa8e6191a9ae76c23de5fcf8fd57f89349dd14c78849ccfa_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0a981ea5355d39530a1c2d0887b66087c1ec0db27aed9cd5792276d392163bcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a981ea5355d39530a1c2d0887b66087c1ec0db27aed9cd5792276d392163bcf->enter($__internal_0a981ea5355d39530a1c2d0887b66087c1ec0db27aed9cd5792276d392163bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_1f778b13bf3d5da5e8e99adeb135212dc45dc57349dffe333fa4e0a18993c814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f778b13bf3d5da5e8e99adeb135212dc45dc57349dffe333fa4e0a18993c814->enter($__internal_1f778b13bf3d5da5e8e99adeb135212dc45dc57349dffe333fa4e0a18993c814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 48
        echo "            Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
        ";
        
        $__internal_1f778b13bf3d5da5e8e99adeb135212dc45dc57349dffe333fa4e0a18993c814->leave($__internal_1f778b13bf3d5da5e8e99adeb135212dc45dc57349dffe333fa4e0a18993c814_prof);

        
        $__internal_0a981ea5355d39530a1c2d0887b66087c1ec0db27aed9cd5792276d392163bcf->leave($__internal_0a981ea5355d39530a1c2d0887b66087c1ec0db27aed9cd5792276d392163bcf_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fa5cbea9622e55c69ecf250b3100aa9293b4df9d477e4979386eb1bccd3dc002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa5cbea9622e55c69ecf250b3100aa9293b4df9d477e4979386eb1bccd3dc002->enter($__internal_fa5cbea9622e55c69ecf250b3100aa9293b4df9d477e4979386eb1bccd3dc002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b23991c66de7487da752bba370ecd74b7d231d33383933dca62fcbb8011efbc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b23991c66de7487da752bba370ecd74b7d231d33383933dca62fcbb8011efbc0->enter($__internal_b23991c66de7487da752bba370ecd74b7d231d33383933dca62fcbb8011efbc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b23991c66de7487da752bba370ecd74b7d231d33383933dca62fcbb8011efbc0->leave($__internal_b23991c66de7487da752bba370ecd74b7d231d33383933dca62fcbb8011efbc0_prof);

        
        $__internal_fa5cbea9622e55c69ecf250b3100aa9293b4df9d477e4979386eb1bccd3dc002->leave($__internal_fa5cbea9622e55c69ecf250b3100aa9293b4df9d477e4979386eb1bccd3dc002_prof);

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
", "::base.html.twig", "C:\\OpenServer\\domains\\symfony-blog\\app/Resources\\views/base.html.twig");
    }
}
