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

/* @PrestaShop/Admin/Configure/AdvancedParameters/system_information.html.twig */
class __TwigTemplate_943a6e89fa8be99f4caa567b00470be3c8880f0793b0360c72ba73328ab43e45 extends Template
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
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/system_information.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "<div class=\"row\">
  <div class=\"col-lg-6\">
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configuration information", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"card-text\">
          <p>";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This information must be provided when you report an issue on GitHub or on the forum.", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</p>
        </div>
      </div>
    </div>

    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> ";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Server information", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"card-text\">
          ";
        // line 48
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "uname", [], "any", false, false, false, 48))) {
            // line 49
            echo "            <p>
              <strong>";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Server information:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "uname", [], "any", false, false, false, 50), "html", null, true);
            echo "
            </p>
          ";
        }
        // line 53
        echo "          <p>
            <strong>";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Server software version:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "server", [], "any", false, false, false, 54), "version", [], "any", false, false, false, 54), "html", null, true);
        echo "
          </p>
          <p>
            <strong>";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PHP version:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "server", [], "any", false, false, false, 57), "php", [], "any", false, false, false, 57), "version", [], "any", false, false, false, 57), "html", null, true);
        echo "
          </p>
          <p>
            <strong>";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Memory limit:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "server", [], "any", false, false, false, 60), "php", [], "any", false, false, false, 60), "memoryLimit", [], "any", false, false, false, 60), "html", null, true);
        echo "
          </p>
          <p>
            <strong>";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Max execution time:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "server", [], "any", false, false, false, 63), "php", [], "any", false, false, false, 63), "maxExecutionTime", [], "any", false, false, false, 63), "html", null, true);
        echo "
          </p>
          <p>
            <strong>";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Upload Max File size:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "server", [], "any", false, false, false, 66), "php", [], "any", false, false, false, 66), "maxFileSizeUpload", [], "any", false, false, false, 66), "html", null, true);
        echo "
          </p>
          ";
        // line 68
        if (twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "instaWebInstalled", [], "any", false, false, false, 68)) {
            // line 69
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PageSpeed module for Apache installed (mod_instaweb)", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</p>
          ";
        }
        // line 71
        echo "        </div>
      </div>
    </div>

    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> ";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Database information", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"card-text\">
          <p>
            <strong>";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MySQL version:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "database", [], "any", false, false, false, 82), "version", [], "any", false, false, false, 82), "html", null, true);
        echo "
          </p>
          <p>
            <strong>";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MySQL server:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "database", [], "any", false, false, false, 85), "server", [], "any", false, false, false, 85), "html", null, true);
        echo "
          </p>
          <p>
            <strong>";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MySQL name:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "database", [], "any", false, false, false, 88), "name", [], "any", false, false, false, 88), "html", null, true);
        echo "
          </p>
          <p>
            <strong>";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MySQL user:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "database", [], "any", false, false, false, 91), "user", [], "any", false, false, false, 91), "html", null, true);
        echo "
          </p>
          <p>
            <strong>";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tables prefix:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "database", [], "any", false, false, false, 94), "prefix", [], "any", false, false, false, 94), "html", null, true);
        echo "
          </p>
          <p>
            <strong>";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MySQL engine:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "database", [], "any", false, false, false, 97), "engine", [], "any", false, false, false, 97), "html", null, true);
        echo "
          </p>
          <p>
            <strong>";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MySQL driver:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "database", [], "any", false, false, false, 100), "driver", [], "any", false, false, false, 100), "html", null, true);
        echo "
          </p>
        </div>
      </div>
    </div>

    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> ";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of overrides", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"card-text\">
          <ul>
            ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "overrides", [], "any", false, false, false, 113));
        foreach ($context['_seq'] as $context["_key"] => $context["override"]) {
            // line 114
            echo "              <li>";
            echo twig_escape_filter($this->env, $context["override"], "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['override'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class=\"col-lg-6\">
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> ";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Store information", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"card-text\">
          <p>
            <strong>";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PrestaShop version:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "shop", [], "any", false, false, false, 129), "version", [], "any", false, false, false, 129), "html", null, true);
        echo "
          </p>
          <p>
            <strong>";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Shop URL:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "shop", [], "any", false, false, false, 132), "url", [], "any", false, false, false, 132), "html", null, true);
        echo "
          </p>
          <p>
            <strong>";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Shop path:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "shop", [], "any", false, false, false, 135), "path", [], "any", false, false, false, 135), "html", null, true);
        echo "
          </p>
          <p>
            <strong>";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Current theme in use:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "shop", [], "any", false, false, false, 138), "theme", [], "any", false, false, false, 138), "html", null, true);
        echo "
          </p>
        </div>
      </div>
    </div>

    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> ";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mail configuration", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"card-text\">
          ";
        // line 150
        if (twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "isNativePHPmail", [], "any", false, false, false, 150)) {
            // line 151
            echo "            <p>
              <strong>";
            // line 152
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mail method:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are using /usr/sbin/sendmail", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "
            </p>
          ";
        } else {
            // line 155
            echo "            <p>
              <strong>";
            // line 156
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mail method:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are using your own SMTP parameters.", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "
            </p>
            <p>
              <strong>";
            // line 159
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SMTP server:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "smtp", [], "any", false, false, false, 159), "server", [], "any", false, false, false, 159), "html", null, true);
            echo "
            </p>
            <p>
              <strong>";
            // line 162
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SMTP username:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong>
              ";
            // line 163
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "smtp", [], "any", false, false, false, 163), "user", [], "any", false, false, false, 163))) {
                // line 164
                echo "                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Defined", [], "Admin.Advparameters.Feature"), "html", null, true);
                echo "
              ";
            } else {
                // line 166
                echo "                <span style=\"color:red;\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not defined", [], "Admin.Advparameters.Feature"), "html", null, true);
                echo "</span>
              ";
            }
            // line 168
            echo "            </p>
            <p>
              <strong>";
            // line 170
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SMTP password:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong>
              ";
            // line 171
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "smtp", [], "any", false, false, false, 171), "password", [], "any", false, false, false, 171))) {
                // line 172
                echo "                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Defined", [], "Admin.Advparameters.Feature"), "html", null, true);
                echo "
              ";
            } else {
                // line 174
                echo "                <span style=\"color:red;\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not defined", [], "Admin.Advparameters.Feature"), "html", null, true);
                echo "</span>
              ";
            }
            // line 176
            echo "            </p>
            <p>
              <strong>";
            // line 178
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Encryption:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "smtp", [], "any", false, false, false, 178), "encryption", [], "any", false, false, false, 178), "html", null, true);
            echo "
            </p>
            <p>
              <strong>";
            // line 181
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SMTP port:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["system"] ?? null), "smtp", [], "any", false, false, false, 181), "port", [], "any", false, false, false, 181), "html", null, true);
            echo "
            </p>
          ";
        }
        // line 184
        echo "        </div>
      </div>
    </div>

    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> ";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your information", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"card-text\">
          <p>
            <strong>";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your web browser:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, ($context["userAgent"] ?? null), "html", null, true);
        echo "
          </p>
        </div>
      </div>
    </div>

    <div class=\"card\" id=\"checkConfiguration\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> ";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Check your configuration", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"card-text\">
          ";
        // line 207
        if ((twig_get_attribute($this->env, $this->source, ($context["requirements"] ?? null), "failRequired", [], "any", false, false, false, 207) == false)) {
            // line 208
            echo "            <p>
              <strong>";
            // line 209
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Required parameters:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong>
              <span class=\"text-success\">";
            // line 210
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("OK", [], "Admin.Advparameters.Notification"), "html", null, true);
            echo "</span>
            </p>
          ";
        } else {
            // line 213
            echo "            <p>
              <strong>";
            // line 214
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Required parameters:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong>
              <span class=\"text-danger\">";
            // line 215
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please fix the following error(s)", [], "Admin.Advparameters.Notification"), "html", null, true);
            echo "</span>
            </p>
            <ul>
              ";
            // line 218
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["requirements"] ?? null), "testsRequired", [], "any", false, false, false, 218));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 219
                echo "                ";
                if (("fail" == $context["value"])) {
                    // line 220
                    echo "                  <li>";
                    echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["requirements"] ?? null), "testsErrors", [], "any", false, false, false, 220)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null), "html", null, true);
                    echo "</li>
                ";
                }
                // line 222
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 223
            echo "            </ul>
          ";
        }
        // line 225
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["requirements"] ?? null), "failOptional", [], "any", true, true, false, 225)) {
            // line 226
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, ($context["requirements"] ?? null), "failOptional", [], "any", false, false, false, 226) == false)) {
                // line 227
                echo "              <p>
                <strong>";
                // line 228
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional parameters:", [], "Admin.Advparameters.Feature"), "html", null, true);
                echo "</strong>
                <span class=\"text-success\">";
                // line 229
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("OK", [], "Admin.Advparameters.Notification"), "html", null, true);
                echo "</span>
              </p>
            ";
            } else {
                // line 232
                echo "              <p>
                <strong>";
                // line 233
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional parameters:", [], "Admin.Advparameters.Feature"), "html", null, true);
                echo "</strong>
                <span class=\"text-danger\">";
                // line 234
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please fix the following error(s)", [], "Admin.Advparameters.Notification"), "html", null, true);
                echo "</span>
              </p>
              <ul>
                ";
                // line 237
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["requirements"] ?? null), "testsOptional", [], "any", false, false, false, 237));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 238
                    echo "                  ";
                    if (("fail" == $context["value"])) {
                        // line 239
                        echo "                    <li>";
                        echo twig_escape_filter($this->env, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["requirements"] ?? null), "testsErrors", [], "any", false, false, false, 239)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["key"]] ?? null) : null), "html", null, true);
                        echo "</li>
                  ";
                    }
                    // line 241
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 242
                echo "              </ul>
            ";
            }
            // line 244
            echo "          ";
        }
        // line 245
        echo "        </div>
      </div>
    </div>
  </div>
</div>

<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">info_outline</i> ";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of changed files", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"card-text\" id=\"changedFiles\">
      <i class=\"material-icons\">loop</i> ";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Checking files...", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "
    </div>
  </div>
</div>

<script>
  \$(document).ready(function()
  {
    var translations = {
      missing: '";
        // line 266
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Missing files", [], "Admin.Advparameters.Notification"), "js"), "html", null, true);
        echo "',
      updated: '";
        // line 267
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Updated files", [], "Admin.Advparameters.Notification"), "js"), "html", null, true);
        echo "',
      changesDetected: '";
        // line 268
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Changed/missing files have been detected.", [], "Admin.Advparameters.Notification"), "js"), "html", null, true);
        echo "',
      noChangeDetected: '";
        // line 269
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No change has been detected in your files.", [], "Admin.Advparameters.Notification"), "js"), "html", null, true);
        echo "'
    };

    \$.ajax({
      type: 'POST',
      url: '";
        // line 274
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_system_information_check_files");
        echo "',
      data: {},
      dataType: 'json',
      success: function(json)
      {
        var tab = {
          'missing': translations.missing,
          'updated': translations.updated,
        };

        if (json.missing.length || json.updated.length) {
          \$('#changedFiles').html('<div class=\"alert alert-warning\" role=\"alert\"><p class=\"alert-text\">' + translations.changesDetected + '</p></div>');
        } else {
          \$('#changedFiles').html('<div class=\"alert alert-success\" role=\"alert\"><p class=\"alert-text\">' + translations.noChangeDetected + '</p></div>');
        }

        \$.each(tab, function(key, lang) {
          if (json[key].length) {
            var html = \$('<ul>').attr('id', key+'_files');
            \$(json[key]).each(function(key, file) {
              html.append(\$('<li>').html(file))
            });
            \$('#changedFiles')
              .append(\$('<h4>').html(lang+' ('+json[key].length+')'))
              .append(html);
          }
        });
      }
    });
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/system_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  589 => 274,  581 => 269,  577 => 268,  573 => 267,  569 => 266,  557 => 257,  550 => 253,  540 => 245,  537 => 244,  533 => 242,  527 => 241,  521 => 239,  518 => 238,  514 => 237,  508 => 234,  504 => 233,  501 => 232,  495 => 229,  491 => 228,  488 => 227,  485 => 226,  482 => 225,  478 => 223,  472 => 222,  466 => 220,  463 => 219,  459 => 218,  453 => 215,  449 => 214,  446 => 213,  440 => 210,  436 => 209,  433 => 208,  431 => 207,  424 => 203,  411 => 195,  403 => 190,  395 => 184,  387 => 181,  379 => 178,  375 => 176,  369 => 174,  363 => 172,  361 => 171,  357 => 170,  353 => 168,  347 => 166,  341 => 164,  339 => 163,  335 => 162,  327 => 159,  319 => 156,  316 => 155,  308 => 152,  305 => 151,  303 => 150,  296 => 146,  283 => 138,  275 => 135,  267 => 132,  259 => 129,  251 => 124,  241 => 116,  232 => 114,  228 => 113,  220 => 108,  207 => 100,  199 => 97,  191 => 94,  183 => 91,  175 => 88,  167 => 85,  159 => 82,  151 => 77,  143 => 71,  137 => 69,  135 => 68,  128 => 66,  120 => 63,  112 => 60,  104 => 57,  96 => 54,  93 => 53,  85 => 50,  82 => 49,  80 => 48,  73 => 44,  63 => 37,  56 => 33,  50 => 29,  46 => 28,  35 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/system_information.html.twig", "C:\\xampp\\htdocs\\tut\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\AdvancedParameters\\system_information.html.twig");
    }
}
