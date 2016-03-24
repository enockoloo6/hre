<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class house_availability extends MY_Controller {


	private $data;
	protected $before_filter = array(
		'action' => '_check_if_logged_in',
		'except' => array()
	);


	public function index()
	{

		$this->load->view('house_availability_report');

	}
} 