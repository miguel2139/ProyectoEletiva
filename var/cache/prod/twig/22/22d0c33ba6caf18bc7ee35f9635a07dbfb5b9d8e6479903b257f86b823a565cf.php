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

/* @Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig */
class __TwigTemplate_caf8a5e06603504f47581586dc8f172d6b8e38ae5d65606c8d3bc26d987775ee extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 19
        return "@PrestaShop/Admin/Module/common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Module/common.html.twig", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig", 19);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"application/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["cdc_error_templating_url"] ?? null), "html", null, true);
        echo "\"></script>

    ";
        // line 25
        if ((array_key_exists("cdc_script_not_found", $context) && (($context["cdc_script_not_found"] ?? null) === true))) {
            // line 26
            echo "      <script type=\"application/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["cdc_error_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // line 28
            echo "      <script type=\"application/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["cdc_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
        }
        // line 30
        echo "
    <script>
      if (typeof window.mboCdc == undefined || typeof window.mboCdc == \"undefined\") {
        if (typeof renderCdcError === 'function') {
          window.\$(document).ready(function() {
            renderCdcError(\$('#cdc-container'));
          });
        }
      } else {
        const renderModules = window.mboCdc.renderModules

        const context = ";
        // line 41
        echo json_encode(($context["shop_context"] ?? null));
        echo ";

        renderModules(context, '#cdc-container')
      }
    </script>
";
    }

    // line 48
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["cdc_error_templating_css"] ?? null), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
    }

    // line 53
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "    <div class=\"mbo-catalog-wrapper cdc-container\" id=\"cdc-container\" data-error-path=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mbo_module_cdc_error");
        echo "\"></div>

    ";
        // line 56
        $this->loadTemplate("@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/includes/modal_import.html.twig", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig", 56)->display(twig_array_merge($context, ["level" => ($context["level"] ?? null), "errorMessage" => ($context["errorMessage"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 56,  118 => 54,  114 => 53,  108 => 50,  103 => 49,  99 => 48,  89 => 41,  76 => 30,  70 => 28,  64 => 26,  62 => 25,  57 => 23,  52 => 22,  48 => 21,  37 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig", "C:\\xampp\\htdocs\\tut\\modules\\ps_mbo\\views\\templates\\admin\\controllers\\module_catalog\\catalog.html.twig");
    }
}
