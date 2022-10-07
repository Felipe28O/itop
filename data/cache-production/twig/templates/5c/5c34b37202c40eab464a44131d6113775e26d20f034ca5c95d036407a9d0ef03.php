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

/* base/layouts/activity-panel/tab-toolbar/caselog.html.twig */
class __TwigTemplate_1ae22458116075dd2be78d5996c72e99383bafc38a36e6825a08543f324eea8d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'bExtraCSSClasses' => [$this, 'block_bExtraCSSClasses'],
            'bDataTabType' => [$this, 'block_bDataTabType'],
            'bExtraDataAttributes' => [$this, 'block_bExtraDataAttributes'],
            'bTabToolbarFirstRow' => [$this, 'block_bTabToolbarFirstRow'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base/layouts/activity-panel/tab-toolbar/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("base/layouts/activity-panel/tab-toolbar/layout.html.twig", "base/layouts/activity-panel/tab-toolbar/caselog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_bExtraCSSClasses($context, array $blocks = [])
    {
        echo "ibo-activity-panel--tab-toolbar-for-caselog ibo-activity-panel--tab-toolbar-for-caselog-";
        echo twig_escape_filter($this->env, ($context["iRank"] ?? null), "html", null, true);
    }

    // line 5
    public function block_bDataTabType($context, array $blocks = [])
    {
        echo "caselog";
    }

    // line 7
    public function block_bExtraDataAttributes($context, array $blocks = [])
    {
        echo "data-caselog-attribute-code=\"";
        echo twig_escape_filter($this->env, ($context["sAttCode"] ?? null), "html", null, true);
        echo "\" data-caselog-attribute-label=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aData"] ?? null), "title", []), "html", null, true);
        echo "\" data-caselog-rank=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["loop"] ?? null), "index", []), "html", null, true);
        echo "\"";
    }

    // line 9
    public function block_bTabToolbarFirstRow($context, array $blocks = [])
    {
        // line 10
        echo "\t";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "HasCaseLogTabEntryForm", [0 => ($context["sAttCode"] ?? null)], "method")) {
            // line 11
            echo "        <div class=\"ibo-activity-panel--tab-entry-form\" data-role=\"ibo-activity-panel--tab-entry-form\">
            ";
            // line 12
            echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$this->getAttribute(($context["oUIBlock"] ?? null), "GetCaseLogTabEntryForm", [0 => ($context["sAttCode"] ?? null)], "method"), ["bInitOpened" => $this->getAttribute(($context["oUIBlock"] ?? null), "IsEntryFormOpened", [], "method")]]);
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "base/layouts/activity-panel/tab-toolbar/caselog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 12,  73 => 11,  70 => 10,  67 => 9,  55 => 7,  49 => 5,  42 => 3,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/activity-panel/tab-toolbar/caselog.html.twig", "/var/www/html/itop/templates/base/layouts/activity-panel/tab-toolbar/caselog.html.twig");
    }
}
