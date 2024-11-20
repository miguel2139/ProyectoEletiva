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

/* @Modules/ps_mbo/views/templates/admin/controllers/module_catalog/recommended-modules.html.twig */
class __TwigTemplate_4368afad2f2bc3a03c1ba4fb1d818ca468c8008e0e94e2607c4145fc1813c651 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 19
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 19), "isxmlhttprequest", [], "any", false, false, false, 19)) ? ("@Modules/ps_mbo/views/templates/admin/layout-ajax.html.twig") : ("@PrestaShop/Admin/layout.html.twig")), "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/recommended-modules.html.twig", 19);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "  <script>
    if (typeof window.mboCdc == undefined || typeof window.mboCdc == \"undefined\") {
      if (typeof renderCdcError === 'function') {
        window.\$(document).ready(function() {
          renderCdcError(\$('#cdc-container'));
        });
      }
    } else {
      if (typeof window.mboRenderRecommendations === 'undefined') {
        window.mboRenderRecommendations = window.mboCdc.renderRecommendations
      }

      window.mboRenderRecommendations(";
        // line 34
        echo json_encode(($context["shop_context"] ?? null));
        echo ", '#cdc-container')
    }
  </script>
  <div id=\"cdc-container\" class=\"cdc-container\" data-error-path=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mbo_module_cdc_error");
        echo "\"></div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/recommended-modules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 37,  63 => 34,  49 => 22,  45 => 21,  35 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/recommended-modules.html.twig", "C:\\xampp\\htdocs\\tut\\modules\\ps_mbo\\views\\templates\\admin\\controllers\\module_catalog\\recommended-modules.html.twig");
    }
}
