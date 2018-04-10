<?php

	class Schedule_model extends CI_model{
		
		public function yearly($data){
			 $date  = strtotime($data);
			 $day   = date('d',$date);  
			 $month = date('m',$date);
			 $year  = date('Y',$date); 
			 
			 $this->db->select('*');
			 $this->db->from('yearly_periodic');
			 $this->db->where('Day(yearly_periodic_end_date) >=',$day);
			 $this->db->where('Month(yearly_periodic_end_date) >=',$month);
			 $this->db->where('Year(yearly_periodic_end_date) >=',$year); 
			 $query = $this->db->get(); 	
			 return $query->result();
			 
		} 
		 
		public function monthly($data){
			 $date  = strtotime($data);
			 $day   = date('d',$date);  
			 $month = date('m',$date);
			 $year  = date('Y',$date); 
			 
			 $this->db->select('*');
			 $this->db->from('monthly_periodic');
			 $this->db->where('Day(monthly_periodic_end_date) >=',$day);
			 $this->db->where('Month(monthly_periodic_end_date) >=',$month);
			 $this->db->where('Year(monthly_periodic_end_date) >=',$year); 
			 $query = $this->db->get(); 	
			 return $query->result();
			 
		} 
		 
		public function weekly($data){
			 $date  = strtotime($data);
			 $day   = date('d',$date);  
			 $month = date('m',$date);
			 $year  = date('Y',$date); 
			 
			 $this->db->select('*');
			 $this->db->from('weekly_periodic');
			 $this->db->where('Day(weekly_periodic_end_date) >=',$day);
			 $this->db->where('Month(weekly_periodic_end_date) >=',$month);
			 $this->db->where('Year(weekly_periodic_end_date) >=',$year); 
			 $query = $this->db->get(); 	
			 return $query->result();
			 
		} 
		 
	}
	 