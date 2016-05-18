<!-- Mainly scripts -->
<script src="<?php echo(base_url()); ?>assets/js/jquery-2.1.1.js"></script>
<script src="<?php echo(base_url()); ?>assets/js/plugins/validate/jquery.validate.min.js"></script>
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


<!-- Custom hre javascript -->
<script src="<?php echo(base_url()); ?>assets/js/mshcustom/validateUserActions.js"></script>
<script src="<?php echo(base_url()); ?>assets/js/mshcustom/ajax_data.js"></script>
<script src="<?php echo(base_url()); ?>assets/js/mshcustom/rentedhouse.js"></script>
<script src="<?php echo(base_url()); ?>assets/js/mshcustom/combinedreport.js"></script>
<script src="<?php echo(base_url()); ?>assets/js/mshcustom/houseavailability.js"></script>
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

    <script src="js/plugins/validate/jquery.validate.min.js"></script>\

    <script>
        $(document).ready(function() {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 1000
                };
                toastr.success('Housing recomendation engine', 'HRE');

            }, 1300);
        });
    </script>

<script type="text/javascript">
  $(document).ready(function() {
    $('.carousel').carousel({
      interval: 1200
    })
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
