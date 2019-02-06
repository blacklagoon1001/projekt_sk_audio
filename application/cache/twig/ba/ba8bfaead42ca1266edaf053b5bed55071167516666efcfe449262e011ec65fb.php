<?php

/* templates/footer.twig */
class __TwigTemplate_743d7939ebf59700beae2b52a14e705aa7b70d4a907fe7156e571032ceb1bfe0 extends Twig_Template
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
        echo "    <!-- Metis Menu Plugin JavaScript -->
    <script src=\"";
        // line 2
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "vendor/metisMenu/metisMenu.min.js\"></script>
    <script>
        \$('#datetimepicker6').datetimepicker({
            locale: 'pl',
            format:'YYYY-MM-DD HH:mm:ss',
        });
        \$('#datetimepicker7').datetimepicker({
            useCurrent: false, //Important! See issue #1075
            locale: 'pl',
            format:'YYYY-MM-DD HH:mm:ss',
        });
        \$(\"#datetimepicker6\").on(\"dp.change\", function (e) {
            \$('#datetimepicker7').data(\"DateTimePicker\").minDate(e.date);
        });
        \$(\"#datetimepicker7\").on(\"dp.change\", function (e) {
            \$('#datetimepicker6').data(\"DateTimePicker\").maxDate(e.date);
        });
    </script>
    <!-- Custom Theme JavaScript -->
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "dist/js/sb-admin-2.js\"></script>

</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "templates/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 21,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    <!-- Metis Menu Plugin JavaScript -->
    <script src=\"{{ base_url() }}vendor/metisMenu/metisMenu.min.js\"></script>
    <script>
        \$('#datetimepicker6').datetimepicker({
            locale: 'pl',
            format:'YYYY-MM-DD HH:mm:ss',
        });
        \$('#datetimepicker7').datetimepicker({
            useCurrent: false, //Important! See issue #1075
            locale: 'pl',
            format:'YYYY-MM-DD HH:mm:ss',
        });
        \$(\"#datetimepicker6\").on(\"dp.change\", function (e) {
            \$('#datetimepicker7').data(\"DateTimePicker\").minDate(e.date);
        });
        \$(\"#datetimepicker7\").on(\"dp.change\", function (e) {
            \$('#datetimepicker6').data(\"DateTimePicker\").maxDate(e.date);
        });
    </script>
    <!-- Custom Theme JavaScript -->
    <script src=\"{{ base_url() }}dist/js/sb-admin-2.js\"></script>

</body>

</html>
", "templates/footer.twig", "C:\\xampp\\htdocs\\projekt\\application\\views\\templates\\footer.twig");
    }
}
