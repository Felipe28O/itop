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

/* pages/backoffice/extension-blocks/header.html.twig */
class __TwigTemplate_775bbd19bc0064d5914404a03aa892488b058217ff294e717d1acf32b01bad58 extends \Twig\Template
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
        echo "    <div id=\"ibo-page-header\" data-role=\"ibo-page-header\">
        ";
        // line 5
        if ( !twig_test_empty($this->getAttribute(($context["aLayouts"] ?? null), "sHeader", []))) {
            // line 6
            echo "            ";
            echo $this->getAttribute(($context["aLayouts"] ?? null), "sHeader", []);
            echo "
        ";
        }
        // line 8
        echo "        ";
        echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$this->getAttribute(($context["aLayouts"] ?? null), "oHeader", []), ["aPage" => ($context["aPage"] ?? null)]]);
        echo "
    </div>
";
        $___internal_1bae60ceb8e15cf1d65f4ba4a31dce584dc61814bb3594b149912f522f629399_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_1bae60ceb8e15cf1d65f4ba4a31dce584dc61814bb3594b149912f522f629399_);
    }

    public function getTemplateName()
    {
        return "pages/backoffice/extension-blocks/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 3,  43 => 8,  37 => 6,  35 => 5,  32 => 4,  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "pages/backoffice/extension-blocks/header.html.twig", "/var/www/html/itop/templates/pages/backoffice/extension-blocks/header.html.twig");
    }
}
