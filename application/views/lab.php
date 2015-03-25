<?php include_once('header.php') ?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Laboratory</h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">

                            <strong>Patient ID:</strong> <?php echo($patient[0]->patient_id);?>
                            &nbsp; &nbsp; <strong>Name:</strong> <?php echo($patient[0]->name);?>
                            &nbsp; &nbsp; <strong>DoB:</strong> <?php echo($patient[0]->dob);?>
                            &nbsp; &nbsp; <strong>Sex:</strong> <?php echo($patient[0]->sex);?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">

                                <li class="active"><a href="#lab_tests" data-toggle="tab">Lab tests </a>
                                </li>
                                <!--<li><a href="#lab_results" data-toggle="tab">Lab tests results</a>
                                </li>-->
                                <!-- <li><a href="#patient_profile" data-toggle="tab">Patient profile</a>
                                 </li>-->

                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">

                                <div class="tab-pane fade in active" id="lab_tests">

                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Lab test</th>
                                                    <th>Result</th>

                                                </tr>
                                                </thead>
                                                <tbody id="lab_test_body">



                                                <?php if(isset($lab_tests) && $lab_tests >0)
                                                {
                                                    foreach($lab_tests as $lab_test)
                                                    {

                                                        ?>

                                                        <tr>
                                                            <td>#</td>
                                                            <td><?php get_lab_test_name($lab_test->test_done); ?></td>
                                                            <td>

                                                                <a href="#" data-toggle="modal" data-target="#results_<?php echo($lab_test->test_id);?>" >Results</a>


                                                                <!-- Modal -->
                                                                <div class="modal fade" id="results_<?php echo($lab_test->test_id);  ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                                <h4 class="modal-title" id="myModalLabel"><?php echo($lab_test->test_done." (".$patient[0]->name.")");  ?></h4>
                                                                            </div>
                                                                            <div class="modal-body">

                                                                                <div class="form-group">
                                                                                    <label>Enter results</label>
                                                                                    <input id="result_input_<?php echo($lab_test->test_id);  ?>" class="form-control" placeholder="results">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label>Attach image</label>
                                                                                    <input id="result_image_<?php echo($lab_test->test_id);  ?>" type="file">
                                                                                </div>


                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                                <button type="button" onclick="save_lab_result(<?php echo($lab_test->test_id);  ?>)" class="btn btn-primary">Save</button>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.modal-content -->
                                                                    </div>
                                                                    <!-- /.modal-dialog -->
                                                                </div>
                                                                <!-- /.modal -->
                                                            </td>


                                                        </tr>


                                                    <?php

                                                    }//end of foreach
                                                }//end of for

                                                else{
                                                    echo("<tr><td>No Lab tests present</td></tr>");
                                                }
                                                ?>


                                                </tbody>
                                            </table>


                                        </div>

                                        <!-- /.table-responsive -->
                                       <a href="<?php echo(base_url()); ?>lab/send_to_doctor/<?php echo($visit_id); ?>"> <button type="button" class="btn btn-primary btn-lg pull-right">Return to doctor</button>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="patient_profile">
                                    <h4>Patient profile</h4>

                                    <div  class="row">

                                        <fieldset disabled>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input class="form-control" id="name" placeholder="Enter patient name">
                                                </div>
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input class="form-control" id="address" placeholder="Enter patient address">
                                                </div>
                                                <div class="form-group">
                                                    <label>Sex</label>
                                                    <select id="sex" class="form-control">
                                                        <option value="male" >male</option>
                                                        <option value="female" >female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Date of Birth</label>
                                                    <input type="date" class="form-control" id="dob" placeholder="Enter DoB">
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input class="form-control" id="phone" placeholder="Enter phone number">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" id="email" placeholder="Enter email address">
                                                </div>

                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
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

<?php include_once('footer.php') ?>