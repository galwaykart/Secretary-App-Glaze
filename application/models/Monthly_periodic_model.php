<?php
	class Monthly_periodic_model extends CI_model{
		 
		 public function insertmonthly($data){
					
		 $result = $this->db->insert('monthly_periodic', $data[0]);
			if($result){
			$insert_id = $this->db->insert_id();
			$delegates_name = $data[1]['monthly_periodic_delegates_name'];
			$delegates_email = $data[1]['monthly_periodic_delegates_email'];
			$delegates_phone_number = $data[1]['phone_number'];
			$totalname = sizeof($delegates_name);
			for($i=0;$i<$totalname;$i++) {
				$insertdelegate_to = $delegates_name[$i];
				$insertemail = $delegates_email[$i];
				$insertphone = $delegates_phone_number[$i];
				$sql = "insert into monthly_periodic_delegates(monthly_periodic_id,monthly_periodic_delegates_name,monthly_periodic_delegates_email,phone_number)
						values('$insert_id','$insertdelegate_to','$insertemail','$insertphone')";
				print_r($sql);die;
				//$this->db->query($sql);
				}
			}
		 }
		 
		 public function getmonthly($month,$limit, $start){
			 $year = "2018".$month;
			 //echo $year;
			$user_id = $this->session->userdata['id'];
			 $this->db->select('*');
			 $this->db->from('monthly_periodic');
			 $this->db->where("DATE_FORMAT(monthly_start_date,'%Y%m') <=",$year);
			 $this->db->where("DATE_FORMAT(monthly_periodic_end_date,'%Y%m') >=",$year);
			//  $this->db->where('Month(monthly_start_date) <=',$month);
			//  $this->db->where('Month(monthly_periodic_end_date) >=',$month);
			//  $this->db->where('YEAR(monthly_start_date) <=',$year);
			//  $this->db->where('YEAR(monthly_periodic_end_date) >=',$year);
			 $this->db->where("user_id", $user_id);
			 $this->db->limit($limit, $start);
			 $query = $this->db->get();
		     //print_r($query->result()); 	
			 return $query->result();
		 }
		 
		 public function record_count($month){
			$year = "2018".$month;
			 $user_id = $this->session->userdata['id'];
			 $query =$this->db->where("DATE_FORMAT(monthly_start_date,'%Y%m') <=",$year)		 
			 ->where("DATE_FORMAT(monthly_periodic_end_date,'%Y%m') >=",$year)
			 ->where('user_id', $user_id)
			 ->get('monthly_periodic');
			 return $query ->num_rows();

			//print_r($query);die;
		 }
		 public function get_periodic_task($id){
			 $this->db->select('*');
			 $this->db->from('monthly_periodic');
			 //$this->db->join('monthly_periodic_delegates',' monthly_periodic.monthly_periodic_id = monthly_periodic_delegates.monthly_periodic_id');
			 $this->db->where('monthly_periodic_id',$id);
			 $data1 = $this->db->get();
    		//print_r($query->result()); 
			 $size =sizeof($data1->result());
			  if($size == 0){	
			   return false;
				 }
			 $this->db->select('*');
			 $this->db->from('monthly_periodic_delegates');
			 $this->db->where('monthly_periodic_id',$id);
			 $data2 = $this->db->get();
			 
			 $this->db->select('*');
			 $this->db->from('monthly_periodic_status');
			 $this->db->where('monthly_periodic_id',$id);
			 $data3 = $this->db->get();
			 
			 $list = array('data1'=>$data1->result(),
						   'data2'=>$data2->result(),
						   'data3'=>$data3->result(),
			 );
			return $list;
		 }
		 public function updatetask($data ,$record_id){
		    $this->db->delete("monthly_periodic_delegates", "monthly_periodic_id = $record_id");
		    $this->db->delete("monthly_periodic_status", "monthly_periodic_id = $record_id");

			$delegates_name = $data[1]['monthly_periodic_delegates_name'];
			$delegates_email = $data[1]['monthly_periodic_delegates_email'];
			$delegates_phone_number = $data[1]['phone_number'];
			$totalname = sizeof($delegates_name);
			for($i=0;$i<$totalname;$i++) {
			$insertdelegate_to = $delegates_name[$i];
			$insertemail = $delegates_email[$i];
			$insertphone = $delegates_phone_number[$i];
			
			$sql = "insert into monthly_periodic_delegates(monthly_periodic_id,monthly_periodic_delegates_name,monthly_periodic_delegates_email,phone_number)
					values('$record_id','$insertdelegate_to','$insertemail','$insertphone')";
			//	print_r($sql);die;
			$this->db->query($sql);
			}
			$status_date = $data[2]['monthly_periodic_status_date'];
			$status_note = $data[2]['monthly_periodic_status_note'];
			$totalname1 = sizeof($status_note);
			for($i=0;$i<$totalname1;$i++) {
			$insertstatus_date = $status_date[$i];
			$insertstatus_note = $status_note[$i];
			$sql1 = "insert into monthly_periodic_status(monthly_periodic_id,monthly_periodic_status_date,monthly_periodic_status_note)
					values('$record_id','$insertstatus_date','$insertstatus_note')	";
			//print_r($sql1);die;
			$this->db->query($sql1);	 
			  }
		 }
	}

	?>