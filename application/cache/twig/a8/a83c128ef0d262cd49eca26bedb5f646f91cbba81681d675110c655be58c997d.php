<?php

/* /pages/add_equipment.twig */
class __TwigTemplate_da43c2f9b42a93aefe4afd829b7273ceb69615e444840d3dba731ed215914ff0 extends Twig_Template
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
        $this->loadTemplate("templates/header.twig", "/pages/add_equipment.twig", 1)->display($context);
        // line 2
        echo "
<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Dodaj nowy sprzęt</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <form role=\"form\" method=\"post\" id=\"add_equipment\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "equipment/add_equipment\">
                    <div class=\"form-group\">
                        <label>Nazwa</label>
                        <input class=\"form-control\" type=\"text\" id=\"name\" name=\"name\" placeholder=\"Nazwa\">
                    </div>
                    <div class=\"form-group\">
                        <label>Kategoria</label>
                        <select class=\"form-control\" id=\"category\" name=\"category\">
                            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 22
            echo "                                    <option value = \"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "category_id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", []), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                        </select>
                    </div>
                    <div class=\"form-group\">
                        <label>Ilość</label>
                        <input class=\"form-control\" type=\"text\" id=\"quantity\" name=\"quantity\" placeholder=\"Ilość\">
                    </div>
                    <div class=\"form-group\">
                        <label>Text area</label>
                        <textarea class=\"form-control\" id=\"description\" name=\"description\" placeholder=\"Opis\" rows=\"3\"></textarea>
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
        // line 46
        $this->loadTemplate("templates/footer.twig", "/pages/add_equipment.twig", 46)->display($context);
    }

    public function getTemplateName()
    {
        return "/pages/add_equipment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 46,  60 => 24,  49 => 22,  45 => 21,  34 => 13,  21 => 2,  19 => 1,);
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
                <h1 class=\"page-header\">Dodaj nowy sprzęt</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <form role=\"form\" method=\"post\" id=\"add_equipment\" action=\"{{ base_url() }}equipment/add_equipment\">
                    <div class=\"form-group\">
                        <label>Nazwa</label>
                        <input class=\"form-control\" type=\"text\" id=\"name\" name=\"name\" placeholder=\"Nazwa\">
                    </div>
                    <div class=\"form-group\">
                        <label>Kategoria</label>
                        <select class=\"form-control\" id=\"category\" name=\"category\">
                            {%  for category in categories %}
                                    <option value = \"{{ category.category_id }}\">{{ category.name }}</option>
                            {%  endfor %}
                        </select>
                    </div>
                    <div class=\"form-group\">
                        <label>Ilość</label>
                        <input class=\"form-control\" type=\"text\" id=\"quantity\" name=\"quantity\" placeholder=\"Ilość\">
                    </div>
                    <div class=\"form-group\">
                        <label>Text area</label>
                        <textarea class=\"form-control\" id=\"description\" name=\"description\" placeholder=\"Opis\" rows=\"3\"></textarea>
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

{% include \"templates/footer.twig\" %}", "/pages/add_equipment.twig", "C:\\xampp\\htdocs\\projekt\\application\\views\\pages\\add_equipment.twig");
    }
}
