<?php

/* index.html.twig */
class __TwigTemplate_659d12cfc737a6a9a3ad7a328cb2612a20a706113b26391a436f7da78790b00b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            Welcome
        </div>
        <!-- /.col-lg-12 -->
    </div>

";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block content %}
    <div class=\"row\">
        <div class=\"col-lg-12\">
            Welcome
        </div>
        <!-- /.col-lg-12 -->
    </div>

{% endblock %}
", "index.html.twig", "/Applications/MAMP/htdocs/perpustakaan/templates/index.html.twig");
    }
}
