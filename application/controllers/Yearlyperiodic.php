<?php

	class Yearlyperiodic extends CI_Controller 
	{
			public function __construct(){
				parent::__construct();
					$this->load->helper('url'); 
					$this->load->library('session');
					$this->load->model('Yearly_periodic_model');
					$this->load->library("pagination");
					$this->load->library(array('session', 'form_validation'));
		}
		
		public function index($year=''){
			if($this->session->user == 'logged_in'){
			$config = array();
			if($year==''){
		    $year=date('20y');
			}
		    $data['year']=  $year;
	        $config["base_url"] = base_url() ."yearlyperiodic/index/$year ";
		    $config["total_rows"] = $this->Yearly_periodic_model->record_count($year);
            $config["per_page"] = 1;
		    $config["uri_segment"] = 4;
			$this->pagination->initialize($config);
			$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
			$data['fetch'] = $this->Yearly_periodic_model->getyear($year,$config["per_page"], $page);				
			$data["links"] = $this->pagination->create_links();
			$this->load->view('yearly-periodic',$data); 
			}else{
				$this->load->view("login");
			}
		
		}
		
		public function view(){
			if($this->session->user == 'logged_in'){
			$id = $this->uri->segment(3);
			$data['list'] = $this->Yearly_periodic_model->get_periodic_task($id);
			$this->load->view("yearly-periodic-view",$data); 
			}else{
				$this->load->view("login");
			}	
		}
		
		public function add_data(){
			$record_id =$this->uri->segment(3); 
			
			$data = array();
			$data[0] = array(
			'yearly_periodic_start_date'=>$this->input->post('start_date'),
			'yearly_periodic_end_date'=>$this->input->post('end_date'),
			'yearly_periodic_task_name'=>$this->input->post('task'),
			'yearly_periodic_remark'=>$this->input->post('remark'),
			'yearly_periodic_status'=>$this->input->post('status'),
			'yearly_periodic_month'=>$this->input->post('month')
			);
			$data[1] = array(
			'yearly_periodic_delegates_name'=>$this->input->post('delegate_to'),
			'yearly_periodic_delegates_email'=>$this->input->post('email'),
			);
			$data[2] = array(
			'yearly_periodic_status_date'=>$this->input->post('date'),
			'yearly_periodic_status_note'=>$this->input->post('note'),

			);
			if($this->uri->segment(3)){
			$this->Yearly_periodic_model->updatetask($data , $record_id);
			redirect('yearlyperiodic/');
			}
			else{
			$this->Yearly_periodic_model->insertyear($data);
			redirect('yearlyperiodic');
			}

		}
		 
	}
?>	
		