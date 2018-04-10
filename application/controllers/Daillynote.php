<?php

	class Daillynote extends CI_Controller 
	{
		public $user_id ="";
		public function __construct(){
				parent::__construct();
					$this->load->helper('url'); 
					$this->load->library('session');
					$this->load->model('Daillynote_model');
					$this->load->library(array('session', 'form_validation'));
					$this->load->library("pagination");
					$this->load->library('email');
					if($this->session->user == 'logged_in'){
						$this->user_id = $this->session->userdata['id'];
						}

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
					$page = 0;
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

			 $record_id =$this->uri->segment(3); 
			 $this->form_validation->set_rules('task','Task Name','trim|required');
			 $this->form_validation->set_rules('task_type','Task Type','trim|required');
			 $this->form_validation->set_rules('Department','Dept. Name','trim|required');
			 $this->form_validation->set_rules('date','date','trim|required');
			 $this->form_validation->set_rules('target_date','Target Date','trim|required');
			 $this->form_validation->set_rules('delegate','Delegated To','trim|required');
			 $this->form_validation->set_rules('email_to','Email','trim|required|valid_email');
			 $this->form_validation->set_rules('secretary_name','Name Of Secretary','trim|required');
			 $this->form_validation->set_rules('confidential','confidentiality','trim|required');
			 $this->form_validation->set_rules('mysitting','Seating','trim|required');
			 $this->form_validation->set_rules('priority','priority','trim|required');
			 $this->form_validation->set_rules('venue', 'venue', 'trim|required');
			 $this->form_validation->set_rules('comm_medium','Cummunication','trim|required');
			 $this->form_validation->set_rules('seat_cont','Number of seats','required|regex_match[/^[0-9]{1}$/]');
			 $this->form_validation->set_rules('deiver_cont','Number of drivers','required|regex_match[/^[0-9]{1}$/]');
			 $this->form_validation->set_rules('car_cont','Number of Car','required|regex_match[/^[0-9]{1}$/]');
			 $this->form_validation->set_rules('notes','Notes','trim|required');

			 $this->form_validation->set_rules('part_dept[]','Dept.','trim|required');
			 $this->form_validation->set_rules('Employee[]','Employee Type','trim|required');
			 $this->form_validation->set_rules('parti_name[]','Name of Paticipants','trim|required');
			 $this->form_validation->set_rules('parti_email[]','Email','trim|required|valid_email');


			 
			//  $this->form_validation->set_rules('venue', 'venue', 'trim|required|valid_email');
			//  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[15]');
			//  $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]');
			//  $this->form_validation->set_rules('phonenumber', 'Mobile Number ','required|regex_match[/^[0-9]{10}$/]'); //{10} for 10 digits number
			//  $this->form_validation->set_rules('type','Type','trim|required');
			//  $this->form_validation->set_rules('type','Type','trim|required');


			
			if($this->form_validation->run() == false)
			{
				$this->daillynote_view();
			}else{
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
						'user_id'=>$this->user_id,
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
						$submail = $this->input->post('submail');
						if($submail){
							
						/* ...........................Mail sending start here!.......................................*/

						$mail_to = implode(",",$data[1]['email']);
						$config = array (
						'mailtype' => 'html',
						'charset'  => 'utf-8',
						'priority' => '1'
						);
						$this->email->initialize($config);
						$this->email->set_newline("\r\n");
						$this->email->from('gaurav.gupta0705@gmail.com', 'Gaurav');
						$data_quick["mail_data"] = $data;
						$this->email->to($mail_to);

						$this->email->subject('Dailnotes');

						$body = $this->load->view('email_template/dailynotes.php',$data_quick,TRUE);

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
						$result =$this->Daillynote_model->addDailyNotes($data);
						if($result)
						{
						$param1 =  "<h2>Success</h2>";

						/* ...........................Mail sending start here!.......................................*/

						$mail_to = implode(",",$data[1]['email']);
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

						$this->email->subject('Dailnotes');

						$body = $this->load->view('email_template/dailynotes.php',$data_quick,TRUE);

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
			}



				
				// }else {
				// 	echo "no request made with post method";
				// }
				

			}
		


		 
	}

?>
