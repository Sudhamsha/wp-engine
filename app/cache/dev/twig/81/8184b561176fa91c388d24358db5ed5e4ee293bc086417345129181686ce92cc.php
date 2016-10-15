<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e152018d4aa234c0da1ba4328d0685935f6281eeb6e3cfe877c95a1327102b59 extends Twig_Template
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
        $__internal_086b1205d825f30cc848254eb384c7acb492cdd2829072cc2d738c06781cb02a = $this->env->getExtension("native_profiler");
        $__internal_086b1205d825f30cc848254eb384c7acb492cdd2829072cc2d738c06781cb02a->enter($__internal_086b1205d825f30cc848254eb384c7acb492cdd2829072cc2d738c06781cb02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_086b1205d825f30cc848254eb384c7acb492cdd2829072cc2d738c06781cb02a->leave($__internal_086b1205d825f30cc848254eb384c7acb492cdd2829072cc2d738c06781cb02a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_78c43e90b0fa12781e2e8659c22b5295605bb784ef653c9f749196d7bab8ed92 = $this->env->getExtension("native_profiler");
        $__internal_78c43e90b0fa12781e2e8659c22b5295605bb784ef653c9f749196d7bab8ed92->enter($__internal_78c43e90b0fa12781e2e8659c22b5295605bb784ef653c9f749196d7bab8ed92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_78c43e90b0fa12781e2e8659c22b5295605bb784ef653c9f749196d7bab8ed92->leave($__internal_78c43e90b0fa12781e2e8659c22b5295605bb784ef653c9f749196d7bab8ed92_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1722a5e5b43a244d75f6a212a5d4c571a1e2b968fe152310cc0aeb1abd3af966 = $this->env->getExtension("native_profiler");
        $__internal_1722a5e5b43a244d75f6a212a5d4c571a1e2b968fe152310cc0aeb1abd3af966->enter($__internal_1722a5e5b43a244d75f6a212a5d4c571a1e2b968fe152310cc0aeb1abd3af966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1722a5e5b43a244d75f6a212a5d4c571a1e2b968fe152310cc0aeb1abd3af966->leave($__internal_1722a5e5b43a244d75f6a212a5d4c571a1e2b968fe152310cc0aeb1abd3af966_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_44415a7bf71ee2d8198336a448332568401fbb8a0d4688ccada66f8d483f6c7b = $this->env->getExtension("native_profiler");
        $__internal_44415a7bf71ee2d8198336a448332568401fbb8a0d4688ccada66f8d483f6c7b->enter($__internal_44415a7bf71ee2d8198336a448332568401fbb8a0d4688ccada66f8d483f6c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_44415a7bf71ee2d8198336a448332568401fbb8a0d4688ccada66f8d483f6c7b->leave($__internal_44415a7bf71ee2d8198336a448332568401fbb8a0d4688ccada66f8d483f6c7b_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
