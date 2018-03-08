<?php

	class Monthlyperiodic extends CI_Controller 
	{
	 
		public function __construct(){
				parent::__construct();
					$this->load->helper('url'); 
					$this->load->library('session');
					$this->load->model('Monthly_periodic_model');
					$this->load->library(array('session', 'form_validation'));
		} 
			 
		public function index(){  
			if($this->session->user == 'logged_in'){ 
			
				$data['fetch'] = $this->Monthly_periodic_model->getmonthly();
				$this->load->view('monthly-periodic',$data); 
			}else{
				$this->load->view("login");
			}
		}
		
		public function view(){   
			if($this->session->user == 'logged_in'){
				$id = $this->uri->segment(3);
				$data['list'] = $this->Monthly_periodic_model->get_periodic_task($id);
				$this->load->view("monthly-periodic-view",$data); 
			}else{
				$this->load->view("login");
			}
		}
		
		public function add_data(){
			$data = array();
			$data[0] = array(
			'monthly_periodic_time'=>$this->input->post('monthly_periodic_time'),
			'monthly_periodic_work'=>$this->input->post('work'),
			'monthly_periodic_end_date'=>$this->input->post('end_date'),
			'monthly_periodic_status'=>$this->input->post('status'),
			'monthly_periodic_remark'=>$this->input->post('remark')
			);
			$data[1] = array(
			'monthly_periodic_delegates_name'=>$this->input->post('delegate_to'),
			'monthly_periodic_delegates_email'=>$this->input->post('email'),
			);
			$data[2] = array(
			'monthly_periodic_status_date'=>$this->input->post('date'),
			'monthly_periodic_status_note'=>$this->input->post('note'),

			);
			//print_r($data[2]);die;
			$this->Monthly_periodic_model->insertmonthly($data);
			redirect('Monthlyperiodic');
		}
		 
	}

?>
