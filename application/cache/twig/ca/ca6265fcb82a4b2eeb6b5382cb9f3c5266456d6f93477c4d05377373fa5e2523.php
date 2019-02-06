<?php

/* /pages/login.twig */
class __TwigTemplate_4bdb9ea574fcfb922c15eb59cb95d91e6289461c355b4d84626d32c4a01c462c extends Twig_Template
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
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- MetisMenu CSS -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "vendor/metisMenu/metisMenu.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "dist/css/sb-admin-2.css\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4\">
            <div class=\"login-panel panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Zaloguj się</h3>
                </div>
                <div class=\"panel-body\">
                    <form role=\"form\" action=\"";
        // line 45
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "login/user_login_process\" method=\"post\">
                        <fieldset>
                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"Login\" name=\"login\" type=\"text\" autofocus>
                            </div>
                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"Hasło\" name=\"password\" type=\"password\" value=\"\">
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <button type=\"submit\" class=\"btn btn-lg btn-success btn-block\">Zaloguj</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src=\"";
        // line 64
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "vendor/jquery/jquery.min.js\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "vendor/bootstrap/js/bootstrap.min.js\"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "vendor/metisMenu/metisMenu.min.js\"></script>

<!-- Custom Theme JavaScript -->
<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "dist/js/sb-admin-2.js\"></script>

</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "/pages/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 73,  111 => 70,  105 => 67,  99 => 64,  77 => 45,  53 => 24,  47 => 21,  41 => 18,  35 => 15,  19 => 1,);
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
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"{{ base_url() }}vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- MetisMenu CSS -->
    <link href=\"{{ base_url() }}vendor/metisMenu/metisMenu.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"{{ base_url() }}dist/css/sb-admin-2.css\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"{{ base_url() }}vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4\">
            <div class=\"login-panel panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Zaloguj się</h3>
                </div>
                <div class=\"panel-body\">
                    <form role=\"form\" action=\"{{ base_url() }}login/user_login_process\" method=\"post\">
                        <fieldset>
                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"Login\" name=\"login\" type=\"text\" autofocus>
                            </div>
                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"Hasło\" name=\"password\" type=\"password\" value=\"\">
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <button type=\"submit\" class=\"btn btn-lg btn-success btn-block\">Zaloguj</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src=\"{{ base_url() }}vendor/jquery/jquery.min.js\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"{{ base_url() }}vendor/bootstrap/js/bootstrap.min.js\"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src=\"{{ base_url() }}vendor/metisMenu/metisMenu.min.js\"></script>

<!-- Custom Theme JavaScript -->
<script src=\"{{ base_url() }}dist/js/sb-admin-2.js\"></script>

</body>

</html>
", "/pages/login.twig", "C:\\xampp\\htdocs\\projekt\\application\\views\\pages\\login.twig");
    }
}
