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

/* base/components/datatable/layout.live.js.twig */
class __TwigTemplate_8c1d16a05e8dfce67c0ec1029fdc7575fcd66efc3f5e2d504047739c9dad5225 extends \Twig\Template
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
        // line 1
        if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "select_mode"], "method"))) {
            // line 2
            echo "var oSelectedItems";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sanitize')->getCallable(), [$this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "sListId"], "method"), twig_constant("utils::ENUM_SANITIZATION_FILTER_VARIABLE_NAME")]), "html", null, true);
            echo " = [];
";
            // line 3
            if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "sSelectedRows"], "method"))) {
                // line 4
                echo "oSelectedItems";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sanitize')->getCallable(), [$this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "sListId"], "method"), twig_constant("utils::ENUM_SANITIZATION_FILTER_VARIABLE_NAME")]), "html", null, true);
                echo " = ";
                echo $this->getAttribute(($context["oUIBlock"] ?? null), "GetOption", [0 => "sSelectedRows"], "method");
                echo ";
";
            }
        }
        // line 7
        echo "
var bSelectAllowed";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sanitize')->getCallable(), [$this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), twig_constant("utils::ENUM_SANITIZATION_FILTER_VARIABLE_NAME")]), "html", null, true);
        echo " = false;

";
    }

    public function getTemplateName()
    {
        return "base/components/datatable/layout.live.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 8,  48 => 7,  39 => 4,  37 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/datatable/layout.live.js.twig", "/var/www/html/itop/templates/base/components/datatable/layout.live.js.twig");
    }
}
