

<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERP</title>
    <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="css/theme.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>






</head>
<body>

    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                    <i class="icon-reorder shaded"></i>
                </a>

                <a class="brand" href="index.html">
                    HRMS
                </a>

                <div class="nav-collapse collapse navbar-inverse-collapse">
                    <ul class="nav nav-icons">
                        <li class="active"><a href="#">
                            <i class="icon-envelope"></i>
                        </a></li>
                        <li><a href="#">
                            <i class="icon-eye-open"></i>
                        </a></li>
                        <li><a href="#">
                            <i class="icon-bar-chart"></i>
                        </a></li>
                    </ul>

                    <form class="navbar-search pull-left input-append" action="#">
                        <input type="text" class="span3">
                        <button class="btn" type="button">
                            <i class="icon-search"></i>
                        </button>
                    </form>
                
                    <ul class="nav pull-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Item No. 1</a></li>
                                
                                <li><a href="#">Don't Click</a></li>
                                <li class="divider"></li>
                                <li class="nav-header">Example Header</li>
                                <li><a href="#">A Separated link</a></li>
                                                            </ul>
                        </li>
                        
                        <li><a href="#">
                            Support
                        </a></li>
                        <li class="nav-user dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar" />
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Your Profile</a></li>
                                <li><a href="#">Edit Profile</a></li>
                                <li><a href="#">Account Settings</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.nav-collapse -->
            </div>
        </div><!-- /navbar-inner -->
    </div><!-- /navbar -->



    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="span3">
                      <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index.html"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <li><a href="activity.html"><i class="menu-icon icon-bullhorn"></i>News Feed </a>
                                </li>

                                 <li><a class="collapsed" data-toggle="collapse" href="#organization"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Organization </a>
                                    <ul id="organization" class="collapse unstyled">
                                        <li><a href="#"><i class="icon-inbox"></i>Company </a></li>
                                        <li><a href="#"><i class="icon-inbox"></i>Location </a></li>
                                        <li><a href="#"><i class="icon-inbox"></i>Department </a></li>
                                        <li><a href="#"><i class="icon-inbox"></i>Designation </a></li>

                                        <li><a href="#"><i class="icon-inbox"></i>Expense </a></li>


                                    </ul>
                                </li>
                                <li><a href="message.html"><i class="menu-icon icon-inbox"></i>Inbox <b class="label green pull-right">
                                    11</b> </a></li>
                               
                            </ul>
                            <!--/.widget-nav-->
                            
                            
                            <ul class="widget widget-menu unstyled">
                                 <li><a class="collapsed" data-toggle="collapse" href="#Attandance"><i class="menu-icon icon-book">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Time Sheet </a>
                                    <ul id="Attandance" class="collapse unstyled">
                                        <li><a href="#"><i class="icon-inbox"></i>Attandance </a></li>
                                        <li><a href="#"><i class="icon-inbox">Date wise Attandance</i></a></li>
                                        <li><a href="#"><i class="icon-inbox"></i>Update Attandance </a></li>
                                        <li><a href="#"><i class="icon-inbox"></i>Import Attandance </a></li>
                                        <li><a href="#"><i class="icon-inbox"></i>Leave </a></li>
                                        <li><a href="#"><i class="icon-inbox"></i>Holidays </a></li>


                                    </ul>
                                </li>
                                 <li><a class="collapsed" data-toggle="collapse" href="#Employee"><i class="menu-icon icon-paste">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Employee </a>
                                    <ul id="Employee" class="collapse unstyled">
                                        <li><a href="#"><i class="icon-inbox"></i>Employees </a></li>
                                        <li><a href="#"><i class="icon-inbox"></i>Awards </a></li>
                                        <li><a href="#"><i class="icon-inbox"></i>Resignation </a></li>
                                       


                                    </ul>
                                </li>
                                 <li><a class="collapsed" data-toggle="collapse" href="#Requirement"><i class="menu-icon icon-table">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Requirement </a>
                                    <ul id="Requirement" class="collapse unstyled">
                                        <li><a href="#"><i class="icon-inbox"></i>Requirement </a></li>
                                        <li><a href="rlist.php"><i class="icon-inbox"></i>Requirement List </a></li>
                                        <li><a href="#"><i class="icon-inbox"></i>Selected List </a></li>
                                        <li><a href="#"><i class="icon-inbox"></i>New Registration </a></li>

                                       


                                    </ul>
				</li>
                        <li><a class="collapsed" data-toggle="collapse" href="#Employee"><i class="menu-icon icon-paste">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Test Seriese </a>
                                    <ul id="Employee" class="collapse unstyled">
                                        <li><a href="testcreate.php"><i class="icon-inbox"></i>Create Test </a></li>
                                        <li><a href="#"><i class="icon-inbox"></i>Result</a></li>
                                        <li><a href="#"><i class="icon-inbox"></i>Upload Questions </a></li>
                                       


                                    </ul>
                                </li>
             
                                 <li><a href="task.html"><i class="menu-icon icon-tasks"></i>Tasks <b class="label orange pull-right">
                                    19</b> </a></li>
                               
                            </ul>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#Payroll"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Payroll </a>
                                    <ul id="Payroll" class="collapse unstyled">
                                        <li><a href="other-login.html"><i class="icon-inbox"></i>Payroll Templates</a></li>
                                        <li><a href="other-user-profile.html"><i class="icon-inbox"></i>Generate Payslips </a></li>
                                       
                                    </ul>
                                </li>

                                 <li><a class="collapsed" data-toggle="collapse" href="#Productivity"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Productivity </a>
                                    <ul id="Productivity" class="collapse unstyled">
                                        <li><a href="other-login.html"><i class="icon-inbox"></i>Dashboard</a></li>
                                        <li><a href="other-user-profile.html"><i class="icon-inbox"></i>B2B</a></li>
                                        <li><a href="other-user-profile.html"><i class="icon-inbox"></i>B2C</a></li>
                                        <li><a href="other-user-profile.html"><i class="icon-inbox"></i></a></li>
                                       
                                    </ul>
                                </li>

                                      <li><a href="task.html"><i class="menu-icon icon-tasks"></i>Ticketing </a></li>
                               
                                <li><a href="logout.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div><!--/.sidebar-->
                </div><!--/.span3-->


     <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>


   <!--                      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js" type="text/javascript"></script>
   -->

    
