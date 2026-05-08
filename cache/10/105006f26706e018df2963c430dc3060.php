<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* log-page.twig */
class __TwigTemplate_6e82909b690efd16cdd3c065c36181a5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'actionMenu' => [$this, 'block_actionMenu'],
            'pageContent' => [$this, 'block_pageContent'],
            'javaScript' => [$this, 'block_javaScript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 23
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "log-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "log-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Logs"), "html", null, true);
        yield " | ";
        return; yield '';
    }

    // line 28
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        yield "    <div class=\"widget-action-menu pull-right\">
        <button class=\"btn btn-warning XiboFormButton\" title=\"";
        // line 30
        echo __("Truncate the Log");
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("log.truncate.form"), "html", null, true);
        yield "\" data-auto-submit=\"true\" data-commit-url=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("log.truncate"), "html", null, true);
        yield "\" data-commit-method=\"DELETE\"><i class=\"fa fa-scissors\" aria-hidden=\"true\"></i> ";
        echo __("Truncate");
        yield "</button>
        <button class=\"btn btn-primary\" id=\"refreshLog\" title=\"";
        // line 31
        echo __("Refresh the Log");
        yield "\" href=\"#\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i> ";
        echo __("Refresh");
        yield "</button>
    </div>
";
        return; yield '';
    }

    // line 35
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        yield "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 37
        echo __("Logs");
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-name=\"logView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <ul class=\"nav nav-tabs\" role=\"tablist\">
                            <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\">";
        // line 43
        echo __("General");
        yield "</a></li>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#advanced\" role=\"tab\" data-toggle=\"tab\">";
        // line 44
        echo __("Advanced");
        yield "</a></li>
                        </ul>
                        <form class=\"form-inline\">
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"general\">
                                    ";
        // line 49
        $context["helpText"] = ("Set the time to start searching for logs based on the interval " . "filter. Leave empty to start from the current time.");
        // line 51
        yield "                                    ";
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 52
            yield "                                        ";
            echo __("Date");
            // line 53
            yield "                                        <i class=\"fa fa-info-circle ml-1\" title=\"";
            echo __(($context["helpText"] ?? null));
            yield "\"></i>
                                    ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dateTime", ["fromDt", ($context["title"] ?? null), "", "", "", "", ""], 55, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 57
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Level");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 58
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["level", ($context["title"] ?? null)], 58, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 60
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Interval");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 61
        yield "                                    ";
        $context["secondsTrans"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Seconds");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        yield "                                    ";
        $context["minutesTrans"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Minutes");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 63
        yield "                                    ";
        $context["hoursTrans"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Hours");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        yield "                                    ";
        $context["intervalTypeOptions"] = [["id" => 1, "value" =>         // line 65
($context["secondsTrans"] ?? null)], ["id" => 60, "value" =>         // line 66
($context["minutesTrans"] ?? null)], ["id" => 3600, "value" =>         // line 67
($context["hoursTrans"] ?? null)]];
        // line 69
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["intervalType", "single", ($context["title"] ?? null), 1, ($context["intervalTypeOptions"] ?? null), "id", "value"], 69, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 71
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Duration back");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 72
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_number", ["seconds", ($context["title"] ?? null), 120], 72, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 74
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Run");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 75
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["runNo", ($context["title"] ?? null)], 75, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 77
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("User");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 78
        yield "                                    ";
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.search")], ["name" => "data-search-term", "value" => "userName"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "userId"], ["name" => "data-text-property", "value" => "userName"], ["name" => "data-initial-key", "value" => "userId"]];
        // line 90
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["userId", "single", ($context["title"] ?? null), "", null, "userId", "userName", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 90, $context, $this->getSourceContext());
        yield "
                                </div>
                                <div class=\"tab-pane\" id=\"advanced\">
                                    ";
        // line 93
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Channel");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 94
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["channel", ($context["title"] ?? null)], 94, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 96
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Page");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 97
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["page", ($context["title"] ?? null)], 97, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 99
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Function");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 100
        yield "                                    ";
        $context["getTrans"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("GET");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 101
        yield "                                    ";
        $context["postTrans"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("POST");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 102
        yield "                                    ";
        $context["putTrans"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("PUT");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 103
        yield "                                    ";
        $context["deleteTrans"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("DELETE");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 104
        yield "                                    ";
        $context["headTrans"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("HEAD");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 105
        yield "                                    ";
        $context["patchTrans"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("PATCH");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 106
        yield "                                    ";
        $context["functionOptions"] = [["id" => "", "value" => ""], ["id" => "GET", "value" =>         // line 108
($context["getTrans"] ?? null)], ["id" => "POST", "value" =>         // line 109
($context["postTrans"] ?? null)], ["id" => "PUT", "value" =>         // line 110
($context["putTrans"] ?? null)], ["id" => "DELETE", "value" =>         // line 111
($context["deleteTrans"] ?? null)], ["id" => "HEAD", "value" =>         // line 112
($context["headTrans"] ?? null)], ["id" => "PATCH", "value" =>         // line 113
($context["patchTrans"] ?? null)]];
        // line 115
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["function", "single", ($context["title"] ?? null), "", ($context["functionOptions"] ?? null), "id", "value"], 115, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 117
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Display");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 118
        yield "                                    ";
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.search")], ["name" => "data-search-term", "value" => "display"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "displayId"], ["name" => "data-text-property", "value" => "display"]];
        // line 129
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["displayId", "single", ($context["title"] ?? null), "", null, "displayId", "display", "", "pagedSelect", "", "d", "", ($context["attributes"] ?? null)], 129, $context, $this->getSourceContext());
        yield "

                                    <div class=\"form-group mr-1 mb-1\">
                                        <label class=\"control-label mr-1\" title=\"\" for=\"display\" accesskey=\"\">";
        // line 132
        echo __("Display Name");
        yield "</label>
                                        <div>
                                            <div class=\"input-group\">
                                                <input class=\"form-control\" name=\"display\" type=\"text\" id=\"display\" value=\"\">
                                                <div class=\"input-group-append input-group-addon\">
                                                    <div class=\"input-group-text\">
                                                        <input title=\"";
        // line 138
        echo __("Use Regex?");
        yield "\" type=\"checkbox\" id=\"useRegexForName\" name=\"useRegexForName\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    ";
        // line 145
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Display Group");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 146
        yield "                                    ";
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.search")], ["name" => "data-search-term", "value" => "displayGroup"], ["name" => "data-id-property", "value" => "displayGroupId"], ["name" => "data-text-property", "value" => "displayGroup"]];
        // line 156
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["displayGroupId", "single", ($context["title"] ?? null), "", null, "displayGroupId", "displayGroup", "", "pagedSelect", "", "d", "", ($context["attributes"] ?? null)], 156, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 158
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Message");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 159
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["message", ($context["title"] ?? null)], 159, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 161
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Exclude logs common to each request?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 162
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_checkbox", ["excludeLog", ($context["title"] ?? null), 1], 162, $context, $this->getSourceContext());
        yield "
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"XiboData card pt-3\">
                    <table id=\"logs\" class=\"table table-striped\" data-state-preference-name=\"logGrid\">
                        <thead>
                            <tr>
                                <th>";
        // line 172
        echo __("ID");
        yield "</th>
                                <th>";
        // line 173
        echo __("Run");
        yield "</th>
                                <th>";
        // line 174
        echo __("Date");
        yield "</th>
                                <th>";
        // line 175
        echo __("Channel");
        yield "</th>
                                <th>";
        // line 176
        echo __("Function");
        yield "</th>
                                <th>";
        // line 177
        echo __("Level");
        yield "</th>
                                <th>";
        // line 178
        echo __("Display");
        yield "</th>
                                <th>";
        // line 179
        echo __("Page");
        yield "</th>
                                <th style=\"width: 50%\">";
        // line 180
        echo __("Message");
        yield "</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
";
        return; yield '';
    }

    // line 193
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 194
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
        \$(document).ready(function() {
            var table = \$(\"#logs\").DataTable({
                \"language\": dataTablesLanguage,
                dom: dataTablesTemplate,
                serverSide: true,
                stateSave: true,
                stateDuration: 0,
                stateLoadCallback: dataTableStateLoadCallback,
                stateSaveCallback: dataTableStateSaveCallback,
                filter: false,
                searchDelay: 3000,
                \"order\": [[0, \"desc\"]],
                ajax: {
                    url: \"";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("log.search"), "html", null, true);
        yield "\",
                    \"data\": function (d) {
                        \$.extend(d, \$(\"#logs\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                    }
                },
                \"columns\": [
                    {\"data\": \"logId\"},
                    {\"data\": \"runNo\"},
                    {\"data\": \"logDate\", \"render\": dataTableDateFromIso},
                    {\"data\": \"channel\"},
                    {\"data\": \"function\"},
                    {\"data\": \"type\"},
                    {\"data\": \"display\"},
                    {\"data\": \"page\"},
                    {\"data\": \"message\"}
                ]
            });

            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#logs_wrapper').find('.dataTables_buttons'));

            \$(\"#refreshLog\").click(function() {
                table.ajax.reload();
            });
        });
    </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "log-page.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  451 => 208,  433 => 194,  429 => 193,  412 => 180,  408 => 179,  404 => 178,  400 => 177,  396 => 176,  392 => 175,  388 => 174,  384 => 173,  380 => 172,  366 => 162,  361 => 161,  355 => 159,  350 => 158,  344 => 156,  341 => 146,  336 => 145,  326 => 138,  317 => 132,  310 => 129,  307 => 118,  302 => 117,  296 => 115,  294 => 113,  293 => 112,  292 => 111,  291 => 110,  290 => 109,  289 => 108,  287 => 106,  281 => 105,  275 => 104,  269 => 103,  263 => 102,  257 => 101,  251 => 100,  246 => 99,  240 => 97,  235 => 96,  229 => 94,  224 => 93,  217 => 90,  214 => 78,  209 => 77,  203 => 75,  198 => 74,  192 => 72,  187 => 71,  181 => 69,  179 => 67,  178 => 66,  177 => 65,  175 => 64,  169 => 63,  163 => 62,  157 => 61,  152 => 60,  146 => 58,  141 => 57,  135 => 55,  128 => 53,  125 => 52,  122 => 51,  120 => 49,  112 => 44,  108 => 43,  101 => 39,  96 => 37,  93 => 36,  89 => 35,  79 => 31,  69 => 30,  66 => 29,  62 => 28,  53 => 26,  48 => 23,  46 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "log-page.twig", "/var/www/xibo/views/log-page.twig");
    }
}
