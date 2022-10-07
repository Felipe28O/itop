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

/* application/printable/block-print-header/layout.live.js.twig */
class __TwigTemplate_8418578a7c1594e2849e511fc690d8815e234c42be17e59b049c199c1833f003 extends \Twig\Template
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
        $___internal_846aed6654a68aae90f9d8008850266241ae6a367844ae29b40cabc45d69bb35_ = ('' === $tmp = "
var oHiddeableChapters = {};

") ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_spaceless($___internal_846aed6654a68aae90f9d8008850266241ae6a367844ae29b40cabc45d69bb35_);
    }

    public function getTemplateName()
    {
        return "application/printable/block-print-header/layout.live.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "application/printable/block-print-header/layout.live.js.twig", "/var/www/html/itop/templates/application/printable/block-print-header/layout.live.js.twig");
    }
}
