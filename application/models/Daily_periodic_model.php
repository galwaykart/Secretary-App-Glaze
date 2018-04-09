<?php

	class Daily_periodic_model extends CI_model{
		
		public function insertdaily($data){
		
			$result = $this->db->insert('daily_periodic', $data[0]);	
			if($result){
			$insert_id = $this->db->insert_id();
			$delegates_name = $data[1]['daily_periodic_delegates_name'];
			$delegates_email = $data[1]['daily_periodic_delegates_email'];
			$delegates_phone = $data[1]['daily_periodic_delegates_phone_number'];
			$totalname = sizeof($delegates_name);
			for($i=0;$i<$totalname;$i++) {
				$insertdelegate_to = $delegates_name[$i];
				$insertemail = $delegates_email[$i];
				$insertphone = $delegates_phone[$i];
				$sql = "insert into daily_periodic_delegates(daily_periodic_id,daily_periodic_delegates_name,daily_periodic_delegates_email,daily_periodic_delegates_phone_number)
						values('$insert_id','$insertdelegate_to','$insertemail','$insertphone')";
				//print_r($sql);die;
				$this->db->query($sql);
				}
		  }
		}
		
		public function get_periodic_task(){
			$user_id = $this->session->userdata['id'];
		    $this->db->select('*');
			$this->db->from('daily_periodic');
			//$this->db->where("user_id", $user_id);
			$query = $this->db->get();
			return $query->result();
		}
		
		public function view_periodic_task($id){
			$user_id = $this->session->userdata['id'];
		    $this->db->select('*');
			$this->db->from('daily_periodic');
			$this->db->where('daily_periodic_id',$id);
			//$this->db->where("user_id", $user_id);
			$query = $this->db->get();
			return $query->result();
		}
    }
    

    
	
?>