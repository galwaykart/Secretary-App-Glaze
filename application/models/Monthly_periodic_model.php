<?php
	class Monthly_periodic_model extends CI_model{
		 
		 public function insertmonthly($data){
		
		 $result = $this->db->insert('monthly_periodic', $data[0]);
		 
			if($result){
			$insert_id = $this->db->insert_id();
			$delegates_name = $data[1]['monthly_periodic_delegates_name'];
			$delegates_email = $data[1]['monthly_periodic_delegates_email'];
			$totalname = sizeof($delegates_name);
			for($i=0;$i<$totalname;$i++) {
				$insertdelegate_to = $delegates_name[$i];
				$insertemail = $delegates_email[$i];
			
				$sql = "insert into monthly_periodic_delegates(monthly_periodic_id,monthly_periodic_delegates_name,monthly_periodic_delegates_email)
						values('$insert_id','$insertdelegate_to','$insertemail')";
				//print_r($sql);die;
				$this->db->query($sql);
			}
		
			$status_date = $data[2]['monthly_periodic_status_date'];
			$status_note = $data[2]['monthly_periodic_status_note'];
			$totalname1 = sizeof($status_note);
			for($i=0;$i<$totalname1;$i++) {
				$insertstatus_date = $status_date[$i];
				$insertstatus_note = $status_note[$i];
				$sql1 = "insert into monthly_periodic_status(monthly_periodic_id,monthly_periodic_status_date,monthly_periodic_status_note)
						 values('$insert_id','$insertstatus_date','$insertstatus_note')	";
				print_r($sql1);die;
				$this->db->query($sql1);	 
			  }
			}
			
		 }
		 
		 public function getmonthly(){
			$this->db->select('*');
			$this->db->from('monthly_periodic');
			$this->db->where('monthly_periodic_status', "1");
            $this->db->order_by('MONTH(monthly_periodic_end_date)');
			//$this->db->where('MONTH(monthly_periodic_end_date)',2);
			$query = $this->db->get();
		   // print_r($query->result()); 	
			return $query->result();
		 }
		 
		 public function get_periodic_task($id){
			 $this->db->select('*');
			 $this->db->from('monthly_periodic');
			 $this->db->join('monthly_periodic_delegates',' monthly_periodic.monthly_periodic_id = monthly_periodic_delegates.monthly_periodic_id');
			 $this->db->where('monthly_periodic.monthly_periodic_id',$id);
			 $query = $this->db->get();
		//print_r($query->result()); 
			return $query->result();
		 }
	}

	?>