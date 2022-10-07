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

/* templates/pages/backoffice/welcome_popup/welcome_popup.ready.js.twig */
class __TwigTemplate_289808ea5a0596bb4f64f30b7b4f25c3a6040efe3e41ff12b51a158216ef8e85 extends \Twig\Template
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
        echo "\$('#welcome_popup').dialog( { width:'60%', height: 'auto', title: '";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:WelcomeMenu:Title"]), "html", null, true);
        echo "', autoOpen: true, modal:true,
    close: function() {
        var bDisplay = \$('#display_welcome_popup:checked').length;
        SetUserPreference('welcome_popup', bDisplay, true);
    },
    buttons: [{
        text: \"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Button:Ok"]), "html", null, true);
        echo "\", click: function() {
            \$(this).dialog( \"close\" ); \$(this).remove();
        }}],
});
if (\$('#welcome_popup').height() > (\$(window).height()-70))
{
    \$('#welcome_popup').height(\$(window).height()-70);
}
";
    }

    public function getTemplateName()
    {
        return "templates/pages/backoffice/welcome_popup/welcome_popup.ready.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "templates/pages/backoffice/welcome_popup/welcome_popup.ready.js.twig", "/var/www/html/itop/templates/pages/backoffice/welcome_popup/welcome_popup.ready.js.twig");
    }
}
