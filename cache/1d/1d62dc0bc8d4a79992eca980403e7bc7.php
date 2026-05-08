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

/* schedule-form-edit.twig */
class __TwigTemplate_cf442fe268015e65cb059ed23f66e51d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'formTitle' => [$this, 'block_formTitle'],
            'callBack' => [$this, 'block_callBack'],
            'formHtml' => [$this, 'block_formHtml'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 23
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "schedule-form-edit.twig", 24)->unwrap();
        // line 32
        $context["formId"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            if (($context["addForm"] ?? null)) {
                yield "scheduleAddForm";
            } else {
                yield "scheduleEditForm";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 23
        $this->parent = $this->loadTemplate("form-base.twig", "schedule-form-edit.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        yield "    ";
        echo __("Schedule Event");
        return; yield '';
    }

    // line 30
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "setupScheduleForm";
        return; yield '';
    }

    // line 34
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 38
        yield "            <div class=\"stepwizard mb-3\" data-active=\"schedule-step-1\">
                <div class=\"stepwizard-row\">
                    <div class=\"stepwizard-step col-xs-3\">
                        <a href=\"#schedule-step-1\" type=\"button\" class=\"btn btn-success btn-circle\">1</a>
                        <p><small>";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Content"), "html", null, true);
        yield "</small></p>
                    </div>
                    <div class=\"stepwizard-step col-xs-3\">
                        <a href=\"#schedule-step-2\" type=\"button\" class=\"btn btn-default btn-circle\" ";
        // line 45
        if (($context["addForm"] ?? null)) {
            yield "disabled=\"disabled\"";
        }
        yield ">2</a>
                        <p><small>";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Displays"), "html", null, true);
        yield "</small></p>
                    </div>
                    <div class=\"stepwizard-step col-xs-3\">
                        <a href=\"#schedule-step-3\" type=\"button\" class=\"btn btn-default btn-circle\" ";
        // line 49
        if (($context["addForm"] ?? null)) {
            yield "disabled=\"disabled\"";
        }
        yield ">3</a>
                        <p><small>";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Time"), "html", null, true);
        yield "</small></p>
                    </div>
                    <div class=\"stepwizard-step col-xs-3\">
                        <a href=\"#schedule-step-4\" type=\"button\" class=\"btn btn-default btn-circle\" ";
        // line 53
        if (($context["addForm"] ?? null)) {
            yield "disabled=\"disabled\"";
        }
        yield ">4</a>
                        <p><small>";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Optional"), "html", null, true);
        yield "</small></p>
                    </div>
                </div>
            </div>

            ";
        // line 59
        $context["dayPartMessage"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select the start time for this event");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        yield "            ";
        $context["notDayPartMessage"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Start and end time will be defined by the daypart's configuration for this day of the week. Use a repeating schedule to apply this event over multiple days");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 61
        yield "
            <form id=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["formId"] ?? null), "html", null, true);
        yield "\" autocomplete=\"off\" class=\"form-horizontal stepwizard-form\"
                ";
        // line 63
        if (($context["addForm"] ?? null)) {
            // line 64
            yield "                    method=\"post\"
                    action=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.add"), "html", null, true);
            yield "\"
                    data-open-step-2=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["skipFirstStep"] ?? null), "html", null, true);
            yield "\"
                ";
        } else {
            // line 68
            yield "                    method=\"put\"
                    action=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "eventId", [], "any", false, false, false, 69)]), "html", null, true);
            yield "\"
                ";
        }
        // line 71
        yield "                    data-event-id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "eventId", [], "any", false, false, false, 71), "html", null, true);
        yield "\"
                    data-event-start=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["eventStart"] ?? null), "html", null, true);
        yield "\"
                    data-event-end=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["eventEnd"] ?? null), "html", null, true);
        yield "\"
                    data-daypart-message=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["dayPartMessage"] ?? null), "html", null, true);
        yield "\"
                    data-not-daypart-message=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["notDayPartMessage"] ?? null), "html", null, true);
        yield "\"
                    data-add-url=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.add"), "html", null, true);
        yield "\"
                    data-duplicated-message=\"";
        // line 77
        echo __("Duplicate form loaded, make adjustments and press save.");
        yield "\"
                    data-default-lat=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["defaultLat"] ?? null), "html", null, true);
        yield "\"
                    data-default-long=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["defaultLong"] ?? null), "html", null, true);
        yield "\"
                    data-full-screen-url=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.add.full.screen.schedule"), "html", null, true);
        yield "\"
                    data-fetch-sync-displays=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("syncgroup.fetch.displays", ["id" => ":id"]), "html", null, true);
        yield "\"
                    data-event-sync-group-id=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "syncGroupId", [], "any", false, false, false, 82), "html", null, true);
        yield "\"
                    data-delete-url=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.delete.form", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "eventId", [], "any", false, false, false, 83)]), "html", null, true);
        yield "\"
                    data-set-displays-from-grid-filters=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["setDisplaysFromFilter"] ?? null), "html", null, true);
        yield "\">

                    ";
        // line 87
        yield "                    <div class=\"panel panel-default stepwizard-content\" id=\"schedule-step-1\" data-step=\"1\" data-next=\"schedule-step-2\" data-previous=\"start\">
                        ";
        // line 88
        if (($context["hideEventType"] ?? null)) {
            // line 89
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["eventTypeId", CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "eventTypeId", [], "any", false, false, false, 89)], 89, $context, $this->getSourceContext());
            yield "
                        ";
        } else {
            // line 91
            yield "                            ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Event Type");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 92
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Select the type of event to schedule");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 93
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["eventTypeId", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "eventTypeId", [], "any", false, false, false, 93), ($context["eventTypes"] ?? null), "eventTypeId", "eventTypeName", ($context["helpText"] ?? null)], 93, $context, $this->getSourceContext());
            yield "
                        ";
        }
        // line 95
        yield "
                        ";
        // line 97
        yield "                        ";
        $context["attributes"] = [["name" => "data-search-url", "value" => ($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.search") . "?type=list")], ["name" => "data-search-is-layout-specific", "value" =>  -1], ["name" => "data-trans-layout", "value" => __("Layout")], ["name" => "data-trans-layout-help-text", "value" => __("Please select a Layout for this Event to show")], ["name" => "data-trans-campaign", "value" => __("Campaign")], ["name" => "data-trans-campaign-help-text", "value" => __("Please select a Campaign for this Event to show")], ["name" => "data-search-term", "value" => "campaign"], ["name" => "data-id-property", "value" => "campaignId"], ["name" => "data-text-property", "value" => "campaign"], ["name" => "data-selected-property", "value" => "selected"], ["name" => "data-additional-property", "value" => "hasFullScreenLayout"], ["name" => "data-initial-key", "value" => "campaignId"], ["name" => "data-initial-value", "value" => (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,         // line 110
($context["event"] ?? null), "campaignId", [], "any", false, false, false, 110))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "campaignId", [], "any", false, false, false, 110)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "getUnmatchedProperty", ["campaignId"], "method", false, false, false, 110)))]];
        // line 112
        yield "                        ";
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            if (($context["fromCampaign"] ?? null)) {
                echo __("Campaign");
            } else {
                echo __("Layout");
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 113
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select a Layout for this Event to show");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 114
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["campaignId", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "campaignId", [], "any", false, false, false, 114), [($context["campaign"] ?? null)], "campaignId", "campaign", ($context["helpText"] ?? null), "layout-control pagedSelect", "", "", "", ($context["attributes"] ?? null), "", "", "", ($context["readonlySelect"] ?? null)], 114, $context, $this->getSourceContext());
        yield "

                        ";
        // line 117
        yield "                        ";
        $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => ($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.search") . "?fullScreenScheduleCheck=true&types[]=image&types[]=video")], ["name" => "data-search-term", "value" => "media"], ["name" => "data-id-property", "value" => "mediaId"], ["name" => "data-text-property", "value" => "name"], ["name" => "data-selected-property", "value" => "selected"], ["name" => "data-additional-property", "value" => "hasFullScreenLayout"], ["name" => "data-initial-key", "value" => "mediaId"], ["name" => "data-initial-value", "value" => (( !Twig\Extension\CoreExtension::testEmpty(        // line 126
($context["mediaId"] ?? null))) ? (($context["mediaId"] ?? null)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "getUnmatchedProperty", ["mediaId"], "method", false, false, false, 126)))]];
        // line 128
        yield "                        ";
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Media");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 129
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select a Media file from the Library to use. The selected file will be shown full screen for this event.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 130
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["mediaId", "single", ($context["title"] ?? null), "", null, "mediaId", "name", ($context["helpText"] ?? null), "media-control full-screen-control pagedSelect", "", "d", "", ($context["attributes"] ?? null)], 130, $context, $this->getSourceContext());
        yield "

                        ";
        // line 133
        yield "                        ";
        $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => ($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.search") . "?fullScreenScheduleCheck=true")], ["name" => "data-search-term", "value" => "name"], ["name" => "data-id-property", "value" => "playlistId"], ["name" => "data-text-property", "value" => "name"], ["name" => "data-selected-property", "value" => "selected"], ["name" => "data-additional-property", "value" => "hasFullScreenLayout"], ["name" => "data-initial-key", "value" => "playlistId"], ["name" => "data-initial-value", "value" => (( !Twig\Extension\CoreExtension::testEmpty(        // line 142
($context["playlistId"] ?? null))) ? (($context["playlistId"] ?? null)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "getUnmatchedProperty", ["playlistId"], "method", false, false, false, 142)))]];
        // line 144
        yield "                        ";
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Playlist");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 145
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select a Playlist to use. The selected playlist will be shown full screen for this event.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 146
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["playlistId", "single", ($context["title"] ?? null), "", null, "playlistId", "name", ($context["helpText"] ?? null), "playlist-control full-screen-control pagedSelect", "", "d", "", ($context["attributes"] ?? null)], 146, $context, $this->getSourceContext());
        yield "

                        <div style=\"";
        // line 148
        if ( !(CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["campaign.view"], "method", false, false, false, 148) || CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["layout.view"], "method", false, false, false, 148))) {
            yield "display: none;";
        }
        yield "\">
                            <div class=\"form-group row preview-button-container\">
                                <div class=\"offset-md-2 col-md-10\">
                                    <a id=\"previewButton\" class=\"btn btn-success\" target=\"_blank\" data-url=\"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.preview", ["id" => ":id"]), "html", null, true);
        yield "\">";
        echo __("Preview");
        yield " <span class=\"fa fa-tablet\"></span></a>
                                    <small class=\"form-text text-muted\">";
        // line 152
        echo __("Preview your selection in a new tab");
        yield "</small>
                                </div>
                            </div>
                        </div>

                        ";
        // line 157
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Sync Group");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 158
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select existing Sync Group");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 159
        yield "                        ";
        $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => ($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("syncgroup.search") . "?hasLeadDisplay=1")], ["name" => "data-search-term", "value" => "name"], ["name" => "data-id-property", "value" => "syncGroupId"], ["name" => "data-text-property", "value" => "name"], ["name" => "data-initial-key", "value" => "syncGroupId"], ["name" => "data-initial-value", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 166
($context["event"] ?? null), "syncGroupId", [], "any", false, false, false, 166)]];
        // line 168
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["syncGroupId", "single", ($context["title"] ?? null), "", null, "syncGroupId", "name", ($context["helpText"] ?? null), "pagedSelect sync-group-control", "", "", "", ($context["attributes"] ?? null)], 168, $context, $this->getSourceContext());
        yield "

                        <div id=\"content-selector\" class=\"form-group col-sm-12 sync-group-content-selector\" style=\"display: none; max-height: 40vh; overflow-y: auto\">
                            <div class=\"XiboData card\">
                                <table id=\"contentSelectorTable\" class=\"table table-striped\">
                                    <thead>
                                    <tr>
                                        <th>";
        // line 175
        echo __("ID");
        yield "</th>
                                        <th>";
        // line 176
        echo __("Name");
        yield "</th>
                                        <th>";
        // line 177
        echo __("Layout");
        yield "</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        ";
        // line 187
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Action Type");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 188
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select action Type");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 189
        yield "                        ";
        $context["navLayout"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Navigate to Layout");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 190
        yield "                        ";
        $context["command"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Command");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 191
        yield "                        ";
        $context["options"] = [["typeid" => "navLayout", "type" =>         // line 192
($context["navLayout"] ?? null)], ["typeid" => "command", "type" =>         // line 193
($context["command"] ?? null)]];
        // line 195
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["actionType", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "actionType", [], "any", false, false, false, 195), ($context["options"] ?? null), "typeid", "type", ($context["helpText"] ?? null), "action-control"], 195, $context, $this->getSourceContext());
        yield "

                        ";
        // line 197
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Trigger Code");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 198
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Web hook trigger code for this Action");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 199
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["actionTriggerCode", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "actionTriggerCode", [], "any", false, false, false, 199), ($context["helpText"] ?? null), "action-control"], 199, $context, $this->getSourceContext());
        yield "

                        ";
        // line 201
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Layout Code");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 202
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select the Code identifier for the Layout that Player should navigate to when this Action is triggered.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 203
        yield "
                        ";
        // line 204
        $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.code.search")], ["name" => "data-search-term", "value" => "code"], ["name" => "data-id-property", "value" => "code"], ["name" => "data-text-property", "value" => "code"], ["name" => "data-initial-key", "value" => "code"], ["name" => "data-initial-value", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 211
($context["event"] ?? null), "actionLayoutCode", [], "any", false, false, false, 211)]];
        // line 213
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["actionLayoutCode", "single", ($context["title"] ?? null), "", null, "code", "code", ($context["helpText"] ?? null), "pagedSelect action-control layout-code-control", "", "", "", ($context["attributes"] ?? null)], 213, $context, $this->getSourceContext());
        yield "

                        ";
        // line 215
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Command");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 216
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select a command for this Event.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 217
        yield "                        ";
        $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("command.search")], ["name" => "data-search-term", "value" => "command"], ["name" => "data-id-property", "value" => "commandId"], ["name" => "data-text-property", "value" => "command"], ["name" => "data-initial-key", "value" => "commandId"], ["name" => "data-initial-value", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 224
($context["event"] ?? null), "commandId", [], "any", false, false, false, 224)]];
        // line 226
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["commandId", "single", ($context["title"] ?? null), "", null, "commandId", "command", ($context["helpText"] ?? null), "pagedSelect command-control", "", "", "", ($context["attributes"] ?? null)], 226, $context, $this->getSourceContext());
        yield "

                        ";
        // line 228
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("DataSet");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 229
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select the real time DataSet related to this Data Connector event");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 230
        yield "
                        ";
        // line 231
        $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => ($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataSet.search") . "?isRealTime=1")], ["name" => "data-search-term", "value" => "dataSet"], ["name" => "data-id-property", "value" => "dataSetId"], ["name" => "data-text-property", "value" => "dataSet"], ["name" => "data-initial-key", "value" => "dataSetId"], ["name" => "data-initial-value", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 238
($context["event"] ?? null), "dataSetId", [], "any", false, false, false, 238)]];
        // line 240
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["dataSetId", "single", ($context["title"] ?? null), "", CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "dataSetId", [], "any", false, false, false, 240), "dataSetId", "dataSet", ($context["helpText"] ?? null), "pagedSelect data-connector-control", "", "", "", ($context["attributes"] ?? null)], 240, $context, $this->getSourceContext());
        yield "

                        ";
        // line 242
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Data Connector Parameters");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 243
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Optionally provide any parameters to be used by the Data Connector.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 244
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["dataSetParams", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "dataSetParams", [], "any", false, false, false, 244), ($context["helpText"] ?? null), "data-connector-control"], 244, $context, $this->getSourceContext());
        yield "

                        ";
        // line 246
        if (($context["showRecurringInstance"] ?? null)) {
            // line 247
            yield "                            <div class=\"card p-3 mb-3 bg-light text-primary text-center form-error\">
                                <p>This is an instance of a scheduled recurring event:
                                    <span class=\"fa fa-info-circle\"
                                        data-toggle=\"popover\"
                                        data-trigger=\"hover\"
                                        data-placement=\"bottom\"
                                        data-content=\"";
            // line 253
            echo __("Editing the Start and or End date/time will create a new Recurring Event across the Schedule. Any previously deleted instances of this event will be recreated with edits made here.");
            yield "\"></span></p>
                                <p>
                                    Starting from <span class=\"text-warning\"><b id=\"instanceStartDate\">-</b></span> to <span class=\"text-warning\"><b id=\"instanceEndDate\">-</b></span>
                                </p>
                                <div id=\"recurringInfo\"></div>
                            </div>
                        ";
        }
        // line 260
        yield "                    </div>

                    ";
        // line 263
        yield "                    <div class=\"panel panel-default stepwizard-content\" style=\"display:none;\" id=\"schedule-step-2\" data-step=\"2\" data-next=\"schedule-step-3\" data-previous=\"schedule-step-1\">
                        ";
        // line 264
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Display");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 265
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select one or more displays / groups for this event to be shown on.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 266
        yield "                        ";
        $context["attributes"] = [["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.search")], ["name" => "data-trans-groups", "value" => __("Groups")], ["name" => "data-trans-display", "value" => __("Display")], ["name" => "data-initial-key", "value" => "displayGroupIds[]"], ["name" => "data-id-property", "value" => "displayGroupId"], ["name" => "data-text-property", "value" => "displayGroup"]];
        // line 274
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["displayGroupIds[]", "dropdownmulti", ($context["title"] ?? null), ($context["displayGroupIds"] ?? null), ($context["displayGroups"] ?? null), "displayGroupId", "displayGroup", ($context["helpText"] ?? null), "display-group-control", "", "", "", ($context["attributes"] ?? null)], 274, $context, $this->getSourceContext());
        yield "

                        <div class=\"alert alert-info sync-group-control\">";
        // line 276
        echo __("For Synchronized event, displays are selected on the Content step.");
        yield "</div>
                    </div>

                    ";
        // line 280
        yield "                    <div class=\"panel panel-default stepwizard-content\" style=\"display:none;\" id=\"schedule-step-3\" data-step=\"3\" data-next=\"schedule-step-4\" data-previous=\"schedule-step-2\">
                        ";
        // line 281
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Dayparting");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 282
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select the dayparting information for this event. To set your own times select custom and to have the event run constantly select Always.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 283
        yield "                        <div class=\"form-group row day-part-control\">
                            <label class=\"col-sm-2 control-label\" for=\"dayPartId\">";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</label>
                            <div class=\"col-sm-10\">
                                <select class=\"form-control\" name=\"dayPartId\" id=\"dayPartId\">
                                    ";
        // line 287
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["dayParts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dayPart"]) {
            // line 288
            yield "                                        <option ";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["dayPart"], "dayPartId", [], "any", false, false, false, 288) == CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "dayPartId", [], "any", false, false, false, 288)) || ( !CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "dayPartId", [], "any", false, false, false, 288) && (CoreExtension::getAttribute($this->env, $this->source, $context["dayPart"], "isCustom", [], "any", false, false, false, 288) == 2)))) {
                yield "selected";
            }
            // line 289
            yield "                                                value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dayPart"], "dayPartId", [], "any", false, false, false, 289), "html", null, true);
            yield "\"
                                                data-is-always=\"";
            // line 290
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dayPart"], "isAlways", [], "any", false, false, false, 290), "html", null, true);
            yield "\"
                                                data-is-custom=\"";
            // line 291
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dayPart"], "isCustom", [], "any", false, false, false, 291), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dayPart"], "name", [], "any", false, false, false, 291), "html", null, true);
            yield "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dayPart'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 293
        yield "                                </select>
                                <small class=\"form-text text-muted\">";
        // line 294
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
        yield "</small>
                            </div>
                        </div>

                        ";
        // line 298
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Start Time");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 299
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select the start time for this event");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 300
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dateTime", ["fromDt", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "fromDt", [], "any", false, false, false, 300), ($context["helpText"] ?? null), "starttime-control", "required", ""], 300, $context, $this->getSourceContext());
        yield "

                        ";
        // line 302
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("End Time");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 303
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select the end time for this event");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 304
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dateTime", ["toDt", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "toDt", [], "any", false, false, false, 304), ($context["helpText"] ?? null), "endtime-control", "required", ""], 304, $context, $this->getSourceContext());
        yield "

                        ";
        // line 306
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Use Relative time?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 307
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Switch between relative time inputs and Date pickers for start and end time.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 308
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["relativeTime", ($context["title"] ?? null), ($context["relativeTime"] ?? null), ($context["helpText"] ?? null), "relative-time-checkbox"], 308, $context, $this->getSourceContext());
        yield "

                        ";
        // line 310
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Hours");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 311
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Hours this event should be scheduled for");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 312
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["hours", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "duration-part relative-time-control"], 312, $context, $this->getSourceContext());
        yield "

                        ";
        // line 314
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Minutes");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 315
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Minutes this event should be scheduled for");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 316
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["minutes", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "duration-part relative-time-control"], 316, $context, $this->getSourceContext());
        yield "

                        ";
        // line 318
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Seconds");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 319
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Seconds this event should be scheduled for");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 320
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["seconds", ($context["title"] ?? null), "", ($context["helpText"] ?? null), "schedule-now-seconds-field duration-part relative-time-control"], 320, $context, $this->getSourceContext());
        yield "

                        ";
        // line 322
        $context["messageNoSyncTimezone"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Your event will be scheduled from [fromDt] to [toDt] in each of your selected Displays respective timezones");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 323
        yield "                        ";
        $context["messageSyncTimezone"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Your event will be scheduled from [fromDt] to [toDt] in the CMS timezone, please check this covers each of your Displays in their respective timezones.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 324
        yield "                        <div class=\"alert alert-info scheduleNowMessage d-none relative-time-control\" data-template-sync=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["messageSyncTimezone"] ?? null), "html", null, true);
        yield "\" data-template-no-sync=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["messageNoSyncTimezone"] ?? null), "html", null, true);
        yield "\"></div>

                        <div class=\"form-group row interrupt-control\">
                            <label class=\"col-sm-2 control-label\" for=\"shareOfVoice\" accesskey=\"\">";
        // line 327
        echo __("Share of Voice");
        yield "</label>
                            <div class=\"col-sm-5\">
                                <input class=\"form-control\" name=\"shareOfVoice\" type=\"number\" id=\"shareOfVoice\" value=\"";
        // line 329
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "shareOfVoice", [], "any", false, false, false, 329), "html", null, true);
        yield "\" min=\"0\" max=\"3600\" step=\"1\">
                                <small class=\"form-text text-muted\">";
        // line 330
        echo __("The amount of time this Layout should be shown, in seconds per hour.");
        yield "</small>
                            </div>

                            <div class=\"col-sm-5\">
                                <input class=\"form-control\" name=\"shareOfVoicePercentage\" type=\"number\" id=\"shareOfVoicePercentage\" value=\"\">
                                <small class=\"form-text text-muted\">";
        // line 335
        echo __("As a percentage");
        yield "</small>
                            </div>
                        </div>
                    </div>

                    ";
        // line 341
        yield "                    <div class=\"panel panel-default stepwizard-content\" style=\"display:none;\" id=\"schedule-step-4\" data-step=\"4\" data-next=\"finished\" data-previous=\"schedule-step-3\">
                        <ul class=\"nav nav-tabs\" role=\"tablist\">
                            <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 343
        echo __("General");
        yield "</span></a></li>
                            <li class=\"nav-item repeats\"><a class=\"nav-link\" href=\"#repeats\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 344
        echo __("Repeats");
        yield "</span></a></li>
                            ";
        // line 345
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["schedule.reminders"], "method", false, false, false, 345)) {
            // line 346
            yield "                                <li class=\"nav-item reminders\"><a class=\"nav-link\" href=\"#reminders\" role=\"tab\" data-toggle=\"tab\"><span>";
            echo __("Reminder");
            yield "</span></a></li>
                            ";
        }
        // line 348
        yield "                            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["schedule.geoLocation"], "method", false, false, false, 348)) {
            // line 349
            yield "                                <li class=\"nav-item geoSchedule\"><a class=\"nav-link\" href=\"#geoSchedule\" role=\"tab\" data-toggle=\"tab\"><span>";
            echo __("Geo Location");
            yield "</span></a></li>
                            ";
        }
        // line 351
        yield "                            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["schedule.criteria"], "method", false, false, false, 351)) {
            // line 352
            yield "                                <li class=\"nav-item criteria\"><a class=\"nav-link\" href=\"#tab-criteria\" role=\"tab\" data-toggle=\"tab\"><span>";
            echo __("Criteria");
            yield "</span></a></li>
                            ";
        }
        // line 354
        yield "                        </ul>
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active\" id=\"general\">
                                ";
        // line 357
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 358
        yield "                                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Optional Name for this Event (1-50 characters)");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 359
        yield "                                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["name", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "name", [], "any", false, false, false, 359), ($context["helpText"] ?? null)], 359, $context, $this->getSourceContext());
        yield "

                                ";
        // line 361
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Duration in loop");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 362
        yield "                                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Set how long this item should be shown each time it appears in the schedule. Leave blank to use the Media Duration set in the Library.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 363
        yield "                                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["layoutDuration", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "layoutDuration", [], "any", false, false, false, 363), ($context["helpText"] ?? null), "media-control-option hidden"], 363, $context, $this->getSourceContext());
        yield "

                                ";
        // line 365
        $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("resolution.search")], ["name" => "data-search-term", "value" => "media"], ["name" => "data-id-property", "value" => "resolutionId"], ["name" => "data-text-property", "value" => "resolution"], ["name" => "data-additional-property", "value" => "hasFullScreenLayout"], ["name" => "data-initial-key", "value" => "resolutionId"], ["name" => "data-initial-value", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 373
($context["event"] ?? null), "resolutionId", [], "any", false, false, false, 373)]];
        // line 375
        yield "                                ";
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Resolution");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 376
        yield "                                ";
        $context["helpTextMedia"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Optionally select a Resolution to use for the selected Media. Leave blank to match with an existing Resolution closest in size to the selected media.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 377
        yield "                                ";
        $context["helpTextPlaylist"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Optionally select a Resolution to use for the selected Media. Leave blank to match with an existing Resolution closest in size to the selected media.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 378
        yield "                                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["resolutionId", "single", ($context["title"] ?? null), "", null, "resolutionId", "resolution", ($context["helpTextMedia"] ?? null), "fs-control-option pagedSelect hidden", "", "d", "", ($context["attributes"] ?? null)], 378, $context, $this->getSourceContext());
        yield "

                                ";
        // line 380
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Background Colour");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 381
        yield "                                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Optionally set a colour to use as a background for if the item selected does not fill the entire screen.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 382
        yield "                                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_colorPicker", ["backgroundColor", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "backgroundColor", [], "any", false, false, false, 382), ($context["helpText"] ?? null), "fs-control-option hidden"], 382, $context, $this->getSourceContext());
        yield "

                                ";
        // line 384
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Display Order");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 385
        yield "                                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Please select the order this event should appear in relation to others when there is more than one event scheduled");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 386
        yield "                                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["displayOrder", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "displayOrder", [], "any", false, false, false, 386), ($context["helpText"] ?? null), "displayOrder-control", "", "", "", "0"], 386, $context, $this->getSourceContext());
        yield "

                                ";
        // line 388
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Priority");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 389
        yield "                                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Sets the event priority - events with the highest priority play in preference to lower priority events.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 390
        yield "                                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["isPriority", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "isPriority", [], "any", false, false, false, 390), ($context["helpText"] ?? null), "priority-control", "", "", "", "0"], 390, $context, $this->getSourceContext());
        yield "

                                ";
        // line 392
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Maximum plays per hour");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 393
        yield "                                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Limit the number of times this event will play per hour on each display. For unlimited plays set to 0.");
            yield CoreExtension::callMacro($macros["forms"], "macro_playerCompat", ["R308", "", "", "", "R306", ""], 393, $context, $this->getSourceContext());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 394
        yield "                                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["maxPlaysPerHour", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "maxPlaysPerHour", [], "any", false, false, false, 394), ($context["helpText"] ?? null), "max-plays-control", "", "", "", "0"], 394, $context, $this->getSourceContext());
        yield "

                                ";
        // line 396
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Run at CMS Time?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 397
        yield "                                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("When selected, your event will run according to the timezone set on the CMS, otherwise the event will run at Display local time");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 398
        yield "                                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["syncTimezone", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "syncTimezone", [], "any", false, false, false, 398), ($context["helpText"] ?? null)], 398, $context, $this->getSourceContext());
        yield "
                            </div>

                            <div class=\"tab-pane\" id=\"repeats\">
                                ";
        // line 402
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Repeats");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 403
        yield "                                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Select the type of Repeat required for this Event.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 404
        yield "                                ";
        $context["noneOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("None");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 405
        yield "                                ";
        $context["minute"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Per Minute");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 406
        yield "                                ";
        $context["hourly"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Hourly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 407
        yield "                                ";
        $context["daily"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Daily");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 408
        yield "                                ";
        $context["weekly"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Weekly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 409
        yield "                                ";
        $context["monthly"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Monthly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 410
        yield "                                ";
        $context["yearly"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Yearly");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 411
        yield "                                ";
        $context["options"] = [["id" => "", "name" =>         // line 412
($context["noneOption"] ?? null)], ["id" => "Minute", "name" =>         // line 413
($context["minute"] ?? null)], ["id" => "Hour", "name" =>         // line 414
($context["hourly"] ?? null)], ["id" => "Day", "name" =>         // line 415
($context["daily"] ?? null)], ["id" => "Week", "name" =>         // line 416
($context["weekly"] ?? null)], ["id" => "Month", "name" =>         // line 417
($context["monthly"] ?? null)], ["id" => "Year", "name" =>         // line 418
($context["yearly"] ?? null)]];
        // line 420
        yield "                                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["recurrenceType", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "recurrenceType", [], "any", false, false, false, 420), ($context["options"] ?? null), "id", "name", ($context["helpText"] ?? null)], 420, $context, $this->getSourceContext());
        yield "

                                ";
        // line 422
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Use the drop-down to select which days of the week this Event should be repeated");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 423
        yield "                                ";
        $context["monday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Monday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 424
        yield "                                ";
        $context["tuesday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Tuesday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 425
        yield "                                ";
        $context["wednesday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Wednesday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 426
        yield "                                ";
        $context["thursday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Thursday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 427
        yield "                                ";
        $context["friday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Friday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 428
        yield "                                ";
        $context["saturday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Saturday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 429
        yield "                                ";
        $context["sunday"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Sunday");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 430
        yield "                                ";
        $context["options"] = [["id" => 1, "name" =>         // line 431
($context["monday"] ?? null)], ["id" => 2, "name" =>         // line 432
($context["tuesday"] ?? null)], ["id" => 3, "name" =>         // line 433
($context["wednesday"] ?? null)], ["id" => 4, "name" =>         // line 434
($context["thursday"] ?? null)], ["id" => 5, "name" =>         // line 435
($context["friday"] ?? null)], ["id" => 6, "name" =>         // line 436
($context["saturday"] ?? null)], ["id" => 7, "name" =>         // line 437
($context["sunday"] ?? null)]];
        // line 439
        yield "                                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["recurrenceRepeatsOn[]", "dropdownmulti", "", CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "recurrenceRepeatsOn", [], "any", false, false, false, 439), ($context["options"] ?? null), "id", "name", ($context["helpText"] ?? null), "repeat-weekly-control-group"], 439, $context, $this->getSourceContext());
        yield "

                                ";
        // line 441
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Should this Event Repeat by Day of the month (eg. Monthly on Day 21) or by a Weekday in the month (eg. Monthly on the third Thursday)");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 442
        yield "                                ";
        $context["attributes"] = [["name" => "data-value", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 443
($context["event"] ?? null), "recurrenceMonthlyRepeatsOn", [], "any", false, false, false, 443)], ["name" => "data-trans-day", "value" => __("on the [DAY] day")], ["name" => "data-trans-weekday", "value" => __("on the [POSITION] [WEEKDAY]")]];
        // line 447
        yield "                                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["recurrenceMonthlyRepeatsOn", "single", "", CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "recurrenceMonthlyRepeatsOn", [], "any", false, false, false, 447), [["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "recurrenceMonthlyRepeatsOn", [], "any", false, false, false, 447), "name" => ""]], "id", "name", ($context["helpText"] ?? null), "repeat-monthly-control-group", "", "", "", ($context["attributes"] ?? null)], 447, $context, $this->getSourceContext());
        yield "

                                ";
        // line 449
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Every");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 450
        yield "                                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Include a number to determine the Repeat frequency required for this Event.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 451
        yield "                                <div class=\"form-group row repeat-control-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"recurrenceDetail\">";
        // line 452
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"input-group\">
                                            <input class=\"form-control\" name=\"recurrenceDetail\" min=\"0\" type=\"number\" id=\"recurrenceDetail\" value=\"";
        // line 455
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "recurrenceDetail", [], "any", false, false, false, 455), "html", null, true);
        yield "\" />
                                            <div class=\"input-group-append\">
                                                <span class=\"input-group-text input-group-addon\"></span>
                                            </div>
                                        </div>
                                        <span class=\"form-text text-muted\">";
        // line 460
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
        yield "</span>
                                    </div>
                                </div>

                                ";
        // line 464
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Until");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 465
        yield "                                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Provide a date and time to end the Repeat for this Event. Leave empty to Repeat indefinitely.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 466
        yield "                                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dateTime", ["recurrenceRange", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "recurrenceRange", [], "any", false, false, false, 466), ($context["helpText"] ?? null), "repeat-control-group", "", ""], 466, $context, $this->getSourceContext());
        yield "
                            </div>

                            <div class=\"tab-pane\" id=\"reminders\">
                                ";
        // line 470
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Use the form fields below to create a set of reminders for this event. New fields can be added by clicking on the + icon at the end of the row. Use the tick box to receive a notification by email alternatively reminders will be shown in the message center.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 471
        yield "                                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 471, $context, $this->getSourceContext());
        yield "
                                <div id=\"reminderFields\" data-reminders=\"";
        // line 472
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["reminders"] ?? null)), "html", null, true);
        yield "\"></div>
                            </div>

                            <div class=\"tab-pane\" id=\"geoSchedule\">
                                ";
        // line 476
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Geo Schedule?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 477
        yield "                                ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Should this event be location aware? Enable this checkbox and select an area by drawing a polygon or rectangle layer on the map below.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 478
        yield "                                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isGeoAware", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "isGeoAware", [], "any", false, false, false, 478), ($context["helpText"] ?? null), ""], 478, $context, $this->getSourceContext());
        yield "

                                <div id=\"geoScheduleMap\" style=\"height: 500px; width: 100%\" class=\"d-none\"></div>

                                ";
        // line 482
        yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["geoLocation", CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "geoLocation", [], "any", false, false, false, 482)], 482, $context, $this->getSourceContext());
        yield "
                            </div>

                            <div class=\"tab-pane\" id=\"tab-criteria\">
                                ";
        // line 486
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Set criteria to determine when this event is active. All conditions must be true for an event to be included in the schedule loop. Events without criteria are always active.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 487
        yield "                                ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 487, $context, $this->getSourceContext());
        yield "

                                <div class=\"form-criteria-field-headings\">
                                    <div class=\"form-group schedule-criteria-row\">
                                        <div class=\"col-form-label schedule-criteria-cell schedule-criteria-type\">";
        // line 491
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Type"), "html", null, true);
        yield "</div>
                                        <div class=\"col-form-label schedule-criteria-cell schedule-criteria-metric\">";
        // line 492
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Metric"), "html", null, true);
        yield "</div>
                                        <div class=\"col-form-label schedule-criteria-cell schedule-criteria-condition\">";
        // line 493
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Condition"), "html", null, true);
        yield "</div>
                                        <div class=\"col-form-label schedule-criteria-cell schedule-criteria-value\">";
        // line 494
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Value"), "html", null, true);
        yield "</div>
                                    </div>
                                </div>

                                <div id=\"scheduleCriteriaFields\" data-criteria=\"";
        // line 498
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "criteria", [], "any", false, false, false, 498)), "html", null, true);
        yield "\" data-schedule-criteria=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["scheduleCriteria"] ?? null)), "html_attr");
        yield "\" data-criteria-default-condition=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["criteriaDefaultCondition"] ?? null)), "html_attr");
        yield "\"></div>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "schedule-form-edit.twig";
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
        return array (  1270 => 498,  1263 => 494,  1259 => 493,  1255 => 492,  1251 => 491,  1243 => 487,  1238 => 486,  1231 => 482,  1223 => 478,  1217 => 477,  1212 => 476,  1205 => 472,  1200 => 471,  1195 => 470,  1187 => 466,  1181 => 465,  1176 => 464,  1169 => 460,  1161 => 455,  1155 => 452,  1152 => 451,  1146 => 450,  1141 => 449,  1135 => 447,  1133 => 443,  1131 => 442,  1126 => 441,  1120 => 439,  1118 => 437,  1117 => 436,  1116 => 435,  1115 => 434,  1114 => 433,  1113 => 432,  1112 => 431,  1110 => 430,  1104 => 429,  1098 => 428,  1092 => 427,  1086 => 426,  1080 => 425,  1074 => 424,  1068 => 423,  1063 => 422,  1057 => 420,  1055 => 418,  1054 => 417,  1053 => 416,  1052 => 415,  1051 => 414,  1050 => 413,  1049 => 412,  1047 => 411,  1041 => 410,  1035 => 409,  1029 => 408,  1023 => 407,  1017 => 406,  1011 => 405,  1005 => 404,  999 => 403,  994 => 402,  986 => 398,  980 => 397,  975 => 396,  969 => 394,  962 => 393,  957 => 392,  951 => 390,  945 => 389,  940 => 388,  934 => 386,  928 => 385,  923 => 384,  917 => 382,  911 => 381,  906 => 380,  900 => 378,  894 => 377,  888 => 376,  882 => 375,  880 => 373,  879 => 365,  873 => 363,  867 => 362,  862 => 361,  856 => 359,  850 => 358,  845 => 357,  840 => 354,  834 => 352,  831 => 351,  825 => 349,  822 => 348,  816 => 346,  814 => 345,  810 => 344,  806 => 343,  802 => 341,  794 => 335,  786 => 330,  782 => 329,  777 => 327,  768 => 324,  762 => 323,  757 => 322,  751 => 320,  745 => 319,  740 => 318,  734 => 316,  728 => 315,  723 => 314,  717 => 312,  711 => 311,  706 => 310,  700 => 308,  694 => 307,  689 => 306,  683 => 304,  677 => 303,  672 => 302,  666 => 300,  660 => 299,  655 => 298,  648 => 294,  645 => 293,  635 => 291,  631 => 290,  626 => 289,  621 => 288,  617 => 287,  611 => 284,  608 => 283,  602 => 282,  597 => 281,  594 => 280,  588 => 276,  582 => 274,  579 => 266,  573 => 265,  568 => 264,  565 => 263,  561 => 260,  551 => 253,  543 => 247,  541 => 246,  535 => 244,  529 => 243,  524 => 242,  518 => 240,  516 => 238,  515 => 231,  512 => 230,  506 => 229,  501 => 228,  495 => 226,  493 => 224,  491 => 217,  485 => 216,  480 => 215,  474 => 213,  472 => 211,  471 => 204,  468 => 203,  462 => 202,  457 => 201,  451 => 199,  445 => 198,  440 => 197,  434 => 195,  432 => 193,  431 => 192,  429 => 191,  423 => 190,  417 => 189,  411 => 188,  406 => 187,  393 => 177,  389 => 176,  385 => 175,  374 => 168,  372 => 166,  370 => 159,  364 => 158,  359 => 157,  351 => 152,  345 => 151,  337 => 148,  331 => 146,  325 => 145,  319 => 144,  317 => 142,  315 => 133,  309 => 130,  303 => 129,  297 => 128,  295 => 126,  293 => 117,  287 => 114,  281 => 113,  271 => 112,  269 => 110,  267 => 97,  264 => 95,  258 => 93,  252 => 92,  246 => 91,  240 => 89,  238 => 88,  235 => 87,  230 => 84,  226 => 83,  222 => 82,  218 => 81,  214 => 80,  210 => 79,  206 => 78,  202 => 77,  198 => 76,  194 => 75,  190 => 74,  186 => 73,  182 => 72,  177 => 71,  172 => 69,  169 => 68,  164 => 66,  160 => 65,  157 => 64,  155 => 63,  151 => 62,  148 => 61,  142 => 60,  137 => 59,  129 => 54,  123 => 53,  117 => 50,  111 => 49,  105 => 46,  99 => 45,  93 => 42,  87 => 38,  83 => 35,  79 => 34,  71 => 30,  65 => 27,  61 => 26,  56 => 23,  47 => 32,  45 => 24,  38 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "schedule-form-edit.twig", "/var/www/xibo/views/schedule-form-edit.twig");
    }
}
