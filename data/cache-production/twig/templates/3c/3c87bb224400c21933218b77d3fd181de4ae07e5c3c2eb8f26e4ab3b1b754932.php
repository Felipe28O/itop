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

/* base/layouts/tab-container/layout.html.twig */
class __TwigTemplate_58774d88036b37bac4971ab80becf2d194fc020a3b0f8bcd7d0f5fe93d3c4257 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'iboTabContainer' => [$this, 'block_iboTabContainer'],
            'iboTabContainerTabsList' => [$this, 'block_iboTabContainerTabsList'],
            'iboTabContainerTab' => [$this, 'block_iboTabContainerTab'],
            'iboTabContainerTabsContainers' => [$this, 'block_iboTabContainerTabsContainers'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        echo "<div id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method"), "html", null, true);
        echo " ibo-is-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetLayout", [], "method"), "html", null, true);
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "GetIsScrollable", [], "method")) {
            echo " ibo-is-scrollable";
        }
        echo "\"
     data-role=\"ibo-tab-container\" data-status=\"loading\">
    ";
        // line 5
        $this->displayBlock('iboTabContainer', $context, $blocks);
        // line 87
        echo "</div>

";
    }

    // line 5
    public function block_iboTabContainer($context, array $blocks = [])
    {
        // line 6
        echo "        <ul class=\"ibo-tab-container--tabs-list\" data-role=\"ibo-tab-container--tabs-list\">
            ";
        // line 7
        if ( !$this->getAttribute(($context["aPage"] ?? null), "isPrintable", [])) {
            // line 8
            echo "                ";
            $this->displayBlock('iboTabContainerTabsList', $context, $blocks);
            // line 51
            echo "            ";
        }
        // line 52
        echo "        </ul>

        ";
        // line 54
        $this->displayBlock('iboTabContainerTabsContainers', $context, $blocks);
        // line 85
        echo "
    ";
    }

    // line 8
    public function block_iboTabContainerTabsList($context, array $blocks = [])
    {
        // line 9
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method"));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["oTab"]) {
            // line 10
            echo "                        ";
            $this->displayBlock('iboTabContainerTab', $context, $blocks);
            // line 33
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oTab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                    <li class=\"ibo-tab-container--extra-tabs-container ibo-tab-container--tab-header ibo-is-hidden\" data-role=\"ibo-tab-container--extra-tabs-container\">
                        <a href=\"#\" class=\"ibo-tab-container--extra-tabs-list-toggler\" data-role=\"ibo-tab-container--extra-tabs-list-toggler\"
                           aria-label=\"";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Layout:TabContainer:ExtraTabsListToggler:Label"]), "html", null, true);
        echo "\"
                           data-tooltip-content=\"";
        // line 37
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Layout:TabContainer:ExtraTabsListToggler:Label"]), "html", null, true);
        echo "\"
                        >
                            <span class=\"fas fa-ellipsis-v\"></span>
                        </a>
                        <div class=\"ibo-tab-container--extra-tabs-list ibo-is-hidden\" data-role=\"ibo-tab-container--extra-tabs-list\">
                            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["oTab"]) {
            // line 43
            echo "                                <a href=\"#tab_";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sanitize')->getCallable(), [$this->getAttribute($context["oTab"], "GetId", [], "method"), twig_constant("utils::ENUM_SANITIZATION_FILTER_ELEMENT_IDENTIFIER")]), "html", null, true);
            echo "\"
                                   class=\"ibo-tab-container--extra-tab-toggler\" data-role=\"ibo-tab-container--extra-tab-toggler\">
                                    <span>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["oTab"], "GetTitle", [], "method"), "html", null, true);
            echo "</span>
                                </a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oTab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                        </div>
                    </li>
                ";
    }

    // line 10
    public function block_iboTabContainerTab($context, array $blocks = [])
    {
        // line 11
        echo "                            ";
        if (($this->getAttribute(($context["oTab"] ?? null), "GetType", [], "method") == twig_constant("TabManager::ENUM_TAB_TYPE_AJAX"))) {
            // line 12
            echo "                                <li class=\"ibo-tab-container--tab-header\" data-role=\"ibo-tab-container--tab-header\"
                                    data-tab-id=\"tab_";
            // line 13
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sanitize')->getCallable(), [$this->getAttribute(($context["oTab"] ?? null), "GetId", [], "method"), twig_constant("utils::ENUM_SANITIZATION_FILTER_ELEMENT_IDENTIFIER")]), "html", null, true);
            echo "\"
                                    data-tab-type=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oTab"] ?? null), "GetType", [], "method"), "html", null, true);
            echo "\"
                                    data-cache=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oTab"] ?? null), "GetCache", [], "method"), "html", null, true);
            echo "\"
                                    data-placeholder=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oTab"] ?? null), "GetPlaceholderAbsPath", [], "method"), "html", null, true);
            echo "\">
                                    <a data-target=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oTab"] ?? null), "GetUrl", [], "method"), "html", null, true);
            echo "\" class=\"ibo-tab-container--tab-toggler\"
                                       data-role=\"ibo-tab-container--tab-toggler\">
                                        <span class=\"ibo-tab-container--tab-toggler-label\" data-role=\"ibo-tab-container--tab-toggler-label\" title=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oTab"] ?? null), "GetTitle", [], "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oTab"] ?? null), "GetTitle", [], "method"), "html", null, true);
            echo "</span>
                                    </a>
                                </li>
                            ";
        } elseif (($this->getAttribute(        // line 22
($context["oTab"] ?? null), "GetType", [], "method") == twig_constant("TabManager::ENUM_TAB_TYPE_HTML"))) {
            // line 23
            echo "                                <li class=\"ibo-tab-container--tab-header\" data-role=\"ibo-tab-container--tab-header\"
                                    data-tab-id=\"tab_";
            // line 24
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sanitize')->getCallable(), [$this->getAttribute(($context["oTab"] ?? null), "GetId", [], "method"), twig_constant("utils::ENUM_SANITIZATION_FILTER_ELEMENT_IDENTIFIER")]), "html", null, true);
            echo "\"
                                    data-tab-type=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oTab"] ?? null), "GetType", [], "method"), "html", null, true);
            echo "\">
                                    <a href=\"#tab_";
            // line 26
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sanitize')->getCallable(), [$this->getAttribute(($context["oTab"] ?? null), "GetId", [], "method"), twig_constant("utils::ENUM_SANITIZATION_FILTER_ELEMENT_IDENTIFIER")]), "html", null, true);
            echo "\"
                                       class=\"ibo-tab-container--tab-toggler\" data-role=\"ibo-tab-container--tab-toggler\">
                                        <span class=\"ibo-tab-container--tab-toggler-label\" data-role=\"ibo-tab-container--tab-toggler-label\" title=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oTab"] ?? null), "GetTitle", [], "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oTab"] ?? null), "GetTitle", [], "method"), "html", null, true);
            echo "</span>
                                    </a>
                                </li>
                            ";
        }
        // line 32
        echo "                        ";
    }

    // line 54
    public function block_iboTabContainerTabsContainers($context, array $blocks = [])
    {
        // line 55
        echo "            ";
        if ( !$this->getAttribute(($context["aPage"] ?? null), "isPrintable", [])) {
            // line 56
            echo "                <div id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
            echo "--tab-container-list\" class=\"ibo-tab-container--tab-container-list";
            if ($this->getAttribute(($context["oUIBlock"] ?? null), "GetIsScrollable", [], "method")) {
                echo " ibo-is-scrollable";
            }
            echo "\" data-role=\"ibo-tab-container--tab-container-list\">
                    ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["oTab"]) {
                // line 58
                echo "                        ";
                if (($this->getAttribute($context["oTab"], "GetType", [], "method") == twig_constant("TabManager::ENUM_TAB_TYPE_HTML"))) {
                    // line 59
                    echo "                            <div id=\"tab_";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sanitize')->getCallable(), [$this->getAttribute($context["oTab"], "GetId", [], "method"), twig_constant("utils::ENUM_SANITIZATION_FILTER_ELEMENT_IDENTIFIER")]), "html", null, true);
                    echo "\"
                                 class=\"ibo-tab-container--tab-container\">
                                <div class=\"ibo-tab-container--tab-container--label\"><span>";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute($context["oTab"], "GetTitle", [], "method"), "html", null, true);
                    echo "</span></div>
                                ";
                    // line 62
                    echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$context["oTab"], ["aPage" => ($context["aPage"] ?? null)]]);
                    echo "
                            </div>
                        ";
                }
                // line 65
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oTab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                </div>
            ";
        } else {
            // line 68
            echo "                <div id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
            echo "--tab-container-list\" class=\"ibo-tab-container--tab-container-list{\" data-role=\"ibo-tab-container--tab-container-list\">
                ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["oTab"]) {
                // line 70
                echo "                    <div id=\"tab_";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sanitize')->getCallable(), [$this->getAttribute($context["oTab"], "GetId", [], "method"), twig_constant("utils::ENUM_SANITIZATION_FILTER_ELEMENT_IDENTIFIER")]), "html", null, true);
                echo "\"
                         class=\"ibo-tab-container--tab-container\">
                        <div class=\"ibo-title--text title\">
                            ";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["oTab"], "GetTitle", [], "method"), "html", null, true);
                echo "
                        </div>
                        ";
                // line 75
                if (($this->getAttribute($context["oTab"], "GetType", [], "method") == twig_constant("TabManager::ENUM_TAB_TYPE_HTML"))) {
                    // line 76
                    echo "                            ";
                    echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$context["oTab"], ["aPage" => ($context["aPage"] ?? null)]]);
                    echo "
                        ";
                } else {
                    // line 78
                    echo "                            <div class=\"printable-tab-content\"></div>
                        ";
                }
                // line 80
                echo "                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oTab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                </div>
            ";
        }
        // line 84
        echo "        ";
    }

    public function getTemplateName()
    {
        return "base/layouts/tab-container/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 84,  318 => 82,  311 => 80,  307 => 78,  301 => 76,  299 => 75,  294 => 73,  287 => 70,  283 => 69,  278 => 68,  274 => 66,  268 => 65,  262 => 62,  258 => 61,  252 => 59,  249 => 58,  245 => 57,  236 => 56,  233 => 55,  230 => 54,  226 => 32,  217 => 28,  212 => 26,  208 => 25,  204 => 24,  201 => 23,  199 => 22,  191 => 19,  186 => 17,  182 => 16,  178 => 15,  174 => 14,  170 => 13,  167 => 12,  164 => 11,  161 => 10,  155 => 48,  146 => 45,  140 => 43,  136 => 42,  128 => 37,  124 => 36,  120 => 34,  106 => 33,  103 => 10,  85 => 9,  82 => 8,  77 => 85,  75 => 54,  71 => 52,  68 => 51,  65 => 8,  63 => 7,  60 => 6,  57 => 5,  51 => 87,  49 => 5,  34 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/tab-container/layout.html.twig", "/var/www/html/itop/templates/base/layouts/tab-container/layout.html.twig");
    }
}
