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

/* pages/backoffice/itopwebpage/layout.html.twig */
class __TwigTemplate_5836192982b62636082d0c723aa1249b311393b9a52c29f4b490f2aa4f786d32 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'iboPageBodyHtml' => [$this, 'block_iboPageBodyHtml'],
            'iboDeferredBlocks' => [$this, 'block_iboDeferredBlocks'],
            'iboCapturedOutput' => [$this, 'block_iboCapturedOutput'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "pages/backoffice/nicewebpage/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("pages/backoffice/nicewebpage/layout.html.twig", "pages/backoffice/itopwebpage/layout.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_iboPageBodyHtml($context, array $blocks = [])
    {
        // line 5
        echo "\t\t";
        echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$this->getAttribute(($context["aLayouts"] ?? null), "oNavigationMenu", []), ["aPage" => ($context["aPage"] ?? null)]]);
        echo "
\t\t<div id=\"ibo-page-container\" class=\"ibo-page-container\" data-role=\"ibo-page-container\">
\t\t\t<div id=\"ibo-top-container\" class=\"ibo-top-container\" data-role=\"ibo-top-container\">
\t\t\t\t";
        // line 8
        echo twig_include($this->env, $context, "pages/backoffice/extension-blocks/banner.html.twig");
        echo "
\t\t\t\t";
        // line 9
        echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$this->getAttribute(($context["aLayouts"] ?? null), "oTopBar", []), ["aPage" => ($context["aPage"] ?? null)]]);
        echo "
\t\t\t</div>
\t\t\t";
        // line 11
        echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$this->getAttribute(($context["aLayouts"] ?? null), "oPageContent", []), ["aPage" => ($context["aPage"] ?? null), "aLayouts" => ($context["aLayouts"] ?? null)]]);
        echo "

\t\t\t";
        // line 14
        echo "\t\t\t<div id=\"at_the_end\">";
        echo $this->getAttribute(($context["aPage"] ?? null), "sDeferredContent", []);
        echo "</div>
\t\t\t<div style=\"display:none\" title=\"ex2\" id=\"ex2\">Please wait...</div>
\t\t\t<div style=\"display:none\" title=\"dialog\" id=\"ModalDlg\"></div>
\t\t\t<div style=\"display:none\" id=\"ajax_content\"></div>
\t\t\t<div id=\"ibo-user-disconnected-dialog\" class=\"ibo-user-disconnected-dialog ibo-is-hidden\">";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:DisconnectedDlgMessage"]), "html", null, true);
        echo "</div>
\t\t</div>
";
    }

    // line 22
    public function block_iboDeferredBlocks($context, array $blocks = [])
    {
        // line 23
        echo "\t";
        if ($this->getAttribute(($context["aPage"] ?? null), "isPrintable", [])) {
            // line 24
            echo "\t\t";
            if ($this->getAttribute(($context["aDeferredBlocks"] ?? null), "oPageContent", [])) {
                // line 25
                echo "\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aDeferredBlocks"] ?? null), "oPageContent", []));
                foreach ($context['_seq'] as $context["_key"] => $context["oBlock"]) {
                    // line 26
                    echo "\t\t\t\t";
                    echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$context["oBlock"], ["aPage" => ($context["aPage"] ?? null)]]);
                    echo "
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oBlock'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "\t\t";
            }
            // line 29
            echo "\t";
        } else {
            // line 30
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["aDeferredBlocks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["aBlocks"]) {
                // line 31
                echo "\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["aBlocks"]);
                foreach ($context['_seq'] as $context["_key"] => $context["oBlock"]) {
                    // line 32
                    echo "\t\t\t\t";
                    echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$context["oBlock"], ["aPage" => ($context["aPage"] ?? null)]]);
                    echo "
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oBlock'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aBlocks'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t";
        }
    }

    // line 38
    public function block_iboCapturedOutput($context, array $blocks = [])
    {
        // line 39
        echo "    <div id=\"ibo-raw-output\" class=\"ibo-raw-output ibo-is-hidden\" title=\"Debug Output\">";
        echo $this->getAttribute(($context["aPage"] ?? null), "sCapturedOutput", []);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "pages/backoffice/itopwebpage/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 39,  139 => 38,  134 => 35,  128 => 34,  119 => 32,  114 => 31,  109 => 30,  106 => 29,  103 => 28,  94 => 26,  89 => 25,  86 => 24,  83 => 23,  80 => 22,  73 => 18,  65 => 14,  60 => 11,  55 => 9,  51 => 8,  44 => 5,  41 => 4,  31 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "pages/backoffice/itopwebpage/layout.html.twig", "/var/www/html/templates/pages/backoffice/itopwebpage/layout.html.twig");
    }
}
