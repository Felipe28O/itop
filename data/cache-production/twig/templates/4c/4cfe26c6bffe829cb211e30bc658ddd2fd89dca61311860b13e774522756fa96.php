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

/* application/display-block/block-chart/layout.js.twig */
class __TwigTemplate_471cbe16192e0fd54d6aa788d8aae0a7ddaa06864fb48618d9795f5395f6cc06 extends \Twig\Template
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
        echo "\$.post('";
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "sUrl", []), "js"), "html", null, true);
        echo "', {}, function (data) {
    \$('body').append(data);
});
";
        $___internal_2553199cedf195022aee52fed4c267b6d0b6184951015a4c54299b7f862901c1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_2553199cedf195022aee52fed4c267b6d0b6184951015a4c54299b7f862901c1_);
    }

    public function getTemplateName()
    {
        return "application/display-block/block-chart/layout.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  32 => 4,  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "application/display-block/block-chart/layout.js.twig", "/var/www/html/itop/templates/application/display-block/block-chart/layout.js.twig");
    }
}
