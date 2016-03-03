<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--Add Your favicon here -->
    <link rel="icon" href="<?php echo(base_url()); ?>assets/Landing_page/img/favicon.ico">

    <title>HRE - Home</title>

    <link href="<?php echo(base_url()); ?>assets/css/hrecustomcss.css" rel="stylesheet">
    <link href="<?php echo(base_url()); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
       
    <!--Bootstrap core CSS -->
    <link href="<?php echo(base_url()); ?>assets/Landing_page/css/bootstrap.min.css" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="<?php echo(base_url()); ?>assets/Landing_page/css/animate.min.css" rel="stylesheet">

    <link href="<?php echo(base_url()); ?>assets/Landing_page/font-awesome/css/font-awesome.min.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="<?php echo(base_url()); ?>assets/Landing_page/css/style.css" rel="stylesheet"> 
</head>

<body id="page-top">
<div class="navbar-wrapper">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand"  <?php if(! $this->session->userdata('user_id')){?> data-toggle="modal" <?php } ?> data-target="#hploginModal" href="<?php if( $this->session->userdata('user_id')) echo (base_url().'index.php/profile');?>">Post a new house</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="page-scroll" href="#page-top">Home</a></li>
                        <li><a href="<?php echo(base_url()); ?>index.php/home">Dashboard</a></li>
                        <li><a class="page-scroll" href="#features">About</a></li>
                        <li><a class="page-scroll" href="#team">Team</a></li>
                        <li><a class="page-scroll" href="#testimonials">Testimonials</a></li>
                        <!-- <li><a class="page-scroll" href="#pricing">Pricing</a></li> -->
                        <li><a class="page-scroll" href="#contact">Contact</a></li>
                        <!-- <li><a href="<?php //echo(base_url()); ?>index.php/login">Login</a></li> -->
<!--                         <li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#phloginModal">
                                Search for a house
                        </button></li> -->

                        <!-- house post login modal -->
                            <div id="hploginModal" class="modal fade" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated flip">
                                            <div class="modal-header text-center">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-institution modal-icon" id="hrebig-icon"></i>                      
                                        </div>

                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-7 b-r"><h3 class="m-t-none m-b">Sign in</h3>                                                    

                                                    <form action="<?= base_url();?>index.php/login/validate" method="post" enctype="multipart/form-data">
                                                        <div class="form-group"><label>Email</label> <input type="email" autofill="on" name="email" placeholder="Email" class="form-control"></div>
                                                        <div class="form-group"><label>Password</label> <input type="password" name="password" placeholder="Password" class="form-control"></div>
                                                        <div>
                                                            <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Log in</strong></button>
                                                            <label> <input type="checkbox" class="i-checks"> Remember me </label>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-sm-5"><h4>Not a member?</h4>
                                                    <p>You can create an account:</p>
                                                    <p class="text-center">
                                                        <a href="" data-toggle="modal" data-target="#hpsignupModal"><i class="fa fa-sign-in" id="hrebig-icon"></i></a>
                                                    </p>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>

                        <!-- end of the modal -->

                        <!--house search login modal -->
                            <div id="hsloginModal" class="modal fade" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated flip">
                                            <div class="modal-header text-center">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-institution modal-icon" id="hrebig-icon"></i>                                           
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-7 b-r"><h3 class="m-t-none m-b">Sign in</h3>

                                                    

                                                    <form action="<?= base_url();?>index.php/post_new_house" method="post" enctype="multipart/form-data">
                                                        <div class="form-group"><label>Email</label> <input type="email" name="email" placeholder="Enter email" class="form-control"></div>
                                                        <div class="form-group"><label>Password</label> <input type="password" name="password" placeholder="Password" class="form-control"></div>
                                                        <div>
                                                            <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Log in</strong></button>
                                                            <label> <input type="checkbox" class="i-checks"> Remember me </label>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-sm-5"><h4>Not a member?</h4>
                                                    <p>You can create an account:</p>
                                                    <p class="text-center">
                                                        <a href="" data-toggle="modal" data-target="#hssignupModal"><i class="fa fa-sign-in" id="hrebig-icon"></i></a>
                                                    </p>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        <!-- end of the modal -->

                        <!--house search signup modal-->

                            <div class="modal inmodal" id="hssignupModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fliplnX">
                                        <div class="modal-header text-center">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-institution modal-icon" id="hrebig-icon"></i>
                                            <h4 class="modal-title">Sign up details</h4>
                                        </div>

                                        <form action="<?= base_url();?>index.php/post_new_house" method="post" enctype="multipart/form-data">
                                        <div class="modal-body">
                                                <div class="form-group"><label>First name</label> <input type="text" name="" placeholder="Enter your email" class="form-control"></div>
                                                <div class="form-group"><label>Other name</label> <input type="text" name="" placeholder="Enter your email" class="form-control"></div>
                                                <div class="form-group"><label>Phone number</label> <input type="email" name="" placeholder="Enter your email" class="form-control"></div>
                                                <div class="form-group"><label>Email</label> <input type="email" name="" placeholder="Enter your email" class="form-control"></div>
                                                <div class="form-group"><label>Password</label> <input type="password" name="" placeholder="Enter your email" class="form-control"></div>
                                                <div class="form-group"><label>Confirm password</label> <input type="password" name="" placeholder="Enter your email" class="form-control"></div>
                                                <div class="form-group hide"><input name="role" type="tel" class="form-control" value"0"></div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Submit</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                        <!-- end of the modal form -->

                        <!--house post signup modal-->

                            <div class="modal inmodal" id="hpsignupModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fliplnX">
                                        <div class="modal-header text-center">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-institution modal-icon" id="hrebig-icon"></i>
                                            <h4 class="modal-title">Sign up details</h4>
                                        </div>

                                        <form action="<?= base_url();?>index.php/register/create_user" method="post" enctype="multipart/form-data">
                                           <div class="modal-body">
                                                    <form autocomplete="off" style="color: black;" class="m-t" method="post" role="form" action="<?php echo(base_url()); ?>index.php/register/create_user">
                                                        <div class="form-group"><label>First name</label>
                                                            <input name="f_name" type="text" class="form-control" placeholder="First name" required="">
                                                        </div>
                                                        <div class="form-group"><label>Other names</label>
                                                            <input name="other_names" type="text" class="form-control" placeholder="Other names">
                                                        </div>
                                                        <div class="form-group"><label>Email</label>
                                                            <input name="email" type="email" class="form-control" placeholder="Email" required="">
                                                        </div>
                                                        <div class="form-group"><label>Password</label>
                                                            <input name="password" type="password" class="form-control" placeholder="Password" required="">
                                                        </div>
                                                        <div class="form-group"><label>Repeat password</label>
                                                            <input name="password" type="password" class="form-control" placeholder="Password">
                                                        </div>
                                                        <div class="form-group"><label>ID number</label>
                                                            <input name="national_id" type="number" class="form-control" placeholder="National ID number">
                                                        </div>

                                                        <div class="form-group"><label>Phone number</label>
                                                            <input name="phone_number" type="tel" class="form-control" placeholder="Phone Number">
                                                        </div>

                                                        <div class="form-group hide">
                                                            <input name="role" type="tel" class="form-control" value="1">
                                                        </div>
                                                        <div class="form-group">
                                                                <div class="checkbox i-checks"><label> <input type="checkbox" required=""><i></i> Agree the terms and policy </label></div>
                                                        </div>
                                                </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <button id="submit" type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            <!-- end of the modal form -->

                    <a class="navbar-brand" data-toggle="modal" data-target="#hsloginModal" href="#">Search for a house</a>
               
                    </ul>
                </div>
            </div>
        </nav>
</div>
<div id="inSlider" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#inSlider" data-slide-to="0" class="active"></li>
        <li data-target="#inSlider" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="container">
                <div class="carousel-caption">
                    <h1>We help Recommend, Search<br/>
                        Find, Post,<br/>
                        and Rent Houses<br/>
                        we are HRE team</h1>
                    <p>Sign up and enjoy our services today.</p>
                </div>
                <div class="carousel-image wow zoomIn">

                 <img alt="laptop" src="<?php echo(base_url()); ?>assets/Landing_page/img/h1.jpg" />
                    <!-- <img src="img/laptop.png" alt="laptop"/> -->
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back one"></div>

        </div>
        <div class="item">
            <div class="container">
                <div class="carousel-caption blank">
                    <h1>We recommend the house you need <br/> find your house today.</h1>
                    <p>Housing recommendation engine.</p>
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back two"></div>
        </div>
    </div>
    <a class="left carousel-control" href="#inSlider" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#inSlider" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<section id="features" class="container services">
    <div class="row">

        <div class="col-sm-3">
            <h2>Introduction</h2>
            <p>HRE is meant to healp those seeking for houses to find the best places by connecting them to the agents or the landlords of the houses of their choice.</p>
            <p><a class="navy-link" href="#" role="button">Try it now &raquo;</a></p>
        </div>

        <div class="col-sm-3">
            <h2>Locate House</h2>
            <p>this site enables users to enter the details of the kind of house they wish to stay and fond proper suggestions on where to stay.</p>
            <p><a class="navy-link" href="#" role="button">Try it now &raquo;</a></p>
        </div>

        <div class="col-sm-3">
            <h2>Google maps</h2>
            <p>Use google maps to find the nearest places to where you know and enable you try finding the best place to stay.</p>
            <p><a class="navy-link" href="#" role="button">Try it now &raquo;</a></p>
        </div>
        <div class="col-sm-3">
            <h2>Others</h2>
            <p>easy management of the houses and the clients is offered through the messaging enabled within the system.</p>
            <p><a class="navy-link" href="#" role="button">Try it now &raquo;</a></p>
        </div>
    </div>
</section>

<section  class="container features">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="navy-line"></div>
            <h1>Over 1000+ happy users<br/> <span class="navy"> with many suggestions to the users</span> </h1>
            <p>This site is meant to healp users find the best place to stay based on their own needs. </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 text-center wow fadeInLeft">
            <div>
                <i class="fa fa-mobile features-icon"></i>
                <h2>Full responsive</h2>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus.</p>
            </div>
            <div class="m-t-lg">
                <i class="fa fa-bar-chart features-icon"></i>
                <h2>6 Charts Library</h2>
                <p>Use google maps to find the nearest places to where you know and enable you try finding the best place to stay.</p>
            </div>
        </div>
        <div class="col-md-6 text-center  wow zoomIn">
        
        <img alt="dashboard" class="img-responsive" src="<?php echo(base_url()); ?>assets/Landing_page/img/h4.jpg" />

            <!-- <img src="img/perspective.png" alt="dashboard" class="img-responsive"> -->
        </div>
        <div class="col-md-3 text-center wow fadeInRight">
            <div>
                <i class="fa fa-envelope features-icon"></i>
                <h2>Mail pages</h2>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus.</p>
            </div>
            <div class="m-t-lg">
                <i class="fa fa-google features-icon"></i>
                <h2>AngularJS version</h2>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="navy-line"></div>
            <h1>Discover great feautres</h1>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. </p>
        </div>
    </div>
    <div class="row features-block">
        <div class="col-lg-6 features-text wow fadeInLeft">
            <small>INSPINIA</small>
            <h2>Perfectly designed </h2>
            <p>INSPINIA Admin Theme is a premium admin dashboard template with flat design concept. It is fully responsive admin dashboard template built with Bootstrap 3+ Framework, HTML5 and CSS3, Media query. It has a huge collection of reusable UI components and integrated with latest jQuery plugins.</p>
            <a href="" class="btn btn-primary">Learn more</a>
        </div>
        <div class="col-lg-6 text-right wow fadeInRight">
         <img alt="dashboard" class="img-responsive pull-right" src="<?php echo(base_url()); ?>assets/Landing_page/img/h2.jpg" />
            <!-- <img src="img/dashboard.png" alt="dashboard" class="img-responsive pull-right"> -->
        </div>
    </div>
</section>

<section id="team" class="gray-section team">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Our Team</h1>
                <p>We are focused to helping our clients find the best places to stay of their choice.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 wow fadeInLeft">
                <div class="team-member">

                     <img alt="" class="img-responsive img-circle img-small" src="<?php echo(base_url()); ?>assets/Landing_page/img/avatar3.jpg" />
                    <!-- <img src="img/avatar3.jpg" class="img-responsive img-circle img-small" alt=""> -->
                    <h4><span class="navy">Peklo</span> O</h4>
                    <p>Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus. </p>
                    <ul class="list-inline social-icon">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member wow zoomIn">
                   <img alt="" class="img-responsive img-circle" src="<?php echo(base_url()); ?>assets/Landing_page/img/avatar1.jpg" />

                    <!-- <img src="img/avatar1.jpg" class="img-responsive img-circle" alt=""> -->
                    <h4><span class="navy">Enock</span> Oloo</h4>
                    <p>Enock is the CEO of the HRE group. He also helps the other team members in doing the research about places to help improve customer service</p>
                    <ul class="list-inline social-icon">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4 wow fadeInRight">
                <div class="team-member">

                    <img alt="" class="img-responsive img-circle img-small" src="<?php echo(base_url()); ?>assets/Landing_page/img/avatar2.jpg" />
                    <!-- <img src="img/avatar2.jpg" class="img-responsive img-circle img-small" alt=""> -->
                    <h4><span class="navy">Simon</span> Kahenya</h4>
                    <p>Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus.</p>
                    <ul class="list-inline social-icon">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p> -->
            </div>
        </div>
    </div>
</section>

<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Welcome</h1>
               
            </div>
        </div>
        <div class="row features-block">
            <div class="col-lg-3 features-text wow fadeInLeft">
                <small>INSPINIA</small>
                <h2>Perfectly designed </h2>
                <p>INSPINIA Admin Theme is a premium admin dashboard template with flat design concept. It is fully responsive admin dashboard template built with Bootstrap 3+ Framework, HTML5 and CSS3, Media query. It has a huge collection of reusable UI components and integrated with latest jQuery plugins.</p>
                <a href="" class="btn btn-primary">Learn more</a>
            </div>
            <div class="col-lg-6 text-right m-t-n-lg wow zoomIn">

                <img alt="dashboard" class="img-responsive" src="<?php echo(base_url()); ?>assets/Landing_page/img/iphone.jpg" />
                <!-- <img src="img/iphone.jpg" class="img-responsive" alt="dashboard"> -->
            </div>
            <div class="col-lg-3 features-text text-right wow fadeInRight">
                <small>INSPINIA</small>
                <h2>Perfectly designed </h2>
                <p>INSPINIA Admin Theme is a premium admin dashboard template with flat design concept. It is fully responsive admin dashboard template built with Bootstrap 3+ Framework, HTML5 and CSS3, Media query. It has a huge collection of reusable UI components and integrated with latest jQuery plugins.</p>
                <a href="" class="btn btn-primary">Learn more</a>
            </div>
        </div>
    </div>

</section>

<section id="testimonials" class="navy-section testimonials">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center wow zoomIn">
                <i class="fa fa-comment big-icon"></i>
                <h1>
                    What our users say
                </h1>
                <div class="testimonials-text">
                    <i>"Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)."</i>
                </div>
                <small>
                    <strong>12.02.2014 - Andy Smith</strong>
                </small>
            </div>
        </div>
    </div>

</section>
<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>More and more extra great feautres</h1>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-lg-offset-1 features-text">
                <small>INSPINIA</small>
                <h2>Perfectly designed </h2>
                <i class="fa fa-bar-chart big-icon pull-right"></i>
                <p>INSPINIA Admin Theme is a premium admin dashboard template with flat design concept. It is fully responsive admin dashboard template built with Bootstrap 3+ Framework, HTML5 and CSS3, Media query. It has a huge collection of reusable UI components and integrated with.</p>
            </div>
            <div class="col-lg-5 features-text">
                <small>INSPINIA</small>
                <h2>Perfectly designed </h2>
                <i class="fa fa-bolt big-icon pull-right"></i>
                <p>INSPINIA Admin Theme is a premium admin dashboard template with flat design concept. It is fully responsive admin dashboard template built with Bootstrap 3+ Framework, HTML5 and CSS3, Media query. It has a huge collection of reusable UI components and integrated with.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-lg-offset-1 features-text">
                <small>INSPINIA</small>
                <h2>Perfectly designed </h2>
                <i class="fa fa-clock-o big-icon pull-right"></i>
                <p>INSPINIA Admin Theme is a premium admin dashboard template with flat design concept. It is fully responsive admin dashboard template built with Bootstrap 3+ Framework, HTML5 and CSS3, Media query. It has a huge collection of reusable UI components and integrated with.</p>
            </div>
            <div class="col-lg-5 features-text">
                <small>INSPINIA</small>
                <h2>Perfectly designed </h2>
                <i class="fa fa-users big-icon pull-right"></i>
                <p>INSPINIA Admin Theme is a premium admin dashboard template with flat design concept. It is fully responsive admin dashboard template built with Bootstrap 3+ Framework, HTML5 and CSS3, Media query. It has a huge collection of reusable UI components and integrated with.</p>
            </div>
        </div>
    </div>

<!-- </section>
<section id="pricing" class="pricing">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>App Pricing</h1>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 wow zoomIn">
                <ul class="pricing-plan list-unstyled">
                    <li class="pricing-title">
                        Basic
                    </li>
                    <li class="pricing-desc">
                        Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus.
                    </li>
                    <li class="pricing-price">
                        <span>$16</span> / month
                    </li>
                    <li>
                        Dashboards
                    </li>
                    <li>
                        Projects view
                    </li>
                    <li>
                        Contacts
                    </li>
                    <li>
                        Calendar
                    </li>
                    <li>
                        AngularJs
                    </li>
                    <li>
                        <a class="btn btn-primary btn-xs" href="#">Signup</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4 wow zoomIn">
                <ul class="pricing-plan list-unstyled selected">
                    <li class="pricing-title">
                        Standard
                    </li>
                    <li class="pricing-desc">
                        Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus.
                    </li>
                    <li class="pricing-price">
                        <span>$22</span> / month
                    </li>
                    <li>
                        Dashboards
                    </li>
                    <li>
                        Projects view
                    </li>
                    <li>
                        Contacts
                    </li>
                    <li>
                        Calendar
                    </li>
                    <li>
                        AngularJs
                    </li>
                    <li>
                        <strong>Support platform</strong>
                    </li>
                    <li class="plan-action">
                        <a class="btn btn-primary btn-xs" href="#">Signup</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4 wow zoomIn">
                <ul class="pricing-plan list-unstyled">
                    <li class="pricing-title">
                        Premium
                    </li>
                    <li class="pricing-desc">
                        Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus.
                    </li>
                    <li class="pricing-price">
                        <span>$160</span> / month
                    </li>
                    <li>
                        Dashboards
                    </li>
                    <li>
                        Projects view
                    </li>
                    <li>
                        Contacts
                    </li>
                    <li>
                        Calendar
                    </li>
                    <li>
                        AngularJs
                    </li>
                    <li>
                        <a class="btn btn-primary btn-xs" href="#">Signup</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row m-t-lg">
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg">
                <p>*Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. <span class="navy">Various versions</span>  have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
            </div>
        </div>
    </div>

</section> -->

<section id="contact" class="gray-section contact">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Contact Us</h1>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
            </div>
        </div>
        <div class="row m-b-lg">
            <div class="col-lg-3 col-lg-offset-3">
                <address>
                    <strong><span class="navy">Company name, Inc.</span></strong><br/>
                    795 Folsom Ave, Suite 600<br/>
                    San Francisco, CA 94107<br/>
                    <abbr title="Phone">P:</abbr> (123) 456-7890
                </address>
            </div>
            <div class="col-lg-4">
                <p class="text-color">
                    Consectetur adipisicing elit. Aut eaque, totam corporis laboriosam veritatis quis ad perspiciatis, totam corporis laboriosam veritatis, consectetur adipisicing elit quos non quis ad perspiciatis, totam corporis ea,
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="mailto:test@email.com" class="btn btn-primary">Send us mail</a>
                <p class="m-t-sm">
                    Or follow us on social platform
                </p>
                <ul class="list-inline social-icon">
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                <p><strong>&copy; 2015 Company Name</strong><br/> consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
            </div>
        </div>
    </div>
</section>

<script src="<?php echo(base_url()); ?>assets/Landing_page/js/jquery-2.1.1.js"></script>
<script src="<?php echo(base_url()); ?>assets/Landing_page/js/pace.min.js"></script>
<script src="<?php echo(base_url()); ?>assets/Landing_page/js/bootstrap.min.js"></script>
<script src="<?php echo(base_url()); ?>assets/Landing_page/js/classie.js"></script>
<script src="<?php echo(base_url()); ?>assets/Landing_page/js/cbpAnimatedHeader.js"></script>
<script src="<?php echo(base_url()); ?>assets/Landing_page/js/wow.min.js"></script>
<script src="<?php echo(base_url()); ?>assets/Landing_page/js/inspinia.js"></script>
</body>
</html>