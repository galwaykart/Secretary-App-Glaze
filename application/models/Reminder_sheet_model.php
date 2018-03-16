<?php

	class Reminder_sheet_model extends CI_model{
		
		public function reminder_sheet($data){
		 $result = $this->db->insert('reminder_sheet', $data[0]);
		 if($result){
			$insert_id = $this->db->insert_id();
			$delegates_name = $data[1]['reminder_sheet_delegates_name'];
			$delegates_email = $data[1]['reminder_sheet_delegates_email'];
			$delegates_phone = $data[1]['reminder_sheet_delegates_phone'];
			$totalname = sizeof($delegates_name);
			for($i=0;$i<$totalname;$i++) {
				$insertdelegate_to = $delegates_name[$i];
				$insertemail = $delegates_email[$i];
				$insertphone = $delegates_phone[$i];
				$sql = "insert into reminder_sheet_delegates(reminder_sheet_id,reminder_sheet_delegates_name,reminder_sheet_delegates_email,reminder_sheet_delegates_phone)
						values('$insert_id','$insertdelegate_to','$insertemail','$insertphone')";
				//print_r($sql);die;
				$this->db->query($sql);
				}
		  }
		}
		
		public function get_reminder(){
		    $this->db->select('*');
			$this->db->from('reminder_sheet');
			$query = $this->db->get();
			return $query->result();
		}
		
		public function getreminderById($record_id){
			$this->db->select('*');
			$this->db->from('reminder_sheet');
			$this->db->join('reminder_sheet_delegates','reminder_sheet.reminder_sheet_id=reminder_sheet_delegates.reminder_sheet_id');
			$this->db->where('reminder_sheet.reminder_sheet_id',$record_id);
			$query = $this->db->get();
			return $query->result();
		}
	}
	
	
?>	