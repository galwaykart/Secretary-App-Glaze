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
			$this->load->library('email');
		} 
	
	public function index(){  
			if($this->session->user == 'logged_in'){
				//echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
				$this->dashboard(); 
			}else{
				 $this->load->view("login");
			}
	}  
	// to view signup page
	public function signUp() {  
			if($this->session->user == 'logged_in'){
			  if($this->uri->segment(3)){
				$id = $this->uri->segment(3);
				$data['list'] = $this->user_model->get_user($id);
				if(!$data['list']){
					redirect('User/signup');
				}
				//print_r($this->user_model->get_user($id));die;
				$this->load->view('signup',$data);

			  }
				else{	
				$data['list'] = array();
				$this->load->view('signup',$data);
				}
			}else{
				$this->load->view("login");
			}
		}
		
		
	// to view dashboard
	public function dashboard() {
			$data["dash_data"] = $this->user_model->getDashboardDetails(); 
			$this->load->view("dashboard" ,$data);  
		}
	 	 
			// get data 
	public function userlist() {
		if($this->session->user == 'logged_in'){
			$data['list'] = $this->user_model->get_userlist();
			$this->load->view("userlist",$data);
		}else{
			 $this->load->view("login");
		}
	}
		
	
	public function register_user(){
	   // validation data
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
			$this->signUp();	
			//$this->load->view('signup');
		}
		else{
			$record_id =$this->uri->segment(3);  
			//insert data
		  $user=array(
		  'username'=>$this->input->post('username'),
		  'firstname'=>$this->input->post('firstname'),
		  'lastname'=>$this->input->post('lastname'),
		  'email'=>$this->input->post('email'),
		  'password'=>md5($this->input->post('password')), 
		  'phonenumber'=>$this->input->post('phonenumber'),
		  'type'=>$this->input->post('type'),
		  //'status'=> $this->input->post('status'),
		 'status'=>($this->input->post('status')==active)?0:1,
			);  	

		  $data=array(
		  'firstname'=>$this->input->post('firstname'),
		  'lastname'=>$this->input->post('lastname'),
		  'email'=>$this->input->post('email'),
		  'password'=>md5($this->input->post('password')), 
		  'phonenumber'=>$this->input->post('phonenumber'),
		  'type'=>$this->input->post('type'),
		   'status'=>($this->input->post('status')==active)?0:1,
			); 

			// check username 
		 $username_check = $this->user_model->username_check($user['username']);
		 
		   if($this->uri->segment(3)){
			   $this->user_model->updateuser($data, $record_id);
			   $this->session->set_flashdata('msg', 'Updated Successfully!!!');
			   redirect('user/userlist');
		   }
			if($username_check){
			  $this->user_model->register_user($user);
			  $this->session->set_flashdata('msg', 'Registered successfully.Now login to your account.');
				/* ...........................Mail sending start here!.......................................*/
				/*..............................sms send start here............................................ */
				$text="baba KIng singh gaurav ff.";	 
				$chs = curl_init('http://203.212.70.200/smpp/sendsms?username=glazegalway&password=del12345&to=9999695537,7836984727&from=SECAPP&text='.urlencode($text).'&category=bulk');		 
				curl_setopt($chs, CURLOPT_CUSTOMREQUEST, "GET");
				curl_setopt($chs, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($chs, CURLOPT_HTTPHEADER, array("Content-Type", "application/json" ));
				$results = curl_exec($chs);
				print_r($results);
				/*..............................sms send end here............................................ */

		$mail_to = $user['email'];
		$config = array (
			'mailtype' => 'html',
			'charset'  => 'utf-8',
			'priority' => '1'
			);
			$this->email->initialize($config);
		$this->email->set_newline("\r\n");
		$this->email->from('gaurav.gupta0705@gmail.com', 'Gaurav');
		$data_quick["mail_data"] = $user;
		$this->email->to($mail_to);

		$this->email->subject('Welcome To Secretary App.');

		$body = $this->load->view('email_template/register.php',$data_quick,TRUE);
					
		$this->email->message($body);

		$this->email->send();

/* ...........................Mail sending end here!................................................*/

			  redirect('user/userlist');
			}else{
			  $this->session->set_flashdata('error_msg', 'User name Already Exist,please try again');
			  redirect('user/signup');
			}

		}
		
	}

	public function delete_id(){
	 $record_id =$this->uri->segment(3);  	
	 $this->user_model->delete_user($record_id);
	 $this->session->set_flashdata('msg', 'Deleted Successfully!!!');
	 redirect('user/userlist');
	}
  
	
	public function login_view(){

		if($this->session->user == 'logged_in'){
			$this->dashboard();
		}else{
			$this->load->view("login");
			 
		}
	}

	// login section

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
			$this->dashboard();;
		  }  
		  else 
		  {
			if($this->session->user == 'logged_in'){
				$this->dashboard();
			}else{ 
			 $this->session->set_flashdata('error_msg', 'Username or Password not valid.');   
			 $this->load->view("login");
			}
			// redirect('login');	
		
		  }
		}
	// logout section
	public function user_logout(){
	  $this->session->sess_destroy();
	  $this->session->set_flashdata('success_msg','You have been successfully logged out');
	 // redirect('user/login_view', 'refresh'); 
	   $this->load->view('login');

	}
}

?>
