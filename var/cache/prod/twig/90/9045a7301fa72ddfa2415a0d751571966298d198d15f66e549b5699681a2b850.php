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

/* @PrestaShop/Admin/ProductImage/form.html.twig */
class __TwigTemplate_7f659b43d98b3b46c35a944fee35c99abd8ea55706dbfe6989804d85c07c32b0 extends Template
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
        echo "<button type=\"button\" class=\"float-right close\" onclick=\"formImagesProduct.close()\"><i class=\"material-icons\">close</i></button>

<div class=\"row\">
    <div class=\"col-xl-7\">
      ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "cover", [], "any", false, false, false, 29), 'widget');
        echo "
    </div>
    <div class=\"col-xl-4\">
        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "base_image_url", [], "any", false, false, false, 32), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "format", [], "any", false, false, false, 32), "html", null, true);
        echo "\" class=\"btn btn-link btn-sm open-image\" target=\"_blank\">
          <i class=\"material-icons\">zoom_in</i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Zoom", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
        </a>
    </div>
</div>

<label class=\"control-label\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "legend", [], "any", false, false, false, 38), "vars", [], "any", false, false, false, 38), "label", [], "any", false, false, false, 38), "html", null, true);
        echo "</label>
";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "legend", [], "any", false, false, false, 39), 'widget');
        echo "
";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "legend", [], "any", false, false, false, 40), 'errors');
        echo "

<div class=\"actions\">
    <button type=\"button\" class=\"btn btn-sm btn-primary pull-sm-right\" onclick=\"formImagesProduct.send(";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "id", [], "any", false, false, false, 43), "html", null, true);
        echo ")\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save image settings", [], "Admin.Actions"), "html", null, true);
        echo "</button>
    <button type=\"button\" class=\"btn btn-sm btn-link\" onclick=\"formImagesProduct.delete(";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "id", [], "any", false, false, false, 44), "html", null, true);
        echo ")\"><i class=\"material-icons\">delete</i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions"), "html", null, true);
        echo "</button>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/ProductImage/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 44,  77 => 43,  71 => 40,  67 => 39,  63 => 38,  55 => 33,  49 => 32,  43 => 29,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/ProductImage/form.html.twig", "C:\\xampp\\htdocs\\tut\\src\\PrestaShopBundle\\Resources\\views\\Admin\\ProductImage\\form.html.twig");
    }
}
