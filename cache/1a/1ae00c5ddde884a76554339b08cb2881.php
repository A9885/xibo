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

/* globalTranslations.twig */
class __TwigTemplate_944f74ed0d74088fb70a35bf21f259f6 extends Template
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
    var translations = ";
        // line 3
        yield ($context["translations"] ?? null);
        yield ";
    ";
        // line 5
        yield "    translations.withselected = \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("With Selected"), "js", null, true);
        yield "\";
    translations.selectAll = \"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select All"), "js", null, true);
        yield "\";
    translations.multiselect = \"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Multiple Items Selected"), "js", null, true);
        yield "\";
    translations.indeterminate = \"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Indeterminate State"), "js", null, true);
        yield "\";
    translations.multiselectNoItemsMessage = \"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Sorry, no items have been selected."), "js", null, true);
        yield "\";
    translations.multiselectMessage = \"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Caution, you have selected %1 items. Clicking save will run the %2 transaction on all these items."), "js", null, true);
        yield "\";
    translations.validExtensions = \"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Valid extensions are %s"), "js", null, true);
        yield "\";
    translations.save = \"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save"), "js", null, true);
        yield "\";
    translations.cancel = \"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Cancel"), "js", null, true);
        yield "\";
    translations.close = \"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close"), "js", null, true);
        yield "\";
    translations.success = \"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Success"), "js", null, true);
        yield "\";
    translations.failure = \"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Failure"), "js", null, true);
        yield "\";
    translations.enterText = \"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Enter text..."), "js", null, true);
        yield "\";
    translations.rowMenu = \"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Row Menu"), "js", null, true);
        yield "\";
    translations.noDataMessage = \"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No Data returned from the source"), "js", null, true);
        yield "\";
    translations.statusPending = \"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Status Pending"), "js", null, true);
        yield "\";
    translations.duplicate = \"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Duplicate"), "js", null, true);
        yield "\";
    translations.deleteRecurring = \"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete from Schedule"), "js", null, true);
        yield "\";
    translations.spacesWarning = \"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Warning - starts with or ends with a space, or contains double spaces"), "js", null, true);
        yield "\";
    translations.done = \"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Done"), "js", null, true);
        yield "\";
    translations.freeTextCommand = \"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Free Text"), "js", null, true);
        yield "\";
    translations.editTags = \"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit Tags"), "js", null, true);
        yield "\";
    translations.tagInputValueHelpText = \"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Provide an optional Value for this Tag. If no Value is required, this field can be left blank"), "js", null, true);
        yield "\";
    translations.tagInputValueRequiredHelpText = \"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Please provide the value for this Tag and confirm by pressing enter on your keyboard."), "js", null, true);
        yield "\";
    translations.videoImageCoverHelpText = \"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Before Uploading, scroll through the progress bar or play and pause to select a still to be used as the video file thumbnail."), "js", null, true);
        yield "\";
    translations.canOnlyUploadMax = \"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("You can only upload a maximum of %s files."), "js", null, true);
        yield "\";
    translations.folderTreeCreate = \"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Create"), "js", null, true);
        yield "\";
    translations.folderTreeEdit = \"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Rename"), "js", null, true);
        yield "\";
    translations.folderTreeDelete = \"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Remove"), "js", null, true);
        yield "\";
    translations.folderTreeShare = \"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Share"), "js", null, true);
        yield "\";
    translations.folderTreeSetAsHome = \"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Set as Home"), "js", null, true);
        yield "\";
    translations.folderTreeError = \"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Cannot modify root folder."), "js", null, true);
        yield "\";
    translations.folderWithContent = \"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Cannot remove Folder with content"), "js", null, true);
        yield "\";
    translations.folderNew = \"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("New Folder"), "js", null, true);
        yield "\";
    translations.folderTreeMove = \"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Move Folder"), "js", null, true);
        yield "\";
    translations.folderRootTitle = \"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Right click a Folder for further Options"), "js", null, true);
        yield "\";
    translations.dayPartExceptionErrorMessage = \"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("You already set an exception for this day."), "js", null, true);
        yield "\";
    translations.online = \"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Online"), "js", null, true);
        yield "\";
    translations.offline = \"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Offline"), "js", null, true);
        yield "\";
    translations.upToDate = \"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Up to date"), "js", null, true);
        yield "\";
    translations.notUpToDate = \"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Not up to date"), "js", null, true);
        yield "\";
    translations.publishedStatusFuture = \"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Publishing"), "js", null, true);
        yield "\";
    translations.publishedStatusFailed = \"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Publish failed."), "js", null, true);
        yield "\";
    translations.defaultSorting = \"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Default Sorting"), "js", null, true);
        yield "\";
    translations.unlimited = \"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Unlimited"), "js", null, true);
        yield "\";
    translations.imagePixelSizeTooLarge = \"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Warning : Image is too large and will not be displayed on the Players. Please check the allowed Resize Limit in Administration -> Settings"), "js", null, true);
        yield "\";
    translations.triggerCodeLabel = \"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Trigger Code"), "js", null, true);
        yield "\"
    translations.triggerCodeHelpText = \"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Enter the code associated with the web hook you wish to trigger. Please note that for this action to work, the webhook trigger code has to be added to Interactive Actions in scheduled content for this Player."), "js", null, true);
        yield "\";
    translations.sendCommandLabel = \"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Command"), "js", null, true);
        yield "\"
    translations.sendCommandHelpText = \"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Pick a command to send to the Player. If the CMS has XMR enabled this will be sent immediately, otherwise it will show an error."), "js", null, true);
        yield "\";
    translations.schedule = {
        criteriaFields: {
            custom: \"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Custom"), "js", null, true);
        yield "\",
            isSet: \"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Is set"), "js", null, true);
        yield "\",
            lessThan: \"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Less than"), "js", null, true);
        yield "\",
            lessThanOrEqualTo: \"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Less than or equal to"), "js", null, true);
        yield "\",
            equalTo: \"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Equal to"), "js", null, true);
        yield "\",
            notEqualTo: \"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Not equal to"), "js", null, true);
        yield "\",
            greaterThanOrEqualTo: \"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Greater than or equal to"), "js", null, true);
        yield "\",
            greaterThan: \"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Greater than"), "js", null, true);
        yield "\",
            contains: \"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Contains"), "js", null, true);
        yield "\",
            notContains: \"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Not contains"), "js", null, true);
        yield "\",
        },
        reminder: {
            type: {
                minute: \"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Minute"), "js", null, true);
        yield "\",
                hour: \"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Hour"), "js", null, true);
        yield "\",
                day: \"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Day"), "js", null, true);
        yield "\",
                week: \"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Week"), "js", null, true);
        yield "\",
                month: \"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Month"), "js", null, true);
        yield "\",
            },
            option: {
                beforeScheduleStarts: \"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Before schedule starts"), "js", null, true);
        yield "\",
                afterScheduleStarts: \"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("After schedule starts"), "js", null, true);
        yield "\",
                beforeScheduleEnds: \"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Before schedule ends"), "js", null, true);
        yield "\",
                afterScheduleEnds: \"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("After schedule ends"), "js", null, true);
        yield "\",
            },
            notifyByEmail: \"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Notify by email?"), "js", null, true);
        yield "\",
        },
        syncEventSelector: {
            lead: \"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Lead"), "js", null, true);
        yield "\",
            mirror: \"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Mirror"), "js", null, true);
        yield "\",
            setOnAllDisplays: \"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Set The same Layout on all displays?"), "js", null, true);
        yield "\",
        },
        calendar: {
            campaigns: \"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Campaigns"), "js", null, true);
        yield "\",
            id: \"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("ID"), "js", null, true);
        yield "\",
            name: \"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Name"), "js", null, true);
        yield "\",
            cyclePlayback: \"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Cycle Playback?"), "js", null, true);
        yield "\",
            displayGroups: \"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Display Groups"), "js", null, true);
        yield "\",
            layoutName: \"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layout Name"), "js", null, true);
        yield "\",
            status: \"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Status"), "js", null, true);
        yield "\",
            fromDate: \"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("From Date"), "js", null, true);
        yield "\",
            toDate: \"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("To Date"), "js", null, true);
        yield "\",
            layoutDuration: \"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layout Duration"), "js", null, true);
        yield "\",
            shareOfVoice: \"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Share of Voice"), "js", null, true);
        yield "\",
            displayOrder: \"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Display Order"), "js", null, true);
        yield "\",
            priority: \"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Priority"), "js", null, true);
        yield "\",
            visible: \"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Visible"), "js", null, true);
        yield "\",
            layouts: \"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layouts"), "js", null, true);
        yield "\",
            eventOnDisplay: \"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__(":event scheduled on :display"), "js", null, true);
        yield "\",
            eventDescripiton: \"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Repeats every \${recurrenceDetail} \${recurrenceType}\${recurrenceTypeExtra}"), "js", null, true);
        yield "\",
            overlayLayouts: \"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Overlay Layouts"), "js", null, true);
        yield "\",
            interruptLayouts: \"";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Interrupt Layouts"), "js", null, true);
        yield "\",
            campaignLayouts: \"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Campaign Layouts"), "js", null, true);
        yield "\",
            fullscreenVideoImage: \"";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Full Screen Video/Image"), "js", null, true);
        yield "\",
            fullscreenPlaylist: \"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Full Screen Playlist"), "js", null, true);
        yield "\",
            synchronised: \"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Synchronised"), "js", null, true);
        yield "\",
            numberLayouts: \"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Number of Layouts"), "js", null, true);
        yield "\",
            layoutWontBeShown: \"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("This layout will not be shown as there are higher priority layouts scheduled at this time"), "js", null, true);
        yield "\",
            always: \"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Always"), "js", null, true);
        yield "\",
            showAllOptionsDNW: \"";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show All option does not work for this filter, one or more specific Display/Display Group need to be selected!"), "js", null, true);
        yield "\",
            noEventsForTheChosen: \"";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No events for the chosen Display/Display Group on the selected date!"), "js", null, true);
        yield "\",
            dataRequestFailed: \"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Data request failed!"), "js", null, true);
        yield "\",
            schedule: \"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Schedule"), "js", null, true);
        yield "\",
            numberOfEvents: \"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Number of events"), "js", null, true);
        yield "\",
            agenda: \"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Agenda"), "js", null, true);
        yield "\",
            agendaView: \"";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Agenda View"), "js", null, true);
        yield "\",
            closeAgendaView: \"";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close"), "js", null, true);
        yield "\",
            openDateFormat: \"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("HH:mm on D MMMM YYYY"), "js", null, true);
        yield "\",
            custom: \"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("From :from to :to"), "js", null, true);
        yield "\",
            customFromTo: \"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("From :from to :to"), "js", null, true);
        yield "\",
            customBefore: \"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Before :to"), "js", null, true);
        yield "\",
            customAfter: \"";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("After :from"), "js", null, true);
        yield "\",
            customFromToAlways: \"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Always"), "js", null, true);
        yield "\",
            weekTitle: \"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Week {0} of {1}"), "js", null, true);
        yield "\",
            agendaFilters: {
                showTimeLineLabel: \"";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Use specific point in time?"), "js", null, true);
        yield "\",
                geoMap: \"";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Map"), "js", null, true);
        yield "\",
                geoGetBrowserLocation: \"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Get browser location!"), "js", null, true);
        yield "\",
                geoClearCoord: \"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Clear coordinates!"), "js", null, true);
        yield "\",
                geoLongitude: \"";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Longitude"), "js", null, true);
        yield "\",
                geoLatitude: \"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Latitude"), "js", null, true);
        yield "\",
            },
        },
        stepWizard: {
            next: \"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Next"), "js", null, true);
        yield "\",
            save: \"";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save"), "js", null, true);
        yield "\",
            finish: \"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Finish"), "js", null, true);
        yield "\",
            previous: \"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Previous"), "js", null, true);
        yield "\",
            error: {
                layout: \"";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Please select a Campaign/Layout for this event"), "js", null, true);
        yield "\",
                playlist: \"";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Please select a Playlist for this event"), "js", null, true);
        yield "\",
                videoImage: \"";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Please select a Video/Image for this event"), "js", null, true);
        yield "\",
                command: \"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Please select a Command for this event"), "js", null, true);
        yield "\",
                actionTriggerCode: \"";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Please select a Action trigger code for this event"), "js", null, true);
        yield "\",
                actionLayoutCode: \"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Please select a Layout code for this event"), "js", null, true);
        yield "\",
                actionCommand: \"";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Please select a Command for this event"), "js", null, true);
        yield "\",
                layoutCode: \"";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Please select a Layout code for this event"), "js", null, true);
        yield "\",
                syncGroup: \"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Please select a Sync Group for this event"), "js", null, true);
        yield "\",
                syncGroupLayouts: \"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Please make sure to select a Layout for all Displays in this Sync Group"), "js", null, true);
        yield "\",
                dataset: \"";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Please select a DataSet for this event"), "js", null, true);
        yield "\",
                displays: \"";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No display(s) selected"), "js", null, true);
        yield "\",
                timeStart: \"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Please enter a Start Time"), "js", null, true);
        yield "\",
                timeEnd: \"";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Please enter a End Time"), "js", null, true);
        yield "\",
                relativeTime: \"";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Can not have an end time earlier than your start time"), "js", null, true);
        yield "\",
            }
        }
    };
    translations.commandInput = {
        showCommandPreview: \"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show command preview!"), "js", null, true);
        yield "\",
        invalidCommand: \"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Invalid command!"), "js", null, true);
        yield "\",
        off: \"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Off"), "js", null, true);
        yield "\",
        red: \"";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Red"), "js", null, true);
        yield "\",
        green: \"";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Green"), "js", null, true);
        yield "\",
        blue: \"";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Blue"), "js", null, true);
        yield "\",
        white: \"";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("White"), "js", null, true);
        yield "\",
        name: \"";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Name"), "js", null, true);
        yield "\",
        key: \"";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Key"), "js", null, true);
        yield "\",
        value: \"";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Value"), "js", null, true);
        yield "\",
        type: \"";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Type"), "js", null, true);
        yield "\",
        intent: \"";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Intent"), "js", null, true);
        yield "\",
        extra: \"";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Extra"), "js", null, true);
        yield "\",
        deviceNameCOM: \"";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Device Name/COM"), "js", null, true);
        yield "\",
        baudRate: \"";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Baud Rate"), "js", null, true);
        yield "\",
        dateBits: \"";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Data Bits"), "js", null, true);
        yield "\",
        parity: \"";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Parity"), "js", null, true);
        yield "\",
        stopBits: \"";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Stop Bits"), "js", null, true);
        yield "\",
        handshake: \"";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Handshake"), "js", null, true);
        yield "\",
        hexSupport: \"";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("HexSupport"), "js", null, true);
        yield "\",
        command: \"";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Command"), "js", null, true);
        yield "\",
        url: \"";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("URL"), "js", null, true);
        yield "\",
        queryParamBuilder: \"";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Query params builder"), "js", null, true);
        yield "\",
        queryBuilder: \"";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Query builder"), "js", null, true);
        yield "\",
        queryParams: \"";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Query params"), "js", null, true);
        yield "\",
        requestMethod: \"";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Request method"), "js", null, true);
        yield "\",
        showRawHeaders: \"";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show raw headers"), "js", null, true);
        yield "\",
        headers: \"";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Headers"), "js", null, true);
        yield "\",
        contentType: \"";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Content Type"), "js", null, true);
        yield "\",
        showRawBodyData: \"";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show raw body data"), "js", null, true);
        yield "\",
        showRawData: \"";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show raw data"), "js", null, true);
        yield "\",
        bodyData: \"";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Body data"), "js", null, true);
        yield "\",
    };
    translations.multiSelectTagEditForm = {
        newTags: \"";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("New tags"), "js", null, true);
        yield "\",
        newTagsHelp: \"";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("A comma separated list of tags to add to the selected elements."), "js", null, true);
        yield "\",
        tagValue: \"";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Tag value"), "js", null, true);
        yield "\",
        tagValueHelp: \"";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Provide an optional Value for this Tag. If no Value is required, this field can be left blank."), "js", null, true);
        yield "\",
        tagValueRequired: \"";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("This tag requires a set value, please select one from the Tag value dropdown or provide Tag value in the dedicated field."), "js", null, true);
        yield "\",
        existingTags: \"";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Existing tags"), "js", null, true);
        yield "\",
        existingTagsHelp: \"";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Remove tags from the list to remove them from elements that contain them."), "js", null, true);
        yield "\",
    };
    translations.clearFilters = \"";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Clear Filters"), "js", null, true);
        yield "\";
    translations.folderTree = {
        selectFolder: \"";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select Folder"), "js", null, true);
        yield "\",
        search: \"";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search"), "js", null, true);
        yield "\",
        noFolderMatch: \"";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No Folders matching the search term"), "js", null, true);
        yield "\",
        done: \"";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Done"), "js", null, true);
        yield "\",
    };
    translations.autoSubmitField = {
        label: \"";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Automatically submit this form?"), "js", null, true);
        yield "\",
        helpText: \"";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("When enabled, this form will automatically submit in future. Reset this in your User Profile."), "js", null, true);
        yield "\",
    };
    translations.miniPlayer = {
        play: \"";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Play Preview"), "js", null, true);
        yield "\",
        close: \"";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close Preview"), "js", null, true);
        yield "\",
        changeSize: \"";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Change window size"), "js", null, true);
        yield "\",
        newWindow: \"";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Preview in new window"), "js", null, true);
        yield "\",
    };
    translations.helpPane = {
        helpCentre: \"";
        // line 225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Help Centre"), "js", null, true);
        yield "\",
        guides: \"";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Guides"), "js", null, true);
        yield "\",
        resources: \"";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Resources"), "js", null, true);
        yield "\",
        visitManual: \"";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Visit the user manual"), "js", null, true);
        yield "\",
        welcomeCardTitle: \"";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Introduction to "), "js", null, true);
        yield "\",
        welcomeCardDesc: \"";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Get to know your CMS"), "js", null, true);
        yield "\",
        feedbackCardTitle: \"";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Feedback"), "js", null, true);
        yield "\",
        feedbackCardDesc: \"";
        // line 232
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Help us improve"), "js", null, true);
        yield "\",
        communityCardTitle: \"";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Community"), "js", null, true);
        yield "\",
        communityCardDesc: \"";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Connect and Grow"), "js", null, true);
        yield "\",
        trainingCardTitle: \"";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Training"), "js", null, true);
        yield "\",
        trainingCardDesc: \"";
        // line 236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Access guides and tutorials"), "js", null, true);
        yield "\",
        feedbackHeader: \"";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Feedback"), "js", null, true);
        yield "\",
        endPanelMessage: \"";
        // line 238
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Thank you for leaving your feedback!"), "js", null, true);
        yield "\",
        form: {
            privacyNotice: \"";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The feedback you provide, along with your name and email address are used by Xibo to improve our products and services."), "js", null, true);
        yield "\",
            title: \"";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("We’d love to hear your thoughts"), "js", null, true);
        yield "\",
            name: \"";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Name"), "js", null, true);
        yield "\",
            email: \"";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Email"), "js", null, true);
        yield "\",
            comments: \"";
        // line 244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Comments and recommendations"), "js", null, true);
        yield "\",
            attachments: \"";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Attachments (optional)"), "js", null, true);
        yield "\",
            uploadPlaceholder1: \"";
        // line 246
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Drag and drop files or"), "js", null, true);
        yield "\",
            uploadPlaceholder2: \"";
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Browse files"), "js", null, true);
        yield "\",
            fileTypes: \"";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("File types: .jpg, .png, .mov and .pdf"), "js", null, true);
        yield "\",
            maxSize: \"";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Max size: 15MB"), "js", null, true);
        yield "\",
            sendFeedback: \"";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Send feedback"), "js", null, true);
        yield "\",
            maxUploadsMessage1: \"";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Maximum file upload of 3 files."), "js", null, true);
        yield "\",
            maxUploadsMessage2: \"";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Remove one to add more."), "js", null, true);
        yield "\",
            video: \"";
        // line 253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Video"), "js", null, true);
        yield "\",
            pdf: \"";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("PDF"), "js", null, true);
        yield "\",
            image: \"";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Image"), "js", null, true);
        yield "\",
            reportingAnIssue: \"";
        // line 256
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Reporting an issue?"), "js", null, true);
        yield "\",
            errors: {
                name: \"";
        // line 258
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Please provide a valid name"), "js", null, true);
        yield "\",
                email: \"";
        // line 259
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Please provide a valid email"), "js", null, true);
        yield "\",
                comments: \"";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Please provide any comment or recommendation"), "js", null, true);
        yield "\",
                form: \"";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Please fill all required fields"), "js", null, true);
        yield "\",
                request: \"";
        // line 262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Something went wrong. Please try again"), "js", null, true);
        yield "\",
                maxFiles: \"";
        // line 263
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Maximum file number exceeded"), "js", null, true);
        yield "\",
                invalidFileType: \"";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Invalid file type"), "js", null, true);
        yield "\",
                fileTooLarge: \"";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("File too large"), "js", null, true);
        yield "\",
            },
        },
    };

    var dataTablesLanguage = {
        \"decimal\":        \"\",
        \"emptyTable\":     \"";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No data available in table"), "js", null, true);
        yield "\",
        \"info\":           \"";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Showing _START_ to _END_ of _TOTAL_ entries"), "js", null, true);
        yield "\",
        \"infoEmpty\":      \"";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Showing 0 to 0 of 0 entries"), "js", null, true);
        yield "\",
        \"infoFiltered\":   \"";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("(filtered from _MAX_ total entries)"), "js", null, true);
        yield "\",
        \"infoPostFix\":    \"\",
        \"thousands\":      \",\",
        \"lengthMenu\":     \"";
        // line 278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show _MENU_ entries"), "js", null, true);
        yield "\",
        \"loadingRecords\": \"";
        // line 279
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Loading..."), "js", null, true);
        yield "\",
        \"processing\":     \"";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Processing..."), "js", null, true);
        yield "\",
        \"search\":         \"";
        // line 281
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search:"), "js", null, true);
        yield "\",
        \"zeroRecords\":    \"";
        // line 282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No matching records found"), "js", null, true);
        yield "\",
        \"paginate\": {
            \"first\":      \"";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("First"), "js", null, true);
        yield "\",
            \"last\":       \"";
        // line 285
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Last"), "js", null, true);
        yield "\",
            \"next\":       \"";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Next"), "js", null, true);
        yield "\",
            \"previous\":   \"";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Previous"), "js", null, true);
        yield "\"
        },
        \"aria\": {
            \"sortAscending\":  \"";
        // line 290
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__(": activate to sort column ascending"), "js", null, true);
        yield "\",
            \"sortDescending\": \"";
        // line 291
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__(": activate to sort column descending"), "js", null, true);
        yield "\"
        },
        \"buttons\": {
            \"colvis\":  \"";
        // line 294
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Column visibility"), "js", null, true);
        yield "\",
            \"print\": \"";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Print"), "js", null, true);
        yield "\"
        }
    };
    ";
        // line 299
        yield "</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "globalTranslations.twig";
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
        return array (  1076 => 299,  1070 => 295,  1066 => 294,  1060 => 291,  1056 => 290,  1050 => 287,  1046 => 286,  1042 => 285,  1038 => 284,  1033 => 282,  1029 => 281,  1025 => 280,  1021 => 279,  1017 => 278,  1011 => 275,  1007 => 274,  1003 => 273,  999 => 272,  989 => 265,  985 => 264,  981 => 263,  977 => 262,  973 => 261,  969 => 260,  965 => 259,  961 => 258,  956 => 256,  952 => 255,  948 => 254,  944 => 253,  940 => 252,  936 => 251,  932 => 250,  928 => 249,  924 => 248,  920 => 247,  916 => 246,  912 => 245,  908 => 244,  904 => 243,  900 => 242,  896 => 241,  892 => 240,  887 => 238,  883 => 237,  879 => 236,  875 => 235,  871 => 234,  867 => 233,  863 => 232,  859 => 231,  855 => 230,  851 => 229,  847 => 228,  843 => 227,  839 => 226,  835 => 225,  829 => 222,  825 => 221,  821 => 220,  817 => 219,  811 => 216,  807 => 215,  801 => 212,  797 => 211,  793 => 210,  789 => 209,  784 => 207,  779 => 205,  775 => 204,  771 => 203,  767 => 202,  763 => 201,  759 => 200,  755 => 199,  749 => 196,  745 => 195,  741 => 194,  737 => 193,  733 => 192,  729 => 191,  725 => 190,  721 => 189,  717 => 188,  713 => 187,  709 => 186,  705 => 185,  701 => 184,  697 => 183,  693 => 182,  689 => 181,  685 => 180,  681 => 179,  677 => 178,  673 => 177,  669 => 176,  665 => 175,  661 => 174,  657 => 173,  653 => 172,  649 => 171,  645 => 170,  641 => 169,  637 => 168,  633 => 167,  629 => 166,  625 => 165,  617 => 160,  613 => 159,  609 => 158,  605 => 157,  601 => 156,  597 => 155,  593 => 154,  589 => 153,  585 => 152,  581 => 151,  577 => 150,  573 => 149,  569 => 148,  565 => 147,  561 => 146,  556 => 144,  552 => 143,  548 => 142,  544 => 141,  537 => 137,  533 => 136,  529 => 135,  525 => 134,  521 => 133,  517 => 132,  512 => 130,  508 => 129,  504 => 128,  500 => 127,  496 => 126,  492 => 125,  488 => 124,  484 => 123,  480 => 122,  476 => 121,  472 => 120,  468 => 119,  464 => 118,  460 => 117,  456 => 116,  452 => 115,  448 => 114,  444 => 113,  440 => 112,  436 => 111,  432 => 110,  428 => 109,  424 => 108,  420 => 107,  416 => 106,  412 => 105,  408 => 104,  404 => 103,  400 => 102,  396 => 101,  392 => 100,  388 => 99,  384 => 98,  380 => 97,  376 => 96,  372 => 95,  368 => 94,  364 => 93,  360 => 92,  356 => 91,  352 => 90,  346 => 87,  342 => 86,  338 => 85,  332 => 82,  327 => 80,  323 => 79,  319 => 78,  315 => 77,  309 => 74,  305 => 73,  301 => 72,  297 => 71,  293 => 70,  286 => 66,  282 => 65,  278 => 64,  274 => 63,  270 => 62,  266 => 61,  262 => 60,  258 => 59,  254 => 58,  250 => 57,  244 => 54,  240 => 53,  236 => 52,  232 => 51,  228 => 50,  224 => 49,  220 => 48,  216 => 47,  212 => 46,  208 => 45,  204 => 44,  200 => 43,  196 => 42,  192 => 41,  188 => 40,  184 => 39,  180 => 38,  176 => 37,  172 => 36,  168 => 35,  164 => 34,  160 => 33,  156 => 32,  152 => 31,  148 => 30,  144 => 29,  140 => 28,  136 => 27,  132 => 26,  128 => 25,  124 => 24,  120 => 23,  116 => 22,  112 => 21,  108 => 20,  104 => 19,  100 => 18,  96 => 17,  92 => 16,  88 => 15,  84 => 14,  80 => 13,  76 => 12,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  47 => 5,  43 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "globalTranslations.twig", "/var/www/xibo/views/globalTranslations.twig");
    }
}
