<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base/components/datatable/static/formtablerow/layout.html.twig */
class __TwigTemplate_2b8d032b6b98acbdd0f5d0007519906149b66074d09a47f7dae5b87bd91d03ba extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        echo "
<tr id=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetRef", [], "method"), "html", null, true);
        echo "_row_";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetRowId", [], "method"), "html", null, true);
        echo "\" ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetData", [], "method"));
        foreach ($context['_seq'] as $context["cellName"] => $context["cellValue"]) {
            // line 5
            echo "        ";
            if (($context["cellName"] === "@class")) {
                echo " class=\"";
                echo twig_escape_filter($this->env, $context["cellValue"], "html", null, true);
                echo "\"";
            }
            // line 6
            echo "        ";
            if (($context["cellName"] === "@meta")) {
                echo " ";
                echo $context["cellValue"];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['cellName'], $context['cellValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo ">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetColumns", [], "method"));
        foreach ($context['_seq'] as $context["colName"] => $context["column"]) {
            // line 9
            echo "        <td>
            ";
            // line 10
            $context["cellValueHtml"] = "";
            // line 11
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetData", [], "method"));
            foreach ($context['_seq'] as $context["cellName"] => $context["cellValue"]) {
                // line 12
                echo "                ";
                if (($context["cellName"] == $context["colName"])) {
                    // line 13
                    echo "                    ";
                    $context["cellValueHtml"] = $context["cellValue"];
                    // line 14
                    echo "                ";
                }
                // line 15
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['cellName'], $context['cellValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "            ";
            if (twig_test_empty(($context["cellValueHtml"] ?? null))) {
                // line 17
                echo "                ";
                $context["cellValueHtml"] = "&nbsp;";
                // line 18
                echo "            ";
            }
            // line 19
            echo "            ";
            echo ($context["cellValueHtml"] ?? null);
            echo "
        </td>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['colName'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</tr>";
    }

    public function getTemplateName()
    {
        return "base/components/datatable/static/formtablerow/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 22,  99 => 19,  96 => 18,  93 => 17,  90 => 16,  84 => 15,  81 => 14,  78 => 13,  75 => 12,  70 => 11,  68 => 10,  65 => 9,  61 => 8,  58 => 7,  48 => 6,  41 => 5,  33 => 4,  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/datatable/static/formtablerow/layout.html.twig", "/var/www/html/itop/templates/base/components/datatable/static/formtablerow/layout.html.twig");
    }
}
