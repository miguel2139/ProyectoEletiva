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

/* @PrestaShop/Admin/Improve/Design/Cms/index.html.twig */
class __TwigTemplate_bedab7f65e2fcdc1cced67a0c641dec7e5632165d4b11bcb97e03adff1df5699 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'cms_page_category_breadcrumb' => [$this, 'block_cms_page_category_breadcrumb'],
            'cms_category_grid' => [$this, 'block_cms_category_grid'],
            'cms_grid' => [$this, 'block_cms_grid'],
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
        // line 28
        $context["layoutHeaderToolbarBtn"] = ["add_cms_category" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_cms_pages_category_create", ["id_cms_category" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 30
($context["app"] ?? null), "request", [], "any", false, false, false, 30), "query", [], "any", false, false, false, 30), "get", [0 => "id_cms_category"], "method", false, false, false, 30)]), "desc" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new page category", [], "Admin.Design.Help"), "icon" => "add_circle_outline"], "add_cms_page" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_cms_pages_create", ["id_cms_category" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 35
($context["app"] ?? null), "request", [], "any", false, false, false, 35), "query", [], "any", false, false, false, 35), "get", [0 => "id_cms_category"], "method", false, false, false, 35)]), "desc" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new page", [], "Admin.Design.Help"), "icon" => "add_circle_outline"]];
        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 42
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "
  ";
        // line 44
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Cms/Blocks/showcase_card.html.twig", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", 44)->display($context);
        // line 45
        echo "
  ";
        // line 46
        $this->displayBlock('cms_page_category_breadcrumb', $context, $blocks);
        // line 49
        echo "
  ";
        // line 50
        $this->displayBlock('cms_category_grid', $context, $blocks);
        // line 59
        echo "
  ";
        // line 60
        $this->displayBlock('cms_grid', $context, $blocks);
    }

    // line 46
    public function block_cms_page_category_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Cms/Blocks/breadcrumb.html.twig", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", 47)->display($context);
        // line 48
        echo "  ";
    }

    // line 50
    public function block_cms_category_grid($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", 51, "1166252174")->display(twig_array_merge($context, ["grid" => ($context["cmsCategoryGrid"] ?? null)]));
        // line 58
        echo "  ";
    }

    // line 60
    public function block_cms_grid($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", 61)->display(twig_array_merge($context, ["grid" => ($context["cmsGrid"] ?? null)]));
        // line 62
        echo "  ";
    }

    // line 65
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/cms_page.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 68,  123 => 67,  118 => 66,  114 => 65,  110 => 62,  107 => 61,  103 => 60,  99 => 58,  96 => 51,  92 => 50,  88 => 48,  85 => 47,  81 => 46,  77 => 60,  74 => 59,  72 => 50,  69 => 49,  67 => 46,  64 => 45,  62 => 44,  59 => 43,  55 => 42,  50 => 26,  48 => 35,  47 => 30,  46 => 28,  39 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", "C:\\xampp\\htdocs\\tut\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Design\\Cms\\index.html.twig");
    }
}


/* @PrestaShop/Admin/Improve/Design/Cms/index.html.twig */
class __TwigTemplate_bedab7f65e2fcdc1cced67a0c641dec7e5632165d4b11bcb97e03adff1df5699___1166252174 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'grid_panel_footer' => [$this, 'block_grid_panel_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 51
        return "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", 51);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 52
    public function block_grid_panel_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 53), "query", [], "any", false, false, false, 53), "get", [0 => "id_cms_category"], "method", false, false, false, 53) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 53), "query", [], "any", false, false, false, 53), "get", [0 => "id_cms_category"], "method", false, false, false, 53) != twig_get_attribute($this->env, $this->source, ($context["cmsPageView"] ?? null), "root_category_id", [], "any", false, false, false, 53)))) {
            // line 54
            echo "          ";
            $this->loadTemplate("@PrestaShop/Admin/Improve/Design/Cms/Blocks/listing_panel_footer.html.twig", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", 54)->display($context);
            // line 55
            echo "        ";
        }
        // line 56
        echo "      ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 56,  195 => 55,  192 => 54,  189 => 53,  185 => 52,  174 => 51,  127 => 68,  123 => 67,  118 => 66,  114 => 65,  110 => 62,  107 => 61,  103 => 60,  99 => 58,  96 => 51,  92 => 50,  88 => 48,  85 => 47,  81 => 46,  77 => 60,  74 => 59,  72 => 50,  69 => 49,  67 => 46,  64 => 45,  62 => 44,  59 => 43,  55 => 42,  50 => 26,  48 => 35,  47 => 30,  46 => 28,  39 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Cms/index.html.twig", "C:\\xampp\\htdocs\\tut\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Design\\Cms\\index.html.twig");
    }
}
