<?php include_once('header.php') ?>
<!-- Page Content -->
<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
    <h1 class="page-header">Accounts</h1>
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

    <li class="active"><a href="#lab_tests" data-toggle="tab">Prescription </a>
    </li>
    <!--<li><a href="#lab_results" data-toggle="tab">Lab tests results</a>
    </li>-->
    <!--<li><a href="#patient_profile" data-toggle="tab">Patient profile</a>
    </li>-->

</ul>

<!-- Tab panes -->
<div class="tab-content">

<div class="tab-pane fade in active" id="lab_tests">
    <h4>Lab</h4>

    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Drug</th>
                    <th>Amount</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>actm</td>
                    <td><strong>ksh.200</strong></td>

                </tr>
                <tr>
                    <td>2</td>
                    <td>panadol</td>
                    <td><strong>ksh.50</strong></td>

                </tr>

                <thead>
                <tr>
                    <th>.</th>
                    <th>Total</th>
                    <th>ksh.250</th>

                </tr>

                </tbody>
            </table>


        </div>

        <!-- /.table-responsive -->
        <button type="button" class="btn btn-primary btn-lg pull-right">Accept payment and send to pharmacy</button>
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