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

/* templates/pages/backoffice/welcome_popup/welcome_popup.html.twig */
class __TwigTemplate_ee01dd3c4860b24258c933e34a87e64faf4d1780a0077b1a5f250d7f1e29f27d extends \Twig\Template
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
        echo "<div id=\"welcome_popup\">
    <div class=\"ibo-welcome-popup--image ibo-svg-illustration--container\">
        ";
        // line 3
        echo twig_source($this->env, "images/illustrations/undraw_relaunch_day.svg");
        echo "
    </div>
    <div class=\"ibo-welcome-popup--text\">
        <div>
            ";
        // line 7
        echo call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:WelcomeMenu:Text"]);
        echo "
        </div>
        <div class=\"ibo-welcome-popup--text--options\">
        <input type=\"checkbox\" checked id=\"display_welcome_popup\"/><label for=\"display_welcome_popup\">";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:DisplayThisMessageAtStartup"]), "html", null, true);
        echo "</label>
        </div>
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "templates/pages/backoffice/welcome_popup/welcome_popup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  41 => 7,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "templates/pages/backoffice/welcome_popup/welcome_popup.html.twig", "/var/www/html/templates/pages/backoffice/welcome_popup/welcome_popup.html.twig");
    }
}
