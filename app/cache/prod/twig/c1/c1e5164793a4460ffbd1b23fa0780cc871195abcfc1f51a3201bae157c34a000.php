<?php

/* @Twig/Exception/error500.html.twig */
class __TwigTemplate_6c1eb4d040e5c820c84d3d242cd82d5ff24350b4a706498339cf855513f1b96f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("base.html.twig", "@Twig/Exception/error500.html.twig", 11);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_body_id($context, array $blocks = array())
    {
        echo "error";
    }

    // line 15
    public function block_main($context, array $blocks = array())
    {
        // line 16
        echo "    <h1 class=\"text-danger\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("http_error.name", array("%status_code%" => 500)), "html", null, true);
        echo "</h1>

    <p class=\"lead\">
        ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("http_error_500.description"), "html", null, true);
        echo "
    </p>
    <p>
        ";
        // line 22
        echo $this->env->getExtension('translator')->trans("http_error_500.suggestion", array("%url%" => $this->env->getExtension('routing')->getPath("blog_index")));
        echo "
    </p>
";
    }

    // line 26
    public function block_sidebar($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 29
        echo $this->env->getExtension('code_explorer_source_code')->showSourceCode($this->env, $this);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error500.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 29,  62 => 27,  59 => 26,  52 => 22,  46 => 19,  39 => 16,  36 => 15,  30 => 13,  11 => 11,);
    }
}
/* {#*/
/*     This template is used to render errors of type HTTP 500 (Internal Server Error)*/
/* */
/*     This is the simplest way to customize error pages in Symfony applications.*/
/*     In case you need it, you can also hook into the internal exception handling*/
/*     made by Symfony. This allows you to perform advanced tasks and even recover*/
/*     your application from some errors.*/
/*     See http://symfony.com/doc/current/cookbook/controller/error_pages.html*/
/* #}*/
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'error' %}*/
/* */
/* {% block main %}*/
/*     <h1 class="text-danger">{{ 'http_error.name'|trans({ '%status_code%': 500 }) }}</h1>*/
/* */
/*     <p class="lead">*/
/*         {{ 'http_error_500.description'|trans }}*/
/*     </p>*/
/*     <p>*/
/*         {{ 'http_error_500.suggestion'|trans({ '%url%': path('blog_index') })|raw }}*/
/*     </p>*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     {{ parent() }}*/
/* */
/*     {{ show_source_code(_self) }}*/
/* {% endblock %}*/
/* */
