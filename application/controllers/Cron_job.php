<?php

	class Cron_job extends CI_Controller 
	{
		public function __construct(){
				parent::__construct();
					$this->load->helper('url'); 
					$this->load->library('session');
				    $this->load->model('Cron_job_model');
					$this->load->library(array('session', 'form_validation'));
					$this->load->library("pagination");
					$this->load->library('email');
					$this->user_id = $this->session->userdata['id'];

		} 
		public function send_email(){

	    if($this->session->user == 'logged_in'){
			 $data['fetch'] = $this->Cron_job_model->get_reminder();
			 $reminder=array();
			 foreach($data['fetch'] as $list){
				$list->reminder_sheet_end_date;
			 }
			 $end_date = explode('-',$list->reminder_sheet_end_date);
			 
			 print_r( $end_date);
			 //$date = date("Y-m-d",strtotime("-7 days", strtotime($end_date)));
			 $todayDate = date('Y-m-d');
			 
			 }else{
				 $this->load->view("login");
			 }
		 	
		}
		
	}
	
?>