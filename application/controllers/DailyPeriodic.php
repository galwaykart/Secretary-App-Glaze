<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class WeeklyPeriodic extends CI_Controller {
	public $user_id ="";	 

	public function __construct(){
		parent::__construct();
			$this->load->helper('url'); 
			$this->load->library('session');
			$this->load->model('Daily_periodic_model');
			$this->load->library("pagination");
			$this->load->library(array('session', 'form_validation'));
			$this->load->library('email');
			if($this->session->user == 'logged_in'){
				$this->user_id = $this->session->userdata['id'];
				}


} 
	 
public function index($day = ''){  
	if($this->session->user == 'logged_in'){ 
		 $this->load->view("Daily-perodic");  
	}else{
		$this->load->view("login");
	}
}

public function view(){   
	if($this->session->user == 'logged_in'){
		$this->load->view("Daily-perodic-view");  
	}else{
		$this->load->view("login");
	}
}
 
}
?>