<?php require_once("includes/header.php"); ?>

    <div class="fh-breadcrumb">

                <div class="fh-column">
                    <div class="full-height-scroll">
                        <ul class="list-group elements-list" id="showrater">

                        <li><h4 style="color: #17a185">Occupation based</h4></li>

                          <?php
                            if($ALL_OCCUPATION_BASED_RECOMMENDATION != ""){
                                foreach($ALL_OCCUPATION_BASED_RECOMMENDATION as $occupation_house_r){
                                    foreach($occupation_house_r as $houses){
                            ?>
                            <li class="list-group-item">
                                <a data-toggle="tab" href="<?php echo '#tab-'.$houses->house_id ?>">
                                    <small class="pull-right text-muted"> <?php echo " ".$houses->house_post_date ?></small>
                                    <strong><?php echo "House ".$houses->house_id; ?></strong>
<!--                                    <strong>--><?php //echo $houses->type; ?><!--</strong>-->
                                    <div class="small m-t-xs">
                                        <p>
                                          <?php if ($houses->house_description==NULL || $houses->house_description=="") {

                                            echo "No house description";
                                          }
                                          else{
                                            echo $houses->house_description;
                                          }
                                          ?>.
                                        </p>
                                        <p class="m-b-none">
                                            <i class="fa fa-map-marker"></i> <?php echo $houses->location; ?>
                                        </p>


                                    </div>
                                </a>
                            </li>

                            <?php }}} ?>
                            <li><h4 style="color: #17a185">Interest based</h4></li>

                            <?php
                            if($ALL_INTEREST_BASED_RECOMMENDATION != ""){
                                foreach($ALL_INTEREST_BASED_RECOMMENDATION as $interest_house_r){
                                    foreach($interest_house_r as $houses){?>

                                        <li class="list-group-item">
                                            <a data-toggle="tab" href="<?php echo '#tab-'.$houses->house_id ?>">
                                                <small class="pull-right text-muted"> <?php echo " ".$houses->house_post_date ?></small>
                                                <strong><?php echo "House ".$houses->house_id; ?></strong>
                                                <div class="small m-t-xs">
                                                    <p>
                                                        <?php if ($houses->house_description==NULL || $houses->house_description=="") {

                                                            echo "No house description";
                                                        }
                                                        else{
                                                            echo $houses->house_description;
                                                        }
                                                        ?>.
                                                    </p>
                                                    <p class="m-b-none">
                                                        <i class="fa fa-map-marker"></i> <?php echo $houses->location; ?>
                                                    </p>


                                                </div>
                                            </a>
                                        </li>

                                    <?php }}} ?>

                            <li><h4 style="color: #17a185">Age based</h4></li>
                            <?php
                            if($ALL_AGE_BASED_RECOMMENDATION != ""){
                                foreach($ALL_AGE_BASED_RECOMMENDATION as $age_house_r){
                                    foreach($age_house_r as $houses){?>

                                        <li class="list-group-item">
                                            <a data-toggle="tab" href="<?php echo '#tab-'.$houses->house_id ?>">
                                                <small class="pull-right text-muted"> <?php echo " ".$houses->house_post_date ?></small>
                                                <strong><?php echo "House ".$houses->house_id; ?></strong>
                                                <div class="small m-t-xs">
                                                    <p>
                                                        <?php if ($houses->house_description==NULL || $houses->house_description=="") {

                                                            echo "No house description";
                                                        }
                                                        else{
                                                            echo $houses->house_description;
                                                        }
                                                        ?>.
                                                    </p>
                                                    <p class="m-b-none">
                                                        <i class="fa fa-map-marker"></i> <?php echo $houses->location; ?>
                                                    </p>


                                                </div>
                                            </a>
                                        </li>

                                    <?php }}} ?>

                            <li><h4 style="color: #17a185">Gender based</h4></li>

                            <?php
                            if($ALL_GENDER_BASED_RECOMMENDATION != ""){
                                foreach($ALL_GENDER_BASED_RECOMMENDATION as $gender_house_r){
                                    foreach($gender_house_r as $houses){?>

                                        <li class="list-group-item">
                                            <a data-toggle="tab" href="<?php echo '#tab-'.$houses->house_id ?>">
                                                <small class="pull-right text-muted"> <?php echo " ".$houses->house_post_date ?></small>
                                                <strong><?php echo "House ".$houses->house_id; ?></strong>
                                                <div class="small m-t-xs">
                                                    <p>
                                                        <?php if ($houses->house_description==NULL || $houses->house_description=="") {

                                                            echo "No house description";
                                                        }
                                                        else{
                                                            echo $houses->house_description;
                                                        }
                                                        ?>.
                                                    </p>
                                                    <p class="m-b-none">
                                                        <i class="fa fa-map-marker"></i> <?php echo $houses->location; ?>
                                                    </p>


                                                </div>
                                            </a>
                                        </li>

                                    <?php }}} ?>




                            <li class="list-group-item active" id="showrater">
                                <a data-toggle="tab" href="#tab-2">
                                    <small class="pull-right text-muted"> <?php echo " "?></small>
                                    <strong>Housing Recommendation Engine</strong>
                                    <div class="small m-t-xs">
                                        <p class="m-b-xs">
                                            Click on the house to see other details.
                                            <br/>
                                        </p>
                                        <p class="m-b-none">

                                            <span class="label pull-right label-primary">HRE</span>
                                            <i class="fa fa-map-marker"></i> Kenya
                                        </p>
                                    </div>
                                </a>
                            </li>

                        </ul>

                    </div>
                </div>

    <div class="full-height">

                 <div class="hide" id="hiddenrating">

                     <button id="rate1" onClick="rateone()" type="button"><i class="fa fa-star"></i></button>
                     <button id="rate2" onClick="ratetwo()" type="button"><i class="fa fa-star"></i></button>
                     <button id="rate3" onClick="ratethree()" type="button"><i class="fa fa-star"></i></button>
                     <button id="rate4" onClick="ratefour()" type="button"><i class="fa fa-star"></i></button>
                     <button id="rate5" onClick="ratefive()" class="btn btn-default  dim " type="button"><i class="fa fa-star"></i></button>

                     <input id="ratingvalue" class="hide" type="text" name="rating">


                     <?php  ?>
                     <!-- <input id="house-id1" class="hid" type="text" name="house_id">  -->

                     <button id="removeratings" type="button" class="btn btn-default btn-xs" onClick="removerating()"><i class="fa fa-warning">clear</i></button>

                    <!-- <button class="btn btn-primary btn-xs  dim " id="trigerratingbutton">rate</button> -->
                </div>


                    <div class="full-height-scroll white-bg border-left">

                        <div class="element-detail-box">

                            <div class="tab-content">

                                <?php
                                if($ALL_OCCUPATION_BASED_RECOMMENDATION != ""){
                                foreach($ALL_OCCUPATION_BASED_RECOMMENDATION as $occupation_house_r){
                                foreach($occupation_house_r as $houses){?>

                                <div id="<?php echo 'tab-'.$houses->house_id ?>" class="tab-pane">
                                    <div class="col-lg-12">

                                        <form id="myform" action="<?= base_url();?>index.php/housesearch/post_the_rating" method="post" enctype="multipart/form-data">
                                <div class="col-lg-4">
                                            <div class="houserting">
<!--                                                    <input type="radio" name="houserating" value="0" checked /><span id="hide"></span>-->
                                                <input type="radio" name="houserating" value="1" required="required" /><span></span>
                                                <input type="radio" name="houserating" value="2" required="required" /><span></span>
                                                <input type="radio" name="houserating" value="3" required="required" /><span></span>
                                                <input type="radio" name="houserating" value="4" required="required" /><span></span>
                                                <input type="radio" name="houserating" value="5" required="required" /><span></span>
                                            </div>
<!--                                                <input id="ratingvalue" class="hide" type="text" name="rating">-->
                                            <input class="hide" value="<?php echo $houses->house_id; ?>" type="text" name="house_id" />

<!--                                                <input form="myform" type="submit" />-->
                                            <button id="doRating" type="submit" class="btn btn-primary btn-xs  dim">submit rating</button>

                                       </form>
                                </div>
                                <div class="col-lg-6">
                                    <h2> <span class="fa fa-image">  House image </span></h2><br>
                                </div>

                                <div class="col-lg-6">

                                    <div class="ibox-content text-center">
                                        <div>
                                            <div class="widget lazur-bg p-xl">

                                                <h2>
                                                    House no <?php echo ' '.$houses->house_id.' details' ?>
                                                </h2>

                                                    <ul class="list-unstyled m-t-md">
                                                        <li>
                                                            <span class="fa fa-map-marker m-r-xs"></span>
                                                            <label>Location:</label>
                                                            <?php echo " ".$houses->location; ?>
                                                        </li>
                                                        <li>
                                                            <span class="fa fa-home m-r-xs"></span>
                                                            <label>Description:</label>
                                                            <?php echo " ".$houses->type; ?>

                                                        </li>
                                                        <li>
                                                            <span class="fa fa-money m-r-xs"></span>
                                                            <label>Price:</label>
                                                            <?php echo " ".$houses->price; ?>

                                                        </li>

                                                        <li>
                                                            <span class="fa fa-clock-o m-r-xs"></span>
                                                            <label>Date posted:</label>
                                                            <?php echo " ".$houses->house_post_date; ?>

                                                        </li>

                                                        <li>
                                                            <span class="fa fa-sort-numeric-asc m-r-xs"></span>
                                                            <label>Owner no:</label>
                                                            <?php echo " ".$houses->owner; ?>
                                                        </li>

                                                        <li>
                                                            <span class="fa fa-edit m-r-xs"></span>
                                                            <label>Other description:</label>
                                                            <?php if ($houses->house_description == "")
                                                            {
                                                                echo "No other descriptions";
                                                            }
                                                            else
                                                            {
                                                                echo $houses->house_description;
                                                            }
                                                            ?>

                                                        </li>

                                                    </ul>


                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-6">
                                    <div class="ibox float-e-margins">                  
                                        <div class="ibox-content ">
                                            <div class="carousel-inner">
                                                    <div class="item active">

                                                        <?php foreach ($IMAGE as $image):  if ($image->Image_id == $houses->house_id) {?>
                                                        <img alt="House image" class="img-responsive" src="<?php echo(base_url()).$image->image_name; ?>">                               
                                                        

                                                        <div class="carousel-caption">
                                                            <p>House no <?php echo ' '.$houses->house_id ?></p>
                                                        </div>
                                                        <?php } endforeach;?>

                                                    </div>
                                            </div>                                             
                                        </div>
                                    </div>
                                    <button class="btn btn-default"><h3> <span class="fa fa-comments"></span> Click bottom right to contact owner <span class="fa fa-arrow-down"></span></h3></button>

                                </div>
                                </div>                               

                                </div>
                            <?php }}} ?>


                            <?php
                            if($ALL_INTEREST_BASED_RECOMMENDATION != ""){
                            foreach($ALL_INTEREST_BASED_RECOMMENDATION as $interest_house_r){
                            foreach($interest_house_r as $houses){?>

                            <div id="<?php echo 'tab-'.$houses->house_id ?>" class="tab-pane">
                                <div class="col-lg-12">

                                    <form id="myform" action="<?= base_url();?>index.php/housesearch/post_the_rating" method="post" enctype="multipart/form-data">
                                        <div class="col-lg-4">
                                            <div class="houserting">
                                                <!--                                                    <input type="radio" name="houserating" value="0" checked /><span id="hide"></span>-->
                                                <input type="radio" name="houserating" value="1" required="required" /><span></span>
                                                <input type="radio" name="houserating" value="2" required="required" /><span></span>
                                                <input type="radio" name="houserating" value="3" required="required" /><span></span>
                                                <input type="radio" name="houserating" value="4" required="required" /><span></span>
                                                <input type="radio" name="houserating" value="5" required="required" /><span></span>
                                            </div>
                                            <!--                                                <input id="ratingvalue" class="hide" type="text" name="rating">-->
                                            <input class="hide" value="<?php echo $houses->house_id; ?>" type="text" name="house_id" />

                                            <!--                                                <input form="myform" type="submit" />-->
                                            <button id="doRating" type="submit" class="btn btn-primary btn-xs  dim">submit rating</button>

                                    </form>
                                </div>
                                <div class="col-lg-6">
                                    <h2> <span class="fa fa-image">  House image </span></h2><br>
                                </div>

                                <div class="col-lg-6">

                                    <div class="ibox-content text-center">
                                        <div>
                                            <div class="widget lazur-bg p-xl">

                                                <h2>
                                                    House no <?php echo ' '.$houses->house_id.' details' ?>
                                                </h2>

                                                <ul class="list-unstyled m-t-md">
                                                    <li>
                                                        <span class="fa fa-map-marker m-r-xs"></span>
                                                        <label>Location:</label>
                                                        <?php echo " ".$houses->location; ?>
                                                    </li>
                                                    <li>
                                                        <span class="fa fa-home m-r-xs"></span>
                                                        <label>Description:</label>
                                                        <?php echo " ".$houses->type; ?>

                                                    </li>
                                                    <li>
                                                        <span class="fa fa-money m-r-xs"></span>
                                                        <label>Price:</label>
                                                        <?php echo " ".$houses->price; ?>

                                                    </li>

                                                    <li>
                                                        <span class="fa fa-clock-o m-r-xs"></span>
                                                        <label>Date posted:</label>
                                                        <?php echo " ".$houses->house_post_date; ?>

                                                    </li>

                                                    <li>
                                                        <span class="fa fa-sort-numeric-asc m-r-xs"></span>
                                                        <label>Owner no:</label>
                                                        <?php echo " ".$houses->owner; ?>
                                                    </li>

                                                    <li>
                                                        <span class="fa fa-edit m-r-xs"></span>
                                                        <label>Other description:</label>
                                                        <?php if ($houses->house_description == "")
                                                        {
                                                            echo "No other descriptions";
                                                        }
                                                        else
                                                        {
                                                            echo $houses->house_description;
                                                        }
                                                        ?>

                                                    </li>

                                                </ul>


                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-6">
                                    <div class="ibox float-e-margins">
                                        <div class="ibox-content ">
                                            <div class="carousel-inner">
                                                <div class="item active">

                                                    <?php foreach ($IMAGE as $image):  if ($image->Image_id == $houses->house_id) {?>
                                                        <img alt="House image" class="img-responsive" src="<?php echo(base_url()).$image->image_name; ?>">


                                                        <div class="carousel-caption">
                                                            <p>House no <?php echo ' '.$houses->house_id ?></p>
                                                        </div>
                                                    <?php } endforeach;?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-default"> <span class="fa fa-comments"></span>Click botom right to contact owner <span class="fa fa-arrow-down"></span></button>

                                </div>
                            </div>

                        </div>
                        <?php }}} ?>

                        <?php
                        if($ALL_AGE_BASED_RECOMMENDATION != ""){
                        foreach($ALL_AGE_BASED_RECOMMENDATION as $age_house_r){
                        foreach($age_house_r as $houses){?>

                        <div id="<?php echo 'tab-'.$houses->house_id ?>" class="tab-pane">
                            <div class="col-lg-12">

                                <form id="myform" action="<?= base_url();?>index.php/housesearch/post_the_rating" method="post" enctype="multipart/form-data">
                                    <div class="col-lg-4">
                                        <div class="houserting">
                                            <!--                                                    <input type="radio" name="houserating" value="0" checked /><span id="hide"></span>-->
                                            <input type="radio" name="houserating" value="1" required="required" /><span></span>
                                            <input type="radio" name="houserating" value="2" required="required" /><span></span>
                                            <input type="radio" name="houserating" value="3" required="required" /><span></span>
                                            <input type="radio" name="houserating" value="4" required="required" /><span></span>
                                            <input type="radio" name="houserating" value="5" required="required" /><span></span>
                                        </div>
                                        <!--                                                <input id="ratingvalue" class="hide" type="text" name="rating">-->
                                        <input class="hide" value="<?php echo $houses->house_id; ?>" type="text" name="house_id" />

                                        <!--                                                <input form="myform" type="submit" />-->
                                        <button id="doRating" type="submit" class="btn btn-primary btn-xs  dim">submit rating</button>

                                </form>
                            </div>
                            <div class="col-lg-6">
                                <h2> <span class="fa fa-image">  House image </span></h2><br>
                            </div>

                            <div class="col-lg-6">

                                <div class="ibox-content text-center">
                                    <div>
                                        <div class="widget lazur-bg p-xl">

                                            <h2>
                                                House no <?php echo ' '.$houses->house_id.' details' ?>
                                            </h2>

                                            <ul class="list-unstyled m-t-md">
                                                <li>
                                                    <span class="fa fa-map-marker m-r-xs"></span>
                                                    <label>Location:</label>
                                                    <?php echo " ".$houses->location; ?>
                                                </li>
                                                <li>
                                                    <span class="fa fa-home m-r-xs"></span>
                                                    <label>Description:</label>
                                                    <?php echo " ".$houses->type; ?>

                                                </li>
                                                <li>
                                                    <span class="fa fa-money m-r-xs"></span>
                                                    <label>Price:</label>
                                                    <?php echo " ".$houses->price; ?>

                                                </li>

                                                <li>
                                                    <span class="fa fa-clock-o m-r-xs"></span>
                                                    <label>Date posted:</label>
                                                    <?php echo " ".$houses->house_post_date; ?>

                                                </li>

                                                <li>
                                                    <span class="fa fa-sort-numeric-asc m-r-xs"></span>
                                                    <label>Owner no:</label>
                                                    <?php echo " ".$houses->owner; ?>
                                                </li>

                                                <li>
                                                    <span class="fa fa-edit m-r-xs"></span>
                                                    <label>Other description:</label>
                                                    <?php if ($houses->house_description == "")
                                                    {
                                                        echo "No other descriptions";
                                                    }
                                                    else
                                                    {
                                                        echo $houses->house_description;
                                                    }
                                                    ?>

                                                </li>

                                            </ul>


                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-6">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-content ">
                                        <div class="carousel-inner">
                                            <div class="item active">

                                                <?php foreach ($IMAGE as $image):  if ($image->Image_id == $houses->house_id) {?>
                                                    <img alt="House image" class="img-responsive" src="<?php echo(base_url()).$image->image_name; ?>">


                                                    <div class="carousel-caption">
                                                        <p>House no <?php echo ' '.$houses->house_id ?></p>
                                                    </div>
                                                <?php } endforeach;?>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-default"> <span class="fa fa-comments"></span>Click botom right to contact owner <span class="fa fa-arrow-down"></span></button>

                            </div>
                        </div>

                    </div>
        <?php }}} ?>

        <?php
        if($ALL_GENDER_BASED_RECOMMENDATION != ""){
        foreach($ALL_GENDER_BASED_RECOMMENDATION as $gender_house_r){
        foreach($gender_house_r as $houses){?>

        <div id="<?php echo 'tab-'.$houses->house_id ?>" class="tab-pane">
            <div class="col-lg-12">

                <form id="myform" action="<?= base_url();?>index.php/housesearch/post_the_rating" method="post" enctype="multipart/form-data">
                    <div class="col-lg-4">
                        <div class="houserting">
                            <!--                                                    <input type="radio" name="houserating" value="0" checked /><span id="hide"></span>-->
                            <input type="radio" name="houserating" value="1" required="required" /><span></span>
                            <input type="radio" name="houserating" value="2" required="required" /><span></span>
                            <input type="radio" name="houserating" value="3" required="required" /><span></span>
                            <input type="radio" name="houserating" value="4" required="required" /><span></span>
                            <input type="radio" name="houserating" value="5" required="required" /><span></span>
                        </div>
                        <!--                                                <input id="ratingvalue" class="hide" type="text" name="rating">-->
                        <input class="hide" value="<?php echo $houses->house_id; ?>" type="text" name="house_id" />

                        <!--                                                <input form="myform" type="submit" />-->
                        <button id="doRating" type="submit" class="btn btn-primary btn-xs  dim">submit rating</button>

                </form>
            </div>
            <div class="col-lg-6">
                <h2> <span class="fa fa-image">  House image </span></h2><br>
            </div>

            <div class="col-lg-6">

                <div class="ibox-content text-center">
                    <div>
                        <div class="widget lazur-bg p-xl">

                            <h2>
                                House no <?php echo ' '.$houses->house_id.' details' ?>
                            </h2>

                            <ul class="list-unstyled m-t-md">
                                <li>
                                    <span class="fa fa-map-marker m-r-xs"></span>
                                    <label>Location:</label>
                                    <?php echo " ".$houses->location; ?>
                                </li>
                                <li>
                                    <span class="fa fa-home m-r-xs"></span>
                                    <label>Description:</label>
                                    <?php echo " ".$houses->type; ?>

                                </li>
                                <li>
                                    <span class="fa fa-money m-r-xs"></span>
                                    <label>Price:</label>
                                    <?php echo " ".$houses->price; ?>

                                </li>

                                <li>
                                    <span class="fa fa-clock-o m-r-xs"></span>
                                    <label>Date posted:</label>
                                    <?php echo " ".$houses->house_post_date; ?>

                                </li>

                                <li>
                                    <span class="fa fa-sort-numeric-asc m-r-xs"></span>
                                    <label>Owner no:</label>
                                    <?php echo " ".$houses->owner; ?>
                                </li>

                                <li>
                                    <span class="fa fa-edit m-r-xs"></span>
                                    <label>Other description:</label>
                                    <?php if ($houses->house_description == "")
                                    {
                                        echo "No other descriptions";
                                    }
                                    else
                                    {
                                        echo $houses->house_description;
                                    }
                                    ?>

                                </li>

                            </ul>


                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-content ">
                        <div class="carousel-inner">
                            <div class="item active">

                                <?php foreach ($IMAGE as $image):  if ($image->Image_id == $houses->house_id) {?>
                                    <img alt="House image" class="img-responsive" src="<?php echo(base_url()).$image->image_name; ?>">


                                    <div class="carousel-caption">
                                        <p>House no <?php echo ' '.$houses->house_id ?></p>
                                    </div>
                                <?php } endforeach;?>

                            </div>
                        </div>
                    </div>
                </div>

                <button class="btn btn-default"> <span class="fa fa-comments"></span>Click botom right to contact owner <span class="fa fa-arrow-down"></span></button>

            </div>
        </div>
    </div>

        <?php }}} ?>


                        <div id="" class="tab-pane active">

                            <div class="col-sm-12">
                                <div class="col-sm-9">

                                 <?php
                                    if($ALL_GENDER_BASED_RECOMMENDATION == "" && $ALL_AGE_BASED_RECOMMENDATION == ""&&
                                    $ALL_INTEREST_BASED_RECOMMENDATION =="" && $ALL_OCCUPATION_BASED_RECOMMENDATION == ""){?>

                                        <h5><div style="color: red"> You currently have no recommendations, please fill in required data in house search page first</div></h5>

                                    <?php } ?>




                                </div>
                                <div class="col-sm-3">
                                    <a href="<?= base_url();?>index.php/housesearch" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Back to house search</a>
                                </div>
                            </div>

                                    <div class="ibox float-e-margins">
                                        <div class="ibox-title">
                                            <h5>House Recommendations</h5>
                                        </div>

                                        <div class="ibox-content">
                                            <div>
                                                <div class="feed-activity-list">

                                                    <div class="feed-element">
                                                        <a href="#" class="pull-left">
                                                            <img alt="House image" class="img-responsive" src="<?php echo(base_url());?>assets/img/ratings.jpg">
                                                        </a>
                                                        <div class="media-body ">

                                                            <h2><strong>Rate a house you like</strong></h2>
                                                            <small class="text-muted">5 ratings means you fully like the house</small>

                                                        </div>
                                                    </div>

                                                    <div class="feed-element">

                                                        <div class="col-lg-3">
                                                          <button class="btn btn-default"><i class="fa fa-arrow-left"> select houses listed here</i></br></br></br></button>
                                                        </div>

                                                        <div class="col-lg-9">
                                                            <div class="photos">
                                                                <a target="_blank" href="http://24.media.tumblr.com/20a9c501846f50c1271210639987000f/tumblr_n4vje69pJm1st5lhmo1_1280.jpg"> <img alt="image" class="feed-photo" src="<?php echo(base_url());?>assets/img/p1.jpg"></a>
                                                                <a target="_blank" href="http://37.media.tumblr.com/9afe602b3e624aff6681b0b51f5a062b/tumblr_n4ef69szs71st5lhmo1_1280.jpg"> <img alt="image" class="feed-photo" src="<?php echo(base_url());?>assets/img/p3.jpg"></a>
                                                            </div>

                                                        </div>

                                                        <div class="col-lg-12">
                                                            <?php $success_rating = $this->session->flashdata('ratingsuccess');
                                                            $failed_rating = $this->session->flashdata('ratingfail');

                                                            if($success_rating){
                                                                ?>
                                                                <div class="alert alert-success">
                                                                    <?php echo($success_rating); ?>
                                                                </div>
                                                            <?php } ?>
                                                            <?php

                                                            if($failed_rating){
                                                                ?>
                                                                <div class="alert alert-warning">
                                                                    <?php echo($failed_rating); ?>
                                                                </div>
                                                            <?php } ?>


                                                        </div>

                                                    </div>


                                                </div>

<!--                                                <button class="btn btn-primary btn-block m"></button>-->

                                            </div>

                                        </div>
                                    </div>

           
                                </div>
                                <!-- this is the end of the tab -->
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
                <div class="hide"><input type="text" value="<?php echo( $this->uri->segment(2));?>" name="theuri"></div>
                <label>Text:</label>
                <div class="form-group">
                    <textarea class="form-control" required="required" name="message" rows="5">
                        <?php foreach ($USER_DETAILS as $profile): echo("\nPhone: ".$profile->phone_number."\n"."Email: ".$profile->email); endforeach; ?>
                    </textarea>
                    <button class="btn btn-sm btn-primary pull-right " type="submit">Send</button>

                </div>
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