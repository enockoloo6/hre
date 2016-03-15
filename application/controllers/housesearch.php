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
        $data['IMAGE'] = $this->housesearch_model->display_house_images();        
        $this->load->view('housesearch',$data);

    }


    public function show_recommendations()
    {

        $user_id = $this->session->userdata('user_id');
        $this->load->model('profile_model');        

        $data['USER_DETAILS'] = $this->user_model->get_user($user_id); 
        $data['HOUSE_DETAILS'] = $this->profile_model->show_all_houses();        
        $data['IMAGE'] = $this->profile_model->show_images(); 
        // this is the real recommendation part

        //$user_rating = $this->housesearch_model->get_particular_rating($user_id);
        $users_ratings = $this->housesearch_model->get_other_ratings($user_id);

        print_r($users_ratings);

        return false; 
        //$other_users_ratings = $this->user_model->get_other_ratings($user_id);


        
        //$this->load->view('houserecommendations',$data);

    }

    public function search_results()
    {

        $user_id = $this->session->userdata('user_id');
        $this->load->model('profile_model');        

        $data['USER_DETAILS'] = $this->user_model->get_user($user_id); 
        $data['HOUSE_DETAILS'] = $this->profile_model->show_all_houses();        
        $data['IMAGE'] = $this->profile_model->show_images();        
        $this->load->view('housesearch_results',$data);

    }

    function post_the_rating()
    {
        $rating = ($this->input->post('rating'));
        $house_id = ($this->input->post('house_id'));
        $user_id = $this->session->userdata('user_id');

        $rating_data = array(
            'rating' => $rating, 
            'house_id' => $house_id,
            'user_id' => $user_id,
        );

        print_r($rating_data);
        return false;
        //$this->housesearch_model->post_rating($rating_data);

    }


    public function ajax_get_house_images($matter_category_id){

        if(null == $this->session->userdata('user_id')){
          $this->index();
          }else{

            $house_images = $this->housesearch_model->get_houses();

            header('Content-Type: application/x-json; charset=utf-8');
            echo json_encode($house_images);
        }
    }


    public function house_locations(){

        $house_house_locations = $this->housesearch_model->get_house_locations();

        //header('Content-Type: application/x-json; charset=utf-8');
        echo json_encode($house_house_locations);
    }


               

} 