<?php

	class Indexmeeting extends CI_Controller 
	{
	 
		public function __construct(){
				parent::__construct();
					$this->load->helper('url'); 
					$this->load->library('session');
					$this->load->model('index_meeting');
					$this->load->library(array('session', 'form_validation'));
		} 
			 
		public function index(){  
			if($this->session->user == 'logged_in'){
				$this->load->view('meeting-in-progress');
			}else{
				$this->load->view("login");
			}
		}  	 

		public function mettings_status(){  
			if($this->session->user == 'logged_in'){
			$this->data['list'] = $this->index_meeting->get_meeting_status();
			$this->load->view('mettings-progress-status',$this->data);
			}else{
				$this->load->view("login");
			}

		}   	 
		
		public function metting_info(){  
			if($this->session->user == 'logged_in'){
			$this->data['list'] = $this->index_meeting->get_meeting();
			$this->load->view('metting-info',$this->data);
			}else{
				$this->load->view("login");
			}
			
		} 

	
 
	}

?>
