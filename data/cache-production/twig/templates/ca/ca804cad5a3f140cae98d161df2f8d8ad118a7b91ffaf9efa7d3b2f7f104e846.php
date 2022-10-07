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

/* base/layouts/object/object-details/layout.js.twig */
class __TwigTemplate_40420bdfc6c4f4c3fae3d5b4098dcab539f70e8b2243797063a5206ad2c4af8d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'iboWidgetInstantiation' => [$this, 'block_iboWidgetInstantiation'],
            'iboMiscHandlers' => [$this, 'block_iboMiscHandlers'],
            'iboKeyboardShortcutsHandlers' => [$this, 'block_iboKeyboardShortcutsHandlers'],
            'iboPanelHeaderRightActionsHandlers' => [$this, 'block_iboPanelHeaderRightActionsHandlers'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "base/components/panel/layout.js.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("base/components/panel/layout.js.twig", "base/layouts/object/object-details/layout.js.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_iboWidgetInstantiation($context, array $blocks = [])
    {
        // line 6
        echo "    \$('#";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "').object_details({
        is_header_visible_on_scroll: ";
        // line 7
        echo twig_escape_filter($this->env, var_export($this->getAttribute(($context["oUIBlock"] ?? null), "IsHeaderVisibleOnScroll", [])), "html", null, true);
        echo "
    });
";
    }

    // line 11
    public function block_iboMiscHandlers($context, array $blocks = [])
    {
        // line 12
        echo "    ";
        $this->displayParentBlock("iboMiscHandlers", $context, $blocks);
        echo "

    ";
        // line 14
        $this->displayBlock('iboKeyboardShortcutsHandlers', $context, $blocks);
        // line 63
        echo "
    ";
        // line 64
        $this->displayBlock('iboPanelHeaderRightActionsHandlers', $context, $blocks);
    }

    // line 14
    public function block_iboKeyboardShortcutsHandlers($context, array $blocks = [])
    {
        // line 15
        echo "        \$('#";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "').on('edit_object', function(){
            let oFavoriteButton = \$(this).find('#UIMenuModify');
            if(oFavoriteButton[0]){
                oFavoriteButton[0].click();
            }
            else{
                let oPopupItemButton = \$('[data-role=\"ibo-popover-menu\"]').find('[data-resource-id=\"UI:Menu:Modify\"]');
                if(oPopupItemButton[0]){
                    oPopupItemButton[0].click();
                }
            }
        });

        \$('#";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "').on('delete_object', function(){
            let oFavoriteButton = \$(this).find('#UIMenuDelete');
            if(oFavoriteButton[0]){
                oFavoriteButton[0].click();
            }
            else{
                let oPopupItemButton = \$('[data-role=\"ibo-popover-menu\"]').find('[data-resource-id=\"UI:Menu:Delete\"]');
                if(oPopupItemButton[0]){
                    oPopupItemButton[0].click();
                }
            }
        });

        \$('#";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "').on('new_object', function(){
            let oFavoriteButton = \$(this).find('#UIMenuNew');
            if(oFavoriteButton[0]){
                oFavoriteButton[0].click();
            }
            else{
                let oPopupItemButton = \$('[data-role=\"ibo-popover-menu\"]').find('[data-resource-id=\"UI:Menu:New\"]');
                if(oPopupItemButton[0]){
                    oPopupItemButton[0].click();
                }
            }
        });
        ";
        // line 53
        if ((($this->getAttribute(($context["oUIBlock"] ?? null), "GetObjectMode", [], "method") == twig_constant("cmdbAbstractObject::ENUM_DISPLAY_MODE_EDIT")) || ($this->getAttribute(($context["oUIBlock"] ?? null), "GetObjectMode", [], "method") == twig_constant("cmdbAbstractObject::ENUM_DISPLAY_MODE_CREATE")))) {
            // line 54
            echo "            \$('#";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
            echo "').on('save_object', function(){
                \$(this).find('button[type=\"submit\"][name=\"\"][value=\"\"]').click();
            });
        ";
        } elseif (($this->getAttribute(        // line 57
($context["oUIBlock"] ?? null), "GetObjectMode", [], "method") == twig_constant("cmdbAbstractObject::ENUM_DISPLAY_MODE_STIMULUS"))) {
            // line 58
            echo "            \$('#";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
            echo "').on('save_object', function(){
                \$(this).find('button[type=\"submit\"][name=\"submit\"][value=\"submit\"]').click();
            });
        ";
        }
        // line 62
        echo "    ";
    }

    // line 64
    public function block_iboPanelHeaderRightActionsHandlers($context, array $blocks = [])
    {
        // line 65
        echo "        // Keep URL's hash parameters when clicking on a link of the header
        \$('#";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oUIBlock"] ?? null), "GetId", [], "method"), "html", null, true);
        echo "').on('click', '[data-role=\"ibo-panel--header-right\"] a', function() {
            const aMatches = /#(.*)\$/.exec(window.location.href);
            if (aMatches != null) {
                currentHash = aMatches[1];
                if (/#(.*)\$/.test(this.href)) {
                    this.href = this.href.replace(/#(.*)\$/, '#'+currentHash);
                }
            }
        });
    ";
    }

    public function getTemplateName()
    {
        return "base/layouts/object/object-details/layout.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 66,  152 => 65,  149 => 64,  145 => 62,  137 => 58,  135 => 57,  128 => 54,  126 => 53,  111 => 41,  95 => 28,  78 => 15,  75 => 14,  71 => 64,  68 => 63,  66 => 14,  60 => 12,  57 => 11,  50 => 7,  45 => 6,  42 => 5,  32 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/object/object-details/layout.js.twig", "/var/www/html/itop/templates/base/layouts/object/object-details/layout.js.twig");
    }
}
