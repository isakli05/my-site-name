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

/* @webprofiler/Collector/http.html.twig */
class __TwigTemplate_67cb22c37ed018f9e8db697ea09dd7afad2080fd4b3d9b260acf22d65206b28e extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Collector/http.html.twig"));

        // line 1
        $this->displayBlock('toolbar', $context, $blocks);
        // line 25
        echo "
";
        // line 26
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("webprofiler.dashboard", ["profile" => ($context["token"] ?? null)], ["fragment" => "http"]), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Http"));
        echo "\">
        <img width=\"20\" height=\"28\" alt=\"";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Http"));
        echo "\"
             src=\"data:image/png;base64,";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "icon", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "\"/>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "completedRequestsCount", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</span>
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        echo "    ";
        ob_start();
        // line 10
        echo "    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Completed"));
        echo "</b>
        <span>";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "completedRequestsCount", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
      <b>";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Failed"));
        echo "</b>
      <span>";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "failedRequestsCount", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 19
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (((isset($context["icon"]) || array_key_exists("icon", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 21, $this->source), "")) : ("")), "html", null, true);
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (((isset($context["text"]) || array_key_exists("text", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 22, $this->source), "")) : ("")), "html", null, true);
        echo "</div>
    </div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 26
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 27
        echo "    <script id=\"http\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Http"));
        echo "</h2>

        <% if( data.completed.length != 0 || data.failed.length != 0){ %>
        <% _.each( data.completed, function( item ) { %>
        <div class=\"panel__container\">
            <div class=\"panel__expand-header\">
                <ul class=\"list--inline\">
                    <li>
                        <b>";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Host"));
        echo "</b>: <%- item.request.uri.host %>
                    </li>
                    <li>
                        <b>";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Path"));
        echo "</b>: <%- item.request.uri.path %>
                    </li>
                    <li>
                        <b>";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Status"));
        echo "</b>: <%- item.response.status %> <%- item.response.phrase %>
                    </li>
                </ul>
                <div class=\"button--flat l-right js--panel-toggle\">";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Info"));
        echo "</div>
            </div>

            <div class=\"panel__expand-content\">
                <table class=\"table--duo\">
                    <% _.each( item.request, function( message, key ) { %>

                    <% if(key == 'stats') { key = 'stats (time in milliseconds and data in bytes)' } %>

                    <tr>
                        <th><%- key %></th>
                        <td><%= Drupal.webprofiler.helpers.frm(message) %></td>
                    </tr>
                    <% }); %>
                </table>
                <table class=\"table--duo\">
                    <% _.each( item.response, function( header, key ) { %>
                    <tr>
                        <th><%- key %></th>
                        <td><%= Drupal.webprofiler.helpers.frm(header) %></td>
                    </tr>
                    <% }); %>
                </table>
            </div>
        </div>
        <% }); %>
        <% } else { %>
        <div class=\"panel__container\">
            <p>";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("No external http calls"));
        echo "</p>
        </div>
        <% } %>
    </script>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/http.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  201 => 73,  170 => 45,  164 => 42,  158 => 39,  152 => 36,  141 => 28,  138 => 27,  131 => 26,  121 => 22,  117 => 21,  113 => 19,  107 => 16,  103 => 15,  97 => 12,  93 => 11,  90 => 10,  87 => 9,  81 => 6,  77 => 5,  73 => 4,  66 => 3,  63 => 2,  56 => 1,  49 => 26,  46 => 25,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block toolbar %}
    {% set icon %}
    <a href=\"{{ url(\"webprofiler.dashboard\", {profile: token}, {fragment: 'http'}) }}\" title=\"{{ 'Http'|t }}\">
        <img width=\"20\" height=\"28\" alt=\"{{ 'Http'|t }}\"
             src=\"data:image/png;base64,{{ collector.icon }}\"/>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">{{ collector.completedRequestsCount }}</span>
    </a>
    {% endset %}
    {% set text %}
    <div class=\"sf-toolbar-info-piece\">
        <b>{{ 'Completed'|t }}</b>
        <span>{{ collector.completedRequestsCount }}</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
      <b>{{ 'Failed'|t }}</b>
      <span>{{ collector.failedRequestsCount }}</span>
    </div>
    {% endset %}

    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">{{ icon|default('') }}</div>
        <div class=\"sf-toolbar-info\">{{ text|default('') }}</div>
    </div>
{% endblock %}

{% block panel %}
    <script id=\"http\" type=\"text/template\">
        <h2 class=\"panel__title\">{{ 'Http'|t }}</h2>

        <% if( data.completed.length != 0 || data.failed.length != 0){ %>
        <% _.each( data.completed, function( item ) { %>
        <div class=\"panel__container\">
            <div class=\"panel__expand-header\">
                <ul class=\"list--inline\">
                    <li>
                        <b>{{ 'Host'|t }}</b>: <%- item.request.uri.host %>
                    </li>
                    <li>
                        <b>{{ 'Path'|t }}</b>: <%- item.request.uri.path %>
                    </li>
                    <li>
                        <b>{{ 'Status'|t }}</b>: <%- item.response.status %> <%- item.response.phrase %>
                    </li>
                </ul>
                <div class=\"button--flat l-right js--panel-toggle\">{{ 'Info'|t }}</div>
            </div>

            <div class=\"panel__expand-content\">
                <table class=\"table--duo\">
                    <% _.each( item.request, function( message, key ) { %>

                    <% if(key == 'stats') { key = 'stats (time in milliseconds and data in bytes)' } %>

                    <tr>
                        <th><%- key %></th>
                        <td><%= Drupal.webprofiler.helpers.frm(message) %></td>
                    </tr>
                    <% }); %>
                </table>
                <table class=\"table--duo\">
                    <% _.each( item.response, function( header, key ) { %>
                    <tr>
                        <th><%- key %></th>
                        <td><%= Drupal.webprofiler.helpers.frm(header) %></td>
                    </tr>
                    <% }); %>
                </table>
            </div>
        </div>
        <% }); %>
        <% } else { %>
        <div class=\"panel__container\">
            <p>{{ 'No external http calls'|t }}</p>
        </div>
        <% } %>
    </script>
{% endblock %}
", "@webprofiler/Collector/http.html.twig", "/var/www/html/web/modules/contrib/devel/webprofiler/templates/Collector/http.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1, "set" => 2);
        static $filters = array("escape" => 3, "t" => 3, "default" => 21);
        static $functions = array("url" => 3);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set'],
                ['escape', 't', 'default'],
                ['url']
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
