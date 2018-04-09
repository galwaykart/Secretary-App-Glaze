<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class DailyPeriodic extends CI_Controller {
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
		 $this->load->view("daily-periodic");  
	}else{
		$this->load->view("login");
	}
}

public function view(){   
	if($this->session->user == 'logged_in'){
		$this->load->view("daily-periodic-view");  
	}else{
		$this->load->view("login");
	}
}
public function add(){   
	if($this->session->user == 'logged_in'){
		$this->load->view("daily-periodic-add");  
	}else{
		$this->load->view("login");
	}
}
public function listpage(){   
	if($this->session->user == 'logged_in'){
		$this->load->view("daily-periodic-list");  
	}else{
		$this->load->view("login");
	}
}
 
}
?>