<?php require_once("includes/header.php"); ?>

    <div class="row wrapper border-bottom white-bg page-heading" xmlns="http://www.w3.org/1999/html">
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
                <a href="<?= base_url();?>index.php/housesearch/show_recommendations" class="btn btn-primary">See recommended houses</a>
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

                                        </div>

                                        <form action="<?= base_url();?>index.php/housesearch/search_results" id="form" method="post" enctype="multipart/form-data">
                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label>County</label>
                                                <select name="county" id="json-one"id="country" size="1" class="form-control"
                                                        title="Name of Your County" admin="1" frontend="1">
                                                    <option selected value="48">--SELECT--</option>
                                                    <option value="1">Baringo County</option>
                                                    <option value="2">Bomet County</option>
                                                    <option value="3">Bungoma County</option>
                                                    <option value="4">Busia County</option>
                                                    <option value="5">Elgeyo Marakwet County</option>
                                                    <option value="6">Embu County</option>
                                                    <option value="7">Garissa County</option>
                                                    <option value="8">Homa Bay County</option>
                                                    <option value="9">Isiolo County</option>
                                                    <option value="10">Kajiado County</option>
                                                    <option value="11">Kakamega County</option>
                                                    <option value="12">Kericho County</option>
                                                    <option value="13">Kiambu County</option>
                                                    <option value="14">Kilifi County</option>
                                                    <option value="15">Kirinyaga County</option>
                                                    <option value="16">Kisii County</option>
                                                    <option value="17">Kisumu County</option>
                                                    <option value="18">Kitui County</option>
                                                    <option value="19">Kwale County</option>
                                                    <option value="20">Laikipia County</option>
                                                    <option value="21">Lamu County</option>
                                                    <option value="22">Machakos County</option>
                                                    <option value="23">Makueni County</option>
                                                    <option value="24">Mandera County</option>
                                                    <option value="25">Meru County</option>
                                                    <option value="26">Migori County</option>
                                                    <option value="27">Marsabit County</option>
                                                    <option value="28">Mombasa County</option>
                                                    <option value="29">Muranga County</option>
                                                    <option value="30">Nairobi County</option>
                                                    <option value="31">Nakuru County</option>
                                                    <option value="32">Nandi County</option>
                                                    <option value="33">Narok County</option>
                                                    <option value="34">Nyamira County</option>
                                                    <option value="35">Nyandarua County</option>
                                                    <option value="36">Nyeri County</option>
                                                    <option value="37">Samburu County</option>
                                                    <option value="38">Siaya County</option>
                                                    <option value="39">Taita Taveta County</option>
                                                    <option value="40">Tana River County</option>
                                                    <option value="41">Tharaka Nithi County</option>
                                                    <option value="42">Trans Nzoia County</option>
                                                    <option value="43">Turkana County</option>
                                                    <option value="44">Uasin Gishu County</option>
                                                    <option value="45">Vihiga County</option>
                                                    <option value="46">Wajir County</option>
                                                    <option value="47">West Pokot County</option>

                                                </select>
                                            </div>


                                            <label>Location in the selected county</label>:<span class="star_class star_class" style="">*</span>

                                            <select name="house_location" id="json-two" class="form-control"
                                                            title="Location" admin="1" frontend="1">
                                                        <option>Select the county first</option>
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
                                                    <select name="price" class="form-control">
                                                     <option>--SELECT--</option>
                                                     <option value="10003000">1000-3000</option>
                                                     <option value="30015000">3001-5000</option>
                                                     <option value="500110000">5001-10000</option>
                                                    <option value="1000115000">10001-15000</option>
                                                    <option value="1500120000">15000-20000</option>
                                                    <option value="above20">20000+</option>
                                                </select>

<!--                                                <div class="form-group"><label>Health facility</label> <input type="text" name="f_name" placeholder="Any recreational facility you wish to find within or around" class="form-control"></div>-->

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Search</button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                <!-- end of the modal form -->

        <div class="wrapper wrapper-content">
            <div class="row">



                <div class="col-lg-3">
                    <div class="ibox">
                        <div class="ibox-content">
                            <div class="ibox-heading">
                                <h4 style="color: #17a185">sample recommendations</h4><br>
                            </div>
                            <div>

                              <?php if($AGE_BASED_RECOMMENDATION != ""){ ?>
                                <h4 style="color: #b3b3b3">people around your age also rated.. </h4>
                               <?php } ?>

                                <?php
                                $house_count=0;

                                if($AGE_BASED_RECOMMENDATION != ""){
                                foreach($AGE_BASED_RECOMMENDATION as $gender_house_r){
                                    $house_count++;
                                    ?>


                                    <div class="ibox float-e-margins">
                                        <div class="ibox-content ">
                                            <div class="carousel-inner">
                                                <div class="item active">

                                                    <?php foreach ($IMAGE as $image):  if ($image->Image_id == $gender_house_r->house_id) {?>

                                                    <a data-target="#see_house_details_<?php echo($gender_house_r->house_id); ?>" data-toggle="modal" href="#"><img alt="House image" class="img-responsive" src="<?php echo(base_url()).$image->image_name; ?>"></a>

                                                    <div class="carousel-caption">
                                                        <b>House no <?php echo ' '.$gender_house_r->house_id ?></b><br> <p>click on the house image to view details</p>
                                                    </div>


                                                    <div class="modal inmodal" id="see_house_details_<?php echo($gender_house_r->house_id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content animated bounceInRight">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

                                                                    <h4 class="modal-title">Details for <strong><?php echo($gender_house_r->type); ?></strong> </h4>
                                                                    <img alt="House image" class="img-responsive" src="<?php echo(base_url()).$image->image_name; ?>">

                                                                </div>
                                                                <div class="modal-body">

                                                                    <div class="form-group">
                                                                        <label>Owner no:</label>
                                                                        <input class="form-control" value="<?php echo($gender_house_r->owner); ?>" disabled="disabled">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>Description</label>
                                                                        <input type="text" class="form-control" value="<?php echo($gender_house_r->type); ?>" disabled="disabled">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>Date posted</label>
                                                                        <input type="text" class="form-control" value="<?php echo($gender_house_r->house_post_date); ?>" disabled="disabled">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>House location</label>
                                                                        <input type="text" class="form-control" value="<?php echo($gender_house_r->location); ?>" disabled="disabled">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>Price</label>
                                                                        <input type="text" class="form-control" value="<?php echo($gender_house_r->price); ?>" disabled="disabled">
                                                                    </div>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <?php } endforeach;?>

                                            </div>
                                        </div>
                                    </div>

                                <?php
                                }
                                }
                                ?>

                             <?php if($INTEREST_BASED_RECOMMENDATION != ""){ ?>
                                <h4 style="color: #b3b3b3">Ipeople with interest like yours also rated..</h4>
                             <?php } ?>

                                <?php

                                $house_count=0;

                                if($INTEREST_BASED_RECOMMENDATION != ""){
                                    foreach($INTEREST_BASED_RECOMMENDATION as $interest_house_r){
                                        $house_count++;
                                        ?>


                                        <div class="ibox float-e-margins">
                                            <div class="ibox-content ">
                                                <div class="carousel-inner">
                                                    <div class="item active">

                                                        <?php foreach ($IMAGE as $image):  if ($image->Image_id == $interest_house_r->house_id) {?>

                                                        <a data-target="#see_house_details_<?php echo($interest_house_r->house_id); ?>" data-toggle="modal" href="#"><img alt="House image" class="img-responsive" src="<?php echo(base_url()).$image->image_name; ?>"></a>

                                                        <div class="carousel-caption">
                                                            <p>House no <?php echo ' '.$interest_house_r->house_id ?></p>
                                                        </div>


                                                        <div class="modal inmodal" id="see_house_details_<?php echo($interest_house_r->house_id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content animated bounceInRight">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

                                                                        <h4 class="modal-title">Details for <strong><?php echo($interest_house_r->type); ?></strong> </h4>
                                                                        <img alt="House image" class="img-responsive" src="<?php echo(base_url()).$image->image_name; ?>">

                                                                    </div>
                                                                    <div class="modal-body">

                                                                        <div class="form-group">
                                                                            <label>Owner no:</label>
                                                                            <input class="form-control" value="<?php echo($interest_house_r->owner); ?>" disabled="disabled">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label>Description</label>
                                                                            <input type="text" class="form-control" value="<?php echo($interest_house_r->type); ?>" disabled="disabled">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label>Date posted</label>
                                                                            <input type="text" class="form-control" value="<?php echo($interest_house_r->house_post_date); ?>" disabled="disabled">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label>House location</label>
                                                                            <input type="text" class="form-control" value="<?php echo($interest_house_r->location); ?>" disabled="disabled">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label>Price</label>
                                                                            <input type="text" class="form-control" value="<?php echo($interest_house_r->price); ?>" disabled="disabled">
                                                                        </div>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>




                                                    <?php } endforeach;?>

                                                </div>
                                            </div>
                                        </div>

                                        <?php
                                    }
                                }
                                ?>


                            </div>

                            <?php if($INTEREST_BASED_RECOMMENDATION != ""){ ?>
                            <a href="<?= base_url();?>index.php/housesearch/show_recommendations"><b>See all recommended houses</b></a>
                           <?php  }
                            if($INTEREST_BASED_RECOMMENDATION == "" && $OCCUPATION_BASED_RECOMMENDATION == "" && $AGE_BASED_RECOMMENDATION == "" && $GENDER_BASED_RECOMMENDATION == ""){?>
                             <b> No recommendations yet,</b><br> <b> fill in required data first</b> <?php }?>
                        </div>
                    </div>
                </div>

 
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">

                        <div class="ibox-content ">
                            <div class="carousel slide" id="carousel2">
                                <ol class="carousel-indicators">
                                    <li data-slide-to="0" data-target="#carousel2"  class="active"></li>
                                    <li data-slide-to="1" data-target="#carousel2"></li>
                                    <li data-slide-to="2" data-target="#carousel2" class=""></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img alt="image"  class="img-responsive" src="<?php echo(base_url()); ?>assets/img/auto/auto4.jpg">
                                        <div class="carousel-caption">
                                            <p>HRE</p>
                                        </div>
                                    </div>
                                    <div class="item ">
                                        <img alt="image"  class="img-responsive" src="<?php echo(base_url()); ?>assets/img/auto/auto2.jpg">
                                        <div class="carousel-caption">
                                            <p>HRE 2</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img alt="image"  class="img-responsive" src="<?php echo(base_url()); ?>assets/img/auto/auto3.jpg">
                                        <div class="carousel-caption">
                                            <p>HRE 3</p>
                                        </div>
                                    </div>
                                   <div class="item">
                                        <img alt="image"  class="img-responsive" src="<?php echo(base_url()); ?>assets/img/auto/auto1.jpg">
                                        <div class="carousel-caption">
                                            <p>HRE 3</p>
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

                    <div class="col-lg-12">
                        <?php $success_rating = $this->session->flashdata('ratingsuccess');
                        if($success_rating){
                            ?>
                            <div class="alert alert-success">
                                <?php echo($success_rating); ?>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        <?php foreach ($USER_DETAILS as $profile): ?>
                            <div class="text-center">
                                <a class="btn btn-xs btn-default" a data-target="#edit_profile_modal_<?php echo($profile->user_id); ?>" data-toggle="modal" href="#"><i class="fa fa-edit"></i> Edit your personal details </a>


                                <div class="modal inmodal" id="edit_profile_modal_<?php echo($profile->user_id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content animated bounceInRight">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

                                                <h4 class="modal-title">Hello<strong><?php echo(" ".$profile->f_name." edit your details here"); ?></strong> </h4>
                                            </div>
                                            <div class="modal-body">
                                                <form style="color: black;" class="m-t" method="post" role="form" id="form" action="<?php echo(base_url()); ?>index.php/register/edit_user">
                                                    <div class="form-group">
                                                        <label>First name:</label>
                                                        <input name="f_name" type="text" class="form-control" placeholder="First name" value="<?php echo($profile->f_name); ?>" required="">
                                                    </div>
                                                    <div class="hide"><input type="text" value="<?php echo( $this->uri->segment(1));?>" name="theuri"></div>

                                                    <div class="form-group">
                                                        <label>Other names:</label>
                                                        <input name="other_names" type="text" class="form-control" placeholder="Other names" value="<?php echo($profile->other_names); ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="email" type="email" class="form-control" placeholder="Email" value="<?php echo($profile->email); ?>" required="">
                                                    </div>
                                                    <input type="hidden" name="user_id" value="<?php echo($profile->user_id); ?>" >
                                                    <div class="form-group">
                                                        <input name="password" type="password" class="form-control" placeholder="Password" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label>ID no:</label>
                                                        <input name="national_id" type="number" class="form-control" value="<?php echo($profile->national_id); ?>" placeholder="National ID number" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Phone no:</label>
                                                        <input name="phone_number" type="tel" class="form-control" placeholder="Phone Number" value="<?php echo($profile->phone_number); ?>" required="">
                                                    </div>


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-white" data-dismiss="modal">Cancel</button>
                                                <input type="submit" class="btn btn-primary" value="Update" >
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; ?>

                    </div>
                    <div class="col-lg-4"></div>

                </div>


                <div class="col-lg-3">

    <?php if($CHECK_AGE_GENDER_OCCUPATION_INTEREST){?>
                  <div class="ibox ">
                      <?php   ?>

                        <div class="ibox-title">
                            <h5><div style="color: red"> More information is required</div></h5>
                        </div>

                        <div class="ibox-content">

                                <div class="sk-spinner sk-spinner-double-bounce">
                                    <div class="sk-double-bounce1"> <a onClick="More_options_addition_to_house_search()"> <i class="fa fa-arrow-down"> click left</i></a> </div>
                                    <div class="sk-double-bounce2"> <a onClick="More_options_addition_to_house_search()"> <i class="fa fa-arrow-down"></i></a> </div>
                                </div>
                                <b style="color: #3a4459"><a onClick="More_options_addition_to_house_search()">click here to add</a></b>
                        </div>

                        <!-- extra information-->
                        <div id="more_information" class="hide" >
                                <div class="ibox-content">

                                    <div class="ibox-heading"><span class="star_class star_class" style="color: darkred"><strong>These information required to help in recommendation*</strong></span></div><br>

                                    <div class="row">
                                        <div class="m-t-none m-b">
                                            <form action="<?= base_url();?>index.php/register/post_extra_user_details" id="form" method="post" enctype="multipart/form-data" autocomplete="on">
                                                <div class="form-group"><label>Occupation</label> <input type="text" name="occupation" placeholder="eg teacher, farmer,banker etc" class="form-control"></div>
                                                <div class="form-group"><label>Interest</label> <input type="text" name="interest" placeholder="eg swimming, football etc" class="form-control"></div>
                                                <div class="hide"><input type="text" value="<?php echo( $this->uri->segment(1));?>" name="theuri"></div>
                                                <div class="form-group"><label>Gender</label>
                                                    <select name="gender" class="form-control">
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                </div>

                                                <div class="form-group"><label>Age group</label>

                                                    <select name="age_group" class="form-control">
                                                        <option>--SELECT--</option>
                                                        <option>below 20</option>
                                                        <option>20-25</option>
                                                        <option>25-30</option>

                                                        <option>30-35</option>
                                                        <option>35-40</option>
                                                        <option>40-45</option>
                                                        <option>45-50</option>
                                                        <option>50-55</option>
                                                        <option>55+</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Submit</strong></button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                        </div>
                        <!-- extra information-->
                    </div>

<?php } ?>

                    <?php $success_post = $this->session->flashdata('datasuccess');

                    if($success_post){
                    ?>
                    <div class="ibox">
                        <div class="ibox-content">
                            <div class="alert alert-success">
                                <?php echo($success_post); ?>
                            </div>
                        </div>
                    </div>
                    <?php }

                    $denied_post = $this->session->flashdata('datadenied'); 
                    if($denied_post){ ?>

                    <div class="ibox">
                        <div class="ibox-content">
                            <div class="alert alert-danger">
                                <?php echo($denied_post); ?>
                            </div>
                        </div>
                    </div>

                    <?php } ?>

                    <div class="ibox">
                        <div class="ibox-content">
                            <div class="ibox-heading">
                                <h4 style="color: #17a185">sample recommendations</h4><br>
                            </div>
                            <div>

                                <?php if($GENDER_BASED_RECOMMENDATION != ""){ ?>
                                    <h4 style="color: #b3b3b3">same gender also rated..</h4>
                                <?php } ?>

                                <?php
                                if($GENDER_BASED_RECOMMENDATION != ""){

                                $house_count=0;
                                foreach($GENDER_BASED_RECOMMENDATION as $gender_house_r){
                                    $house_count++;
                                    ?>


                                    <div class="ibox float-e-margins">
                                        <div class="ibox-content ">
                                            <div class="carousel-inner">
                                                <div class="item active">

                                                    <?php foreach ($IMAGE as $image):  if ($image->Image_id == $gender_house_r->house_id ) { ?>

                                                        <a data-target="#see_house_details_<?php echo($gender_house_r->house_id); ?>" data-toggle="modal" href="#"><img alt="House image" class="img-responsive" src="<?php echo(base_url()).$image->image_name; ?>"></a>

                                                        <div class="carousel-caption">
                                                            <p>House no <?php echo ' '.$gender_house_r->house_id ?></p>
                                                        </div>


                                                                <div class="modal inmodal" id="see_house_details_<?php echo($gender_house_r->house_id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content animated bounceInRight">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

                                                                                <h4 class="modal-title">Details for <strong><?php echo($gender_house_r->type); ?></strong> </h4>
                                                                                <img alt="House image" class="img-responsive" src="<?php echo(base_url()).$image->image_name; ?>">

                                                                            </div>
                                                                            <div class="modal-body">
                                                                                
                                                                                    <div class="form-group">
                                                                                        <label>Owner no:</label>
                                                                                        <input class="form-control" value="<?php echo($gender_house_r->owner); ?>" disabled="disabled">
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label>Description</label>
                                                                                        <input type="text" class="form-control" value="<?php echo($gender_house_r->type); ?>" disabled="disabled">
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label>Date posted</label>
                                                                                        <input type="text" class="form-control" value="<?php echo($gender_house_r->house_post_date); ?>" disabled="disabled">
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                    <label>House location</label>
                                                                                    <input type="text" class="form-control" value="<?php echo($gender_house_r->location); ?>" disabled="disabled">
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label>Price</label>
                                                                                        <input type="text" class="form-control" value="<?php echo($gender_house_r->price); ?>" disabled="disabled">
                                                                                    </div>
                                                            
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>                                                                                
                                                                            </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>




                                                    <?php } endforeach;?>

                                                </div>
                                            </div>
                                        </div>


                                   <!--  <?php //echo $house_count.' '.$gender_house_r->type.'<br><br>'; ?> -->
                                <?php
                                }
                                }
                                ?>


                                <?php if($OCCUPATION_BASED_RECOMMENDATION != ""){ ?>
                                    <h4 style="color: #b3b3b3">people with similar occupations also liked..</h4>
                                <?php } ?>


                                <?php

                                $house_count=0;

                                if($OCCUPATION_BASED_RECOMMENDATION != ""){
                                    foreach($OCCUPATION_BASED_RECOMMENDATION as $occupation_house_r){
                                        $house_count++;
                                        ?>

                                        <div class="ibox float-e-margins">
                                            <div class="ibox-content ">
                                                <div class="carousel-inner">
                                                    <div class="item active">

                                                        <?php foreach ($IMAGE as $image):  if ($image->Image_id == $occupation_house_r->house_id) {?>

                                                        <a data-target="#see_house_details_<?php echo($occupation_house_r->house_id); ?>" data-toggle="modal" href="#"><img alt="House image" class="img-responsive" src="<?php echo(base_url()).$image->image_name; ?>"></a>

                                                        <div class="carousel-caption">
                                                            <p>House no <?php echo ' '.$occupation_house_r->house_id ?></p>
                                                        </div>


                                                        <div class="modal inmodal" id="see_house_details_<?php echo($occupation_house_r->house_id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content animated bounceInRight">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

                                                                        <h4 class="modal-title">Details for <strong><?php echo($occupation_house_r->type); ?></strong> </h4>
                                                                        <img alt="House image" class="img-responsive" src="<?php echo(base_url()).$image->image_name; ?>">

                                                                    </div>
                                                                    <div class="modal-body">

                                                                        <div class="form-group">
                                                                            <label>Owner no:</label>
                                                                            <input class="form-control" value="<?php echo($occupation_house_r->owner); ?>" disabled="disabled">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label>Description</label>
                                                                            <input type="text" class="form-control" value="<?php echo($occupation_house_r->type); ?>" disabled="disabled">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label>Date posted</label>
                                                                            <input type="text" class="form-control" value="<?php echo($occupation_house_r->house_post_date); ?>" disabled="disabled">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label>House location</label>
                                                                            <input type="text" class="form-control" value="<?php echo($occupation_house_r->location); ?>" disabled="disabled">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label>Price</label>
                                                                            <input type="text" class="form-control" value="<?php echo($occupation_house_r->price); ?>" disabled="disabled">
                                                                        </div>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>




                                                    <?php } endforeach;?>

                                                </div>
                                            </div>
                                        </div>

                                        <?php
                                    }
                                }
                                ?>





                          </div>

                            <?php if($INTEREST_BASED_RECOMMENDATION != ""){ ?>
                                <a href="<?= base_url();?>index.php/housesearch/show_recommendations"><b>See all recommended houses</b></a>
                            <?php  }
                           if($INTEREST_BASED_RECOMMENDATION == "" && $OCCUPATION_BASED_RECOMMENDATION == "" && $AGE_BASED_RECOMMENDATION == "" && $GENDER_BASED_RECOMMENDATION == ""){?>
                             <b> No recommendations yet,</b><br> <b> fill in required data first</b> <?php }?>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    <!-- message -->

    <div class="small-chat-box fadeInUpBig animated">
        <div class="heading" draggable="true">
            <small class="chat-date pull-right">
                02.19.2015
            </small>
            <p> Send us a Message </p>
        </div>

        <div class="form-chat">

            <form action="<?= base_url();?>index.php/housesearch/post_messages" id="form" method="post" enctype="multipart/form-data" autocomplete="on">
                <button type="submit">Check House details for owner no and select it here</button>
                <label>Recipient number:</label>
                <select name="recipient" class="form-control">
                    <?php foreach($USERS_NUMBERS as $no){ ?>
                        <option> <?php echo ($no->user_id); ?> </option>
                    <?php } ?>
                </select>
                <div class="hide"><input type="text" value="<?php echo( $this->uri->segment(1));?>" name="theuri"></div>
                <label>Text:</label>
                <div class="form-group">
                    <textarea class="form-control" required="required" name="message" rows="5">
                        <?php foreach ($USER_DETAILS as $profile): echo("\nPhone: ".$profile->phone_number."\n"."Email: ".$profile->email); endforeach; ?>
                    </textarea>
                </div>

                <button class="btn btn-sm btn-primary pull-right " type="submit">Send</button>
            </form>
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