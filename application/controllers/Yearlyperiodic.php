<?php

	class Yearlyperiodic extends CI_Controller 
	{
		public $user_id ="";	 

			public function __construct(){
				parent::__construct();
					$this->load->helper('url'); 
					$this->load->library('session');
					$this->load->model('Yearly_periodic_model');
					$this->load->library("pagination");
					$this->load->library(array('session', 'form_validation'));
					$this->load->library('email');
					if($this->session->user == 'logged_in'){
						$this->user_id = $this->session->userdata['id'];
						}

		}
		
		public function index($year=''){
			if($this->session->user == 'logged_in'){
			$config = array();
			if($year ==''){
				$year = date('20y');  // 20y means selected year			 
			}
		    $data['year']=  $year;
	        $config["base_url"] = base_url() ."yearlyperiodic/index/$year ";
		    $config["total_rows"] = $this->Yearly_periodic_model->record_count($year);
            $config["per_page"] = 10;
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
		  if($this->uri->segment(3)){
		  $this->form_validation->set_rules('end_date','End Date ','trim|required');
		  $this->form_validation->set_rules('note[]','Note ','trim|required');
		  $this->form_validation->set_rules('date[]','Date ','trim|required');
		 }else{
		 $this->form_validation->set_rules('start_date','Start Date ','trim|required');
		 $this->form_validation->set_rules('task','Task ','trim|required');
		 //$this->form_validation->set_rules('end_date','End Date ','trim|required');
		 $this->form_validation->set_rules('remark','Remark','trim|required');
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
			//echo $record_id;die;
			$data = array();
			$end_date = '2050-01-01';
			$data[0] = array(
			'yearly_periodic_start_date'=>$this->input->post('start_date'),
			// 'yearly_periodic_end_date'=>$this->input->post('end_date'),
			'yearly_periodic_end_date'=>$end_date,
			'yearly_periodic_task_name'=>$this->input->post('task'),
			'yearly_periodic_remark'=>$this->input->post('remark'),
			'yearly_periodic_status'=>$this->input->post('status'),
			'yearly_periodic_month'=>$this->input->post('month'),
			'user_id'=>$this->user_id,

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
			$this->session->set_flashdata('msg', 'Updated Successfully!!!');
			redirect('yearlyperiodic/');
			}
			else{
			$this->Yearly_periodic_model->insertyear($data);
			$this->session->set_flashdata('msg', 'Saved Successfully!!!');
									/* ...........................Mail sending start here!.......................................*/

									$mail_to = implode(",",$data[1]['yearly_periodic_delegates_email']);
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
			
									$this->email->subject('Yearly Periodic Task');
			
									$body = $this->load->view('email_template/yearlyPeriodic.php',$data_quick,TRUE);
			
									$this->email->message($body);
			
									$this->email->send();
			
			/* ...........................Mail sending end here!................................................*/
			
			redirect('yearlyperiodic');
			}
		  }
		}
		
		public function changeStatus(){

			if(isset($_GET["id"])){
				$id = $_GET["id"];
				$status = $_GET["status"];
				$end_date = $_GET["end_date"];
				
				if($status == "false"){
					$this->Yearly_periodic_model->changeStatus($id ,$status,$end_date);
					//$sql = "UPDATE PAGE SET status='0' WHERE ID = $id";
				}
				else{
					$this->Yearly_periodic_model->changeStatus($id ,$status,$end_date);
					//$sql = "UPDATE PAGE SET status='1' WHERE ID = $id"; 
				}
			}
					}
					 
	}
?>	
		