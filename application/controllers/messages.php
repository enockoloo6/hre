<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Peklo
 * Date: 4/9/2016
 * Time: 2:37 PM
 */
class Messages extends MY_Controller {

    private $data;
    protected $before_filter = array(
        'action' => '_check_if_logged_in',
        'except' => array()
    );


    function __construct()
    {
        parent::__construct();

        $this->load->model('housesearch_model');
        $this->load->model('user_model');
        $this->load->model('profile_model');
        $this->load->helper("URL", "DATE", "URI", "FORM");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $user_id = $this->session->userdata('user_id');
        $data['USER_DETAILS'] = $this->user_model->get_user($user_id);
        $data['ALL_USER_DETAILS'] = $this->user_model->get_all_users();
        $data['HOUSE_DETAILS'] = $this->profile_model->show_posted_houses();
        $data['IMAGE'] = $this->profile_model->show_images();
        $data['MESSAGES'] = $this->housesearch_model-> get_my_messages();

        $this->load->view('messages',$data);


    }

}