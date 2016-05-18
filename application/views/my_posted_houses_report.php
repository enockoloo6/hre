<?php require_once("includes/header.php"); ?>


               <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-7">
                    <h2 style="color: #2b542c">Hello <?php echo $this->session->userdata['f_name']; ?> this is a report on your posted houses</h2>
                </div>
                <div class="col-sm-5">
                    <div class="title-action">
                        <a href="<?php base_url()?>index.php/profile" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Profile</a>
                    </div>
                </div>
              </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
            <div class="ibox-content">

                <table class="table table-striped table-bordered table-hover dataTables-example">
                    <thead>
                    <tr>
                        <th>Available houses</th>
                        <th>Occupied houses</th>
                        <th>Total houses posted</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php

                    if(!empty($HOUSE_DETAILS))
                    {
                        $id = $this->session->userdata['user_id'];
                        $available=0;
                        $booked=0;

                        foreach($HOUSE_DETAILS as $houses)
                        {
                            if($houses->status == "available" && $houses->owner == $id){$available++;}
                            else if($houses->status == "booked" && $houses->owner == $id){$booked++;}
                            $total = $available + $booked;
                        }
                        } ?>
                    <tr class="gradeX">
                        <td> <?php echo($available); ?></td>
                        <td> <?php echo($booked); ?></td>
                        <td><?php echo($total); ?></td>

                    </tr>
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
            </div>
            </div>

            <div class="col-lg-12">

            <div class="col-sm-6">
            <?php  if(!empty($HOUSE_LOCATIONS)){ ?>

                <form action="<?= base_url();?>index.php/reports/my_posted_houses" id="form" method="post" enctype="multipart/form-data" autocomplete="on">
                    <div class="form-group"><label>Number of houses per locations</label>
                      <div class="col-sm-9">
                        <select name="location" class="form-control">
                            <option>--SELECT--</option>
                            <?php    foreach($HOUSE_LOCATIONS as $locations){ ?>
                                <option> <?php echo($locations->location); ?> </option>
                            <?php }?>
                        </select><br>

                          <?php
                          if($this->input->post('location')){?>

                              <input class="form-control" disabled="disabled" value="<?php echo $NUMBER_PER_LOCATION ?>">
                              <?php
                          }
                          ?>
                        </div>
                     </div>

                        <div class="col-sm-3">
                           <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>See the number</strong></button>
                        </div>
                </form>

            <?php }?>
            </div>

            <div class="col-sm-6">
                <?php  if(!empty($HOUSE_DETAILS)){
                    $id = $this->session->userdata['user_id']; ?>

                <form action="<?= base_url();?>index.php/reports/my_posted_houses" id="form" method="post" enctype="multipart/form-data" autocomplete="on">
                    <div class="form-group"><label>Houses posted ordered by post date</label>
                        <div class="col-sm-9">
                            <select name="date" class="form-control">
                                <option>--SELECT--</option>
                                <?php foreach($HOUSE_DATES as $dates){ ?>                                
                                    <option> <?php echo($dates->house_post_date);?> </option> 
                                <?php }?>

                            </select><br>

                            <?php
                            if($this->input->post('date')){
                                foreach($HOUSES_PER_DATE as $house){?>

                            <strong> <input class="form-control" disabled="disabled" value=" <?php echo $house->type ?>  " ></strong>
                                <?php
                                    }
                            }
                            ?>
                         </div>
                    </div>

                        <div class="col-sm-3">
                            <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>See the number</strong></button>
                        </div>
                </form>

                   <?php }?>
            </div>
            </div>

<!--     <div class="col-lg-12">

            <div class="col-sm-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Line Chart Example
                            <small>With custom colors.</small>
                        </h5>
                        <div ibox-tools></div>
                    </div>
                    <div class="ibox-content">
                        <div>
                            <canvas id="lineChart" height="140"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Bar Chart Example</h5>
                        <div ibox-tools></div>
                    </div>
                    <div class="ibox-content">
                        <div>
                            <canvas id="barChart" height="140"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->



        </div>
    </div>


<?php require_once("includes/footer.php"); 