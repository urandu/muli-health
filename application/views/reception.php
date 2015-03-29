<?php include_once('header.php') ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">New Patient</h1>
                    </div>
                    <!-- /.col-lg-12 -->
					<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">



                            <label for="patient_profile_card_no" >Card Number: <?php echo($patient_id); ?></label>
                            <p id="card_no"></p>



                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#profile" data-toggle="tab" >Patient Profile</a>
                                
                                
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                
                                <div class="tab-pane fade in active" id="profile">

                                    <div class="row">

                                        <form method="post" action="<?php echo(base_url()); ?>reception/new_patient" >
										<div class="col-lg-6">

                                            <div class="form-group">
                                                <label>patient_no</label>
                                                <input class="form-control" contenteditable="false"  name="patient_id" id="patient_id" value="<?php echo($patient_id); ?>">
                                            </div>


                                            <div class="form-group">
                                                <label>ID number</label>
                                                <input class="form-control" name="id_num" id="id_num" placeholder="Enter ID number">
                                            </div>

                                            <div class="form-group">
                                                <label>Sir name</label>
                                                <input class="form-control" name="sir_name" id="sir_name" placeholder="Enter sir name">
                                            </div>

                                            <div class="form-group">
												<label>Name</label>
												<input class="form-control" name="name" id="name" placeholder="Enter patient name">
											</div>
											<div class="form-group">
												<label>Address</label>
												<input class="form-control" name="address" id="address" placeholder="Enter patient address">
											</div>
											<div class="form-group">
                                            <label>Sex</label>
                                            <select id="sex" name="sex" class="form-control">
                                                <option value="male" >male</option>
                                                <option value="female" >female</option>
                                            </select>
                                        </div>
                                            <div class="form-group">
                                                <label>Insured</label>
                                                <select id="insured" name="insured" class="form-control">
                                                    <option value="yes" >yes</option>
                                                    <option value="no" >no</option>
                                                </select>
                                            </div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label>Date of Birth</label>
												<input type="date" class="form-control" name="dob" id="dob" placeholder="Enter DoB">
											</div>
											<div class="form-group">
												<label>Phone</label>
												<input class="form-control" name="phone" id="phone" placeholder="Enter phone number">
											</div>
											<div class="form-group">
												<label>Email</label>
												<input type="email" name="email" class="form-control" id="email" placeholder="Enter email address">
											</div>


                                            <div class="form-group">
                                                <label>NHIF NO.</label>
                                                <input type="text" name="nhif" class="form-control" id="nhif" placeholder="Enter nhif number">
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-lg pull-right">Save</button>
										</div>
                                        </form>
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