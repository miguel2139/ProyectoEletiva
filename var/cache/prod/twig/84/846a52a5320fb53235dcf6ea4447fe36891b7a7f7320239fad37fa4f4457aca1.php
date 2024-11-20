<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Modules/psxdesign/views/templates/components/Partials/file_uploader_preview_template.html.twig */
class __TwigTemplate_93f66d7741fd1a6b870711ff7c4ed3ab249f24481ec31bba589283f8ef3b7e84 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
<div class=\"file-uploader__item\">
    <button type=\"button\" class=\"btn file-uploader__remove-btn\">
        <i class=\"material-icons file-uploader__remove-icon\">cancel</i>
        <span class=\"sr-only\">";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove file", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</span>
    </button>
    <div class=\"file-uploader__preview-container\">
        <img class=\"file-uploader__preview-img\" />
        <span class=\"file-uploader__preview-placeholder material-icons\">insert_drive_file</span>
    </div>
    <p class=\"file-uploader__name\" title=\"\"></p>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/components/Partials/file_uploader_preview_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 29,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psxdesign/views/templates/components/Partials/file_uploader_preview_template.html.twig", "C:\\xampp\\htdocs\\tut\\modules\\psxdesign\\views\\templates\\components\\Partials\\file_uploader_preview_template.html.twig");
    }
}
