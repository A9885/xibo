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

/* authed-sidebar.twig */
class __TwigTemplate_657b6d1e399f7519dfdadb97aa626b6b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<div id=\"sidebar-wrapper\">
    <ul class=\"sidebar\">
        <li class=\"sidebar-main\"><a href=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("home"), "html", null, true);
        yield "\">";
        echo __("Dashboard");
        yield "</a></li>

        ";
        // line 5
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["schedule.view"], "method", false, false, false, 5)) {
            // line 6
            yield "            <li class=\"sidebar-list\"><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("schedule.view"), "html", null, true);
            yield "\">";
            echo __("Schedule");
            yield "</a></li>
        ";
        }
        // line 8
        yield "
        ";
        // line 9
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["daypart.view"], "method", false, false, false, 9)) {
            // line 10
            yield "            <li class=\"sidebar-list\"><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("daypart.view"), "html", null, true);
            yield "\">";
            echo __("Dayparting");
            yield "</a></li>
        ";
        }
        // line 12
        yield "
        ";
        // line 13
        $context["countViewable"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [["campaign.view", "layout.view", "template.view", "resolution.view"]], "method", false, false, false, 13);
        // line 14
        yield "        ";
        if ((($context["countViewable"] ?? null) > 0)) {
            // line 15
            yield "            <li class=\"sidebar-title\"><a>";
            echo __("Design");
            yield "</a></li>
            ";
            // line 16
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["campaign.view"], "method", false, false, false, 16)) {
                // line 17
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("campaign.view"), "html", null, true);
                yield "\">";
                echo __("Campaigns");
                yield "</a></li>
            ";
            }
            // line 19
            yield "
            ";
            // line 20
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["layout.view"], "method", false, false, false, 20)) {
                // line 21
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.view"), "html", null, true);
                yield "\">";
                echo __("Layouts");
                yield "</a></li>
            ";
            }
            // line 23
            yield "
            ";
            // line 24
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["template.view"], "method", false, false, false, 24)) {
                // line 25
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("template.view"), "html", null, true);
                yield "\">";
                echo __("Templates");
                yield "</a></li>
            ";
            }
            // line 27
            yield "
            ";
            // line 28
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["resolution.view"], "method", false, false, false, 28)) {
                // line 29
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("resolution.view"), "html", null, true);
                yield "\">";
                echo __("Resolutions");
                yield "</a></li>
            ";
            }
            // line 31
            yield "        ";
        }
        // line 32
        yield "
        ";
        // line 33
        $context["countViewable"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [["library.view", "playlist.view", "dataset.view", "menuBoard.view"]], "method", false, false, false, 33);
        // line 34
        yield "        ";
        if ((($context["countViewable"] ?? null) > 0)) {
            // line 35
            yield "            <li class=\"sidebar-title\"><a>";
            echo __("Library");
            yield "</a></li>
            ";
            // line 36
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["playlist.view"], "method", false, false, false, 36)) {
                // line 37
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playlist.view"), "html", null, true);
                yield "\">";
                echo __("Playlists");
                yield "</a></li>
            ";
            }
            // line 39
            yield "
            ";
            // line 40
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["library.view"], "method", false, false, false, 40)) {
                // line 41
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.view"), "html", null, true);
                yield "\">";
                echo __("Media");
                yield "</a></li>
            ";
            }
            // line 43
            yield "
            ";
            // line 44
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["dataset.view"], "method", false, false, false, 44)) {
                // line 45
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("dataset.view"), "html", null, true);
                yield "\">";
                echo __("DataSets");
                yield "</a></li>
            ";
            }
            // line 47
            yield "
            ";
            // line 48
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["menuBoard.view"], "method", false, false, false, 48)) {
                // line 49
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("menuBoard.view"), "html", null, true);
                yield "\">";
                echo __("Menu Boards");
                yield "</a></li>
            ";
            }
            // line 51
            yield "        ";
        }
        // line 52
        yield "
        ";
        // line 53
        $context["countViewable"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [["displays.view", "displaygroup.view", "displayprofile.view", "playersoftware.view", "command.view"]], "method", false, false, false, 53);
        // line 54
        yield "        ";
        if ((($context["countViewable"] ?? null) > 0)) {
            // line 55
            yield "            <li class=\"sidebar-title\"><a>";
            echo __("Displays");
            yield "</a></li>
            ";
            // line 56
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displays.view"], "method", false, false, false, 56)) {
                // line 57
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.view"), "html", null, true);
                yield "\">";
                echo __("Displays");
                yield "</a></li>
            ";
            }
            // line 59
            yield "
            ";
            // line 60
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displaygroup.view"], "method", false, false, false, 60)) {
                // line 61
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displaygroup.view"), "html", null, true);
                yield "\">";
                echo __("Display Groups");
                yield "</a></li>
            ";
            }
            // line 63
            yield "
            ";
            // line 64
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["display.syncView"], "method", false, false, false, 64)) {
                // line 65
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("syncgroup.view"), "html", null, true);
                yield "\">";
                echo __("Sync Groups");
                yield "</a></li>
            ";
            }
            // line 67
            yield "
            ";
            // line 68
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["displayprofile.view"], "method", false, false, false, 68)) {
                // line 69
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("displayprofile.view"), "html", null, true);
                yield "\">";
                echo __("Display Settings");
                yield "</a></li>
            ";
            }
            // line 71
            yield "
            ";
            // line 72
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["playersoftware.view"], "method", false, false, false, 72)) {
                // line 73
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("playersoftware.view"), "html", null, true);
                yield "\">";
                echo __("Player Versions");
                yield "</a></li>
            ";
            }
            // line 75
            yield "
            ";
            // line 76
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["command.view"], "method", false, false, false, 76)) {
                // line 77
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("command.view"), "html", null, true);
                yield "\">";
                echo __("Commands");
                yield "</a></li>
            ";
            }
            // line 79
            yield "        ";
        }
        // line 80
        yield "
        ";
        // line 81
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["users.view"], "method", false, false, false, 81) && (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "isGroupAdmin", [], "method", false, false, false, 81) || CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "isSuperAdmin", [], "method", false, false, false, 81)))) {
            // line 82
            yield "            ";
            $context["userMenuViewable"] = true;
            // line 83
            yield "        ";
        } else {
            // line 84
            yield "            ";
            $context["userMenuViewable"] = false;
            // line 85
            yield "        ";
        }
        // line 86
        yield "
        ";
        // line 87
        $context["countViewable"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [["usergroup.view", "module.view", "transition.view", "task.view", "tag.view", "font.view"]], "method", false, false, false, 87);
        // line 88
        yield "        
        ";
        // line 89
        if (((($context["countViewable"] ?? null) > 0) || ($context["userMenuViewable"] ?? null))) {
            // line 90
            yield "            <li class=\"sidebar-title\"><a>";
            echo __("Administration");
            yield "</a></li>

            ";
            // line 92
            if (($context["userMenuViewable"] ?? null)) {
                // line 93
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.view"), "html", null, true);
                yield "\">";
                echo __("Users");
                yield "</a></li>
            ";
            }
            // line 95
            yield "
            ";
            // line 96
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["usergroup.view"], "method", false, false, false, 96)) {
                // line 97
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("group.view"), "html", null, true);
                yield "\">";
                echo __("User Groups");
                yield "</a></li>
            ";
            }
            // line 99
            yield "
            ";
            // line 100
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "isSuperAdmin", [], "method", false, false, false, 100)) {
                // line 101
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("admin.view"), "html", null, true);
                yield "\">";
                echo __("Settings");
                yield "</a></li>
            ";
            }
            // line 103
            yield "
            ";
            // line 104
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "isSuperAdmin", [], "method", false, false, false, 104)) {
                // line 105
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("application.view"), "html", null, true);
                yield "\">";
                echo __("Applications");
                yield "</a></li>
            ";
            }
            // line 107
            yield "
            ";
            // line 108
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["module.view"], "method", false, false, false, 108)) {
                // line 109
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("module.view"), "html", null, true);
                yield "\">";
                echo __("Modules");
                yield "</a></li>
            ";
            }
            // line 111
            yield "
            ";
            // line 112
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["transition.view"], "method", false, false, false, 112)) {
                // line 113
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("transition.view"), "html", null, true);
                yield "\">";
                echo __("Transitions");
                yield "</a></li>
            ";
            }
            // line 115
            yield "
            ";
            // line 116
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["task.view"], "method", false, false, false, 116)) {
                // line 117
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("task.view"), "html", null, true);
                yield "\">";
                echo __("Tasks");
                yield "</a></li>
            ";
            }
            // line 119
            yield "
            ";
            // line 120
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.view"], "method", false, false, false, 120)) {
                // line 121
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.view"), "html", null, true);
                yield "\">";
                echo __("Tags");
                yield "</a></li>
            ";
            }
            // line 123
            yield "
            ";
            // line 124
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "isSuperAdmin", [], "method", false, false, false, 124)) {
                // line 125
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("folders.view"), "html", null, true);
                yield "\">";
                echo __("Folders");
                yield "</a></li>
            ";
            }
            // line 127
            yield "
            ";
            // line 128
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["font.view"], "method", false, false, false, 128)) {
                // line 129
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("font.view"), "html", null, true);
                yield "\">";
                echo __("Fonts");
                yield "</a></li>
            ";
            }
            // line 131
            yield "        ";
        }
        // line 132
        yield "

        ";
        // line 134
        $context["countViewable"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [["report.view", "report.scheduling", "report.saving"]], "method", false, false, false, 134);
        // line 135
        yield "        ";
        if ((($context["countViewable"] ?? null) > 0)) {
            // line 136
            yield "            <li class=\"sidebar-title\"><a>";
            echo __("Reporting");
            yield "</a></li>

            ";
            // line 138
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["report.view"], "method", false, false, false, 138)) {
                // line 139
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("report.view"), "html", null, true);
                yield "\">";
                echo __("All Reports");
                yield "</a></li>
            ";
            }
            // line 141
            yield "
            ";
            // line 142
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["report.scheduling"], "method", false, false, false, 142)) {
                // line 143
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("reportschedule.view"), "html", null, true);
                yield "\">";
                echo __("Report Schedules");
                yield "</a></li>
            ";
            }
            // line 145
            yield "
            ";
            // line 146
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["report.saving"], "method", false, false, false, 146)) {
                // line 147
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("savedreport.view"), "html", null, true);
                yield "\">";
                echo __("Saved Reports");
                yield "</a></li>
            ";
            }
            // line 149
            yield "
        ";
        }
        // line 151
        yield "
        ";
        // line 152
        $context["countViewable"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [["log.view", "sessions.view", "auditlog.view", "fault.view"]], "method", false, false, false, 152);
        // line 153
        yield "        ";
        if ((($context["countViewable"] ?? null) > 0)) {
            // line 154
            yield "            <li class=\"sidebar-title\"><a>";
            echo __("Advanced");
            yield "</a></li>

            ";
            // line 156
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["log.view"], "method", false, false, false, 156)) {
                // line 157
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("log.view"), "html", null, true);
                yield "\">";
                echo __("Log");
                yield "</a></li>
            ";
            }
            // line 159
            yield "
            ";
            // line 160
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["sessions.view"], "method", false, false, false, 160)) {
                // line 161
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("sessions.view"), "html", null, true);
                yield "\">";
                echo __("Sessions");
                yield "</a></li>
            ";
            }
            // line 163
            yield "
            ";
            // line 164
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["auditlog.view"], "method", false, false, false, 164)) {
                // line 165
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("auditlog.view"), "html", null, true);
                yield "\">";
                echo __("Audit Trail");
                yield "</a></li>
            ";
            }
            // line 167
            yield "
            ";
            // line 168
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["fault.view"], "method", false, false, false, 168)) {
                // line 169
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("fault.view"), "html", null, true);
                yield "\">";
                echo __("Report Fault");
                yield "</a></li>
            ";
            }
            // line 171
            yield "        ";
        }
        // line 172
        yield "
        ";
        // line 173
        $context["countViewable"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabledCount", [["developer.edit"]], "method", false, false, false, 173);
        // line 174
        yield "        ";
        if ((($context["countViewable"] ?? null) > 0)) {
            // line 175
            yield "            <li class=\"sidebar-title\"><a>";
            echo __("Developer");
            yield "</a></li>

            ";
            // line 177
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["developer.edit"], "method", false, false, false, 177)) {
                // line 178
                yield "                <li class=\"sidebar-list\"><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("developer.templates.view"), "html", null, true);
                yield "\">";
                echo __("Module Templates");
                yield "</a></li>
            ";
            }
            // line 180
            yield "        ";
        }
        // line 181
        yield "    </ul>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "authed-sidebar.twig";
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
        return array (  604 => 181,  601 => 180,  593 => 178,  591 => 177,  585 => 175,  582 => 174,  580 => 173,  577 => 172,  574 => 171,  566 => 169,  564 => 168,  561 => 167,  553 => 165,  551 => 164,  548 => 163,  540 => 161,  538 => 160,  535 => 159,  527 => 157,  525 => 156,  519 => 154,  516 => 153,  514 => 152,  511 => 151,  507 => 149,  499 => 147,  497 => 146,  494 => 145,  486 => 143,  484 => 142,  481 => 141,  473 => 139,  471 => 138,  465 => 136,  462 => 135,  460 => 134,  456 => 132,  453 => 131,  445 => 129,  443 => 128,  440 => 127,  432 => 125,  430 => 124,  427 => 123,  419 => 121,  417 => 120,  414 => 119,  406 => 117,  404 => 116,  401 => 115,  393 => 113,  391 => 112,  388 => 111,  380 => 109,  378 => 108,  375 => 107,  367 => 105,  365 => 104,  362 => 103,  354 => 101,  352 => 100,  349 => 99,  341 => 97,  339 => 96,  336 => 95,  328 => 93,  326 => 92,  320 => 90,  318 => 89,  315 => 88,  313 => 87,  310 => 86,  307 => 85,  304 => 84,  301 => 83,  298 => 82,  296 => 81,  293 => 80,  290 => 79,  282 => 77,  280 => 76,  277 => 75,  269 => 73,  267 => 72,  264 => 71,  256 => 69,  254 => 68,  251 => 67,  243 => 65,  241 => 64,  238 => 63,  230 => 61,  228 => 60,  225 => 59,  217 => 57,  215 => 56,  210 => 55,  207 => 54,  205 => 53,  202 => 52,  199 => 51,  191 => 49,  189 => 48,  186 => 47,  178 => 45,  176 => 44,  173 => 43,  165 => 41,  163 => 40,  160 => 39,  152 => 37,  150 => 36,  145 => 35,  142 => 34,  140 => 33,  137 => 32,  134 => 31,  126 => 29,  124 => 28,  121 => 27,  113 => 25,  111 => 24,  108 => 23,  100 => 21,  98 => 20,  95 => 19,  87 => 17,  85 => 16,  80 => 15,  77 => 14,  75 => 13,  72 => 12,  64 => 10,  62 => 9,  59 => 8,  51 => 6,  49 => 5,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "authed-sidebar.twig", "/var/www/xibo/views/authed-sidebar.twig");
    }
}
