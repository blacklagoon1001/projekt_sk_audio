<?php

/* /pages/equipment.twig */
class __TwigTemplate_9c18bfdacb97b71cabdafb6a6b91aa9877ee00d6db2d32c88dcab81f7c46651b extends Twig_Template
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
        $this->loadTemplate("templates/header.twig", "/pages/equipment.twig", 1)->display($context);
        // line 2
        echo "
<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Sprzęt</h1>
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
            <ul class=\"nav nav-tabs\">
                <li class=\"active\"><a data-toggle=\"pill\" href=\"#sound\">Dźwięk</a></li>
                <li><a data-toggle=\"pill\" href=\"#light\">Światło</a></li>
            </ul>
            <div class=\"tab-content\">
                <div id=\"sound\" class=\"tab-pane fade in active panel_eq\">
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sound"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 27
            echo "                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "category", []), "html", null, true);
            echo "
                            </div>
                            <!-- /.panel-heading -->
                            <div class=\"panel-body\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-hover\">
                                        <thead>
                                        <tr>
                                            <th>Nazwa</th>
                                            <th>Ilość</th>
                                            <th>Dostępność</th>
                                            <th>Opis</th>
                                            <th>Akcje</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["s"], "products", []));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 46
                echo "                                            ";
                if (($this->getAttribute($context["product"], "available", []) == 0)) {
                    // line 47
                    echo "                                                <tr class=\"not_available\">
                                            ";
                } else {
                    // line 49
                    echo "                                                <tr>
                                            ";
                }
                // line 51
                echo "                                                <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", []), "html", null, true);
                echo "</td>
                                                <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "quantity", []), "html", null, true);
                echo "</td>
                                                <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "available", []), "html", null, true);
                echo "</td>
                                                <td>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", []), "html", null, true);
                echo "</td>
                                                <td>
                                                    <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "equipment/edit/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_id", []), "html", null, true);
                echo "\"><i class=\"fa fa-edit fa-fw\"></i></a>
                                                    <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "equipment/delete_equipment/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_id", []), "html", null, true);
                echo "\"><i class=\"fa fa-trash fa-fw\"></i></a>
                                                </td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                </div>
                <div id=\"light\" class=\"tab-pane fade panel_eq\">
                    ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["light"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 72
            echo "                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                ";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "category", []), "html", null, true);
            echo "
                            </div>
                            <!-- /.panel-heading -->
                            <div class=\"panel-body\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-hover\">
                                        <thead>
                                        <tr>
                                            <th>Nazwa</th>
                                            <th>Ilość</th>
                                            <th>Dostępność</th>
                                            <th>Opis</th>
                                            <th>Akcje</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["l"], "products", []));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 91
                echo "                                            ";
                if (($this->getAttribute($context["product"], "available", []) == 0)) {
                    // line 92
                    echo "                                                <tr class=\"not_available\">
                                            ";
                } else {
                    // line 94
                    echo "                                                <tr>
                                             ";
                }
                // line 96
                echo "                                                <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", []), "html", null, true);
                echo "</td>
                                                <td>";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "quantity", []), "html", null, true);
                echo "</td>
                                                <td>";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "available", []), "html", null, true);
                echo "</td>
                                                <td>";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", []), "html", null, true);
                echo "</td>
                                                <td>
                                                    <a href=\"";
                // line 101
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "equipment/edit/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_id", []), "html", null, true);
                echo "\"><i class=\"fa fa-edit fa-fw\"></i></a>
                                                    <a href=\"";
                // line 102
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "equipment/delete_equipment/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_id", []), "html", null, true);
                echo "\"><i class=\"fa fa-trash fa-fw\"></i></a>
                                                </td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                </div>
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
        // line 125
        $this->loadTemplate("templates/footer.twig", "/pages/equipment.twig", 125)->display($context);
    }

    public function getTemplateName()
    {
        return "/pages/equipment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 125,  248 => 114,  235 => 106,  223 => 102,  217 => 101,  212 => 99,  208 => 98,  204 => 97,  199 => 96,  195 => 94,  191 => 92,  188 => 91,  184 => 90,  165 => 74,  161 => 72,  157 => 71,  153 => 69,  140 => 61,  128 => 57,  122 => 56,  117 => 54,  113 => 53,  109 => 52,  104 => 51,  100 => 49,  96 => 47,  93 => 46,  89 => 45,  70 => 29,  66 => 27,  62 => 26,  48 => 14,  45 => 13,  39 => 11,  33 => 9,  30 => 8,  28 => 7,  21 => 2,  19 => 1,);
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
                <h1 class=\"page-header\">Sprzęt</h1>
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
            <ul class=\"nav nav-tabs\">
                <li class=\"active\"><a data-toggle=\"pill\" href=\"#sound\">Dźwięk</a></li>
                <li><a data-toggle=\"pill\" href=\"#light\">Światło</a></li>
            </ul>
            <div class=\"tab-content\">
                <div id=\"sound\" class=\"tab-pane fade in active panel_eq\">
                    {%  for s in sound %}
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                {{ s.category }}
                            </div>
                            <!-- /.panel-heading -->
                            <div class=\"panel-body\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-hover\">
                                        <thead>
                                        <tr>
                                            <th>Nazwa</th>
                                            <th>Ilość</th>
                                            <th>Dostępność</th>
                                            <th>Opis</th>
                                            <th>Akcje</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {%  for product in s.products %}
                                            {% if product.available == 0 %}
                                                <tr class=\"not_available\">
                                            {% else %}
                                                <tr>
                                            {% endif %}
                                                <td>{{ product.name }}</td>
                                                <td>{{ product.quantity }}</td>
                                                <td>{{ product.available }}</td>
                                                <td>{{ product.description }}</td>
                                                <td>
                                                    <a href=\"{{ base_url }}equipment/edit/{{ product.product_id }}\"><i class=\"fa fa-edit fa-fw\"></i></a>
                                                    <a href=\"{{ base_url }}equipment/delete_equipment/{{ product.product_id }}\"><i class=\"fa fa-trash fa-fw\"></i></a>
                                                </td>
                                            </tr>
                                        {%  endfor %}
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                    {%  endfor %}
                </div>
                <div id=\"light\" class=\"tab-pane fade panel_eq\">
                    {%  for l in light %}
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                {{ l.category }}
                            </div>
                            <!-- /.panel-heading -->
                            <div class=\"panel-body\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-hover\">
                                        <thead>
                                        <tr>
                                            <th>Nazwa</th>
                                            <th>Ilość</th>
                                            <th>Dostępność</th>
                                            <th>Opis</th>
                                            <th>Akcje</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {%  for product in l.products %}
                                            {% if product.available == 0 %}
                                                <tr class=\"not_available\">
                                            {% else %}
                                                <tr>
                                             {% endif %}
                                                <td>{{ product.name }}</td>
                                                <td>{{ product.quantity }}</td>
                                                <td>{{ product.available }}</td>
                                                <td>{{ product.description }}</td>
                                                <td>
                                                    <a href=\"{{ base_url }}equipment/edit/{{ product.product_id }}\"><i class=\"fa fa-edit fa-fw\"></i></a>
                                                    <a href=\"{{ base_url }}equipment/delete_equipment/{{ product.product_id }}\"><i class=\"fa fa-trash fa-fw\"></i></a>
                                                </td>
                                            </tr>
                                        {%  endfor %}
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                    {%  endfor %}
                </div>
            </div>
            </div>
        <!-- /.row -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

{% include \"templates/footer.twig\" %}", "/pages/equipment.twig", "C:\\xampp\\htdocs\\projekt\\application\\views\\pages\\equipment.twig");
    }
}
