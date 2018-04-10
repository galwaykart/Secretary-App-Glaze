<?php

	class Quickwork extends CI_Controller 
	{
		public $user_id ="";	 

		public function __construct(){
				parent::__construct();
					$this->load->helper('url'); 
					$this->load->library('session');
					$this->load->model('Quickwork_model');
					$this->load->library(array('session', 'form_validation'));
					$this->load->library("pagination");
					$this->load->library('email');
					if($this->session->user == 'logged_in'){
						$this->user_id = $this->session->userdata['id'];
						}
		} 
			 
		public function index($param1 = NUll , $param3 = null , $param = Null){  
			if($this->session->user == 'logged_in'){
				// echo $param1;
				// echo $param3;
				// echo $param;

				$config = array();
				
					  $config["base_url"] = base_url() . "Quickwork/index";
				
					  $config["total_rows"] = $this->Quickwork_model->record_count();
					  //echo $this->Quickwork_model->record_count();
				
					  $config["per_page"] = 1;
				
					  $config["uri_segment"] = 3;
				
					  $this->pagination->initialize($config);
						if($param){
							$page = 0;
						}
						else{
							$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
						}	
					  
				
					  $data["records"] = $this->Quickwork_model->getQuickworkList($config["per_page"], $page);
				
					  $data["links"] = $this->pagination->create_links();

					  $data["message"] = $param3;

				
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
			$this->form_validation->set_rules('date','date','trim|required');
			$this->form_validation->set_rules('task','task Name','trim|required');
			$this->form_validation->set_rules('target_date','Target date','trim|required');
			$this->form_validation->set_rules('remark', 'Remark', 'trim|required');
			$this->form_validation->set_rules('priority', 'priority', 'trim|required');
			$this->form_validation->set_rules('status', 'Status','required'); //{10} for 10 digits number
			$this->form_validation->set_rules('active','Active','trim|required');

			
		   if($this->form_validation->run() == false)
			  {
				  $this->index();
			  }else{
				$record_id =$this->uri->segment(3); 
				$this->load->model('Quickwork_model');
				if($this->input->post('date') != null){
					$data = array();
					$data[0] = array(
						'date'=>$this->input->post('date'),
						'task'=>$this->input->post('task'),
						'target_date'=>$this->input->post('target_date'),
						'priority'=>$this->input->post('priority'),
						'remark'=>$this->input->post('remark'),
						'status'=>$this->input->post('status'),
						'active'=>$this->input->post('active'),
						'user_id'=>$this->user_id,
	
	
						);
	
						$data[1] = array(
						'delegates_name'=>$this->input->post('delegate_to'),
						'delegates_email'=>$this->input->post('delegate_email'),
						);
	
						if($this->uri->segment(3)){
							//echo "I am in updation";
							$result = $this->Quickwork_model->updateQuickwork($data , $record_id);
							if($result)
							{
							$param1 =  "<h2>Successfully updated</h2>";
							$submail = $this->input->post('submail');
							if($submail){
								
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
							$data_quick["quickwork_data"] = $data;
							$this->email->to($mail_to);

							$this->email->subject('Quickwork');

							$body = $this->load->view('email_template/quickwork.php',$data_quick,TRUE);
										
							$this->email->message($body);

							$this->email->send();

							/* ...........................Mail sending end here!................................................*/

							}

							
							}
							else
							{
							$param1 = "<h2>ERROR</h2>";
							
							}
							$this->index(null ,$param1 , $this->uri->segment(3));
	
						
						}else{
						//echo "I am in addition";
						$result = $this->Quickwork_model->addQuickwork($data);
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
							$data_quick["quickwork_data"] = $data;
							$this->email->to($mail_to);
					
							$this->email->subject('Quickwork');
					
							$body = $this->load->view('email_template/quickwork.php',$data_quick,TRUE);
										
							$this->email->message($body);
					
							$this->email->send();

/* ...........................Mail sending end here!................................................*/

/*..............................sms send start here............................................ */
$text="baba KIng singh gaurav ff.";	 
$chs = curl_init('http://203.212.70.200/smpp/sendsms?username=glazegalway&password=del12345&to=9999695537,7836984727&from=SECAPP&text='.urlencode($text).'&category=bulk');		 
curl_setopt($chs, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($chs, CURLOPT_RETURNTRANSFER, true);
curl_setopt($chs, CURLOPT_HTTPHEADER, array("Content-Type", "application/json" ));
$results = curl_exec($chs);
print_r($results);
/*..............................sms send end here............................................ */

// $text="Quickwork :";
// // $chs = curl_init('http://bhashsms.com/api/sendmsg.php?user=Galway&pass=P@nas0n1C&sender=GALWAY&phone='.$telphone.'&text='.urlencode($text).'&priority=ndnd&stype=normal');		 
// $chs = curl_init('http://203.212.70.200/smpp/sendsms?username=glazegalway&password=del12345&to=9999695537&from=SECAPP&text='.urlencode($text));		 
// curl_setopt($chs, CURLOPT_CUSTOMREQUEST, "GET");
// curl_setopt($chs, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($chs, CURLOPT_HTTPHEADER, array("Content-Type", "application/json" ));
// $results = curl_exec($chs);



							
							}
							else
							{
							$param1 = "<h2>ERROR</h2>";
							
							}
							$this->index(null , $param1 ,null);
	
							
						}
	
				}else{
					redirect('Quickwork');
				}
			  }

			}

		 
	}

?>
