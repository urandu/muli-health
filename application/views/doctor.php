<?php include_once('header.php') ?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Patient Medical Pofile</h1>
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

                    <input type="hidden" id="patient_id" value="<?php echo($patient[0]->patient_id);?>">
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#medical_profile" data-toggle="tab">Medical profile</a>
                            </li>

                            <li><a href="#lab_tests" data-toggle="tab">Lab tests </a>
                            </li>
                            <li><a href="#diagnosis" data-toggle="tab">Diagnosis and treatment</a>
                            </li>
                            <!--<li><a href="#lab_results" data-toggle="tab">Lab tests results</a>
                            </li>-->
                           <!-- <li><a href="#patient_profile" data-toggle="tab">Patient profile</a>
                            </li>-->

                        </ul>

                        <input type="hidden" id="visit_id" value="<?php echo($visit_id); ?>">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="medical_profile">
                                <h4>Medical Profile</h4>


                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Complaint</label>
                                            <textarea id="complaint1" class="form-control" rows="3"><?php if(isset($medical_profile->present_complaint)){
                                                    echo($medical_profile->present_complaint);
                                                } ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>History</label>
                                            <textarea id="history1" class="form-control" rows="3"><?php if(isset($medical_profile->complaint_history)){
                                                    echo($medical_profile->complaint_history);
                                                } ?></textarea>
                                        </div>

                                        <button type="button" onclick="add_medical_profile()" id="save_medical_profile" class="btn btn-primary btn-medium pull-right">Save</button>
                                    </div>
                                    <div class="col-lg-6">

                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Allergy</th>

                                                    </tr>
                                                    </thead>
                                                    <tbody id="allergy_body" >

                                                    <?php if(isset($allergies) && $allergies >0)
                                                    {
                                                        foreach($allergies as $allergy)
                                                        {

                                                            ?>

                                                            <tr>
                                                                <td>#</td>
                                                                <td><?php echo($allergy->allergy); ?></td>

                                                            </tr>
                                                        <?php

                                                        }//end of foreach
                                                    }//end of for

                                                    else{
                                                        echo("<tr id='allergy_holder' ><td>No allergies found</td></tr>");
                                                    }
                                                    ?>


                                                    </tbody>
                                                </table>
                                            </div>
                                            <input id="allergy" class="form-control" placeholder="Add allergies">
                                            </br>
                                            <button type="button" onclick="add_allergy()" class="btn btn-primary  pull-right">Add allergy</button>
                                            <!-- /.table-responsive -->

                                        </div>
                                       <!-- <button type="button" class="btn btn-primary btn-lg pull-right">Save</button>-->
                                    </div>
                                </div>


                            </div>
                            <div class="tab-pane fade" id="diagnosis">
                                <h4>Diagnosis and treatment</h4>

                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Diagnosis</th>

                                                    </tr>
                                                    </thead>
                                                    <tbody id="diagnosis_body">

                                                    <?php if(isset($diagnosis) && $diagnosis >0)
                                                    {
                                                        foreach($diagnosis as $diag)
                                                        {

                                                            ?>

                                                            <tr>
                                                                <td>#</td>
                                                                <td><?php echo($diag->diagnosis); ?></td>

                                                            </tr>
                                                        <?php

                                                        }//end of foreach
                                                    }//end of for

                                                    else{
                                                        echo("<tr><td>No diagnosis entered</td></tr>");
                                                    }
                                                    ?>



                                                    </tbody>
                                                </table>
                                            </div>
                                            <input id="diagnosis1" class="form-control" placeholder="Enter diagnosis here">
                                            </br>
                                            <button type="button" onclick="add_diagnosis()" class="btn btn-primary  pull-right">Add diagnosis</button>
                                            <!-- /.table-responsive -->
                                        </div>

                                    </div>
                                    <div class="col-lg-6">

                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Prescription</th>

                                                    </tr>
                                                    </thead>
                                                    <tbody id="prescription_body">

                                                    <?php if(isset($prescription) && $prescription >0)
                                                    {
                                                        foreach($prescription as $presc)
                                                        {

                                                            ?>

                                                            <tr>
                                                                <td>#</td>
                                                                <td><?php echo($presc->prescription); ?></td>

                                                            </tr>
                                                        <?php

                                                        }//end of foreach
                                                    }//end of for

                                                    else{
                                                        echo("<tr><td>No prescription entered</td></tr>");
                                                    }
                                                    ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <input id="prescription" class="form-control" placeholder="Enter prescription here">
                                            </br>
                                            <button type="button" onclick="add_prescription()" class="btn btn-primary  pull-right">Add prescription</button>
                                            <!-- /.table-responsive -->
                                        </div>
                                       <a href="<?php echo(base_url()); ?>doctor/send_to_accounts"> <button type="button" class="btn btn-primary btn-lg pull-right">Send to accounts</button></a>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="lab_tests">
                                <h4>Lab</h4>

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
                                                        <td><?php echo($lab_test->test_done); ?></td>
                                                        <td> <?php if(isset($lab_test->test_result)){
                                                                ?>

                                                                <a href="#" >View results</a>
                                                            <?php
                                                            }else{
                                                                ?>

                                                        <td><a href="#" >Results not in</a></td>
                                                            <?php
                                                            } ?>  </td>


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
                                    <div class="row">
                                        <div class="col-lg-6">
                                        <input id="test_done" class="form-control" placeholder="Enter lab test here">
                                        </br>
                                        <button type="button" onclick="add_lab_test()" class="btn btn-primary  pull-right">Add lab test</button>
                                            </div>
                                    </div>
                                    <!-- /.table-responsive -->
                                   <a href="<?php echo(base_url()); ?>doctor/send_to_lab"> <button type="button" class="btn btn-primary btn-lg pull-right">Send to Lab</button></a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="lab_results">
                                <h4>Settings Tab</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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