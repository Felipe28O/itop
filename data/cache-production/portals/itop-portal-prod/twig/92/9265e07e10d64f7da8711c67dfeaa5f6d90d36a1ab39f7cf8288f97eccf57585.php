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

/* itop-portal-base/portal/templates/layout.html.twig */
class __TwigTemplate_0e5b59981e18deab4991955e538b468e60fb29f4489690c58dd39d5fad6fb58e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'pPageExtraMetas' => [$this, 'block_pPageExtraMetas'],
            'pPageTitle' => [$this, 'block_pPageTitle'],
            'pPageStylesheets' => [$this, 'block_pPageStylesheets'],
            'pStyleinline' => [$this, 'block_pStyleinline'],
            'pPageScripts' => [$this, 'block_pPageScripts'],
            'pPageBodyClass' => [$this, 'block_pPageBodyClass'],
            'pPageBodyWrapper' => [$this, 'block_pPageBodyWrapper'],
            'pEnvBannerWrapper' => [$this, 'block_pEnvBannerWrapper'],
            'pNavigationWrapper' => [$this, 'block_pNavigationWrapper'],
            'pNavigationTopMenuWrapper' => [$this, 'block_pNavigationTopMenuWrapper'],
            'pNavigationTopMenuLogo' => [$this, 'block_pNavigationTopMenuLogo'],
            'pNavigationTopBricks' => [$this, 'block_pNavigationTopBricks'],
            'pPageUIExtensionNavigationMenuTopbar' => [$this, 'block_pPageUIExtensionNavigationMenuTopbar'],
            'pNavigationSideMenuWrapper' => [$this, 'block_pNavigationSideMenuWrapper'],
            'pNavigationSideMenu' => [$this, 'block_pNavigationSideMenu'],
            'pPageUIExtensionNavigationMenuSidebar' => [$this, 'block_pPageUIExtensionNavigationMenuSidebar'],
            'pNavigationSideMenuLogo' => [$this, 'block_pNavigationSideMenuLogo'],
            'pMainWrapper' => [$this, 'block_pMainWrapper'],
            'pMainHeader' => [$this, 'block_pMainHeader'],
            'pMainContent' => [$this, 'block_pMainContent'],
            'pPageUIExtensionMainContent' => [$this, 'block_pPageUIExtensionMainContent'],
            'pPageFooter' => [$this, 'block_pPageFooter'],
            'pModalForAllWrapper' => [$this, 'block_pModalForAllWrapper'],
            'pModalForAlert' => [$this, 'block_pModalForAlert'],
            'pPageOverlay' => [$this, 'block_pPageOverlay'],
            'pPageUIExtensionBody' => [$this, 'block_pPageUIExtensionBody'],
            'pPageLiveScripts' => [$this, 'block_pPageLiveScripts'],
            'pPageLiveScriptHelpers' => [$this, 'block_pPageLiveScriptHelpers'],
            'pPageReadyScripts' => [$this, 'block_pPageReadyScripts'],
            'pPageExtensionsScripts' => [$this, 'block_pPageExtensionsScripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        echo "
";
        // line 4
        if (($this->getAttribute(($context["app"] ?? null), "combodo.current_user", [], "array", true, true) &&  !(null === $this->getAttribute(($context["app"] ?? null), "combodo.current_user", [], "array")))) {
            // line 5
            echo "\t";
            $context["bUserConnected"] = true;
            // line 6
            echo "\t";
            $context["sUserFullname"] = (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.current_user", [], "array"), "Get", [0 => "first_name"], "method") . " ") . $this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.current_user", [], "array"), "Get", [0 => "last_name"], "method"));
            // line 7
            echo "\t";
            $context["sUserEmail"] = $this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.current_user", [], "array"), "Get", [0 => "email"], "method");
            // line 8
            echo "\t";
            $context["sUserPhotoUrl"] = $this->getAttribute(($context["app"] ?? null), "combodo.current_contact.photo_url", [], "array");
        } else {
            // line 10
            echo "\t";
            $context["bUserConnected"] = false;
            // line 11
            echo "\t";
            $context["sUserFullname"] = "";
            // line 12
            echo "\t";
            $context["sUserEmail"] = "";
            // line 13
            echo "\t";
            $context["sUserPhotoUrl"] = ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", [], "array") . "img/user-profile-default-256px.png");
        }
        // line 15
        echo "
<!doctype html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t";
        // line 23
        echo "\t";
        $this->displayBlock('pPageExtraMetas', $context, $blocks);
        // line 25
        echo "\t<title>";
        $this->displayBlock('pPageTitle', $context, $blocks);
        echo "</title>
\t<link rel=\"shortcut icon\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["images/favicon.ico"])), "html", null, true);
        echo "\" />

\t";
        // line 28
        $this->displayBlock('pPageStylesheets', $context, $blocks);
        // line 76
        echo "
\t";
        // line 77
        $this->displayBlock('pStyleinline', $context, $blocks);
        // line 85
        echo "
\t";
        // line 86
        $this->displayBlock('pPageScripts', $context, $blocks);
        // line 163
        echo "</head>
<body class=\"";
        // line 164
        $this->displayBlock('pPageBodyClass', $context, $blocks);
        echo "\" data-gui-type=\"portal\">
\t";
        // line 165
        $this->displayBlock('pPageBodyWrapper', $context, $blocks);
        // line 404
        echo "\t
\t";
        // line 405
        $this->displayBlock('pPageLiveScripts', $context, $blocks);
        // line 545
        echo "
\t";
        // line 546
        $this->displayBlock('pPageExtensionsScripts', $context, $blocks);
        // line 554
        echo "</body>
</html>
";
    }

    // line 23
    public function block_pPageExtraMetas($context, array $blocks = [])
    {
        // line 24
        echo "\t";
    }

    // line 25
    public function block_pPageTitle($context, array $blocks = [])
    {
        if (((isset($context["sPageTitle"]) || array_key_exists("sPageTitle", $context)) &&  !(null === ($context["sPageTitle"] ?? null)))) {
            echo twig_escape_filter($this->env, ($context["sPageTitle"] ?? null), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_constant("ITOP_APPLICATION_SHORT"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_format')->getCallable(), ["Page:DefaultTitle", twig_constant("ITOP_APPLICATION_SHORT")]), "html", null, true);
        }
    }

    // line 28
    public function block_pPageStylesheets($context, array $blocks = [])
    {
        // line 29
        echo "        ";
        // line 30
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/bootstrap/css/bootstrap.min.css"])), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 32
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"])), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 34
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/datatables/css/dataTables.bootstrap.min.css"])), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/datatables/css/fixedHeader.bootstrap.min.css"])), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/datatables/css/responsive.bootstrap.min.css"])), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/datatables/css/scroller.bootstrap.min.css"])), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/datatables/css/select.bootstrap.min.css"])), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/datatables/css/select.dataTables.min.css"])), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 41
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["css/font-open-sans/font-open-sans.css"])), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 43
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["css/font-combodo/font-combodo.css"])), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 45
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["css/font-awesome/css/all.min.css"])), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 47
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/typeahead/css/typeaheadjs.bootstrap.css"])), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 48
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["css/selectize.default.css"])), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 49
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["css/magnific-popup.css"])), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 50
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["css/c3.min.css"])), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 51
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/ckeditor/plugins/codesnippet/lib/highlight/styles/obsidian.css"])), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t";
        // line 53
        echo "\t\t<link href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), [$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", [], "array"), "properties", []), "themes", []), "bootstrap", [])]), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"css_bootstrap_theme\">
\t\t";
        // line 55
        echo "\t\t<link href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), [$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", [], "array"), "properties", []), "themes", []), "portal", [])]), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"css_portal\">
\t\t";
        // line 57
        echo "\t\t<link href=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["node_modules/tippy.js/dist/tippy.css"])), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 58
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["node_modules/tippy.js/animations/shift-away-subtle.css"])), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t";
        // line 60
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "ui_extensions_helper", [], "array", false, true), "css_files", [], "any", true, true)) {
            // line 61
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? null), "ui_extensions_helper", [], "array"), "css_files", []));
            foreach ($context['_seq'] as $context["_key"] => $context["css_file"]) {
                // line 62
                echo "\t\t\t\t<link href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), [$context["css_file"]]), "html", null, true);
                echo "\" rel=\"stylesheet\">
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "        ";
        }
        // line 65
        echo "\t\t";
        // line 66
        echo "\t\t";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", [], "array", false, true), "properties", [], "any", false, true), "themes", [], "any", false, true), "custom", [], "any", true, true)) {
            // line 67
            echo "\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), [$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", [], "array"), "properties", []), "themes", []), "custom", [])]), "html", null, true);
            echo "\" rel=\"stylesheet\">
\t\t";
        }
        // line 69
        echo "\t\t";
        // line 70
        echo "\t\t";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", [], "array", false, true), "properties", [], "any", false, true), "themes", [], "any", false, true), "others", [], "any", true, true)) {
            // line 71
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", [], "array"), "properties", []), "themes", []), "others", []));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 72
                echo "\t\t\t\t<link href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), [$context["theme"]]), "html", null, true);
                echo "\" rel=\"stylesheet\">
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "\t\t";
        }
        // line 75
        echo "\t";
    }

    // line 77
    public function block_pStyleinline($context, array $blocks = [])
    {
        // line 78
        echo "        ";
        // line 79
        echo "        ";
        if ( !(null === $this->getAttribute($this->getAttribute(($context["app"] ?? null), "ui_extensions_helper", [], "array"), "css_inline", []))) {
            // line 80
            echo "\t\t\t<style>
\t\t\t\t";
            // line 81
            echo $this->getAttribute($this->getAttribute(($context["app"] ?? null), "ui_extensions_helper", [], "array"), "css_inline", []);
            echo "
\t\t\t</style>
        ";
        }
        // line 84
        echo "\t";
    }

    // line 86
    public function block_pPageScripts($context, array $blocks = [])
    {
        // line 87
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/jquery.min.js"])), "html", null, true);
        echo "\"></script>
\t\t";
        // line 88
        if (call_user_func_array($this->env->getFunction('is_development_environment')->getCallable(), [])) {
            // line 89
            echo "\t\t\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/jquery-migrate.dev.js"])), "html", null, true);
            echo "\"></script>
\t\t";
        } else {
            // line 91
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/jquery-migrate.prod.min.js"])), "html", null, true);
            echo "\"></script>
        ";
        }
        // line 93
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/jquery-ui.custom.min.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/jquery.magnific-popup.min.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/jquery.iframe-transport.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/jquery.fileupload.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/utils.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/toolbox.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/d3.min.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/c3.min.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/bootstrap/js/bootstrap.min.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/bootstrap-patches.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/bootstrap-portal-modal.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/latinise/latinise.min.js"])), "html", null, true);
        echo "\"></script>
        ";
        // line 106
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["node_modules/@popperjs/core/dist/umd/popper.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["node_modules/tippy.js/dist/tippy-bundle.umd.js"])), "html", null, true);
        echo "\"></script>
        ";
        // line 109
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/jquery-visible/js/jquery.visible.min.js"])), "html", null, true);
        echo "\"></script>
        ";
        // line 111
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/jquery-base64/js/jquery.base64.min.js"])), "html", null, true);
        echo "\"></script>
        ";
        // line 113
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/moment-with-locales.min.js"])), "html", null, true);
        echo "\"></script>
        ";
        // line 115
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["node_modules/datatables.net/js/jquery.dataTables.min.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/datatables/js/dataTables.bootstrap.min.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 117
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["node_modules/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["node_modules/datatables.net-responsive/js/dataTables.responsive.min.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 119
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["node_modules/datatables.net-scroller/js/dataTables.scroller.min.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["node_modules/datatables.net-select/js/dataTables.select.min.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 121
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/datatables/js/datetime-moment.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/dataTables.accentNeutraliseForFilter.js"])), "html", null, true);
        echo "\"></script>
        ";
        // line 124
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/export.js"])), "html", null, true);
        echo "\"></script>
        ";
        // line 126
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/ckeditor/ckeditor.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 127
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/ckeditor/adapters/jquery.js"])), "html", null, true);
        echo "\"></script>
        ";
        // line 129
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js"])), "html", null, true);
        echo "\"></script>
        ";
        // line 131
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"])), "html", null, true);
        echo "\"></script>
        ";
        // line 133
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/typeahead/js/typeahead.bundle.min.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 134
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["lib/handlebars/js/handlebars.min-768ddbd.js"])), "html", null, true);
        echo "\"></script>

        <script type=\"text/javascript\" src=\"";
        // line 136
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/portal_leave_handler.js"])), "html", null, true);
        echo "\"></script>

        ";
        // line 139
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/selectize.js"])), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 140
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/jquery.itop-set-widget.js"])), "html", null, true);
        echo "\"></script>
        ";
        // line 142
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/form_handler.js"])), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 143
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/form_field.js"])), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 144
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/subform_field.js"])), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 145
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/field_set.js"])), "html", null, true);
        echo "\"></script>
\t\t";
        // line 147
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/portal_form_handler.js"])), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 148
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/portal_form_field.js"])), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 149
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/portal_form_field_html.js"])), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 150
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/portal_form_field_set.js"])), "html", null, true);
        echo "\"></script>
\t\t";
        // line 152
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/clipboard.min.js"])), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/clipboardwidget.js"])), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 154
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["app"] ?? null), "combodo.portal.base.absolute_url", [], "array") . call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), ["js/portal-clipboard.js"])), "html", null, true);
        echo "\"></script>

\t\t";
        // line 157
        echo "\t\t";
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "ui_extensions_helper", [], "array", false, true), "js_files", [], "any", true, true)) {
            // line 158
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? null), "ui_extensions_helper", [], "array"), "js_files", []));
            foreach ($context['_seq'] as $context["_key"] => $context["js_file"]) {
                // line 159
                echo "\t\t\t\t<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('add_itop_version')->getCallable(), [$context["js_file"]]), "html", null, true);
                echo "\"></script>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "        ";
        }
        // line 162
        echo "\t";
    }

    // line 164
    public function block_pPageBodyClass($context, array $blocks = [])
    {
    }

    // line 165
    public function block_pPageBodyWrapper($context, array $blocks = [])
    {
        // line 166
        echo "\t\t";
        $this->displayBlock('pEnvBannerWrapper', $context, $blocks);
        // line 176
        echo "\t\t
\t\t";
        // line 177
        $this->displayBlock('pNavigationWrapper', $context, $blocks);
        // line 326
        echo "\t\t
\t\t";
        // line 327
        $this->displayBlock('pMainWrapper', $context, $blocks);
        // line 354
        echo "\t\t
\t\t<footer id=\"footer-wrapper\">
\t\t\t";
        // line 356
        $this->displayBlock('pPageFooter', $context, $blocks);
        // line 359
        echo "\t\t</footer>
\t
\t\t";
        // line 361
        $this->displayBlock('pModalForAllWrapper', $context, $blocks);
        // line 370
        echo "\t\t";
        $this->displayBlock('pModalForAlert', $context, $blocks);
        // line 389
        echo "
\t\t";
        // line 390
        $this->displayBlock('pPageOverlay', $context, $blocks);
        // line 397
        echo "
\t\t";
        // line 398
        $this->displayBlock('pPageUIExtensionBody', $context, $blocks);
        // line 403
        echo "\t";
    }

    // line 166
    public function block_pEnvBannerWrapper($context, array $blocks = [])
    {
        // line 167
        echo "\t\t\t";
        if (($this->getAttribute(($context["app"] ?? null), "combodo.current_environment", [], "array") != "production")) {
            // line 168
            echo "\t\t\t\t<div id=\"envbanner\" class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t";
            // line 169
            echo call_user_func_array($this->env->getFilter('dict_format')->getCallable(), ["Portal:EnvironmentBanner:Title", twig_upper_filter($this->env, $this->getAttribute(($context["app"] ?? null), "combodo.current_environment", [], "array"))]);
            echo "
\t\t\t\t\t<button type=\"button\" onclick=\"window;location.href='";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "url_generator", [], "array"), "generate", [0 => "p_home", 1 => ["switch_env" => "production"]], "method"), "html", null, true);
            echo "'\">
\t\t\t\t\t\t";
            // line 171
            echo call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:EnvironmentBanner:GoToProduction"]);
            echo "
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t";
        }
        // line 175
        echo "\t\t";
    }

    // line 177
    public function block_pNavigationWrapper($context, array $blocks = [])
    {
        // line 178
        echo "\t\t\t";
        // line 179
        echo "\t\t\t";
        $this->displayBlock('pNavigationTopMenuWrapper', $context, $blocks);
        // line 250
        echo "
\t\t\t";
        // line 252
        echo "\t\t\t";
        $this->displayBlock('pNavigationSideMenuWrapper', $context, $blocks);
        // line 325
        echo "\t\t";
    }

    // line 179
    public function block_pNavigationTopMenuWrapper($context, array $blocks = [])
    {
        // line 180
        echo "\t\t\t\t<nav class=\"navbar navbar-fixed-top navbar-default visible-xs\" id=\"topbar\" role=\"navigation\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\">
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t";
        // line 188
        $this->displayBlock('pNavigationTopMenuLogo', $context, $blocks);
        // line 197
        echo "\t\t\t\t\t\t\t<p class=\"navbar-text\">
\t\t\t\t\t\t\t\t<a class=\"navbar-link user_infos\" href=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "url_generator", []), "generate", [0 => "p_user_profile_brick"], "method"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"user_photo\" style=\"background-image: url('";
        // line 199
        echo twig_escape_filter($this->env, ($context["sUserPhotoUrl"] ?? null), "html", null, true);
        echo "');\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"user_fullname\">";
        // line 200
        echo twig_escape_filter($this->env, ($context["sUserFullname"] ?? null), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbar\">
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t\t";
        // line 206
        $this->displayBlock('pNavigationTopBricks', $context, $blocks);
        // line 224
        echo "\t\t\t\t\t\t\t\t";
        if (($context["bUserConnected"] ?? null)) {
            // line 225
            echo "\t\t\t\t\t\t\t\t\t<li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"";
            // line 226
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "url_generator", []), "generate", [0 => "p_user_profile_brick"], "method"), "html", null, true);
            echo "\"><span class=\"brick_icon fas fa-user fa-2x fa-fw\"></span>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Brick:Portal:UserProfile:Navigation:Dropdown:MyProfil"]), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t";
            // line 227
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? null), "combodo.current_user.allowed_portals", [], "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["aPortal"]) {
                // line 228
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["aPortal"], "id", []) != $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", [], "array"), "properties", []), "id", []))) {
                    // line 229
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    $context["sIconClass"] = ((($this->getAttribute($context["aPortal"], "id", []) == "backoffice")) ? ("far fa-list-alt") : ("fas fa-external-link-alt"));
                    // line 230
                    echo "\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["aPortal"], "url", []), "html", null, true);
                    echo "\" target=\"_blank\"><span class=\"brick_icon ";
                    echo twig_escape_filter($this->env, ($context["sIconClass"] ?? null), "html", null, true);
                    echo " fa-2x fa-fw\"></span>";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [$this->getAttribute($context["aPortal"], "label", [])]), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 232
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aPortal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 233
            echo "\t\t\t\t\t\t\t\t\t";
            // line 234
            echo "\t\t\t\t\t\t\t\t\t";
            if ((twig_length_filter($this->env, $this->getAttribute(($context["app"] ?? null), "combodo.current_user.allowed_portals", [], "array")) > 1)) {
                // line 235
                echo "\t\t\t\t\t\t\t\t\t\t<li role=\"separator\" class=\"divider\"></li>
\t\t\t\t\t\t\t\t\t";
            }
            // line 237
            echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array"), "html", null, true);
            echo "pages/logoff.php\"><span class=\"brick_icon fas fa-sign-out-alt fa-2x fa-fw\"></span>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Brick:Portal:UserProfile:Navigation:Dropdown:Logout"]), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t\t";
        }
        // line 239
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

                        ";
        // line 242
        $this->displayBlock('pPageUIExtensionNavigationMenuTopbar', $context, $blocks);
        // line 247
        echo "\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t";
    }

    // line 188
    public function block_pNavigationTopMenuLogo($context, array $blocks = [])
    {
        // line 189
        echo "\t\t\t\t\t\t\t\t<a class=\"navbar-brand pull-right\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_config_parameter')->getCallable(), ["app_icon_url"]), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t";
        // line 190
        if ( !(null === $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", [], "array"), "properties", []), "logo", []))) {
            // line 191
            echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", [], "array"), "properties", []), "logo", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [$this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", [], "array"), "properties", []), "name", [])]), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 193
            echo "\t\t\t\t\t\t\t\t\t\tiTop
\t\t\t\t\t\t\t\t\t";
        }
        // line 195
        echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
    }

    // line 206
    public function block_pNavigationTopBricks($context, array $blocks = [])
    {
        // line 207
        echo "\t\t\t\t\t\t\t\t\t<li class=\"brick_menu_item ";
        if ( !(isset($context["oBrick"]) || array_key_exists("oBrick", $context))) {
            echo "active";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "url_generator", []), "generate", [0 => "p_home"], "method"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"brick_icon fas fa-home fa-2x\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 210
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Page:Home"]), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        // line 213
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? null), "brick_collection", [], "array"), "navigation_menu_ordering", []));
        foreach ($context['_seq'] as $context["_key"] => $context["brick"]) {
            // line 214
            echo "\t\t\t\t\t\t\t\t\t\t";
            if ((($this->getAttribute($context["brick"], "GetActive", []) && $this->getAttribute($context["brick"], "GetVisibleNavigationMenu", [])) &&  !(null === $this->getAttribute($context["brick"], "GetRouteName", [])))) {
                // line 215
                echo "\t\t\t\t\t\t\t\t\t\t\t<li class=\"brick_menu_item ";
                if (((isset($context["oBrick"]) || array_key_exists("oBrick", $context)) && ($this->getAttribute($context["brick"], "id", []) == $this->getAttribute(($context["oBrick"] ?? null), "id", [])))) {
                    echo "active";
                }
                echo "\" data-brick-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["brick"], "GetId", []), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 216
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "url_generator", []), "generate", [0 => $this->getAttribute($context["brick"], "GetRouteName", []), 1 => ["sBrickId" => $this->getAttribute($context["brick"], "GetId", [])]], "method"), "html", null, true);
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.routes", [], "array", false, true), $this->getAttribute($context["brick"], "GetRouteName", []), [], "array", false, true), "hash", [], "array", true, true)) {
                    echo "#";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.routes", [], "array"), $this->getAttribute($context["brick"], "GetRouteName", []), [], "array"), "hash", [], "array"), "html", null, true);
                }
                echo "\" ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.routes", [], "array", false, true), $this->getAttribute($context["brick"], "GetRouteName", []), [], "array", false, true), "navigation_menu_attr", [], "array", true, true)) {
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.routes", [], "array"), $this->getAttribute($context["brick"], "GetRouteName", []), [], "array"), "navigation_menu_attr", [], "array"));
                    foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                        echo " ";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "\"";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                echo " ";
                if ($this->getAttribute($context["brick"], "GetModal", [])) {
                    echo "data-toggle=\"modal\" data-target=\"#modal-for-all\"";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"brick_icon ";
                // line 217
                echo twig_escape_filter($this->env, $this->getAttribute($context["brick"], "GetDecorationClassNavigationMenu", []), "html", null, true);
                echo "\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 218
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [$this->getAttribute($context["brick"], "GetTitleNavigationMenu", [])]), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 222
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        echo "\t\t\t\t\t\t\t\t";
    }

    // line 242
    public function block_pPageUIExtensionNavigationMenuTopbar($context, array $blocks = [])
    {
        // line 243
        echo "                            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "ui_extensions_helper", [], "array", false, true), "html", [], "any", false, true), twig_constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_NAVIGATION_MENU"), [], "array", true, true)) {
            // line 244
            echo "                                ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "ui_extensions_helper", [], "array"), "html", []), twig_constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_NAVIGATION_MENU"), [], "array");
            echo "
                            ";
        }
        // line 246
        echo "                        ";
    }

    // line 252
    public function block_pNavigationSideMenuWrapper($context, array $blocks = [])
    {
        // line 253
        echo "\t\t\t\t<nav class=\"navbar-default hidden-xs col-sm-3 col-md-2\" id=\"sidebar\" role=\"navigation\">
\t\t\t\t\t<div class=\"user_card bg-primary\">
\t\t\t\t\t\t<div class=\"user_photo\" style=\"background-image: url('";
        // line 255
        echo twig_escape_filter($this->env, ($context["sUserPhotoUrl"] ?? null), "html", null, true);
        echo "');\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"user_infos\">
\t\t\t\t\t\t\t<div class=\"user_fullname\">";
        // line 258
        echo twig_escape_filter($this->env, ($context["sUserFullname"] ?? null), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t<div class=\"user_email dropdown\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"user_options\">
\t\t\t\t\t\t\t\t\t";
        // line 261
        echo twig_escape_filter($this->env, ($context["sUserEmail"] ?? null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu user_options\" aria-labelledby=\"user_options\">
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "url_generator", []), "generate", [0 => "p_user_profile_brick"], "method"), "html", null, true);
        echo "\"><span class=\"brick_icon fas fa-user fa-lg fa-fw\"></span>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Brick:Portal:UserProfile:Navigation:Dropdown:MyProfil"]), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t";
        // line 266
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? null), "combodo.current_user.allowed_portals", [], "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["aPortal"]) {
            // line 267
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["aPortal"], "id", []) != $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", [], "array"), "properties", []), "id", []))) {
                // line 268
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["sGlyphiconClass"] = ((($this->getAttribute($context["aPortal"], "id", []) == "backoffice")) ? ("far fa-list-alt") : ("fas fa-external-link-alt"));
                // line 269
                echo "\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["aPortal"], "url", []), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", [], "array"), "properties", []), "allowed_portals", []), "opening_mode", []) == "tab")) {
                    echo "target=\"_blank\"";
                }
                echo " title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [$this->getAttribute($context["aPortal"], "label", [])]), "html", null, true);
                echo "\"><span class=\"brick_icon ";
                echo twig_escape_filter($this->env, ($context["sGlyphiconClass"] ?? null), "html", null, true);
                echo " fa-lg fa-fw\"></span>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [$this->getAttribute($context["aPortal"], "label", [])]), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 271
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aPortal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 272
        echo "\t\t\t\t\t\t\t\t\t";
        // line 273
        echo "\t\t\t\t\t\t\t\t\t";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["app"] ?? null), "combodo.current_user.allowed_portals", [], "array")) > 1)) {
            // line 274
            echo "\t\t\t\t\t\t\t\t\t\t<li role=\"separator\" class=\"divider\"></li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 276
        echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array"), "html", null, true);
        echo "pages/logoff.php\"><span class=\"brick_icon fas fa-sign-out-alt fa-lg fa-fw\"></span>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Brick:Portal:UserProfile:Navigation:Dropdown:Logout"]), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"menu\">
\t\t\t\t\t\t";
        // line 282
        $this->displayBlock('pNavigationSideMenu', $context, $blocks);
        // line 302
        echo "\t\t\t\t\t</div>

                    ";
        // line 304
        $this->displayBlock('pPageUIExtensionNavigationMenuSidebar', $context, $blocks);
        // line 309
        echo "
\t\t\t\t\t";
        // line 310
        if ( !(null === $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", [], "array"), "properties", []), "logo", []))) {
            // line 311
            echo "\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t";
            // line 312
            $this->displayBlock('pNavigationSideMenuLogo', $context, $blocks);
            // line 321
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 323
        echo "\t\t\t\t</nav>
\t\t\t";
    }

    // line 282
    public function block_pNavigationSideMenu($context, array $blocks = [])
    {
        // line 283
        echo "\t\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t\t<li class=\"brick_menu_item ";
        // line 284
        if ( !(isset($context["oBrick"]) || array_key_exists("oBrick", $context))) {
            echo "active";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "url_generator", []), "generate", [0 => "p_home"], "method"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<span class=\"brick_icon fas fa-home fa-2x\"></span>
\t\t\t\t\t\t\t\t\t\t";
        // line 287
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Page:Home"]), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        // line 290
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? null), "brick_collection", [], "array"), "navigation_menu_ordering", []));
        foreach ($context['_seq'] as $context["_key"] => $context["brick"]) {
            // line 291
            echo "\t\t\t\t\t\t\t\t\t";
            if ((($this->getAttribute($context["brick"], "GetActive", []) && $this->getAttribute($context["brick"], "GetVisibleNavigationMenu", [])) &&  !(null === $this->getAttribute($context["brick"], "GetRouteName", [])))) {
                // line 292
                echo "\t\t\t\t\t\t\t\t\t\t<li class=\"brick_menu_item ";
                if (((isset($context["oBrick"]) || array_key_exists("oBrick", $context)) && ($this->getAttribute($context["brick"], "id", []) == $this->getAttribute(($context["oBrick"] ?? null), "id", [])))) {
                    echo "active";
                }
                echo "\" data-brick-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["brick"], "GetId", []), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 293
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "url_generator", []), "generate", [0 => $this->getAttribute($context["brick"], "GetRouteName", []), 1 => ["sBrickId" => $this->getAttribute($context["brick"], "GetId", [])]], "method"), "html", null, true);
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.routes", [], "array", false, true), $this->getAttribute($context["brick"], "GetRouteName", []), [], "array", false, true), "hash", [], "array", true, true)) {
                    echo "#";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.routes", [], "array"), $this->getAttribute($context["brick"], "GetRouteName", []), [], "array"), "hash", [], "array"), "html", null, true);
                }
                echo "\" ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.routes", [], "array", false, true), $this->getAttribute($context["brick"], "GetRouteName", []), [], "array", false, true), "navigation_menu_attr", [], "array", true, true)) {
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.routes", [], "array"), $this->getAttribute($context["brick"], "GetRouteName", []), [], "array"), "navigation_menu_attr", [], "array"));
                    foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                        echo " ";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "\"";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                echo " ";
                if ($this->getAttribute($context["brick"], "GetModal", [])) {
                    echo "data-toggle=\"modal\" data-target=\"#modal-for-all\"";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"brick_icon ";
                // line 294
                echo twig_escape_filter($this->env, $this->getAttribute($context["brick"], "GetDecorationClassNavigationMenu", []), "html", null, true);
                echo "\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 295
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [$this->getAttribute($context["brick"], "GetTitleNavigationMenu", [])]), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
            }
            // line 299
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 300
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
    }

    // line 304
    public function block_pPageUIExtensionNavigationMenuSidebar($context, array $blocks = [])
    {
        // line 305
        echo "                        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "ui_extensions_helper", [], "array", false, true), "html", [], "any", false, true), twig_constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_NAVIGATION_MENU"), [], "array", true, true)) {
            // line 306
            echo "                            ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "ui_extensions_helper", [], "array"), "html", []), twig_constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_NAVIGATION_MENU"), [], "array");
            echo "
                        ";
        }
        // line 308
        echo "                    ";
    }

    // line 312
    public function block_pNavigationSideMenuLogo($context, array $blocks = [])
    {
        // line 313
        echo "\t\t\t\t\t\t\t\t";
        // line 314
        echo "\t\t\t\t\t\t\t\t";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "kernel", [], "array"), "debug", []) == true)) {
            // line 315
            echo "\t\t\t\t\t\t\t\t\t<div style=\"position: fixed; bottom: 0px; left: 0px; z-index: 9999;\">Debug : Taille <span class=\"hidden-sm hidden-md hidden-lg\">XS</span><span class=\"hidden-xs hidden-md hidden-lg\">SM</span><span class=\"hidden-xs hidden-sm hidden-lg\">MD</span><span class=\"hidden-xs hidden-sm hidden-md\">LG</span></div>
\t\t\t\t\t\t\t\t";
        }
        // line 317
        echo "\t\t\t\t\t\t\t\t<a href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_config_parameter')->getCallable(), ["app_icon_url"]), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [$this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", [], "array"), "properties", []), "name", [])]), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", [], "array"), "properties", []), "logo", []), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), [$this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "combodo.portal.instance.conf", [], "array"), "properties", []), "name", [])]), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
    }

    // line 327
    public function block_pMainWrapper($context, array $blocks = [])
    {
        // line 328
        echo "\t\t<div class=\"container-fluid\" id=\"main-wrapper\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-9 col-md-10 col-sm-offset-3 col-md-offset-2\">
                    <section class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t";
        // line 333
        $this->loadTemplate("itop-portal-base/portal/templates/helpers/session_messages/session_messages.html.twig", "itop-portal-base/portal/templates/layout.html.twig", 333)->display($context);
        // line 334
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"row\" id=\"main-header\">
\t\t\t\t\t\t";
        // line 337
        $this->displayBlock('pMainHeader', $context, $blocks);
        // line 339
        echo "\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"row\" id=\"main-content\">
\t\t\t\t\t\t";
        // line 341
        $this->displayBlock('pMainContent', $context, $blocks);
        // line 343
        echo "\t\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 347
        $this->displayBlock('pPageUIExtensionMainContent', $context, $blocks);
        // line 352
        echo "\t\t</div>
\t\t";
    }

    // line 337
    public function block_pMainHeader($context, array $blocks = [])
    {
        // line 338
        echo "\t\t\t\t\t\t";
    }

    // line 341
    public function block_pMainContent($context, array $blocks = [])
    {
        // line 342
        echo "\t\t\t\t\t\t";
    }

    // line 347
    public function block_pPageUIExtensionMainContent($context, array $blocks = [])
    {
        // line 348
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "ui_extensions_helper", [], "array", false, true), "html", [], "any", false, true), twig_constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_MAIN_CONTENT"), [], "array", true, true)) {
            // line 349
            echo "                    ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "ui_extensions_helper", [], "array"), "html", []), twig_constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_MAIN_CONTENT"), [], "array");
            echo "
                ";
        }
        // line 351
        echo "\t\t\t";
    }

    // line 356
    public function block_pPageFooter($context, array $blocks = [])
    {
        // line 357
        echo "\t\t\t\t";
        // line 358
        echo "\t\t\t";
    }

    // line 361
    public function block_pModalForAllWrapper($context, array $blocks = [])
    {
        // line 362
        echo "\t\t\t<div class=\"modal fade\" id=\"modal-for-all\" role=\"dialog\" tabindex=\"-1\">
\t\t\t\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t";
        // line 365
        $this->loadTemplate("itop-portal-base/portal/templates/helpers/loader.html.twig", "itop-portal-base/portal/templates/layout.html.twig", 365)->display($context);
        // line 366
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
    }

    // line 370
    public function block_pModalForAlert($context, array $blocks = [])
    {
        // line 371
        echo "\t\t\t<div class=\"modal fade\" id=\"modal-for-alert\" role=\"dialog\" tabindex=\"-1\">
\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
        // line 375
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Button:Close"]), "html", null, true);
        echo "\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t<h4 class=\"modal-title\"></h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t<div class=\"alert\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">";
        // line 382
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Button:Close"]), "html", null, true);
        echo "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
    }

    // line 390
    public function block_pPageOverlay($context, array $blocks = [])
    {
        // line 391
        echo "\t\t\t<div id=\"page_overlay\" class=\"global_overlay\">
\t\t\t\t<div class=\"overlay_content\">
\t\t\t\t\t";
        // line 393
        $this->loadTemplate("itop-portal-base/portal/templates/helpers/loader.html.twig", "itop-portal-base/portal/templates/layout.html.twig", 393)->display($context);
        // line 394
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
    }

    // line 398
    public function block_pPageUIExtensionBody($context, array $blocks = [])
    {
        // line 399
        echo "\t\t\t";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "ui_extensions_helper", [], "array", false, true), "html", [], "any", false, true), twig_constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_BODY"), [], "array", true, true)) {
            // line 400
            echo "\t\t\t\t";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "ui_extensions_helper", [], "array"), "html", []), twig_constant("iPortalUIExtension::ENUM_PORTAL_EXT_UI_BODY"), [], "array");
            echo "
\t\t\t";
        }
        // line 402
        echo "\t\t";
    }

    // line 405
    public function block_pPageLiveScripts($context, array $blocks = [])
    {
        // line 406
        echo "\t\t<script type=\"text/javascript\">
\t\t\t";
        // line 407
        $this->displayBlock('pPageLiveScriptHelpers', $context, $blocks);
        // line 476
        echo "
            \$(document).ready(function ()
            {
                const oBodyElem = \$('body');

                ";
        // line 481
        $this->displayBlock('pPageReadyScripts', $context, $blocks);
        // line 542
        echo "\t\t\t});
\t\t</script>
\t";
    }

    // line 407
    public function block_pPageLiveScriptHelpers($context, array $blocks = [])
    {
        // line 408
        echo "\t\t\t\t// Helper to get the application root url
\t\t\t\tvar GetAbsoluteUrlAppRoot = function()
\t\t\t\t{
\t\t\t\t\treturn '";
        // line 411
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? null), "combodo.absolute_url", [], "array"), "html", null, true);
        echo "';
\t\t\t\t};
\t\t\t\t// Note: We might want to expose URLs instead of this kind of stuff... 🤔
\t\t\t\tvar GetAddSessionMessageUrl = function()
\t\t\t\t{
\t\t\t\t\treturn '";
        // line 416
        echo $this->getAttribute($this->getAttribute(($context["app"] ?? null), "url_generator", [], "array"), "generate", [0 => "p_session_message_add"], "method");
        echo "';
\t\t\t\t};
\t\t\t\t/**
\t\t\t\t * @param sUrl {string} The URL to append the new param to
\t\t\t\t * @param sParamName {string} Name of the parameter
\t\t\t\t * @param sParamValue {string} Value of the param, needs to be already URL encoded
\t\t\t\t * @return {string} The sUrl parameters with the sParamName / sParamValue append at the right place
\t\t\t\t * @deprecated 3.0.0 N°4176
\t\t\t\t */
\t\t\t\tvar AddParameterToUrl = function(sUrl, sParamName, sParamValue)
\t\t\t\t{
\t\t\t\t\tsUrl += (sUrl.split('?')[1] ? '&':'?') + sParamName + '=' + sParamValue;
\t\t\t\t\treturn sUrl;
\t\t\t\t};
\t\t\t\t// Test is sString is a valid JSON string
\t\t\t\t// TODO 3.0.0: Move to CombodoGlobalToolbox and deprecate this one
\t\t\t\tvar IsJSONString = function(sString)
\t\t\t\t{
\t\t\t\t\ttry {
\t\t\t\t\t\tJSON.parse(sString);
\t\t\t\t\t} catch (oException) {
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\treturn true;
\t\t\t\t};
\t\t\t\t// TODO 3.0.0: Move to CombodoPortalToolbox and deprecate this one
\t\t\t\tvar GetContentLoaderTemplate = function()
\t\t\t\t{
\t\t\t\t\treturn '<div class=\"content_loader\"><div class=\"icon glyphicon glyphicon-refresh\"></div><div class=\"message\">";
        // line 444
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Page:PleaseWait"]), "html", null, true);
        echo "</div></div>';
\t\t\t\t};
\t\t\t\t// TODO 3.0.0: Move to CombodoPortalToolbox and deprecate this one
\t\t\t\tvar ShowLoginDialog = function()
\t\t\t\t{
                    var oModalElem = \$('#modal-for-alert').clone();
                    oModalElem.attr('id', '');
                    oModalElem.find('.modal-content .modal-header .modal-title').html('";
        // line 451
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Error:HTTP:401"]), "js"), "html", null, true);
        echo "');
                    oModalElem.find('.modal-content .modal-body .alert').addClass('alert-danger').html('";
        // line 452
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:ErrorUserLoggedOut"]), "js"), "html", null, true);
        echo "');

                    oModalElem.find('.modal-content .modal-body button').replaceWith( \$('<button type=\"button\" class=\"btn btn-primary\" onclick=\"javascript:window.location.reload();\">";
        // line 454
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:LogOff:ClickHereToLoginAgain"]), "js"), "html", null, true);
        echo "</button>') );

                    oModalElem.appendTo('body');
                    oModalElem.modal('show');
\t\t\t\t};
\t\t\t\t// TODO 3.0.0: Move to CombodoPortalToolbox and deprecate this one
\t\t\t\tvar ShowErrorDialog = function(sBody, sTitle)
\t\t\t\t{
\t\t\t\t    if(sTitle === undefined)
\t\t\t\t\t{
\t\t\t\t\t    sTitle = '";
        // line 464
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Error:HTTP:500"]), "js"), "html", null, true);
        echo "';
\t\t\t\t\t}
\t\t\t\t    if(sBody === undefined)
\t\t\t\t\t{
                        sBody = '";
        // line 468
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_format')->getCallable(), ["Error:XHR:Fail", twig_constant("ITOP_APPLICATION_SHORT")]), "js"), "html", null, true);
        echo "';
\t\t\t\t\t}
\t\t\t\t\tvar oModalElem = \$('#modal-for-alert');
                    oModalElem.find('.modal-content .modal-header .modal-title').html(sTitle);
                    oModalElem.find('.modal-content .modal-body .alert').addClass('alert-danger').html(sBody);
                    oModalElem.modal('show');
\t\t\t\t};
\t\t\t";
    }

    // line 481
    public function block_pPageReadyScripts($context, array $blocks = [])
    {
        // line 482
        echo "\t\t\t\t\t// Add proprietary header to identify our XHR calls
\t\t\t\t\t\$(document).ajaxSend(function(oEvent, oXHR, oOptions) {
\t\t\t\t\t\toXHR.setRequestHeader('X-Combodo-Ajax', 'true');
\t\t\t\t\t});
\t\t\t\t\t// Handle AJAX errors (exceptions (500), logout (401), ...)
\t\t\t\t\t\$(document).ajaxError(function(oEvent, oXHR, oSettings, sError){
\t\t\t\t\t    if(oXHR.status === 401)
\t\t\t\t\t\t{
\t\t\t\t\t\t    ShowLoginDialog();
\t\t\t\t\t\t}
                        else if(oXHR.status === 404)
                        {
                            ShowErrorDialog('";
        // line 494
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:ObjectDoesNotExist"]), "js"), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Error:HTTP:404"]), "js"), "html", null, true);
        echo "');
                        }
                      else if(oXHR.status === 0 && oXHR.readyState === 0)
                        {
                            //DO NOTHING the ajax call has been aborted
                        }
                        else if(oXHR.responseText !== undefined && IsJSONString(oXHR.responseText) === true)
                        {
                            var oData = JSON.parse(oXHR.responseText);
                            // Catching AJAX exception with detailed error.
                            if( (oData.error_message !== undefined) && (oData.error_title !== undefined) )
                            {
                                ShowErrorDialog(oData.error_message, oData.error_title);
                            } else
                            {
                                ShowErrorDialog();
                            }
                        } else
                        {
                            ShowErrorDialog();
                        }
                    });
                // All processing that should be done on an ajax return
                \$(document).ajaxSuccess(function ()
                {
                    // Init tooltips from async. markup, small timeout to allow markup to be built if necessary
                    setTimeout(function ()
                    {
                        CombodoTooltip.InitAllNonInstantiatedTooltips();
                    }, 1000);
                });

                // Enable tooltips based on existing HTML markup, for markup added dynamically after DOM ready (AJAX, ...) see .ajaxSuccess()...
                CombodoTooltip.InitAllNonInstantiatedTooltips();
                // ... object form which are handled with the following
                oBodyElem.on('form_built', function (oEvent)
                {
                    CombodoTooltip.InitAllNonInstantiatedTooltips(\$(oEvent.target), true);
                });
                // ... refresh of the dataTables
                oBodyElem.on('init.dt draw.dt', function (oEvent)
                {
                    CombodoTooltip.InitAllNonInstantiatedTooltips(\$(oEvent.target), true);
                });

                // Initialize confirmation message handler when a form with touched fields is closed
                oBodyElem.portal_leave_handler({'message': '";
        // line 540
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Form:Close:Warning"]), "html", null, true);
        echo "'});
                ";
    }

    // line 546
    public function block_pPageExtensionsScripts($context, array $blocks = [])
    {
        // line 547
        echo "        ";
        // line 548
        echo "        ";
        if ( !(null === $this->getAttribute($this->getAttribute(($context["app"] ?? null), "ui_extensions_helper", [], "array"), "js_inline", []))) {
            // line 549
            echo "\t\t\t<script type=\"text/javascript\">
\t\t\t\t";
            // line 550
            echo $this->getAttribute($this->getAttribute(($context["app"] ?? null), "ui_extensions_helper", [], "array"), "js_inline", []);
            echo "
\t\t\t</script>
        ";
        }
        // line 553
        echo "\t";
    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/templates/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1530 => 553,  1524 => 550,  1521 => 549,  1518 => 548,  1516 => 547,  1513 => 546,  1507 => 540,  1456 => 494,  1442 => 482,  1439 => 481,  1427 => 468,  1420 => 464,  1407 => 454,  1402 => 452,  1398 => 451,  1388 => 444,  1357 => 416,  1349 => 411,  1344 => 408,  1341 => 407,  1335 => 542,  1333 => 481,  1326 => 476,  1324 => 407,  1321 => 406,  1318 => 405,  1314 => 402,  1308 => 400,  1305 => 399,  1302 => 398,  1296 => 394,  1294 => 393,  1290 => 391,  1287 => 390,  1276 => 382,  1266 => 375,  1260 => 371,  1257 => 370,  1250 => 366,  1248 => 365,  1243 => 362,  1240 => 361,  1236 => 358,  1234 => 357,  1231 => 356,  1227 => 351,  1221 => 349,  1218 => 348,  1215 => 347,  1211 => 342,  1208 => 341,  1204 => 338,  1201 => 337,  1196 => 352,  1194 => 347,  1188 => 343,  1186 => 341,  1182 => 339,  1180 => 337,  1175 => 334,  1173 => 333,  1166 => 328,  1163 => 327,  1154 => 318,  1147 => 317,  1143 => 315,  1140 => 314,  1138 => 313,  1135 => 312,  1131 => 308,  1125 => 306,  1122 => 305,  1119 => 304,  1114 => 300,  1108 => 299,  1101 => 295,  1097 => 294,  1070 => 293,  1061 => 292,  1058 => 291,  1054 => 290,  1048 => 287,  1043 => 285,  1037 => 284,  1034 => 283,  1031 => 282,  1026 => 323,  1022 => 321,  1020 => 312,  1017 => 311,  1015 => 310,  1012 => 309,  1010 => 304,  1006 => 302,  1004 => 282,  992 => 276,  988 => 274,  985 => 273,  983 => 272,  977 => 271,  961 => 269,  958 => 268,  955 => 267,  951 => 266,  945 => 265,  938 => 261,  932 => 258,  926 => 255,  922 => 253,  919 => 252,  915 => 246,  909 => 244,  906 => 243,  903 => 242,  899 => 223,  893 => 222,  886 => 218,  882 => 217,  855 => 216,  846 => 215,  843 => 214,  839 => 213,  833 => 210,  828 => 208,  821 => 207,  818 => 206,  813 => 195,  809 => 193,  801 => 191,  799 => 190,  794 => 189,  791 => 188,  785 => 247,  783 => 242,  778 => 239,  770 => 237,  766 => 235,  763 => 234,  761 => 233,  755 => 232,  745 => 230,  742 => 229,  739 => 228,  735 => 227,  729 => 226,  726 => 225,  723 => 224,  721 => 206,  712 => 200,  708 => 199,  704 => 198,  701 => 197,  699 => 188,  689 => 180,  686 => 179,  682 => 325,  679 => 252,  676 => 250,  673 => 179,  671 => 178,  668 => 177,  664 => 175,  657 => 171,  653 => 170,  649 => 169,  646 => 168,  643 => 167,  640 => 166,  636 => 403,  634 => 398,  631 => 397,  629 => 390,  626 => 389,  623 => 370,  621 => 361,  617 => 359,  615 => 356,  611 => 354,  609 => 327,  606 => 326,  604 => 177,  601 => 176,  598 => 166,  595 => 165,  590 => 164,  586 => 162,  583 => 161,  574 => 159,  569 => 158,  566 => 157,  561 => 154,  557 => 153,  552 => 152,  548 => 150,  544 => 149,  540 => 148,  535 => 147,  531 => 145,  527 => 144,  523 => 143,  518 => 142,  514 => 140,  509 => 139,  504 => 136,  499 => 134,  494 => 133,  489 => 131,  484 => 129,  480 => 127,  475 => 126,  470 => 124,  466 => 122,  462 => 121,  458 => 120,  454 => 119,  450 => 118,  446 => 117,  442 => 116,  437 => 115,  432 => 113,  427 => 111,  422 => 109,  418 => 107,  413 => 106,  409 => 104,  405 => 103,  401 => 102,  397 => 101,  393 => 100,  389 => 99,  385 => 98,  381 => 97,  377 => 96,  373 => 95,  369 => 94,  364 => 93,  358 => 91,  352 => 89,  350 => 88,  345 => 87,  342 => 86,  338 => 84,  332 => 81,  329 => 80,  326 => 79,  324 => 78,  321 => 77,  317 => 75,  314 => 74,  305 => 72,  300 => 71,  297 => 70,  295 => 69,  289 => 67,  286 => 66,  284 => 65,  281 => 64,  272 => 62,  267 => 61,  264 => 60,  260 => 58,  255 => 57,  250 => 55,  245 => 53,  241 => 51,  237 => 50,  233 => 49,  229 => 48,  224 => 47,  219 => 45,  214 => 43,  209 => 41,  205 => 39,  201 => 38,  197 => 37,  193 => 36,  189 => 35,  184 => 34,  179 => 32,  174 => 30,  172 => 29,  169 => 28,  157 => 25,  153 => 24,  150 => 23,  144 => 554,  142 => 546,  139 => 545,  137 => 405,  134 => 404,  132 => 165,  128 => 164,  125 => 163,  123 => 86,  120 => 85,  118 => 77,  115 => 76,  113 => 28,  108 => 26,  103 => 25,  100 => 23,  91 => 15,  87 => 13,  84 => 12,  81 => 11,  78 => 10,  74 => 8,  71 => 7,  68 => 6,  65 => 5,  63 => 4,  60 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "itop-portal-base/portal/templates/layout.html.twig", "/var/www/html/itop/env-production/itop-portal-base/portal/templates/layout.html.twig");
    }
}
