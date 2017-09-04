<?php

/* errors/404.html.twig */
class __TwigTemplate_3b25d5b02677e32368af6aece42a82fbf053611c3bec7a1da93d2787e826c41e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "errors/404.html.twig", 1);
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
        echo "    Page not found.
";
    }

    public function getTemplateName()
    {
        return "errors/404.html.twig";
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
        return new Twig_Source("", "errors/404.html.twig", "/Applications/MAMP/htdocs/perpustakaan/templates/errors/404.html.twig");
    }
}
