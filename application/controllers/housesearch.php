<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class housesearch extends MY_Controller {

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
        $data['ALL_USER_DETAILS'] = $this->user_model->get_all_users();
        $data['HOUSE_DETAILS'] = $this->profile_model->show_all_houses();
        $data['USERS_NUMBERS'] = $this->user_model->get_user_numbers();
        $data['IMAGE'] = $this->housesearch_model->display_house_images();
        $data['CHECK_AGE_GENDER_OCCUPATION_INTEREST'] = $this->user_model->check_interests_age_gender_occupations();//if not prompt the user to add them
        $data['GENDER_BASED_RECOMMENDATION'] = $this->housesearch_model->get_random_based_on_gender();
        $data['AGE_BASED_RECOMMENDATION'] = $this->housesearch_model->get_random_based_on_age();
        $data['INTEREST_BASED_RECOMMENDATION'] = $this->housesearch_model->get_random_based_on_interests();
        $data['OCCUPATION_BASED_RECOMMENDATION'] = $this->housesearch_model->get_random_based_on_occupations();
        $data['MESSAGES'] = $this->housesearch_model-> get_my_messages();


        $this->load->view('housesearch',$data);

    }


    public function show_recommendations()
    {

        $user_id = $this->session->userdata('user_id');
        $this->load->model('profile_model');        

        $data['USER_DETAILS'] = $this->user_model->get_user($user_id); 
        $data['HOUSE_DETAILS'] = $this->profile_model->show_all_houses();
        $data['USERS_NUMBERS'] = $this->user_model->get_user_numbers();
        $data['IMAGE'] = $this->profile_model->show_images();
        $data['ALL_GENDER_BASED_RECOMMENDATION'] = $this->housesearch_model->get_all_random_based_on_gender();
        $data['ALL_AGE_BASED_RECOMMENDATION'] = $this->housesearch_model->get_all_random_based_on_age();
        $data['ALL_INTEREST_BASED_RECOMMENDATION'] = $this->housesearch_model->get_all_random_based_on_interests();
        $data['ALL_OCCUPATION_BASED_RECOMMENDATION'] = $this->housesearch_model->get_all_random_based_on_occupations();

        // this is the real recommendation part

        //$user_rating = $this->housesearch_model->get_particular_rating($user_id);
        //$users_ratings = $this->housesearch_model->get_other_ratings($user_id);
//        echo "<pre>";
//        print_r($users_ratings);
//
//        echo "</pre>";
//
//        return false;
        //$other_users_ratings = $this->user_model->get_other_ratings($user_id);
        
        $this->load->view('houserecommendations',$data);

    }


    function test()
    {
        $location = ($this->input->post('house_location'));
        $type = ($this->input->post('house_type'));
        $price = ($this->input->post('price'));

        print_r($this->house_search_results($location, $type, $price));

//        $m = $this->user_model->get_user_numbers();
//
//        foreach($m as $n){echo $n->user_id;}
//        print_r($this->user_model->get_user_numbers());



        //print_r($this->housesearch_model->get_all_random_based_on_occupations());
        //$this->housesearch_model->get_all_random_based_on_interests();
       // $re = $this->housesearch_model->get_all_random_based_on_gender();
        //$this->housesearch_model->get_all_random_based_on_age();
//        foreach ($re as $houses){
//            foreach ($houses as $hou) {
//                echo($hou->house_post_Date);
//            }
//        }

    }

    public function search_results()
    {

        $location = ($this->input->post('house_location'));
        $type = ($this->input->post('house_type'));
        $price = ($this->input->post('price'));

        $user_id = $this->session->userdata('user_id');
        $this->load->model('profile_model');        

        $data['USER_DETAILS'] = $this->user_model->get_user($user_id); 
        $data['HOUSE_DETAILS'] = $this->profile_model->show_all_houses();        
        $data['IMAGE'] = $this->profile_model->show_images();
        $data['SEARCH_RESULTS'] = $this->house_search_results($location, $type, $price);


        $this->load->view('housesearch_results',$data);

    }

    function post_the_rating()
    {
        $rating = ($this->input->post('houserating'));
        $house_id = ($this->input->post('house_id'));
        $user_id = $this->session->userdata('user_id');

        $rating_data = array(
            'rating' => $rating, 
            'house_id' => $house_id,
            'user_id' => $user_id,
        );
        $failed_data = array(
            'house_id' => $house_id,
            'user_id' => $user_id,
        );
        $rated=$this->housesearch_model->check_if_house_is_rated($failed_data);

        if($rated){
            $this->session->set_flashdata('ratingfail', 'You have already rated house '.$house_id);
            redirect(base_url().'index.php/housesearch/show_recommendations');
        }
        else {

            $this->housesearch_model->post_rating($rating_data);
            $this->session->set_flashdata('ratingsuccess', 'You succesfully rated house ' . $house_id . ' with ' . $rating . ' stars');
            redirect(base_url().'index.php/housesearch/show_recommendations');
        }

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


    /********************************************************************************************************
     * @return mixed            GET HOUSES SEARCHED BY THE USER                                             *
     *******************************************************************************************************/


    function house_search_results($location, $type, $price){

        if($price == 10003000) {
            $all_search_details = array(
                'location' => $location,
                'type' => $type,
                'price <' => 3001,
                'price >' => 999
            );
            $price_type = array(
                'type' => $type,
                'price <' => 3001,
                'price >' => 999
            );
            $price_location = array(
                'location' => $location,
                'price <' => 3001,
                'price >' => 999
            );
            $only_price_location = $this->housesearch_model->get_type_where_price_and_location_is_same($price_location);
            $only_price_type = $this->housesearch_model->get_locations_where_price_and_type_is_same($price_type);
            $all_found_houses = $this->housesearch_model->search_for_houses($all_search_details);
            $results = array($only_price_location, $only_price_type, $all_found_houses);
            return $results;
        }
        else if($price == 30015000) {
            $all_search_details = array(
                'location' => $location,
                'type' => $type,
                'price <' => 5001,
                'price >' => 3000
            );

            $price_type = array(
                'type' => $type,
                'price <' => 5001,
                'price >' => 3000
            );
            $price_location = array(
                'location' => $location,
                'price <' => 5001,
                'price >' => 3000
            );
            $only_price_location = $this->housesearch_model->get_type_where_price_and_location_is_same($price_location);
            $only_price_type = $this->housesearch_model->get_locations_where_price_and_type_is_same($price_type);
            $all_found_houses = $this->housesearch_model->search_for_houses($all_search_details);
            $results = array($only_price_location, $only_price_type, $all_found_houses);
            return $results;
        }

        else if($price == 500110000) {
            $all_search_details = array(
                'location' => $location,
                'type' => $type,
                'price <' => 10001,
                'price >' => 5000
            );
            $price_type = array(
                'type' => $type,
                'price <' => 10001,
                'price >' => 5000
            );
            $price_location = array(
                'location' => $location,
                'price <' => 10001,
                'price >' => 5000
            );
            $only_price_location = $this->housesearch_model->get_type_where_price_and_location_is_same($price_location);
            $only_price_type = $this->housesearch_model->get_locations_where_price_and_type_is_same($price_type);
            $all_found_houses = $this->housesearch_model->search_for_houses($all_search_details);
            $results = array($only_price_location, $only_price_type, $all_found_houses);
            return $results;
        }
        else if($price == 1000115000) {
            $all_search_details = array(
                'location' => $location,
                'type' => $type,
                'price <' => 15001,
                'price >' => 999
            );
            $price_type = array(
                'type' => $type,
                'price <' => 15001,
                'price >' => 999
            );
            $price_location = array(
                'location' => $location,
                'price <' => 15001,
                'price >' => 999
            );
            $only_price_location = $this->housesearch_model->get_type_where_price_and_location_is_same($price_location);
            $only_price_type = $this->housesearch_model->get_locations_where_price_and_type_is_same($price_type);
            $all_found_houses = $this->housesearch_model->search_for_houses($all_search_details);
            $results = array($only_price_location, $only_price_type, $all_found_houses);
            return $results;
        }
        else if($price == 1500120000) {
            $all_search_details = array(
                'location' => $location,
                'type' => $type,
                'price <' => 20001,
                'price >' => 15000
            );
            $price_type = array(
                'type' => $type,
                'price <' => 20001,
                'price >' => 15000
            );
            $price_location = array(
                'location' => $location,
                'price <' => 20001,
                'price >' => 15000
            );
            $only_price_location = $this->housesearch_model->get_type_where_price_and_location_is_same($price_location);
            $only_price_type = $this->housesearch_model->get_locations_where_price_and_type_is_same($price_type);
            $all_found_houses = $this->housesearch_model->search_for_houses($all_search_details);
            $results = array($only_price_location, $only_price_type, $all_found_houses);
            return $results;
        }
        else if($price == "above20") {

            $all_search_details = array(
                'location' => $location,
                'type' => $type,
                'price >' => 20000
            );

            $price_type = array(
                'type' => $type,
                'price >' => 20000
            );
            $price_location = array(
                'location' => $location,
                'price >' => 20000

            );
            $only_price_location = $this->housesearch_model->get_type_where_price_and_location_is_same($price_location);
            $only_price_type = $this->housesearch_model->get_locations_where_price_and_type_is_same($price_type);
            $all_found_houses = $this->housesearch_model->search_for_houses($all_search_details);
            $results = array($only_price_location, $only_price_type, $all_found_houses);
            return $results;
        }
    }

    /********************************************************************************************************
     *                          GET HOUSES SEARCHED BY THE USER                                             *
     *******************************************************************************************************/
    function post_messages(){
        $sender = $this->session->userdata('user_id');
        $recipient = ($this->input->post('recipient'));
        $message = ($this->input->post('message'));
        $uri = $this->input->post('theuri');

        echo($sender.$recipient.$message.$uri);

        $message_details = array(
            'sender_id' => $sender,
            'recipient_id' => $recipient,
            'message' => $message,
        );

        $post_success = $this->housesearch_model->post_the_message($message_details);

        if($post_success && $uri == "housesearch"){
            $this->session->set_flashdata('ratingsuccess', ' Message was successfully sent to landlord/agent no '.$recipient);
            redirect(base_url().'index.php/housesearch');
        }
        if($uri == "show_recommendations"){
            $this->session->set_flashdata('ratingsuccess', ' Message was successfully sent to landlord/agent no '.$recipient);
            redirect(base_url().'index.php/housesearch/show_recommendations');
        }
    }


    function reply_message(){
        $sender = $this->session->userdata('user_id');
        $recipient = ($this->input->post('recipient'));
        $message = ($this->input->post('reply'));
        $message_id = ($this->input->post('message_id'));

        $uri = $this->input->post('theuri');

        echo($sender.$recipient.$message.$uri);

        $reply_details = array(
            'sender_id' => $sender,
            'recipient_id' => $recipient,
            'message' => $message,
        );
        $message_read = array(
            'message_status' => 'read',
        );

        $reply_success = $this->housesearch_model->post_the_message($reply_details);
        if($reply_success){
            $this->housesearch_model->confirm_reading($message_read,$message_id);

            $this->session->set_flashdata('reply_success', ' you successfuly replied');
            redirect(base_url().'index.php/messages');
        }

    }
    function delete_confirm_reading(){
        $message_ids = ($this->input->post('message_ids'));
        $action = ($this->input->post('action'));

        if($action == "delete" && $message_ids != "") {
            $this->housesearch_model->delete_message($message_ids);
            $count = 0;
            foreach($message_ids as $no){$count++;}

            $this->session->set_flashdata('reply_success', $count.' messages deleted');
            redirect(base_url().'index.php/messages');
        }
        else if($action == "read" && $message_ids !="") {
            $this->housesearch_model->confirm_read($message_ids);
            $count = 0;
            foreach($message_ids as $no){$count++;}

            $this->session->set_flashdata('reply_success', $count.' rows marked as read');
            redirect(base_url().'index.php/messages');
        }
        else if($action == "read" && $message_ids ==""){
            $this->session->set_flashdata('action_fail', 'please check at least one row to be marked as read');
            redirect(base_url().'index.php/messages');
        }
        else if($action == "delete" && $message_ids ==""){
            $this->session->set_flashdata('action_fail', 'please check at least one row to delete');
            redirect(base_url().'index.php/messages');
        }

    }
}