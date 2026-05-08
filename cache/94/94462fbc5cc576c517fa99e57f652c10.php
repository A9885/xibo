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

/* editorTranslations.twig */
class __TwigTemplate_baf64ea5790c618583090a605bd27473 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javaScript' => [$this, 'block_javaScript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        yield from $this->unwrap()->yieldBlock('javaScript', $context, $blocks);
        return; yield '';
    }

    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    <script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
        ";
        // line 8
        yield "            var editorsTrans = {
                deleteTitle: \"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete %obj%"), "js", null, true);
        yield "\",
                onbeforeunload: \"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Changes that you have made may not be saved!"), "js", null, true);
        yield "\",
                minDimensionsMessageHeader: \"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Content editing works best with a higher resolution"), "js", null, true);
        yield "\",
                minDimensionsMessageBody: \"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Please resize your window to at least 1200 pixels by 600 pixels, or reduce your zoom level, for the best experience"), "js", null, true);
        yield "\",
                minDimensionsMessageHide: \"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Hide message and go back to editing"), "js", null, true);
        yield "\",
                yes: \"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Yes"), "js", null, true);
        yield "\",
                no: \"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No"), "js", null, true);
        yield "\",
                selectAll: \"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select All"), "js", null, true);
        yield "\",
                back: \"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Back"), "js", null, true);
        yield "\",
                delete: \"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete"), "js", null, true);
        yield "\",
                loadPropertyForObject: \"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Load %prop% for %obj%"), "js", null, true);
        yield "\",
                loading: \"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Loading"), "js", null, true);
        yield "\",
                retire: \"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Retire"), "js", null, true);
        yield "\",
                publish: \"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Publish"), "js", null, true);
        yield "\",
                discard: \"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Discard"), "js", null, true);
        yield "\",
                copyToClipboard: \"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Copy to Clipboard"), "js", null, true);
        yield "\",
                viewSource: \"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("View Source Code"), "js", null, true);
        yield "\",
                detachEditor: \"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Detach Editor"), "js", null, true);
        yield "\",
                attachEditor: \"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Attach Editor"), "js", null, true);
        yield "\",
                scaleToContainer: \"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Scale to view"), "js", null, true);
        yield "\",
                scaleToWidth: \"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Scale to width"), "js", null, true);
        yield "\",
                scaleToHeight: \"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Scale to height"), "js", null, true);
        yield "\",
                zoomInEditor: \"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Zoom in"), "js", null, true);
        yield "\",
                zoomOutEditor: \"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Zoom out"), "js", null, true);
        yield "\",
                couldNotCopy: \"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Could not copy"), "js", null, true);
        yield "\",
                copied: \"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Copied!"), "js", null, true);
        yield "\",
                invalidModule:  \"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("This widget isn't enabled and can't be configured, please contact your administrator for help."), "js", null, true);
        yield "\",
                timeline: \"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Timeline"), "js", null, true);
        yield "\",
                actions: {
                    layouts:  \"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layouts"), "js", null, true);
        yield "\",
                    regions: \"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Zones"), "js", null, true);
        yield "\",
                    widgets: \"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Widgets"), "js", null, true);
        yield "\",
                    playlists: \"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Playlists"), "js", null, true);
        yield "\",
                    elements: \"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Elements"), "js", null, true);
        yield "\",
                    elementGroups: \"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Element Groups"), "js", null, true);
        yield "\",
                    deleteWidget: \"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete"), "js", null, true);
        yield "\",
                    currentLayout: \"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Current Layout"), "js", null, true);
        yield "\",
                    searchforLayouts: \"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search for Layouts"), "js", null, true);
        yield "\",
                    searchforLayoutsHelpText: \"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search for Layouts by the Code Identifier. Layouts must have a Code Identifier set in the Layout Edit form before creating a Navigate to Layout Action Type."), "js", null, true);
        yield "\",
                    searchforALayout: \"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search for Layouts by Code"), "js", null, true);
        yield "\",
                    noResults: \"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No results"), "js", null, true);
        yield "\",
                    removeFromRecents: \"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Remove Layout from recents"), "js", null, true);
        yield "\",
                    more: \"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show more"), "js", null, true);
        yield "\",
                    deleteModal: {
                        title: \"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete Action"), "js", null, true);
        yield "\",
                        message: \"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Are you sure you want to delete this action?"), "js", null, true);
        yield "\",
                        buttons: {
                            cancel: \"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Cancel"), "js", null, true);
        yield "\",
                            delete: \"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete"), "js", null, true);
        yield "\"
                        },
                    },
                },
                layoutTemplateReplace: {
                    title: \"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Replace Layout"), "js", null, true);
        yield "\",
                    message: \"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Are you sure you want to replace your Layout with a template?"), "js", null, true);
        yield "\",
                    buttons: {
                        cancel: \"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Cancel"), "js", null, true);
        yield "\",
                        delete: \"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Replace"), "js", null, true);
        yield "\"
                    },
                },
                selectWidgetFromCanvasModal: {
                    title: \"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select widget or create a new one"), "js", null, true);
        yield "\",
                    createNew: \"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Create new"), "js", null, true);
        yield "\",
                    name: \"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Name"), "js", null, true);
        yield "\",
                    type: \"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Type"), "js", null, true);
        yield "\",
                    numEl: \"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("# of elements"), "js", null, true);
        yield "\",
                    numElGr: \"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("# of element groups"), "js", null, true);
        yield "\",
                },
                exit: \"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Exit"), "js", null, true);
        yield "\",
                convertPlaylistSuccess: \"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Playlist converted to global!"), "js", null, true);
        yield "\",
            };

            var uploadTrans = {
                uploadMessage: \"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Upload media"), "js", null, true);
        yield "\",
                addFiles: \"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add files"), "js", null, true);
        yield "\",
                startUpload: \"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Start upload"), "js", null, true);
        yield "\",
                cancelUpload: \"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Cancel upload"), "js", null, true);
        yield "\",
                processing: \"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Processing..."), "js", null, true);
        yield "\",
                widgetFromDt: \"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Start time"), "js", null, true);
        yield "\",
                widgetToDt: \"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("End time"), "js", null, true);
        yield "\",
                widgetExpiryDates: \"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Set Expiry Dates"), "js", null, true);
        yield "\",
                widgetExpiryDatesMessage: \"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Use the check box to set Start and End dates/times for media files and use the Start Upload button to apply to all files or the row upload button to upload individually."), "js", null, true);
        yield "\",
                widgetFromDtMessage: \"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select the start time for this widget"), "js", null, true);
        yield "\",
                widgetToDtMessage: \"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select the end time for this widget"), "js", null, true);
        yield "\",
                deleteOnExpiry: \"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete on Expiry"), "js", null, true);
        yield "\",
                deleteOnExpiryMessage: \"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("When the End Time for this Widget passes should the Widget be removed from the Playlist?"), "js", null, true);
        yield "\",
                applyToMedia: \"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete from Library"), "js", null, true);
        yield "\",
                applyToMediaMessage: \"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Remove file from the Media Library"), "js", null, true);
        yield "\",
                selectFolder: \"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select Folder"), "js", null, true);
        yield "\",
                selectFolderTitle: \"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Change Current Folder location"), "js", null, true);
        yield "\",
                selectedFolder: \"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Current Folder"), "js", null, true);
        yield ":\",
                selectedFolderTitle: \"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Upload files to this Folder"), "js", null, true);
        yield ":\"
            };

            var contextMenuTrans = {
                editAudio: \"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit Attached Audio"), "js", null, true);
        yield "\",
                editExpiry: \"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit Expiry Dates"), "js", null, true);
        yield "\",
                editTransIn: \"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit Transition In"), "js", null, true);
        yield "\",
                editTransOut: \"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit Transition Out"), "js", null, true);
        yield "\",
                editPermissions: \"";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit Sharing"), "js", null, true);
        yield "\",
                editPlaylistPermissions: \"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit Playlist Sharing"), "js", null, true);
        yield "\",
                editWidgetPermissions: \"";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit Widget Sharing"), "js", null, true);
        yield "\",
                editPlaylist: \"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit Playlist"), "js", null, true);
        yield "\",
                convertPlaylist: \"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Convert Playlist"), "js", null, true);
        yield "\",
                convertPlaylistHelpText: \"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Convert Layout playlist into a Global playlist."), "js", null, true);
        yield "\",
                options: \"";
        // line 114
        echo __("Options");
        yield "\",
                moveLeft: \"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Move one step left"), "js", null, true);
        yield "\",
                moveRight: \"";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Move one step right"), "js", null, true);
        yield "\",
                moveTopLeft: \"";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Move to the top left"), "js", null, true);
        yield "\",
                moveTopRight: \"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Move to the top right"), "js", null, true);
        yield "\",
                bringToFront: \"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Bring to front"), "js", null, true);
        yield "\",
                bringForward: \"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Bring forward"), "js", null, true);
        yield "\",
                sendBackwards: \"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Send backwards"), "js", null, true);
        yield "\",
                sendToBack: \"";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Send to back"), "js", null, true);
        yield "\",
                delete: \"";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete"), "js", null, true);
        yield "\",
                copy: \"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Duplicate"), "js", null, true);
        yield "\",
                newConfig: \"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("New Configuration"), "js", null, true);
        yield "\",
                editText: \"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit Text"), "js", null, true);
        yield "\",
                groupElements: \"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Group elements"), "js", null, true);
        yield "\",
                ungroupElements: \"";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Ungroup elements"), "js", null, true);
        yield "\",
                addElementsToGroup: \"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add elements to group"), "js", null, true);
        yield "\",
                deleteGroupElements: \"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete all"), "js", null, true);
        yield "\",
            };

            var propertiesPanelTrans = {
                playlist: \"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Playlist"), "js", null, true);
        yield "\",
                zone: \"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Zone"), "js", null, true);
        yield "\",
                widget: \"";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Widget"), "js", null, true);
        yield "\",
                playlist: \"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Playlist"), "js", null, true);
        yield "\",
                configure: \"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Configure"), "js", null, true);
        yield "\",
                appearance: \"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Appearance"), "js", null, true);
        yield "\",
                fallback: \"";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Fallback Data"), "js", null, true);
        yield "\",
                advanced: \"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Advanced"), "js", null, true);
        yield "\",
                general: \"";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("General"), "js", null, true);
        yield "\",
                positioning: \"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Positioning"), "js", null, true);
        yield "\",
                transition: \"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Transition"), "js", null, true);
        yield "\",
                width: \"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Width"), "js", null, true);
        yield "\",
                height: \"";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Height"), "js", null, true);
        yield "\",
                widgetDimensions: \"";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Widget Dimensions"), "js", null, true);
        yield "\",
                top: \"";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Top"), "js", null, true);
        yield "\",
                left: \"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Left"), "js", null, true);
        yield "\",
                scale: \"";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Scale"), "js", null, true);
        yield "\",
                layer: \"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layer"), "js", null, true);
        yield "\",
                invalidWidget:  \"";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("This widget needs to be configured before it will be shown."), "js", null, true);
        yield "\",
                requiredElementsMessage: \"";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("This widget needs to have at least one of the following elements: %elements%."), "js", null, true);
        yield "\",
                dataSlot: \"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Data Slot"), "js", null, true);
        yield "\",
                dataSlotHelpText: \"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("When there are more than one of the same element for a widget you can set the slot for each element. For example with two of the same element you'd have data slot 1 and data slot 2. If 10 items were returned slot 1 would receive items 1,3,5,7,9 and slot 2 would receive items 2,4,6,8,10."), "js", null, true);
        yield "\",
                pinSlot: \"";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Pin this slot?"), "js", null, true);
        yield "\",
                pinSlotHelpText: \"";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The first item that appears in a slot will be pinned and will not cycle with the rest of the items."), "js", null, true);
        yield "\",
                groupScale: \"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Scale with group"), "js", null, true);
        yield "\",
                groupScaleHelpText: \"";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Scale element when scaling containing group."), "js", null, true);
        yield "\",
                groupScaleTypeH: \"";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Horizontal Align"), "js", null, true);
        yield "\",
                groupScaleTypeHHelpText: \"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Horizontal alignment when scaling the containing group."), "js", null, true);
        yield "\",
                groupScaleTypeV: \"";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Vertical Align"), "js", null, true);
        yield "\",
                groupScaleTypeVHelpText: \"";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Vertical alignment when scaling the containing group."), "js", null, true);
        yield "\",
                groupScaleTypeOptions: {
                    left: \"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Left"), "js", null, true);
        yield "\",
                    center: \"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Center"), "js", null, true);
        yield "\",
                    right: \"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Right"), "js", null, true);
        yield "\",
                    top: \"";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Top"), "js", null, true);
        yield "\",
                    middle: \"";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Middle"), "js", null, true);
        yield "\",
                    bottom: \"";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Bottom"), "js", null, true);
        yield "\",
                },
                somethingWentWrong: \"";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Something went wrong!"), "js", null, true);
        yield "\",
                somethingWentWrongEditPermissions: \"";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Selected item is not shared with you with edit permission!"), "js", null, true);
        yield "\",
                actions: {
                    notDefined: \"";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("* Not Defined"), "js", null, true);
        yield "\",
                    targetsAndSources: {
                        layout: \"";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layout"), "js", null, true);
        yield "\",
                        region: \"";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Zone"), "js", null, true);
        yield "\",
                        widget: \"";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Widget"), "js", null, true);
        yield "\",
                        screen: \"";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layout"), "js", null, true);
        yield "\",
                        playlist: \"";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Playlist"), "js", null, true);
        yield "\",
                    },
                    trigger: \"";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Trigger"), "js", null, true);
        yield "\",
                    target: \"";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Target"), "js", null, true);
        yield "\",
                    targetHelpText: \"";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("If your Widget is a Shell Command you can select to target 'Screen' to run the command without affecting any Zones. For all other Widgets select 'Zone' as target."), "js", null, true);
        yield "\",
                    touch: \"";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Touch/Click"), "js", null, true);
        yield "\",
                    webhook: \"";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Web hook"), "js", null, true);
        yield "\",
                    keyPress: \"";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Key Press"), "js", null, true);
        yield "\",
                    addAction: \"";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add an Action"), "js", null, true);
        yield "\",
                    editAction: \"";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit"), "js", null, true);
        yield "\",
                    saveAction: \"";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save"), "js", null, true);
        yield "\",
                    continueAction: \"";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Continue"), "js", null, true);
        yield "\",
                    cancelAction: \"";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Cancel"), "js", null, true);
        yield "\",
                    deleteAction: \"";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete"), "js", null, true);
        yield "\",
                    nextLayout: \"";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Next Layout"), "js", null, true);
        yield "\",
                    previousLayout: \"";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Previous Layout"), "js", null, true);
        yield "\",
                    nextWidget: \"";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Next Widget"), "js", null, true);
        yield "\",
                    previousWidget: \"";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Previous Widget"), "js", null, true);
        yield "\",
                    navLayout: \"";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Navigate to Layout"), "js", null, true);
        yield "\",
                    navWidget: \"";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Navigate to Widget"), "js", null, true);
        yield "\",
                    widgetToLoad: \"";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Widget to Load"), "js", null, true);
        yield "\",
                    widgetToLoadHelpText: \"";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Create or edit the Widget to be loaded"), "js", null, true);
        yield "\",
                    actionType: \"";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Action Type"), "js", null, true);
        yield "\",
                    triggerType: \"";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Trigger Type"), "js", null, true);
        yield "\",
                    triggerTypeHelpText: \"";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("How should the Player listen for this Action to be triggered?"), "js", null, true);
        yield "\",
                    triggerCode: \"";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Trigger Code"), "js", null, true);
        yield "\",
                    triggerCodeHelpText: \"";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("If this Action is triggered by a Web Hook then this Trigger Code must be present in the URL `trigger=` parameter."), "js", null, true);
        yield "\",
                    triggerKey: \"";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Trigger Key"), "js", null, true);
        yield "\",
                    triggerKeyHelpText: \"";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Choose the keyboard key that will act as the trigger"), "js", null, true);
        yield "\",
                    triggerTarget: \"";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Trigger"), "js", null, true);
        yield "\",
                    triggerTargetHelpText: \"";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select the target for the Trigger"), "js", null, true);
        yield "\",
                    layoutCode: \"";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layout Code"), "js", null, true);
        yield "\",
                    layoutCodeHelpText: \"";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Please enter the Code identifier for the Layout as assigned in the Add / Edit Layout form."), "js", null, true);
        yield "\",
                    createActionTargetWidget: \"";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Create Widget"), "js", null, true);
        yield "\",
                    editActionTargetWidget: \"";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit"), "js", null, true);
        yield "\",
                    deleteActionTargetWidget: \"";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete"), "js", null, true);
        yield "\",
                    createWidgetInZoneMessage: \"";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add a widget from the Toolbox to the target area!"), "js", null, true);
        yield "\",
                },
                positionTab: {
                    layer: \"";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layer"), "js", null, true);
        yield "\",
                    layerHelp: \"";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layer related to all layout objects"), "js", null, true);
        yield "\",
                    elementLayer: \"";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Element Layer"), "js", null, true);
        yield "\",
                    elementLayerHelp: \"";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layer for the element related to other elements"), "js", null, true);
        yield "\",
                    elementGroupLayer: \"";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Element Group Layer"), "js", null, true);
        yield "\",
                    elementGroupLayerHelp: \"";
        // line 225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layer for the element group related to other groups or elements without group"), "js", null, true);
        yield "\",
                    canvasLayer: \"";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Canvas Layer"), "js", null, true);
        yield "\",
                    canvasLayerHelp: \"";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layer for the canvas containing all elements"), "js", null, true);
        yield "\",
                    top: \"";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Top"), "js", null, true);
        yield "\",
                    left: \"";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Left"), "js", null, true);
        yield "\",
                    width: \"";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Width"), "js", null, true);
        yield "\",
                    height: \"";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Height"), "js", null, true);
        yield "\",
                    rotation: \"";
        // line 232
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Rotation"), "js", null, true);
        yield "\",
                    setFullscreen: \"";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Make this full screen, dimensions will be set to %layout.width% by %layout.height%."), "js", null, true);
        yield "\",
                    bringToView: \"";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Bring selected object back to the Layout view."), "js", null, true);
        yield "\",
                },
                layout: {
                    backgroundColor: \"";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Background Colour"), "js", null, true);
        yield "\",
                    backgroundColorHelpText: \"";
        // line 238
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Use the colour picker to select the background colour"), "js", null, true);
        yield "\",
                    backgroundImage: \"";
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Background Image"), "js", null, true);
        yield "\",
                    noImageSet: \"";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No Image set, add from Toolbox or Upload!"), "js", null, true);
        yield "\",
                    addBackgroundImage: \"";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add background image"), "js", null, true);
        yield "\",
                    upload: \"";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Upload"), "js", null, true);
        yield "\",
                    remove: \"";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Remove"), "js", null, true);
        yield "\",
                    resolution: \"";
        // line 244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Resolution"), "js", null, true);
        yield "\",
                    resolutionHelpText: \"";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Change the resolution"), "js", null, true);
        yield "\",
                    layer: \"";
        // line 246
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layer"), "js", null, true);
        yield "\",
                    layerHelpText: \"";
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The layering order of the background image (z-index). Advanced use only."), "js", null, true);
        yield "\",
                    autoApplyTransitions: \"";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Automatically apply Transitions?"), "js", null, true);
        yield "\",
                    autoApplyTransitionsHelpText: \"";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("When enabled, the default Transition type and duration will be applied to all widgets on this Layout."), "js", null, true);
        yield "\",
                },
                region: {
                    name: \"";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Name"), "js", null, true);
        yield "\",
                    nameHelpText: \"";
        // line 253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("An optional name for this widget"), "js", null, true);
        yield "\",
                    syncKey: \"";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Content Synchronisation Key"), "js", null, true);
        yield "\",
                    syncKeyHelpText: \"";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("If this layout is scheduled using a synchronised event, this key will be used to match with other layouts in the same event."), "js", null, true);
        yield "\",
                    loop: \"";
        // line 256
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Loop?"), "js", null, true);
        yield "\",
                    loopHelpText: \"";
        // line 257
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Enable Widget loop?"), "js", null, true);
        yield "\",
                    loopMessage1: \"";
        // line 258
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("When should the Widget Loop be enabled?"), "js", null, true);
        yield "\",
                    loopMessage2: \"";
        // line 259
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("* If the Widget is a 'fixed' item (eg Text), Loop should not be enabled."), "js", null, true);
        yield "\",
                    loopMessage3: \"";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("* If the Widget needs to update periodically (eg RSS Ticker Widget), Loop can be enabled ONLY if the Widget needs to update MORE frequently than the duration of the overall Layout."), "js", null, true);
        yield "\",
                    exitTransitionTitle: \"";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Exit Transition"), "js", null, true);
        yield "\",
                    exitTransitionHelpText: \"";
        // line 262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("What transition should be applied when this region is finished?"), "js", null, true);
        yield "\",
                    exitTransitionDurationTitle: \"";
        // line 263
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Duration"), "js", null, true);
        yield "\",
                    exitTransitionDurationHelpText: \"";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The duration for this transition, in milliseconds."), "js", null, true);
        yield "\",
                    exitTransitionDirectionTitle: \"";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Direction"), "js", null, true);
        yield "\",
                    exitTransitionDirectionHelpText: \"";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The direction for this transition. Only appropriate for transitions that move, such as Fly."), "js", null, true);
        yield "\",
                    layer: \"";
        // line 267
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layer"), "js", null, true);
        yield "\",
                    layerHelpText: \"";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The layering order of this %regionType% (z-index). Advanced use only."), "js", null, true);
        yield "\",
                    top: \"";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Top"), "js", null, true);
        yield "\",
                    topHelpText: \"";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The top position of the %regionType%"), "js", null, true);
        yield "\",
                    left: \"";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Left"), "js", null, true);
        yield "\",
                    leftHelpText: \"";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The left position of the %regionType%"), "js", null, true);
        yield "\",
                    width: \"";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Width"), "js", null, true);
        yield "\",
                    widthHelpText: \"";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The width of the %regionType%"), "js", null, true);
        yield "\",
                    height: \"";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Height"), "js", null, true);
        yield "\",
                    heightHelpText: \"";
        // line 276
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The height of the %regionType%"), "js", null, true);
        yield "\",
                    makeRegionFullScreen: \"";
        // line 277
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Make this %regionType% full screen, dimensions will be set to %layout.width% by %layout.height%."), "js", null, true);
        yield "\",
                    bringRegionToView: \"";
        // line 278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Bring selected %regionType% back to the Layout view."), "js", null, true);
        yield "\"
                },
                widget: {
                    name: \"";
        // line 281
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Configuration Name"), "js", null, true);
        yield "\",
                    nameHelpText: \"";
        // line 282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("An optional name for this widget"), "js", null, true);
        yield "\",
                    useDuration: \"";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Set a duration?"), "js", null, true);
        yield "\",
                    useDurationHelpText: \"";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select to provide a specific duration for this Widget"), "js", null, true);
        yield "\",
                    duration: \"";
        // line 285
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Duration"), "js", null, true);
        yield "\",
                    durationHelpText: \"";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The duration of the widget in seconds"), "js", null, true);
        yield "\",
                    enableStat: \"";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Enable Stats Collection?"), "js", null, true);
        yield "\",
                    enableStatHelpText: \"";
        // line 288
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Enable the collection of Proof of Play statistics for this Widget. Ensure that ‘Enable Stats Collection’ is set to ‘On’ in the Display Settings."), "js", null, true);
        yield "\",
                    enableStatOff: \"";
        // line 289
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Off"), "js", null, true);
        yield "\",
                    enableStatOn: \"";
        // line 290
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("On"), "js", null, true);
        yield "\",
                    enableStatInherit: \"";
        // line 291
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Inherit"), "js", null, true);
        yield "\",
                    isRepeatData: \"";
        // line 292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Repeat items to fill all data slots?"), "js", null, true);
        yield "\",
                    isRepeatDataHelpText: \"";
        // line 293
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Once all items have been placed in a slot, any empty slots will be filled with items from the start."), "js", null, true);
        yield "\",
                },
                effect: \"Effect\",
                effectHelpText: \"Please select the effect that will be used to transition between items.\",
                canvasWidgetControl: {
                    canvasWidgets: \"";
        // line 298
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Widget"), "js", null, true);
        yield "\",
                    canvasWidgetsHelp: \"";
        // line 299
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Widgets of the same type, change to transfer the source to a different widget."), "js", null, true);
        yield "\",
                    transferWidget: \"";
        // line 300
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Transfer"), "js", null, true);
        yield "\",
                    transferWidgetHelp: \"";
        // line 301
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Transfer the currently selected elements into a new widget!"), "js", null, true);
        yield "\",
                },
                widgetInfo: {
                    widgetName: \"";
        // line 304
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Widget Name"), "js", null, true);
        yield "\",
                },
                widgetType: \"";
        // line 306
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Widget"), "js", null, true);
        yield "\",
                elementName: \"";
        // line 307
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Element Name"), "js", null, true);
        yield "\",
                elementNameHelpText: \"";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("An optional name for this element"), "js", null, true);
        yield "\",
                elementGroupName: \"";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Element Group Name"), "js", null, true);
        yield "\",
                elementGroupNameHelpText: \"";
        // line 310
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("An optional name for this group of elements"), "js", null, true);
        yield "\",
                colorGradient: {
                    gradientColor1: \"";
        // line 312
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Color 1"), "js", null, true);
        yield "\",
                    gradientColor2: \"";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Color 2"), "js", null, true);
        yield "\",
                    gradientType: \"";
        // line 314
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Type"), "js", null, true);
        yield "\",
                    gradientTypeRadial: \"";
        // line 315
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Radial"), "js", null, true);
        yield "\",
                    gradientTypeLinear: \"";
        // line 316
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Linear"), "js", null, true);
        yield "\",
                    gradientAngle: \"";
        // line 317
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Angle"), "js", null, true);
        yield "\",
                },
                keyCapture: {
                    clickToSetKey: \"";
        // line 320
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Click to set key"), "js", null, true);
        yield "\",
                    pressAKey: \"";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Press a key..."), "js", null, true);
        yield "\",
                    codeNotAllowed: \"";
        // line 322
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__(":code is not allowed!"), "js", null, true);
        yield "\",
                    clearKey: \"";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Clear key"), "js", null, true);
        yield "\",
                },
            };

            var toolbarTrans = {
                deleteObject: \"";
        // line 328
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete selected %object%"), "js", null, true);
        yield "\",
                deleteMultipleObjects: \"";
        // line 329
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete selected objects"), "js", null, true);
        yield "\",
                changeLayout: \"";
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Change Layout"), "js", null, true);
        yield "\",
                options: \"";
        // line 331
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Options"), "js", null, true);
        yield "\",
                displayTooltipsName: \"";
        // line 332
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Tooltips?"), "js", null, true);
        yield "\",
                displayTooltipsTitle: \"";
        // line 333
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show/Hide tooltips which provide help; informational tooltips will remain."), "js", null, true);
        yield "\",
                deleteConfirmationName: \"";
        // line 334
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete confirmation?"), "js", null, true);
        yield "\",
                deleteConfirmationTitle: \"";
        // line 335
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Do we want to show confirmation modals when deleting critical Layout content?"), "js", null, true);
        yield "\",
                search: \"";
        // line 336
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search"), "js", null, true);
        yield "\",
                select: \"";
        // line 337
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select"), "js", null, true);
        yield "\",
                deselect: \"";
        // line 338
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Deselect"), "js", null, true);
        yield "\",
                duration: \"";
        // line 339
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Duration"), "js", null, true);
        yield "\",
                dynamicPlaylist: \"";
        // line 340
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Dynamic Playlist"), "js", null, true);
        yield "\",
                preview: \"";
        // line 341
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Preview media"), "js", null, true);
        yield "\",
                open: \"";
        // line 342
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Open"), "js", null, true);
        yield "\",
                addAsFavourite: \"";
        // line 343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Mark as favourite"), "js", null, true);
        yield "\",
                upload: \"";
        // line 344
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Upload new"), "js", null, true);
        yield "\",
                uploadType: \"";
        // line 345
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Upload %obj%"), "js", null, true);
        yield "\",
                newPlaylist: \"";
        // line 346
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("New Playlist"), "js", null, true);
        yield "\",
                searchFilters: {
                    search: \"";
        // line 348
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search"), "js", null, true);
        yield "\",
                    name: \"";
        // line 349
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Name"), "js", null, true);
        yield "\",
                    tag: \"";
        // line 350
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Tag"), "js", null, true);
        yield "\",
                    type: \"";
        // line 351
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Type"), "js", null, true);
        yield "\",
                    owner: \"";
        // line 352
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Owner"), "js", null, true);
        yield "\",
                    user: \"";
        // line 353
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Owner"), "js", null, true);
        yield "\",
                    orientation: \"";
        // line 354
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Orientation"), "js", null, true);
        yield "\",
                    provider: \"";
        // line 355
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Provider"), "js", null, true);
        yield "\",
                    folder: \"";
        // line 356
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Folder"), "js", null, true);
        yield "\",
                },
                searchSortBy: \"";
        // line 358
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Sort by"), "js", null, true);
        yield "\",
                searchSort: {
                    mediaId: \"";
        // line 360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Media Id"), "js", null, true);
        yield "\",
                    name: \"";
        // line 361
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Name"), "js", null, true);
        yield "\",
                    orientation: \"";
        // line 362
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Orientation"), "js", null, true);
        yield "\",
                    width: \"";
        // line 363
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Width"), "js", null, true);
        yield "\",
                    height: \"";
        // line 364
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Height"), "js", null, true);
        yield "\",
                    duration: \"";
        // line 365
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Duration"), "js", null, true);
        yield "\",
                    fileSize: \"";
        // line 366
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("File Size"), "js", null, true);
        yield "\",
                    createdDt: \"";
        // line 367
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Created Date"), "js", null, true);
        yield "\",
                    modifiedDt: \"";
        // line 368
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Modified Date"), "js", null, true);
        yield "\",
                },
                orientationValues: {
                  all: \"";
        // line 371
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("All"), "js", null, true);
        yield "\",
                  landscape: \"";
        // line 372
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Landscape"), "js", null, true);
        yield "\",
                  portrait: \"";
        // line 373
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Portrait"), "js", null, true);
        yield "\"
                },
                providerValues: {
                  both: \"";
        // line 376
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("All"), "js", null, true);
        yield "\",
                  local: \"";
        // line 377
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Local"), "js", null, true);
        yield "\",
                  remote: \"";
        // line 378
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Remote"), "js", null, true);
        yield "\"
                },
                menuItems: {
                    widgetsName: \"";
        // line 381
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Widgets"), "js", null, true);
        yield "\",
                    widgetsTitle: \"";
        // line 382
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add widgets"), "js", null, true);
        yield "\",
                    globalElementsName: \"";
        // line 383
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Global"), "js", null, true);
        yield "\",
                    globalElementsTitle: \"";
        // line 384
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Global Elements"), "js", null, true);
        yield "\",
                    imageName: \"";
        // line 385
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Image"), "js", null, true);
        yield "\",
                    imageTitle: \"";
        // line 386
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Library image search"), "js", null, true);
        yield "\",
                    audioName: \"";
        // line 387
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Audio"), "js", null, true);
        yield "\",
                    audioTitle: \"";
        // line 388
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Library audio search"), "js", null, true);
        yield "\",
                    videoName: \"";
        // line 389
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Video"), "js", null, true);
        yield "\",
                    videoTitle: \"";
        // line 390
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Library video search"), "js", null, true);
        yield "\",
                    libraryName: \"";
        // line 391
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Other"), "js", null, true);
        yield "\",
                    libraryTitle: \"";
        // line 392
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Library other media search"), "js", null, true);
        yield "\",
                    actionsName: \"";
        // line 393
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Actions"), "js", null, true);
        yield "\",
                    actionsTitle: \"";
        // line 394
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Interactive actions"), "js", null, true);
        yield "\",
                    layoutTemplateName: \"";
        // line 395
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layout Templates"), "js", null, true);
        yield "\",
                    layoutTemplateTitle: \"";
        // line 396
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search for Layout Templates"), "js", null, true);
        yield "\",
                    layoutExchangeTitle: \"";
        // line 397
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search for templates available from the %obj%."), "js", null, true);
        yield "\",
                    playlistsName: \"";
        // line 398
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Playlists"), "js", null, true);
        yield "\",
                    playlistsTitle: \"";
        // line 399
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add Playlists"), "js", null, true);
        yield "\",
                    providerTitle: \"";
        // line 400
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Provider: %obj%"), "js", null, true);
        yield "\",
                },
                window: {
                    drag: \"";
        // line 403
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Move Window"), "js", null, true);
        yield "\",
                    close: \"";
        // line 404
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close Window"), "js", null, true);
        yield "\",
                    minimise: \"";
        // line 405
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Minimise Window"), "js", null, true);
        yield "\",
                    newTab: \"";
        // line 406
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("New Tab"), "js", null, true);
        yield "\"
                },
                interactive: {
                    actions: {
                        nextLayout: \"";
        // line 410
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Next Layout"), "js", null, true);
        yield "\",
                        previousLayout: \"";
        // line 411
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Previous Layout"), "js", null, true);
        yield "\",
                        nextWidget: \"";
        // line 412
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Next Widget"), "js", null, true);
        yield "\",
                        previousWidget: \"";
        // line 413
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Previous Widget"), "js", null, true);
        yield "\",
                        navLayout: \"";
        // line 414
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Navigate to Layout"), "js", null, true);
        yield "\",
                        navWidget: \"";
        // line 415
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Navigate to Widget"), "js", null, true);
        yield "\",
                    },
                },
                widgets: \"";
        // line 418
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Widgets"), "js", null, true);
        yield "\",
                dataWidgets: \"";
        // line 419
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Data Widgets"), "js", null, true);
        yield "\",
                actions: \"";
        // line 420
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Actions"), "js", null, true);
        yield "\",
                favourites: \"";
        // line 421
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Favourites"), "js", null, true);
        yield "\",
                elements: \"";
        // line 422
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Elements"), "js", null, true);
        yield "\",
                stencils: \"";
        // line 423
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Stencils"), "js", null, true);
        yield "\",
                templates: \"";
        // line 424
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Static Templates"), "js", null, true);
        yield "\",
                closeTab: \"";
        // line 425
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close content"), "js", null, true);
        yield "\",
                noWidgetsToShow: \"";
        // line 426
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No widgets to display"), "js", null, true);
        yield "\",
                noActionsToShow: \"";
        // line 427
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No actions to display"), "js", null, true);
        yield "\",
                noTemplatesToShow: \"";
        // line 428
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No templates to display"), "js", null, true);
        yield "\",
                noMediaToShow: \"";
        // line 429
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No media to display!"), "js", null, true);
        yield "\",
                noPlaylistsToShow: \"";
        // line 430
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No playlists to display!"), "js", null, true);
        yield "\",
                showMore: \"";
        // line 431
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show more"), "js", null, true);
        yield "\",
                noShowMore: \"";
        // line 432
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No more results for this filter!"), "js", null, true);
        yield "\",
                mediaPreview: {
                    close: \"";
        // line 434
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close Preview"), "js", null, true);
        yield "\",
                    change: \"";
        // line 435
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Change window size"), "js", null, true);
        yield "\",
                    select: \"";
        // line 436
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select media to add"), "js", null, true);
        yield "\",
                    dimensions: \"";
        // line 437
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Dimensions"), "js", null, true);
        yield "\",
                    size: \"";
        // line 438
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Size"), "js", null, true);
        yield "\",
                },
                playlist: \"";
        // line 440
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Playlist"), "js", null, true);
        yield "\",
                zone: \"";
        // line 441
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Zone"), "js", null, true);
        yield "\",
                element: \"";
        // line 442
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Element"), "js", null, true);
        yield "\",
                elementGroup: \"";
        // line 443
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Element Group"), "js", null, true);
        yield "\",
                layout: \"";
        // line 444
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layout"), "js", null, true);
        yield "\",
                region: \"";
        // line 445
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Zone"), "js", null, true);
        yield "\",
                layoutTemplatesMessage: \"";
        // line 446
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Replace your Layout with a template?"), "js", null, true);
        yield "\",
                layoutExchangeTemplatesMessage: \"";
        // line 447
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Replace your Layout with a %obj% template?"), "js", null, true);
        yield "\",
                isRequired: \"";
        // line 448
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Required"), "js", null, true);
        yield "\",
                libraryTypes: {
                    image: \"";
        // line 450
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Image"), "js", null, true);
        yield "\",
                    video: \"";
        // line 451
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Video"), "js", null, true);
        yield "\",
                    audio: \"";
        // line 452
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Audio"), "js", null, true);
        yield "\",
                    flash: \"";
        // line 453
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Flash"), "js", null, true);
        yield "\",
                    htmlpackage: \"";
        // line 454
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("HTML Package"), "js", null, true);
        yield "\",
                    pdf: \"";
        // line 455
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("PDF"), "js", null, true);
        yield "\",
                    powerpoint: \"";
        // line 456
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("PowerPoint"), "js", null, true);
        yield "\",
                },
                mediaTable: {
                    mediaId: \"";
        // line 459
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("ID"), "js", null, true);
        yield "\",
                    mediaName: \"";
        // line 460
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Name"), "js", null, true);
        yield "\",
                    mediaType: \"";
        // line 461
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Type"), "js", null, true);
        yield "\",
                    mediaTags: \"";
        // line 462
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Tags"), "js", null, true);
        yield "\",
                    mediaThumb: \"";
        // line 463
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Thumbnail"), "js", null, true);
        yield "\",
                },
                placeholder: {
                    image: {
                        title: \"";
        // line 467
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Placeholder"), "js", null, true);
        yield "\",
                        description: \"";
        // line 468
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Use this item to be used as a placeholder to add images."), "js", null, true);
        yield "\",
                    }
                }
            };

            var topbarTrans = {
                name: \"";
        // line 474
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Name"), "js", null, true);
        yield "\",
                nameDetail: \"";
        // line 475
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layout name"), "js", null, true);
        yield "\",
                duration: \"";
        // line 476
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Duration"), "js", null, true);
        yield "\",
                durationDetail: \"";
        // line 477
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layout duration"), "js", null, true);
        yield "\",
                dimensions: \"";
        // line 478
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Dimensions"), "js", null, true);
        yield "\",
                dimensionsDetail: \"";
        // line 479
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layout dimensions"), "js", null, true);
        yield "\",
                layoutActions: \"";
        // line 480
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layout Actions:"), "js", null, true);
        yield "\",
                onlyMyLayouts: \"";
        // line 481
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("My Layouts?"), "js", null, true);
        yield "\",
                interactiveToggle: {
                    mode: \"";
        // line 483
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Interactive Mode"), "js", null, true);
        yield "\",
                    on: \"";
        // line 484
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("ON"), "js", null, true);
        yield "\",
                    off: \"";
        // line 485
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("OFF"), "js", null, true);
        yield "\",
                }
            };

            var historyManagerTrans = {
                revert: {
                    saveForm: \"";
        // line 491
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Revert %target% save"), "js", null, true);
        yield "\",
                    order: \"";
        // line 492
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Revert %target% order"), "js", null, true);
        yield "\",
                    transform: \"";
        // line 493
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Revert %target% transformation"), "js", null, true);
        yield "\",
                    addWidget: \"";
        // line 494
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Revert %target% creation"), "js", null, true);
        yield "\",
                    addMedia: \"";
        // line 495
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Revert %target% assignment"), "js", null, true);
        yield "\",
                    create: \"";
        // line 496
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Revert %target% creation"), "js", null, true);
        yield "\",
                    saveElements: \"";
        // line 497
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Revert %target% elements change"), "js", null, true);
        yield "\"
                },
                target: {
                    widget: \"";
        // line 500
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Widget"), "js", null, true);
        yield "\",
                    region: \"";
        // line 501
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Region"), "js", null, true);
        yield "\",
                    canvas: \"";
        // line 502
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Canvas"), "js", null, true);
        yield "\",
                    frame: \"";
        // line 503
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Frame"), "js", null, true);
        yield "\",
                    zone: \"";
        // line 504
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Zone"), "js", null, true);
        yield "\",
                    playlist: \"";
        // line 505
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Playlist"), "js", null, true);
        yield "\",
                }
            };

            var layerManagerTrans = {
                title: \"";
        // line 510
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layers"), "js", null, true);
        yield "\",
                layer: \"";
        // line 511
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layer"), "js", null, true);
        yield "\",
                canvas: \"";
        // line 512
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Canvas"), "js", null, true);
        yield "\",
                group: \"";
        // line 513
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Group"), "js", null, true);
        yield "\",
                inGroup: \"";
        // line 514
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("In %groupId%"), "js", null, true);
        yield "\",
                name: \"";
        // line 515
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Name"), "js", null, true);
        yield "\",
                template: \"";
        // line 516
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Template"), "js", null, true);
        yield "\",
                duration: \"";
        // line 517
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Duration"), "js", null, true);
        yield "\",
                emptyLayout: \"";
        // line 518
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Empty layout"), "js", null, true);
        yield "\",
                expand: \"";
        // line 519
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Expand"), "js", null, true);
        yield "\",
                shrink: \"";
        // line 520
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Shrink"), "js", null, true);
        yield "\",
                playlist: \"";
        // line 521
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Playlist"), "js", null, true);
        yield "\",
                zone: \"";
        // line 522
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Zone"), "js", null, true);
        yield "\",
                layoutBackground: \"";
        // line 523
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Layout Background"), "js", null, true);
        yield "\",
                outsideViewArea: \"";
        // line 524
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Outside View Area! Go to Position tab on Properties Panel to bring back to view."), "js", null, true);
        yield "\",
                invalidRegion: \"";
        // line 525
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Invalid Region"), "js", null, true);
        yield "\",
                invalidRegionHelp: \"";
        // line 526
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Region is invalid: Please delete it to validate the Layout!"), "js", null, true);
        yield "\",
            };

            var playlistAddFilesTrans = {
                uploadMessage: \"";
        // line 530
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Replace"), "js", null, true);
        yield "\",
                addFiles: \"";
        // line 531
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add Replacement"), "js", null, true);
        yield "\",
                startUpload: \"";
        // line 532
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Start Replace"), "js", null, true);
        yield "\",
                cancelUpload: \"";
        // line 533
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Cancel Replace"), "js", null, true);
        yield "\",
                selectFolder: \"";
        // line 534
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select Folder"), "js", null, true);
        yield "\",
                selectFolderTitle: \"";
        // line 535
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Change Current Folder location"), "js", null, true);
        yield "\",
                processing: \"";
        // line 536
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Processing..."), "js", null, true);
        yield "\",
                updateInLayouts: {
                    title: \"";
        // line 538
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Update this media in all layouts it is assigned to?"), "js", null, true);
        yield "\",
                    helpText: \"";
        // line 539
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Note: It will only be updated in layouts you have permission to edit."), "js", null, true);
        yield "\"
                },
                deleteOldRevisions: {
                    title: \"";
        // line 542
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete the old version?"), "js", null, true);
        yield "\",
                    helpText: \"";
        // line 543
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Completely remove the old version of this media item if a new file is being uploaded."), "js", null, true);
        yield "\"
                },
                widgetExpiryDates: \"";
        // line 545
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Set Expiry Dates"), "js", null, true);
        yield "\",
                widgetExpiryDatesMessage: \"";
        // line 546
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Use the check box to set Start and End dates/times for media files and use the Start Upload button to apply to all files or the row upload button to upload individually."), "js", null, true);
        yield "\",
                widgetFromDtMessage: \"";
        // line 547
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select the start time for this widget"), "js", null, true);
        yield "\",
                widgetToDtMessage: \"";
        // line 548
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select the end time for this widget"), "js", null, true);
        yield "\",
                deleteOnExpiry: \"";
        // line 549
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete on Expiry"), "js", null, true);
        yield "\",
                deleteOnExpiryMessage: \"";
        // line 550
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("When the End Time for this Widget passes should the Widget be removed from the Playlist?"), "js", null, true);
        yield "\",

            };

            var errorMessagesTrans = {
                error: \"";
        // line 555
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("ERROR"), "js", null, true);
        yield "\",
                loadingLayout: \"";
        // line 556
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("There was a problem loading the Layout!"), "js", null, true);
        yield "\",
                loadingPlaylist: \"";
        // line 557
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("There was a problem loading the Playlist!"), "js", null, true);
        yield "\",
                userSavePreferencesFailed: \"";
        // line 558
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("User save preferences failed!"), "js", null, true);
        yield "\",
                userLoadPreferencesFailed: \"";
        // line 559
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("User load preferences failed!"), "js", null, true);
        yield "\",
                libraryLoadFailed: \"";
        // line 560
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Library load failed!"), "js", null, true);
        yield "\",
                formLoadFailed: \"";
        // line 561
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Form load failed!"), "js", null, true);
        yield "\",
                convertPlaylistFailed: \"";
        // line 562
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Convert playlist failed!"), "js", null, true);
        yield "\",
                convertPlaylistNoName: \"";
        // line 563
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Playlist needs a name to be converted!"), "js", null, true);
        yield "\",
                revertFailed: \"";
        // line 564
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Revert failed: %error%"), "js", null, true);
        yield "\",
                saveOrderFailed: \"";
        // line 565
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save order failed: %error%"), "js", null, true);
        yield "\",
                deleteFailed: \"";
        // line 566
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete failed: %error%"), "js", null, true);
        yield "\",
                saveAllChangesFailed: \"";
        // line 567
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save all changes failed!"), "js", null, true);
        yield "\",
                removeAllChangesFailed: \"";
        // line 568
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Remove all changes failed!!"), "js", null, true);
        yield "\",
                importingMediaFailed: \"";
        // line 569
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Importing media failed!!"), "js", null, true);
        yield "\",
                addMediaFailed: \"";
        // line 570
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add media failed: %error%"), "js", null, true);
        yield "\",
                addModuleFailed: \"";
        // line 571
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add module failed: %error%"), "js", null, true);
        yield "\",
                createRegionFailed: \"";
        // line 572
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Create region failed: %error%"), "js", null, true);
        yield "\",
                listOrderNotChanged: \"";
        // line 573
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("List order not Changed!"), "js", null, true);
        yield "\",
                playlistOrderSave: \"";
        // line 574
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Playlist save order failed!"), "js", null, true);
        yield "\",
                getFormFailed: \"";
        // line 575
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Get form failed!"), "js", null, true);
        yield "\",
                transformRegionFailed: \"";
        // line 576
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Transform zone failed!"), "js", null, true);
        yield "\",
                previewFailed: \"";
        // line 577
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Preview failed!"), "js", null, true);
        yield "\",
                noWidgetsNeedSaving: \"";
        // line 578
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No widgets need saving!"), "js", null, true);
        yield "\",
                requiredField: \"";
        // line 579
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Missing required property %property%"), "js", null, true);
        yield "\",
                unknown: \"";
        // line 580
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Unknown Error"), "js", null, true);
        yield "\",
                invalidRegion: \"";
        // line 581
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Region is invalid: Please delete it to validate the Layout!"), "js", null, true);
        yield "\",
                failedToImportMedia: \"";
        // line 582
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Failed to import media!"), "js", null, true);
        yield "\",
                canvasWidgetNotShared: \"";
        // line 583
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("This Canvas is not shared with you with edit permission!"), "js", null, true);
        yield "\",
                getProvidersFailed: \"";
        // line 584
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Failed to load media providers!"), "js", null, true);
        yield "\",
                actionCreateFailed: \"";
        // line 585
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Failed Action creation!"), "js", null, true);
        yield "\",
                actionsGetFailed: \"";
        // line 586
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Failed to get all actions!"), "js", null, true);
        yield "\",
            };

            var widgetStatusTrans = {
                setToStart: \"";
        // line 590
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Set to start"), "js", null, true);
        yield "\",
                setToExpire: \"";
        // line 591
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Set to expire"), "js", null, true);
        yield "\",
                expired: \"";
        // line 592
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Expired"), "js", null, true);
        yield "\",
                startTime: \"";
        // line 593
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Start Time"), "js", null, true);
        yield "\",
                endTime: \"";
        // line 594
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("End Time"), "js", null, true);
        yield "\"
            };

            var datasetQueryBuilderTranslations = {
                ascTitle: \"";
        // line 598
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Ascending"), "js", null, true);
        yield "\",
                descTitle: \"";
        // line 599
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Descending"), "js", null, true);
        yield "\",
                filterOptions: [
                    {
                        id: \"starts-with\",
                        value: \"";
        // line 603
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("starts with"), "js", null, true);
        yield "\"
                    }, {
                        id: \"ends-with\",
                        value: \"";
        // line 606
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("ends with"), "js", null, true);
        yield "\"
                    }, {
                        id: \"contains\",
                        value: \"";
        // line 609
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("contains"), "js", null, true);
        yield "\"
                    }, {
                        id: \"equals\",
                        value: \"";
        // line 612
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("equals"), "js", null, true);
        yield "\"
                    }, {
                        id: \"not-starts-with\",
                        value: \"";
        // line 615
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("does not start with"), "js", null, true);
        yield "\"
                    }, {
                        id: \"not-ends-with\",
                        value: \"";
        // line 618
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("does not end with"), "js", null, true);
        yield "\"
                    }, {
                        id: \"not-contains\",
                        value: \"";
        // line 621
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("does not contain"), "js", null, true);
        yield "\"
                    }, {
                        id: \"not-equals\",
                        value: \"";
        // line 624
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("does not equal"), "js", null, true);
        yield "\"
                    }, {
                        id: \"greater-than\",
                        value: \"";
        // line 627
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("greater than"), "js", null, true);
        yield "\"
                    }, {
                        id: \"less-than\",
                        value: \"";
        // line 630
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("less than"), "js", null, true);
        yield "\"
                    }
                ],
                filterOperatorOptions: [
                    {
                        id: \"OR\",
                        value: \"";
        // line 636
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Or"), "js", null, true);
        yield "\"
                    }, {
                        id: \"AND\",
                        value: \"";
        // line 639
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("And"), "js", null, true);
        yield "\"
                    }
                ]
            };

            var playlistMixerTranslations = {
                fillTitle: \"";
        // line 645
        echo __("Fill");
        yield "\",
                fillHelpText: \"";
        // line 646
        echo __("Fill - use the first Playlist to fill any remaining Spots");
        yield "\",
                padTitle: \"";
        // line 647
        echo __("Pad");
        yield "\",
                padHelpText: \"";
        // line 648
        echo __("Pad - use the first Playlist to pad any remaining Spots");
        yield "\",
                repeatTitle: \"";
        // line 649
        echo __("Repeat");
        yield "\",
                repeatHelpText: \"";
        // line 650
        echo __("Repeat - repeat the Widgets in this Playlist until the number of Spots have been filled");
        yield "\",
                playlists: \"";
        // line 651
        echo __("Playlists");
        yield "\",
                spotsHelp: \"";
        // line 652
        echo __("How many spots would you like on this Sub-Playlist? This is used before ordering to expand or shrink the list to the specified size. Leave empty to use the count of Widgets.");
        yield "\",
                spots: \"";
        // line 653
        echo __("Spots");
        yield "\",
                spotsLengthHelp: \"";
        // line 654
        echo __("Set the duration of all Widgets in the Playlist to a specific value in seconds. Leave empty to use each Widget duration.");
        yield "\",
                spotsLength: \"";
        // line 655
        echo __("Spot Length");
        yield "\",
                spotsFillHelp: \"";
        // line 656
        echo __("If there are not enough Widgets fill all spots, how should the remaining spots be filled?");
        yield "\",
                spotsFill: \"";
        // line 657
        echo __("Spot Fill");
        yield "\",
                noPermission: \"";
        // line 658
        echo __("You do not have access to this playlist");
        yield "\",
                playlistId: \"";
        // line 659
        echo __("Playlist Id");
        yield "\",
            };

            var datasetColumnSelectorTranslations = {
                colAvailable: \"";
        // line 663
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Columns Available"), "js", null, true);
        yield "\",
                colSelected: \"";
        // line 664
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Columns Selected"), "js", null, true);
        yield "\",
            };

            var tickerTagSelectorTranslations = {
                tagsTitle: \"";
        // line 668
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Tags"), "js", null, true);
        yield "\",
                tagsHelp: \"";
        // line 669
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Drag tags to the right column so thy can be displayed on the marquee."), "js", null, true);
        yield "\",
                tagAvailable: \"";
        // line 670
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Available"), "js", null, true);
        yield "\",
                tagSelected: \"";
        // line 671
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Selected"), "js", null, true);
        yield "\",
                title: \"";
        // line 672
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Title"), "js", null, true);
        yield "\",
                summary: \"";
        // line 673
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Summary"), "js", null, true);
        yield "\",
                content: \"";
        // line 674
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Content"), "js", null, true);
        yield "\",
                author: \"";
        // line 675
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Author"), "js", null, true);
        yield "\",
                permalink: \"";
        // line 676
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Permalink"), "js", null, true);
        yield "\",
                link: \"";
        // line 677
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Link"), "js", null, true);
        yield "\",
                date: \"";
        // line 678
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Date"), "js", null, true);
        yield "\",
                publishedDate: \"";
        // line 679
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Published Date"), "js", null, true);
        yield "\",
                image: \"";
        // line 680
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Image"), "js", null, true);
        yield "\",
                form: {
                    fontFamily: \"";
        // line 682
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Font Family"), "js", null, true);
        yield "\",
                    fontColor: \"";
        // line 683
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Font Colour"), "js", null, true);
        yield "\",
                    fontSize: \"";
        // line 684
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Font Size"), "js", null, true);
        yield "\",
                    bold: \"";
        // line 685
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Bold"), "js", null, true);
        yield "\",
                    italics: \"";
        // line 686
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Italics"), "js", null, true);
        yield "\",
                    underline: \"";
        // line 687
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Underline"), "js", null, true);
        yield "\",
                    dateFormat: \"";
        // line 688
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Date Format"), "js", null, true);
        yield "\",
                    opacity: \"";
        // line 689
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Opacity"), "js", null, true);
        yield "\",
                    width: \"";
        // line 690
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Width"), "js", null, true);
        yield "\",
                    height: \"";
        // line 691
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Height"), "js", null, true);
        yield "\",
                }
            };

            var fallbackDataTrans = {
                message:  \"";
        // line 696
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Fallback data for this Data Widget can be provided below and included according to the property \"Show fallback data\". Fallback data will be shown with the same appearance as data returned from the source, and can be edited using the form below."), "js", null, true);
        yield "\",
                addNewRecord: \"";
        // line 697
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add New"), "js", null, true);
        yield "\",
                saveRecord: \"";
        // line 698
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save"), "js", null, true);
        yield "\",
                editRecord: \"";
        // line 699
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit"), "js", null, true);
        yield "\",
                deleteRecord: \"";
        // line 700
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete"), "js", null, true);
        yield "\",
                fallbackTypeTitle: \"";
        // line 701
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show fallback data"), "js", null, true);
        yield "\",
                fallbackTypeHelpText: \"";
        // line 702
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("If provided, when should we show fallback data for this Widget?"), "js", null, true);
        yield "\",
                never: \"";
        // line 703
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Never"), "js", null, true);
        yield "\",
                always: \"";
        // line 704
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Always"), "js", null, true);
        yield "\",
                empty: \"";
        // line 705
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("When no data is returned"), "js", null, true);
        yield "\",
                error: \"";
        // line 706
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("When there is an error"), "js", null, true);
        yield "\",
                noData: \"";
        // line 707
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Undefined"), "js", null, true);
        yield "\",
                invalidRecordEmpty: \"";
        // line 708
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Please fill out all least one field!"), "js", null, true);
        yield "\",
                invalidRecordRequired: \"";
        // line 709
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Please fill out all the required fields!"), "js", null, true);
        yield "\",
                requiredField: \"";
        // line 710
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Required Field!"), "js", null, true);
        yield "\",
            };

            var datasetColStyleSelectorTranslations = {
                colAvailable: \"";
        // line 714
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Columns Available"), "js", null, true);
        yield "\",
                colSelected: \"";
        // line 715
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Columns Selected"), "js", null, true);
        yield "\",
                title: \"";
        // line 716
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Title"), "js", null, true);
        yield "\",
                summary: \"";
        // line 717
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Summary"), "js", null, true);
        yield "\",
                content: \"";
        // line 718
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Content"), "js", null, true);
        yield "\",
                author: \"";
        // line 719
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Author"), "js", null, true);
        yield "\",
                permalink: \"";
        // line 720
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Permalink"), "js", null, true);
        yield "\",
                link: \"";
        // line 721
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Link"), "js", null, true);
        yield "\",
                date: \"";
        // line 722
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Date"), "js", null, true);
        yield "\",
                publishedDate: \"";
        // line 723
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Published Date"), "js", null, true);
        yield "\",
                image: \"";
        // line 724
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Image"), "js", null, true);
        yield "\",
                form: {
                    fontFamily: \"";
        // line 726
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Font Family"), "js", null, true);
        yield "\",
                    fontColor: \"";
        // line 727
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Font Colour"), "js", null, true);
        yield "\",
                    fontSize: \"";
        // line 728
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Font Size"), "js", null, true);
        yield "\",
                    bold: \"";
        // line 729
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Bold"), "js", null, true);
        yield "\",
                    italics: \"";
        // line 730
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Italics"), "js", null, true);
        yield "\",
                    underline: \"";
        // line 731
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Underline"), "js", null, true);
        yield "\",
                    dateFormat: \"";
        // line 732
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Date Format"), "js", null, true);
        yield "\",
                    opacity: \"";
        // line 733
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Opacity"), "js", null, true);
        yield "\",
                    width: \"";
        // line 734
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Width"), "js", null, true);
        yield "\",
                    height: \"";
        // line 735
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Height"), "js", null, true);
        yield "\",
                }
            };

            var menuBoardTranslations = {
                maxNumElementsPerZone: \"";
        // line 740
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("There can only be one category per zone!"), "js", null, true);
        yield "\",
            };

            var effectsTranslations = {
                all: \"";
        // line 744
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("All"), "js", null, true);
        yield "\",
                showAll: \"";
        // line 745
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show All"), "js", null, true);
        yield "\",
                showPaged: \"";
        // line 746
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show Paged"), "js", null, true);
        yield "\",
                none: \"";
        // line 747
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("None"), "js", null, true);
        yield "\",
                noTransition: \"";
        // line 748
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No Transition"), "js", null, true);
        yield "\",
                marqueeLeft: \"";
        // line 749
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Marquee Left"), "js", null, true);
        yield "\",
                marqueeRight: \"";
        // line 750
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Marquee Right"), "js", null, true);
        yield "\",
                marqueeUp: \"";
        // line 751
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Marquee Up"), "js", null, true);
        yield "\",
                marqueeDown: \"";
        // line 752
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Marquee Down"), "js", null, true);
        yield "\",
                fade: \"";
        // line 753
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Fade"), "js", null, true);
        yield "\",
                fadeout: \"";
        // line 754
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Fade Out"), "js", null, true);
        yield "\",
                scrollHorz: \"";
        // line 755
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Scroll Horizontal"), "js", null, true);
        yield "\",
                scrollVert: \"";
        // line 756
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Scroll Vertical"), "js", null, true);
        yield "\",
                flipHorz: \"";
        // line 757
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Flip Horizontal"), "js", null, true);
        yield "\",
                flipVert: \"";
        // line 758
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Flip Vertical"), "js", null, true);
        yield "\",
                shuffle: \"";
        // line 759
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Shuffle"), "js", null, true);
        yield "\",
                tileSlide: \"";
        // line 760
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Tile Slide"), "js", null, true);
        yield "\",
                tileBlind: \"";
        // line 761
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Tile Blind"), "js", null, true);
        yield "\",
            };

            var playlistEditorTrans = {
                duration: toolbarTrans.duration,
                editPlaylistTitle: \"";
        // line 766
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit Playlist - %playlistName% - "), "js", null, true);
        yield "\",
                widgetsCount: \"";
        // line 767
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Widgets count"), "js", null, true);
        yield "\",
                editingSourcePlaylist: \"";
        // line 768
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Editing source playlist %playlistName% "), "js", null, true);
        yield "\",
                zoomControls: {
                    in: \"";
        // line 770
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Zoom In"), "js", null, true);
        yield "\",
                    out: \"";
        // line 771
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Zoom Out"), "js", null, true);
        yield "\",
                    default: \"";
        // line 772
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Default zoom"), "js", null, true);
        yield "\",
                    scaleMode: \"";
        // line 773
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Change scale mode"), "js", null, true);
        yield "\",
                },
                externalPlaylistMessage: \"";
        // line 775
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Your changes will apply anywhere this Playlist is used."), "js", null, true);
        yield "\",
            };

            var deleteModalTrans = {
                playlist: {
                    title: \"";
        // line 780
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete Playlist"), "js", null, true);
        yield "\",
                    message: \"";
        // line 781
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Are you sure you want to delete a non-empty Playlist?"), "js", null, true);
        yield "\",
                },
                region: {
                    title: \"";
        // line 784
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete Region"), "js", null, true);
        yield "\",
                    message: \"";
        // line 785
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Are you sure you want to delete this region?"), "js", null, true);
        yield "\",
                },
                widget: {
                    title: \"";
        // line 788
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete Widget"), "js", null, true);
        yield "\",
                    message: \"";
        // line 789
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Are you sure you want to delete this widget?"), "js", null, true);
        yield "\",
                },
                element: {
                    title: \"";
        // line 792
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete Element"), "js", null, true);
        yield "\",
                    message: \"";
        // line 793
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Are you sure you want to delete this element? Widget will also be deleted and configuration will be lost."), "js", null, true);
        yield "\",
                },
                elementGroup: {
                    title: \"";
        // line 796
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete Element Group"), "js", null, true);
        yield "\",
                    message: \"";
        // line 797
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Are you sure you want to delete this element group? Widget will also be deleted and configuration will be lost."), "js", null, true);
        yield "\",
                },
                multiple: {
                    title: \"";
        // line 800
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete all selected objects?"), "js", null, true);
        yield "\",
                    message: \"";
        // line 801
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Are you sure you want to delete all selected objects? Widgets might also be deleted and configuration will be lost."), "js", null, true);
        yield "\",
                },
            };

            var momentLocalesTrans = {
                \"af\": \"";
        // line 806
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Afrikaans"), "js", null, true);
        yield "\",
                \"ar-dz\": \"";
        // line 807
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Arabic (Algeria)"), "js", null, true);
        yield "\",
                \"ar-kw\": \"";
        // line 808
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Arabic (Kuwait)"), "js", null, true);
        yield "\",
                \"ar-ly\": \"";
        // line 809
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Arabic (Libya)"), "js", null, true);
        yield "\",
                \"ar-ma\": \"";
        // line 810
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Arabic (Morocco)"), "js", null, true);
        yield "\",
                \"ar-sa\": \"";
        // line 811
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Arabic (Saudi Arabia)"), "js", null, true);
        yield "\",
                \"ar-tn\": \"";
        // line 812
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Arabic (Tunisia)"), "js", null, true);
        yield "\",
                \"ar\": \"";
        // line 813
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Arabic"), "js", null, true);
        yield "\",
                \"az\": \"";
        // line 814
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Azerbaijani"), "js", null, true);
        yield "\",  
                \"be\": \"";
        // line 815
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Belarusian"), "js", null, true);
        yield "\",
                \"bg\": \"";
        // line 816
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Bulgarian"), "js", null, true);
        yield "\",
                \"bm\": \"";
        // line 817
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Bambara"), "js", null, true);
        yield "\",
                \"bn-bd\": \"";
        // line 818
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Bengali (Bangladesh)"), "js", null, true);
        yield "\",
                \"bn\": \"";
        // line 819
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Bengali"), "js", null, true);
        yield "\",
                \"bo\": \"";
        // line 820
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Tibetan"), "js", null, true);
        yield "\",
                \"br\": \"";
        // line 821
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Breton"), "js", null, true);
        yield "\",
                \"bs\": \"";
        // line 822
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Bosnian"), "js", null, true);
        yield "\",    
                \"ca\": \"";
        // line 823
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Catalan"), "js", null, true);
        yield "\",
                \"cs\": \"";
        // line 824
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Czech"), "js", null, true);
        yield "\",
                \"cv\": \"";
        // line 825
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Chuvash"), "js", null, true);
        yield "\",
                \"cy\": \"";
        // line 826
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Welsh"), "js", null, true);
        yield "\",   
                \"da\": \"";
        // line 827
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Danish"), "js", null, true);
        yield "\",
                \"de-at\": \"";
        // line 828
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("German (Austria)"), "js", null, true);
        yield "\",  
                \"de-ch\": \"";
        // line 829
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("German (Switzerland)"), "js", null, true);
        yield "\",
                \"de\": \"";
        // line 830
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("German"), "js", null, true);
        yield "\",
                \"dv\": \"";
        // line 831
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Divehi"), "js", null, true);
        yield "\", 
                \"el\": \"";
        // line 832
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Greek"), "js", null, true);
        yield "\",
                \"en\": \"";
        // line 833
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("English"), "js", null, true);
        yield "\",
                \"en-au\": \"";
        // line 834
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("English (Australia)"), "js", null, true);
        yield "\",
                \"en-ca\": \"";
        // line 835
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("English (Canada)"), "js", null, true);
        yield "\",
                \"en-gb\": \"";
        // line 836
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("English (United Kingdom)"), "js", null, true);
        yield "\",
                \"en-GB\": \"";
        // line 837
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("English (United Kingdom)"), "js", null, true);
        yield "\",
                \"en-ie\": \"";
        // line 838
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("English (Ireland)"), "js", null, true);
        yield "\",
                \"en-il\": \"";
        // line 839
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("English (Israel)"), "js", null, true);
        yield "\",
                \"en-in\": \"";
        // line 840
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("English (India)"), "js", null, true);
        yield "\",
                \"en-nz\": \"";
        // line 841
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("English (New Zealand)"), "js", null, true);
        yield "\",  
                \"en-sg\": \"";
        // line 842
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("English (Singapore)"), "js", null, true);
        yield "\",  
                \"eo\": \"";
        // line 843
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Esperanto"), "js", null, true);
        yield "\",
                \"es-do\": \"";
        // line 844
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Spanish (Dominican Republic)"), "js", null, true);
        yield "\",
                \"es-mx\": \"";
        // line 845
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Spanish (Mexico)"), "js", null, true);
        yield "\", 
                \"es-us\": \"";
        // line 846
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Spanish (United States)"), "js", null, true);
        yield "\",
                \"es\": \"";
        // line 847
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Spanish"), "js", null, true);
        yield "\",
                \"et\": \"";
        // line 848
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Estonian"), "js", null, true);
        yield "\",
                \"eu\": \"";
        // line 849
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Basque"), "js", null, true);
        yield "\",    
                \"fa\": \"";
        // line 850
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Persian"), "js", null, true);
        yield "\",
                \"fi\": \"";
        // line 851
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Finnish"), "js", null, true);
        yield "\",
                \"fil\": \"";
        // line 852
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Filipino"), "js", null, true);
        yield "\",
                \"fo\": \"";
        // line 853
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Faroese"), "js", null, true);
        yield "\",
                \"fr-ca\": \"";
        // line 854
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("French (Canada)"), "js", null, true);
        yield "\",
                \"fr-ch\": \"";
        // line 855
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("French (Switzerland)"), "js", null, true);
        yield "\",
                \"fr\": \"";
        // line 856
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("French"), "js", null, true);
        yield "\",
                \"fy\": \"";
        // line 857
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Western Frisian"), "js", null, true);
        yield "\",
                \"gd\": \"";
        // line 858
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Scottish Gaelic"), "js", null, true);
        yield "\",
                \"gl\": \"";
        // line 859
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Galician"), "js", null, true);
        yield "\",
                \"gom-latn\": \"";
        // line 860
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("gom (Latin)"), "js", null, true);
        yield "\",
                \"gu\": \"";
        // line 861
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Gujarati"), "js", null, true);
        yield "\", 
                \"he\": \"";
        // line 862
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Hebrew"), "js", null, true);
        yield "\",
                \"hi\": \"";
        // line 863
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Hindi"), "js", null, true);
        yield "\",
                \"hr\": \"";
        // line 864
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Croatian"), "js", null, true);
        yield "\",
                \"hu\": \"";
        // line 865
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Hungarian"), "js", null, true);
        yield "\",
                \"hy-am\": \"";
        // line 866
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Armenian (Armenia)"), "js", null, true);
        yield "\", 
                \"id\": \"";
        // line 867
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Indonesian"), "js", null, true);
        yield "\",
                \"is\": \"";
        // line 868
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Icelandic"), "js", null, true);
        yield "\",
                \"it-ch\": \"";
        // line 869
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Italian (Switzerland)"), "js", null, true);
        yield "\",
                \"it\": \"";
        // line 870
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Italian"), "js", null, true);
        yield "\", 
                \"ja\": \"";
        // line 871
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Japanese"), "js", null, true);
        yield "\",
                \"jv\": \"";
        // line 872
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Javanese"), "js", null, true);
        yield "\", 
                \"ka\": \"";
        // line 873
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Georgian"), "js", null, true);
        yield "\",
                \"kk\": \"";
        // line 874
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Kazakh"), "js", null, true);
        yield "\",
                \"km\": \"";
        // line 875
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Khmer"), "js", null, true);
        yield "\",
                \"kn\": \"";
        // line 876
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Kannada"), "js", null, true);
        yield "\",
                \"ko\": \"";
        // line 877
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Korean"), "js", null, true);
        yield "\",
                \"ku\": \"";
        // line 878
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Kurdish"), "js", null, true);
        yield "\",
                \"ky\": \"";
        // line 879
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Kirghiz"), "js", null, true);
        yield "\", 
                \"lb\": \"";
        // line 880
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Luxembourgish"), "js", null, true);
        yield "\",
                \"lo\": \"";
        // line 881
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Lao"), "js", null, true);
        yield "\",
                \"lt\": \"";
        // line 882
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Lithuanian"), "js", null, true);
        yield "\",
                \"lv\": \"";
        // line 883
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Latvian"), "js", null, true);
        yield "\",
                \"me\": \"";
        // line 884
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Montenegrin"), "js", null, true);
        yield "\",
                \"mi\": \"";
        // line 885
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Maori"), "js", null, true);
        yield "\",
                \"mk\": \"";
        // line 886
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Macedonian"), "js", null, true);
        yield "\",
                \"ml\": \"";
        // line 887
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Malayalam"), "js", null, true);
        yield "\",
                \"mn\": \"";
        // line 888
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Mongolian"), "js", null, true);
        yield "\",
                \"mr\": \"";
        // line 889
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Marathi"), "js", null, true);
        yield "\", 
                \"ms-my\": \"";
        // line 890
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Malay (Malaysia)"), "js", null, true);
        yield "\",
                \"ms\": \"";
        // line 891
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Malay"), "js", null, true);
        yield "\",
                \"mt\": \"";
        // line 892
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Maltese"), "js", null, true);
        yield "\",
                \"my\": \"";
        // line 893
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Burmese"), "js", null, true);
        yield "\",
                \"nb\": \"";
        // line 894
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Norwegian Bokmål"), "js", null, true);
        yield "\",
                \"ne\": \"";
        // line 895
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Nepali"), "js", null, true);
        yield "\", 
                \"nl-be\": \"";
        // line 896
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Dutch (Belgium)"), "js", null, true);
        yield "\",
                \"nl\": \"";
        // line 897
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Dutch"), "js", null, true);
        yield "\",
                \"nn\": \"";
        // line 898
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Norwegian Nynorsk"), "js", null, true);
        yield "\", 
                \"pa-in\": \"";
        // line 899
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Punjabi (India)"), "js", null, true);
        yield "\", 
                \"pl\": \"";
        // line 900
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Polish"), "js", null, true);
        yield "\",
                \"pt-br\": \"";
        // line 901
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Portuguese (Brazil)"), "js", null, true);
        yield "\", 
                \"pt\": \"";
        // line 902
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Portuguese"), "js", null, true);
        yield "\", 
                \"ro\": \"";
        // line 903
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Romanian"), "js", null, true);
        yield "\",
                \"ru\": \"";
        // line 904
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Russian"), "js", null, true);
        yield "\",  
                \"sd\": \"";
        // line 905
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Sindhi"), "js", null, true);
        yield "\",
                \"se\": \"";
        // line 906
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Northern Sami"), "js", null, true);
        yield "\",
                \"si\": \"";
        // line 907
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Sinhala"), "js", null, true);
        yield "\",
                \"sk\": \"";
        // line 908
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Slovak"), "js", null, true);
        yield "\",
                \"sl\": \"";
        // line 909
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Slovenian"), "js", null, true);
        yield "\",  
                \"sq\": \"";
        // line 910
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Albanian"), "js", null, true);
        yield "\",
                \"sr-cyrl\": \"";
        // line 911
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Serbian (Cyrillic)"), "js", null, true);
        yield "\",
                \"sr\": \"";
        // line 912
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Serbian"), "js", null, true);
        yield "\",
                \"ss\": \"";
        // line 913
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Swati"), "js", null, true);
        yield "\",
                \"sv\": \"";
        // line 914
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Swedish"), "js", null, true);
        yield "\",
                \"sw\": \"";
        // line 915
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Swahili"), "js", null, true);
        yield "\",  
                \"ta\": \"";
        // line 916
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Tamil"), "js", null, true);
        yield "\",
                \"te\": \"";
        // line 917
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Telugu"), "js", null, true);
        yield "\",
                \"tet\": \"";
        // line 918
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Tetum"), "js", null, true);
        yield "\",
                \"tg\": \"";
        // line 919
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Tajik"), "js", null, true);
        yield "\",
                \"th\": \"";
        // line 920
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Thai"), "js", null, true);
        yield "\", 
                \"tk\": \"";
        // line 921
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Turkmen"), "js", null, true);
        yield "\", 
                \"tl-ph\": \"";
        // line 922
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Tagalog (Philippines)"), "js", null, true);
        yield "\",
                \"tlh\": \"";
        // line 923
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Klingon"), "js", null, true);
        yield "\",
                \"tr\": \"";
        // line 924
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Turkish"), "js", null, true);
        yield "\", 
                \"tzl\": \"";
        // line 925
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Talossan"), "js", null, true);
        yield "\", 
                \"tzm-latn\": \"";
        // line 926
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Central Atlas Tamazight (Latin)"), "js", null, true);
        yield "\",
                \"tzm\": \"";
        // line 927
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Central Atlas Tamazight"), "js", null, true);
        yield "\",   
                \"ug-cn\": \"";
        // line 928
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Uyghur (China)"), "js", null, true);
        yield "\", 
                \"uk\": \"";
        // line 929
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Ukrainian"), "js", null, true);
        yield "\", 
                \"ur\": \"";
        // line 930
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Urdu"), "js", null, true);
        yield "\",
                \"uz-latn\": \"";
        // line 931
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Uzbek (Latin)"), "js", null, true);
        yield "\",
                \"uz\": \"";
        // line 932
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Uzbek"), "js", null, true);
        yield "\",  
                \"vi\": \"";
        // line 933
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Vietnamese"), "js", null, true);
        yield "\",  
                \"x-pseudo\": \"";
        // line 934
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Pseudo"), "js", null, true);
        yield "\",  
                \"yo\": \"";
        // line 935
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Yoruba (Nigeria)"), "js", null, true);
        yield "\",  
                \"zh-cn\": \"";
        // line 936
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Chinese (China)"), "js", null, true);
        yield "\",
                \"zh-hk\": \"";
        // line 937
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Chinese (Hong Kong)"), "js", null, true);
        yield "\",  
                \"zh-mo\": \"";
        // line 938
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Chinese (Macau)"), "js", null, true);
        yield "\",
                \"zh-tw\": \"";
        // line 939
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Chinese (Taiwan)"), "js", null, true);
        yield "\",
            };
        ";
        // line 942
        yield "    </script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "editorTranslations.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  3225 => 942,  3220 => 939,  3216 => 938,  3212 => 937,  3208 => 936,  3204 => 935,  3200 => 934,  3196 => 933,  3192 => 932,  3188 => 931,  3184 => 930,  3180 => 929,  3176 => 928,  3172 => 927,  3168 => 926,  3164 => 925,  3160 => 924,  3156 => 923,  3152 => 922,  3148 => 921,  3144 => 920,  3140 => 919,  3136 => 918,  3132 => 917,  3128 => 916,  3124 => 915,  3120 => 914,  3116 => 913,  3112 => 912,  3108 => 911,  3104 => 910,  3100 => 909,  3096 => 908,  3092 => 907,  3088 => 906,  3084 => 905,  3080 => 904,  3076 => 903,  3072 => 902,  3068 => 901,  3064 => 900,  3060 => 899,  3056 => 898,  3052 => 897,  3048 => 896,  3044 => 895,  3040 => 894,  3036 => 893,  3032 => 892,  3028 => 891,  3024 => 890,  3020 => 889,  3016 => 888,  3012 => 887,  3008 => 886,  3004 => 885,  3000 => 884,  2996 => 883,  2992 => 882,  2988 => 881,  2984 => 880,  2980 => 879,  2976 => 878,  2972 => 877,  2968 => 876,  2964 => 875,  2960 => 874,  2956 => 873,  2952 => 872,  2948 => 871,  2944 => 870,  2940 => 869,  2936 => 868,  2932 => 867,  2928 => 866,  2924 => 865,  2920 => 864,  2916 => 863,  2912 => 862,  2908 => 861,  2904 => 860,  2900 => 859,  2896 => 858,  2892 => 857,  2888 => 856,  2884 => 855,  2880 => 854,  2876 => 853,  2872 => 852,  2868 => 851,  2864 => 850,  2860 => 849,  2856 => 848,  2852 => 847,  2848 => 846,  2844 => 845,  2840 => 844,  2836 => 843,  2832 => 842,  2828 => 841,  2824 => 840,  2820 => 839,  2816 => 838,  2812 => 837,  2808 => 836,  2804 => 835,  2800 => 834,  2796 => 833,  2792 => 832,  2788 => 831,  2784 => 830,  2780 => 829,  2776 => 828,  2772 => 827,  2768 => 826,  2764 => 825,  2760 => 824,  2756 => 823,  2752 => 822,  2748 => 821,  2744 => 820,  2740 => 819,  2736 => 818,  2732 => 817,  2728 => 816,  2724 => 815,  2720 => 814,  2716 => 813,  2712 => 812,  2708 => 811,  2704 => 810,  2700 => 809,  2696 => 808,  2692 => 807,  2688 => 806,  2680 => 801,  2676 => 800,  2670 => 797,  2666 => 796,  2660 => 793,  2656 => 792,  2650 => 789,  2646 => 788,  2640 => 785,  2636 => 784,  2630 => 781,  2626 => 780,  2618 => 775,  2613 => 773,  2609 => 772,  2605 => 771,  2601 => 770,  2596 => 768,  2592 => 767,  2588 => 766,  2580 => 761,  2576 => 760,  2572 => 759,  2568 => 758,  2564 => 757,  2560 => 756,  2556 => 755,  2552 => 754,  2548 => 753,  2544 => 752,  2540 => 751,  2536 => 750,  2532 => 749,  2528 => 748,  2524 => 747,  2520 => 746,  2516 => 745,  2512 => 744,  2505 => 740,  2497 => 735,  2493 => 734,  2489 => 733,  2485 => 732,  2481 => 731,  2477 => 730,  2473 => 729,  2469 => 728,  2465 => 727,  2461 => 726,  2456 => 724,  2452 => 723,  2448 => 722,  2444 => 721,  2440 => 720,  2436 => 719,  2432 => 718,  2428 => 717,  2424 => 716,  2420 => 715,  2416 => 714,  2409 => 710,  2405 => 709,  2401 => 708,  2397 => 707,  2393 => 706,  2389 => 705,  2385 => 704,  2381 => 703,  2377 => 702,  2373 => 701,  2369 => 700,  2365 => 699,  2361 => 698,  2357 => 697,  2353 => 696,  2345 => 691,  2341 => 690,  2337 => 689,  2333 => 688,  2329 => 687,  2325 => 686,  2321 => 685,  2317 => 684,  2313 => 683,  2309 => 682,  2304 => 680,  2300 => 679,  2296 => 678,  2292 => 677,  2288 => 676,  2284 => 675,  2280 => 674,  2276 => 673,  2272 => 672,  2268 => 671,  2264 => 670,  2260 => 669,  2256 => 668,  2249 => 664,  2245 => 663,  2238 => 659,  2234 => 658,  2230 => 657,  2226 => 656,  2222 => 655,  2218 => 654,  2214 => 653,  2210 => 652,  2206 => 651,  2202 => 650,  2198 => 649,  2194 => 648,  2190 => 647,  2186 => 646,  2182 => 645,  2173 => 639,  2167 => 636,  2158 => 630,  2152 => 627,  2146 => 624,  2140 => 621,  2134 => 618,  2128 => 615,  2122 => 612,  2116 => 609,  2110 => 606,  2104 => 603,  2097 => 599,  2093 => 598,  2086 => 594,  2082 => 593,  2078 => 592,  2074 => 591,  2070 => 590,  2063 => 586,  2059 => 585,  2055 => 584,  2051 => 583,  2047 => 582,  2043 => 581,  2039 => 580,  2035 => 579,  2031 => 578,  2027 => 577,  2023 => 576,  2019 => 575,  2015 => 574,  2011 => 573,  2007 => 572,  2003 => 571,  1999 => 570,  1995 => 569,  1991 => 568,  1987 => 567,  1983 => 566,  1979 => 565,  1975 => 564,  1971 => 563,  1967 => 562,  1963 => 561,  1959 => 560,  1955 => 559,  1951 => 558,  1947 => 557,  1943 => 556,  1939 => 555,  1931 => 550,  1927 => 549,  1923 => 548,  1919 => 547,  1915 => 546,  1911 => 545,  1906 => 543,  1902 => 542,  1896 => 539,  1892 => 538,  1887 => 536,  1883 => 535,  1879 => 534,  1875 => 533,  1871 => 532,  1867 => 531,  1863 => 530,  1856 => 526,  1852 => 525,  1848 => 524,  1844 => 523,  1840 => 522,  1836 => 521,  1832 => 520,  1828 => 519,  1824 => 518,  1820 => 517,  1816 => 516,  1812 => 515,  1808 => 514,  1804 => 513,  1800 => 512,  1796 => 511,  1792 => 510,  1784 => 505,  1780 => 504,  1776 => 503,  1772 => 502,  1768 => 501,  1764 => 500,  1758 => 497,  1754 => 496,  1750 => 495,  1746 => 494,  1742 => 493,  1738 => 492,  1734 => 491,  1725 => 485,  1721 => 484,  1717 => 483,  1712 => 481,  1708 => 480,  1704 => 479,  1700 => 478,  1696 => 477,  1692 => 476,  1688 => 475,  1684 => 474,  1675 => 468,  1671 => 467,  1664 => 463,  1660 => 462,  1656 => 461,  1652 => 460,  1648 => 459,  1642 => 456,  1638 => 455,  1634 => 454,  1630 => 453,  1626 => 452,  1622 => 451,  1618 => 450,  1613 => 448,  1609 => 447,  1605 => 446,  1601 => 445,  1597 => 444,  1593 => 443,  1589 => 442,  1585 => 441,  1581 => 440,  1576 => 438,  1572 => 437,  1568 => 436,  1564 => 435,  1560 => 434,  1555 => 432,  1551 => 431,  1547 => 430,  1543 => 429,  1539 => 428,  1535 => 427,  1531 => 426,  1527 => 425,  1523 => 424,  1519 => 423,  1515 => 422,  1511 => 421,  1507 => 420,  1503 => 419,  1499 => 418,  1493 => 415,  1489 => 414,  1485 => 413,  1481 => 412,  1477 => 411,  1473 => 410,  1466 => 406,  1462 => 405,  1458 => 404,  1454 => 403,  1448 => 400,  1444 => 399,  1440 => 398,  1436 => 397,  1432 => 396,  1428 => 395,  1424 => 394,  1420 => 393,  1416 => 392,  1412 => 391,  1408 => 390,  1404 => 389,  1400 => 388,  1396 => 387,  1392 => 386,  1388 => 385,  1384 => 384,  1380 => 383,  1376 => 382,  1372 => 381,  1366 => 378,  1362 => 377,  1358 => 376,  1352 => 373,  1348 => 372,  1344 => 371,  1338 => 368,  1334 => 367,  1330 => 366,  1326 => 365,  1322 => 364,  1318 => 363,  1314 => 362,  1310 => 361,  1306 => 360,  1301 => 358,  1296 => 356,  1292 => 355,  1288 => 354,  1284 => 353,  1280 => 352,  1276 => 351,  1272 => 350,  1268 => 349,  1264 => 348,  1259 => 346,  1255 => 345,  1251 => 344,  1247 => 343,  1243 => 342,  1239 => 341,  1235 => 340,  1231 => 339,  1227 => 338,  1223 => 337,  1219 => 336,  1215 => 335,  1211 => 334,  1207 => 333,  1203 => 332,  1199 => 331,  1195 => 330,  1191 => 329,  1187 => 328,  1179 => 323,  1175 => 322,  1171 => 321,  1167 => 320,  1161 => 317,  1157 => 316,  1153 => 315,  1149 => 314,  1145 => 313,  1141 => 312,  1136 => 310,  1132 => 309,  1128 => 308,  1124 => 307,  1120 => 306,  1115 => 304,  1109 => 301,  1105 => 300,  1101 => 299,  1097 => 298,  1089 => 293,  1085 => 292,  1081 => 291,  1077 => 290,  1073 => 289,  1069 => 288,  1065 => 287,  1061 => 286,  1057 => 285,  1053 => 284,  1049 => 283,  1045 => 282,  1041 => 281,  1035 => 278,  1031 => 277,  1027 => 276,  1023 => 275,  1019 => 274,  1015 => 273,  1011 => 272,  1007 => 271,  1003 => 270,  999 => 269,  995 => 268,  991 => 267,  987 => 266,  983 => 265,  979 => 264,  975 => 263,  971 => 262,  967 => 261,  963 => 260,  959 => 259,  955 => 258,  951 => 257,  947 => 256,  943 => 255,  939 => 254,  935 => 253,  931 => 252,  925 => 249,  921 => 248,  917 => 247,  913 => 246,  909 => 245,  905 => 244,  901 => 243,  897 => 242,  893 => 241,  889 => 240,  885 => 239,  881 => 238,  877 => 237,  871 => 234,  867 => 233,  863 => 232,  859 => 231,  855 => 230,  851 => 229,  847 => 228,  843 => 227,  839 => 226,  835 => 225,  831 => 224,  827 => 223,  823 => 222,  819 => 221,  815 => 220,  809 => 217,  805 => 216,  801 => 215,  797 => 214,  793 => 213,  789 => 212,  785 => 211,  781 => 210,  777 => 209,  773 => 208,  769 => 207,  765 => 206,  761 => 205,  757 => 204,  753 => 203,  749 => 202,  745 => 201,  741 => 200,  737 => 199,  733 => 198,  729 => 197,  725 => 196,  721 => 195,  717 => 194,  713 => 193,  709 => 192,  705 => 191,  701 => 190,  697 => 189,  693 => 188,  689 => 187,  685 => 186,  681 => 185,  677 => 184,  673 => 183,  668 => 181,  664 => 180,  660 => 179,  656 => 178,  652 => 177,  647 => 175,  642 => 173,  638 => 172,  633 => 170,  629 => 169,  625 => 168,  621 => 167,  617 => 166,  613 => 165,  608 => 163,  604 => 162,  600 => 161,  596 => 160,  592 => 159,  588 => 158,  584 => 157,  580 => 156,  576 => 155,  572 => 154,  568 => 153,  564 => 152,  560 => 151,  556 => 150,  552 => 149,  548 => 148,  544 => 147,  540 => 146,  536 => 145,  532 => 144,  528 => 143,  524 => 142,  520 => 141,  516 => 140,  512 => 139,  508 => 138,  504 => 137,  500 => 136,  496 => 135,  492 => 134,  485 => 130,  481 => 129,  477 => 128,  473 => 127,  469 => 126,  465 => 125,  461 => 124,  457 => 123,  453 => 122,  449 => 121,  445 => 120,  441 => 119,  437 => 118,  433 => 117,  429 => 116,  425 => 115,  421 => 114,  417 => 113,  413 => 112,  409 => 111,  405 => 110,  401 => 109,  397 => 108,  393 => 107,  389 => 106,  385 => 105,  381 => 104,  374 => 100,  370 => 99,  366 => 98,  362 => 97,  358 => 96,  354 => 95,  350 => 94,  346 => 93,  342 => 92,  338 => 91,  334 => 90,  330 => 89,  326 => 88,  322 => 87,  318 => 86,  314 => 85,  310 => 84,  306 => 83,  302 => 82,  295 => 78,  291 => 77,  286 => 75,  282 => 74,  278 => 73,  274 => 72,  270 => 71,  266 => 70,  259 => 66,  255 => 65,  250 => 63,  246 => 62,  238 => 57,  234 => 56,  229 => 54,  225 => 53,  220 => 51,  216 => 50,  212 => 49,  208 => 48,  204 => 47,  200 => 46,  196 => 45,  192 => 44,  188 => 43,  184 => 42,  180 => 41,  176 => 40,  172 => 39,  168 => 38,  163 => 36,  159 => 35,  155 => 34,  151 => 33,  147 => 32,  143 => 31,  139 => 30,  135 => 29,  131 => 28,  127 => 27,  123 => 26,  119 => 25,  115 => 24,  111 => 23,  107 => 22,  103 => 21,  99 => 20,  95 => 19,  91 => 18,  87 => 17,  83 => 16,  79 => 15,  75 => 14,  71 => 13,  67 => 12,  63 => 11,  59 => 10,  55 => 9,  52 => 8,  47 => 6,  39 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "editorTranslations.twig", "/var/www/xibo/views/editorTranslations.twig");
    }
}
