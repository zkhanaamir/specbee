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

/* themes/custom/specbee/templates/paragraphs/paragraph--conference-card.html.twig */
class __TwigTemplate_df5e86eda2fcb12397769b20832fed5d extends Template
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
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "<div class=\"card\">
    ";
        // line 52
        $this->displayBlock('content', $context, $blocks);
        // line 111
        echo "  </div>
";
    }

    // line 52
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "      <div class=\"card__image\">
        ";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_card_hero_image", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "
      </div>
      ";
        // line 56
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_card_price", [], "any", false, false, true, 56))) {
            // line 57
            echo "      <div class=\"card__category\">
        <div class=\"star\">
            <svg class=\"star__icon\">
                <use xlink:href=\"";
            // line 60
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["specbee_SvgSpritePath"] ?? null), 60, $this->source), "html", null, true);
            echo "#icon-fav\"></use>
            </svg>
        </div>
        <div class=\"price\">
            <a href=\"#\">";
            // line 64
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_card_price", [], "any", false, false, true, 64), "value", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo "</a>
        </div>
      </div>
      ";
        }
        // line 68
        echo "       
      <div class=\"card__content\">
        <h3 class=\"card__heading\">";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_card_title", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo "</h3>
        <div class=\"card__text-with-icon\">
            <svg class=\"card__icon\">
                <use xlink:href=\"";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["specbee_SvgSpritePath"] ?? null), 73, $this->source), "html", null, true);
        echo "#icon-agenda\"></use>
            </svg>
            <p class=\"card__text\">";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_card_topic", [], "any", false, false, true, 75), "value", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo "</p>
        </div>
        <div class=\"card__text-with-icon\">
            <svg class=\"card__icon\">
                <use xlink:href=\"";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["specbee_SvgSpritePath"] ?? null), 79, $this->source), "html", null, true);
        echo "#icon-date\"></use>
            </svg>
            <p class=\"card__text\">";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_card_date", [], "any", false, false, true, 81), "value", [], "any", false, false, true, 81), 81, $this->source), "d M Y"), "html", null, true);
        echo "</p>
        </div>
        <div class=\"card__text-with-icon\">
            <svg class=\"card__icon card__icon--location\">
                <use xlink:href=\"";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["specbee_SvgSpritePath"] ?? null), 85, $this->source), "html", null, true);
        echo "#icon-loaction\"></use>
            </svg>
            <p class=\"card__text\">";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_card_location", [], "any", false, false, true, 87), "value", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
        echo "</p>
        </div>
      </div>
      <ul class=\"card__connect\">
        <li class=\"connect\">
            <svg class=\"connect__icon\">
                <use xlink:href=\"";
        // line 93
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["specbee_SvgSpritePath"] ?? null), 93, $this->source), "html", null, true);
        echo "#icon-heart\"></use>
            </svg>
        </li>
        <li class=\"connect\">
            <svg class=\"connect__icon\">
                <use xlink:href=\"";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["specbee_SvgSpritePath"] ?? null), 98, $this->source), "html", null, true);
        echo "#icon-download\"></use>
            </svg>
        </li>
        <li class=\"connect\">
            <svg class=\"connect__icon\">
                <use xlink:href=\"";
        // line 103
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["specbee_SvgSpritePath"] ?? null), 103, $this->source), "html", null, true);
        echo "#icon-share\"></use>
            </svg>
        </li>
        <li class=\"details\">
            <a href=\"#\">View Details</a>
        </li>
      </ul>
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/specbee/templates/paragraphs/paragraph--conference-card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 103,  155 => 98,  147 => 93,  138 => 87,  133 => 85,  126 => 81,  121 => 79,  114 => 75,  109 => 73,  103 => 70,  99 => 68,  92 => 64,  85 => 60,  80 => 57,  78 => 56,  73 => 54,  70 => 53,  66 => 52,  61 => 111,  59 => 52,  56 => 51,  49 => 50,  46 => 49,  44 => 46,  43 => 45,  42 => 44,  41 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/specbee/templates/paragraphs/paragraph--conference-card.html.twig", "C:\\xampp\\htdocs\\specbee\\web\\themes\\custom\\specbee\\templates\\paragraphs\\paragraph--conference-card.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 42, "block" => 50, "if" => 56);
        static $filters = array("clean_class" => 44, "escape" => 54, "render" => 56, "date" => 81);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape', 'render', 'date'],
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
