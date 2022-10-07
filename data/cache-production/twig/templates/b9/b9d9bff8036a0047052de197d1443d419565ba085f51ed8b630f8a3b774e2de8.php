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

/* base/layouts/page-content/with-side-content.ready.js.twig */
class __TwigTemplate_9a082082f0f1d59d89873ac719423c5acbef1a60ae6d9d0b4ca4c845226c5ffc extends \Twig\Template
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
        if ($this->getAttribute(($context["aPage"] ?? null), "isPrintable", [])) {
            // line 4
            echo "\toHiddeableChapters['ibo-side-content'] = '";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Layout:ActivityPanel:Tab:Activity:Title"]), "html", null, true);
            echo "';
";
        }
        // line 6
        echo "
";
    }

    public function getTemplateName()
    {
        return "base/layouts/page-content/with-side-content.ready.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  32 => 4,  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/page-content/with-side-content.ready.js.twig", "/var/www/html/itop/templates/base/layouts/page-content/with-side-content.ready.js.twig");
    }
}
