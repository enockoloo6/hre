<?php require_once("includes/header.php"); ?>


    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Housing Recommendation</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">This is</a>
                </li>
                <li class="active">
                    <strong>Recommender page</strong>
                </li>
            </ol>
        </div>
        <div class="col-sm-8">
            <div class="title-action">
                <a href="<?= base_url();?>index.php/google_map" class="btn btn-primary">Search for locations using google map</a>

                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#housesearchModal">Search for a house</a>
            </div>
        </div>
    </div>

     <!--modal form for new houses -->

                            <div class="modal inmodal" id="housesearchModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-institution modal-icon"></i>
                                            <h4 class="modal-title">House details</h4>
                                            <small class="font-bold">Fill in the details of the house you need and we can help you find it.</small>
                                            <h3 class="font-bold">Leave blank if not applicable.</h3>

                                        </div>

                                        <form action="<?= base_url();?>index.php/post_new_house" method="post" enctype="multipart/form-data">
                                        <div class="modal-body">
                                                <div class="form-group"><label>Location</label> <input type="email" name="" placeholder="Location choice" class="form-control"></div>

                                                <div class="form-group"><label>Price range.</label> <input type="email" name="" placeholder="Enter your range of price from the menu provided" class="form-control"></div>

                                                <div class="form-group"><label>type of house</label> <input type="email" name="" placeholder="house type" class="form-control"></div>

                                                <div class="form-group"><label>Health facility</label> <input type="email" name="" placeholder="Any recreational facility you wish to find within or around" class="form-control"></div>

                                                <div class="form-group"><label>Recreational facility</label> <input type="email" name="" placeholder="street/avenue do you wish to find a home" class="form-control"></div>
                                                
                                                <div class="form-group"><label>main road</label> <input type="email" name="" placeholder="street/avenue do you wish to find a home" class="form-control"></div>

                                                <div class="form-group hide"><label>Single home or shared</label> <input type="email" name="" placeholder="answer with yes no" class="form-control"></div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Search</button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>


                            <!-- end of the modal form -->



        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-5">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Some of the recommendations for you</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div class="carousel slide" id="carousel1">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img alt="image" class="img-responsive" src="<?php echo(base_url()); ?>assets/img/p_big3.jpg">
                                    </div>
                                    <div class="item">
                                        <img alt="image"  class="img-responsive" src="<?php echo(base_url()); ?>assets/img/p_big1.jpg">
                                    </div>
                                    <div class="item ">
                                        <img alt="image" class="img-responsive" src="<?php echo(base_url()); ?>assets/img/p_big2.jpg">
                                    </div>

                                </div>
                                <a data-slide="prev" href="#carousel1" class="left carousel-control">
                                    <span class="icon-prev"></span>
                                </a>
                                <a data-slide="next" href="#carousel1" class="right carousel-control">
                                    <span class="icon-next"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <!-- <h5>Animation and Caption</h5> -->
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content ">
                            <div class="carousel slide" id="carousel2">
                                <ol class="carousel-indicators">
                                    <li data-slide-to="0" data-target="#carousel2"  class="active"></li>
                                    <li data-slide-to="1" data-target="#carousel2"></li>
                                    <li data-slide-to="2" data-target="#carousel2" class=""></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img alt="image"  class="img-responsive" src="<?php echo(base_url()); ?>assets/img/p_big1.jpg">
                                        <div class="carousel-caption">
                                            <p>This is simple caption 1</p>
                                        </div>
                                    </div>
                                    <div class="item ">
                                        <img alt="image"  class="img-responsive" src="<?php echo(base_url()); ?>assets/img/p_big3.jpg">
                                        <div class="carousel-caption">
                                            <p>This is simple caption 2</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img alt="image"  class="img-responsive" src="<?php echo(base_url()); ?>assets/img/p_big2.jpg">
                                        <div class="carousel-caption">
                                            <p>This is simple caption 3</p>
                                        </div>
                                    </div>
                                </div>
                                <a data-slide="prev" href="#carousel2" class="left carousel-control">
                                    <span class="icon-prev"></span>
                                </a>
                                <a data-slide="next" href="#carousel2" class="right carousel-control">
                                    <span class="icon-next"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Recommended houses</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div class="carousel slide" id="carousel3">
                                <div class="carousel-inner">
                                    <div class="item gallery active left">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <img alt="image" class="<?php echo(base_url()); ?>assets/img-responsive" src="img/p_big1.jpg">
                                            </div>
                                            <div class="col-sm-6">
                                                <img alt="image" class="img-responsive" src="<?php echo(base_url()); ?>assets/img/p_big2.jpg">
                                            </div>
                                            <div class="col-sm-6">
                                                <img alt="image"  class="img-responsive"  src="<?php echo(base_url()); ?>assets/img/p_big3.jpg">
                                            </div>
                                            <div class="col-sm-6">
                                                <img alt="image"  class="img-responsive" src="<?php echo(base_url()); ?>assets/img/p_big1.jpg">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item gallery next left">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <img alt="image"  class="img-responsive" src="<?php echo(base_url()); ?>assets/img/p_big3.jpg">
                                            </div>
                                            <div class="col-sm-6">
                                                <img alt="image"  class="img-responsive" src="<?php echo(base_url()); ?>assets/img/p_big1.jpg">
                                            </div>
                                            <div class="col-sm-6">
                                                <img alt="image"  class="img-responsive"  src="<?php echo(base_url()); ?>assets/img/p_big2.jpg">
                                            </div>
                                            <div class="col-sm-6">
                                                <img alt="image"  class="img-responsive" src="<?php echo(base_url()); ?>assets/img/p_big1.jpg">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item gallery">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <img alt="image"  class="img-responsive" src="<?php echo(base_url()); ?>assets/img/p_big2.jpg">
                                            </div>
                                            <div class="col-sm-6">
                                                <img alt="image"  class="img-responsive" src="<?php echo(base_url()); ?>assets/img/p_big3.jpg">
                                            </div>
                                            <div class="col-sm-6">
                                                <img alt="image"  class="img-responsive"  src="<?php echo(base_url()); ?>assets/img/p_big1.jpg">
                                            </div>
                                            <div class="col-sm-6">
                                                <img alt="image" class="img-responsive" src="<?php echo(base_url()); ?>assets/img/p_big2.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a data-slide="prev" href="#carousel3" class="left carousel-control">
                                    <span class="icon-prev"></span>
                                </a>
                                <a data-slide="next" href="#carousel3" class="right carousel-control">
                                    <span class="icon-next"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- message -->

         <div class="small-chat-box fadeInRight animated">

            <div class="heading" draggable="true">
                <small class="chat-date pull-right">
                    02.19.2015
                </small>
                Send us a Message
            </div>

            <div class="form-chat">
                <div class="input-group input-group-sm"><input type="text" class="form-control"> <span class="input-group-btn"> <button
                        class="btn btn-primary" type="button">Send
                </button> </span></div>
            </div>

        </div>

         <div id="small-chat">
            <span class="badge badge-warning pull-right">Send us a message</span>
            <a class="open-small-chat">
                <i class="fa fa-comments"></i>
            </a>
        </div>

        <!-- message end-->
        <?php require_once("includes/footer.php"); 