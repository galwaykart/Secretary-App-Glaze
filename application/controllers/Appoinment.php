<?php

	class Appoinment extends CI_Controller 
	{
	 
		public function __construct(){
				parent::__construct();
					$this->load->helper('url'); 
					$this->load->library('session');
					 $this->load->model('Appointment_model');
					$this->load->library(array('session', 'form_validation'));
		} 
			 
		public function index(){  
			if($this->session->user == 'logged_in'){	
				//$this->load->model('Quickwork_model');
				$listOfData['records']	= $this->Appointment_model->getAppointmentList();
				$this->load->view('appoinment',$listOfData);
				
			}else{
				$this->load->view("login");
			}
		}

		public function appointment_view(){  
			$this->load->model('Appointment_model');
			
			if($this->session->user == 'logged_in'){
				
				if($this->uri->segment(3)){
					//echo $this->uri->segment(3);
					$record_id =$this->uri->segment(3); 
					$listOfDataById['insidequickwork']	= $this->Appointment_model->getAppointmentById($record_id);
					echo json_encode($listOfDataById);
					//$this->load->view('daillynote-view',$listOfDataById);

				}
				else{
					$listOfData['insidequickwork'] = array();
					//$this->load->view('daillynote-view',$listOfData);
				}
				
			}else{
				$this->load->view("login");
			}
		}
		
		
		public function req(){
			//echo "gaurav";
			 $record_id =$this->uri->segment(3); 
			// echo $record_id;
			// print_r($this->uri);
			// print_r(Sizeof($this->uri->segment(3)));
			// if ($_SERVER["REQUEST_METHOD"] == "POST") {
			//	echo "Hello I am gaurav";
				$this->load->model('Appointment_model');
				$data = array();
				$data[0] = array(
					'appointment_start_time'=>$this->input->post('date'),
					'appointment_subject'=>$this->input->post('task'),
					'appointment_end_time'=>$this->input->post('target_date'),
					'appointment_remark'=>$this->input->post('remark'),
					'appointment_periodic'=>$this->input->post('peroidic'),
					'appointment_travel_time'=>$this->input->post('travel_time'),
					'appointment_status'=>$this->input->post('status'),
					'appointment_active'=>$this->input->post('active'),
				   );

				   $data[1] = array(
					'delegates_name'=>$this->input->post('delegate_to'),
					'delegates_email'=>$this->input->post('delegate_email'),
				   );


				    print_r($data);
				
				//print_r($data[1]);
				if($this->uri->segment(3)){
					echo "i am in updation of record";
					$this->Appointment_model->updateAppointment($data , $record_id);
					redirect('Appoinment');
					
				 }else{
					 echo "i am in addition of record";
				 	$this->Appointment_model->addAppointment($data);
					redirect('Appoinment');
				}
				
				// }else {
				// 	echo "no request made with post method";
				// }
				

			}

		 
	}

?>
