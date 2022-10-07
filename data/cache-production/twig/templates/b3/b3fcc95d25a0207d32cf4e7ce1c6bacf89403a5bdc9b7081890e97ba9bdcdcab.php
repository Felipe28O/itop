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

/* pages/backoffice/ajaxpage/layout.html.twig */
class __TwigTemplate_32d0e5d972fd888a0f8ed4d045c1b9e2a346268dbc89e524ff47e204fe8d664f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'iboPageJsInlineEarly' => [$this, 'block_iboPageJsInlineEarly'],
            'iboPageJsInlineLive' => [$this, 'block_iboPageJsInlineLive'],
            'iboPageJsFiles' => [$this, 'block_iboPageJsFiles'],
            'iboPageJsInlineOnDomReady' => [$this, 'block_iboPageJsInlineOnDomReady'],
            'iboPageCssFiles' => [$this, 'block_iboPageCssFiles'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        ob_start(function () { return ''; });
        // line 4
        echo "    ";
        if (($context["bEscapeContent"] ?? null)) {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('render_block')->getCallable(), [($context["oLayout"] ?? null), ["aPage" => ($context["aPage"] ?? null)]]));
            echo "
    ";
        } else {
            // line 7
            echo "        ";
            echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [($context["oLayout"] ?? null), ["aPage" => ($context["aPage"] ?? null)]]);
            echo "
    ";
        }
        // line 9
        echo "
    ";
        // line 10
        $this->displayBlock('iboPageJsInlineEarly', $context, $blocks);
        // line 18
        echo "
\t";
        // line 19
        $this->displayBlock('iboPageJsInlineLive', $context, $blocks);
        // line 32
        echo "
    ";
        // line 33
        $context["sPromiseId"] = $this->getAttribute(($context["aPage"] ?? null), "sPromiseId", []);
        // line 34
        echo "\t";
        if ( !twig_test_empty($this->getAttribute(($context["aPage"] ?? null), "aJsFiles", []))) {
            // line 35
            echo "        ";
            $context["sId"] = call_user_func_array($this->env->getFilter('sanitize')->getCallable(), [$this->getAttribute(($context["oLayout"] ?? null), "GetId", [], "method"), twig_constant("utils::ENUM_SANITIZATION_FILTER_VARIABLE_NAME")]);
            // line 36
            echo "        ";
            $this->displayBlock('iboPageJsFiles', $context, $blocks);
            // line 89
            echo "    ";
        } else {
            // line 90
            echo "        ";
            $this->displayBlock('iboPageJsInlineOnDomReady', $context, $blocks);
            // line 100
            echo "    ";
        }
        // line 101
        echo "
    ";
        // line 102
        if ( !twig_test_empty(($context["aDeferredBlocks"] ?? null))) {
            // line 103
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["aDeferredBlocks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oBlock"]) {
                // line 104
                echo "            ";
                echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$context["oBlock"], ["aPage" => ($context["aPage"] ?? null)]]);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "    ";
        }
        // line 107
        echo "
    ";
        // line 108
        if (($context["sDeferredContent"] ?? null)) {
            // line 109
            echo "        <script type=\"text/javascript\">
            \$('body').append('";
            // line 110
            echo ($context["sDeferredContent"] ?? null);
            echo "');
        </script>
    ";
        }
        // line 113
        echo "
    ";
        // line 114
        $this->displayBlock('iboPageCssFiles', $context, $blocks);
        // line 121
        echo "
    ";
        // line 122
        echo $this->getAttribute(($context["aPage"] ?? null), "sCapturedOutput", []);
        echo "

";
        $___internal_3e59e53cde1e27974dc09758059ecfdf530c94f7c0150227b292a48f59d9ccc9_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_3e59e53cde1e27974dc09758059ecfdf530c94f7c0150227b292a48f59d9ccc9_);
    }

    // line 10
    public function block_iboPageJsInlineEarly($context, array $blocks = [])
    {
        // line 11
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aPage"] ?? null), "aJsInlineEarly", []));
        foreach ($context['_seq'] as $context["_key"] => $context["sJsInline"]) {
            // line 12
            echo "            ";
            // line 13
            echo "            <script type=\"text/javascript\">
            ";
            // line 14
            echo $context["sJsInline"];
            echo "
            </script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sJsInline'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    ";
    }

    // line 19
    public function block_iboPageJsInlineLive($context, array $blocks = [])
    {
        // line 20
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aPage"] ?? null), "aJsInlineLive", []));
        foreach ($context['_seq'] as $context["_key"] => $context["sJsInline"]) {
            // line 21
            echo "\t\t\t";
            // line 22
            echo "\t\t\t<script type=\"text/javascript\">
\t\t\t\t";
            // line 23
            echo $context["sJsInline"];
            echo "
\t\t\t</script>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sJsInline'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aPage"] ?? null), "aJsInlineOnInit", []));
        foreach ($context['_seq'] as $context["_key"] => $context["sJsInline"]) {
            // line 27
            echo "\t\t\t<script type=\"text/javascript\">
\t\t\t\t";
            // line 28
            echo $context["sJsInline"];
            echo "
\t\t\t</script>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sJsInline'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t";
    }

    // line 36
    public function block_iboPageJsFiles($context, array $blocks = [])
    {
        // line 37
        echo "            <script type=\"text/javascript\">
            window['";
        // line 38
        echo twig_escape_filter($this->env, ($context["sPromiseId"] ?? null), "html", null, true);
        echo "'] = new Promise(function (resolve, reject) {
                let fInlineOnDomReadyScript";
        // line 39
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo " = function () {
                    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aPage"] ?? null), "aJsInlineOnDomReady", []));
        foreach ($context['_seq'] as $context["_key"] => $context["sJsInlineOnDomReady"]) {
            // line 41
            echo "                    ";
            echo $context["sJsInlineOnDomReady"];
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sJsInlineOnDomReady'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                    resolve();
                }

                let aFilesToLoad";
        // line 46
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo " = [];

                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aPage"] ?? null), "aJsFiles", []));
        foreach ($context['_seq'] as $context["_key"] => $context["sJsFile"]) {
            // line 49
            echo "                if (\$.inArray('";
            echo $context["sJsFile"];
            echo "', aListJsFiles) === -1)
                {
                    aFilesToLoad";
            // line 51
            echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
            echo ".push('";
            echo call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), [$context["sJsFile"]]);
            echo "');
                    aListJsFiles.push(\"";
            // line 52
            echo $context["sJsFile"];
            echo "\");
                }
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sJsFile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
                let iCurrentIdx";
        // line 56
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo " = 0;
                let iFilesToLoadCount";
        // line 57
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo " = aFilesToLoad";
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo ".length;
                if (iFilesToLoadCount";
        // line 58
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo " > 0)
                {
                    let fLoadScript";
        // line 60
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo " = function () {
                        \$.when(
                                \$.ajax({
                                    url: aFilesToLoad";
        // line 63
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "[iCurrentIdx";
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "],
                                    dataType: 'script',
                                    cache: true
                                })
                                )
                                .then(function () {
                                    iCurrentIdx";
        // line 69
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "++;
                                    if (iCurrentIdx";
        // line 70
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo " !== iFilesToLoadCount";
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo ")
                                    {
                                        fLoadScript";
        // line 72
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "();
                                    }
                                    else
                                    {
                                        fInlineOnDomReadyScript";
        // line 76
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "();
                                    }
                                });
                    };
                    fLoadScript";
        // line 80
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "();
                }
                else
                {
                    fInlineOnDomReadyScript";
        // line 84
        echo twig_escape_filter($this->env, ($context["sId"] ?? null), "html", null, true);
        echo "();
                }
            });
            </script>
        ";
    }

    // line 90
    public function block_iboPageJsInlineOnDomReady($context, array $blocks = [])
    {
        // line 91
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aPage"] ?? null), "aJsInlineOnDomReady", []));
        foreach ($context['_seq'] as $context["_key"] => $context["sJsInlineOnDomReady"]) {
            // line 92
            echo "                <script type=\"text/javascript\">
                window['";
            // line 93
            echo twig_escape_filter($this->env, ($context["sPromiseId"] ?? null), "html", null, true);
            echo "'] = new Promise(function (resolve, reject) {
                    ";
            // line 94
            echo $context["sJsInlineOnDomReady"];
            echo "
                    resolve();
                });
                </script>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sJsInlineOnDomReady'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "        ";
    }

    // line 114
    public function block_iboPageCssFiles($context, array $blocks = [])
    {
        // line 115
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aPage"] ?? null), "aCssFiles", []));
        foreach ($context['_seq'] as $context["_key"] => $context["aCssFileData"]) {
            // line 116
            echo "            <script type=\"text/javascript\">
                if (!\$('link[href=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["aCssFileData"], "link", []), "html", null, true);
            echo "\"]').length) \$('<link href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["aCssFileData"], "link", []), "html", null, true);
            echo "\" rel=\"stylesheet\">').appendTo('head');
            </script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aCssFileData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "    ";
    }

    public function getTemplateName()
    {
        return "pages/backoffice/ajaxpage/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 120,  387 => 117,  384 => 116,  379 => 115,  376 => 114,  372 => 99,  361 => 94,  357 => 93,  354 => 92,  349 => 91,  346 => 90,  337 => 84,  330 => 80,  323 => 76,  316 => 72,  309 => 70,  305 => 69,  294 => 63,  288 => 60,  283 => 58,  277 => 57,  273 => 56,  270 => 55,  261 => 52,  255 => 51,  249 => 49,  245 => 48,  240 => 46,  235 => 43,  226 => 41,  222 => 40,  218 => 39,  214 => 38,  211 => 37,  208 => 36,  204 => 31,  195 => 28,  192 => 27,  187 => 26,  178 => 23,  175 => 22,  173 => 21,  168 => 20,  165 => 19,  161 => 17,  152 => 14,  149 => 13,  147 => 12,  142 => 11,  139 => 10,  135 => 3,  129 => 122,  126 => 121,  124 => 114,  121 => 113,  115 => 110,  112 => 109,  110 => 108,  107 => 107,  104 => 106,  95 => 104,  90 => 103,  88 => 102,  85 => 101,  82 => 100,  79 => 90,  76 => 89,  73 => 36,  70 => 35,  67 => 34,  65 => 33,  62 => 32,  60 => 19,  57 => 18,  55 => 10,  52 => 9,  46 => 7,  40 => 5,  37 => 4,  35 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "pages/backoffice/ajaxpage/layout.html.twig", "/var/www/html/itop/templates/pages/backoffice/ajaxpage/layout.html.twig");
    }
}
