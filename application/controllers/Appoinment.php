<?php

	class Appoinment extends CI_Controller 
	{
		public $user_id ="";	
		public function __construct(){
				parent::__construct();
					$this->load->helper('url'); 
					$this->load->library('session');
					 $this->load->model('Appointment_model');
					$this->load->library(array('session', 'form_validation'));
					$this->load->library("pagination");
					if($this->session->user == 'logged_in'){
					$this->user_id = $this->session->userdata['id'];
					}
					$this->load->library('email');

		} 
			 
		public function index($param1 = NUll , $param3 = null , $param = Null){  
			if($this->session->user == 'logged_in'){	
				//$this->load->model('Quickwork_model');
				//echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
				$config = array();
				
					  $config["base_url"] = base_url() . "Appoinment/index";
				
					  $config["total_rows"] = $this->Appointment_model->record_count();
				
					  $config["per_page"] = 10;
				
					  $config["uri_segment"] = 3;
				
					  $this->pagination->initialize($config);
				
					if($param){
						$page = 0;
					}
					else{
						$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
					}	
				  
				
					  $data["records"] = $this->Appointment_model->getAppointmentList($config["per_page"], $page);
				
					  $data["links"] = $this->pagination->create_links();

					  $data["message"] = $param3;
				
					  $this->load->view("appoinment", $data);

				//$listOfData['records']	= $this->Appointment_model->getAppointmentList();
				//$this->load->view('appoinment',$listOfData);
				
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
			$this->form_validation->set_rules('date','date','trim|required');
			$this->form_validation->set_rules('task','task Name','trim|required');
			$this->form_validation->set_rules('target_date','Target date','trim|required');
			$this->form_validation->set_rules('remark', 'Remark', 'trim|required');
			$this->form_validation->set_rules('venue', 'venue', 'trim|required');
			$this->form_validation->set_rules('travel_time', 'Travel time', 'trim|required');
			$this->form_validation->set_rules('status', 'Status','required'); //{10} for 10 digits number
			$this->form_validation->set_rules('active','Active','trim|required');
	  
			
		   if($this->form_validation->run() == false)
			  {
				  $this->index();
			  }else{
//echo "gaurav";
$record_id =$this->uri->segment(3); 
// echo $record_id;
// print_r($this->uri);
// print_r(Sizeof($this->uri->segment(3)));
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//	echo "Hello I am gaurav";
	$this->load->model('Appointment_model');
	if($this->input->post('date') != null){
	$data = array();
	$data[0] = array(
		'appointment_start_time'=>$this->input->post('date'),
		'appointment_subject'=>$this->input->post('task'),
		'appointment_end_time'=>$this->input->post('target_date'),
		'appointment_remark'=>$this->input->post('remark'),
		'venue'=>$this->input->post('venue'),
		'appointment_travel_time'=>$this->input->post('travel_time'),
		'appointment_status'=>$this->input->post('status'),
		'appointment_active'=>$this->input->post('active'),
		'user_id'=>$this->user_id,
	   );

	   $data[1] = array(
		'delegates_name'=>$this->input->post('delegate_to'),
		'delegates_email'=>$this->input->post('delegate_email'),
		'delegates_phone'=>$this->input->post('delegate_phone'),
	   );

	  $contactList = "9999695537,7836984727";
		//print_r($data);
	
	//print_r($data[1]);
	if($this->uri->segment(3)){
		//echo "i am in updation of record";
		$result = $this->Appointment_model->updateAppointment($data , $record_id);
		if($result)	
		{
		$param1 =  "<h2>Successfully updated</h2>";
		$submail = $this->input->post('submail');
		if($submail){
			
/* ...........................Mail sending start here!.......................................*/

$mail_to = implode(",",$data[1]['delegates_email']);
$send_to = implode(",",$data[1]['delegates_phone']);
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

$this->email->subject('Appointment');

$body = $this->load->view('email_template/appointment.php',$data_quick,TRUE);
			
$this->email->message($body);

$this->email->send();

/* ...........................Mail sending end here!................................................*/
/*..............................sms send start here............................................ */
$text="baba KIng singh gaurav ffd.";	 
$chs = curl_init('http://203.212.70.200/smpp/sendsms?username=glazegalway&password=del12345&to='.$send_to.'&from=SECAPP&text='.urlencode($text).'&category=bulk');		 
curl_setopt($chs, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($chs, CURLOPT_RETURNTRANSFER, true);
curl_setopt($chs, CURLOPT_HTTPHEADER, array("Content-Type", "application/json" ));
$results = curl_exec($chs);
print_r($results);
/*..............................sms send end here............................................ */

		}
		
		}
		else
		{
		$param1 = "<h2>ERROR</h2>";
		
		}
		$this->index(null ,$param1 , $this->uri->segment(3));

		
	 }else{
		 //echo "i am in addition of record";
		 $result = $this->Appointment_model->addAppointment($data);
		 if($result)
		 {
		 $param1 =  "<h2>Success</h2>";
/* ...........................Mail sending start here!.......................................*/

$mail_to = implode(",",$data[1]['delegates_email']);
$send_to = implode(",",$data[1]['delegates_phone']);
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

$this->email->subject('Appointment');

$body = $this->load->view('email_template/appointment.php',$data_quick,TRUE);
			
$this->email->message($body);

$this->email->send();

/* ...........................Mail sending end here!................................................*/

/*..............................sms send start here............................................ */
$text="baba KIng singh gaurav ff.";	 
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
		redirect('appoinment');
	}
			  }
			
		}

		 
	}

?>
