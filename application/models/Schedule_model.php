<?php

	class Schedule_model extends CI_model{
		
		public function yearly($data){
			$date = strtotime($data);
			$dt = new DateTime($data);
			$today = $dt->format('Y-m-d');
			 
			 $this->db->select('*');
			 $this->db->from('yearly_periodic');
			 $this->db->where('yearly_periodic_end_date	 >=',$today);  
			 $query = $this->db->get(); 	
			 return $query->result();
			 
		} 
		 
		public function monthly($data){
			$date = strtotime($data);
			$dt = new DateTime($data);
			$today = $dt->format('Y-m-d');
			 
			 $this->db->select('*');
			 $this->db->from('monthly_periodic');
			 $this->db->where('monthly_periodic_end_date >=',$today);  
			 $query = $this->db->get(); 	
			 return $query->result();

			 
		} 
		 
		public function weekly($data){
			$date = strtotime($data);
			$dt = new DateTime($data);
			$today = $dt->format('Y-m-d');
			 
			 $this->db->select('*');
			 $this->db->from('weekly_periodic');
			 $this->db->where('weekly_periodic_end_date >=',$today);  
			 $query = $this->db->get(); 	
			 return $query->result();			 
		} 
		 
		public function reminderhourly($data){
			 $date  = strtotime($data);
			 $hour   = date('h',$date); 
			 $day   = date('d',$date);  
			 $month = date('m',$date);
			 $year  = date('Y',$date); 
			 
			 $this->db->select('*');
			 $this->db->from('reminder_sheet');
			 $this->db->where('Hour(reminder_sheet_start_time) >=',$hour); 
			 $query = $this->db->get(); 	
			 return $query->result();
			 
		} 
		
		 
		public function reminderdaily($data){
			 $date  = strtotime($data);
			 $hour   = date('h',$date); 
			 $day   = date('d',$date);  
			 $month = date('m',$date);
			 $year  = date('Y',$date); 
			 
			 $this->db->select('*');
			 $this->db->from('reminder_sheet'); 
			 $this->db->where('Day(reminder_sheet_start_time) >=',$day); 
			 $query = $this->db->get(); 	
			 return $query->result();
			 
		} 
		 
		public function reminderweekly($data){
			 $date  = strtotime($data);
			 $hour   = date('h',$date); 
			 $day   = date('d',$date);  
			 $month = date('m',$date);
			 $year  = date('Y',$date); 
			 
			 $this->db->select('*');
			 $this->db->from('reminder_sheet'); 
			 $this->db->where('Day(reminder_sheet_start_date) >=',$day); 
			 $this->db->where('Month(reminder_sheet_start_date) >=',$month); 
			 $query = $this->db->get(); 	
			 return $query->result();
			 
		}
		public function remindermonthly($data){
			 $date  = strtotime($data);
			 $hour   = date('h',$date); 
			 $day   = date('d',$date);  
			 $month = date('m',$date);
			 $year  = date('Y',$date); 
			 
			 $this->db->select('*');
			 $this->db->from('reminder_sheet'); 
			 $this->db->where('Month(reminder_sheet_start_date) >=',$month); 
			 $query = $this->db->get(); 	
			 return $query->result();
			 
		}

		public function indexMeeting($data){
			$date = strtotime($data);
			$dt = new DateTime($data);
			$today = $dt->format('Y-m-d');
			//echo $today."<br>";

			// $hour   = date('h',$date); 
			//echo $hour;
			// $day   = date('d',$date);  
			// $month = date('m',$date);
			// $year  = date('Y',$date); 
			
			$this->db->select('*');
			$this->db->from('index_meeting'); 
			$this->db->where('date_of_meeting >=',$today); 
			$this->db->where('agenda_status =',1); 
			$query = $this->db->get(); 	
			return $query->result();
		}
		
		public function appointment($data){
			$date = strtotime($data);
			$dt = new DateTime($data);
			$today = $dt->format('Y-m-d');
			
			$this->db->select('*');
			$this->db->from('appointment'); 
			$this->db->where('appointment_start_time >=',$today); 
			$this->db->where('appointment_active =',1);
			$this->db->where('appointment_status =',4);  
			$query = $this->db->get(); 	
			return $query->result();
			
	   }


	   public function projectDelegation($data){
		$date = strtotime($data);
		$dt = new DateTime($data);
		$today = $dt->format('Y-m-d');
		
		$this->db->select('*');
		$this->db->from('project_delegation'); 
		$this->db->where('project_delegation_followup_date >=',$today);  
		$query = $this->db->get(); 	
		return $query->result();
		
   }

   public function remindersheet($data , $frequency){
	$date = strtotime($data);
	$dt = new DateTime($data);
	$today = $dt->format('Y-m-d');
	
	$this->db->select('*');
	$this->db->from('reminder_sheet'); 
	$this->db->where('reminder_sheet_frequency	 =',$frequency);  
	$this->db->where('reminder_sheet_end_date	 >=',$today);  
	$this->db->where('reminder_sheet_status	 =',1);
	$query = $this->db->get(); 	
	return $query->result();
	
}

   
	}
	 