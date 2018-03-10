<?php

	class Monthlyperiodic extends CI_Controller 
	{
	 
		public function __construct(){
				parent::__construct();
					$this->load->helper('url'); 
					$this->load->library('session');
					$this->load->model('Monthly_periodic_model');
					$this->load->library("pagination");
					$this->load->library(array('session', 'form_validation'));
		} 
			 
		public function index(){  
			if($this->session->user == 'logged_in'){ 
				// $config = array();
				
					  // $config["base_url"] = base_url() ."Monthlyperiodic/index";
					  
					  // $config["total_rows"] = $this->Monthly_periodic_model->record_count();
				
					  // $config["per_page"] = 1;
				
					  // $config["uri_segment"] = 3;
					  // $this->pagination->initialize($config);
					  // $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
					 // $data['fetch'] = $this->Monthly_periodic_model->getmonthly($config["per_page"], $page);
					  //$data["links"] = $this->pagination->create_links();

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
				if(!$data){
				$this->load->view("monthly-periodic-view",$data); 
				}
				$this->load->view("monthly-periodic-view",$data); 
			}else{
				$this->load->view("login");
			}
		}
		
		public function add_data(){
			$record_id =$this->uri->segment(3); 
			$data = array();
			$data[0] = array(
			//'monthly_periodic_time'=>$this->input->post('monthly_periodic_time'),
			'monthly_periodic_time' => date('H:i:s:a',strtotime($this->input->post('monthly_periodic_time'))),
			'monthly_periodic_work'=>$this->input->post('work'),
			'monthly_start_date'=>$this->input->post('start_date'),
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
			if($this->uri->segment(3)){
			$this->Monthly_periodic_model->updatetask($data , $record_id);
			redirect('Monthlyperiodic');
			}
			else{
			$this->Monthly_periodic_model->insertmonthly($data);
			redirect('Monthlyperiodic');
			}

		}
		 
	}

?>
