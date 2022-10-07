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

/* base/layouts/activity-panel/activity-entry/edits-entry.html.twig */
class __TwigTemplate_226c56267f00305047d9f3f07f5966c42fb8b2e2a8a25e6a8d89cf41a4a41b53 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'iboActivityEntryExtraClasses' => [$this, 'block_iboActivityEntryExtraClasses'],
            'iboActivityEntryMainInformationContent' => [$this, 'block_iboActivityEntryMainInformationContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base/layouts/activity-panel/activity-entry/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("base/layouts/activity-panel/activity-entry/layout.html.twig", "base/layouts/activity-panel/activity-entry/edits-entry.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_iboActivityEntryExtraClasses($context, array $blocks = [])
    {
        echo "ibo-edits-entry";
    }

    // line 5
    public function block_iboActivityEntryMainInformationContent($context, array $blocks = [])
    {
        // line 6
        echo "    ";
        if (((twig_length_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAttributes", [], "method")) == 1) && (twig_length_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAttributes", [], "method")), "descriptions", [], "array")) == 1))) {
            // line 7
            echo "        <span class=\"ibo-edits-entry--short-description\">";
            echo $this->getAttribute(($context["oUIBlock"] ?? null), "GetShortDescriptionAsHtml", [], "method");
            echo "</span>
    ";
        } else {
            // line 9
            echo "        <a href=\"#\" class=\"ibo-edits-entry--short-description\" data-role=\"ibo-edits-entry--long-description-toggler\">
            ";
            // line 11
            echo "            <span class=\"ibo-edits-entry--long-description-toggler-icon fa fa-caret-down\"></span>
            ";
            // line 12
            echo $this->getAttribute(($context["oUIBlock"] ?? null), "GetShortDescriptionAsHtml", [], "method");
            echo "
        </a>
        <ul class=\"ibo-edits-entry--long-description\" data-role=\"ibo-edits-entry--long-description\">
            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetAttributes", [], "method"));
            foreach ($context['_seq'] as $context["sAttCode"] => $context["aAttData"]) {
                // line 16
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["aAttData"], "descriptions", []));
                foreach ($context['_seq'] as $context["_key"] => $context["sAttHtmlDescription"]) {
                    // line 17
                    echo "                    <li class=\"ibo-edits-entry--attribute-description\" data-attribute-code=\"";
                    echo twig_escape_filter($this->env, $context["sAttCode"], "html", null, true);
                    echo "\">";
                    echo $context["sAttHtmlDescription"];
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sAttHtmlDescription'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['sAttCode'], $context['aAttData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "base/layouts/activity-panel/activity-entry/edits-entry.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 20,  90 => 19,  79 => 17,  74 => 16,  70 => 15,  64 => 12,  61 => 11,  58 => 9,  52 => 7,  49 => 6,  46 => 5,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/activity-panel/activity-entry/edits-entry.html.twig", "/var/www/html/itop/templates/base/layouts/activity-panel/activity-entry/edits-entry.html.twig");
    }
}
