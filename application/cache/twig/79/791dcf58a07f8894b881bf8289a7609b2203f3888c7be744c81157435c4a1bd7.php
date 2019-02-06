<?php

/* templates/header.twig */
class __TwigTemplate_2a8ac1722abe6e4f27732f51e46cff49a87753405855acd8dd544f192a75fe0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pl\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>SK-AUDIO</title>

    <!-- Bootstrap Core CSS -->

    <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\" />

    <!-- MetisMenu CSS -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "vendor/metisMenu/metisMenu.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "dist/css/sb-admin-2.css\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">

    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css\" />


    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <script src=\"http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/pl.js\"></script>



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
                <a class=\"navbar-brand\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "\">SK-AUDIO</a>
            </div>
            <!-- /.navbar-header -->

            <ul class=\"nav navbar-top-links navbar-right\">
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                        <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu dropdown-user\">
                        <li><a href=\"#\"><i class=\"fa fa-user fa-fw\"></i> Profil użytkownika</a>
                        </li>
                        <li class=\"divider\"></li>
                        <li><a href=\"login/logout\"><i class=\"fa fa-sign-out fa-fw\"></i> Wyloguj</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class=\"navbar-default sidebar\" role=\"navigation\">
                <div class=\"sidebar-nav navbar-collapse\">
                    <ul class=\"nav\" id=\"side-menu\">
                        <li>
                            <a href=\"";
        // line 80
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "\"><i class=\"fa fa-dashboard fa-fw\"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 83
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "equipment\"><i class=\"fa fa-plug fa-fw\"></i> Sprzęt<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\">
                                <li>
                                    <a href=\"";
        // line 86
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "equipment\">Przeglądaj</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 89
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "equipment/add\">Dodaj</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-sticky-note fa-fw\"></i> Wydarzenia<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\">
                                <li>
                                    <a href=\"";
        // line 98
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "orders\">Przeglądaj</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 101
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "orders/add\">Dodaj</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-users fa-fw\"></i> Klienci<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\">
                                <li>
                                    <a href=\"";
        // line 110
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "clients\">Przeglądaj</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 113
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "clients/add\">Dodaj</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-user fa-fw\"></i> Użytkownicy<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\">
                                <li>
                                    <a href=\"";
        // line 122
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "users\">Przeglądaj</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 125
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "users/add\">Dodaj</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>";
    }

    public function getTemplateName()
    {
        return "templates/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 125,  178 => 122,  166 => 113,  160 => 110,  148 => 101,  142 => 98,  130 => 89,  124 => 86,  118 => 83,  112 => 80,  83 => 54,  51 => 25,  45 => 22,  39 => 19,  19 => 1,);
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
<html lang=\"pl\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>SK-AUDIO</title>

    <!-- Bootstrap Core CSS -->

    <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\" />

    <!-- MetisMenu CSS -->
    <link href=\"{{ base_url() }}vendor/metisMenu/metisMenu.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"{{ base_url() }}dist/css/sb-admin-2.css\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"{{ base_url() }}vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">

    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css\" />


    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <script src=\"http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/pl.js\"></script>



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
                <a class=\"navbar-brand\" href=\"{{ base_url }}\">SK-AUDIO</a>
            </div>
            <!-- /.navbar-header -->

            <ul class=\"nav navbar-top-links navbar-right\">
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                        <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu dropdown-user\">
                        <li><a href=\"#\"><i class=\"fa fa-user fa-fw\"></i> Profil użytkownika</a>
                        </li>
                        <li class=\"divider\"></li>
                        <li><a href=\"login/logout\"><i class=\"fa fa-sign-out fa-fw\"></i> Wyloguj</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class=\"navbar-default sidebar\" role=\"navigation\">
                <div class=\"sidebar-nav navbar-collapse\">
                    <ul class=\"nav\" id=\"side-menu\">
                        <li>
                            <a href=\"{{ base_url() }}\"><i class=\"fa fa-dashboard fa-fw\"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href=\"{{ base_url() }}equipment\"><i class=\"fa fa-plug fa-fw\"></i> Sprzęt<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\">
                                <li>
                                    <a href=\"{{ base_url() }}equipment\">Przeglądaj</a>
                                </li>
                                <li>
                                    <a href=\"{{ base_url() }}equipment/add\">Dodaj</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-sticky-note fa-fw\"></i> Wydarzenia<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\">
                                <li>
                                    <a href=\"{{ base_url() }}orders\">Przeglądaj</a>
                                </li>
                                <li>
                                    <a href=\"{{ base_url() }}orders/add\">Dodaj</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-users fa-fw\"></i> Klienci<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\">
                                <li>
                                    <a href=\"{{ base_url() }}clients\">Przeglądaj</a>
                                </li>
                                <li>
                                    <a href=\"{{ base_url() }}clients/add\">Dodaj</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href=\"#\"><i class=\"fa fa-user fa-fw\"></i> Użytkownicy<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-second-level\">
                                <li>
                                    <a href=\"{{ base_url() }}users\">Przeglądaj</a>
                                </li>
                                <li>
                                    <a href=\"{{ base_url() }}users/add\">Dodaj</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>", "templates/header.twig", "C:\\xampp\\htdocs\\projekt\\application\\views\\templates\\header.twig");
    }
}
