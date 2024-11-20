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

/* @PrestaShop/Admin/Sell/Customer/index.html.twig */
class __TwigTemplate_40dcd38287f501e38cc5151b581249e6d8340e90aacbe5d9f2e6fd9fa5b084ca extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'employee_helper_card' => [$this, 'block_employee_helper_card'],
            'customers_kpis' => [$this, 'block_customers_kpis'],
            'customers_listing' => [$this, 'block_customers_listing'],
            'customer_required_fields_form' => [$this, 'block_customer_required_fields_form'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 29
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        $context["enableSidebar"] = true;
        // line 27
        $context["layoutTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage your Customers", [], "Admin.Orderscustomers.Feature");
        // line 29
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Customer/index.html.twig", 29);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "  ";
        $this->displayBlock('employee_helper_card', $context, $blocks);
        // line 35
        echo "
  ";
        // line 36
        $this->displayBlock('customers_kpis', $context, $blocks);
        // line 42
        echo "
  ";
        // line 43
        $this->displayBlock('customers_listing', $context, $blocks);
        // line 58
        echo "
  ";
        // line 59
        $this->displayBlock('customer_required_fields_form', $context, $blocks);
    }

    // line 32
    public function block_employee_helper_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/showcase_card.html.twig", "@PrestaShop/Admin/Sell/Customer/index.html.twig", 33)->display($context);
        // line 34
        echo "  ";
    }

    // line 36
    public function block_customers_kpis($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle:Admin\\Common:renderKpiRow", ["kpiRow" =>         // line 39
($context["customersKpi"] ?? null)]));
        // line 40
        echo "
  ";
    }

    // line 43
    public function block_customers_listing($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "    ";
        if ( !($context["isSingleShopContext"] ?? null)) {
            // line 45
            echo "      <div class=\"alert alert-info\" role=\"alert\">
        <p class=\"alert-text\">
          ";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You have to select a shop if you want to create a customer.", [], "Admin.Orderscustomers.Notification"), "html", null, true);
            echo "
        </p>
      </div>
    ";
        }
        // line 51
        echo "
    ";
        // line 52
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/index.html.twig", "@PrestaShop/Admin/Sell/Customer/index.html.twig", 52, "1162094385")->display(twig_array_merge($context, ["grid" => ($context["customerGrid"] ?? null)]));
        // line 57
        echo "  ";
    }

    // line 59
    public function block_customer_required_fields_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "    <p>
      <button class=\"btn btn-primary\" type=\"button\" data-toggle=\"collapse\" data-target=\"#customerRequiredFieldsContainer\" aria-expanded=\"false\" aria-controls=\"customerRequiredFieldsContainer\">
        <i class=\"material-icons\">add_circle</i>
        ";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Set required fields for this section", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </button>
    </p>
    ";
        // line 66
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/Index/required_fields.html.twig", "@PrestaShop/Admin/Sell/Customer/index.html.twig", 66)->display($context);
        // line 67
        echo "  ";
    }

    // line 70
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  ";
        // line 73
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/javascript.html.twig", "@PrestaShop/Admin/Sell/Customer/index.html.twig", 73)->display($context);
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 73,  156 => 71,  152 => 70,  148 => 67,  146 => 66,  140 => 63,  135 => 60,  131 => 59,  127 => 57,  125 => 52,  122 => 51,  115 => 47,  111 => 45,  108 => 44,  104 => 43,  99 => 40,  97 => 39,  95 => 37,  91 => 36,  87 => 34,  84 => 33,  80 => 32,  76 => 59,  73 => 58,  71 => 43,  68 => 42,  66 => 36,  63 => 35,  60 => 32,  56 => 31,  51 => 29,  49 => 27,  47 => 26,  40 => 29,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Customer/index.html.twig", "C:\\xampp\\htdocs\\tut\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Customer\\index.html.twig");
    }
}


/* @PrestaShop/Admin/Sell/Customer/index.html.twig */
class __TwigTemplate_40dcd38287f501e38cc5151b581249e6d8340e90aacbe5d9f2e6fd9fa5b084ca___1162094385 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'grid_panel_extra_content' => [$this, 'block_grid_panel_extra_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 52
        return "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Sell/Customer/index.html.twig", 52);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 53
    public function block_grid_panel_extra_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "        ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/delete_modal.html.twig", "@PrestaShop/Admin/Sell/Customer/index.html.twig", 54)->display($context);
        // line 55
        echo "      ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 55,  222 => 54,  218 => 53,  207 => 52,  162 => 73,  156 => 71,  152 => 70,  148 => 67,  146 => 66,  140 => 63,  135 => 60,  131 => 59,  127 => 57,  125 => 52,  122 => 51,  115 => 47,  111 => 45,  108 => 44,  104 => 43,  99 => 40,  97 => 39,  95 => 37,  91 => 36,  87 => 34,  84 => 33,  80 => 32,  76 => 59,  73 => 58,  71 => 43,  68 => 42,  66 => 36,  63 => 35,  60 => 32,  56 => 31,  51 => 29,  49 => 27,  47 => 26,  40 => 29,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Customer/index.html.twig", "C:\\xampp\\htdocs\\tut\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Customer\\index.html.twig");
    }
}
