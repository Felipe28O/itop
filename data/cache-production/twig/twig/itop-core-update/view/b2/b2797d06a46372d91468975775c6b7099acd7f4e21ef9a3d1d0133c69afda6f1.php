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

/* SelectUpdateFile.ready.js.twig */
class __TwigTemplate_abd83ed26be7a9e916c509265e830b0ed32c50a24de3936f72a88fa39e439595 extends \Twig\Template
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
        echo "
var iDiskFreeSpace = ";
        // line 4
        echo twig_escape_filter($this->env, ($context["iDiskFreeSpace"] ?? null), "html", null, true);
        echo ";

\$.ajax({
    method: \"POST\",
    url: \"";
        // line 8
        echo ($context["sAjaxURL"] ?? null);
        echo "\",
    data: {
        \"operation\": \"CanUpdateCore\"
    },
    dataType: \"json\",
    success: function (data) {
        var oRequirements = \$(\"#header-requirements\");
        var oCanCoreUpdate = \$(\"#can-core-update\");
        oCanCoreUpdate.html(data.sMessage);
        if(data.sMessageDetails){
            \$(\"#header-requirements-details\").removeClass(\"ibo-is-hidden\");
            \$('#can-core-update-details').html(data.sMessageDetails);
            \$(\"#toggle-requirements-details\").click( function() { \$(\"#can-core-update-details\").toggle(); } );
        }
        oRequirements.removeClass(\"ibo-is-information\");
        if (data.bStatus) {
            oRequirements.addClass(\"ibo-is-success\");
            \$(\"#check-update\").prop(\"disabled\", false);
            \$(\"#file\").prop(\"disabled\", false);
            \$(\"#file-container\").removeClass(\"ibo-is-hidden\");
            \$(\"#check-in-progress\").addClass(\"ibo-is-hidden\");
        } else {
            \$(\"#check-update\").prop(\"disabled\", true);
            \$(\"#file\").prop(\"disabled\", true);
            \$('#form-update-outer').slideUp(600);
            oRequirements.addClass(\"ibo-is-failure\");
        }
    }
});

var oGetItopDiskSpace = \$.ajax({
    method: \"POST\",
    url: \"";
        // line 40
        echo ($context["sAjaxURL"] ?? null);
        echo "\",
    data: {
        \"operation\": \"GetItopDiskSpace\"
    },
    dataType: \"json\",
    success: function(data)
    {
        var oRequirement = \$(\"#itop-disk-space\");
        oRequirement.html(data.sItopDiskSpace);
    }
});

var oGetDBDiskSpace = \$.ajax({
    method: \"POST\",
    url: \"";
        // line 54
        echo ($context["sAjaxURL"] ?? null);
        echo "\",
    data: {
        \"operation\": \"GetDBDiskSpace\"
    },
    dataType: \"json\",
    success: function(data)
    {
        var oRequirement = \$(\"#db-disk-space\");
        oRequirement.html(data.sDBDiskSpace);
    }
});

\$.when(oGetItopDiskSpace, oGetDBDiskSpace).then(
    function(data1, data2)
    {
        var iItopDiskSpace = data1[0].iItopDiskSpace;
        var iDBDiskSpace = data2[0].iDBDiskSpace;
        if ((2 * (iItopDiskSpace + iDBDiskSpace)) > iDiskFreeSpace)
        {
            \$(\"#dobackup-warning\").removeClass(\"ibo-is-hidden\");
        }
    }
);

\$(\"#file\").on(\"change\", function(e) {
    var selectedFile = \$('#file').get(0).files[0];
    var errorMsg = \$(\"#header-file-size\");
    var submitButton = \$(\"#check-update\");
    if (selectedFile)
    {
        if (selectedFile.size > ";
        // line 84
        echo twig_escape_filter($this->env, ($context["iFileUploadMaxSize"] ?? null), "html", null, true);
        echo ")
        {
            errorMsg.removeClass(\"ibo-is-hidden\");
            submitButton.prop(\"disabled\", true);
            return;
        }
    }
    errorMsg.addClass(\"ibo-is-hidden\");
    submitButton.prop(\"disabled\", false);
});

\$(\"#check-update\").on(\"click\", function(e) {
    \$(\"#submit-wait\").removeClass(\"ibo-is-hidden\");
    \$(this).prop(\"disabled\", true);
    \$(\".ajax-spin\").removeClass(\"fa-sync-alt\").removeClass(\"fa-spin\").addClass(\"fa-times\");
    \$(this).parents('form').submit();
    e.preventDefault();
    e.stopPropagation();
    return false;
});
";
    }

    public function getTemplateName()
    {
        return "SelectUpdateFile.ready.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 84,  92 => 54,  75 => 40,  40 => 8,  33 => 4,  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "SelectUpdateFile.ready.js.twig", "/var/www/html/itop/env-production/itop-core-update/view/SelectUpdateFile.ready.js.twig");
    }
}
