<?php

	class Indexmeeting extends CI_Controller 
	{
	 
		public function __construct(){
				parent::__construct();
					$this->load->helper('url'); 
					$this->load->library('session');
					$this->load->model('Indexmeeting_model');
					$this->load->library(array('session', 'form_validation'));
		} 
			 
		public function index(){  
			if($this->session->user == 'logged_in'){
				$data1['meeting'] = $this->Indexmeeting_model->get_allmeeting();
				$this->load->view('meeting-in-progress',$data1);
			}else{
				$this->load->view("login");
			}
		}  	 

		public function mettings_status(){  
			if($this->session->user == 'logged_in'){
			//get data with id from database
			$url_id = $this->uri->segment(3);
				//echo $url_id;
			$data['list'] = $this->Indexmeeting_model->get_meeting_status($url_id);
			$this->load->view('mettings-progress-status',$data);
			}else{
				$this->load->view("login");
			}

		}   	 
		
		public function metting_info(){ 

			if($this->session->user == 'logged_in'){
			  if($this->uri->segment(3)){
				$id= $this->uri->segment(3);
				//print_r($id);
				$data['fetch'] = $this->Indexmeeting_model->get_meeting($id);
				$this->load->view('metting-info',$data);
				}
				else{
				$data['fetch'] = array();
				$this->load->view('metting-info',$data);
				}
			}else{
				$this->load->view("login");
			}
				
		} 
		
		public function meeting(){
			if($this->session->user == 'logged_in'){
			//$id= $this->uri->segment(3);
			//print_r($id);
			$data['fetch'] = $this->Indexmeeting_model->get_meeting();
		    $this->load->view('metting-info',$data);
			}else{
				$this->load->view("login");
			}	
		}
		
		public function insert_meeting(){
		$record_id =$this->uri->segment(3); 

		$this->load->model('Indexmeeting_model');

		$data=array();
		$data[0] = array(
		 'date_of_meeting'=>$this->input->post('previous_date'),
		 'agenda_id'=>$this->input->post('agenda'),
	     'confidentiality'=>$this->input->post('confidentiality'),
	     'self_seating'=>$this->input->post('seating'),
	     // 'participants_id'=>1,
	     // 'conclusion_id'=>1,
	     // 'agenda_status'=>1,
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
		  
		if($this->uri->segment(3)){
		   $this->Indexmeeting_model->updatemeeting($data , $record_id);
			redirect('indexmeeting');
           }else{
           $this->Indexmeeting_model->form_insert($data);
		   redirect('indexmeeting');
            }

			} 
	}

?>
