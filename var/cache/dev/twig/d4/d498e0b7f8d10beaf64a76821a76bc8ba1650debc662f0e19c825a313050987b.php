<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a66f7feeccc64ec58a7671d7832396430d88f2e27434edb21459be8430e2f116 extends Twig_Template
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
        $__internal_ee16994f6fd3856cf9ea575a6ef494bed3c5be9bc8e5f64bd36fb8720e14d097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee16994f6fd3856cf9ea575a6ef494bed3c5be9bc8e5f64bd36fb8720e14d097->enter($__internal_ee16994f6fd3856cf9ea575a6ef494bed3c5be9bc8e5f64bd36fb8720e14d097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_908990f90295302701f62cfdc19b508807ba0af6a36d03235baf74c18b8a4408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_908990f90295302701f62cfdc19b508807ba0af6a36d03235baf74c18b8a4408->enter($__internal_908990f90295302701f62cfdc19b508807ba0af6a36d03235baf74c18b8a4408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee16994f6fd3856cf9ea575a6ef494bed3c5be9bc8e5f64bd36fb8720e14d097->leave($__internal_ee16994f6fd3856cf9ea575a6ef494bed3c5be9bc8e5f64bd36fb8720e14d097_prof);

        
        $__internal_908990f90295302701f62cfdc19b508807ba0af6a36d03235baf74c18b8a4408->leave($__internal_908990f90295302701f62cfdc19b508807ba0af6a36d03235baf74c18b8a4408_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c4f29fa6fdd26525ce4110aab352a7b166c3f24ae4381017b6dfaeda09114b15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4f29fa6fdd26525ce4110aab352a7b166c3f24ae4381017b6dfaeda09114b15->enter($__internal_c4f29fa6fdd26525ce4110aab352a7b166c3f24ae4381017b6dfaeda09114b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6b63e1b4fbc5aacac0087e3a2fa6ae16008872a1843344cbd34763891c29d284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b63e1b4fbc5aacac0087e3a2fa6ae16008872a1843344cbd34763891c29d284->enter($__internal_6b63e1b4fbc5aacac0087e3a2fa6ae16008872a1843344cbd34763891c29d284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6b63e1b4fbc5aacac0087e3a2fa6ae16008872a1843344cbd34763891c29d284->leave($__internal_6b63e1b4fbc5aacac0087e3a2fa6ae16008872a1843344cbd34763891c29d284_prof);

        
        $__internal_c4f29fa6fdd26525ce4110aab352a7b166c3f24ae4381017b6dfaeda09114b15->leave($__internal_c4f29fa6fdd26525ce4110aab352a7b166c3f24ae4381017b6dfaeda09114b15_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ae1997e5ec25b3f1c699b2f9d3a7b7b8867e0b73f1873df9791757051b5bd44a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae1997e5ec25b3f1c699b2f9d3a7b7b8867e0b73f1873df9791757051b5bd44a->enter($__internal_ae1997e5ec25b3f1c699b2f9d3a7b7b8867e0b73f1873df9791757051b5bd44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3e0011fb83518d8ac1b0bc2d9865e872a47cc292ed020b03c9b38cf1325ca0a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e0011fb83518d8ac1b0bc2d9865e872a47cc292ed020b03c9b38cf1325ca0a0->enter($__internal_3e0011fb83518d8ac1b0bc2d9865e872a47cc292ed020b03c9b38cf1325ca0a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3e0011fb83518d8ac1b0bc2d9865e872a47cc292ed020b03c9b38cf1325ca0a0->leave($__internal_3e0011fb83518d8ac1b0bc2d9865e872a47cc292ed020b03c9b38cf1325ca0a0_prof);

        
        $__internal_ae1997e5ec25b3f1c699b2f9d3a7b7b8867e0b73f1873df9791757051b5bd44a->leave($__internal_ae1997e5ec25b3f1c699b2f9d3a7b7b8867e0b73f1873df9791757051b5bd44a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_af2fef50fe4c6db262fa3e1b5467accee50a21c6f3a8695918858d22a26dacec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af2fef50fe4c6db262fa3e1b5467accee50a21c6f3a8695918858d22a26dacec->enter($__internal_af2fef50fe4c6db262fa3e1b5467accee50a21c6f3a8695918858d22a26dacec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c0a649c8fee0768cc27d94dd0335bab17486a2a472ab19351cded46758890b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0a649c8fee0768cc27d94dd0335bab17486a2a472ab19351cded46758890b0e->enter($__internal_c0a649c8fee0768cc27d94dd0335bab17486a2a472ab19351cded46758890b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c0a649c8fee0768cc27d94dd0335bab17486a2a472ab19351cded46758890b0e->leave($__internal_c0a649c8fee0768cc27d94dd0335bab17486a2a472ab19351cded46758890b0e_prof);

        
        $__internal_af2fef50fe4c6db262fa3e1b5467accee50a21c6f3a8695918858d22a26dacec->leave($__internal_af2fef50fe4c6db262fa3e1b5467accee50a21c6f3a8695918858d22a26dacec_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\phpStudy\\WWW\\aaa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
