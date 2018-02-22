<?php

	class Appoinment extends CI_Controller 
	{
	 
		public function __construct(){
				parent::__construct();
					$this->load->helper('url'); 
					$this->load->library('session');
					// $this->load->model('Appoinment_model');
					$this->load->library(array('session', 'form_validation'));
		} 
			 
		public function index(){  
			if($this->session->user == 'logged_in'){				 
				$this->load->view('appoinment');
				
			}else{
				$this->load->view("login");
			}
		} 
		 
	}

?>
