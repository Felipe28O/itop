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

/* application/links/indirect/block-indirect-links-edit/layout.js.twig */
class __TwigTemplate_fe068874740e48530e495583f0049674428eb477c3e0c1307e3071938a259926 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        ob_start(function () { return ''; });
        // line 4
        echo "oWidget";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "iInputId", []), "html", null, true);
        echo " = new LinksWidget(
    '";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "sLinkedSetId", []), "html", null, true);
        echo "',
    '";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "sClass", []), "html", null, true);
        echo "',
    '";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "sAttCode", []), "html", null, true);
        echo "',
    '";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "iInputId", []), "html", null, true);
        echo "',
    '";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "sNameSuffix", []), "html", null, true);
        echo "',
     ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "bDuplicates", []), "html", null, true);
        echo ",
     ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "oWizHelper", []), "html", null, true);
        echo ",
    '";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "sExtKeyToRemote", []), "html", null, true);
        echo "',
     ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "bJSDoSearch", []), "html", null, true);
        echo ",
     ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "iMaxAddedId", []), "html", null, true);
        echo "
);
oWidget";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "iInputId", []), "html", null, true);
        echo ".Init();
";
        $___internal_81900cc076ad4718b2a214e2b163c5a3bbd5a609feb18463f8f52bf71341f071_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_81900cc076ad4718b2a214e2b163c5a3bbd5a609feb18463f8f52bf71341f071_);
    }

    public function getTemplateName()
    {
        return "application/links/indirect/block-indirect-links-edit/layout.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 3,  78 => 16,  73 => 14,  69 => 13,  65 => 12,  61 => 11,  57 => 10,  53 => 9,  49 => 8,  45 => 7,  41 => 6,  37 => 5,  32 => 4,  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "application/links/indirect/block-indirect-links-edit/layout.js.twig", "/var/www/html/itop/templates/application/links/indirect/block-indirect-links-edit/layout.js.twig");
    }
}
