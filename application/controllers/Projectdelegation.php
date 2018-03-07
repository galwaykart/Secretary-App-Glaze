<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projectdelegation extends CI_Controller {
    	public function __construct(){
				parent::__construct();
					$this->load->helper('url'); 
					$this->load->library('session');
					$this->load->model('Projectdelegation_model');
					$this->load->library(array('session', 'form_validation'));
					$this->load->library("pagination");
		}
		public function index($param1 = NUll , $param3 = null , $param = Null)
		{
			
			if($this->session->user == 'logged_in'){	
					$config = array();

					$config["base_url"] = base_url() ."Projectdelegation/index";

					$config["total_rows"] = $this->Projectdelegation_model->record_count();

					$config["per_page"] = 1;

					$config["uri_segment"] = 3;

					$this->pagination->initialize($config);

					if($param){
					$page = 1;
					}
					else{
					$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
					}

					$data["records"] = $this->Projectdelegation_model->getprojectdelegation($config["per_page"], $page);

					$data["links"] = $this->pagination->create_links();

					$data["message"] = $param3;

					//print_r($data["records"]);

					$this->load->view("project_delegation", $data);
					
				}else{
					$this->load->view("login");
				}
		} 		
		public function view($param1 = NUll , $param2 = null)
		{
			
			if($this->session->user == 'logged_in'){	
				if($this->uri->segment(3)){
					$record_id =$this->uri->segment(3); 
					//$listOfDataById['records'] = array();
					$listOfDataById['records']	= $this->Projectdelegation_model->getProjectDelegationStatus($record_id);
					$listOfDataById['message'] = $param2;
					$listOfDataById['record_id'] = $record_id;

					// echo "<pre>";
					// print_r($listOfDataById);
					// echo "</pre>";
					$this->load->view('project-delegation-view',$listOfDataById);

				}
				// else{
				// 	$listOfData['records'] = array();
				// 	$listOfData['message'] = $param2;
				// 	$this->load->view('project-delegation-view',$listOfData);
				// }
					
					
				}else{
					$this->load->view("login");
				}
		}


		public function req()
		{
			
			//echo "gaurav";
			$record_id =$this->uri->segment(3); 
			// echo $record_id;
			// print_r($this->uri);
			// print_r(Sizeof($this->uri->segment(3)));
			// if ($_SERVER["REQUEST_METHOD"] == "POST") {
			//	echo "Hello I am gaurav";
				if($this->input->post('start_date') != null){
				$data = array();
				$data[0] = array(
					'project_delegation_date'=>$this->input->post('start_date'),
					'project_delegation_project'=>$this->input->post('project_name'),
					'project_delegation_department'=>$this->input->post('department'),
					'project_delegation_outsourcing'=>$this->input->post('outsource'),
					'project_delegation_target_date'=>$this->input->post('target_date'),
					'project_delegation_followup_date'=>$this->input->post('followup_date'),
					'project_delegation_remark'=>$this->input->post('remark'),
				   );

				   $data[1] = array(
					'delegates_name'=>$this->input->post('delegate_to'),
					'delegates_email'=>$this->input->post('delegate_email'),
				   );

				  
				    //print_r($data); 
				
				//print_r($data[1]);
				if($this->uri->segment(3)){
					//echo "i am in updation of record";
					$result = $this->Projectdelegation_model->updateProjectDelegation();
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
					 //echo "i am in addition of record";
					 $result = $this->Projectdelegation_model->addProjectDelegation($data);
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

				
				// }else {
				// 	echo "no request made with post method";
				// }
				

			}else{
				redirect('Projectdelegation');
			}
		}


		public function adddelegationstatus(){
						$record_id =$this->uri->segment(3); 
							if($this->input->post('status_date') != null){
							$data = array();
							$data[0] = array(
								'project_delegation_id' => $record_id,
								'project_delegation_status_date'=>$this->input->post('status_date'),
								'project_delegation_status_status'=>$this->input->post('status'),
								'project_delegation_status_next_followup_date'=>$this->input->post('nxt_followup_date'),
								'project_delegation_status_current_status'=>$this->input->post('current_ctatus'),
							   );

								 //echo "i am in addition of record";
								 $result = $this->Projectdelegation_model->addProjectDelegationStatus($data);
								 if($result)
								 {
								 $param1 =  "<h2>Success</h2>";
								 
								 }
								 else
								 {
								 $param1 = "<h2>ERROR</h2>";
								 
								 }
								 $this->view(null , $param1 );
						
			
							
							// }else {
							// 	echo "no request made with post method";
							// }
							
			
						}else{
							redirect('Projectdelegation/view/'.$record_id);
						}
		}


		public function joindata(){
			$result = $this->Projectdelegation_model->joinData();
		}
		
		
}
