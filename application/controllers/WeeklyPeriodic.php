<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class WeeklyPeriodic extends CI_Controller {
	public $user_id ="";	 

	public function __construct(){
		parent::__construct();
			$this->load->helper('url'); 
			$this->load->library('session');
			$this->load->model('Weekly_periodic_model');
			$this->load->library("pagination");
			$this->load->library(array('session', 'form_validation'));
			$this->load->library('email');
			if($this->session->user == 'logged_in'){
				$this->user_id = $this->session->userdata['id'];
				}


} 
	 
public function index($month = ''){  
	if($this->session->user == 'logged_in'){ 
		 $config = array();
		   if($month==''){
			   $month=date('m');
		   }
			   $data['month']=  $month;
			   $config["base_url"] = base_url() ."WeeklyPeriodic/index/$month ";
				 
			   $config["total_rows"] = $this->Weekly_periodic_model->record_count($month);

			   $config["per_page"] = 2;
		
			   $config["uri_segment"] = 4;
			   $this->pagination->initialize($config);
			   $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
			   $data['fetch'] = $this->Weekly_periodic_model->getmonthly($month,$config["per_page"], $page);
			//    echo "<pre>";
		   	//    print_r($data['fetch']);	
			//    echo "</pre>";
			   $data["links"] = $this->pagination->create_links();

		//$data['fetch'] = $this->Weekly_periodic_model->getmonthly($month);
		$this->load->view('weekly-perodic-task',$data); 
	}else{
		$this->load->view("login");
	}
}

public function view(){   
	if($this->session->user == 'logged_in'){
		$id = $this->uri->segment(3);
		if($id){
			$data['list'] = $this->Weekly_periodic_model->get_periodic_task($id);
			// echo "<pre>";
			// print_r($data['list']);
			// echo "</pre>";
			if($data['list']){
			$this->load->view("weekly-perodic-task-view",$data); 
			}else{
				redirect('WeeklyPeriodic');
			}
			//$this->load->view("weekly-perodic-task-view",$data); 
		}else{
			redirect('WeeklyPeriodic');
		}
	}else{
		$this->load->view("login");
	}
}

public function add_data(){
	$record_id =$this->uri->segment(3); 
	
	
	$data = array();
	$data[0] = array(
	//'monthly_periodic_time'=>$this->input->post('monthly_periodic_time'),
	'weekly_periodic_time' => date('H:i:s:a',strtotime($this->input->post('weekly_periodic_time'))),
	'weekly_periodic_work'=>$this->input->post('work'),
	//'monthly_start_date'=>$this->input->post('start_date'),
	'weekly_periodic_end_date'=>$this->input->post('end_date'),
	'weekly_periodic_status'=>$this->input->post('status'),
	'weekly_periodic_remark'=>$this->input->post('remark'),
	'Day'=>$this->input->post('day'),
	'weekly_periodic_supervision'=>$this->input->post('supervision'),
	'user_id'=>$this->user_id,

	);
	$data[1] = array(
	'weekly_periodic_delegates_name'=>$this->input->post('delegate_to'),
	'weekly_periodic_delegates_email'=>$this->input->post('delegate_email'),
	'phone_number'=>$this->input->post('delegate_phone'),
	);
	$data[2] = array(
		'weekly_periodic_status_date'=>$this->input->post('status_date'),
		'weekly_periodic_status_note'=>$this->input->post('status_note'),
		);

	
	if($this->uri->segment(3)){
		//echo "updation";
		// echo "<pre>";
		// print_r($data);
		// echo "<pre>"; die;

		$this->Weekly_periodic_model->updatetask($data , $record_id);
		$this->session->set_flashdata('msg', 'Updated Successfully!!!');
		$submail = $this->input->post('submail');
		if($submail){
			
		/* ...........................Mail sending start here!.......................................*/

		$mail_to = implode(",",$data[1]['weekly_periodic_delegates_email']);
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

		$this->email->subject('Weekly Periodic Task');

		$body = $this->load->view('email_template/weeklyPeriodic.php',$data_quick,TRUE);

		$this->email->message($body);

		$this->email->send();

		/* ...........................Mail sending end here!................................................*/
			/*..............................sms send start here............................................ */
			$send_to = implode(",",$data[1]['phone_number']);
			$text="weekly perodic update gaurav test.";	 
			$chs = curl_init('http://203.212.70.200/smpp/sendsms?username=glazegalway&password=del12345&to='.$send_to.'&from=SECAPP&text='.urlencode($text).'&category=bulk');		 
			curl_setopt($chs, CURLOPT_CUSTOMREQUEST, "GET");
			curl_setopt($chs, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($chs, CURLOPT_HTTPHEADER, array("Content-Type", "application/json" ));
			$results = curl_exec($chs);
			print_r($results);
			/*..............................sms send end here............................................ */

		}
		redirect('WeeklyPeriodic/');
	}
	else{
		//echo "Insertion";
		
		$this->Weekly_periodic_model->insertweekly($data);
		$this->session->set_flashdata('msg', 'Saved Successfully!!!');

		//print_r($data);die;
/* ...........................Mail sending start here!.......................................*/

						$mail_to = implode(",",$data[1]['weekly_periodic_delegates_email']);
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

						$this->email->subject('Weekly Periodic Task');

						$body = $this->load->view('email_template/weeklyPeriodic.php',$data_quick,TRUE);

						$this->email->message($body);

						$this->email->send();

/* ...........................Mail sending end here!................................................*/
			/*..............................sms send start here............................................ */
			$send_to = implode(",",$data[1]['phone_number']);
			$text="weekly perodic update gaurav test.";	 
			$chs = curl_init('http://203.212.70.200/smpp/sendsms?username=glazegalway&password=del12345&to='.$send_to.'&from=SECAPP&text='.urlencode($text).'&category=bulk');		 
			curl_setopt($chs, CURLOPT_CUSTOMREQUEST, "GET");
			curl_setopt($chs, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($chs, CURLOPT_HTTPHEADER, array("Content-Type", "application/json" ));
			$results = curl_exec($chs);
			print_r($results);
			/*..............................sms send end here............................................ */
		
		redirect('WeeklyPeriodic');
	}

} 
}
?>