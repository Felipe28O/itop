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

/* pages/backoffice/setuppage/layout.html.twig */
class __TwigTemplate_d843235ef9a1d88f1d13adfe33a86db9f765ac92761e2881cee747136c42d279 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'iboPageBodyHtml' => [$this, 'block_iboPageBodyHtml'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "pages/backoffice/webpage/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("pages/backoffice/webpage/layout.html.twig", "pages/backoffice/setuppage/layout.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_iboPageBodyHtml($context, array $blocks = [])
    {
        // line 6
        echo "    <div id=\"ibo_setup_container\">
        ";
        // line 7
        echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [($context["oLayout"] ?? null), ["aPage" => ($context["aPage"] ?? null)]]);
        echo "

        ";
        // line 10
        echo "        <div id=\"at_the_end\">";
        echo $this->getAttribute(($context["aPage"] ?? null), "sDeferredContent", []);
        echo "</div>
        <div style=\"display:none\" title=\"ex2\" id=\"ex2\">Please wait...</div>
        <div style=\"display:none\" title=\"dialog\" id=\"ModalDlg\"></div>
        <div style=\"display:none\" id=\"ajax_content\"></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "pages/backoffice/setuppage/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  45 => 7,  42 => 6,  39 => 5,  29 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "pages/backoffice/setuppage/layout.html.twig", "/var/www/html/templates/pages/backoffice/setuppage/layout.html.twig");
    }
}
