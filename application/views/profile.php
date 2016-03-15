<?php require_once("includes/header.php"); ?>


<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-sm-4">
        <h2>Profile</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">This is</a>
                </li>
                <li class="active">
                    <strong>Profile</strong>
                </li>
            </ol>
    </div>
<div class="col-sm-8"> 
<div class="title-action">
    <a href="#" class="btn btn-primary">Post new or update existing houses</a>
</div>
</div>
</div>

 <div class="wrapper wrapper-content animated fadeInRight">

    <div class="row m-t-lg">

        <div class="col-lg-2">

                <div>                    
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-default m-r-sm">12</button>
                                Total messages
                            </td>
                            <td>
                        </tr>

                        </tbody>
                    </table>

                    <table class="table">
                        <tbody>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-primary m-r-sm"> 

                                <?php
                                $count = 0;
                                 foreach ($HOUSE_DETAILS as $posted_houses):
                                 $count++; 
                                endforeach; echo $count;?>

                                </button>
                               Houses Posted
                            </td>
                            <td>
                                <button type="button" class="btn btn-info m-r-sm">15</button>
                               Comments
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-warning m-r-sm">30</button>
                                Notifications
                            </td>
                        </tr>

                        </tbody>
                    </table>
                
            </div>

            </div>

        <div class="col-lg-4">
            <div class="row">
                       
                            <div class="ibox-content text-center">
                                <h3></h3>
                                <div class="m-b-sm">


                                    <?php 
                                    $session_user = $this->session->userdata('user_id');
                                    if($session_user)
                                    { ?>
                                        <?php foreach ($USER_DETAILS as $userdetails): ?> 

                                             <?php foreach ($IMAGE as $profileimage): ?>
                                                 <?php if ($profileimage->Image_id == NULL && $profileimage->user_id == $session_user ) {?>                                                                                    

                                                 <img alt="Profile photo" class="img-circle" src="<?php echo(base_url()).$profileimage->image_name; ?>">

                                                 <?php } ?>

                                            <?php endforeach; ?>
                                    
                                </div>
                                    <p class="font-bold"><?php echo $userdetails->f_name." ".$userdetails->other_names; ?></p>

                                     <?php endforeach; ?>

                                     <?php }?>

                                <div class="text-center">
                                    <a class="btn btn-xs btn-default" data-toggle="modal" data-target="#pModal"><i class="fa fa-edit"></i> Edit </a>
                                    <a class="btn btn-xs btn-warning"><i class="fa fa-trash"></i></a>
                                <!--modal form for profile -->
                                        <div class="modal inmodal" id="pModal" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content animated fadeInDown">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                        <i class="fa fa-institution modal-icon"></i>
                                                        <h4 class="modal-title">Edit profile picture</h4>
                                                        <small class="font-bold">Add account picture</small>
                                                    </div>

                                                    <form action="<?= base_url();?>index.php/register/post_profile_photo" method="post" enctype="multipart/form-data" autocomplete="on">
                                                    <div class="modal-body">                                                  
                                                            
                                                            <div class="form-group"><label></label> <input type="file" name="userfile[]" placeholder="Location choice" class="form-contro" value=""></div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Upload</button>
                                                    </div>
                                                    </form>


                                                </div>
                                            </div>
                                        </div>
                                <!-- end of the modal form -->
                                        <?php $message = $this->session->flashdata('profilechanged'); ?>
                                        <?php if($message):?>
                                          <script> $('#pModal').modal('show');</script>
                                            <div class="ibox-content">
                                            <div class="alert alert-success">
                                             <?php echo $message;?>
                                            </div>                           
                                              </div>
                                        <?php endif;?>
                                </div>




                            </div>
                    

                        
                            <div class="ibox-content text-center">
                                <div>
                                 <div class="widget lazur-bg p-xl">

                                    <h3>
                                        Contacts
                                    </h3>

                                <?php if($this->session->userdata('user_id'))
                                { ?>
                                <?php foreach ($USER_DETAILS as $userdetails): ?>                                                    
                                 
                                    <ul class="list-unstyled m-t-md">
                                        <li>
                                            <span class="fa fa-envelope m-r-xs"></span>
                                            <label>Email:</label>
                                            <?php echo $userdetails->email; ?>                                            
                                        </li>
                                        <li>
                                            <span class="fa fa-home m-r-xs"></span>
                                            <label>ID:</label>
                                            <?php echo $userdetails->national_id; ?>                                            
                                            
                                        </li>
                                        <li>
                                            <span class="fa fa-phone m-r-xs"></span>
                                            <label>Contact:</label>
                                            <?php echo $userdetails->phone_number; ?>                                            
                                            
                                        </li>
                                    </ul>
                                <?php endforeach; ?>
                                <?php }?>

                                <div class="text-center">
                                    <a class="btn btn-xs btn-default"><i class="fa fa-edit"></i> Edit </a>                                   
                                </div>

                                 </div>
                                </div>
                            </div>
        
                    </div>
        </div>


        <div class="col-lg-6">
            <div class="ibox float-e-margins">

                <div class="ibox-content">

                <div>
                <div class="chat-activity-list">
                    <h3 class="text-center"><strong>Houses Posted</strong></h3>
    
                                        <?php $message = $this->session->flashdata('message'); ?>
                                        <?php if($message):?>
                                          <script> $('#pModal').modal('show');</script>
                                            <div class="ibox-content">
                                            <div class="alert alert-success">
                                             <?php echo $message;?>
                                            </div>                           
                                              </div>
                                        <?php endif;?>

            <?php foreach ($HOUSE_DETAILS as $posted_houses): ?> 

                    <div class="chat-element">
                        <a href="#" class="pull-left">
                            <img alt="image" class="img-circle" src="<?php echo(base_url().$posted_houses->photo1)?>">
                        </a>
                        <div class="media-body ">
                            <small class="pull-right text-navy">1m ago</small>
                            <strong><?php echo $posted_houses->type; ?></strong> <?php echo "  house ".$posted_houses->house_id; ?>
                            <p class="m-b-xs">

                                <?php echo $posted_houses->location; ?>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            </p>
                            <small class="text-muted">Today 4:21 pm - 12.06.2014</small>

                                <div class="text-right">
                                   
                                    <a class="btn btn-xs btn-default" data-toggle="modal" data-target="#hlModal_<?php echo $posted_houses->house_id?>"><i class="fa fa-edit"></i> Edit </a>         
                                    <a href="<?php echo(base_url()."index.php/profile/delete_house_details/".$posted_houses->house_id); ?>"><div class="btn btn-xs btn-warning"><i class="fa fa-trash"></i></div></a> 

                                <!--modal form for new houses -->
                                        <div class="modal inmodal" id="hlModal_<?php echo $posted_houses->house_id?>" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content animated bounceInRight">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                        <i class="fa fa-institution modal-icon"></i>
                                                        <h4 class="modal-title">House no <?php echo $posted_houses->house_id; ?> details</h4>
                                                        <small class="font-bold">Edit the details of house no <?php echo $posted_houses->house_id; ?> here and update them.</small>
                                                    </div>

                                                    <form action="<?= base_url();?>index.php/profile/update_house_details" method="post" enctype="multipart/form-data" autocomplete="on">
                                                    <div class="modal-body">
                                                            
                                                            <div class="form-group hide"><label>House id</label> <input type="text" name="house_id" placeholder="Location choice" class="form-control" value="<?php echo $posted_houses->house_id; ?>"></div>
                                                            <div class="form-group hide"><label>House name</label> <input type="text" name="house_tittle" placeholder="Location choice" class="form-control" value="<?php echo $posted_houses->house_id; ?>"></div>
                                                                                                     
                                                            <label>Location</label>
                                                                <select name="house_location" class="form-control">                                                                 
                                                                 <option <?php if($posted_houses->location == 'Langata'){echo"selected";}?>>Langata</option>
                                                                 <option <?php if($posted_houses->location == 'Ngong'){echo"selected";}?>>Ngong</option>
                                                                 <option <?php if($posted_houses->location == 'Rongai'){echo"selected";}?>>Rongai</option>                                                               
                                                                 <option <?php if($posted_houses->location == 'Dagoretti'){echo"selected";}?>>Dagoretti</option>                                                               
                                                                 <option <?php if($posted_houses->location == 'Adams'){echo"selected";}?>>Adams</option>                                                               
                                                                 <option <?php if($posted_houses->location == 'Kileleshwa'){echo"selected";}?>>Kileleshwa</option>                                                               
                                                                 <option <?php if($posted_houses->location == 'Kibera'){echo"selected";}?>>Kibera</option>                                                               
                                                                 <option <?php if($posted_houses->location == 'Buruburu'){echo"selected";}?>>Buruburu</option>                                                               
                                                                 <option <?php if($posted_houses->location == 'Baba dogo'){echo"selected";}?>>Baba dogo</option>                                                               
                                                                </select>    

                                                            <label>Type of house</label>
                                                                <select name="house_type" class="form-control">                                                                 
                                                                 <option <?php if($posted_houses->type == 'Single room'){echo"selected";}?>>Single room</option>
                                                                 <option <?php if($posted_houses->type == 'Double room'){echo"selected";}?>>Double room</option>
                                                                 <option <?php if($posted_houses->type == 'Servant quarter'){echo"selected";}?>>Servant quarter</option>
                                                                 <option <?php if($posted_houses->type == 'Bed sitter'){echo"selected";}?>>Bed sitter</option>
                                                                 <option <?php if($posted_houses->type == 'One bedroom'){echo"selected";}?>>One bedroom</option>
                                                                 <option <?php if($posted_houses->type == 'Two bedroom'){echo"selected";}?>>Two bedroom</option>
                                                                 <option <?php if($posted_houses->type == 'Three bedroom+'){echo"selected";}?>>Three bedroom+</option>
                                                                </select>

                                                            <!-- <div class="form-group"><label>Type of house</label> <input type="text" name="house_type" placeholder="house type" class="form-control" value="<?php //echo $posted_houses->type; ?>"></div> -->

                                                            <div class="form-group"><label>Photo1</label> <input type="file" name="userfile[]" placeholder="captured image of the house" class="form-control" value="<?php echo $posted_houses->photo1; ?>"></div>

                                                            <div class="form-group"><label>Recreational facility</label> <input type="text" name="rfacility" placeholder="Any recreational facility you wish to find within or around" class="form-control" value="<?php echo $posted_houses->rfacility; ?>"></div>

                                                            <div class="form-group"><label>main road</label> <input type="text" name="road" placeholder="street/avenue along which you wish to find a home" class="form-control" value="<?php echo $posted_houses->road; ?>"></div>

                                                            
                                                            <label>Price range.</label>
                                                                <select name="price_range" class="form-control">                                                                 
                                                                 <option name="price_range"<?php if($posted_houses->price == '1000-3000'){echo"selected";}?>>1000-3000</option>
                                                                 <option name="price_range"<?php if($posted_houses->price == '3001-5000'){echo"selected";}?>>3001-5000</option>
                                                                 <option name="price_range"<?php if($posted_houses->price == '5001-10000'){echo"selected";}?>>51-10000</option>
                                                                 <option name="price_range"<?php if($posted_houses->price == '10001+'){echo"selected";}?>>10001+</option>
                                                                </select>
                                                            
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                                        <button id="update" type="submit" class="btn btn-primary">Update changes</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                <!-- end of the modal form -->
       
                                </div>
                        </div>
                    </div>

        <?php endforeach; ?>

                </div>
                </div>
                        <div class="chat-form">

                            <form role="form">

                                <div class="text-right">
                                    <button type="button" class="btn btn-sm btn-primary m-t-n-xs" data-toggle="modal" data-target="#myModal"><strong>Add new house</strong></button>
                                </div>
                            </form>
                            <!--modal form for new houses -->

                            <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-institution modal-icon"></i>
                                            <h4 class="modal-title">House details</h4>
                                            <small class="font-bold">You can add the details of your new house and post them here.</small>
                                        </div>

                                        <form action="<?= base_url();?>index.php/profile/post_new_house" method="post" enctype="multipart/form-data">
                                        <div class="modal-body"> 

                                                <div class="form-group"><label>House name</label> <input type="file" name="house_tittle" placeholder="captured image of the house" class="form-control"></div>

                                                <label>Location</label>
                                                    <select name="house_location" class="form-control">                                                                 
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
                                                     <option>Single room</option>
                                                     <option>Double room</option>
                                                     <option>Servant quarter</option>
                                                     <option>Bed sitter</option>
                                                     <option>One bedroom</option>
                                                     <option>Two bedroom</option>
                                                     <option>Three bedroom+</option>
                                                    </select>
                                                
                                                <div class="form-group"><label>House image</label> <input type="file" name="userfile[]" placeholder="captured image of the house" class="form-control"></div>

                                                <div class="form-group hide"><label>Photo2</label> <input type="file" name="userfile[]" placeholder="captured image of the house" class="form-control"></div>

                                                <div class="form-group hide"><label>Recreational facility</label> <input type="text" name="rfacility" placeholder="Any recreational facility you wish to find within or around" class="form-control"></div>

                                                <div class="form-group"><label>main road</label> <input type="text" name="road" placeholder="street/avenue along which you wish to find a home" class="form-control"></div>

                                                <label>Price range.</label>
                                                    <select name="price_range" class="form-control">                                                                 
                                                     <option>1000-3000</option>
                                                     <option>3001-5000</option>
                                                     <option>5001-10000</option>
                                                     <option>10001+</option>
                                                    </select>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <button id="submit" type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            <!-- end of the modal form -->

                        </div>
                </div>
            </div>
        </div>



        </div>

</div>

<?php require_once("includes/footer.php"); 