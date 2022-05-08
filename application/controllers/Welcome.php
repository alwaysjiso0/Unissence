<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
        parent:: __construct();
        $this->load->library('session'); //enable session
    }
	
	public function index()
	{
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view('template/header');
		$this->load->view('template/body_left');
		$this->load->view('template/body_middle');
		$this->load->view('template/body_right');
		$this->load->view('template/footer');
	}

}
