<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class rented_out extends MY_Controller {


	private $data;
	protected $before_filter = array(
		'action' => '_check_if_logged_in',
		'except' => array()
	);


	public function index()
	{

		$this->load->view('rented_houses_report');

	}
} 