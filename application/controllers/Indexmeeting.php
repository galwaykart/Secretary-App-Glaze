<?php

	class Indexmeeting extends CI_Controller 
	{
		public $user_id ="";
		public function __construct(){
				parent::__construct();
					$this->load->helper('url'); 
					$this->load->library('session');
					$this->load->model('Indexmeeting_model');
					$this->load->library("pagination");
					$this->load->library(array('session', 'form_validation'));
					$this->load->library('email');
					if($this->session->user == 'logged_in'){
						$this->user_id = $this->session->userdata['id'];
						}

					
		} 
			 
		public function index(){  
			if($this->session->user == 'logged_in'){
				$config = array();
				
					  $config["base_url"] = base_url() ."indexmeeting/index";
			
					  $config["total_rows"] = $this->Indexmeeting_model->record_count();

					  $config["per_page"] = 10;
				
					  $config["uri_segment"] = 3;
					  $this->pagination->initialize($config);
					  $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
				
					  $data1['meeting'] = $this->Indexmeeting_model->get_allmeeting($config["per_page"], $page);
				
					  $data1["links"] = $this->pagination->create_links();
				
				//$aid=$this->uri->segment(3);
				//$data1['meeting'] = $this->Indexmeeting_model->get_allmeeting();
				     $this->load->view('meeting-in-progress',$data1);
			}else{
				$this->load->view("login");
			}
			
	}  	 

		public function mettings_status(){  
			if($this->session->user == 'logged_in'){
				$url_id = $this->uri->segment(3);
				$config = array();
					  $config["base_url"] = base_url() ."indexmeeting/mettings_status/$url_id";
				
					  $config["total_rows"] = $this->Indexmeeting_model->record_counting($url_id);
				
					  $config["per_page"] = 10;
				
					  $config["uri_segment"] = 4;
					  $this->pagination->initialize($config);
					  $page = ($this->uri->segment(4)) ? $this->uri->segment(4) :	0;
				
					  $data['list'] = $this->Indexmeeting_model->get_meeting_status($config["per_page"], $page,$url_id);
				
					  $data["links"] = $this->pagination->create_links();
			//get data with id from database
			//echo $url_id;
			//$data['list'] = $this->Indexmeeting_model->get_meeting_status($url_id);
			$this->load->view('mettings-progress-status',$data);
			}else{
				$this->load->view("login");
			}

		}   	 
		
		public function metting_info(){ 

			if($this->session->user == 'logged_in'){
			  if($this->uri->segment(3)){
				$id= $this->uri->segment(3);
				//print_r($id);
				$data['fetch'] = $this->Indexmeeting_model->get_meeting($id);
				if(!$data['fetch']){
					redirect('Indexmeeting/metting_info');
				}
	
				$this->load->view('metting-info',$data);

			  }
				else{
				$data['fetch'] = array();
				$this->load->view('metting-info',$data);
				}
			}else{
				$this->load->view("login");
			}
				
		} 
			
	public function insert_meeting(){ 
		// $this->form_validation->set_rules('previous_date','Previous Meeting Date ','trim|required');
		 $this->form_validation->set_rules('index_meeting_next_date','Next Meeting Date ','trim|required');
		 $this->form_validation->set_rules('index_meeting_start_time','Start Time','trim|required');
		 $this->form_validation->set_rules('index_meeting_end_time','End Time','trim|required');
		 $this->form_validation->set_rules('meeting_called_by','Meeting Called By','trim|required');
		 $this->form_validation->set_rules('agenda','agenda ','trim|required');
		 $this->form_validation->set_rules('department[]','department ','trim|required');
		 $this->form_validation->set_rules('name[]','Name ','trim|required');
		 $this->form_validation->set_rules('phone_number[]','Phone Number ','trim|required');
		 $this->form_validation->set_rules('email[]', 'Email', 'trim|required|valid_email');
		 $this->form_validation->set_rules('conclusion_textarea[]', 'Textarea', 'trim|required');
		 $this->form_validation->set_rules('targetdate[]', 'Target Date', 'trim|required');
		 $this->form_validation->set_rules('delegated_dept[]', 'Delegate', 'trim|required');
	      if($this->form_validation->run() == false)
		  {
			$this->load->view('metting-info');
		  }
		  else{
		$record_id =$this->uri->segment(3);  
		$data=array();
		$data[0] = array(
		 'date_of_meeting'=>$this->input->post('previous_date'),
		 //'agenda_id'=>$this->input->post('agenda'),
	     'confidentiality'=>$this->input->post('confidentiality'),
	     'self_seating'=>$this->input->post('seating'),
	     'index_meeting_next_date'=>$this->input->post('index_meeting_next_date'),
	     'index_meeting_start_time'=>$this->input->post('index_meeting_start_time'),
		 'index_meeting_end_time'=>$this->input->post('index_meeting_end_time'),
		 'meeting_called_by'=>$this->input->post('meeting_called_by'),
		 'user_id'=>$this->user_id,
		);
		$data[1] = array(
		
		 'name'=>$this->input->post('name'),
		 'department'=>$this->input->post('department'),
		 'email'=>$this->input->post('email'),
		 'employee'=>$this->input->post('employee'),
		 'is_employee'=>$this->input->post('is_employee'),
		 'phone_number'=>$this->input->post('phone_number')
		 );
		$data[2] = array(
		 
		 'conclusion_type'=>$this->input->post('conclusion_type'),
		 'conclusion_textarea'=>$this->input->post('conclusion_textarea'),
		 'targetdate'=>$this->input->post('targetdate'),
		 'delegated_dept'=>$this->input->post('delegated_dept'),
		 'delegated_name'=>$this->input->post('delegated_name'));

		$data[3]=array(
		  'agenda_name'=>$this->input->post('agenda')
		  );

		if($this->uri->segment(3)){
		   $this->Indexmeeting_model->updatemeeting($data , $record_id);
		   $this->session->set_flashdata('msg', 'Updated Successfully!!!');
		   $submail = $this->input->post('submail');
		   if($submail){
			   
		   /* ...........................Mail sending start here!.......................................*/

		   $mail_to = implode(",",$data[1]['email']);
		   $send_to = implode(",",$data[1]['phone_number']);
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

		   $this->email->subject('Index Meeting');

		   $body = $this->load->view('email_template/index_meeting.php',$data_quick,TRUE);

		   $this->email->message($body);

		   $this->email->send();

		   /* ...........................Mail sending end here!................................................*/

		   /*..............................sms send start here............................................ */
			$text="baba KIng singh gaurav ffupdate.";	 
			$chs = curl_init('http://203.212.70.200/smpp/sendsms?username=glazegalway&password=del12345&to='.$send_to.'&from=SECAPP&text='.urlencode($text).'&category=bulk');		 
			curl_setopt($chs, CURLOPT_CUSTOMREQUEST, "GET");
			curl_setopt($chs, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($chs, CURLOPT_HTTPHEADER, array("Content-Type", "application/json" ));
			$results = curl_exec($chs);
			print_r($results);
			/*..............................sms send end here............................................ */

		   }

			redirect('indexmeeting');
           }else{
           $this->Indexmeeting_model->form_insert($data,$this->input->post('agenda'));
		   $this->session->set_flashdata('msg', 'Saved Successfully!!!');
		   						/* ...........................Mail sending start here!.......................................*/

								   $mail_to = implode(",",$data[1]['email']);
								   $send_to = implode(",",$data[1]['phone_number']);
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
		   
								   $this->email->subject('Index Meeting');
		   
								   $body = $this->load->view('email_template/index_meeting.php',$data_quick,TRUE);
		   
								   $this->email->message($body);
		   
								   $this->email->send();
		   
		   /* ...........................Mail sending end here!................................................*/
/*..............................sms send start here............................................ */
$text="baba KIng singh gaurav ffinsert.";	 
$chs = curl_init('http://203.212.70.200/smpp/sendsms?username=glazegalway&password=del12345&to='.$send_to.'&from=SECAPP&text='.urlencode($text).'&category=bulk');		 
curl_setopt($chs, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($chs, CURLOPT_RETURNTRANSFER, true);
curl_setopt($chs, CURLOPT_HTTPHEADER, array("Content-Type", "application/json" ));
$results = curl_exec($chs);
print_r($results);
/*..............................sms send end here............................................ */

		   redirect('indexmeeting');
            }
		}
	}		
		public function get_agenda(){
			$keyword = $this->input->post('agenda');  
            $data['response'] = 'false'; //Set default response  
            $query = $this->Indexmeeting_model->getagenda($keyword); //Search DB  
            if(! empty($query) ) {  
            $data['response'] = 'true'; //Set response  
            $data['message'] = array(); //Create array  
			//$data['auto_com'] = array();
           			
            foreach( $query as $row )  
            {  
                $data['message'][] = array(   
                                        'id'=>$row->agenda_id, 
                                        'value' => $row->agenda_name,''  
                                     );  //Add a row to array  
            }
			
				//$data['auto_com'][] = $row->agenda_name;			
			}
			
        if('IS_AJAX')  
        {  
            echo json_encode($data); //echo json string if ajax request  
        }  
        else 
        {  
            $this->load->view('metting-info',$data); //Load html view of search results  
        }  		 
	}
	
		public function changeStatus(){

			if(isset($_GET["id"])){
				$id = $_GET["id"];
				$status = $_GET["status"];

				if($status == "false"){
					$this->Indexmeeting_model->changeStatus($id ,$status);
					//$sql = "UPDATE PAGE SET status='0' WHERE ID = $id";
				}
				else{
					$this->Indexmeeting_model->changeStatus($id ,$status);
					//$sql = "UPDATE PAGE SET status='1' WHERE ID = $id"; 
				}
			}
					}
}

?>
