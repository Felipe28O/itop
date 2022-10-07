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

/* pages/backoffice/extension-blocks/footer.html.twig */
class __TwigTemplate_63528329240d48ed398f519348fba5c23740e41b81741f4b7aca75c1d72abd79 extends \Twig\Template
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
        echo "
\t<div id=\"ibo-page-Footer\" data-role=\"ibo-page-Footer\">
\t\t";
        // line 6
        if ( !twig_test_empty($this->getAttribute(($context["aLayouts"] ?? null), "sFooter", []))) {
            // line 7
            echo "\t\t\t";
            echo $this->getAttribute(($context["aLayouts"] ?? null), "sFooter", []);
            echo "
\t\t";
        }
        // line 9
        echo "\t\t";
        echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$this->getAttribute(($context["aLayouts"] ?? null), "oFooter", []), ["aPage" => ($context["aPage"] ?? null)]]);
        echo "
\t</div>

";
        $___internal_f1cee561f359b9fe13895e0fe873592d99df3a3f4e2ed46fa1a67a0ee9d4d7f9_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_f1cee561f359b9fe13895e0fe873592d99df3a3f4e2ed46fa1a67a0ee9d4d7f9_);
    }

    public function getTemplateName()
    {
        return "pages/backoffice/extension-blocks/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 3,  44 => 9,  38 => 7,  36 => 6,  32 => 4,  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "pages/backoffice/extension-blocks/footer.html.twig", "/var/www/html/itop/templates/pages/backoffice/extension-blocks/footer.html.twig");
    }
}
