<?php require_once("includes/header.php");
/**
 * Created by PhpStorm.
 * User: Peklo
 * Date: 4/9/2016
 * Time: 2:34 PM
 */
?>
<div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-11 animated fadeInRight">

                <?php $success_reply = $this->session->flashdata('reply_success');
                   $action_fail = $this->session->flashdata('action_fail');

                if($success_reply){
                    ?>
                    <div class="alert alert-success">
                        <?php echo($success_reply); ?>
                    </div>
                <?php }
                else if($action_fail){
                ?>
                <div class="alert alert-danger">
                    <?php echo($action_fail); ?>
                </div>
                <?php } ?>

            <div class="mail-box-header">
                <div class="col-lg-12">
                    <div class="col-lg-4">
                        <h2>
                                <?php
                                $c = 0;
                                foreach ($MESSAGES as $messages):
                                    if($messages->message_status=='unread'){
                                    $c++;
                                    }
                                endforeach;
                                ?>
                            Messages (<?php echo $c; ?>)
                        </h2>
                    </div>

                    <div class="col-lg-4">
                        <?php $role = $this->session->userdata('role'); ?>
                        <a href="<?php if($role == 1 || $role == -1)echo base_url().'index.php/profile';else echo base_url().'index.php/housesearch'; ?>" class="btn btn-primary btn-bg"><i class="fa fa-arrow-circle-left"></i> Back </a>

                    </div>

                <form action="<?= base_url();?>index.php/housesearch/delete_confirm_reading" method="post" enctype="multipart/form-data" autocomplete="on">

                    <div class="col-lg-4">
                        <div class="mail-tools tooltip-demo m-t-md">
                                <div class="btn-group pull-right">
                                    <a href="<?php echo(base_url());?>index.php/messages" class="btn btn-white btn-sm"><i class="fa fa-refresh"></i> Refresh </a>
                                    <button type="submit" value="read" name="action" class="btn btn-white btn-sm"><i class="fa fa-eye"></i> Mark as read </button>
                                    <button type="submit" value="delete" name="action" class="btn btn-white btn-sm"><i class="fa fa-trash-o"></i> Delete </button>
                                </div>
                        </div>
                    </div>

                </div>
            </div>
                <div class="mail-box">

                <table class="table table-hover table-mail">
                <tbody>

                <?php foreach ($MESSAGES as $messages){?>

                        <tr class="<?php echo $messages->message_status ?>">
                            <td class="check-mail">
                                <input type="checkbox" name="message_ids[]" value="<?php echo $messages->message_id; ?>" class="i-checks">
                            </td>
                            <td class="mail-ontact"><a href="#" data-toggle="modal" data-target="#pModal"><?php foreach ($ALL_USER_DETAILS as $all_details){if($all_details->user_id == $messages->sender_id){echo($all_details->f_name." ".$all_details->other_names);}}?></a><?php if($messages->message_status=='unread'){?><span class="label label-warning pull-right"><?php echo $messages->message_status?></span><?php } ?></td>
                            <td class="mail-subject">
                                    <?php
                                    $msg = $messages->message;
                                    if(strlen($msg)> 0){
                                    $trimmsg = substr($msg, 0,62)."....";
                                    ?><a href="#" data-toggle="modal" data-target="#<?php echo $messages->message_id.'_pModal'?>"><?php } else{
                                        $trimmsg = $msg;
                                    }
                                    echo $trimmsg;?>
                                    </a>
                            </td>
                            <td class="text-right mail-date"><?php echo $messages->messaging_date?></td>

                        </tr>
                    <!-- end of the modal form -->
                    <?php } ?>
              </form><!--form to help in the submission of the checkbox data-->

        <?php foreach ($MESSAGES as $messages){?>

                <div class="modal inmodal" id="<?php echo $messages->message_id.'_pModal'?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content animated fadeInDown">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <i class="fa fa-institution modal-icon"></i>
                                <h4 class="modal-title">Reply to text from <?php foreach ($ALL_USER_DETAILS as $all_details){if($all_details->user_id == $messages->sender_id){echo($all_details->f_name." ".$all_details->other_names);}}?></h4>
                                <small class="font-bold">type your message and reply</small>
                            </div>

                            <form action="<?= base_url();?>index.php/housesearch/reply_message" method="post" enctype="multipart/form-data" autocomplete="on">
                                <div class="modal-body">

                                    <input class="form-control hide" name="recipient" value=" <?php echo $messages->sender_id; ?> ">
                                    <input class="form-control hide" name="message_id" value=" <?php echo $messages->message_id; ?> ">
                                    <div class="hide"><input type="text" value="<?php echo( $this->uri->segment(1));?>" name="theuri"></div>
                                    <div class="form-group"><label>Message:</label> <textarea type="text" name="" class="form-control" rows="4"><?php echo $messages->message; ?></textarea></div>
                                    <div class="form-group"><label>Reply:</label> <textarea type="text" name="reply" placeholder="Reply" class="form-control" rows="6"></textarea></div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Reply</button>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
        <?php } ?>

                <!--modal form for profile -->

    </tbody>
                </table>

                </div>
            </div>
        </div>
    </div>

<?php require_once("includes/footer.php");