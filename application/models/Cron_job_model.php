<?php

	class Cron_job_model extends CI_model{
		
		public function get_reminder(){
			$user_id = $this->session->userdata['id'];
		    $this->db->select('*');
			$this->db->from('reminder_sheet');
			$this->db->where("user_id", $user_id);
			$query = $this->db->get();
			return $query->result();
		}
	}
	
?>	