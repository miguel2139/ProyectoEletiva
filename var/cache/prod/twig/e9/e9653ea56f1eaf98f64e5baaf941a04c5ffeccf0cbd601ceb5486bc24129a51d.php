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

/* @PrestaShop/Admin/Improve/International/Localization/Blocks/import_localization_pack_block.html.twig */
class __TwigTemplate_57465ff372fb3b63dd051530adbc524827bf2403c29753cca59ed71e171157d2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'import_localization_pack' => [$this, 'block_import_localization_pack'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 27
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["localizationPackImportForm"] ?? null), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('import_localization_pack', $context, $blocks);
    }

    public function block_import_localization_pack($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["localizationPackImportForm"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_localization_import_pack")]);
        echo "
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">language</i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import a localization pack", [], "Admin.International.Feature"), "html", null, true);
        echo "
    </h3>

    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["localizationPackImportForm"] ?? null), 'widget');
        echo "
      </div>
    </div>

    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\" id=\"form-import-localization-save-button\">
          <i class=\"material-icons\">cloud_download</i>
          <span>";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import", [], "Admin.Actions"), "html", null, true);
        echo "</span>
        </button>
      </div>
    </div>
  </div>
  ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["localizationPackImportForm"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Localization/Blocks/import_localization_pack_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 51,  79 => 46,  68 => 38,  60 => 33,  53 => 30,  46 => 29,  43 => 28,  41 => 27,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/International/Localization/Blocks/import_localization_pack_block.html.twig", "C:\\xampp\\htdocs\\tut\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\International\\Localization\\Blocks\\import_localization_pack_block.html.twig");
    }
}
