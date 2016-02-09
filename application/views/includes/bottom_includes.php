<!-- Mainly scripts -->
<script src="<?php echo(base_url()); ?>assets/js/jquery-2.1.1.js"></script>
<script src="<?php echo(base_url()); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo(base_url()); ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo(base_url()); ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?php echo(base_url()); ?>assets/js/inspinia.js"></script>
<script src="<?php echo(base_url()); ?>assets/js/plugins/pace/pace.min.js"></script>

<!-- Data Tables -->
<script src="<?php echo(base_url()); ?>assets/js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="<?php echo(base_url()); ?>assets/js/plugins/dataTables/dataTables.bootstrap.js"></script>
<script src="<?php echo(base_url()); ?>assets/js/plugins/dataTables/dataTables.responsive.js"></script>
<script src="<?php echo(base_url()); ?>assets/js/plugins/dataTables/dataTables.tableTools.min.js"></script>


<!-- Custom msh javascript -->
<script src="<?php echo(base_url()); ?>assets/js/mshcustom/validateUserActions.js"></script>
<script src="<?php echo(base_url()); ?>assets/js/mshcustom/google_maps_hre.js"></script>

<!-- Mainly scripts -->



<!-- Custom and plugin javascript -->


<!-- Chosen -->
<script src="<?php echo(base_url()); ?>assets/js/plugins/chosen/chosen.jquery.js"></script>

<!-- JSKnob -->
<script src="<?php echo(base_url()); ?>assets/js/plugins/jsKnob/jquery.knob.js"></script>

<!-- Input Mask-->
<script src="<?php echo(base_url()); ?>assets/js/plugins/jasny/jasny-bootstrap.min.js"></script>

<!-- Data picker -->
<script src="<?php echo(base_url()); ?>assets/js/plugins/datapicker/bootstrap-datepicker.js"></script>

<!-- NouSlider -->
<script src="<?php echo(base_url()); ?>assets/js/plugins/nouslider/jquery.nouislider.min.js"></script>

<!-- Switchery -->
<script src="<?php echo(base_url()); ?>assets/js/plugins/switchery/switchery.js"></script>

<!-- IonRangeSlider -->
<script src="<?php echo(base_url()); ?>assets/js/plugins/ionRangeSlider/ion.rangeSlider.min.js"></script>

<!-- iCheck -->
<script src="<?php echo(base_url()); ?>assets/js/plugins/iCheck/icheck.min.js"></script>

<!-- MENU -->

<!-- Color picker -->
<script src="<?php echo(base_url()); ?>assets/js/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>

<!-- Image cropper -->
<script src="<?php echo(base_url()); ?>assets/js/plugins/cropper/cropper.min.js"></script>


    <!-- js from the dashboard 4 -->
    <!-- js from the dashboard 4 -->
    <!-- js from the dashboard 4 -->
    <!-- js from the dashboard 4 -->
    <!-- js from the dashboard 4 -->
    <!-- js from the dashboard 4 -->
    <!-- js from the dashboard 4 -->

    <!-- Mainly scripts -->

    <!-- Flot -->
    <script src="<?php echo(base_url()); ?>assets/js/plugins/flot/jquery.flot.js"></script>
    <script src="<?php echo(base_url()); ?>assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo(base_url()); ?>assets/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="<?php echo(base_url()); ?>assets/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo(base_url()); ?>assets/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="<?php echo(base_url()); ?>assets/js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="<?php echo(base_url()); ?>assets/js/plugins/flot/curvedLines.js"></script>

    <!-- Peity -->
    <script src="<?php echo(base_url()); ?>assets/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="<?php echo(base_url()); ?>assets/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->


    <!-- jQuery UI -->
    <script src="<?php echo(base_url()); ?>assets/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="<?php echo(base_url()); ?>assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo(base_url()); ?>assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- Sparkline -->
    <script src="<?php echo(base_url()); ?>assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="<?php echo(base_url()); ?>assets/js/demo/sparkline-demo.js"></script>

        <!-- Toastr script -->
    <script src="<?php echo(base_url()); ?>assets/js/plugins/toastr/toastr.min.js"></script>

    <!-- ChartJS-->
    <script src="<?php echo(base_url()); ?>assets/js/plugins/chartJs/Chart.min.js"></script>


    <script>
        $(document).ready(function() {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.success('Housing recomendation engine', 'Welcome to HRE');

            }, 1300);
        });
    </script>


     <script>
        $(document).ready(function() {


            var d1 = [[1262304000000, 6], [1264982400000, 3057], [1267401600000, 20434], [1270080000000, 31982], [1272672000000, 26602], [1275350400000, 27826], [1277942400000, 24302], [1280620800000, 24237], [1283299200000, 21004], [1285891200000, 12144], [1288569600000, 10577], [1291161600000, 10295]];
            var d2 = [[1262304000000, 5], [1264982400000, 200], [1267401600000, 1605], [1270080000000, 6129], [1272672000000, 11643], [1275350400000, 19055], [1277942400000, 30062], [1280620800000, 39197], [1283299200000, 37000], [1285891200000, 27000], [1288569600000, 21000], [1291161600000, 17000]];

            var data1 = [
                { label: "Data 1", data: d1, color: '#17a084'},
                { label: "Data 2", data: d2, color: '#127e68' }
            ];
            $.plot($("#flot-chart1"), data1, {
                xaxis: {
                    tickDecimals: 0
                },
                series: {
                    lines: {
                        show: true,
                        fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 1
                            }, {
                                opacity: 1
                            }]
                        },
                    },
                    points: {
                        width: 0.1,
                        show: false
                    },
                },
                grid: {
                    show: false,
                    borderWidth: 0
                },
                legend: {
                    show: false,
                }
            });

            var lineData = {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [
                    {
                        label: "Example dataset",
                        fillColor: "rgba(220,220,220,0.5)",
                        strokeColor: "rgba(220,220,220,1)",
                        pointColor: "rgba(220,220,220,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(220,220,220,1)",
                        data: [65, 59, 40, 51, 36, 25, 40]
                    },
                    {
                        label: "Example dataset",
                        fillColor: "rgba(26,179,148,0.5)",
                        strokeColor: "rgba(26,179,148,0.7)",
                        pointColor: "rgba(26,179,148,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(26,179,148,1)",
                        data: [48, 48, 60, 39, 56, 37, 30]
                    }
                ]
            };

            var lineOptions = {
                scaleShowGridLines: true,
                scaleGridLineColor: "rgba(0,0,0,.05)",
                scaleGridLineWidth: 1,
                bezierCurve: true,
                bezierCurveTension: 0.4,
                pointDot: true,
                pointDotRadius: 4,
                pointDotStrokeWidth: 1,
                pointHitDetectionRadius: 20,
                datasetStroke: true,
                datasetStrokeWidth: 2,
                datasetFill: true,
                responsive: true,
            };


            var ctx = document.getElementById("lineChart").getContext("2d");
            var myNewChart = new Chart(ctx).Line(lineData, lineOptions);

        });
    </script>

    <!-- js from the dashboard 4 -->
    <!-- js from the dashboard 4 -->
    <!-- js from the dashboard 4 -->
    <!-- js from the dashboard 4 -->

<script>
$(document).ready(function(){


    $('#data_1 .input-group.date').datepicker({
        todayBtn: "linked",
        keyboardNavigation: false,
        forceParse: false,
        calendarWeeks: true,
        autoclose: true
    });

    $('#data_2 .input-group.date').datepicker({
        startView: 1,
        todayBtn: "linked",
        keyboardNavigation: false,
        forceParse: false,
        autoclose: true
    });

    $('#data_3 .input-group.date').datepicker({
        startView: 2,
        todayBtn: "linked",
        keyboardNavigation: false,
        forceParse: false,
        autoclose: true
    });

    $('#data_4 .input-group.date').datepicker({
        minViewMode: 1,
        keyboardNavigation: false,
        forceParse: false,
        autoclose: true,
        todayHighlight: true
    });

    $('#data_5 .input-daterange').datepicker({
        keyboardNavigation: false,
        forceParse: false,
        autoclose: true
    });

    var elem = document.querySelector('.js-switch');
    var switchery = new Switchery(elem, { color: '#1AB394' });

    var elem_2 = document.querySelector('.js-switch_2');
    var switchery_2 = new Switchery(elem_2, { color: '#ED5565' });

    var elem_3 = document.querySelector('.js-switch_3');
    var switchery_3 = new Switchery(elem_3, { color: '#1AB394' });

    $('.i-checks').iCheck({
        checkboxClass: 'icheckbox_square-green',
        radioClass: 'iradio_square-green'
    });




});
var config = {
    '.chosen-select'           : {},
    '.chosen-select-deselect'  : {allow_single_deselect:true},
    '.chosen-select-no-single' : {disable_search_threshold:10},
    '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
    '.chosen-select-width'     : {width:"95%"}
}
for (var selector in config) {
    $(selector).chosen(config[selector]);
}

$("#ionrange_1").ionRangeSlider({
    min: 0,
    max: 5000,
    type: 'double',
    prefix: "$",
    maxPostfix: "+",
    prettify: false,
    hasGrid: true
});

$("#ionrange_2").ionRangeSlider({
    min: 0,
    max: 10,
    type: 'single',
    step: 0.1,
    postfix: " carats",
    prettify: false,
    hasGrid: true
});

$("#ionrange_3").ionRangeSlider({
    min: -50,
    max: 50,
    from: 0,
    postfix: "°",
    prettify: false,
    hasGrid: true
});

$("#ionrange_4").ionRangeSlider({
    values: [
        "January", "February", "March",
        "April", "May", "June",
        "July", "August", "September",
        "October", "November", "December"
    ],
    type: 'single',
    hasGrid: true
});


</script>

<script src="<?php echo(base_url()); ?>assets/js/FileSaver.js"></script>
<script src="<?php echo(base_url()); ?>assets/js/jquery.wordexport.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $("a.word-export").click(function(event) {
            $("#page-content").wordExport();
        });

    });
</script>
    
</body>

</html>
