<?php

/* base.html.twig */
class __TwigTemplate_cacf579b6000f723f17482e8fbcf34b983262632f4c235fe52e12381e458265c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17de6ac7586b27333cd8baacf009e0b6084136c7819f0a19d4d0ea64766616bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17de6ac7586b27333cd8baacf009e0b6084136c7819f0a19d4d0ea64766616bf->enter($__internal_17de6ac7586b27333cd8baacf009e0b6084136c7819f0a19d4d0ea64766616bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7d3f03f8f2e285d356616972bcafba9790d4f3ef325cb5876531bee5d6a3243b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3f03f8f2e285d356616972bcafba9790d4f3ef325cb5876531bee5d6a3243b->enter($__internal_7d3f03f8f2e285d356616972bcafba9790d4f3ef325cb5876531bee5d6a3243b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_17de6ac7586b27333cd8baacf009e0b6084136c7819f0a19d4d0ea64766616bf->leave($__internal_17de6ac7586b27333cd8baacf009e0b6084136c7819f0a19d4d0ea64766616bf_prof);

        
        $__internal_7d3f03f8f2e285d356616972bcafba9790d4f3ef325cb5876531bee5d6a3243b->leave($__internal_7d3f03f8f2e285d356616972bcafba9790d4f3ef325cb5876531bee5d6a3243b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_418397b585507a9962fd0e3a0ed1237b1c639a273fa20cba8375c9b40da72563 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_418397b585507a9962fd0e3a0ed1237b1c639a273fa20cba8375c9b40da72563->enter($__internal_418397b585507a9962fd0e3a0ed1237b1c639a273fa20cba8375c9b40da72563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ced339ab4ce86ef4b64f369fc6b77e4d29613ce6bf8c7373c486dc839abe3e8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced339ab4ce86ef4b64f369fc6b77e4d29613ce6bf8c7373c486dc839abe3e8c->enter($__internal_ced339ab4ce86ef4b64f369fc6b77e4d29613ce6bf8c7373c486dc839abe3e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ced339ab4ce86ef4b64f369fc6b77e4d29613ce6bf8c7373c486dc839abe3e8c->leave($__internal_ced339ab4ce86ef4b64f369fc6b77e4d29613ce6bf8c7373c486dc839abe3e8c_prof);

        
        $__internal_418397b585507a9962fd0e3a0ed1237b1c639a273fa20cba8375c9b40da72563->leave($__internal_418397b585507a9962fd0e3a0ed1237b1c639a273fa20cba8375c9b40da72563_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c5e3dd578037e59ba09a0078b5c861f9515cb2848e80f6460b8347f0a73ac533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5e3dd578037e59ba09a0078b5c861f9515cb2848e80f6460b8347f0a73ac533->enter($__internal_c5e3dd578037e59ba09a0078b5c861f9515cb2848e80f6460b8347f0a73ac533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f6af901aea5fd313fd3104dde30012afd36187d528fd690d5068841488de4de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6af901aea5fd313fd3104dde30012afd36187d528fd690d5068841488de4de8->enter($__internal_f6af901aea5fd313fd3104dde30012afd36187d528fd690d5068841488de4de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f6af901aea5fd313fd3104dde30012afd36187d528fd690d5068841488de4de8->leave($__internal_f6af901aea5fd313fd3104dde30012afd36187d528fd690d5068841488de4de8_prof);

        
        $__internal_c5e3dd578037e59ba09a0078b5c861f9515cb2848e80f6460b8347f0a73ac533->leave($__internal_c5e3dd578037e59ba09a0078b5c861f9515cb2848e80f6460b8347f0a73ac533_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9719b5ee5b06258f103474fe7808444d39132698b48e1c55f3de0499de781b89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9719b5ee5b06258f103474fe7808444d39132698b48e1c55f3de0499de781b89->enter($__internal_9719b5ee5b06258f103474fe7808444d39132698b48e1c55f3de0499de781b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_612b79b3f9560f6c14c1ae4a5151fc428e8a3f8611eba0be78090bec2c1d4419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_612b79b3f9560f6c14c1ae4a5151fc428e8a3f8611eba0be78090bec2c1d4419->enter($__internal_612b79b3f9560f6c14c1ae4a5151fc428e8a3f8611eba0be78090bec2c1d4419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_612b79b3f9560f6c14c1ae4a5151fc428e8a3f8611eba0be78090bec2c1d4419->leave($__internal_612b79b3f9560f6c14c1ae4a5151fc428e8a3f8611eba0be78090bec2c1d4419_prof);

        
        $__internal_9719b5ee5b06258f103474fe7808444d39132698b48e1c55f3de0499de781b89->leave($__internal_9719b5ee5b06258f103474fe7808444d39132698b48e1c55f3de0499de781b89_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d6fa805e0ebc99c79727afdf6b1d5f56734d58628c2161b2248363e1b2ffe6c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6fa805e0ebc99c79727afdf6b1d5f56734d58628c2161b2248363e1b2ffe6c4->enter($__internal_d6fa805e0ebc99c79727afdf6b1d5f56734d58628c2161b2248363e1b2ffe6c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_25f91f11d5128fac7cff6f4b1a1d1b1c5357be4257a3d5e3114a41a90102639b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25f91f11d5128fac7cff6f4b1a1d1b1c5357be4257a3d5e3114a41a90102639b->enter($__internal_25f91f11d5128fac7cff6f4b1a1d1b1c5357be4257a3d5e3114a41a90102639b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_25f91f11d5128fac7cff6f4b1a1d1b1c5357be4257a3d5e3114a41a90102639b->leave($__internal_25f91f11d5128fac7cff6f4b1a1d1b1c5357be4257a3d5e3114a41a90102639b_prof);

        
        $__internal_d6fa805e0ebc99c79727afdf6b1d5f56734d58628c2161b2248363e1b2ffe6c4->leave($__internal_d6fa805e0ebc99c79727afdf6b1d5f56734d58628c2161b2248363e1b2ffe6c4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\phpStudy\\WWW\\aaa\\app\\Resources\\views\\base.html.twig");
    }
}
