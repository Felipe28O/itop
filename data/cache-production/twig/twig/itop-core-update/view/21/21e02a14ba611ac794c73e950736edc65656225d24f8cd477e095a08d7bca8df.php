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

/* SelectUpdateFile.html.twig */
class __TwigTemplate_54d28ce008fa2851dba9376f4332622610633f2f2a52e6e874f11a986b726a57 extends \Twig\Template
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
";
        // line 5
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["aContainerClasses" => [0 => "ibo-update-core"]];
        $sId = $aParams['sId'] ?? NULL;
        $aContainerClasses = $aParams['aContainerClasses'] ?? array (
);
        $oUIContentBlock_634f12b81e629805611265 = Combodo\iTop\Application\UI\Base\Layout\UIContentBlockUIBlockFactory::MakeStandard(        $sId        ,         $aContainerClasses        );
        $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oUIContentBlock_634f12b81e629805611265, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oUIContentBlock_634f12b81e629805611265, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oUIContentBlock_634f12b81e629805611265);
        array_push($context['UIBlockParent'], $oUIContentBlock_634f12b81e629805611265);
        ob_start();
        // line 6
        echo "
    ";
        // line 7
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sTitle" => call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["iTopUpdate:UI:PageTitle"])];
        if (!isset($aParams['sTitle'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sTitle for UITitle at line 7');
        }
        $sTitle = $aParams['sTitle'];
        $sId = $aParams['sId'] ?? NULL;
        $oTitle_634f12b81e6f6121303184 = Combodo\iTop\Application\UI\Base\Component\Title\TitleUIBlockFactory::MakeForPage(        $sTitle        ,         $sId        );
        $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oTitle_634f12b81e6f6121303184, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oTitle_634f12b81e6f6121303184, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oTitle_634f12b81e6f6121303184);
        array_push($context['UIBlockParent'], $oTitle_634f12b81e6f6121303184);
        ob_start();
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 8
        echo "
    <div class=\"ibo-v-spacer\">&nbsp;</div>

    ";
        // line 11
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["aContainerClasses" => [0 => "display_block", 1 => "display-files"]];
        $sId = $aParams['sId'] ?? NULL;
        $aContainerClasses = $aParams['aContainerClasses'] ?? array (
);
        $oUIContentBlock_634f12b81e7cb829251495 = Combodo\iTop\Application\UI\Base\Layout\UIContentBlockUIBlockFactory::MakeStandard(        $sId        ,         $aContainerClasses        );
        $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oUIContentBlock_634f12b81e7cb829251495, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oUIContentBlock_634f12b81e7cb829251495, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oUIContentBlock_634f12b81e7cb829251495);
        array_push($context['UIBlockParent'], $oUIContentBlock_634f12b81e7cb829251495);
        ob_start();
        // line 12
        echo "        ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sLegend" => call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["iTopUpdate:UI:Status"])];
        if (!isset($aParams['sLegend'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sLegend for UIFieldSet at line 12');
        }
        $sLegend = $aParams['sLegend'];
        $sId = $aParams['sId'] ?? NULL;
        $oFieldSet_634f12b81e84b914039440 = Combodo\iTop\Application\UI\Base\Component\FieldSet\FieldSetUIBlockFactory::MakeStandard(        $sLegend        ,         $sId        );
        $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oFieldSet_634f12b81e84b914039440, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oFieldSet_634f12b81e84b914039440, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oFieldSet_634f12b81e84b914039440);
        array_push($context['UIBlockParent'], $oFieldSet_634f12b81e84b914039440);
        ob_start();
        // line 13
        echo "            ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sId" => "header-requirements", "IsCollapsible" => false, "IsClosable" => false];
        $sTitle = $aParams['sTitle'] ?? '';
        $sContent = $aParams['sContent'] ?? '';
        $sId = $aParams['sId'] ?? NULL;
        $oAlert_634f12b81e8db219216536 = Combodo\iTop\Application\UI\Base\Component\Alert\AlertUIBlockFactory::MakeForInformation(        $sTitle        ,         $sContent        ,         $sId        );
        $aSetters = ['Title','Content','Color','IsClosable','IsCollapsible','OpenedByDefault','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oAlert_634f12b81e8db219216536, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oAlert_634f12b81e8db219216536, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oAlert_634f12b81e8db219216536);
        array_push($context['UIBlockParent'], $oAlert_634f12b81e8db219216536);
        ob_start();
        // line 14
        echo "                ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["aContainerClasses" => [0 => "ibo-update-core-header-requirements"], "sId" => "can-core-update"];
        $sId = $aParams['sId'] ?? NULL;
        $aContainerClasses = $aParams['aContainerClasses'] ?? array (
);
        $oUIContentBlock_634f12b81e966467062012 = Combodo\iTop\Application\UI\Base\Layout\UIContentBlockUIBlockFactory::MakeStandard(        $sId        ,         $aContainerClasses        );
        $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oUIContentBlock_634f12b81e966467062012, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oUIContentBlock_634f12b81e966467062012, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oUIContentBlock_634f12b81e966467062012);
        array_push($context['UIBlockParent'], $oUIContentBlock_634f12b81e966467062012);
        ob_start();
        // line 15
        echo "                    ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["iTopUpdate:UI:CanCoreUpdate:Loading"]), "html", null, true);
        echo "
                    ";
        // line 16
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = [];
        $sId = $aParams['sId'] ?? NULL;
        $oSpinner_634f12b81ea1e692183267 = Combodo\iTop\Application\UI\Base\Component\Spinner\SpinnerUIBlockFactory::MakeStandard(        $sId        );
        $aSetters = ['CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oSpinner_634f12b81ea1e692183267, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oSpinner_634f12b81ea1e692183267, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oSpinner_634f12b81ea1e692183267);
        ob_start();
        // line 17
        echo "                ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 18
        echo "                ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sId" => "header-requirements-details", "sTitle" => call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["UI:Details+"]), "IsCollapsible" => true, "IsClosable" => false, "AddCSSClass" => "ibo-is-hidden"];
        if (!isset($aParams['sTitle'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sTitle for UICollapsibleSection at line 18');
        }
        $sTitle = $aParams['sTitle'];
        $sId = $aParams['sId'] ?? NULL;
        $oCollapsibleSection_634f12b81eae5711362285 = Combodo\iTop\Application\UI\Base\Component\CollapsibleSection\CollapsibleSectionUIBlockFactory::MakeStandard(        $sTitle        ,         $sId        );
        $aSetters = ['OpenedByDefault','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oCollapsibleSection_634f12b81eae5711362285, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oCollapsibleSection_634f12b81eae5711362285, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oCollapsibleSection_634f12b81eae5711362285);
        array_push($context['UIBlockParent'], $oCollapsibleSection_634f12b81eae5711362285);
        ob_start();
        // line 19
        echo "                    ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["aContainerClasses" => [0 => "ibo-update-core-header-requirements"], "sId" => "can-core-update-details"];
        $sId = $aParams['sId'] ?? NULL;
        $aContainerClasses = $aParams['aContainerClasses'] ?? array (
);
        $oUIContentBlock_634f12b81eb92419071640 = Combodo\iTop\Application\UI\Base\Layout\UIContentBlockUIBlockFactory::MakeStandard(        $sId        ,         $aContainerClasses        );
        $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oUIContentBlock_634f12b81eb92419071640, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oUIContentBlock_634f12b81eb92419071640, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oUIContentBlock_634f12b81eb92419071640);
        array_push($context['UIBlockParent'], $oUIContentBlock_634f12b81eb92419071640);
        ob_start();
        // line 20
        echo "                    ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 21
        echo "                ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 22
        echo "            ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 23
        echo "
            ";
        // line 24
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sLabel" => call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["iTopUpdate:UI:CurrentVersion"])];
        $sLabel = $aParams['sLabel'] ?? '';
        $sLayout = $aParams['sLayout'] ?? 'small';
        $sId = $aParams['sId'] ?? NULL;
        $oField_634f12b81ec42703073599 = Combodo\iTop\Application\UI\Base\Component\Field\FieldUIBlockFactory::MakeStandard(        $sLabel        ,         $sLayout        ,         $sId        );
        $aSetters = ['Layout','AttCode','AttType','AttLabel','IsReadOnly','IsMandatory','MustChange','MustPrompt','IsSlave','ValueRaw','Label','Value','Comments','ValueId','InputId','InputType','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oField_634f12b81ec42703073599, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oField_634f12b81ec42703073599, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oField_634f12b81ec42703073599);
        array_push($context['UIBlockParent'], $oField_634f12b81ec42703073599);
        ob_start();
        // line 25
        echo "                ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_format')->getCallable(), ["UI:iTopVersion:Long", twig_constant("ITOP_APPLICATION"), twig_constant("ITOP_VERSION"), twig_constant("ITOP_REVISION"), twig_constant("ITOP_BUILD_DATE")]), "html", null, true);
        echo "
            ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 27
        echo "
            ";
        // line 28
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sLabel" => call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["iTopUpdate:UI:DiskFreeSpace"])];
        $sLabel = $aParams['sLabel'] ?? '';
        $sLayout = $aParams['sLayout'] ?? 'small';
        $sId = $aParams['sId'] ?? NULL;
        $oField_634f12b81ee90546135921 = Combodo\iTop\Application\UI\Base\Component\Field\FieldUIBlockFactory::MakeStandard(        $sLabel        ,         $sLayout        ,         $sId        );
        $aSetters = ['Layout','AttCode','AttType','AttLabel','IsReadOnly','IsMandatory','MustChange','MustPrompt','IsSlave','ValueRaw','Label','Value','Comments','ValueId','InputId','InputType','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oField_634f12b81ee90546135921, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oField_634f12b81ee90546135921, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oField_634f12b81ee90546135921);
        array_push($context['UIBlockParent'], $oField_634f12b81ee90546135921);
        ob_start();
        // line 29
        echo "                ";
        echo twig_escape_filter($this->env, ($context["sDiskFreeSpace"] ?? null), "html", null, true);
        echo "
            ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 31
        echo "
            ";
        // line 32
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sLabel" => call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["iTopUpdate:UI:ItopDiskSpace"]), "ValueId" => "itop-disk-space"];
        $sLabel = $aParams['sLabel'] ?? '';
        $sLayout = $aParams['sLayout'] ?? 'small';
        $sId = $aParams['sId'] ?? NULL;
        $oField_634f12b81efbe102765403 = Combodo\iTop\Application\UI\Base\Component\Field\FieldUIBlockFactory::MakeStandard(        $sLabel        ,         $sLayout        ,         $sId        );
        $aSetters = ['Layout','AttCode','AttType','AttLabel','IsReadOnly','IsMandatory','MustChange','MustPrompt','IsSlave','ValueRaw','Label','Value','Comments','ValueId','InputId','InputType','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oField_634f12b81efbe102765403, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oField_634f12b81efbe102765403, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oField_634f12b81efbe102765403);
        array_push($context['UIBlockParent'], $oField_634f12b81efbe102765403);
        ob_start();
        // line 33
        echo "                ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = [];
        $sId = $aParams['sId'] ?? NULL;
        $oSpinner_634f12b81f091665229337 = Combodo\iTop\Application\UI\Base\Component\Spinner\SpinnerUIBlockFactory::MakeStandard(        $sId        );
        $aSetters = ['CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oSpinner_634f12b81f091665229337, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oSpinner_634f12b81f091665229337, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oSpinner_634f12b81f091665229337);
        ob_start();
        // line 34
        echo "            ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 35
        echo "
            ";
        // line 36
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sLabel" => call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["iTopUpdate:UI:DBDiskSpace"]), "ValueId" => "db-disk-space"];
        $sLabel = $aParams['sLabel'] ?? '';
        $sLayout = $aParams['sLayout'] ?? 'small';
        $sId = $aParams['sId'] ?? NULL;
        $oField_634f12b81f12a762716397 = Combodo\iTop\Application\UI\Base\Component\Field\FieldUIBlockFactory::MakeStandard(        $sLabel        ,         $sLayout        ,         $sId        );
        $aSetters = ['Layout','AttCode','AttType','AttLabel','IsReadOnly','IsMandatory','MustChange','MustPrompt','IsSlave','ValueRaw','Label','Value','Comments','ValueId','InputId','InputType','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oField_634f12b81f12a762716397, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oField_634f12b81f12a762716397, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oField_634f12b81f12a762716397);
        array_push($context['UIBlockParent'], $oField_634f12b81f12a762716397);
        ob_start();
        // line 37
        echo "                ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = [];
        $sId = $aParams['sId'] ?? NULL;
        $oSpinner_634f12b81f1d1528284144 = Combodo\iTop\Application\UI\Base\Component\Spinner\SpinnerUIBlockFactory::MakeStandard(        $sId        );
        $aSetters = ['CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oSpinner_634f12b81f1d1528284144, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oSpinner_634f12b81f1d1528284144, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oSpinner_634f12b81f1d1528284144);
        ob_start();
        // line 38
        echo "            ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 39
        echo "
            ";
        // line 40
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sLabel" => call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["iTopUpdate:UI:FileUploadMaxSize"])];
        $sLabel = $aParams['sLabel'] ?? '';
        $sLayout = $aParams['sLayout'] ?? 'small';
        $sId = $aParams['sId'] ?? NULL;
        $oField_634f12b81f245516520326 = Combodo\iTop\Application\UI\Base\Component\Field\FieldUIBlockFactory::MakeStandard(        $sLabel        ,         $sLayout        ,         $sId        );
        $aSetters = ['Layout','AttCode','AttType','AttLabel','IsReadOnly','IsMandatory','MustChange','MustPrompt','IsSlave','ValueRaw','Label','Value','Comments','ValueId','InputId','InputType','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oField_634f12b81f245516520326, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oField_634f12b81f245516520326, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oField_634f12b81f245516520326);
        array_push($context['UIBlockParent'], $oField_634f12b81f245516520326);
        ob_start();
        // line 41
        echo "                ";
        echo twig_escape_filter($this->env, ($context["sFileUploadMaxSize"] ?? null), "html", null, true);
        echo "
            ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 43
        echo "
        ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 45
        echo "
        ";
        // line 46
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sLegend" => call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["iTopUpdate:UI:SelectUpdateFile"]), "sId" => "form-update-outer"];
        if (!isset($aParams['sLegend'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sLegend for UIFieldSet at line 46');
        }
        $sLegend = $aParams['sLegend'];
        $sId = $aParams['sId'] ?? NULL;
        $oFieldSet_634f12b81f335177348150 = Combodo\iTop\Application\UI\Base\Component\FieldSet\FieldSetUIBlockFactory::MakeStandard(        $sLegend        ,         $sId        );
        $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oFieldSet_634f12b81f335177348150, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oFieldSet_634f12b81f335177348150, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oFieldSet_634f12b81f335177348150);
        array_push($context['UIBlockParent'], $oFieldSet_634f12b81f335177348150);
        ob_start();
        // line 47
        echo "            ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = [];
        $sId = $aParams['sId'] ?? NULL;
        $oForm_634f12b81f3e4099251203 = Combodo\iTop\Application\UI\Base\Component\Form\FormUIBlockFactory::MakeStandard(        $sId        );
        $aSetters = ['OnSubmitJsCode','Action','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oForm_634f12b81f3e4099251203, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oForm_634f12b81f3e4099251203, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oForm_634f12b81f3e4099251203);
        array_push($context['UIBlockParent'], $oForm_634f12b81f3e4099251203);
        ob_start();
        // line 48
        echo "                ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sName" => "operation", "sValue" => "ConfirmUpdate"];
        if (!isset($aParams['sName'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sName for UIInput at line 48');
        }
        $sName = $aParams['sName'];
        if (!isset($aParams['sValue'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sValue for UIInput at line 48');
        }
        $sValue = $aParams['sValue'];
        $sId = $aParams['sId'] ?? NULL;
        $oInput_634f12b81f46a048096685 = Combodo\iTop\Application\UI\Base\Component\Input\InputUIBlockFactory::MakeForHidden(        $sName        ,         $sValue        ,         $sId        );
        $aSetters = ['Type','IsChecked','IsDisabled','IsReadonly','Label','Name','Value','Placeholder','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oInput_634f12b81f46a048096685, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oInput_634f12b81f46a048096685, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oInput_634f12b81f46a048096685);
        ob_start();
        // line 49
        echo "                ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sName" => "transaction_id", "sValue" => ($context["sTransactionId"] ?? null)];
        if (!isset($aParams['sName'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sName for UIInput at line 49');
        }
        $sName = $aParams['sName'];
        if (!isset($aParams['sValue'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sValue for UIInput at line 49');
        }
        $sValue = $aParams['sValue'];
        $sId = $aParams['sId'] ?? NULL;
        $oInput_634f12b81f4fb707386986 = Combodo\iTop\Application\UI\Base\Component\Input\InputUIBlockFactory::MakeForHidden(        $sName        ,         $sValue        ,         $sId        );
        $aSetters = ['Type','IsChecked','IsDisabled','IsReadonly','Label','Name','Value','Placeholder','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oInput_634f12b81f4fb707386986, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oInput_634f12b81f4fb707386986, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oInput_634f12b81f4fb707386986);
        ob_start();
        // line 50
        echo "
                ";
        // line 51
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sId" => "header-file-size", "IsHidden" => true];
        $sTitle = $aParams['sTitle'] ?? '';
        $sContent = $aParams['sContent'] ?? '';
        $sId = $aParams['sId'] ?? NULL;
        $oAlert_634f12b81f585913415059 = Combodo\iTop\Application\UI\Base\Component\Alert\AlertUIBlockFactory::MakeForFailure(        $sTitle        ,         $sContent        ,         $sId        );
        $aSetters = ['Title','Content','Color','IsClosable','IsCollapsible','OpenedByDefault','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oAlert_634f12b81f585913415059, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oAlert_634f12b81f585913415059, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oAlert_634f12b81f585913415059);
        array_push($context['UIBlockParent'], $oAlert_634f12b81f585913415059);
        ob_start();
        // line 52
        echo "                    ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["aContainerClasses" => [0 => "ibo-file-size-error"]];
        $sId = $aParams['sId'] ?? NULL;
        $aContainerClasses = $aParams['aContainerClasses'] ?? array (
);
        $oUIContentBlock_634f12b81f603332007927 = Combodo\iTop\Application\UI\Base\Layout\UIContentBlockUIBlockFactory::MakeStandard(        $sId        ,         $aContainerClasses        );
        $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oUIContentBlock_634f12b81f603332007927, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oUIContentBlock_634f12b81f603332007927, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oUIContentBlock_634f12b81f603332007927);
        array_push($context['UIBlockParent'], $oUIContentBlock_634f12b81f603332007927);
        ob_start();
        // line 53
        echo "                        ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["iTopUpdate:Error:FileUploadMaxSizeTooSmall"]), "html", null, true);
        echo "
                    ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 55
        echo "                    ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["aContainerClasses" => [0 => "ibo-file-size-error"]];
        $sId = $aParams['sId'] ?? NULL;
        $aContainerClasses = $aParams['aContainerClasses'] ?? array (
);
        $oUIContentBlock_634f12b81f6c4738074765 = Combodo\iTop\Application\UI\Base\Layout\UIContentBlockUIBlockFactory::MakeStandard(        $sId        ,         $aContainerClasses        );
        $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oUIContentBlock_634f12b81f6c4738074765, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oUIContentBlock_634f12b81f6c4738074765, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oUIContentBlock_634f12b81f6c4738074765);
        array_push($context['UIBlockParent'], $oUIContentBlock_634f12b81f6c4738074765);
        ob_start();
        // line 56
        echo "                        ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_format')->getCallable(), ["iTopUpdate:UI:PostMaxSize", ($context["sPostMaxSize"] ?? null)]), "html", null, true);
        echo "
                    ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 58
        echo "                    ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["aContainerClasses" => [0 => "ibo-file-size-error"]];
        $sId = $aParams['sId'] ?? NULL;
        $aContainerClasses = $aParams['aContainerClasses'] ?? array (
);
        $oUIContentBlock_634f12b81f780212150685 = Combodo\iTop\Application\UI\Base\Layout\UIContentBlockUIBlockFactory::MakeStandard(        $sId        ,         $aContainerClasses        );
        $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oUIContentBlock_634f12b81f780212150685, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oUIContentBlock_634f12b81f780212150685, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oUIContentBlock_634f12b81f780212150685);
        array_push($context['UIBlockParent'], $oUIContentBlock_634f12b81f780212150685);
        ob_start();
        // line 59
        echo "                        ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_format')->getCallable(), ["iTopUpdate:UI:UploadMaxFileSize", ($context["sUploadMaxSize"] ?? null)]), "html", null, true);
        echo "
                    ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 61
        echo "                ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 62
        echo "
            ";
        // line 63
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sId" => "check-in-progress", "IsHidden" => false];
        $sTitle = $aParams['sTitle'] ?? '';
        $sContent = $aParams['sContent'] ?? '';
        $sId = $aParams['sId'] ?? NULL;
        $oAlert_634f12b81f849461739028 = Combodo\iTop\Application\UI\Base\Component\Alert\AlertUIBlockFactory::MakeForInformation(        $sTitle        ,         $sContent        ,         $sId        );
        $aSetters = ['Title','Content','Color','IsClosable','IsCollapsible','OpenedByDefault','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oAlert_634f12b81f849461739028, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oAlert_634f12b81f849461739028, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oAlert_634f12b81f849461739028);
        array_push($context['UIBlockParent'], $oAlert_634f12b81f849461739028);
        ob_start();
        // line 64
        echo "                ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["iTopUpdate:UI:CheckInProgress"]), "html", null, true);
        echo "
            ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 66
        echo "
                ";
        // line 67
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sName" => "file", "sId" => "file", "AddCSSClass" => "ibo-is-hidden"];
        if (!isset($aParams['sName'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sName for UIFileSelect at line 67');
        }
        $sName = $aParams['sName'];
        $sId = $aParams['sId'] ?? NULL;
        $oFileSelect_634f12b81f90d331107899 = Combodo\iTop\Application\UI\Base\Component\Input\FileSelect\FileSelectUIBlockFactory::MakeStandard(        $sName        ,         $sId        );
        $aSetters = ['FileName','ButtonText','ShowFilename','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oFileSelect_634f12b81f90d331107899, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oFileSelect_634f12b81f90d331107899, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oFileSelect_634f12b81f90d331107899);
        ob_start();
        // line 68
        echo "
                ";
        // line 69
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sId" => "dobackup-warning", "IsHidden" => true];
        $sTitle = $aParams['sTitle'] ?? '';
        $sContent = $aParams['sContent'] ?? '';
        $sId = $aParams['sId'] ?? NULL;
        $oAlert_634f12b81f990537141736 = Combodo\iTop\Application\UI\Base\Component\Alert\AlertUIBlockFactory::MakeForWarning(        $sTitle        ,         $sContent        ,         $sId        );
        $aSetters = ['Title','Content','Color','IsClosable','IsCollapsible','OpenedByDefault','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oAlert_634f12b81f990537141736, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oAlert_634f12b81f990537141736, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oAlert_634f12b81f990537141736);
        array_push($context['UIBlockParent'], $oAlert_634f12b81f990537141736);
        ob_start();
        // line 70
        echo "                    ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["iTopUpdate:UI:DoBackup:Warning"]), "html", null, true);
        echo "
                ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 72
        echo "
                ";
        // line 73
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["aContainerClasses" => [0 => "ibo-font-ral-nor-150"]];
        $sId = $aParams['sId'] ?? NULL;
        $aContainerClasses = $aParams['aContainerClasses'] ?? array (
);
        $oUIContentBlock_634f12b81fa50966112218 = Combodo\iTop\Application\UI\Base\Layout\UIContentBlockUIBlockFactory::MakeStandard(        $sId        ,         $aContainerClasses        );
        $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oUIContentBlock_634f12b81fa50966112218, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oUIContentBlock_634f12b81fa50966112218, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oUIContentBlock_634f12b81fa50966112218);
        array_push($context['UIBlockParent'], $oUIContentBlock_634f12b81fa50966112218);
        ob_start();
        // line 74
        echo "                    ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sType" => "checkbox", "sId" => "doBackup", "sName" => "doBackup", "sValue" => "1", "IsChecked" => true, "CSSClasses" => [0 => "ibo-input-checkbox", 1 => "ibo-input--label-left"], "Label" => call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["iTopUpdate:UI:DoBackup:Label"])];
        if (!isset($aParams['sType'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sType for UIInput at line 74');
        }
        $sType = $aParams['sType'];
        if (!isset($aParams['sName'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sName for UIInput at line 74');
        }
        $sName = $aParams['sName'];
        if (!isset($aParams['sValue'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sValue for UIInput at line 74');
        }
        $sValue = $aParams['sValue'];
        $sId = $aParams['sId'] ?? NULL;
        $oInput_634f12b81fac0946686160 = Combodo\iTop\Application\UI\Base\Component\Input\InputUIBlockFactory::MakeStandard(        $sType        ,         $sName        ,         $sValue        ,         $sId        );
        $aSetters = ['Type','IsChecked','IsDisabled','IsReadonly','Label','Name','Value','Placeholder','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oInput_634f12b81fac0946686160, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oInput_634f12b81fac0946686160, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oInput_634f12b81fac0946686160);
        ob_start();
        // line 75
        echo "                ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 76
        echo "
                ";
        // line 77
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["aContainerClasses" => [0 => "ibo-font-ral-nor-150"]];
        $sId = $aParams['sId'] ?? NULL;
        $aContainerClasses = $aParams['aContainerClasses'] ?? array (
);
        $oUIContentBlock_634f12b81fb98672803939 = Combodo\iTop\Application\UI\Base\Layout\UIContentBlockUIBlockFactory::MakeStandard(        $sId        ,         $aContainerClasses        );
        $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oUIContentBlock_634f12b81fb98672803939, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oUIContentBlock_634f12b81fb98672803939, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oUIContentBlock_634f12b81fb98672803939);
        array_push($context['UIBlockParent'], $oUIContentBlock_634f12b81fb98672803939);
        ob_start();
        // line 78
        echo "                    ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sType" => "checkbox", "sId" => "doFilesArchive", "sName" => "doFilesArchive", "sValue" => "1", "IsChecked" => true, "CSSClasses" => [0 => "ibo-input-checkbox", 1 => "ibo-input--label-left"], "Label" => call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["iTopUpdate:UI:DoFilesArchive"])];
        if (!isset($aParams['sType'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sType for UIInput at line 78');
        }
        $sType = $aParams['sType'];
        if (!isset($aParams['sName'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sName for UIInput at line 78');
        }
        $sName = $aParams['sName'];
        if (!isset($aParams['sValue'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sValue for UIInput at line 78');
        }
        $sValue = $aParams['sValue'];
        $sId = $aParams['sId'] ?? NULL;
        $oInput_634f12b81fc07076245554 = Combodo\iTop\Application\UI\Base\Component\Input\InputUIBlockFactory::MakeStandard(        $sType        ,         $sName        ,         $sValue        ,         $sId        );
        $aSetters = ['Type','IsChecked','IsDisabled','IsReadonly','Label','Name','Value','Placeholder','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oInput_634f12b81fc07076245554, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oInput_634f12b81fc07076245554, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oInput_634f12b81fc07076245554);
        ob_start();
        // line 79
        echo "                ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 80
        echo "
                ";
        // line 81
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["aContainerClasses" => [0 => "ibo_check_update_submit"]];
        $sId = $aParams['sId'] ?? NULL;
        $aContainerClasses = $aParams['aContainerClasses'] ?? array (
);
        $oUIContentBlock_634f12b81fcdf282055772 = Combodo\iTop\Application\UI\Base\Layout\UIContentBlockUIBlockFactory::MakeStandard(        $sId        ,         $aContainerClasses        );
        $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oUIContentBlock_634f12b81fcdf282055772, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oUIContentBlock_634f12b81fcdf282055772, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oUIContentBlock_634f12b81fcdf282055772);
        array_push($context['UIBlockParent'], $oUIContentBlock_634f12b81fcdf282055772);
        ob_start();
        // line 82
        echo "                    ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sLabel" => call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["iTopUpdate:UI:CheckUpdate"]), "sId" => "check-update", "bIsSubmit" => true, "IsDisabled" => true];
        if (!isset($aParams['sLabel'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sLabel for UIButton at line 82');
        }
        $sLabel = $aParams['sLabel'];
        $sName = $aParams['sName'] ?? NULL;
        $sValue = $aParams['sValue'] ?? NULL;
        $bIsSubmit = $aParams['bIsSubmit'] ?? false;
        $sId = $aParams['sId'] ?? NULL;
        $oButton_634f12b81fd49792432118 = Combodo\iTop\Application\UI\Base\Component\Button\ButtonUIBlockFactory::MakeForPrimaryAction(        $sLabel        ,         $sName        ,         $sValue        ,         $bIsSubmit        ,         $sId        );
        $aSetters = ['Label','Tooltip','IconClass','ActionType','Color','OnClickJsCode','JsCode','IsDisabled','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oButton_634f12b81fd49792432118, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oButton_634f12b81fd49792432118, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oButton_634f12b81fd49792432118);
        ob_start();
        // line 83
        echo "                    ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sId" => "submit-wait", "IsHidden" => true];
        $sId = $aParams['sId'] ?? NULL;
        $oSpinner_634f12b81fdf4853185849 = Combodo\iTop\Application\UI\Base\Component\Spinner\SpinnerUIBlockFactory::MakeStandard(        $sId        );
        $aSetters = ['CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oSpinner_634f12b81fdf4853185849, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oSpinner_634f12b81fdf4853185849, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oSpinner_634f12b81fdf4853185849);
        ob_start();
        // line 84
        echo "                ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 85
        echo "
            ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 87
        echo "
        ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 89
        echo "
        ";
        // line 90
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sLegend" => call_user_func_array($this->env->getFilter('dict_s')->getCallable(), ["iTopUpdate:UI:History"])];
        if (!isset($aParams['sLegend'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sLegend for UIFieldSet at line 90');
        }
        $sLegend = $aParams['sLegend'];
        $sId = $aParams['sId'] ?? NULL;
        $oFieldSet_634f12b81fe91425343815 = Combodo\iTop\Application\UI\Base\Component\FieldSet\FieldSetUIBlockFactory::MakeStandard(        $sLegend        ,         $sId        );
        $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oFieldSet_634f12b81fe91425343815, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oFieldSet_634f12b81fe91425343815, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oFieldSet_634f12b81fe91425343815);
        array_push($context['UIBlockParent'], $oFieldSet_634f12b81fe91425343815);
        ob_start();
        // line 91
        echo "            ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sListId" => "iboupdatehistory", "oSet" => ($context["oSet"] ?? null)];
        if (!isset($aParams['sListId'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sListId for UIDataTable at line 91');
        }
        $sListId = $aParams['sListId'];
        if (!isset($aParams['oSet'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter oSet for UIDataTable at line 91');
        }
        $oSet = $aParams['oSet'];
        $aExtraParams = $aParams['aExtraParams'] ?? array (
);
        $oDataTable_634f12b81ff11624490588 = Combodo\iTop\Application\UI\Base\Component\DataTable\DataTableUIBlockFactory::MakeForRendering(        $sListId        ,         $oSet        ,         $aExtraParams        );
        $aSetters = ['AjaxUrl','AjaxData','DisplayColumns','ResultColumns','Options','InitDisplayData','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden','JSRefresh'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oDataTable_634f12b81ff11624490588, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oDataTable_634f12b81ff11624490588, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oDataTable_634f12b81ff11624490588);
        array_push($context['UIBlockParent'], $oDataTable_634f12b81ff11624490588);
        ob_start();
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 92
        echo "        ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 93
        echo "
    ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 95
        echo "
";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        $___internal_d8a0d8eb51ccf479d4b493b32f84aa04039da860d5bcef2e019fdc8aeb314bce_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_d8a0d8eb51ccf479d4b493b32f84aa04039da860d5bcef2e019fdc8aeb314bce_);
    }

    public function getTemplateName()
    {
        return "SelectUpdateFile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1376 => 3,  1365 => 95,  1355 => 93,  1346 => 92,  1304 => 91,  1275 => 90,  1272 => 89,  1262 => 87,  1252 => 85,  1243 => 84,  1218 => 83,  1186 => 82,  1159 => 81,  1156 => 80,  1147 => 79,  1110 => 78,  1083 => 77,  1080 => 76,  1071 => 75,  1034 => 74,  1007 => 73,  1004 => 72,  992 => 70,  965 => 69,  962 => 68,  934 => 67,  931 => 66,  919 => 64,  892 => 63,  889 => 62,  880 => 61,  868 => 59,  840 => 58,  828 => 56,  800 => 55,  788 => 53,  760 => 52,  733 => 51,  730 => 50,  697 => 49,  664 => 48,  638 => 47,  609 => 46,  606 => 45,  596 => 43,  584 => 41,  557 => 40,  554 => 39,  545 => 38,  520 => 37,  493 => 36,  490 => 35,  481 => 34,  456 => 33,  429 => 32,  426 => 31,  414 => 29,  387 => 28,  384 => 27,  372 => 25,  345 => 24,  342 => 23,  333 => 22,  324 => 21,  315 => 20,  287 => 19,  257 => 18,  248 => 17,  224 => 16,  219 => 15,  191 => 14,  163 => 13,  133 => 12,  106 => 11,  101 => 8,  65 => 7,  62 => 6,  35 => 5,  32 => 4,  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "SelectUpdateFile.html.twig", "/var/www/html/itop/env-production/itop-core-update/view/SelectUpdateFile.html.twig");
    }
}
