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

/* display-form-edit.twig */
class __TwigTemplate_a8637cf2cc04e2d4ea18a119f771e346 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'formTitle' => [$this, 'block_formTitle'],
            'formButtons' => [$this, 'block_formButtons'],
            'callBack' => [$this, 'block_callBack'],
            'extra' => [$this, 'block_extra'],
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "display-form-edit.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("form-base.twig", "display-form-edit.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_formTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        yield "    ";
        echo __("Edit Display");
        return; yield '';
    }

    // line 30
    public function block_formButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        yield "    ";
        echo __("Cancel");
        yield ", XiboDialogClose()
    ";
        // line 32
        echo __("Save");
        yield ", displayEditFormSubmit()
";
        return; yield '';
    }

    // line 35
    public function block_callBack($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "displayEditFormOpen";
        return; yield '';
    }

    // line 37
    public function block_extra($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "overrideConfig", [], "any", false, false, false, 37));
        return; yield '';
    }

    // line 39
    public function block_formHtml($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 43
        echo __("General");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#location\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 44
        echo __("Details");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#reference\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 45
        echo __("Reference");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#maintenance\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 46
        echo __("Maintenance");
        yield "</span></a></li>
                ";
        // line 47
        if ( !($context["isWolDisabled"] ?? null)) {
            // line 48
            yield "                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#wol\" role=\"tab\" data-toggle=\"tab\"><span>";
            echo __("Wake on LAN");
            yield "</span></a></li>
                ";
        }
        // line 50
        yield "                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#settings\" role=\"tab\" data-toggle=\"tab\"><span>";
        echo __("Settings");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#remote\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 51
        echo __("Remote");
        yield "</span></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#advanced\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 52
        echo __("Advanced");
        yield "</span></a></li>
            </ul>
            <form id=\"displayEditForm\" class=\"DisplayForm XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "displayId", [], "any", false, false, false, 54)]), "html", null, true);
        yield "\" data-gettag=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.getByName"), "html", null, true);
        yield "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">
                        ";
        // line 57
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 57)) {
            // line 58
            yield "                        <div class=\"form-group row\">
                            <label class=\"col-sm-2 control-label\">";
            // line 59
            echo __("Current Folder");
            yield "</label>
                            <div class=\"col-sm-10\" style=\"padding-top: 7px\">
                                <span id=\"originalFormFolder\"></span>
                            </div>
                        </div>

                        <div class=\"form-group row\">
                            <label class=\"col-sm-2 control-label\">";
            // line 66
            echo __("Move to Selected Folder:");
            yield "</label>
                            <div class=\"col-sm-10\">
                                <button type=\"button\" class=\"btn btn-info\" id=\"select-folder-button\" data-toggle=\"modal\" data-target=\"#folder-tree-form-modal\">";
            // line 68
            echo __("Select Folder");
            yield "</button>
                                <span id=\"selectedFormFolder\"></span>
                            </div>
                        </div>

                        ";
            // line 73
            yield CoreExtension::callMacro($macros["forms"], "macro_hidden", ["folderId", CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "folderId", [], "any", false, false, false, 73)], 73, $context, $this->getSourceContext());
            yield "
                        ";
        }
        // line 75
        yield "
                        ";
        // line 76
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Display");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 77
        yield "                        ";
        if (($context["displayLockName"] ?? null)) {
            // line 78
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The Name of the Display - your administrator has locked this to the device name");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 79
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["display", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "display", [], "any", false, false, false, 79), ($context["helpText"] ?? null), "", "required"], 79, $context, $this->getSourceContext());
            yield "
                        ";
        } else {
            // line 81
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The Name of the Display - (1 - 50 characters).");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 82
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", ["display", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "display", [], "any", false, false, false, 82), ($context["helpText"] ?? null), "", "required"], 82, $context, $this->getSourceContext());
            yield "
                        ";
        }
        // line 84
        yield "
                        ";
        // line 85
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Display's Hardware Key");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 86
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("A unique identifier for this display.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 87
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["license", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "license", [], "any", false, false, false, 87), ($context["helpText"] ?? null), "", "required", "", false], 87, $context, $this->getSourceContext());
        yield "

                        ";
        // line 89
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Description");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 90
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("A description - (1 - 254 characters).");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 91
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["description", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "description", [], "any", false, false, false, 91), ($context["helpText"] ?? null)], 91, $context, $this->getSourceContext());
        yield "

                        ";
        // line 93
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 93)) {
            // line 94
            yield "                            ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tags");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 95
            yield "                            ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tags for this Display - Comma separated string of Tags or Tag|Value format. If you choose a Tag that has associated values, they will be shown for selection below.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 96
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "getTagString", [], "method", false, false, false, 96), ($context["helpText"] ?? null), "tags-with-value"], 96, $context, $this->getSourceContext());
            yield "

                            <p id=\"loadingValues\" style=\"margin-left: 17%\"></p>

                            ";
            // line 100
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tag value");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 101
            yield "                            ";
            yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["tagValue", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "key", "value"], 101, $context, $this->getSourceContext());
            yield "

                            <div id=\"tagValueContainer\">
                                ";
            // line 104
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tag value");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 105
            yield "                                ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Please provide the value for this Tag and confirm by pressing enter on your keyboard.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 106
            yield "                                ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", ["tagValueInput", ($context["title"] ?? null), "", ($context["helpText"] ?? null)], 106, $context, $this->getSourceContext());
            yield "
                            </div>

                            <div id=\"tagValueRequired\" class=\"alert alert-info\">
                                <p>";
            // line 110
            echo __("This tag requires a set value, please select one from the Tag value dropdown or provide Tag value in the dedicated field.");
            yield "</p>
                            </div>
                        ";
        }
        // line 113
        yield "
                        ";
        // line 114
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Authorise display?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 115
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Use one of the available slots for this display?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 116
        yield "                        ";
        $context["yes"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Yes");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 117
        yield "                        ";
        $context["no"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("No");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 118
        yield "                        ";
        $context["options"] = [["licensedid" => 1, "licensed" =>         // line 119
($context["yes"] ?? null)], ["licensedid" => 0, "licensed" =>         // line 120
($context["no"] ?? null)]];
        // line 122
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["licensed", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "licensed", [], "any", false, false, false, 122), ($context["options"] ?? null), "licensedid", "licensed", ($context["helpText"] ?? null)], 122, $context, $this->getSourceContext());
        yield "

                        ";
        // line 124
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Default Layout");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 125
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Set the Default Layout to use when no other content is scheduled to this Display. This will override the global Default Layout as set in CMS Administrator Settings. If left blank a global Default Layout will be automatically set for this Display.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 126
        yield "                        ";
        $context["attributes"] = [["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.search")], ["name" => "data-search-term", "value" => "layout"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "layoutId"], ["name" => "data-text-property", "value" => "layout"], ["name" => "data-filter-options", "value" => "{\"retired\":\"0\"}"]];
        // line 134
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["defaultLayoutId", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "defaultLayoutId", [], "any", false, false, false, 134), ($context["layouts"] ?? null), "layoutId", "layout", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 134, $context, $this->getSourceContext());
        yield "
                    </div>
                    <div class=\"tab-pane\" id=\"location\">
                        ";
        // line 137
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Latitude");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 138
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Latitude of this display");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 139
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["latitude", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "latitude", [], "any", false, false, false, 139), ($context["helpText"] ?? null)], 139, $context, $this->getSourceContext());
        yield "

                        ";
        // line 141
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Longitude");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 142
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Longitude of this Display");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 143
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["longitude", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "longitude", [], "any", false, false, false, 143), ($context["helpText"] ?? null)], 143, $context, $this->getSourceContext());
        yield "

                        ";
        // line 145
        $context["attributes"] = [["name" => "data-width", "value" => "100%"]];
        // line 148
        yield "                        ";
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Timezone");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 149
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The timezone for this display, or empty to use the CMS timezone");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 150
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["timeZone", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "timeZone", [], "any", false, false, false, 150), Twig\Extension\CoreExtension::merge([["id" => "", "value" => ""]], ($context["timeZones"] ?? null)), "id", "value", ($context["helpText"] ?? null), "selectPicker", "", "", "", ($context["attributes"] ?? null)], 150, $context, $this->getSourceContext());
        yield "

                        ";
        // line 152
        yield CoreExtension::callMacro($macros["forms"], "macro_message", ["Configure further details for integration with 3rd parties such as DOOH providers:"], 152, $context, $this->getSourceContext());
        yield "

                        ";
        // line 154
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Languages");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 155
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The languages that the audience viewing this Display are likely to understand");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 156
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["languages[]", "dropdownmulti", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "getLanguages", [], "method", false, false, false, 156), ($context["languages"] ?? null), "id", "value", ($context["helpText"] ?? null), "selectPicker"], 156, $context, $this->getSourceContext());
        yield "

                        ";
        // line 158
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Display Type");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 159
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Type of this Display");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 160
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["displayTypeId", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "displayTypeId", [], "any", false, false, false, 160), Twig\Extension\CoreExtension::merge([["displayTypeId" => null, "displayType" => ""]], ($context["displayTypes"] ?? null)), "displayTypeId", "displayType", ($context["helpText"] ?? null)], 160, $context, $this->getSourceContext());
        yield "

                        ";
        // line 162
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Venue");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 163
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Location/Venue of this display");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 164
        yield "                        ";
        $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.venue.search")], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-venue-id", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 170
($context["display"] ?? null), "venueId", [], "any", false, false, false, 170)]];
        // line 172
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["venueId", "single", ($context["title"] ?? null), "", null, "venueId", "venueName", ($context["helpText"] ?? null), "venue-select", "", "", "", ($context["attributes"] ?? null)], 172, $context, $this->getSourceContext());
        yield "

                        ";
        // line 174
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Address");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 175
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Address of this Display");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 176
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["address", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "address", [], "any", false, false, false, 176), ($context["helpText"] ?? null)], 176, $context, $this->getSourceContext());
        yield "

                        ";
        // line 178
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Screen size");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 179
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The Screen size of this Display");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 180
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["screenSize", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "screenSize", [], "any", false, false, false, 180), ($context["helpText"] ?? null)], 180, $context, $this->getSourceContext());
        yield "

                        ";
        // line 182
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Is mobile?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 183
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Is this display mobile?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 184
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isMobile", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "isMobile", [], "any", false, false, false, 184), ($context["helpText"] ?? null)], 184, $context, $this->getSourceContext());
        yield "

                        ";
        // line 186
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Is outdoor?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 187
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Is your display located outdoors?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 188
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["isOutdoor", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "isOutdoor", [], "any", false, false, false, 188), ($context["helpText"] ?? null)], 188, $context, $this->getSourceContext());
        yield "

                        ";
        // line 190
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Cost per play");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 191
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The cost per play");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 192
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["costPerPlay", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "costPerPlay", [], "any", false, false, false, 192), ($context["helpText"] ?? null)], 192, $context, $this->getSourceContext());
        yield "

                        ";
        // line 194
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Impressions per play");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 195
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The impressions per play");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 196
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_number", ["impressionsPerPlay", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "impressionsPerPlay", [], "any", false, false, false, 196), ($context["helpText"] ?? null)], 196, $context, $this->getSourceContext());
        yield "
                    </div>
                    <div class=\"tab-pane\" id=\"reference\">
                        ";
        // line 199
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [__("Add reference fields if needed")], 199, $context, $this->getSourceContext());
        yield "

                        ";
        // line 201
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 1");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 202
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref1", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "ref1", [], "any", false, false, false, 202)], 202, $context, $this->getSourceContext());
        yield "

                        ";
        // line 204
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 2");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 205
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref2", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "ref2", [], "any", false, false, false, 205)], 205, $context, $this->getSourceContext());
        yield "

                        ";
        // line 207
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 3");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 208
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref3", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "ref3", [], "any", false, false, false, 208)], 208, $context, $this->getSourceContext());
        yield "

                        ";
        // line 210
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 4");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 211
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref4", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "ref4", [], "any", false, false, false, 211)], 211, $context, $this->getSourceContext());
        yield "

                        ";
        // line 213
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reference 5");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 214
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["ref5", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "ref5", [], "any", false, false, false, 214)], 214, $context, $this->getSourceContext());
        yield "

                        ";
        // line 216
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Custom ID");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 217
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["customId", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "customId", [], "any", false, false, false, 217)], 217, $context, $this->getSourceContext());
        yield "
                    </div>
                    <div class=\"tab-pane\" id=\"maintenance\">

                        ";
        // line 221
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Email Alerts");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 222
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Do you want to be notified by email if there is a problem with this display?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 223
        yield "                        ";
        $context["yes"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Yes");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 224
        yield "                        ";
        $context["no"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("No");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 225
        yield "                        ";
        $context["options"] = [["id" => 0, "value" =>         // line 226
($context["no"] ?? null)], ["id" => 1, "value" =>         // line 227
($context["yes"] ?? null)]];
        // line 229
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["emailAlert", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "emailAlert", [], "any", false, false, false, 229), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 229, $context, $this->getSourceContext());
        yield "

                        ";
        // line 231
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Use the Global Timeout?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 232
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Should this display be tested against the global time out or the Player collection interval?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 233
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["alertTimeout", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "alertTimeout", [], "any", false, false, false, 233), ($context["helpText"] ?? null)], 233, $context, $this->getSourceContext());
        yield "
                    </div>
                    ";
        // line 235
        if ( !($context["isWolDisabled"] ?? null)) {
            // line 236
            yield "                    <div class=\"tab-pane\" id=\"wol\">

                        ";
            // line 238
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enable Wake on LAN");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 239
            yield "                        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Wake on Lan requires the correct network configuration to route the magic packet to the display PC");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 240
            yield "                        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["wakeOnLanEnabled", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "wakeOnLanEnabled", [], "any", false, false, false, 240), ($context["helpText"] ?? null)], 240, $context, $this->getSourceContext());
            yield "

                        ";
            // line 242
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("BroadCast Address");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 243
            yield "                        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The IP address of the remote host's broadcast address (or gateway)");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 244
            yield "                        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", ["broadCastAddress", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "broadCastAddress", [], "any", false, false, false, 244), ($context["helpText"] ?? null)], 244, $context, $this->getSourceContext());
            yield "

                        ";
            // line 246
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Wake on LAN SecureOn");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 247
            yield "                        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enter a hexadecimal password of a SecureOn enabled Network Interface Card (NIC) of the remote host. Enter a value in this pattern: 'xx-xx-xx-xx-xx-xx'. Leave the following field empty, if SecureOn is not used (for example, because the NIC of the remote host does not support SecureOn).");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 248
            yield "                        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", ["secureOn", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "secureOn", [], "any", false, false, false, 248), ($context["helpText"] ?? null)], 248, $context, $this->getSourceContext());
            yield "

                        ";
            // line 250
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Wake on LAN Time");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 251
            yield "                        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The time this display should receive the WOL command, using the 24hr clock - e.g. 19:00. Maintenance must be enabled.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 252
            yield "                        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", ["wakeOnLanTime", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "wakeOnLanTime", [], "any", false, false, false, 252), ($context["helpText"] ?? null)], 252, $context, $this->getSourceContext());
            yield "


                        ";
            // line 255
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Wake on LAN CIDR");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 256
            yield "                        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enter a number within the range of 0 to 32 in the following field. Leave the following field empty, if no subnet mask should be used (CIDR = 0). If the remote host's broadcast address is unknown: Enter the host name or IP address of the remote host in Broad Cast Address and enter the CIDR subnet mask of the remote host in this field.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 257
            yield "                        ";
            yield CoreExtension::callMacro($macros["forms"], "macro_input", ["cidr", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "cidr", [], "any", false, false, false, 257), ($context["helpText"] ?? null)], 257, $context, $this->getSourceContext());
            yield "
                    </div>
                    ";
        }
        // line 260
        yield "                    <div class=\"tab-pane\" id=\"settings\">
                        ";
        // line 261
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Settings Profile?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 262
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("What display profile should this display use? To use the default profile leave this empty.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 263
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["displayProfileId", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "displayProfileId", [], "any", false, false, false, 263), Twig\Extension\CoreExtension::merge([["displayProfileId" => null, "name" => ""]], ($context["profiles"] ?? null)), "displayProfileId", "name", ($context["helpText"] ?? null)], 263, $context, $this->getSourceContext());
        yield "

                        ";
        // line 265
        $context["message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The settings for this display are shown below. They are taken from the active Display Profile for this Display, which can be changed in Display Settings. If you have altered the Settings Profile above, you will need to save and re-show the form.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 266
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_message", [($context["message"] ?? null)], 266, $context, $this->getSourceContext());
        yield "

                        <table id=\"settings-from-profile\" class=\"table table-striped\">
                            <thead>
                                <th>";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Setting"), "html", null, true);
        yield "</th>
                                <th>";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Profile"), "html", null, true);
        yield "</th>
                                <th>";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Override"), "html", null, true);
        yield "</th>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <div class=\"tab-pane\" id=\"advanced\">
                        ";
        // line 279
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Interleave Default");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 280
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Whether to always put the default layout into the cycle.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 281
        yield "                        ";
        $context["yes"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Yes");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 282
        yield "                        ";
        $context["no"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("No");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 283
        yield "                        ";
        $context["options"] = [["id" => 0, "value" =>         // line 284
($context["no"] ?? null)], ["id" => 1, "value" =>         // line 285
($context["yes"] ?? null)]];
        // line 287
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["incSchedule", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "incSchedule", [], "any", false, false, false, 287), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 287, $context, $this->getSourceContext());
        yield "

                        ";
        // line 289
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Auditing until");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 290
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Collect auditing from this Player. Should only be used if there is a problem with the display.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 291
        yield "                        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "isAuditing", [], "method", false, false, false, 291)) {
            // line 292
            yield "                            ";
            $context["auditing"] = CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "getUnmatchedProperty", ["auditingUntilIso"], "method", false, false, false, 292);
            // line 293
            yield "                        ";
        } else {
            // line 294
            yield "                            ";
            $context["auditing"] = "";
            // line 295
            yield "                        ";
        }
        // line 296
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_dateTime", ["auditingUntil", ($context["title"] ?? null), ($context["auditing"] ?? null), ($context["helpText"] ?? null)], 296, $context, $this->getSourceContext());
        yield "

                        ";
        // line 298
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Bandwidth limit");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 299
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("The bandwidth limit that should be applied. Enter 0 for no limit.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 300
        yield "                        <div class=\"form-group row\">
                            <label class=\"col-sm-2 control-label\" for=\"bandwidthLimit\">";
        // line 301
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</label>
                            <div class=\"col-sm-6\">
                                <input class=\"form-control\" name=\"bandwidthLimit\" type=\"number\" id=\"bandwidthLimit\" min=\"0\" value=\"";
        // line 303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "bandwidthLimit", [], "any", false, false, false, 303), "html", null, true);
        yield "\"/>
                                <span class=\"help-block\">";
        // line 304
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
        yield "</span>
                            </div>
                            <div class=\"col-sm-4\">
                                <select name=\"bandwidthLimitUnits\" class=\"form-control\">
                                    <option value=\"kb\">KiB</option>
                                    <option value=\"mb\">MiB</option>
                                    <option value=\"gb\">GiB</option>
                                </select>
                            </div>
                        </div>

                        ";
        // line 315
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Clear Cached Data");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 316
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Remove any cached data for this display.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 317
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["clearCachedData", ($context["title"] ?? null), 1, ($context["helpText"] ?? null)], 317, $context, $this->getSourceContext());
        yield "

                        ";
        // line 319
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Reconfigure XMR");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 320
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Remove the XMR configuration for this Player and send a rekey action.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 321
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["rekeyXmr", ($context["title"] ?? null), 0, ($context["helpText"] ?? null)], 321, $context, $this->getSourceContext());
        yield "
                    </div>

                    <div class=\"tab-pane\" id=\"remote\">
                        ";
        // line 325
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("TeamViewer Serial");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 326
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("If TeamViewer is installed on the device, enter the serial number here.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 327
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["teamViewerSerial", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "teamViewerSerial", [], "any", false, false, false, 327), ($context["helpText"] ?? null)], 327, $context, $this->getSourceContext());
        yield "

                        ";
        // line 329
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Webkey Serial");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 330
        yield "                        ";
        $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("If Webkey is installed on the device, enter the serial number here.");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 331
        yield "                        ";
        yield CoreExtension::callMacro($macros["forms"], "macro_input", ["webkeySerial", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["display"] ?? null), "webkeySerial", [], "any", false, false, false, 331), ($context["helpText"] ?? null)], 331, $context, $this->getSourceContext());
        yield "
                    </div>
                </div>
            </form>


            <div id=\"settings-from-display-profile\" style=\"display:none\">
                ";
        // line 339
        yield "                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getClientType", [], "method", false, false, false, 339) == "android")) {
            // line 340
            yield "                    ";
            yield from             $this->loadTemplate("displayprofile-form-edit-android.twig", "display-form-edit.twig", 340)->unwrap()->yield($context);
            // line 341
            yield "                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getClientType", [], "method", false, false, false, 341) == "windows")) {
            // line 342
            yield "                    ";
            yield from             $this->loadTemplate("displayprofile-form-edit-windows.twig", "display-form-edit.twig", 342)->unwrap()->yield($context);
            // line 343
            yield "                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getClientType", [], "method", false, false, false, 343) == "linux")) {
            // line 344
            yield "                    ";
            yield from             $this->loadTemplate("displayprofile-form-edit-linux.twig", "display-form-edit.twig", 344)->unwrap()->yield($context);
            // line 345
            yield "                ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getClientType", [], "method", false, false, false, 345) == "lg") || (CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getClientType", [], "method", false, false, false, 345) == "sssp"))) {
            // line 346
            yield "                    ";
            yield from             $this->loadTemplate("displayprofile-form-edit-soc.twig", "display-form-edit.twig", 346)->unwrap()->yield($context);
            // line 347
            yield "                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getClientType", [], "method", false, false, false, 347) == "chromeOS")) {
            // line 348
            yield "                    ";
            yield from             $this->loadTemplate("displayprofile-form-edit-chromeos.twig", "display-form-edit.twig", 348)->unwrap()->yield($context);
            // line 349
            yield "                ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "isCustom", [], "method", false, false, false, 349)) {
            // line 350
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, ($context["displayProfile"] ?? null), "getCustomEditTemplate", [], "method", false, false, false, 350));
            yield "
                ";
        }
        // line 352
        yield "
                ";
        // line 353
        yield from         $this->loadTemplate("displayprofile-form-edit-javascript.twig", "display-form-edit.twig", 353)->unwrap()->yield($context);
        // line 354
        yield "            </div>
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
        return "display-form-edit.twig";
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
        return array (  1080 => 354,  1078 => 353,  1075 => 352,  1069 => 350,  1066 => 349,  1063 => 348,  1060 => 347,  1057 => 346,  1054 => 345,  1051 => 344,  1048 => 343,  1045 => 342,  1042 => 341,  1039 => 340,  1036 => 339,  1025 => 331,  1019 => 330,  1014 => 329,  1008 => 327,  1002 => 326,  997 => 325,  989 => 321,  983 => 320,  978 => 319,  972 => 317,  966 => 316,  961 => 315,  947 => 304,  943 => 303,  938 => 301,  935 => 300,  929 => 299,  924 => 298,  918 => 296,  915 => 295,  912 => 294,  909 => 293,  906 => 292,  903 => 291,  897 => 290,  892 => 289,  886 => 287,  884 => 285,  883 => 284,  881 => 283,  875 => 282,  869 => 281,  863 => 280,  858 => 279,  848 => 272,  844 => 271,  840 => 270,  832 => 266,  827 => 265,  821 => 263,  815 => 262,  810 => 261,  807 => 260,  800 => 257,  794 => 256,  789 => 255,  782 => 252,  776 => 251,  771 => 250,  765 => 248,  759 => 247,  754 => 246,  748 => 244,  742 => 243,  737 => 242,  731 => 240,  725 => 239,  720 => 238,  716 => 236,  714 => 235,  708 => 233,  702 => 232,  697 => 231,  691 => 229,  689 => 227,  688 => 226,  686 => 225,  680 => 224,  674 => 223,  668 => 222,  663 => 221,  655 => 217,  650 => 216,  644 => 214,  639 => 213,  633 => 211,  628 => 210,  622 => 208,  617 => 207,  611 => 205,  606 => 204,  600 => 202,  595 => 201,  590 => 199,  583 => 196,  577 => 195,  572 => 194,  566 => 192,  560 => 191,  555 => 190,  549 => 188,  543 => 187,  538 => 186,  532 => 184,  526 => 183,  521 => 182,  515 => 180,  509 => 179,  504 => 178,  498 => 176,  492 => 175,  487 => 174,  481 => 172,  479 => 170,  477 => 164,  471 => 163,  466 => 162,  460 => 160,  454 => 159,  449 => 158,  443 => 156,  437 => 155,  432 => 154,  427 => 152,  421 => 150,  415 => 149,  409 => 148,  407 => 145,  401 => 143,  395 => 142,  390 => 141,  384 => 139,  378 => 138,  373 => 137,  366 => 134,  363 => 126,  357 => 125,  352 => 124,  346 => 122,  344 => 120,  343 => 119,  341 => 118,  335 => 117,  329 => 116,  323 => 115,  318 => 114,  315 => 113,  309 => 110,  301 => 106,  295 => 105,  290 => 104,  283 => 101,  278 => 100,  270 => 96,  264 => 95,  258 => 94,  256 => 93,  250 => 91,  244 => 90,  239 => 89,  233 => 87,  227 => 86,  222 => 85,  219 => 84,  213 => 82,  207 => 81,  201 => 79,  195 => 78,  192 => 77,  187 => 76,  184 => 75,  179 => 73,  171 => 68,  166 => 66,  156 => 59,  153 => 58,  151 => 57,  143 => 54,  138 => 52,  134 => 51,  129 => 50,  123 => 48,  121 => 47,  117 => 46,  113 => 45,  109 => 44,  105 => 43,  100 => 40,  96 => 39,  88 => 37,  80 => 35,  73 => 32,  68 => 31,  64 => 30,  58 => 27,  54 => 26,  49 => 23,  47 => 24,  40 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "display-form-edit.twig", "/var/www/xibo/views/display-form-edit.twig");
    }
}
