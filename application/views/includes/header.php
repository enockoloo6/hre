<?php
require_once("top_includes.php");
?>

<body>
<div id="wrapper">
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">


        <li class="nav-header">
                    <div class="dropdown profile-element"> <span>

                            <img alt="image" class="img-circle" src="<?php echo(base_url().$this->session->userdata('photo')); ?>" />
                            <!-- <img alt="image" class="img-circle" src="<?php //echo(base_url()); ?>assets/img/a1.jpg" /> -->

                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> 
                            <span class="text-muted text-xs block">Logged in as: </span>
                            <span class="block m-t-xs"> <strong class="font-bold"><?php echo($this->session->userdata('f_name')); ?></strong></span>
                            </span> </a>

                    </div>
                    <div class="logo-element">
                        HRE
                    </div>
                </li>

            <li>
                <a href="<?php echo(base_url()); ?>"><i class="fa fa-th-large"></i> <span class="nav-label" style="font-size:16px">Home</span> </a>

            </li>

            <li>
                <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label" style="font-size:16px" >Reports</span><span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a style="font-size:15px" href="<?php echo(base_url()); ?>index.php/reports/users">Users</a></li>
                                       
                </ul>
            </li>

            <li>
            <a href="#"><i class="fa fa-wrench"></i> <span class="nav-label" style="font-size:16px">Settings</span><span
                        class="fa arrow"></span></a>
                 <ul class="nav nav-second-level">

                    <li><a style="font-size:15px"href="<?php echo(base_url()); ?>index.php/profile">Profile</a></li>
                    <li><a style="font-size:15px"href="<?php echo(base_url()); ?>index.php/housesearch">Search for a house</a></li>
                    <li><a style="font-size:15px"href="<?php echo(base_url()); ?>index.php/housesearch/show_recommendations">recommendations</a></li>

                    <li><a style="font-size:15px"href="<?php echo(base_url()); ?>index.php/users">Users</a></li>
                   
                           
                  </ul>
            </li>

        </ul>

    </div>
</nav>

<div id="page-wrapper" class="gray-bg">
    <div class="row border-bottom">
        <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>


            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
            
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Housing Recommendation Engine</span>
                </li>

<!-- notificaiton -->

                <?php if($this->session->userdata('role')== -1 && $this->uri->segment(1)=='profile') { ?>
                                            
                <?php foreach ($USER_DETAILS as $userdetails): ?>                                                                    
                            

                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">1</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a7.jpg">
                                </a>
                                <div class="media-body">
                                    <small class="pull-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> texted you. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
         
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">3</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        
                        <li>
                            <a href="profile.html">
                                <div>
                                    <i class="fa fa-twitter fa-thumbs-up"></i> 3 people liked your house
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>

                        <li class="divider"></li>

                    </ul>
                </li>


                                    <!-- <p class="font-bold"><?php //echo $userdetails->f_name." ".$userdetails->other_names; ?></p> -->

                <?php endforeach; ?>

                <?php }?>

<!-- end of the notification -->


                <li>
                        <a href="<?php echo base_url(); ?>index.php/login/logout">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>
        </nav>
    </div>
