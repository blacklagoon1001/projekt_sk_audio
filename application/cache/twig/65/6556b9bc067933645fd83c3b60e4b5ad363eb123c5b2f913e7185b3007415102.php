<?php

/* /pages/add_user.twig */
class __TwigTemplate_91761e32017167c27259f7ddd91688a4a85feac61e5f15fb5e34c7fc5c1ffe7a extends Twig_Template
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
        $this->loadTemplate("templates/header.twig", "/pages/add_user.twig", 1)->display($context);
        // line 2
        echo "
<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Dodaj nowego użytkownika</h1>
                ";
        // line 7
        if (($context["message"] ?? null)) {
            // line 8
            echo "                    ";
            if (($this->getAttribute(($context["message"] ?? null), "success", []) == true)) {
                // line 9
                echo "                        <div class=\"alert alert-success\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["message"] ?? null), "message", []), "html", null, true);
                echo "</div>
                    ";
            } else {
                // line 11
                echo "                        <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["message"] ?? null), "message", []), "html", null, true);
                echo "</div>
                    ";
            }
            // line 13
            echo "                ";
        }
        // line 14
        echo "            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <form id=\"add_new_user\" role=\"form\" method=\"post\" action=\"";
        // line 20
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "users/add_user\">
                    <div class=\"form-group\">
                        <label>Imię i nazwisko</label>
                        <input class=\"form-control\" type=\"text\" id=\"name_surname\" name=\"name_surname\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "name_surname", []), "html", null, true);
        echo "\" placeholder=\"Imię i nazwisko\">
                    </div>
                    <div class=\"form-group\">
                        <label>Login</label>
                        <input class=\"form-control\" type=\"text\" id=\"name\" name=\"name\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "name", []), "html", null, true);
        echo "\" placeholder=\"Login\">
                    </div>
                    <div class=\"form-group\">
                        <label>Email</label>
                        <input class=\"form-control\" type=\"email\" id=\"email\" name=\"email\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "email", []), "html", null, true);
        echo "\" placeholder=\"Email\">
                    </div>
                    <div class=\"form-group\">
                        <label>Hasło</label>
                        <input class=\"form-control\" type=\"password\" id=\"password\" name=\"password\" placeholder=\"Hasło\">
                    </div>
                    <div class=\"form-group\">
                        <label>Powtórz hasło</label>
                        <input class=\"form-control\" type=\"password\" id=\"password2\" name=\"password2\" placeholder=\"Powtórz hasło\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Zapisz</button>
                    <button type=\"reset\" class=\"btn btn-default\">Wyczyść</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

";
        // line 53
        $this->loadTemplate("templates/footer.twig", "/pages/add_user.twig", 53)->display($context);
    }

    public function getTemplateName()
    {
        return "/pages/add_user.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 53,  76 => 31,  69 => 27,  62 => 23,  56 => 20,  48 => 14,  45 => 13,  39 => 11,  33 => 9,  30 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include \"templates/header.twig\" %}

<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Dodaj nowego użytkownika</h1>
                {% if message %}
                    {% if message.success == true %}
                        <div class=\"alert alert-success\">{{ message.message }}</div>
                    {% else %}
                        <div class=\"alert alert-danger\">{{ message.message }}</div>
                    {% endif %}
                {% endif %}
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <form id=\"add_new_user\" role=\"form\" method=\"post\" action=\"{{ base_url() }}users/add_user\">
                    <div class=\"form-group\">
                        <label>Imię i nazwisko</label>
                        <input class=\"form-control\" type=\"text\" id=\"name_surname\" name=\"name_surname\" value=\"{{ user.name_surname }}\" placeholder=\"Imię i nazwisko\">
                    </div>
                    <div class=\"form-group\">
                        <label>Login</label>
                        <input class=\"form-control\" type=\"text\" id=\"name\" name=\"name\" value=\"{{ user.name }}\" placeholder=\"Login\">
                    </div>
                    <div class=\"form-group\">
                        <label>Email</label>
                        <input class=\"form-control\" type=\"email\" id=\"email\" name=\"email\" value=\"{{ user.email }}\" placeholder=\"Email\">
                    </div>
                    <div class=\"form-group\">
                        <label>Hasło</label>
                        <input class=\"form-control\" type=\"password\" id=\"password\" name=\"password\" placeholder=\"Hasło\">
                    </div>
                    <div class=\"form-group\">
                        <label>Powtórz hasło</label>
                        <input class=\"form-control\" type=\"password\" id=\"password2\" name=\"password2\" placeholder=\"Powtórz hasło\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Zapisz</button>
                    <button type=\"reset\" class=\"btn btn-default\">Wyczyść</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

{% include \"templates/footer.twig\" %}", "/pages/add_user.twig", "C:\\xampp\\htdocs\\projekt\\application\\views\\pages\\add_user.twig");
    }
}
