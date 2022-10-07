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

/* application/printable/block-print-header/layout.ready.js.twig */
class __TwigTemplate_9528fd90ec372b8bb3f14841faf4dba350b61e1b09dd73e0ab171164a928ada3 extends \Twig\Template
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
        $___internal_8822842c18a2f44d6282296834061741471d1a18c036a371f4f4bd8c8e8bcd73_ = ('' === $tmp = "
var sHiddeableChapters = '<ul role=\"tablist\" class=\"ibo-block-print--tablist\">';
for (sId in oHiddeableChapters)
{
\tsHiddeableChapters += '<li tabindex=\"-1\" role=\"tab\" class=\"ibo-block-print--tab hideable-chapter\" chapter-id=\"'+sId+'\"><span class=\"tab ui-tabs-anchor\">' + oHiddeableChapters[sId] + '</span></li>';
\t//alert(oHiddeableChapters[sId]);
}
sHiddeableChapters += '</ul>';

\$('#hiddeable_chapters').html(sHiddeableChapters);

\$('.hideable-chapter').on('click', function(){
\tvar sChapterId = \$(this).attr('chapter-id');
\t\$('#'+sChapterId).toggle();
\t\$(this).toggleClass('strikethrough');

});

\$('fieldset').each(function() {
\tvar jLegend = \$(this).find('legend');
\tjLegend.remove();
\t\$(this).wrapInner('<span></span>').prepend(jLegend);
});

\$('legend').css('cursor', 'pointer').on('click', function(){
\t\$(this).parent('fieldset').toggleClass('not-printable strikethrough');
});

") ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_spaceless($___internal_8822842c18a2f44d6282296834061741471d1a18c036a371f4f4bd8c8e8bcd73_);
    }

    public function getTemplateName()
    {
        return "application/printable/block-print-header/layout.ready.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "application/printable/block-print-header/layout.ready.js.twig", "/var/www/html/itop/templates/application/printable/block-print-header/layout.ready.js.twig");
    }
}
