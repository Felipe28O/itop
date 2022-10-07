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

/* itop-portal-base/portal/templates/bricks/manage/tile-default.html.twig */
class __TwigTemplate_b6a867d95f67cfff1ee765919e3f6dc6f86abc44ceba6afdf0d3a85317dd615a extends \Twig\Template
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oBrick"] ?? null), "GetWidth", []), "html", null, true);
        echo "\">
    ";
        // line 5
        $this->displayBlock('pTileWrapper', $context, $blocks);
        // line 21
        echo "</div>";
    }

    // line 5
    public function block_pTileWrapper($context, array $blocks = [])
    {
        // line 6
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "url_generator", []), "generate", [0 => $this->getAttribute(($context["oBrick"] ?? null), "GetRouteName", []), 1 => ["sBrickId" => $this->getAttribute(($context["oBrick"] ?? null), "GetId", [])]], "method"), "html", null, true);
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.routes", [], "array", false, true), $this->getAttribute(($context["oBrick"] ?? null), "GetRouteName", []), [], "array", false, true), "hash", [], "array", true, true)) {
            echo "#";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.routes", [], "array"), $this->getAttribute(($context["oBrick"] ?? null), "GetRouteName", []), [], "array"), "hash", [], "array"), "html", null, true);
        }
        echo "\"
        ";
        // line 7
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.routes", [], "array", false, true), $this->getAttribute(($context["oBrick"] ?? null), "GetRouteName", []), [], "array", false, true), "navigation_menu_attr", [], "array", true, true)) {
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.routes", [], "array"), $this->getAttribute(($context["oBrick"] ?? null), "GetRouteName", []), [], "array"), "navigation_menu_attr", [], "array"));
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
        echo "        ";
        if ($this->getAttribute(($context["oBrick"] ?? null), "GetModal", [])) {
            echo "data-toggle=\"modal\" data-target=\"#modal-for-all\"";
        }
        // line 9
        echo "        class=\"tile";
        echo "\" id=\"brick-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oBrick"] ?? null), "GetId", []), "html", null, true);
        echo "\" data-brick-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oBrick"] ?? null), "GetId", []), "html", null, true);
        echo "\">
        <div class=\"tile_decoration\">
            <span class=\"icon ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oBrick"] ?? null), "GetDecorationClassHome", []), "html", null, true);
        echo "\"></span>
        </div>
        <div class=\"tile_body\">
            <div class=\"tile_title\">";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [$this->getAttribute(($context["oBrick"] ?? null), "GetTitleHome", [])]), "html", null, true);
        echo "</div>
            ";
        // line 15
        if ($this->getAttribute(($context["oBrick"] ?? null), "HasDescription", [])) {
            // line 16
            echo "                <div class=\"tile_description\">";
            echo call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [$this->getAttribute(($context["oBrick"] ?? null), "GetDescription", [])]);
            echo "</div>
            ";
        }
        // line 18
        echo "        </div>
        </a>
    ";
    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/templates/bricks/manage/tile-default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 18,  97 => 16,  95 => 15,  91 => 14,  85 => 11,  76 => 9,  71 => 8,  56 => 7,  47 => 6,  44 => 5,  40 => 21,  38 => 5,  34 => 4,  31 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "itop-portal-base/portal/templates/bricks/manage/tile-default.html.twig", "/var/www/html/itop/env-production/itop-portal-base/portal/templates/bricks/manage/tile-default.html.twig");
    }
}
