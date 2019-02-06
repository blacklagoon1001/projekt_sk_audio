<?php

/* /pages/users.twig */
class __TwigTemplate_7a1f112d8c3863a754168514eed4a8d7306ef9adce2b10b8e55d107147e6e41e extends Twig_Template
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
        $this->loadTemplate("templates/header.twig", "/pages/users.twig", 1)->display($context);
        // line 2
        echo "
<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Użytkownicy</h1>
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
                            <th>Imię i nazwisko</th>
                            <th>Login</th>
                            <th>Email</th>
                            <th>Akcje</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 32
            echo "                            <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name_surname", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", []), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "users/edit/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "user_id", []), "html", null, true);
            echo "\"><i class=\"fa fa-edit fa-fw\"></i></a>
                                ";
            // line 37
            if ((($context["user_id"] ?? null) != $this->getAttribute($context["user"], "user_id", []))) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "users/delete_user/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "user_id", []), "html", null, true);
                echo "\"><i class=\"fa fa-trash fa-fw\"></i></a>";
            }
            // line 38
            echo "                            </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
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
        // line 53
        $this->loadTemplate("templates/footer.twig", "/pages/users.twig", 53)->display($context);
    }

    public function getTemplateName()
    {
        return "/pages/users.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 53,  107 => 41,  99 => 38,  91 => 37,  85 => 36,  80 => 34,  76 => 33,  71 => 32,  67 => 31,  48 => 14,  45 => 13,  39 => 11,  33 => 9,  30 => 8,  28 => 7,  21 => 2,  19 => 1,);
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
                <h1 class=\"page-header\">Użytkownicy</h1>
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
                            <th>Imię i nazwisko</th>
                            <th>Login</th>
                            <th>Email</th>
                            <th>Akcje</th>
                        </tr>
                        </thead>
                        <tbody>
                        {%  for user in users %}
                            <td>{{ user.name_surname }}</td>
                            <td>{{ user.name }}</td>
                            <td>{{ user.email }}</td>
                            <td>
                                <a href=\"{{ base_url }}users/edit/{{ user.user_id }}\"><i class=\"fa fa-edit fa-fw\"></i></a>
                                {% if user_id != user.user_id %}<a href=\"{{ base_url }}users/delete_user/{{ user.user_id }}\"><i class=\"fa fa-trash fa-fw\"></i></a>{% endif %}
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

{% include \"templates/footer.twig\" %}", "/pages/users.twig", "C:\\xampp\\htdocs\\projekt\\application\\views\\pages\\users.twig");
    }
}
