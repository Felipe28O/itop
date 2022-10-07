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

/* itop-portal-base/portal/templates/helpers/tagset_clic_handler.js.twig */
class __TwigTemplate_a497a55b431d62b31e7530691b2022d5bcf278ca3ccc667d17adc8439df99b80 extends \Twig\Template
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
        echo "/**
 * When clicking on a TagSet item in a list (BrowseBrick or ManageBrick), filters the list using the item label
 * @since 2.6.0 N°931 AttributeTagSet
 */
\$(\"#main-content\").on(\"click\", \".table.dataTable .attribute.attribute-set.attribute-tag-set > .attribute-set-item\", function () {
\tvar \$this = \$(this),
\t\t\$dataTableWrapper = \$this.closest(\".dataTables_wrapper\"),
\t\t\$searchField = \$dataTableWrapper.find(\".dataTables_filter input.form-control\"),
\t\tiNbInputsFound = \$searchField.length;

\tif (iNbInputsFound === 0)
\t{
\t\treturn;
\t}
\tif (iNbInputsFound > 1)
\t{
\t\treturn;
\t}

\tvar sTagLabel = \$this.text();
\t\$searchField.prop(\"value\", sTagLabel);
\t\$searchField.trigger(\"keyup\");
});";
    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/templates/helpers/tagset_clic_handler.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "itop-portal-base/portal/templates/helpers/tagset_clic_handler.js.twig", "/var/www/html/itop/env-production/itop-portal-base/portal/templates/helpers/tagset_clic_handler.js.twig");
    }
}
