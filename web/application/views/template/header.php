<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Jocolate Manager</title>

        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/datepicker3.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><span>Jocolate</span>Manager</a>
                    <?php
                    if($this->ion_auth->logged_in()) {
                    ?>
                    <ul class="user-menu">
                        <li class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php
                                $user = $this->ion_auth->user()->row();
                                echo $user->username;
                            ?> <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo base_url(); ?>"><span class="glyphicon glyphicon-user"></span> Dashboard</a></li>
                                <?php 
                                if($this->ion_auth->is_admin()) {
                                ?>
                                <li><a href="<?php echo base_url(); ?>/auth/"><span class="glyphicon glyphicon-cog"></span> Admin</a></li>
                                <?php
                                }
                                ?>
                                <li><a href="<?php echo base_url(); ?>/auth/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                    <?php
                    }
                    ?>
                </div>
            </div><!-- /.container-fluid -->
        </nav>

        <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
            <form role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </form>
            <ul class="nav menu">
                <li class="active"><a href="index.html"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
                <li><a href="widgets.html"><span class="glyphicon glyphicon-th"></span> Widgets</a></li>
                <li><a href="charts.html"><span class="glyphicon glyphicon-stats"></span> Charts</a></li>
                <li><a href="tables.html"><span class="glyphicon glyphicon-list-alt"></span> Tables</a></li>
                <li><a href="forms.html"><span class="glyphicon glyphicon-pencil"></span> Forms</a></li>
                <li><a href="panels.html"><span class="glyphicon glyphicon-info-sign"></span> Alerts &amp; Panels</a></li>
                <li class="parent ">
                    <a href="#">
                        <span class="glyphicon glyphicon-list"></span> Dropdown <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span> 
                    </a>
                    <ul class="children collapse" id="sub-item-1">
                        <li>
                            <a class="" href="#">
                                <span class="glyphicon glyphicon-share-alt"></span> Sub Item 1
                            </a>
                        </li>
                        <li>
                            <a class="" href="#">
                                <span class="glyphicon glyphicon-share-alt"></span> Sub Item 2
                            </a>
                        </li>
                        <li>
                            <a class="" href="#">
                                <span class="glyphicon glyphicon-share-alt"></span> Sub Item 3
                            </a>
                        </li>
                    </ul>
                </li>
                <li role="presentation" class="divider"></li>
                <li><a href="login.html"><span class="glyphicon glyphicon-user"></span> Login Page</a></li>
            </ul>
        </div><!--/.sidebar-->
        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">	