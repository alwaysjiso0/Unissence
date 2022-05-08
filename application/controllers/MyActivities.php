<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyActivities extends CI_Controller {

	public function __construct() {
        parent:: __construct();
        $this->load->library('session'); //enable session
    }
	
	public function index()
	{
        $this->load->helper('form');
		$this->load->helper('url');
        $this->load->view('template/header');
	}

    public function activities($activity) {
        $data['activity'] = $activity;
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view('template/header');
        $this->load->view('template/body_left'); 
        $this->load->view('template/body_middle_account', $data); 
        if ($activity === 'myaccount') {
            $this->load->view('account'); 
        } else {
            $this->load->view('template/body_right_questions'); 
        }      
        $this->load->view('template/footer');
    } 

}
