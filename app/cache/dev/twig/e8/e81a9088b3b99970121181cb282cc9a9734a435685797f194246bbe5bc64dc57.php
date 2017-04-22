<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_187b265397674784fe823281431cc6948a893882113067dfda9ef8884066e4fd extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\"/>
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>
<body>
<div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"brand\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation");
        echo "\">Recensement</a>
            <div class=\"nav-collapse collapse\">
                <!-- Verification du role de chaque Utilisateurs-->
                ";
        // line 25
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 26
            echo "                    ";
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("RecensementBundle:Recense:recherche"), array());
            // line 27
            echo "                ";
        } else {
            // line 28
            echo "                ";
        }
        // line 29
        echo "            </div>
        </div>
    </div>
</div>
";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "<hr/>
<footer id=\"footer\" class=\"vspace20\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span4\">
                <p>&copy; Recensement</p>
            </div>
        </div>
    </div>
</footer>
<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenue!";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 46,  130 => 33,  125 => 10,  119 => 5,  113 => 47,  111 => 46,  107 => 45,  103 => 44,  91 => 34,  89 => 33,  83 => 29,  80 => 28,  77 => 27,  74 => 26,  72 => 25,  66 => 22,  51 => 11,  49 => 10,  45 => 9,  41 => 8,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
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
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}Bienvenue!{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-responsive.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.css') }}\"/>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>
<body>
<div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"brand\" href=\"{{ path('presentation') }}\">Recensement</a>
            <div class=\"nav-collapse collapse\">
                <!-- Verification du role de chaque Utilisateurs-->
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    {% render(controller('RecensementBundle:Recense:recherche')) %}
                {% else %}
                {% endif %}
            </div>
        </div>
    </div>
</div>
{% block body %}{% endblock %}
<hr/>
<footer id=\"footer\" class=\"vspace20\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span4\">
                <p>&copy; Recensement</p>
            </div>
        </div>
    </div>
</footer>
<script src=\"{{ asset('js/jquery-1.10.0.min.js') }}\"></script>
<script src=\"{{ asset('js/bootstrap.js') }}\"></script>
{% block javascripts %}{% endblock %}
</body>
</html>
", "::layout/layout.html.twig", "C:/wamp/www/recensement/app/Resources\\views/layout/layout.html.twig");
    }
}
