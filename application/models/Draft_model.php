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
					// echo "eqwe"; die;
					$this->db->set('message', $DraftMessage);
					$this->db->where('user_id', $Usercode);
					$this->db->update('draft',$data);	
				}
				else{
					$this->db->insert('draft', $data);	
				}
		}
 
	}
	
?>