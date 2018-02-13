<?php

class User extends CI_Controller 
{
 
public function __construct()
	{
        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('user_model');
            $this->load->library('session');
			$this->load->library(array('session', 'form_validation'));
} 
	


	public function index(){  
			if($this->session->user == 'logged_in'){
				$this->load->view("dashboard");
			}else{
				 $this->load->view("login");
			}
	}  
 
	public function signUp() {  
			if($this->session->user == 'logged_in'){
				$this->load->view("signup");
			}else{
				 $this->load->view("login");
			}
		}

		
	public function dashboard() {
			$this->load->view("dashboard"); 
		}
		
	public function register_user(){
		// validation 
	  $this->form_validation->set_rules('username','User Name','trim|required');
	  $this->form_validation->set_rules('firstname','First Name','trim|required');
	  $this->form_validation->set_rules('lastname','Last Name','trim|required');
	  $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
	  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[15]');
	  $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]');
	  $this->form_validation->set_rules('phonenumber', 'Mobile Number ','required|regex_match[/^[0-9]{10}$/]'); //{10} for 10 digits number
	  $this->form_validation->set_rules('type','Type','trim|required');

	  
	 if($this->form_validation->run() == false)
		{
			$this->load->view('signup');
		}
		else{
			//insert in database
		  $user=array(
		  'firstname'=>$this->input->post('firstname'),
		  'lastname'=>$this->input->post('lastname'),
		  'email'=>$this->input->post('email'),
		  'username'=>$this->input->post('username'),
		  'password'=>md5($this->input->post('password')), 
		  'phonenumber'=>$this->input->post('phonenumber'),
		  'type'=>$this->input->post('type')
			); 
			// check username 
		    $username_check = $this->user_model->username_check($user['username']);

			if($username_check){
			  $this->user_model->register_user($user);
			  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
			  redirect('user/userlist');

			} else{

			  $this->session->set_flashdata('error_msg', 'User name Already Exist,please try again');
			  redirect('user/signup');

			}

		}
	}

	public function login_view(){

		if($this->session->user == 'logged_in'){
			$this->load->view("dashboard");
		}else{
			$this->load->view("login");
			 
		}
	}

	

	function login_user(){ 
	  $user_login = array(

	  'username'=>$this->input->post('username'),
	  'password'=>md5($this->input->post('password'))

		);
		$data = $this->user_model->login_user($user_login['username'],$user_login['password']);
		  if($data)
		  {
			$this->session->set_userdata('id',$data['id']);
			$this->session->set_userdata('username',$data['username']);
			$this->session->set_userdata('firstname',$data['firstname']);
			$this->session->set_userdata('lastname',$data['lastname']); 
			$this->session->set_userdata('email',$data['email']); 
			$this->session->set_userdata('type',$data['type']); 
			$this->session->set_userdata('phonenumber',$data['phonenumber']);  
			$this->session->set_userdata('user','logged_in'); 
			$this->load->view('dashboard');

		  }  
			   
		  else 
		  {
			if($this->session->user == 'logged_in'){
				$this->load->view("dashboard");
			}else{ 
			 $this->session->set_flashdata('error_msg', 'Username or Password not valid.');   
			 $this->load->view("login");
			}
			// redirect('login');	
		
		  }
		}
	
	public function user_logout(){

	  $this->session->sess_destroy();
	  $this->session->set_flashdata('success_msg','You have been successfully logged out');
	 // redirect('user/login_view', 'refresh'); 
	   $this->load->view('login');

	}

				// get data
	public function userlist() {
		if($this->session->user == 'logged_in'){
			$this->data['list'] = $this->user_model->get_userlist();
			$this->load->view("userlist",$this->data);
		}else{
			 $this->load->view("login");
		}
	}
		 
}

?>
