<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class users extends MY_Controller {


	private $data;
	protected $before_filter = array(
		'action' => '_check_if_logged_in',
		'except' => array()
	);

	
	public function index()
	{
	
		$this->load->view('user_reports');

	}
} 