<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projectdelegation extends CI_Controller {
    	public function __construct(){
				parent::__construct();
					$this->load->helper('url'); 
					$this->load->library('session');
					$this->load->model('Projectdelegation_model');
					$this->load->library(array('session', 'form_validation'));
		}
		public function index()
		{
			
			if($this->session->user == 'logged_in'){	
					$this->load->view('project_delegation');
					
				}else{
					$this->load->view("login");
				}
		} 		
		public function view()
		{
			
			if($this->session->user == 'logged_in'){	
					$this->load->view('project-delegation-view');
					
				}else{
					$this->load->view("login");
				}
		} 
}
