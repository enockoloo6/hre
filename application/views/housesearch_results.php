<?php require_once("includes/header.php"); ?>


    <div class="wrapper wrapper-content  animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox">
                    <div class="ibox-content">
                        <?php
                            $location = ($this->input->post('house_location'));
                            $type = ($this->input->post('house_type'));
                            $price = ($this->input->post('price'));

                            if($price== 10003000){$price = "1000-3000";}
                            if($price== 30015000){$price = "3001-5000";}
                            if($price== 500110000){$price = "5001-10000";}
                            if($price== 1000115000){$price = "10001-15000";}
                            if($price== 1500120000){$price = "15001-20000";}
                            if($price== "above20"){$price = "20000+";}
                        ?>

                        <div class="col-sm-12" style="color: #006621"> <div class="col-sm-9"> <h2><?php echo $type." price range of ".$price." located in ".$location?></h2></div>
                        <a href="<?= base_url();?>index.php/housesearch" class="btn btn-primary pull-right"><span class="fa fa-arrow-circle-left"></span>Back to house search</a></div>

                        <div class="cliens-list">
                            <ul class="nav nav-tabs">
                                <span style="color: orange" class="pull-right">

                                    <?php
                                    if($this->input->post('house_location')){
                                        $no_of_houses_found = 0;
                                        foreach ($SEARCH_RESULTS as $userdetails):
                                            foreach ($userdetails as $number):
                                                $no_of_houses_found++;
                                            endforeach;
                                            endforeach; echo $no_of_houses_found." results found";} ?>

                                </span>
                                <li class="active"><a data-toggle="tab" href="#tab-1"><i class="fa fa-institution"></i> Houses found</a></li>
<!--                                <li class=""><a data-toggle="tab" href="#tab-2"><i class="fa fa-briefcase"></i> More Details</a></li>-->
                            </ul>
                            <div class="tab-content">
                                <div>
                                    <div class="full-height-scroll">

                                        <?php
                                           if($this->input->post('house_location')){
                                                if($SEARCH_RESULTS[2]!= ""){ ?>

                                                <?php  foreach ($SEARCH_RESULTS[2] as $userdetails[0]): ?>
                                                            <?php
                                                            foreach($userdetails as $s_houses){
                                                            ?>
                                                            <div class="table-responsive">
                                                                <table class="table table-striped table-hover">
                                                                    <tbody>

                                                                    <tr>
                                                                        <th>Picture</th>
                                                                        <th>Type</a></th>
                                                                        <th Owner </th>
                                                                        <th> House number</th>
                                                                        <th> Location </th>
                                                                        <th> Details</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="client-avatar"><img alt="image" src="img/a2.jpg"> </td>
                                                                        <td><a data-toggle="tab" href="#contact-1" class="client-link"> <?php echo $s_houses->type;?> </a></td>
                                                                        <td class="contact-type"><i class="fa fa-envelope"> </i></td>
                                                                        <td> <?php echo $s_houses->house_id; ?></td>
                                                                        <td> <?php echo $s_houses->location;?></td>
                                                                        <td class="client-status"><a data-toggle="tab" href="#<?php echo $s_houses->house_id?>_tab"><span class="label label-primary">Active</a></span></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                <?php } endforeach; } ?>

                                              <?php if($SEARCH_RESULTS[1]!= ""){ ?>
                                        <h4> <?php echo "List of ".$type." houses within range of ".$price." located in other estates" ?></h4>

                                            <div class="table-responsive">
                                                       <table class="table table-striped table-hover">
                                                           <tbody>
                                                               <tr>
                                                                   <th>Picture</th>
                                                                   <th>Type</a></th>
                                                                   <th Owner </th>
                                                                   <th> House number</th>
                                                                   <th> Location </th>
                                                                   <th> Details</th>
                                                               </tr>
                                                           <?php foreach ($SEARCH_RESULTS[1] as $userdetails[0]): ?>
                                                                       <?php
                                                               foreach($userdetails as $s_houses){
                                                                   foreach($HOUSE_DETAILS as $houses){
                                                                       if($s_houses->house_id == $houses->house_id ){
                                                                           ?>
                                                                               <tr>
                                                                                   <td class="client-avatar"><img alt="image" src="img/a2.jpg"> </td>
                                                                                   <td><a data-toggle="tab" href="#contact-1" class="client-link"> <?php echo $houses->type;?> </a></td>
                                                                                   <td class="contact-type"><i class="fa fa-envelope"> </i></td>
                                                                                   <td> <?php echo $houses->house_id; ?></td>
                                                                                   <td> <?php echo $houses->location;?></td>
                                                                                   <td class="client-status"><a data-toggle="tab" href="#<?php echo $houses->house_id?>_tab"><span class="label label-primary">Active</a></span></td>
                                                                               </tr>
                                                                       <?php }}}?>
                                                           <?php endforeach;?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                   <?php } ?>
                                               <?php if($SEARCH_RESULTS[2]!= "" || $SEARCH_RESULTS[2]!= NULL){ ?>
                                                   <h4>List of houses within range of sh <?php echo " ".$price." also located in in the same place"?></h4>

                                                   <div class="table-responsive">
                                                       <table class="table table-striped table-hover">
                                                           <tbody>
                                                               <tr>
                                                                   <th>Picture</th>
                                                                   <th>Type</a></th>
                                                                   <th Owner </th>
                                                                   <th> House number</th>
                                                                   <th> Location </th>
                                                                   <th> Details</th>
                                                               </tr>
                                                           <?php foreach ($SEARCH_RESULTS[0] as $userdetails[0]):
                                                               foreach($userdetails as $s_houses){
                                                                   foreach($HOUSE_DETAILS as $houses){
                                                                       if($s_houses->house_id == $houses->house_id ){
                                                                           ?>
                                                                           <tr>
                                                                               <td class="client-avatar"><img alt="image" src="img/a2.jpg"> </td>
                                                                               <td><a data-toggle="tab" href="#contact-1" class="client-link"> <?php echo $houses->type;?> </a></td>
                                                                               <td class="contact-type"><i class="fa fa-envelope"> </i></td>
                                                                               <td> <?php echo $houses->house_id; ?></td>
                                                                               <td> <?php echo $houses->location;?></td>
                                                                               <td class="client-status"><a data-toggle="tab" href="#<?php echo $houses->house_id?>_tab"><span class="label label-primary">Active</a></span></td>
                                                                           </tr>
                                                                       <?php }}}?>
                                                           <?php endforeach;}?>

                                                           </tbody>
                                                       </table>
                                                   </div>
                                               <?php } ?>





                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>


<?php require_once("includes/footer.php"); 