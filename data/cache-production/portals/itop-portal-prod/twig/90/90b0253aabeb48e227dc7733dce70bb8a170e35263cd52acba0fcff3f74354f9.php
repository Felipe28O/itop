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

/* itop-portal-base/portal/templates/bricks/browse/layout.html.twig */
class __TwigTemplate_14cff8dda1154193029125def149f1b1105328e17a85883306f083cada1ff21d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'pPageBodyClass' => [$this, 'block_pPageBodyClass'],
            'pPageReadyScripts' => [$this, 'block_pPageReadyScripts'],
            'pMainHeaderTitle' => [$this, 'block_pMainHeaderTitle'],
            'pMainHeaderActions' => [$this, 'block_pMainHeaderActions'],
            'pMainContentHolder' => [$this, 'block_pMainContentHolder'],
            'bBrowseMainContent' => [$this, 'block_bBrowseMainContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "itop-portal-base/portal/templates/bricks/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("itop-portal-base/portal/templates/bricks/layout.html.twig", "itop-portal-base/portal/templates/bricks/browse/layout.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_pPageBodyClass($context, array $blocks = [])
    {
        $this->displayParentBlock("pPageBodyClass", $context, $blocks);
        echo " page_browse_brick page_browse_brick_as_";
        echo twig_escape_filter($this->env, ($context["sBrowseMode"] ?? null), "html", null, true);
    }

    // line 7
    public function block_pPageReadyScripts($context, array $blocks = [])
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("pPageReadyScripts", $context, $blocks);
        echo "
    ";
        // line 9
        $this->loadTemplate("itop-portal-base/portal/templates/helpers/tagset_clic_handler.js.twig", "itop-portal-base/portal/templates/bricks/browse/layout.html.twig", 9)->display($context);
    }

    // line 13
    public function block_pMainHeaderTitle($context, array $blocks = [])
    {
        // line 14
        echo "\t";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [$this->getAttribute(($context["oBrick"] ?? null), "GetTitle", [], "method")]), "html", null, true);
        echo "
";
    }

    // line 17
    public function block_pMainHeaderActions($context, array $blocks = [])
    {
        // line 18
        echo "\t";
        if ((twig_length_filter($this->env, ($context["aBrowseButtons"] ?? null)) > 1)) {
            // line 19
            echo "\t\t<div class=\"btn-group ";
            echo " btn_group_explicit\">
\t\t\t";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["aBrowseButtons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["sBrowseButton"]) {
                // line 21
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "url_generator", []), "generate", [0 => "p_browse_brick_mode", 1 => ["sBrickId" => ($context["sBrickId"] ?? null), "sBrowseMode" => $context["sBrowseButton"]]], "method"), "html", null, true);
                echo "\" class=\"btn btn-default ";
                if ((($context["sBrowseMode"] ?? null) == $context["sBrowseButton"])) {
                    echo "active";
                }
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [("Brick:Portal:Browse:Mode:" . twig_capitalize_string_filter($this->env, $context["sBrowseButton"]))]), "html", null, true);
                echo "</a>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sBrowseButton'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t\t</div>
\t";
        }
    }

    // line 27
    public function block_pMainContentHolder($context, array $blocks = [])
    {
        // line 28
        echo "\t";
        if (((($context["iItemsCount"] ?? null) > 0) ||  !(null === ($context["sSearchValue"] ?? null)))) {
            // line 29
            echo "\t\t<div class=\"panel panel-default\">
\t\t\t";
            // line 30
            $this->displayBlock('bBrowseMainContent', $context, $blocks);
            // line 32
            echo "\t\t</div>
\t";
        } else {
            // line 34
            echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-body\">
\t\t\t\t<h3 class=\"text-center\">";
            // line 36
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Brick:Portal:Browse:Filter:NoData"]), "html", null, true);
            echo "</h3>
\t\t\t</div>
\t\t</div>
\t";
        }
    }

    // line 30
    public function block_bBrowseMainContent($context, array $blocks = [])
    {
        // line 31
        echo "\t\t\t";
    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/templates/bricks/browse/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 31,  137 => 30,  128 => 36,  124 => 34,  120 => 32,  118 => 30,  115 => 29,  112 => 28,  109 => 27,  103 => 23,  88 => 21,  84 => 20,  80 => 19,  77 => 18,  74 => 17,  67 => 14,  64 => 13,  60 => 9,  55 => 8,  52 => 7,  44 => 5,  34 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "itop-portal-base/portal/templates/bricks/browse/layout.html.twig", "/var/www/html/itop/env-production/itop-portal-base/portal/templates/bricks/browse/layout.html.twig");
    }
}
