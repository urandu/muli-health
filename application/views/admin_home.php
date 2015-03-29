<?php include_once('header.php') ?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Admin Panel</h1>
            </div>
            <!-- /.col-lg-12 -->

            <div class="col-lg-3">
                Drugs
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>

                            <th>Drug</th>
                            <th>Price</th>

                        </tr>
                        </thead>
                        <tbody id="drug_body">

                        <?php if(isset($drugs) && $drugs >0)
                        {
                            foreach($drugs as $drug)
                            {

                                ?>

                                <tr>

                                    <td><?php echo($drug->drug_name); ?></td>
                                    <td><?php echo($drug->drug_price); ?></td>

                                </tr>
                            <?php

                            }//end of foreach
                        }//end of for

                        else{
                            echo("<tr><td>No drug entered</td></tr>");
                        }
                        ?>

                        </tbody>
                    </table>
                </div>
                <!--<input id="prescription" class="form-control" placeholder="Enter prescription here">-->
                </br>

                <div class="form-group">
                    <label>Name of drug</label>
                    <input type="text" id="drug_name">
                </div>

                <div class="form-group">
                    <label>cost of drug</label>
                    <input type="text" id="drug_cost">
                </div>
                <button type="button" onclick="add_drug()" class="btn btn-primary  pull-right">Add drug</button>
                <!-- /.table-responsive -->


             </div>


            <div class="col-lg-3">
                Lab Tests
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>

                            <th>Lab test</th>
                            <th>Cost</th>

                        </tr>
                        </thead>
                        <tbody id="lab_test_name_body">

                        <?php if(isset($lab_test_names) && $lab_test_names >0)
                        {
                            foreach($lab_test_names as $lab_test_name)
                            {

                                ?>

                                <tr>

                                    <td><?php echo($lab_test_name->test_name); ?></td>
                                    <td><?php echo($lab_test_name->test_cost); ?></td>

                                </tr>
                            <?php

                            }//end of foreach
                        }//end of for

                        else{
                            echo("<tr><td>No test entered</td></tr>");
                        }
                        ?>

                        </tbody>
                    </table>
                </div>
                <!--<input id="prescription" class="form-control" placeholder="Enter prescription here">-->
                </br>

                <div class="form-group">
                    <label>Name of test</label>
                    <input type="text" id="test_name">
                </div>

                <div class="form-group">
                    <label>cost of drug</label>
                    <input type="text" id="test_cost">
                </div>
                <button type="button" onclick="add_lab_test_name()" class="btn btn-primary  pull-right">Add test</button>
                <!-- /.table-responsive -->


            </div>


            <div class="col-lg-3">
                Diseases
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>

                            <th>Disease</th>


                        </tr>
                        </thead>
                        <tbody id="disease_body">

                        <?php if(isset($diseases) && $diseases >0)
                        {
                            foreach($diseases as $disease)
                            {

                                ?>

                                <tr>

                                    <td><?php echo($disease->disease_name); ?></td>


                                </tr>
                            <?php

                            }//end of foreach
                        }//end of for

                        else{
                            echo("<tr><td>No test entered</td></tr>");
                        }
                        ?>

                        </tbody>
                    </table>
                </div>
                <!--<input id="prescription" class="form-control" placeholder="Enter prescription here">-->
                </br>

                <div class="form-group">
                    <label>Name of disease</label>
                    <input type="text" id="disease_name">
                </div>


                <button type="button" onclick="add_disease()" class="btn btn-primary  pull-right">Add disease</button>
                <!-- /.table-responsive -->


            </div>




            <div class="col-lg-3">
                Allergies
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>

                            <th>Allergy</th>


                        </tr>
                        </thead>
                        <tbody id="allergy_name_body">

                        <?php if(isset($allergy_names) && $allergy_names >0)
                        {
                            foreach($allergy_names as $allergy_name)
                            {

                                ?>

                                <tr>

                                    <td><?php echo($allergy_name->allergy_name); ?></td>


                                </tr>
                            <?php

                            }//end of foreach
                        }//end of for

                        else{
                            echo("<tr><td>No allergy entered</td></tr>");
                        }
                        ?>

                        </tbody>
                    </table>
                </div>
                <!--<input id="prescription" class="form-control" placeholder="Enter prescription here">-->
                </br>

                <div class="form-group">
                    <label>Name of allergy</label>
                    <input type="text" id="allergy_name">
                </div>


                <button type="button" onclick="add_allergy_name()" class="btn btn-primary  pull-right">Add allergy</button>
                <!-- /.table-responsive -->


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