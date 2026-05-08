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

/* forms.twig */
class __TwigTemplate_704f611b1ab18a380d2c8fc4e45a85a0 extends Template
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
        yield "
";
        // line 11
        yield "
";
        // line 15
        yield "
";
        // line 23
        yield "
";
        // line 31
        yield "
";
        // line 37
        yield "
";
        // line 49
        yield "
";
        // line 59
        yield "
";
        // line 75
        yield "
";
        // line 93
        yield "
";
        // line 121
        yield "
";
        // line 131
        yield "
";
        // line 141
        yield "
";
        // line 151
        yield "
";
        // line 170
        yield "
";
        // line 182
        yield "
";
        // line 194
        yield "
";
        // line 274
        yield "
";
        // line 288
        yield "
";
        // line 302
        yield "
";
        // line 316
        yield "
";
        // line 330
        yield "
";
        // line 349
        yield "
";
        // line 361
        yield "
";
        // line 377
        yield "
";
        return; yield '';
    }

    // line 2
    public function macro_disabled($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 3
            yield "    <div class=\"form-group row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"col-sm-2 control-label\">";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <div class=\"col-sm-10\">
            <p class=\"form-control-static\">";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "</p>
            <small class=\"form-text text-muted\">";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "</small>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 12
    public function macro_hidden($__name__ = null, $__value__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 13
            yield "    <input name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" type=\"hidden\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" />
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 16
    public function macro_raw($__text__ = null, $__groupClass__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "groupClass" => $__groupClass__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 17
            yield "    <div class=\"row\">
        <div class=\"col-sm-12 ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
            ";
            // line 19
            yield ($context["text"] ?? null);
            yield "
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 24
    public function macro_message($__message__ = null, $__groupClass__ = null, $__messageStyleClass__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "message" => $__message__,
            "groupClass" => $__groupClass__,
            "messageStyleClass" => $__messageStyleClass__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 25
            yield "    <div class=\"row\">
        <div class=\"";
            // line 26
            if (($context["messageStyleClass"] ?? null)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["messageStyleClass"] ?? null), "html", null, true);
            }
            yield " col-sm-12 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
            <p>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["message"] ?? null), "html", null, true);
            yield "</p>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 32
    public function macro_alert($__message__ = null, $__alertType__ = null, $__groupClass__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "message" => $__message__,
            "alertType" => $__alertType__,
            "groupClass" => $__groupClass__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 33
            yield "    <div class=\"row\">
        <div class=\"alert alert-";
            // line 34
            if (($context["alertType"] ?? null)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["alertType"] ?? null), "html", null, true);
            } else {
                yield "primary";
            }
            yield " col-sm-12 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["message"] ?? null), "html", null, true);
            yield "</div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 38
    public function macro_button($__title__ = null, $__type__ = null, $__link__ = null, $__groupClass__ = null, $__id__ = null, $__buttonClass__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "type" => $__type__,
            "link" => $__link__,
            "groupClass" => $__groupClass__,
            "id" => $__id__,
            "buttonClass" => $__buttonClass__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 39
            yield "    <div class=\"form-group row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <div class=\"offset-sm-2 col-sm-10\">
            ";
            // line 41
            if ((($context["type"] ?? null) == "link")) {
                // line 42
                yield "            <a class=\"btn ";
                if (($context["buttonClass"] ?? null)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["buttonClass"] ?? null), "html", null, true);
                } else {
                    yield "btn-white";
                }
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["link"] ?? null), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
                yield "</a>
            ";
            } else {
                // line 44
                yield "            <button id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
                yield "\" class=\"btn ";
                if (($context["buttonClass"] ?? null)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["buttonClass"] ?? null), "html", null, true);
                } else {
                    yield "btn-white";
                }
                yield " ml-0\" type=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
                yield "</button>
            ";
            }
            // line 46
            yield "        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 50
    public function macro_input($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 51
            yield "    <div class=\"form-group row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" type=\"text\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
            yield " />
            <small class=\"form-text text-muted\">";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "</small>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 60
    public function macro_colorPicker($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 61
            yield "    <div class=\"form-group row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <div class=\"col-sm-10 colorpicker-input\">
            <div class=\"input-group\">
                <div class=\"input-group-prepend\">
                    <i class=\"input-group-text input-group-addon\" id=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "_label\"></i>
                </div>
                <input class=\"form-control\" name=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" type=\"text\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" aria-describedby=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "_label\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
            yield " />
            </div>
            <small class=\"form-text text-muted\">";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "</small>
            <div class=\"picker-container\"></div>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 76
    public function macro_inputWithButton($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, $__buttonId__ = null, $__buttonTitle__ = null, $__buttonType__ = null, $__buttonLink__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "buttonId" => $__buttonId__,
            "buttonTitle" => $__buttonTitle__,
            "buttonType" => $__buttonType__,
            "buttonLink" => $__buttonLink__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 77
            yield "    <div class=\"form-group row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <div class=\"input-group col-sm-10\">
            <input class=\"form-control\" name=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" type=\"text\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
            yield " aria-describedby=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["buttonId"] ?? null), "html", null, true);
            yield "\" />

            <div class=\"input-group-append\">
                ";
            // line 83
            if ((($context["buttonType"] ?? null) == "link")) {
                // line 84
                yield "                    <a class=\"btn btn-white\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["link"] ?? null), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["buttonTitle"] ?? null), "html", null, true);
                yield "</a>
                ";
            } else {
                // line 86
                yield "                    <button id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["buttonId"] ?? null), "html", null, true);
                yield "\" class=\"btn btn-white\" type=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["buttonType"] ?? null), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["buttonTitle"] ?? null), "html", null, true);
                yield "</button>
                ";
            }
            // line 88
            yield "            </div>
        </div>
        <small class=\"form-text offset-2 px-4 text-muted\">";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "</small>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 94
    public function macro_inputWithTags($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, $__exactTag__ = null, $__exactTagTitle__ = null, $__logicalOperatorTitle__ = null, $__exactTagValue__ = null, $__logicalOperatorValue__ = null, $__autoCompleteEnabled__ = 1, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "exactTag" => $__exactTag__,
            "exactTagTitle" => $__exactTagTitle__,
            "logicalOperatorTitle" => $__logicalOperatorTitle__,
            "exactTagValue" => $__exactTagValue__,
            "logicalOperatorValue" => $__logicalOperatorValue__,
            "autoCompleteEnabled" => $__autoCompleteEnabled__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 95
            yield "        ";
            if (($context["exactTag"] ?? null)) {
                // line 96
                yield "            <div class=\"form-group tags-input-addons-wide row ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
                yield "\">
            <label class=\"col-sm-2 control-label\" for=\"";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" accesskey=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
                yield "</label>
            <div class=\"input-group input-group-tags-exact col-sm-10\">
                <input class=\"form-control\" name=\"";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" type=\"text\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                yield "\" data-role=\"tagsInputForm\" ";
                if ((($context["autoCompleteEnabled"] ?? null) == 1)) {
                    yield " data-auto-complete-url=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.search"), "html", null, true);
                    yield "?allTags=1\" ";
                }
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
                yield " />
                <div class=\"input-group-append input-group-addon\">
                    <div class=\"input-group-text\">
                        <input title=\"";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["exactTagTitle"] ?? null), "html", null, true);
                yield "\" type=\"checkbox\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["exactTag"] ?? null), "html", null, true);
                yield "\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["exactTag"] ?? null), "html", null, true);
                yield "\" ";
                if (($context["exactTagValue"] ?? null)) {
                    yield "checked";
                }
                yield ">
                    </div>
                    <select class=\"custom-select\" id=\"logicalOperator\" name=\"logicalOperator\" title=\"";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["logicalOperatorTitle"] ?? null), "html", null, true);
                yield "\" >
                        <option value=\"OR\" ";
                // line 105
                if ((($context["logicalOperatorValue"] ?? null) != "AND")) {
                    yield "selected";
                }
                yield ">OR</option>
                        <option value=\"AND\" ";
                // line 106
                if ((($context["logicalOperatorValue"] ?? null) == "AND")) {
                    yield "selected";
                }
                yield ">AND</option>
                    </select>
                </div>
                <small class=\"form-text text-muted\">";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
                yield "</small>
            </div>
        ";
            } else {
                // line 112
                yield "            <div class=\"form-group tags-input-wide row ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
                yield "\">
            <label class=\"col-sm-2 control-label\" for=\"";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" accesskey=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
                yield "</label>
            <div class=\"col-sm-10\">
                <input class=\"form-control\" name=\"";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" type=\"text\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                yield "\" data-role=\"tagsInputForm\" ";
                if ((($context["autoCompleteEnabled"] ?? null) == 1)) {
                    yield " data-auto-complete-url=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("tag.search"), "html", null, true);
                    yield "?allTags=1\" ";
                }
                yield "  ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
                yield " />
                <small class=\"form-text text-muted\">";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
                yield "</small>
            </div>
        ";
            }
            // line 119
            yield "    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 122
    public function macro_number($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, $__maxNumber__ = null, $__minNumber__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "maxNumber" => $__maxNumber__,
            "minNumber" => $__minNumber__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 123
            yield "    <div class=\"form-group row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" ";
            if ((($context["maxNumber"] ?? null) != ($context["undefined"] ?? null))) {
                yield "max=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["maxNumber"] ?? null), "html", null, true);
                yield "\" ";
            }
            if ((($context["minNumber"] ?? null) != ($context["undefined"] ?? null))) {
                yield "min=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["minNumber"] ?? null), "html", null, true);
                yield "\" ";
            }
            yield "type=\"number\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
            yield " />
            <small class=\"form-text text-muted\">";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "</small>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 132
    public function macro_email($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 133
            yield "    <div class=\"form-group row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" type=\"email\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
            yield " />
            <small class=\"form-text text-muted\">";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "</small>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 142
    public function macro_password($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 143
            yield "    <div class=\"form-group row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" type=\"password\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
            yield " />
            <small class=\"form-text text-muted\">";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "</small>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 152
    public function macro_textarea($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__rows__ = null, $__inline__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "rows" => $__rows__,
            "inline" => $__inline__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 153
            yield "    ";
            if ((($context["inline"] ?? null) == true)) {
                // line 154
                yield "        <div class=\"form-group row ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
                yield "\">
            <label class=\"col-sm-2 control-label\" for=\"";
                // line 155
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
                yield "</label>
            <div class=\"col-sm-10\">
                <textarea class=\"form-control\" name=\"";
                // line 157
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" rows=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rows"] ?? null), "html", null, true);
                yield "\" ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                yield "</textarea>
                <small class=\"form-text text-muted\">";
                // line 158
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
                yield "</small>
            </div>
        </div>
    ";
            } else {
                // line 162
                yield "        <div class=\"form-group row ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
                yield "\">
            <div class=\"col-sm-12\">
                <small class=\"form-text text-muted\">";
                // line 164
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
                yield "</small>
                <textarea class=\"form-control\" name=\"";
                // line 165
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" rows=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rows"] ?? null), "html", null, true);
                yield "\" ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                yield "</textarea>
            </div>
        </div>
    ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 171
    public function macro_checkbox($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__accessKey__ = null, $__disabled__ = null, $__id__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "accessKey" => $__accessKey__,
            "disabled" => $__disabled__,
            "id" => $__id__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 172
            yield "    <div class=\"form-group row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <div class=\"offset-sm-2 col-sm-10\">
            <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"checkbox\" ";
            // line 175
            if (($context["id"] ?? null)) {
                yield " id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
                yield "\" ";
            } else {
                yield " id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" ";
            }
            yield " name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" ";
            if ((($context["value"] ?? null) == 1)) {
                yield "checked";
            }
            yield " ";
            if ((($context["disabled"] ?? null) == 1)) {
                yield "disabled";
            }
            yield ">
                <label class=\"form-check-label\" ";
            // line 176
            if (($context["id"] ?? null)) {
                yield " for=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
                yield "\" ";
            } else {
                yield " for=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" ";
            }
            yield " accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
            </div>
            <small class=\"form-text text-muted\">";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "</small>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 183
    public function macro_radio($__name__ = null, $__id__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__accessKey__ = null, $__setValue__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "id" => $__id__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "accessKey" => $__accessKey__,
            "setValue" => $__setValue__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 184
            yield "    <div class=\"form-group row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <div class=\"offset-sm-2 col-sm-10\">
            <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" id=\"";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["setValue"] ?? null), "html", null, true);
            yield "\" ";
            if ((($context["value"] ?? null) == ($context["setValue"] ?? null))) {
                yield "checked";
            }
            yield ">
                <label class=\"form-check-label\" for=\"";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
            </div>
            <small class=\"form-text text-muted\">";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "</small>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 195
    public function macro_dropdown($__name__ = null, $__type__ = null, $__title__ = null, $__value__ = null, $__options__ = null, $__optionId__ = null, $__optionValue__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, $__callBack__ = null, $__dataAttributes__ = null, $__optionGroups__ = null, $__optionImageValue__ = null, $__optionFilter__ = null, $__readonly__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "type" => $__type__,
            "title" => $__title__,
            "value" => $__value__,
            "options" => $__options__,
            "optionId" => $__optionId__,
            "optionValue" => $__optionValue__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "callBack" => $__callBack__,
            "dataAttributes" => $__dataAttributes__,
            "optionGroups" => $__optionGroups__,
            "optionImageValue" => $__optionImageValue__,
            "optionFilter" => $__optionFilter__,
            "readonly" => $__readonly__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 196
            yield "    <div class=\"form-group row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <div class=\"col-sm-10\">
            <select class=\"form-control\" ";
            // line 199
            if ((($context["type"] ?? null) == "dropdownmulti")) {
                yield "multiple";
            }
            yield " name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["callBack"] ?? null), "html", null, true);
            yield " ";
            if (($context["readonly"] ?? null)) {
                yield "readonly";
            }
            // line 200
            yield "                ";
            if ((($context["type"] ?? null) == "dropdownmulti")) {
                // line 201
                yield "                    data-allow-clear=\"true\"
                    data-placeholder--id=null
                    data-placeholder--value=\"\"
                ";
            }
            // line 205
            yield "                ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["dataAttributes"] ?? null)) > 0)) {
                // line 206
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["dataAttributes"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 207
                    yield "                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 207), "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "value", [], "any", false, false, false, 207), "html", null, true);
                    yield "\"
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 209
                yield "                ";
            }
            // line 210
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
            yield ">

            ";
            // line 212
            $context["hasGroups"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["optionGroups"] ?? null)) > 0);
            // line 213
            yield "            ";
            if ( !($context["hasGroups"] ?? null)) {
                // line 214
                yield "                ";
                $context["optionGroups"] = ["label" => "General"];
                // line 215
                yield "            ";
            }
            // line 216
            yield "
            ";
            // line 217
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["optionGroups"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 218
                yield "                ";
                if (($context["hasGroups"] ?? null)) {
                    // line 219
                    yield "                    <optgroup label=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "label", [], "any", false, false, false, 219), "html", null, true);
                    yield "\">
                    ";
                    // line 220
                    $context["tempOptions"] = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 220), [], "any", false, false, false, 220);
                    // line 221
                    yield "                ";
                } else {
                    // line 222
                    yield "                    ";
                    $context["tempOptions"] = ($context["options"] ?? null);
                    // line 223
                    yield "                ";
                }
                // line 224
                yield "
                ";
                // line 225
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["tempOptions"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 226
                    yield "
                    ";
                    // line 227
                    if ((($context["optionId"] ?? null) == "")) {
                        // line 228
                        yield "                        ";
                        $context["itemOptionId"] = $context["option"];
                        // line 229
                        yield "                        ";
                        $context["itemOptionValue"] = $context["option"];
                        // line 230
                        yield "                        ";
                        if (($context["optionImageValue"] ?? null)) {
                            // line 231
                            yield "                            ";
                            $context["itemOptionImageValue"] = $context["option"];
                            // line 232
                            yield "                        ";
                        }
                        // line 233
                        yield "                    ";
                    } else {
                        // line 234
                        yield "                        ";
                        $context["itemOptionId"] = CoreExtension::getAttribute($this->env, $this->source, $context["option"], ($context["optionId"] ?? null), [], "any", false, false, false, 234);
                        // line 235
                        yield "                        ";
                        $context["itemOptionValue"] = CoreExtension::getAttribute($this->env, $this->source, $context["option"], ($context["optionValue"] ?? null), [], "any", false, false, false, 235);
                        // line 236
                        yield "                        ";
                        if (($context["optionImageValue"] ?? null)) {
                            // line 237
                            yield "                            ";
                            $context["itemOptionImageValue"] = CoreExtension::getAttribute($this->env, $this->source, $context["option"], ($context["optionImageValue"] ?? null), [], "any", false, false, false, 237);
                            // line 238
                            yield "                        ";
                        }
                        // line 239
                        yield "                    ";
                    }
                    // line 240
                    yield "
                    ";
                    // line 241
                    if ((($context["type"] ?? null) == "dropdownmulti")) {
                        // line 242
                        yield "                        ";
                        $context["selected"] = CoreExtension::inFilter(($context["itemOptionId"] ?? null), ($context["value"] ?? null));
                        // line 243
                        yield "                    ";
                    } else {
                        // line 244
                        yield "                        ";
                        $context["selected"] = (($context["itemOptionId"] ?? null) == ($context["value"] ?? null));
                        // line 245
                        yield "                    ";
                    }
                    // line 246
                    yield "
                    <option value=\"";
                    // line 247
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemOptionId"] ?? null), "html", null, true);
                    yield "\" ";
                    if (($context["selected"] ?? null)) {
                        yield "selected";
                    }
                    // line 248
                    yield "                            ";
                    if (($context["itemOptionImageValue"] ?? null)) {
                        // line 249
                        yield "                                data-content=\"<span class='media'><span class='media-left mr-2'><img style='max-width: 100px; max-height: 80px;' src='";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemOptionImageValue"] ?? null), "html", null, true);
                        yield "' /></span> <span class='media-body'>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemOptionValue"] ?? null), "html", null, true);
                        yield "</span></span>\"
                            ";
                    }
                    // line 251
                    yield "
                            ";
                    // line 252
                    if (($context["optionFilter"] ?? null)) {
                        // line 253
                        yield "                                ";
                        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["optionFilter"] ?? null), 0, [], "array", true, true, false, 253)) {
                            // line 254
                            yield "                                    data-filter-class=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["option"], ($context["optionFilter"] ?? null), [], "any", false, false, false, 254), "html", null, true);
                            yield "\"
                                ";
                        } else {
                            // line 256
                            yield "                                    ";
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(($context["optionFilter"] ?? null));
                            $context['loop'] = [
                              'parent' => $context['_parent'],
                              'index0' => 0,
                              'index'  => 1,
                              'first'  => true,
                            ];
                            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                                $length = count($context['_seq']);
                                $context['loop']['revindex0'] = $length - 1;
                                $context['loop']['revindex'] = $length;
                                $context['loop']['length'] = $length;
                                $context['loop']['last'] = 1 === $length;
                            }
                            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                                // line 257
                                yield "                                        data-filter";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 257), "html", null, true);
                                yield "-class=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["option"], $context["filter"], [], "any", false, false, false, 257), "html", null, true);
                                yield "\"
                                    ";
                                ++$context['loop']['index0'];
                                ++$context['loop']['index'];
                                $context['loop']['first'] = false;
                                if (isset($context['loop']['length'])) {
                                    --$context['loop']['revindex0'];
                                    --$context['loop']['revindex'];
                                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                                }
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 259
                            yield "                                ";
                        }
                        // line 260
                        yield "                            ";
                    }
                    // line 261
                    yield "                    >";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemOptionValue"] ?? null), "html", null, true);
                    yield "</option>
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 263
                yield "
                ";
                // line 264
                if (($context["hasGroups"] ?? null)) {
                    // line 265
                    yield "                    </optgroup>
                ";
                }
                // line 267
                yield "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 268
            yield "
            </select>
            <small class=\"form-text text-muted\">";
            // line 270
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "</small>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 275
    public function macro_date($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 276
            yield "    <div class=\"form-group row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 277
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <div class=\"col-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-prepend input-group-text date-open-button\" role=\"button\"><i class=\"fa fa-calendar\"></i></span>
                <input class=\"form-control dateControl date\" type=\"text\" ";
            // line 281
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
            yield " name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" />
                <span class=\"input-group-append input-group-addon input-group-text date-clear-button d-none\" role=\"button\"><i class=\"fa fa-times\"></i></span>
            </div>
            <small class=\"form-text text-muted\">";
            // line 284
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "</small>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 289
    public function macro_dateTime($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 290
            yield "    <div class=\"form-group row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 291
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <div class=\"col-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-prepend input-group-text date-open-button\" role=\"button\"><i class=\"fa fa-calendar\"></i></span>
                <input class=\"form-control dateControl dateTime\" type=\"text\" ";
            // line 295
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
            yield " name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" />
                <span class=\"input-group-append input-group-addon input-group-text date-clear-button d-none\" role=\"button\"><i class=\"fa fa-times\"></i></span>
            </div>
            <small class=\"form-text text-muted\">";
            // line 298
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "</small>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 303
    public function macro_dateMonth($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 304
            yield "    <div class=\"form-group row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"col-sm-2 control-label\" title=\"";
            // line 305
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "\" for=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <div class=\"col-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-prepend input-group-text date-open-button\" role=\"button\"><i class=\"fa fa-calendar\"></i></span>
                <input class=\"form-control dateControl month\" type=\"text\" ";
            // line 309
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
            yield " name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" />
                <span class=\"input-group-append input-group-addon input-group-text date-clear-button d-none\" role=\"button\"><i class=\"fa fa-times\"></i></span>
            </div>
            <small class=\"form-text text-muted\">";
            // line 312
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "</small>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 317
    public function macro_time($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, $__customFormat__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "customFormat" => $__customFormat__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 318
            yield "    <div class=\"form-group row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 319
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <div class=\"col-sm-10\">
            <div class=\"input-group\">
                <span class=\"input-group-prepend input-group-text date-open-button\" role=\"button\"><i class=\"fa fa-calendar\"></i></span>
                <input class=\"form-control dateControl time\" type=\"text\" ";
            // line 323
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
            yield " name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" ";
            if (($context["customFormat"] ?? null)) {
                yield "data-custom-format=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["customFormat"] ?? null), "html", null, true);
                yield "\"";
            }
            yield " />
                <span class=\"input-group-append input-group-addon input-group-text date-clear-button d-none\" role=\"button\"><i class=\"fa fa-times\"></i></span>
            </div>
            <small class=\"form-text text-muted\">";
            // line 326
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "</small>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 331
    public function macro_switch($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__labelWidth__ = null, $__switchSize__ = null, $__onText__ = null, $__offText__ = null, $__groupClass__ = null, $__accessKey__ = null, $__disabled__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "labelWidth" => $__labelWidth__,
            "switchSize" => $__switchSize__,
            "onText" => $__onText__,
            "offText" => $__offText__,
            "groupClass" => $__groupClass__,
            "accessKey" => $__accessKey__,
            "disabled" => $__disabled__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 332
            yield "    <div class=\"form-group row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <div class=\"offset-sm-2 col-sm-10\">
            <div class=\"checkbox\" title=\"";
            // line 334
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "\">
                <input type=\"checkbox\" class=\"bootstrap-switch-target\" id=\"";
            // line 335
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\"
                    ";
            // line 336
            if ((($context["value"] ?? null) == 1)) {
                yield "checked";
            }
            // line 337
            yield "                    ";
            if ((($context["disabled"] ?? null) == 1)) {
                yield "disabled";
            }
            // line 338
            yield "                    data-label-text=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "\"
                    ";
            // line 339
            if (!CoreExtension::inFilter(($context["onText"] ?? null), [null, ($context["undefined"] ?? null), ""])) {
                yield " data-on-text=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["onText"] ?? null), "html", null, true);
                yield "\"";
            }
            // line 340
            yield "                    ";
            if (!CoreExtension::inFilter(($context["offText"] ?? null), [null, ($context["undefined"] ?? null), ""])) {
                yield " data-off-text=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["offText"] ?? null), "html", null, true);
                yield "\"";
            }
            // line 341
            yield "                    ";
            if (!CoreExtension::inFilter(($context["switchSize"] ?? null), [null, ($context["undefined"] ?? null), ""])) {
                yield "data-size=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["switchSize"] ?? null), "html", null, true);
                yield "\"";
            } else {
                yield "data-size=\"small\"";
            }
            // line 342
            yield "                    ";
            if (!CoreExtension::inFilter(($context["labelWidth"] ?? null), [null, ($context["undefined"] ?? null), ""])) {
                yield " data-label-width=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["labelWidth"] ?? null), "html", null, true);
                yield "\"";
            }
            // line 343
            yield "                    >
            </div>
            <small class=\"form-text text-muted\">";
            // line 345
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "</small>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 350
    public function macro_playerCompat($__android__ = null, $__linux__ = null, $__tizen__ = null, $__webos__ = null, $__windows__ = null, $__message__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "android" => $__android__,
            "linux" => $__linux__,
            "tizen" => $__tizen__,
            "webos" => $__webos__,
            "windows" => $__windows__,
            "message" => $__message__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 351
            yield "    <span class=\"fa fa-info-circle\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"bottom\" data-html=\"true\"
          data-content='";
            // line 352
            if (($context["message"] ?? null)) {
                yield "<p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["message"] ?? null), "html", null, true);
                yield "</p>";
            }
            yield "<ul class=\"player-compatibility\">
                ";
            // line 353
            if (($context["android"] ?? null)) {
                yield "<li><span class=\"fa fa-android\"></span> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["android"] ?? null), "html", null, true);
                yield "</li>";
            }
            // line 354
            yield "                ";
            if (($context["linux"] ?? null)) {
                yield "<li><span class=\"fa fa-linux\"></span> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["linux"] ?? null), "html", null, true);
                yield "</li>";
            }
            // line 355
            yield "                ";
            if (($context["tizen"] ?? null)) {
                yield "<li>Tizen: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tizen"] ?? null), "html", null, true);
                yield "</li>";
            }
            // line 356
            yield "                ";
            if (($context["webos"] ?? null)) {
                yield "<li>webOS: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["webos"] ?? null), "html", null, true);
                yield "</li>";
            }
            // line 357
            yield "                ";
            if (($context["windows"] ?? null)) {
                yield "<li><span class=\"fa fa-windows\"></span> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["windows"] ?? null), "html", null, true);
                yield "</li>";
            }
            // line 358
            yield "            </ul>'>
    </span>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 362
    public function macro_inputWithLogicalOperator($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, $__logicalOperatorValue__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "logicalOperatorValue" => $__logicalOperatorValue__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 363
            yield "    <div class=\"form-group row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 364
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "</label>
        <div class=\"input-group col-sm-10\">
            <input class=\"form-control\" name=\"";
            // line 366
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" type=\"text\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["validation"] ?? null), "html", null, true);
            yield " />
            <div class=\"input-group-append input-group-addon\">
                <select class=\"custom-select\" id=\"logicalOperatorName\" name=\"logicalOperatorName\" title=\"";
            // line 368
            echo __("When filtering by multiple names, which logical operator should be used?");
            yield "\">
                        <option value=\"OR\" ";
            // line 369
            if ((($context["logicalOperatorValue"] ?? null) != "AND")) {
                yield "selected";
            }
            yield ">OR</option>
                        <option value=\"AND\" ";
            // line 370
            if ((($context["logicalOperatorValue"] ?? null) == "AND")) {
                yield "selected";
            }
            yield ">AND</option>
                </select>
            </div>
            <small class=\"form-text text-muted\">";
            // line 373
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "</small>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 378
    public function macro_dateRangeFilter($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 379
            yield "    <div class=\"form-group mr-1 mb-1 d-flex flex-row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["groupClass"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 380
            $context["today"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate(($context["now"] ?? null), "today"), "Y-m-d H:i:s");
            // line 381
            yield "        <div class=\"form-group mr-1\">
            <label class=\"control-label mr-1\" title=\"";
            // line 382
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "\" for=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">
                ";
            // line 383
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "
            </label>
            <div class=\"d-inline-flex\">
                <select class=\"form-control XiboDateRangeFilter\" name=\"";
            // line 386
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\">
                    <option value=\"\" >";
            // line 387
            echo __("Select a range");
            yield "</option>
                    <option value=\"today\" selected>";
            // line 388
            echo __("Today");
            yield "</option>
                    <option value=\"yesterday\">";
            // line 389
            echo __("Yesterday");
            yield "</option>
                    <option value=\"thisweek\">";
            // line 390
            echo __("This Week");
            yield "</option>
                    <option value=\"thismonth\">";
            // line 391
            echo __("This Month");
            yield "</option>
                    <option value=\"thisyear\">";
            // line 392
            echo __("This Year");
            yield "</option>
                    <option value=\"lastweek\">";
            // line 393
            echo __("Last Week");
            yield "</option>
                    <option value=\"lastmonth\">";
            // line 394
            echo __("Last Month");
            yield "</option>
                    <option value=\"lastyear\">";
            // line 395
            echo __("Last Year");
            yield "</option>
                </select>
            </div>
        </div>
        <div class=\"form-group hidden mr-1 ";
            // line 399
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("rangeFilterInput_" . ($context["name"] ?? null)), "html", null, true);
            yield "\">
            <label class=\"control-label mr-1\" title=\"";
            // line 400
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "\" for=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">
                ";
            // line 401
            echo __("From Date");
            // line 402
            yield "            </label>
            <div class=\"input-group\">
                <div class=\"input-group-prepend input-group-text date-open-button\" role=\"button\">
                    <i class=\"fa fa-calendar\"></i>
                </div>
                <input class=\"form-control dateControl date rangeInput\"
                       type=\"text\" name=\"fromDt\" id=\"";
            // line 408
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("fromDt_" . ($context["name"] ?? null)), "html", null, true);
            yield "\"
                       value=\"";
            // line 409
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["today"] ?? null), "html", null, true);
            yield "\"
                />
                <span class=\"input-group-append input-group-addon input-group-text date-clear-button d-none\"
                      role=\"button\"
                >
                    <i class=\"fa fa-times\"></i>
                </span>
            </div>
        </div>
        <div class=\"form-group hidden ";
            // line 418
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("rangeFilterInput_" . ($context["name"] ?? null)), "html", null, true);
            yield "\">
            <label class=\"control-label mr-1\" title=\"";
            // line 419
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helpText"] ?? null), "html", null, true);
            yield "\" for=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" accesskey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["accessKey"] ?? null), "html", null, true);
            yield "\">
                ";
            // line 420
            echo __("To Date");
            // line 421
            yield "            </label>
            <div class=\"input-group\">
                <div class=\"input-group-prepend input-group-text date-open-button\" role=\"button\">
                    <i class=\"fa fa-calendar\"></i>
                </div>
                <input class=\"form-control dateControl date rangeInput\"
                       type=\"text\" name=\"toDt\" id=\"";
            // line 427
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("toDt_" . ($context["name"] ?? null)), "html", null, true);
            yield "\"
                       value=\"";
            // line 428
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate(($context["today"] ?? null), "+1 day -1 second"), "Y-m-d H:i:s"), "html", null, true);
            yield "\"
                />
                <span class=\"input-group-append input-group-addon input-group-text date-clear-button d-none\"
                      role=\"button\"
                >
                    <i class=\"fa fa-times\"></i>
                </span>
            </div>
        </div>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "forms.twig";
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
        return array (  2039 => 428,  2035 => 427,  2027 => 421,  2025 => 420,  2017 => 419,  2013 => 418,  2001 => 409,  1997 => 408,  1989 => 402,  1987 => 401,  1979 => 400,  1975 => 399,  1968 => 395,  1964 => 394,  1960 => 393,  1956 => 392,  1952 => 391,  1948 => 390,  1944 => 389,  1940 => 388,  1936 => 387,  1930 => 386,  1924 => 383,  1916 => 382,  1913 => 381,  1911 => 380,  1906 => 379,  1888 => 378,  1878 => 373,  1870 => 370,  1864 => 369,  1860 => 368,  1849 => 366,  1840 => 364,  1835 => 363,  1816 => 362,  1808 => 358,  1801 => 357,  1794 => 356,  1787 => 355,  1780 => 354,  1774 => 353,  1766 => 352,  1763 => 351,  1746 => 350,  1736 => 345,  1732 => 343,  1725 => 342,  1716 => 341,  1709 => 340,  1703 => 339,  1698 => 338,  1693 => 337,  1689 => 336,  1681 => 335,  1677 => 334,  1671 => 332,  1649 => 331,  1639 => 326,  1621 => 323,  1610 => 319,  1605 => 318,  1586 => 317,  1576 => 312,  1564 => 309,  1551 => 305,  1546 => 304,  1528 => 303,  1518 => 298,  1506 => 295,  1495 => 291,  1490 => 290,  1472 => 289,  1462 => 284,  1450 => 281,  1439 => 277,  1434 => 276,  1416 => 275,  1406 => 270,  1402 => 268,  1388 => 267,  1384 => 265,  1382 => 264,  1379 => 263,  1362 => 261,  1359 => 260,  1356 => 259,  1337 => 257,  1319 => 256,  1313 => 254,  1310 => 253,  1308 => 252,  1305 => 251,  1297 => 249,  1294 => 248,  1288 => 247,  1285 => 246,  1282 => 245,  1279 => 244,  1276 => 243,  1273 => 242,  1271 => 241,  1268 => 240,  1265 => 239,  1262 => 238,  1259 => 237,  1256 => 236,  1253 => 235,  1250 => 234,  1247 => 233,  1244 => 232,  1241 => 231,  1238 => 230,  1235 => 229,  1232 => 228,  1230 => 227,  1227 => 226,  1210 => 225,  1207 => 224,  1204 => 223,  1201 => 222,  1198 => 221,  1196 => 220,  1191 => 219,  1188 => 218,  1171 => 217,  1168 => 216,  1165 => 215,  1162 => 214,  1159 => 213,  1157 => 212,  1151 => 210,  1148 => 209,  1137 => 207,  1132 => 206,  1129 => 205,  1123 => 201,  1120 => 200,  1106 => 199,  1097 => 197,  1092 => 196,  1064 => 195,  1054 => 190,  1045 => 188,  1033 => 187,  1026 => 184,  1007 => 183,  997 => 178,  980 => 176,  958 => 175,  951 => 172,  932 => 171,  913 => 165,  909 => 164,  903 => 162,  896 => 158,  884 => 157,  877 => 155,  872 => 154,  869 => 153,  850 => 152,  840 => 147,  830 => 146,  821 => 144,  816 => 143,  798 => 142,  788 => 137,  778 => 136,  769 => 134,  764 => 133,  746 => 132,  736 => 127,  715 => 126,  706 => 124,  701 => 123,  681 => 122,  674 => 119,  668 => 116,  652 => 115,  643 => 113,  638 => 112,  632 => 109,  624 => 106,  618 => 105,  614 => 104,  601 => 102,  583 => 99,  574 => 97,  569 => 96,  566 => 95,  542 => 94,  533 => 90,  529 => 88,  519 => 86,  511 => 84,  509 => 83,  495 => 80,  486 => 78,  481 => 77,  459 => 76,  448 => 70,  435 => 68,  430 => 66,  419 => 62,  414 => 61,  396 => 60,  386 => 55,  376 => 54,  367 => 52,  362 => 51,  344 => 50,  336 => 46,  320 => 44,  306 => 42,  304 => 41,  298 => 39,  281 => 38,  264 => 34,  261 => 33,  247 => 32,  237 => 27,  229 => 26,  226 => 25,  212 => 24,  202 => 19,  198 => 18,  195 => 17,  182 => 16,  169 => 13,  156 => 12,  146 => 7,  142 => 6,  137 => 4,  132 => 3,  116 => 2,  110 => 377,  107 => 361,  104 => 349,  101 => 330,  98 => 316,  95 => 302,  92 => 288,  89 => 274,  86 => 194,  83 => 182,  80 => 170,  77 => 151,  74 => 141,  71 => 131,  68 => 121,  65 => 93,  62 => 75,  59 => 59,  56 => 49,  53 => 37,  50 => 31,  47 => 23,  44 => 15,  41 => 11,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "forms.twig", "/var/www/xibo/views/forms.twig");
    }
}
