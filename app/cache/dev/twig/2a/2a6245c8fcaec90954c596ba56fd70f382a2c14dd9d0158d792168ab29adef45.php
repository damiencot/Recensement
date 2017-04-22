<?php

/* RecensementBundle:Default:Recense/modification.html.twig */
class __TwigTemplate_0ae800f5d5bb70a7559186fef884190352b463be76aa9bc0cc5f57fec3716f15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "RecensementBundle:Default:Recense/modification.html.twig", 1);
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
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "RecensementBundle:Default:Recense/modification.html.twig", 9)->display($context);
        // line 10
        echo "            </div>

            <div class=\"span9\">
                <h2>Information Recense</h2>
                <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                    <div class=\"accordion-inner\">
                        <div class=\"span4\">
                            <h4>Recense</h4>
                            <form method=\"POST\">
                                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formHabitants"]) ? $context["formHabitants"] : $this->getContext($context, "formHabitants")), 'widget');
        echo "
                                <button class=\"btn btn-primary\" type=\"submit\">Ajouter</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "RecensementBundle:Default:Recense/modification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 19,  39 => 10,  37 => 9,  31 => 5,  28 => 4,  11 => 1,);
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
                <h2>Information Recense</h2>
                <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                    <div class=\"accordion-inner\">
                        <div class=\"span4\">
                            <h4>Recense</h4>
                            <form method=\"POST\">
                                {{ form_widget(formHabitants) }}
                                <button class=\"btn btn-primary\" type=\"submit\">Ajouter</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
{% endblock %}
", "RecensementBundle:Default:Recense/modification.html.twig", "C:\\wamp\\www\\recensement\\src\\Recensement\\RecensementBundle/Resources/views/Default/Recense/modification.html.twig");
    }
}
