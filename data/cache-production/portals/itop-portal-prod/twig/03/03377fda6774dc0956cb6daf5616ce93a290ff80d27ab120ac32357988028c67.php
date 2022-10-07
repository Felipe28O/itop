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

/* itop-portal-base/portal/templates/home/layout.html.twig */
class __TwigTemplate_232fa77be1f0e87f6028c64bac514a69c28954adea831812a04be22bc7a17494 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'pPageBodyClass' => [$this, 'block_pPageBodyClass'],
            'pMainWrapper' => [$this, 'block_pMainWrapper'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", [], "array"), "properties", []), "templates", []), "layout", []), "itop-portal-base/portal/templates/home/layout.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_pPageBodyClass($context, array $blocks = [])
    {
        echo "home";
    }

    // line 7
    public function block_pMainWrapper($context, array $blocks = [])
    {
        // line 8
        $context["iCurrentTileIndex"] = 0;
        // line 9
        echo "<div class=\"container-fluid\" id=\"main-wrapper\">
\t<div class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-9 col-md-10 col-sm-offset-3 col-md-offset-2\">
\t\t\t<section class=\"row\">
\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t";
        // line 14
        $this->loadTemplate("itop-portal-base/portal/templates/helpers/session_messages/session_messages.html.twig", "itop-portal-base/portal/templates/home/layout.html.twig", 14)->display($context);
        // line 15
        echo "\t\t\t\t</div>
\t\t\t</section>
\t\t\t<section class=\"row tiles_wrapper\">
\t\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? null), "brick_collection", [], "array"), "home_ordering", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["brick"]) {
            // line 19
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["brick"], "GetVisibleHome", [])) {
                // line 20
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute(($context["aTilesRendering"] ?? null), $this->getAttribute($context["brick"], "GetId", []), [], "array", true, true)) {
                    // line 21
                    echo "\t\t\t\t\t\t\t";
                    echo $this->getAttribute(($context["aTilesRendering"] ?? null), $this->getAttribute($context["brick"], "GetId", []), [], "array");
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 23
                    echo "\t\t\t\t\t\t\t";
                    $this->loadTemplate(("" . $this->getAttribute($context["brick"], "GetTileTemplatePath", [])), "itop-portal-base/portal/templates/home/layout.html.twig", 23)->display(twig_array_merge($context, ["brick" => $context["brick"]]));
                    // line 24
                    echo "\t\t\t\t\t\t";
                }
                // line 25
                echo "\t\t\t\t\t";
            }
            // line 26
            echo "\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t\t</section>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/templates/home/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 27,  102 => 26,  99 => 25,  96 => 24,  93 => 23,  87 => 21,  84 => 20,  81 => 19,  64 => 18,  59 => 15,  57 => 14,  50 => 9,  48 => 8,  45 => 7,  39 => 5,  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "itop-portal-base/portal/templates/home/layout.html.twig", "/var/www/html/itop/env-production/itop-portal-base/portal/templates/home/layout.html.twig");
    }
}
