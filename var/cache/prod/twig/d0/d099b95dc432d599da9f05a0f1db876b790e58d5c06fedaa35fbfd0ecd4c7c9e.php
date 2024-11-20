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

/* @Modules/psxdesign/views/templates/admin/themes/Blocks/CurrentTheme/current_theme_description.html.twig */
class __TwigTemplate_e6cbf5a9251ea4bef86f99a90f20edc30290f2e099d9858c6f330eac120576c1 extends Template
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
<div class=\"col-12 col-lg-4\">
    <h2>";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Current theme", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</h2>
    <p class=\"text-muted\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The theme defines the appearance of your site.", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "
    </p>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/admin/themes/Blocks/CurrentTheme/current_theme_description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 29,  41 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psxdesign/views/templates/admin/themes/Blocks/CurrentTheme/current_theme_description.html.twig", "C:\\xampp\\htdocs\\tut\\modules\\psxdesign\\views\\templates\\admin\\themes\\Blocks\\CurrentTheme\\current_theme_description.html.twig");
    }
}
