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

/* @webprofiler/Collector/theme.html.twig */
class __TwigTemplate_5515b67fdc74f9af70c4389c56a0ed9ddbc53fe858edf3c8c4a926c8b6100894 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'panel' => [$this, 'block_panel'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Collector/theme.html.twig"));

        // line 1
        $this->displayBlock('toolbar', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "    <a href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\webprofiler\Twig\Extension\ProfilerExtension']->getIdeLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "themeNegotiator", [], "any", false, false, true, 3), "class", [], "any", false, false, true, 3), "file", [], "any", false, false, true, 3), 3, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "themeNegotiator", [], "any", false, false, true, 3), "class", [], "any", false, false, true, 3), "line", [], "any", false, false, true, 3), 3, $this->source)));
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\webprofiler\Twig\Extension\ProfilerExtension']->getAbbr($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "themeNegotiator", [], "any", false, false, true, 3), "class", [], "any", false, false, true, 3), "class", [], "any", false, false, true, 3), 3, $this->source)));
        echo "
        ::";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "themeNegotiator", [], "any", false, false, true, 4), "class", [], "any", false, false, true, 4), "method", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "</a>
    ";
        $context["negotiator"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 6
        echo "    ";
        $context["time"] = ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "templatecount", [], "any", false, false, true, 6)) ? (sprintf("%0.0f ms", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "time", [], "any", false, false, true, 6), 6, $this->source))) : ("n/a"));
        // line 7
        echo "    ";
        ob_start();
        // line 8
        echo "    <a href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("webprofiler.dashboard", ["profile" => ($context["token"] ?? null)], ["fragment" => "theme"]), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Theme"));
        echo "\">
        <img width=\"20\" height=\"28\" alt=\"";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Theme"));
        echo "\"
             src=\"data:image/png;base64,";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "icon", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "\"/>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "activeTheme", [], "any", false, false, true, 11), "name", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "</span>
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 14
        echo "    ";
        ob_start();
        // line 15
        echo "
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Name"));
        echo "</b>
        <span>";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "activeTheme", [], "any", false, false, true, 18), "name", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Engine"));
        echo "</b>
        <span>";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "activeTheme", [], "any", false, false, true, 22), "engine", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Negotiator"));
        echo "</b>
        <span>";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["negotiator"] ?? null), 26, $this->source), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Render Time"));
        echo "</b>
        <span>";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["time"] ?? null), 30, $this->source), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Template Calls"));
        echo "</b>
        <span>";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "templatecount", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Block Calls"));
        echo "</b>
        <span>";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "blockcount", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Macro Calls"));
        echo "</b>
        <span>";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "macrocount", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
        echo "</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (((isset($context["icon"]) || array_key_exists("icon", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 47, $this->source), "")) : ("")), "html", null, true);
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (((isset($context["text"]) || array_key_exists("text", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 48, $this->source), "")) : ("")), "html", null, true);
        echo "</div>
    </div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 52
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 53
        echo "    <script id=\"theme\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Theme"));
        echo "</h2>
        <div class=\"panel__container\">
            <table class=\"table--fixed\">
                <tr>
                    <th>";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Name"));
        echo "</th>
                    <td><%- data.activeTheme.name %> (<a href=\"/admin/appearance/settings/bartik\">";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Edit"));
        echo ")</a>
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Engine"));
        echo "</th>
                    <td><%- data.activeTheme.engine %></td>
                </tr>
                <tr>
                    <th>";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Base theme"));
        echo "</th>
                    <td><%- data.activeTheme.extension.base_theme %></td>
                </tr>
                <tr>
                    <th>";
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Regions"));
        echo "</th>
                    <td><%= Drupal.webprofiler.helpers.frm(data.activeTheme.regions) %></td>
                </tr>
                <tr>
                    <th>";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Libraries"));
        echo "</th>
                    <td><%= Drupal.webprofiler.helpers.frm(data.activeTheme.libraries) %></td>
                </tr>
                <tr>
                    <th>";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Style sheets removed"));
        echo "</th>
                    <td><%= Drupal.webprofiler.helpers.frm(data.activeTheme.styleSheetsRemove) %></td>
                </tr>
                <tr>
                    <th>";
        // line 83
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Path"));
        echo "</th>
                    <td><%- data.activeTheme.path %></td>
                </tr>
                <tr>
                    <th>";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Negotiator"));
        echo "</th>
                    <td><%= Drupal.webprofiler.helpers.classLink(data.negotiator.class) %></td>
                </tr>
            </table>
        </div>

        <div class=\"panel__container\">
            <ul class=\"list--inline\">
                <li><b>";
        // line 95
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Twig statistics"));
        echo "</b></li>
            </ul>

            <table class=\"table--fixed\">
                <tr>
                    <th>";
        // line 100
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Total Render Time"));
        echo "</th>
                    <td><%- Drupal.webprofiler.helpers.printTime(data.twig.render_time) %></td>
                </tr>
                <tr>
                    <th>";
        // line 104
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Template Calls"));
        echo "</th>
                    <td><%- data.twig.template_count %></td>
                </tr>
                <tr>
                    <th>";
        // line 108
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Block Calls"));
        echo "</th>
                    <td><%- data.twig.block_count %></td>
                </tr>
                <tr>
                    <th>";
        // line 112
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Macro Calls"));
        echo "</th>
                    <td><%- data.twig.macro_count %></td>
                </tr>
            </table>
        </div>

        <div class=\"panel__container\">
            <ul class=\"list--inline\">
                <li><b>";
        // line 120
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Twig rendered templates"));
        echo "</b></li>
            </ul>

            <table class=\"table--fixed\">
                <thead>
                <tr>
                    <th>";
        // line 126
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("template"));
        echo "</th>
                    <th>";
        // line 127
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("count"));
        echo "</th>
                </tr>
                </thead>
                <% _.each( data.twig.templates, function( item, key ){ %>
                <tr>
                    <th><%- key %></th>
                    <td><%- item %></td>
                </tr>
                <% }); %>
            </table>
        </div>

        <div class=\"panel__container\">
            <ul class=\"list--inline\">
                <li><b>";
        // line 141
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Twig callgraph"));
        echo "</b></li>
            </ul>

            <%= data.twig.callgraph %>
        </div>
    </script>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  351 => 141,  334 => 127,  330 => 126,  321 => 120,  310 => 112,  303 => 108,  296 => 104,  289 => 100,  281 => 95,  270 => 87,  263 => 83,  256 => 79,  249 => 75,  242 => 71,  235 => 67,  228 => 63,  221 => 59,  217 => 58,  210 => 54,  207 => 53,  200 => 52,  190 => 48,  186 => 47,  182 => 45,  176 => 42,  172 => 41,  166 => 38,  162 => 37,  156 => 34,  152 => 33,  146 => 30,  142 => 29,  136 => 26,  132 => 25,  126 => 22,  122 => 21,  116 => 18,  112 => 17,  108 => 15,  105 => 14,  99 => 11,  95 => 10,  91 => 9,  84 => 8,  81 => 7,  78 => 6,  73 => 4,  66 => 3,  63 => 2,  56 => 1,  49 => 52,  46 => 51,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block toolbar %}
    {% set negotiator %}
    <a href=\"{{ idelink(collector.themeNegotiator.class.file, collector.themeNegotiator.class.line)|raw }}\">{{ abbr(collector.themeNegotiator.class.class)|raw }}
        ::{{ collector.themeNegotiator.class.method }}</a>
    {% endset %}
    {% set time = collector.templatecount ? '%0.0f ms'|format(collector.time) : 'n/a' %}
    {% set icon %}
    <a href=\"{{ url(\"webprofiler.dashboard\", {profile: token}, {fragment: 'theme'}) }}\" title=\"{{ 'Theme'|t }}\">
        <img width=\"20\" height=\"28\" alt=\"{{ 'Theme'|t }}\"
             src=\"data:image/png;base64,{{ collector.icon }}\"/>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">{{ collector.activeTheme.name }}</span>
    </a>
    {% endset %}
    {% set text %}

    <div class=\"sf-toolbar-info-piece\">
        <b>{{ 'Name'|t }}</b>
        <span>{{ collector.activeTheme.name }}</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>{{ 'Engine'|t }}</b>
        <span>{{ collector.activeTheme.engine }}</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>{{ 'Negotiator'|t }}</b>
        <span>{{ negotiator }}</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>{{ 'Render Time'|t }}</b>
        <span>{{ time }}</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>{{ 'Template Calls'|t }}</b>
        <span>{{ collector.templatecount }}</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>{{ 'Block Calls'|t }}</b>
        <span>{{ collector.blockcount }}</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>{{ 'Macro Calls'|t }}</b>
        <span>{{ collector.macrocount }}</span>
    </div>
    {% endset %}

    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">{{ icon|default('') }}</div>
        <div class=\"sf-toolbar-info\">{{ text|default('') }}</div>
    </div>
{% endblock %}

{% block panel %}
    <script id=\"theme\" type=\"text/template\">
        <h2 class=\"panel__title\">{{ 'Theme'|t }}</h2>
        <div class=\"panel__container\">
            <table class=\"table--fixed\">
                <tr>
                    <th>{{ 'Name'|t }}</th>
                    <td><%- data.activeTheme.name %> (<a href=\"/admin/appearance/settings/bartik\">{{ 'Edit'|t }})</a>
                    </td>
                </tr>
                <tr>
                    <th>{{ 'Engine'|t }}</th>
                    <td><%- data.activeTheme.engine %></td>
                </tr>
                <tr>
                    <th>{{ 'Base theme'|t }}</th>
                    <td><%- data.activeTheme.extension.base_theme %></td>
                </tr>
                <tr>
                    <th>{{ 'Regions'|t }}</th>
                    <td><%= Drupal.webprofiler.helpers.frm(data.activeTheme.regions) %></td>
                </tr>
                <tr>
                    <th>{{ 'Libraries'|t }}</th>
                    <td><%= Drupal.webprofiler.helpers.frm(data.activeTheme.libraries) %></td>
                </tr>
                <tr>
                    <th>{{ 'Style sheets removed'|t }}</th>
                    <td><%= Drupal.webprofiler.helpers.frm(data.activeTheme.styleSheetsRemove) %></td>
                </tr>
                <tr>
                    <th>{{ 'Path'|t }}</th>
                    <td><%- data.activeTheme.path %></td>
                </tr>
                <tr>
                    <th>{{ 'Negotiator'|t }}</th>
                    <td><%= Drupal.webprofiler.helpers.classLink(data.negotiator.class) %></td>
                </tr>
            </table>
        </div>

        <div class=\"panel__container\">
            <ul class=\"list--inline\">
                <li><b>{{ 'Twig statistics'|t }}</b></li>
            </ul>

            <table class=\"table--fixed\">
                <tr>
                    <th>{{ 'Total Render Time'|t }}</th>
                    <td><%- Drupal.webprofiler.helpers.printTime(data.twig.render_time) %></td>
                </tr>
                <tr>
                    <th>{{ 'Template Calls'|t }}</th>
                    <td><%- data.twig.template_count %></td>
                </tr>
                <tr>
                    <th>{{ 'Block Calls'|t }}</th>
                    <td><%- data.twig.block_count %></td>
                </tr>
                <tr>
                    <th>{{ 'Macro Calls'|t }}</th>
                    <td><%- data.twig.macro_count %></td>
                </tr>
            </table>
        </div>

        <div class=\"panel__container\">
            <ul class=\"list--inline\">
                <li><b>{{ 'Twig rendered templates'|t }}</b></li>
            </ul>

            <table class=\"table--fixed\">
                <thead>
                <tr>
                    <th>{{ 'template'|t }}</th>
                    <th>{{ 'count'|t }}</th>
                </tr>
                </thead>
                <% _.each( data.twig.templates, function( item, key ){ %>
                <tr>
                    <th><%- key %></th>
                    <td><%- item %></td>
                </tr>
                <% }); %>
            </table>
        </div>

        <div class=\"panel__container\">
            <ul class=\"list--inline\">
                <li><b>{{ 'Twig callgraph'|t }}</b></li>
            </ul>

            <%= data.twig.callgraph %>
        </div>
    </script>
{% endblock %}
", "@webprofiler/Collector/theme.html.twig", "/var/www/html/web/modules/contrib/devel/webprofiler/templates/Collector/theme.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1, "set" => 2);
        static $filters = array("raw" => 3, "escape" => 4, "format" => 6, "t" => 8, "default" => 47);
        static $functions = array("idelink" => 3, "abbr" => 3, "url" => 8);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set'],
                ['raw', 'escape', 'format', 't', 'default'],
                ['idelink', 'abbr', 'url']
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
