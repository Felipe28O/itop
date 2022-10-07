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

/* application/display-block/block-list/layout.js.twig */
class __TwigTemplate_19f8ed9fd40c1b4868c8239696c39e575208fff7a08412f32f2c6048502270af extends \Twig\Template
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
        echo "    ";
        if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "sEventAttachedData", []))) {
            // line 5
            echo "        \$('body').trigger('update_history.itop', [";
            echo $this->getAttribute(($context["oUIBlock"] ?? null), "sEventAttachedData", []);
            echo "]);
    ";
        }
        $___internal_25cba4face3f616a6ee66a8201293564bf249141e806633a0dbc16d62f35632d_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_25cba4face3f616a6ee66a8201293564bf249141e806633a0dbc16d62f35632d_);
    }

    public function getTemplateName()
    {
        return "application/display-block/block-list/layout.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 3,  35 => 5,  32 => 4,  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "application/display-block/block-list/layout.js.twig", "/var/www/html/templates/application/display-block/block-list/layout.js.twig");
    }
}
