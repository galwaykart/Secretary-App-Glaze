<?php

	class Reminder extends CI_Controller 
	{
	 	public $user_id ="";
		
		public function __construct(){
				parent::__construct();
					$this->load->helper('url'); 
					$this->load->library('session');
				    $this->load->model('Reminder_sheet_model');
					$this->load->library(array('session', 'form_validation'));
					$this->load->library("pagination");
					$this->load->library('email');
					$this->user_id = $this->session->userdata['id'];

		} 
			 
		public function index(){  
			if($this->session->user == 'logged_in'){
				$config = array();
					  $config["base_url"] = base_url() ."Reminder/index";
					  $config["total_rows"] = $this->Reminder_sheet_model->record_count();
				
					  $config["per_page"] = 10;
					  $config["uri_segment"] = 3;
					  $this->pagination->initialize($config);
					  $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
					  $data['fetch'] = $this->Reminder_sheet_model->get_reminder($config["per_page"], $page);
				
					  $data["links"] = $this->pagination->create_links();
				
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
		 $this->form_validation->set_rules('start_date','Start Date','trim|required');
		 $this->form_validation->set_rules('end_date','End Date','trim|required');
		 $this->form_validation->set_rules('start_time','Start Time','trim|required');
		 $this->form_validation->set_rules('end_time','End Time','trim|required');
		 $this->form_validation->set_rules('frequency','Frequency','trim|required');
		 $this->form_validation->set_rules('subject','Subject','trim|required');
	     if($this->form_validation->run() == false){
			 $this->index();
		 }
			else{
		  $id = $this->uri->segment(3); 
			$data = array();
			$data[0] = array(
			'reminder_sheet_start_date'=>$this->input->post('start_date'),
			'reminder_sheet_end_date'=>$this->input->post('end_date'),
			'reminder_sheet_start_time'=>$this->input->post('start_time'),
			'reminder_sheet_end_time'=>$this->input->post('end_time'),
			'reminder_sheet_frequency'=>$this->input->post('frequency'),
			'reminder_sheet_subject'=>$this->input->post('subject'),
			'reminder_sheet_status'=>$this->input->post('status'),
			'user_id'=>$this->user_id,
			);
			$data[1] = array(
			'reminder_sheet_delegates_name'=>$this->input->post('delegate_to'),
			'reminder_sheet_delegates_email'=>$this->input->post('email'),
			'reminder_sheet_delegates_phone'=>$this->input->post('phone')
			);
			if($this->uri->segment(3)){
			$this->Reminder_sheet_model->update_reminder($data,$id);
			$this->session->set_flashdata('msg', 'Updated Successfully!!!');
			redirect('Reminder');
			}
			else{
			$this->Reminder_sheet_model->reminder_sheet($data);
			$this->session->set_flashdata('msg', 'Inserted Successfully!!!');
			
/* ...........................Mail sending start here!.......................................*/

			$mail_to = implode(",",$data[1]['reminder_sheet_delegates_email']);
			$config = array (
				'mailtype' => 'html',
				'charset'  => 'utf-8',
				'priority' => '1'
				);
			$this->email->initialize($config);
			$this->email->set_newline("\r\n");
			$this->email->from('surender.singh@glazegalway.com', 'Surender');
			$data_quick["mail_data"] = $data;
			$this->email->to($mail_to);

			$this->email->subject('Remainder Sheet');

			$body = $this->load->view('email_template/remainder_sheet.php',$data_quick,TRUE);
						
			$this->email->message($body);

			$this->email->send();

/* ...........................Mail sending end here!................................................*/

			redirect('Reminder');
			}
		}
		}
	}

?>
