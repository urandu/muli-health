<?php include_once('header.php') ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Patient is in active visit</h1>
                    </div>
                    <!-- /.col-lg-12 -->
					<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">



                            <label for="patient_profile_card_no" >. </label>
                            <p id="card_no"></p>



                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->

                            <?php if(isset($patient))
                            {
                                ?>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Patient Name</th>
                                            <th>Patient ID</th>
                                            <th>Sex</th>
                                            <th>Date of Birth</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><a href="<?php echo(base_url()); ?>patient/patient_history/<?php echo($patient[0]->patient_id); ?>" ><?php echo($patient[0]->name); ?></a></td>
                                            <td><?php echo($patient[0]->patient_id); ?></td>
                                            <td><?php echo($patient[0]->sex); ?></td>
                                            <td><?php echo($patient[0]->dob); ?></td>
                                            <?php if($visit_status){
                                                ?>
                                                <td>Visit Active.(<?php
                                                     if($visit_status->current_stage==0)
                                                     {
                                                         echo('Reception');//should never happen
                                                     }elseif($visit_status->current_stage==1)
                                                     {
                                                         echo('At Doctor');
                                                     }elseif($visit_status->current_stage==2)
                                                     {
                                                         echo('At Lab');
                                                     }elseif($visit_status->current_stage==3)
                                                     {
                                                         echo('At Pharmacy');
                                                     }elseif($visit_status->current_stage==4)
                                                     {
                                                         echo('At Accounts');
                                                     }
                                                    ?>)</td>
                                            <?php
                                            } else{
                                                ?>

                                                <td><a href="<?php echo(base_url()); ?>reception/start_visit/<?php echo($patient[0]->patient_id); ?>" ><button class="btn-primary" >Send to Doctor</button></a></td>
                                           <?php
                                            } ?>
                                            <td><a href="<?php echo(base_url()); ?>reception/edit_patient_home/<?php echo($patient[0]->patient_id); ?>" ><button class="btn-primary" >edit patient info</button></a></td>

                                        </tr>

                                        </tbody>
                                    </table>
                                </div>

                            <?php
                            } ?>


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

<?php include_once('footer.php') ?>