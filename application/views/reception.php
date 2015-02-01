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



                            <label for="patient_profile_card_no" >Card Number: </label>
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
                                            <button type="button" class="btn btn-primary btn-lg pull-right">Save</button>
										</div>
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