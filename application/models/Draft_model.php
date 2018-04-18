<?php

	class Draft_model extends CI_model{
		
		public function index($data){
			$DraftMessage = $data['DraftMessage']; 
			$Usercode = $this->session->userdata['username']; 
			$data = array( "user_id" => $Usercode,
			                "message" => $DraftMessage);   
			$this->db->where('user_id',$Usercode);
			$query = $this->db->get('draft');	
				if ($query->num_rows() > 0){
					 //echo "eqwe"; die;
					$this->db->set('message', $DraftMessage);
					$this->db->where('user_id', $Usercode);
					$this->db->update('draft',$data);	
				}
				else{	 
					$this->db->insert('draft', $data);	
				}
		}
		
		public function get_list(){
			$user_id = $this->session->userdata['id'];
			$this->db->select('*'); 
			$this->db->from('draft');
			//$this->db->where("user_id", $user_id);
			$query = $this->db->get();
			//print_r($query->result());die;
			return $query->result();
		}
 
	}
	
?>