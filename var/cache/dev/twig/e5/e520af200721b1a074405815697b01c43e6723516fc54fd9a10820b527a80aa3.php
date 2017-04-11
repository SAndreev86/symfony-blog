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
        $__internal_5d25a81fe06d65329c5bbea3cf0594f48c213e6893d169d03b1d4388922d5b2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d25a81fe06d65329c5bbea3cf0594f48c213e6893d169d03b1d4388922d5b2c->enter($__internal_5d25a81fe06d65329c5bbea3cf0594f48c213e6893d169d03b1d4388922d5b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_fdc3fa24bb1e14497242bc46c145ad855aa0e7267106814bfb0b13dfed85412d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdc3fa24bb1e14497242bc46c145ad855aa0e7267106814bfb0b13dfed85412d->enter($__internal_fdc3fa24bb1e14497242bc46c145ad855aa0e7267106814bfb0b13dfed85412d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_5d25a81fe06d65329c5bbea3cf0594f48c213e6893d169d03b1d4388922d5b2c->leave($__internal_5d25a81fe06d65329c5bbea3cf0594f48c213e6893d169d03b1d4388922d5b2c_prof);

        
        $__internal_fdc3fa24bb1e14497242bc46c145ad855aa0e7267106814bfb0b13dfed85412d->leave($__internal_fdc3fa24bb1e14497242bc46c145ad855aa0e7267106814bfb0b13dfed85412d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_39f173e5aa410bca34f797cca6426b113742c2eeae933f83f7f548915f33d8e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39f173e5aa410bca34f797cca6426b113742c2eeae933f83f7f548915f33d8e1->enter($__internal_39f173e5aa410bca34f797cca6426b113742c2eeae933f83f7f548915f33d8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_afc8df69c4c1715e2c1cf1e652a5553079571775dd7b2021dbe3f05d5b2af30b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afc8df69c4c1715e2c1cf1e652a5553079571775dd7b2021dbe3f05d5b2af30b->enter($__internal_afc8df69c4c1715e2c1cf1e652a5553079571775dd7b2021dbe3f05d5b2af30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symblog";
        
        $__internal_afc8df69c4c1715e2c1cf1e652a5553079571775dd7b2021dbe3f05d5b2af30b->leave($__internal_afc8df69c4c1715e2c1cf1e652a5553079571775dd7b2021dbe3f05d5b2af30b_prof);

        
        $__internal_39f173e5aa410bca34f797cca6426b113742c2eeae933f83f7f548915f33d8e1->leave($__internal_39f173e5aa410bca34f797cca6426b113742c2eeae933f83f7f548915f33d8e1_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0d7ba0394cb1da67889666afc5a26b079fe9ac8ccfabbd579a21178e624b490d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d7ba0394cb1da67889666afc5a26b079fe9ac8ccfabbd579a21178e624b490d->enter($__internal_0d7ba0394cb1da67889666afc5a26b079fe9ac8ccfabbd579a21178e624b490d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a8bfc9238148d88db00049edf0eed28bd9aac9477dc84843907b3163561be03f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8bfc9238148d88db00049edf0eed28bd9aac9477dc84843907b3163561be03f->enter($__internal_a8bfc9238148d88db00049edf0eed28bd9aac9477dc84843907b3163561be03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        
        $__internal_a8bfc9238148d88db00049edf0eed28bd9aac9477dc84843907b3163561be03f->leave($__internal_a8bfc9238148d88db00049edf0eed28bd9aac9477dc84843907b3163561be03f_prof);

        
        $__internal_0d7ba0394cb1da67889666afc5a26b079fe9ac8ccfabbd579a21178e624b490d->leave($__internal_0d7ba0394cb1da67889666afc5a26b079fe9ac8ccfabbd579a21178e624b490d_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_d39b24ace2858c9bf8eb9b9cb23f96b7d2f804fc7d6a076c7f810ca3e732643c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d39b24ace2858c9bf8eb9b9cb23f96b7d2f804fc7d6a076c7f810ca3e732643c->enter($__internal_d39b24ace2858c9bf8eb9b9cb23f96b7d2f804fc7d6a076c7f810ca3e732643c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_b5a5078ea0efdaebd699c3eb031e8eaccf4bd2f2c46f8a55ca50de9786adb637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5a5078ea0efdaebd699c3eb031e8eaccf4bd2f2c46f8a55ca50de9786adb637->enter($__internal_b5a5078ea0efdaebd699c3eb031e8eaccf4bd2f2c46f8a55ca50de9786adb637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_b5a5078ea0efdaebd699c3eb031e8eaccf4bd2f2c46f8a55ca50de9786adb637->leave($__internal_b5a5078ea0efdaebd699c3eb031e8eaccf4bd2f2c46f8a55ca50de9786adb637_prof);

        
        $__internal_d39b24ace2858c9bf8eb9b9cb23f96b7d2f804fc7d6a076c7f810ca3e732643c->leave($__internal_d39b24ace2858c9bf8eb9b9cb23f96b7d2f804fc7d6a076c7f810ca3e732643c_prof);

    }

    // line 34
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_cdda987af18cd3d1d88d6aac3d60bcbc5fb5f01f624c03ac4e84a3a2cd28a35c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdda987af18cd3d1d88d6aac3d60bcbc5fb5f01f624c03ac4e84a3a2cd28a35c->enter($__internal_cdda987af18cd3d1d88d6aac3d60bcbc5fb5f01f624c03ac4e84a3a2cd28a35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        $__internal_bc3a27efb7b7fd80d9d73750c1eb976ea944458583c140d655b198aa6e1c09a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc3a27efb7b7fd80d9d73750c1eb976ea944458583c140d655b198aa6e1c09a1->enter($__internal_bc3a27efb7b7fd80d9d73750c1eb976ea944458583c140d655b198aa6e1c09a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">Symblog</a>";
        
        $__internal_bc3a27efb7b7fd80d9d73750c1eb976ea944458583c140d655b198aa6e1c09a1->leave($__internal_bc3a27efb7b7fd80d9d73750c1eb976ea944458583c140d655b198aa6e1c09a1_prof);

        
        $__internal_cdda987af18cd3d1d88d6aac3d60bcbc5fb5f01f624c03ac4e84a3a2cd28a35c->leave($__internal_cdda987af18cd3d1d88d6aac3d60bcbc5fb5f01f624c03ac4e84a3a2cd28a35c_prof);

    }

    // line 35
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_ec08782c980f4bc39ade56deb825767c3224d753eb85e738bd3cd2d5fd18bd13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec08782c980f4bc39ade56deb825767c3224d753eb85e738bd3cd2d5fd18bd13->enter($__internal_ec08782c980f4bc39ade56deb825767c3224d753eb85e738bd3cd2d5fd18bd13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        $__internal_490b6b921d42d9ad04756a7de46cdbe4ae96ed976e1b95815b38081b5bf44a9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_490b6b921d42d9ad04756a7de46cdbe4ae96ed976e1b95815b38081b5bf44a9a->enter($__internal_490b6b921d42d9ad04756a7de46cdbe4ae96ed976e1b95815b38081b5bf44a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creating a blog in Symfony2</a>";
        
        $__internal_490b6b921d42d9ad04756a7de46cdbe4ae96ed976e1b95815b38081b5bf44a9a->leave($__internal_490b6b921d42d9ad04756a7de46cdbe4ae96ed976e1b95815b38081b5bf44a9a_prof);

        
        $__internal_ec08782c980f4bc39ade56deb825767c3224d753eb85e738bd3cd2d5fd18bd13->leave($__internal_ec08782c980f4bc39ade56deb825767c3224d753eb85e738bd3cd2d5fd18bd13_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_c06eedd8d3e0d1137cef925390704e6686671128c1f66d7492bf937da941fbe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c06eedd8d3e0d1137cef925390704e6686671128c1f66d7492bf937da941fbe7->enter($__internal_c06eedd8d3e0d1137cef925390704e6686671128c1f66d7492bf937da941fbe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2c7de8e72b7a2bbc6de4562364209618c29754524713f867664ebe40a15c3b72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c7de8e72b7a2bbc6de4562364209618c29754524713f867664ebe40a15c3b72->enter($__internal_2c7de8e72b7a2bbc6de4562364209618c29754524713f867664ebe40a15c3b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2c7de8e72b7a2bbc6de4562364209618c29754524713f867664ebe40a15c3b72->leave($__internal_2c7de8e72b7a2bbc6de4562364209618c29754524713f867664ebe40a15c3b72_prof);

        
        $__internal_c06eedd8d3e0d1137cef925390704e6686671128c1f66d7492bf937da941fbe7->leave($__internal_c06eedd8d3e0d1137cef925390704e6686671128c1f66d7492bf937da941fbe7_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_26ef89f5d08094ac91480bccd02c1077da4bf5a27683bef7b007cb546fcd520e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26ef89f5d08094ac91480bccd02c1077da4bf5a27683bef7b007cb546fcd520e->enter($__internal_26ef89f5d08094ac91480bccd02c1077da4bf5a27683bef7b007cb546fcd520e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_439e5ea1402d981c1c3b5f7258279877efb6546f93150e8046d66b8482bc8ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_439e5ea1402d981c1c3b5f7258279877efb6546f93150e8046d66b8482bc8ce0->enter($__internal_439e5ea1402d981c1c3b5f7258279877efb6546f93150e8046d66b8482bc8ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_439e5ea1402d981c1c3b5f7258279877efb6546f93150e8046d66b8482bc8ce0->leave($__internal_439e5ea1402d981c1c3b5f7258279877efb6546f93150e8046d66b8482bc8ce0_prof);

        
        $__internal_26ef89f5d08094ac91480bccd02c1077da4bf5a27683bef7b007cb546fcd520e->leave($__internal_26ef89f5d08094ac91480bccd02c1077da4bf5a27683bef7b007cb546fcd520e_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e16dc91910c9b8e9c8631463df9000b5e82b7a67bb05ef44d2fe47b5517908b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e16dc91910c9b8e9c8631463df9000b5e82b7a67bb05ef44d2fe47b5517908b8->enter($__internal_e16dc91910c9b8e9c8631463df9000b5e82b7a67bb05ef44d2fe47b5517908b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_26c1fdade264634b4184d3d525fab2f94e0b0448f4a154b1ef2fdf621247914d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26c1fdade264634b4184d3d525fab2f94e0b0448f4a154b1ef2fdf621247914d->enter($__internal_26c1fdade264634b4184d3d525fab2f94e0b0448f4a154b1ef2fdf621247914d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 48
        echo "            Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
        ";
        
        $__internal_26c1fdade264634b4184d3d525fab2f94e0b0448f4a154b1ef2fdf621247914d->leave($__internal_26c1fdade264634b4184d3d525fab2f94e0b0448f4a154b1ef2fdf621247914d_prof);

        
        $__internal_e16dc91910c9b8e9c8631463df9000b5e82b7a67bb05ef44d2fe47b5517908b8->leave($__internal_e16dc91910c9b8e9c8631463df9000b5e82b7a67bb05ef44d2fe47b5517908b8_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0f010904dc45a6ed315a876b4e58a5d69d11a649bbc3e299d1c92059f21b292b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f010904dc45a6ed315a876b4e58a5d69d11a649bbc3e299d1c92059f21b292b->enter($__internal_0f010904dc45a6ed315a876b4e58a5d69d11a649bbc3e299d1c92059f21b292b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b660b6de0ca93bc6f9d7f4a78d261dc7e27949fc055b99dd69e3cdbf80dcf8a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b660b6de0ca93bc6f9d7f4a78d261dc7e27949fc055b99dd69e3cdbf80dcf8a0->enter($__internal_b660b6de0ca93bc6f9d7f4a78d261dc7e27949fc055b99dd69e3cdbf80dcf8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b660b6de0ca93bc6f9d7f4a78d261dc7e27949fc055b99dd69e3cdbf80dcf8a0->leave($__internal_b660b6de0ca93bc6f9d7f4a78d261dc7e27949fc055b99dd69e3cdbf80dcf8a0_prof);

        
        $__internal_0f010904dc45a6ed315a876b4e58a5d69d11a649bbc3e299d1c92059f21b292b->leave($__internal_0f010904dc45a6ed315a876b4e58a5d69d11a649bbc3e299d1c92059f21b292b_prof);

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
