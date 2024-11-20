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

/* @PrestaShop/Admin/Improve/Payment/Preferences/payment_preferences.html.twig */
class __TwigTemplate_c04fa363dc358bdd43e74a398e79beb66e453beed3e7344d74ee89bb3c2c6f4d extends Template
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
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Payment/Preferences/payment_preferences.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  <div class=\"container\">
    ";
        // line 30
        if ( !($context["isSingleShopContext"] ?? null)) {
            // line 31
            echo "      <div class=\"alert alert-warning\" role=\"alert\">
        <p class=\"alert-text\">
          ";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Note that this page is available in a single shop context only. Switch context to work on it.", [], "Admin.Notifications.Info"), "html", null, true);
            echo "
        </p>
      </div>
    ";
        } elseif ((        // line 36
($context["paymentModulesCount"] ?? null) == 0)) {
            // line 37
            echo "      <div class=\"alert alert-warning\" role=\"alert\">
        <p class=\"alert-text\">
          ";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No payment module installed", [], "Admin.Payment.Notification"), "html", null, true);
            echo "
        </p>
      </div>
    ";
        } else {
            // line 43
            echo "      <div class=\"alert alert-info\" role=\"alert\">
        <p class=\"alert-text\">
          ";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This is where you decide what payment modules are available for different variations like your customers' currency, group, and country.", [], "Admin.Payment.Help"), "html", null, true);
            echo "
        </p>
        <p class=\"alert-text\">
          ";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A check mark indicates you want the payment module available.", [], "Admin.Payment.Help"), "html", null, true);
            echo "
          ";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If it is not checked then this means that the payment module is disabled.", [], "Admin.Payment.Help"), "html", null, true);
            echo "
        </p>
      </div>

      ";
            // line 53
            $this->loadTemplate("@PrestaShop/Admin/Improve/Payment/Preferences/Blocks/payment_preferences_form_block.html.twig", "@PrestaShop/Admin/Improve/Payment/Preferences/payment_preferences.html.twig", 53)->display($context);
            // line 54
            echo "    ";
        }
        // line 55
        echo "  </div>
";
    }

    // line 58
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/payment_preferences.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Payment/Preferences/payment_preferences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 61,  114 => 59,  110 => 58,  105 => 55,  102 => 54,  100 => 53,  93 => 49,  89 => 48,  83 => 45,  79 => 43,  72 => 39,  68 => 37,  66 => 36,  60 => 33,  56 => 31,  54 => 30,  51 => 29,  47 => 28,  36 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Payment/Preferences/payment_preferences.html.twig", "C:\\xampp\\htdocs\\tut\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Payment\\Preferences\\payment_preferences.html.twig");
    }
}
