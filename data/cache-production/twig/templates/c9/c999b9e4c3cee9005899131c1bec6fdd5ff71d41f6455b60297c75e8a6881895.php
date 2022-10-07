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

/* pages/backoffice/webpage/layout.html.twig */
class __TwigTemplate_3ad7f87bdf0787df27a64300cf70bc84a2505f2e44efd7d8ee73ec58c6765e8b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'iboPageExtraMetas' => [$this, 'block_iboPageExtraMetas'],
            'iboPageCssFiles' => [$this, 'block_iboPageCssFiles'],
            'iboPageCssInline' => [$this, 'block_iboPageCssInline'],
            'iboPageJsInlineEarly' => [$this, 'block_iboPageJsInlineEarly'],
            'iboPageBodyHtml' => [$this, 'block_iboPageBodyHtml'],
            'iboDeferredBlocks' => [$this, 'block_iboDeferredBlocks'],
            'iboPageJsFiles' => [$this, 'block_iboPageJsFiles'],
            'iboPageJsInlineScripts' => [$this, 'block_iboPageJsInlineScripts'],
            'iboPageJsInlineOnInit' => [$this, 'block_iboPageJsInlineOnInit'],
            'iboPageJsInlineOnDomReady' => [$this, 'block_iboPageJsInlineOnDomReady'],
            'iboPageJsInlineLive' => [$this, 'block_iboPageJsInlineLive'],
            'iboCapturedOutput' => [$this, 'block_iboCapturedOutput'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["aPage"] ?? null), "aMetadata", []), "sLang", []), "html", null, true);
        echo "\">
<head>
    <meta charset=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["aPage"] ?? null), "aMetadata", []), "sCharset", []), "html", null, true);
        echo "\">
    ";
        // line 8
        echo "    ";
        $this->displayBlock('iboPageExtraMetas', $context, $blocks);
        // line 10
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["aPage"] ?? null), "aMetadata", [], "any", false, true), "sBaseUrl", [], "any", true, true) || $this->getAttribute($this->getAttribute(($context["aPage"] ?? null), "aMetadata", [], "any", false, true), "sBaseTarget", [], "any", true, true))) {
            // line 11
            echo "        <base ";
            if ($this->getAttribute($this->getAttribute(($context["aPage"] ?? null), "aMetadata", [], "any", false, true), "sBaseUrl", [], "any", true, true)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["aPage"] ?? null), "aMetadata", []), "sBaseUrl", []), "html", null, true);
                echo "\"";
            }
            echo " ";
            if ($this->getAttribute($this->getAttribute(($context["aPage"] ?? null), "aMetadata", [], "any", false, true), "sBaseTarget", [], "any", true, true)) {
                echo "target=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["aPage"] ?? null), "aMetadata", []), "sBaseTarget", []), "html", null, true);
                echo "\"";
            }
            echo ">
    ";
        }
        // line 13
        echo "    <title>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aPage"] ?? null), "sTitle", []), "html", null, true);
        echo "</title>
    ";
        // line 14
        if ($this->getAttribute(($context["aPage"] ?? null), "sFaviconUrl", [], "any", true, true)) {
            // line 15
            echo "        <link rel=\"shortcut icon\" href=\"";
            echo call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), [$this->getAttribute(($context["aPage"] ?? null), "sFaviconUrl", [])]);
            echo "\">
    ";
        }
        // line 17
        echo "    <link rel=\"search\" type=\"application/opensearchdescription+xml\" title=\"iTop\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aPage"] ?? null), "sAbsoluteUrlAppRoot", []), "html", null, true);
        echo "pages/opensearch.xml.php\">
    ";
        // line 19
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aPage"] ?? null), "aPreloadedFonts", []));
        foreach ($context['_seq'] as $context["_key"] => $context["aPreloadedFont"]) {
            // line 20
            echo "        <link rel=\"preload\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["aPreloadedFont"], "font", [], "array"), "html", null, true);
            echo "\" as=\"font\" type=\"font/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["aPreloadedFont"], "type", [], "array"), "html", null, true);
            echo "\" crossorigin>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aPreloadedFont'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    ";
        // line 25
        echo "    ";
        $this->displayBlock('iboPageCssFiles', $context, $blocks);
        // line 32
        echo "
    ";
        // line 33
        $this->displayBlock('iboPageCssInline', $context, $blocks);
        // line 41
        echo "
    ";
        // line 42
        $this->displayBlock('iboPageJsInlineEarly', $context, $blocks);
        // line 50
        echo "</head>
<body data-gui-type=\"backoffice\">
";
        // line 52
        if ($this->getAttribute(($context["aPage"] ?? null), "isPrintable", [])) {
            // line 53
            echo "<div class=\"printable-content\" style=\"width: 27.7cm;\"> ";
        }
        // line 54
        echo "    ";
        $this->displayBlock('iboPageBodyHtml', $context, $blocks);
        // line 60
        echo "    ";
        if ($this->getAttribute(($context["aPage"] ?? null), "isPrintable", [])) {
            echo "</div> ";
        }
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('iboDeferredBlocks', $context, $blocks);
        // line 67
        if ( !twig_test_empty($this->getAttribute(($context["aPage"] ?? null), "aJsFiles", []))) {
            // line 68
            echo "    <script type=\"text/javascript\">
    var aListJsFiles = [];
    ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aPage"] ?? null), "aJsFiles", []));
            foreach ($context['_seq'] as $context["_key"] => $context["sJsFile"]) {
                // line 71
                echo "            aListJsFiles.push(\"";
                echo $context["sJsFile"];
                echo "\");
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sJsFile'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "    </script>
";
        }
        // line 75
        $this->displayBlock('iboPageJsFiles', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('iboPageJsInlineScripts', $context, $blocks);
        // line 111
        echo "
";
        // line 112
        $this->displayBlock('iboCapturedOutput', $context, $blocks);
        // line 115
        echo "
</body>
</html>";
    }

    // line 8
    public function block_iboPageExtraMetas($context, array $blocks = [])
    {
        // line 9
        echo "    ";
    }

    // line 25
    public function block_iboPageCssFiles($context, array $blocks = [])
    {
        // line 26
        echo "\t    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aPage"] ?? null), "aCssFiles", []));
        foreach ($context['_seq'] as $context["_key"] => $context["aCssFileData"]) {
            // line 27
            echo "\t\t    ";
            if (($this->getAttribute($context["aCssFileData"], "condition", [], "array") != "")) {
                echo "<!--[if ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["aCssFileData"], "condition", [], "array"), "html", null, true);
                echo "]>";
            }
            // line 28
            echo "\t\t\t<link type=\"text/css\" href=\"";
            echo call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), [$this->getAttribute($context["aCssFileData"], "link", [], "array")]);
            echo "\" rel=\"stylesheet\">
\t\t\t";
            // line 29
            if (($this->getAttribute($context["aCssFileData"], "condition", [], "array") != "")) {
                echo "<![endif]-->";
            }
            // line 30
            echo "\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aCssFileData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    ";
    }

    // line 33
    public function block_iboPageCssInline($context, array $blocks = [])
    {
        // line 34
        echo "        ";
        // line 35
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aPage"] ?? null), "aCssInline", []));
        foreach ($context['_seq'] as $context["_key"] => $context["sCssInline"]) {
            // line 36
            echo "            <style>
                ";
            // line 37
            echo $context["sCssInline"];
            echo "
            </style>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sCssInline'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    ";
    }

    // line 42
    public function block_iboPageJsInlineEarly($context, array $blocks = [])
    {
        // line 43
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aPage"] ?? null), "aJsInlineEarly", []));
        foreach ($context['_seq'] as $context["_key"] => $context["sJsInline"]) {
            // line 44
            echo "            ";
            // line 45
            echo "            <script type=\"text/javascript\">
            ";
            // line 46
            echo $context["sJsInline"];
            echo "
            </script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sJsInline'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    ";
    }

    // line 54
    public function block_iboPageBodyHtml($context, array $blocks = [])
    {
        // line 55
        echo "
        <div id=\"ibo-page-container\">
            ";
        // line 57
        echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [($context["oLayout"] ?? null), ["aPage" => ($context["aPage"] ?? null)]]);
        echo "
        </div>
    ";
    }

    // line 62
    public function block_iboDeferredBlocks($context, array $blocks = [])
    {
        // line 63
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["aDeferredBlocks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["oBlock"]) {
            // line 64
            echo "        ";
            echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$context["oBlock"], ["aPage" => ($context["aPage"] ?? null)]]);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 75
    public function block_iboPageJsFiles($context, array $blocks = [])
    {
        // line 76
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aPage"] ?? null), "aJsFiles", []));
        foreach ($context['_seq'] as $context["_key"] => $context["sJsFile"]) {
            // line 77
            echo "        <script type=\"text/javascript\" src=\"";
            echo call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), [$context["sJsFile"]]);
            echo "\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sJsFile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 81
    public function block_iboPageJsInlineScripts($context, array $blocks = [])
    {
        // line 82
        echo "    ";
        if (( !twig_test_empty($this->getAttribute(($context["aPage"] ?? null), "aJsInlineOnInit", [])) ||  !twig_test_empty($this->getAttribute(($context["aPage"] ?? null), "aJsInlineOnDomReady", [])))) {
            // line 83
            echo "        <script type=\"text/javascript\">
            ";
            // line 85
            echo "            \$(document).ready(function () {
                ";
            // line 86
            $this->displayBlock('iboPageJsInlineOnInit', $context, $blocks);
            // line 91
            echo "
                ";
            // line 92
            $this->displayBlock('iboPageJsInlineOnDomReady', $context, $blocks);
            // line 99
            echo "            });
        </script>
    ";
        }
        // line 102
        echo "    ";
        $this->displayBlock('iboPageJsInlineLive', $context, $blocks);
    }

    // line 86
    public function block_iboPageJsInlineOnInit($context, array $blocks = [])
    {
        // line 87
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aPage"] ?? null), "aJsInlineOnInit", []));
        foreach ($context['_seq'] as $context["_key"] => $context["sJsInline"]) {
            // line 88
            echo "                        ";
            echo $context["sJsInline"];
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sJsInline'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                ";
    }

    // line 92
    public function block_iboPageJsInlineOnDomReady($context, array $blocks = [])
    {
        // line 93
        echo "                    setTimeout(function () {
                        ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aPage"] ?? null), "aJsInlineOnDomReady", []));
        foreach ($context['_seq'] as $context["_key"] => $context["sJsInline"]) {
            // line 95
            echo "                        ";
            echo $context["sJsInline"];
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sJsInline'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                    }, 50);
                ";
    }

    // line 102
    public function block_iboPageJsInlineLive($context, array $blocks = [])
    {
        // line 103
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aPage"] ?? null), "aJsInlineLive", []));
        foreach ($context['_seq'] as $context["_key"] => $context["sJsInline"]) {
            // line 104
            echo "            ";
            // line 105
            echo "            <script type=\"text/javascript\">
                ";
            // line 106
            echo $context["sJsInline"];
            echo "
            </script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sJsInline'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "    ";
    }

    // line 112
    public function block_iboCapturedOutput($context, array $blocks = [])
    {
        // line 113
        echo "    ";
        echo $this->getAttribute(($context["aPage"] ?? null), "sCapturedOutput", []);
        echo "
";
    }

    public function getTemplateName()
    {
        return "pages/backoffice/webpage/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  436 => 113,  433 => 112,  429 => 109,  420 => 106,  417 => 105,  415 => 104,  410 => 103,  407 => 102,  402 => 97,  393 => 95,  389 => 94,  386 => 93,  383 => 92,  379 => 90,  370 => 88,  365 => 87,  362 => 86,  357 => 102,  352 => 99,  350 => 92,  347 => 91,  345 => 86,  342 => 85,  339 => 83,  336 => 82,  333 => 81,  322 => 77,  317 => 76,  314 => 75,  303 => 64,  298 => 63,  295 => 62,  288 => 57,  284 => 55,  281 => 54,  277 => 49,  268 => 46,  265 => 45,  263 => 44,  258 => 43,  255 => 42,  251 => 40,  242 => 37,  239 => 36,  234 => 35,  232 => 34,  229 => 33,  225 => 31,  219 => 30,  215 => 29,  210 => 28,  203 => 27,  198 => 26,  195 => 25,  191 => 9,  188 => 8,  182 => 115,  180 => 112,  177 => 111,  175 => 81,  172 => 80,  170 => 75,  166 => 73,  157 => 71,  153 => 70,  149 => 68,  147 => 67,  145 => 62,  142 => 61,  137 => 60,  134 => 54,  131 => 53,  129 => 52,  125 => 50,  123 => 42,  120 => 41,  118 => 33,  115 => 32,  112 => 25,  110 => 22,  99 => 20,  94 => 19,  89 => 17,  83 => 15,  81 => 14,  76 => 13,  60 => 11,  57 => 10,  54 => 8,  50 => 6,  45 => 4,  42 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "pages/backoffice/webpage/layout.html.twig", "/var/www/html/itop/templates/pages/backoffice/webpage/layout.html.twig");
    }
}
