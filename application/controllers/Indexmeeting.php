<?php

	class Indexmeeting extends CI_Controller 
	{
	 
		public function __construct(){
				parent::__construct();
					$this->load->helper('url'); 
					$this->load->library('session');


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
			$this->data['list'] = $this->Indexmeeting_model->get_meeting_status();
			$this->load->view('mettings-progress-status',$this->data);
			}else{
				$this->load->view("login");
			}

		}   	 
		
		public function metting_info(){  
			if($this->session->user == 'logged_in'){
			$data['list'] = $this->Indexmeeting_model->get_meeting();
			$this->load->view('metting-info',$data);
			}else{
				$this->load->view("login");
			}
			
		} 
		
		public function insert_meeting(){
		$this->load->model('Indexmeeting_model');
		$data=array();
		$data[0] = array(
		 'date_of_meeting'=>$this->input->post('previous_date'),
		  'agenda_id'=>1,
	     'confidentiality'=>$this->input->post('confidentiality'),
	     'self_seating'=>$this->input->post('seating'),
	     'participants_id'=>1,
	     'conclusion_id'=>1,
	     'agenda_status'=>1,
		);
		$data[1] = array(
		
		 'name'=>$this->input->post('name'),
		 'department'=>$this->input->post('department'),
		 'email'=>$this->input->post('email'),
		 'employee'=>$this->input->post('employee'),
		  );
		$data[2] = array(
		 
		 'conclusion_type'=>$this->input->post('conclusion_type'),
		 'conclusion_textarea'=>$this->input->post('conclusion_textarea'),
		 'targetdate'=>$this->input->post('targetdate'),
		 'delegated_dept'=>$this->input->post('delegated_dept'),
		 'delegated_name'=>$this->input->post('delegated_name'),
		  );
		$this->Indexmeeting_model->form_insert($data);
		
			
		}
			
 
	}

?>
