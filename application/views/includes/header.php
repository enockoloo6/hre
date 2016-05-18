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

                            <div style="font-size: 500%"><i class="fa fa-institution modal-icon"></i></div>

                            <strong>H......R......E</strong><br>


<!--                            <img alt="image" class="img-circle" src="--><?php //echo(base_url().$this->session->userdata('photo')); ?><!--" />-->

                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear">
                                <?php if (isset($this->session->userdata['f_name'])){ ?>
                            <span class="text-muted text-xs block">Logged in as: </span>
                            <span class="block m-t-xs"> <strong class="font-bold"><?php echo($this->session->userdata('f_name')); ?></strong></span>
                                <?php } ?>
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
                    <li><a style="font-size:15px" href="<?php echo(base_url()); ?>index.php/reports/combined_report">Comparisons</a></li>
                    <li><a style="font-size:15px" href="<?php echo(base_url()); ?>index.php/reports/house_availability">House availability</a></li>
                    <li><a style="font-size:15px" href="<?php echo(base_url()); ?>index.php/reports/rented_out">Rented out houses</a></li>
                    <li><a style="font-size:15px" href="<?php echo(base_url()); ?>index.php/reports/my_posted_houses">My house posts</a></li>
                </ul>
            </li>

            <li>
            <a href="#"><i class="fa fa-wrench"></i> <span class="nav-label" style="font-size:16px">Settings</span><span
                        class="fa arrow"></span></a>
                 <ul class="nav nav-second-level">

                    <?php if($this->session->userdata('role') == 1 || $this->session->userdata('role') == -1 ){ ?>
                    <li><a style="font-size:15px"href="<?php echo(base_url()); ?>index.php/profile">Profile</a></li>
                     <?php } ?>

                    <li><a style="font-size:15px"href="<?php echo(base_url()); ?>index.php/housesearch">Search for a house</a></li>
                    <li><a style="font-size:15px"href="<?php echo(base_url()); ?>index.php/housesearch/show_recommendations">recommendations</a></li>

                     <?php if($this->session->userdata('role') == -1 ){ ?>
                     <li><a style="font-size:15px"href="<?php echo(base_url()); ?>index.php/users">Users</a></li>
                     <?php } ?>


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

                <?php if(($this->session->userdata('role')== -1 || $this->session->userdata('role')== 1) && $this->uri->segment(1)=='profile') { ?>

                <?php foreach ($USER_DETAILS as $userdetails): ?>
                        <?php
                        $c = 0;
                        foreach ($MESSAGES as $messages):
                            if($messages->message_status=='unread'){
                                $c++;
                            }
                         endforeach
                        ?>

                <li class="dropdown">
                    <?php if($c > 0){ ?>
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning"> <?php echo($c); ?> </span>
                    </a>
                    <?php } ?>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <?php foreach ($MESSAGES as $messages){
                                    if($messages->message_status=='unread'){?>

                                    <div class="media-body">
                                        <small class="pull-right text-navy"> On  <?php echo(" ".$messages->messaging_date);?>  </small>
                                        <strong><?php foreach ($ALL_USER_DETAILS as $all_details){if($all_details->user_id == $messages->sender_id){echo($all_details->f_name." ".$all_details->other_names);}}?> texted you.<br>
<!--                                        <small class="text-muted">On  --><?php //echo(" ".$messages->messaging_date);?><!-- </small>-->
                                    </div>

                               <?php } } ?>
                            </div>
                        </li>

                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="<?= base_url();?>index.php/messages">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
<!--                <li class="dropdown">-->
<!--                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">-->
<!--                        <i class="fa fa-bell"></i>  <span class="label label-primary">3</span>-->
<!--                    </a>-->
<!--                    <ul class="dropdown-menu dropdown-alerts">-->
<!--                        -->
<!--                        <li>-->
<!--                            <a href="profile.html">-->
<!--                                <div>-->
<!--                                    <i class="fa fa-twitter fa-thumbs-up"></i> 3 people liked your house-->
<!--                                    <span class="pull-right text-muted small">12 minutes ago</span>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                        </li>-->
<!---->
<!--                        <li class="divider"></li>-->
<!---->
<!--                    </ul>-->
<!--                </li>-->

                <?php endforeach; ?>

                <?php } else if($this->session->userdata('role')== 0 && $this->uri->segment(1)=='housesearch' && $this->uri->segment(2)=='') { ?>

                    <?php foreach ($USER_DETAILS as $userdetails): ?>
                        <?php
                        $c = 0;
                        foreach ($MESSAGES as $messages):
                            if($messages->message_status=='unread'){
                                $c++;
                            }
                        endforeach
                        ?>

                        <li class="dropdown">
                            <?php if($c > 0){ ?>
                                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                    <i class="fa fa-envelope"></i>  <span class="label label-warning"> <?php echo($c); ?> </span>
                                </a>
                            <?php } ?>
                            <ul class="dropdown-menu dropdown-messages">
                                <li>
                                    <div class="dropdown-messages-box">
                                        <?php foreach ($MESSAGES as $messages){
                                            if($messages->message_status=='unread'){?>

                                                <div class="media-body">
                                                    <small class="pull-right text-navy"> On  <?php echo(" ".$messages->messaging_date);?>  </small>
                                                    <strong><?php foreach ($ALL_USER_DETAILS as $all_details){if($all_details->user_id == $messages->sender_id){echo($all_details->f_name." ".$all_details->other_names);}}?> texted you.<br>
                                                        <!--                                        <small class="text-muted">On  --><?php //echo(" ".$messages->messaging_date);?><!-- </small>-->
                                                </div>

                                            <?php } } ?>
                                    </div>
                                </li>

                                <li class="divider"></li>
                                <li>
                                    <div class="text-center link-block">
                                        <a href="<?= base_url();?>index.php/messages">
                                            <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>

                    <?php endforeach; ?>
                <?php } ?>

<!-- end of the notification -->


                <li>
                        <a href="<?php echo base_url(); ?>index.php/login/logout">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>
        </nav>
    </div>