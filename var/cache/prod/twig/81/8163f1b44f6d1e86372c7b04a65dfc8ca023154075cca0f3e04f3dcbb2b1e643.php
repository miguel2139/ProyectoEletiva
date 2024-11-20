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

/* @PrestaShop/Admin/Improve/Payment/Preferences/Blocks/payment_preferences_form_block.html.twig */
class __TwigTemplate_48833b7304e4cacb3a655cdbf7bd69b7f141ee6d6f64fce8b6bc9d9965b22713 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'payment_preferences_form' => [$this, 'block_payment_preferences_form'],
            'payment_modules_currency_restrictions' => [$this, 'block_payment_modules_currency_restrictions'],
            'payment_modules_group_restrictions' => [$this, 'block_payment_modules_group_restrictions'],
            'payment_modules_country_restrictions' => [$this, 'block_payment_modules_country_restrictions'],
            'payment_modules_carrier_restrictions' => [$this, 'block_payment_modules_carrier_restrictions'],
            'payment_preferences_block_rest' => [$this, 'block_payment_preferences_block_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('payment_preferences_form', $context, $blocks);
    }

    public function block_payment_preferences_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["paymentPreferencesForm"] ?? null), 'form_start');
        echo "
  ";
        // line 29
        $this->displayBlock('payment_modules_currency_restrictions', $context, $blocks);
        // line 55
        echo "
  ";
        // line 56
        $this->displayBlock('payment_modules_group_restrictions', $context, $blocks);
        // line 82
        echo "
  ";
        // line 83
        $this->displayBlock('payment_modules_country_restrictions', $context, $blocks);
        // line 109
        echo "
  ";
        // line 110
        $this->displayBlock('payment_modules_carrier_restrictions', $context, $blocks);
        // line 135
        echo "
  ";
        // line 136
        $this->displayBlock('payment_preferences_block_rest', $context, $blocks);
        // line 139
        echo "
  ";
        // line 140
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["paymentPreferencesForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 29
    public function block_payment_modules_currency_restrictions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">euro_symbol</i>
        ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Currency restrictions", [], "Admin.Payment.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <p>
          <small class=\"form-text\">
            ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please mark each checkbox for the currency, or currencies, for which you want the payment module(s) to be available.", [], "Admin.Payment.Help"), "html", null, true);
        echo "
          </small>
        </p>

        <div class=\"form-group\">
          ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["paymentPreferencesForm"] ?? null), "currency_restrictions", [], "any", false, false, false, 43), 'widget');
        echo "
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\" id=\"form-currency-restrictions-save-button\">
            ";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
          </button>
        </div>
      </div>
    </div>
  ";
    }

    // line 56
    public function block_payment_modules_group_restrictions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">group</i>
        ";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group restrictions", [], "Admin.Payment.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <p>
          <small class=\"form-text\">
            ";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please mark each checkbox for the customer group(s), for which you want the payment module(s) to be available.", [], "Admin.Payment.Help"), "html", null, true);
        echo "
          </small>
        </p>

        <div class=\"form-group\">
          ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["paymentPreferencesForm"] ?? null), "group_restrictions", [], "any", false, false, false, 70), 'widget');
        echo "
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\" id=\"form-group-restrictions-save-button\">
            ";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
          </button>
        </div>
      </div>
    </div>
  ";
    }

    // line 83
    public function block_payment_modules_country_restrictions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 84
        echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">public</i>
        ";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Country restrictions", [], "Admin.Payment.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <p>
          <small class=\"form-text\">
            ";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please mark each checkbox for the country, or countries, in which you want the payment module(s) to be available.", [], "Admin.Payment.Help"), "html", null, true);
        echo "
          </small>
        </p>

        <div class=\"form-group\">
          ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["paymentPreferencesForm"] ?? null), "country_restrictions", [], "any", false, false, false, 97), 'widget');
        echo "
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\" id=\"form-country-restrictions-save-button\">
            ";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
          </button>
        </div>
      </div>
    </div>
  ";
    }

    // line 110
    public function block_payment_modules_carrier_restrictions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        echo "    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">local_shipping</i>
        ";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Carrier restrictions", [], "Admin.Payment.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <p>
          <small class=\"form-text\">
            ";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please mark each checkbox for the carrier, or carrier, for which you want the payment module(s) to be available.", [], "Admin.Payment.Help"), "html", null, true);
        echo "
          </small>
        </p>
        <div class=\"form-group\">
          ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["paymentPreferencesForm"] ?? null), "carrier_restrictions", [], "any", false, false, false, 123), 'widget');
        echo "
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\" id=\"form-carrier-restrictions-save-button\">
            ";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
          </button>
        </div>
      </div>
    </div>
  ";
    }

    // line 136
    public function block_payment_preferences_block_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 137
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["paymentPreferencesForm"] ?? null), 'rest');
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Payment/Preferences/Blocks/payment_preferences_form_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  268 => 137,  264 => 136,  254 => 129,  245 => 123,  238 => 119,  230 => 114,  225 => 111,  221 => 110,  211 => 103,  202 => 97,  194 => 92,  186 => 87,  181 => 84,  177 => 83,  167 => 76,  158 => 70,  150 => 65,  142 => 60,  137 => 57,  133 => 56,  123 => 49,  114 => 43,  106 => 38,  98 => 33,  93 => 30,  89 => 29,  83 => 140,  80 => 139,  78 => 136,  75 => 135,  73 => 110,  70 => 109,  68 => 83,  65 => 82,  63 => 56,  60 => 55,  58 => 29,  53 => 28,  46 => 27,  43 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Payment/Preferences/Blocks/payment_preferences_form_block.html.twig", "C:\\xampp\\htdocs\\tut\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Payment\\Preferences\\Blocks\\payment_preferences_form_block.html.twig");
    }
}
