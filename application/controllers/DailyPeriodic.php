<?php
//defined('BASEPATH') OR exit('No direct script access allowed');


class DailyPeriodic extends CI_Controller {
	public $user_id ="";	 

	public function __construct(){
		parent::__construct();
			$this->load->helper('url'); 
			$this->load->library('session');
			$this->load->model('Daily_periodic_model');
			$this->load->library("pagination");
			$this->load->library(array('session', 'form_validation'));
			$this->load->library('email');
			if($this->session->user == 'logged_in'){
				$this->user_id = $this->session->userdata['id'];
				}

		} 
	 
		public function index($day = ''){  
			if($this->session->user == 'logged_in'){ 

				 $this->load->view("daily-periodic");  
			}else{
				$this->load->view("login");
			}
		}

		public function view(){   
			if($this->session->user == 'logged_in'){
				$id = $this->uri->segment(3);
				$data['fetch'] = $this->Daily_periodic_model->view_periodic_task($id);
				$this->load->view("daily-periodic-view",$data);  
			}else{
				$this->load->view("login");
			}
		}
		public function add(){   
			if($this->session->user == 'logged_in'){
				$this->load->view("daily-periodic-add");  
			}else{
				$this->load->view("login");
			}
		}
		public function listpage(){   
			if($this->session->user == 'logged_in'){
				$data['fetch'] = $this->Daily_periodic_model->get_periodic_task();
				$this->load->view("daily-periodic-list",$data);  
			}else{
				$this->load->view("login");
			}
		}
		
		public function add_daily_periodic(){
			$record_id = $this->uri->segment(3);
			$status = $this->input->post('status');
			$data = array();
			$data[0] = array(
			'daily_periodic_day'=>$this->input->post('day'),
			'daily_periodic_start_date'=>$this->input->post('start_date'),
			'daily_periodic_time'=>$this->input->post('time'),
			'daily_periodic_end_date'=>'2050-01-01',
			'daily_periodic_task'=>$this->input->post('task'),
			'daliy_periodic_supervise'=>$this->input->post('supervise_by'),
			'daily_periodic_remark'=>$this->input->post('remark'),
			'daily_periodic_status'=>$this->input->post('status'),
			);
			$data[1] = array(		
			'daily_periodic_delegates_name'=>$this->input->post('delegate_to'),
			'daily_periodic_delegates_email'=>$this->input->post('email'),
			'daily_periodic_delegates_phone_number'=>$this->input->post('phone'),
			);
			
			if($this->uri->segment(3)){
			$this->Daily_periodic_model->update_daily_periodic($data , $record_id,$status);
			$this->session->set_flashdata('msg', 'Updated Successfully!!!');
			redirect('DailyPeriodic/listpage');
			}
			else{
			$this->Daily_periodic_model->insertdaily($data);
			$this->session->set_flashdata('msg', 'Saved Successfully!!!');
			redirect('DailyPeriodic/listpage');
			}
		}
 
}	
?>