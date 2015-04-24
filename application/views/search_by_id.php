<?php include_once('header.php') ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Reception Panel</h1>
                    </div>
                    <!-- /.col-lg-12 -->
					<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">



                            <!--<label for="patient_profile_card_no" >Tap patient card: </label>
                            <p id="card_no"></p>
-->


                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <?php if(!empty($error)){echo('Patient not found');;} ?>
                            <form method="post" action="<?php echo(base_url()); ?>reception/get_patient_by_id">
                                <input required type="text" pattern="[1-9][0-9]{7}" title="please enter a valid ID number"  name="patient_id" placeholder="enter patient number" />
                                <input type="submit" value="submit" class="btn primary">
                            </form>

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


   <!-- <script>

        $(document).ready(function() {
            ws = new WebSocket("ws://localhost:8980");

            ws.onopen = function() {
                ws.send("hello server");
            };
            ws.onclose = function() {};

            ws.onmessage = function(evt) {
                console.log(evt.data);
                var message = JSON.parse(evt.data);
                console.log(message);
                // code to update the page given the incoming message

                // send a dummy message back to initiate
                // the onmessage callback again
                ws.send("next message please!");
                window.location.replace('http://localhost/muli/reception/get_patient/'+message.event);

            }
        });
    </script>-->

   <!-- <script>

        setInterval(function(){

            $.get('http://localhost/airport/read.txt', function(data) {
                // alert(data)
                if(data!=''){
                    window.location.replace('http://localhost/muli/reception/get_patient/'+data);
                }
            }, 'text');
        },1000);




    </script>-->

<?php include_once('footer.php') ?>