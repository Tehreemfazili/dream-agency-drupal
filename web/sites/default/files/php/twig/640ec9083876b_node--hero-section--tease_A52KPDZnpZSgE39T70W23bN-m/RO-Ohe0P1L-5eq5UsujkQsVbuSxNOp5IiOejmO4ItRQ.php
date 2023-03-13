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

/* themes/custom/dream_agency/templates/content/node--hero-section--teaser.html.twig */
class __TwigTemplate_0592b17eac2faa97d4a85d8b90e287c7 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 70, $this->source), "html", null, true);
        echo ">
  <div";
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "hero-section"], "method", false, false, true, 71), 71, $this->source), "html", null, true);
        echo ">
    <div class=\"hero-section__body\"><div>";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
        echo "</div>
    <div class=\"hero-banner\">
        <div class=\"hero-banner__content\">
            <div class=\"hero-banner__content-title\">";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_her", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo "</div>
            <div class=\"hero-banner__content-heading\">";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_tittle", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
        echo "</div>
            <div class=\"hero-banner__btn\"> ";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_button", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
        echo " </div>
            <div class=\"hero-banner__social-icons\"> ";
        // line 78
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_soc", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
        echo " </div>
        </div> 
        <div class=\"hero-banner__image\"> ";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
        echo " </div>  
    </div>
<div class=\"hero-footer__description\"> ";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_footer_description", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
        echo "</div>
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/dream_agency/templates/content/node--hero-section--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 82,  71 => 80,  66 => 78,  62 => 77,  58 => 76,  54 => 75,  48 => 72,  44 => 71,  39 => 70,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/dream_agency/templates/content/node--hero-section--teaser.html.twig", "/var/www/html/web/themes/custom/dream_agency/templates/content/node--hero-section--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 70);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
