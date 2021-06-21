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

/* themes/custom/icecream/templates/page.html.twig */
class __TwigTemplate_f017f203b68a8e439980bdd0b117eaedcdffd62588d4cacc07e253690902f6d2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '__internal_1d4e87efc90a893e4176e24554b867a485bc1c6859312132940387c459b93f34' => [$this, 'block___internal_1d4e87efc90a893e4176e24554b867a485bc1c6859312132940387c459b93f34'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/custom/icecream/templates/page.html.twig"));

        // line 1
        echo "<div class=\"container\">

\t<header role=\"banner\">
\t\t";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "
\t</header>

\t";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "

\t";
        // line 9
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 9), "top", [], "any", false, false, true, 9)) {
            // line 10
            echo "\t\t<div class=\"layout-banner-top\" role=\"banner\">
\t\t\t";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner_top", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        // line 14
        echo "
\t";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "

\t<main role=\"main\">
\t\t<a id=\"main-content\" tabindex=\"-1\"></a>
\t\t";
        // line 20
        echo "
\t\t<div class=\"layout-content\">
\t\t\t";
        // line 23
        echo "\t\t\t<p>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_number_format_filter($this->env, (twig_random($this->env) / 100), 1), "html", null, true);
        echo "</p>
\t\t\t<div>";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_round(3.1415899999999999, 2), "html", null, true);
        echo "</div>
\t\t\t";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "m/d/Y"), "html", null, true);
        echo "
\t\t\t";
        // line 26
        if ((twig_random($this->env, 10) < 5)) {
            // line 27
            echo "\t\t\t\t<p>Sayı 5 ten küçük</p>
\t\t\t";
        } else {
            // line 29
            echo "\t\t\t\t<p>sayı 5 ten büyük</p>
\t\t\t";
        }
        // line 31
        echo "\t\t\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_upper_filter($this->env,         $this->renderBlock("__internal_1d4e87efc90a893e4176e24554b867a485bc1c6859312132940387c459b93f34", $context, $blocks)), "html", null, true);
        // line 34
        echo "\t\t\t<div>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_lower_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, true, 34), 34, $this->source)));
        echo "</div>
\t\t\t<div>";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_round(3.1415899999999999, 0, "floor"), "html", null, true);
        echo "</div>
\t\t\t<a href=\"//default/\" title=\"";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
        echo "</a>
\t\t\t";
        // line 38
        $context["classes"] = [0 => "my-class", 1 => "my-other-class", 2 => "my-special-class"];
        // line 45
        echo "\t\t\t<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", [0 => "id", 1 => "myID"], "method", false, false, true, 45), 45, $this->source), "html", null, true);
        echo "></div>
\t\t\t<div";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", [0 => "data-bundle", 1 => twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "bundle", [], "any", false, false, true, 46)], "method", false, false, true, 46), 46, $this->source), "html", null, true);
        echo "></div>
\t\t\t<div";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 47), "removeClass", [0 => "my-special-class"], "method", false, false, true, 47), 47, $this->source), "html", null, true);
        echo ">Add class Remove class
\t\t\t\t";
        // line 48
        if (twig_get_attribute($this->env, $this->source, ($context["attribute"] ?? null), "hasClass", [0 => "myClass"], "method", false, false, true, 48)) {
            // line 49
            echo "\t\t\t\t\t<p>evet bu sınıf var</p>
\t\t\t\t";
        }
        // line 51
        echo "\t\t\t</div>


\t\t\t";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "
\t\t\t";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
        echo "
\t\t</div>
\t\t";
        // line 58
        echo "

\t</main>

\t";
        // line 62
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 62), "bottom", [], "any", false, false, true, 62)) {
            // line 63
            echo "\t\t<div class=\"layout-banner-bottom\" role=\"banner\">
\t\t\t";
            // line 64
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner_bottom", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        // line 67
        echo "
\t";
        // line 68
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 68)) {
            // line 69
            echo "\t\t<footer role=\"contentinfo\">
\t\t\t";
            // line 70
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
            echo "


\t\t</footer>
\t";
        }
        // line 75
        echo "</div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 31
    public function block___internal_1d4e87efc90a893e4176e24554b867a485bc1c6859312132940387c459b93f34($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "__internal_1d4e87efc90a893e4176e24554b867a485bc1c6859312132940387c459b93f34"));

        // line 32
        echo "\t\t\t\tAll of this text will become uppercase.
\t\t\t";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/icecream/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 32,  201 => 31,  193 => 75,  185 => 70,  182 => 69,  180 => 68,  177 => 67,  171 => 64,  168 => 63,  166 => 62,  160 => 58,  155 => 55,  151 => 54,  146 => 51,  142 => 49,  140 => 48,  136 => 47,  132 => 46,  127 => 45,  125 => 38,  119 => 36,  115 => 35,  110 => 34,  107 => 31,  103 => 29,  99 => 27,  97 => 26,  93 => 25,  89 => 24,  84 => 23,  80 => 20,  73 => 15,  70 => 14,  64 => 11,  61 => 10,  59 => 9,  54 => 7,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">

\t<header role=\"banner\">
\t\t{{ page.header }}
\t</header>

\t{{ page.primary_menu }}

\t{% if page.banner.top %}
\t\t<div class=\"layout-banner-top\" role=\"banner\">
\t\t\t{{ page.banner_top}}
\t\t</div>
\t{% endif %}

\t{{ page.help }}

\t<main role=\"main\">
\t\t<a id=\"main-content\" tabindex=\"-1\"></a>
\t\t{# link is in html.html.twig #}

\t\t<div class=\"layout-content\">
\t\t\t{# {{ dump(variable_key) }} #}
\t\t\t<p>{{ (random()/100)|number_format(1) }}</p>
\t\t\t<div>{{ 3.14159|round(2) }}</div>
\t\t\t{{ 'now'|date('m/d/Y') }}
\t\t\t{% if random(10) < 5 %}
\t\t\t\t<p>Sayı 5 ten küçük</p>
\t\t\t{% else %}
\t\t\t\t<p>sayı 5 ten büyük</p>
\t\t\t{% endif %}
\t\t\t{% filter upper %}
\t\t\t\tAll of this text will become uppercase.
\t\t\t{% endfilter %}
\t\t\t<div>{{ user.name|lower|escape }}</div>
\t\t\t<div>{{ 3.14159|round(method=\"floor\") }}</div>
\t\t\t<a href=\"//default/\" title=\"{{ 'Home'|t }}\">{{ 'Home'|t }}</a>
\t\t\t{%
\t\t\t  set classes = [
\t\t\t    'my-class',
\t\t\t    'my-other-class',
\t\t\t    'my-special-class',

\t\t\t  ]
\t\t\t%}
\t\t\t<div{{attributes.setAttribute('id','myID')}}></div>
\t\t\t<div{{attributes.setAttribute('data-bundle',node.bundle)}}></div>
\t\t\t<div{{attributes.addClass(classes).removeClass('my-special-class')}}>Add class Remove class
\t\t\t\t{% if attribute.hasClass('myClass') %}
\t\t\t\t\t<p>evet bu sınıf var</p>
\t\t\t\t{% endif %}
\t\t\t</div>


\t\t\t{{ page.content }}
\t\t\t{{ page.content_bottom }}
\t\t</div>
\t\t{# /.layout-content #}


\t</main>

\t{% if page.banner.bottom %}
\t\t<div class=\"layout-banner-bottom\" role=\"banner\">
\t\t\t{{ page.banner_bottom}}
\t\t</div>
\t{% endif %}

\t{% if page.footer %}
\t\t<footer role=\"contentinfo\">
\t\t\t{{ page.footer }}


\t\t</footer>
\t{% endif %}
</div>
{# /.layout-container #}
", "themes/custom/icecream/templates/page.html.twig", "/var/www/html/web/themes/custom/icecream/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 9, "filter" => 31, "set" => 38);
        static $filters = array("escape" => 4, "number_format" => 23, "round" => 24, "date" => 25, "upper" => 31, "lower" => 34, "t" => 36);
        static $functions = array("random" => 23);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'filter', 'set'],
                ['escape', 'number_format', 'round', 'date', 'upper', 'lower', 't'],
                ['random']
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
