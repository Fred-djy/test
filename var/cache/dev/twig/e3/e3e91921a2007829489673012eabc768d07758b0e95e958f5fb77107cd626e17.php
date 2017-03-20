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
        $__internal_bab63007bd794b896bb5d59b57a246a6984454c8104c66a54cf8b04bbf72f2f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bab63007bd794b896bb5d59b57a246a6984454c8104c66a54cf8b04bbf72f2f1->enter($__internal_bab63007bd794b896bb5d59b57a246a6984454c8104c66a54cf8b04bbf72f2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_205ecd94078fe4b3bdabcd55ad2969c5fbe27e937efc4e486f002a29263d1a9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_205ecd94078fe4b3bdabcd55ad2969c5fbe27e937efc4e486f002a29263d1a9c->enter($__internal_205ecd94078fe4b3bdabcd55ad2969c5fbe27e937efc4e486f002a29263d1a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bab63007bd794b896bb5d59b57a246a6984454c8104c66a54cf8b04bbf72f2f1->leave($__internal_bab63007bd794b896bb5d59b57a246a6984454c8104c66a54cf8b04bbf72f2f1_prof);

        
        $__internal_205ecd94078fe4b3bdabcd55ad2969c5fbe27e937efc4e486f002a29263d1a9c->leave($__internal_205ecd94078fe4b3bdabcd55ad2969c5fbe27e937efc4e486f002a29263d1a9c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_49e8a72014f478ff8f825477fa48736269add3a14037991aad35230db022ead5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49e8a72014f478ff8f825477fa48736269add3a14037991aad35230db022ead5->enter($__internal_49e8a72014f478ff8f825477fa48736269add3a14037991aad35230db022ead5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7c8215c9ae77e4683e7666f4e087e688c1f9e90280dc177f49fa84f00bf7daf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c8215c9ae77e4683e7666f4e087e688c1f9e90280dc177f49fa84f00bf7daf2->enter($__internal_7c8215c9ae77e4683e7666f4e087e688c1f9e90280dc177f49fa84f00bf7daf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7c8215c9ae77e4683e7666f4e087e688c1f9e90280dc177f49fa84f00bf7daf2->leave($__internal_7c8215c9ae77e4683e7666f4e087e688c1f9e90280dc177f49fa84f00bf7daf2_prof);

        
        $__internal_49e8a72014f478ff8f825477fa48736269add3a14037991aad35230db022ead5->leave($__internal_49e8a72014f478ff8f825477fa48736269add3a14037991aad35230db022ead5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_63ad561f0fc59d63fc4ac6b572995ee98af16dada91ab39fc036e8cc02d65780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63ad561f0fc59d63fc4ac6b572995ee98af16dada91ab39fc036e8cc02d65780->enter($__internal_63ad561f0fc59d63fc4ac6b572995ee98af16dada91ab39fc036e8cc02d65780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d7dcbe37e4ff93b0ad86bc25affee21ba24228e9a469cd711c2c6760b399d4c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7dcbe37e4ff93b0ad86bc25affee21ba24228e9a469cd711c2c6760b399d4c8->enter($__internal_d7dcbe37e4ff93b0ad86bc25affee21ba24228e9a469cd711c2c6760b399d4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d7dcbe37e4ff93b0ad86bc25affee21ba24228e9a469cd711c2c6760b399d4c8->leave($__internal_d7dcbe37e4ff93b0ad86bc25affee21ba24228e9a469cd711c2c6760b399d4c8_prof);

        
        $__internal_63ad561f0fc59d63fc4ac6b572995ee98af16dada91ab39fc036e8cc02d65780->leave($__internal_63ad561f0fc59d63fc4ac6b572995ee98af16dada91ab39fc036e8cc02d65780_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2d4b075574c468d6bb83dfc0141ed9c9b04451d40bb11459f6c988c74398a50d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d4b075574c468d6bb83dfc0141ed9c9b04451d40bb11459f6c988c74398a50d->enter($__internal_2d4b075574c468d6bb83dfc0141ed9c9b04451d40bb11459f6c988c74398a50d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f5fcf42642ab1493972ff64aada6b67b23dc547ba8c2f90adf2f1e1bf393a813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5fcf42642ab1493972ff64aada6b67b23dc547ba8c2f90adf2f1e1bf393a813->enter($__internal_f5fcf42642ab1493972ff64aada6b67b23dc547ba8c2f90adf2f1e1bf393a813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f5fcf42642ab1493972ff64aada6b67b23dc547ba8c2f90adf2f1e1bf393a813->leave($__internal_f5fcf42642ab1493972ff64aada6b67b23dc547ba8c2f90adf2f1e1bf393a813_prof);

        
        $__internal_2d4b075574c468d6bb83dfc0141ed9c9b04451d40bb11459f6c988c74398a50d->leave($__internal_2d4b075574c468d6bb83dfc0141ed9c9b04451d40bb11459f6c988c74398a50d_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\phpStudy\\WWW\\aaa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
