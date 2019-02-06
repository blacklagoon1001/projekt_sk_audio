<?php

/* pages/welcome_message.twig */
class __TwigTemplate_7645a1290a3eadb1663910159364a9e32476e45ef6beb4f052d4e0fe2d32d3c7 extends Twig_Template
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
        $this->loadTemplate("templates/header.twig", "pages/welcome_message.twig", 1)->display($context);
        // line 2
        echo "
<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Dashboard</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <div class=\"row\">
                            <div class=\"col-xs-3\">
                                <i class=\"fa fa-plug fa-5x\"></i>
                            </div>
                            <div class=\"col-xs-9 text-right\">
                                <div>Urządzenia</div>
                                <div class=\"huge\">";
        // line 21
        echo twig_escape_filter($this->env, ($context["equipment_count"] ?? null), "html", null, true);
        echo "</div>
                            </div>
                        </div>
                    </div>
                    <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "equipment\">
                        <div class=\"panel-footer\">
                            <span class=\"pull-left\">Przejdź do modułu sprzętu</span>
                            <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"panel panel-green\">
                    <div class=\"panel-heading\">
                        <div class=\"row\">
                            <div class=\"col-xs-3\">
                                <i class=\"fa fa-users fa-5x\"></i>
                            </div>
                            <div class=\"col-xs-9 text-right\">
                                <div>Klienci</div>
                                <div class=\"huge\">";
        // line 43
        echo twig_escape_filter($this->env, ($context["client_count"] ?? null), "html", null, true);
        echo "</div>
                            </div>
                        </div>
                    </div>
                    <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "clients\">
                        <div class=\"panel-footer\">
                            <span class=\"pull-left\">Przejdź do modułu klientów</span>
                            <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"panel panel-red\">
                    <div class=\"panel-heading\">
                        <div class=\"row\">
                            <div class=\"col-xs-3\">
                                <i class=\"fa fa-sticky-note fa-5x\"></i>
                            </div>
                            <div class=\"col-xs-9 text-right\">
                                <div>Nadchodzące wydarzenia</div>
                                <div class=\"huge\">";
        // line 65
        echo twig_escape_filter($this->env, ($context["events_count"] ?? null), "html", null, true);
        echo "</div>
                            </div>
                        </div>
                    </div>
                    <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "orders\">
                        <div class=\"panel-footer\">
                            <span class=\"pull-left\">Przejdź do modułu wydarzeń</span>
                            <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <i class=\"fa fa-sticky-note fa-fw\"></i> Nadchodzące wydarzenia
                    </div>
                    <!-- /.panel-heading -->
                    <div class=\"panel-body\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover table-striped\">
                                    <thead>
                                    <tr>
                                        <th>Nazwa</th>
                                        <th>Organizator</th>
                                        <th>Start</th>
                                        <th>Koniec</th>
                                        <th>Dodatkowe informacje</th>
                                        <th>Lista sprzętu</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events_pending"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ev"]) {
            // line 104
            echo "                                        <tr>
                                            <td>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ev"], "event", []), "name", []), "html", null, true);
            echo "</td>
                                            <td>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ev"], "event", []), "client_name", []), "html", null, true);
            echo "</td>
                                            <td>";
            // line 107
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["ev"], "event", []), "party_start", []), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 108
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["ev"], "event", []), "party_end", []), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 109
            if ($this->getAttribute($this->getAttribute($context["ev"], "event", []), "description", [])) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ev"], "event", []), "description", []), "html", null, true);
            } else {
                echo " - ";
            }
            echo "</td>
                                            <td>
                                                <a data-toggle=\"modal\" data-target=\"#show_equipment_";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ev"], "event", []), "order_id", []), "html", null, true);
            echo "\"><i class=\"fa fa-eye fa-fw\"></i></a>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ev'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                                    </tbody>
                                </table>
                            </div>
                            ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events_pending"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ev"]) {
            // line 119
            echo "                                <div class=\"modal fade\" id=\"show_equipment_";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ev"], "event", []), "order_id", []), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <h5 class=\"modal-title\">";
            // line 123
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
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ev"], "equipment", []));
            foreach ($context['_seq'] as $context["_key"] => $context["eq"]) {
                // line 139
                echo "                                                        <tr>
                                                            <td>";
                // line 140
                echo twig_escape_filter($this->env, $this->getAttribute($context["eq"], "name", []), "html", null, true);
                echo "</td>
                                                            <td>";
                // line 141
                echo twig_escape_filter($this->env, $this->getAttribute($context["eq"], "category_name", []), "html", null, true);
                echo "</td>
                                                            <td>";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute($context["eq"], "quantity", []), "html", null, true);
                echo "</td>
                                                        </tr>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "                                                    </tbody>
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
        // line 155
        echo "                                <!-- /.table-responsive -->
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-8 -->
        </div>
        <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <i class=\"fa fa-sticky-note fa-fw\"></i> Minione wydarzenia
                </div>
                <!-- /.panel-heading -->
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover table-striped\">
                                    <thead>
                                    <tr>
                                        <th>Nazwa</th>
                                        <th>Organizator</th>
                                        <th>Start</th>
                                        <th>Koniec</th>
                                        <th>Dodatkowe informacje</th>
                                        <th>Lista sprzętu</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 189
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events_past"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ev"]) {
            // line 190
            echo "                                        <tr>
                                            <td>";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ev"], "event", []), "name", []), "html", null, true);
            echo "</td>
                                            <td>";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ev"], "event", []), "client_name", []), "html", null, true);
            echo "</td>
                                            <td>";
            // line 193
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["ev"], "event", []), "party_start", []), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 194
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["ev"], "event", []), "party_end", []), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 195
            if ($this->getAttribute($this->getAttribute($context["ev"], "event", []), "description", [])) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ev"], "event", []), "description", []), "html", null, true);
            } else {
                echo " - ";
            }
            echo "</td>
                                            <td>
                                                <a data-toggle=\"modal\" data-target=\"#show_equipment_";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ev"], "event", []), "order_id", []), "html", null, true);
            echo "\"><i class=\"fa fa-eye fa-fw\"></i></a>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ev'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        echo "                                    </tbody>
                                </table>
                            </div>
                            ";
        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events_past"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ev"]) {
            // line 205
            echo "                                <div class=\"modal fade\" id=\"show_equipment_";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ev"], "event", []), "order_id", []), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <h5 class=\"modal-title\">";
            // line 209
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
            // line 224
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ev"], "equipment", []));
            foreach ($context['_seq'] as $context["_key"] => $context["eq"]) {
                // line 225
                echo "                                                        <tr>
                                                            <td>";
                // line 226
                echo twig_escape_filter($this->env, $this->getAttribute($context["eq"], "name", []), "html", null, true);
                echo "</td>
                                                            <td>";
                // line 227
                echo twig_escape_filter($this->env, $this->getAttribute($context["eq"], "category_name", []), "html", null, true);
                echo "</td>
                                                            <td>";
                // line 228
                echo twig_escape_filter($this->env, $this->getAttribute($context["eq"], "quantity", []), "html", null, true);
                echo "</td>
                                                        </tr>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 231
            echo "                                                    </tbody>
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
        // line 241
        echo "                            <!-- /.table-responsive -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-8 -->
    </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

";
        // line 258
        $this->loadTemplate("templates/footer.twig", "pages/welcome_message.twig", 258)->display($context);
    }

    public function getTemplateName()
    {
        return "pages/welcome_message.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  429 => 258,  410 => 241,  395 => 231,  386 => 228,  382 => 227,  378 => 226,  375 => 225,  371 => 224,  353 => 209,  345 => 205,  341 => 204,  336 => 201,  326 => 197,  317 => 195,  313 => 194,  309 => 193,  305 => 192,  301 => 191,  298 => 190,  294 => 189,  258 => 155,  243 => 145,  234 => 142,  230 => 141,  226 => 140,  223 => 139,  219 => 138,  201 => 123,  193 => 119,  189 => 118,  184 => 115,  174 => 111,  165 => 109,  161 => 108,  157 => 107,  153 => 106,  149 => 105,  146 => 104,  142 => 103,  105 => 69,  98 => 65,  77 => 47,  70 => 43,  49 => 25,  42 => 21,  21 => 2,  19 => 1,);
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
                <h1 class=\"page-header\">Dashboard</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <div class=\"row\">
                            <div class=\"col-xs-3\">
                                <i class=\"fa fa-plug fa-5x\"></i>
                            </div>
                            <div class=\"col-xs-9 text-right\">
                                <div>Urządzenia</div>
                                <div class=\"huge\">{{ equipment_count }}</div>
                            </div>
                        </div>
                    </div>
                    <a href=\"{{ base_url() }}equipment\">
                        <div class=\"panel-footer\">
                            <span class=\"pull-left\">Przejdź do modułu sprzętu</span>
                            <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"panel panel-green\">
                    <div class=\"panel-heading\">
                        <div class=\"row\">
                            <div class=\"col-xs-3\">
                                <i class=\"fa fa-users fa-5x\"></i>
                            </div>
                            <div class=\"col-xs-9 text-right\">
                                <div>Klienci</div>
                                <div class=\"huge\">{{ client_count }}</div>
                            </div>
                        </div>
                    </div>
                    <a href=\"{{ base_url() }}clients\">
                        <div class=\"panel-footer\">
                            <span class=\"pull-left\">Przejdź do modułu klientów</span>
                            <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"panel panel-red\">
                    <div class=\"panel-heading\">
                        <div class=\"row\">
                            <div class=\"col-xs-3\">
                                <i class=\"fa fa-sticky-note fa-5x\"></i>
                            </div>
                            <div class=\"col-xs-9 text-right\">
                                <div>Nadchodzące wydarzenia</div>
                                <div class=\"huge\">{{ events_count }}</div>
                            </div>
                        </div>
                    </div>
                    <a href=\"{{ base_url() }}orders\">
                        <div class=\"panel-footer\">
                            <span class=\"pull-left\">Przejdź do modułu wydarzeń</span>
                            <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <i class=\"fa fa-sticky-note fa-fw\"></i> Nadchodzące wydarzenia
                    </div>
                    <!-- /.panel-heading -->
                    <div class=\"panel-body\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover table-striped\">
                                    <thead>
                                    <tr>
                                        <th>Nazwa</th>
                                        <th>Organizator</th>
                                        <th>Start</th>
                                        <th>Koniec</th>
                                        <th>Dodatkowe informacje</th>
                                        <th>Lista sprzętu</th>
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
                                <!-- /.table-responsive -->
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-8 -->
        </div>
        <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <i class=\"fa fa-sticky-note fa-fw\"></i> Minione wydarzenia
                </div>
                <!-- /.panel-heading -->
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover table-striped\">
                                    <thead>
                                    <tr>
                                        <th>Nazwa</th>
                                        <th>Organizator</th>
                                        <th>Start</th>
                                        <th>Koniec</th>
                                        <th>Dodatkowe informacje</th>
                                        <th>Lista sprzętu</th>
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
                            <!-- /.table-responsive -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-8 -->
    </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

{% include \"templates/footer.twig\" %}", "pages/welcome_message.twig", "C:\\xampp\\htdocs\\projekt\\application\\views\\pages\\welcome_message.twig");
    }
}
