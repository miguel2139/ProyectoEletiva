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

/* @PrestaShop/Admin/Improve/Design/Cms/Blocks/showcase_card.html.twig */
class __TwigTemplate_1653343e3f3dbf5507da767c7b04a69596143e1d599f0c3b40ac772a021f74f8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'cms_pages_showcase_card' => [$this, 'block_cms_pages_showcase_card'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('cms_pages_showcase_card', $context, $blocks);
    }

    public function block_cms_pages_showcase_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "  ";
        if ( !($context["showcaseCardIsClosed"] ?? null)) {
            // line 28
            echo "    <div id=\"cms-pages-showcase-card\" class=\"showcase-card card\">
      <div class=\"showcase-card__left shape-one helper-card__cms-pages-background img-rtl\">
        <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/helper-card/content@3x.png"), "html", null, true);
            echo "\" class=\"img-fluid\">
      </div>
      <div class=\"showcase-card__right\">
        <h2>";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create meaningful content", [], "Admin.Design.Help"), "html", null, true);
            echo "</h2>
        <p>";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Because it is not just selling products but also creating a universe, build pages to tell stories and catch your visitors’ interest, to turn them into loyal customers.", [], "Admin.Design.Help"), "html", null, true);
            echo "</p>
        <a class=\"btn btn-outline-secondary\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, ($context["helperDocLink"] ?? null), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Learn more", [], "Admin.Actions"), "html", null, true);
            echo "</a>
      </div>
      <i class=\"showcase-card__close material-icons js-remove-helper-block\" data-card-name=\"";
            // line 37
            echo twig_escape_filter($this->env, ($context["cmsPageShowcaseCardName"] ?? null), "html", null, true);
            echo "\" data-close-url=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_close_showcase_card");
            echo "\">close</i>
    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Cms/Blocks/showcase_card.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  76 => 37,  69 => 35,  65 => 34,  61 => 33,  55 => 30,  51 => 28,  48 => 27,  41 => 26,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Cms/Blocks/showcase_card.html.twig", "C:\\xampp\\htdocs\\tut\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Design\\Cms\\Blocks\\showcase_card.html.twig");
    }
}
