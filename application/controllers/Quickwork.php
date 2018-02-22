<?php

	class Quickwork extends CI_Controller 
	{
	 
		public function __construct(){
				parent::__construct();
					$this->load->helper('url'); 
					$this->load->library('session');
					
					$this->load->library(array('session', 'form_validation'));
		} 
			 
		public function index(){  
			if($this->session->user == 'logged_in'){
				//echo "gaurav";
				$this->load->model('Quickwork_model');
				$listOfData['records']	= $this->Quickwork_model->getQuickworkList();
				$this->load->view('quick-list',$listOfData);
				
			}else{
				$this->load->view("login");
			}
		} 		
		public function quickwork_view(){  
			if($this->session->user == 'logged_in'){
				$this->load->view('quick-view');
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
				$this->load->model('Quickwork_model');
				$data = array();
				$data[0] = array(
					'date'=>$this->input->post('date'),
					'task'=>$this->input->post('task'),
					'target_date'=>$this->input->post('target_date'),
					'priority'=>$this->input->post('priority'),
					'remark'=>$this->input->post('remark'),
					'status'=>$this->input->post('status'),
					'active'=>$this->input->post('active'),
					'delegates_name'=>$this->input->post('delegate_to'),
					'delegates_email'=>$this->input->post('delegate_email'),

				   );

				//    $data[1] = array(
				// 	'department'=>$this->input->post('part_dept'),
				// 	'employee'=>$this->input->post('Employee'),
				// 	'name'=>$this->input->post('parti_name'),
				// 	'email'=>$this->input->post('parti_email'),
				//    );


				    print_r($data);
				
				//print_r($data[1]);
				// if($this->uri->segment(3)){
				// 	$this->Daillynote_model->updateDailyNotes($data , $record_id);
				// 	redirect('Daillynote');
					
				// }else{
				 	$this->Quickwork_model->addQuickwork($data);
				// 	redirect('Daillynote');
				// }
				
				// }else {
				// 	echo "no request made with post method";
				// }
				

			}

		 
	}

?>
