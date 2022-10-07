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

/* base/components/panel/layout.html.twig */
class __TwigTemplate_8ef3c0600919fd508c86e3a2592e21f09f552a35fc91d8aff1681a3175aed1e6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'iboPanelMetaData' => [$this, 'block_iboPanelMetaData'],
            'iboPanelHeader' => [$this, 'block_iboPanelHeader'],
            'iboPanelHeaderLeft' => [$this, 'block_iboPanelHeaderLeft'],
            'iboPanelIcon' => [$this, 'block_iboPanelIcon'],
            'iboPanelTitles' => [$this, 'block_iboPanelTitles'],
            'iboPanelTitle' => [$this, 'block_iboPanelTitle'],
            'iboPanelSubTitle' => [$this, 'block_iboPanelSubTitle'],
            'iboPanelHeaderRight' => [$this, 'block_iboPanelHeaderRight'],
            'iboPanelToolbar' => [$this, 'block_iboPanelToolbar'],
            'iboPanelBody' => [$this, 'block_iboPanelBody'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "\"
         class=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetCSSColorClass", [], "method"), "html", null, true);
        echo " ";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "HasIcon", [], "method")) {
            echo "ibo-has-icon";
        }
        echo " ";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "IsIconAsMedallion", [], "method")) {
            echo "ibo-has-medallion-icon";
        }
        echo " ";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "IsHidden", [], "method")) {
            echo "ibo-is-hidden";
        }
        echo " ibo-is-opened\"
            ";
        // line 5
        $this->displayBlock('iboPanelMetaData', $context, $blocks);
        // line 6
        echo "         data-role=\"ibo-panel\">
        <div class=\"ibo-panel--header\" data-role=\"ibo-panel--header\">
            ";
        // line 8
        $this->displayBlock('iboPanelHeader', $context, $blocks);
        // line 50
        echo "        </div>
        <div class=\"ibo-panel--body\" data-role=\"ibo-panel--body\">
            ";
        // line 52
        $this->displayBlock('iboPanelBody', $context, $blocks);
        // line 57
        echo "        </div>
    </div>";
    }

    // line 5
    public function block_iboPanelMetaData($context, array $blocks = [])
    {
    }

    // line 8
    public function block_iboPanelHeader($context, array $blocks = [])
    {
        // line 9
        echo "                <div class=\"ibo-panel--header-left\" data-role=\"ibo-panel--header-left\">
                    ";
        // line 10
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "isCollapsible", [], "method")) {
            // line 11
            echo "                        <div class=\"ibo-panel--collapsible-toggler\" data-role=\"ibo-panel--collapsible-toggler\">
                            <i class=\"fas fa-caret-right ibo-panel--collapsible-toggler--closed\"></i>
                            <i class=\"fas fa-caret-down ibo-panel--collapsible-toggler--opened\"></i>
                        </div>
                    ";
        }
        // line 16
        echo "                    ";
        $this->displayBlock('iboPanelHeaderLeft', $context, $blocks);
        // line 37
        echo "                </div>
                <div class=\"ibo-panel--header-right\" data-role=\"ibo-panel--header-right\">
                    ";
        // line 39
        $this->displayBlock('iboPanelHeaderRight', $context, $blocks);
        // line 48
        echo "                </div>
            ";
    }

    // line 16
    public function block_iboPanelHeaderLeft($context, array $blocks = [])
    {
        // line 17
        echo "                        ";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "HasIcon", [], "method")) {
            // line 18
            echo "                            <div class=\"ibo-panel--icon\" data-role=\"ibo-panel--icon\">
                                ";
            // line 19
            $this->displayBlock('iboPanelIcon', $context, $blocks);
            // line 22
            echo "                            </div>
                        ";
        }
        // line 24
        echo "                        ";
        if (($this->getAttribute(($context["oUIBlock"] ?? null), "HasTitle", [], "method") || $this->getAttribute(($context["oUIBlock"] ?? null), "HasSubTitle", [], "method"))) {
            // line 25
            echo "                            <div class=\"ibo-panel--titles\" data-role=\"ibo-panel--titles\">
                                ";
            // line 26
            $this->displayBlock('iboPanelTitles', $context, $blocks);
            // line 34
            echo "                            </div>
                        ";
        }
        // line 36
        echo "                    ";
    }

    // line 19
    public function block_iboPanelIcon($context, array $blocks = [])
    {
        // line 20
        echo "                                    <div class=\"ibo-panel--icon-background ibo-panel--icon-background--must-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetIconCoverMethod", [], "method"), "html", null, true);
        echo "\" data-role=\"ibo-panel--icon-background\" style=\"background-image: url('";
        echo $this->getAttribute(($context["oUIBlock"] ?? null), "GetIconUrl", [], "method");
        echo "');\"></div>
                                ";
    }

    // line 26
    public function block_iboPanelTitles($context, array $blocks = [])
    {
        // line 27
        echo "                                    ";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "HasTitle", [], "method")) {
            // line 28
            echo "                                        <div class=\"ibo-panel--title\" data-role=\"ibo-panel--title\">";
            $this->displayBlock('iboPanelTitle', $context, $blocks);
            echo "</div>
                                    ";
        }
        // line 30
        echo "                                    ";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "HasSubTitle", [], "method")) {
            // line 31
            echo "                                        <div class=\"ibo-panel--subtitle\" data-role=\"ibo-panel--subtitle\">";
            $this->displayBlock('iboPanelSubTitle', $context, $blocks);
            echo "</div>
                                    ";
        }
        // line 33
        echo "                                ";
    }

    // line 28
    public function block_iboPanelTitle($context, array $blocks = [])
    {
        echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$this->getAttribute(($context["oUIBlock"] ?? null), "GetTitleBlock", [], "method")]);
    }

    // line 31
    public function block_iboPanelSubTitle($context, array $blocks = [])
    {
        echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$this->getAttribute(($context["oUIBlock"] ?? null), "GetSubTitleBlock", [], "method")]);
    }

    // line 39
    public function block_iboPanelHeaderRight($context, array $blocks = [])
    {
        // line 40
        echo "                        <div class=\"ibo-panel--toolbar\">
                            ";
        // line 41
        $this->displayBlock('iboPanelToolbar', $context, $blocks);
        // line 46
        echo "                        </div>
                    ";
    }

    // line 41
    public function block_iboPanelToolbar($context, array $blocks = [])
    {
        // line 42
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetToolbarBlocks", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["oToolbarBlock"]) {
            // line 43
            echo "                                    ";
            echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$context["oToolbarBlock"], ["aPage" => ($context["aPage"] ?? null)]]);
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oToolbarBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                            ";
    }

    // line 52
    public function block_iboPanelBody($context, array $blocks = [])
    {
        // line 53
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetMainBlocks", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["oMainBlock"]) {
            // line 54
            echo "                    ";
            echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$context["oMainBlock"], ["aPage" => ($context["aPage"] ?? null)]]);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oMainBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            ";
    }

    public function getTemplateName()
    {
        return "base/components/panel/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 56,  240 => 54,  235 => 53,  232 => 52,  228 => 45,  219 => 43,  214 => 42,  211 => 41,  206 => 46,  204 => 41,  201 => 40,  198 => 39,  192 => 31,  186 => 28,  182 => 33,  176 => 31,  173 => 30,  167 => 28,  164 => 27,  161 => 26,  152 => 20,  149 => 19,  145 => 36,  141 => 34,  139 => 26,  136 => 25,  133 => 24,  129 => 22,  127 => 19,  124 => 18,  121 => 17,  118 => 16,  113 => 48,  111 => 39,  107 => 37,  104 => 16,  97 => 11,  95 => 10,  92 => 9,  89 => 8,  84 => 5,  79 => 57,  77 => 52,  73 => 50,  71 => 8,  67 => 6,  65 => 5,  45 => 4,  40 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/panel/layout.html.twig", "/var/www/html/itop/templates/base/components/panel/layout.html.twig");
    }
}
