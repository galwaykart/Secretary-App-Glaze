<?php

	class Monthlyperiodic extends CI_Controller 
	{
		public $user_id ="";	 
	 
		public function __construct(){
				parent::__construct();
					$this->load->helper('url'); 
					$this->load->library('session');
					$this->load->model('Monthly_periodic_model');
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
					   $config["base_url"] = base_url() ."Monthlyperiodic/index/$month ";
					     
					   $config["total_rows"] = $this->Monthly_periodic_model->record_count($month);

					   $config["per_page"] = 10;
				
					   $config["uri_segment"] = 4;
					   $this->pagination->initialize($config);
					   $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
					   $data['fetch'] = $this->Monthly_periodic_model->getmonthly($month,$config["per_page"], $page);
					   $data["links"] = $this->pagination->create_links();

				//$data['fetch'] = $this->Monthly_periodic_model->getmonthly($month);
				$this->load->view('monthly-periodic',$data); 
			}else{
				$this->load->view("login");
			}
		}

		public function view(){   
			if($this->session->user == 'logged_in'){
				$id = $this->uri->segment(3);
				$data['list'] = $this->Monthly_periodic_model->get_periodic_task($id);
				if(!$data){
				$this->load->view("monthly-periodic-view",$data); 
				}
				$this->load->view("monthly-periodic-view",$data); 
			}else{
				$this->load->view("login");
			}
		}
		
		public function add_data(){
		if($this->uri->segment(3)){
		  $this->form_validation->set_rules('end_date','End Date ','trim|required');
		  $this->form_validation->set_rules('note[]','Note ','trim|required');
		  $this->form_validation->set_rules('date[]','Date ','trim|required');
		 }else{
		 $this->form_validation->set_rules('start_date','Start Date ','trim|required');
		 $this->form_validation->set_rules('end_date','End Date ','trim|required');
		 $this->form_validation->set_rules('remark','Remark','trim|required');
		 $this->form_validation->set_rules('monthly_periodic_time','Time','trim|required');
		 $this->form_validation->set_rules('work','Work','trim|required');
			}

		 if($this->form_validation->run() == false){
			//$this->load->view('yearly-periodic');
			if($this->uri->segment(3)){
				$this->view();
			}else{
				$this->index();
			}
			
		  }
		  else {
			$record_id =$this->uri->segment(3); 
			$data = array();
			$data[0] = array(
			//'monthly_periodic_time'=>$this->input->post('monthly_periodic_time'),
			'monthly_periodic_time' => date('H:i:s:a',strtotime($this->input->post('monthly_periodic_time'))),
			'monthly_periodic_work'=>$this->input->post('work'),
			'monthly_start_date'=>$this->input->post('start_date'),
			'monthly_periodic_end_date'=>$this->input->post('end_date'),
			'monthly_periodic_status'=>$this->input->post('status'),
			'monthly_periodic_remark'=>$this->input->post('remark'),
			'user_id'=>$this->user_id,

			);
			$data[1] = array(
			'monthly_periodic_delegates_name'=>$this->input->post('delegate_to'),
			'monthly_periodic_delegates_email'=>$this->input->post('email'),
			);
			$data[2] = array(
			'monthly_periodic_status_date'=>$this->input->post('date'),
			'monthly_periodic_status_note'=>$this->input->post('note'),

			);
			if($this->uri->segment(3)){
			$this->Monthly_periodic_model->updatetask($data , $record_id);
			$this->session->set_flashdata('msg', 'Updated Successfully!!!');
			redirect('Monthlyperiodic/');
			}
			else{
			$this->Monthly_periodic_model->insertmonthly($data);
			$this->session->set_flashdata('msg', 'Saved Successfully!!!');
/* ...........................Mail sending start here!.......................................*/

			$mail_to = implode(",",$data[1]['monthly_periodic_delegates_email']);
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

			$this->email->subject('Monthly Periodic Task');

			$body = $this->load->view('email_template/monthlyPeriodic.php',$data_quick,TRUE);

			$this->email->message($body);

			$this->email->send();

/* ...........................Mail sending end here!................................................*/

			redirect('Monthlyperiodic');
			}

		  }
		}
	}

?>
