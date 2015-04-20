<?php include_once('header.php') ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">New staff</h1>
                    </div>



                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">


                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <!-- Nav tabs -->

                                <?php

                                if (isset($flash_message) && $flash_message) {
                                    echo '<div class="alert alert-success">';
                                    echo '<a class="close" data-dismiss="alert">×</a>';
                                    echo '<strong>Successfully created.</strong> ';
                                    echo '</div>';
                                }
                                ?>


                                <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin_home/new_s">
                                    <div></div>
                                    <div class="control-group ">
                                        <label  for="name">Names</label>

                                        <div class="form-controls">
                                            <input class="form-control"  required type="text" id="name" name="name">
                                        </div>
                                    </div>
                                    <div class="control-group ">
                                        <label  for="dob">Date of Birth</label>

                                        <div class="controls">
                                            <input class="form-control" required type="date" id="dob" name="dob">
                                        </div>
                                    </div>
                                    <div class="control-group ">
                                        <label for="email">Email</label>

                                        <div class="controls">
                                            <input class="form-control" required type="email" id="email" name="email">
                                        </div>
                                    </div>
                                    <div class="control-group ">
                                        <label for="phone">Phone</label>

                                        <div class="controls">
                                            <input class="form-control" required type="text" id="phone" name="phone">
                                        </div>
                                    </div>
                                    <div class="control-group ">
                                        <label for="gender">Gender</label>

                                        <div class="controls">
                                            <select class="form-control" id="gender" name="gender">
                                                <option value="m">Male</option>
                                                <option value="f">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group ">
                                        <label for="id_number">ID number</label>

                                        <div class="controls">
                                            <input class="form-control" required type="text" id="id_number" name="id_number">
                                        </div>
                                    </div>
                                    <div class="control-group ">

                                        <label for="role">Role</label>

                                        <div class="controls">
                                            <select class="form-control" id="role" name="role">
                                                <option value="0">Doctor</option>
                                                <option value="1">Receptionist</option>
                                                <option value="2">lab attendant</option>
                                                <option value="3">pharmacist</option>
                                                <option value="4">accounts</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group ">
                                        <label for="password">Password</label>

                                        <div class="controls">
                                            <input class="form-control" required type="password" id="password" name="password">
                                        </div>
                                    </div>
                                    <div class="control-group ">
                                        <label  for="user_name">Username</label>

                                        <div class="controls">
                                            <input class="form-control" required type="text" id="user_name" name="user_name">
                                        </div>
                                    </div>
                                    </br>
                                    <div class="form-actions">
                                        <input class="form-control btn btn-primary" type="submit" value="Submit">
                                    </div>

                                </form>



                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>


                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php include_once('footer.php') ?>