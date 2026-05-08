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

/* proofofplay-report-form.twig */
class __TwigTemplate_1608bf04d26c7a27acf3e43583c395b3 extends Template
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
        // line 24
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "proofofplay-report-form.twig", 25)->unwrap();
        // line 24
        $this->parent = $this->loadTemplate("authed.twig", "proofofplay-report-form.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo __("Report: Proof of Play");
        yield " | ";
        return; yield '';
    }

    // line 29
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        yield "    ";
        yield from         $this->loadTemplate("report-schedule-buttons.twig", "proofofplay-report-form.twig", 30)->unwrap()->yield($context);
        return; yield '';
    }

    // line 33
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        yield "
    <div class=\"widget\">
        <div class=\"widget-title\">
            <span>";
        // line 37
        echo __("Proof of Play");
        yield "</span>
        </div>

        ";
        // line 40
        yield from         $this->loadTemplate("report-selector.twig", "proofofplay-report-form.twig", 40)->unwrap()->yield($context);
        // line 41
        yield "
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-name=\"proofOfPlayView\" data-refresh-on-form-submit=\"false\">
                <div class=\"XiboFilterCustom card bg-light mb-3\">
                    <div class=\"FilterDiv card-body\" id=\"proofofplayReport\">
                        <!-- Form Filter -->
                        <form class=\"form-inline\">
                            ";
        // line 48
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Range");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        yield "                            ";
        $context["range"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select a range");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        yield "                            ";
        $context["today"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Today");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        yield "                            ";
        $context["yesterday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Yesterday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        yield "                            ";
        $context["thisweek"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("This Week");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        yield "                            ";
        $context["thismonth"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("This Month");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 54
        yield "                            ";
        $context["thisyear"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("This Year");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        yield "                            ";
        $context["lastweek"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Last Week");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 56
        yield "                            ";
        $context["lastmonth"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Last Month");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 57
        yield "                            ";
        $context["lastyear"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Last Year");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 58
        yield "                            ";
        $context["options"] = [["filterName" => "", "reportFilter" =>         // line 59
($context["range"] ?? null)], ["filterName" => "today", "reportFilter" =>         // line 60
($context["today"] ?? null)], ["filterName" => "yesterday", "reportFilter" =>         // line 61
($context["yesterday"] ?? null)], ["filterName" => "thisweek", "reportFilter" =>         // line 62
($context["thisweek"] ?? null)], ["filterName" => "thismonth", "reportFilter" =>         // line 63
($context["thismonth"] ?? null)], ["filterName" => "thisyear", "reportFilter" =>         // line 64
($context["thisyear"] ?? null)], ["filterName" => "lastweek", "reportFilter" =>         // line 65
($context["lastweek"] ?? null)], ["filterName" => "lastmonth", "reportFilter" =>         // line 66
($context["lastmonth"] ?? null)], ["filterName" => "lastyear", "reportFilter" =>         // line 67
($context["lastyear"] ?? null)]];
        // line 69
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["reportFilter", "single", ($context["title"] ?? null), "today", ($context["options"] ?? null), "filterName", "reportFilter"], 69, $context, $this->getSourceContext());
        yield "

                            ";
        // line 71
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("From Date");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 72
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_date", ["statsFromDt", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["defaults"] ?? null), "fromDateOneDay", [], "any", false, false, false, 72), "", "stats-from-dt", "", ""], 72, $context, $this->getSourceContext());
        yield "

                            ";
        // line 74
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Time");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 75
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_time", ["statsFromDtTime", ($context["title"] ?? null), "00:00", "", "stats-from-dt-time"], 75, $context, $this->getSourceContext());
        yield "

                            ";
        // line 77
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("To Date");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 78
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_date", ["statsToDt", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["defaults"] ?? null), "toDate", [], "any", false, false, false, 78), "", "stats-to-dt", "", ""], 78, $context, $this->getSourceContext());
        yield "

                            ";
        // line 80
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Time");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 81
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_time", ["statsToDtTime", ($context["title"] ?? null), "00:00", "", "stats-to-dt-time"], 81, $context, $this->getSourceContext());
        yield "

                            ";
        // line 83
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Group By");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 84
        yield "                            ";
        $context["options"] = [["id" => "display", "name" => "Display"], ["id" => "displayGroup", "name" => __("Display Group")], ["id" => "tag", "name" => __("Tag")]];
        // line 89
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["groupBy", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "id", "name", ""], 89, $context, $this->getSourceContext());
        yield "

                            ";
        // line 91
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Display");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 92
        yield "                            ";
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.search")], ["name" => "data-search-term", "value" => "display"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "displayId"], ["name" => "data-text-property", "value" => "display"]];
        // line 103
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["displayId", "single", ($context["title"] ?? null), "", null, "displayId", "display", "", "pagedSelect", "", "d", "", ($context["attributes"] ?? null)], 103, $context, $this->getSourceContext());
        yield "

                            ";
        // line 105
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Display Group");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 106
        yield "                            ";
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.search")], ["name" => "data-search-term", "value" => "displayGroup"], ["name" => "data-id-property", "value" => "displayGroupId"], ["name" => "data-text-property", "value" => "displayGroup"]];
        // line 116
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["displayGroupId[]", "dropdownmulti", ($context["title"] ?? null), "", null, "displayGroupId", "displayGroup", "", "pagedSelect", "", "d", "", ($context["attributes"] ?? null)], 116, $context, $this->getSourceContext());
        yield "

                            ";
        // line 118
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.search")], ["name" => "data-search-term", "value" => "layout"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "layoutId"], ["name" => "data-text-property", "value" => "layout"]];
        // line 129
        yield "
                            ";
        // line 130
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Layout");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 131
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["layoutId[]", "dropdownmulti", ($context["title"] ?? null), "", null, "layoutId", "layout", "", "pagedSelect", "", "l", "", ($context["attributes"] ?? null)], 131, $context, $this->getSourceContext());
        yield "

                            ";
        // line 134
        yield "                            ";
        $context["attributes"] = [["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.search")], ["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""]];
        // line 141
        yield "
                            ";
        // line 142
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Campaign");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 143
        yield "                            ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select a Campaign");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 144
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["parentCampaignId", "single", ($context["title"] ?? null), "", null, "campaignId", "campaign", "", "", "", "", "", ($context["attributes"] ?? null)], 144, $context, $this->getSourceContext());
        yield "

                            ";
        // line 146
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.search")], ["name" => "data-search-term", "value" => "media"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "mediaId"], ["name" => "data-text-property", "value" => "name"]];
        // line 157
        yield "                            ";
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Media");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 158
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["mediaId[]", "dropdownmulti", ($context["title"] ?? null), "", null, "mediaId", "name", "", "pagedSelect", "", "m", "", ($context["attributes"] ?? null)], 158, $context, $this->getSourceContext());
        yield "

                            ";
        // line 160
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Type");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 161
        yield "                            ";
        $context["layout"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Layout");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 162
        yield "                            ";
        $context["media"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Media");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 163
        yield "                            ";
        $context["widget"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Widget");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 164
        yield "                            ";
        $context["event"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Event");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 165
        yield "                            ";
        $context["options"] = [["typeid" => "", "type" => null], ["typeid" => "layout", "type" =>         // line 167
($context["layout"] ?? null)], ["typeid" => "media", "type" =>         // line 168
($context["media"] ?? null)], ["typeid" => "widget", "type" =>         // line 169
($context["widget"] ?? null)], ["typeid" => "event", "type" =>         // line 170
($context["event"] ?? null)]];
        // line 172
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["type", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "typeid", "type"], 172, $context, $this->getSourceContext());
        yield "

                            ";
        // line 174
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Tags from");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 175
        yield "                            ";
        $context["dg"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Display");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 176
        yield "                            ";
        $context["layout"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Layout");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 177
        yield "                            ";
        $context["media"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Media");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 178
        yield "                            ";
        $context["options"] = [["tagsTypeid" => "dg", "tagsType" =>         // line 179
($context["dg"] ?? null)], ["tagsTypeid" => "layout", "tagsType" =>         // line 180
($context["layout"] ?? null)], ["tagsTypeid" => "media", "tagsType" =>         // line 181
($context["media"] ?? null)]];
        // line 183
        yield "                            ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["tagsType", "single", ($context["title"] ?? null), "dg", ($context["options"] ?? null), "tagsTypeid", "tagsType"], 183, $context, $this->getSourceContext());
        yield "

                            ";
        // line 185
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 185)) {
            // line 186
            yield "                                ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tags");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 187
            yield "                                ";
            $context["exactMatchTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should Tags filter by exact match?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 188
            yield "                                ";
            $context["logicalOperatorTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("When filtering by multiple Tags, which logical operator should be used?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 189
            yield "                                ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("A comma separated list of tags to filter by. Enter a tag|tag value to filter tags with values. Enter --no-tag to filter all items without tags. Enter - before a tag or tag value to exclude from results.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 190
            yield "                                ";
            yield CoreExtension::callMacro($macros["inline"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), null, ($context["helpText"] ?? null), null, null, null, "exactTags", ($context["exactMatchTitle"] ?? null), ($context["logicalOperatorTitle"] ?? null)], 190, $context, $this->getSourceContext());
            yield "
                            ";
        }
        // line 192
        yield "
                            <div class=\"w-100\">
                                <a id=\"applyBtn\" class=\"btn btn-success\">
                                    <span>";
        // line 195
        echo __("Apply");
        yield "</span>
                                </a>
                                <span id=\"imageLoader\" class=\"\"></span>
                                <span id=\"applyWarning\" class=\"text-warning\" style=\"display:none; padding-left: 10px\">";
        // line 198
        echo __("Warning: This may return a lot of data and may take several minutes to process.");
        yield "</span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Card Header -->
                <div class=\"card-header\">
                    <ul class=\"nav nav-tabs card-header-tabs\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" id=\"tabular-tab\" data-toggle=\"tab\" href=\"#tabularTab\" role=\"tab\"
                               aria-controls=\"tabularTab\" aria-selected=\"true\">Tabular</a>
                        </li>
                    </ul>
                </div>

                <!-- Card Body -->
                <div class=\"card-body\">
                    <div class=\"tab-content\">
                        <!-- TABULAR TAB-->
                        <div class=\"tab-pane active\" id=\"tabularTab\" role=\"tabpanel\" aria-labelledby=\"tabular-tab\">
                            <!-- DATATABLE -->
                            <div class=\"table-container\" id=\"table_wrapper\">
                                <table id=\"stats\"
                                       class=\"table xibo-table table-striped table-full-width\"
                                       style=\"width: 100%\"
                                       data-state-preference-name=\"proofOfPlayGrid\"
                                       data-url=\"/report/data/proofofplayReport\">
                                    <thead>
                                    <tr>
                                        <th>";
        // line 227
        echo __("Type");
        yield "</th>
                                        <th>";
        // line 228
        echo __("Display ID");
        yield "</th>
                                        <th>";
        // line 229
        echo __("Display");
        yield "</th>
                                        <th>";
        // line 230
        echo __("Display Group ID");
        yield "</th>
                                        <th>";
        // line 231
        echo __("Display Group");
        yield "</th>
                                        <th>";
        // line 232
        echo __("Tag ID");
        yield "</th>
                                        <th>";
        // line 233
        echo __("Tag Name");
        yield "</th>
                                        <th>";
        // line 234
        echo __("Campaign");
        yield "</th>
                                        <th>";
        // line 235
        echo __("Layout ID");
        yield "</th>
                                        <th>";
        // line 236
        echo __("Layout");
        yield "</th>
                                        <th>";
        // line 237
        echo __("Widget ID");
        yield "</th>
                                        <th>";
        // line 238
        echo __("Media");
        yield "</th>
                                        <th>";
        // line 239
        echo __("Tag");
        yield "</th>
                                        <th>";
        // line 240
        echo __("Number of Plays");
        yield "</th>
                                        <th>";
        // line 241
        echo __("Total Duration");
        yield "</th>
                                        <th>";
        // line 242
        echo __("Total Duration (s)");
        yield "</th>
                                        <th title=\"";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("NB: proof of play records which span your range are returned in this report."), "html", null, true);
        yield "\">";
        echo __("First Period Shown");
        yield "</th>
                                        <th title=\"";
        // line 244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("NB: proof of play records which span your range are returned in this report."), "html", null, true);
        yield "\">";
        echo __("Last Period Shown");
        yield "</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        return; yield '';
    }

    // line 282
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 283
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
        \$(document).ready(function() {
            let \$report = \$(\"#proofofplayReport\");
            let \$dataTable = \$('#stats'); // Datatable
            let chart = null; // Chart
            let result; // XHR get data result

            let imageLoader = \$(\"#imageLoader\");
            let \$warning = \$(\"#applyWarning\");
            let \$applyBtn = \$(\"#applyBtn\");

            // Report Filter
            let reportFilter = \$(\"#reportFilter\"); // Report Filter

            // Grid
            let table = \$dataTable.DataTable({
                \"language\": dataTablesLanguage,
                dom: dataTablesTemplate,
                stateSave: true,
                stateDuration: 0,
                stateLoadCallback: dataTableStateLoadCallback,
                stateSaveCallback: dataTableStateSaveCallback,
                drawCallback: function( settings ) {
                    setTimeout(function() {
                        \$(\"#applyBtn\").removeClass('disabled');
                    }, 300);

                    // We hide empty columns and display appropriate columns (ie ID and name)
                    switch (\$('select[name=\"groupBy\"]').val()) {
                        case 'displayGroup':
                            \$(this.api().columns([1, 2, 5, 6]).visible(false));
                            \$(this.api().columns([3, 4]).visible(true));
                            break;
                        case 'tag':
                            \$(this.api().columns([1,2, 3, 4]).visible(false));
                            \$(this.api().columns([5, 6]).visible(true));
                            break;
                        default:
                            \$(this.api().columns([3, 4, 5, 6]).visible(false));
                            \$(this.api().columns([1, 2]).visible(true));
                    }
                },
                filter: false,
                \"order\": [[1, \"asc\"]],
                data:{},
                \"columns\": [
                    {\"data\": \"type\"},
                    {\"data\": \"displayId\"},
                    {\"data\": \"display\"},
                    {\"data\": \"displayGroupId\"},
                    {\"data\": \"displayGroup\"},
                    {\"data\": \"tagId\"},
                    {\"data\": \"tagName\"},
                    {\"data\": \"parentCampaign\"},
                    {\"data\": \"layoutId\"},
                    {\"data\": \"layout\"},
                    {\"data\": \"widgetId\"},
                    {\"data\": \"media\"},
                    {\"data\": \"tag\"},
                    {\"data\": \"numberPlays\"},
                    {
                        \"data\": \"duration\",
                        \"render\": function (data, type, row, meta) {
                            if (type != \"display\")
                                return \"\";

                            var durationData = moment.duration(data, \"seconds\");
                            var dataM = '';

                            var months = durationData.months();
                            if (months > 0) {
                                durationData.subtract(moment.duration(months,'months'));
                                dataM += months + '";
        // line 355
        echo __("month");
        yield " ';
                            }

                            var days = durationData.days();
                            durationData.subtract(moment.duration(days,'days'));
                            dataM += days + '";
        // line 360
        echo __("day");
        yield " ';

                            var hours = durationData.hours();
                            durationData.subtract(moment.duration(hours,'hours'));
                            dataM += hours + '";
        // line 364
        echo __("hr");
        yield " ';

                            var minutes = durationData.minutes();
                            durationData.subtract(moment.duration(minutes,'minutes'));
                            dataM += minutes + '";
        // line 368
        echo __("min");
        yield " ';

                            var seconds = durationData.seconds();
                            dataM += seconds + '";
        // line 371
        echo __("sec");
        yield " ';

                            return  dataM;
                        }
                    },
                    {\"data\": \"duration\"},
                    {\"data\": \"minStart\"},
                    {\"data\": \"maxEnd\"}
                ],
                footerCallback: function (row, data, start, end, display) {
                    let api = this.api();

                    // Total over all pages
                    let totalNumberPlays = api.column(13).data().reduce(function (a, b) {
                        return a + b;
                    }, 0);
                    let totalDuration = api.column(15).data().reduce(function (a, b) {
                        return a + b;
                    }, 0);
                    let totalNumberPlaysPage = api.column(13, { page: 'current'}).data().reduce(function (a, b) {
                        return a + b;
                    }, 0);
                    let totalDurationPage = api.column(15, { page: 'current'}).data().reduce(function (a, b) {
                        return a + b;
                    }, 0);

                    // Update footer
                    \$(api.column(13).footer()).html(totalNumberPlaysPage + ' (' + totalNumberPlays + ' total)');
                    \$(api.column(15).footer()).html(Math.floor(totalDurationPage) + ' (' + Math.floor(totalDuration) + ' total)');
                },
            });

            // table.on('draw', dataTableDraw);
            // table.on('processing.dt', dataTableProcessing);
            // dataTableAddButtons(table, \$('#stats_wrapper').find('.dataTables_buttons'));

            // Get Data
            function getData(url) {

                \$.ajax({
                    url: url,
                    method: 'GET',
                    dataType: 'json',
                    data: \$(\"#stats\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject(),
                    success: function success(data) {
                        result = data;
                        \$applyBtn.removeClass('disabled');
                        imageLoader.removeClass('fa fa-spinner fa-spin loading-icon');

                        // Based on tab load data
                        if (\$('.nav-tabs .nav-item a.active').attr(\"href\") === '#tabularTab') {
                            setTabularData(table, result.table);
                        } else {
                            setChartData(result.chart);
                        }
                    },
                    error: function error(xhr, textStatus, _error) {
                        \$applyBtn.removeClass('disabled');
                        toastr.error(xhr.responseJSON.message);
                    }
                });
            }

            function setTabularData(table, data) {
                table.clear().draw();

                if (Object.keys(data).length > 0) {
                    table.rows.add( data ).draw()
                }
            }

            function setChartData(data) {

                setTimeout(function() {
                    \$applyBtn.removeClass('disabled');
                }, 300);

                if (chart !== undefined && chart !== null) {
                    chart.destroy();
                }

                // Create our chart
                chart = new Chart(\$(\"#canvas\"), data);
            }

            // Tab shown/click load relevant table/chart
            \$('a[data-toggle=\"tab\"]').on('shown.bs.tab', function (e) {
                let activeTab = \$(e.target).attr(\"href\")
                if (result) {
                    if (activeTab === '#tabularTab') {
                        setTabularData(table, result.table);
                    } else {
                        setChartData(result.chart);
                    }
                }
            });

            table.on('draw', dataTableDraw);
            table.on('processing.dt', dataTableProcessing);
            dataTableAddButtons(table, \$('#stats_wrapper').find('.dataTables_buttons'));

            // Apply
            \$applyBtn.click(function () {
                \$(this).addClass('disabled');
                imageLoader.addClass('fa fa-spinner fa-spin loading-icon');
                getData(\$dataTable.data().url);
            });

            // If we select a displayId, we hide the display group filter
            \$('#displayId').off('change').change( function() {
                let displayId = \$('#displayId').val();

                if (displayId) {
                    \$('select[name=\"displayGroupId[]\"] option').remove();
                    \$('select[name=\"displayGroupId[]\"]').next(\".select2-container\").parent().hide();
                    \$('select[name=\"groupBy[]\"] option').remove();
                    \$('select[name=\"groupBy\"]').parent().hide();
                } else {
                    \$('#displayId option').remove();
                    \$('select[name=\"displayGroupId[]\"]').next(\".select2-container\").parent().show();
                    \$('select[name=\"groupBy\"]').parent().show();
                }
            });

            // If we select a groupBy data, we hide the display filter
            \$(\"select[name='groupBy']\").on('change', function() {
                let optionSelected = \$(this).find(\"option:selected\").val();

                if (optionSelected === 'displayGroup') {
                    \$('select[name=\"groupBy\"]').parent().show();
                    \$('select[name=\"displayGroupId[]\"]').next(\".select2-container\").parent().show();
                } else {
                    \$('select[name=\"displayGroupId[]\"] option').remove();
                    \$('select[name=\"displayGroupId[]\"]').next(\".select2-container\").parent().hide();
                }

                if (optionSelected === 'display') {
                    \$(\"select[name='displayId']\").parent().show();
                } else {
                    \$(\"select[name='displayId']\").parent().hide();
                }
            });

            // Hide / Show FromDt and ToDt
            function checkReportFilter(reportFilter) {
                if (reportFilter.val() === '' || reportFilter.val() === undefined) {
                    \$(\".stats-from-dt\").show();
                    \$(\".stats-to-dt\").show();
                    \$(\".stats-from-dt-time\").show();
                    \$(\".stats-to-dt-time\").show();
                } else {
                    \$(\".stats-from-dt\").hide();
                    \$(\".stats-to-dt\").hide();
                    \$(\".stats-from-dt-time\").hide();
                    \$(\".stats-to-dt-time\").hide();
                }
            }

            // Calculate the difference of number of days of a selected range
            let calculateDaysShowHideWarn = function() {

                let fromDt = moment(\$(\"#statsFromDt\").val());
                let toDt = moment(\$(\"#statsToDt\").val());

                let days = toDt.diff(fromDt, 'days');

                \$warning.hide();
                if ( days >= 30) {
                    \$warning.show();
                }

                return true;
            };

            \$(\"#statsFromDtLink\").change( function() {
                calculateDaysShowHideWarn();
            });

            \$(\"#statsToDtLink\").change( function() {
                calculateDaysShowHideWarn();
            });

            let checkFilterAndApply = function() {

                reportFilter.off('change').change( function() {
                    let value = reportFilter.val();

                    // Hide / Show FromDt and ToDt
                    checkReportFilter(reportFilter);

                    // Hide / Show Warning
                    \$warning.hide();
                    if ( value === '') {
                        calculateDaysShowHideWarn();
                    } else if ( value === 'thismonth' || value === 'lastmonth' || value === 'thisyear' || value === 'lastyear') {
                        \$warning.show();
                    }
                });

                let anchorReportAddBtn = \$(\"button#reportAddBtn\");
                let type = \$(\"#type\").val();
                let tagsType = \$(\"#tagsType\").val();
                let tags = \$(\"#tags\").val();
                let exactTags = \$('#exactTags').is(\":checked\");

                anchorReportAddBtn.attr(\"href\", \"";
        // line 576
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("reportschedule.add.form"), "html", null, true);
        yield "?type=\" + type + \"&tagsType=\" + tagsType + \"&tags=\" + tags + \"&exactTags=\" + exactTags
                    + \"&reportName=proofofplayReport\" );

            };

            checkReportFilter(reportFilter);
            checkFilterAndApply();


            var \$campaignSelect = \$('#parentCampaignId');
            \$campaignSelect.select2({
                ajax: {
                    url: \$campaignSelect.data(\"searchUrl\"),
                    dataType: \"json\",
                    delay: 250,
                    placeholder: 'Campaign',
                    allowClear: true,
                    data: function(params) {

                        var query = {
                            isLayoutSpecific: 0,
                            retired: 0,
                            totalDuration: 0,
                            name: params.term,
                            start: 0,
                            length: 10,
                            columns: [
                                {
                                    \"data\": \"isLayoutSpecific\"
                                },
                                {
                                    \"data\": \"campaign\"
                                }
                            ],
                            order: [
                                {
                                    \"column\": 0,
                                    \"dir\": \"asc\"
                                },
                                {
                                    \"column\": 1,
                                    \"dir\": \"asc\"
                                }
                            ]
                        };

                        // Set the start parameter based on the page number
                        if (params.page != null) {
                            query.start = (params.page - 1) * 10;
                        }

                        return query;
                    },
                    processResults: function(data, params) {

                        var results = [];
                        var campaigns = [];

                        \$.each(data.data, function(index, element) {
                            campaigns.push({
                                \"id\": element.campaignId,
                                \"text\": element.campaign
                            });
                        });

                        results.push({
                            \"text\": \$campaignSelect.data('transCampaigns'),
                            \"children\": campaigns
                        })


                        var page = params.page || 1;
                        page = (page > 1) ? page - 1 : page;

                        return {
                            results: results,
                            pagination: {
                                more: (page * 10 < data.recordsTotal)
                            }
                        }
                    }
                }
            })
        });

        function proofOfPlayScheduleCallback() {

            let \$displayId = \$('#proofofplayReport #displayId');
            let \$layoutId = \$('#proofofplayReport [id=\"layoutId[]\"]');
            let \$mediaId = \$('#proofofplayReport [id=\"mediaId[]\"]');
            let \$newDisplayId = \$('#proofofplayScheduleAddForm #displayId');
            let \$newLayoutId = \$('#proofofplayScheduleAddForm [id=\"layoutId[]\"]');
            let \$newMediaId = \$('#proofofplayScheduleAddForm [id=\"mediaId[]\"]');

            appendOptions(\$newDisplayId, \$displayId.find('option:selected').clone());
            appendOptions(\$newLayoutId, \$layoutId.find('option:selected').clone());
            appendOptions(\$newMediaId, \$mediaId.find('option:selected').clone());
        }

        function appendOptions(element, options) {

            for (let i = 0; i < options.length; i++) {

                let option = options[i];
                element.append(option).trigger('change');
                \$(option).prop('selected', true);
                element.trigger({
                    type: 'select2:select',
                    params: {
                        data: option
                    }
                });
            }
        }
    </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "proofofplay-report-form.twig";
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
        return array (  899 => 576,  691 => 371,  685 => 368,  678 => 364,  671 => 360,  663 => 355,  587 => 283,  583 => 282,  539 => 244,  533 => 243,  529 => 242,  525 => 241,  521 => 240,  517 => 239,  513 => 238,  509 => 237,  505 => 236,  501 => 235,  497 => 234,  493 => 233,  489 => 232,  485 => 231,  481 => 230,  477 => 229,  473 => 228,  469 => 227,  437 => 198,  431 => 195,  426 => 192,  420 => 190,  414 => 189,  408 => 188,  402 => 187,  396 => 186,  394 => 185,  388 => 183,  386 => 181,  385 => 180,  384 => 179,  382 => 178,  376 => 177,  370 => 176,  364 => 175,  359 => 174,  353 => 172,  351 => 170,  350 => 169,  349 => 168,  348 => 167,  346 => 165,  340 => 164,  334 => 163,  328 => 162,  322 => 161,  317 => 160,  311 => 158,  305 => 157,  303 => 146,  297 => 144,  291 => 143,  286 => 142,  283 => 141,  280 => 134,  274 => 131,  269 => 130,  266 => 129,  264 => 118,  258 => 116,  255 => 106,  250 => 105,  244 => 103,  241 => 92,  236 => 91,  230 => 89,  227 => 84,  222 => 83,  216 => 81,  211 => 80,  205 => 78,  200 => 77,  194 => 75,  189 => 74,  183 => 72,  178 => 71,  172 => 69,  170 => 67,  169 => 66,  168 => 65,  167 => 64,  166 => 63,  165 => 62,  164 => 61,  163 => 60,  162 => 59,  160 => 58,  154 => 57,  148 => 56,  142 => 55,  136 => 54,  130 => 53,  124 => 52,  118 => 51,  112 => 50,  106 => 49,  101 => 48,  93 => 43,  89 => 41,  87 => 40,  81 => 37,  76 => 34,  72 => 33,  66 => 30,  62 => 29,  53 => 27,  48 => 24,  46 => 25,  39 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "proofofplay-report-form.twig", "/var/www/xibo/reports/proofofplay-report-form.twig");
    }
}
