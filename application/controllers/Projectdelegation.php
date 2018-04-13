<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projectdelegation extends CI_Controller {
	public $user_id ="";	
	public $deledates =""; 

    	public function __construct(){
				parent::__construct();
					$this->load->helper('url'); 
					$this->load->library('session');
					$this->load->model('Projectdelegation_model');
					$this->load->library(array('session', 'form_validation'));
					$this->load->library("pagination");
					$this->load->library('email');
					if($this->session->user == 'logged_in'){
						$this->user_id = $this->session->userdata['id'];
						}


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
					$listOfDataById['records']	= $this->Projectdelegation_model->getProjectDelegationStatus($record_id);
					 $deli =array();
					foreach($listOfDataById['records']['delegates_data'] as $delegates){
						array_push($deli, $delegates->project_delegation_delegated_email);

					}
					$this->deledates = implode(",",$deli);

					
					 
					
					$listOfDataById['message'] = $param2;
					$listOfDataById['record_id'] = $record_id;
					$listOfDataById['total_no_of_days'] ="";
					$listOfDataById['days_left_from_current_date'] ="";
					$listOfDataById['size_of_extend_date'] = sizeof($listOfDataById['records']['delegates_date_data']);
					if($listOfDataById['size_of_extend_date'] > 0){
						$date1=date_create($listOfDataById['records']['delegates_data'][0]->project_delegation_date);
						$date2=date_create($listOfDataById['records']['delegates_date_data'][$listOfDataById['size_of_extend_date']-1]->project_delegation_dates_extend_date);
						$diff=date_diff($date1,$date2);
						$listOfDataById['total_no_of_days'] = $diff->format("%a days");

						
						
					}else{
						$date1=date_create($listOfDataById['records']['delegates_data'][0]->project_delegation_date);
						$date2=date_create($listOfDataById['records']['delegates_data'][0]->project_delegation_target_date);
						$diff=date_diff($date1,$date2);
						$listOfDataById['total_no_of_days'] = $diff->format("%a days");
					}

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
					'project_delegation_followup_from'=>$this->input->post('followup_from'),
					'project_delegation_remark'=>$this->input->post('remark'),
					'user_id'=>$this->user_id,

				   );

				   $data[1] = array(
					'delegates_name'=>$this->input->post('delegate_to'),
					'delegates_email'=>$this->input->post('delegate_email'),
					'phone_number'=>$this->input->post('delegate_phone'),
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

						/* ...........................Mail sending start here!.......................................*/

						$mail_to = implode(",",$data[1]['delegates_email']);
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

						$this->email->subject('Project Delegations');

						$body = $this->load->view('email_template/project_delegation.php',$data_quick,TRUE);

						$this->email->message($body);

						$this->email->send();

/* ...........................Mail sending end here!................................................*/

			/*..............................sms send start here............................................ */
			$send_to = implode(",",$data[1]['phone_number']);
			$text="Project delegations insert gaurav test.";	 
			$chs = curl_init('http://203.212.70.200/smpp/sendsms?username=glazegalway&password=del12345&to='.$send_to.'&from=SECAPP&text='.urlencode($text).'&category=bulk');		 
			curl_setopt($chs, CURLOPT_CUSTOMREQUEST, "GET");
			curl_setopt($chs, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($chs, CURLOPT_HTTPHEADER, array("Content-Type", "application/json" ));
			$results = curl_exec($chs);
			//print_r($results);
			/*..............................sms send end here............................................ */

					 
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
								//  $mail_to = implode(",",$data[1]['delegates_email']);
								$listOfDataById['records']	= $this->Projectdelegation_model->getProjectDelegationStatus($record_id);
								$deli =array();
							   foreach($listOfDataById['records']['delegates_data'] as $delegates){
								   array_push($deli, $delegates->project_delegation_delegated_email);
		   
							   }
							   $this->deledates = implode(",",$deli);

								 $this->email->from('surender.singh@glazegalway.com', 'Surender');
								 $this->email->to($this->deledates);
								 $this->email->subject('Project status');
								 $this->email->message("Next Followup date : ".$this->input->post('nxt_followup_date'));
						 
								 $this->email->send();
								 $submail = $this->input->post('submail');
								//  if($submail){
								// 	/* ...........................Mail sending start here!.......................................*/
			
								// 	$this->deledates = implode(",",$deli);
								// 	$config = array (
								// 	'mailtype' => 'html',
								// 	'charset'  => 'utf-8',
								// 	'priority' => '1'
								// 	);
								// 	$this->email->initialize($config);
								// 	$this->email->set_newline("\r\n");
								// 	$this->email->from('surender.singh@glazegalway.com', 'Surender');
								// 	$data_quick["mail_data"] = $data;
								// 	$this->email->to($this->deledates);
			
								// 	$this->email->subject('Project Delegations');
			
								// 	$body = $this->load->view('email_template/project_delegation.php',$data_quick,TRUE);
			
								// 	$this->email->message($body);
			
								// 	$this->email->send();
			
								// 	/* ...........................Mail sending end here!................................................*/
					
			
								//   }
								 
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

		public function UpdateDelegates(){
			$record_id =$this->uri->segment(3); 


			if($this->input->post('delegate_to') != null){

					$data = array(
						'project_delegation_id' => $record_id,
						'delegates_name'=>$this->input->post('delegate_to'),
						'delegates_email'=>$this->input->post('delegate_email'),
						'phone_number'=>$this->input->post('delegate_phone'),
						'extend_date'=>$this->input->post('extend_date'),
						'reason'=>$this->input->post('reason'),

					);
					//print_r($data);
					$result = $this->Projectdelegation_model->UpdateDelegates($data);
					 if($result)
					 {
					 $param1 =  "<h2>Success</h2>";
					 $submail = $this->input->post('submail');
					 if($submail){
						/* ...........................Mail sending start here!.......................................*/

						$mail_to = implode(",",$data['delegates_email']);
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

						$this->email->subject('Project Delegations');

						$body = $this->load->view('email_template/project_delegation.php',$data_quick,TRUE);

						$this->email->message($body);

						$this->email->send();

						/* ...........................Mail sending end here!................................................*/
					/*..............................sms send start here............................................ */
					$send_to = implode(",",$data['phone_number']);
					$text="Project delegations update gaurav test.";	 
					$chs = curl_init('http://203.212.70.200/smpp/sendsms?username=glazegalway&password=del12345&to='.$send_to.'&from=SECAPP&text='.urlencode($text).'&category=bulk');		 
					curl_setopt($chs, CURLOPT_CUSTOMREQUEST, "GET");
					curl_setopt($chs, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($chs, CURLOPT_HTTPHEADER, array("Content-Type", "application/json" ));
					$results = curl_exec($chs);
					//print_r($results);
					/*..............................sms send end here............................................ */
		

					 }
					 
					 }
					 else
					 {
					 $param1 = "<h2>ERROR</h2>";
					 
					 }
					 $this->view(null , $param1 );
			}else{
				redirect('Projectdelegation/view/'.$record_id);
			}   

		}
		
		
}
