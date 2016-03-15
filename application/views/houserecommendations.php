<?php require_once("includes/header.php"); ?>

<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-4">
                    <h2>House recommendations</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">House search</a>
                        </li>
                        <li class="active">
                            <strong>Recommendations</strong>
                        </li>
                    </ol>
                </div>

                <div class="col-sm-8">
                    <div class="title-action">
                        <a href="<?= base_url();?>index.php/housesearch" class="btn btn-primary">Home</a>
                    </div>
                </div>
</div>


    <div class="fh-breadcrumb">

                <div class="fh-column">
                    <div class="full-height-scroll">
                        <ul class="list-group elements-list" id="showrater">

                        <?php foreach ($HOUSE_DETAILS as $houses): ?>
                        

                            <li class="list-group-item">
                                <a data-toggle="tab" href="<?php echo '#tab-'.$houses->house_id ?>">
                                    <small class="pull-right text-muted"> 16.02.2015</small>
                                    <strong><?php echo $houses->type; ?></strong>
                                    <div class="small m-t-xs">
                                        <p>                                        
                                          <?php if ($houses->house_description==NULL || $houses->description=="") {

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

                            <?php endforeach;?>

                            <li class="list-group-item active" id="showrater">
                                <a data-toggle="tab" href="#tab-2">
                                    <small class="pull-right text-muted"> 11.10.2015</small>
                                    <strong>Paul Morgan</strong>
                                    <div class="small m-t-xs">
                                        <p class="m-b-xs">
                                            There are many variations of passages of Lorem Ipsum.
                                            <br/>
                                        </p>
                                        <p class="m-b-none">

                                            <span class="label pull-right label-primary">SPECIAL</span>
                                            <i class="fa fa-map-marker"></i> California 10F/32
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

<!--                 <input id="ratingvalue" class="hide" type="text" name="rating">                             
                     <input id="house-id1" class="hid" type="text" name="house_id">  -->

                     <button id="removeratings" type="button" class="btn btn-default btn-xs" onClick="removerating()"><i class="fa fa-warning">clear</i></button>

                    <!-- <button class="btn btn-primary btn-xs  dim " id="trigerratingbutton">rate</button> -->                   
                </div>


                    <div class="full-height-scroll white-bg border-left">

                        <div class="element-detail-box">

                            <div class="tab-content">


                        <?php foreach ($HOUSE_DETAILS as $houses): ?>

                                <div id="<?php echo 'tab-'.$houses->house_id ?>" class="tab-pane">


                                            <form action="<?= base_url();?>index.php/housesearch/post_the_rating" method="post" enctype="multipart/form-data">                                                                       
                                            
                                                <input id="ratingvalue" class="hide" type="text" name="rating">                                  
                                                <input class="hide" value="<?php echo $houses->house_id; ?>" type="text" name="house_ids" />
                                     
                                                <!-- <input id="submit-rating" class="hide" type="submit" /> -->
                                                <button id="doRating" type="submit" class="btn btn-primary btn-xs  dim">submit rating</button>          

                                           </form>

                                    <div class="small text-muted">
                                        <i class="fa fa-clock-o"></i> Friday, 12 April 2014, 12:32 am
                                    </div>

                                    <h2>
                                        House no <?php echo ' '.$houses->house_id.' details' ?>

                                    </2>

                                    <p class="small">
                                        <strong> </strong>
                                    </p>

                                    <p class="small">
                                        <strong>Location:</strong><?php echo " ".$houses->location?>
                                    </p>
                                    <p class="small">
                                        <strong>Description: </strong><?php echo " ".$houses->type?>
                                    </p>

                                     <p class="small">
                                        <strong>Price: </strong> <?php echo " ".$houses->price?>
                                    </p>
                                    <p class="small">
                                        <strong>Date Posted: </strong>
                                    </p>
                                    <p class="small">
                                        <strong>Owner: </strong>
                                    </p>
                                    <p class="small">
                                        <strong>Other description: </strong>
                                        <?php if ($houses->type == NULL || $houses->road == "")
                                        {
                                            echo "No other descriptions";
                                        }
                                        else
                                        {
                                            echo "situated along ".$houses->road." road";
                                        }
                                    ?>
                                    </p>



                                <div class="col-lg-7">
                                    
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
                                </div>                               

                                </div>
                            <?php endforeach;?>


                                <div id="" class="tab-pane active">

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
                                          <button class="btn btn-primary"><i class="fa fa-arrow-left"> select houses listed here</i></br></br></br></button>
                                        </div>

                                        <div class="col-lg-9">                
                                            <div class="photos">
                                                <a target="_blank" href="http://24.media.tumblr.com/20a9c501846f50c1271210639987000f/tumblr_n4vje69pJm1st5lhmo1_1280.jpg"> <img alt="image" class="feed-photo" src="<?php echo(base_url());?>assets/img/p1.jpg"></a>
                                                <a target="_blank" href="http://37.media.tumblr.com/9afe602b3e624aff6681b0b51f5a062b/tumblr_n4ef69szs71st5lhmo1_1280.jpg"> <img alt="image" class="feed-photo" src="<?php echo(base_url());?>assets/img/p3.jpg"></a>
                                            </div>

                                        </div>
                                     
                                    </div>
                                            

                                </div>

                                <button class="btn btn-primary btn-block m"></button>

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


<?php require_once("includes/footer.php"); 