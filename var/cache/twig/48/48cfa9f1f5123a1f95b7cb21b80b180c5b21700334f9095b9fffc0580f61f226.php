<?php

/* layout.html.twig */
class __TwigTemplate_c20d28de04a4a7fcd816385474d98183882b5432e03557c19a3aa93c4591830b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" ng-app=\"libraryApp\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"Hairil\">

        <title>Perpustakaan Opsigo</title>

        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->getSourceContext()); })()), "asset_component", array()), "html", null, true);
        echo "bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->getSourceContext()); })()), "asset_component", array()), "html", null, true);
        echo "sb-admin-2/vendor/metisMenu/metisMenu.min.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 14, $this->getSourceContext()); })()), "asset_component", array()), "html", null, true);
        echo "sb-admin-2/dist/css/sb-admin-2.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->getSourceContext()); })()), "asset_component", array()), "html", null, true);
        echo "sb-admin-2/vendor/morrisjs/morris.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 16, $this->getSourceContext()); })()), "asset_component", array()), "html", null, true);
        echo "font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">

        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 18, $this->getSourceContext()); })()), "asset_css", array()), "html", null, true);
        echo "main.css\" rel=\"stylesheet\">

        <script>
            var base_url = \"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 21, $this->getSourceContext()); })()), "base_url", array()), "html", null, true);
        echo "\";
        </script>    
    </head>
    <body>
        <div id=\"wrapper\">
            <!-- Navigation -->
            <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"index.html\">Perpustakaan Opsigo</a>
                </div>

                <div class=\"navbar-default sidebar\" role=\"navigation\">
                    <div class=\"sidebar-nav navbar-collapse\">
                        <ul class=\"nav\" id=\"side-menu\">
                            <li class=\"sidebar-search\">
                                <div class=\"input-group custom-search-form\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                                    <span class=\"input-group-btn\">
                                        <button class=\"btn btn-default\" type=\"button\">
                                            <i class=\"fa fa-search\"></i>
                                        </button>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\"><i class=\"fa fa-desktop m-r\"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("book");
        echo "\"><i class=\"fa fa-book m-r\"></i> Buku</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rent");
        echo "\"><i class=\"fa fa-file-o m-r\"></i> Penyewaan</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("report");
        echo "\"><i class=\"fa fa-bar-chart-o m-r\"></i> Laporan</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id=\"page-wrapper\">
            ";
        // line 71
        $this->displayBlock('content', $context, $blocks);
        // line 72
        echo "        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 78, $this->getSourceContext()); })()), "asset_component", array()), "html", null, true);
        echo "angular/angular.min.js\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 79, $this->getSourceContext()); })()), "asset_component", array()), "html", null, true);
        echo "jquery/dist/jquery.min.js\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 80, $this->getSourceContext()); })()), "asset_component", array()), "html", null, true);
        echo "bootstrap/dist/js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 81, $this->getSourceContext()); })()), "asset_component", array()), "html", null, true);
        echo "sb-admin-2/vendor/metisMenu/metisMenu.min.js\"></script>
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 82, $this->getSourceContext()); })()), "asset_component", array()), "html", null, true);
        echo "sb-admin-2/vendor/raphael/raphael.min.js\"></script>
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 83, $this->getSourceContext()); })()), "asset_component", array()), "html", null, true);
        echo "sb-admin-2/vendor/morrisjs/morris.min.js\"></script>
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 84, $this->getSourceContext()); })()), "asset_component", array()), "html", null, true);
        echo "sb-admin-2/data/morris-data.js\"></script>
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 85, $this->getSourceContext()); })()), "asset_component", array()), "html", null, true);
        echo "sb-admin-2/dist/js/sb-admin-2.js\"></script>
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 86, $this->getSourceContext()); })()), "asset_component", array()), "html", null, true);
        echo "gasparesganga-jquery-loading-overlay/src/loadingoverlay.min.js\"></script>

    <!-- Angular -->
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 89, $this->getSourceContext()); })()), "asset_app", array()), "html", null, true);
        echo "app.js\"></script>
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 90, $this->getSourceContext()); })()), "asset_app", array()), "html", null, true);
        echo "Service/LibraryService.js\"></script>
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 91, $this->getSourceContext()); })()), "asset_app", array()), "html", null, true);
        echo "Controller/BookController.js\"></script>

    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 93, $this->getSourceContext()); })()), "asset_js", array()), "html", null, true);
        echo "main.js\"></script>

</body>

</html>
";
    }

    // line 71
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 71,  186 => 93,  181 => 91,  177 => 90,  173 => 89,  167 => 86,  163 => 85,  159 => 84,  155 => 83,  151 => 82,  147 => 81,  143 => 80,  139 => 79,  135 => 78,  127 => 72,  125 => 71,  112 => 61,  106 => 58,  100 => 55,  94 => 52,  60 => 21,  54 => 18,  49 => 16,  45 => 15,  41 => 14,  37 => 13,  33 => 12,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\" ng-app=\"libraryApp\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"Hairil\">

        <title>Perpustakaan Opsigo</title>

        <link href=\"{{app.asset_component}}bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"{{app.asset_component}}sb-admin-2/vendor/metisMenu/metisMenu.min.css\" rel=\"stylesheet\">
        <link href=\"{{app.asset_component}}sb-admin-2/dist/css/sb-admin-2.css\" rel=\"stylesheet\">
        <link href=\"{{app.asset_component}}sb-admin-2/vendor/morrisjs/morris.css\" rel=\"stylesheet\">
        <link href=\"{{app.asset_component}}font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">

        <link href=\"{{app.asset_css}}main.css\" rel=\"stylesheet\">

        <script>
            var base_url = \"{{app.base_url}}\";
        </script>    
    </head>
    <body>
        <div id=\"wrapper\">
            <!-- Navigation -->
            <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"index.html\">Perpustakaan Opsigo</a>
                </div>

                <div class=\"navbar-default sidebar\" role=\"navigation\">
                    <div class=\"sidebar-nav navbar-collapse\">
                        <ul class=\"nav\" id=\"side-menu\">
                            <li class=\"sidebar-search\">
                                <div class=\"input-group custom-search-form\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                                    <span class=\"input-group-btn\">
                                        <button class=\"btn btn-default\" type=\"button\">
                                            <i class=\"fa fa-search\"></i>
                                        </button>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <a href=\"{{path('home')}}\"><i class=\"fa fa-desktop m-r\"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href=\"{{path('book')}}\"><i class=\"fa fa-book m-r\"></i> Buku</a>
                            </li>
                            <li>
                                <a href=\"{{path('rent')}}\"><i class=\"fa fa-file-o m-r\"></i> Penyewaan</a>
                            </li>
                            <li>
                                <a href=\"{{path('report')}}\"><i class=\"fa fa-bar-chart-o m-r\"></i> Laporan</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id=\"page-wrapper\">
            {% block content %}{% endblock %}
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <script src=\"{{app.asset_component}}angular/angular.min.js\"></script>
    <script src=\"{{app.asset_component}}jquery/dist/jquery.min.js\"></script>
    <script src=\"{{app.asset_component}}bootstrap/dist/js/bootstrap.min.js\"></script>
    <script src=\"{{app.asset_component}}sb-admin-2/vendor/metisMenu/metisMenu.min.js\"></script>
    <script src=\"{{app.asset_component}}sb-admin-2/vendor/raphael/raphael.min.js\"></script>
    <script src=\"{{app.asset_component}}sb-admin-2/vendor/morrisjs/morris.min.js\"></script>
    <script src=\"{{app.asset_component}}sb-admin-2/data/morris-data.js\"></script>
    <script src=\"{{app.asset_component}}sb-admin-2/dist/js/sb-admin-2.js\"></script>
    <script src=\"{{app.asset_component}}gasparesganga-jquery-loading-overlay/src/loadingoverlay.min.js\"></script>

    <!-- Angular -->
    <script src=\"{{app.asset_app}}app.js\"></script>
    <script src=\"{{app.asset_app}}Service/LibraryService.js\"></script>
    <script src=\"{{app.asset_app}}Controller/BookController.js\"></script>

    <script src=\"{{app.asset_js}}main.js\"></script>

</body>

</html>
", "layout.html.twig", "/Applications/MAMP/htdocs/perpustakaan/templates/layout.html.twig");
    }
}
