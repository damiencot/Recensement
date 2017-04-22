<?php

/* ::modulesUsed/navigation.html.twig */
class __TwigTemplate_313e680523dfc579203e8efc79797dd0316e235bd11e3bade18dce0528f241bd extends Twig_Template
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
        // line 1
        echo "<div class=\"span3\">
    </br>
    </br>
    </br>
    </br>
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li class=\"nav-header\">Nos Recense</li>
            <li>
                <!-- Route -->
                <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation");
        echo "\">Liste</a>
            </li>
            <li>
                <!-- Route -->
                <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajout");
        echo "\">Ajouter</a>
            </li>
        </ul>
    </div>

    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <!-- Verification du role de chaque Utilisateurs-->
                ";
        // line 24
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 25
            echo "                    ";
            $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "::modulesUsed/navigation.html.twig", 25)->display($context);
            // line 26
            echo "                ";
        } else {
            // line 27
            echo "                    ";
            $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig", "::modulesUsed/navigation.html.twig", 27)->display($context);
            // line 28
            echo "                ";
        }
        // line 29
        echo "            </li>
        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "::modulesUsed/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 29,  61 => 28,  58 => 27,  55 => 26,  52 => 25,  50 => 24,  38 => 15,  31 => 11,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"span3\">
    </br>
    </br>
    </br>
    </br>
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li class=\"nav-header\">Nos Recense</li>
            <li>
                <!-- Route -->
                <a href=\"{{ path('presentation') }}\">Liste</a>
            </li>
            <li>
                <!-- Route -->
                <a href=\"{{ path('ajout') }}\">Ajouter</a>
            </li>
        </ul>
    </div>

    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <!-- Verification du role de chaque Utilisateurs-->
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    {% include 'UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig' %}
                {% else %}
                    {% include 'UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig' %}
                {% endif %}
            </li>
        </ul>
    </div>
</div>", "::modulesUsed/navigation.html.twig", "C:/wamp/www/recensement/app/Resources\\views/modulesUsed/navigation.html.twig");
    }
}
