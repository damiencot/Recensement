<?php

/* RecensementBundle:Default:recense/layout/presentation.html.twig */
class __TwigTemplate_482ab19c1db2399804458ac7ac8622bd101075342b3285d2825be200ce35e1f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "RecensementBundle:Default:recense/layout/presentation.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"container\">
        <div class=\"row\">

            <div class=\"span3\">
                ";
        // line 9
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "RecensementBundle:Default:recense/layout/presentation.html.twig", 9)->display($context);
        // line 10
        echo "            </div>

            <div class=\"span9\">

                <h2>Liste Recense</h2>
                <form>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Date Enregistrement</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["habitants"]) ? $context["habitants"] : $this->getContext($context, "habitants")));
        foreach ($context['_seq'] as $context["_key"] => $context["habitant"]) {
            // line 26
            echo "                            <tr>
                                <form action=\"\" method=\"get\">
                                    <td>
                                        ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["habitant"], "nom", array()), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["habitant"], "prenom", array()), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["habitant"], "dateEnregistrement", array()), "d/m/Y"), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pdf", array("id" => $this->getAttribute($context["habitant"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\"> Pdf</a>
                                        <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modification", array("id" => $this->getAttribute($context["habitant"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"> Modifier</a>
                                    </td>
                                </form>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habitant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                        </tbody>
                    </table>
                </form>
                <div class=\"navigation\">
                    ";
        // line 48
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["habitants"]) ? $context["habitants"] : $this->getContext($context, "habitants")));
        echo "
                </div>
            </div>


        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "RecensementBundle:Default:recense/layout/presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 48,  98 => 44,  87 => 39,  83 => 38,  77 => 35,  71 => 32,  65 => 29,  60 => 26,  56 => 25,  39 => 10,  37 => 9,  31 => 5,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout/layout.html.twig\" %}


{% block body %}
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"span3\">
                {% include '::modulesUsed/navigation.html.twig' %}
            </div>

            <div class=\"span9\">

                <h2>Liste Recense</h2>
                <form>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Date Enregistrement</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for habitant in habitants %}
                            <tr>
                                <form action=\"\" method=\"get\">
                                    <td>
                                        {{ habitant.nom }}
                                    </td>
                                    <td>
                                        {{ habitant.prenom }}
                                    </td>
                                    <td>
                                        {{ habitant.dateEnregistrement|date('d/m/Y') }}
                                    </td>
                                    <td>
                                        <a href=\"{{ path('pdf', { 'id' : habitant.id }) }}\" class=\"btn btn-success\"> Pdf</a>
                                        <a href=\"{{ path('modification', { 'id' : habitant.id }) }}\" class=\"btn btn-primary\"> Modifier</a>
                                    </td>
                                </form>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </form>
                <div class=\"navigation\">
                    {{ knp_pagination_render(habitants) }}
                </div>
            </div>


        </div>
    </div>
{% endblock %}
", "RecensementBundle:Default:recense/layout/presentation.html.twig", "C:\\wamp\\www\\recensement\\src\\Recensement\\RecensementBundle/Resources/views/Default/recense/layout/presentation.html.twig");
    }
}
