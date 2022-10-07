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

/* itop-portal-base/portal/templates/bricks/tile.html.twig */
class __TwigTemplate_b624ef7867ccdfcf15aaead4ed4f51a7ffcc3a1d84ab89f9b63b4e9f15eff025 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'pTileWrapper' => [$this, 'block_pTileWrapper'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        echo "
<div class=\"col-xs-12 col-sm-";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["brick"] ?? null), "GetWidth", []), "html", null, true);
        echo "\">
\t";
        // line 5
        $this->displayBlock('pTileWrapper', $context, $blocks);
        // line 22
        echo "</div>";
    }

    // line 5
    public function block_pTileWrapper($context, array $blocks = [])
    {
        // line 6
        echo "\t\t<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "url_generator", []), "generate", [0 => $this->getAttribute(($context["brick"] ?? null), "GetRouteName", []), 1 => ["sBrickId" => $this->getAttribute(($context["brick"] ?? null), "GetId", [])]], "method"), "html", null, true);
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.routes", [], "array", false, true), $this->getAttribute(($context["brick"] ?? null), "GetRouteName", []), [], "array", false, true), "hash", [], "array", true, true)) {
            echo "#";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.routes", [], "array"), $this->getAttribute(($context["brick"] ?? null), "GetRouteName", []), [], "array"), "hash", [], "array"), "html", null, true);
        }
        echo "\"
\t\t\t";
        // line 7
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.routes", [], "array", false, true), $this->getAttribute(($context["brick"] ?? null), "GetRouteName", []), [], "array", false, true), "navigation_menu_attr", [], "array", true, true)) {
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.routes", [], "array"), $this->getAttribute(($context["brick"] ?? null), "GetRouteName", []), [], "array"), "navigation_menu_attr", [], "array"));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 8
        echo "\t\t\t";
        if ($this->getAttribute(($context["brick"] ?? null), "GetModal", [])) {
            echo "data-toggle=\"modal\" data-target=\"#modal-for-all\"";
        }
        // line 9
        echo "\t\t\t class=\"tile";
        echo "\" id=\"brick-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["brick"] ?? null), "GetId", []), "html", null, true);
        echo "\" data-brick-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["brick"] ?? null), "GetId", []), "html", null, true);
        echo "\">
\t\t<div class=\"tile_decoration\">
\t\t\t<span class=\"icon ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["brick"] ?? null), "GetDecorationClassHome", []), "html", null, true);
        echo "\"></span>
\t\t\t
\t\t</div>
\t\t\t<div class=\"tile_body\">
\t\t\t\t<div class=\"tile_title\">";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [$this->getAttribute(($context["brick"] ?? null), "GetTitleHome", [])]), "html", null, true);
        echo "</div>
\t\t\t\t";
        // line 16
        if ($this->getAttribute(($context["brick"] ?? null), "HasDescription", [])) {
            // line 17
            echo "\t\t\t\t\t<div class=\"tile_description\">";
            echo call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [$this->getAttribute(($context["brick"] ?? null), "GetDescription", [])]);
            echo "</div>
\t\t\t\t";
        }
        // line 19
        echo "\t\t\t</div>
\t\t</a>
\t";
    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/templates/bricks/tile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 19,  98 => 17,  96 => 16,  92 => 15,  85 => 11,  76 => 9,  71 => 8,  56 => 7,  47 => 6,  44 => 5,  40 => 22,  38 => 5,  34 => 4,  31 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "itop-portal-base/portal/templates/bricks/tile.html.twig", "/var/www/html/itop/env-production/itop-portal-base/portal/templates/bricks/tile.html.twig");
    }
}
