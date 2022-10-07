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

/* base/layouts/activity-panel/activity-entry/layout.html.twig */
class __TwigTemplate_b073e34b05174eabc9f2642a2375adb5bd1b6e90ce25d1fd9659c834f818765f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'iboActivityEntryExtraClasses' => [$this, 'block_iboActivityEntryExtraClasses'],
            'iboActivityEntryType' => [$this, 'block_iboActivityEntryType'],
            'iboActivityEntryExtraDataAttributes' => [$this, 'block_iboActivityEntryExtraDataAttributes'],
            'iboActivityEntryMedallion' => [$this, 'block_iboActivityEntryMedallion'],
            'iboActivityEntryInformation' => [$this, 'block_iboActivityEntryInformation'],
            'iboActivityEntryMainInformationIcon' => [$this, 'block_iboActivityEntryMainInformationIcon'],
            'iboActivityEntryMainInformationContent' => [$this, 'block_iboActivityEntryMainInformationContent'],
            'iboActivityEntrySubInformation' => [$this, 'block_iboActivityEntrySubInformation'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method"), "html", null, true);
        echo " ";
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "IsFromCurrentUser", [], "method")) {
            echo "ibo-is-current-user";
        }
        echo " ";
        $this->displayBlock('iboActivityEntryExtraClasses', $context, $blocks);
        echo "\"
     data-role=\"ibo-activity-entry\"
     data-entry-type=\"";
        // line 3
        $this->displayBlock('iboActivityEntryType', $context, $blocks);
        echo "\"
     data-entry-datetime-raw=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetRawDateTime", [], "method"), "html", null, true);
        echo "\"
\t data-entry-author-login=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAuthorLogin", [], "method"), "html", null, true);
        echo "\"
     data-entry-origin=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetOrigin", [], "method"), "html", null, true);
        echo "\"
\t ";
        // line 7
        $this->displayBlock('iboActivityEntryExtraDataAttributes', $context, $blocks);
        echo ">
\t<div class=\"ibo-activity-entry--medallion ";
        // line 8
        if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetAuthorPictureAbsUrl", [], "method"))) {
            echo "ibo-has-image";
        }
        echo "\" data-role=\"ibo-activity-entry--medallion\" data-tooltip-content=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAuthorFriendlyname", [], "method"), "html", null, true);
        echo "\">
\t\t";
        // line 9
        $this->displayBlock('iboActivityEntryMedallion', $context, $blocks);
        // line 16
        echo "\t</div>
\t<div class=\"ibo-activity-entry--information\" data-role=\"ibo-activity-entry--information\">
\t\t";
        // line 18
        $this->displayBlock('iboActivityEntryInformation', $context, $blocks);
        // line 54
        echo "\t</div>
</div>";
    }

    // line 1
    public function block_iboActivityEntryExtraClasses($context, array $blocks = [])
    {
    }

    // line 3
    public function block_iboActivityEntryType($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetType", [], "method"), "html", null, true);
    }

    // line 7
    public function block_iboActivityEntryExtraDataAttributes($context, array $blocks = [])
    {
    }

    // line 9
    public function block_iboActivityEntryMedallion($context, array $blocks = [])
    {
        // line 10
        echo "\t\t\t";
        if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetAuthorPictureAbsUrl", [], "method"))) {
            // line 11
            echo "\t\t\t\t<img class=\"ibo-activity-entry--author-picture\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAuthorPictureAbsUrl", [], "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAuthorInitials", [], "method"), "html", null, true);
            echo "\">
\t\t\t";
        } else {
            // line 13
            echo "\t\t\t\t<div class=\"ibo-activity-entry--author-initials\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAuthorInitials", [], "method"), 0, 3), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 15
        echo "\t\t";
    }

    // line 18
    public function block_iboActivityEntryInformation($context, array $blocks = [])
    {
        // line 19
        echo "\t\t\t<div class=\"ibo-activity-entry--main-information\" data-role=\"ibo-activity-entry--main-information\">
\t\t\t\t<div class=\"ibo-activity-entry--main-information-icon\" data-role=\"ibo-activity-entry--main-information-icon\">
\t\t\t\t\t";
        // line 21
        $this->displayBlock('iboActivityEntryMainInformationIcon', $context, $blocks);
        // line 26
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"ibo-activity-entry--main-information-content\" data-role=\"ibo-activity-entry--main-information-content\">
\t\t\t\t\t";
        // line 28
        $this->displayBlock('iboActivityEntryMainInformationContent', $context, $blocks);
        // line 32
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"ibo-activity-entry--sub-information\" data-role=\"ibo-activity-entry--sub-information\">
                ";
        // line 35
        ob_start(function () { return ''; });
        // line 36
        echo "                    ";
        $this->displayBlock('iboActivityEntrySubInformation', $context, $blocks);
        // line 51
        echo "                ";
        $___internal_0fcc4ee818facca934805bcd83427982515b5e13f01f2340860f66a6c3c83c38_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 35
        echo twig_spaceless($___internal_0fcc4ee818facca934805bcd83427982515b5e13f01f2340860f66a6c3c83c38_);
        // line 52
        echo "\t\t\t</div>
\t\t";
    }

    // line 21
    public function block_iboActivityEntryMainInformationIcon($context, array $blocks = [])
    {
        // line 22
        echo "\t\t\t\t\t\t";
        if ( !twig_test_empty($this->getAttribute(($context["oUIBlock"] ?? null), "GetDecorationClasses", [], "method"))) {
            // line 23
            echo "\t\t\t\t\t\t\t<span class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetDecorationClasses", [], "method"), "html", null, true);
            echo "\"></span>
\t\t\t\t\t\t";
        }
        // line 25
        echo "\t\t\t\t\t";
    }

    // line 28
    public function block_iboActivityEntryMainInformationContent($context, array $blocks = [])
    {
        // line 29
        echo "\t\t\t\t\t\t";
        // line 30
        echo "\t\t\t\t\t\t";
        echo call_user_func_array($this->env->getFilter('render_wiki_to_html')->getCallable(), [$this->getAttribute(($context["oUIBlock"] ?? null), "GetContent", [], "method")]);
        echo "
\t\t\t\t\t";
    }

    // line 36
    public function block_iboActivityEntrySubInformation($context, array $blocks = [])
    {
        // line 37
        echo "                        ";
        if (( !(null === $this->getAttribute(($context["oUIBlock"] ?? null), "GetOrigin", [], "method")) && ($this->getAttribute(($context["oUIBlock"] ?? null), "GetOrigin", []) != twig_constant("Combodo\\iTop\\Core\\CMDBChange\\CMDBChangeOrigin::INTERACTIVE")))) {
            // line 38
            echo "                            <span class=\"ibo-activity-entry--origin\" data-role=\"ibo-activity-entry--origin\" data-tooltip-content=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [("Class:CMDBChange/Attribute:origin/Value:" . $this->getAttribute(($context["oUIBlock"] ?? null), "GetOrigin", [], "method"))]), "html", null, true);
            echo "\" data-tooltip-placement=\"bottom\">
                                <span class=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetOriginDecorationClasses", [], "method"), "html", null, true);
            echo "\"></span>
                            </span>
                        ";
        }
        // line 42
        echo "                        ";
        if (call_user_func_array($this->env->getFunction('get_config_parameter')->getCallable(), ["activity_panel.show_author_name_below_entries"])) {
            // line 43
            echo "                            <span class=\"ibo-activity-entry--author-name ibo-is-hidden\" data-role=\"ibo-activity-entry--author-name\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAuthorFriendlyname", [], "method"), "html", null, true);
            echo "</span>
                        ";
        }
        // line 45
        echo "                        <span class=\"ibo-activity-entry--datetime\" data-role=\"ibo-activity-entry--datetime\"
                              data-tooltip-content=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetFormattedDateTime", [], "method"), "html", null, true);
        echo "\"
                              data-tooltip-placement=\"bottom\"
                              data-raw-datetime=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetRawDateTime", [], "method"), "html", null, true);
        echo "\"
                              data-formatted-datetime=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetFormattedDateTime", [], "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetFormattedDateTime", [], "method"), "html", null, true);
        echo "</span>
                    ";
    }

    public function getTemplateName()
    {
        return "base/layouts/activity-panel/activity-entry/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 49,  230 => 48,  225 => 46,  222 => 45,  216 => 43,  213 => 42,  207 => 39,  202 => 38,  199 => 37,  196 => 36,  189 => 30,  187 => 29,  184 => 28,  180 => 25,  174 => 23,  171 => 22,  168 => 21,  163 => 52,  161 => 35,  158 => 51,  155 => 36,  153 => 35,  148 => 32,  146 => 28,  142 => 26,  140 => 21,  136 => 19,  133 => 18,  129 => 15,  123 => 13,  115 => 11,  112 => 10,  109 => 9,  104 => 7,  98 => 3,  93 => 1,  88 => 54,  86 => 18,  82 => 16,  80 => 9,  72 => 8,  68 => 7,  64 => 6,  60 => 5,  56 => 4,  52 => 3,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/activity-panel/activity-entry/layout.html.twig", "/var/www/html/itop/templates/base/layouts/activity-panel/activity-entry/layout.html.twig");
    }
}
