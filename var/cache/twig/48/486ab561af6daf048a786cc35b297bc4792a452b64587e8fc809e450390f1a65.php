<?php

/* book.html.twig */
class __TwigTemplate_ecfdcee8884cd133bc1ba03bfa778345bf232596a8c3429b0d3b71964ce87a1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "book.html.twig", 1);
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
        echo "    <div ng-controller=\"BookController\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        Data Book
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"container m-b\">
                            <div class=\"row\">
                                    <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#addBookModal\">Tambah buku</button>
                            </div>
                        </div>
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped table-bordered table-hover\">
                                <thead>
                                    <tr>
                                        <th>ISBN</th>
                                        <th>Title</th>
                                        <th>Genre</th>
                                        <th>Penerbit</th>
                                        <th>Penulis</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr ng-repeat=\"row in books\">
                                        <th>{[{ row.isbn }]}</th>
                                        <th>{[{ row.title }]} ({[{row.year}]})</th>
                                        <th>{[{ row.genre_name }]}</th>
                                        <th>{[{ row.publisher_name }]}</th>
                                        <th>{[{ row.author_name }]}</th>
                                        <th>
                                            <a href=\"\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#addBookModal\" ng-click=\"parseDataBook(row)\">Edit Buku</a>
                                            <a href=\"\" class=\"btn btn-danger deleteBookButton\" ng-click=\"deleteBook(row)\">Hapus</a>
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class=\"modal fade\" id=\"addBookModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <h4 class=\"modal-title\" id=\"myModalLabel\">Add Book</h4>
                    </div>
                    ";
        // line 107
        echo "
                        <div class=\"modal-body\">
                            <form id=\"addBookForm\">
                                <div class=\"form-group\">
                                    <label for=\"title\">ISBN</label>
                                    <div class=\"input-group\">
                                        <input name=\"isbn\" type=\"text\" class=\"form-control\" placeholder=\"ISBN\" ng-model=\"book.isbn\">
                                        <span class=\"input-group-btn\">
                                            <a href=\"#\" class=\"btn btn-default check-isbn\" type=\"button\">Cek ISBN</a>
                                        </span>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"title\">Judul Buku</label>
                                    <input name=\"title\" type=\"text\" class=\"form-control\" placeholder=\"Judul Buku\" ng-model=\"book.title\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"publisher_id\">Penerbit</label>
                                    <select class=\"form-control\" name=\"publisher_id\" ng-model=\"book.publisher_id\">
                                        <option ng-repeat=\"publisher in publishers\" value=\"{[{publisher.id}]}\">{[{publisher.name}]}</option>
                                    </select>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"author_id\">Penulis</label>
                                    <select class=\"form-control\" name=\"author_id\" ng-model=\"book.author_id\">
                                        <option ng-repeat=\"author in authors\" value=\"{[{author.id}]}\">{[{author.name}]}</option>
                                    </select>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"genre_id\">Genre</label>
                                    <select class=\"form-control\" name=\"genre\" ng-model=\"book.genre_id\">
                                        <option ng-repeat=\"genre in genres\" value=\"{[{genre.id}]}\">{[{genre.name}]}</option>
                                    </select>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-6\">
                                        <div class=\"form-group\">
                                            <label for=\"number_of_page\">Jumlah Halaman</label>
                                            <input name=\"number\" type=\"number\" class=\"form-control\" placeholder=\"Jumlah Halaman\" ng-model=\"book.number_of_page\">
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6\">
                                        <div class=\"form-group\">
                                            <label for=\"year\">Tahun Terbit</label>
                                            <input name=\"year\" type=\"year\" class=\"form-control\" placeholder=\"Tahun Terbit\" maxlength=\"4\" minlength=\"4\" ng-model=\"book.year\">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    ";
        echo "
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                        <button type=\"button\" class=\"btn btn-primary addBookButton\">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 107,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block content %}
    <div ng-controller=\"BookController\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        Data Book
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"container m-b\">
                            <div class=\"row\">
                                    <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#addBookModal\">Tambah buku</button>
                            </div>
                        </div>
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped table-bordered table-hover\">
                                <thead>
                                    <tr>
                                        <th>ISBN</th>
                                        <th>Title</th>
                                        <th>Genre</th>
                                        <th>Penerbit</th>
                                        <th>Penulis</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr ng-repeat=\"row in books\">
                                        <th>{[{ row.isbn }]}</th>
                                        <th>{[{ row.title }]} ({[{row.year}]})</th>
                                        <th>{[{ row.genre_name }]}</th>
                                        <th>{[{ row.publisher_name }]}</th>
                                        <th>{[{ row.author_name }]}</th>
                                        <th>
                                            <a href=\"\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#addBookModal\" ng-click=\"parseDataBook(row)\">Edit Buku</a>
                                            <a href=\"\" class=\"btn btn-danger deleteBookButton\" ng-click=\"deleteBook(row)\">Hapus</a>
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class=\"modal fade\" id=\"addBookModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <h4 class=\"modal-title\" id=\"myModalLabel\">Add Book</h4>
                    </div>
                    {% verbatim %}
                        <div class=\"modal-body\">
                            <form id=\"addBookForm\">
                                <div class=\"form-group\">
                                    <label for=\"title\">ISBN</label>
                                    <div class=\"input-group\">
                                        <input name=\"isbn\" type=\"text\" class=\"form-control\" placeholder=\"ISBN\" ng-model=\"book.isbn\">
                                        <span class=\"input-group-btn\">
                                            <a href=\"#\" class=\"btn btn-default check-isbn\" type=\"button\">Cek ISBN</a>
                                        </span>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"title\">Judul Buku</label>
                                    <input name=\"title\" type=\"text\" class=\"form-control\" placeholder=\"Judul Buku\" ng-model=\"book.title\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"publisher_id\">Penerbit</label>
                                    <select class=\"form-control\" name=\"publisher_id\" ng-model=\"book.publisher_id\">
                                        <option ng-repeat=\"publisher in publishers\" value=\"{[{publisher.id}]}\">{[{publisher.name}]}</option>
                                    </select>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"author_id\">Penulis</label>
                                    <select class=\"form-control\" name=\"author_id\" ng-model=\"book.author_id\">
                                        <option ng-repeat=\"author in authors\" value=\"{[{author.id}]}\">{[{author.name}]}</option>
                                    </select>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"genre_id\">Genre</label>
                                    <select class=\"form-control\" name=\"genre\" ng-model=\"book.genre_id\">
                                        <option ng-repeat=\"genre in genres\" value=\"{[{genre.id}]}\">{[{genre.name}]}</option>
                                    </select>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-6\">
                                        <div class=\"form-group\">
                                            <label for=\"number_of_page\">Jumlah Halaman</label>
                                            <input name=\"number\" type=\"number\" class=\"form-control\" placeholder=\"Jumlah Halaman\" ng-model=\"book.number_of_page\">
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6\">
                                        <div class=\"form-group\">
                                            <label for=\"year\">Tahun Terbit</label>
                                            <input name=\"year\" type=\"year\" class=\"form-control\" placeholder=\"Tahun Terbit\" maxlength=\"4\" minlength=\"4\" ng-model=\"book.year\">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    {% endverbatim %}
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                        <button type=\"button\" class=\"btn btn-primary addBookButton\">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}
", "book.html.twig", "/Applications/MAMP/htdocs/perpustakaan/templates/book.html.twig");
    }
}
