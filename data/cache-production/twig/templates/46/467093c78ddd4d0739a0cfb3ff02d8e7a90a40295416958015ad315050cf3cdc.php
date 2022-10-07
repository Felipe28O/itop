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

/* base/layouts/navigation-menu/layout.html.twig */
class __TwigTemplate_d38fe8d48d7ffde62ac12dc3f5f3f2c67ad59018caf14d8b165fceb547f4323d extends \Twig\Template
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
        echo "<nav id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method"), "html", null, true);
        echo " ";
        if (($this->getAttribute(($context["oUIBlock"] ?? null), "IsExpanded", [], "method") == true)) {
            echo "ibo-is-expanded";
        }
        echo "\" data-role=\"ibo-navigation-menu\">
\t<div class=\"ibo-navigation-menu--body\">
\t\t<div class=\"ibo-navigation-menu--top-part\">
\t\t\t<a class=\"ibo-navigation-menu--square-company-logo\" data-role=\"ibo-navigation-menu--square-company-logo\" title=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAppRevisionNumber", [], "method"), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAppIconLink", [], "method"), "html", null, true);
        echo "\">
\t\t\t\t<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetAppSquareIconUrl", [], "method"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Layout:NavigationMenu:CompanyLogo:AltText"]), "html", null, true);
        echo "\">
\t\t\t</a>
\t\t\t<a class=\"ibo-navigation-menu--full-company-logo\" data-role=\"ibo-navigation-menu--full-company-logo\" title=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "AppRevisionNumber", []), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "AppIconLink", []), "html", null, true);
        echo "\">
\t\t\t\t<img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "AppFullIconUrl", []), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Layout:NavigationMenu:CompanyLogo:AltText"]), "html", null, true);
        echo "\">
\t\t\t</a>
\t\t\t<a class=\"ibo-navigation-menu--toggler\" data-role=\"ibo-navigation-menu--toggler\"
               aria-label=\"";
        // line 11
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "HasSiloSelected", [], "method")) {
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_format')->getCallable(), ["UI:Layout:NavigationMenu:Toggler:TooltipWithSiloLabel", $this->getAttribute(($context["oUIBlock"] ?? null), "GetSiloLabel", [], "method")]), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Layout:NavigationMenu:Toggler:Tooltip"]), "html", null, true);
        }
        echo "\"
               data-tooltip-content=\"";
        // line 12
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "HasSiloSelected", [], "method")) {
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_format')->getCallable(), ["UI:Layout:NavigationMenu:Toggler:TooltipWithSiloLabel", $this->getAttribute(($context["oUIBlock"] ?? null), "GetSiloLabel", [], "method")]), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Layout:NavigationMenu:Toggler:Tooltip"]), "html", null, true);
        }
        echo "\"
\t\t\t   data-tooltip-placement=\"right\"
\t\t\t   data-tooltip-distance-offset=\"20\"
\t\t\t   href=\"#\">
\t\t\t\t<span class=\"ibo-navigation-menu--toggler-icon\">
\t\t\t\t\t<span class=\"ibo-navigation-menu--toggler-bar\"></span>
\t\t\t\t\t<span class=\"ibo-navigation-menu--toggler-bar\"></span>
\t\t\t\t\t<span class=\"ibo-navigation-menu--toggler-bar\"></span>
\t\t\t\t</span>
\t\t\t\t";
        // line 21
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "HasSiloSelected", [], "method")) {
            // line 22
            echo "\t\t\t\t\t<span class=\"ibo-navigation-menu--silo-visual-hint\"></span>
\t\t\t\t";
        }
        // line 24
        echo "\t\t\t</a>
\t\t\t<div class=\"ibo-navigation-menu--silo-selection\">
\t\t\t\t";
        // line 26
        echo $this->getAttribute($this->getAttribute(($context["oUIBlock"] ?? null), "GetSiloSelection", [], "method"), "html", []);
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ibo-navigation-menu--middle-part\">
\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetMenuGroups", [], "method"));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["aMenuGroup"]) {
            // line 31
            echo "\t\t\t\t";
            echo twig_include($this->env, $context, "base/layouts/navigation-menu/menu-group.html.twig", ["aMenuGroup" => $context["aMenuGroup"]]);
            echo "
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aMenuGroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t</div>
\t\t<div class=\"ibo-navigation-menu--bottom-part\">
\t\t\t";
        // line 35
        if (($this->getAttribute(($context["oUIBlock"] ?? null), "IsNewsroomEnabled", [], "method") == true)) {
            // line 36
            echo "\t\t\t\t<div class=\"ibo-navigation-menu--notifications\">
\t\t\t\t\t<a class=\"ibo-navigation-menu--notifications-toggler ibo-is-empty\" data-role=\"ibo-navigation-menu--notifications-toggler\" data-tooltip-content=\"";
            // line 37
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Newsroom:NoNewMessage"]), "html", null, true);
            echo "\" data-tooltip-placement=\"right\" data-tooltip-distance-offset=\"25\">
\t\t\t\t\t\t<i class=\"fas fa-bell\"></i>
\t\t\t\t\t\t<div class=\"ibo-navigation-menu--notifications-toggler--new-messages\"></div>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"ibo-navigation-menu--notifications-menu\">
\t\t\t\t\t\t";
            // line 42
            echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$this->getAttribute(($context["oUIBlock"] ?? null), "GetNewsroomMenu", [], "method"), ["aPage" => ($context["aPage"] ?? null)]]);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 46
        echo "            <div class=\"ibo-navigation-menu--user-info\">
                <div class=\"ibo-navigation-menu--user-picture\">
                    <a data-role=\"ibo-navigation-menu--user-menu--toggler\" href=\"#\" aria-label=\"";
        // line 48
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Layout:NavigationMenu:UserMenu:Toggler:Label"]), "html", null, true);
        echo "\">
                        <img class=\"ibo-navigation-menu--user-picture--image\"
                             data-role=\"ibo-navigation-menu--user-picture--image\"
                             src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["oUIBlock"] ?? null), "GetUserData", [], "method"), "sPictureUrl", []), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t alt=\"";
        // line 52
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_format')->getCallable(), ["UI:Layout:NavigationMenu:UserInfo:Picture:AltText", $this->getAttribute($this->getAttribute(($context["oUIBlock"] ?? null), "GetUserData", [], "method"), "sFirstname", [])]), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t data-tooltip-content=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["oUIBlock"] ?? null), "GetUserData", [], "method"), "sLogonMessage", []), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t data-tooltip-placement=\"right\"
\t\t\t\t\t\t\t data-tooltip-distance-offset=\"20\"
\t\t\t\t\t\t>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"ibo-navigation-menu--user-welcome-message\">
\t\t\t\t\t<a data-role=\"ibo-navigation-menu--user-menu--toggler\" href=\"#\" aria-label=\"";
        // line 60
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Layout:NavigationMenu:UserMenu:Toggler:Label"]), "html", null, true);
        echo "\">
\t\t\t\t\t\t<div class=\"ibo-navigation-menu--user-welcome-message--text\">
\t\t\t\t\t\t\t<a class=\"ibo-navigation-menu--user-welcome-message--toggler\" data-role=\"ibo-navigation-menu--user-menu--toggler\" href=\"#\">
\t\t\t\t\t\t\t\t";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["oUIBlock"] ?? null), "GetUserData", [], "method"), "sWelcomeMessage", []), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t<span class=\"ibo-navigation-menu--user-welcome-message--toggler\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-caret-down\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t";
        // line 71
        if (($this->getAttribute(($context["oUIBlock"] ?? null), "IsNewsroomEnabled", [], "method") == true)) {
            // line 72
            echo "\t\t\t\t\t<div class=\"ibo-navigation-menu--user-notifications\">
\t\t\t\t\t\t<a class=\"ibo-navigation-menu--user-notifications--text ibo-navigation-menu--user-notifications--toggler\" data-role=\"ibo-navigation-menu--notifications-toggler\" href=\"#\">
                            <span class=\"ibo-navigation-menu--user-notifications--toggler--message\" data-role=\"ibo-navigation-menu--user-notifications--toggler--message\">
                                ";
            // line 75
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Newsroom:NoNewMessage"]), "html", null, true);
            echo "
                            </span>
\t\t\t\t\t\t\t<span class=\"ibo-navigation-menu--user-notifications--toggler--icon\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-bell\"></i>
\t\t\t\t\t\t\t\t<span class=\"ibo-navigation-menu--notifications-toggler--new-messages\"></span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"ibo-navigation-menu--user-notifications-menu\"></div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 85
        echo "\t\t\t\t<div class=\"ibo-navigation-menu--user-organization\">
\t\t\t\t\t<div class=\"ibo-navigation-menu--user-organization--text\">
\t\t\t\t\t\t";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["oUIBlock"] ?? null), "GetUserData", [], "method"), "sOrganization", []), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"ibo-navigation-menu--user-menu-container\" data-role=\"ibo-navigation-menu--user-menu-container\">
                    ";
        // line 91
        echo call_user_func_array($this->env->getFunction('render_block')->getCallable(), [$this->getAttribute(($context["oUIBlock"] ?? null), "GetUserMenu", [], "method"), ["aPage" => ($context["aPage"] ?? null)]]);
        echo "
                </div>
            </div>
        </div>
    </div>
    <div class=\"ibo-navigation-menu--drawer\" data-role=\"ibo-navigation-menu--drawer\">
        <div class=\"ibo-navigation-menu--menu-filter\" data-role=\"ibo-nav-menu--menu-filter\">
            ";
        // line 99
        echo "            <input class=\"ibo-navigation-menu--menu-filter-input\" data-role=\"ibo-navigation-menu--menu-filter-input\" type=\"text\" placeholder=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Layout:NavigationMenu:MenuFilter:Input:Placeholder"]), "html", null, true);
        echo "\" data-tooltip-content=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Layout:NavigationMenu:MenuFilter:Input:Tooltip"]), "html", null, true);
        echo "\"
                   data-tooltip-trigger=\"mouseenter\">
            <a class=\"ibo-navigation-menu--menu-filter-clear\" data-role=\"ibo-navigation-menu--menu-filter-clear\" href=\"#\"><span class=\"fas fa-times\"></span></a>
            <span class=\"ibo-navigation-menu--menu-filter-hotkey\">";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetMenuFilterHotkeyLabel", [], "method"), "html", null, true);
        echo "</span>
            ";
        // line 103
        if ($this->getAttribute(($context["oUIBlock"] ?? null), "HasMenuFilterHint", [], "method")) {
            // line 104
            echo "                <div class=\"ibo-navigation-menu--menu-filter-hint\" data-role=\"ibo-navigation-menu--menu-filter-hint\">
                    ";
            // line 105
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Layout:NavigationMenu:MenuFilter:Input:Hint"]), "html", null, true);
            echo "
                    <a class=\"ibo-navigation-menu--menu-filter-hint-close\" data-role=\"ibo-navigation-menu--menu-filter-hint-close\" aria-label=\"";
            // line 106
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Button:Close"]), "html", null, true);
            echo "\" href=\"#\"><span class=\"fas fa-times\"></span></a>
                </div>
            ";
        }
        // line 109
        echo "        </div>
        <div class=\"ibo-navigation-menu--menu--placeholder\" data-role=\"ibo-navigation-menu--menu--placeholder\">
            <div class=\"ibo-navigation-menu--menu--placeholder-image ibo-svg-illustration--container\">
                ";
        // line 112
        echo twig_source($this->env, "illustrations/undraw_empty.svg");
        echo "
\t\t\t</div>
\t\t\t<div class=\"ibo-navigation-menu--menu--placeholder-hint\">";
        // line 114
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Layout:NavigationMenu:MenuFilter:Placeholder:Hint"]), "html", null, true);
        echo "</div>
\t\t</div>

\t\t<div class=\"ibo-navigation-menu--menu-groups\">
\t\t\t";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["oUIBlock"] ?? null), "GetMenuGroups", [], "method"));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["aMenuGroup"]) {
            // line 119
            echo "\t\t\t\t";
            echo twig_include($this->env, $context, "base/layouts/navigation-menu/menu-nodes.html.twig", ["aMenuGroup" => $context["aMenuGroup"]]);
            echo "
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aMenuGroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "\t\t</div>
\t</div>
</nav>";
    }

    public function getTemplateName()
    {
        return "base/layouts/navigation-menu/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 121,  319 => 119,  302 => 118,  295 => 114,  290 => 112,  285 => 109,  279 => 106,  275 => 105,  272 => 104,  270 => 103,  266 => 102,  257 => 99,  247 => 91,  240 => 87,  236 => 85,  223 => 75,  218 => 72,  216 => 71,  205 => 63,  199 => 60,  189 => 53,  185 => 52,  181 => 51,  175 => 48,  171 => 46,  164 => 42,  156 => 37,  153 => 36,  151 => 35,  147 => 33,  130 => 31,  113 => 30,  106 => 26,  102 => 24,  98 => 22,  96 => 21,  80 => 12,  72 => 11,  64 => 8,  58 => 7,  51 => 5,  45 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/navigation-menu/layout.html.twig", "/var/www/html/itop/templates/base/layouts/navigation-menu/layout.html.twig");
    }
}
