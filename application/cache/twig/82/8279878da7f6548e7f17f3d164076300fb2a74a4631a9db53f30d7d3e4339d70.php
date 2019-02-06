<?php

/* /pages/edit_client.twig */
class __TwigTemplate_18e8377d9d1710e831abea16c38415d0fc984be5cb1b4a7ba81c2d148b35978b extends Twig_Template
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
        $this->loadTemplate("templates/header.twig", "/pages/edit_client.twig", 1)->display($context);
        // line 2
        echo "
<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Edytuj dane klienta - ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? null), "name", []), "html", null, true);
        echo "</h1>
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
                <form role=\"form\" method=\"post\" action=\"";
        // line 20
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "clients/edit_client/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? null), "client_id", []), "html", null, true);
        echo "\">
                    <div class=\"form-group\">
                        <label>Nazwa</label>
                        <input class=\"form-control\" type=\"text\" id=\"name\" name=\"name\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? null), "name", []), "html", null, true);
        echo "\" placeholder=\"Nazwa\">
                    </div>
                    <div class=\"form-group\">
                        <label>Adres (ulica)</label>
                        <input class=\"form-control\" type=\"text\" id=\"address\" name=\"address\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? null), "address", []), "html", null, true);
        echo "\" placeholder=\"Adres\">
                    </div>
                    <div class=\"form-group\">
                        <label>Miejscowość</label>
                        <input class=\"form-control\" type=\"text\" id=\"place\" name=\"place\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? null), "place", []), "html", null, true);
        echo "\" placeholder=\"Miejscowość\">
                    </div>
                    <div class=\"form-group\">
                        <label>Kod pocztowy</label>
                        <input class=\"form-control\" type=\"text\" id=\"postal_code\" name=\"postal_code\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? null), "postal_code", []), "html", null, true);
        echo "\" placeholder=\"Kod pocztowy\">
                    </div>
                    <div class=\"form-group\">
                        <label>Numer telefonu</label>
                        <input class=\"form-control\" type=\"phone\" id=\"phone\" name=\"phone\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? null), "phone", []), "html", null, true);
        echo "\" placeholder=\"Numer telefonu\">
                    </div>
                    <div class=\"form-group\">
                        <label>Email</label>
                        <input class=\"form-control\" type=\"email\" id=\"email\" name=\"email\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? null), "email", []), "html", null, true);
        echo "\" placeholder=\"Email\">
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
        // line 57
        $this->loadTemplate("templates/footer.twig", "/pages/edit_client.twig", 57)->display($context);
    }

    public function getTemplateName()
    {
        return "/pages/edit_client.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 57,  102 => 43,  95 => 39,  88 => 35,  81 => 31,  74 => 27,  67 => 23,  59 => 20,  51 => 14,  48 => 13,  42 => 11,  36 => 9,  33 => 8,  31 => 7,  27 => 6,  21 => 2,  19 => 1,);
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
                <h1 class=\"page-header\">Edytuj dane klienta - {{ client.name }}</h1>
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
                <form role=\"form\" method=\"post\" action=\"{{ base_url() }}clients/edit_client/{{ client.client_id }}\">
                    <div class=\"form-group\">
                        <label>Nazwa</label>
                        <input class=\"form-control\" type=\"text\" id=\"name\" name=\"name\" value=\"{{ client.name }}\" placeholder=\"Nazwa\">
                    </div>
                    <div class=\"form-group\">
                        <label>Adres (ulica)</label>
                        <input class=\"form-control\" type=\"text\" id=\"address\" name=\"address\" value=\"{{ client.address }}\" placeholder=\"Adres\">
                    </div>
                    <div class=\"form-group\">
                        <label>Miejscowość</label>
                        <input class=\"form-control\" type=\"text\" id=\"place\" name=\"place\" value=\"{{ client.place }}\" placeholder=\"Miejscowość\">
                    </div>
                    <div class=\"form-group\">
                        <label>Kod pocztowy</label>
                        <input class=\"form-control\" type=\"text\" id=\"postal_code\" name=\"postal_code\" value=\"{{ client.postal_code }}\" placeholder=\"Kod pocztowy\">
                    </div>
                    <div class=\"form-group\">
                        <label>Numer telefonu</label>
                        <input class=\"form-control\" type=\"phone\" id=\"phone\" name=\"phone\" value=\"{{ client.phone }}\" placeholder=\"Numer telefonu\">
                    </div>
                    <div class=\"form-group\">
                        <label>Email</label>
                        <input class=\"form-control\" type=\"email\" id=\"email\" name=\"email\" value=\"{{ client.email }}\" placeholder=\"Email\">
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

{% include \"templates/footer.twig\" %}", "/pages/edit_client.twig", "C:\\xampp\\htdocs\\projekt\\application\\views\\pages\\edit_client.twig");
    }
}
