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

/* themes/custom/dream_agency/templates/paragraphs/paragraph--social-media--default.html.twig */
class __TwigTemplate_bcb7e1581fc646da25cf687eaa838780 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 44
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 44), 44, $this->source))), 2 => ((        // line 45
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 45, $this->source)))) : ("")), 3 => (( !twig_get_attribute($this->env, $this->source,         // line 46
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 46)) ? ("paragraph--unpublished") : (""))];
        // line 49
        echo "
";
        // line 50
        $context["url"] = (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_url", [], "any", false, false, true, 50), 0, [], "any", false, false, true, 50)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#url"] ?? null) : null);
        // line 51
        $context["title"] = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_facebook", [], "any", false, false, true, 51), 0, [], "any", false, false, true, 51)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#text"] ?? null) : null);
        // line 52
        echo "

";
        // line 54
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "  <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 55), 55, $this->source), "html", null, true);
        echo ">
    ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 59
        echo "  </div>
";
    }

    // line 56
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "        <a href= ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 57, $this->source), "html", null, true);
        echo "><img src= ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (("/themes/custom/dream_agency/assets/svg/" . twig_lower_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 57, $this->source))) . ".png"), "html", null, true);
        echo "></a>
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/dream_agency/templates/paragraphs/paragraph--social-media--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 57,  76 => 56,  71 => 59,  69 => 56,  64 => 55,  57 => 54,  53 => 52,  51 => 51,  49 => 50,  46 => 49,  44 => 46,  43 => 45,  42 => 44,  41 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a paragraph.
 *
 * Available variables:
 * - paragraph: Full paragraph entity.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - paragraph.getCreatedTime() will return the paragraph creation timestamp.
 *   - paragraph.id(): The paragraph ID.
 *   - paragraph.bundle(): The type of the paragraph, for example, \"image\" or \"text\".
 *   - paragraph.getOwnerId(): The user ID of the paragraph author.
 *   See Drupal\\paragraphs\\Entity\\Paragraph for a full list of public properties
 *   and methods for the paragraph object.
 * - content: All paragraph items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - paragraphs: The current template type (also known as a \"theming hook\").
 *   - paragraphs--type-[type]: The current paragraphs type. For example, if the paragraph is an
 *     \"Image\" it would result in \"paragraphs--type--image\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - paragraphs--view-mode--[view_mode]: The View Mode of the paragraph; for example, a
 *     preview would result in: \"paragraphs--view-mode--preview\", and
 *     default: \"paragraphs--view-mode--default\".
 * - view_mode: View mode; for example, \"preview\" or \"full\".
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_paragraph()
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
    'paragraph',
    'paragraph--type--' ~ paragraph.bundle|clean_class,
    view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
    not paragraph.isPublished() ? 'paragraph--unpublished'
  ]
%}

{% set url = content.field_url.0[\"#url\"] %}
{% set title = content.field_facebook.0[\"#text\"] %}


{% block paragraph %}
  <div{{ attributes.addClass(classes) }}>
    {% block content %}
        <a href= {{ url }}><img src= {{ \"/themes/custom/dream_agency/assets/svg/\" ~ title|lower ~ \".png\" }}></a>
    {% endblock %}
  </div>
{% endblock paragraph %}
", "themes/custom/dream_agency/templates/paragraphs/paragraph--social-media--default.html.twig", "/var/www/html/web/themes/custom/dream_agency/templates/paragraphs/paragraph--social-media--default.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 42, "block" => 54);
        static $filters = array("clean_class" => 44, "escape" => 55, "lower" => 57);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['clean_class', 'escape', 'lower'],
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
