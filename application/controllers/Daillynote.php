<?php

	class Daillynote extends CI_Controller 
	{
	 
		public function __construct(){
				parent::__construct();
					$this->load->helper('url'); 
					$this->load->library('session');
					$this->load->model('Daillynote_model');
					$this->load->library(array('session', 'form_validation'));
					$this->load->library("pagination");
		} 
			 
		public function index($param1 = NUll , $param3 = null , $param = Null){  
			if($this->session->user == 'logged_in'){
				$config = array();

				$config["base_url"] = base_url() ."Daillynote/index";

				$config["total_rows"] = $this->Daillynote_model->record_count();

				$config["per_page"] = 1;

				$config["uri_segment"] = 3;

				$this->pagination->initialize($config);

				if($param){
					$page = 1;
				}
				else{
					$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
				}

				$data["records"] = $this->Daillynote_model->getDailyNotesList($config["per_page"], $page);

				$data["links"] = $this->pagination->create_links();

				$data["message"] = $param3;

				//print_r($data);
				$this->load->view("dailynote-list", $data);

				//$listOfData['records']	= $this->Daillynote_model->getDailyNotesList();
					//$this->load->view('dailynote-list',$listOfData);
				
			}else{
				$this->load->view("login");
			}
		} 		
		public function daillynote_view(){  
			if($this->session->user == 'logged_in'){
				if($this->uri->segment(3)){
					$record_id =$this->uri->segment(3); 
					$listOfDataById['records']	= $this->Daillynote_model->getDailyNotesListById($record_id);
					$this->load->view('daillynote-view',$listOfDataById);

				}
				else{
					$listOfData['records'] = array();
					$this->load->view('daillynote-view',$listOfData);
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
				$this->load->model('Daillynote_model');
				if($this->input->post('Department')){
					$data = array();
					$data[0] = array(
						'task_name'=>$this->input->post('task'),
						'task_type'=>$this->input->post('task_type'),
						'department'=>$this->input->post('Department'),
						'task_start_date'=>$this->input->post('date'),
						'task_target_date'=>$this->input->post('target_date'),
						'delegated'=>$this->input->post('delegate'),
						'email'=>$this->input->post('email_to'),
						'seretary_name'=>$this->input->post('secretary_name'),
						'confidentiality'=>$this->input->post('confidential'),
						'my_sitting'=>$this->input->post('mysitting'),
						'priority'=>$this->input->post('priority'),
						'venue'=>$this->input->post('venue'),
						'communication_medium'=>$this->input->post('comm_medium'),
						'seat_count'=>$this->input->post('seat_cont'),
						'driver_count'=>$this->input->post('deiver_cont'),
						'car_ount'=>$this->input->post('car_cont'),
						'notes'=>$this->input->post('notes'),
					   );
	
					   $data[1] = array(
						'department'=>$this->input->post('part_dept'),
						'employee'=>$this->input->post('Employee'),
						'name'=>$this->input->post('parti_name'),
						'email'=>$this->input->post('parti_email'),
					   );
					
					//print_r($data[1]);
					if($this->uri->segment(3)){
						$result =	$this->Daillynote_model->updateDailyNotes($data , $record_id);
						if($result)
						{
						$param1 =  "<h2>Successfully updated</h2>";
						
						}
						else
						{
						$param1 = "<h2>ERROR</h2>";
						
						}
						$this->index(null ,$param1 , $this->uri->segment(3));
						
						
					}else{
						$result =$this->Daillynote_model->addDailyNotes($data);
						if($result)
						{
						$param1 =  "<h2>Success</h2>";
						
						}
						else
						{
						$param1 = "<h2>ERROR</h2>";
						
						}
						$this->index(null , $param1 ,null);						

					}
				}else{
					redirect('Daillynote');
				}

				
				// }else {
				// 	echo "no request made with post method";
				// }
				

			}
		


		 
	}

?>
