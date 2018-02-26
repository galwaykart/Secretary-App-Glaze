<?php

	class Quickwork extends CI_Controller 
	{
	 
		public function __construct(){
				parent::__construct();
					$this->load->helper('url'); 
					$this->load->library('session');
					$this->load->model('Quickwork_model');
					$this->load->library(array('session', 'form_validation'));
					$this->load->library("pagination");
		} 
			 
		public function index(){  
			if($this->session->user == 'logged_in'){
				//echo "gaurav";
				$config = array();
				
					  $config["base_url"] = base_url() . "Quickwork/index";
				
					  $config["total_rows"] = $this->Quickwork_model->record_count();
					  echo $this->Quickwork_model->record_count();
				
					  $config["per_page"] = 2;
				
					  $config["uri_segment"] = 3;
				
					  $this->pagination->initialize($config);
				
					  $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
				
					  $data["records"] = $this->Quickwork_model->getQuickworkList($config["per_page"], $page);
				
					  $data["links"] = $this->pagination->create_links();
				
					  $this->load->view("quick-list", $data);

				
				//$listOfData['records']	= $this->Quickwork_model->getQuickworkList();
				//$this->load->view('quick-list',$listOfData);
				
			}else{
				$this->load->view("login");
			}
		} 		
		// public function quickwork_view(){  
		// 	if($this->session->user == 'logged_in'){
		// 		$this->load->view('quick-view');
		// 	}else{
		// 		$this->load->view("login");
		// 	}
		// }

		public function quickwork_view(){  
			$this->load->model('Quickwork_model');
			
			if($this->session->user == 'logged_in'){
				
				if($this->uri->segment(3)){
					//echo $this->uri->segment(3);
					$record_id =$this->uri->segment(3); 
					$listOfDataById['insidequickwork']	= $this->Quickwork_model->getQuickworkByList($record_id);
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


				   );

				   $data[1] = array(
					'delegates_name'=>$this->input->post('delegate_to'),
					'delegates_email'=>$this->input->post('delegate_email'),
				   );


				    print_r($data);
				
				//print_r($data[1]);
				//echo $this->uri->segment(3);
				 if($this->uri->segment(3)){
					 echo "I am in updation";
				 	$this->Quickwork_model->updateQuickwork($data , $record_id);
				 	redirect('Quickwork');
					
				 }else{
					echo "I am in addition";
				 	$this->Quickwork_model->addQuickwork($data);
				 	redirect('Quickwork');
				 }
				
				// }else {
				// 	echo "no request made with post method";
				// }
				

			}

		 
	}

?>
