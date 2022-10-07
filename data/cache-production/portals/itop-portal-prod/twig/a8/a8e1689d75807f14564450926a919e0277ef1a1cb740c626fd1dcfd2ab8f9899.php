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

/* itop-portal-base/portal/templates/bricks/browse/mode_list.html.twig */
class __TwigTemplate_a07f0368deff55308e5180bffa638c27d27ad59334e6224f473760eabf942b28 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'bBrowseMainContent' => [$this, 'block_bBrowseMainContent'],
            'pPageLiveScripts' => [$this, 'block_pPageLiveScripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "itop-portal-base/portal/templates/bricks/browse/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("itop-portal-base/portal/templates/bricks/browse/layout.html.twig", "itop-portal-base/portal/templates/bricks/browse/mode_list.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_bBrowseMainContent($context, array $blocks = [])
    {
        // line 6
        echo "\t<table id=\"brick-content-table\" class=\"object-list table table-striped table-bordered responsive\" cellspacing=\"0\" width=\"100%\">
\t\t<tbody>
\t\t</tbody>
\t</table>
";
    }

    // line 12
    public function block_pPageLiveScripts($context, array $blocks = [])
    {
        // line 13
        echo "\t";
        $this->displayParentBlock("pPageLiveScripts", $context, $blocks);
        echo "
\t\t
\t<script type=\"text/javascript\">
\t\tvar sBrowseMode = '";
        // line 16
        echo twig_escape_filter($this->env, ($context["sBrowseMode"] ?? null), "html", null, true);
        echo "';
\t\tvar sDataLoading = '";
        // line 17
        echo twig_escape_filter($this->env, ($context["sDataLoading"] ?? null), "html", null, true);
        echo "';
\t\tvar oLevelsProperties = ";
        // line 18
        echo ($context["aLevelsProperties"] ?? null);
        echo ";
\t\tvar oRawDatas = ";
        // line 19
        echo ($context["aItems"] ?? null);
        echo ";
\t\tvar oTable;
\t\t// Used for ajax throttling
\t\tvar iSearchThrottle = 600;
\t\tvar oKeyTimeout;
\t\tvar aKeyTimeoutFilteredKeys = [9, 16, 17, 18, 19, 27, 33, 34, 35, 36, 37, 38, 39, 40]; // Tab, Shift, Ctrl, Alt, Pause, Esc, Page Up/Down, Home, End, Left/Up/Right/Down arrows
\t\t
\t\t// Show a loader inside the table
\t\tvar showTableLoader = function(oElem)
\t\t{
\t\t\toElem.children('tbody').html('<tr><td class=\"datatables_overlay\" colspan=\"100\">' + \$('#page_overlay').html() + '</td></tr>');
\t\t};
\t\t// Columns definition for the table from the oLevelsProperties
\t\tvar getColumnsDefinition = function()
\t\t{
\t\t\tvar aColumnsDefinition = [];
\t\t\t
\t\t\tfor(sKey in oLevelsProperties)
\t\t\t{
\t\t\t\t// Level main column
\t\t\t\taColumnsDefinition.push({
\t\t\t\t\t\"width\": \"auto\",
\t\t\t\t\t\"searchable\": true,
\t\t\t\t\t\"sortable\": true,
\t\t\t\t\t\"title\": oLevelsProperties[sKey].title,
\t\t\t\t\t\"defaultContent\": \"\",
\t\t\t\t\t\"type\": \"html\",
\t\t\t\t\t\"data\": oLevelsProperties[sKey].alias,
\t\t\t\t\t\"render\":
\t\t\t\t\t\t{_: function(data, type, row){
\t\t\t\t\t\t\tvar cellElem;
\t\t\t\t\t\t\tvar levelAltId = data.level_alias+'_'+data.id;
\t\t\t\t\t\t\tvar levelActions;
\t\t\t\t\t\t\tvar levelActionsKeys;
\t\t\t\t\t\t\tvar drilldownActionIndex;
\t\t\t\t\t\t\tvar levelPrimaryAction;
\t\t\t\t\t\t\tvar url = '';

\t\t\t\t\t\t\t// Preparing actions on the cell
\t\t\t\t\t\t\tlevelActions = oLevelsProperties[data.level_alias].actions;
\t\t\t\t\t\t\t// - Removing explicit (not default) drilldown action as it has no prupose on that browse mode
\t\t\t\t\t\t\tdelete levelActions['";
        // line 60
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\BrowseBrick::ENUM_ACTION_DRILLDOWN"), "html", null, true);
        echo "'];
\t\t\t\t\t\t\t// - Removing implciit (default) drilldown action
\t\t\t\t\t\t\tif( (levelActions['default'] !== undefined) && (levelActions['default'].type === '";
        // line 62
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\BrowseBrick::ENUM_ACTION_DRILLDOWN"), "html", null, true);
        echo "') )
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\tdelete levelActions['default'];
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tlevelActionsKeys = Object.keys(levelActions);

\t\t\t\t\t\t\t// Preparing the cell data
\t\t\t\t\t\t\tcellElem = (levelActionsKeys.length > 0) ? \$('<a></a>') : \$('<span></span>');
\t\t\t\t\t\t\tcellElem.attr('data-item-id', data.id).attr('data-level-alias', data.level_alias);

\t\t\t\t\t\t\t// Building metadata
\t\t\t\t\t\t\tfor(var sPropName in data.metadata)
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\tvar propValue = data.metadata[sPropName];
\t\t\t\t\t\t\t\tcellElem.attr('data-'+sPropName.replace('_', '-'), propValue);
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t// Building tooltip for the node
\t\t\t\t\t\t\t// We have to concatenate the HTML as we return the raw HTML of the cell. If we did a jQuery.insertAfter, the tooltip would not be returned.
\t\t\t\t\t\t\t// For the same reason, tooltip widget is created in \"drawCallback\" instead of here.
                            // N°4662 - Surround tooltip with div to ensure text retrival
\t\t\t\t\t\t\tif( (data.tooltip !== undefined) && (\$('<div>'+data.tooltip+'</div>').text() !== ''))
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\tcellElem.html( \$('<span></span>').attr('data-tooltip-content', data.tooltip).attr('data-tooltip-html-enabled', true).html(data.name).prop('outerHTML') );
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\telse
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\tcellElem.html(data.name);
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t// Building actions
\t\t\t\t\t\t\tif(levelActionsKeys.length > 0)
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t// - Primary action (click on item)
\t\t\t\t\t\t\t\tlevelPrimaryAction = levelActions[levelActionsKeys[0]];
\t\t\t\t\t\t\t\tswitch(levelPrimaryAction.type)
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\tcase '";
        // line 99
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\BrowseBrick::ENUM_ACTION_VIEW"), "html", null, true);
        echo "':
\t\t\t\t\t\t\t\t\t\turl = '";
        // line 100
        echo $this->getAttribute($this->getAttribute(($context["app"] ?? null), "url_generator", []), "generate", [0 => "p_object_view", 1 => ["sObjectClass" => "-objectClass-", "sObjectId" => "-objectId-"]], "method");
        echo "'.replace(/-objectClass-/, data.class).replace(/-objectId-/, data.id);
\t                                    break;
\t\t\t\t\t\t\t\t\tcase '";
        // line 102
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\BrowseBrick::ENUM_ACTION_EDIT"), "html", null, true);
        echo "':
\t\t\t\t\t\t\t\t\t\turl = '";
        // line 103
        echo $this->getAttribute($this->getAttribute(($context["app"] ?? null), "url_generator", []), "generate", [0 => "p_object_edit", 1 => ["sObjectClass" => "-objectClass-", "sObjectId" => "-objectId-"]], "method");
        echo "'.replace(/-objectClass-/, data.class).replace(/-objectId-/, data.id);
\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\tcase '";
        // line 105
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\BrowseBrick::ENUM_ACTION_CREATE_FROM_THIS"), "html", null, true);
        echo "':
\t\t\t\t\t\t\t\t\t\turl = levelPrimaryAction.url.replace(/-objectClass-/, data.class).replace(/-objectId-/, data.id);
\t\t\t\t\t\t\t\t\t\turl = CombodoGlobalToolbox.AddParameterToUrl(url, 'ar_token', data.action_rules_token[levelPrimaryAction.type]);
\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\tdefault:
\t\t\t\t\t\t\t\t\t    url = '#';
\t\t\t\t\t\t\t\t\t\t//console.log('Action \"'+levelPrimaryAction.type+'\" not implemented');
\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t}
\t                            SetActionUrl(cellElem, url);
\t                            SetActionOpeningTarget(cellElem, levelPrimaryAction.opening_target);

\t\t\t\t\t\t\t\t// - Secondary actions
\t\t\t\t\t\t\t\tif(levelActionsKeys.length > 1)
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t// Retrieving secondary action (Now we also display primary action)
\t\t\t\t\t\t\t\t\tvar actionsButtons = {};
\t\t\t\t\t\t\t\t\tfor(j = 0; j < levelActionsKeys.length; j++)
\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\tactionsButtons[levelActionsKeys[j]] = levelActions[levelActionsKeys[j]];
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t// Preparing secondary actions container
\t\t\t\t\t\t\t\t\tvar actionsElem = \$('<div></div>').addClass('pull-right group-actions');
\t\t\t\t\t\t\t\t\tcellElem.append(actionsElem);
\t\t\t\t\t\t\t\t\t// Preparing secondary actions
\t\t\t\t\t\t\t\t\tvar actionsSSTogglerElem = \$('<a class=\"glyphicon glyphicon-menu-hamburger\" data-toggle=\"collapse\" data-target=\"#item-actions-menu-'+levelAltId+'\"></a>');
\t\t\t\t\t\t\t\t\tvar actionsSSMenuElem = \$('<div id=\"item-actions-menu-'+levelAltId+'\" class=\"item-action-wrapper panel panel-default\"></div>');
\t\t\t\t\t\t\t\t\tvar actionsSSMenuContainerElem = \$('<div class=\"panel-body\"></div>');
\t\t\t\t\t\t\t\t\tactionsSSMenuElem.append(actionsSSMenuContainerElem);
\t\t\t\t\t\t\t\t\tactionsElem.append(actionsSSTogglerElem);
\t\t\t\t\t\t\t\t\tactionsElem.append(actionsSSMenuElem);

\t\t\t\t\t\t\t\t\t// Adding secondary actions
\t\t\t\t\t\t\t\t\tfor(j in actionsButtons)
\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\tvar action = actionsButtons[j];
\t\t\t\t\t\t\t\t\t\tvar actionElem = \$('<a></a>');
\t\t\t\t\t\t\t\t\t\tvar actionIconElem = \$('<span></span>').appendTo(actionElem);

\t\t\t\t\t\t\t\t\t\tswitch(action.type)
\t\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\tcase '";
        // line 147
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\BrowseBrick::ENUM_ACTION_VIEW"), "html", null, true);
        echo "':
\t\t\t\t\t\t\t\t\t\t\t\turl = '";
        // line 148
        echo $this->getAttribute($this->getAttribute(($context["app"] ?? null), "url_generator", []), "generate", [0 => "p_object_view", 1 => ["sObjectClass" => "-objectClass-", "sObjectId" => "-objectId-"]], "method");
        echo "'.replace(/-objectClass-/, data.class).replace(/-objectId-/, data.id);
\t\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\t\tcase '";
        // line 150
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\BrowseBrick::ENUM_ACTION_EDIT"), "html", null, true);
        echo "':
\t\t\t\t\t\t\t\t\t\t\t\turl = '";
        // line 151
        echo $this->getAttribute($this->getAttribute(($context["app"] ?? null), "url_generator", []), "generate", [0 => "p_object_edit", 1 => ["sObjectClass" => "-objectClass-", "sObjectId" => "-objectId-"]], "method");
        echo "'.replace(/-objectClass-/, data.class).replace(/-objectId-/, data.id);
\t\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\t\tcase '";
        // line 153
        echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\BrowseBrick::ENUM_ACTION_CREATE_FROM_THIS"), "html", null, true);
        echo "':
\t\t\t\t\t\t\t\t\t\t\t\turl = action.url.replace(/-objectClass-/, data.class).replace(/-objectId-/, data.id);
\t\t\t\t\t\t\t\t\t\t\t\turl = CombodoGlobalToolbox.AddParameterToUrl(url, 'ar_token', data.action_rules_token[action.type]);
\t\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\t\tdefault:
\t\t\t\t\t\t\t\t\t\t\t    url = '#';
\t\t\t\t\t\t\t\t\t\t\t\t//console.log('Action \"'+action.type+'\" not implemented for secondary action');
\t\t\t\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\t\t\t}
\t                                    SetActionUrl(actionElem, url);
\t                                    SetActionOpeningTarget(actionElem, action.opening_target);

\t\t\t\t\t\t\t\t\t\t// Adding title if present
\t\t\t\t\t\t\t\t\t\tif(action.title !== undefined)
\t\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\tactionElem.attr('title', action.title);
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t// Adding icon class if present
\t\t\t\t\t\t\t\t\t\tif(action.icon_class !== undefined)
\t\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\t\tactionIconElem.addClass(action.icon_class);
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\tactionElem.append(action.title);
\t\t\t\t\t\t\t\t\t\tactionsSSMenuContainerElem.append( \$('<p></p>').append(actionElem) );
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\treturn cellElem.prop('outerHTML');
\t\t\t\t\t\t},
\t\t\t\t\t\tfilter:function (data, type, row) {
                        \treturn \$.text(\$.parseHTML(data.name));
\t\t\t\t\t\t},
\t\t\t\t\t\tsort:function (data, type, row) {
\t\t\t\t\t\t\treturn \$.text(\$.parseHTML(data.name));
\t\t\t\t\t\t},
\t\t\t\t\t},
\t\t\t\t});
\t\t\t\t
\t\t\t\t// Level's fields columns
\t\t\t\tif(oLevelsProperties[sKey].fields !== undefined)
\t\t\t\t{
\t\t\t\t\tfor(var i in oLevelsProperties[sKey].fields)
\t\t\t\t\t{
\t\t\t\t\t\taColumnsDefinition.push({
\t\t\t\t\t\t\t\"width\": \"auto\",
\t\t\t\t\t\t\t\"searchable\": true,
\t\t\t\t\t\t\t\"sortable\": true,
\t\t\t\t\t\t\t\"visible\": !oLevelsProperties[sKey].fields[i].hidden,
\t\t\t\t\t\t\t\"title\": oLevelsProperties[sKey].fields[i].label,
\t\t\t\t\t\t\t\"defaultContent\": \"\",
\t\t\t\t\t\t\t\"type\": \"html\",
\t\t\t\t\t\t\t\"data\": oLevelsProperties[sKey].alias+\".fields.\"+oLevelsProperties[sKey].fields[i].code,
\t\t\t\t\t\t\t\"render\":
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t_: function (data, type, row) {
\t\t\t\t\t\t\t\t\t\tvar cellElem = \$('<span></span>');

\t\t\t\t\t\t\t\t\t\t// Building value and metadata
\t\t\t\t\t\t\t\t\t\tfor (var sPropName in data) {
\t\t\t\t\t\t\t\t\t\t\tvar sPropValue = data[sPropName];
\t\t\t\t\t\t\t\t\t\t\tif (sPropName === 'value_html') {
\t\t\t\t\t\t\t\t\t\t\t\tcellElem.html(sPropValue);
\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\tcellElem.attr('data-' + sPropName.replace('_', '-'), sPropValue);
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\treturn cellElem.prop('outerHTML');
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\tsort: function (data, type, row) {
\t\t\t\t\t\t\t\t\t\treturn \$.text(\$.parseHTML(data['value_html']));
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\tfilter: function (data, type, row) {
                        \t\t\t\treturn \$.text(\$.parseHTML(data['value_html']));
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\t
\t\t\treturn aColumnsDefinition;
\t\t};
\t\t
\t\t\$(document).ready(function()
\t\t{
\t\t\tshowTableLoader(\$('#brick-content-table'));
\t\t\t
\t\t\t// Note : Those options should be externalized in an library so we can use them on any DataTables for the portal.
\t\t\t// We would just have to override / complete the necessary elements
\t\t\toTable = \$('#brick-content-table').DataTable({
\t\t\t\t\"language\": {
\t\t\t\t\t\"processing\":\t  \"";
        // line 246
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Processing"]), "html", null, true);
        echo "\",
\t\t\t\t\t\"search\":\t\t  \"";
        // line 247
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Search"]), "html", null, true);
        echo "\",
\t\t\t\t\t\"lengthMenu\":\t  \"";
        // line 248
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:LengthMenu"]), "html", null, true);
        echo "\",
\t\t\t\t\t\"zeroRecords\":\t \"";
        // line 249
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:ZeroRecords"]), "html", null, true);
        echo "\",
\t\t\t\t\t\"info\":\t\t\t\"";
        // line 250
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Info"]), "html", null, true);
        echo "\",
\t\t\t\t\t\"infoEmpty\":\t   \"";
        // line 251
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:InfoEmpty"]), "html", null, true);
        echo "\",
\t\t\t\t\t\"infoFiltered\":\t\"(";
        // line 252
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:InfoFiltered"]), "html", null, true);
        echo ")\",
\t\t\t\t\t\"emptyTable\":\t  \"";
        // line 253
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:EmptyTable"]), "html", null, true);
        echo "\",
\t\t\t\t\t\"paginate\": {
\t\t\t\t\t\t\"first\":\t  \"";
        // line 255
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Paginate:First"]), "html", null, true);
        echo "\",
\t\t\t\t\t\t\"previous\":   \"";
        // line 256
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Paginate:Previous"]), "html", null, true);
        echo "\",
\t\t\t\t\t\t\"next\":\t   \"";
        // line 257
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Paginate:Next"]), "html", null, true);
        echo "\",
\t\t\t\t\t\t\"last\":\t   \"";
        // line 258
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Paginate:Last"]), "html", null, true);
        echo "\"
\t\t\t\t\t},
\t\t\t\t\t\"aria\": {
\t\t\t\t\t\t\"sortAscending\":  \": ";
        // line 261
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Sort:Ascending"]), "html", null, true);
        echo "\",
\t\t\t\t\t\t\"sortDescending\": \": ";
        // line 262
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:Sort:Descending"]), "html", null, true);
        echo "\"
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\t\"lengthMenu\": [[10, 20, 50, -1], [10, 20, 50, \"";
        // line 265
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["Portal:Datatables:Language:DisplayLength:All"]), "html", null, true);
        echo "\"]],
\t\t\t\t\"displayLength\": ";
        // line 266
        echo twig_escape_filter($this->env, ($context["iDefaultLengthList"] ?? null), "html", null, true);
        echo ",
\t\t\t\t\"dom\": '<\"row\"<\"col-sm-6\"l><\"col-sm-6\"<f><\"visible-xs\"p>>>t<\"row\"<\"col-sm-6\"i><\"col-sm-6\"p>>',
\t\t\t\t\"columns\": getColumnsDefinition(),
\t\t\t\t\"order\": [],
\t\t\t\t\"drawCallback\": function(settings){
                   // Hiding pagination if only one page
\t\t\t\t\tif(\$(this).closest('.dataTables_wrapper').find('.dataTables_paginate:last .paginate_button:not(.previous):not(.next)').length < 2)
\t\t\t\t\t{
\t\t\t\t\t\t\$(this).closest('.dataTables_wrapper').find('.dataTables_paginate, .dataTables_info').hide();
\t\t\t\t\t}
\t\t\t\t\telse
\t\t\t\t\t{
\t\t\t\t\t\t\$(this).closest('.dataTables_wrapper').find('.dataTables_paginate, .dataTables_info').show();
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\t";
        // line 281
        if ((($context["sDataLoading"] ?? null) == twig_constant("Combodo\\iTop\\Portal\\Brick\\AbstractBrick::ENUM_DATA_LOADING_FULL"))) {
            // line 282
            echo "\t\t\t\t\"data\": oRawDatas,
\t\t\t\t";
        } else {
            // line 284
            echo "\t\t\t\t\"processing\": true,
\t\t\t\t\"serverSide\": true,
\t\t\t\t\"ajax\": {
\t\t\t\t\t\"url\": \"";
            // line 287
            echo $this->getAttribute($this->getAttribute(($context["app"] ?? null), "url_generator", []), "generate", [0 => "p_browse_brick_mode", 1 => ["sBrickId" => ($context["sBrickId"] ?? null), "sBrowseMode" => twig_constant("Combodo\\iTop\\Portal\\Brick\\BrowseBrick::ENUM_BROWSE_MODE_LIST")]], "method");
            echo "\",
\t\t\t\t\t\"data\": function (d) {
\t\t\t\t\t\td.iPageNumber = Math.floor(d.start / d.length)+1;
\t\t\t\t\t\td.iListLength = d.length;
\t\t\t\t\t\td.sDataLoading = \"";
            // line 291
            echo twig_escape_filter($this->env, twig_constant("Combodo\\iTop\\Portal\\Brick\\AbstractBrick::ENUM_DATA_LOADING_LAZY"), "html", null, true);
            echo "\";

\t\t\t\t\t\t// Prepare sort params (formatting them for direct use by DBObjectSet)
\t\t\t\t\t\td.aSortParams = {};
\t\t\t\t\t\tfor (var iSortIdx in d.order) {
\t\t\t\t\t\t\t/* oSortedColumnData {column: index, dir: 'asc'|'desc'} */
\t\t\t\t\t\t\tvar oSortedColumnData = d.order[iSortIdx];
\t\t\t\t\t\t\t/* sSortedColumnId (eg. 'L-1-1' for level's main column, or 'L-1-1.fields.ATTCODE' for other columns) */
\t\t\t\t\t\t\tvar sSortedColumnId = d.columns[oSortedColumnData.column].data;

\t\t\t\t\t\t\t// Make proper attribute alias for OQL from column ID
\t\t\t\t\t\t\t// - Main level column (we have to retrieve the attcode from the level properties)
\t\t\t\t\t\t\tif (sSortedColumnId.indexOf('.fields') < 0) {
\t\t\t\t\t\t\t\tvar sSortedAttributeAlias = sSortedColumnId+'.'+oLevelsProperties[sSortedColumnId].name_att;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t// - Optional fields (attcode is already in the column ID, we just have to clean it)
\t\t\t\t\t\t\telse {
\t\t\t\t\t\t\t\tvar sSortedAttributeAlias = sSortedColumnId.replace('.fields', '');
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\td.aSortParams[sSortedAttributeAlias] = (oSortedColumnData.dir === 'asc');
\t\t\t\t\t\t}


\t\t\t\t\t\tif (d.search.value)
\t\t\t\t\t\t{
\t\t\t\t\t\t\td.sSearchValue = d.search.value;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\t";
        }
        // line 322
        echo "\t\t\t\t\"search\": {
\t\t\t\t\t\"caseInsensitive\": true,
\t\t\t\t\t";
        // line 324
        if ( !(null === ($context["sSearchValue"] ?? null))) {
            // line 325
            echo "\t\t\t\t\t\"search\": \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["sSearchValue"] ?? null), "js"), "html", null, true);
            echo "\",
\t\t\t\t\t";
        }
        // line 327
        echo "\t\t\t\t},
\t\t\t});
\t\t\t// Overrides filter input to apply throttle. Otherwise, an ajax request is send each time a key is pressed
\t\t\t// Also removes accents from search string
\t\t\t// Note : The '.off()' call is to unbind event from DataTables that where triggered before we could intercept anything
\t\t\t\$('#brick-content-table_filter input').off().on('keyup', function(event){
\t\t\t\tvar me = this;
\t\t\t\t
\t\t\t\t// We trigger the search only if those keys where not pressed
\t\t\t\tif(aKeyTimeoutFilteredKeys.indexOf(event.which) < 0)
\t\t\t\t{
\t\t\t\t\tclearTimeout(oKeyTimeout);
\t\t\t\t\toKeyTimeout = setTimeout(function() {
\t\t\t\t\t\toTable.search(me.value.latinise()).draw();
\t\t\t\t\t}, iSearchThrottle);
\t\t\t\t}
\t\t\t});
\t\t\t// Shows a loader in the table when processing
\t\t\t\$('#brick-content-table').on('processing.dt', function(event, settings, processing){
\t\t\t\tif(processing === true)
\t\t\t\t{
\t\t\t\t\tshowTableLoader(\$(this));
\t\t\t\t}
\t\t\t});
\t\t\t
\t\t\t// Auto collapse item actions popup
\t\t\t\$('body').on('click', function(){
\t\t\t\t\$('table .item-action-wrapper.collapse.in').collapse('hide');
\t\t\t});
\t\t});
\t</script>
";
    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/templates/bricks/browse/mode_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  486 => 327,  480 => 325,  478 => 324,  474 => 322,  440 => 291,  433 => 287,  428 => 284,  424 => 282,  422 => 281,  404 => 266,  400 => 265,  394 => 262,  390 => 261,  384 => 258,  380 => 257,  376 => 256,  372 => 255,  367 => 253,  363 => 252,  359 => 251,  355 => 250,  351 => 249,  347 => 248,  343 => 247,  339 => 246,  243 => 153,  238 => 151,  234 => 150,  229 => 148,  225 => 147,  180 => 105,  175 => 103,  171 => 102,  166 => 100,  162 => 99,  122 => 62,  117 => 60,  73 => 19,  69 => 18,  65 => 17,  61 => 16,  54 => 13,  51 => 12,  43 => 6,  40 => 5,  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "itop-portal-base/portal/templates/bricks/browse/mode_list.html.twig", "/var/www/html/itop/env-production/itop-portal-base/portal/templates/bricks/browse/mode_list.html.twig");
    }
}
