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

/* @webprofiler/Collector/mail.html.twig */
class __TwigTemplate_9a547153ad4364222c5a06be497b1dca1e0ab1bb04d358d7357583ffadd20470 extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Collector/mail.html.twig"));

        // line 1
        $this->displayBlock('toolbar', $context, $blocks);
        // line 21
        echo "
";
        // line 22
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("webprofiler.dashboard", ["profile" => ($context["token"] ?? null)], ["fragment" => "mail"]), "html", null, true);
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Mail"));
        echo "\">
        <img height=\"28\" alt=\"";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Mail"));
        echo "\"
             src=\"data:image/png;base64,";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "icon", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "\"/>
        <span class=\"sf-toolbar-status\">";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "mailsent", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</span>
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        echo "    ";
        ob_start();
        // line 10
        echo "    <div class=\"sf-toolbar-info-piece\">
        <b>Mail sent</b>
        <span>";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "mailsent", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (((isset($context["icon"]) || array_key_exists("icon", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 17, $this->source), "")) : ("")), "html", null, true);
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (((isset($context["text"]) || array_key_exists("text", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 18, $this->source), "")) : ("")), "html", null, true);
        echo "</div>
    </div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 22
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 23
        echo "    <script id=\"mail\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Mail dashboard"));
        echo "</h2>

        <% if( data.mail.length != 0){ %>
        <% _.each( data.mail, function( item ) { %>
        <div class=\"panel__container\">
            <div class=\"panel__expand-header\">
                <ul class=\"list--inline\">
                    <li>
                        <b>";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Plugin"));
        echo "</b>: <%= Drupal.webprofiler.helpers.classLink(item.method) %>
                    </li>
                    <li>
                        <b>";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("ID"));
        echo "</b>: <%- item.message.id %>
                    </li>
                    <li>
                        <b>";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("To"));
        echo "</b>: <%- item.message.to %>
                    </li>
                    <li>
                        <b>";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Subject"));
        echo "</b>: <%- item.message.subject %>
                    </li>
                </ul>
                <div class=\"button--flat l-right js--panel-toggle\">";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Info"));
        echo "</div>
            </div>

            <div class=\"panel__expand-content\">
                <table class=\"table--duo\">
                <% _.each( item.message, function( message, key ) { %>
                <% if( key != 'params' && key != 'headers' ){ %>
                <tr>
                    <th><%- key %></th>
                    <td><%- message %></td>
                </tr>
                <% } %>
                <% }); %>
                </table>
                <table class=\"table--duo\">
                    <% _.each( item.message.headers, function( header, key ) { %>
                    <tr>
                        <th><%- key %></th>
                        <td><%- header %></td>
                    </tr>
                    <% }); %>
                </table>
            </div>

        </div>
        <% }); %>
        <% } else { %>
        <div class=\"panel__container\">
            <p>";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("No mail sent"));
        echo "</p>
        </div>
        <% } %>
    </script>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/mail.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  194 => 72,  163 => 44,  157 => 41,  151 => 38,  145 => 35,  139 => 32,  128 => 24,  125 => 23,  118 => 22,  108 => 18,  104 => 17,  100 => 15,  94 => 12,  90 => 10,  87 => 9,  81 => 6,  77 => 5,  73 => 4,  66 => 3,  63 => 2,  56 => 1,  49 => 22,  46 => 21,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block toolbar %}
    {% set icon %}
    <a href=\"{{ url(\"webprofiler.dashboard\", {profile: token}, {fragment: \"mail\"}) }}\" title=\"{{ 'Mail'|t }}\">
        <img height=\"28\" alt=\"{{ 'Mail'|t }}\"
             src=\"data:image/png;base64,{{ collector.icon }}\"/>
        <span class=\"sf-toolbar-status\">{{ collector.mailsent }}</span>
    </a>
    {% endset %}
    {% set text %}
    <div class=\"sf-toolbar-info-piece\">
        <b>Mail sent</b>
        <span>{{ collector.mailsent }}</span>
    </div>
    {% endset %}

    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">{{ icon|default('') }}</div>
        <div class=\"sf-toolbar-info\">{{ text|default('') }}</div>
    </div>
{% endblock %}

{% block panel %}
    <script id=\"mail\" type=\"text/template\">
        <h2 class=\"panel__title\">{{ 'Mail dashboard'|t }}</h2>

        <% if( data.mail.length != 0){ %>
        <% _.each( data.mail, function( item ) { %>
        <div class=\"panel__container\">
            <div class=\"panel__expand-header\">
                <ul class=\"list--inline\">
                    <li>
                        <b>{{ 'Plugin'|t }}</b>: <%= Drupal.webprofiler.helpers.classLink(item.method) %>
                    </li>
                    <li>
                        <b>{{ 'ID'|t }}</b>: <%- item.message.id %>
                    </li>
                    <li>
                        <b>{{ 'To'|t }}</b>: <%- item.message.to %>
                    </li>
                    <li>
                        <b>{{ 'Subject'|t }}</b>: <%- item.message.subject %>
                    </li>
                </ul>
                <div class=\"button--flat l-right js--panel-toggle\">{{ 'Info'|t }}</div>
            </div>

            <div class=\"panel__expand-content\">
                <table class=\"table--duo\">
                <% _.each( item.message, function( message, key ) { %>
                <% if( key != 'params' && key != 'headers' ){ %>
                <tr>
                    <th><%- key %></th>
                    <td><%- message %></td>
                </tr>
                <% } %>
                <% }); %>
                </table>
                <table class=\"table--duo\">
                    <% _.each( item.message.headers, function( header, key ) { %>
                    <tr>
                        <th><%- key %></th>
                        <td><%- header %></td>
                    </tr>
                    <% }); %>
                </table>
            </div>

        </div>
        <% }); %>
        <% } else { %>
        <div class=\"panel__container\">
            <p>{{ 'No mail sent'|t }}</p>
        </div>
        <% } %>
    </script>
{% endblock %}
", "@webprofiler/Collector/mail.html.twig", "/var/www/html/web/modules/contrib/devel/webprofiler/templates/Collector/mail.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1, "set" => 2);
        static $filters = array("escape" => 3, "t" => 3, "default" => 17);
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
