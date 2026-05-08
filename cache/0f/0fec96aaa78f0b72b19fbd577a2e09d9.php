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

/* display-page.twig */
class __TwigTemplate_24d80e75d4d7ace84bb1d9031224c40c extends Template
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
            'headContent' => [$this, 'block_headContent'],
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
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "display-page.twig", 24)->unwrap();
        // line 23
        $this->parent = $this->loadTemplate("authed.twig", "display-page.twig", 23);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Displays"), "html", null, true);
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displays.add"], "method", false, false, false, 30)) {
            // line 31
            yield "            <button class=\"btn btn-success XiboFormButton\" title=\"";
            echo __("Add a Display via user_code displayed on the Player screen");
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.addViaCode.form"), "html", null, true);
            yield "\"> <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
            echo __("Add Display (Code)");
            yield "</button>
        ";
        }
        // line 33
        yield "        <button class=\"btn btn-primary\" id=\"refreshGrid\" title=\"";
        echo __("Refresh the Table");
        yield "\" href=\"#\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></button>
    </div>
";
        return; yield '';
    }

    // line 37
    public function block_headContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        yield "    ";
        // line 39
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 39), "html", null, true);
        yield "dist/pages/display-page.bundle.min.css?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\">
";
        return; yield '';
    }

    // line 42
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        yield "    <div class=\"widget\">
        <div class=\"widget-title\">";
        // line 44
        echo __("Displays");
        yield "</div>
        <div class=\"widget-body\">
            <div class=\"XiboGrid\" id=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
        yield "\" data-grid-name=\"displayView\">
                <div class=\"XiboFilter card mb-3 bg-light\">
                    <div class=\"FilterDiv card-body\" id=\"Filter\">
                        <ul class=\"nav nav-tabs\" role=\"tablist\">
                            <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#filter-general\" role=\"tab\" data-toggle=\"tab\">";
        // line 50
        echo __("General");
        yield "</a></li>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#filter-advanced\" role=\"tab\" data-toggle=\"tab\">";
        // line 51
        echo __("Advanced");
        yield "</a></li>
                        </ul>
                        <form class=\"form-inline\">
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"filter-general\">
                                    ";
        // line 56
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("ID");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 57
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_number", ["displayId", ($context["title"] ?? null)], 57, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 59
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Name");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_inputNameGrid", ["display", ($context["title"] ?? null)], 60, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 62
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Status");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 63
        yield "                                    ";
        $context["check"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Up to date");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        yield "                                    ";
        $context["cross"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Downloading");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 65
        yield "                                    ";
        $context["cloud"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Out of date");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 66
        yield "                                    ";
        $context["options"] = [["optionid" => "", "option" => ""], ["optionid" => "1", "option" =>         // line 68
($context["check"] ?? null)], ["optionid" => "2", "option" =>         // line 69
($context["cross"] ?? null)], ["optionid" => "3", "option" =>         // line 70
($context["cloud"] ?? null)]];
        // line 72
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["mediaInventoryStatus", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option"], 72, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 74
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Logged In?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 75
        yield "                                    ";
        $context["yesOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Yes");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 76
        yield "                                    ";
        $context["noOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("No");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 77
        yield "                                    ";
        $context["options"] = [["optionid" => "", "option" => ""], ["optionid" => "1", "option" =>         // line 79
($context["yesOption"] ?? null)], ["optionid" => "0", "option" =>         // line 80
($context["noOption"] ?? null)]];
        // line 82
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["loggedIn", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option"], 82, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 84
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Authorised?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 85
        yield "                                    ";
        $context["yesOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Yes");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 86
        yield "                                    ";
        $context["noOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("No");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 87
        yield "                                    ";
        $context["options"] = [["optionid" => "", "option" => ""], ["optionid" => "1", "option" =>         // line 89
($context["yesOption"] ?? null)], ["optionid" => "0", "option" =>         // line 90
($context["noOption"] ?? null)]];
        // line 92
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["authorised", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option"], 92, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 94
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("XMR Registered?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 95
        yield "                                    ";
        $context["yesOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Yes");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 96
        yield "                                    ";
        $context["noOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("No");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 97
        yield "                                    ";
        $context["options"] = [["optionid" => "", "option" => ""], ["optionid" => 1, "option" =>         // line 99
($context["yesOption"] ?? null)], ["optionid" => 0, "option" =>         // line 100
($context["noOption"] ?? null)]];
        // line 102
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["xmrRegistered", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option"], 102, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 104
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 104)) {
            // line 105
            yield "                                        ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Tags");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 106
            yield "                                        ";
            $context["exactTagTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Exact match?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 107
            yield "                                        ";
            $context["logicalOperatorTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("When filtering by multiple Tags, which logical operator should be used?");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 108
            yield "                                        ";
            $context["helpText"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("A comma separated list of tags to filter by. Enter a tag|tag value to filter tags with values. Enter --no-tag to filter all items without tags. Enter - before a tag or tag value to exclude from results.");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 109
            yield "                                        ";
            yield CoreExtension::callMacro($macros["inline"], "macro_inputWithTags", ["tags", ($context["title"] ?? null), null, ($context["helpText"] ?? null), null, null, null, "exactTags", ($context["exactTagTitle"] ?? null), ($context["logicalOperatorTitle"] ?? null)], 109, $context, $this->getSourceContext());
            yield "
                                    ";
        }
        // line 111
        yield "
                                    ";
        // line 112
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displaygroup.view"], "method", false, false, false, 112)) {
            // line 113
            yield "                                        ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Display Group");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 114
            yield "                                        ";
            $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayGroup.search")], ["name" => "data-filter-options", "value" => "{\"isDisplaySpecific\":0}"], ["name" => "data-search-term", "value" => "displayGroup"], ["name" => "data-id-property", "value" => "displayGroupId"], ["name" => "data-text-property", "value" => "displayGroup"], ["name" => "data-initial-key", "value" => "displayGroupId"]];
            // line 126
            yield "                                        ";
            yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["displayGroupId", "single", ($context["title"] ?? null), "", null, "displayGroupId", "displayGroup", ($context["helpText"] ?? null), "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 126, $context, $this->getSourceContext());
            yield "
                                    ";
        }
        // line 128
        yield "
                                    ";
        // line 129
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displayprofile.view"], "method", false, false, false, 129)) {
            // line 130
            yield "                                        ";
            $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                echo __("Display Profile");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 131
            yield "                                        ";
            yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["displayProfileId", "single", ($context["title"] ?? null), "", Twig\Extension\CoreExtension::merge([["displayProfileId" => null, "name" => ""]], ($context["displayProfiles"] ?? null)), "displayProfileId", "name"], 131, $context, $this->getSourceContext());
            yield "
                                    ";
        }
        // line 133
        yield "
                                    ";
        // line 134
        yield CoreExtension::callMacro($macros["inline"], "macro_hidden", ["folderId"], 134, $context, $this->getSourceContext());
        yield "
                                </div>

                                <div class=\"tab-pane\" id=\"filter-advanced\">
                                    ";
        // line 138
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Last Accessed");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 139
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_date", ["lastAccessed", ($context["title"] ?? null)], 139, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 141
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Player Type");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 142
        yield "                                    ";
        $context["android"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Android");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 143
        yield "                                    ";
        $context["chromeos"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("ChromeOS");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 144
        yield "                                    ";
        $context["windows"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Windows");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 145
        yield "                                    ";
        $context["webos"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("webOS");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 146
        yield "                                    ";
        $context["sssp"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Tizen");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 147
        yield "                                    ";
        $context["linux"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Linux");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 148
        yield "                                    ";
        $context["options"] = [["optionid" => "", "option" => ""], ["optionid" => "android", "option" =>         // line 150
($context["android"] ?? null)], ["optionid" => "chromeos", "option" =>         // line 151
($context["chromeos"] ?? null)], ["optionid" => "windows", "option" =>         // line 152
($context["windows"] ?? null)], ["optionid" => "lg", "option" =>         // line 153
($context["webos"] ?? null)], ["optionid" => "sssp", "option" =>         // line 154
($context["sssp"] ?? null)], ["optionid" => "linux", "option" =>         // line 155
($context["linux"] ?? null)]];
        // line 157
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["clientType", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option"], 157, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 159
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Player Code");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 160
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["clientCode", ($context["title"] ?? null)], 160, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 162
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Custom ID");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 163
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["customId", ($context["title"] ?? null)], 163, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 165
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Mac Address");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 166
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["macAddress", ($context["title"] ?? null)], 166, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 168
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("IP Address");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 169
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_input", ["clientAddress", ($context["title"] ?? null)], 169, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 171
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Orientation");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 172
        yield "                                    ";
        $context["landscape"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Landscape");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 173
        yield "                                    ";
        $context["portrait"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Portrait");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 174
        yield "                                    ";
        $context["options"] = [["optionid" => "", "option" => ""], ["optionid" => "landscape", "option" =>         // line 176
($context["landscape"] ?? null)], ["optionid" => "portrait", "option" =>         // line 177
($context["portrait"] ?? null)]];
        // line 179
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["orientation", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option"], 179, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 181
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Commercial Licence");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 182
        yield "                                    ";
        $context["licensed"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Licensed fully");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 183
        yield "                                    ";
        $context["trial"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Trial");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 184
        yield "                                    ";
        $context["notLinceced"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Not licenced");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 185
        yield "                                    ";
        $context["notApplicable"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Not applicable");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 186
        yield "                                    ";
        $context["options"] = [["optionid" => "", "option" => ""], ["optionid" => "1", "option" =>         // line 188
($context["licensed"] ?? null)], ["optionid" => "2", "option" =>         // line 189
($context["trial"] ?? null)], ["optionid" => "0", "option" =>         // line 190
($context["notLinceced"] ?? null)], ["optionid" => "3", "option" =>         // line 191
($context["notApplicable"] ?? null)]];
        // line 193
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["commercialLicence", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option"], 193, $context, $this->getSourceContext());
        yield "

                                    ";
        // line 195
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Player supported?");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 196
        yield "                                    ";
        $context["yesOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Yes");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 197
        yield "                                    ";
        $context["noOption"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("No");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 198
        yield "                                    ";
        $context["options"] = [["optionid" => "", "option" => ""], ["optionid" => 1, "option" =>         // line 200
($context["yesOption"] ?? null)], ["optionid" => 0, "option" =>         // line 201
($context["noOption"] ?? null)]];
        // line 203
        yield "                                    ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["isPlayerSupported", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option"], 203, $context, $this->getSourceContext());
        yield "
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"grid-with-folders-container\">
                    <div class=\"grid-folder-tree-container p-3\" id=\"grid-folder-filter\">
                        <input id=\"jstree-search\" class=\"form-control\" type=\"text\" placeholder=\"";
        // line 211
        echo __("Search");
        yield "\">
                        <div class=\"form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"folder-tree-clear-selection-button\">
                            <label class=\"form-check-label\" for=\"folder-tree-clear-selection-button\" title=\"";
        // line 214
        echo __("Search in all folders");
        yield "\">";
        echo __("All Folders");
        yield "</label>
                        </div>
                        <div class=\"folder-search-no-results d-none\">
                            <p>";
        // line 217
        echo __("No Folders matching the search term");
        yield "</p>
                        </div>
                        <div id=\"container-folder-tree\"></div>
                    </div>
                    <div class=\"folder-controller d-none\">
                        <button type=\"button\" id=\"folder-tree-select-folder-button\" class=\"btn btn-outline-secondary\" title=\"";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Open / Close Folder Search options"), "html", null, true);
        yield "\"><i class=\"fas fa-folder fa-1x\"></i></button>
                        <div id=\"breadcrumbs\" class=\"mt-2 pl-2\"></div>
                    </div>
                    <div class=\"map-controller d-none pl-1\">
                        <button type=\"button\" id=\"map_button\" class=\"btn btn-primary\" title=\"";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Map"), "html", null, true);
        yield "\"><i class=\"fa fa-map\"></i></button>
                    </div>
                    <div class=\"list-controller d-none pl-1\">
                        <button type=\"button\" id=\"list_button\" class=\"btn btn-primary\" title=\"";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("List"), "html", null, true);
        yield "\"><i class=\"fa fa-list\"></i></button>
                    </div>

                    <div id=\"datatable-container\">
                        <div class=\"XiboData card py-3\">
                            <table id=\"displays\" class=\"table table-striped\" data-content-type=\"display\" data-content-id-name=\"displayId\" data-state-preference-name=\"displayGrid\" style=\"width: 100%;\">
                                <thead>
                                    <tr>
                                        <th>";
        // line 237
        echo __("ID");
        yield "</th>
                                        <th>";
        // line 238
        echo __("Display");
        yield "</th>
                                        <th>";
        // line 239
        echo __("Display Type");
        yield "</th>
                                        <th>";
        // line 240
        echo __("Address");
        yield "</th>
                                        <th>";
        // line 241
        echo __("Status");
        yield "</th>
                                        <th>";
        // line 242
        echo __("Authorised?");
        yield "</th>
                                        <th>";
        // line 243
        echo __("Current Layout");
        yield "</th>
                                        <th>";
        // line 244
        echo __("Storage Available");
        yield "</th>
                                        <th>";
        // line 245
        echo __("Storage Total");
        yield "</th>
                                        <th>";
        // line 246
        echo __("Storage Free %");
        yield "</th>
                                        <th>";
        // line 247
        echo __("Description");
        yield "</th>
                                        <th>";
        // line 248
        echo __("Orientation");
        yield "</th>
                                        <th>";
        // line 249
        echo __("Resolution");
        yield "</th>
                                        ";
        // line 250
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 250)) {
            yield "<th>";
            echo __("Tags");
            yield "</th>";
        }
        // line 251
        yield "                                        <th>";
        echo __("Default Layout");
        yield "</th>
                                        <th>";
        // line 252
        echo __("Interleave Default");
        yield "</th>
                                        <th>";
        // line 253
        echo __("Email Alert");
        yield "</th>
                                        <th>";
        // line 254
        echo __("Logged In");
        yield "</th>
                                        <th>";
        // line 255
        echo __("Last Accessed");
        yield "</th>
                                        <th>";
        // line 256
        echo __("Display Profile");
        yield "</th>
                                        <th>";
        // line 257
        echo __("Version");
        yield "</th>
                                        <th>";
        // line 258
        echo __("Supported?");
        yield "</th>
                                        <th>";
        // line 259
        echo __("Device Name");
        yield "</th>
                                        <th>";
        // line 260
        echo __("IP Address");
        yield "</th>
                                        <th>";
        // line 261
        echo __("Mac Address");
        yield "</th>
                                        <th>";
        // line 262
        echo __("Timezone");
        yield "</th>
                                        <th>";
        // line 263
        echo __("Languages");
        yield "</th>
                                        <th>";
        // line 264
        echo __("Latitude");
        yield "</th>
                                        <th>";
        // line 265
        echo __("Longitude");
        yield "</th>
                                        <th>";
        // line 266
        echo __("Screen shot?");
        yield "</th>
                                        <th>";
        // line 267
        echo __("Thumbnail");
        yield "</th>
                                        <th>";
        // line 268
        echo __("CMS Transfer?");
        yield "</th>
                                        <th>";
        // line 269
        echo __("Bandwidth Limit");
        yield "</th>
                                        <th>";
        // line 270
        echo __("Last Command");
        yield "</th>
                                        <th>";
        // line 271
        echo __("XMR Registered");
        yield "</th>
                                        <th>";
        // line 272
        echo __("Commercial Licence");
        yield "</th>
                                        <th>";
        // line 273
        echo __("Remote");
        yield "</th>
                                        <th>";
        // line 274
        echo __("Sharing");
        yield "</th>
                                        <th>";
        // line 275
        echo __("Screen Size");
        yield "</th>
                                        <th>";
        // line 276
        echo __("Is Mobile?");
        yield "</th>
                                        <th>";
        // line 277
        echo __("Outdoor?");
        yield "</th>
                                        <th>";
        // line 278
        echo __("Reference 1");
        yield "</th>
                                        <th>";
        // line 279
        echo __("Reference 2");
        yield "</th>
                                        <th>";
        // line 280
        echo __("Reference 3");
        yield "</th>
                                        <th>";
        // line 281
        echo __("Reference 4");
        yield "</th>
                                        <th>";
        // line 282
        echo __("Reference 5");
        yield "</th>
                                        <th>";
        // line 283
        echo __("Custom ID");
        yield "</th>
                                        <th>";
        // line 284
        echo __("Cost Per Play");
        yield "</th>
                                        <th>";
        // line 285
        echo __("Impressions Per Play");
        yield "</th>
                                        <th>";
        // line 286
        echo __("Created Date");
        yield "</th>
                                        <th>";
        // line 287
        echo __("Modified Date");
        yield "</th>
                                        <th>";
        // line 288
        echo __("Faults?");
        yield "</th>
                                        <th>";
        // line 289
        echo __("OS Version");
        yield "</th>
                                        <th>";
        // line 290
        echo __("OS SDK");
        yield "</th>
                                        <th>";
        // line 291
        echo __("Manufacturer");
        yield "</th>
                                        <th>";
        // line 292
        echo __("Brand");
        yield "</th>
                                        <th>";
        // line 293
        echo __("Model");
        yield "</th>
                                        <th class=\"rowMenu\"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>

                            <!-- Map -->
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"map-legend\" style=\"display:none; position: absolute; z-index: 500; right: 20px; top: 10px;\">
                                        <div class=\"display-map-legend\" style=\"font-size: 12px;\">
                                            <div>Logged in</div>
                                            <div><img style=\"width: 15%\" src='";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 308), "html", null, true);
        yield "dist/assets/map-marker-green-check.png'/> - Up to date</div>
                                            <div><img style=\"width: 15%\" src='";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 309), "html", null, true);
        yield "dist/assets/map-marker-yellow-check.png'/> - Out of date</div>
                                            <div><img style=\"width: 15%\" src='";
        // line 310
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 310), "html", null, true);
        yield "dist/assets/map-marker-red-check.png'/> - Downloading/Unknown</div>
                                            </br>
                                            <div>Logged out</div>
                                            <div><img style=\"width: 15%\" src='";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 313), "html", null, true);
        yield "dist/assets/map-marker-green-cross.png'/> - Up to date</div>
                                            <div><img style=\"width: 15%\" src='";
        // line 314
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 314), "html", null, true);
        yield "dist/assets/map-marker-yellow-cross.png'/> - Out of date</div>
                                            <div><img style=\"width: 15%\" src='";
        // line 315
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 315), "html", null, true);
        yield "dist/assets/map-marker-red-cross.png'/> - Downloading/Unknown</div>
                                        </div>
                                    </div>
                                    <div id=\"display-map\" data-displays-url=\"";
        // line 318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.map"), "html", null, true);
        yield "\">
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

    // line 330
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 331
        yield "    ";
        // line 332
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\" defer>
        ";
        // line 334
        yield "        var publicPath = \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 334), "html", null, true);
        yield "\";
        var displaySearchURL = \"";
        // line 335
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.search"), "html", null, true);
        yield "\";
        var layoutSearchURL = \"";
        // line 336
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.search"), "html", null, true);
        yield "\";
        var mapConfig = ";
        // line 337
        yield json_encode(($context["mapConfig"] ?? null));
        yield ";
        var playerVersionSupport = \"";
        // line 338
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["playerVersion"] ?? null), "html", null, true);
        yield "\";
        var folderViewEnabled = \"";
        // line 339
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["folder.view"], "method", false, false, false, 339), "html", null, true);
        yield "\";
        var taggingEnabled = \"";
        // line 340
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 340), "html", null, true);
        yield "\";
        var showThumbnailColumn = \"";
        // line 341
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "getOptionValue", ["showThumbnailColumn", 1], "method", false, false, false, 341), "html", null, true);
        yield "\";
        var SHOW_DISPLAY_AS_VNCLINK = \"";
        // line 342
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "SHOW_DISPLAY_AS_VNCLINK", [], "any", false, false, false, 342), "html", null, true);
        yield "\";
        var SHOW_DISPLAY_AS_VNC_TGT = \"";
        // line 343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "SHOW_DISPLAY_AS_VNC_TGT", [], "any", false, false, false, 343), "html", null, true);
        yield "\";

        ";
        // line 346
        yield "        var displayPageTrans = {
            back: \"";
        // line 347
        echo __("Back");
        yield "\",
            yes: \"";
        // line 348
        echo __("Yes");
        yield "\",
            no: \"";
        // line 349
        echo __("No");
        yield "\",
            daysOfTheWeek: {
                monday: \"";
        // line 351
        echo __("Monday");
        yield "\",
                tuesday: \"";
        // line 352
        echo __("Tuesday");
        yield "\",
                wednesday: \"";
        // line 353
        echo __("Wednesday");
        yield "\",
                thursday: \"";
        // line 354
        echo __("Thursday");
        yield "\",
                friday: \"";
        // line 355
        echo __("Friday");
        yield "\",
                saturday: \"";
        // line 356
        echo __("Saturday");
        yield "\",
                sunday: \"";
        // line 357
        echo __("Sunday");
        yield "\",
            },
            playerStatusWindow: \"";
        // line 359
        echo __("Player Status Window");
        yield "\",
            VNCtoThisDisplay: \"";
        // line 360
        echo __("VNC to this Display");
        yield "\",
            TeamViewertoThisDisplay: \"";
        // line 361
        echo __("TeamViewer to this Display");
        yield "\",
            WebkeytoThisDisplay: \"";
        // line 362
        echo __("Webkey to this Display");
        yield "\",
        };
    </script>

    ";
        // line 367
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 367), "html", null, true);
        yield "dist/leaflet.bundle.min.js?v=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["version"] ?? null), "html", null, true);
        yield "&rev=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revision"] ?? null), "html", null, true);
        yield "\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 368
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 368), "html", null, true);
        yield "dist/pages/display-page.bundle.min.js?v=";
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
        return "display-page.twig";
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
        return array (  1038 => 368,  1027 => 367,  1020 => 362,  1016 => 361,  1012 => 360,  1008 => 359,  1003 => 357,  999 => 356,  995 => 355,  991 => 354,  987 => 353,  983 => 352,  979 => 351,  974 => 349,  970 => 348,  966 => 347,  963 => 346,  958 => 343,  954 => 342,  950 => 341,  946 => 340,  942 => 339,  938 => 338,  934 => 337,  930 => 336,  926 => 335,  921 => 334,  916 => 332,  914 => 331,  910 => 330,  894 => 318,  888 => 315,  884 => 314,  880 => 313,  874 => 310,  870 => 309,  866 => 308,  848 => 293,  844 => 292,  840 => 291,  836 => 290,  832 => 289,  828 => 288,  824 => 287,  820 => 286,  816 => 285,  812 => 284,  808 => 283,  804 => 282,  800 => 281,  796 => 280,  792 => 279,  788 => 278,  784 => 277,  780 => 276,  776 => 275,  772 => 274,  768 => 273,  764 => 272,  760 => 271,  756 => 270,  752 => 269,  748 => 268,  744 => 267,  740 => 266,  736 => 265,  732 => 264,  728 => 263,  724 => 262,  720 => 261,  716 => 260,  712 => 259,  708 => 258,  704 => 257,  700 => 256,  696 => 255,  692 => 254,  688 => 253,  684 => 252,  679 => 251,  673 => 250,  669 => 249,  665 => 248,  661 => 247,  657 => 246,  653 => 245,  649 => 244,  645 => 243,  641 => 242,  637 => 241,  633 => 240,  629 => 239,  625 => 238,  621 => 237,  610 => 229,  604 => 226,  597 => 222,  589 => 217,  581 => 214,  575 => 211,  563 => 203,  561 => 201,  560 => 200,  558 => 198,  552 => 197,  546 => 196,  541 => 195,  535 => 193,  533 => 191,  532 => 190,  531 => 189,  530 => 188,  528 => 186,  522 => 185,  516 => 184,  510 => 183,  504 => 182,  499 => 181,  493 => 179,  491 => 177,  490 => 176,  488 => 174,  482 => 173,  476 => 172,  471 => 171,  465 => 169,  460 => 168,  454 => 166,  449 => 165,  443 => 163,  438 => 162,  432 => 160,  427 => 159,  421 => 157,  419 => 155,  418 => 154,  417 => 153,  416 => 152,  415 => 151,  414 => 150,  412 => 148,  406 => 147,  400 => 146,  394 => 145,  388 => 144,  382 => 143,  376 => 142,  371 => 141,  365 => 139,  360 => 138,  353 => 134,  350 => 133,  344 => 131,  338 => 130,  336 => 129,  333 => 128,  327 => 126,  324 => 114,  318 => 113,  316 => 112,  313 => 111,  307 => 109,  301 => 108,  295 => 107,  289 => 106,  283 => 105,  281 => 104,  275 => 102,  273 => 100,  272 => 99,  270 => 97,  264 => 96,  258 => 95,  253 => 94,  247 => 92,  245 => 90,  244 => 89,  242 => 87,  236 => 86,  230 => 85,  225 => 84,  219 => 82,  217 => 80,  216 => 79,  214 => 77,  208 => 76,  202 => 75,  197 => 74,  191 => 72,  189 => 70,  188 => 69,  187 => 68,  185 => 66,  179 => 65,  173 => 64,  167 => 63,  162 => 62,  156 => 60,  151 => 59,  145 => 57,  140 => 56,  132 => 51,  128 => 50,  121 => 46,  116 => 44,  113 => 43,  109 => 42,  97 => 39,  95 => 38,  91 => 37,  82 => 33,  72 => 31,  70 => 30,  67 => 29,  63 => 28,  54 => 26,  49 => 23,  47 => 24,  40 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "display-page.twig", "/var/www/xibo/views/display-page.twig");
    }
}
