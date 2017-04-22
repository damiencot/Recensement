<?php

/* RecensementBundle:Default:pdf.html.twig */
class __TwigTemplate_d48fb5bf60e2739fe3cbfdd282eeeb3a7a09d01de05c087f8cc1f3201628ab47 extends Twig_Template
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
        echo "<html>
<head>
    <style>

        /* Pour améliorer un peu la lisibilité on ajoute une marge au corps de
         * texte. Ca aurait pu être fait en agrandissant les marges au niveau
         * de la page mais je trouve qu'utiliser un div dédié pour le contenu
         * est cohérent */
        #content {
            margin: 25px;
        }

        /* On teste quelques d'options css différentes */
        h1 {
            text-transform: uppercase;
            text-align: center;
            font-weight: bold
        }

        h2 {
            font-style: italic;
            font-weight: bold;
            border: solid 1px #ccc;
        }

        /* On met même en place un système de colonnes pour tester les float */
        .col-25, .col-75 {
            float: left;
        }

        .col-25 {
            width: 25%;
        }

        .col-75 {
            width: 75%;
        }

        .row {
            clear: both;
        }
    </style>
</head>
<body>

<!-- Maintenant on rempli le document -->
<div id=\"content\">
    <h1>Habitant</h1>
    <h2>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "nom", array()), "html", null, true);
        echo "</h2>
    <h2>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "prenom", array()), "html", null, true);
        echo "</h2>
    <h2>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "sexe", array()), "html", null, true);
        echo "</h2>
    ";
        // line 52
        if (($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "sexe", array()) == "1")) {
            // line 53
            echo "        <h2>Homme</h2>
    ";
        } else {
            // line 55
            echo "        <h2>Femme</h2>
    ";
        }
        // line 57
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "dateNaissance", array()), "d/m/Y"), "html", null, true);
        echo "</h2>
    <h2>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "telephone", array()), "html", null, true);
        echo "</h2>
    <h2>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "adresse", array()), "html", null, true);
        echo "</h2>
    <h2>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "zone", array()), "html", null, true);
        echo "</h2>
</div>
<div id=\"content\">
    <h1>Pere</h1>
    <h2>";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent1"]) ? $context["parent1"] : $this->getContext($context, "parent1")), "nom", array()), "html", null, true);
        echo "</h2>
    <h2>";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent1"]) ? $context["parent1"] : $this->getContext($context, "parent1")), "prenom", array()), "html", null, true);
        echo "</h2>
    <h2>";
        // line 66
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["parent1"]) ? $context["parent1"] : $this->getContext($context, "parent1")), "dateNaissance", array()), "d/m/Y"), "html", null, true);
        echo "</h2>
</div>
<div id=\"content\">
    <h1>Mere</h1>
    <h2>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent2"]) ? $context["parent2"] : $this->getContext($context, "parent2")), "nom", array()), "html", null, true);
        echo "</h2>
    <h2>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent2"]) ? $context["parent2"] : $this->getContext($context, "parent2")), "prenom", array()), "html", null, true);
        echo "</h2>
    <h2>";
        // line 72
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["parent2"]) ? $context["parent2"] : $this->getContext($context, "parent2")), "dateNaissance", array()), "d/m/Y"), "html", null, true);
        echo "</h2>
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "RecensementBundle:Default:pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 72,  130 => 71,  126 => 70,  119 => 66,  115 => 65,  111 => 64,  104 => 60,  100 => 59,  96 => 58,  91 => 57,  87 => 55,  83 => 53,  81 => 52,  77 => 51,  73 => 50,  69 => 49,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
    <style>

        /* Pour améliorer un peu la lisibilité on ajoute une marge au corps de
         * texte. Ca aurait pu être fait en agrandissant les marges au niveau
         * de la page mais je trouve qu'utiliser un div dédié pour le contenu
         * est cohérent */
        #content {
            margin: 25px;
        }

        /* On teste quelques d'options css différentes */
        h1 {
            text-transform: uppercase;
            text-align: center;
            font-weight: bold
        }

        h2 {
            font-style: italic;
            font-weight: bold;
            border: solid 1px #ccc;
        }

        /* On met même en place un système de colonnes pour tester les float */
        .col-25, .col-75 {
            float: left;
        }

        .col-25 {
            width: 25%;
        }

        .col-75 {
            width: 75%;
        }

        .row {
            clear: both;
        }
    </style>
</head>
<body>

<!-- Maintenant on rempli le document -->
<div id=\"content\">
    <h1>Habitant</h1>
    <h2>{{ object.nom }}</h2>
    <h2>{{ object.prenom }}</h2>
    <h2>{{ object.sexe }}</h2>
    {% if object.sexe ==\"1\" %}
        <h2>Homme</h2>
    {% else %}
        <h2>Femme</h2>
    {% endif %}
    <h2>{{ object.dateNaissance|date('d/m/Y') }}</h2>
    <h2>{{ object.telephone }}</h2>
    <h2>{{ object.adresse }}</h2>
    <h2>{{ object.zone }}</h2>
</div>
<div id=\"content\">
    <h1>Pere</h1>
    <h2>{{ parent1.nom }}</h2>
    <h2>{{ parent1.prenom }}</h2>
    <h2>{{ parent1.dateNaissance|date('d/m/Y') }}</h2>
</div>
<div id=\"content\">
    <h1>Mere</h1>
    <h2>{{ parent2.nom }}</h2>
    <h2>{{ parent2.prenom }}</h2>
    <h2>{{ parent2.dateNaissance|date('d/m/Y') }}</h2>
</div>
</body>
</html>", "RecensementBundle:Default:pdf.html.twig", "C:\\wamp\\www\\recensement\\src\\Recensement\\RecensementBundle/Resources/views/Default/pdf.html.twig");
    }
}
