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

                        <label for="card_no" >Card Number: </label>
                        <p id="card_no"></p>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#medical_profile" data-toggle="tab">Medical profile</a>
                            </li>
                            <li><a href="#diagnosis" data-toggle="tab">Diagnosis and treatment</a>
                            </li>
                            <li><a href="#lab_tests" data-toggle="tab">Lab tests </a>
                            </li>
                            <!--<li><a href="#lab_results" data-toggle="tab">Lab tests results</a>
                            </li>-->
                            <li><a href="#patient_profile" data-toggle="tab">Patient profile</a>
                            </li>

                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="medical_profile">
                                <h4>Medical Profile</h4>


                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Complaint</label>
                                            <textarea id="complaint" class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>History</label>
                                            <textarea id="history" class="form-control" rows="3"></textarea>
                                        </div>

                                    </div>
                                    <div class="col-lg-6">

                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Alergies</th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Sulphur</td>

                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Nuts</td>

                                                    </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <input class="form-control" placeholder="Add allergies">
                                            </br>
                                            <button type="button" class="btn btn-primary  pull-right">Add allergy</button>
                                            <!-- /.table-responsive -->

                                        </div>
                                        <button type="button" class="btn btn-primary btn-lg pull-right">Save</button>
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
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>malaria</td>

                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>TB</td>

                                                    </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <input class="form-control" placeholder="Enter diagnosis here">
                                            </br>
                                            <button type="button" class="btn btn-primary  pull-right">Add diagnosis</button>
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
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>metazone</td>

                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>ACTM</td>

                                                    </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <input class="form-control" placeholder="Enter prescription here">
                                            </br>
                                            <button type="button" class="btn btn-primary  pull-right">Add prescription</button>
                                            <!-- /.table-responsive -->
                                        </div>
                                        <button type="button" class="btn btn-primary btn-lg pull-right">Send to accounts</button>
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
                                                <th>Time</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Malaria</td>
                                                <td><a href="#" >View results</a></td>
                                                <td>10:21 am</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>TB</td>
                                                <td><a href="#" >Results not in</a></td>
                                                <td>10:21 am</td>
                                            </tr>

                                            </tbody>
                                        </table>


                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                        <input class="form-control" placeholder="Enter lab test here">
                                        </br>
                                        <button type="button" class="btn btn-primary  pull-right">Add lab test</button>
                                            </div>
                                    </div>
                                    <!-- /.table-responsive -->
                                    <button type="button" class="btn btn-primary btn-lg pull-right">Send to Lab</button>
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