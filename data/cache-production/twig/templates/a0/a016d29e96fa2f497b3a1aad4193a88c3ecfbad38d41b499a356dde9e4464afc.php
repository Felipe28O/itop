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

/* base/layouts/dashboard/column/layout.html.twig */
class __TwigTemplate_6e2361c4b0e72ed257f8b2bca6531e0f5d82320964feb61a56074fd37717571f extends \Twig\Template
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
        // line 4
        ob_start(function () { return ''; });
        // line 5
        echo "    ";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "IsEditMode", [], "method")) {
            // line 6
            echo "        ";
            if ($this->getAttribute(($context["oUIBlock"] ?? null), "IsLastRow", [], "method")) {
                // line 7
                echo "            ";
                $context["sCellClass"] = "layout_cell edit_mode layout_extension";
                // line 8
                echo "        ";
            } else {
                // line 9
                echo "            ";
                $context["sCellClass"] = "layout_cell edit_mode";
                // line 10
                echo "        ";
            }
            // line 11
            echo "    ";
        } else {
            // line 12
            echo "        ";
            $context["sCellClass"] = "dashboard";
            // line 13
            echo "    ";
        }
        // line 14
        echo "    <div class=\"ibo-dashboard--grid-column ibo-dashboard--grid-cell ";
        echo twig_escape_filter($this->env, ($context["sCellClass"] ?? null), "html", null, true);
        echo "\"
         data-role=\"ibo-dashboard--grid-cell\"
         data-dashboard-grid-column-index=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetColumnIndex", [], "method"), "html", null, true);
        echo "\"
         data-dashboard-grid-cell-index=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetCellIndex", [], "method"), "html", null, true);
        echo "\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
            // line 19
            echo "            ";
            echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oSubBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </div>
";
        $___internal_099461a7f05af6ab4e9c3c0f4b6929c34198dfae4bf79e8d9c8b1b881ce3d14e_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 4
        echo twig_spaceless($___internal_099461a7f05af6ab4e9c3c0f4b6929c34198dfae4bf79e8d9c8b1b881ce3d14e_);
    }

    public function getTemplateName()
    {
        return "base/layouts/dashboard/column/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 4,  86 => 21,  77 => 19,  73 => 18,  69 => 17,  65 => 16,  59 => 14,  56 => 13,  53 => 12,  50 => 11,  47 => 10,  44 => 9,  41 => 8,  38 => 7,  35 => 6,  32 => 5,  30 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/dashboard/column/layout.html.twig", "/var/www/html/itop/templates/base/layouts/dashboard/column/layout.html.twig");
    }
}
