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

/* base/components/datatable/static/layout.html.twig */
class __TwigTemplate_b75aa9960e4f0cc1624a4f5d7cc2b6e59b3982b76d7eaec0b83dfb692031ec2b extends \Twig\Template
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
";
        // line 4
        $context["columns"] = $this->getAttribute(($context["oUIBlock"] ?? null), "GetColumns", [], "method");
        // line 5
        echo "<table id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "\" width=\"100%\" class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method"), "html", null, true);
        echo " listResults";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "IsHidden", [], "method")) {
            echo " ibo-is-hidden";
        }
        echo "\" data-role=\"ibo-datatable\">
    <thead>
    <tr>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 9
            echo "            <th class=\"ibo-datatable-header\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "description", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "label", []), "html", null, true);
            echo "</th>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </tr>
    </thead>
    <tbody>
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetData", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 15
            echo "       
        <tr ";
            // line 16
            if ( !twig_test_empty($this->getAttribute($context["data"], "@id", [], "array"))) {
                echo "id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "@id", [], "array"), "html", null, true);
                echo "\" ";
            }
            // line 17
            echo "            ";
            if ( !twig_test_empty($this->getAttribute($context["data"], "@class", [], "array"))) {
                echo " class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "@class", [], "array"), "html", null, true);
                echo "\"";
            }
            // line 18
            echo "            ";
            if ( !twig_test_empty($this->getAttribute($context["data"], "@meta", [], "array"))) {
                echo " ";
                echo $this->getAttribute($context["data"], "@meta", [], "array");
            }
            echo ">
        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["column"]) {
                // line 20
                echo "            <td ";
                if ( !twig_test_empty($this->getAttribute($context["column"], "class", []))) {
                    echo "class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "class", []), "html", null, true);
                    echo "\" ";
                }
                // line 21
                echo "                    ";
                if ( !twig_test_empty($this->getAttribute($context["column"], "metadata", []))) {
                    // line 22
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "metadata", []));
                    foreach ($context['_seq'] as $context["prop"] => $context["value"]) {
                        // line 23
                        echo "                            data-";
                        echo twig_escape_filter($this->env, twig_replace_filter($context["prop"], ["_" => "-"]), "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "\"
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['prop'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "                    ";
                }
                // line 26
                echo "                    ";
                $context["cellValueHtml"] = "";
                // line 27
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["data"]);
                foreach ($context['_seq'] as $context["cellName"] => $context["cellValue"]) {
                    // line 28
                    echo "                        ";
                    if (($context["cellName"] == $context["name"])) {
                        // line 29
                        echo "                            ";
                        if (twig_test_empty($this->getAttribute($context["cellValue"], "value_raw", []))) {
                            // line 30
                            echo "                                ";
                            $context["cellValueHtml"] = $context["cellValue"];
                            // line 31
                            echo "                            ";
                        } else {
                            // line 32
                            echo "                                data-value-raw=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["cellValue"], "value_raw", []), "html", null, true);
                            echo "\"
                                ";
                            // line 33
                            if ( !twig_test_empty($this->getAttribute($context["cellValue"], "value_html", []))) {
                                // line 34
                                echo "                                    ";
                                $context["cellValueHtml"] = $this->getAttribute($context["cellValue"], "value_html", []);
                                // line 35
                                echo "                                ";
                            }
                            // line 36
                            echo "                            ";
                        }
                        // line 37
                        echo "                        ";
                    }
                    // line 38
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['cellName'], $context['cellValue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "                    ";
                if (twig_test_empty(($context["cellValueHtml"] ?? null))) {
                    // line 40
                    echo "                        ";
                    $context["cellValueHtml"] = "&nbsp;";
                    // line 41
                    echo "                    ";
                }
                // line 42
                echo "            >";
                echo ($context["cellValueHtml"] ?? null);
                echo "</td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "base/components/datatable/static/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 46,  194 => 44,  185 => 42,  182 => 41,  179 => 40,  176 => 39,  170 => 38,  167 => 37,  164 => 36,  161 => 35,  158 => 34,  156 => 33,  151 => 32,  148 => 31,  145 => 30,  142 => 29,  139 => 28,  134 => 27,  131 => 26,  128 => 25,  117 => 23,  112 => 22,  109 => 21,  102 => 20,  98 => 19,  90 => 18,  83 => 17,  77 => 16,  74 => 15,  70 => 14,  65 => 11,  54 => 9,  50 => 8,  35 => 5,  33 => 4,  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/datatable/static/layout.html.twig", "/var/www/html/itop/templates/base/components/datatable/static/layout.html.twig");
    }
}
