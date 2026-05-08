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

/* xibo-ssp-connector-form-javascript.twig */
class __TwigTemplate_b7f4c9bfab2802102c4430e4630afe15 extends Template
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
        // line 23
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "xibo-ssp-connector-form-javascript.twig", 23)->unwrap();
        // line 24
        $context["gridId"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 25
        yield "<script type=\"text/javascript\" nonce=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cspNonce"] ?? null), "html", null, true);
        yield "\">
  \$(function() {
    \$('#connectors').on('connectors.loaded', function() {
      var \$sspConnector = \$('#connectors').find('div[data-connector-class-name-last=\"XiboSspConnector\"]');
      var \$button = \$('<button class=\"btn btn-info\" role=\"button\">";
        // line 29
        echo __("Activity Report");
        yield "</button>');
      \$button.on('click', function() {
        sspActivityDialogOpen(\$sspConnector);
      });
      \$sspConnector.find('.card-footer').append(\$button);
    });
  });

  window.sspFormOpen = function(dialog) {
    // CMS Url
    var \$cmsUrl = dialog.find('input[name=\"cmsUrl\"]');
    if (\$cmsUrl.val() === '') {
      \$cmsUrl.val(window.location.origin || null);
    }

    // Share of voice
    var \$shareOfVoice = dialog.find('.share-of-voice-control');
    \$shareOfVoice.on('change paste keyup', function() {
      dialog.find(\$(this).data('partner')).val(((100 * \$(this).val()) / 3600).toFixed(2));
    }).trigger('change');

    \$shareOfVoice.each(function(index, element) {
      dialog.find(\$(element).data('partner')).on('change paste keyup', function() {
        \$(element).val(Math.round((3600 * \$(this).val()) / 100));
      });
    });
  };

  window.sspActivityDialogOpen = function(\$sspConnector) {
    bootbox.hideAll();
    // Put the template into a modal.
    var template = Handlebars.compile(\$('#connector-ssp-activity').html());
    var dialog = bootbox.dialog({
      message: template({}),
      title: '";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Activity Report"), "html", null, true);
        yield "',
      animate: false,
      size: 'xl',
      onShown: function(e) {
        \$.ajax({
          url: \$sspConnector.data('proxyUrl').replace(':method', 'getAvailablePartnersFilter'),
          success: function(result) {
            if (result) {
              const \$form = \$('#activity-log-filters');
              const \$partnerId = \$form.find('select[name=partnerId]');

              \$.each(result, function(partnerKey, available) {
                \$partnerId.append(\$('<option>', {
                  id: partnerKey,
                  text: available.name,
                  value : partnerKey
                }));
              });
            }
          }
        });
      }
    });

    XiboInitialise('#";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["gridId"] ?? null), "html", null, true);
        yield "');

    dialog.closest('.modal').addClass('modal-big');

    // Initialize summary filter
    let filter;

    // Make a datatable
    var table;
    var chart;

    // Disable the Apply button on initialization
    let applyBtn = dialog.find('a[data-apply-button=\"true\"]').addClass('disabled');
    let displaySelect = dialog.find('select[name=\"displayId\"]');
    let formError = \$('.form-error').hide();

    // Enable the applyBtn when there's a display selected
    displaySelect.on('change', function () {
      let value = \$(this).val();

      applyBtn.toggleClass('disabled', !value);

      \$('.alert-danger').toggle(!value);
    });

    // Find the apply button
    applyBtn.on('click', function(e) {
      if (\$(this).hasClass('disabled')) {
        e.preventDefault();
        return;
      }

      \$(this).addClass('disabled').append('<span class=\"saving fa fa-cog fa-spin p-1\"></span>');

      if (!table) {
        initTable();
      } else {
        table.ajax.reload(function(json) {
          let filteredData = filterData(json.data, filter);

          drawSummaryTable(filteredData, filter);
        }, true);
      }
    });

    // Watch for filter option changes in Summary tab
    dialog.find('select[name=\"campaignFilter\"]').on('change', function(e) {
      if (displaySelect.val()) {
        table.ajax.reload(function(json) {
          filter = \$(e.target).val();
          let filteredData = filterData(json.data, filter);

          drawSummaryTable(filteredData, filter);
        }, true);
      }
    });

    // Parse activity log summary according to filter selected
    function filterData(summaryData, filter='hour') {
      let filterOption = '';

      // Group the data according the filter selected
      let groups = summaryData.reduce((group, item) => {
        let hourKey = `\${moment(item.scheduledAt).format('YYYY-MM-DD HH')}:00`;
        let errorKey = item.errorCode || '';

        if (filter === 'hour') {
          filterOption = hourKey;
        } else if (filter === 'errorCode') {
          filterOption = errorKey;
        } else {
          filterOption = `\${hourKey} - \${errorKey}`;
        }

        if (!group[filterOption]) {
          group[filterOption] = [];
        }

        group[filterOption].push({key: filterOption, ...item});

        return group;
      }, {});

      const groupKeys = Object.keys(groups);

      // Aggregate the data
      let data = groupKeys.map(key => {
        return groups[key].reduce((acc, {key, campaignId, scheduledAt, displayId, errors, isPlayed, isErrored, impressions, impressionActual, errorCode}) => {
          acc['key'] = String(key);
          acc['errorCount'] = errors + (acc['errorCount'] || 0);
          acc['playCount'] = (isPlayed ? 1 : 0) + (acc['playCount'] || 0);
          acc['missesCount'] = (!isPlayed && !isErrored ? 1 : 0) + (acc['missesCount'] || 0);
          acc['impressions'] = impressions + (acc['impressions'] || 0);
          acc['impressionActual'] = impressionActual + (acc['impressionActual'] || 0);
          acc['campaignId'] = campaignId;
          acc['date'] = moment(scheduledAt).format('MM-DD-YYYY');
          acc['time'] = `\${moment(scheduledAt).format('HH')}:00`;
          acc['errorCode'] = errorCode;

          return acc;
        }, {});
      })

      // Get new data stats
      let stats = {
        totalErrorCount: 0,
        totalPlayCount: 0,
        totalMissCount: 0,
        totalImpressions: 0,
        impressionActual: 0
      }

      \$.each(data, function(index, el) {
        stats.totalErrorCount += el.errorCount;
        stats.totalPlayCount += el.playCount;
        stats.totalMissCount += el.missesCount;
        stats.totalImpressions += el.impressions;
        stats.impressionActual += el.impressionActual;
      });

      return {
        data: data.sort((a,b) => a.key.replace(/-|\\s/g,\"\") - b.key.replace(/-|\\s/g,\"\")),
        stats: stats
      }
    }

    function initTable() {
      table = \$('#ssp-activity').DataTable({
        language: dataTablesLanguage,
        dom: dataTablesTemplate,
        serverSide: false,
        stateSave: false,
        responsive: true,
        filter: false,
        searchDelay: 3000,
        order: [[ 0, 'asc']],
        ajax: {
          url: \$sspConnector.data('proxyUrl').replace(':method', 'activity'),
          data: function (d) {
            \$.extend(d, \$('#ssp-activity').closest('.XiboGrid').find('.FilterDiv form').serializeObject());
          },
          dataSrc: function (json) {
            if (json.success === false) {
              formError.show().text(json.message);

              return [];
            }

            formError.hide().text('');
            return json.data || [];
          }
        },
        columns: [
          {
            data: 'scheduledAt',
            responsivePriority: 1,
            render: function(data, type) {
              if (type !== 'display' && type !== 'export' || data == null) {
                return data;
              }
              return moment(data).format(jsDateFormat);
            },
          },
          { data: 'campaignId', responsivePriority: 1 },
          { data: 'displayId', responsivePriority: 1 },
          { data: 'isPlayed', responsivePriority: 1 },
          { data: 'isErrored', responsivePriority: 1 },
          { data: 'impressions', responsivePriority: 2 },
          {
            data: 'impressionDate',
            responsivePriority: 10,
            render: function(data, type) {
              if (type !== 'display' && type !== 'export' || data == null) {
                return data;
              }
              return moment(data).format(jsDateFormat);
            },
          },
          { data: 'impressionActual', responsivePriority: 10 },
          { data: 'errors', responsivePriority: 10 },
          {
            data: 'errorDate',
            responsivePriority: 10,
            render: function(data, type) {
              if (type !== 'display' && type !== 'export' || data == null) {
                return data;
              }
              return moment(data).format(jsDateFormat);
            },
          },
          { data: 'errorCode', responsivePriority: 10 },
        ],

        initComplete: function(settings, json) {
          if (json && json.data) {
            let filteredData = filterData(json.data, filter);
            drawSummaryTable(filteredData, filter);
          }
        },

        footerCallback: function(row, data, start, end, display) {
          var json = this.api().ajax.json();
          if (json && json.stats) {
            \$(this.api().column(0).footer()).html(json.stats.scheduled || 0);
            \$(this.api().column(3).footer()).html(json.stats.played || 0);
            \$(this.api().column(4).footer()).html(json.stats.errored || 0);
            \$(this.api().column(5).footer()).html(json.stats.actualImpressions || 0);
          }
        },

        drawCallback: function(settings) {
          setTimeout(function() {
            dialog.find('a[data-apply-button=\"true\"]')
              .removeClass('disabled')
              .find('.saving').remove();
          }, 300);
        },
      });

      table.on('draw', dataTableDraw);
      table.on('processing.dt', dataTableProcessing);
      dataTableAddButtons(table, \$('#ssp-activity_wrapper').find('.dataTables_buttons'));
    }

    function drawSummaryTable(filteredData, filter='hour') {
      let summaryTable = \$('#ssp-activity-summary').dataTable({
        \"bDestroy\": true,
        data: filteredData.data,
        columns: [
          { data: 'date', responsivePriority: 1 },
          { data: 'time', responsivePriority: 1 },
          { data: 'campaignId', responsivePriority: 1 },
          { data: 'playCount', responsivePriority: 1 },
          { data: 'errorCount', responsivePriority: 1 },
          { data: 'missesCount', responsivePriority: 1 },
          { data: 'impressions', responsivePriority: 2 },
          { data: 'impressionActual', responsivePriority: 10 },
          { data: 'errorCode', responsivePriority: 1 },
        ],

        initComplete: function () {
          if (filter === 'hour' ) {
            // Hide Error Code column
            \$(this.api().column(8).visible(false));
          } else if (filter === 'errorCode') {
            // Hide date and hour
            \$(this.api().column(0).visible(false));
            \$(this.api().column(1).visible(false));
          }

          drawSummaryChart(filteredData.stats);
        },

        footerCallback: function(row, data, start, end, display) {
            var json = filteredData.stats;
            if (filteredData) {
                \$(this.api().column(3).footer()).html(json.totalPlayCount || 0);
                \$(this.api().column(4).footer()).html(json.totalErrorCount || 0);
                \$(this.api().column(5).footer()).html(json.totalMissCount || 0);
                \$(this.api().column(6).footer()).html(json.totalImpressions || 0);
                \$(this.api().column(7).footer()).html(json.impressionActual || 0);
            }
        },
      });

      // Render the summary table
      summaryTable.on('draw', dataTableDraw);
      summaryTable.on('processing.dt', dataTableProcessing);
    }

    // Renders the chart data
    function drawSummaryChart(data) {
      if (chart !== undefined && chart !== null) {
        chart.destroy();
      }

      // Organise the rows into datasets for the chart
      let totalSize = data.totalErrorCount + data.totalPlayCount + data.totalMissCount;
      let chartData = {
          userData: [getPercentage(data.totalErrorCount), getPercentage(data.totalPlayCount), getPercentage(data.totalMissCount)],
          userLabels: ['Errors', 'Plays', 'Misses'],
          colours: ['red', 'green', 'blue']
      }

      function getPercentage(data) {
        return ((data/totalSize)*100).toFixed(2);
      }

      // Create the pie chart
      chart = new Chart(\$(\"#canvas\"), {
        type: 'pie',
        data: {
          datasets: [{
            data: chartData.userData,
            backgroundColor: chartData.colours
          }],
          labels: chartData.userLabels
        },
        options: {
          maintainAspectRatio: true
        }
      });
    }
  };
</script>
<script type=\"text/x-handlebars-template\" id=\"connector-ssp-activity\">
  <div class=\"XiboGrid\" id=\"";
        // line 393
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["gridId"] ?? null), "html", null, true);
        yield "\" data-grid-name=\"connector-ssp-activity-log\">
      <div class=\"XiboFilterCustom card bg-light mb-3\">
          <div class=\"FilterDiv card-body\" id=\"connector-ssp-activity-log\">
              <form id=\"activity-log-filters\" class=\"form-inline\">
                  ";
        // line 397
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("From Date");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 398
        yield "                  ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dateTime", ["activityFromDt", ($context["title"] ?? null), $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate("now", "today"), "Y-m-d H:i:s"), "", "activity-from-dt", "", ""], 398, $context, $this->getSourceContext());
        yield "

                  ";
        // line 400
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("To Date");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 401
        yield "                  ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dateTime", ["activityToDt", ($context["title"] ?? null), $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate("tomorrow", "-1 minute"), "Y-m-d H:i:s"), "", "activity-to-dt", "", ""], 401, $context, $this->getSourceContext());
        yield "

                  ";
        // line 403
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Display");
            yield "<span class=\"text-danger\">*</span>";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 404
        yield "                  ";
        $context["attributes"] = [["name" => "data-width", "value" => "200px"], ["name" => "data-allow-clear", "value" => "true"], ["name" => "data-placeholder--id", "value" => null], ["name" => "data-placeholder--value", "value" => ""], ["name" => "data-search-url", "value" => $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("display.search")], ["name" => "data-search-term", "value" => "display"], ["name" => "data-search-term-tags", "value" => "tags"], ["name" => "data-id-property", "value" => "displayId"], ["name" => "data-text-property", "value" => "display"]];
        // line 415
        yield "                  ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["displayId", "single", ($context["title"] ?? null), "", null, "displayId", "display", "", "pagedSelect", "", "", "", ($context["attributes"] ?? null)], 415, $context, $this->getSourceContext());
        yield "

                  ";
        // line 417
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Partner");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 418
        yield "                  ";
        $context["options"] = [["id" => "", "value" => ""]];
        // line 419
        yield "
                  ";
        // line 420
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["partnerId", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "id", "value"], 420, $context, $this->getSourceContext());
        yield "

                  <div class=\"w-100\">
                      <a data-apply-button=\"true\" class=\"btn btn-success\">
                          <span>";
        // line 424
        echo __("Apply");
        yield "</span>
                      </a>
                  </div>

                  <div class=\"alert alert-danger my-1\">Please select a display</div>
              </form>
          </div>
      </div>
      <!-- Card Header -->
      <div class=\"card-header\">
          <ul class=\"nav nav-tabs card-header-tabs\" role=\"tablist\">
              <li class=\"nav-item\">
                  <a class=\"nav-link active\" id=\"chart-tab\" data-toggle=\"tab\" href=\"#chartTab\" role=\"tab\"
                     aria-controls=\"chartTab\" aria-selected=\"true\">Summary</a>
              </li>
              <li class=\"nav-item\">
                  <a class=\"nav-link\" id=\"tabular-tab\" data-toggle=\"tab\" href=\"#tabularTab\" role=\"tab\"
                     aria-controls=\"tabularTab\" aria-selected=\"false\">Detailed</a>
              </li>
          </ul>
      </div>
      <!-- Card Body -->
      <div class=\"card-body\">
          <div class=\"tab-content\">

              <!-- SUMMARY TAB-->
              <div class=\"tab-pane active\" id=\"chartTab\" role=\"tabpanel\" aria-labelledby=\"chart-tab\">
                  <div class=\"XiboFilterCustom card bg-light pb-0 mb-0\">
                      <div class=\"FilterDiv card-body\" id=\"connector-ssp-activity-logs\">
                          <form id=\"campaign-filter\">
                              ";
        // line 454
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            echo __("Filter Options");
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 455
        yield "                              ";
        $context["options"] = [["optionid" => "hour", "option" => "Hour"], ["optionid" => "errorCode", "option" => "Error Code"], ["optionid" => "hourerrorcode", "option" => "Hour and Error Code"]];
        // line 460
        yield "                              ";
        yield CoreExtension::callMacro($macros["inline"], "macro_dropdown", ["campaignFilter", "single", ($context["title"] ?? null), "", ($context["options"] ?? null), "optionid", "option", ($context["helpText"] ?? null)], 460, $context, $this->getSourceContext());
        yield "
                              ";
        // line 461
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["forms"] ?? null), "hidden", ["isDynamic", 1], "method", false, false, false, 461), "html", null, true);
        yield "
                          </form>

                          <!-- SUMMARY DATATABLE -->
                          <div class=\"XiboData card pt-3 my-3\">
                              <table id=\"ssp-activity-summary\"
                                     class=\"table table-striped table-full-width\"
                                     style=\"width: 100%\"
                                     data-state-preference-name=\"connector-ssp-activity-log-summary\">
                                  <thead>
                                      <tr>
                                          <th>";
        // line 472
        echo __("Date");
        yield "</th>
                                          <th>";
        // line 473
        echo __("Hour");
        yield "</th>
                                          <th>";
        // line 474
        echo __("Campaign");
        yield "</th>
                                          <th>";
        // line 475
        echo __("Play Count");
        yield "</th>
                                          <th>";
        // line 476
        echo __("Error Count");
        yield "</th>
                                          <th>";
        // line 477
        echo __("Misses Count");
        yield "</th>
                                          <th>";
        // line 478
        echo __("Impressions");
        yield "</th>
                                          <th>";
        // line 479
        echo __("Impression Actual");
        yield "</th>
                                          <th>";
        // line 480
        echo __("Error Code");
        yield "</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                  </tbody>
                                  <tfoot>
                                      <tr>
                                          <th></th>
                                          <th></th>
                                          <th></th>
                                          <th></th>
                                          <th></th>
                                          <th></th>
                                          <th></th>
                                          <th></th>
                                          <th></th>
                                      </tr>
                                  </tfoot>
                              </table>
                          </div>
                      </div>
                  </div>
                  <div class=\"widget mt-2 pb-2\">
                      <div class=\"widget-title\">
                          <i class=\"fa fa-tasks\"></i>
                              ";
        // line 505
        echo __("Summary Chart");
        // line 506
        yield "                          <div class=\"clearfix\"></div>
                      </div>
                      <canvas id=\"canvas\" style=\"clear:both; margin-top:25px;\" height=\"100%\"></canvas>
                  </div>
              </div>

              <!-- TABULAR TAB-->
              <div class=\"tab-pane show\" id=\"tabularTab\" role=\"tabpanel\" aria-labelledby=\"tabular-tab\">
                  <div class=\"XiboData card pt-3\">
                      <table id=\"ssp-activity\"
                             class=\"table table-striped table-full-width\"
                             style=\"width: 100%\"
                             data-state-preference-name=\"connector-ssp-activity-log\" >
                          <thead>
                          <tr>
                              <th>";
        // line 521
        echo __("Scheduled At");
        yield "</th>
                              <th>";
        // line 522
        echo __("Campaign");
        yield "</th>
                              <th>";
        // line 523
        echo __("Display ID");
        yield "</th>
                              <th>";
        // line 524
        echo __("Played?");
        yield "</th>
                              <th>";
        // line 525
        echo __("Errored?");
        yield "</th>
                              <th>";
        // line 526
        echo __("Impressions");
        yield "</th>
                              <th>";
        // line 527
        echo __("Impression Date");
        yield "</th>
                              <th>";
        // line 528
        echo __("Impression Actual");
        yield "</th>
                              <th>";
        // line 529
        echo __("Errors");
        yield "</th>
                              <th>";
        // line 530
        echo __("Error Date");
        yield "</th>
                              <th>";
        // line 531
        echo __("Error Code");
        yield "</th>
                          </tr>
                          </thead>
                          <tbody>
                          </tbody>
                          <tfoot>
                              <tr>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                              </tr>
                          </tfoot>
                      </table>
                  </div>
              </div>
          </div>
      </div>
      <div class=\"card bg-light p-3 text-danger col-sm-12 text-center form-error\"></div>
  </div>
</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "xibo-ssp-connector-form-javascript.twig";
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
        return array (  664 => 531,  660 => 530,  656 => 529,  652 => 528,  648 => 527,  644 => 526,  640 => 525,  636 => 524,  632 => 523,  628 => 522,  624 => 521,  607 => 506,  605 => 505,  577 => 480,  573 => 479,  569 => 478,  565 => 477,  561 => 476,  557 => 475,  553 => 474,  549 => 473,  545 => 472,  531 => 461,  526 => 460,  523 => 455,  518 => 454,  485 => 424,  478 => 420,  475 => 419,  472 => 418,  467 => 417,  461 => 415,  458 => 404,  452 => 403,  446 => 401,  441 => 400,  435 => 398,  430 => 397,  423 => 393,  114 => 87,  87 => 63,  50 => 29,  42 => 25,  40 => 24,  38 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "xibo-ssp-connector-form-javascript.twig", "/var/www/xibo/views/xibo-ssp-connector-form-javascript.twig");
    }
}
