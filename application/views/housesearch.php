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
                                                <label>Location</label>
                                                    <select name="house_location" class="form-control">  
                                                     <option>--SELECT--</option>                                                                                                                   
                                                     <option>Langata</option>
                                                     <option>Ngong</option>
                                                     <option>Rongai</option>                                                               
                                                     <option>Dagoretti</option>                                                               
                                                     <option>Adams</option>                                                               
                                                     <option>Kileleshwa</option>                                                               
                                                     <option>Kibera</option>                                                               
                                                     <option>Buruburu</option>                                                               
                                                     <option>Baba dogo</option>                                                               
                                                    </select>    

                                                <label>Type of house</label>
                                                    <select name="house_type" class="form-control"> 
                                                     <option>--SELECT--</option>                                                                                                                   
                                                     <option>Single room</option>
                                                     <option>Double room</option>
                                                     <option>Servant quarter</option>
                                                     <option>Bed sitter</option>
                                                     <option>One bedroom</option>
                                                     <option>Two bedroom</option>
                                                     <option>Three bedroom+</option>
                                                    </select>

                                                <label>Price range.</label>
                                                    <select name="price_range" class="form-control">                                                                 
                                                     <option>--SELECT--</option>
                                                     <option>1000-3000</option>
                                                     <option>3001-5000</option>
                                                     <option>5001-10000</option>
                                                     <option>10001+</option>
                                                    </select>

                                                <div class="form-group"><label>Health facility</label> <input type="email" name="" placeholder="Any recreational facility you wish to find within or around" class="form-control"></div>

                                                <div class="form-group"><label>Recreational facility</label> <input type="email" name="" placeholder="street/avenue do you wish to find a home" class="form-control"></div>
                                                
                                                <div class="form-group"><label>main road</label> <input type="email" name="" placeholder="street/avenue do you wish to find a home" class="form-control"></div>

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
                            <div class="carousel slide" id="carousel1">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img alt="image" class="img-responsive" src="<?php echo(base_url()); ?>assets/img/p_big3.jpg">
                                    </div>
                                    <div class="item">
                                        <img alt="image"  class="img-responsive" src="<?php echo(base_url()); ?>assets/img/p_big1.jpg">
                                    </div>
                                </div>
                                <a data-slide="prev" href="#carousel1" class="left carousel-control">
                                    <span class="icon-prev"></span>
                                </a>
                                <a data-slide="next" href="#carousel1" class="right carousel-control">
                                    <span class="icon-next"></span>
                                </a>
                            </div>

                            <form action="<?= base_url();?>index.php/housesearch/post_the_rating" id="doRating" method="post" enctype="multipart/form-data">
                                                           
                            
                             <button id="rate1" onClick="rateone()" type="button"><i class="fa fa-star"></i></button>
                             <button id="rate2" onClick="ratetwo()" type="button"><i class="fa fa-star"></i></button>
                             <button id="rate3" onClick="ratethree()" type="button"><i class="fa fa-star"></i></button>
                             <button id="rate4" onClick="ratefour()" type="button"><i class="fa fa-star"></i></button>
                             <!-- <button id="rate5" onClick="ratefive()" type="button"><i class="fa fa-star"></i></button> -->
                             <button id="rate5" onClick="ratefive()" class="btn btn-default  dim " type="button"><i class="fa fa-star"></i></button>

                             <input id="ratingvalue" class="hide" type="text" name="rating">                             
                             <input class="hide" type="text" name="house_id"> 

                             <button id="removeratings" type="button" class="btn btn-default btn-xs" onClick="removerating()"><i class="fa fa-warning">clear</i></button>

                             <button class="btn btn-primary btn-xs  dim " type="submit">rate</button>
                         </form>
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