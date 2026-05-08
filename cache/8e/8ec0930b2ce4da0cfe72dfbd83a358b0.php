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

/* globalVars.twig */
class __TwigTemplate_761d5d3d77f784251aa6eccf12cb1b59 extends Template
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
        // line 2
        yield "<script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
    var appName = \"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", ["app_name"], "method", false, false, false, 3), "html", null, true);
        yield "\";
    var userPreferencesUrl = \"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.pref"), "html", null, true);
        yield "\";

    // TODO: Change this to a call to all route permissions ( something like currentUser.getRoutePermissions() )
    var userRoutePermissions = {
        tags: \"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "featureEnabled", ["tag.tagging"], "method", false, false, false, 8), "html", null, true);
        yield "\"
    };

    var tagGetByNameUrl = \"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.getByName"), "html", null, true);
        yield "\";
    var tagEditMultipleUrl = \"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.editMultiple", ["type" => "[type]"]), "html", null, true);
        yield "\";
    var tagSearchUrl = \"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.search"), "html", null, true);
        yield "\";
    var urlForLayoutSearch = \"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("layout.search"), "html", null, true);
        yield "\";
    var calendarType = \"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "CALENDAR_TYPE", [], "any", false, false, false, 15), "html", null, true);
        yield "\";
    var language = \"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["translate"] ?? null), "jsLocale", [], "any", false, false, false, 16), "html", null, true);
        yield "\";
    var timezone = \"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "defaultTimezone", [], "any", false, false, false, 17), "html", null, true);
        yield "\";
    var dateFormat = \"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "DATE_FORMAT", [], "any", false, false, false, 18), "html", null, true);
        yield "\";
    var jsDateFormat = (CALENDAR_TYPE == \"Jalali\") ? \"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "DATE_FORMAT_JALALI_JS", [], "any", false, false, false, 19), "html", null, true);
        yield "\" : \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "DATE_FORMAT_JS", [], "any", false, false, false, 19), "html", null, true);
        yield "\";
    var timeFormat = \"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "TIME_FORMAT", [], "any", false, false, false, 20), "html", null, true);
        yield "\";
    var jsTimeFormat = \"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "TIME_FORMAT_JS", [], "any", false, false, false, 21), "html", null, true);
        yield "\";
    var dateOnlyFormat = \"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "DATE_ONLY_FORMAT", [], "any", false, false, false, 22), "html", null, true);
        yield "\";
    var jsDateOnlyFormat = (CALENDAR_TYPE == \"Jalali\") ? \"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "DATE_ONLY_FORMAT_JALALI_JS", [], "any", false, false, false, 23), "html", null, true);
        yield "\" : \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "DATE_ONLY_FORMAT_JS", [], "any", false, false, false, 23), "html", null, true);
        yield "\";
    var systemDateFormat = \"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "systemDateFormat", [], "any", false, false, false, 24), "html", null, true);
        yield "\";
    var systemTimeFormat = \"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "systemTimeFormat", [], "any", false, false, false, 25), "html", null, true);
        yield "\";
    var clockUrl = \"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("clock"), "html", null, true);
        yield "\";
    var calendarLanguage = \"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["translate"] ?? null), "jsShortLocale", [], "any", false, false, false, 27), "html", null, true);
        yield "\";
    var pingUrl = \"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("ping"), "html", null, true);
        yield "\";
    var foldersUrl = \"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("folders.search"), "html", null, true);
        yield "\";
    var permissionsUrl = \"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("user.set.permissions.multi", ["entity" => ":entity"]), "html", null, true);
        yield "\";
    var addMediaThumbnailUrl = \"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.thumbnail.add"), "html", null, true);
        yield "\";
    var revokeApplicationAccess = \"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("application.revoke", ["id" => ":id", "userId" => ":userId"]), "html", null, true);
        yield "\";
    var getFontsUrl = \"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("font.search"), "html", null, true);
        yield "\";
    var libraryFontCSS = \"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.font.css"), "html", null, true);
        yield "\";
    var imageDownloadUrl = \"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("library.download", ["id" => ":id"]), "html", null, true);
        yield "?preview=1\";
    var commandSearchUrl = \"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("command.search"), "html", null, true);
        yield "\";
    var welcomeViewURL = \"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("welcome.view"), "html", null, true);
        yield "\";
    var supportURL = '";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "getThemeConfig", ["product_support_url", "https://community.xibo.org.uk/c/support"], "method", false, false, false, 38), "html", null, true);
        yield "';
    var isXiboThemed = (appName == \"Xibo\");
    var accountId = \"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accountId"] ?? null), "html", null, true);
        yield "\";
    var currentUserName = \"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "userName", [], "any", false, false, false, 41), "html", null, true);
        yield "\";
    var currentUserEmail = \"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "email", [], "any", false, false, false, 42), "html", null, true);
        yield "\";

    var dataTablesTemplate = \"<'row'<'dataTables_folder col-sm-12 col-lg-5'><'col-sm-12 col-lg-7 text-right'<'d-inline-block mr-2'l><'dataTables_buttons d-inline-block'>>>\" +
        \"<'row'<'col-sm-12'tr>>\" +
        \"<'row'<'col-sm-12 col-lg-5'i><'col-lg-7 col-sm-12'p>>\";

    // User preference regarding Folder tree state
    var rememberFolderTreeStateGlobally = ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "getOptionValue", ["rememberFolderTreeStateGlobally", "1"], "method", false, false, false, 49), "html", null, true);
        yield "
</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "globalVars.twig";
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
        return array (  195 => 49,  185 => 42,  181 => 41,  177 => 40,  172 => 38,  168 => 37,  164 => 36,  160 => 35,  156 => 34,  152 => 33,  148 => 32,  144 => 31,  140 => 30,  136 => 29,  132 => 28,  128 => 27,  124 => 26,  120 => 25,  116 => 24,  110 => 23,  106 => 22,  102 => 21,  98 => 20,  92 => 19,  88 => 18,  84 => 17,  80 => 16,  76 => 15,  72 => 14,  68 => 13,  64 => 12,  60 => 11,  54 => 8,  47 => 4,  43 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "globalVars.twig", "/var/www/xibo/views/globalVars.twig");
    }
}
