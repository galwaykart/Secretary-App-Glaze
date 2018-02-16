<?php

	class Daillynote extends CI_Controller 
	{
	 
		public function __construct(){
				parent::__construct();
					$this->load->helper('url'); 
					$this->load->library('session');
					$this->load->model('Daillynote_model');
					$this->load->library(array('session', 'form_validation'));
		} 
			 
		public function index(){  
			if($this->session->user == 'logged_in'){
				$this->load->view('dailynote-list');
			}else{
				$this->load->view("login");
			}
		} 		
		public function daillynote_view(){  
			if($this->session->user == 'logged_in'){
				$this->load->view('daillynote-view');
			}else{
				$this->load->view("login");
			}
		}  	 

		 
	}

?>
