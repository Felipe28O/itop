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

/* base/components/medallion-icon/layout.html.twig */
class __TwigTemplate_ce3d068aa0b42845c95bf1bb860a983bdabf56a12e8ff50343a6026087d8ad6d extends \Twig\Template
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
        echo "<div id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method"), "html", null, true);
        echo "\" data-role=\"ibo-medallion-icon\">
    ";
        // line 5
        if (($this->getAttribute(($context["oUIBlock"] ?? null), "GetImageUrl", [], "method") != "")) {
            // line 6
            echo "        <img class=\"ibo-medallion-icon--image\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetImageUrl", [], "method"), "html", null, true);
            echo "\" />
    ";
        }
        // line 8
        echo "    ";
        if (($this->getAttribute(($context["oUIBlock"] ?? null), "GetIconClass", [], "method") != "")) {
            // line 9
            echo "        <i class=\"ibo-medallion-icon--image ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetIconClass", [], "method"), "html", null, true);
            echo "\"></i>
    ";
        }
        // line 11
        echo "    ";
        if (($this->getAttribute(($context["oUIBlock"] ?? null), "GetDescription", [], "method") != "")) {
            // line 12
            echo "        <div class=\"ibo-medallion-icon--description\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetDescription", [], "method"), "html", null, true);
            echo "</div>
    ";
        }
        // line 14
        echo "</div>
";
        $___internal_ab02305ad6ab185e505196308136d6f9d9b58ed91e93149e760b6cd9a36c0715_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_ab02305ad6ab185e505196308136d6f9d9b58ed91e93149e760b6cd9a36c0715_);
    }

    public function getTemplateName()
    {
        return "base/components/medallion-icon/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 3,  67 => 14,  61 => 12,  58 => 11,  52 => 9,  49 => 8,  43 => 6,  41 => 5,  32 => 4,  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/medallion-icon/layout.html.twig", "/var/www/html/itop/templates/base/components/medallion-icon/layout.html.twig");
    }
}
