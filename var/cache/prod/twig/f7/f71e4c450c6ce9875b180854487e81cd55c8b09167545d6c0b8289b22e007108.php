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

/* @Modules/ps_mbo/views/templates/admin/controllers/module_catalog/includes/modal_addons_connect.html.twig */
class __TwigTemplate_b56ed76fae822336cd3bcf777a6c5f9266d876216a53c7b732261262a0f86ea0 extends Template
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
        // line 19
        echo "<div id=\"module-modal-addons-connect\" class=\"modal  modal-vcenter fade\" role=\"dialog\" tabindex=\"-1\" aria-labelledby=\"module-modal-title\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Connect to Addons marketplace", [], "Modules.Mbo.Addons"), "html", null, true);
        echo "</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
        ";
        // line 28
        if ((($context["level"] ?? null) <= twig_constant("PrestaShopBundle\\Security\\Voter\\PageVoter::LEVEL_UPDATE"))) {
            // line 29
            echo "          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"alert alert-danger\" role=\"alert\">
                <p class=\"alert-text\">
                  ";
            // line 33
            echo twig_escape_filter($this->env, ($context["errorMessage"] ?? null), "html", null, true);
            echo "
                </p>
              </div>
            </div>
          </div>
        ";
        } else {
            // line 39
            echo "          <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                      ";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Link your shop to your Addons account to automatically receive important updates for the modules you purchased. Don't have an account yet?", [], "Modules.Mbo.Modulescatalog"), "html", null, true);
            echo "
                      <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, ($context["signUpLink"] ?? null), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign up now", [], "Modules.Mbo.Modulescatalog"), "html", null, true);
            echo "</a>
                  </p>
                  <p>
                      ";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If you created your account using Google, please follow the forgotten password procedure of Addons Marketplace to create your password : ", [], "Modules.Mbo.Modulescatalog"), "html", null, true);
            echo "
                      <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, ($context["passwordForgottenLink"] ?? null), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset your password", [], "Modules.Mbo.Modulescatalog"), "html", null, true);
            echo "</a>
                  </p>
                  <form id=\"addons-connect-form\"
                        action=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mbo_addons_login");
            echo "\"
                        method=\"POST\"
                        data-error-message=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("An error occurred while processing your request.", [], "Admin.Notifications.Error"), "html", null, true);
            echo "\"
                  >
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-email\">";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email address", [], "Admin.Global"), "html", null, true);
            echo "</label>
                    <input name=\"username_addons\" type=\"email\" class=\"form-control\" id=\"module-addons-connect-email\" placeholder=\"Email\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-password\">";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password", [], "Admin.Global"), "html", null, true);
            echo "</label>
                    <input name=\"password_addons\" type=\"password\" class=\"form-control\" id=\"module-addons-connect-password\" placeholder=\"Password\">
                  </div>
                  <div class=\"md-checkbox md-checkbox-inline\">
                    <label>
                      <input type=\"checkbox\" name=\"addons_remember_me\">
                      <i class=\"md-checkbox-control\"></i>
                        ";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remember me", [], "Modules.Mbo.Addons"), "html", null, true);
            echo "
                    </label>
                  </div>
                  <div class=\"text-center\">
                      <button type=\"submit\" class=\"btn btn-primary\">";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Let's go!", [], "Modules.Mbo.Addons"), "html", null, true);
            echo "</button>
                    <div id=\"addons_login_btn\" class=\"spinner\" style=\"display:none;\"></div>
                  </div>
                </form>
                <p class=\"text-center py-3\">
                    <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, ($context["passwordForgottenLink"] ?? null), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forgot your password?", [], "Admin.Global"), "html", null, true);
            echo "</a>
                </p>
              </div>
          </div>
        ";
        }
        // line 80
        echo "      </div>
    </div>
  </div>
</div>
<div id=\"module-modal-addons-logout\" class=\"modal  modal-vcenter fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Confirm logout", [], "Modules.Mbo.Addons"), "html", null, true);
        echo "</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
          <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                    ";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are about to log out your Addons account. You might miss important updates of Addons you've bought.", [], "Modules.Mbo.Addons"), "html", null, true);
        echo "
                  </p>
              </div>
          </div>
      </div>
      <div class=\"modal-footer\">
          <input type=\"button\" class=\"btn btn-default uppercase\" data-dismiss=\"modal\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "\">
          <a class=\"btn btn-primary uppercase\" href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mbo_addons_logout");
        echo "\" id=\"module-modal-addons-logout-ack\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes, log out", [], "Modules.Mbo.Modulescatalog"), "html", null, true);
        echo "</a>
      </div>

        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/includes/modal_addons_connect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 103,  180 => 102,  171 => 96,  161 => 89,  150 => 80,  140 => 75,  132 => 70,  125 => 66,  115 => 59,  108 => 55,  102 => 52,  97 => 50,  89 => 47,  85 => 46,  77 => 43,  73 => 42,  68 => 39,  59 => 33,  53 => 29,  51 => 28,  44 => 24,  37 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/includes/modal_addons_connect.html.twig", "C:\\xampp\\htdocs\\tut\\modules\\ps_mbo\\views\\templates\\admin\\controllers\\module_catalog\\includes\\modal_addons_connect.html.twig");
    }
}
