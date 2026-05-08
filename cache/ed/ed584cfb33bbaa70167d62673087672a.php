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

/* schedule-page.twig */
class __TwigTemplate_868717af0b68d59d7d2e8575fb719ed1 extends Template
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "schedule-page.twig", 24)->unwrap();
        // line 25
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "schedule-page.twig", 25)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "schedule-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Schedule"), "html", null, true);
        yield " | ";
        return; yield '';
    }

    // line 29
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        yield "    <div class=\"widget-action-menu pull-right\">
        ";
        // line 31
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["schedule.add"], "method", false, false, false, 31)) {
            // line 32
            yield "            <button class=\"btn btn-success XiboFormButton btns\" title=\"";
            echo __("Add a new Scheduled event");
            yield "\"
                    href=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.add.form"), "html", null, true);
            yield "\"><span class=\"fa fa-plus\"></span> ";
            echo __("Add Event");
            // line 34
            yield "            </button>
        ";
        }
        // line 36
        yield "        <button class=\"btn btn-primary\" id=\"refreshGrid\" title=\"";
        echo __("Refresh the Table");
        yield "\" href=\"#\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></button>
    </div>
";
        return; yield '';
    }

    // line 40
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        yield "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 42
        echo __("Schedule");
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-name=\"scheduleGridView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"schedule-filter\">
                        <ul class=\"nav nav-tabs\" role=\"tablist\">
                            <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general-filter\" role=\"tab\" data-toggle=\"tab\" aria-selected=\"true\"><span>";
        // line 48
        echo __("General");
        yield "</span></a></li>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#advanced-filter\" role=\"tab\" data-toggle=\"tab\" aria-selected=\"false\"><span>";
        // line 49
        echo __("Advanced");
        yield "</span></a></li>
                        </ul>
                        <form class=\"form-inline\">
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"general-filter\" role=\"tabpanel\">
                                    ";
        // line 54
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Range");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        yield "                                    ";
        $context["range"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Custom");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 56
        yield "                                    ";
        $context["day"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Day");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 57
        yield "                                    ";
        $context["week"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Week");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 58
        yield "                                    ";
        $context["month"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Month");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        yield "                                    ";
        $context["year"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Year");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        yield "                                    ";
        $context["options"] = [["name" => "custom", "range" =>         // line 61
($context["range"] ?? null)], ["name" => "day", "range" =>         // line 62
($context["day"] ?? null)], ["name" => "week", "range" =>         // line 63
($context["week"] ?? null)], ["name" => "month", "range" =>         // line 64
($context["month"] ?? null)], ["name" => "year", "range" =>         // line 65
($context["year"] ?? null)]];
        // line 67
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["range", "single", ($context["title"] ?? null), "month", ($context["options"] ?? null), "name", "range", "", "date-range-input"], 67, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 69
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("From Date");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 70
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dateTime", ["fromDt", ($context["title"] ?? null), "", "", "custom-date-range d-none", "", ""], 70, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 72
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("To Date");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dateTime", ["toDt", ($context["title"] ?? null), "", "", "custom-date-range d-none", "", ""], 73, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 75
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Date Controls");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 76
        yield "                                    <div class=\"form-group mr-1 mb-1 controls-date-range\"> 
                                        <div class=\"control-label mr-1\" title=\"\"
                                            accesskey=\"\">";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</div>
                                        <div class=\"controls-date-inputs\">
                                            <div class=\"inputgroup date\" id=\"dateInput\">
                                                <span class=\"btn btn-outline-primary date-open-button\" role=\"button\">
                                                    <i class=\"fa fa-calendar\"></i>
                                                </span>
                                                <input type=\"text\" class=\"form-control\" id=\"dateInputLink\" data-input style=\"display:none;\"/>
                                            </div>
                                            <div class=\"btn-group\">
                                                <button type=\"button\" class=\"btn btn-secondary\" data-calendar-nav=\"prev\"><span class=\"fa fa-caret-left\"></span> ";
        // line 87
        echo __("Prev");
        yield "</button>
                                                <button type=\"button\" class=\"btn btn-outline-secondary\" data-calendar-nav=\"today\">";
        // line 88
        echo __("Today");
        yield "</button>
                                                <button type=\"button\" class=\"btn btn-secondary\" data-calendar-nav=\"next\">";
        // line 89
        echo __("Next");
        yield " <span class=\"fa fa-caret-right\"></span></button>
                                            </div>
                                        </div>
                                    </div>

                                    ";
        // line 94
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 95
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_inputNameGrid", ["name", ($context["title"] ?? null)], 95, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 97
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Event Type");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 98
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["eventTypeId", "single", ($context["title"] ?? null), "", Twig\Extension\CoreExtension::merge([["eventTypeId" => null, "eventTypeName" => "All"]], ($context["eventTypes"] ?? null)), "eventTypeId", "eventTypeName"], 98, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 100
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Layout / Campaign");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 101
        yield "                                    ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select a Layout or Campaign for this Event to show");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 102
        yield "
                                    <div class=\"form-group mr-1 mb-1\">
                                        <label class=\"control-label mr-1\" for=\"campaignId\" title=\"\"
                                            accesskey=\"\">";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</label>
                                        <select name=\"campaignId\" id=\"campaignIdFilter\" class=\"form-control\"
                                                data-search-url=\"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.search"), "html", null, true);
        yield "\"
                                                data-trans-campaigns=\"";
        // line 108
        echo __("Campaigns");
        yield "\"
                                                data-trans-layouts=\"";
        // line 109
        echo __("Layouts");
        yield "\"
                                                data-allow-clear=\"true\"
                                                data-width=\"100%\"
                                                title=\"";
        // line 112
        echo __("Layout / Campaign");
        yield "\"
                                                data-placeholder=\"";
        // line 113
        echo __("Layout / Campaign");
        yield "\"
                                                data-dropdownAutoWidth
                                        >
                                        </select>
                                    </div>

                                    ";
        // line 119
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Displays");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 120
        yield "                                    <div class=\"form-group mr-1 mb-1 pagedSelect\" style=\"min-width: 200px\">
                                        <label class=\"control-label mr-1\" for=\"DisplayList\" title=\"\"
                                            accesskey=\"\">";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</label>
                                        <select id=\"DisplayList\" class=\"form-control\" name=\"displaySpecificGroupIds[]\"
                                                data-width=\"100%\"
                                                data-placeholder=\"";
        // line 125
        echo __("Displays");
        yield "\"
                                                data-search-url=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.search"), "html", null, true);
        yield "\"
                                                data-search-term=\"display\"
                                                data-id-property=\"displayGroupId\"
                                                data-text-property=\"display\"
                                                data-additional-property=\"displayGroupId\"
                                                data-allow-clear=\"true\"
                                                data-initial-key=\"displayGroupIds[]\"
                                                multiple>
                                        </select>
                                    </div>

                                    ";
        // line 137
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Display Groups");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 138
        yield "                                    <div class=\"form-group mr-2 mb-1 pagedSelect\" style=\"min-width: 200px\">
                                        <label class=\"control-label mr-1\" for=\"DisplayGroupList\" title=\"\"
                                            accesskey=\"\">";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</label>
                                        <select id=\"DisplayGroupList\" class=\"form-control\" name=\"displayGroupIds[]\"
                                                data-width=\"100%\"
                                                data-placeholder=\"";
        // line 143
        echo __("Display Groups");
        yield "\"
                                                data-search-url=\"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.search"), "html", null, true);
        yield "\"
                                                data-search-term=\"displayGroup\"
                                                data-id-property=\"displayGroupId\"
                                                data-text-property=\"displayGroup\"
                                                data-allow-clear=\"true\"
                                                data-initial-key=\"displayGroupIds[]\"
                                                multiple>
                                        </select>
                                    </div>
                                </div>

                                <div class=\"tab-pane\" id=\"advanced-filter\" role=\"tabpanel\">
                                    ";
        // line 156
        $context["label"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Direct Schedule?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 157
        yield "                                    ";
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Show only events scheduled directly on selected Displays/Groups");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 158
        yield "                                    <div class=\"form-group ml-2 mr-3 mb-1\">
                                        <div class=\"form-check\">
                                            <input title=\"";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "\" class=\"form-check-input\" type=\"checkbox\" id=\"directSchedule\" name=\"directSchedule\">
                                            <label class=\"form-check-label\" title=\"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "\" for=\"directSchedule\" accesskey=\"\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
        yield "</label>
                                        </div>
                                    </div>

                                    ";
        // line 165
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Only show schedules which appear on all filtered displays/groups?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 166
        yield "                                    ";
        $context["label"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Shared Schedule?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 167
        yield "                                    <div class=\"form-group ml-2 mr-3 mb-1\">
                                        <div class=\"form-check\">
                                            <input title=\"";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "\" class=\"form-check-input\" type=\"checkbox\" id=\"sharedSchedule\" name=\"sharedSchedule\">
                                            <label class=\"form-check-label\" title=\"";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "\" for=\"sharedSchedule\" accesskey=\"\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
        yield "</label>
                                        </div>
                                    </div>

                                    ";
        // line 174
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Geo Aware?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 175
        yield "                                    ";
        $context["options"] = [["id" => null, "name" => __("Both")], ["id" => 0, "name" => __("No")], ["id" => 1, "name" => __("Yes")]];
        // line 180
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["geoAware", "single", ($context["title"] ?? null), "both", ($context["options"] ?? null), "id", "name"], 180, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 182
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Recurring?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 183
        yield "                                    ";
        $context["options"] = [["id" => null, "name" => "Both"], ["id" => 0, "name" => __("No")], ["id" => 1, "name" => __("Yes")]];
        // line 188
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["recurring", "single", ($context["title"] ?? null), "both", ($context["options"] ?? null), "id", "name"], 188, $context, $this->getSourceContext());
        yield "
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class=\"XiboSchedule card\">
                    <div class=\"card-header\">
                        <ul class=\"nav nav-tabs card-header-tabs\">
                            <li class=\"nav-item\">
                                <a class=\"schedule-nav grid-nav nav-link active\" id=\"grid-tab\" href=\"#grid-view\"
                                data-schedule-view=\"grid\"
                                role=\"tab\"
                                data-toggle=\"tab\"><span>";
        // line 202
        echo __("Grid");
        yield "</span></a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"schedule-nav calendar-nav nav-link\" id=\"calendar-tab\" href=\"#calendar-view\"
                                data-schedule-view=\"calendar\"
                                data-calendar-view=\"month\"
                                role=\"tab\"
                                data-toggle=\"tab\"><span>";
        // line 209
        echo __("Calendar");
        yield "</span></a>
                            </li>
                        </ul>
                    </div>

                    <div class=\"card-body\">
                        <div class=\"xibo-calendar-header-container col-xl-12 d-inline-flex justify-content-between\">
                            <div class=\"xibo-calendar-header text-center d-inline-flex\">
                                <h1 class=\"page-header\"></h1>
                            </div>

                            <div class=\"calendar-loading\">
                                <span id=\"calendar-progress-table\" class=\"fa fa-spin fa-cog\"></span>
                                <span id=\"calendar-progress\" class=\"fa fa-spin fa-cog\"></span>
                            </div>
                        </div>

                        <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"grid-view\">
                            <div class=\"XiboData pt-3\">
                                <table id=\"schedule-grid\" class=\"table table-striped w-100\"
                                    data-state-preference-name=\"scheduleGrid\">
                                    <thead>
                                    <tr>
                                        <th>";
        // line 233
        echo __("ID");
        yield "</th>
                                        <th></th>
                                        <th>";
        // line 235
        echo __("Event Type");
        yield "</th>
                                        <th>";
        // line 236
        echo __("Name");
        yield "</th>
                                        <th>";
        // line 237
        echo __("Start");
        yield "</th>
                                        <th>";
        // line 238
        echo __("End");
        yield "</th>
                                        <th>";
        // line 239
        echo __("Event");
        yield "</th>
                                        <th>";
        // line 240
        echo __("Campaign ID");
        yield "</th>
                                        <th>";
        // line 241
        echo __("Display Groups");
        yield "</th>
                                        <th>";
        // line 242
        echo __("SoV");
        yield "</th>
                                        <th>";
        // line 243
        echo __("Max Plays per Hour");
        yield "</th>
                                        <th>";
        // line 244
        echo __("Geo Aware?");
        yield "</th>
                                        <th>";
        // line 245
        echo __("Recurring?");
        yield "</th>
                                        <th>";
        // line 246
        echo __("Recurrence Description");
        yield "</th>
                                        <th>";
        // line 247
        echo __("Recurrence Type");
        yield "</th>
                                        <th>";
        // line 248
        echo __("Recurrence Interval");
        yield "</th>
                                        <th>";
        // line 249
        echo __("Recurrence Repeats On");
        yield "</th>
                                        <th>";
        // line 250
        echo __("Recurrence End");
        yield "</th>
                                        <th>";
        // line 251
        echo __("Priority?");
        yield "</th>
                                        <th>";
        // line 252
        echo __("Criteria?");
        yield "</th>
                                        <th>";
        // line 253
        echo __("Created On");
        yield "</th>
                                        <th>";
        // line 254
        echo __("Updated On");
        yield "</th>
                                        <th>";
        // line 255
        echo __("Modified By");
        yield "</th>
                                        <th class=\"rowMenu\"></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"calendar-view\">
                            <div class=\"row\">
                                <div id=\"CalendarContainer\"
                                    data-agenda-link=\"";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.events", ["id" => ":id"]), "html", null, true);
        yield "\"
                                    data-calendar-type=\"";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "CALENDAR_TYPE", [], "any", false, false, false, 269), "html", null, true);
        yield "\" class=\"col-sm-12\"
                                    data-default-lat=\"";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["defaultLat"] ?? null), "html", null, true);
        yield "\"
                                    data-default-long=\"";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["defaultLong"] ?? null), "html", null, true);
        yield "\">
                                    <div class=\"calendar-view\" id=\"Calendar\"></div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"cal-legend\">
                                        <ul>
                                            <li class=\"event-always\"><span
                                                        class=\"fa fa-retweet\"></span> ";
        // line 280
        echo __("Always showing");
        yield "</li>
                                            <li class=\"event-info\"><span
                                                        class=\"fa fa-desktop\"></span> ";
        // line 282
        echo __("Single Display");
        yield "</li>
                                            <li class=\"event-success\"><span
                                                        class=\"fa fa-desktop\"></span> ";
        // line 284
        echo __("Multi Display");
        yield "</li>
                                            <li class=\"event-important\"><span
                                                        class=\"fa fa-bullseye\"></span> ";
        // line 286
        echo __("Priority");
        yield "</li>
                                            <li class=\"event-special\"><span
                                                        class=\"fa fa-repeat\"></span> ";
        // line 288
        echo __("Recurring");
        yield "</li>
                                            <li class=\"event-inverse\"><span
                                                        class=\"fa fa-lock\"></span> ";
        // line 290
        echo __("View Only");
        yield "</li>
                                            <li class=\"event-command\"><span
                                                        class=\"fa fa-wrench\"></span> ";
        // line 292
        echo __("Command");
        yield "</li>
                                            <li class=\"event-interrupt\"><span
                                                        class=\"fa fa-hand-paper\"></span> ";
        // line 294
        echo __("Interrupt");
        yield "</li>
                                            <li class=\"event-geo-location\"><span
                                                        class=\"fa fa-map-marker\"></span> ";
        // line 296
        echo __("Geo Location");
        yield "</li>
                                            <li class=\"event-action\"><span
                                                        class=\"fa fa-paper-plane \"></span> ";
        // line 298
        echo __("Interactive Action");
        // line 299
        yield "                                            </li>
                                            <li class=\"event-sync\"><span
                                                        class=\"fa fa-refresh\"></span> ";
        // line 301
        echo __("Synchronised");
        yield "</li>
                                        </ul>
                                    </div>
                                </div>
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

    // line 314
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 315
        yield "    ";
        // line 316
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
        ";
        // line 318
        yield "        var scheduleRecurrenceDeleteUrl = \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.recurrence.delete.form", ["id" => ":id"]), "html", null, true);
        yield "\";
        var layoutPreviewUrl = \"";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 319), "html", null, true);
        yield "preview/layout/preview/:id\";
        var scheduleSearchUrl = \"";
        // line 320
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.search"), "html", null, true);
        yield "\";
        var userAgendaViewEnabled = \"";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["schedule.agenda"], "method", false, false, false, 321), "html", null, true);
        yield "\";

        ";
        // line 324
        yield "        var schedulePageTrans = {
            always: \"";
        // line 325
        echo __("Always");
        yield "\",
            adjustTimesofTimer: \"";
        // line 326
        echo __("Adjust the times of this timer. To add or remove a day, use the Display Profile.");
        yield "\",
            daysOfTheWeek: {
                monday: \"";
        // line 328
        echo __("Monday");
        yield "\",
                tuesday: \"";
        // line 329
        echo __("Tuesday");
        yield "\",
                wednesday: \"";
        // line 330
        echo __("Wednesday");
        yield "\",
                thursday: \"";
        // line 331
        echo __("Thursday");
        yield "\",
                friday: \"";
        // line 332
        echo __("Friday");
        yield "\",
                saturday: \"";
        // line 333
        echo __("Saturday");
        yield "\",
                sunday: \"";
        // line 334
        echo __("Sunday");
        yield "\",
            },
        };
    </script>

    ";
        // line 340
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 340), "html", null, true);
        yield "dist/leaflet.bundle.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 341
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 341), "html", null, true);
        yield "dist/pages/schedule-page.bundle.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "schedule-page.twig";
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
        return array (  781 => 341,  770 => 340,  762 => 334,  758 => 333,  754 => 332,  750 => 331,  746 => 330,  742 => 329,  738 => 328,  733 => 326,  729 => 325,  726 => 324,  721 => 321,  717 => 320,  713 => 319,  708 => 318,  703 => 316,  701 => 315,  697 => 314,  680 => 301,  676 => 299,  674 => 298,  669 => 296,  664 => 294,  659 => 292,  654 => 290,  649 => 288,  644 => 286,  639 => 284,  634 => 282,  629 => 280,  617 => 271,  613 => 270,  609 => 269,  605 => 268,  589 => 255,  585 => 254,  581 => 253,  577 => 252,  573 => 251,  569 => 250,  565 => 249,  561 => 248,  557 => 247,  553 => 246,  549 => 245,  545 => 244,  541 => 243,  537 => 242,  533 => 241,  529 => 240,  525 => 239,  521 => 238,  517 => 237,  513 => 236,  509 => 235,  504 => 233,  477 => 209,  467 => 202,  449 => 188,  446 => 183,  441 => 182,  435 => 180,  432 => 175,  427 => 174,  418 => 170,  414 => 169,  410 => 167,  404 => 166,  399 => 165,  390 => 161,  386 => 160,  382 => 158,  376 => 157,  371 => 156,  356 => 144,  352 => 143,  346 => 140,  342 => 138,  337 => 137,  323 => 126,  319 => 125,  313 => 122,  309 => 120,  304 => 119,  295 => 113,  291 => 112,  285 => 109,  281 => 108,  277 => 107,  272 => 105,  267 => 102,  261 => 101,  256 => 100,  250 => 98,  245 => 97,  239 => 95,  234 => 94,  226 => 89,  222 => 88,  218 => 87,  206 => 78,  202 => 76,  197 => 75,  191 => 73,  186 => 72,  180 => 70,  175 => 69,  169 => 67,  167 => 65,  166 => 64,  165 => 63,  164 => 62,  163 => 61,  161 => 60,  155 => 59,  149 => 58,  143 => 57,  137 => 56,  131 => 55,  126 => 54,  118 => 49,  114 => 48,  107 => 44,  102 => 42,  99 => 41,  95 => 40,  86 => 36,  82 => 34,  78 => 33,  73 => 32,  71 => 31,  68 => 30,  64 => 29,  55 => 27,  50 => 23,  48 => 25,  46 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "schedule-page.twig", "/var/www/xibo/views/schedule-page.twig");
    }
}
