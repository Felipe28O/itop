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

/* base/layouts/tab-container/layout.js.twig */
class __TwigTemplate_fbae5c8a78dbce69f8ef4ab1b706523721c9dae1206267df6731e42974de5ee6 extends \Twig\Template
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
        echo "
";
        // line 4
        if ( !$this->getAttribute(($context["aPage"] ?? null), "isPrintable", [])) {
            // line 5
            echo "\$('#";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
            echo "').tab_container({'remote_tab_load_dict': '";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UIBlock:TabContainer:RemoteTabLoad"]), "js"), "html", null, true);
            echo "'});
";
        } else {
            // line 7
            echo "
function refresh_status() {
    var loaded = true;
    \$('#";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
            echo "').find('.ibo-tab-container--tab-container').each(function (i, elt) {
        if (\$(elt).attr('data-status') != 'loaded')
        {
            loaded = false;
        }
    });
    if (loaded)
    {
        \$('#";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
            echo "').attr('data-status', 'loaded');
    }
}

";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["oTab"]) {
                // line 23
                echo "oHiddeableChapters['tab_";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sanitize')->getCallable(), [$this->getAttribute($context["oTab"], "GetId", [], "method"), twig_constant("utils::ENUM_SANITIZATION_FILTER_ELEMENT_IDENTIFIER")]), "html", null, true);
                echo "'] = '";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["oTab"], "GetTitle", [], "method"), "js"), "html", null, true);
                echo "';
";
                // line 24
                if (($this->getAttribute($context["oTab"], "GetType", [], "method") == twig_constant("TabManager::ENUM_TAB_TYPE_AJAX"))) {
                    // line 25
                    echo "\$.post('";
                    echo $this->getAttribute($context["oTab"], "GetUrl", [], "method");
                    echo "', {printable: '1'}, function (data) {
    \$('#tab_";
                    // line 26
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sanitize')->getCallable(), [$this->getAttribute($context["oTab"], "GetId", [], "method"), twig_constant("utils::ENUM_SANITIZATION_FILTER_ELEMENT_IDENTIFIER")]), "html", null, true);
                    echo " > .printable-tab-content').append(data);
    \$('#tab_";
                    // line 27
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sanitize')->getCallable(), [$this->getAttribute($context["oTab"], "GetId", [], "method"), twig_constant("utils::ENUM_SANITIZATION_FILTER_ELEMENT_IDENTIFIER")]), "html", null, true);
                    echo "').attr('data-status', 'loaded');
    refresh_status();
});
";
                } else {
                    // line 31
                    echo "\$('#tab_";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sanitize')->getCallable(), [$this->getAttribute($context["oTab"], "GetId", [], "method"), twig_constant("utils::ENUM_SANITIZATION_FILTER_ELEMENT_IDENTIFIER")]), "html", null, true);
                    echo "').attr('data-status', 'loaded');
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oTab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "refresh_status();
";
        }
        // line 36
        echo "

";
    }

    public function getTemplateName()
    {
        return "base/layouts/tab-container/layout.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 36,  105 => 34,  95 => 31,  88 => 27,  84 => 26,  79 => 25,  77 => 24,  70 => 23,  66 => 22,  59 => 18,  48 => 10,  43 => 7,  35 => 5,  33 => 4,  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/tab-container/layout.js.twig", "/var/www/html/itop/templates/base/layouts/tab-container/layout.js.twig");
    }
}
