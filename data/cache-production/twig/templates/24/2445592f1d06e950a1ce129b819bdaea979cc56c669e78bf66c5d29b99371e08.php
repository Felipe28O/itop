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

/* base/components/panel/layout.js.twig */
class __TwigTemplate_8a41e0c77eca8a398dfb1f00b3d32577294161b91001c3fb4d2bc8de044986cf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'iboWidgetInstantiation' => [$this, 'block_iboWidgetInstantiation'],
            'iboMiscHandlers' => [$this, 'block_iboMiscHandlers'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $this->displayBlock('iboWidgetInstantiation', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('iboMiscHandlers', $context, $blocks);
    }

    // line 3
    public function block_iboWidgetInstantiation($context, array $blocks = [])
    {
        // line 4
        echo "    \$('#";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "').panel({
        is_header_visible_on_scroll: ";
        // line 5
        echo twig_escape_filter($this->env, var_export($this->getAttribute(($context["oUIBlock"] ?? null), "IsHeaderVisibleOnScroll", [])), "html", null, true);
        echo "
    });
";
    }

    // line 9
    public function block_iboMiscHandlers($context, array $blocks = [])
    {
        // line 10
        echo "    ";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "isCollapsible", [], "method")) {
            // line 11
            echo "        \$('#";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
            echo "').find('[data-role=\"ibo-panel--collapsible-toggler\"]').on('click', function(){
            \$('#";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
            echo "').toggleClass('ibo-is-opened');
        });
    ";
        }
    }

    public function getTemplateName()
    {
        return "base/components/panel/layout.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 12,  62 => 11,  59 => 10,  56 => 9,  49 => 5,  44 => 4,  41 => 3,  37 => 9,  34 => 8,  32 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/panel/layout.js.twig", "/var/www/html/itop/templates/base/components/panel/layout.js.twig");
    }
}
