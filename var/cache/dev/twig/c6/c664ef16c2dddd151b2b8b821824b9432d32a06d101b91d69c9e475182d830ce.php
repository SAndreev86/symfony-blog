<?php

/* @Twig/Exception/logs.html.twig */
class __TwigTemplate_c5787caf6418f5916dc38e8d5b1b53a43277dfba337913e1c407511f0c7af5a3 extends Twig_Template
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
        $__internal_77151b8f2d4ccfa7a6334ee76e5fb615ae79009eef8a91e3afbfd9d5028e3d02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77151b8f2d4ccfa7a6334ee76e5fb615ae79009eef8a91e3afbfd9d5028e3d02->enter($__internal_77151b8f2d4ccfa7a6334ee76e5fb615ae79009eef8a91e3afbfd9d5028e3d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        $__internal_74c641e1968e76c2db5c2ec288bdf7a5d47422442b4a5f1b1ce2d0372947a4c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74c641e1968e76c2db5c2ec288bdf7a5d47422442b4a5f1b1ce2d0372947a4c7->enter($__internal_74c641e1968e76c2db5c2ec288bdf7a5d47422442b4a5f1b1ce2d0372947a4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute($context["log"], "priority", array()) >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute($context["log"], "priority", array()) >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", array()), "html", null, true);
            echo " - ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatLogMessage($this->getAttribute($context["log"], "message", array()), $this->getAttribute($context["log"], "context", array()));
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
        
        $__internal_77151b8f2d4ccfa7a6334ee76e5fb615ae79009eef8a91e3afbfd9d5028e3d02->leave($__internal_77151b8f2d4ccfa7a6334ee76e5fb615ae79009eef8a91e3afbfd9d5028e3d02_prof);

        
        $__internal_74c641e1968e76c2db5c2ec288bdf7a5d47422442b4a5f1b1ce2d0372947a4c7->leave($__internal_74c641e1968e76c2db5c2ec288bdf7a5d47422442b4a5f1b1ce2d0372947a4c7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  41 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ol class=\"traces logs\">
    {% for log in logs %}
        <li{% if log.priority >= 400 %} class=\"error\"{% elseif log.priority >= 300 %} class=\"warning\"{% endif %}>
            {{ log.priorityName }} - {{ log.message|format_log_message(log.context) }}
        </li>
    {% endfor %}
</ol>
", "@Twig/Exception/logs.html.twig", "C:\\site\\OpenServer\\domains\\symfony-blog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\logs.html.twig");
    }
}
