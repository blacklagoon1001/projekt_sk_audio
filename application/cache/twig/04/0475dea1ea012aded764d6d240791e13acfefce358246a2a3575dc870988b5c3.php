<?php

/* /pages/add_order.twig */
class __TwigTemplate_1001d08730a3e63cf1cb4a291c806809a3e9c91690e8f87739cfe3356d81e01f extends Twig_Template
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
        $this->loadTemplate("templates/header.twig", "/pages/add_order.twig", 1)->display($context);
        // line 2
        echo "
<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Dodaj nowe wydarzenie</h1>
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
                <form role=\"form\" method=\"post\" id=\"add_event\" action=\"";
        // line 20
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "orders/add_order\">
                    <div class=\"form-group\">
                        <label>Nazwa wydarzenia</label>
                        <input class=\"form-control\" type=\"text\" id=\"name\" name=\"name\" placeholder=\"Nazwa\">
                    </div>
                    <div class=\"form-group\">
                        <label>Klient</label>
                        <select class=\"form-control\" id=\"client_id\" name=\"client_id\">
                            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 29
            echo "                                    <option value = \"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "client_id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "name", []), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                        </select>
                    </div>
                    <div class='col-md-6 datetime'>
                        <div class=\"form-group\">
                            <label>Data i godzina rozpoczęcia</label>
                            <div class='input-group date' id='datetimepicker6'>
                                <input type='text' class=\"form-control\" id=\"start\" name=\"start\"/>
                                <span class=\"input-group-addon\">
                                    <span class=\"glyphicon glyphicon-calendar\"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class='col-md-6 datetime1'>
                        <div class=\"form-group\">
                            <label>Data i godzina zakończenia</label>
                            <div class='input-group date' id='datetimepicker7'>
                                <input type='text' class=\"form-control\" id=\"end\" name=\"end\"/>
                                <span class=\"input-group-addon\">
                                    <span class=\"glyphicon glyphicon-calendar\"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <button class=\"btn btn-danger\" id=\"check_equipment\">Sprawdź dostępność sprzętu w podanym terminie</button>
                    <div id=\"equipment_div\">
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\"><a data-toggle=\"pill\" href=\"#sound\">Dźwięk</a></li>
                            <li><a data-toggle=\"pill\" href=\"#light\">Światło</a></li>
                        </ul>
                        <div class=\"tab-content\">
                        <div id=\"sound\" class=\"tab-pane fade in active panel_eq\">
                            <ul class=\"nav nav-tabs\">
                                ";
        // line 64
        $context["firstSound"] = twig_first($this->env, ($context["sound"] ?? null));
        // line 65
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sound"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 66
            echo "                                    ";
            if ($this->getAttribute($context["loop"], "first", [])) {
                // line 67
                echo "                                        <li class=\"active\"><a data-toggle=\"pill\" href=\"#category";
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "category_id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "category", []), "html", null, true);
                echo "</a></li>
                                    ";
            } else {
                // line 69
                echo "                                        <li><a data-toggle=\"pill\" href=\"#category";
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "category_id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "category", []), "html", null, true);
                echo "</a></li>
                                    ";
            }
            // line 71
            echo "                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                            </ul>
                            <div class=\"tab-content\">
                                ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sound"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 75
            echo "                                    ";
            if ($this->getAttribute($context["loop"], "first", [])) {
                // line 76
                echo "                                        <div id=\"category";
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "category_id", []), "html", null, true);
                echo "\" class=\"tab-pane fade in active\">
                                    ";
            } else {
                // line 78
                echo "                                        <div id=\"category";
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "category_id", []), "html", null, true);
                echo "\" class=\"tab-pane fade\">
                                    ";
            }
            // line 80
            echo "                                    <div class=\"panel panel-default\">
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
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["s"], "products", []));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 96
                echo "                                                        ";
                if (($this->getAttribute($context["product"], "available", []) == 0)) {
                    // line 97
                    echo "                                                            <tr class=\"not_available\">
                                                        ";
                } else {
                    // line 99
                    echo "                                                            <tr>
                                                        ";
                }
                // line 101
                echo "                                                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", []), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "quantity", []), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "available", []), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", []), "html", null, true);
                echo "</td>
                                                        <td>
                                                            <a href=\"";
                // line 106
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "equipment/edit/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_id", []), "html", null, true);
                echo "\"><i class=\"fa fa-edit fa-fw\"></i></a>
                                                            <a href=\"";
                // line 107
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
            // line 111
            echo "                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.table-responsive -->
                                        </div>
                                        <!-- /.panel-body -->
                                    </div>
                                    ";
            // line 118
            if ($this->getAttribute($context["loop"], "first", [])) {
                // line 119
                echo "                                        </div>
                                    ";
            } else {
                // line 121
                echo "                                        </div>
                                    ";
            }
            // line 123
            echo "                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "                            </div>
                        </div>
                        <div id=\"light\" class=\"tab-pane fade panel_eq\">
                            <ul class=\"nav nav-tabs\">
                                ";
        // line 128
        $context["firstSound"] = twig_first($this->env, ($context["light"] ?? null));
        // line 129
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["light"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 130
            echo "                                    ";
            if ($this->getAttribute($context["loop"], "first", [])) {
                // line 131
                echo "                                        <li class=\"active\"><a data-toggle=\"pill\" href=\"#category";
                echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "category_id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "category", []), "html", null, true);
                echo "</a></li>
                                    ";
            } else {
                // line 133
                echo "                                        <li><a data-toggle=\"pill\" href=\"#category";
                echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "category_id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "category", []), "html", null, true);
                echo "</a></li>
                                    ";
            }
            // line 135
            echo "                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "                            </ul>
                            <div class=\"tab-content\">
                                ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["light"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 139
            echo "                                    ";
            if ($this->getAttribute($context["loop"], "first", [])) {
                // line 140
                echo "                                        <div id=\"category";
                echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "category_id", []), "html", null, true);
                echo "\" class=\"tab-pane fade in active\">
                                    ";
            } else {
                // line 142
                echo "                                        <div id=\"category";
                echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "category_id", []), "html", null, true);
                echo "\" class=\"tab-pane fade\">
                                    ";
            }
            // line 144
            echo "                                    <div class=\"panel panel-default\">
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
            // line 159
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["l"], "products", []));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 160
                echo "                                                        ";
                if (($this->getAttribute($context["product"], "available", []) == 0)) {
                    // line 161
                    echo "                                                            <tr class=\"not_available\">
                                                        ";
                } else {
                    // line 163
                    echo "                                                            <tr>
                                                        ";
                }
                // line 165
                echo "                                                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", []), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 166
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "quantity", []), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 167
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "available", []), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 168
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", []), "html", null, true);
                echo "</td>
                                                        <td>
                                                            <a href=\"";
                // line 170
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "equipment/edit/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_id", []), "html", null, true);
                echo "\"><i class=\"fa fa-edit fa-fw\"></i></a>
                                                            <a href=\"";
                // line 171
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
            // line 175
            echo "                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.table-responsive -->
                                        </div>
                                        <!-- /.panel-body -->
                                    </div>
                                    ";
            // line 182
            if ($this->getAttribute($context["loop"], "first", [])) {
                // line 183
                echo "                                        </div>
                                    ";
            } else {
                // line 185
                echo "                                        </div>
                                    ";
            }
            // line 187
            echo "                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "                            </div>
                        </div>
                    </div>
                    </div>
                    <div class=\"form-group\">
                        <label>Dodatkowe informacje (miejsce itp)</label>
                        <textarea class=\"form-control\" id=\"description\" name=\"description\" placeholder=\"Dodatkowe informacje\"></textarea>
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
        // line 208
        $this->loadTemplate("templates/footer.twig", "/pages/add_order.twig", 208)->display($context);
    }

    public function getTemplateName()
    {
        return "/pages/add_order.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  525 => 208,  503 => 188,  489 => 187,  485 => 185,  481 => 183,  479 => 182,  470 => 175,  458 => 171,  452 => 170,  447 => 168,  443 => 167,  439 => 166,  434 => 165,  430 => 163,  426 => 161,  423 => 160,  419 => 159,  402 => 144,  396 => 142,  390 => 140,  387 => 139,  370 => 138,  366 => 136,  352 => 135,  344 => 133,  336 => 131,  333 => 130,  315 => 129,  313 => 128,  307 => 124,  293 => 123,  289 => 121,  285 => 119,  283 => 118,  274 => 111,  262 => 107,  256 => 106,  251 => 104,  247 => 103,  243 => 102,  238 => 101,  234 => 99,  230 => 97,  227 => 96,  223 => 95,  206 => 80,  200 => 78,  194 => 76,  191 => 75,  174 => 74,  170 => 72,  156 => 71,  148 => 69,  140 => 67,  137 => 66,  119 => 65,  117 => 64,  82 => 31,  71 => 29,  67 => 28,  56 => 20,  48 => 14,  45 => 13,  39 => 11,  33 => 9,  30 => 8,  28 => 7,  21 => 2,  19 => 1,);
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
                <h1 class=\"page-header\">Dodaj nowe wydarzenie</h1>
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
                <form role=\"form\" method=\"post\" id=\"add_event\" action=\"{{ base_url() }}orders/add_order\">
                    <div class=\"form-group\">
                        <label>Nazwa wydarzenia</label>
                        <input class=\"form-control\" type=\"text\" id=\"name\" name=\"name\" placeholder=\"Nazwa\">
                    </div>
                    <div class=\"form-group\">
                        <label>Klient</label>
                        <select class=\"form-control\" id=\"client_id\" name=\"client_id\">
                            {%  for client in clients %}
                                    <option value = \"{{ client.client_id }}\">{{ client.name }}</option>
                            {%  endfor %}
                        </select>
                    </div>
                    <div class='col-md-6 datetime'>
                        <div class=\"form-group\">
                            <label>Data i godzina rozpoczęcia</label>
                            <div class='input-group date' id='datetimepicker6'>
                                <input type='text' class=\"form-control\" id=\"start\" name=\"start\"/>
                                <span class=\"input-group-addon\">
                                    <span class=\"glyphicon glyphicon-calendar\"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class='col-md-6 datetime1'>
                        <div class=\"form-group\">
                            <label>Data i godzina zakończenia</label>
                            <div class='input-group date' id='datetimepicker7'>
                                <input type='text' class=\"form-control\" id=\"end\" name=\"end\"/>
                                <span class=\"input-group-addon\">
                                    <span class=\"glyphicon glyphicon-calendar\"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <button class=\"btn btn-danger\" id=\"check_equipment\">Sprawdź dostępność sprzętu w podanym terminie</button>
                    <div id=\"equipment_div\">
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\"><a data-toggle=\"pill\" href=\"#sound\">Dźwięk</a></li>
                            <li><a data-toggle=\"pill\" href=\"#light\">Światło</a></li>
                        </ul>
                        <div class=\"tab-content\">
                        <div id=\"sound\" class=\"tab-pane fade in active panel_eq\">
                            <ul class=\"nav nav-tabs\">
                                {% set firstSound = sound|first %}
                                {% for s in sound %}
                                    {% if loop.first %}
                                        <li class=\"active\"><a data-toggle=\"pill\" href=\"#category{{ s.category_id }}\">{{ s.category }}</a></li>
                                    {%  else %}
                                        <li><a data-toggle=\"pill\" href=\"#category{{ s.category_id }}\">{{ s.category }}</a></li>
                                    {% endif %}
                                {% endfor %}
                            </ul>
                            <div class=\"tab-content\">
                                {%  for s in sound %}
                                    {% if loop.first %}
                                        <div id=\"category{{ s.category_id }}\" class=\"tab-pane fade in active\">
                                    {% else %}
                                        <div id=\"category{{ s.category_id }}\" class=\"tab-pane fade\">
                                    {%  endif %}
                                    <div class=\"panel panel-default\">
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
                                    {% if loop.first %}
                                        </div>
                                    {% else %}
                                        </div>
                                    {%  endif %}
                                {%  endfor %}
                            </div>
                        </div>
                        <div id=\"light\" class=\"tab-pane fade panel_eq\">
                            <ul class=\"nav nav-tabs\">
                                {% set firstSound = light|first %}
                                {% for l in light %}
                                    {% if loop.first %}
                                        <li class=\"active\"><a data-toggle=\"pill\" href=\"#category{{ l.category_id }}\">{{ l.category }}</a></li>
                                    {%  else %}
                                        <li><a data-toggle=\"pill\" href=\"#category{{ l.category_id }}\">{{ l.category }}</a></li>
                                    {% endif %}
                                {% endfor %}
                            </ul>
                            <div class=\"tab-content\">
                                {%  for l in light %}
                                    {% if loop.first %}
                                        <div id=\"category{{ l.category_id }}\" class=\"tab-pane fade in active\">
                                    {% else %}
                                        <div id=\"category{{ l.category_id }}\" class=\"tab-pane fade\">
                                    {%  endif %}
                                    <div class=\"panel panel-default\">
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
                                    {% if loop.first %}
                                        </div>
                                    {% else %}
                                        </div>
                                    {%  endif %}
                                {%  endfor %}
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class=\"form-group\">
                        <label>Dodatkowe informacje (miejsce itp)</label>
                        <textarea class=\"form-control\" id=\"description\" name=\"description\" placeholder=\"Dodatkowe informacje\"></textarea>
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

{% include \"templates/footer.twig\" %}", "/pages/add_order.twig", "C:\\xampp\\htdocs\\projekt\\application\\views\\pages\\add_order.twig");
    }
}
