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

/* themes/custom/specbee/templates/node/node--conferences.html.twig */
class __TwigTemplate_6657988c9d356b8804c22ecda20fdd40 extends Template
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
        echo "
<section class=\"conferences\">
    <div class=\"container\">
          <div class=\"header\">
              <h2 class=\"header__heading text-center\">";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_heading", [], "any", false, false, true, 74), "value", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        echo "</h2>
              <p class=\"header__description text-center\">";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_description", [], "any", false, false, true, 75), "value", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo "</p>
          </div>
          <div class=\"conference\">
            <ul class=\"conference__tab-container\">
              ";
        // line 80
        echo "              
              ";
        // line 81
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_featured_tab", [], "any", false, false, true, 81), "value", [], "any", false, false, true, 81)) {
            // line 82
            echo "              <li class=\"conference__tab conference__tab--active\" data-tab=\"1\">
                ";
            // line 83
            $context["field_definition"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_featured_tab", [], "any", false, false, true, 83), "getFieldDefinition", [], "method", false, false, true, 83);
            // line 84
            echo "                <span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field_definition"] ?? null), "getLabel", [], "method", false, false, true, 84), 84, $this->source), "html", null, true);
            echo "</span>
              </li>
              ";
        }
        // line 87
        echo "              ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_recommended_tab", [], "any", false, false, true, 87), "value", [], "any", false, false, true, 87)) {
            // line 88
            echo "              <li class=\"conference__tab\" data-tab=\"2\">
                ";
            // line 89
            $context["field_definition"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_recommended_tab", [], "any", false, false, true, 89), "getFieldDefinition", [], "method", false, false, true, 89);
            // line 90
            echo "                <span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field_definition"] ?? null), "getLabel", [], "method", false, false, true, 90), 90, $this->source), "html", null, true);
            echo "</span>
              </li>
              ";
        }
        // line 93
        echo "              ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_past_tab", [], "any", false, false, true, 93), "value", [], "any", false, false, true, 93)) {
            // line 94
            echo "              <li class=\"conference__tab\" data-tab=\"3\">
                ";
            // line 95
            $context["field_definition"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_past_tab", [], "any", false, false, true, 95), "getFieldDefinition", [], "method", false, false, true, 95);
            // line 96
            echo "                <span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field_definition"] ?? null), "getLabel", [], "method", false, false, true, 96), 96, $this->source), "html", null, true);
            echo "</span>
              </li>
              ";
        }
        // line 99
        echo "          </ul>
          
          <div class=\"conference__content conference__content--1 conference__content--active\">
              <div class=\"card-slider\">
                ";
        // line 103
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_featured_tab", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
        echo "
              </div>
          </div>
          <div class=\"conference__content conference__content--2\">
              <div class=\"card-slider\">
              ";
        // line 108
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_recommended_tab", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
        echo "
            </div>
          </div>
          <div class=\"conference__content conference__content--3\">
              <div class=\"card-slider\">
                ";
        // line 113
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_past_tab", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
        echo "
              </div>
          </div>
        </div>
    </div>

  </section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/specbee/templates/node/node--conferences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 113,  117 => 108,  109 => 103,  103 => 99,  96 => 96,  94 => 95,  91 => 94,  88 => 93,  81 => 90,  79 => 89,  76 => 88,  73 => 87,  66 => 84,  64 => 83,  61 => 82,  59 => 81,  56 => 80,  49 => 75,  45 => 74,  39 => 70,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/specbee/templates/node/node--conferences.html.twig", "C:\\xampp\\htdocs\\specbee\\web\\themes\\custom\\specbee\\templates\\node\\node--conferences.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 81, "set" => 83);
        static $filters = array("escape" => 74);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
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
