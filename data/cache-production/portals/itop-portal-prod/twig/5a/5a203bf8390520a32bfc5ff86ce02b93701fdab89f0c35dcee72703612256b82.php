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

/* itop-portal-base/portal/templates/bricks/layout.html.twig */
class __TwigTemplate_6c10344fb380d6031813588ec2ba2cc45e8ff1c9ad753069d317c95076d7f130 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'pPageTitle' => [$this, 'block_pPageTitle'],
            'pPageBodyClass' => [$this, 'block_pPageBodyClass'],
            'pMainHeader' => [$this, 'block_pMainHeader'],
            'pMainHeaderTitle' => [$this, 'block_pMainHeaderTitle'],
            'pMainHeaderSubtitle' => [$this, 'block_pMainHeaderSubtitle'],
            'pMainHeaderActions' => [$this, 'block_pMainHeaderActions'],
            'pMainContent' => [$this, 'block_pMainContent'],
            'pMainContentHolder' => [$this, 'block_pMainContentHolder'],
            'pPageLiveScriptHelpers' => [$this, 'block_pPageLiveScriptHelpers'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", [], "array"), "properties", []), "templates", []), "layout", []), "itop-portal-base/portal/templates/bricks/layout.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_pPageTitle($context, array $blocks = [])
    {
        // line 6
        echo "\t";
        // line 7
        echo "\t";
        if ((((isset($context["oBrick"]) || array_key_exists("oBrick", $context)) &&  !(null === ($context["oBrick"] ?? null))) && ($this->getAttribute(($context["oBrick"] ?? null), "GetTitle", [], "method") != ""))) {
            // line 8
            echo "\t\t";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [$this->getAttribute(($context["oBrick"] ?? null), "GetTitle", [], "method")]), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_constant("ITOP_APPLICATION_SHORT"), "html", null, true);
            echo "
\t";
        } else {
            // line 10
            echo "\t\t";
            $this->displayParentBlock("pPageTitle", $context, $blocks);
            echo "
\t";
        }
    }

    // line 14
    public function block_pPageBodyClass($context, array $blocks = [])
    {
        $this->displayParentBlock("pPageBodyClass", $context, $blocks);
        echo " ";
        if (((isset($context["oBrick"]) || array_key_exists("oBrick", $context)) &&  !(null === ($context["oBrick"] ?? null)))) {
            echo "page_brick_of_id_";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oBrick"] ?? null), "GetId", [], "method"), "html", null, true);
        }
    }

    // line 16
    public function block_pMainHeader($context, array $blocks = [])
    {
        // line 17
        echo "\t<div class=\"col-xs-12\">
\t\t<div id=\"main-header-title\">
\t\t\t<h2>
\t\t\t\t";
        // line 20
        $this->displayBlock('pMainHeaderTitle', $context, $blocks);
        // line 21
        echo "\t\t\t\t";
        $this->displayBlock('pMainHeaderSubtitle', $context, $blocks);
        // line 26
        echo "\t\t\t</h2>
\t\t</div>
\t\t<div id=\"main-header-actions\">
\t\t\t";
        // line 29
        $this->displayBlock('pMainHeaderActions', $context, $blocks);
        // line 31
        echo "\t\t</div>
\t</div>
";
    }

    // line 20
    public function block_pMainHeaderTitle($context, array $blocks = [])
    {
    }

    // line 21
    public function block_pMainHeaderSubtitle($context, array $blocks = [])
    {
        // line 22
        echo "\t\t\t\t\t";
        if (((isset($context["sBrickSubtitle"]) || array_key_exists("sBrickSubtitle", $context)) &&  !(null === ($context["sBrickSubtitle"] ?? null)))) {
            // line 23
            echo "\t\t\t\t\t\t<small class=\"subtitle\">";
            echo twig_escape_filter($this->env, ($context["sBrickSubtitle"] ?? null), "html", null, true);
            echo "</small>
\t\t\t\t\t";
        }
        // line 25
        echo "\t\t\t\t";
    }

    // line 29
    public function block_pMainHeaderActions($context, array $blocks = [])
    {
        // line 30
        echo "\t\t\t";
    }

    // line 35
    public function block_pMainContent($context, array $blocks = [])
    {
        // line 36
        echo "<div class=\"col-xs-12\">
\t";
        // line 37
        $this->displayBlock('pMainContentHolder', $context, $blocks);
        // line 39
        echo "</div>
";
    }

    // line 37
    public function block_pMainContentHolder($context, array $blocks = [])
    {
        // line 38
        echo "\t";
    }

    // line 42
    public function block_pPageLiveScriptHelpers($context, array $blocks = [])
    {
        // line 43
        echo "    ";
        $this->displayParentBlock("pPageLiveScriptHelpers", $context, $blocks);
        echo "

\t// Helpers used for brick's opening target
\tvar SetActionUrl = function(oElem, sUrl)
\t{
\t\toElem.attr('href', sUrl);
\t};
\tvar SetActionOpeningTarget = function(oElem, sMode)
\t{
\t\tif(sMode === '";
        // line 52
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\PortalBrick::ENUM_OPENING_TARGET_MODAL"), "html", null, true);
        echo "')
\t\t{
\t\t\toElem.attr('data-toggle', 'modal').attr('data-target', '#modal-for-all');
\t\t}
\t\telse if(sMode === '";
        // line 56
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\PortalBrick::ENUM_OPENING_TARGET_SELF"), "html", null, true);
        echo "')
\t\t{
\t\t\toElem.attr('target', '_self');
\t\t}
\t\telse if(sMode === '";
        // line 60
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\PortalBrick::ENUM_OPENING_TARGET_NEW"), "html", null, true);
        echo "')
\t\t{
\t\t\toElem.attr('target', '_blank');
\t\t}
\t};
";
    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/templates/bricks/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 60,  178 => 56,  171 => 52,  158 => 43,  155 => 42,  151 => 38,  148 => 37,  143 => 39,  141 => 37,  138 => 36,  135 => 35,  131 => 30,  128 => 29,  124 => 25,  118 => 23,  115 => 22,  112 => 21,  107 => 20,  101 => 31,  99 => 29,  94 => 26,  91 => 21,  89 => 20,  84 => 17,  81 => 16,  70 => 14,  62 => 10,  54 => 8,  51 => 7,  49 => 6,  46 => 5,  37 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "itop-portal-base/portal/templates/bricks/layout.html.twig", "/var/www/html/itop/env-production/itop-portal-base/portal/templates/bricks/layout.html.twig");
    }
}
