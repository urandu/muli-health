<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>uni health</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo(base_url());?>public/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo(base_url());?>public/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo(base_url());?>public/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo(base_url());?>public/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <!--<link href="<?php /*echo(base_url());*/?>public/bower_components/morrisjs/morris.css" rel="stylesheet">-->
    <script src="<?php echo(base_url());?>public/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Custom Fonts -->
    <link href="<?php echo(base_url());?>public/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div id="wrapper">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php echo(base_url()); ?>">Uni Health <i class="fa fa-plus"></i></a>
</div>
<!-- /.navbar-header -->

<ul class="nav navbar-top-links navbar-right">
<li>
    Logged in as <?php echo($this->session->all_userdata()['names']);

    if($this->session->all_userdata()['role']==1)
    {
        echo(' (Receptionist)');
    }elseif($this->session->all_userdata()['role']==0)
    {
        echo(' (Doctor)');
    }elseif($this->session->all_userdata()['role']==2)
    {

        echo(' (Lab attendant)');
    }elseif($this->session->all_userdata()['role']==3)
    {

        echo(' (Pharmacist)');
    }elseif($this->session->all_userdata()['role']==4)
    {

        echo(' (Accountant)');
    }

    ?>

</li>
<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
    </a>
    <ul class="dropdown-menu dropdown-user">
        <li><a href="<?php echo base_url(); ?>user/user_profile"><i class="fa fa-user fa-fw"></i> User Profile</a>
        </li>
       <!-- <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
        </li>-->
        <li class="divider"></li>
        <li><a href="<?php echo(base_url()); ?>user/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
        </li>
    </ul>
    <!-- /.dropdown-user -->
</li>
<!-- /.dropdown -->
</ul>
<!-- /.navbar-top-links -->

<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <!--<div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search patient...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                </div>-->

                <!-- /.nav-second-level -->
            </li>

            <li>
               <!-- <a href="#">Patients served</a>-->
                <?php
                if($this->session->all_userdata()['role']!=-1)
                {
                echo("<a href='".base_url()."' >Home</a>");
                    ?>
                <a href="#">Patients queue

                <?php
                }

                ?>


                   <?php



                   if($this->session->all_userdata()['role']==1)
                   {
                       echo(queue(0));

                   }elseif($this->session->all_userdata()['role']==0)
                   {
                       echo(queue(1));
                   }elseif($this->session->all_userdata()['role']==2)
                   {

                       echo(queue(2));
                   }elseif($this->session->all_userdata()['role']==3)
                   {

                       echo(queue(3));
                   }elseif($this->session->all_userdata()['role']==4)
                   {

                       echo(queue(4));
                   }

                   ?>

                    <?php

                    if($this->session->all_userdata()['role']!=-1) {
                      /*  echo("<a href='" . base_url() . "patient/all/' >Patients I have served</a>");*/

                    }

                    if($this->session->all_userdata()['role']==1) {
                        echo("<a href='" . base_url() . "patient/by_id/' >Search patient via ID No.</a>");


                    }

                    if($this->session->all_userdata()['role']!=-1)
                    {
                    ?>



                    </a>
                        <?php
                        }else{

                            ?>
                        <a href="<?php echo(base_url());?>admin_home/new_user" >New staff</a>

                           <a href="<?php echo(base_url());?>patient/reports/" >Reports</a>
                        <?php


                        }

                        ?>

            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>
