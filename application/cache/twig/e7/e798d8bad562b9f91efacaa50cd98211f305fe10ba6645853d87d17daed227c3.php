<?php

/* /pages/orders.twig */
class __TwigTemplate_9bef57744d0ff89e838ea5e76b335d95a8601a8b981a9c929680ae6826459b25 extends Twig_Template
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
        $this->loadTemplate("templates/header.twig", "/pages/orders.twig", 1)->display($context);
        // line 2
        echo "
<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Wydarzenia</h1>
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
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <i class=\"fa fa-sticky-note fa-fw\"></i> Nadchodzące wydarzenia
                            </div>
                            <!-- /.panel-heading -->
                            <div class=\"panel-body\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-hover\">
                                        <thead>
                                        <tr>
                                            <th>Nazwa</th>
                                            <th>Organizator</th>
                                            <th>Start</th>
                                            <th>Koniec</th>
                                            <th>Dodatkowe informacje</th>
                                            <th>Lista sprzętu</th>
                                            <th>Akcje</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events_pending"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ev"]) {
            // line 43
            echo "                                            <tr>
                                                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ev"], "event", []), "name", []), "html", null, true);
            echo "</td>
                                                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ev"], "event", []), "client_name", []), "html", null, true);
            echo "</td>
                                                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["ev"], "event", []), "party_start", []), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                                                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["ev"], "event", []), "party_end", []), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                                                <td>";
            // line 48
            if ($this->getAttribute($this->getAttribute($context["ev"], "event", []), "description", [])) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ev"], "event", []), "description", []), "html", null, true);
            } else {
                echo " - ";
            }
            echo "</td>
                                                <td>
                                                    <a data-toggle=\"modal\" data-target=\"#show_equipment_";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ev"], "event", []), "order_id", []), "html", null, true);
            echo "\"><i class=\"fa fa-eye fa-fw\"></i></a>
                                                </td>
                                                <td>
                                                    <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "orders/delete_order/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ev"], "event", []), "order_id", []), "html", null, true);
            echo "\"><i class=\"fa fa-trash fa-fw\"></i></a>
                                                </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ev'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                                        </tbody>
                                    </table>
                                </div>
                                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events_pending"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ev"]) {
            // line 61
            echo "                                    <div class=\"modal fade\" id=\"show_equipment_";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ev"], "event", []), "order_id", []), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ev"], "event", []), "name", []), "html", null, true);
            echo "</h5>
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                        <span aria-hidden=\"true\">&times;</span>
                                                    </button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <table class=\"table table-sm table-hover\">
                                                        <thead>
                                                        <tr>
                                                            <th>Nazwa</th>
                                                            <th>Kategoria</th>
                                                            <th>Ilość</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ev"], "equipment", []));
            foreach ($context['_seq'] as $context["_key"] => $context["eq"]) {
                // line 81
                echo "                                                            <tr>
                                                                <td>";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($context["eq"], "name", []), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["eq"], "category_name", []), "html", null, true);
                echo "</td>
                                                                <td>";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["eq"], "quantity", []), "html", null, true);
                echo "</td>
                                                            </tr>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Zakmnij</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ev'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <i class=\"fa fa-sticky-note fa-fw\"></i> Minione wydarzenia
                            </div>
                            <!-- /.panel-heading -->
                            <div class=\"panel-body\">
                                <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
                        <thead>
                        <tr>
                            <th>Nazwa</th>
                            <th>Organizator</th>
                            <th>Start</th>
                            <th>Koniec</th>
                            <th>Dodatkowe informacje</th>
                            <th>Lista sprzętu</th>
                            <th>Akcje</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events_past"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ev"]) {
            // line 124
            echo "                            <tr>
                                <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ev"], "event", []), "name", []), "html", null, true);
            echo "</td>
                                <td>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ev"], "event", []), "client_name", []), "html", null, true);
            echo "</td>
                                <td>";
            // line 127
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["ev"], "event", []), "party_start", []), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                                <td>";
            // line 128
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["ev"], "event", []), "party_end", []), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                                <td>";
            // line 129
            if ($this->getAttribute($this->getAttribute($context["ev"], "event", []), "description", [])) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ev"], "event", []), "description", []), "html", null, true);
            } else {
                echo " - ";
            }
            echo "</td>
                                <td>
                                    <a data-toggle=\"modal\" data-target=\"#show_equipment_";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ev"], "event", []), "order_id", []), "html", null, true);
            echo "\"><i class=\"fa fa-eye fa-fw\"></i></a>
                                </td>
                                <td>
                                    <a href=\"";
            // line 134
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "orders/delete_order/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ev"], "event", []), "order_id", []), "html", null, true);
            echo "\"><i class=\"fa fa-trash fa-fw\"></i></a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ev'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "                        </tbody>
                    </table>
                </div>
                                ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events_past"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ev"]) {
            // line 142
            echo "                    <div class=\"modal fade\" id=\"show_equipment_";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ev"], "event", []), "order_id", []), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\">";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ev"], "event", []), "name", []), "html", null, true);
            echo "</h5>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\">&times;</span>
                                    </button>
                                </div>
                                <div class=\"modal-body\">
                                    <table class=\"table table-sm table-hover\">
                                        <thead>
                                        <tr>
                                            <th>Nazwa</th>
                                            <th>Kategoria</th>
                                            <th>Ilość</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
            // line 161
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ev"], "equipment", []));
            foreach ($context['_seq'] as $context["_key"] => $context["eq"]) {
                // line 162
                echo "                                            <tr>
                                                <td>";
                // line 163
                echo twig_escape_filter($this->env, $this->getAttribute($context["eq"], "name", []), "html", null, true);
                echo "</td>
                                                <td>";
                // line 164
                echo twig_escape_filter($this->env, $this->getAttribute($context["eq"], "category_name", []), "html", null, true);
                echo "</td>
                                                <td>";
                // line 165
                echo twig_escape_filter($this->env, $this->getAttribute($context["eq"], "quantity", []), "html", null, true);
                echo "</td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            echo "                                        </tbody>
                                    </table>
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Zakmnij</button>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ev'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "                            </div>
                        </div>
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

";
        // line 191
        $this->loadTemplate("templates/footer.twig", "/pages/orders.twig", 191)->display($context);
    }

    public function getTemplateName()
    {
        return "/pages/orders.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 191,  354 => 178,  339 => 168,  330 => 165,  326 => 164,  322 => 163,  319 => 162,  315 => 161,  297 => 146,  289 => 142,  285 => 141,  280 => 138,  268 => 134,  262 => 131,  253 => 129,  249 => 128,  245 => 127,  241 => 126,  237 => 125,  234 => 124,  230 => 123,  202 => 97,  187 => 87,  178 => 84,  174 => 83,  170 => 82,  167 => 81,  163 => 80,  145 => 65,  137 => 61,  133 => 60,  128 => 57,  116 => 53,  110 => 50,  101 => 48,  97 => 47,  93 => 46,  89 => 45,  85 => 44,  82 => 43,  78 => 42,  48 => 14,  45 => 13,  39 => 11,  33 => 9,  30 => 8,  28 => 7,  21 => 2,  19 => 1,);
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
                <h1 class=\"page-header\">Wydarzenia</h1>
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
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <i class=\"fa fa-sticky-note fa-fw\"></i> Nadchodzące wydarzenia
                            </div>
                            <!-- /.panel-heading -->
                            <div class=\"panel-body\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-hover\">
                                        <thead>
                                        <tr>
                                            <th>Nazwa</th>
                                            <th>Organizator</th>
                                            <th>Start</th>
                                            <th>Koniec</th>
                                            <th>Dodatkowe informacje</th>
                                            <th>Lista sprzętu</th>
                                            <th>Akcje</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for ev in events_pending %}
                                            <tr>
                                                <td>{{ ev.event.name }}</td>
                                                <td>{{ ev.event.client_name }}</td>
                                                <td>{{ ev.event.party_start|date(\"Y-m-d H:i\") }}</td>
                                                <td>{{ ev.event.party_end|date(\"Y-m-d H:i\") }}</td>
                                                <td>{%  if ev.event.description %}{{ ev.event.description }}{% else %} - {% endif %}</td>
                                                <td>
                                                    <a data-toggle=\"modal\" data-target=\"#show_equipment_{{ ev.event.order_id }}\"><i class=\"fa fa-eye fa-fw\"></i></a>
                                                </td>
                                                <td>
                                                    <a href=\"{{ base_url }}orders/delete_order/{{ ev.event.order_id }}\"><i class=\"fa fa-trash fa-fw\"></i></a>
                                                </td>
                                            </tr>
                                        {%  endfor %}
                                        </tbody>
                                    </table>
                                </div>
                                {% for ev in events_pending %}
                                    <div class=\"modal fade\" id=\"show_equipment_{{ ev.event.order_id }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title\">{{ ev.event.name }}</h5>
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                        <span aria-hidden=\"true\">&times;</span>
                                                    </button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <table class=\"table table-sm table-hover\">
                                                        <thead>
                                                        <tr>
                                                            <th>Nazwa</th>
                                                            <th>Kategoria</th>
                                                            <th>Ilość</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        {%  for eq in ev.equipment %}
                                                            <tr>
                                                                <td>{{ eq.name }}</td>
                                                                <td>{{ eq.category_name }}</td>
                                                                <td>{{ eq.quantity }}</td>
                                                            </tr>
                                                        {%  endfor %}
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Zakmnij</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {%  endfor %}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <i class=\"fa fa-sticky-note fa-fw\"></i> Minione wydarzenia
                            </div>
                            <!-- /.panel-heading -->
                            <div class=\"panel-body\">
                                <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
                        <thead>
                        <tr>
                            <th>Nazwa</th>
                            <th>Organizator</th>
                            <th>Start</th>
                            <th>Koniec</th>
                            <th>Dodatkowe informacje</th>
                            <th>Lista sprzętu</th>
                            <th>Akcje</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for ev in events_past %}
                            <tr>
                                <td>{{ ev.event.name }}</td>
                                <td>{{ ev.event.client_name }}</td>
                                <td>{{ ev.event.party_start|date(\"Y-m-d H:i\") }}</td>
                                <td>{{ ev.event.party_end|date(\"Y-m-d H:i\") }}</td>
                                <td>{%  if ev.event.description %}{{ ev.event.description }}{% else %} - {% endif %}</td>
                                <td>
                                    <a data-toggle=\"modal\" data-target=\"#show_equipment_{{ ev.event.order_id }}\"><i class=\"fa fa-eye fa-fw\"></i></a>
                                </td>
                                <td>
                                    <a href=\"{{ base_url }}orders/delete_order/{{ ev.event.order_id }}\"><i class=\"fa fa-trash fa-fw\"></i></a>
                                </td>
                            </tr>
                        {%  endfor %}
                        </tbody>
                    </table>
                </div>
                                {% for ev in events_past %}
                    <div class=\"modal fade\" id=\"show_equipment_{{ ev.event.order_id }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\">{{ ev.event.name }}</h5>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\">&times;</span>
                                    </button>
                                </div>
                                <div class=\"modal-body\">
                                    <table class=\"table table-sm table-hover\">
                                        <thead>
                                        <tr>
                                            <th>Nazwa</th>
                                            <th>Kategoria</th>
                                            <th>Ilość</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {%  for eq in ev.equipment %}
                                            <tr>
                                                <td>{{ eq.name }}</td>
                                                <td>{{ eq.category_name }}</td>
                                                <td>{{ eq.quantity }}</td>
                                            </tr>
                                        {%  endfor %}
                                        </tbody>
                                    </table>
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Zakmnij</button>
                                </div>
                            </div>
                        </div>
                    </div>
                {%  endfor %}
                            </div>
                        </div>
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

{% include \"templates/footer.twig\" %}", "/pages/orders.twig", "C:\\xampp\\htdocs\\projekt\\application\\views\\pages\\orders.twig");
    }
}
