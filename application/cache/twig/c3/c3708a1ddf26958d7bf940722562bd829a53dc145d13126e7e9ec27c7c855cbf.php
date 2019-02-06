<?php

/* /pages/clients.twig */
class __TwigTemplate_ef05166c3b13fa06cd7a65836bed316a0df7dafce0a0d18ebdd78d9216d8858e extends Twig_Template
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
        $this->loadTemplate("templates/header.twig", "/pages/clients.twig", 1)->display($context);
        // line 2
        echo "
<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Klienci</h1>
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
                <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
                        <thead>
                        <tr>
                            <th>Nazwa</th>
                            <th>Adres</th>
                            <th>Telefon</th>
                            <th>Email</th>
                            <th>Akcje</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 33
            echo "                            <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "name", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "address", []), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "postal_code", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "place", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "phone", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "email", []), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "clients/edit/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "client_id", []), "html", null, true);
            echo "\"><i class=\"fa fa-edit fa-fw\"></i></a>
                                <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "clients/delete_client/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "client_id", []), "html", null, true);
            echo "\"><i class=\"fa fa-trash fa-fw\"></i></a>
                            </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        <!-- /.row -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

";
        // line 55
        $this->loadTemplate("templates/footer.twig", "/pages/clients.twig", 55)->display($context);
    }

    public function getTemplateName()
    {
        return "/pages/clients.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 55,  112 => 43,  100 => 39,  94 => 38,  89 => 36,  85 => 35,  77 => 34,  72 => 33,  68 => 32,  48 => 14,  45 => 13,  39 => 11,  33 => 9,  30 => 8,  28 => 7,  21 => 2,  19 => 1,);
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
                <h1 class=\"page-header\">Klienci</h1>
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
                <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
                        <thead>
                        <tr>
                            <th>Nazwa</th>
                            <th>Adres</th>
                            <th>Telefon</th>
                            <th>Email</th>
                            <th>Akcje</th>
                        </tr>
                        </thead>
                        <tbody>
                        {%  for client in clients %}
                            <td>{{ client.name }}</td>
                            <td>{{ client.address }}, {{ client.postal_code }} {{ client.place }}</td>
                            <td>{{ client.phone }}</td>
                            <td>{{ client.email }}</td>
                            <td>
                                <a href=\"{{ base_url }}clients/edit/{{ client.client_id }}\"><i class=\"fa fa-edit fa-fw\"></i></a>
                                <a href=\"{{ base_url }}clients/delete_client/{{ client.client_id }}\"><i class=\"fa fa-trash fa-fw\"></i></a>
                            </td>
                            </tr>
                        {%  endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        <!-- /.row -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

{% include \"templates/footer.twig\" %}", "/pages/clients.twig", "C:\\xampp\\htdocs\\projekt\\application\\views\\pages\\clients.twig");
    }
}
