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

/* application/printable/block-print-header/layout.html.twig */
class __TwigTemplate_9c7935831c370c83c5cb12aa21e3f7024e0eb285f61075408f87a35837a53d6d extends \Twig\Template
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
        echo "
\t<div class=\"explain-printable not-printable\">
\t\t<p>";
        // line 6
        echo call_user_func_array($this->env->getFilter('dict_format')->getCallable(), ["UI:ExplainPrintable", "<i class=\"fas fa-eye\"></i>"]);
        echo "</p>
\t\t<div id=\"hiddeable_chapters\"></div>
\t\t<button class=\"ibo-button ibo-is-regular ibo-is-primary action\" onclick=\"window.print()\">";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Button:GoPrint"]), "html", null, true);
        echo "</button>&#160;&#160;
\t\t<button class=\"ibo-button ibo-is-regular ibo-is-secondary cancel\" onclick=\"window.close()\">";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Button:Cancel"]), "html", null, true);
        echo "</button>&#160;&#160;

\t\t<select name=\"text\" onchange='\$(\".printable-content\").width(this.value);'>
\t\t\t<option value='100%'>";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:PrintResolution:FullSize"]), "html", null, true);
        echo "</option>
\t\t\t<option value='19cm'>";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:PrintResolution:A4Portrait"]), "html", null, true);
        echo "</option>
\t\t\t<option value='27.7cm' selected>";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:PrintResolution:A4Landscape"]), "html", null, true);
        echo "</option>
\t\t\t<option value='19.6cm'>";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:PrintResolution:LetterPortrait"]), "html", null, true);
        echo "</option>
\t\t\t<option value='25.9cm'>";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:PrintResolution:LetterLandscape"]), "html", null, true);
        echo "</option>
\t\t</select>

\t</div>

";
        $___internal_0ab47b36b7974592aac1c91253a3e255b720742e0d9002020f90e06e44d36ce3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_0ab47b36b7974592aac1c91253a3e255b720742e0d9002020f90e06e44d36ce3_);
    }

    public function getTemplateName()
    {
        return "application/printable/block-print-header/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 3,  67 => 16,  63 => 15,  59 => 14,  55 => 13,  51 => 12,  45 => 9,  41 => 8,  36 => 6,  32 => 4,  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "application/printable/block-print-header/layout.html.twig", "/var/www/html/itop/templates/application/printable/block-print-header/layout.html.twig");
    }
}
