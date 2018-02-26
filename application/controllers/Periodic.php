<?php

	class Periodic extends CI_Controller 
	{
	 
		public function __construct(){
				parent::__construct();
					$this->load->helper('url'); 
					$this->load->library('session');
					$this->load->model('Periodic_model');
					$this->load->library(array('session', 'form_validation'));
		} 
			 
		public function index(){  
			if($this->session->user == 'logged_in'){ 
				$this->load->view('monthly-periodic'); 
			}else{
				$this->load->view("login");
			}
		}
		
		public function view(){   
			if($this->session->user == 'logged_in'){
				$this->load->view("monthly-periodic-view"); 
			}else{
				$this->load->view("login");
			}
		}
		 
	}

?>
