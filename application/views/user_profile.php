<?php include_once('header.php') ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Edit profile</h1>
                    </div>
                    <?php
                    if(isset($user))
                    {

                        ?>

                        <div class="col-lg-6" >

                            <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>user/edit_user">
                                <div></div>
                                <div class="control-group ">
                                    <label  >Names: <?php echo($user->name); ?></label>


                                </div>
                                <div class="control-group ">
                                    <label  for="dob">Date of Birth : <?php echo($user->dob); ?></label>


                                </div>

                                <div class="control-group ">
                                    <label for="gender">Gender : <?php echo($user->gender); ?></label>


                                </div>
                                <div class="control-group ">
                                    <label for="id_number">ID number : <?php echo($user->id_number); ?></label>


                                </div>

                                </div>
                    <div class="col-lg-6">
                        <h3>Edit details</h3>
                                <div class="control-group ">
                                    <label for="email">Email</label>

                                    <div class="controls">
                                        <input class="form-control" required type="email" value=" <?php echo($user->email); ?>" id="email" name="email">
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="phone">Phone</label>

                                    <div class="controls">
                                        <input class="form-control" value=" <?php echo($user->phone); ?>" required type="text" id="phone" name="phone">
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label  for="user_name">Username</label>

                                    <div class="controls">
                                        <input class="form-control" required value=" <?php echo($user->user_name); ?>" type="text" id="user_name" name="user_name">
                                    </div>
                                </div>

                                <div class="control-group ">
                                    <label for="password">Password</label>

                                    <div class="controls">
                                        <input class="form-control" value="1111" required type="password" id="password" name="password">
                                    </div>
                                </div>

                                </br>
                                <div class="form-actions">
                                    <input class="form-control btn btn-primary" type="submit" value="Edit">
                                </div>

                            </form>

                        </div>
                    <?php
                    }
                    ?>




                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


<?php include_once('footer.php') ?>