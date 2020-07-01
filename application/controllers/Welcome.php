<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');

		$this->load->view('welcome_message');
	}

	public function doc()
	{
		$this->load->view('dokumentasi');
	}
}
