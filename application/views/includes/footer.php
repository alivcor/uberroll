<!-- footer content -->
        <footer>
          <div class="pull-right">
           UberRoll&copy; by <a href="https://github.com/alivcor" target="_blank">@alivcor</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="gentalella/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="gentalella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="gentalella/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="gentalella/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="gentalella/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="gentalella/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="gentalella/vendors/Flot/jquery.flot.js"></script>
    <script src="gentalella/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="gentalella/vendors/Flot/jquery.flot.time.js"></script>
    <script src="gentalella/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="gentalella/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="gentalella/production/js/flot/jquery.flot.orderBars.js"></script>
    <script src="gentalella/production/js/flot/date.js"></script>
    <script src="gentalella/production/js/flot/jquery.flot.spline.js"></script>
    <script src="gentalella/production/js/flot/curvedLines.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="gentalella/production/js/moment/moment.min.js"></script>
    <script src="gentalella/production/js/datepicker/daterangepicker.js"></script>
    <script src="gentalella/vendors/pnotify/dist/pnotify.js"></script>
    <script src="gentalella/vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="gentalella/vendors/pnotify/dist/pnotify.nonblock.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="gentalella/production/js/custom.js"></script>
    <script>
    var clockedhours = "[";
    var actdates = "[";
    var d1 = [];
    //var clockedhours = clockedhours + "'1', ";
    
    
    
    
    
    
    <?php
        $clockedhours = "[";
        $actdates = "[";
        foreach($logs as $log){
            $clockedhours = $clockedhours . $log->clockedhours . ", ";
            $actdates = $actdates . "\"" . date('d/m/y', strtotime($log->datetime)) . "\", ";
            
           // echo("clockedhours = clockedhours + \"".intval($log->clockedhours).", \";\n");
            //echo("actdates = actdates + \"\\\"".date('d/m/y', strtotime($log->datetime))."\\\", \";\n");
           // echo("actdates = actdates + '".date('d/m/y', strtotime($log->datetime))."',);\n");
           // echo("d1.push(['".date('d/m/y', strtotime($log->datetime))."','".$log->clockedhours."']);\n");
        }
        $clockedhours = substr($clockedhours, 0, -2);
            $actdates = substr($actdates, 0, -2);
            $clockedhours = $clockedhours . "]";
            $actdates = $actdates . "]";
    ?>
    /* clockedhours = clockedhours.substring(0, clockedhours.length - 2);
    clockedhours = clockedhours + "]";
    actdates = actdates.substring(0, actdates.length - 2);
    actdates = actdates + "]"; */
    console.log('<?=$clockedhours?>');
    console.log('<?=$actdates?>');
     Chart.defaults.global.legend = {
        enabled: false
      };

      // Line chart
      var ctx = document.getElementById("lineChart");
      var lineChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: <?=$actdates?>,
          datasets: [{
            label: "You Worked",
            backgroundColor: "rgba(38, 185, 154, 0.31)",
            borderColor: "rgba(38, 185, 154, 0.7)",
            pointBorderColor: "rgba(38, 185, 154, 0.7)",
            pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
            pointHoverBackgroundColor: "#fff",
            pointHoverBorderColor: "rgba(220,220,220,1)",
            pointBorderWidth: 1,
            data: <?=$clockedhours?>
          }, {
            label: "Required Work",
            backgroundColor: "rgba(3, 88, 106, 0.3)",
            borderColor: "rgba(3, 88, 106, 0.70)",
            pointBorderColor: "rgba(3, 88, 106, 0.70)",
            pointBackgroundColor: "rgba(3, 88, 106, 0.70)",
            pointHoverBackgroundColor: "#fff",
            pointHoverBorderColor: "rgba(151,187,205,1)",
            pointBorderWidth: 1,
            data: <?=$clockedhours?>
          }]
        },
      });
    
    </script>


    <!-- jQuery Sparklines -->
    <script>
      $(document).ready(function() {
        $(".sparkline_one").sparkline(<?=$clockedhours?>, {
          type: 'bar',
          height: '125',
          barWidth: 13,
          colorMap: {
            '7': '#a1a1a1'
          },
          barSpacing: 2,
          barColor: '#26B99A'
        });

        $(".sparkline11").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 6, 2, 4, 3, 4, 5, 4, 5, 4, 3], {
          type: 'bar',
          height: '40',
          barWidth: 8,
          colorMap: {
            '7': '#a1a1a1'
          },
          barSpacing: 2,
          barColor: '#26B99A'
        });

        $(".sparkline22").sparkline([2, 4, 3, 4, 7, 5, 4, 3, 5, 6, 2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 6], {
          type: 'line',
          height: '40',
          width: '200',
          lineColor: '#26B99A',
          fillColor: '#ffffff',
          lineWidth: 3,
          spotColor: '#34495E',
          minSpotColor: '#34495E'
        });
      });
    </script>
    <!-- /jQuery Sparklines -->

    <!-- Doughnut Chart -->
    <script>
      $(document).ready(function() {
        var canvasDoughnut,
            options = {
              legend: false,
              responsive: false
            };

        new Chart(document.getElementById("canvas1i"), {
          type: 'doughnut',
          tooltipFillColor: "rgba(51, 51, 51, 0.55)",
          data: {
            labels: [
              "Others",
              "You"
            ],
            datasets: [{
              data: [<?=intval($ath)-intval($th)?>, <?=intval($th)?>],
              backgroundColor: [
                "#BDC3C7",
                "#9B59B6"
              ],
              hoverBackgroundColor: [
                "#CFD4D8",
                "#B370CF"
              ]

            }]
          },
          options: options
        });

        new Chart(document.getElementById("canvas1i2"), {
          type: 'doughnut',
          tooltipFillColor: "rgba(51, 51, 51, 0.55)",
          data: {
            labels: [
              "Symbian",
              "Blackberry",
              "Other",
              "Android",
              "IOS"
            ],
            datasets: [{
              data: [15, 20, 30, 10, 30],
              backgroundColor: [
                "#BDC3C7",
                "#9B59B6",
                "#E74C3C",
                "#26B99A",
                "#3498DB"
              ],
              hoverBackgroundColor: [
                "#CFD4D8",
                "#B370CF",
                "#E95E4F",
                "#36CAAB",
                "#49A9EA"
              ]

            }]
          },
          options: options
        });

        new Chart(document.getElementById("canvas1i3"), {
          type: 'doughnut',
          tooltipFillColor: "rgba(51, 51, 51, 0.55)",
          data: {
            labels: [
              "Symbian",
              "Blackberry",
              "Other",
              "Android",
              "IOS"
            ],
            datasets: [{
              data: [15, 20, 30, 10, 30],
              backgroundColor: [
                "#BDC3C7",
                "#9B59B6",
                "#E74C3C",
                "#26B99A",
                "#3498DB"
              ],
              hoverBackgroundColor: [
                "#CFD4D8",
                "#B370CF",
                "#E95E4F",
                "#36CAAB",
                "#49A9EA"
              ]

            }]
          },
          options: options
        });
      });
    </script>
    <!-- /Doughnut Chart -->

    <!-- bootstrap-daterangepicker -->
    <script type="text/javascript">
      $(document).ready(function() {

        var cb = function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        };

        var optionSet1 = {
          startDate: moment().subtract(29, 'days'),
          endDate: moment(),
          minDate: '01/01/2012',
          maxDate: '12/31/2015',
          dateLimit: {
            days: 60
          },
          showDropdowns: true,
          showWeekNumbers: true,
          timePicker: false,
          timePickerIncrement: 1,
          timePicker12Hour: true,
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          opens: 'left',
          buttonClasses: ['btn btn-default'],
          applyClass: 'btn-small btn-primary',
          cancelClass: 'btn-small',
          format: 'MM/DD/YYYY',
          separator: ' to ',
          locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Clear',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
          }
        };
        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        $('#reportrange').daterangepicker(optionSet1, cb);
        $('#reportrange').on('show.daterangepicker', function() {
          console.log("show event fired");
        });
        $('#reportrange').on('hide.daterangepicker', function() {
          console.log("hide event fired");
        });
        $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
          console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
          console.log("cancel event fired");
        });
        $('#options1').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        $('#options2').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        $('#destroy').click(function() {
          $('#reportrange').data('daterangepicker').remove();
        });
      });
    </script>
    <!-- /bootstrap-daterangepicker -->