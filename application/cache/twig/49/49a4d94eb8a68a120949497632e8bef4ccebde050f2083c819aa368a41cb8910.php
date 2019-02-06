<?php

/* /pages/add_client.twig */
class __TwigTemplate_a590d96475db9bdaf6a188b702a01fea06cbb76209bd542ab08431e94c56b495 extends Twig_Template
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
        $this->loadTemplate("templates/header.twig", "/pages/add_client.twig", 1)->display($context);
        // line 2
        echo "
<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Dodaj nowego klienta</h1>
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
                <form role=\"form\" method=\"post\" id=\"add_new_client\" action=\"";
        // line 20
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "clients/add_client\">
                    <div class=\"form-group\">
                        <label>Nazwa</label>
                        <input class=\"form-control\" type=\"text\" id=\"name\" name=\"name\" placeholder=\"Nazwa\">
                    </div>
                    <div class=\"form-group\">
                        <label>Adres (ulica)</label>
                        <input class=\"form-control\" type=\"text\" id=\"address\" name=\"address\" placeholder=\"Adres\">
                    </div>
                    <div class=\"form-group\">
                        <label>Miejscowość</label>
                        <input class=\"form-control\" type=\"text\" id=\"place\" name=\"place\" placeholder=\"Miejscowość\">
                    </div>
                    <div class=\"form-group\">
                        <label>Kod pocztowy</label>
                        <input class=\"form-control\" type=\"text\" id=\"postal_code\" name=\"postal_code\" placeholder=\"Kod pocztowy\">
                    </div>
                    <div class=\"form-group\">
                        <label>Numer telefonu</label>
                        <input class=\"form-control\" type=\"phone\" id=\"phone\" name=\"phone\" placeholder=\"Numer telefonu\">
                    </div>
                    <div class=\"form-group\">
                        <label>Email</label>
                        <input class=\"form-control\" type=\"email\" id=\"email\" name=\"email\" placeholder=\"Email\">
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
        $this->loadTemplate("templates/footer.twig", "/pages/add_client.twig", 57)->display($context);
    }

    public function getTemplateName()
    {
        return "/pages/add_client.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 57,  56 => 20,  48 => 14,  45 => 13,  39 => 11,  33 => 9,  30 => 8,  28 => 7,  21 => 2,  19 => 1,);
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
                <h1 class=\"page-header\">Dodaj nowego klienta</h1>
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
                <form role=\"form\" method=\"post\" id=\"add_new_client\" action=\"{{ base_url() }}clients/add_client\">
                    <div class=\"form-group\">
                        <label>Nazwa</label>
                        <input class=\"form-control\" type=\"text\" id=\"name\" name=\"name\" placeholder=\"Nazwa\">
                    </div>
                    <div class=\"form-group\">
                        <label>Adres (ulica)</label>
                        <input class=\"form-control\" type=\"text\" id=\"address\" name=\"address\" placeholder=\"Adres\">
                    </div>
                    <div class=\"form-group\">
                        <label>Miejscowość</label>
                        <input class=\"form-control\" type=\"text\" id=\"place\" name=\"place\" placeholder=\"Miejscowość\">
                    </div>
                    <div class=\"form-group\">
                        <label>Kod pocztowy</label>
                        <input class=\"form-control\" type=\"text\" id=\"postal_code\" name=\"postal_code\" placeholder=\"Kod pocztowy\">
                    </div>
                    <div class=\"form-group\">
                        <label>Numer telefonu</label>
                        <input class=\"form-control\" type=\"phone\" id=\"phone\" name=\"phone\" placeholder=\"Numer telefonu\">
                    </div>
                    <div class=\"form-group\">
                        <label>Email</label>
                        <input class=\"form-control\" type=\"email\" id=\"email\" name=\"email\" placeholder=\"Email\">
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

{% include \"templates/footer.twig\" %}", "/pages/add_client.twig", "C:\\xampp\\htdocs\\projekt\\application\\views\\pages\\add_client.twig");
    }
}
