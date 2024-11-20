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

/* @PrestaShop/Admin/Improve/Design/Cms/Blocks/breadcrumb.html.twig */
class __TwigTemplate_70818f8e734e16195f343365ff0d14d943ae70dafccc022dc8548e87e095b66d extends Template
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
";
        // line 26
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["cmsPageView"] ?? null), "breadcrumb_tree", [], "any", false, false, false, 26))) {
            // line 27
            echo "  <div class=\"card\">
    <div class=\"card-body\">
      <nav>
        <ol class=\"breadcrumb\">
          ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cmsPageView"] ?? null), "breadcrumb_tree", [], "any", false, false, false, 31));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 32
                echo "            <li class=\"breadcrumb-item\">
              ";
                // line 33
                $context["cmsPageRouteParameters"] = [];
                // line 34
                echo "
              ";
                // line 35
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "cmsPageCategoryId", [], "any", false, false, false, 35), "value", [], "any", false, false, false, 35) != twig_get_attribute($this->env, $this->source, ($context["cmsPageView"] ?? null), "root_category_id", [], "any", false, false, false, 35))) {
                    // line 36
                    echo "                ";
                    $context["cmsPageRouteParameters"] = ["id_cms_category" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "cmsPageCategoryId", [], "any", false, false, false, 36), "value", [], "any", false, false, false, 36)];
                    // line 37
                    echo "              ";
                }
                // line 38
                echo "
              <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_cms_pages_index", ($context["cmsPageRouteParameters"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 40), "html", null, true);
                echo "
              </a>
            </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "        </ol>
      </nav>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Cms/Blocks/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 44,  75 => 40,  71 => 39,  68 => 38,  65 => 37,  62 => 36,  60 => 35,  57 => 34,  55 => 33,  52 => 32,  48 => 31,  42 => 27,  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Cms/Blocks/breadcrumb.html.twig", "C:\\xampp\\htdocs\\tut\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Design\\Cms\\Blocks\\breadcrumb.html.twig");
    }
}
