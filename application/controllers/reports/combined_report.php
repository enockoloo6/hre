<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class combined_report extends MY_Controller {


	private $data;
	protected $before_filter = array(
		'action' => '_check_if_logged_in',
		'except' => array()
	);


	public function index()
	{

		$this->load->view('combined_reports');

	}
} 