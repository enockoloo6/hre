<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Google_map extends CI_Controller {

	
	public function index()
	{
	
		$this->load->view('google_map');

	}
} 