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

/* @PrestaShop/Admin/Improve/International/Localization/index.html.twig */
class __TwigTemplate_2bb8d6cb52ed2657e6c98b49832f079a05e1b3433e954545217cf532a7de1acb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/International/Localization/index.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Localization/Blocks/import_localization_pack_block.html.twig", "@PrestaShop/Admin/Improve/International/Localization/index.html.twig", 30)->display($context);
        // line 31
        echo "
  ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["configurationForm"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_localization_configuration_save")]);
        echo "
  ";
        // line 33
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Localization/Blocks/configuration.html.twig", "@PrestaShop/Admin/Improve/International/Localization/index.html.twig", 33)->display($context);
        // line 34
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["configurationForm"] ?? null), 'form_end');
        echo "

  ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["localUnitsForm"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_localization_local_units_save")]);
        echo "
  ";
        // line 37
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Localization/Blocks/local_units.html.twig", "@PrestaShop/Admin/Improve/International/Localization/index.html.twig", 37)->display($context);
        // line 38
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["localUnitsForm"] ?? null), 'form_end');
        echo "

  ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["advancedForm"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_localization_advanced_save")]);
        echo "
  ";
        // line 41
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Localization/Blocks/advanced_configuration.html.twig", "@PrestaShop/Admin/Improve/International/Localization/index.html.twig", 41)->display($context);
        // line 42
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["advancedForm"] ?? null), 'form_end');
        echo "

";
    }

    // line 46
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/localization.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Localization/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 49,  99 => 47,  95 => 46,  87 => 42,  85 => 41,  81 => 40,  75 => 38,  73 => 37,  69 => 36,  63 => 34,  61 => 33,  57 => 32,  54 => 31,  51 => 30,  47 => 29,  36 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/International/Localization/index.html.twig", "C:\\xampp\\htdocs\\tut\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\International\\Localization\\index.html.twig");
    }
}
