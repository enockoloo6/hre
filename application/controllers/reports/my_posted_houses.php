<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_posted_houses extends MY_Controller {


	private $data;
	protected $before_filter = array(
		'action' => '_check_if_logged_in',
		'except' => array()
	);

	function __construct()
	{
		parent::__construct();

		$this->load->model('user_model');
		$this->load->model('profile_model');
		$this->load->model('housesearch_model');
		$this->load->model('reports_model');
	}

	public function index()
	{


		$location = ($this->input->post('location'));
		$date = ($this->input->post('date'));

//		if($location) {
//			$m = $this->housesearch_model->show_number_of_houses_in_model($location);
//			//echo($m);
//		}else{
//			$m = 'Select location from the dropdown above';
//		}
		$data['NUMBER_PER_LOCATION'] = $this->reports_model->show_number_of_houses_in_model($location);
		$data['HOUSES_PER_DATE'] = $this->reports_model->houses_per_date($date);
		$user_id = $this->session->userdata('user_id');
		$data['USER_DETAILS'] = $this->user_model->get_user($user_id);
		$data['HOUSE_LOCATIONS'] = $this->profile_model->get_my_houses_locations($user_id);
		$data['HOUSE_DATES'] = $this->profile_model->get_my_houses_dates($user_id);
		$data['HOUSE_DETAILS'] = $this->profile_model->show_all_houses();
		$this->load->view('my_posted_houses_report', $data);
	}

}






