<?php

	class Draft extends CI_Controller 
	{  
			public function __construct(){
				parent::__construct();
					$this->load->helper('url'); 
					$this->load->library('session');
					$this->load->model('Draft_model');   
		    }
		
		    public function index(){ 
				$DraftMessage = $this->input->post('DraftMessage');
				$data = array("DraftMessage" => $DraftMessage);
				$data = $this->Draft_model->index($data);	
		    }
	}
?>	
		