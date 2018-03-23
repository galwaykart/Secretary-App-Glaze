<?php

	class Reminder extends CI_Controller 
	{
	 
		public function __construct(){
				parent::__construct();
					$this->load->helper('url'); 
					$this->load->library('session');
<<<<<<< HEAD
					$this->load->model('Reminder_model');
=======
				    $this->load->model('Reminder_sheet_model');
>>>>>>> dead013ecf9774cfa9272c860cbb6bb9f45aebf4
					$this->load->library(array('session', 'form_validation'));
					$this->load->library("pagination");
		} 
			 
		public function index(){  
			if($this->session->user == 'logged_in'){
				 $data['fetch'] = $this->Reminder_sheet_model->get_reminder();
				 $this->load->view('reminderSheet',$data);
			}else{
				$this->load->view("login");
			}
		}
		
		public function reminder_view(){
			if($this->session->user == 'logged_in'){
				if($this->uri->segment(3)){
					$record_id =$this->uri->segment(3); 
					$listOfDataById['insidereminder']	= $this->Reminder_sheet_model->getreminderById($record_id);
					echo json_encode($listOfDataById);
				}
				else{
					$listOfData['insidereminder'] = array();
				}
			}
			else{
				$this->load->view("login");
			}
		}
		
		public function insert_sheet(){
		$id = $this->uri->segment(3); 
			$data = array();
			$data[0] = array(
			'reminder_sheet_start_date'=>$this->input->post('start_date'),
			'reminder_sheet_end_date'=>$this->input->post('end_date'),
			'reminder_sheet_start_time'=>$this->input->post('start_time'),
			'reminder_sheet_end_time'=>$this->input->post('end_time'),
			'reminder_sheet_frequency'=>$this->input->post('frequency'),
			'reminder_sheet_subject'=>$this->input->post('subject'),
			'reminder_sheet_status'=>$this->input->post('status')
			);
			$data[1] = array(
			'reminder_sheet_delegates_name'=>$this->input->post('delegate_to'),
			'reminder_sheet_delegates_email'=>$this->input->post('email'),
			'reminder_sheet_delegates_phone'=>$this->input->post('phone')
			);
			if($this->uri->segment(3)){
			$this->Reminder_sheet_model->update_reminder($data,$id);
			redirect('Reminder');
			}
			else{
			$this->Reminder_sheet_model->reminder_sheet($data);
			redirect('Reminder');
			}
		}
		
	}

?>
