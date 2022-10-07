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

/* base/layouts/navigation-menu/menu-node.html.twig */
class __TwigTemplate_30997a238871a4c61786353fc66b16e5ce812633424643c95c5b6889f8ad99a1 extends \Twig\Template
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
        // line 1
        echo "<li class=\"ibo-navigation-menu--menu-node\" data-role=\"ibo-navigation-menu--menu-node\" data-menu-node-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aMenuNode"] ?? null), "sId", []), "html", null, true);
        echo "\">
\t";
        // line 2
        if ( !twig_test_empty($this->getAttribute(($context["aMenuNode"] ?? null), "sUrl", []))) {
            // line 3
            echo "\t\t";
            $context["sTarget"] = ((($this->getAttribute(($context["aMenuNode"] ?? null), "bOpenInNewWindow", []) == true)) ? ("target=\"_blank\"") : (""));
            // line 4
            echo "\t\t<a class=\"ibo-navigation-menu--menu-node-title\" data-role=\"ibo-navigation-menu--menu-node-title\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["aMenuNode"] ?? null), "sUrl", []), "html", null, true);
            echo "\" ";
            echo ($context["sTarget"] ?? null);
            echo ">
\t\t\t<span class=\"ibo-navigation-menu--menu-node-label\" data-role=\"ibo-navigation-menu--menu-node-label\" title=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute(($context["aMenuNode"] ?? null), "sTitle", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["aMenuNode"] ?? null), "sTitle", []), "html", null, true);
            echo "</span>
\t\t\t";
            // line 6
            if ($this->getAttribute(($context["aMenuNode"] ?? null), "bHasCount", [])) {
                // line 7
                echo "                ";
                // line 8
                echo "\t\t\t\t<span class=\"ibo-navigation-menu--menu-node-counter ibo-is-hidden\" data-menu-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["aMenuNode"] ?? null), "sId", []), "html", null, true);
                echo "\"></span>
\t\t\t";
            }
            // line 10
            echo "\t\t</a>
\t";
        } else {
            // line 12
            echo "\t\t<span class=\"ibo-navigation-menu--menu-node-title\" data-role=\"ibo-navigation-menu--menu-node-title\">
\t\t\t<span class=\"ibo-navigation-menu--menu-node-label\" data-role=\"ibo-navigation-menu--menu-node-label\" title=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute(($context["aMenuNode"] ?? null), "sTitle", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["aMenuNode"] ?? null), "sTitle", []), "html", null, true);
            echo "</span>
\t\t</span>
\t";
        }
        // line 16
        echo "\t";
        if (($this->getAttribute(($context["aMenuNode"] ?? null), "aSubMenuNodes", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["aMenuNode"] ?? null), "aSubMenuNodes", [])) > 0))) {
            // line 17
            echo "\t\t<ul>
\t\t\t";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aMenuNode"] ?? null), "aSubMenuNodes", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["aSubMenuNode"]) {
                // line 19
                echo "\t\t\t\t";
                echo twig_include($this->env, $context, "base/layouts/navigation-menu/menu-node.html.twig", ["aMenuNode" => $context["aSubMenuNode"]]);
                echo "
\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aSubMenuNode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "\t\t</ul>
\t";
        }
        // line 23
        echo "</li>";
    }

    public function getTemplateName()
    {
        return "base/layouts/navigation-menu/menu-node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 23,  118 => 21,  101 => 19,  84 => 18,  81 => 17,  78 => 16,  70 => 13,  67 => 12,  63 => 10,  57 => 8,  55 => 7,  53 => 6,  47 => 5,  40 => 4,  37 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/navigation-menu/menu-node.html.twig", "/var/www/html/itop/templates/base/layouts/navigation-menu/menu-node.html.twig");
    }
}
