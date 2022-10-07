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

/* base/components/input/file-select/layout.js.twig */
class __TwigTemplate_b8b0ee9ae4b4964d56a519070e87643b85dd987c445d37078ae907a7359d3962 extends \Twig\Template
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
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "GetShowFilename", [], "method")) {
            // line 4
            echo "    \$('#";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
            echo "').bind('change', function() {
        var fileName = \$(this).val().replace(/^.*[\\\\\\/]/, '');
        fileName = \$('<div/>').text(fileName).html();
        \$('#";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
            echo "-file-name').html(fileName);
    });
";
        }
    }

    public function getTemplateName()
    {
        return "base/components/input/file-select/layout.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  32 => 4,  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/input/file-select/layout.js.twig", "/var/www/html/itop/templates/base/components/input/file-select/layout.js.twig");
    }
}
