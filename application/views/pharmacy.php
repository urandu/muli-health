<?php include_once('header.php') ?>
<!-- Page Content -->
<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
    <h1 class="page-header">Pharmacy</h1>
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

    <li class="active"><a href="#lab_tests" data-toggle="tab">Prescription </a>
    </li>
    <!--<li><a href="#lab_results" data-toggle="tab">Lab tests results</a>
    </li>-->
    <!--<li><a href="#patient_profile" data-toggle="tab">Patient profile</a>
    </li>
-->
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
                            <td><?php get_drug_name($presc->prescription); ?></td>

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
        <!-- /.table-responsive -->
        <a href="<?php echo(base_url()); ?>pharmacy/issue/<?php echo($visit_id); ?>"><button type="button" class="btn btn-primary btn-lg pull-right">Issue</button></a>
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