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

/* itop-portal-base/portal/templates/bricks/manage/layout.html.twig */
class __TwigTemplate_6f4cccf11b9c1d36f2b970d980edf51928b6096c5d325089c29418e5e5cb6e46 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'pMainHeaderTitle' => [$this, 'block_pMainHeaderTitle'],
            'pMainHeaderActions' => [$this, 'block_pMainHeaderActions'],
            'pPageReadyScripts' => [$this, 'block_pPageReadyScripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "itop-portal-base/portal/templates/bricks/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("itop-portal-base/portal/templates/bricks/layout.html.twig", "itop-portal-base/portal/templates/bricks/manage/layout.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_pMainHeaderTitle($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [$this->getAttribute(($context["oBrick"] ?? null), "GetTitle", [], "method")]), "html", null, true);
        echo " ";
        if ((($context["iCount"] ?? null) >= 0)) {
            echo " (";
            echo twig_escape_filter($this->env, ($context["iCount"] ?? null), "html", null, true);
            echo ")";
        }
        echo " ";
    }

    // line 6
    public function block_pMainHeaderActions($context, array $blocks = [])
    {
        // line 7
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["oBrick"] ?? null), "GetAvailablesDisplayModes", [])) > 1)) {
            // line 8
            echo "\t\t<div class=\"btn-group btn_group_explicit\">
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oBrick"] ?? null), "GetAvailablesDisplayModes", []));
            foreach ($context['_seq'] as $context["_key"] => $context["sDisplay"]) {
                // line 10
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "url_generator", []), "generate", [0 => "p_manage_brick_display_as", 1 => ["sBrickId" => ($context["sBrickId"] ?? null), "sDisplayMode" => $context["sDisplay"]]], "method"), "html", null, true);
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.routes", [], "array", false, true), $this->getAttribute(($context["oBrick"] ?? null), "GetRouteName", []), [], "array", false, true), "hash", [], "array", true, true)) {
                    echo "#";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.routes", [], "array"), $this->getAttribute(($context["oBrick"] ?? null), "GetRouteName", []), [], "array"), "hash", [], "array"), "html", null, true);
                }
                echo "\"
\t\t\t\t   id=\"btn_tab_for_";
                // line 11
                echo twig_escape_filter($this->env, $context["sDisplay"], "html", null, true);
                echo "\"
\t\t\t\t   class=\"btn btn-default ";
                // line 12
                if (($context["sDisplay"] == $this->getAttribute($this->getAttribute(($context["oBrick"] ?? null), "GetPresentationDataForTileMode", [0 => ($context["sDisplayMode"] ?? null)], "method"), "layoutDisplayMode", []))) {
                    echo "active";
                }
                echo "\">
                    ";
                // line 13
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [("Brick:Portal:Manage:DisplayMode:" . $context["sDisplay"])]), "html", null, true);
                echo "
\t\t\t\t</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sDisplay'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t</div>
    ";
        }
    }

    // line 20
    public function block_pPageReadyScripts($context, array $blocks = [])
    {
        // line 21
        echo "    ";
        $this->displayParentBlock("pPageReadyScripts", $context, $blocks);
        echo "
    ";
        // line 22
        $this->loadTemplate("itop-portal-base/portal/templates/helpers/tagset_clic_handler.js.twig", "itop-portal-base/portal/templates/bricks/manage/layout.html.twig", 22)->display($context);
    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/templates/bricks/manage/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 22,  104 => 21,  101 => 20,  95 => 16,  86 => 13,  80 => 12,  76 => 11,  67 => 10,  63 => 9,  60 => 8,  57 => 7,  54 => 6,  41 => 4,  31 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "itop-portal-base/portal/templates/bricks/manage/layout.html.twig", "/var/www/html/itop/env-production/itop-portal-base/portal/templates/bricks/manage/layout.html.twig");
    }
}
