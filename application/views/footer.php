
<!-- jQuery -->
<script src="<?php echo(base_url());?>public/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo(base_url());?>public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo(base_url());?>public/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="<?php echo(base_url());?>public/bower_components/raphael/raphael-min.js"></script>
<!--<script src="<?php /*echo(base_url());*/?>public/bower_components/morrisjs/morris.min.js"></script>-->
<!--<script src="<?php /*echo(base_url());*/?>public/js/morris-data.js"></script>-->

<!-- Morris Charts JavaScript -->
<script src="<?php echo(base_url());?>public/bower_components/raphael/raphael-min.js"></script>
<script src="<?php echo(base_url());?>public/bower_components/morrisjs/morris.min.js"></script>
<script src="<?php echo(base_url());?>public/js/morris-data.js"></script>


<!-- Flot Charts JavaScript -->
<script ssrc="<?php echo(base_url());?>public/bower_components/flot/excanvas.min.js"></script>
<script src="<?php echo(base_url());?>public/bower_components/flot/jquery.flot.js"></script>
<script src="<?php echo(base_url());?>public/bower_components/flot/jquery.flot.pie.js"></script>
<script src="<?php echo(base_url());?>public/bower_components/flot/jquery.flot.resize.js"></script>
<script src="<?php echo(base_url());?>public/bower_components/flot/jquery.flot.time.js"></script>
<script src="<?php echo(base_url());?>public/bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo(base_url());?>public/js/flot-data.js"></script>

<!-- Custom Theme JavaScript -->



<script src="<?php echo(base_url());?>public/dist/js/sb-admin-2.js"></script>


<!--<script>

    //Flot Multiple Axes Line Chart
    $(function(){

    var oilprices = [
        [2012, 61],
        [2013, 58],
        [2014, 57],
        [2015, 56],
        [2016, 55],
        [2017, 55]

    ];




    function doPlot(position) {
        $.plot($("#flot-line-chart-multi"), [{
            data: oilprices,
            label: " malaria "
        }
        ], {
            xaxes: [{
                //mode: null,
                //tickDecimals: null
                min: 2009
            }],
            yaxes: [{
                min: 0
            }, {
                // align if we are to the right
                alignTicksWithAxis: position == "right" ? 1 : null,
                position: position
            }],
            legend: {
                position: 'sw'
            },
            grid: {
                hoverable: true //IMPORTANT! this is needed for tooltip to work
            },
            tooltip: true,
            tooltipOpts: {
                content: "%s for %x was %y",
                xDateFormat: "%y",

                onHover: function(flotItem, $tooltipEl) {
                    // console.log(flotItem, $tooltipEl);
                }
            }

        });
    }

    doPlot("right");

    $("button").click(function() {
        doPlot($(this).text());
    });
    });

</script>-->


</body>

</html>
