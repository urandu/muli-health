<?php include_once('header.php') ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Edit patient details</h1>
                    </div>
                    <!-- /.col-lg-12 -->
					<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">



                            <label for="patient_profile_card_no" >Card Number: <?php echo($card_no); ?></label>
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

                                        <form method="post" action="<?php echo(base_url()); ?>reception/new_patient_edit/<?php echo($patient->id_num); ?>" >
										<div class="col-lg-6">


                                               <!-- <label>patient_no</label>-->
                                                <input class="form-control" type="hidden" contenteditable="false"  name="patient_id" id="patient_id" value="<?php echo($card_no); ?>">



                                            <div class="form-group">
                                                <label>ID number</label>
                                                <input class="form-control" required  pattern="[0-9]{8}" value="<?php echo($patient->id_num); ?>" name="id_num" id="id_num" placeholder="Enter ID number">
                                            </div>

                                            <div class="form-group">
                                                <label>Surname</label>
                                                <input class="form-control" value="<?php echo($patient->sir_name); ?>"  required pattern="[a-zA-Z`]+" name="sir_name" id="sir_name" placeholder="Enter sir name">
                                            </div>

                                            <div class="form-group">
												<label>Name</label>
												<input required class="form-control" value="<?php echo($patient->name); ?>" required pattern="[a-z A-Z`]+" name="name" id="name" placeholder="Enter patient name">
											</div>
											<div class="form-group">
												<label>Address (eg 1254,kendu bay)</label>
												<input class="form-control" value="<?php echo($patient->address); ?>"  pattern="[1-9][0-9]+[,][A-Za-z0-9]+" name="address" id="address" placeholder="Enter patient address">
											</div>
											<div class="form-group">
                                            <label>Sex</label>
                                            <select required value="<?php echo($patient->sex); ?>" id="sex"  name="sex" class="form-control">
                                                <option>select gender</option>
                                                <option value="male" >male</option>
                                                <option value="female" >female</option>
                                            </select>
                                        </div>
                                            <div class="form-group">
                                                <label>Insured</label>
                                                <select value="<?php echo($patient->sex); ?>" required  id="insured" name="insured" class="form-control">
                                                    <option>select </option>
                                                    <option value="yes" >yes</option>
                                                    <option value="no" >no</option>
                                                </select>
                                            </div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label>Date of Birth</label>
												<input required type="date" value="<?php echo($patient->dob); ?>" class="form-control" name="dob" id="dob" placeholder="Enter DoB">
											</div>
											<div class="form-group">
												<label>Phone (eg 0722111333)</label>
												<input  pattern="[0][7][237810][0-9]{7}" value="<?php echo($patient->phone); ?>" class="form-control" name="phone" id="phone" placeholder="Enter phone number">
											</div>
											<div class="form-group">
												<label>Email</label>
												<input type="email" name="email" value="<?php echo($patient->email); ?>" class="form-control" id="email" placeholder="Enter email address">
											</div>


                                            <div class="form-group">
                                                <label>NHIF NO.</label>
                                                <input  type="text" name="nhif" value="<?php echo($patient->nhif); ?>" class="form-control" id="nhif" placeholder="Enter nhif number">
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-lg pull-right">Edit</button>
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