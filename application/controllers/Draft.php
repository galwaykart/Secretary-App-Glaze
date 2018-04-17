<?php

	class Draft extends CI_Controller 
	{  public $user_id ="";
			public function __construct(){
				parent::__construct();
					$this->load->helper('url'); 
					$this->load->library('session');
					$this->load->model('Draft_model'); 
								if($this->session->user == 'logged_in'){
				$this->user_id = $this->session->userdata['id'];
				}
					
		    }
		
		    public function index(){ 
				$DraftMessage = $this->input->post('DraftMessage');
				$data = array("DraftMessage" => $DraftMessage);
				$data = $this->Draft_model->index($data);	
		    }
			
			public function get_draft(){
				$data['list'] = $this->Draft_model->get_list();
				$this->load->view('footer',$data);
			}
	}
?>	
		