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

/* settings-page.twig */
class __TwigTemplate_5844c89c1148bd5fa8dd6f2c99785ea5 extends Template
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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.twig", "settings-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "settings-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Settings"), "html", null, true);
        yield " | ";
        return; yield '';
    }

    // line 28
    public function block_actionMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        yield "    <div class=\"widget-action-menu pull-right\">
        ";
        // line 30
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "SETTING_LIBRARY_TIDY_ENABLED", [], "any", false, false, false, 30)) {
            // line 31
            yield "            <button class=\"btn btn-danger XiboFormButton btns\" title=\"";
            echo __("Run through the library and remove unused and unnecessary files");
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("maintenance.libraryTidy.form"), "html", null, true);
            yield "\"> <i class=\"fa fa-trash\" aria-hidden=\"true\"></i> ";
            echo __("Tidy Library");
            yield "</button>
        ";
        }
        // line 33
        yield "    </div>
";
        return; yield '';
    }

    // line 36
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        yield "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 38
        echo __("Settings");
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                        <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#tab_config\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 43
        echo __("Configuration");
        yield "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_defaults\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 44
        echo __("Defaults");
        yield "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_displays\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 45
        echo __("Displays");
        yield "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 46
        echo __("General");
        yield "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_maint\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 47
        echo __("Maintenance");
        yield "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_network\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 48
        echo __("Network");
        yield "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_regional\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 49
        echo __("Regional");
        yield "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_permissions\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 50
        echo __("Sharing");
        yield "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_troubleshooting\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 51
        echo __("Troubleshooting");
        yield "</span></a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"#tab_users\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 52
        echo __("Users");
        yield "</span></a></li>
                    </ul>
                    <form id=\"SettingsForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("settings.update"), "html", null, true);
        yield "\">
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active\" id=\"tab_config\">
                                <h3 class=\"section-heading\">";
        // line 57
        echo __("Configuration");
        yield "</h3>

                                ";
        // line 59
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["LIBRARY_LOCATION"], "method", false, false, false, 59)) {
            // line 60
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Library Location");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 61
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The fully qualified path to the CMS library location.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 62
            yield "
                                    ";
            // line 63
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["LIBRARY_LOCATION"], "method", false, false, false, 63)) {
                // line 64
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["LIBRARY_LOCATION", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["LIBRARY_LOCATION"], "method", false, false, false, 64), ($context["helpText"] ?? null), "required"], 64, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 66
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["LIBRARY_LOCATION", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["LIBRARY_LOCATION"], "method", false, false, false, 66), ($context["helpText"] ?? null)], 66, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 68
            yield "                                ";
        }
        // line 69
        yield "
                                ";
        // line 70
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["SERVER_KEY"], "method", false, false, false, 70)) {
            // line 71
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("CMS Secret Key");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 72
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("This key must be entered into each Player to authenticate the Player with the CMS.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 73
            yield "
                                    ";
            // line 74
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["SERVER_KEY"], "method", false, false, false, 74)) {
                // line 75
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["SERVER_KEY", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SERVER_KEY"], "method", false, false, false, 75), ($context["helpText"] ?? null), "required"], 75, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 77
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["SERVER_KEY", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SERVER_KEY"], "method", false, false, false, 77), ($context["helpText"] ?? null)], 77, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 79
            yield "                                    <div class=\"form-group row\">
                                        <label class=\"col-sm-2 control-label\"></label>
                                        <div class=\"col-sm-10\">
                                            <p><i>";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getPhoneticKey", [], "method", false, false, false, 82), "html", null, true);
            yield "</i></p>
                                        </div>
                                    </div>
                                ";
        }
        // line 86
        yield "
                                ";
        // line 87
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["GLOBAL_THEME_NAME"], "method", false, false, false, 87)) {
            // line 88
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("CMS Theme");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 89
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The Theme to apply to all pages by default");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 90
            yield "
                                    ";
            // line 91
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["GLOBAL_THEME_NAME"], "method", false, false, false, 91)) {
                // line 92
                yield "                                        ";
                if (($context["hideThemes"] ?? null)) {
                    // line 93
                    yield "                                            ";
                    // line 94
                    yield "                                            ";
                    yield CoreExtension::callMacro($macros["forms"], "macro_input", ["GLOBAL_THEME_NAME", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["GLOBAL_THEME_NAME"], "method", false, false, false, 94), ($context["helpText"] ?? null)], 94, $context, $this->getSourceContext());
                    yield "
                                        ";
                } else {
                    // line 96
                    yield "                                            ";
                    yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["GLOBAL_THEME_NAME", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["GLOBAL_THEME_NAME"], "method", false, false, false, 96), ($context["themes"] ?? null), "id", "value", ($context["helpText"] ?? null)], 96, $context, $this->getSourceContext());
                    yield "
                                        ";
                }
                // line 98
                yield "                                    ";
            } else {
                // line 99
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["GLOBAL_THEME_NAME", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["GLOBAL_THEME_NAME"], "method", false, false, false, 99), ($context["helpText"] ?? null)], 99, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 101
            yield "                                ";
        }
        // line 102
        yield "
                                ";
        // line 103
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["NAVIGATION_MENU_POSITION"], "method", false, false, false, 103)) {
            // line 104
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Navigation Menu");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 105
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Select where the Navigation Menu should be positioned by default. Users can set an alternate view in their Preferences under their User Profile.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 106
            yield "
                                    ";
            // line 107
            $context["horizontalOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Horizontal along the top");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 108
            yield "                                    ";
            $context["verticalOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Vertically on the left");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 109
            yield "                                    ";
            $context["options"] = [["id" => "horizontal", "value" =>             // line 110
($context["horizontalOption"] ?? null)], ["id" => "vertical", "value" =>             // line 111
($context["verticalOption"] ?? null)]];
            // line 113
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["NAVIGATION_MENU_POSITION"], "method", false, false, false, 113)) {
                // line 114
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["NAVIGATION_MENU_POSITION", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["NAVIGATION_MENU_POSITION", "vertical"], "method", false, false, false, 114), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 114, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 116
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["NAVIGATION_MENU_POSITION", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["NAVIGATION_MENU_POSITION", "vertical"], "method", false, false, false, 116), ($context["helpText"] ?? null)], 116, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 118
            yield "                                ";
        }
        // line 119
        yield "                            </div>
                            <div class=\"tab-pane\" id=\"tab_defaults\">
                                <h3 class=\"section-heading\">";
        // line 121
        echo __("Defaults");
        yield "</h3>

                                ";
        // line 123
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["LIBRARY_MEDIA_UPDATEINALL_CHECKB"], "method", false, false, false, 123)) {
            // line 124
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default update media in all layouts");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 125
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default the checkbox for updating media on all layouts when editing in the library");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 126
            yield "
                                    ";
            // line 127
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["LIBRARY_MEDIA_UPDATEINALL_CHECKB", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["LIBRARY_MEDIA_UPDATEINALL_CHECKB"], "method", false, false, false, 127), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["LIBRARY_MEDIA_UPDATEINALL_CHECKB"], "method", false, false, false, 127)], 127, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 129
        yield "
                                ";
        // line 130
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["LAYOUT_COPY_MEDIA_CHECKB"], "method", false, false, false, 130)) {
            // line 131
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default copy media when copying a layout?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 132
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default the checkbox for making duplicates of media when copying layouts");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 133
            yield "
                                    ";
            // line 134
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["LAYOUT_COPY_MEDIA_CHECKB", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["LAYOUT_COPY_MEDIA_CHECKB"], "method", false, false, false, 134), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["LIBRARY_MEDIA_UPDATEINALL_CHECKB"], "method", false, false, false, 134)], 134, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 136
        yield "
                                ";
        // line 137
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["LIBRARY_MEDIA_DELETEOLDVER_CHECKB"], "method", false, false, false, 137)) {
            // line 138
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default for \"Delete old version of Media\" checkbox. Shown when Editing Library Media.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 139
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default the checkbox for Deleting Old Version of media when a new file is being uploaded to the library.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 140
            yield "
                                    ";
            // line 141
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["LIBRARY_MEDIA_DELETEOLDVER_CHECKB", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["LIBRARY_MEDIA_DELETEOLDVER_CHECKB"], "method", false, false, false, 141), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["LIBRARY_MEDIA_UPDATEINALL_CHECKB"], "method", false, false, false, 141)], 141, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 143
        yield "
                                ";
        // line 144
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_LAYOUT_AUTO_PUBLISH_CHECKB"], "method", false, false, false, 144)) {
            // line 145
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should Layouts be automatically Published?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 146
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("When enabled draft Layouts will be automatically published 30 minutes after the last edit");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 147
            yield "
                                    ";
            // line 148
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["DEFAULT_LAYOUT_AUTO_PUBLISH_CHECKB", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_LAYOUT_AUTO_PUBLISH_CHECKB"], "method", false, false, false, 148), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_LAYOUT_AUTO_PUBLISH_CHECKB"], "method", false, false, false, 148)], 148, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 150
        yield "
                                ";
        // line 151
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_TRANSITION_IN"], "method", false, false, false, 151)) {
            // line 152
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default Transition In");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 153
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default Transition In that should be applied to widgets");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 154
            yield "
                                    ";
            // line 155
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_TRANSITION_IN"], "method", false, false, false, 155)) {
                // line 156
                yield "                                        ";
                $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("transition.search")], ["name" => "data-search-term", "value" => "transition"], ["name" => "data-id-property", "value" => "code"], ["name" => "data-text-property", "value" => "transition"], ["name" => "data-filter-options", "value" => "{\"availableAsIn\":\"1\"}"]];
                // line 164
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["DEFAULT_TRANSITION_IN", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_TRANSITION_IN"], "method", false, false, false, 164), [($context["defaultTransitionIn"] ?? null)], "code", "transition", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 164, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 166
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DEFAULT_TRANSITION_IN", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_TRANSITION_IN"], "method", false, false, false, 166), ""], 166, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 168
            yield "                                ";
        }
        // line 169
        yield "
                                ";
        // line 170
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_TRANSITION_OUT"], "method", false, false, false, 170)) {
            // line 171
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default Transition Out");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 172
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default Transition Out that should be applied to widgets");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 173
            yield "
                                    ";
            // line 174
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_TRANSITION_OUT"], "method", false, false, false, 174)) {
                // line 175
                yield "                                        ";
                $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("transition.search")], ["name" => "data-search-term", "value" => "transition"], ["name" => "data-id-property", "value" => "code"], ["name" => "data-text-property", "value" => "transition"], ["name" => "data-filter-options", "value" => "{\"availableAsOut\":\"1\"}"]];
                // line 183
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["DEFAULT_TRANSITION_OUT", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_TRANSITION_OUT"], "method", false, false, false, 183), [($context["defaultTransitionOut"] ?? null)], "code", "transition", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 183, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 185
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DEFAULT_TRANSITION_OUT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_TRANSITION_OUT"], "method", false, false, false, 185), ""], 185, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 187
            yield "                                ";
        }
        // line 188
        yield "
                                ";
        // line 189
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_TRANSITION_DURATION"], "method", false, false, false, 189)) {
            // line 190
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default Transition duration");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 191
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default duration for in and out transitions");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 192
            yield "
                                    ";
            // line 193
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_TRANSITION_DURATION"], "method", false, false, false, 193)) {
                // line 194
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["DEFAULT_TRANSITION_DURATION", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_TRANSITION_DURATION", 0], "method", false, false, false, 194), ($context["helpText"] ?? null)], 194, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 196
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DEFAULT_TRANSITION_DURATION", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_TRANSITION_DURATION", 0], "method", false, false, false, 196), ($context["helpText"] ?? null)], 196, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 198
            yield "                                ";
        }
        // line 199
        yield "
                                ";
        // line 200
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_TRANSITION_AUTO_APPLY"], "method", false, false, false, 200)) {
            // line 201
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default value for \"Automatically apply Transitions?.\" checkbox on Layout add form");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 202
            yield "
                                    ";
            // line 203
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["DEFAULT_TRANSITION_AUTO_APPLY", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_TRANSITION_AUTO_APPLY"], "method", false, false, false, 203), "", "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_TRANSITION_AUTO_APPLY"], "method", false, false, false, 203)], 203, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 205
        yield "
                                ";
        // line 206
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_RESIZE_THRESHOLD"], "method", false, false, false, 206)) {
            // line 207
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Resize Threshold");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 208
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The maximum dimensions to be considered when an image is resized, based on the longest side");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 209
            yield "
                                    ";
            // line 210
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_RESIZE_THRESHOLD"], "method", false, false, false, 210)) {
                // line 211
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["DEFAULT_RESIZE_THRESHOLD", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_RESIZE_THRESHOLD", 0], "method", false, false, false, 211), ($context["helpText"] ?? null)], 211, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 213
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DEFAULT_RESIZE_THRESHOLD", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_RESIZE_THRESHOLD", 0], "method", false, false, false, 213), ($context["helpText"] ?? null)], 213, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 215
            yield "                                ";
        }
        // line 216
        yield "
                                ";
        // line 217
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_RESIZE_LIMIT"], "method", false, false, false, 217)) {
            // line 218
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Resize Limit");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 219
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Images that exceed the resize limit, based on the longest side, will not be processed");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 220
            yield "
                                    ";
            // line 221
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_RESIZE_LIMIT"], "method", false, false, false, 221)) {
                // line 222
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["DEFAULT_RESIZE_LIMIT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_RESIZE_LIMIT", 0], "method", false, false, false, 222), ($context["helpText"] ?? null)], 222, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 224
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DEFAULT_RESIZE_LIMIT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_RESIZE_LIMIT", 0], "method", false, false, false, 224), ($context["helpText"] ?? null)], 224, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 226
            yield "                                ";
        }
        // line 227
        yield "
                                ";
        // line 228
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DATASET_HARD_ROW_LIMIT"], "method", false, false, false, 228)) {
            // line 229
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("DataSet maximum number of Rows");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 230
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The maximum number of rows per DataSet, once the limit is met the limit policy defined per DataSet will dictate further action.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 231
            yield "
                                    ";
            // line 232
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DATASET_HARD_ROW_LIMIT"], "method", false, false, false, 232)) {
                // line 233
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["DATASET_HARD_ROW_LIMIT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DATASET_HARD_ROW_LIMIT", 0], "method", false, false, false, 233), ($context["helpText"] ?? null)], 233, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 235
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DATASET_HARD_ROW_LIMIT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DATASET_HARD_ROW_LIMIT", 0], "method", false, false, false, 235), ($context["helpText"] ?? null)], 235, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 237
            yield "                                ";
        }
        // line 238
        yield "
                                ";
        // line 239
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_PURGE_LIST_TTL"], "method", false, false, false, 239)) {
            // line 240
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default ttl, in days, for records in purge_list table");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 241
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Entries in purge_list table with expiry date older than specified ttl will be removed.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 242
            yield "
                                    ";
            // line 243
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_PURGE_LIST_TTL"], "method", false, false, false, 243)) {
                // line 244
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["DEFAULT_PURGE_LIST_TTL", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_PURGE_LIST_TTL", 7], "method", false, false, false, 244), ($context["helpText"] ?? null)], 244, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 246
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DEFAULT_PURGE_LIST_TTL", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_PURGE_LIST_TTL", 7], "method", false, false, false, 246), ($context["helpText"] ?? null)], 246, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 248
            yield "                                ";
        }
        // line 249
        yield "
                                ";
        // line 250
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER"], "method", false, false, false, 250)) {
            // line 251
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The default value for max number of items on a new dynamic Playlist");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 252
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("This value can be adjusted on a per dynamic Playlist basis, it cannot exceed value set in the Limit below");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 253
            yield "
                                    ";
            // line 254
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER"], "method", false, false, false, 254)) {
                // line 255
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER", 30], "method", false, false, false, 255), ($context["helpText"] ?? null), "", "", "", CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER_LIMIT", 100], "method", false, false, false, 255)], 255, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 257
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER", 30], "method", false, false, false, 257), ($context["helpText"] ?? null)], 257, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 259
            yield "                                ";
        }
        // line 260
        yield "
                                ";
        // line 261
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER_LIMIT"], "method", false, false, false, 261)) {
            // line 262
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The default upper limit of items that can be assigned to a dynamic Playlist");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 263
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("When matching Media by Tags and name to a dynamic Playlist, this is the maximum number of allowed items that can be assigned to a dynamic Playlist");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 264
            yield "
                                    ";
            // line 265
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER_LIMIT"], "method", false, false, false, 265)) {
                // line 266
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER_LIMIT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER_LIMIT", 100], "method", false, false, false, 266), ($context["helpText"] ?? null)], 266, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 268
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER_LIMIT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER_LIMIT", 100], "method", false, false, false, 268), ($context["helpText"] ?? null)], 268, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 270
            yield "                                ";
        }
        // line 271
        yield "                            </div>
                            <div class=\"tab-pane\" id=\"tab_displays\">
                                <h3 class=\"section-heading\">";
        // line 273
        echo __("Displays");
        yield "</h3>

                                ";
        // line 275
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_LAYOUT"], "method", false, false, false, 275)) {
            // line 276
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default Layout");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 277
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The default layout to assign for new displays and displays which have their current default deleted.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 278
            yield "
                                    ";
            // line 279
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_LAYOUT"], "method", false, false, false, 279)) {
                // line 280
                yield "                                        ";
                $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.search")], ["name" => "data-search-term", "value" => "layout"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "layoutId"], ["name" => "data-text-property", "value" => "layout"], ["name" => "data-filter-options", "value" => "{\"retired\":\"0\"}"]];
                // line 289
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["DEFAULT_LAYOUT", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["defaultLayout"] ?? null), "layoutId", [], "any", false, false, false, 289), [($context["defaultLayout"] ?? null)], "layoutId", "layout", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 289, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 291
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DEFAULT_LAYOUT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_LAYOUT"], "method", false, false, false, 291), ($context["helpText"] ?? null)], 291, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 293
            yield "                                ";
        }
        // line 294
        yield "
                                ";
        // line 295
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["XMR_ADDRESS"], "method", false, false, false, 295)) {
            // line 296
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("XMR Private Address");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 297
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Please enter the private address for XMR.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 298
            yield "
                                    ";
            // line 299
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["XMR_ADDRESS"], "method", false, false, false, 299)) {
                // line 300
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["XMR_ADDRESS", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["XMR_ADDRESS", "http:://localhost:8081"], "method", false, false, false, 300), ($context["helpText"] ?? null), "required"], 300, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 302
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["XMR_ADDRESS", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["XMR_ADDRESS", "http:://localhost:8081"], "method", false, false, false, 302), ($context["helpText"] ?? null)], 302, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 304
            yield "                                ";
        }
        // line 305
        yield "
                                ";
        // line 306
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["XMR_WS_ADDRESS"], "method", false, false, false, 306)) {
            // line 307
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("XMR WebSocket Address");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 308
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Please enter the WebSocket address for XMR. Leaving this empty will mean the Player app connects to /xmr");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 309
            yield "
                                    ";
            // line 310
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["XMR_WS_ADDRESS"], "method", false, false, false, 310)) {
                // line 311
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["XMR_WS_ADDRESS", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["XMR_WS_ADDRESS"], "method", false, false, false, 311), ($context["helpText"] ?? null)], 311, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 313
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["XMR_WS_ADDRESS", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["XMR_WS_ADDRESS"], "method", false, false, false, 313), ($context["helpText"] ?? null)], 313, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 315
            yield "                                ";
        }
        // line 316
        yield "
                                ";
        // line 317
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["XMR_PUB_ADDRESS"], "method", false, false, false, 317)) {
            // line 318
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("XMR Public Address");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 319
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Please enter the public address for XMR.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 320
            yield "
                                    ";
            // line 321
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["XMR_PUB_ADDRESS"], "method", false, false, false, 321)) {
                // line 322
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["XMR_PUB_ADDRESS", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["XMR_PUB_ADDRESS"], "method", false, false, false, 322), ($context["helpText"] ?? null)], 322, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 324
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["XMR_PUB_ADDRESS", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["XMR_PUB_ADDRESS"], "method", false, false, false, 324), ($context["helpText"] ?? null)], 324, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 326
            yield "                                ";
        }
        // line 327
        yield "
                                ";
        // line 328
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_LAT"], "method", false, false, false, 328)) {
            // line 329
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default Latitude");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 330
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The Latitude to apply for any Geo aware Previews");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 331
            yield "
                                    ";
            // line 332
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_LAT"], "method", false, false, false, 332)) {
                // line 333
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["DEFAULT_LAT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_LAT", "51.504"], "method", false, false, false, 333), ($context["helpText"] ?? null), "required"], 333, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 335
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DEFAULT_LAT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_LAT", "51.504"], "method", false, false, false, 335), ($context["helpText"] ?? null)], 335, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 337
            yield "                                ";
        }
        // line 338
        yield "
                                ";
        // line 339
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_LONG"], "method", false, false, false, 339)) {
            // line 340
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default Longitude");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 341
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The longitude to apply for any Geo aware Previews");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 342
            yield "
                                    ";
            // line 343
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_LONG"], "method", false, false, false, 343)) {
                // line 344
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["DEFAULT_LONG", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_LONG", "-0.104"], "method", false, false, false, 344), ($context["helpText"] ?? null), "required"], 344, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 346
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DEFAULT_LONG", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_LONG", "-0.104"], "method", false, false, false, 346), ($context["helpText"] ?? null)], 346, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 348
            yield "                                ";
        }
        // line 349
        yield "
                                ";
        // line 350
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["SHOW_DISPLAY_AS_VNCLINK"], "method", false, false, false, 350)) {
            // line 351
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Add a link to the Display name using this format mask?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 352
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Turn the display name in display management into a link using the IP address last collected. The %s is replaced with the IP address. Leave blank to disable.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 353
            yield "
                                    ";
            // line 354
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["SHOW_DISPLAY_AS_VNCLINK"], "method", false, false, false, 354)) {
                // line 355
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["SHOW_DISPLAY_AS_VNCLINK", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SHOW_DISPLAY_AS_VNCLINK"], "method", false, false, false, 355), ($context["helpText"] ?? null)], 355, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 357
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["SHOW_DISPLAY_AS_VNCLINK", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SHOW_DISPLAY_AS_VNCLINK"], "method", false, false, false, 357), ($context["helpText"] ?? null)], 357, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 359
            yield "                                ";
        }
        // line 360
        yield "
                                ";
        // line 361
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["SHOW_DISPLAY_AS_VNC_TGT"], "method", false, false, false, 361)) {
            // line 362
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The target attribute for the above link");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 363
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("If the display name is shown as a link in display management, what target should the link have? Set _top to open the link in the same window or _blank to open in a new window.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 364
            yield "
                                    ";
            // line 365
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["SHOW_DISPLAY_AS_VNC_TGT"], "method", false, false, false, 365)) {
                // line 366
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["SHOW_DISPLAY_AS_VNC_TGT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SHOW_DISPLAY_AS_VNC_TGT", "_top"], "method", false, false, false, 366), ($context["helpText"] ?? null)], 366, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 368
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["SHOW_DISPLAY_AS_VNC_TGT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SHOW_DISPLAY_AS_VNC_TGT", "_top"], "method", false, false, false, 368), ($context["helpText"] ?? null)], 368, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 370
            yield "                                ";
        }
        // line 371
        yield "
                                ";
        // line 372
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["MAX_LICENSED_DISPLAYS"], "method", false, false, false, 372)) {
            // line 373
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Number of display slots");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 374
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The maximum number of licensed Players for this server installation. 0 = unlimited");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 375
            yield "
                                    ";
            // line 376
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["MAX_LICENSED_DISPLAYS"], "method", false, false, false, 376)) {
                // line 377
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["MAX_LICENSED_DISPLAYS", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAX_LICENSED_DISPLAYS", 0], "method", false, false, false, 377), ($context["helpText"] ?? null)], 377, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 379
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["MAX_LICENSED_DISPLAYS", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAX_LICENSED_DISPLAYS", 0], "method", false, false, false, 379), ($context["helpText"] ?? null)], 379, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 381
            yield "                                ";
        }
        // line 382
        yield "
                                ";
        // line 383
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT"], "method", false, false, false, 383)) {
            // line 384
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Aggregation level");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 385
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Set the Default setting to use for the level of collection for Proof of Play Statistics to be applied to Layouts / Media and Widget items.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 386
            yield "
                                    ";
            // line 387
            $context["individualOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Individual");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 388
            yield "                                    ";
            $context["hourlyOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Hourly");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 389
            yield "                                    ";
            $context["dailyOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Daily");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 390
            yield "                                    ";
            $context["options"] = [["id" => "Individual", "value" =>             // line 391
($context["individualOption"] ?? null)], ["id" => "Hourly", "value" =>             // line 392
($context["hourlyOption"] ?? null)], ["id" => "Daily", "value" =>             // line 393
($context["dailyOption"] ?? null)]];
            // line 395
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT"], "method", false, false, false, 395)) {
                // line 396
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT"], "method", false, false, false, 396), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 396, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 398
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT"], "method", false, false, false, 398), ($context["helpText"] ?? null)], 398, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 400
            yield "                                ";
        }
        // line 401
        yield "
                                ";
        // line 402
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DISPLAY_PROFILE_STATS_DEFAULT"], "method", false, false, false, 402)) {
            // line 403
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enable Stats Collection?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 404
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Set the Default Settings for Proof of Play statistics to apply to all Displays. This can be toggled off by using Display Profiles.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 405
            yield "                                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["DISPLAY_PROFILE_STATS_DEFAULT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_PROFILE_STATS_DEFAULT"], "method", false, false, false, 405), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DISPLAY_PROFILE_STATS_DEFAULT"], "method", false, false, false, 405)], 405, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 407
        yield "
                                ";
        // line 408
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["LAYOUT_STATS_ENABLED_DEFAULT"], "method", false, false, false, 408)) {
            // line 409
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enable Layout Stats Collection?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 410
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Select the Default setting to use for the collection of Proof of Play statistics for all Layout Items.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 411
            yield "                                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["LAYOUT_STATS_ENABLED_DEFAULT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["LAYOUT_STATS_ENABLED_DEFAULT"], "method", false, false, false, 411), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["LAYOUT_STATS_ENABLED_DEFAULT"], "method", false, false, false, 411)], 411, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 413
        yield "
                                ";
        // line 414
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["MEDIA_STATS_ENABLED_DEFAULT"], "method", false, false, false, 414)) {
            // line 415
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enable Media Stats Collection?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 416
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Select the Default setting to use for the collection of Proof of Play statistics for all Media Items.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 417
            yield "
                                    ";
            // line 418
            $context["offOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Off");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 419
            yield "                                    ";
            $context["onOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("On");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 420
            yield "                                    ";
            $context["inheritOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Inherit");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 421
            yield "                                    ";
            $context["options"] = [["id" => "Off", "value" =>             // line 422
($context["offOption"] ?? null)], ["id" => "On", "value" =>             // line 423
($context["onOption"] ?? null)], ["id" => "Inherit", "value" =>             // line 424
($context["inheritOption"] ?? null)]];
            // line 426
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["MEDIA_STATS_ENABLED_DEFAULT"], "method", false, false, false, 426)) {
                // line 427
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["MEDIA_STATS_ENABLED_DEFAULT", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MEDIA_STATS_ENABLED_DEFAULT"], "method", false, false, false, 427), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 427, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 429
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["MEDIA_STATS_ENABLED_DEFAULT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MEDIA_STATS_ENABLED_DEFAULT"], "method", false, false, false, 429), ($context["helpText"] ?? null)], 429, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 431
            yield "                                ";
        }
        // line 432
        yield "
                                ";
        // line 433
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["PLAYLIST_STATS_ENABLED_DEFAULT"], "method", false, false, false, 433)) {
            // line 434
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enable Playlist Stats Collection?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 435
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Select the Default setting to use for the collection of Proof of Play statistics for all Playlists.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 436
            yield "
                                    ";
            // line 437
            $context["offOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Off");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 438
            yield "                                    ";
            $context["onOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("On");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 439
            yield "                                    ";
            $context["inheritOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Inherit");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 440
            yield "                                    ";
            $context["options"] = [["id" => "Off", "value" =>             // line 441
($context["offOption"] ?? null)], ["id" => "On", "value" =>             // line 442
($context["onOption"] ?? null)], ["id" => "Inherit", "value" =>             // line 443
($context["inheritOption"] ?? null)]];
            // line 445
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["PLAYLIST_STATS_ENABLED_DEFAULT"], "method", false, false, false, 445)) {
                // line 446
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["PLAYLIST_STATS_ENABLED_DEFAULT", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PLAYLIST_STATS_ENABLED_DEFAULT"], "method", false, false, false, 446), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 446, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 448
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["PLAYLIST_STATS_ENABLED_DEFAULT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PLAYLIST_STATS_ENABLED_DEFAULT"], "method", false, false, false, 448), ($context["helpText"] ?? null)], 448, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 450
            yield "                                ";
        }
        // line 451
        yield "
                                ";
        // line 452
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["WIDGET_STATS_ENABLED_DEFAULT"], "method", false, false, false, 452)) {
            // line 453
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enable Widget Stats Collection?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 454
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Select the Default setting to use for the collection for Proof of Play statistics for all Widgets.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 455
            yield "
                                    ";
            // line 456
            $context["offOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Off");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 457
            yield "                                    ";
            $context["onOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("On");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 458
            yield "                                    ";
            $context["inheritOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Inherit");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 459
            yield "                                    ";
            $context["options"] = [["id" => "Off", "value" =>             // line 460
($context["offOption"] ?? null)], ["id" => "On", "value" =>             // line 461
($context["onOption"] ?? null)], ["id" => "Inherit", "value" =>             // line 462
($context["inheritOption"] ?? null)]];
            // line 464
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["WIDGET_STATS_ENABLED_DEFAULT"], "method", false, false, false, 464)) {
                // line 465
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["WIDGET_STATS_ENABLED_DEFAULT", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["WIDGET_STATS_ENABLED_DEFAULT"], "method", false, false, false, 465), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 465, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 467
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["WIDGET_STATS_ENABLED_DEFAULT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["WIDGET_STATS_ENABLED_DEFAULT"], "method", false, false, false, 467), ($context["helpText"] ?? null)], 467, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 469
            yield "                                ";
        }
        // line 470
        yield "
                                ";
        // line 471
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DISPLAY_PROFILE_CURRENT_LAYOUT_STATUS_ENABLED"], "method", false, false, false, 471)) {
            // line 472
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enable the option to report the current layout status?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 473
            yield "                                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["DISPLAY_PROFILE_CURRENT_LAYOUT_STATUS_ENABLED", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_PROFILE_CURRENT_LAYOUT_STATUS_ENABLED"], "method", false, false, false, 473), "", "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DISPLAY_PROFILE_CURRENT_LAYOUT_STATUS_ENABLED"], "method", false, false, false, 473)], 473, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 475
        yield "
                                ";
        // line 476
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DISPLAY_LOCK_NAME_TO_DEVICENAME"], "method", false, false, false, 476)) {
            // line 477
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Lock the Display Name to the device name provided by the Player?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 478
            yield "                                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["DISPLAY_LOCK_NAME_TO_DEVICENAME", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_LOCK_NAME_TO_DEVICENAME"], "method", false, false, false, 478), "", "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DISPLAY_LOCK_NAME_TO_DEVICENAME"], "method", false, false, false, 478)], 478, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 480
        yield "
                                ";
        // line 481
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED"], "method", false, false, false, 481)) {
            // line 482
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enable the option to set the screenshot interval?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 483
            yield "                                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED"], "method", false, false, false, 483), "", "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED"], "method", false, false, false, 483)], 483, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 485
        yield "
                                ";
        // line 486
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT"], "method", false, false, false, 486)) {
            // line 487
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Display Screenshot Default Size");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 488
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The default size in pixels for the Display Screenshots");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 489
            yield "
                                    ";
            // line 490
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT"], "method", false, false, false, 490)) {
                // line 491
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT", 200], "method", false, false, false, 491), ($context["helpText"] ?? null)], 491, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 493
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT", 200], "method", false, false, false, 493), ($context["helpText"] ?? null)], 493, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 495
            yield "                                ";
        }
        // line 496
        yield "
                                ";
        // line 497
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DISPLAY_SCREENSHOT_TTL"], "method", false, false, false, 497)) {
            // line 498
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Display screenshot Time to keep (days)");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 499
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Display screenshots older than the TTL will be automatically removed. Set to 0 to never remove old screenshots.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 500
            yield "
                                    ";
            // line 501
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DISPLAY_SCREENSHOT_TTL"], "method", false, false, false, 501)) {
                // line 502
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["DISPLAY_SCREENSHOT_TTL", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_SCREENSHOT_TTL", 0], "method", false, false, false, 502), ($context["helpText"] ?? null)], 502, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 504
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DISPLAY_SCREENSHOT_TTL", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_SCREENSHOT_TTL", 0], "method", false, false, false, 504), ($context["helpText"] ?? null)], 504, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 506
            yield "                                ";
        }
        // line 507
        yield "
                                ";
        // line 508
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DISPLAY_AUTO_AUTH"], "method", false, false, false, 508)) {
            // line 509
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Automatically authorise new Displays?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 510
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("If checked all new Displays registering with the CMS using the correct CMS key will automatically be set to authorised and display the Default Layout.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 511
            yield "                                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["DISPLAY_AUTO_AUTH", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_AUTO_AUTH", 0], "method", false, false, false, 511), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DISPLAY_AUTO_AUTH"], "method", false, false, false, 511)], 511, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 513
        yield "
                                ";
        // line 514
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DISPLAY_DEFAULT_FOLDER"], "method", false, false, false, 514)) {
            // line 515
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default Folder for new Displays");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 516
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Set default folder for new Displays, by default the Root folder will be used");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 517
            yield "
                                    ";
            // line 518
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DISPLAY_DEFAULT_FOLDER"], "method", false, false, false, 518)) {
                // line 519
                yield "                                        ";
                $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("folders.search")], ["name" => "data-filter-options", "value" => "{\"gridView\":1}"], ["name" => "data-search-term", "value" => "folderName"], ["name" => "data-id-property", "value" => "folderId"], ["name" => "data-text-property", "value" => "text"], ["name" => "data-initial-key", "value" => "folderId"], ["name" => "data-initial-value", "value" => CoreExtension::getAttribute($this->env, $this->source,                 // line 527
($context["theme"] ?? null), "getSetting", ["DISPLAY_DEFAULT_FOLDER", 1], "method", false, false, false, 527)]];
                // line 529
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["DISPLAY_DEFAULT_FOLDER", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_DEFAULT_FOLDER", 1], "method", false, false, false, 529), null, "", "", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 529, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 531
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DISPLAY_DEFAULT_FOLDER", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DISPLAY_DEFAULT_FOLDER"], "method", false, false, false, 531), ($context["helpText"] ?? null)], 531, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 533
            yield "                                ";
        }
        // line 534
        yield "                            </div>
                            <div class=\"tab-pane\" id=\"tab_general\">
                                <h3 class=\"section-heading\">";
        // line 536
        echo __("General");
        yield "</h3>

                                ";
        // line 538
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["HELP_BASE"], "method", false, false, false, 538)) {
            // line 539
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Location of the Manual");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 540
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The address of the user manual, which will be used as a prefix for all help links.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 541
            yield "
                                    ";
            // line 542
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["HELP_BASE"], "method", false, false, false, 542)) {
                // line 543
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["HELP_BASE", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["HELP_BASE", "https://xibosignage.com/manual/"], "method", false, false, false, 543), ($context["helpText"] ?? null), "required"], 543, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 545
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["HELP_BASE", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["HELP_BASE", "https://xibosignage.com/manual/"], "method", false, false, false, 545), ($context["helpText"] ?? null)], 545, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 547
            yield "                                ";
        }
        // line 548
        yield "
                                ";
        // line 549
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["QUICK_CHART_URL"], "method", false, false, false, 549)) {
            // line 550
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Quick Chart URL");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 551
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enter the URL to a Quick Chart service. This is used to draw charts in emailed reports and for showing a QR code during two factor authentication.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 552
            yield "
                                    ";
            // line 553
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["QUICK_CHART_URL"], "method", false, false, false, 553)) {
                // line 554
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["QUICK_CHART_URL", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["QUICK_CHART_URL", "https://quickchart.io"], "method", false, false, false, 554), ($context["helpText"] ?? null), "required"], 554, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 556
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["QUICK_CHART_URL", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["QUICK_CHART_URL", "https://quickchart.io"], "method", false, false, false, 556), ($context["helpText"] ?? null)], 556, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 558
            yield "                                ";
        }
        // line 559
        yield "
                                ";
        // line 560
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["PHONE_HOME"], "method", false, false, false, 560)) {
            // line 561
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should the CMS send anonymous statistics to help improve the software?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 562
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("When this is enabled the CMS will periodically send usage information to the software authors so that improvements can be made to the product.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 563
            yield "
                                    ";
            // line 564
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["PHONE_HOME", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PHONE_HOME"], "method", false, false, false, 564), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["PHONE_HOME"], "method", false, false, false, 564)], 564, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 566
        yield "
                                ";
        // line 567
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["PHONE_HOME_KEY"], "method", false, false, false, 567)) {
            // line 568
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Phone home key");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 569
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Key used to distinguish each CMS instance. This is generated randomly based on the time you first installed the CMS, and is completely untraceable.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 570
            yield "
                                    ";
            // line 571
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["PHONE_HOME_KEY"], "method", false, false, false, 571)) {
                // line 572
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["PHONE_HOME_KEY", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PHONE_HOME_KEY"], "method", false, false, false, 572), ($context["helpText"] ?? null)], 572, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 574
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["PHONE_HOME_KEY", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PHONE_HOME_KEY"], "method", false, false, false, 574), ($context["helpText"] ?? null)], 574, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 576
            yield "                                ";
        }
        // line 577
        yield "
                                ";
        // line 578
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["PHONE_HOME_DATE"], "method", false, false, false, 578)) {
            // line 579
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Phone home time");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 580
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The last time we PHONED_HOME in seconds since the epoch");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 581
            yield "
                                    ";
            // line 582
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["PHONE_HOME_DATE"], "method", false, false, false, 582)) {
                // line 583
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["PHONE_HOME_DATE", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PHONE_HOME_DATE"], "method", false, false, false, 583), ($context["helpText"] ?? null)], 583, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 585
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["PHONE_HOME_DATE", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PHONE_HOME_DATE"], "method", false, false, false, 585), ($context["helpText"] ?? null)], 585, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 587
            yield "                                ";
        }
        // line 588
        yield "
                                ";
        // line 589
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["SCHEDULE_LOOKAHEAD"], "method", false, false, false, 589)) {
            // line 590
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Send Schedule in advance?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 591
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should the CMS send future schedule information to Players?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 592
            yield "
                                    ";
            // line 593
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["SCHEDULE_LOOKAHEAD", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SCHEDULE_LOOKAHEAD", 1], "method", false, false, false, 593), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["SCHEDULE_LOOKAHEAD"], "method", false, false, false, 593)], 593, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 595
        yield "
                                ";
        // line 596
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["REQUIRED_FILES_LOOKAHEAD"], "method", false, false, false, 596)) {
            // line 597
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Send files in advance?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 598
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("How many seconds in to the future should the calls to RequiredFiles look?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 599
            yield "
                                    ";
            // line 600
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["REQUIRED_FILES_LOOKAHEAD"], "method", false, false, false, 600)) {
                // line 601
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["REQUIRED_FILES_LOOKAHEAD", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["REQUIRED_FILES_LOOKAHEAD", "172800"], "method", false, false, false, 601), ($context["helpText"] ?? null)], 601, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 603
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["REQUIRED_FILES_LOOKAHEAD", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["REQUIRED_FILES_LOOKAHEAD", "172800"], "method", false, false, false, 603), ($context["helpText"] ?? null)], 603, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 605
            yield "                                ";
        }
        // line 606
        yield "
                                ";
        // line 607
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["SETTING_IMPORT_ENABLED"], "method", false, false, false, 607)) {
            // line 608
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Allow Import?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 609
            yield "
                                    ";
            // line 610
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["SETTING_IMPORT_ENABLED", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SETTING_IMPORT_ENABLED", 0], "method", false, false, false, 610), "", "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["SETTING_IMPORT_ENABLED"], "method", false, false, false, 610)], 610, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 612
        yield "
                                ";
        // line 613
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["SETTING_LIBRARY_TIDY_ENABLED"], "method", false, false, false, 613)) {
            // line 614
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enable Library Tidy?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 615
            yield "
                                    ";
            // line 616
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["SETTING_LIBRARY_TIDY_ENABLED", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SETTING_LIBRARY_TIDY_ENABLED", 1], "method", false, false, false, 616), "", "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["SETTING_LIBRARY_TIDY_ENABLED"], "method", false, false, false, 616)], 616, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 618
        yield "
                                ";
        // line 619
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["EMBEDDED_STATUS_WIDGET"], "method", false, false, false, 619)) {
            // line 620
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Status Dashboard Widget");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 621
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("HTML to embed in an iframe on the Status Dashboard");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 622
            yield "
                                    ";
            // line 623
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["EMBEDDED_STATUS_WIDGET"], "method", false, false, false, 623)) {
                // line 624
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["EMBEDDED_STATUS_WIDGET", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["EMBEDDED_STATUS_WIDGET"], "method", false, false, false, 624), ($context["helpText"] ?? null)], 624, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 626
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["EMBEDDED_STATUS_WIDGET", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["EMBEDDED_STATUS_WIDGET"], "method", false, false, false, 626), ($context["helpText"] ?? null)], 626, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 628
            yield "                                ";
        }
        // line 629
        yield "
                                ";
        // line 630
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULTS_IMPORTED"], "method", false, false, false, 630)) {
            // line 631
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Defaults Imported?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 632
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Has the default layout been imported?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 633
            yield "
                                    ";
            // line 634
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["DEFAULTS_IMPORTED", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULTS_IMPORTED", 0], "method", false, false, false, 634), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULTS_IMPORTED"], "method", false, false, false, 634)], 634, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 636
        yield "
                                ";
        // line 637
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DASHBOARD_LATEST_NEWS_ENABLED"], "method", false, false, false, 637)) {
            // line 638
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enable Latest News?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 639
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should the Dashboard show latest news? The address is provided by the theme.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 640
            yield "
                                    ";
            // line 641
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["DASHBOARD_LATEST_NEWS_ENABLED", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DASHBOARD_LATEST_NEWS_ENABLED", 1], "method", false, false, false, 641), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DASHBOARD_LATEST_NEWS_ENABLED"], "method", false, false, false, 641)], 641, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 643
        yield "
                                ";
        // line 644
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["INSTANCE_SUSPENDED"], "method", false, false, false, 644)) {
            // line 645
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Instance Suspended");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 646
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Is this instance suspended? Warning: Direct database access will be required to reactivate the CMS if you select Yes");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 647
            yield "
                                    ";
            // line 648
            $context["noOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("No");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 649
            yield "                                    ";
            $context["partialOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Partially");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 650
            yield "                                    ";
            $context["yesOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Yes");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 651
            yield "                                    ";
            $context["options"] = [["id" => "no", "value" =>             // line 652
($context["noOption"] ?? null)], ["id" => "partial", "value" =>             // line 653
($context["partialOption"] ?? null)], ["id" => "yes", "value" =>             // line 654
($context["yesOption"] ?? null)]];
            // line 656
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["INSTANCE_SUSPENDED"], "method", false, false, false, 656)) {
                // line 657
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["INSTANCE_SUSPENDED", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["INSTANCE_SUSPENDED", "No"], "method", false, false, false, 657), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 657, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 659
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["INSTANCE_SUSPENDED", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["INSTANCE_SUSPENDED", "No"], "method", false, false, false, 659), ($context["helpText"] ?? null)], 659, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 661
            yield "                                ";
        }
        // line 662
        yield "
                                ";
        // line 663
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["LATEST_NEWS_URL"], "method", false, false, false, 663)) {
            // line 664
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Latest News URL");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 665
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("RSS/Atom Feed to be displayed on the Status Dashboard");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 666
            yield "
                                    ";
            // line 667
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["LATEST_NEWS_URL"], "method", false, false, false, 667)) {
                // line 668
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["LATEST_NEWS_URL", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["LATEST_NEWS_URL"], "method", false, false, false, 668), ($context["helpText"] ?? null)], 668, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 670
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["LATEST_NEWS_URL", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["LATEST_NEWS_URL"], "method", false, false, false, 670), ($context["helpText"] ?? null)], 670, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 672
            yield "                                ";
        }
        // line 673
        yield "
                                ";
        // line 674
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["REPORTS_EXPORT_SHOW_LOGO"], "method", false, false, false, 674)) {
            // line 675
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Show the Logo on report exports?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 676
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("When exporting a saved report to PDF, should the logo be shown on the PDF?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 677
            yield "
                                    ";
            // line 678
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["REPORTS_EXPORT_SHOW_LOGO", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["REPORTS_EXPORT_SHOW_LOGO", 0], "method", false, false, false, 678), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["REPORTS_EXPORT_SHOW_LOGO"], "method", false, false, false, 678)], 678, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 680
        yield "                            </div>
                            <div class=\"tab-pane\" id=\"tab_maint\">
                                <h3 class=\"section-heading\">";
        // line 682
        echo __("Maintenance");
        yield "</h3>

                                ";
        // line 684
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["MAINTENANCE_ENABLED"], "method", false, false, false, 684)) {
            // line 685
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enable Maintenance?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 686
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Allow the maintenance script to run if it is called?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 687
            yield "
                                    ";
            // line 688
            $context["offOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Off");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 689
            yield "                                    ";
            $context["onOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("On");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 690
            yield "                                    ";
            $context["protectedOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Protected");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 691
            yield "                                    ";
            $context["options"] = [["id" => "Off", "value" =>             // line 692
($context["offOption"] ?? null)], ["id" => "On", "value" =>             // line 693
($context["onOption"] ?? null)], ["id" => "Protected", "value" =>             // line 694
($context["protectedOption"] ?? null)]];
            // line 696
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["MAINTENANCE_ENABLED"], "method", false, false, false, 696)) {
                // line 697
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["MAINTENANCE_ENABLED", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAINTENANCE_ENABLED", "Off"], "method", false, false, false, 697), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 697, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 699
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["MAINTENANCE_ENABLED", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAINTENANCE_ENABLED", "Off"], "method", false, false, false, 699), ($context["helpText"] ?? null)], 699, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 701
            yield "                                ";
        }
        // line 702
        yield "
                                ";
        // line 703
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["MAINTENANCE_EMAIL_ALERTS"], "method", false, false, false, 703)) {
            // line 704
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enable Email Alerts?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 705
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Global switch for email alerts to be sent");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 706
            yield "
                                    ";
            // line 707
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["MAINTENANCE_EMAIL_ALERTS", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAINTENANCE_EMAIL_ALERTS", 1], "method", false, false, false, 707), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["MAINTENANCE_EMAIL_ALERTS"], "method", false, false, false, 707)], 707, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 709
        yield "
                                ";
        // line 710
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["MAINTENANCE_LOG_MAXAGE"], "method", false, false, false, 710)) {
            // line 711
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Max Log Age");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 712
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Maximum age for log entries in days. Set to 0 to keep logs indefinitely.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 713
            yield "
                                    ";
            // line 714
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["MAINTENANCE_LOG_MAXAGE"], "method", false, false, false, 714)) {
                // line 715
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["MAINTENANCE_LOG_MAXAGE", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAINTENANCE_LOG_MAXAGE", 30], "method", false, false, false, 715), ($context["helpText"] ?? null)], 715, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 717
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["MAINTENANCE_LOG_MAXAGE", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAINTENANCE_LOG_MAXAGE", 30], "method", false, false, false, 717), ($context["helpText"] ?? null)], 717, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 719
            yield "                                ";
        }
        // line 720
        yield "
                                ";
        // line 721
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["MAINTENANCE_STAT_MAXAGE"], "method", false, false, false, 721)) {
            // line 722
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Max Statistics Age");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 723
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Maximum age for statistics entries in days. Entries older than this will not be processed and existing entries will be removed. Set to 0 to keep statistics indefinitely.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 724
            yield "
                                    ";
            // line 725
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["MAINTENANCE_STAT_MAXAGE"], "method", false, false, false, 725)) {
                // line 726
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["MAINTENANCE_STAT_MAXAGE", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAINTENANCE_STAT_MAXAGE", 30], "method", false, false, false, 726), ($context["helpText"] ?? null)], 726, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 728
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["MAINTENANCE_STAT_MAXAGE", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAINTENANCE_STAT_MAXAGE", 30], "method", false, false, false, 728), ($context["helpText"] ?? null)], 728, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 730
            yield "                                ";
        }
        // line 731
        yield "
                                ";
        // line 732
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["MAINTENANCE_ALERT_TOUT"], "method", false, false, false, 732)) {
            // line 733
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Max Display Timeout");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 734
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("How long in minutes after the last time a Player connects should we send an alert? Can be overridden on a per Player basis.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 735
            yield "
                                    ";
            // line 736
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["MAINTENANCE_ALERT_TOUT"], "method", false, false, false, 736)) {
                // line 737
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["MAINTENANCE_ALERT_TOUT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAINTENANCE_ALERT_TOUT", 12], "method", false, false, false, 737), ($context["helpText"] ?? null)], 737, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 739
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["MAINTENANCE_ALERT_TOUT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAINTENANCE_ALERT_TOUT", 12], "method", false, false, false, 739), ($context["helpText"] ?? null)], 739, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 741
            yield "                                ";
        }
        // line 742
        yield "
                                ";
        // line 743
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["MAINTENANCE_ALWAYS_ALERT"], "method", false, false, false, 743)) {
            // line 744
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Send repeat Display Timeouts");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 745
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should the CMS send an email if a display is in an error state every time maintenance runs?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 746
            yield "
                                    ";
            // line 747
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["MAINTENANCE_ALWAYS_ALERT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MAINTENANCE_ALWAYS_ALERT", 0], "method", false, false, false, 747), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["MAINTENANCE_ALWAYS_ALERT"], "method", false, false, false, 747)], 747, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 749
        yield "
                            </div>
                            <div class=\"tab-pane\" id=\"tab_network\">
                                <h3 class=\"section-heading\">";
        // line 752
        echo __("Network");
        yield "</h3>

                                ";
        // line 754
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["mail_to"], "method", false, false, false, 754)) {
            // line 755
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Admin email address");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 756
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("This is the overall CMS adminstrator who will receive copies of all email notifications generated by the CMS.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 757
            yield "
                                    ";
            // line 758
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["mail_to"], "method", false, false, false, 758)) {
                // line 759
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["mail_to", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["mail_to"], "method", false, false, false, 759), ($context["helpText"] ?? null)], 759, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 761
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["mail_to", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["mail_to"], "method", false, false, false, 761), ($context["helpText"] ?? null)], 761, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 763
            yield "                                ";
        }
        // line 764
        yield "
                                ";
        // line 765
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["mail_from"], "method", false, false, false, 765)) {
            // line 766
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Sending email address");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 767
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Mail will be sent from this address");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 768
            yield "
                                    ";
            // line 769
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["mail_from"], "method", false, false, false, 769)) {
                // line 770
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["mail_from", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["mail_from"], "method", false, false, false, 770), ($context["helpText"] ?? null)], 770, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 772
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["mail_from", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["mail_from"], "method", false, false, false, 772), ($context["helpText"] ?? null)], 772, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 774
            yield "                                ";
        }
        // line 775
        yield "
                                ";
        // line 776
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["mail_from_name"], "method", false, false, false, 776)) {
            // line 777
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Sending email name");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 778
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Mail will be sent under this name");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 779
            yield "
                                    ";
            // line 780
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["mail_from_name"], "method", false, false, false, 780)) {
                // line 781
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["mail_from_name", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["mail_from_name"], "method", false, false, false, 781), ($context["helpText"] ?? null)], 781, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 783
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["mail_from_name", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["mail_from_name"], "method", false, false, false, 783), ($context["helpText"] ?? null)], 783, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 785
            yield "                                ";
        }
        // line 786
        yield "
                                ";
        // line 787
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["SENDFILE_MODE"], "method", false, false, false, 787)) {
            // line 788
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("File download mode");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 789
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should the CMS use Apache X-Sendfile, Nginx X-Accel, or PHP (Off) to return the files from the library?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 790
            yield "
                                    ";
            // line 791
            $context["offOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Off");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 792
            yield "                                    ";
            $context["options"] = [["id" => "Off", "value" =>             // line 793
($context["offOption"] ?? null)], ["id" => "Apache", "value" => "Apache"], ["id" => "Nginx", "value" => "Nginx"]];
            // line 797
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["SENDFILE_MODE"], "method", false, false, false, 797)) {
                // line 798
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["SENDFILE_MODE", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SENDFILE_MODE", "Off"], "method", false, false, false, 798), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 798, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 800
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["SENDFILE_MODE", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SENDFILE_MODE", "Off"], "method", false, false, false, 800), ($context["helpText"] ?? null)], 800, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 802
            yield "                                ";
        }
        // line 803
        yield "
                                ";
        // line 804
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["PROXY_HOST"], "method", false, false, false, 804)) {
            // line 805
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Proxy URL");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 806
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The Proxy URL");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 807
            yield "
                                    ";
            // line 808
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["PROXY_HOST"], "method", false, false, false, 808)) {
                // line 809
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["PROXY_HOST", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PROXY_HOST"], "method", false, false, false, 809), ($context["helpText"] ?? null)], 809, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 811
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["PROXY_HOST", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PROXY_HOST"], "method", false, false, false, 811), ($context["helpText"] ?? null)], 811, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 813
            yield "                                ";
        }
        // line 814
        yield "
                                ";
        // line 815
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["PROXY_PORT"], "method", false, false, false, 815)) {
            // line 816
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Proxy Port");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 817
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The Proxy Port");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 818
            yield "
                                    ";
            // line 819
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["PROXY_PORT"], "method", false, false, false, 819)) {
                // line 820
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["PROXY_PORT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PROXY_PORT", 0], "method", false, false, false, 820), ($context["helpText"] ?? null)], 820, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 822
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["PROXY_PORT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PROXY_PORT", 0], "method", false, false, false, 822), ($context["helpText"] ?? null)], 822, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 824
            yield "                                ";
        }
        // line 825
        yield "
                                ";
        // line 826
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["PROXY_AUTH"], "method", false, false, false, 826)) {
            // line 827
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Proxy Credentials");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 828
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The Authentication information for this proxy. username:password");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 829
            yield "
                                    ";
            // line 830
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["PROXY_AUTH"], "method", false, false, false, 830)) {
                // line 831
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["PROXY_AUTH", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PROXY_AUTH"], "method", false, false, false, 831), ($context["helpText"] ?? null)], 831, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 833
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["PROXY_AUTH", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PROXY_AUTH"], "method", false, false, false, 833), ($context["helpText"] ?? null)], 833, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 835
            yield "                                ";
        }
        // line 836
        yield "
                                ";
        // line 837
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["PROXY_EXCEPTIONS"], "method", false, false, false, 837)) {
            // line 838
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Proxy Exceptions");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 839
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Hosts and Keywords that should not be loaded via the Proxy Specified. These should be comma separated.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 840
            yield "
                                    ";
            // line 841
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["PROXY_EXCEPTIONS"], "method", false, false, false, 841)) {
                // line 842
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["PROXY_EXCEPTIONS", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PROXY_EXCEPTIONS"], "method", false, false, false, 842), ($context["helpText"] ?? null)], 842, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 844
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["PROXY_EXCEPTIONS", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PROXY_EXCEPTIONS"], "method", false, false, false, 844), ($context["helpText"] ?? null)], 844, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 846
            yield "                                ";
        }
        // line 847
        yield "
                                ";
        // line 848
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["CDN_URL"], "method", false, false, false, 848)) {
            // line 849
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("CDN Address");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 850
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Content Delivery Network Address for serving file requests to Players");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 851
            yield "
                                    ";
            // line 852
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["CDN_URL"], "method", false, false, false, 852)) {
                // line 853
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["CDN_URL", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["CDN_URL"], "method", false, false, false, 853), ($context["helpText"] ?? null)], 853, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 855
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["CDN_URL", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["CDN_URL"], "method", false, false, false, 855), ($context["helpText"] ?? null)], 855, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 857
            yield "                                ";
        }
        // line 858
        yield "
                                ";
        // line 859
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["MONTHLY_XMDS_TRANSFER_LIMIT_KB"], "method", false, false, false, 859)) {
            // line 860
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Monthly bandwidth Limit");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 861
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("XMDS Transfer Limit in KB/month");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 862
            yield "
                                    ";
            // line 863
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["MONTHLY_XMDS_TRANSFER_LIMIT_KB"], "method", false, false, false, 863)) {
                // line 864
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["MONTHLY_XMDS_TRANSFER_LIMIT_KB", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MONTHLY_XMDS_TRANSFER_LIMIT_KB"], "method", false, false, false, 864), ($context["helpText"] ?? null)], 864, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 866
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["MONTHLY_XMDS_TRANSFER_LIMIT_KB", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["MONTHLY_XMDS_TRANSFER_LIMIT_KB"], "method", false, false, false, 866), ($context["helpText"] ?? null)], 866, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 868
            yield "                                ";
        }
        // line 869
        yield "
                                ";
        // line 870
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["LIBRARY_SIZE_LIMIT_KB"], "method", false, false, false, 870)) {
            // line 871
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Library Size Limit");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 872
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The Limit for the Library Size in KB");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 873
            yield "
                                    ";
            // line 874
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["LIBRARY_SIZE_LIMIT_KB"], "method", false, false, false, 874)) {
                // line 875
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["LIBRARY_SIZE_LIMIT_KB", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["LIBRARY_SIZE_LIMIT_KB"], "method", false, false, false, 875), ($context["helpText"] ?? null)], 875, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 877
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["LIBRARY_SIZE_LIMIT_KB", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["LIBRARY_SIZE_LIMIT_KB"], "method", false, false, false, 877), ($context["helpText"] ?? null)], 877, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 879
            yield "                                ";
        }
        // line 880
        yield "
                                ";
        // line 881
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["FORCE_HTTPS"], "method", false, false, false, 881)) {
            // line 882
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Force HTTPS?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 883
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Force the portal into HTTPS?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 884
            yield "
                                    ";
            // line 885
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["FORCE_HTTPS", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["FORCE_HTTPS", 0], "method", false, false, false, 885), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["FORCE_HTTPS"], "method", false, false, false, 885)], 885, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 887
        yield "
                                ";
        // line 888
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["ISSUE_STS"], "method", false, false, false, 888)) {
            // line 889
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enable STS?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 890
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Add STS to the response headers? Make sure you fully understand STS before turning it on as it will prevent access via HTTP after the first successful HTTPS connection.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 891
            yield "
                                    ";
            // line 892
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["ISSUE_STS", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["ISSUE_STS", 0], "method", false, false, false, 892), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["ISSUE_STS"], "method", false, false, false, 892)], 892, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 894
        yield "
                                ";
        // line 895
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["STS_TTL"], "method", false, false, false, 895)) {
            // line 896
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("STS Time out");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 897
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The Time to Live (maxage) of the STS header expressed in seconds.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 898
            yield "
                                    ";
            // line 899
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["STS_TTL"], "method", false, false, false, 899)) {
                // line 900
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_number", ["STS_TTL", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["STS_TTL", "600"], "method", false, false, false, 900), ($context["helpText"] ?? null), "", "", "", 999999999], 900, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 902
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["STS_TTL", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["STS_TTL", "600"], "method", false, false, false, 902), ($context["helpText"] ?? null)], 902, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 904
            yield "                                ";
        }
        // line 905
        yield "
                                ";
        // line 906
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["WHITELIST_LOAD_BALANCERS"], "method", false, false, false, 906)) {
            // line 907
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Whitelist Load Balancers");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 908
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("If the CMS is behind a load balancer, what are the load balancer IP addresses, comma delimited.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 909
            yield "
                                    ";
            // line 910
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["WHITELIST_LOAD_BALANCERS"], "method", false, false, false, 910)) {
                // line 911
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["WHITELIST_LOAD_BALANCERS", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["WHITELIST_LOAD_BALANCERS"], "method", false, false, false, 911), ($context["helpText"] ?? null)], 911, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 913
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["WHITELIST_LOAD_BALANCERS", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["WHITELIST_LOAD_BALANCERS"], "method", false, false, false, 913), ($context["helpText"] ?? null)], 913, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 915
            yield "                                ";
        }
        // line 916
        yield "                            </div>
                            <div class=\"tab-pane\" id=\"tab_permissions\">
                                <h3 class=\"section-heading\">";
        // line 918
        echo __("Sharing");
        yield "</h3>

                                ";
        // line 920
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["REGION_OPTIONS_COLOURING"], "method", false, false, false, 920)) {
            // line 921
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Widget colouring in Playlist editor");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 922
            yield "
                                    ";
            // line 923
            $context["privateOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Media Colouring");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 924
            yield "                                    ";
            $context["groupOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Sharing Colouring");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 925
            yield "                                    ";
            $context["options"] = [["id" => "Media Colouring", "value" =>             // line 926
($context["privateOption"] ?? null)], ["id" => "Sharing Colouring", "value" =>             // line 927
($context["groupOption"] ?? null)]];
            // line 929
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["REGION_OPTIONS_COLOURING"], "method", false, false, false, 929)) {
                // line 930
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["REGION_OPTIONS_COLOURING", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["REGION_OPTIONS_COLOURING", "Media Colouring"], "method", false, false, false, 930), ($context["options"] ?? null), "id", "value"], 930, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 932
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["REGION_OPTIONS_COLOURING", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["REGION_OPTIONS_COLOURING", "Media Colouring"], "method", false, false, false, 932), ($context["helpText"] ?? null)], 932, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 934
            yield "                                ";
        }
        // line 935
        yield "
                                ";
        // line 936
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["SCHEDULE_WITH_VIEW_PERMISSION"], "method", false, false, false, 936)) {
            // line 937
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Schedule with view sharing?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 938
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Should users with View sharing on displays be allowed to schedule to them?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 939
            yield "                                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["SCHEDULE_WITH_VIEW_PERMISSION", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SCHEDULE_WITH_VIEW_PERMISSION", 0], "method", false, false, false, 939), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["SCHEDULE_WITH_VIEW_PERMISSION"], "method", false, false, false, 939)], 939, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 941
        yield "
                                ";
        // line 942
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["SCHEDULE_SHOW_LAYOUT_NAME"], "method", false, false, false, 942)) {
            // line 943
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Show event Layout regardless of User permission?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 944
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("If checked then the Schedule will show the Layout for existing events even if the logged in User does not have permission to see that Layout.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 945
            yield "                                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["SCHEDULE_SHOW_LAYOUT_NAME", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SCHEDULE_SHOW_LAYOUT_NAME", 0], "method", false, false, false, 945), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["SCHEDULE_SHOW_LAYOUT_NAME"], "method", false, false, false, 945)], 945, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 947
        yield "
                                ";
        // line 948
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["TASK_CONFIG_LOCKED_CHECKB"], "method", false, false, false, 948)) {
            // line 949
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Lock Task Config");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 950
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Is the task config locked? Useful for Service providers.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 951
            yield "                                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["TASK_CONFIG_LOCKED_CHECKB", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["TASK_CONFIG_LOCKED_CHECKB"], "method", false, false, false, 951), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["TASK_CONFIG_LOCKED_CHECKB"], "method", false, false, false, 951)], 951, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 953
        yield "
                                ";
        // line 954
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["TRANSITION_CONFIG_LOCKED_CHECKB"], "method", false, false, false, 954)) {
            // line 955
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Is the Transition config locked?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 956
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Allow modifications to the transition configuration?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 957
            yield "                                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["TRANSITION_CONFIG_LOCKED_CHECKB", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["TRANSITION_CONFIG_LOCKED_CHECKB"], "method", false, false, false, 957), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["TRANSITION_CONFIG_LOCKED_CHECKB"], "method", false, false, false, 957)], 957, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 959
        yield "
                                ";
        // line 960
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["FOLDERS_ALLOW_SAVE_IN_ROOT"], "method", false, false, false, 960)) {
            // line 961
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Allow saving in the root folder?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 962
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Users can use the top level folder to store content. Disable to force the use of folders.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 963
            yield "                                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["FOLDERS_ALLOW_SAVE_IN_ROOT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["FOLDERS_ALLOW_SAVE_IN_ROOT"], "method", false, false, false, 963), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["FOLDERS_ALLOW_SAVE_IN_ROOT"], "method", false, false, false, 963)], 963, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 965
        yield "                            </div>
                            <div class=\"tab-pane\" id=\"tab_regional\">
                                <h3 class=\"section-heading\">";
        // line 967
        echo __("Regional");
        yield "</h3>

                                ";
        // line 969
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_LANGUAGE"], "method", false, false, false, 969)) {
            // line 970
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default Language");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 971
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The default language to use");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 972
            yield "
                                    ";
            // line 973
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_LANGUAGE"], "method", false, false, false, 973)) {
                // line 974
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["DEFAULT_LANGUAGE", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_LANGUAGE", "en_GB"], "method", false, false, false, 974), ($context["languages"] ?? null), "id", "value", ($context["helpText"] ?? null)], 974, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 976
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DEFAULT_LANGUAGE", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_LANGUAGE", "en_GB"], "method", false, false, false, 976), ($context["helpText"] ?? null)], 976, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 978
            yield "                                ";
        }
        // line 979
        yield "
                                ";
        // line 980
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["defaultTimezone"], "method", false, false, false, 980)) {
            // line 981
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Timezone");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 982
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Set the default timezone for the application");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 983
            yield "
                                    ";
            // line 984
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["defaultTimezone"], "method", false, false, false, 984)) {
                // line 985
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["defaultTimezone", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["defaultTimezone", "Europe/London"], "method", false, false, false, 985), ($context["timeZones"] ?? null), "id", "value", ($context["helpText"] ?? null)], 985, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 987
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["defaultTimezone", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["defaultTimezone", "Europe/London"], "method", false, false, false, 987), ($context["helpText"] ?? null)], 987, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 989
            yield "                                ";
        }
        // line 990
        yield "
                                ";
        // line 991
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DATE_FORMAT"], "method", false, false, false, 991)) {
            // line 992
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Date Format");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 993
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The Date Format to use when displaying dates in the CMS.");
                // line 994
                yield "                                        <span id=\"date-format-table\"
                                              class=\"fa fa-info-circle\"
                                              data-toggle=\"popover\"
                                              data-trigger=\"hover\"
                                              data-placement=\"right\">
                                        </span>
                                    ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1001
            yield "
                                    ";
            // line 1002
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DATE_FORMAT"], "method", false, false, false, 1002)) {
                // line 1003
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["DATE_FORMAT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DATE_FORMAT", "Y-m-d"], "method", false, false, false, 1003), ($context["helpText"] ?? null), "required"], 1003, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 1005
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DATE_FORMAT", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DATE_FORMAT", "Y-m-d"], "method", false, false, false, 1005), ($context["helpText"] ?? null)], 1005, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 1007
            yield "                                ";
        }
        // line 1008
        yield "
                                ";
        // line 1009
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DETECT_LANGUAGE"], "method", false, false, false, 1009)) {
            // line 1010
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Detect language?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1011
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Detect the browser language?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1012
            yield "                                    ";
            yield CoreExtension::callMacro($macros["forms"], "macro_checkbox", ["DETECT_LANGUAGE", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DETECT_LANGUAGE"], "method", false, false, false, 1012), ($context["helpText"] ?? null), "", "",  !CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DETECT_LANGUAGE"], "method", false, false, false, 1012)], 1012, $context, $this->getSourceContext());
            yield "
                                ";
        }
        // line 1014
        yield "
                                ";
        // line 1015
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["CALENDAR_TYPE"], "method", false, false, false, 1015)) {
            // line 1016
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Calendar Type");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1017
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Which Calendar Type should the CMS use?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1018
            yield "
                                    ";
            // line 1019
            $context["gregorianOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Gregorian");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1020
            yield "                                    ";
            $context["jalaliOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Jalali");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1021
            yield "                                    ";
            $context["options"] = [["id" => "Gregorian", "value" =>             // line 1022
($context["gregorianOption"] ?? null)], ["id" => "Jalali", "value" =>             // line 1023
($context["jalaliOption"] ?? null)]];
            // line 1025
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["CALENDAR_TYPE"], "method", false, false, false, 1025)) {
                // line 1026
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["CALENDAR_TYPE", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["CALENDAR_TYPE", "Gregorian"], "method", false, false, false, 1026), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 1026, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 1028
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["CALENDAR_TYPE", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["CALENDAR_TYPE", "Gregorian"], "method", false, false, false, 1028), ($context["helpText"] ?? null)], 1028, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 1030
            yield "                                ";
        }
        // line 1031
        yield "                            </div>
                            <div class=\"tab-pane\" id=\"tab_troubleshooting\">
                                <h3 class=\"section-heading\">";
        // line 1033
        echo __("Troubleshooting");
        yield "</h3>

                                ";
        // line 1035
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["RESTING_LOG_LEVEL"], "method", false, false, false, 1035)) {
            // line 1036
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Resting Log Level");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1037
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Set the level of the resting log level. The CMS will revert to this log level after an elevated period ends. In production systems \"error\" is recommended.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1038
            yield "
                                    ";
            // line 1039
            $context["emergencyOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Emergency");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1040
            yield "                                    ";
            $context["alertOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Alert");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1041
            yield "                                    ";
            $context["criticalOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Critical");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1042
            yield "                                    ";
            $context["errorOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Error");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1043
            yield "                                    ";
            $context["options"] = [["id" => "emergency", "value" =>             // line 1044
($context["emergencyOption"] ?? null)], ["id" => "alert", "value" =>             // line 1045
($context["alertOption"] ?? null)], ["id" => "critical", "value" =>             // line 1046
($context["criticalOption"] ?? null)], ["id" => "error", "value" =>             // line 1047
($context["errorOption"] ?? null)]];
            // line 1049
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["RESTING_LOG_LEVEL"], "method", false, false, false, 1049)) {
                // line 1050
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["RESTING_LOG_LEVEL", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["RESTING_LOG_LEVEL", "error"], "method", false, false, false, 1050), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 1050, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 1052
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["RESTING_LOG_LEVEL", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["RESTING_LOG_LEVEL", "error"], "method", false, false, false, 1052), ($context["helpText"] ?? null)], 1052, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 1054
            yield "                                ";
        }
        // line 1055
        yield "
                                ";
        // line 1056
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["audit"], "method", false, false, false, 1056)) {
            // line 1057
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Log Level");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1058
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Set the level of logging the CMS should record. In production systems \"error\" is recommended.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1059
            yield "
                                    ";
            // line 1060
            $context["emergencyOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Emergency");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1061
            yield "                                    ";
            $context["alertOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Alert");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1062
            yield "                                    ";
            $context["criticalOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Critical");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1063
            yield "                                    ";
            $context["errorOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Error");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1064
            yield "                                    ";
            $context["warningOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Warning");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1065
            yield "                                    ";
            $context["noticeOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Notice");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1066
            yield "                                    ";
            $context["infoOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Information");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1067
            yield "                                    ";
            $context["debugOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Debug");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1068
            yield "                                    ";
            $context["options"] = [["id" => "emergency", "value" =>             // line 1069
($context["emergencyOption"] ?? null)], ["id" => "alert", "value" =>             // line 1070
($context["alertOption"] ?? null)], ["id" => "critical", "value" =>             // line 1071
($context["criticalOption"] ?? null)], ["id" => "error", "value" =>             // line 1072
($context["errorOption"] ?? null)], ["id" => "warning", "value" =>             // line 1073
($context["warningOption"] ?? null)], ["id" => "notice", "value" =>             // line 1074
($context["noticeOption"] ?? null)], ["id" => "info", "value" =>             // line 1075
($context["infoOption"] ?? null)], ["id" => "debug", "value" =>             // line 1076
($context["debugOption"] ?? null)]];
            // line 1078
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["audit"], "method", false, false, false, 1078)) {
                // line 1079
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["audit", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["audit", "error"], "method", false, false, false, 1079), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 1079, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 1081
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["audit", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["audit", "error"], "method", false, false, false, 1081), ($context["helpText"] ?? null)], 1081, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 1083
            yield "                                ";
        }
        // line 1084
        yield "
                                ";
        // line 1085
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["ELEVATE_LOG_UNTIL"], "method", false, false, false, 1085)) {
            // line 1086
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Elevate Log Until");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1087
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Elevate the log level until this date.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1088
            yield "
                                    ";
            // line 1089
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["ELEVATE_LOG_UNTIL"], "method", false, false, false, 1089)) {
                // line 1090
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dateTime", ["ELEVATE_LOG_UNTIL", ($context["title"] ?? null), ($context["elevateLogUntil"] ?? null), ($context["helpText"] ?? null)], 1090, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 1092
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["ELEVATE_LOG_UNTIL", ($context["title"] ?? null), ($context["elevateLogUntil"] ?? null), ($context["helpText"] ?? null)], 1092, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 1094
            yield "                                ";
        }
        // line 1095
        yield "
                                ";
        // line 1096
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["SERVER_MODE"], "method", false, false, false, 1096)) {
            // line 1097
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Server Mode");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1098
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("This should only be set if you want to display the maximum allowed error messaging through the user interface. <br /> Useful for capturing critical php errors and environment issues.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1099
            yield "
                                    ";
            // line 1100
            $context["productionOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Production");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1101
            yield "                                    ";
            $context["testOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Test");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1102
            yield "                                    ";
            $context["options"] = [["id" => "Production", "value" =>             // line 1103
($context["productionOption"] ?? null)], ["id" => "Test", "value" =>             // line 1104
($context["testOption"] ?? null)]];
            // line 1106
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["SERVER_MODE"], "method", false, false, false, 1106)) {
                // line 1107
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["SERVER_MODE", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SERVER_MODE", "Production"], "method", false, false, false, 1107), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 1107, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 1109
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["SERVER_MODE", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SERVER_MODE", "Production"], "method", false, false, false, 1109), ($context["helpText"] ?? null)], 1109, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 1111
            yield "                                ";
        }
        // line 1112
        yield "                            </div>
                            <div class=\"tab-pane\" id=\"tab_users\">
                                <h3 class=\"section-heading\">";
        // line 1114
        echo __("Users");
        yield "</h3>

                                ";
        // line 1116
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["SYSTEM_USER"], "method", false, false, false, 1116)) {
            // line 1117
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("System User");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1118
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The system User for this CMS");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1119
            yield "
                                    ";
            // line 1120
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["SYSTEM_USER"], "method", false, false, false, 1120)) {
                // line 1121
                yield "                                        ";
                $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.search")], ["name" => "data-search-term", "value" => "userName"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "userId"], ["name" => "data-text-property", "value" => "userName"], ["name" => "data-filter-options", "value" => "{\"userTypeId\":\"1\"}"]];
                // line 1130
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["SYSTEM_USER", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["systemUser"] ?? null), "userId", [], "any", false, false, false, 1130), [($context["systemUser"] ?? null)], "userId", "userName", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 1130, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 1132
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["SYSTEM_USER", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["SYSTEM_USER"], "method", false, false, false, 1132), ($context["helpText"] ?? null)], 1132, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 1134
            yield "                                ";
        }
        // line 1135
        yield "
                                ";
        // line 1136
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["DEFAULT_USERGROUP"], "method", false, false, false, 1136)) {
            // line 1137
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default User Group");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1138
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("The default User Group for new Users");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1139
            yield "
                                    ";
            // line 1140
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["DEFAULT_USERGROUP"], "method", false, false, false, 1140)) {
                // line 1141
                yield "                                        ";
                $context["attributes"] = [["name" => "data-width", "value" => "100%"], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("group.search")], ["name" => "data-search-term", "value" => "group"], ["name" => "data-id-property", "value" => "groupId"], ["name" => "data-text-property", "value" => "group"]];
                // line 1148
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["DEFAULT_USERGROUP", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["defaultUserGroup"] ?? null), "groupId", [], "any", false, false, false, 1148), [($context["defaultUserGroup"] ?? null)], "groupId", "group", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 1148, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 1150
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["DEFAULT_USERGROUP", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["DEFAULT_USERGROUP"], "method", false, false, false, 1150), ($context["helpText"] ?? null)], 1150, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 1152
            yield "                                ";
        }
        // line 1153
        yield "
                                ";
        // line 1154
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["defaultUsertype"], "method", false, false, false, 1154)) {
            // line 1155
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Default User Type");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1156
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Sets the default user type selected when creating a user. We recommend that this is set to User");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1157
            yield "
                                    ";
            // line 1158
            $context["option1"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("User");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1159
            yield "                                    ";
            $context["option2"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Group Admin");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1160
            yield "                                    ";
            $context["option3"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Super Admin");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1161
            yield "                                    ";
            $context["options"] = [["id" => "User", "value" =>             // line 1162
($context["option1"] ?? null)], ["id" => "Group Admin", "value" =>             // line 1163
($context["option2"] ?? null)], ["id" => "Super Admin", "value" =>             // line 1164
($context["option3"] ?? null)]];
            // line 1166
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["defaultUsertype"], "method", false, false, false, 1166)) {
                // line 1167
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["defaultUsertype", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["defaultUsertype", "User"], "method", false, false, false, 1167), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 1167, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 1169
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["defaultUsertype", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["defaultUsertype", "User"], "method", false, false, false, 1169), ($context["helpText"] ?? null)], 1169, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 1171
            yield "                                ";
        }
        // line 1172
        yield "
                                ";
        // line 1173
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["USER_PASSWORD_POLICY"], "method", false, false, false, 1173)) {
            // line 1174
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Password Policy Regular Expression");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1175
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Regular Expression for password complexity, leave blank for no policy.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1176
            yield "
                                    ";
            // line 1177
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["USER_PASSWORD_POLICY"], "method", false, false, false, 1177)) {
                // line 1178
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["USER_PASSWORD_POLICY", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["USER_PASSWORD_POLICY"], "method", false, false, false, 1178), ($context["helpText"] ?? null)], 1178, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 1180
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["USER_PASSWORD_POLICY", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["USER_PASSWORD_POLICY"], "method", false, false, false, 1180), ($context["helpText"] ?? null)], 1180, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 1182
            yield "                                ";
        }
        // line 1183
        yield "
                                ";
        // line 1184
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["USER_PASSWORD_ERROR"], "method", false, false, false, 1184)) {
            // line 1185
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Description of Password Policy");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1186
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("A text description of this password policy will be shown to users if they enter a password that does not meet the policy requirements set above.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1187
            yield "
                                    ";
            // line 1188
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["USER_PASSWORD_ERROR"], "method", false, false, false, 1188)) {
                // line 1189
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["USER_PASSWORD_ERROR", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["USER_PASSWORD_ERROR"], "method", false, false, false, 1189), ($context["helpText"] ?? null)], 1189, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 1191
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["USER_PASSWORD_ERROR", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["USER_PASSWORD_ERROR"], "method", false, false, false, 1191), ($context["helpText"] ?? null)], 1191, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 1193
            yield "                                ";
        }
        // line 1194
        yield "
                                ";
        // line 1195
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["PASSWORD_REMINDER_ENABLED"], "method", false, false, false, 1195)) {
            // line 1196
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Password Reminder");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1197
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Enable password reminder on CMS login page? Valid sending email address is required");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1198
            yield "
                                    ";
            // line 1199
            $context["option1"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Off");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1200
            yield "                                    ";
            $context["option2"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("On except Admin");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1201
            yield "                                    ";
            $context["option3"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("On");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1202
            yield "                                    ";
            $context["options"] = [["id" => "Off", "value" =>             // line 1203
($context["option1"] ?? null)], ["id" => "On except Admin", "value" =>             // line 1204
($context["option2"] ?? null)], ["id" => "On", "value" =>             // line 1205
($context["option3"] ?? null)]];
            // line 1207
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["PASSWORD_REMINDER_ENABLED"], "method", false, false, false, 1207)) {
                // line 1208
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_dropdown", ["PASSWORD_REMINDER_ENABLED", "single", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PASSWORD_REMINDER_ENABLED", "Off"], "method", false, false, false, 1208), ($context["options"] ?? null), "id", "value", ($context["helpText"] ?? null)], 1208, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 1210
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["PASSWORD_REMINDER_ENABLED", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["PASSWORD_REMINDER_ENABLED", "Off"], "method", false, false, false, 1210), ($context["helpText"] ?? null)], 1210, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 1212
            yield "                                ";
        }
        // line 1213
        yield "
                                ";
        // line 1214
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingVisible", ["TWOFACTOR_ISSUER"], "method", false, false, false, 1214)) {
            // line 1215
            yield "                                    ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Two Factor Issuer");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1216
            yield "                                    ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Name that should appear as Issuer when two factor authorisation is enabled");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1217
            yield "
                                    ";
            // line 1218
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "isSettingEditable", ["TWOFACTOR_ISSUER"], "method", false, false, false, 1218)) {
                // line 1219
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_input", ["TWOFACTOR_ISSUER", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["TWOFACTOR_ISSUER"], "method", false, false, false, 1219), ($context["helpText"] ?? null)], 1219, $context, $this->getSourceContext());
                yield "
                                    ";
            } else {
                // line 1221
                yield "                                        ";
                yield CoreExtension::callMacro($macros["forms"], "macro_disabled", ["TWOFACTOR_ISSUER", ($context["title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getSetting", ["TWOFACTOR_ISSUER"], "method", false, false, false, 1221), ($context["helpText"] ?? null)], 1221, $context, $this->getSourceContext());
                yield "
                                    ";
            }
            // line 1223
            yield "                                ";
        }
        // line 1224
        yield "                            </div>
                        </div>
                        <button class=\"btn btn-save btn-block btn-success\" href=\"#\"><span>";
        // line 1226
        echo __("Save");
        yield "</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
        return; yield '';
    }

    // line 1234
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1235
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
        \$(function () {
            var phpDateFormatTable = templates['php-date-format-table'];
            \$('#date-format-table').popover({
                content: phpDateFormatTable,
                html: true,
                placement: \"right\",
                sanitize: false,
                trigger: \"manual\",
                container: \"form\"
            }).on(\"mouseenter\", function() {
                \$(this).popover(\"show\");
                \$(\".popover\").on(\"mouseleave\", function() {
                    \$(this).popover('hide');
                });
            }).on(\"mouseleave\", function() {
                setTimeout(function() {
                    if (!\$(\".popover:hover\").length) {
                        \$(this).popover(\"hide\");
                    }
                }, 300);
            });
        })
    </script>

    <style>
        .popover{
            max-width: 25%;
        }
    </style>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "settings-page.twig";
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
        return array (  3860 => 1235,  3856 => 1234,  3844 => 1226,  3840 => 1224,  3837 => 1223,  3831 => 1221,  3825 => 1219,  3823 => 1218,  3820 => 1217,  3814 => 1216,  3808 => 1215,  3806 => 1214,  3803 => 1213,  3800 => 1212,  3794 => 1210,  3788 => 1208,  3785 => 1207,  3783 => 1205,  3782 => 1204,  3781 => 1203,  3779 => 1202,  3773 => 1201,  3767 => 1200,  3762 => 1199,  3759 => 1198,  3753 => 1197,  3747 => 1196,  3745 => 1195,  3742 => 1194,  3739 => 1193,  3733 => 1191,  3727 => 1189,  3725 => 1188,  3722 => 1187,  3716 => 1186,  3710 => 1185,  3708 => 1184,  3705 => 1183,  3702 => 1182,  3696 => 1180,  3690 => 1178,  3688 => 1177,  3685 => 1176,  3679 => 1175,  3673 => 1174,  3671 => 1173,  3668 => 1172,  3665 => 1171,  3659 => 1169,  3653 => 1167,  3650 => 1166,  3648 => 1164,  3647 => 1163,  3646 => 1162,  3644 => 1161,  3638 => 1160,  3632 => 1159,  3627 => 1158,  3624 => 1157,  3618 => 1156,  3612 => 1155,  3610 => 1154,  3607 => 1153,  3604 => 1152,  3598 => 1150,  3592 => 1148,  3589 => 1141,  3587 => 1140,  3584 => 1139,  3578 => 1138,  3572 => 1137,  3570 => 1136,  3567 => 1135,  3564 => 1134,  3558 => 1132,  3552 => 1130,  3549 => 1121,  3547 => 1120,  3544 => 1119,  3538 => 1118,  3532 => 1117,  3530 => 1116,  3525 => 1114,  3521 => 1112,  3518 => 1111,  3512 => 1109,  3506 => 1107,  3503 => 1106,  3501 => 1104,  3500 => 1103,  3498 => 1102,  3492 => 1101,  3487 => 1100,  3484 => 1099,  3478 => 1098,  3472 => 1097,  3470 => 1096,  3467 => 1095,  3464 => 1094,  3458 => 1092,  3452 => 1090,  3450 => 1089,  3447 => 1088,  3441 => 1087,  3435 => 1086,  3433 => 1085,  3430 => 1084,  3427 => 1083,  3421 => 1081,  3415 => 1079,  3412 => 1078,  3410 => 1076,  3409 => 1075,  3408 => 1074,  3407 => 1073,  3406 => 1072,  3405 => 1071,  3404 => 1070,  3403 => 1069,  3401 => 1068,  3395 => 1067,  3389 => 1066,  3383 => 1065,  3377 => 1064,  3371 => 1063,  3365 => 1062,  3359 => 1061,  3354 => 1060,  3351 => 1059,  3345 => 1058,  3339 => 1057,  3337 => 1056,  3334 => 1055,  3331 => 1054,  3325 => 1052,  3319 => 1050,  3316 => 1049,  3314 => 1047,  3313 => 1046,  3312 => 1045,  3311 => 1044,  3309 => 1043,  3303 => 1042,  3297 => 1041,  3291 => 1040,  3286 => 1039,  3283 => 1038,  3277 => 1037,  3271 => 1036,  3269 => 1035,  3264 => 1033,  3260 => 1031,  3257 => 1030,  3251 => 1028,  3245 => 1026,  3242 => 1025,  3240 => 1023,  3239 => 1022,  3237 => 1021,  3231 => 1020,  3226 => 1019,  3223 => 1018,  3217 => 1017,  3211 => 1016,  3209 => 1015,  3206 => 1014,  3200 => 1012,  3194 => 1011,  3188 => 1010,  3186 => 1009,  3183 => 1008,  3180 => 1007,  3174 => 1005,  3168 => 1003,  3166 => 1002,  3163 => 1001,  3153 => 994,  3149 => 993,  3143 => 992,  3141 => 991,  3138 => 990,  3135 => 989,  3129 => 987,  3123 => 985,  3121 => 984,  3118 => 983,  3112 => 982,  3106 => 981,  3104 => 980,  3101 => 979,  3098 => 978,  3092 => 976,  3086 => 974,  3084 => 973,  3081 => 972,  3075 => 971,  3069 => 970,  3067 => 969,  3062 => 967,  3058 => 965,  3052 => 963,  3046 => 962,  3040 => 961,  3038 => 960,  3035 => 959,  3029 => 957,  3023 => 956,  3017 => 955,  3015 => 954,  3012 => 953,  3006 => 951,  3000 => 950,  2994 => 949,  2992 => 948,  2989 => 947,  2983 => 945,  2977 => 944,  2971 => 943,  2969 => 942,  2966 => 941,  2960 => 939,  2954 => 938,  2948 => 937,  2946 => 936,  2943 => 935,  2940 => 934,  2934 => 932,  2928 => 930,  2925 => 929,  2923 => 927,  2922 => 926,  2920 => 925,  2914 => 924,  2909 => 923,  2906 => 922,  2900 => 921,  2898 => 920,  2893 => 918,  2889 => 916,  2886 => 915,  2880 => 913,  2874 => 911,  2872 => 910,  2869 => 909,  2863 => 908,  2857 => 907,  2855 => 906,  2852 => 905,  2849 => 904,  2843 => 902,  2837 => 900,  2835 => 899,  2832 => 898,  2826 => 897,  2820 => 896,  2818 => 895,  2815 => 894,  2810 => 892,  2807 => 891,  2801 => 890,  2795 => 889,  2793 => 888,  2790 => 887,  2785 => 885,  2782 => 884,  2776 => 883,  2770 => 882,  2768 => 881,  2765 => 880,  2762 => 879,  2756 => 877,  2750 => 875,  2748 => 874,  2745 => 873,  2739 => 872,  2733 => 871,  2731 => 870,  2728 => 869,  2725 => 868,  2719 => 866,  2713 => 864,  2711 => 863,  2708 => 862,  2702 => 861,  2696 => 860,  2694 => 859,  2691 => 858,  2688 => 857,  2682 => 855,  2676 => 853,  2674 => 852,  2671 => 851,  2665 => 850,  2659 => 849,  2657 => 848,  2654 => 847,  2651 => 846,  2645 => 844,  2639 => 842,  2637 => 841,  2634 => 840,  2628 => 839,  2622 => 838,  2620 => 837,  2617 => 836,  2614 => 835,  2608 => 833,  2602 => 831,  2600 => 830,  2597 => 829,  2591 => 828,  2585 => 827,  2583 => 826,  2580 => 825,  2577 => 824,  2571 => 822,  2565 => 820,  2563 => 819,  2560 => 818,  2554 => 817,  2548 => 816,  2546 => 815,  2543 => 814,  2540 => 813,  2534 => 811,  2528 => 809,  2526 => 808,  2523 => 807,  2517 => 806,  2511 => 805,  2509 => 804,  2506 => 803,  2503 => 802,  2497 => 800,  2491 => 798,  2488 => 797,  2486 => 793,  2484 => 792,  2479 => 791,  2476 => 790,  2470 => 789,  2464 => 788,  2462 => 787,  2459 => 786,  2456 => 785,  2450 => 783,  2444 => 781,  2442 => 780,  2439 => 779,  2433 => 778,  2427 => 777,  2425 => 776,  2422 => 775,  2419 => 774,  2413 => 772,  2407 => 770,  2405 => 769,  2402 => 768,  2396 => 767,  2390 => 766,  2388 => 765,  2385 => 764,  2382 => 763,  2376 => 761,  2370 => 759,  2368 => 758,  2365 => 757,  2359 => 756,  2353 => 755,  2351 => 754,  2346 => 752,  2341 => 749,  2336 => 747,  2333 => 746,  2327 => 745,  2321 => 744,  2319 => 743,  2316 => 742,  2313 => 741,  2307 => 739,  2301 => 737,  2299 => 736,  2296 => 735,  2290 => 734,  2284 => 733,  2282 => 732,  2279 => 731,  2276 => 730,  2270 => 728,  2264 => 726,  2262 => 725,  2259 => 724,  2253 => 723,  2247 => 722,  2245 => 721,  2242 => 720,  2239 => 719,  2233 => 717,  2227 => 715,  2225 => 714,  2222 => 713,  2216 => 712,  2210 => 711,  2208 => 710,  2205 => 709,  2200 => 707,  2197 => 706,  2191 => 705,  2185 => 704,  2183 => 703,  2180 => 702,  2177 => 701,  2171 => 699,  2165 => 697,  2162 => 696,  2160 => 694,  2159 => 693,  2158 => 692,  2156 => 691,  2150 => 690,  2144 => 689,  2139 => 688,  2136 => 687,  2130 => 686,  2124 => 685,  2122 => 684,  2117 => 682,  2113 => 680,  2108 => 678,  2105 => 677,  2099 => 676,  2093 => 675,  2091 => 674,  2088 => 673,  2085 => 672,  2079 => 670,  2073 => 668,  2071 => 667,  2068 => 666,  2062 => 665,  2056 => 664,  2054 => 663,  2051 => 662,  2048 => 661,  2042 => 659,  2036 => 657,  2033 => 656,  2031 => 654,  2030 => 653,  2029 => 652,  2027 => 651,  2021 => 650,  2015 => 649,  2010 => 648,  2007 => 647,  2001 => 646,  1995 => 645,  1993 => 644,  1990 => 643,  1985 => 641,  1982 => 640,  1976 => 639,  1970 => 638,  1968 => 637,  1965 => 636,  1960 => 634,  1957 => 633,  1951 => 632,  1945 => 631,  1943 => 630,  1940 => 629,  1937 => 628,  1931 => 626,  1925 => 624,  1923 => 623,  1920 => 622,  1914 => 621,  1908 => 620,  1906 => 619,  1903 => 618,  1898 => 616,  1895 => 615,  1889 => 614,  1887 => 613,  1884 => 612,  1879 => 610,  1876 => 609,  1870 => 608,  1868 => 607,  1865 => 606,  1862 => 605,  1856 => 603,  1850 => 601,  1848 => 600,  1845 => 599,  1839 => 598,  1833 => 597,  1831 => 596,  1828 => 595,  1823 => 593,  1820 => 592,  1814 => 591,  1808 => 590,  1806 => 589,  1803 => 588,  1800 => 587,  1794 => 585,  1788 => 583,  1786 => 582,  1783 => 581,  1777 => 580,  1771 => 579,  1769 => 578,  1766 => 577,  1763 => 576,  1757 => 574,  1751 => 572,  1749 => 571,  1746 => 570,  1740 => 569,  1734 => 568,  1732 => 567,  1729 => 566,  1724 => 564,  1721 => 563,  1715 => 562,  1709 => 561,  1707 => 560,  1704 => 559,  1701 => 558,  1695 => 556,  1689 => 554,  1687 => 553,  1684 => 552,  1678 => 551,  1672 => 550,  1670 => 549,  1667 => 548,  1664 => 547,  1658 => 545,  1652 => 543,  1650 => 542,  1647 => 541,  1641 => 540,  1635 => 539,  1633 => 538,  1628 => 536,  1624 => 534,  1621 => 533,  1615 => 531,  1609 => 529,  1607 => 527,  1605 => 519,  1603 => 518,  1600 => 517,  1594 => 516,  1588 => 515,  1586 => 514,  1583 => 513,  1577 => 511,  1571 => 510,  1565 => 509,  1563 => 508,  1560 => 507,  1557 => 506,  1551 => 504,  1545 => 502,  1543 => 501,  1540 => 500,  1534 => 499,  1528 => 498,  1526 => 497,  1523 => 496,  1520 => 495,  1514 => 493,  1508 => 491,  1506 => 490,  1503 => 489,  1497 => 488,  1491 => 487,  1489 => 486,  1486 => 485,  1480 => 483,  1474 => 482,  1472 => 481,  1469 => 480,  1463 => 478,  1457 => 477,  1455 => 476,  1452 => 475,  1446 => 473,  1440 => 472,  1438 => 471,  1435 => 470,  1432 => 469,  1426 => 467,  1420 => 465,  1417 => 464,  1415 => 462,  1414 => 461,  1413 => 460,  1411 => 459,  1405 => 458,  1399 => 457,  1394 => 456,  1391 => 455,  1385 => 454,  1379 => 453,  1377 => 452,  1374 => 451,  1371 => 450,  1365 => 448,  1359 => 446,  1356 => 445,  1354 => 443,  1353 => 442,  1352 => 441,  1350 => 440,  1344 => 439,  1338 => 438,  1333 => 437,  1330 => 436,  1324 => 435,  1318 => 434,  1316 => 433,  1313 => 432,  1310 => 431,  1304 => 429,  1298 => 427,  1295 => 426,  1293 => 424,  1292 => 423,  1291 => 422,  1289 => 421,  1283 => 420,  1277 => 419,  1272 => 418,  1269 => 417,  1263 => 416,  1257 => 415,  1255 => 414,  1252 => 413,  1246 => 411,  1240 => 410,  1234 => 409,  1232 => 408,  1229 => 407,  1223 => 405,  1217 => 404,  1211 => 403,  1209 => 402,  1206 => 401,  1203 => 400,  1197 => 398,  1191 => 396,  1188 => 395,  1186 => 393,  1185 => 392,  1184 => 391,  1182 => 390,  1176 => 389,  1170 => 388,  1165 => 387,  1162 => 386,  1156 => 385,  1150 => 384,  1148 => 383,  1145 => 382,  1142 => 381,  1136 => 379,  1130 => 377,  1128 => 376,  1125 => 375,  1119 => 374,  1113 => 373,  1111 => 372,  1108 => 371,  1105 => 370,  1099 => 368,  1093 => 366,  1091 => 365,  1088 => 364,  1082 => 363,  1076 => 362,  1074 => 361,  1071 => 360,  1068 => 359,  1062 => 357,  1056 => 355,  1054 => 354,  1051 => 353,  1045 => 352,  1039 => 351,  1037 => 350,  1034 => 349,  1031 => 348,  1025 => 346,  1019 => 344,  1017 => 343,  1014 => 342,  1008 => 341,  1002 => 340,  1000 => 339,  997 => 338,  994 => 337,  988 => 335,  982 => 333,  980 => 332,  977 => 331,  971 => 330,  965 => 329,  963 => 328,  960 => 327,  957 => 326,  951 => 324,  945 => 322,  943 => 321,  940 => 320,  934 => 319,  928 => 318,  926 => 317,  923 => 316,  920 => 315,  914 => 313,  908 => 311,  906 => 310,  903 => 309,  897 => 308,  891 => 307,  889 => 306,  886 => 305,  883 => 304,  877 => 302,  871 => 300,  869 => 299,  866 => 298,  860 => 297,  854 => 296,  852 => 295,  849 => 294,  846 => 293,  840 => 291,  834 => 289,  831 => 280,  829 => 279,  826 => 278,  820 => 277,  814 => 276,  812 => 275,  807 => 273,  803 => 271,  800 => 270,  794 => 268,  788 => 266,  786 => 265,  783 => 264,  777 => 263,  771 => 262,  769 => 261,  766 => 260,  763 => 259,  757 => 257,  751 => 255,  749 => 254,  746 => 253,  740 => 252,  734 => 251,  732 => 250,  729 => 249,  726 => 248,  720 => 246,  714 => 244,  712 => 243,  709 => 242,  703 => 241,  697 => 240,  695 => 239,  692 => 238,  689 => 237,  683 => 235,  677 => 233,  675 => 232,  672 => 231,  666 => 230,  660 => 229,  658 => 228,  655 => 227,  652 => 226,  646 => 224,  640 => 222,  638 => 221,  635 => 220,  629 => 219,  623 => 218,  621 => 217,  618 => 216,  615 => 215,  609 => 213,  603 => 211,  601 => 210,  598 => 209,  592 => 208,  586 => 207,  584 => 206,  581 => 205,  576 => 203,  573 => 202,  567 => 201,  565 => 200,  562 => 199,  559 => 198,  553 => 196,  547 => 194,  545 => 193,  542 => 192,  536 => 191,  530 => 190,  528 => 189,  525 => 188,  522 => 187,  516 => 185,  510 => 183,  507 => 175,  505 => 174,  502 => 173,  496 => 172,  490 => 171,  488 => 170,  485 => 169,  482 => 168,  476 => 166,  470 => 164,  467 => 156,  465 => 155,  462 => 154,  456 => 153,  450 => 152,  448 => 151,  445 => 150,  440 => 148,  437 => 147,  431 => 146,  425 => 145,  423 => 144,  420 => 143,  415 => 141,  412 => 140,  406 => 139,  400 => 138,  398 => 137,  395 => 136,  390 => 134,  387 => 133,  381 => 132,  375 => 131,  373 => 130,  370 => 129,  365 => 127,  362 => 126,  356 => 125,  350 => 124,  348 => 123,  343 => 121,  339 => 119,  336 => 118,  330 => 116,  324 => 114,  321 => 113,  319 => 111,  318 => 110,  316 => 109,  310 => 108,  305 => 107,  302 => 106,  296 => 105,  290 => 104,  288 => 103,  285 => 102,  282 => 101,  276 => 99,  273 => 98,  267 => 96,  261 => 94,  259 => 93,  256 => 92,  254 => 91,  251 => 90,  245 => 89,  239 => 88,  237 => 87,  234 => 86,  227 => 82,  222 => 79,  216 => 77,  210 => 75,  208 => 74,  205 => 73,  199 => 72,  193 => 71,  191 => 70,  188 => 69,  185 => 68,  179 => 66,  173 => 64,  171 => 63,  168 => 62,  162 => 61,  156 => 60,  154 => 59,  149 => 57,  143 => 54,  138 => 52,  134 => 51,  130 => 50,  126 => 49,  122 => 48,  118 => 47,  114 => 46,  110 => 45,  106 => 44,  102 => 43,  94 => 38,  91 => 37,  87 => 36,  81 => 33,  71 => 31,  69 => 30,  66 => 29,  62 => 28,  53 => 26,  48 => 23,  46 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "settings-page.twig", "/var/www/xibo/views/settings-page.twig");
    }
}
