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

/* @Modules/ps_mbo/views/templates/admin/error.html.twig */
class __TwigTemplate_4b475975152e80de8aec041b23a0e8465a412117c2301d6d43721b5bdc9efee4 extends Template
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
        // line 20
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 20), "isxmlhttprequest", [], "any", false, false, false, 20)) ? ("@Modules/ps_mbo/views/templates/admin/layout-ajax.html.twig") : ("@PrestaShop/Admin/layout.html.twig")), "@Modules/ps_mbo/views/templates/admin/error.html.twig", 20);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "  <div class=\"row\">
    <div class=\"col\">
      <div class=\"card\">
        <div class=\"card-body text-center\">
          <img class=\"img-responsive\"
               src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../modules/ps_mbo/views/img/error.svg"), "html", null, true);
        echo "\"
               alt=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("It looks like we have trouble connecting to Addons. Please refresh the page or check your firewall configuration.", [], "Modules.Mbo.Errors"), "html", null, true);
        echo "\"
          >
          <p class=\"mt-3 error-header\">
            ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("It looks like we have trouble connecting to Addons. Please refresh the page or check your firewall configuration.", [], "Modules.Mbo.Errors"), "html", null, true);
        echo "
          </p>
        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_mbo/views/templates/admin/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 32,  60 => 29,  56 => 28,  49 => 23,  45 => 22,  35 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_mbo/views/templates/admin/error.html.twig", "C:\\xampp\\htdocs\\tut\\modules\\ps_mbo\\views\\templates\\admin\\error.html.twig");
    }
}
