<?php include_once('header.php') ?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Reports</h1>
                </div>


                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Malaria trends
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="flot-chart">
                                <div class="flot-chart-content" id="flot-line-chart-multi"></div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>




            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <script>

        //Flot Multiple Axes Line Chart
        $(function(){


            var oilprices = [
                <?php

            if(!empty($malaria))
            {
            foreach($malaria as $mal)
            {
            echo("[".$mal->date.",".$mal->total."],");
            }
            //echo("[,],");
            }
            ?>

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

    </script>
<?php include_once('footer.php') ?>