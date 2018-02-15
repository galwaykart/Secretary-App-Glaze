<?php
class User_model extends CI_model{



public function register_user($user){

	$this->db->insert('user', $user);

	}

public function login_user($username,$pass){
 
	  $this->db->select('*');
	  $this->db->from('user');
	  $this->db->where('username',$username);
	  $this->db->where('password',$pass);

	  if($query = $this->db->get())
	  {
		  return $query->row_array();
	  }
	  else{
		return false;
	  }


	}
public function username_check($username){

	  $this->db->select('*');
	  $this->db->from('user');
	  $this->db->where('username',$username);
	  $query=$this->db->get();

	  if($query->num_rows()>0){
		return false;
	  }else{
		return true;
	  }

	}
public function get_userlist(){
	
		$this->db->select("*"); 
		$this->db->from('user');
		$query = $this->db->get();
		return $query->result();

       }
	   public function get_meeting_status(){
		$this->db->select('*');
		$this->db->from('index_meeting');
		$this->db->join('index_meeting_participants','index_meeting.index_meeting_id=index_meeting_participants.index_meeting_id');
		$query = $this->db->get();
		return $query->result();

	   }
	   
public function get_meeting(){
		$this->db->select("*"); 
		$this->db->from('index_meeting');
		$this->db->join('index_meeting_participants','index_meeting.index_meeting_id=index_meeting_participants.index_meeting_id','right');
		$this->db->where('index_meeting_participants.index_meeting_id','102');
		$query = $this->db->get();
		return $query->result();
		}

	}


?>
