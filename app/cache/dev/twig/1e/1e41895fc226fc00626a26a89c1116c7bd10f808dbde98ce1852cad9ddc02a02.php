<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_966152dac400a989981daf91232e8266d7d8d06b2fb27097c4759386a315964e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_cfbdcd5457850c2b93773260463b8067bba689642a13ae2b55f4c3d920de6548 = $this->env->getExtension("native_profiler");
        $__internal_cfbdcd5457850c2b93773260463b8067bba689642a13ae2b55f4c3d920de6548->enter($__internal_cfbdcd5457850c2b93773260463b8067bba689642a13ae2b55f4c3d920de6548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfbdcd5457850c2b93773260463b8067bba689642a13ae2b55f4c3d920de6548->leave($__internal_cfbdcd5457850c2b93773260463b8067bba689642a13ae2b55f4c3d920de6548_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d7acd754c3797173ce7fff785d95c21ae4c0bfbf8da0cbdb6de7e9985c41d6f9 = $this->env->getExtension("native_profiler");
        $__internal_d7acd754c3797173ce7fff785d95c21ae4c0bfbf8da0cbdb6de7e9985c41d6f9->enter($__internal_d7acd754c3797173ce7fff785d95c21ae4c0bfbf8da0cbdb6de7e9985c41d6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d7acd754c3797173ce7fff785d95c21ae4c0bfbf8da0cbdb6de7e9985c41d6f9->leave($__internal_d7acd754c3797173ce7fff785d95c21ae4c0bfbf8da0cbdb6de7e9985c41d6f9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3b6d4f280e4a93d5295ed9cf80f7ca9ffde310a49d8eafea395bafb3bb0c1e5e = $this->env->getExtension("native_profiler");
        $__internal_3b6d4f280e4a93d5295ed9cf80f7ca9ffde310a49d8eafea395bafb3bb0c1e5e->enter($__internal_3b6d4f280e4a93d5295ed9cf80f7ca9ffde310a49d8eafea395bafb3bb0c1e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3b6d4f280e4a93d5295ed9cf80f7ca9ffde310a49d8eafea395bafb3bb0c1e5e->leave($__internal_3b6d4f280e4a93d5295ed9cf80f7ca9ffde310a49d8eafea395bafb3bb0c1e5e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_be6489c480bd816cd8f1420b0417341530f675717ead64855705b54221c87bc6 = $this->env->getExtension("native_profiler");
        $__internal_be6489c480bd816cd8f1420b0417341530f675717ead64855705b54221c87bc6->enter($__internal_be6489c480bd816cd8f1420b0417341530f675717ead64855705b54221c87bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_be6489c480bd816cd8f1420b0417341530f675717ead64855705b54221c87bc6->leave($__internal_be6489c480bd816cd8f1420b0417341530f675717ead64855705b54221c87bc6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
