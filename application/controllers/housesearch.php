<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class housesearch extends CI_Controller {

	    private $data;
        protected $before_filter = array(
        'action' => '_check_if_logged_in',
        'except' => array()
    );

	
	function __construct()
    {
        parent::__construct();

        $this->load->model('housesearch_model');
        $this->load->model('housesearch_model');
        $this->load->model('user_model');
        $this->load->helper("URL", "DATE", "URI", "FORM");
        $this->load->library('form_validation');
        
    }
	
	public function index()
	{
	
		$this->show_house_details();

	}

	    public function show_house_details()
    {


        $user_id = $this->session->userdata('user_id');
        $this->load->model('profile_model');        

        $data['USER_DETAILS'] = $this->user_model->get_user($user_id); 
        $data['HOUSE_DETAILS'] = $this->profile_model->show_all_houses();        
        $data['IMAGE'] = $this->profile_model->show_images();        
        $this->load->view('housesearch',$data);

    }


    public function show_recommendations()
    {

        $user_id = $this->session->userdata('user_id');
        $this->load->model('profile_model');        

        $data['USER_DETAILS'] = $this->user_model->get_user($user_id); 
        $data['HOUSE_DETAILS'] = $this->profile_model->show_all_houses();        
        $data['IMAGE'] = $this->profile_model->show_images();        
        $this->load->view('houserecommendations',$data);

    }

    function post_the_rating()
    {
        $rating = ($this->input->post('rating'));
        $house_id = ($this->input->post('rating'));
        $user_id = $this->session->userdata('user_id');

        $rating_data = array(
            'rating' => $rating, 
            'house_id' => $house_id,
            'user_id' => $user_id,          

        );

        $this->housesearch_model->post_rating($rating_data);
    }

} 